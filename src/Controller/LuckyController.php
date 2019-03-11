<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Formation;
use App\Entity\Experience;
use App\Entity\Loisirs;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);

        $form = $this->getDoctrine()->getRepository(Formation::class) ->findAll();
        $experience = $this->getDoctrine()->getRepository(Experience::class) ->findAll();
        $loisirs = $this->getDoctrine()->getRepository(Loisirs::class) ->findAll();
        
                return $this->render('lucky/number.html.twig', array(
                    'number' => $number,
                    'formations'=>$form,
                    'experiences' => $experience,
                    'loisirs' => $loisirs
                ));
    }

    public function formation()
    {
        $form = new Formation();
        $form->setName ('Ma Formation');
        $eManager = $this->getDoctrine()->getManger();
        $eManager->persist($form);
        $eManager->flush();
    }
    
    public function Experience()
    {
        $experience = new Experience();
        $experience->setName ('Mes experiences');
        $eManager = $this->getDoctrine()->getManger();
        $eManager->persist($experience);
        $eManager->flush();
    }
    
    public function Loisirs()
    {
        $loisirs = new Loisirs();
        $loisirs->setName ('Mes loisirs');
        $eManager = $this->getDoctrine()->getManger();
        $eManager->persist($form);
        $eManager->flush();
    }
    
}

