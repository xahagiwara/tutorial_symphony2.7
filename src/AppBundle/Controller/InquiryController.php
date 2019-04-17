<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;

//コントローラー全体で基準とするURL
/**
 * @Route("/inquiry")
 */
class InquiryController extends Controller{
    //HTTｐメソッドを限定する
    /**
     * @Route("/")
     * @Method("get")
     */
    public function indexAction(){
        //テンプレートに渡す
        return $this->render('Inquiry/index.html.twig',
        ['form' => $this->createInquiryForm()->createView()]);   //簡易的なフォームの作成 {{ form(変数)　}} で読み出す
    }

    /*各要素の定義メソッド*/
    private function createInquiryForm(){
        //各要素の設定
        return $this->createFormBuilder()
            ->add('name', 'text')
            ->add('email', 'text')
            ->add('tel', 'text', [
                'required' => false,
            ])
            ->add('type', 'choice', [
                'choices' => [
                    '講演について',
                    'その他',
                ],
                'expanded' => true,
            ])
            ->add('content', 'textarea')
            ->add('submit', 'submit', [
                'label' => '送信',
            ])
            ->getForm();
    }

    /*登録完了メソッド*/
    /**
     * @Route("/complete")
     */
    public function completeAction(){
        return $this->render('Inquiry/complete.html.twig');
    }

    /*フォーム送信時のアクションメソッド*/
    /**
     * @Route("/")
     * @Method("post")
     */
    public function indexPostAction(Request $request){
        $form = $this->createInquiryForm();
        $form->handleRequest($request);
        //フォームの有効性をチェック
        if ($form->isValid()) {
            $data = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setSubject('Webサイトからのお問い合わせ')
                ->setFrom('webmaster@example.com')
                ->setTo('admin@example.com')
                ->setBody(
                    $this->renderView(
                        'mail/inquiry.txt.twig',
                        ['data' => $data]
                    )
                );

            $this->get('mailer')->send($message);

            return $this->redirect(
                $this->generateUrl('app_inquiry_complete')
            );
        }
        
        //エラーの場合お問い合わせページに戻る
        return $this->render(
            'Inquiry/index.html.twig',
            ['form' => $form->createView()]
        );
    }
}
