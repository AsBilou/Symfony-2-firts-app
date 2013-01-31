<?php
    
    namespace Sensio\Bundle\TrainingBundle\Converter;
    
    class CelsiusConverter {

        const KELVIN_ZERO_VALUE = 273.15;
        private $celsius;
        
        public function __Construct($celsius){
            $this->celsius = $celsius;
        }
        
        public function getFahrenheit(){
            if(!is_numeric($this->celsius)){
                return false;
            }
            $celsius = (float) $this->celsius;
            return ($celsius * 9) / 5 + 32;
        }
        
        public function getCelsius(){
            if(!is_numeric($this->celsius)){
                return false;
            }
            return $this->celsius;
        }

        public function getKelvin(){
            if(!is_numeric($this->celsius)){
                return false;
            }
            $celsius = (float) $this->celsius;
            return $celsius + self::KELVIN_ZERO_VALUE;
        }
    }
?>