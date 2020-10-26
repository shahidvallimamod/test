<?php
    $connection = new PDO("mysql:host=localhost;dbname=phonebook", 'root', '');
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $connection->prepare('SELECT users.name, contacts.name FROM `users` INNER JOIN contacts on users.id = contacts.user_id
    where users.id = '.$_GET['id']);
    $query->execute();
    $contacts = $query->fetchAll(PDO::FETCH_ASSOC);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>    
    <?php foreach($contacts as $contact): ?>
        <li><?php echo $contact['name']?> </li>
    <?php endforeach;?>
    </ul>
</body>
</html>