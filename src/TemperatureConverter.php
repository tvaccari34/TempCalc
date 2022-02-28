<?php 
namespace TempCalc;

use Symfony\Component\Console\Command\Command as SymfonyCommand;

class TemperatureConverter extends SymfonyCommand
{
    public function __construct()
    {
        parent::__construct();
    }
    public function convertTemperature($temperature, $temperatureScale)
    {
        switch ($temperatureScale) {
            case 'C':
                return $this->convertToFahrenheit($temperature);
                break;
            
            case 'F':
                return $this->convertToCelsius($temperature);
                break;
        }
    }
    
    private function convertToFahrenheit($temperature)
    {
        $temperatureConverted = ($temperature * 9/5) + 32;
        return $temperature . " Celsius is equal to " . $temperatureConverted . " Fahrenheit";
    }

    private function convertToCelsius($temperature)
    {
        $temperatureConverted = ($temperature - 32) * 5/9;
        return $temperature . " Fahrenheit is equal to " . $temperatureConverted . " Celsius";
    }
}