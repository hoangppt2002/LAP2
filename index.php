<!DOCTYPE html>
<html>

<head>
<title>PHP Object Oriented Programming</title>
<!-- Unicode Vietnamese -->
<meta charset="utf-8">
<meta name="author" content="HuynhThaiHung.com" />
<!-- css definition file -->
<link href="../lap1/style.css" rel="stylesheet" />
</head>

<body>
<div id="wrapper">
<div class="row">
<?php
require_once("thanhvien.php");
// create new user info
$sv = new member("Nguyen Vinh Hoang", "Vhoang2102002@gmail.com");
//output user info
echo "<h2>-- Member information --</h2>";
echo "Code: ".$sv -> get_id()."<br/>";
echo "Fullname: ".$sv -> get_fullname()."<br/>";
echo "Email: ".$sv -> get_email()."<br/>";
?>
<?php
$sv2 = new member("Nguyen Vinh Hoang", "Vhoang2102002@gmail.com");
echo "<h2>---More information--</h2>";
echo "Code: ".$sv2 -> get_id()."<br/>";
echo "Fullname: ".$sv2 -> get_fullname()."<br/>";
echo "Email: ".$sv2 -> get_email()."<br/>";
?>

</div>
<footer>
<p>Trendemy: <a href="trendemy.com">trendemy@gmail.com</a>.</p>
</footer>
</div>
<?php
//more opp php
include("staff.php");
$character = new character("ABC", 5678);
echo "<h2>--- Add: Object Oriented PHP ---</h2>";
echo "Full name: " . $character->get_fullname() . "<br/>";
echo "Country code: " . $character->get_countrycode() . "<br/>";

?>

<?php
$staff = new staff("XYZ", 1234, "Guard");
echo "<h2>---Staff---</h2>";
echo "Mã nhân viên: " . $staff->get_staffcode() . "<br/>";
echo "Họ tên: " . $staff->get_fullname() . "<br/>";
echo "Mã QG: " . $staff->get_countrycode() . "<br/>";
echo "Bộ phận: " . $staff->get_part() . "<br/>";
?>
</body>

</html>