<?php
    include_once 'header.php';
?>
    
    <h1>Hello <?php 
    if(isset($_SESSION["username"])){
        echo $_SESSION["username"] . ' ! </a>';
    }else{
        echo 'user !';
    }
     
    ?></h1>
    <p>Welcome to our web site</p>



<?php
    include_once 'footer.php';
?>