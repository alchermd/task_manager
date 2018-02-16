# Task Manager

A Todo List implementation using vanilla PHP.

## Installation

1. Prepare a `task_manager` database.

```bash
$ mysql
> CREATE DATABASE task_manager;
> USE task_manager;
> CREATE TABLE tasks(id INT PRIMARY KEY AUTO_INCREMENT, description TEXT, completed BOOL);
```

2. Update `config.php`

3. Run `composer install` to enable autoloading.

4. Start a PHP server `php -S localhost:8000`

## License

This code is released under an MIT License. See [LICENSE](LICENSE)