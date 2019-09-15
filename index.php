<?php

$truckBuilder = new TruckBuilder();
$newVehicle = (new Director())->build($truckBuilder);