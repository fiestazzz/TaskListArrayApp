<?php
class Task {

    public $id ;
    public $taskName;
    public $status;
    public $ExpirationDate;

    public function isExpired():bool
    {
        date_default_timezone_set('Europe/Rome');
        //istanza della classe DateTime
       /* $todaysDate = new DateTime();
        $timeStampToday= $todaysDate->getTimestamp();
        $task= new DateTime($this->ExpirationDate);
        $timeStampTask=$task->getTimestamp();*/
        //return $timeStampTask < $timeStampToday;
        $oggi=new DateTime();
        $oggiTimeStamp=$oggi->getTimestamp();
        $dataTask=new DateTime($this->ExpirationDate);
        $dataTaskTimeStamp=$dataTask->getTimestamp();

        return $oggiTimeStamp > $dataTaskTimeStamp;
        
    }

    public function getExpirationDate()
    {
       return $this->ExpirationDate;
    }
}

?>