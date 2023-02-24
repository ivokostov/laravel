<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpClient\Psr18Client;
use Tectalic\OpenAi\Authentication;
use Tectalic\OpenAi\Client;
use Tectalic\OpenAi\Manager;
use Carbon\Carbon;

class CronController extends Controller
{
 
    function store($sign) { 
         
        $signs = config('constants');
        $text_work = $this->get_text('работен', $signs[$sign]);
        // $text_love = $this->get_text('любовен', $signs[$sign]);
        // $text_health = $this->get_text('здравен', $signs[$sign]);
        // $date = Carbon::now()->format('Y-m-d');
        // dd($text_work, $text_love, $text_health);
    }

    function get_text($type, $sign) { 
 
        $templeate = 'Напиши {type} хороскоп за {sign} на български език';
        $prompt = str_replace(['{type}', '{sign}'], [$type, $sign], $templeate);
        try {
            $openaiClient = \Tectalic\OpenAi\Manager::build(new \GuzzleHttp\Client(), new \Tectalic\OpenAi\Authentication(getenv('OPENAI_API_KEY')));
            $response = $openaiClient->completions()->create(
                new \Tectalic\OpenAi\Models\Completions\CreateRequest([
                    'model'  => 'text-davinci-003',
                    'prompt' => $prompt,
                    'temperature' => 0.6,
                    'max_tokens' => 2000,
                    'top_p' => 0
                ])
            )->toModel();
            echo $response->choices[0]->text;
        } catch (ClientException $e) {
            // Error response received. Retrieve the HTTP response code and response body.
            $responseBody = $handler->toArray();
            $responseCode = $handler->getResponse()->getStatusCode();
            // Handle the error...
            dd($responseBody, $responseCode);
        }
    
        

 
    }
}
