<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function uriIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function showHeading(){
    $currentPage = $_SERVER['REQUEST_URI'];
    $currentHeading = "";

    switch ($currentPage){
        case '/':
            $currentHeading = 'Home';
            break;
        case '/about':
            $currentHeading = 'About Us';
            break;
        case '/visitors':
            $currentHeading = 'Visitors';
            break;
        default:
            $currentHeading = 'xD';
            break;
    }
    return $currentHeading;
}

function getInputs(){
        $dsn = "mysql:host=localhost;port=3306;dbname=prezentacja;charset=utf8mb4";
        $username = "root";
        $password = "";

        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $statement = $pdo->prepare("SELECT * FROM posts");
            $statement->execute();

            return $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die("Błąd połączenia z bazą danych: " . $e->getMessage());
        }
}

function Datebase(){
    $name = "";
    $entry = "";

    if (isset($_POST['name']) and isset($_POST['entry'])){
        $name = $_POST['name'];
        $entry = $_POST['entry'];


    $dsn = "mysql:host=localhost;port=3306;dbname=prezentacja;charset=utf8mb4";
    $username = "root";
    $password = "";

    try {
        $pdo = new PDO($dsn, $username, $password);

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $statement = $pdo->prepare("INSERT INTO posts (name, post) VALUES (:name, :entry)");
        $statement->bindParam(':name', $name);
        $statement->bindParam(':entry', $entry);
        $statement->execute();

        echo "Dodano rekord do bazy danych.";
    } catch (PDOException $e) {
        die("Błąd połączenia z bazą danych: " . $e->getMessage());
    }
}
    }
