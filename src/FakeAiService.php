<?php

namespace App;

class FakeAiService
{
    public function getResponse(string $question): string
    {

        sleep(2);

        if (strpos($question, 'PHP') !== false) {
            return 'AI: ' . $question;
        } else {
            return 'AI: I can only answer questions about PHP';
        }
    }
}