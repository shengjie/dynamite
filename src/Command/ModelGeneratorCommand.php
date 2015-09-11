<?php
/**
 * @author: shengjie
 * @date: 11/09/15 13:53
 * @file: ModelGeneratorComand.php
 * This file is part of dynamite, All rights reserved
 */

namespace Shengjie\Dynamite\Command;


use Shengjie\Dynamite\Generators\ObjectGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ModelGeneratorCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName("model")
            ->addArgument("file", InputArgument::REQUIRED, "input file (yaml format)");
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $file = $input->getArgument("file");
        $baseDir = getcwd();

        $parser = new \Symfony\Component\Yaml\Parser();
        $data = $parser->parse(file_get_contents($baseDir . "/" . $file));


        foreach ($data as $name => $config) {
            switch ($config["type"]) {
                case "Object":
                    $gen = new ObjectGenerator($name, $config);
                    $output->writeln($gen->generate());
            }
        }


    }
}