<?php 
if (session_status() === PHP_SESSION_NONE) {
  session_start();
}

if (!isset($_SESSION['user'])) {
    header('Location: ../../index.php');
    exit();
}

include './partials/_navbar.php' 

?>


<h1>Hello i am logged in page</h1>


<?php include './partials/_footer.php' ?>