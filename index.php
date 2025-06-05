<?php
$json_text = file_get_contents("./dischi.json");
$dischi = json_decode($json_text, true);
if (!is_array($dischi)) {
    $dischi = [];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./index.css">
</head>

<body>

    <?php

    ?>
    <nav class="navbar ">
        <div class="container-fluid">
            <a class="navbar-brand fs-2 text-white " href="./index.php"><img class="logo me-3"
                    src="https://storage.googleapis.com/pr-newsroom-wp/1/2023/05/Spotify_Primary_Logo_RGB_Green.png"
                    alt="">Booleanfy</a>
        </div>
    </nav>

    <div class="container mt-3">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4">
            <?php foreach ($dischi as $disco) { ?>
                <div class="col mb-4">
                    <div class="card" style="min-height: 500px; ">
                        <img src="<?php echo $disco["cover"]; ?>" class="card-img-top" alt="cover">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo $disco["titolo"] ?></h4>
                            <h6 class="card-title"><?php echo $disco["artista"] ?></h6>
                            <p class="card-text"><?php echo $disco["genere"] ?></p>
                            <p class="card-text"><?php echo $disco["anno"] ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="accordion custom-accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button bg-success text-white fw-bold shadow-sm" type="button"
                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                        aria-controls="collapseOne">
                        <i class="bi bi-plus-circle me-2"></i> Aggiungi un nuovo disco
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <form action="./server.php" method="post" class="mt-4 p-4">
                        <div class="mb-3">
                            <label for="titolo" class="form-label">Inserisci il titolo del disco</label>
                            <input type="text" class="form-control" id="titolo" name="titolo">
                        </div>
                        <div class="mb-3">
                            <label for="artista" class="form-label">Inserisci l'artista del disco</label>
                            <input type="text" class="form-control" id="artista" name="artista">
                        </div>
                        <div class="mb-3">
                            <label for="cover" class="form-label">Inserisci il cover del disco</label>
                            <input type="text" class="form-control" id="cover" name="cover">
                        </div>
                        <div class="mb-3">
                            <label for="anno" class="form-label">Inserisci l'anno del disco</label>
                            <input type="text" class="form-control" id="anno" name="anno">
                        </div>
                        <div class="mb-3">
                            <label for="genere" class="form-label">Inserisci il genere del disco</label>
                            <input type="text" class="form-control" id="genere" name="genere">
                        </div>
                        <button type="submit" class="btn btn-success">Aggiungi Disco</button>
                    </form>
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>
</body>

</html>