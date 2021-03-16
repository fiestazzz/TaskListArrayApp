<?php
/**
 * Funzione di ordine superiore funzione che restituisce una funzione
 * Programmazione Funzionale - dichiarativo 
 */
function searchText($searchText , $tasklist) {
    $trovato = [];
    foreach ($tasklist as $item) {
       if (strpos($item['taskName'] , $searchText) !== false)
       {
           $trovato[]=$item;
       }
    }
    return $trovato;
}

/**
 * @var string $status è la stringa che corrisponde allo status da cercare
 * (progress|done|todo)
 * @return callable La funzione che verrà utilizzata da array_filter
 */
function searchStatus(string $status) : callable {

    return function ($tasklist) use ($status)
    {
        if ($status === "all")
        {
            return $tasklist;
        }
        else 
        {
            return strpos($tasklist['status'] , $status) !== false;
        }
    };
}

?>


