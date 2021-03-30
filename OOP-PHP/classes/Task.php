<?php
class Task {

    public $id ;
    public $taskName;
    public $status;
    public $ExpirationDate;

    public function isExpired(DateTime $Expiration):bool
    {
        try 
        {
            $task = new DateTime($this->ExpirationDate); 
            // non è oggi
            if($Expiration->format('Ymd') === $task->format('Ymd'))
            {
                return false;
            }
            return $Expiration->getTimestamp() > $task->getTimestamp(); 
            
        } catch (\Throwable $th) 
        {
            return $th;
        }
  
    }

    public function getExpirationDate() 
    {
       return $this->ExpirationDate;
    }
}
?>