<?php
//pengulangan pada array
// for / foreach
$angka = [3, 2, 15, 20, 11, 77, 89];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 2</title>
    <style>
        .contoh {
            width: 80px;
            height: 80px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>

<body>
    <?php for ($kotak = 0; $kotak < count($angka); $kotak++) { ?>
        <div class="contoh"><?php echo $angka[$kotak]; ?></div>
    <?php } ?>

    <div class="clear"></div>
    <?php foreach ($angka as $tempatAngka) { ?>
        <div class="contoh"><?= $tempatAngka;  ?></div>
    <?php } ?>
</body>

</html>