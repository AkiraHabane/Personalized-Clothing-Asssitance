<?php

require __DIR__ .'/vendor/autoload.php';

use Orhanerday\OpenAi\OpenAi;

$open_ai = new OpenAi('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');

//get prompt param that we will send to JS file
//test using GET request 
$prompt = $_POST['prompt'];

$complete = $open_ai->image([
    "prompt" => $prompt,
    "n" => 3, //number of images
    "size" => "256x256", //image dimension
    "response_format" => "b64_json"  //use url for less credit usage
]);

echo $complete;
?>
