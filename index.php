<!DOCTYPE html><meta charset="UTF-8">
<html>
<head>
<script src="placement_main.js"></script>
<link rel="stylesheet" type="text/css" href="placement_main.css">
</head>
<body>
<?php
if(isset($_POST['submit']))
{
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        echo "<div class=note>Please Enter Your Name</div>";
    }
    else {
        $name = $_POST["name"];
    }
 
    if (empty($_POST["fname"])) {
        echo "<div class=note>Please Enter Your Father Name</div>";
    }
    else {
        $address = $_POST["address"];
    }
 
    if (empty($_POST["email"]))  {
        $emailErr = "Missing";
    }
    else {
        $email = $_POST["email"];
    }
 
    if (!isset($_POST["howMany"])) {
        $howManyErr = "You must select 1 option";
    }
    else {
        $howMany = $_POST["howMany"];
    }
 
    if (empty($_POST["favFruit"])) {
        $favFruitErr = "You must select 1 or more";
    }
    else {
        $favFruit = $_POST["favFruit"];
    }
}

include 'db.php';
$degree = $_POST['degree'];
	if($degree=="other")
	{
	$degree=$_POST['OtherDegree'];
	}
$sql="INSERT INTO candidate_details (name,father_name,address,email_id,phone,degree,branch,college,year_of_passing,class_gcp)
VALUES
    ('$_POST[name]','$_POST[fname]','$_POST[address]','$_POST[email]','$_POST[phone]','$degree','$_POST[branch]','$_POST[college]','$_POST[yopassing]','$_POST[gcp]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
$name = $_POST['name'];
    echo "<div class=note>Mr/Ms : <b>$name</b>,";
	echo"\tSucessfully Registered,";    
echo "\nCandidate ID is : " . mysql_insert_id()."</div>";

	mysql_close($con);
}
?>
<form name='registration' method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  onsubmit="return formValidator()" >
<fieldset>
<legend><font color="green"><h2>Registration Form</h2></font></legend>
<table border="0">
<tr><td>Name</td> <td><input type="text" name="name" placeholder="Name" id="Name" required></td></tr>
<tr><td>Father's Name</td> <td><input type="text" name="fname" placeholder="Father Name" id="Fname" required></td></tr>
<tr><td>Address</td> <td><input type="text" name="address" placeholder="Address" id="Address" required></td></tr>
<tr><td>E-mail</td><td>   <input type="email" name="email" placeholder="ex.saveetha@gmail.com" id="Email" required/></td></tr>
<tr><td>Phone No.</td><td>   <input type="text" name="phone" placeholder="ex.09123456789" id="Phone" required/></td></tr>

<tr><td>Degree</td><td> 
<select name="degree" id="Degree"> 
<option>---------select---------</option>
<option>BE</option>
<option>BTech</option>
<option>ME</option>
<option>MTech</option>
<option>BSc</option>
<option>BCcm</option>
<option>BBA</option>
<option>BBM</option>
<option>BCS</option>
<option>BCA</option>
<option>BA</option>
<option>MSc</option>
<option>MCA</option>
<option>MBA</option>
<option>MSW</option>
<option>MBE</option>
<option>PGDM</option>
<option>BArch</option>
<option>MArch</option>
<option>BPharm</option>
<option>MPharm</option>
<option value="other">other</option>
</select>
</td>
<td><input type="text" name="OtherDegree" id="ocollage" style='display:none;'/></td></tr>

<tr height="5%"><td>Branch</td><td><select name="branch" id="Branch">
<option>--------------select---------------</option>
<option>AUTOMOBILE ENGINEERING</option> 
<option>CIVIL ENGINEERING</option>
<option>COMPUTER SCIENCE AND ENGG</option>
<option>MECHANICAL ENGINEERING</option>
<option>INFORMATION TECHNOLOGY</option>
<option>ELECTRONICS AND COMMUNICATION ENGG.</option>
<option>ELECTRICAL AND ELECTRONICS ENGG.</option>
<option>AERONAUTICAL ENGINEERING</option>
<option>BIO TECHNOLOGY</option> 
<option>BIO MEDICAL ENGG</option>
<option>PRODUCTION ENGINEERING</option>
<option>ELECTRONICS AND INSTRUMENT ENGG.</option>
<option>COMPUTER APPLICATION</OPTION>
<option>BUSINESS ADMINISTRATION</OPTION>
<option>PRODUCTION ENGINEERING</option>
<option>ELECTRONICS AND INSTRUMENT ENGG.</option>
<option>FASHION TECHNOLOGY</option>
<option>INSTRUMENTATION AND CONTROL</option>
<option>METALLURGICAL ENGINEERING</option>
<option>ROBOTICS AND AUTOMATION</option>
<option>TEXTILE TECHNOLOGY </option>
<option>PHARMACEUTICAL TECHNOLOGY</option>
<option>LEATHER TECHNOLOGY</option>
<option>INDUSTRIAL BIO-TECHNOLOGY</option>
<option>FOOD TECHNOLOGY</option>
<option>CHEMICAL ENGINEERING</option>
<option>APPAREL TECHNOLOGY</option>
<option>PRINTING TECHNOLOGY </option>
<option>MANUFACTURING ENGINEERING </option>
<option>MINING ENGINEERING </option>
<option>SOFTWARE ENGINEERING</option>
<option>MATERIALS SCIENCE AND ENGG</option>
<option>GEO-INFORMATICS</option>
<option>AGRICULTURE AND IRRIGATION ENGG</option>
<option>RUBBER AND PLASTIC TECHNOLOGY </option>
<option>PLASTIC TECHNOLOGY </option>
<option>MECHATRONICS </option>
<option>MATHEMATICS</option>
<option>COMPUTER SCIENCE</option>
<option>PHYSICS </option>
<option>CHEMISTRY</option>
<option>BIO-INFORMATICS</option>
<option>MICROBIOLOGY</option>
<option>TAMIL</option>
<option>ENGLISH</option>
<option>BIO-CHEMISTRY</option>
<option>OTHERS</option>
</select></td></tr>

<tr><td>Institute</td><td><input type="text" name="college" id="College" required></td></tr>
<tr><td>Year Of Passing</td><td><input type="text" placeholder="ex.2013" name="yopassing" id="YOPassing" required></td></tr>
<tr><td>Class/CGP</td><td><input type="text" placeholder="ex.First Class / 8.0" name="gcp" id="Gcp" required></td></tr>
<tr><td colspan="2" align="center"><input align="center" type="submit" name="submit" value="Register"></td></tr>
</table>
</fieldset>
</form>
</body>
</html>