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
if(isset($_POST['submit'])) {
    $id = $_POST['ID'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $cnum = $_POST['cnum'];
    $bdate= $_POST['bdate'];
    $bloodtype = $_POST['bloodtype'];
    $weightkg = $_POST['weightkg'];
    $heightm = $_POST['heightm'];
    $weightlbs = $_POST['weightlbs'];
    $heightin = $_POST['heightin'];
    $bmi = $weightkg / ($heightm * $heightm);
    $imbmi = 703 * $weightlbs / ($heightin * $heightin);

    $sql = "INSERT INTO `studentprofile` (`ID`,`name`, `age`, `address`, `cnum`, `bdate`, `bloodtype`, `weightkg`, `heightm`, `weightlbs`, `heightin`, `bmi`, `imbmi`) 
    VALUES ('$id', '$name', '$age', '$address', '$cnum', '$bdate', '$bloodtype', '$weightkg', '$heightm', '$weightlbs', '$heightin', '$bmi', '$imbmi')";
    $result = $conn->query($sql);

    if ($result === TRUE) {
        echo "New record created successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity 1.2 </title>
</head>
<body>
    <h1 style="text-align:center;background-color:powderblue;margin:15px;margin-left:200px;margin-right:200px;";> Student Profile </h1>
    <form action="" method="POST" style="margin-right:500px";>
        <fieldset style="margin-left:500px";>
            <label style="margin-left:100px">Name:</label>
            <input type="text" name="name"style="border-radius:10px; margin-top:5px";><br>
            <label style="margin-left:100px">Age:</label>
            <input type="number" name="age"style="border-radius:10px; margin-top:5px";><br>
            <label style="margin-left:100px">Address:</label>
            <input type="text" name="address"style="border-radius:10px;margin-top:5px";><br>
            <label style="margin-left:100px">Contact Number:</label>
            <input type="number" name="cnum"style="border-radius:10px;margin-top:5px";><br>
            <label style="margin-left:100px">Birthdate:</label>
            <input type="date" name="bdate"style="border-radius:10px;margin-top:5px";><br>
            <label style="margin-left:100px">BloodType:</label>
            <input type="text" name="bloodtype"style="border-radius:10px;margin-top:5px";><br>
            <label style="margin-left:100px">Weight(kg):</label>
            <input type="number" name="weightkg"style="border-radius:10px;margin-top:5px";><br>
            <label style="margin-left:100px">Height(m):</label>
            <input type="number" name="heightm" style="border-radius:10px;margin-top:5px";><br>
            <label style="margin-left:100px">Weight(lbs):</label>
            <input type="number" name="weightlbs" style="border-radius:10px;margin-top:5px";><br>
            <label style="margin-left:100px">Height(in):</label>
            <input type="number" name="heightin" style="border-radius:10px;margin-top:5px";><br>
            <input type="submit" name="submit" value="submit" style="border-radius:10px;margin-left:110px;margin-top:5px";>
        </fieldset>
    </form>

    <?php 


$sql = "SELECT * FROM studentprofile";

$result = $conn->query($sql);

?>
<div class="container">

        <h2>STUDENT LIST</h2>

<table class="table">

    <thead>

        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Address</th>
        <th>Contact #</th>
        <th>Birthdate</th>
        <th>BloodType</th>
        <th>Weight(kg)</th>
        <th>Height(m)</th>
        <th>Weight(lbs)</th>
        <th>Height(in)</th>


    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['age']; ?></td>
                        <td><?php echo $row['address']; ?></td>
                        <td><?php echo $row['cnum']; ?></td>
                        <td><?php echo $row['bdate']; ?></td>
                        <td><?php echo $row['bloodtype']; ?></td>
                        <td><?php echo $row['weightkg']; ?></td>
                        <td><?php echo $row['heightm']; ?></td>
                        <td><?php echo $row['weightlbs']; ?></td>
                        <td><?php echo $row['heightin']; ?></td>
    
                        <td>
                            <a class="btn btn-info" name="update" href="update.php?id=<?php echo $row['ID']; ?>">Edit</a>&nbsp;
                            <a class="btn btn-danger" name="delete" href="delete.php?id=<?php echo $row['ID']; ?>">Delete</a>
                        </td>
                    </tr>                       

        <?php       }
            }

        ?>                

    </tbody>

</table>

</body>
</html>