<?php
// chatbot_api.php

$userMessage = $_POST['message'];
$userMessage = htmlspecialchars($userMessage);

// 1.  Call the Google Custom Search API
$searchApiKey = 'AIzaSyBeD-udyZnIT17HuL7oHh_-4gLpKybNUn8';  // Replace with your key
$searchEngineId = '01386c2aa31334e15'; // Replace with your Search Engine ID
$searchQuery = urlencode($userMessage . " divorce laws in India");

$searchUrl = "https://www.googleapis.com/customsearch/v1?q=$searchQuery&cx=$searchEngineId&key=$searchApiKey";

$searchResult = file_get_contents($searchUrl);
if ($searchResult === false) {
    echo json_encode(['error' => 'Error with search']);
    exit;
}
$searchData = json_decode($searchResult, true);

if ($searchData && isset($searchData['items']) && count($searchData['items']) > 0) {
    $firstResult = $searchData['items'][0];
    $title = $firstResult['title'];
    $snippet = $firstResult['snippet'];
    $url = $firstResult['link'];

    $response = "Here's some information I found: \n\nTitle: $title\nSnippet: $snippet\nURL: $url\n\nRemember, this is for informational purposes only.";
    echo json_encode(['response' => $response]);
} else {
    $response = "I couldn't find specific information on that.  Here's a general link: [Search Results](https://www.google.com/search?q=" . urlencode($userMessage) . ")";
    echo json_encode(['response' => $response]);
}
?>