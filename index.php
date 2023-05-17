<?php

$conn = mysqli_connect('localhost', 'root', '', 'conciergerie');

?>

<html lang="fr">
<head>
    <title>Conciergerie</title>
</head>
<body>
<H1>Nos produits</H1>
<?php
// On créé la requête
$req = "SELECT * FROM produits";
// on envoie la requête
$res = $conn->query($req);
echo "Nous possédons ".$res->num_rows." produit(s)";
?>
    <ul>
        <?php
        while ($data = mysqli_fetch_array($res)) {
            //var_dump($data);
            echo "<li>".$data['id']."</li>";
        }
        ?>
    </ul>
</body>
</html>

