<?php

declare (strict_types=1);
namespace RoRdb;

use RoRdb\PhpParser\NodeDumper;
use RoRdb\PhpParser\ParserFactory;
use RoRdb\Symfony\Component\Console\Application;
use RoRdb\Symfony\Component\Console\Command\Command;
use RoRdb\Symfony\Component\Console\Input\InputInterface;
use RoRdb\Symfony\Component\Console\Output\OutputInterface;
require_once __DIR__ . '/vendor/autoload.php';
class HelloWorldCommand extends Command
{
    protected function configure()
    {
        $this->setName('hello:world')->setDescription('Outputs \'Hello World\'');
    }
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello world!');
    }
}
$command = new HelloWorldCommand();
$application = new Application();
$application->add($command);
$application->setDefaultCommand($command->getName());
$application->run();
