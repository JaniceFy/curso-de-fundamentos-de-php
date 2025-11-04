<?php

namespace App;

class Chat
{

    public function __construct(
        //private OpenAiService $aiService
        private AIServiceInterface $aiService
    )
    {   }

    public function start()
    {

        $this->welcome();

        while ($input = $this->prompt()) {
            

            if ($this->exit($input)) {
                break;
            }

            $response = $this->getResponse($input);

            $this->output($response);

        }



    }

    private function welcome()
    {
        echo 'Ask anything to AI' . PHP_EOL;
    }


    private function prompt()
    {
       return readline('> '); //SI NO ESCRIBIMOS NADA EL RESULTADO ES NULL
    }


    private function exit($input)
    {
        return trim($input) === 'exit'; //    hola    LIMPIAR ESPACIOS
    }


    private function output($response)
    {
        echo $response . PHP_EOL;
    }

    public function getResponse($input)
    {
        return $this->aiService->getResponse($input);
    }

}