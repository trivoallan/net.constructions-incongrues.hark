<?php
namespace Net\ConstructionsIncongrues\Hark\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HarkCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('projects:bootstrap')
            ->setDescription('Bootstraps projects')
            ->addArgument(
                'projectsDefinition',
                InputArgument::OPTIONAL,
                'Absolute path to YAML projects definition file'
            )
            ->addOption(
               'reload-data',
               null,
               InputOption::VALUE_NONE,
               'Reload databases'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $name = $input->getArgument('name');
        if ($name) {
            $text = 'Hello '.$name;
        } else {
            $text = 'Hello';
        }

        if ($input->getOption('yell')) {
            $text = strtoupper($text);
        }

        $output->writeln($text);
    }
}
