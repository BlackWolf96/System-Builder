<?php

namespace App\Controller;

use App\Entity\Cpu;
use App\Repository\CpuRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use Symfony\Component\HttpFoundation\JsonResponse;

class AppController extends AbstractController
{
    /**
     * @Route("/app", name="app")
     */
    public function index(): Response
    { 
        return $this->render('app/index.html.twig', [
            'blebleble' => '',
        ]);
    }

    /**
     * @Route("/app/json");
     * 
     */
    public function datatojson(){
        $response = $this->getDoctrine()->getRepository(Cpu::class);
        $data = $response->findAll();

        $toArray = array();
        foreach( $data as $item){
            $toArray[] = array(
                'producer' => $item->getProducer(),
                'socket' => $item->getSocket(),
                'model' => $item->getModel(),
                'overclocking' => $item->getOc(),
                'vcores' => $item->getVcores(),
                'tdp' => $item->getTdp()
            );
        }

        return new JsonResponse($toArray);
    }
}
