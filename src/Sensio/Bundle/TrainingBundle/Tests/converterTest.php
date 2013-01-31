<?php
    namespace Sensio\Bundle\TrainingBundle\Test;

    use Sensio\Bundle\TrainingBundle\Converter\CelsiusConverter;

    class ConverterTest extends \PHPUnit_Framework_TestCase{
        public function getConverterData(){
            return array(
                array(0,32),
                array(10,50),
                array(-10,14),
            );
        }

        /**
         * @dataProvider getConverterData
         */
        public function testFahrenheit($celsius,$fahrenheit){
            //0°C => 32°F
            $converter = new CelsiusConverter($celsius);
            $this->assertEquals($fahrenheit,$converter->getFahrenheit());
        }

        public function getDataForKelvin(){
            return array(
                array(0,273.15),
                array(10,283.15),
                array(-10,263.15),
            );
        }

        /**
         * @dataProvider getDataForKelvin
         */
        public function testKelvin($celsius,$kelvin){
            //0°C => 273.15°K
            $converter = new CelsiusConverter($celsius);
            $this->assertEquals($kelvin,$converter->getKelvin());
        }

        public function testNotFloat(){
            $converter = new CelsiusConverter('foo');
            $this->assertFalse($converter->getFahrenheit());
            $this->assertFalse($converter->getCelsius());
        }
    }
?>