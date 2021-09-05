<?php
    session_start();
    $pdo=new PDO('mysql:host=localhost;dbname=bank_database_2.0','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['shaam'])){
        $sql2=$pdo->prepare('select * from account where email=:id AND password=:pd');
        $abc=$_POST['email'];
        $val=0;
        $sql2->execute(array(':id'=>$_POST['email'], ':pd'=>$_POST['password']));
        $sql3=$pdo->prepare('select * from employee JOIN contact_info ON employee.contact_id=contact_info.contact_id where contact_info.email_1=:id AND employee.psswd=:pd');
        $sql3->execute(array(':id'=>$_POST['email'], ':pd'=>$_POST['password']));
        if($sql2->rowCount() >0)
        {
            header("Location:afterlogin.php"); 
            $_SESSION['vals']=$val;
            $_SESSION['auth']=$abc;
            return;
        }
        else if($sql3->rowCount() >0)
        {
            header("Location:afterloginemp.php"); 
            $_SESSION['auth']=$abc;
            $_SESSION['vals']=$val;
            return;
        }
        else{
            $_SESSION['res'] = 'Wrong credentials';
            header('Location:login.php');
            return;
        }
    }
    else{
        $_SESSION['res'] = 'Fill everything properly';
        header('Location:login.php');
            return;
    }
?>