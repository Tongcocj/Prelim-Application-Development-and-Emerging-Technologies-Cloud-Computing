<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
</head>
<body>

<?php ?>
<form action="index.php" method="get">
    </label>Name:</label>
    <input type="text" name="name"><br>
    </label>Age:</label>
    <input type="number" name="age"><br>
    </label>Address:</label>
    <input type="text" name="address"><br>
    </label>Contact Number:</label>
    <input type="number" name="cnum"><br>
    </label>Birthdate:</label>
    <input type="date" name="bdate"><br>
    </label>Gender:</label>
    <input type="text" name="gender"><br>
    </label>BloodType:</label>
    <input type="text" name="bloodtype"><br>
    </label>Weight(kg):</label>
    <input type="number" name="weightkg"><br>
    </label>Height(m):</label>
    <input type="double" name="heightm"><br>
    </label>Weight(lbs):</label>
    <input type="double" name="weightlbs"><br>
    </label>Height(in):</label>
    <input type="double" name="heightin"><br>
	<input type="submit">
</form>
<br>

<?php
$weightkg= $_GET['weightkg'];
$heightm= $_GET['heightm'];
$weightlbs= $_GET['weightlbs'];
$heightin= $_GET['heightin'];

    echo  "Name:", $_GET ["name"];
    echo  "<br>Age:", $_GET ["age"];
    echo  "<br>Contact Number:", $_GET ["cnum"] ;
    echo  "<br>Birthdate:", $_GET ["bdate"];
    echo  "<br>Gender:", $_GET ["gender"];
    echo  "<br>Blood Type:", $_GET ["bloodtype"];
    echo  "<br> Your Metric BMI is:", $weightkg/($heightm*$heightm);
    echo  "<br> Your Imperial BMI is:", 703*$weightlbs/($heightin*$heightin);
?>
</body>
</html>