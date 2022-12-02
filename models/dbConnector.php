<?php
/**
 * @file     dbConnector.php
 * @brief    File description
 * @author   Created by Christophe.KUNZLI
 * @version  02.12.2022
 */

/**
 * Creates a connection to the DB
 * @return PDO
 */
function openDBConnection(): PDO
{
    $tempDBConnection = null;

    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 3306;
    $charset = 'utf8';
    $dbName = 'snows';
    $user = 'client_snows-151';
    $usrPass = 'Pa$$w0rd';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;
    //$dsn = "mysql:host=localhost;dbname=snows;charset=utf8";

    try {
        $tempDBConnection = new PDO($dsn, $user, $usrPass);
    } catch (PDOException $exception) {
        echo '<h3>Connection failed: ' . $exception. '</h3>';
    }
    return $tempDBConnection;
}

/**
 * Execute a SELECT query on DB
 * @param $query
 * @return bool|array|null
 */
function executeQuerySelect($query): bool|array|null
{
    $queryResult = null;

    $dbConnection = openDBConnection();

    if ($dbConnection != null) {
        $statement = $dbConnection->prepare($query);
        $statement->execute();
        $queryResult = $statement->fetchAll();
    }
    $dbConnection = null;

    return $queryResult;
}