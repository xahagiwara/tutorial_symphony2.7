<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class NotifyUnprocessedInquiryCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('cs:inquiry:notify-unprocessed')
            ->setDescription('未処理お問い合わせ一覧を通知');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $container = $this->getContainer();
        $em = $container->get('doctrine')->getManager();
        $inquiryRepository = $em->getRepository('AppBundle:Inquiry');
        $inquiryList = $inquiryRepository->findUnprocessed();

        if (count($inquiryList) > 0)
        {
            $output->writeln(count($inquiryList) . '件の未処理お問い合わせがあります');

            if ($this->confirmSend($input, $output))
            {
                $this->sendMail($inquiryList, $output);
            }
        } else {
            $output->writeln("未処理なし");
        }
    }
}