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
<link rel="stylesheet" href="../csss/secondstep.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="../index.php">Home</a></li>
                <li><a href="aboutus.php">About Us</a></li>
                <li><a href="contactus.php">Contact Us</a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="thirdstep.php">
              <h2>Step 2/2 : Add Exam mark</h2>
         
          <td><input type="hidden" name="class" class="class" value="<?php  echo $_POST['class']; ?>" required/></td>
          
          <td><input type="hidden" name="rollno" class="rollno" value="<?php  echo $_POST['rollno']; ?>" required/></td>
          
              
              
          <table class="table1">
              <span> <h4 class="h_3">Exam</h4></span>
             <tr>
                <th>Quran</th>   <th> Islamic </th> <th>Arabic</th>
             </tr>
             <tr>
                 <td><input type='text' name='quran' placeholder='Quran' required/></td>
                 <td><input type='text' name='islamic' placeholder='Islamic' required/></td>
                 <td><input type='text' name='arabic' placeholder='Arabic' required/></td>
             </tr>
              <tr>
                  <th>English</th>   <th> Math </th> <th>Physics</th>
              </tr>
              <tr>
                  <td><input type='text' name='english' placeholder='English' required/></td>
                  <td><input type='text' name='math' placeholder='Math' required/></td>
                  <td><input type='text' name='physics' placeholder='Physics' required/></td>
              </tr>
             </table>
             <table class="table2">
             <tr>
                 <th>Chemistry</th>   <th>Biology</th>
             </tr>
                 <tr>
                 
                 <td><input type='text' name='chemistry' placeholder='Chemistry' required/></td>
                 <td><input type='text' name='biology' placeholder='Biology' required/></td>
                 
             </tr>
                 <tr>
                     <td align="center" colspan="2"><input type="submit" name="submit" value="Submit" class="submit"/></td>
                 </tr>
         </table>
       </form>
      </div>
    </header>
    
</body>
</html>
<?php
if(isset($_POST['submit1']))
{ 
    include('../dbcon.php');
    $username=$_POST['name'];
    $class=$_POST['class'];
    $rollno=$_POST['rollno'];
    $branch=$_POST['branch'];
    $data=$_POST['data'];
    $mobile=$_POST['mobile'];
    $city=$_POST['city'];
    
    $sql="INSERT INTO `Student_data`(`u_name`, `u_class`, `u_rollno`, `u_branch`, `u_data`, `u_mobile`, `u_city`) VALUES ('$username','$class','$rollno','$branch','$data','$mobile','$city')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('1step Complete and this is second  Step');
        </script>
        <?php
    }
    else
    {
       ?>
        <script>
        alert('Failed');
        </script>
        <?php 
    }
}

?>
