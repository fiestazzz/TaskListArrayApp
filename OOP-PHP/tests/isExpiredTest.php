<?php

require './vendor/testTools/testTools.php';
require './classes/Task.php';

$dataset = [
    ['2021-03-29','2021-03-30', true, 'task scaduta ieri'],
    ['2021-03-30','2021-03-30', false, 'task di oggi'],
    ['2021-03-31','2021-03-30', false,'task che scade domani'],
    
    ['1969-12-31','1970-01-01', true, 'task scaduta ieri'],
    ['1970-01-01','1970-01-01', false, 'task di oggi'],
    ['1970-01-02','1970-01-01', false,'task che scade domani'],
    
    ['ciccio','ciccio', 'Exception','genera un eccezione'],
    ['2021-13-03','pippo', 'Exception','genera un eccezione'],
];

foreach ($dataset as $testCase) {

    list($inputDate, $today, $expected, $description) = $testCase;
   
    $task = new Task();
    $task->taskName = 'ciccio';
    $task->ExpirationDate =  $inputDate;
    $task->status = 'done';     
    
    try {
        $todayDateTime = new DateTime($today);
        assertEquals($expected, $task->isExpired($todayDateTime), $description);
        assertEquals('boolean',gettype($expected),"il risultato deve essere un booleano $expected");
    } catch (\Throwable $th) {
        assertEquals('Exception', $expected, "Mi aspettavo un eccezione per formato errato che si è verificata");
    }

   

}


?>