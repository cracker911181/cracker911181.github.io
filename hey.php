
<?php
$client = new GuzzleHttp\Client();

// Create a POST request
$response = $client->request(
    'POST',
    'http://127.0.0.1:5000',
    [
        'form_params' => [
            'key1' => 'value1',
            'key2' => 'value2'
        ]
    ]
);

// Parse the response object, e.g. read the headers, body, etc.
$headers = $response->getHeaders();
$body = $response->getBody();

// Output headers and body for debugging purposes
var_dump($headers, $body);
?>
