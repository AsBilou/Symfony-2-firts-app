<?php

    namespace Sensio\Bundle\TrainingBundle\Contact;
    
    use Symfony\Component\Validator\Constraints as Assert;
    
    class Contact{
        
        /**
        *@Assert\Email()
        *@Assert\NotBlank()
        */
        public $sender;
        
        /**
        *@Assert\Length(min=10,max=50)
        *@Assert\NotBlank()
        */
        public $subject;
        
        /**
        *@Assert\NotBlank()
        */
        public $message;
        
        private $mailer;
        
        public function __Construct(\Swift_Mailer $mailer){
            $this->mailer = $mailer;
        }
        
        public function sendMail($to){
            $message = \Swift_Message::newInstance()
                ->setSubject($this->subject)
                ->setFrom($this->sender)
                ->setTo($to)
                ->setBody($this->message)
                ;
            return $this->mailer->send($message);
        }
    }
    
?>