<?php
global $con;
session_start();
				
				if(isset($_SESSION['uid']))
				{
					echo "";					
				}
				else
				{
					header('location: ../login.php');
				}
				
?>

<html>
<head>
    <title>Homepage</title>
<link rel="stylesheet" href="../csss/addmark.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
          <img src="../image/logo_1.png" class="logo"/>
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          <h2>First Step- Student Details</h2>
       
      </div>
    </header>
    
</body>
</html>
<?php
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $quran=$_POST['quran'];
    $islamic=$_POST['islamic'];
    $arabic=$_POST['arabic'];
    $english=$_POST['english'];
    $math=$_POST['math'];
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $biology=$_POST['biology'];
    
    $sql="INSERT INTO `user_mark`(`u_rollno`,`u_class`,`u_quran`, `u_islamic`, `u_arabic`, `u_english`, `u_math`, `u_physics`, `u_chemistry`, `u_biology`) VALUES ('$rollno','$class','$quran','$islamic','$arabic','$english','$math','$physics','$chemistry','$biology')";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Inserted Succesfully');
        window.open('admindash.php?sid=<?php echo $rollno; ?>', '_self');
        </script>
        <?php
    }
}
?>