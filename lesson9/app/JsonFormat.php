<?php

namespace lesson9\App;

class JsonFormat implements DataFormat
{

    public function encode($data)
    {
        return json_encode($data);
    }

    public function decode($data)
    {
        return json_decode($data);
    }
}