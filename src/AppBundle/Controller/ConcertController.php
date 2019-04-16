<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ConcertController extends Controller{
    /**
     * @Route("/concert/")
     */
    public function indexAction(){
        $concertList = [
            [
                'data' => '2015年5月3日',
                'time' => '14:00',
                'place' => '東京文化会館（満席）'
            ],[
                'data' => '2015年7月12日',
                'time' => '14:00',
                'place' => '鎌倉芸術館'
            ],[
                'data' => '2015年9月20日',
                'time' => '15:00',
                'place' => '横浜みなとみらいホール'
            ]
        ];

        return $this->render('Concert/index.html.twig',
                [ 'concertList' => $concertList]);
    }
}
