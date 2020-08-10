<?php
session_start();
error_reporting(null);

//Sessions
$_SESSION['password'] = $_POST['password'];
$_SESSION['firstname'] = $_POST['firstname'];
$_SESSION['secondname'] = $_POST['secondname'];
$_SESSION['Dob'] = $_POST['Dob'];
$_SESSION['color'] = $_POST['color'];
$_SESSION['dept'] = $_POST['dept'];
$_SESSION['email'] = $_POST['email'];

$password= $_POST['password'];
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$Dob = $_POST['Dob'];
$color = $_POST['color'];
$dept = $_POST['dept'];
$email = $_POST['email'];
$err;




$gender = $_POST['male'] || $_POST['female'];

$uppercase = preg_match('@[A-Z]@', $password);
$lowercase = preg_match('@[a-z]@', $password);
$number = preg_match('@[0-9]@', $password);
$specialChars = preg_match('@[^\w]@', $password);
$date = date("m/d/Y");
if(isset($_POST['myForm'])){
   // if(!preg_match("/^[a-zA-Z0-9][` ! ? $ ? % ^ & * ( ) _ - + = { [ } ] : ; @  ' ~ # |  < , > . ? ][\]*$/",$password)){
   //   // header('Location: formValid.php?passWordError');
   //   echo 'Password must include lower, upper case and must have special a characters';
   // }else if(strlen($password)<15){
   //   echo 'Password must be atleast 15 characters';
   // }
   if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password)<15){
    // $err = 'Password must be atleast 15 characters in length and include uppercase,lowercase and a number';
     header('Location: index.php?PasswordMustBeAtleast15CharactersInLengthAndIncludeUppercaseLowercaseAndAnumber');
   }
   else if(!preg_match ("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/" ,$email )){
    //  header('location: indexValid.php?emailerror');
    //  echo 'Input a valid email';
     header('Location: index.php?emailerror');
   }elseif(isset($_POST['male']) && $_POST['female']){
     header('Location: index.php?gendererrorYouCanOnlyPickOneGender');
   }elseif(strtotime($Dob) > strtotime($date)){
    header('Location: index.php?DateCannotExceedToday!');
     
   }
  


}

?>

<!doctype html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body class="bodytext " style="background-color: <?php echo $_POST['color']?>">
    <h1 class="successtexty text-center text-white" style=""><marquee> Signed Up Successfully</marquee></h1>

    <div class="container mt-4">
      <div class="card w-50 bg-warning p-3" style="display: block;margin: 0 auto;">
      <?php

      $password= $_POST['password'];
      $firstname = $_POST['firstname'];
      $secondname = $_POST['secondname'];
      $Dob = $_POST['Dob'];
      $color = $_POST['color'];
      $dept = $_POST['dept'];
            
      if($_POST['male']) {
        $gender = $_POST['male'];
      }elseif($_POST['female']) {
        $gender = $_POST['female'];
        
      }

      ?>

      <h3>First Name:<?php echo $firstname ?></h3>
      <h3>Second Name:<?php echo $secondname ?></h3>
      <h3>Date of birth:<?php echo $Dob ?></h3>
      <h3>Gender:<?php echo $gender ?></h3>
      <h3>Color:<?php echo $color ?></h3>
      <h3>Department:<?php echo $dept  ?></h3>

    </div>
    </div>

  </body>
</html>
