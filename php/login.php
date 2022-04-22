
<?php
include "./process/Proces.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/style.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="stylesheet" href="../css/style.css">
     <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet">

    <title>Login</title>
  </head>
  <body>
      <!-- Start navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Mycontact</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/login.php">Log in</a>
              </li>


              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/Signup.php">Sing up</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../php/contactList.php">contactList</a>
              </li>
              
              

          </div>
        </div>
    </nav>
    <!-- End  navbar -->
      <main>
      
        <section class="vh-100">
            <div class="container py-5 h-100">
              <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                  <img src="../img/test.svg"
                    class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h1>Welcome</h1>
                  <form method="post" action="./process/Proces.php">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <label class="form-label" for="form1Example13">UserName</label>
                      <input type="text" name="UserName" id="UserNamel" class="form-control form-control-lg UserNamel" />
                    </div>
          
                    <!-- Password input -->
                    <div class="form-outline mb-4">
                    <label class="form-label"  for="form1Example23">Password</label>
                      <input type="password" id="Passwordl" name="Password" class="form-control form-control-lg Passwordl" />
                    </div>
          
                    <div class="d-flex justify-content-around align-items-center mb-4">
                      <!-- Checkbox -->
                      <div class="form-check">
                      <label class="form-check-label" for="form1Example3"> Remember me </label>
                        <input class="form-check-input" type="checkbox" value="" id="form1Example3"  />

                      </div>
                     
                    </div>
          
                    <!-- Submit button -->
                    <button type="submit"  name="SignIn" id="SignInbtn" class="btn btn-primary btn-lg btn-block container-fluid " disabled>Sign in</button>
          
                    <div class="d-flex justify-content-center mt-3">
                        <p class="text-secondary">if you don't have acount?<span> <a href="Signup.php">Create New</a> </span> </p>

                    </div>
          
          
                  </form>
                </div>
              </div>
            </div>
          </section>









      </main>






   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="../js/script.js"></script>
  </body>
</html>