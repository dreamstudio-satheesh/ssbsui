<?php
// File: api_helper.php

// Define your main API base URL as a constant
define('API_BASE_URL', 'https://admin.starlitsteel.com/');

/**
 * Fetches data from an API endpoint.
 *
 * @param string $endpointPath The relative path to the API endpoint (e.g., "api/services").
 * @return array|null The decoded JSON data as an associative array, or null on failure.
 */
function fetchDataFromApi(string $endpointPath): ?array
{
    // Construct the full API URL
    $fullApiUrl = rtrim(API_BASE_URL, '/') . '/' . ltrim($endpointPath, '/');

    // Use @ to suppress errors for file_get_contents, we'll handle it below
    $jsonData = @file_get_contents($fullApiUrl);

    if ($jsonData === false) {
        // Log error or handle it more gracefully in a real application
        // error_log("Could not fetch data from API: " . $fullApiUrl); // Example of logging
        trigger_error("Could not fetch data from API: " . $fullApiUrl, E_USER_WARNING);
        return null;
    }

    $data = json_decode($jsonData, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
        // error_log("Could not decode JSON from API: " . $fullApiUrl . ". Error: " . json_last_error_msg());
        trigger_error("Could not decode JSON from API: " . $fullApiUrl . ". Error: " . json_last_error_msg(), E_USER_WARNING);
        return null;
    }

    return $data;
}

/**
 * Constructs the full URL for an image.
 * Assumes relative paths are relative to the API_BASE_URL.
 *
 * @param string $relativePath The relative path of the image (e.g., "services/photo.jpg").
 * @return string The full image URL, or an empty string if relativePath is empty.
 */
function getFullImageUrl(string $relativePath): string
{
    if (empty($relativePath)) {
        return ''; // Or a placeholder image URL
    }
    // Check if it's already a full URL
    if (preg_match("~^(?:f|ht)tps?://~i", $relativePath)) {
        return $relativePath;
    }
    // Construct full URL using the defined API_BASE_URL
    return rtrim(API_BASE_URL, '/') . '/' . ltrim($relativePath, '/');
}
?>