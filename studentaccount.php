<?php session_start();
?>
<style>
body
{
background-color:#CD853F;
}
</style>
<?php
$con=mysqli_connect("localhost","root","","my_db");
//echo $_SESSION['reg'];
$name=$_SESSION['reg'];
$password=$_SESSION['pass'];
$result = mysqli_query($con,"SELECT * FROM student where reg_no='".$name."' and birth_date='".$password."';");
$row = mysqli_fetch_array($result);
$y=$row['semester'];
//echo $y;
//echo $row['student_name'];
    echo "Welcome Mr.".$row['student_name']."<hr>";
    echo "Please select subject : <br>";
    $result1 = mysqli_query($con,"SELECT * FROM subject where sem=$y;");
    $row1 = mysqli_fetch_array($result1); ?>

    <a href="student_download.php?sub=<?php echo $row1['sub1']; ?>"><?php echo $row1['sub1']; ?></a><br>
    <a href="student_download.php?sub=<?php echo $row1['sub2']; ?>"><?php echo $row1['sub2']; ?></a><br>
    <a href="student_download.php?sub=<?php echo $row1['sub3']; ?>"><?php echo $row1['sub3']; ?></a><br>
    <a href="student_download.php?sub=<?php echo $row1['sub4']; ?>"><?php echo $row1['sub4']; ?></a><br>
    <a href="student_download.php?sub=<?php echo $row1['sub5']; ?>"><?php echo $row1['sub5']; ?></a><br>
    <?php
$x=0;
// Check connection
//echo $_GET['sub'];
//$subject=$_GET['sub'];
//echo $subject;
//if (mysqli_connect_errno())
  //{
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
 // }
  /*$result2 = mysqli_query($con,"SELECT * FROM courseplan where subname='".$subject."';");
    $row = mysqli_fetch_array($result2);
    echo "Subject: ".$row['subname']."<br>"; 
    $x=$row['dlink'];
    if($x=='' || $x==NULL)
        echo "Sorry, no downloads available.";
    else
    {
    echo "Downloads availale :<a href='download.php?filename=".$row['dlink']."'>".$row['dlink']."</a><br>";
    //<a href="download.php?filename=yourfilename.zip">Click here to Download the File</a>
}
mysqli_close($con);
*/
?>
