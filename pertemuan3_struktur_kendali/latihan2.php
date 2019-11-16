<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: #ff2323;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <!-- <?php
                for ($i = 1; $i <= 5; $i++) {
                    echo "<tr>";
                    for ($j = 1; $j <= 5; $j++) {
                        echo "<td>$i,$j</td>";
                    }
                    echo "</tr>";
                }
                ?> -->

        <!-- //gaya templeting -->
        <?php for ($kolom = 1; $kolom <= 5; $kolom++) { ?>
            <?php if ($kolom % 2 == 0) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($baris = 1; $baris <= 5; $baris++) { ?>
                    <td>
                        <?php echo "$kolom, $baris"; ?>
                    </td>
                <?php } ?>
                </tr>
            <?php } ?>
    </table>
</body>

</html>