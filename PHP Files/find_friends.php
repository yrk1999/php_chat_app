<!DOCTYPE html>
<?php
session_start();
include("find_friends_function.php");
//require_once "find_friends_function.php";
if (!isset($_SESSION['user_email'])) {

  header("location: signin.php");
} else { ?>
  <html>

  <head>
    <title>Find Friends</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/CSS/find_people.css">
    <style>
      img {
        display: block;
        margin-left: auto;
        margin-right: auto;
      }
    </style>

  </head>

  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <!-- Brand/logo -->
      <a class="navbar-brand" href="#">
        <?php
          $user = $_SESSION['user_email'];
          $get_user = "select * from users where user_email='$user'";
          $run_user = mysqli_query($con, $get_user);
          $row = mysqli_fetch_array($run_user);

          $user_name = $row['user_name'];
          echo "<a class='navbar-brand' href='../home.php?user_name=$user_name'>MyChat</a>";
          ?>
      </a>
      <!-- Links -->
      <ul class="navbar-nav">
        <li><a style="color: white; text-decoration: none;font-size: 20px;" href="account_settings.php">Settings</a></li>
      </ul>
      <div class="col-sm-4">
        <form class="search_form" action="">
          <input type="text" placeholder="Search Friends" autocomplete="off" name="search_query" required>
          <button class="btn" type="submit" name="search_btn">Search</button>
        </form>
      </div>
    </nav><br>
    
    <?php search_user(); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  </body>

  </html>
<?php } ?>