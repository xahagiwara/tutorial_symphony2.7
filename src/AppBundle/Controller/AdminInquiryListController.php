<?php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use AppBundle\Entity\Inquiry;
use League\Csv\Writer;

/**
 * @Route("/admin/inquiry")
 */
class AdminInquiryListController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction(){
        $em = $this->getDoctrine()->getManager();
        $inquiryRepository = $em->getRepository('AppBundle:Inquiry');
        $inquiryList = $inquiryRepository->findAll([], ['id' => 'DESC']);

        return $this->render('Admin/Inquiry/index.html.twig',
            ['inquiryList' => $inquiryList]
        );
    }
}