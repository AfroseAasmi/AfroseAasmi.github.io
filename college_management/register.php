<?php include("headd.html")
?>
<head>
<style>
label{display:inline-block;
width:100px;
text-align:right;
}
</style>
<body>
<div class="register">
<form action="connectivity.php" method="post">
<br><br><br>
<label for="name">NAME :</label>
<input type="text" size="50" placeholder="Enter your Name" name="n" required />
<br><br>
<label for="age">Age :</label>
<input type="number" name="a" />
<br><br>
<label for="dob">DOB :</label>
<input type="date" name="d" />
<br><br><br>
<label for="gender">Gender :</label>
<input type="radio" name="g" value="M" />Male
<input type="radio" name="g" value="F" />Female
<br><br><br>
<label for="email">Email :</label>
<input type="email" size="40" placeholder="Enter your Email" name="e" />
<br><br><br>
<label for="password">Password :</label>
<input type="password" name="p" min="4" maxlength="8" />
<br><br><br>
<label for="dept">Dept :</label>
<select name="s">
  <option value="CSE">CSE</option>
  <option value="ECE">ECE</option>
  <option value="EEE">EEE</option>
  <option value="CIVIL">CIVIL</option>
  <option value="CHEMICAL">CHEMICAL</option>
  <option value="EIE">EIE</option>
  <option value="BIOTECH">BIOTECH</option>
  <option value="IT">IT</option>
  <option value="MECH">MECH</option>
</select>
<br><br><br>
<input type="submit" value="register" />
<input type="reset" value="reset" />
</body>
<?php include("footerr.html")
?>
