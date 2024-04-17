<?php

require_once __DIR__ . '/functions/utils.php';
require_once __DIR__ . '/functions/manga_form.php';
require_once __DIR__ . '/functions/db.php';

// 1 - Est-ce que j'ai des données ?
if (empty($_POST)) {
    redirect('manga.php');
}

// 2 - Est-ce que les données que j'attends sont bien présentes ?
if (!isMangaFormValid($_POST)) {
    redirect('manga.php');
}

// 3 - Si je suis à cet endroit, ça veut dire que
// mes données bien sont bien présentes, et valides.
// À partir de là, je peux commencer à me connecter à la BDD
try {
    $pdo = getConnection();
} catch (PDOException $e) {
    redirect('manga.php');
}

// 4 - Si je me trouve ici, alors ça veut dire
// que je ne suis pas passé dans le catch.
// Je vais donc enregistrer la demande de contact
// en base de données
$stmt = $pdo->prepare("INSERT INTO manga_requests (title_books, image_books, author_books, summary_books, date_publication_books, tomes_books, id_gender) VALUES (:formTitle, :formImage, :formAuthor, :formSummary, :formDatePublication, :formTomes, :formGender)");

// Lier les valeur à leurs paramètres
$stmt->bindValue('formTitle', $_POST['title_books']);
$stmt->bindValue('formImage', $_POST['image_books']);
$stmt->bindValue('formAuthor', $_POST['author_books']);
$stmt->bindValue('formSummary', $_POST['summary_books']);
$stmt->bindValue('formDatePublication', $_POST['date_publication'], PDO::PARAM_INT);
$stmt->bindValue('formTomes', $_POST['tomes_books']);
$stmt->bindValue('formGender', $_POST['id_gender']);

// Exécuter
$success = $stmt->execute();

if (!$success) {
    redirect('manga.php');
}
