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
<?php
include('../dbcon.php');
$rollno=$_GET['sid'];


$sql="SELECT * FROM `student_data` WHERE `u_rollno`='$rollno'";
$run=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($run);

$class=$row['u_class'];

$sql2="SELECT * FROM `user_mark` WHERE `u_class`='$class'";
$run2=mysqli_query($con,$sql2);
$data=mysqli_fetch_assoc($run2);

//combine Table///


?>
<html>
<head>
    <title>Update Mark Detail</title>
<link rel="stylesheet" href="../css/updatemark_form.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
<body>
    <header>
      <nav>
        <div class="row clearfix">
            <ul class="main-nav" animate slideInDown>
                <li><a href="admindash.php"><b>DASHBOARD</b></a></li>
                <li><a href="../index.php"><b>HOME</b></a></li>
                <li><a href="aboutus.php"><b>ABOUT</b></a></li>
                <li><a href="contactus.php"><b>CONTACT</b></a></li>
            </ul>
        </div>
      </nav>
      <div class="main-content-header">
          
          <form method="post" action="update_mark_data.php">
              <table>
             <h4> 
                <tr>
                  <th>Student Name: </th>
                  <td><span class="span"><?php echo $row['u_name']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Class: </th>
                  <td><span class="span"><?php echo $row['u_class']; ?></span></td>
                </tr>
              </h4>
              <h4>
                <tr>
                  <th>Student Rollno: </th>
                  <td><span class="span"><?php echo $row['u_rollno']; ?></span></td>
                </tr>
              </h4>
                  </table>
          <table class="table1">
              <span> <h4 class="h_3">First Exam (A)</h4></span>
              <tr>
                  <th>Quran</th>   <th> Islamic </th> <th>Arabic</th>
              </tr>
              <tr>
                  <td><input type='text' name='quran1' placeholder='Quran' required/></td>
                  <td><input type='text' name='islamic1' placeholder='Islamic' required/></td>
                  <td><input type='text' name='arabic1' placeholder='Arabic' required/></td>
              </tr>
              <tr>
                  <th>English</th>   <th> Math </th> <th>Physics</th>
              </tr>
              <tr>
                  <td><input type='text' name='english1' placeholder='English' required/></td>
                  <td><input type='text' name='math1' placeholder='Math' required/></td>
                  <td><input type='text' name='physics1' placeholder='Physics' required/></td>
              </tr>
          </table>
              <table class="table2">
                  <tr>
                      <th>Chemistry</th>   <th>Biology</th>
                  </tr>
                  <tr>

                      <td><input type='text' name='chemistry1' placeholder='Chemistry' required/></td>
                      <td><input type='text' name='biology1' placeholder='Biology' required/></td>

                  </tr>
             
         </table>
          <span> <h4 class="h3">Second Exam(B)</h4> </span>
         <table class="table4">
             <tr>
                 <th>Quran</th>   <th> Islamic </th> <th>Arabic</th>
             </tr>
             <tr>
                 <td><input type='text' name='quran2' placeholder='Quran' required/></td>
                 <td><input type='text' name='islamic2' placeholder='Islamic' required/></td>
                 <td><input type='text' name='arabic2' placeholder='Arabic' required/></td>
             </tr>
             <tr>
                 <th>English</th>   <th> Math </th> <th>Physics</th>
             </tr>
             <tr>
                 <td><input type='text' name='english2' placeholder='English' required/></td>
                 <td><input type='text' name='math2' placeholder='Math' required/></td>
                 <td><input type='text' name='physics2' placeholder='Physics' required/></td>
             </tr>
         </table>
              <table class="table2">
                  <tr>
                      <th>Chemistry</th>   <th>Biology</th>
                  </tr>
                  <tr>

                      <td><input type='text' name='chemistry2' placeholder='Chemistry' required/></td>
                      <td><input type='text' name='biology2' placeholder='Biology' required/></td>

                  </tr>
             <tr>
             <td><input type="hidden" name="rollno" value="<?php echo $row['u_rollno']; ?>"/></td>
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