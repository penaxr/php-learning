<?php

            require_once ('includes/dbconf.php');
            if(isset($_POST['submit']))

            if (!$conn) {
                die("Error DB " . mysqli_connect_error());
            }
            $task = $_POST['task'];
            $date = $_POST['date'];
            $sql = "INSERT INTO todo (task, date)
            VALUES ('$task', '$date')";
            if (mysqli_query($conn, $sql)) {
                echo "task added";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }

            mysqli_close($conn);

            ?>