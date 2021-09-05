<?php
session_start();
if(!(isset($_SESSION['vals'])))
{
die("Unauthorized Access");
}

$pdo=new PDO('mysql:host=localhost;dbname=bank_database_2.0','root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql2=$pdo->prepare('select * from homeloan where acc_id=:s');
$sql2->execute(array(':s'=>$_SESSION['acid']));
echo "<table>
<tr> <th>Name</th>  <th>Email</th>  <th>Address</th>  <th>Mobile</th>  <th>Address Of property</th>  <th>Amount requested</th>
<th>Price of Property</th>  <th>Status</th>
</tr>";
while($res=$sql2->fetch(PDO::FETCH_ASSOC))
    {
    $name=$res['name'];
    $email=$res['email'];
    $addrss=$res['addrs'];
    $mobile=$res['mn'];
    $job=$res['job'];
    $addrssofprop=$res['adrsop'];
    $priceofprop=$res['pop'];
    $amtreq=$res['amtr'];
    $loanterm=$res['loanterm'];
    $status=$res['status'];
    echo "<tr>
    <td>$name</td>
    <td>$email</td>
    <td>$addrss</td>
    <td>$mobile</td>
    <td>$addrssofprop</td>
    <td>$amtreq</td>
    <td>$priceofprop</td>
    <td>$status</td>
    </tr>";
    }
    echo"</table>";
?>

    
      

