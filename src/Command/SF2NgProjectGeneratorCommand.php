<?php
/**
 * @author: shengjie
 * @date: 11/09/15 15:03
 * @file: SF2NgProjectGeneratorCommand.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SF2NgProjectGeneratorCommand extends Command
{
    protected function configure()
    {
        $this->setName("sf2ng");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        throw new \LogicException("Not implemented");
    }


}