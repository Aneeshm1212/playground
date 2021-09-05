
<?php
 session_start();
 if(!(isset($_SESSION['vals'])))
 {
 die("Unauthorized Access");
 }

$pdo=new PDO('mysql:host=localhost;dbname=bank_database_2.0','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$rs='Pending';
$sql2=$pdo->prepare('select creds,loan_id from  homeloan where status=:s');
$sql2->execute(array(':s'=>$rs));
if($sql2->rowCount()>0){
while($res=$sql2->fetch(PDO::FETCH_ASSOC))
{
    $resu=$res['creds'];
    $lt=$res['loan_id'];
echo "<style>
iframe{
height:500px;
}
</style><iframe src='filehomeloan/$resu'></iframe><a href='goto.php?lid=$lt'>SELECT</a> ";
}}
else
{
    echo"<script>alert('No new entries');</script>";
}
?>