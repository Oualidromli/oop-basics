<?php

require_once "Device.php";

class Tablet extends Device
{
    public string $book;

    public function __construct($serialNumber, $name, $color, $book)
    {
        parent::__construct($serialNumber, $name, $color);
        $this->book = $book;
    }

    public function readBook(): string
    {
        return "Reading $this->book";
    }

    public function getDetail($deviceId): string
    {
        return "The tablet name is: $this->name";
    }
}
