<!DOCTYPE html>
<html lang="en">
<head>
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
                <h1 class="text-center mb-3"><i class="fas fa-sign-in-alt"></i> Home Loan</h1>
              
                <form action="" method="POST">
                <label for="name">Full Name</label>
                    <input
                      type="text"
                      id="name"
                      name="name"
                      class="form-control"
                      placeholder="Enter Full Name"
                    />
                  
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input
                      type="email"
                      id="email"
                      name="email"
                      class="form-control"
                      placeholder="Enter Email"
                    />
        
                  <div class="form-group">
                    <label >Address</label>
                    <input
                      type="text"
                      id="addrs"
                      name="addr"
                      class="form-control"
                      placeholder="Address"
                    />
                  </div>
                  <div class="form-group">
                    <label >Mobile No.</label>
                    <input
                      type="number"
                      id="mno"
                      name="mno"
                      class="form-control"
                      placeholder="Mobile NO"
                    />
                  </div>
                  <div class="form-group">
                    <label >Last Colg attended:</label>
                    <input
                      type="text"
                      id="occ"
                      name="occ"
                      class="form-control"
                      placeholder="Colgname"
                    />
                  </div>
                  <div class="form-group">
                    <label>Loan Req. For Course lvl:</label>
                    <select name="type"  class="form-control"> 
                 <option value="masters">masters</option>
                <option value="diploma">Diploma</option>
                 </select>
                  </div>
                  <div class="form-group">
                    <label >Parents Income</label>
                    <input
                      type="number"
                      id="fp"
                      name="fp"
                      class="form-control"
                      placeholder=""
                    />
                  </div>
                
                  <div class="form-group">
                    <label >Amount Required:</label>
                    <input
                      type="number"
                      id="ar"
                      name="ar"
                      class="form-control"
                      placeholder=""
                    />
                  </div>
                  <div class="form-group">
                    <label >Loan Type:</label>
                    <select name="type"  class="form-control">
                 <option value="full">Fulltime</option>
                <option value="partial">Partial</option>
                 </select>

                  </div>
                  <div class="form-group">
                    <label >Loan Term</label>
                    <input
                      type="number"
                      id="ltr"
                      name="ltr"
                      class="form-control"
                      placeholder="In years"
                    />
                  </div>
                  <div class="form-group">
                    <label >Identity Proof & Colg Certificates:</label>
                    <input
                      type="file"
                      id="dt"
                      name="dt"
                      class="form-control"
                      placeholder=" "
                    />
                  </div>
                  <button type="submit" id ='button'class="btn btn-outline-light btn-block ml-auto">Apply</button>
                </form>
                
              
              </div>
            </div>
          </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>