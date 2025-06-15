<?php

namespace lesson9\App;

interface DataFormat
{
    public function encode($data);
    public function decode($data);
}