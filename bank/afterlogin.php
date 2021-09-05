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
            $sql2=$pdo->prepare('select * from account where email=:id');
            $sql2->execute(array(':id'=>$_SESSION['auth']));
            while($result=$sql2->fetch(PDO::FETCH_ASSOC)){
                $ac = $result['acc_id'] ;
                $name=$result['first_name']." ".$result['last_name'];
            }
        
        $_SESSION['acid']=$ac;
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
        <a href="hhis.php">HIstory</a>
            <div class="container">
                <div class="row form-group">
                        <div class="col-sm">
                            <h1>Loan Details</h1>
                            <div class="panel-group" >
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4>
                                            <a data-toggle="collapse" type="button" class="btn btn-outline" href="#collapse1">Apply Now</a>
                                        </h4>
                                    </div>
                                    <div class="panel-collapse collapse in" id="collapse1">
                                        <div class="panel-body">
                                            <ul>
                                                <li><a href="homeloan.php">Home Loan</a></li>
                                                <li><a href="edulaon.php">Education Loan</a></li>
                                                <li><a href="#">Top-Up loan</a></li>
                                                <li><a href="#">Fresher Funding Loan</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm">
                            <h1>Your Account Details</h1>
                            <p>
                                Yout Acc No: <?php
                                    echo $ac;
                                    
                                ?>
                            </p>
                            <p>
                               Name: <?php
                                echo $name;
                               ?>
                            </p>
                        
                            
                        </div>
                </div>
            </div>
        </main>
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