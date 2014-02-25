<?php namespace Isimmons\Taters\Console\Commands;

class HelloTatersCommand extends BaseCommand {

    /**
    * Configure command options
    *
    * @return void
    */
    protected function configure()
    {        
        $this->setName('hellotaters')
            ->setDescription('Says Hello to a potato Fool!.');
    }

    public function fire()
    {
        $this->displayOutput('Hello potato :-)');
    }

    protected function displayOutput($output)
    {
        $this->output->write($output);
    }
}