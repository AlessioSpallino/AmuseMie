<!DOCTYPE html>

<html>

<head>

    <title>Page Title</title>

</head>

<body>

    <ul>
        <?php foreach ($tasks as $task) : ?>

            <li>
            	
            	<a href="/tasks/<?= $task->id ?>">

            		<?= $task->body ?>

            	</a>

            </li>

        <?php endforeach; ?>
    </ul>

</body>
</html>