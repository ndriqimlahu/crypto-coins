<?php
  error_reporting(0);

  // <-- New Method for fetching REST API data by using the cURL functions -->

  // Initiate cURL session in a variable
  $curl_handle = curl_init();

  // API Endpoint
  $apiEndpoint = "https://api.coinstats.app/public/v1/news";

  // Set the cURL URL option
  curl_setopt($curl_handle, CURLOPT_URL, $apiEndpoint);

  // Return data as a string instead of direct output
  curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);

  // Execute cURL & store data in a variable
  $responseData = curl_exec($curl_handle);

  // Close a cURL session
  curl_close($curl_handle);

  // Decode JSON into array
  $responseData = json_decode($responseData);

  // All news data exists in 'news' object
  $newsData = $responseData->news;

  // Select 50 records of data
  $newsData = array_slice($newsData, 0, 50);

  /*
  // <-- Old Method for fetching REST API data by using the built-in function -->

  // API Endpoint
  $apiEndpoint = "https://api.coinstats.app/public/v1/news";

  // Read JSON file
  $jsonData = file_get_contents($apiEndpoint);

  // Decode JSON data into array
  $responseData = json_decode($jsonData);

  // All news data exists in 'news' object
  $newsData = $responseData->news;

  // Select 50 records of data
  $newsData = array_slice($newsData, 0, 50);
  */
?>