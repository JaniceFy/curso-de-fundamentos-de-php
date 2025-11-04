<?php

namespace App;

use OpenAI;

class OpenAiService implements AIServiceInterface
{

    protected $client;

    public function __construct() {
        $this->client = OpenAI::client($_ENV['OPENAI_API_KEY']);
    }

    public function getResponse(string $question): string
    {

        $result = $this->client->chat()->create([
            'model' => 'gpt-3.5-turbo',
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

        return $result['choices'][0]['message']['content'];

    }
}