<?php

// richiamo il file che mi visualizzarà i dischi
require_once 'functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collego bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Collego il file css -->
    <link rel="stylesheet" href="css/style.css">

    <title>PHP Dischi</title>
</head>

<body>

    <nav class="navbar bg-body-tertiary py-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./images/Spotify_icon.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center">
                PHP Dischi
            </a>
        </div>
    </nav>


    <h1 class="text-center pt-3">PHP Dischi</h1>



    <div class="container">

        <div class="row">

            <?php

            foreach ($json_dischi_text as $disco) {
            ?>

                <div class="col-sm-12 col-md-6 col-lg-4 d-flex justify-content-center my-3">
                    <div class="card">
                        <div class="card-header text-center">
                            <strong>Disco</strong>
                        </div>

                        <?php
                        foreach ($disco as $key => $value) {
                        ?>

                            <ul class="list-group list-group-flush text-center">

                                <?php
                                if ($key == "url_della_cover") {
                                ?>

                                    <li class="list-group-item"> <?php echo "<img src=" . $value . " width=" . "200" . " height=" . "200" . ">";  ?> </li>

                                <?php
                                    continue;
                                }
                                ?>

                                <li class="list-group-item"><?php echo "<strong>" . ucwords($key) . "</strong>" . ": " . ucwords($value);  ?></li>
                            </ul>

                        <?php
                        }
                        ?>

                    </div>
                </div>
            <?php

            }

            ?>

        </div>

    </div>
</body>

</html>