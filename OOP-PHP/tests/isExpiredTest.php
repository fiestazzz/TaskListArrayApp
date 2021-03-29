<?php

require './vendor/testTools/testTools.php';
require './classes/Task.php';

$dataset = 
[
    ['2021-03-23', true , 'task scaduta '],
    ['2021-03-27', true , 'task di oggi'],
    ['2021-03-28' , false , 'task scade domani'],
];

foreach ($dataset as $testcase) 
{
    list($inputDate , $expected , $description)=$testcase;
    $task = new Task();
    $task->taskName = "ciccio";
    $task->ExpirationDate = $inputDate;
    $task->status = 'done';


    assertEquals($expected, $task->isExpired(),$description);
}


?>