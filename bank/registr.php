<?php
session_start();
$pdo=new PDO('mysql:host=localhost;dbname=bank_database_2.0','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
if(isset($_POST['s']) && 
    isset($_POST['firstname']) && 
    isset($_POST['lastname']) && 
    isset($_POST['email']) && 
    isset($_POST['password']) &&
    isset($_POST['password2'])
    ){
    if($_POST['password']===$_POST['password2']){
    $rand=rand();
    //try{
        $sql1=$pdo->prepare('insert into account(acc_id, first_name, last_name, password, email) values(:n,:ln,:p,:i, :xx)');
        $sql1->execute(array(':ln'=>$_POST['firstname'],':p'=>$_POST['lastname'],':i'=>$_POST['password'],':n'=>$rand, ':xx'=>$_POST['email']));
    
    $sql2=$pdo->prepare('select * from account where acc_id=:id');
    $sql2->execute(array(':id'=>$rand));
    if($sql2->rowCount() >0)
    {
        $_SESSION['res']="Success";
    }
    else
    {

        $_SESSION['res']="Failure";
    }

    header('Location:login.php');
        return;
    } 
    //catch(PDOException $e){
        //header('Location:error.html');
        //return;
    //}
    //}
    
    else{
        $_SESSION['res']="Password dont match";
        header('Location:register.php');
        return;
    }
    }
?>