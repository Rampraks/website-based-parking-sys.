<?php 
$db_user = "root";
$db_pass = "";
$db_name = "booking";
$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_POST['search']))
{
	$carnumber 		= $_POST['carnumber'];
	$txtstartdate =$_POST['txtstartdate'];
	$txtlastdate =$_POST['txtlastdate'];
	$stime =$_POST['stime'];
	$etime=$_POST['etime'];
	$sql="INSERT INTO bookings(carnumber,txtstartdate,txtlastdate,stime,etime)VALUES(?,?,?,?,?)";
	$stmtinsert =$db->prepare($sql);
	$result=$stmtinsert->execute([$carnumber,$txtstartdate,$txtlastdate,$stime,$etime]);
	
}
?>

<!DOCTYPE html>
<html>
<head>

<div class="first">
<h1>BOOKING</h1>
</head>

<div class="row">
<label for="carnumber"><b>Enter Your Car Number </b></label>
<input class="form-control" id="carnumber" type="text" name="carnumber" required>
</div>
<p1><b>start date</b></p1>
<input class="startdate" input type="date" name="startdate" required>

<p2><b>lastdate</b></p2>
<input class="lastdate" input type="date" name="lastdate" required>

<p3><b>starttime</b></p3>
<input class ="starttime" input type="time" name="stime" required>

<p4><b>end time</b></p4>
<input class ="endtime" input type="time" name="etime" required>
<p>
<input class ="sub" input type="submit" name="search" value="submit">
</p>

</div>

<style>
body
{background-color:lightblue;
}
h1{
	position:relative;
	top:-110px;
	left:100px;
}
.first{
	height: 560px;
	width: 350px;
	margin-top: auto;
	margin-bottom: auto;
	background: #f39c12;
	position: relative;
	display: flex;
	justify-content: center;
	flex-direction: column;
	padding: 10px;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	border-radius: 5px;
	position:relative;
	left:600px;
	top:100px;
}
.row{
	position:relative;
	top:-120px;
left:70px;
font-size:20px;}
.form-control
{position:relative;
top:0px;
left:-40px;
	width: 80%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;}
p1{
	position:relative;
	top:-110px;
left:20px;
font-size:25px;
}
.startdate{
	position:relative;
top:-115px;
left:40px;
padding:8px;}
p2{
	position:relative;
	top:-80px;
left:20px;
font-size:25px;
}
.lastdate{
	position:relative;
top:-85px;
left:55px;
padding:8px;}
p3{
	position:relative;
	top:-50px;
left:20px;
font-size:25px;
}
.starttime{
	position:relative;
top:-55px;
left:55px;
padding:8px;}
p4{
	position:relative;
	top:15px;
left:-190px;
font-size:25px;
}
.endtime{
	position:relative;
top:-25px;
left:155px;
padding:8px;}
.submit{
position:relative;
left:100px;

}
.sub{background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
  position:relative;
  top:0px;
  left:30px;
  width:80%;}
</style>

</html>