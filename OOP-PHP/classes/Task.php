<?php
class Task {

    public $id ;
    public $taskName;
    public $status;
    public $ExpirationDate;
    public $ora;

    public function isExpired(DateTime $expiration):bool
    {
        try {
            
            
            $task = new DateTime($this->expirationDate); 
         
            // non è oggi
            if($expiration->format('Ymd') === $task->format('Ymd')){
                return false;
            }
            return $expiration->getTimestamp() > $task->getTimestamp(); 
            
        } catch (\Throwable $th) {
            return $th;
        
    }

    public function getExpirationDate()
    {
       return $this->ExpirationDate;
    }
}

?>