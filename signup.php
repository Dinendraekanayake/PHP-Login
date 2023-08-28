<?php
    include_once 'header.php';
?>
    
   
    <form action="includes/signup.inc.php" method="post">
      <div class="signupcontainor">
    
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example1cg" name="name" class="form-control form-control-lg" placeholder="Your Name" />
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" name="email" class="form-control form-control-lg" placeholder="Your Email"/>
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="text" id="form3Example3cg" name="uid" class="form-control form-control-lg" placeholder="User name"/>
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" name="pwd" class="form-control form-control-lg" placeholder="Password" />
                  
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cdg" name="pwdrepeat" class="form-control form-control-lg" placeholder="Repeat your password"/>
                  
                </div>

               

                
                  <button type="submit" name="submit"
                    class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    <br>
                    <br>
                    <?php
                      if(isset($_GET["error"])){
                          if($_GET["error"] == "emptyinput"){
                              echo '<div class="error">Fill in the all fields</div>';
                          }else if($_GET["error"] == "invaliduid"){
                              echo '<div class="error">Invalid Username! </div>';
                          }else if($_GET["error"] == "invalidemail"){
                              echo '<div class="error">Invalid Email!</div>';
                          }else if($_GET["error"] == "passwordsdontmatch"){
                              echo '<div class="error">Passwords not matching!</div>';
                          }else if($_GET["error"] == "stmtfailed"){
                              echo '<div class="error">Something went wrong!</div>';
                          }else if($_GET["error"] == "none"){
                              echo '<div class="error">Account Created</div>';
                          }else if($_GET["error"] == "usernametaen"){
                              echo '<div class="error">Username or email already used</div>';
                          }
                      }

                      ?>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
        <!-- <input type="text" id="fname" name="name" placeholder="Name">
        <input type="text" id="fname" name="email" placeholder="Email">
        <input type="text" id="fname" name="uid" placeholder="User name">
        <input type="password" id="fname" name="pwd" placeholder="Password">
        <input type="password" id="lname" name="pwdrepeat" placeholder="Repeat Password">

       
        <button name="submit" type="submit" >Register </button> -->

    
    


    <!-- <p>Already have an account? <a href="login.php">Login.</a></p> -->
    </div>



<?php
    include_once 'footer.php';
?>