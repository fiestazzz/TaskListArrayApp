<?php
/**
 * Funzione di ordine superiore funzione che restituisce una funzione
 * Programmazione Funzionale - dichiarativo 
 */
function searchText($searchText)
{
    return function($taskItem) use ($searchText)
    {
        $result=stripos($taskItem['taskName'], $searchText) !==false;
        return $result;
    };
}


/**
 * @var string $status è la stringa che corrisponde allo status da cercare
 * (progress|done|todo)
 * @return callable La funzione che verrà utilizzata da array_filter
 */
function searchStatus($status) {

    return function ($task) use ($status)
    {
        if ($status === "all")
        {
            return $task;
        }
        else 
        {
            return strpos($task['status'] , $status) !== false;
        }
    };
}

?>


