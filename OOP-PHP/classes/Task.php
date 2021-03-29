<?php
class Task {

    public $id ;
    public $taskName;
    public $status;
    public $ExpirationDate;
    public $ora;

    public function isExpired():bool
    {
        //date_default_timezone_set('Europe/Rome');
        $oggi=new DateTime();
        $oggiTimeStamp=$oggi->getTimestamp();
        $dataTask=new DateTime($this->ExpirationDate.'T23:59:59' );
        $dataTaskTimeStamp=$dataTask->getTimestamp();

        return $oggiTimeStamp > $dataTaskTimeStamp;
        
    }

    public function getExpirationDate()
    {
       return $this->ExpirationDate;
    }
}

?>