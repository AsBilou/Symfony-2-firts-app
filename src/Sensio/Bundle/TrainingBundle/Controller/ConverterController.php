<?php
    namespace Sensio\Bundle\TrainingBundle\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Cookie;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Session;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    

    class ConverterController extends Controller
    {
        /**
        * @Route("/convert/{celsius}/fahrenheit.{_format}", 
        *       requirements={ 
        *           "celsius"="\d+",
        *           "_format"="xml|json"
        *       }
        *)
        * @Template()
        */
        public function celsiusAction($celsius)
        {
            $celsius = (float) $celsius;
            $fahrenheit = ($celsius * 9) / 5 + 32;
            return array(
                'fahrenheit' => $fahrenheit,
                'celsius' => $celsius
                ); 
        }
    }
?>