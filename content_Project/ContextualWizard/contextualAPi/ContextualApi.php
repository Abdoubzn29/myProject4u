<?php
require_once('/Applications/XAMPP/xamppfiles/htdocs/myProject/content_Project/ContextualWizard/contextualAPi/vendor/autoload.php');

use GuzzleHttp\Client;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the context and question from the form
    $context = $_POST['context'];
    $question = $_POST['question'];

    $client = new Client();

    $response = $client->request('POST', 'https://api.ai21.com/studio/v1/experimental/answer', [
        'body' => json_encode([
            'context' => $context,
            'question' => $question,
        ]),
        'headers' => [
            'Authorization' => 'Bearer JlGJS1BskrlKZtNadQveB8I9iaWXkRjC',
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ],
    ]);

    $responseData = json_decode($response->getBody(), true);

    // Extract the answer from the API response
    $answer = $responseData['answer'] ?? 'No answer found.';
} else {
    $context = '';
    $question = '';
    $answer = '';
}
?>

