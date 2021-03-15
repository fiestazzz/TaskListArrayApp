<?php

function getColor(string $status)
{
    if ($status === 'progress')
    {
        return 'primary';
    } 
    else if ($status === 'todo')
    {
        return 'danger';
    }
    else
    {
        return 'secondary';
    }
}

?>