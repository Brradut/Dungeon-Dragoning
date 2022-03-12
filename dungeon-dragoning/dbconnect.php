<?php
      $connectionString = 'sqlite:dungeondragoning.db';
      $connection = new PDO($connectionString);
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
#      $connection->exec('CREATE TABLE IF NOT EXISTS users(id INTEGER PRIMARY KEY INC, username TEXT, password TEXT, email TEXT);');
 #     $connection->exec('CREATE TABLE IF NOT EXISTS worlds(id INTEGER PRIMARY KEY INC, path TEXT, owner INTEGER, FOREIGN KEY(ownder) REFERENCES users(id))');
?>
