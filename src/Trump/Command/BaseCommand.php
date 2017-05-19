<?php
namespace Trump\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

abstract class BaseCommand extends Command {

    protected $command = '';
    protected $description = '';
    protected $help = '';

    protected function configure() {
        $this->setName($this->command);
        $this->setDescription($this->description);
        $this->setHelp($this->help);
    }

    protected function execute(InputInterface $input, OutputInterface $output) {
    }
}
