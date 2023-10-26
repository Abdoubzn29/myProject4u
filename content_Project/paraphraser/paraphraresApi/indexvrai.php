<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $inputText = $_POST['input_text'];
  
  require_once('/Applications/XAMPP/xamppfiles/htdocs/myProject/content_Project/paraphraser/paraphraresApi/vendor/autoload.php');
  $client = new \GuzzleHttp\Client();

  $response = $client->request('POST', 'https://api.ai21.com/studio/v1/paraphrase', [
      'body' => json_encode([
          'style' => 'general',
          'text' => $inputText
      ]),
      'headers' => [
          'Authorization' => 'Bearer JlGJS1BskrlKZtNadQveB8I9iaWXkRjC',
          'accept' => 'application/json',
          'content-type' => 'application/json',
      ],
  ]);

  $paraphrasedText = json_decode($response->getBody(), true);
  $suggestions = $paraphrasedText['suggestions'];

  
  
}
?>