<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project</title>
</head>
<body>
    <tbody>
    <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "lab_project";

        $connection = new mysqli($servername, $username, $password, $database);

        if($connection->connect_error) {
            die("Connection Failed" .$connection->connect_error);
        }

        $sql = "select * from buy";
        $result = $connection->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row["NAME"]."</td>
                <td>".$row["NID"]."</td>
                <td>".$row["CAR_NAME"]."</td>
                <td>".$row["SERIAL_NUMBER"]."</td>

            </tr>
            <br>";
        }
    ?>
    </tbody>
    
</body>
</html>