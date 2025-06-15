<?php

namespace lesson8\App;

class Car extends Vehicle
{

    function start()
    {
        return "Автомобиль заведен\n";
    }

    function stop()
    {
        return "Автомобиль заглушен\n";
    }
}