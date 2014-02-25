<?php namespace Isimmons\Taters;

use Symfony\Component\Console\Application as SymfonyApplication;
use Illuminate\Container\Container;

class Taters extends Container{

    public function __construct($name = null, $version = null)
    {
        $this->app = new SymfonyApplication($name, $version);
    }

    public function add($commandClass, $parameters = [])
    {
        $command = $this->build($commandClass, $parameters);

        $this->app->add($command);
    }

    public function run()
    {
        $this->app->run();
    }

    public function find($command)
    {
        return $this->app->find($command);
    }
}
