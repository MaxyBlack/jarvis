<?php

namespace Jarvis;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ProjectCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('project')
            ->setDescription('Open Project')
            ->addArgument(
                'name',
                InputArgument::REQUIRED,
                'Which project do you want to open'
            );
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        shell_exec('pstorm /sites/'.$name);
        $output->writeln('Project '. $name.' is open');
    }
}