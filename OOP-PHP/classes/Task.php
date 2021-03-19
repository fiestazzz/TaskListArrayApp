<?php
class Task {

    public $id ;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired():bool
    {
        //itanza della classe DateTime
        $todaysDate = new DateTime();
        $task= new DateTime($this->ExpirationDate);

        return $task > $todaysDate;
        
    }

    public function getExpirationDate()
    {
       return $this->expirationDate;
    }
}

?>