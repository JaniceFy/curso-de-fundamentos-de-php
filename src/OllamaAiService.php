<?php

namespace App;

use ArdaGnsrn\Ollama\Ollama;

class OllamaAiService implements AIServiceInterface
{

    protected $client;

    public function __construct() {
        $this->client = Ollama::client();
    }

    public function getResponse(string $question): string
    {

        /*$result = $this->client->chat()->create([
            'model' => 'deepseek-r1:1.5b',
            'messages' => [
                ['role' => 'user', 'content' => $question],
            ],
        ]);*/
        $result = $this->client->chat()->create([
            'model' => 'deepseek-r1:1.5b',
            'messages' => [
                ['role' => 'system', 'content' => <<<EOT

                Eres un asistente especializado exclusivamente en PHP.
                -Si te preguntan algo que no este relacionado con PHP, respondes con "No se".
                -Si te preguntan algo relacionado con PHP, responde de forma breve y concisa. Sin rodeos.
                EOT
            
            ],
                ['role' => 'user', 'content' => $question],
            ],
        ]);

        return $result->message->content;

    }
}