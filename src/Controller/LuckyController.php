<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Formation;

class LuckyController extends AbstractController
{
    public function number()
    {
        $number = random_int(0, 100);

$forma = $this->getDoctrine()
->getRepository(Formation::class)
->findAll();


        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
            'formations'=>$forma,
        ));
    }
}
   /** public function formation()
    {
        $form = new Formation();
        $form->setName ('Ma Formation');
        $eManager = $this->getDoctrine()->getManger();
        $eManager->persist($form);
        $eManager->flush();
    }*/