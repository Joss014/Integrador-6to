<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    session_start();
    $name = $_SESSION['username'];
    if ($_SESSION['timeout'] + 10*60 < time()) {
        unset($_SESSION['username']);
          $_SESSION = array();
        //DELETES THE COOKIES
          if (isset($_COOKIE[session_name()])) {
                setcookie(session_name(), '', time() - 42000, '/');
                header("Location: ../views/login.php");
              }
         }
    include ('head.php');
    include('header.php');
?>
  <body class="hold-transition skin-blue sidebar-mini">
<!--      /////////////////////////////////////////////     START SECTION  ///////////////////////////////////////////--->
    <div class="content-wrapper">
      <div class="content"  ui-view></div>
    </div>
<!--     /////////////////////////////////////////////     END SECTION ///////////////////////////////////////////--->
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> 2.3.5
  </div>
  <strong>Copyright &copy; 2016-2016 <a href="http://upq.edu.mx">TU GFA X2</a>.</strong> All rights
  reserved.
</footer>
<?php include '../views/footer.php';?>

  </body>
</html>
