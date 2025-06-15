<?php

namespace lesson8\App;

class Bicycle extends Vehicle
{

    function start()
    {
        return "Велосипед начал движение\n";
    }

    function stop()
    {
        return "Велосипед остановился\n";
    }
}