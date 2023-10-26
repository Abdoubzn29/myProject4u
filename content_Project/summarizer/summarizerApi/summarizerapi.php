<?php
require_once('/Applications/XAMPP/xamppfiles/htdocs/myProject/content_Project/summarizer/summarizerApi/vendor/autoload.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Check if the form was submitted
  if (isset($_POST['input_text'])) {
    $inputText = $_POST['input_text'];
    $_SESSION['input_text'] = $inputText;
  
    $client = new \GuzzleHttp\Client();
  
    $response = $client->request('POST', 'https://api.ai21.com/studio/v1/summarize', [
      'body' => json_encode([
        'sourceType' => 'TEXT',
        'source' => $inputText
      ]),
      'headers' => [
        'Authorization' => 'Bearer JlGJS1BskrlKZtNadQveB8I9iaWXkRjC',
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
      ],
    ]);
  
    $statusCode = $response->getStatusCode();
  
    if ($statusCode === 200) {
      $result = json_decode($response->getBody(), true);
  
      if (isset($result['summary'])) {
        $summary = $result['summary'];
      } else {
        $summary = 'Summary not found.';
      }
    } else {
      $summary = 'Error occurred. Status code: ' . $statusCode;
    }
  } else {
    $summary = 'Input text not found.';
  }
} elseif (isset($_SESSION['input_text'])) {
  
  $inputText = $_SESSION['input_text'];
}

?>