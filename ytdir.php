<html>

<head>

    <title> My PHP journey </title>

    <!-- mon css -->

    <link href="assets/css/style.css" rel="stylesheet">


    <!-- Latest compiled and minified CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <!-- fa -->
    <script src="https://kit.fontawesome.com/c81198f907.js" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg custombg">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="">My PHP Journey</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#example-navbar-primary" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar bar1"></span>
                    <span class="navbar-toggler-bar bar2"></span>
                    <span class="navbar-toggler-bar bar3"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="example-navbar-primary">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">
                            <i class="fa-solid fa-address-card"></i>
                            <p> About</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/budgetor.php">
                            <i class="fa-solid fa-calculator"></i>
                            <p> Budgetor</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/ytdir.php">
                            <i class="fa-brands fa-youtube"></i>
                            <p> ytdir</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</head>

<body class="bg-dark">
    <br>


    <div class="container col bg-light bg-gradient mt-3 shadow-lg p-3  bg-light rounded">
        <div class="col-auto col-md-offset-1 ">
            <div class="alert custombg" role="alert">
                <strong> <i class="fa-solid fa-dragon text-light"> simple youtube url manager</i></strong>
            </div>
            <div class="panel panel-default panel-table">
                <div class="panel-heading ">
                    <div class="row">

                        <script>
                            var alertList = document.querySelectorAll('.alert');
                            alertList.forEach(function(alert) {
                                new bootstrap.Alert(alert)
                            })
                        </script>
                    </div>
                    <form class="form" action="addurl.php" method="post">
                        <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label for="title" class="col-form-label"><i class="fa-solid fa-file-signature"> Title</i></label>
                            </div>
                            <div class="col-auto">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="title" id="title" placeholder="" style="width: 173px;" required>

                                </div>
                            </div>
                            <div class="col-auto">
                                <label for="title" class="col-form-label"><i class="fa-solid fa-hashtag"> Video ID</i></label>
                            </div>
                            <div class="col-auto">
                                <div class="input-group">
                                    <span class="input-group-text" id="youtubeurl">https://www.youtube.com/watch?v=</span>
                                    <input type="text" class="form-control" placeholder="" name="url" aria-describedby="youtubeurl" required>
                                    <button class="btn btn-success" name="AddUrl" type="submit"> <i class="fa-solid fa-circle-plus"></i></button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-auto py-1">
                    <div class="panel-body">
                        <table class="table table-striped table-bordered table-list">
                            <?php

                            // setup la db
                            require_once('includes/dbconf.php');

                            // variables de la db
                            $ytdb = "SELECT id, url, name, fav FROM ytdir";
                            $urldata = mysqli_query($conn, $ytdb);

                            // verifications et requetes
                            if (mysqli_num_rows($urldata) > 0) {
                                echo
                                "
                            <thead>
                            <tr>
                            <th>VIDEO TITLE</th>
                            <th>URL PARAMETERS</th>
                            <th>ACTIONS</th>
                            </tr>
                            </thead>";


                                while ($row = mysqli_fetch_array($urldata)) {
                                    echo '<form class="form" method="post">';
                                    echo "<tr>";
                                    echo "<td style='width: 200px'>" . $row['name'] . "</td>";
                                    echo "<td style='width: 135px'>" . $row['url'] . "</td>";
                                    echo '<td style="width: 165px;"><button class="btn btn-info" formaction="https://www.youtube.com/watch?v=' . $row['url'] . '" name="favbtn"><i class="fa-solid fa-eye"> Watch</i></button><button class="btn btn-danger ms-2" type="submit" name="delbtn" value="' . $row['id'] . '" /><i class="fa-solid fa-ban"> Delete</i></button></td>';
                                    echo "</tr>";
                                    echo '</form>';
                                }

                                echo "</table>";

                                if (isset($_POST['delbtn']) and is_numeric($_POST['delbtn'])) {
                                    $delete = $_POST['delbtn'];
                                    $ytdel =  "DELETE FROM `ytdir` where `id` = '$delete'";
                                    mysqli_query($conn, $ytdel);
                                }


                                mysqli_close($conn);
                            }


                            ?>

                            <br>
                            <nav aria-label="More Results">
                                <ul class="pagination pagination-md">
                                    <li class="page-item active" aria-current="page">
                                        <span class="page-link">1</span>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>

                    </div>

                </div>
            </div>

        </div>
    </div>



    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>