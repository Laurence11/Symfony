<?php
/**
 * Description of ContactController
 *
 * @author macbook
 */
namespace OC\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ContactController extends Controller{
    
    public function contactAction(Request $request) {
        
    // ici serra mis la fonction pour le formulaire de contact
        
       
        
        $request->getSession()->getFlashBag()->add(
            'notice','Cette page n est pas encore disponible!');

        return $this->redirect($this->generateUrl('oc_core_homepage'));
    }
    
    
 }

