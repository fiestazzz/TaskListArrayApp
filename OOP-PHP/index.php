<?php
require "./vendor/JSONReader.php";
require "./classes/Task.php";

$tasklist = JSONReader('./dataset/TaskList.json');

//print_r($tasklist);

//paradigma imperativo
$taskListObj =[];
foreach ($tasklist as $taskArray) {
    $taskObj = new Task();
    $taskObj->id=$taskArray['id'];
    $taskObj->taskname=$taskArray['taskName'];
    $taskObj->status=$taskArray['status'];
    $taskObj->expirationDate=$taskArray['expirationDate'];

    $taskListObj[]=$taskObj;
}//abbiamo creato un array fatto di oggetti creati dal ciclo


//paradigma dichiarativo
/*$taskListObj= array_map(function($taskArray){
    $taskObj = new Task();
    $taskObj->id=$taskArray['id'];
    $taskObj->taskname=$taskArray['taskName'];
    $taskObj->status=$taskArray['status'];
    $taskObj->expirationDate=$taskArray['expirationDate'];
    return $taskObj;
}, $tasklist)    //abbiamo creato un array fatto di oggetti creati da array_map*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskList app ad Oggetti</title>
</head>
<body>
    <table>
        <tr>
            <th>Nome Attività</th>
            <th>Scaduta??</th>
        </tr>
        <?php foreach ($taskListObj as $task) {?>
            <tr>
            <td><?php echo $task-> taskname ?></td>
            <td><?= $task->isExpired() ? "Si":"No" ?></td>
        </tr>
       <?php } ?>
        
    </table>
</body>
</html>