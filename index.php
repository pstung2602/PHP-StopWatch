<?php include "StopWatch.php" ?>
<?php
$watch = new StopWatch();
$watch->start();
echo $watch->get_startTime()."<br>";
$watch->end();
echo $watch->get_endTime()."<br>";
echo $watch->getElapsedTime();
