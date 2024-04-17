<?php
require_once __DIR__ .'/layout/header.php';
require_once __DIR__ . '/functions/db.php';

try {
    $pdo = getConnection();
} catch (PDOException $e) {
    echo "Erreur lors de la connexion à la base de données";
    exit;
}

// Je lance une requête avec l'instance de PDO
$stmt = $pdo->query("SELECT * FROM books");
// À partir du Statement récupéré, je lis tous les résultats
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
//var_dump($books);


$stmt = $pdo->query("SELECT * FROM members");

$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<h1 class="text-center text-6xl font-bold">Bienvue sur PokiMangas</h1>

<section class="prose lg:prose-xl max-w-[900px] mx-auto mt-12">
    <h2 class="italic text-center text-sm">Mangathèque</h2><br>
</header>
<section>
<div class="flex flex-wrap gap-12 justify-center">
    <?php foreach ($books as $manga) { 
        ?>
        <div>
            <h2 class= "text-center text-xl font-bold"><?php echo $manga['title_books']; ?></h2><br>
            <a href="manga.php?id=<?php echo $manga['id_books']; ?>">
                <img src="asset/img/<?php echo $manga ['image_books']; ?>" alt="<?php echo $manga['title_books']; ?>" />
            </a>
        </div>
    <?php } ?>
</div>    
</section>

<?php require_once __DIR__ . '/layout/footer.php';