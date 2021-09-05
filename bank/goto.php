<?php
session_start();
    if(!(isset($_SESSION['vals'])))
    {
    die("Unauthorized Access");
    }
   
    $pdo=new PDO('mysql:host=localhost;dbname=bank_database_2.0','root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $r=$_GET['lid'];
    $sql2=$pdo->prepare('select * from  homeloan where loan_id=:l');
    $sql2->execute(array(':l'=>$_GET['lid']));
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

    }
   ?>
   <p>Name of Appliciant:<?php echo $name ?></p>
   <p>Email:<?php echo $email ?></p>
   <p>Address:<?php echo $addrss?></p>
   <p>Mobile No.<?php echo $mobile?></p>
   <p>Occupation:<?php echo $job?></p>
   <p>Address of Property:</Address><?php echo $addrssofprop?></p>
   <p>Price:<?php echo $priceofprop?></p>
   <p>Amount requested:<?php echo $amtreq?></p>
   <p>Term:<?php echo $loanterm?></p>
   <form method="POST" action="afterloginemp.php?hid=<?php echo $r?>">
   <input type="checkbox"  name="accept" value="accept">
   <input type="checkbox"  name="reject" value="reject">
   <Button type="submit" name="rr">Enter</Button>  
   </form>
   