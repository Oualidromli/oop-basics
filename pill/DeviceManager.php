<?php

require_once "Device.php";
require_once "Mobile.php";
require_once "Tablet.php";

class DeviceManager
{
    protected int $serialNo;

    public function __construct($device)
    {
        $this->getDeviceSerialNumber($device);
    }

    public function getDeviceSerialNumber(Device $device)
    {
        return $this->serialNo = $device->getSerialNumber();
    }
}

// Mobile Objects
$iphoneXS = new Mobile(552256, "Iphone XS", "Gold", 600100987, "10 MP");
$iphoneXSMAX = new Mobile(112256, "Iphone XS MAX", "Grey", 600100789, "12 MP");

// Tablet Objects
$tablet = new Tablet(552256, "Ipad Pro 10.5", "Black", "All In One");

// Manager objects
$iphoneXSManager = new DeviceManager($iphoneXS);

// dumps
echo '<pre>';
var_dump($iphoneXS);
echo '</pre>';

echo '<pre>';
var_dump($iphoneXSMAX);
echo '</pre>';

echo '<pre>';
var_dump($iphoneXSManager);
echo '</pre>';

echo $iphoneXS->callContact("Oualid");
echo '<br>';
echo $iphoneXS->getDetail(155);
echo '<br>';
echo $tablet->getDetail(118);
