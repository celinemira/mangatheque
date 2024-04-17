<?php

require_once __DIR__ . '/db.php';

/**
 * Récupère toutes les demandes de contact
 * présentes en base de données
 *
 * @return array
 */
function getMangaRequests(): array
{
    $pdo = getConnection();
    $stmt = $pdo->query("SELECT * FROM manga_requests");
    return $stmt->fetchAll();
}