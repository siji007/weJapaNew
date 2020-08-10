<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">


    <title>Index</title>

</head>

<body class="mainBody" style="background-color:black;">
    <h1 class="display-4 text-center text-warning">SignUp Here</h1>

    <div class="card formContainer bg-warning text-white">
        <form id="form" name="Form1" class="myform" method="post" action="formValid.php">
            <div class="form-group mt-3">
                <label for="" style="margin-left: 60px;">First Name</label>
                <input class="form-control w-75 name" name="firstname" type="text" placeholder="Enter Your First Name" value="<?php if(isset($_SESSION['firstname']))  { echo $_SESSION['firstname'];}?>">
                <div class="errName text-danger">
                    <!-- <?php echo $nameErr;?> -->
                </div>
            </div>

            <div class="form-group ">
                <label for="" style="margin-left: 60px;">Second Name</label>
                <input class="form-control w-75 name" name="secondname" type="text"
                    placeholder="Enter Your Second Name" value="<?php if(isset($_SESSION['secondname']))  { echo $_SESSION['secondname'];}?>">
                <div class="errName text-danger">
                    <!-- <?php echo $nameErr;?> -->
                </div>
            </div>

            <div class="form-group ">
                <label for="" style="margin-left: 60px;">Email</label>
                <input class="form-control w-75 name" name="email" id="email" type="text"
                    placeholder="Enter Your Email" value="<?php if(isset($_SESSION['email']))  { echo $_SESSION['email'];}?>">
                <div class="errName text-danger">
                    <!-- <?php echo $nameErr;?> -->
                </div>
            </div>
            <div class="form-group">
                <label for="" style="margin-left: 60px;">Date Of Birth</label>
                <input class="form-control user w-75" id="date" type="date" name="Dob"
                    placeholder="Enter Date of Birth" value="<?php if(isset($_SESSION['Dob']))  { echo $_SESSION['Dob'];}?>">

            </div>
            <!-- <div class="form-group">
                    <label for="" style="margin-left: 60px;">Select Gender</label><br>
                    <input type="radio" name="mgender" value="male"> Male<br>
                    <input type="radio" name="fgender" value="female"> Female<br>
                </div> -->
            <div class="form-group gender">
                <label for="" style="margin-left: 60px;">Select Gender</label><br>
                <input style="margin-left: 60px;" type="checkbox" name="male" value="Male"><label
                    for="">Male</label><br>
                <input style="margin-left: 60px;" type="checkbox" name="female" value="Female"><label
                    for="">Female</label>
            </div>

            <div class="form-group">
                <label for="" style="margin-left: 60px;">Favourite Color</label>
                <input class="form-control user w-75" type="color" required name="color" placeholder="Favourite Color" value="<?php if(isset($_SESSION['color']))  { echo $_SESSION['color'];}?>">
                <div class="errName text-danger">
                    <!-- <?php echo $colorErr;?> -->
                </div>
            </div>

            <div class="form-group">
                <label for="" style="margin-left: 60px;">Department</label>
                <select name="dept">
                    <option>IT</option>
                    <option>HR</option>
                    <option>Stuff</option>
                </select>

                <div class="errName text-danger">
                    <!-- <?php echo $colorErr;?> -->
                </div>
            </div>

            <div class="form-group">
                <label for="" style="margin-left: 60px;">Password</label>
                <input id="password" class="form-control user w-75" id="password" type="password" required
                    name="password" placeholder="Password">
                <div id="error" class="errName text-danger">

                </div>
            </div>

            <button class="submit btn btn-outline-success mb-4 mt-3" type="submit" name="myForm">Register Now</button>
        </form>
    </div>
</body>
</html>