<?php 
$ServerName = "localhost";
$user = "root";
$pass = "";
$databaseName = "biometrics";
$conn = new mysqli($ServerName, $user, $pass, $databaseName);

if ($conn->connect_error){
    die("Connection Failed: ".$conn->connect_error);
}
    
echo "Connection Established!";
?>
<?php 

if (isset($_POST['delete'])) {

    $id = $_POST['ID'];

    $sql = "DELETE FROM `studentprofile` WHERE `ID`='$id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>
<?php
if (isset($_GET['ID'])) {

$id = $_GET['ID']; 

$sql = "SELECT * FROM `studentprofile` WHERE `ID`='$id'";

$result = $conn->query($sql); 

if ($result->num_rows > 0) {        

    while ($row = $result->fetch_assoc()) {

        $name = $row['name'];
        $age = $row['age'];
        $address = $row['address'];
        $cnum  = $row['cnum'];
        $bdate = $row['bdate'];
        $bloodtype = $row['bloodtype'];
        $weightkg = $row['weightkg'];
        $heightm = $row['heightm'];
        $weightlbs = $row['weightlbs'];
        $heightin = $row['heightin'];
        $id = $row['id'];

    } 

?>
     <h2>Student Profile Delete Form</h2>

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

    <input type="submit" value="Delete" name="delete">

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