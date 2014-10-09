<?php
/**
 * Description of AdvertController
 *
 * @author macbook
 */
namespace OC\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;

class AdvertController extends Controller 
{
   public function indexAction($page)
    {
    // On ne sait pas combien de pages il y a
    // Mais on sait qu'une page doit être supérieure ou égale à 1
       if ($page < 1) {
    // On déclenche une exception NotFoundHttpException, cela va afficher
    // une page d'erreur 404 (qu'on pourra personnaliser plus tard d'ailleurs)       
           throw new NotFoundHttpException('Page"'.$page.'"inexistante.');
       }
    // Ici, on récupérera la liste des annonces, puis on la passera au template
    // Mais pour l'instant, on ne fait qu'appeler le template
    // Notre liste d'annonce en dur
    $listAdverts = array(
      array(
        'title'   => 'Recherche développpeur Symfony2',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Mission de webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Offre de stage webdesigner',
        'id'      => 3,
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime())
    );
       return $this->render('OCPlatformBundle:Advert:index.html.twig', array('listAdverts' => $listAdverts));
    }
    
    public function viewAction($id)
    {
      $repository = $this->getDoctrine()
              ->getManager()
              ->getRepository('OCPlatformBundle:Advert');
     // on récupérere l'annonce correspondante à l'id $id 
      $advert = $repository->find($id);
      
      //$advert est donc une instance de OC\PlatformBundle\Entity\Advert
      // ou null si l'id $id n'existe pas , d'ou ce if :
      if(null === $advert){
          throw new NotFoundHttpException("L'annonce d'id ".$id."n'existe pas.");
      }
      //le render ne change pas, on passait avant un tableau, maintenant un objet
        return $this->render(
               'OCPlatformBundle:Advert:view.html.twig',
                array('advert' => $advert)
                );
    }
    
    public function addAction(Request $request)
    {
      // Création de l'entité
        $advert = new Advert();
        $advert->setTitle('Recherche développeur Symfony2.');
        $advert->setAuthor('Alexandre');
        $advert->setContent('Nous recherchons un développeur Symfony2 débutant sur Lyon');
      //On peut ne pas définir ni la date ni la publication, car ces attributs
      //sont définis automatiquement dans le constructeur
      
      //création de l'entité Image
        $image = new Image();
        $image->setUrl('http://sdz-upload.s3.amazonaws.com/prod/upload/job-de-reve.jpg');
        $image->setAlt('Job de rêve');
        
      //On lie l'image à l'annonce
        $advert->setImage($image);
        
      //On récupère l'EntityManager
        $em = $this->getDoctrine()->getmanager();
      // Etape 1 : on persite l'entité
        $em->persist($advert);
      // Etape 2 : On Flush tout ce qui a été persisté avant
        $em->flush();
        
      // La gestion d'un formulaire est particulière, mais l'idée est la suivante :
      // Si la requête est en POST, c'est que le visiteur a soumis le formulaire
        if ($request->isMethod('POST')){
      // Ici, on s'occupera de la création et de la gestion du formulaire      
      
        $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée');
      // Puis on redirige vers la page de visualisation de cettte annonce  
          
        return $this->redirect($this->generateUrl('OC_platform_view', array('id' => $advert->getId())));
    }
    
      // Si on n'est pas en POST, alors on affiche le formulaire
        return $this->render('OCPlatformBundle:Advert:add.html.twig');
    }
    
    public function editAction($id, Request $request)
    {
    // Ici, on récupérera l'annonce correspondante à $id

    // Même mécanisme que pour l'ajout
    if ($request->isMethod('POST')) {
      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      return $this->redirect($this->generateUrl('oc_platform_view', array('id' => 5)));
    }
      $advert = array(
          'title'   => 'recherche développeur Symfony2',
          'id'      => $id,
          'author'  => 'Alexandre',
          'content' => 'Nous recherchons un développeur symfony2 débutant sur Lyon........',
          'date'    => new \Datetime()
      );
      
      return $this->render('OCPlatformBundle:Advert:edit.html.twig', array('advert' => $advert));
    }

    public function deleteAction($id)
    {
    // Ici, on récupérera l'annonce correspondant à $id

    // Ici, on gérera la suppression de l'annonce en question

    return $this->render('OCPlatformBundle:Advert:delete.html.twig');
    }
    
    public function menuAction($limit)
    {
     // On fixe en dur une liste ici, bien entendu par la suite
     // on la récupérera depuis la BDD !
      $listAdverts = array(
          array('id' => 2, 'title' => 'Recherche développeur Symfony2'),
          array('id' => 5, 'title' => 'Mission de webmaster'),
          array('id' => 9, 'title' => 'Offre de stage webdesigner'),
      );
      return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
          'listAdverts' => $listAdverts
      ));
    }
}