<?php

namespace lesson9\App;

class XmlFormat implements DataFormat
{
    public function encode($data)
    {
        $xml = new \SimpleXMLElement('<root/>');
        $this->arrayToXml($data, $xml);
        return $xml->asXML();
    }

    public function decode($data)
    {
        $xml = simplexml_load_string($data);
        return json_decode(json_encode($xml), true);
    }

    private function arrayToXml(array $data, \SimpleXMLElement &$xml)
    {
        foreach ($data as $key => $value) {
            if (is_array($value)) {
                $child = $xml->addChild(is_numeric($key) ? "item$key" : $key);
                $this->arrayToXml($value, $child);
            } else {
                $xml->addChild(is_numeric($key) ? "item$key" : $key, htmlspecialchars((string)$value));
            }
        }
    }
}
