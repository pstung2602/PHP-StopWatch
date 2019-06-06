<?php
class StopWatch
{
    private $startTime;
    private $endTime;

    function get_startTime(){
        return $this->startTime;
    }
    function get_endTime(){
        return $this->endTime;
    }
    function start(){
        $this->startTime=microtime();
    }
    function end(){
        $this->endTime=microtime();
    }
    function getElapsedTime() {
        return $this->endTime-$this->startTime;
    }

}