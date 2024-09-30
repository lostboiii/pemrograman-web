<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Multidimension Array</h2>
    <table>
        <tr>
            <th>Judul Film</th>
            <th>Tahun</th>
            <th>Rating</th>
        </tr>
        <?php
        $movie = array(
            array("Joker", 2019, 9.0),
            array("Avengers: Endgame", 2019, 8.5),
            array("Inception", 2010, 8.8),
            array("The Shawshank Redemption", 1994, 9.3)
        );
        echo "<tr>";
        echo "<td>".$movie[0][0]."</td>";
        echo "<td>".$movie[0][1]."</td>";
        echo "<td>".$movie[0][2]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$movie[1][0]."</td>";
        echo "<td>".$movie[1][1]."</td>";
        echo "<td>".$movie[1][2]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$movie[2][0]."</td>";
        echo "<td>".$movie[2][1]."</td>";
        echo "<td>".$movie[2][2]."</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$movie[3][0]."</td>";
        echo "<td>".$movie[3][1]."</td>";
        echo "<td>".$movie[3][2]."</td>";
        echo "</tr>";
        ?>
        
    </table>
</body>
</html>