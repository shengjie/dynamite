<?php
/**
 * @author: shengjie
 * @date: 11/09/15 14:56
 * @file: SF2ProjectGeneratorCommand.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SF2FullstackProjectGeneratorCommand extends Command
{
    protected function configure()
    {
        $this->setName("sf2fs");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        throw new \LogicException("Not implemented");
    }
}