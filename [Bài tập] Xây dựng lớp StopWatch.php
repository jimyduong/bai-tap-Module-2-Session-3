<?php
    class StopWatch{
        private $startTime;
        private $endTime;

        public function __construct()
        {
            $this->startTime;
        }
        public function startTime(){
            $this->startTime=microtime(true);
            return $this->startTime;
        }
        public function endTime(){
            $this->endTime= microtime(true);
            return $this->endTime;
        }
        public function getElapsedTime(){
            $time= $this->endTime - $this->startTime;
            return $time;
        }

    }
    $stopwatch=new StopWatch();
    $stopwatch->startTime();
    for($i=0;$i<10000;$i++){
        for ($j=0;$j<100000;$j++){
            $total+=$i+$j;
        }
    };
    echo $total."<br>";
    $stopwatch->endTime();
    echo $stopwatch->getElapsedTime();
