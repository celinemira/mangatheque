<?php
//require_once __DIR__ .'/data/books.php';
require_once __DIR__ .'/layout/header.php';
require_once __DIR__ .'/functions/getManga.php';
require_once __DIR__ .'/functions/db.php';

$id = $_GET['id'];

try {
    $pdo = getConnection();
} catch (PDOException $e) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

// Je lance une requête avec l'instance de PDO
$stmt = $pdo->query("SELECT * FROM books AS b INNER JOIN gender_books AS g_b ON g_b.books_id = b.id_books INNER JOIN gender AS g ON g_b.gender_id = g.id");
// À partir du Statement récupéré, je lis tous les résultats
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);

$manga = getManga($id, $books);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mangas</title>
</head>
<body>
    
<main class="prose lg:prose-xl max-w-[900px] mx-auto mt-12">

    <h1><?php echo $manga['title_books']; ?></h1>
        
    <img src="asset/img/<?php echo $manga['image_books']; ?>" alt="<?php echo $manga ['title_books']; ?>">

    <h3>Sommaire :</h3>
        <h5><p><?php echo $manga['summary_books']; ?></p></h5> 

    <h4>Auteur : </h4>
        <?php echo $manga['author_books']; ?></p>
        
    <h4>Genre : </h4>
        <?php echo $manga['gender_name'];?></p>

    <h4>Nombre de tomes parru en France : </h4>
        <?php echo $manga['tomes_books']; ?></p>

    <h4>Année de sortie : </h4>
        <?php echo $manga['date_publication_books']; ?></p>

</main>


<?php require_once 'layout/footer.php';