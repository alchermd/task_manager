<?php

/**
 * Once properly configured, this line will be:
 * $query = require_once 'bootstrap.php';
 * since the $db object is no longer needed for manual SQL queries. 
 * As for now, the whole bootstrap file is being pulled in.
 */
require_once 'bootstrap.php';

/**
 * Hello! Ideally, these IF statements should be handled by an App\Database\Query object.
 * As for now, I was able to implement a 'fetch all records' method ( Query->all() ),
 * but INSERT, UPDATE, and DELETE transactions are quite hard to implement since 
 * they include a lot of conditional data.  
 * 
 * Any help?
 */
if (isset($_POST['action'])) {
    if ($_POST['action'] == 'add') {
        $statement = $db->prepare('INSERT INTO tasks(description, completed) VALUES(:description, :completed)');
        $statement->execute([
            'description' => $_POST['description'],
            'completed' => $_POST['completed'] == "on" ? 1 : 0,
        ]);
    }

    else if ($_POST['action'] == 'toggle'){
        $statement = $db->prepare('UPDATE tasks SET completed = :isComplete WHERE id = :taskId');
        $statement->execute([
            'isComplete' => (int) !$_POST['isComplete'],
            'taskId' => $_POST['id'],
        ]);
    }

    else if ($_POST['action'] == 'delete') {
        $statement = $db->prepare('DELETE FROM tasks WHERE id = :id');
        $statement->execute([
            'id' => $_POST['id'],
        ]);
    }

    header('Location: /');
}

$results = $query->all('tasks', App\Task::class);

require_once 'views/index.view.php';