<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BlogController extends Controller{
    public function latestListAction(){
        $blogList = [
            [
              'taragetData' => '2015年3月15日',
              'title' => '東京公演レポート'
            ],
            [
                'taragetData' => '2015年2月8日',
                'title' => '最近の練習風景'
            ],
            [
                'taragetData' => '2015年1月3日',
                'title' => '本年もよろしくお願い致します'
            ],
        ];

        return $this->render('Blog\latesList.html.twig',
            ['blogList' => $blogList]);
    }
}