<?php
    
    namespace Sensio\Bundle\TrainingBundle\Converter;
    
    class CelsiusConverter {
        
        private $celsius;
        private $fahrenheit;
        
        public function __Construct($celsius){
            $this->celsius = $celsius;
        }
        
        public function convert(){
            $celsius = (float) $this->celsius;
            $this->fahrenheit = ($celsius * 9) / 5 + 32;
        }
        
        public function getFahrenheit(){
            return $this->fahrenheit;
        }
        
        public function getCelsius(){
            return $this->celsius;
        }
    }
?>