<?php
//fitxer per definir les rutes
return [
    '/' => '../App/index.php',
    '/home' => '../App/index.php',
    '/index' => '../App/index.php',
    '/index.php' => '../App/index.php',

    '/books' => '../App/Controllers/BookController.php@index',
    '/books/create' => '../App/Controllers/BookController.php@create',
    '/books/store' => '../App/Controllers/BookController.php@store',
    '/books/edit/{id}' => '../App/Controllers/BookController.php@edit',
    '/books/update/{id}' => '../App/Controllers/BookController.php@update',
    '/books/delete/{id}' => '../App/Controllers/BookController.php@delete',
    '/books/destroy/{id}' => '../App/Controllers/BookController.php@destroy',
    '/books/confirm-delete/{id}' => '../App/Controllers/BookController.php@confirmDelete',
];