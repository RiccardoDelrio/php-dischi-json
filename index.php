<?php
include_once("./server.php");

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
</head>

<body>

    <?php
    // Container and row should wrap all cards, not be inside the foreach
    ?>
    <div class="container mt-3">
        <div class="row">
            <?php foreach ($dischi as $disco) { ?>
                <div class="col-3 mb-4">
                    <div class="card">
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
    </div>
</body>

</html>