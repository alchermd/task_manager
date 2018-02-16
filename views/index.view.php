<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo List</title>

    <link rel="stylesheet" href="/css/index.css">
</head>
<body>
    <h1>Todo List</h1>
    
    <form action="/" method="POST" id="addTask">
        <input type="hidden" name="action" value="add">

        <label for="description">Description</label>
        <input type="text" name="description" id="description">

        <label for="completed">Completed?</label>
        <input type="checkbox" name="completed" id="completed">

        <input type="submit" value="Add">
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Completed?</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($results as $task) : ?>
                <tr>
                    <td><?= $task->getId() ?></td>
                    <td><?= $task->getDescription() ?></td>    
                    <td>
                        <form action="/" method="POST">
                            <input type="hidden" name="action" value="toggle">
                            <input type="hidden" name="id" value="<?= $task->getId() ?>">
                            <input type="hidden" name="isComplete" value="<?= (int) $task->isComplete() ?>">
                            <input type="submit" value="<?= $task->isComplete() ? '&check;' : '&cross;' ?>">
                        </form>
                    </td>
                    <td>
                        <form action="/" method="POST">
                            <input type="hidden" name="id" value="<?= $task->getId() ?>">
                            <input type="hidden" name="action" value="delete">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>