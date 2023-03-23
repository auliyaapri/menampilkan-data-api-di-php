<?php

$sumber = 'https://dummyjson.com/products';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);
// var_dump($data);

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>

<body>
    
    <div class="container mt-5 mb-5">
        <h3>Belajar Menampilkan API dengan PHP</h3>
        <div class="row">
            <?php foreach ($data['products'] as $row) : ?>
                <div class="col-4 mt-3">
                    <div class="card shadow-lg" style="width: 25rem; height: 23rem;">
                        <img src="<?= $row['thumbnail'];?>">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row['title']; ?></h5>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo $row['brand']; ?> / <?php echo $row['category']?></h6>
                            <p><?php echo $row['description']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>