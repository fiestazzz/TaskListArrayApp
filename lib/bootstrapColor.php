<?php

function getColor( $status)
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