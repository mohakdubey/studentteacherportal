<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sign in &middot; Twitter Bootstrap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {

        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
        font-family: helvetica, verdana;
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
      #head {
        padding-bottom: 100px;
      }
      #picbg {
        width:100%;
        background: url('img/image_bar.jpg');
      }
      .container {
        padding-top: 25px;
      }
    </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <script>
    $('#dp3').datepicker();
    var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
 
var checkin = $('#dpd1').datepicker({
  onRender: function(date) {
    return date.valueOf() < now.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {
  if (ev.date.valueOf() > checkout.date.valueOf()) {
    var newDate = new Date(ev.date)
    newDate.setDate(newDate.getDate() + 1);
    checkout.setValue(newDate);
  }
  checkin.hide();
  $('#dpd2')[0].focus();
}).data('datepicker');
var checkout = $('#dpd2').datepicker({
  onRender: function(date) {
    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
  }
}).on('changeDate', function(ev) {
  checkout.hide();
}).data('datepicker');
</script>
  </head>
<?php session_start();?><style>
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
  if(($_POST['username1']=="") || ($_POST['username1']==null))
      echo "Username cannot be left blank!";
else if(($_POST['password1']=="") || ($_POST['password1']==null))
      echo "Password cannot be left blank!";
    else{

$result = mysqli_query($con,"SELECT * FROM student;");
$x=0;

while($row = mysqli_fetch_array($result))
  {
  	   
    if($_POST['username1']==$row['reg_no'] && $_POST['password1']==$row['birth_date'])
     {
  			$x++;
  			break;
  		}
  }
  if($x==1){
    $_SESSION['reg']=$_POST['username1'];
    $_SESSION['pass']=$_POST['password1'];
    //echo $_SESSION['reg'];
    header('Location: studentaccount.php');



    /*$y=$row['semester'];
    echo "Welcome Mr.".$row['student_name']."<hr>";
    echo "Your subjects are: <br>";
    $result1 = mysqli_query($con,"SELECT * FROM subject where sem=$y;");
    $row1 = mysqli_fetch_array($result1); ?>

    <a href="studentaccount.php?sub=<?php echo $row1['sub1']; ?>"><?php echo $row1['sub1']; ?></a><br>
    <a href="studentaccount.php?sub=<?php echo $row1['sub2']; ?>"><?php echo $row1['sub2']; ?></a><br>
    <a href="studentaccount.php?sub=<?php echo $row1['sub3']; ?>"><?php echo $row1['sub3']; ?></a><br>
    <a href="studentaccount.php?sub=<?php echo $row1['sub4']; ?>"><?php echo $row1['sub4']; ?></a><br>
    <a href="studentaccount.php?sub=<?php echo $row1['sub5']; ?>"><?php echo $row1['sub5']; ?></a><br>
    
    <?php
    */

   
        

  
  }
  else header("Location: index.html");
}

mysqli_close($con);
?>
