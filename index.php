<?php

$discsFromJsonContent = file_get_contents("discs.json");
$discsArray = json_decode($discsFromJsonContent, true);

?>

<!doctype html>
<html lang='en'>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid p-3">

        <h1 class="text-center mt-4">Discs catalogue</h1>

        <div class='row row-cols-1 row-cols-md-4 g-4 mt-4'>

            <?php

            foreach ($discsArray as $disc) {
                echo "
                    <div class='col'>
                        <div class='card' style='height: 390px'>
                            <img src='{$disc['cover']}' class='card-img-top' alt='{$disc['title']}' style='height: 170px'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$disc['title']}</h5>
                                <p class='card-text'>{$disc['artist']}</p>
                                <p class='card-text'>{$disc['year']}</p>
                                <p class='card-text'>{$disc['genre']}</p>
                            </div>
                        </div>
                    </div>
                ";
            };

            ?>

        </div>

        <form action="index.php" method="POST" class="form-control d-flex flex-column gap-3 p-4 mt-4">

            <h2>Add a new disc</h2>

            <input type="text" name="titleInput" placeholder=" Enter disc title" required>

            <input type="text" name="artistInput" placeholder=" Enter disc artist" required>

            <input type="text" name="yearInput" placeholder=" Enter disc year of release" required>

            <input type="text" name="genreInput" placeholder=" Enter disc genre" required>

            <input type="text" name="imageInput" placeholder=" Enter disc image url" required>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>

</html>