<?php
 session_start();
 if(!(isset($_SESSION['vals'])))
 {
 die("Unauthorized Access");
 }

if(isset($_POST['name']) && isset($_POST['email'])  && isset($_POST['addr'])  && isset($_POST['mno'])  && isset($_POST['occ']) && isset($_POST['addrr'] )
&& isset($_POST['fp']) &&  isset($_POST['ar']) &&  isset($_POST['ltr']) )
{
    $filename=$_FILES['dt']['name'];
    $tempname= $_FILES['dt']['tmp_name'];
    $destination='filehomeloan/'."$filename";
    move_uploaded_file($tempname, $destination);
    $pdo=new PDO('mysql:host=localhost;dbname=bank_database_2.0','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $rand=rand();
    $sql1=$pdo->prepare('insert into homeloan(name,loan_id,email,addrs,mn,job,adrsop,pop,amtr,loanterm,creds,loan_type_id,status,acc_id)
     values(:name,:loan_id,:email,:addrs,:mn,:job,:adrsop,:pop,:amtr,:loanterm,:creds,:loan_type_id,:status,:acc_id)');
     $sql1->execute(array(':name'=>$_POST['name'],':loan_id'=>$rand,':email'=>$_POST['email'],':addrs'=>$_POST['addr'],
    ':mn'=>$_POST['mno'],':job'=>$_POST['occ'],':adrsop'=>$_POST['addrr'],':pop'=>$_POST['fp'],':amtr'=>$_POST['ar'],':loanterm'=>$_POST['ltr'],
    ':creds'=>$filename,':loan_type_id'=>$_GET['type'],':status'=>'Pending',':acc_id'=>$_SESSION['acid']));
    $sql2=$pdo->prepare('select * from homeloan where loan_id=:id');
    $sql2->execute(array(':id'=>$rand));
    if($sql2->rowCount() >0)
    {
        $_SESSION['status']="LOAN APPLIED";
        header('location:homeloan.php');
        return;
    }
    else{
        $_SESSION['status']="AN ERROR OCCURED ! TRY AGAIN";
        header('location:homeloan.php');
        return;
    }
}
?>