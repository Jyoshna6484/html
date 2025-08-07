<html>
<head>
<title> Registration Form</title>
</head>
<body>
<center>
<h2> Register Here</h2>
<form action="eight.php" method="POST">
<label for="uname">username:</label><br>
<input type="text" name="uname" placeholder="username" required><br>
<label for="email">Email:</label><br>
<input type="email" name="email" placeholder="Email" required><br>
<label for="password">password:</label><br>
<input type="password" name="password" placeholder="password" required><br>
<label for="confirm password">confirm password:</label><br>
<input type="password" name="confirm_password" placeholder="confirm password" required><br>
<label for="mobile">mobile number:</label><br>
<input type="tel" name="mobile" placeholder="mobile number" pattern="[0-9]{10}" required><br>
<label>gender:</label><br>
<input type="radio" name="gender" value="male" required>
<label for="male">male</label>
<input type="radio" name="gender" value="female">
<label for="female">female</label><br><br>
<label for="dob">date of birth:</label><br>
<input type="date" name="dob" required><br><br>
<label for="country">select country:</label><br>
<select name="country" required>
<option value="" disabled selected>_ _ _select     </option>
<option value="USA">United States</option>
<option value="Canada">canada</option>
<option value="India">India</option>
</select><br>
<label>
<input type="checkbox" name="terms" required> i agree to the terms and conditions
</label><br>
<input type="submit" value="Register">
</form>
</center>
</body>
</html>
<?php 
if(isset($_GET['name'])){
$username=$_POST['uname'];
$email=$_POST['email'];
$password=$_post['password'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$student_id=$_POST['country'];
$college=$_POST['terms'];
echo 'username:'.$username."<br>";echo 'email:'.$Email."<br>";
echo "password:[hidden]<br>";
echo 'mobile :'.$mobilenumber."<br>";echo 'gender:'.$gender."<br>";
echo 'date of birth:'.$birth."<br>";echo 'country:'.$country.'<br>';
echo 'Terms and Conditions are Selected        '.$terms;
}
?>