<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ToppageController extends Controller
{
    /**
     * @Route("/home/")
     */
    public function indexAction(){
        $information = "5月と6月の公園情報を追加しました。";

        return $this->render('Toppage/index.html.twig',
            ['information' => $information]);
    }
}
