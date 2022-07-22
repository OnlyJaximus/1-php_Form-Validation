 <?php
   require_once 'functions.php';

   if (isset($_POST['subBtn'])) {

      $username = $_POST['username'];
      $email = $_POST['email'];
      $year = $_POST['year'];
      $gender = $_POST['gender'];

      if (isset($_POST['languages'])) {
         $languages = $_POST['languages'];
      }
   } else {
      header("Location: index.php");
   }


   if (isset($languages)) {
      echo "<h2>Welcome " . $username . ".</h2><br>";
      foreach ($languages as $language) {
         echo "<h3>We need " . $language . "</h3>";
      }
      echo "<h5>We  send u email at <span style=\"text-decoration:underline\">$email</span</h5>";
   } else {
      echo "<h2>Sorry, we need one language</h2>";
   }



   ?>