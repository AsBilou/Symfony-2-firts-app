<?php
    namespace Sensio\Bundle\TrainingBundle\Controller;
    
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\HttpFoundation\Cookie;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\Session;
    
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
    
    use Sensio\Bundle\TrainingBundle\Contact\Contact;
    use Sensio\Bundle\TrainingBundle\Form\ContactType;
    

    class ContactController extends Controller
    {
        /**
        * @Route("/contact",name="contact")
        * @Template()
        */
        public function contactAction(Request $request)
        {
            //$contact = new Contact($this->get('mailer'));
            $contact = $this->get('Sensio.contact');
            $contact->sender = "contact@romainbellina.fr";
            $form = $this->createForm(new ContactType(),$contact);
            
            if($request->isMethod('POST')){
                $form->bind($request);
                
                if($form->isValid()){
                    //send email
                    $contact->sendMail("contact@romainbellina.fr");
                    return $this->redirect($this->generateUrl('success'));
                }
            }
            
            return array(
                'form'=>$form->createView(),
            );
        }
        
        /**
        *@Route("/contact/thank-you",name="success")
        *@Template
        */
        public function successAction(){
            return array();
        }
    }
?>