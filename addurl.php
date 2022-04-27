<?php
            header("Location: index.php");
            require_once ('includes/dbconf.php');

            if(isset($_POST['submit']))

            if (!$conn) {
                die("Error DB " . mysqli_connect_error());
            }
            $url = $_POST['url'];
            $title = $_POST['title'];
            $sql = "INSERT INTO ytdir (url, name)
            VALUES ('$url', '$title')";
            if (mysqli_query($conn, $sql)) {
                echo "<h2>url added</h2>";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);

?>


