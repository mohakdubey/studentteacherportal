<?php
$con=mysqli_connect("localhost","root","","my_db");
$subject=$_GET['sub'];
echo $subject;
//if (mysqli_connect_errno())
  //{
  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
 // }
  $result2 = mysqli_query($con,"SELECT * FROM courseplan where subname='".$subject."';");
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
?>
