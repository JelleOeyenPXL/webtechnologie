<!DOCTYPE html>
<html>
    <head>
        <title> table sql </title>
    </head>
    <body>
        <table>
            <tr>
                <th>id</th>
                <th>username</th>
                <th>password</th>
            </tr>
            <?php
                $conn = mysqli_connect("localhost", "xilinx", "", "website");
                if ($conn-> connect_error)
                {
                    die("connection failed:".$conn-> connect_error);
                }
                $sql = "SELECT id, username, password FROM login";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) 
                {
                while($row = $result->fetch_assoc())
                {
                echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
                . $row["password"]. "</td></tr>";
                }
                echo "</table>";
                }
                else 
                {
                    echo "0 results"; 
                }
                $conn->close();
            ?>
        </table>  
    </body> 
    </html>

