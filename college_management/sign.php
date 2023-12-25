<!DOCTYPE html>

<html>
<center>
<img src="images/llhead.jpg" </img>
<br><br>
<div class="head"
<header><h1 style="font: size 500px;">LOGIN</h1></header>
<head>

<title style="font: size 500px;"></title>

<center>

    <title>LOGIN</title>

    <link rel="stylesheet" type="text/css" href="sheet.css">
	<form action="db.php" method="post">
	<form action="valid.php" method="post">

</head>

<body>

     <form action="loginvalid.php" method="post">

        

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>

        <label>User Name</label>

        <input type="text" name="u" placeholder="User Name"><br>
		<br>

        <label>Password</label>

        <input type="password" name="p" placeholder="Password"><br> 
		<br>        

<label for="des">Select :</label>
<select name="s">
  <option value="stu">Student</option>
  <option value="staff">Counsellor/HOD</option>
  <option value="incharge">Year Incharge</option>
  </select>

<br><br>
<button type="submit"><a href="home.php">Login</a></button>

     </form>
</div>
</body>

</html>
