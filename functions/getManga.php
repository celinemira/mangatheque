<?php

function getManga(int $id, array $books): ?array
{
    $booksIds = array_column($books, 'books_id');
    $bookKey = array_search($id , $booksIds);

    if ($bookKey === false) {
        return null;
    }

    return $books[$bookKey];
}