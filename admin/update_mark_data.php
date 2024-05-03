<?php
global $con;
if(isset($_POST['submit']))
{
include('../dbcon.php');
    $rollno=$_POST['rollno'];
    $quran1=$_POST['quran1'];
    $islamic1=$_POST['islamic1'];
    $arabic1=$_POST['arabic1'];
    $english1=$_POST['english1'];
    $math1=$_POST['math1'];
    $physics1=$_POST['physics1'];
    $chemistry1=$_POST['chemistry1'];
    $biology1=$_POST['biology1'];
    $quran2=$_POST['quran2'];
    $islamic2=$_POST['islamic2'];
    $arabic2=$_POST['arabic2'];
    $english2=$_POST['english2'];
    $math2=$_POST['math2'];
    $physics2=$_POST['physics2'];
    $chemistry2=$_POST['chemistry2'];
    $biology2=$_POST['biology2'];
    
    $sql="UPDATE `user_mark` SET  `u_quran1` = '$quran1', `u_islamic1` = '$islamic1', `u_arabic1` = '$arabic1', `u_english1` = '$english1', `u_math1` = '$math1', `u_physics1` = '$physics1', `u_chemistry1` = '$chemistry1', `u_biology2` = '$biology2', `u_quran2` = '$quran2', `u_islamic2` = '$islamic2', `u_arabic2` = '$arabic2', `u_english2` = '$english2', `u_math2` = '$math2', `u_physics2` = '$physics2', `u_chemistry2` = '$chemistry2', `u_biology2` = '$biology2' WHERE `u_rollno` = '$rollno'";
    
    $run=mysqli_query($con,$sql);
    if($run)
    {
        ?>
        <script>
        alert('Data Updated  Succesfully');
        window.open('updatemark_form.php?sid=<?php echo $rollno; ?>', '_self');
             </script>
       
       
        <?php
    }
    else
    {
        echo "Error";
    }
}
?>