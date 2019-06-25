<?php

namespace UserBundle\Service;

use Doctrine\ORM\EntityManager as EM;

/**
 * Envoi de mail
 *
 * @author frup73532
 */
class MailService {
    
    public function sendMail($from,$to,$body,$subject){
        $message = ( new \Swift_Message())
            ->setFrom($from)
            ->setTo($to)
            ->setSubject($subject)    
            ->setBody($body);
        
        $this->get('mailer')->send($message);
    }
    

}
