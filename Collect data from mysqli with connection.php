<html>
    <head>
        <title>Last 10 Results</title>
    </head>
    <body>
        <table>
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
            </tr>
        </thead>
        <tbody>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "1234";
            $dbname = 'registration';
        
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $results = mysqli_query($conn,"SELECT * FROM user LIMIT 10");
            while($row = mysqli_fetch_array($results)) {
            ?>
                <tr>
                    <td><?php echo $row['id']?></td>
                    <td><?php echo $row['name']?></td>
                </tr>

            <?php
            }
            ?>
            </tbody>
            </table>
    </body>
</html>