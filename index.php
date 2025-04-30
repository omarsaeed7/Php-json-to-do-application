<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css" />
    <title>Document</title>
</head>

<body>
    <div class="content">
        <div class="main">
            <form action="">
                <div class="">
                    <input type="text" name="task" required placeholder="New Task ....">
                    <button type="submint" name="submit">add</button>
                </div>
            </form>
            <!-- End of form -->
            <?php
            include_once('./arrayFunction.php');
            $jsonGet = file_get_contents('./api.json');
            //echo $jsonGet;
            $my_array = json_decode($jsonGet);
            //echo pre_print_r($my_array);
            if (isset($_GET['submit']) && isset($_GET['task'])) {
                $my_array[] = ['task' => $_GET['task']];
                $jsonOut = json_encode($my_array);
                file_put_contents('./api.json', $jsonOut);
                header('Location: index.php');
            }
            //pre_print_r($my_array);
            ?>

            <?php foreach (array_reverse($my_array) as $key => $value) : ?>
                <div class="task">
                    <div class="task-item">
                        <?php echo $value->task; ?>
                    </div>
                    <div> 
                        <a href="./delete.php?key=<?php echo count($my_array) - $key - 1?>"> <button name = "delete">DELETE</button></a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>