<!-- UTILIZAÇÃO DE FUNÇÃO E MANIPULAÇÃO DE ARRAY -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        header {
            background-color: #e3e3e3;
            padding: 2em;
            text-align: center;
        }
    </style>
</head>
<body>

        <nav>
            <li><a href="http://localhost/project/index.php/about">about</a></li>
            <li><a href="http://localhost/project/index.php/contact">contact us</a></li>
            <li><a href="http://localhost/project/index.php/about/culture">culture</a></li>
        </nav>
    
    <ul>
        
        <?php foreach($tasks as $task) : ?>

            <li>
                <?php if($task->completed) :?>
                    <strike> <?= $task->description; ?> </strike>
                <?php else : ?>

                    <?= $task->description; ?>
                
                <?php endif; ?>

            </li>

        <?php endforeach; ?>

    </ul>
    
</body>
</html>