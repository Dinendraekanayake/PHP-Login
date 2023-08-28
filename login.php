<?php
    include_once 'header.php';
?>
    <div class="form">
    <form action="includes/login.inc.php" method="post">
    <div class="wrapper">
        <div class="logo">
            <img src="imagers/lock.png" alt="">
        </div>
        <div class="text-center mt-4 name">
        <h1>Login</h1>
        <br>
        </div>
        <form class="p-3 mt-3">
            <div class="form-field d-flex align-items-center">
                <span class="far fa-user"></span>
                <input type="text" name="uid" id="fname" placeholder="Email / username">
            </div>
            <div class="form-field d-flex align-items-center">
                <span class="fas fa-key"></span>
                <input type="password" name="pwd" id="lname" placeholder="Password">
            </div>
            <button name="submit" type="submit" class="btn mt-3">Login</button>
        </form>
        <?php
    if(isset($_GET["error"])){
        if($_GET["error"] == "emptyinput"){
            echo '<div class="error">Fill in the all fields</div>';
        }else if($_GET["error"] == "wronglogin"){
            echo '<div class="error">Invalid Details! </div>';
        }else if($_GET["error"] == "stmtfailed"){
            echo '<div class="error">Something went wrong!</div>';
        }else if($_GET["error"] == "none"){
            echo '<div class="error">Account Created</div>';
        }else if($_GET["error"] == "usernametaen"){
            echo '<div class="error">Username or email already used</div>';
        }
    }

    ?>
        <div class="text-center fs-6">
            <br>
            <p>Don't have an account ? </p><a href="signup.php">Sign up</a>
        </div>
    </div>
    </form>
    <!-- <form action="includes/login.inc.php" method="post">
        
        <input type="text" id="fname" name="uid" placeholder="Email / username">

       
        <input type="password" id="lname" name="pwd" placeholder="Password">

       
        <button name="submit" type="submit" >Login </button>

    </form> -->
    

    

    </div>



<?php
    include_once 'footer.php';
?>