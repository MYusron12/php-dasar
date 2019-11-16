<!-- materi kuliah -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
</head>

<body>
    <table border="1" cellspacing="0" cellpadding="0">
        <!-- <?php for ($kotak = 1; $kotak <= 5; $kotak++) { ?>
            <?php if ($kotak % 2 == 0) : ?>
                <tr>
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($kotakBawah = 1; $kotakBawah <= 5; $kotakBawah++) { ?>
                    <td>
                        <?php echo "$kotak, $kotakBawah"; ?>
                    </td>
                <?php } ?>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
                <td>1,5</td>
                </tr>
            <?php } ?> <br> -->

        <?php for ($utama = 1; $utama <= 5; $utama++) {
            echo "<tr>";
            for ($kedua = 1; $kedua <= 5; $kedua++) {
                echo "<td>$utama, $kedua</td>";
            }
            echo "</tr>";
        } ?>
    </table>
</body>

</html>