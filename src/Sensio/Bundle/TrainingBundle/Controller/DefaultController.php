<?php
    namespace Sensio\Bundle\TrainingBundle\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Cookie;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Session;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    
    
    class DefaultController extends Controller{
    
        /** @Route("/hello/{name}", name="greet") 
        */
        
        public function indexAction(Request $request,$name){
            /*
                return array(
                    'name' => $name,
                );
            */
            $cookie = new Cookie('name',$name,new \DateTime('+30 days'));

            $session = $request->getSession();
            $session->set('name',$name);
            
            $response = $this->redirect($this->generateUrl('greet_Cookie'));
            $response->headers->setCookie($cookie);
            
            return $response;
        }
        
        /** @Route("/hello", name="greet_Cookie") 
            @Template("SensioTrainingBundle:Default:index.html.twig")
        */
        public function helloAction(Request $request){
            //$cookie = $request->cookies;
            //$username = $cookie->get('username');
            
            if(!$name = $request->getSession()->get('name')){
                throw $this->createNotFoundException('Enregistre toi avant connard !');
            }
            
            return array(
                    'name' => $name,
                );
        }
        
        /** @Route("/inc/counter", name="live_counter") 
            @Template()
        */
        public function counterAction(){
            return array(
                'counter' => rand(1,9999),
            );
        }
    }
?>