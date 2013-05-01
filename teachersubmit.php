<style>
body
{
background-color:#CD853F;
}
</style>
<?php
$con=mysqli_connect("localhost","root","","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  if(($_POST['username2']=="") || ($_POST['username2']==null))
      echo "Username cannot be left blank!";
else if(($_POST['password2']=="") || ($_POST['password2']==null))
      echo "Password cannot be left blank!";
    else{
$result1 = mysqli_query($con,"SELECT * FROM teacher;");
$x1=0;

while($row = mysqli_fetch_array($result1))
  {
  	   
    if($_POST['username2']==$row['teacher_id'] && $_POST['password2']==$row['teacher_password'])
     {
  			$x1++;
  			break;
  		}
  }
  if($x1==1){//echo "Valid user  ";
    echo "Welcome Mr. ".$row['teacher_name']."<br>";
    echo "Please select a semester, subject and section for which you want to upload file <br>";
    $result = mysqli_query($con,"SELECT * FROM teacher;");
    while($row = mysqli_fetch_array($result))
    {
      ?>

    <a href="teacheraccount.php"><?php echo $row['subject_name']."  "; echo "for section ".$row['section_taken']."  ";   ?></a><br>
    
    <?php
    }
  }
  else echo"Invalid user";
}

mysqli_close($con);
 ?>