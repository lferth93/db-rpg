<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <h1>Test</h1
        <?php
            require 'conn.php';
            $conn = get_conn();
            $sql = "SELECT * FROM habilidades";
            $res = $conn->query($sql);
            while($row = $res->fetch_assoc()){
                echo "<p>".$row['nombre']."</p>";
            }
        ?>

    </body>
</html>