<?php
namespace TempCalc;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use TempCalc\TemperatureConverter;

class TemperatureCalc extends TemperatureConverter {
    
    protected function configure(): void 
    {
        $this->setName('cmd:convertTemp')
             ->setDescription('Temperature convert calculation')
             ->addArgument('temperature', InputArgument::REQUIRED, 'The temperature to be converted')
             ->addArgument('temperatureScale', InputArgument::OPTIONAL, 'The temperature type to be converted. Default equals "C" for Celsius');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $result = $this->convertTemperature($input->getArgument('temperature'), $input->getArgument('temperatureScale'));
        $output->write($result);

        return Command::SUCCESS;
    }
}