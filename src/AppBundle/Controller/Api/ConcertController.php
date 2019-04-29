<?php

namespace AppBundle\Controller\Api;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;

class ConcertController extends FOSRestController
{
    /**
     * @Rest\Get("/api/concerts.{_format}")
     */
    public function getConcertsAction()
    {
        $em = $this->get('doctrine')->getManager();
        $repository = $em->getRepository('AppBundle:Concert');
        $concertList = $repository->findAll();
        $view = new View($concertList);
        return $this->handleView($view);
    }
}