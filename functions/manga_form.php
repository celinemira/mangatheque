<?php

// Champs requis dans mon formulaire de contact
const REQUIRED_FIELDS = ['title_books', 'image_books', 'author_books', 'summary_books', 'date_publication_books', 'tomes_books', 'id_gender'];

/**
 * Utiliser cette fonction en lui passant $_POST
 * afin de vérifier que les champs requis sont bien
 * présents
 *
 * @param array $data
 * @return boolean
 */
function isMangaFormValid(array $data): bool
{
    foreach (REQUIRED_FIELDS as $field) {
        // Si non défini, ou bien défini mais vide
        if (!isset($data[$field]) || empty($data[$field])) {
            return false;
        }
    }

    return true;
}