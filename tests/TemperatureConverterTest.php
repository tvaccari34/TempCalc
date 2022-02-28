<?php 

use PHPUnit\Framework\TestCase;
use TempCalc\TemperatureConverter;

final class TemperatureConverterTest extends TestCase
{
    /**
     * @dataProvider temperatureDataProvider
     */
    public function testTemperatureConverter(int $a, string $b, string $expected): void
    {
        $temperatureConverter = new TemperatureConverter();

        $tempConverted = $temperatureConverter->convertTemperature($a, $b);

        $this->assertEquals($tempConverted, $expected);
    }

    public function temperatureDataProvider(): array
    {
        return [
            [30, 'F', '30 Fahrenheit is equal to -1.1111111111111 Celsius'],
            [30, 'C', '30 Celsius is equal to 86 Fahrenheit'],
            [59, 'F', '59 Fahrenheit is equal to 15 Celsius'],
            [-12, 'C', '-12 Celsius is equal to 10.4 Fahrenheit']
        ];
    }
}