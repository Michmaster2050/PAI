<html>
    <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "5ina21";

    // create connection
    $conn = mysqli_connect($servername, $username, $password);
    //connection check
    if (!$conn) {
        die("Conncetion failed". mysqli_connect_error());
    }
    echo"Connected succesfully";

    // $sql = "CREATE DATABASE $database";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Database created successfully <br>";
    // } else {
    //     echo "Error creating database". mysqli_error($conn);
    // }

    if(mysqli_select_db($conn, $database)) {
        echo "Database $database selected <br>";
    } else {
        echo "Error select database". mysqli_error($conn);
    }

    // $sql="CREATE TABLE MyGuests (
    //     id INT(6) UNSIGNED AUTO_INCREMENT Primary KEY,
    //     firstname VARCHAR(20) NOT NULL,
    //     lastname Varchar(20) NOT NULL,
    //     email Varchar(50),
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";
    // if(mysqli_query($conn, $sql)) {
    // echo "Table MyGuests created successfully <br>";
    // } else {
    // echo"Error creating table". mysqli_error($conn);}

    // $sql = "INSERT INTO MyGuests(firstname, lastname, email) Values ('Michal', 'Salaciak', 'michal@example.com');";
    // $sql .= "INSERT INTO MyGuests(firstname, lastname, email) Values ('Michal', 'Stasik', 'stasik@example.com');";
    // $sql .= "INSERT INTO MyGuests(firstname, lastname, email) Values ('Sebastian', 'Marek', 'seba@example.com');";

    // if(mysqli_multi_query($conn, $sql)) {
    //     echo "New record created successfully";
    // } else {
    //     echo " Error: ". $sql . "<br>". mysqli_error($conn);
    // }
    ?>
        <table align = "left" border = "1" cellpadding = "3" cellspacing = "2">
            <?php
            // $sql = "SELECT id, firstname, lastname FROM myGuests";
            // $result = mysqli_query($conn, $sql);

            // if (mysqli_num_rows($result) > 0) {
            //     while($row = mysqli_fetch_assoc($result)) {
            //         echo "<tr>";
            //         echo " <td>". "id: ". $row["id"]. "</td>";
            //         echo " <td>". "name: ". $row["firstname"]. "</td>";
            //         echo " <td>". "lastname: ". $row["lastname"]. "</td>";
            //         echo "</tr>";
            //     } 
            // } else {
            //     echo "0 results";
            // }
            ?>
        </table>
    </body>

    <?php
    $sql = "DELETE FROM MyGuests WHERE id=3";

    if(mysqli_query($conn, $sql)) {
        echo "Record deleted successfully <br>";
    } else {
        echo "Error deleting record: ". mysqli_error($conn);
    }
    ?>

    <?php
    $sql = "UPDATE MyGuests set lastname = 'Doe' where id=2";

    if(mysqli_query($conn, $sql)) {
        echo "Record updated successfully <br>";
    }else {
        echo "Error updating record: ". mysqli_error($conn);
    }
    ?>
</html>