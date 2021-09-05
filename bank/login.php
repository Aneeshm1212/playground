<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" src="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #button
            {
            color: purple;
            border-color: purple;
            }
            #button:hover{
            background-color: purple;
            color: white;
            }
    </style>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-6 m-auto">
              <div class="card card-body">
                <h1 class="text-center mb-3"><i class="fas fa-sign-in-alt"></i>  Login</h1>
              
                <form action="test.php" method="POST">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input
                      type="email"
                      id="email"
                      name="email"
                      class="form-control"
                      placeholder="Enter Email"
                    />
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input
                      type="password"
                      id="password"
                      name="password"
                      class="form-control"
                      placeholder="Enter Password"
                    />
                  </div>
                  <button type="submit" name="shaam" id ='button'class="btn btn-outline-light btn-block ml-auto">Login</button>
                </form>
                <p class="lead mt-4">
                  No Account? <a href="register.php">Register</a>
                </p>
                <p class="alert alert-success">
                  <?php
                  if(isset($_SESSION['res']))
                  {
                    echo $_SESSION['res'];
                    unset($_SESSION['res']);
                  }
                  ?>
                </p>
              </div>
            </div>
          </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>