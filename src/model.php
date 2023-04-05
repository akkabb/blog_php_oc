<?php

function getPosts(){
    //Create variables to store DB elements
    $dns = 'mysql:host=localhost; dbname=blog';
    $user = 'root';
    $password = 'root';

    // Connect to our database
    try{
        $database = new PDO($dns, $user, $password, [
            PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }
    catch (Exception $e)
    {
        die('ERREUR : ' . $e->getMessage());
    }

    // We retieve the 5 last blog posts.
    $statement = $database->query("SELECT id, title, content, DATE_FORMAT(created_at, '%d/%m/%Y à %Hh%imin%ss') AS
    created_at, created_by, lead_sentence FROM post ORDER BY created_at DESC LIMIT 0,5");
    $posts = [];
    while (($row = $statement->fetch()))
    {
        $post = [
            'title' => $row['title'],
                'content' => $row['content'],
                'created_at' => $row['created_at'],
                'created_by' => $row['created_by'],
                'lead_sentence' => $row['lead_sentence'],
                'id' => $row['id'],
        ];

        $posts[] = $post;
    }
    return $posts;
}

function getPost($id){
    //Create variables to store DB elements
    $dns = 'mysql:host=localhost; dbname=blog';
    $user = 'root';
    $password = 'root';

    // Connect to our database
    try{
        $database = new PDO($dns, $user, $password, [
            PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }
    catch (Exception $e)
    {
        die('ERREUR : ' . $e->getMessage());
    }

    $statement = $database->prepare("SELECT id, title, content, DATE_FORMAT(created_at, '%d/%m/%Y à %Hh%imin%ss') AS
    created_at, created_by, lead_sentence FROM post WHERE id = ?");
    $statement->execute([$id]);

    $row = $statement->fetch();
    $post = [
        'title' => $row['title'],
        'content' => $row['content'],
        'created_at' => $row['created_at'],
        'created_by' => $row['created_by'],
        'lead_sentence' => $row['lead_sentence'],
        'id' => $row['id']
    ];

    return $post;
}
function getComments($id)
{
    //Create variables to store DB elements
    $dns = 'mysql:host=localhost; dbname=blog';
    $user = 'root';
    $password = 'root';

    // Connect to our database
    try{
        $database = new PDO($dns, $user, $password, [
            PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }
    catch (Exception $e)
    {
        die('ERREUR : ' . $e->getMessage());
    }

    $statement = $database->prepare("SELECT id, title, content, DATE_FORMAT(created_at, '%d/%m/%Y à %Hh%imin%ss') AS
    created_at, created_by FROM `comment` WHERE id = ? ORDER BY created_at DESC");
    $statement->execute([$id]);
    $comments = [];
    while (($row = $statement->fetch())){
        $comment = [
            'created_by' => $row['created_by'],
            'created_at' => $row['created_at'],
            'content' => $row['content']
        ];
        $comments[] = $comment;
    }

    return $comments;
}

function dbConnect()
{
    //Create variables to store DB elements
    $dns = 'mysql:host=localhost; dbname=blog';
    $user = 'root';
    $password = 'root';

    // Connect to our database
    try{
        $database = new PDO($dns, $user, $password, [
            PDO::ATTR_ERRMODE => PDO ::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

    }
    catch (Exception $e)
    {
        die('ERREUR : ' . $e->getMessage());
    }

}