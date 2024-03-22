<?php
//This variable stores the hostname of mysql server.
$serverName = "localhost";

//This variable stores the username used to connect to the MySQL database.
$user = "root";

//This variable stores the pass used to connect to the MySQL database.
$pass = "";

//This variable stores the name of the database yo want to connect to within the MySQL server.
$databaseName = "biometrics";

//Establishing the connection between php and your database
$conn = new mysqli($serverName, $user, $pass, $databaseName);

//Checking the connection if its successfully established or not
if ($conn->connect_error) {
    die("Connection Failed: ".$conn->connect_error);

}
echo "Connection Established!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

    if (isset($_POST['update'])) {

        $id = $_POST['ID'];

        $name = $_POST['name'];

        $age = $_POST['age'];

        $address = $_POST['address'];

        $cnum= $_POST['cnum'];

        $bdate = $_POST['bdate'];

        $bloodtype = $_POST['bloodtype'];

        $weightkg = $_POST['weightkg'];

        $heightm = $_POST['heightm'];

        $weightlbs = $_POST['weightlbs'];

        $heightin = $_POST['heightin'];

        $sql = "UPDATE `studentprofile` SET `name`='$name',`age`='$age',`address`='$address',`cnum`='$cnum',`bdate`='$bdate',`bloodtype` = '$bloodtype', `weightkg` = '$weightkg', `heightm` = ' $heightm', `weightlbs` = '$weightlbs', `heightin` = '$heightin' WHERE `ID`='$id'"; 

        $result = $conn->query($sql); 

        if ($result == TRUE) {

            echo "Record updated successfully.";

        }else{

            echo "Error:" . $sql . "<br>" . $conn->error;

        }

    } 

if (isset($_GET['ID'])) {

    $id = $_GET['ID']; 

    $sql = "SELECT * FROM `studentprofile` WHERE `ID`='$id'";

    $result = $conn->query($sql); 

    if ($result->num_rows > 0) {        

        while ($row = $result->fetch_assoc()) {

            $id = $row['ID'];

            $name = $row['name'];
    
            $age = $row['age'];
    
            $address = $row['address'];
    
            $cnum= $row['cnum'];
    
            $bdate = $row['bdate'];
    
            $bloodtype = $row['bloodtype'];
    
            $weightkg = $row['weightkg'];
    
            $heightm = $row['heightm'];
    
            $weightlbs = $row['weightlbs'];
    
            $heightin = $row['heightin'];
        } 

?>

        <h2>Student Profile Update Form</h2>

        <form action="" method="post">

          <fieldset>

            <legend>Personal information:</legend>

            Name:<br>
    <input readonly type="text" name="name" value="<?php echo $name; ?>">
    <input readonly type="hidden" name="ID" value="<?php echo $id; ?>">
    <br>
    Age:<br>
    <input readonly type="number" name="age" value="<?php echo $age; ?>">
    <br>
    Address:<br>
    <input readonly type="text" name="address" value="<?php echo $address; ?>">
    <br>
    Contact:<br>
    <input readonly type="phone" name="cnum" value="<?php echo $cnum; ?>">
    <br>
    Birthdate:<br>
    <input readonly type="date" name="bdate" value="<?php echo $bdate;?>">
    BloodType:<br>
    <input readonly type="text" name="bloodtype" value="<?php echo $bloodtype;?>">
    Weight(kg):<br>
    <input readonly type="number" name="weightkg" value="<?php echo $bloodtype;?>">
    Height(m):<br>
    <input readonly type="number" name="heightm" value="<?php echo $bloodtype;?>">
    Weight(lbs):<br>
    <input readonly type="number" name="weightlbs" value="<?php echo $bloodtype;?>">
    Height(in):<br>
    <input readonly type="number" name="heightin" value="<?php echo $bloodtype;?>">

            
            <br><br>

            <input type="submit" value="Update" name="update">

          </fieldset>

        </form> 



</body>
</html>
<?php
} else { 

    header('Location: BMI.php');

} 
}
?> 