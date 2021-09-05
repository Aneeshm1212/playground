<!DOCTYPE html>
<html>
    <?php
    session_start();
    if(!(isset($_SESSION['vals'])))
    {
    die("Unauthorized Access");
    }
    
    ?>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="styles.css">
        <style>
            
            .form-group {
            margin-bottom: 60px;
            margin-top: 200px;
            }
            .site-footer
            {
            background-color:#26272b;
            padding:45px 0 20px;
            font-size:15px;
            line-height:24px;
            color:#737373;
            clear:both;
            position: fixed;
            bottom:0;
            width:100%;
            }
        </style>
        
    </head>
    <body>
        <?php
       
            $pdo=new PDO('mysql:host=localhost;dbname=bank_database_2.0','root','');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql2=$pdo->prepare('select * from employee JOIN contact_info ON employee.contact_id=contact_info.contact_id where contact_info.email_1=:id');
            $sql2->execute(array(':id'=>$_SESSION['auth']));
            while($result=$sql2->fetch(PDO::FETCH_ASSOC)){
                $ac = $result['emp_id'] ;
                $name=$result['emp_name'];
                
            }


            if(isset($_POST['rr']))
        {
                if(isset($_POST['accept']))
                {
                    $sql2=$pdo->prepare('update  homeloan set status=:s where loan_id=:l');
            $sql2->execute(array(':s'=>'accepted','l'=>$_GET['hid']));
                }
                else{
                    $sql2=$pdo->prepare('update  homeloan set status=:s where loan_id=:l');
            $sql2->execute(array(':s'=>'Rejected','l'=>$_GET['hid']));
                }
        }
        ?>
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="dashboard.html">
                <img src="images/logo.png" width="150" height="120" class="d-inline-block align-top" alt="404">
              </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link ask " href="dashboard.html">Personal </a>
                <a class="nav-item nav-link ask" href="#">Buisness</a>
                <a class="nav-item nav-link ask" href="loan.html">Loans</a>
                <a class="nav-item nav-link ask" href="banking.html">Help</a>
                <a class="nav-item nav-link ask" href="aboutus.html">About Us</a>
                <div class="god">
            <a  href="logout.php"><button type="button" class="btn btn-outline ml-auto">Logout</button></a>
           
        </div>
              </div>
            </div>
          </nav>
        <main>
         
                        <div class="col-sm">
                            <h1>Your  Details</h1>
                            <p>
                                EMP ID: <?php
                                    echo $ac;
                                    
                                ?>
                            </p>
                            <p>
                               Name: <?php
                                echo $name;
                               ?>
                            </p>
                <a href="loanchk.php">Check Loan Forms</a>
                        </div>
                </div>
            </div>
        </main>
        <div>
      
        </div>
        <footer class='site-footer'>
            <div class='container'>
                <div class='row'>
                    <div class="col-sm-12 col-md-6">
                        <h4>About</h4>
                        <p class='text-justify'>City Bank's award-winning mobile app delivers the incredibly innovative, unconventional freedom with exclusive features that are redifining mobile banking</p>
                    </div>
                    <div class='col-xs-6 col-md-3'>
                        <h4>Categories</h4>
                        <ul class="footer-links">
                            <li><a href="#akjfl">Debit Card</a></li>
                            <li><a href="#account info">Account Details</a></li>
                            <li><a href="#Depo">Deposit Details</a></li>
                            <li><a href="#Record">Records Check</a></li>
                        </ul>
                    </div>
                    <div class='col-xs-6 col-md-3'>
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#About">About Us</a></li>
                            <li><a href="#Contact">Contact Us</a></li>
                            <li><a href="#Contribute">Contribute</a></li>
                            <li><a href="#privacy">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                <hr>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-6 col-xs-12">
                        <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved By <a href="#CityBank">NameofBank</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>