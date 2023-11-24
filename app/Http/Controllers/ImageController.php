<?php

namespace App\Http\Controllers;


use OpenAI;


use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ImageController extends Controller
{
    public function generate(Request $request){

       $request->validate([
        
        'description' => 'required|string|max:1000',
        'size' => Rule::in(['sm','md','lg'])
        
       ]);

       $description = $request->input('description');
        

       switch($request->size){

            case 'lg':
                $size = '1024x1024';
                break;
            case 'md':
                $size = '512x512';
                break;
            default :
                $size = '256x256';
                break;
       }

      
       
       $client = OpenAI::client(config('app.openai_api_key'));

       $response = $client->images()->create([

            'prompt' => $description,
            'n' => 1,
            'size' => $size,
            'response_format' => 'url',
       ]);
        $url = $response->toArray()['data'][0]['url'];
        
       return view('result',compact('url', 'description'));
    }

    
    public function index(){


        return view('image');
    }
}