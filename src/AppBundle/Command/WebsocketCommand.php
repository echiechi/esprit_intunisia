<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Ratchet\Http\HttpServer;
use Ratchet\Server\IoServer;
use Ratchet\WebSocket\WsServer;
use Ratchet\App;
use MsgBundle\entities\Message;

class WebsocketCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('websocket')
            ->setDescription('...')
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }
        $output->writeln('runnig websocket server on 9090');
        $app = new App('localhost', 9090);
        $app->route('/chat', new Message($this->getContainer()), array('*'));
        $app->run();
        $output->writeln('Command result.');
    }

}
