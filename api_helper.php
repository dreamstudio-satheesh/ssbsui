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


function getCategoryGroups(): array
{
    $resp = fetchDataFromApi('api/categories');
    $categories = $resp['categories'] ?? [];

    $grouped = [
        'project' => [],
        'product' => [],
        'service' => [],
    ];

    foreach ($categories as $cat) {
        $slug = strtolower(preg_replace('/\s+/', '-', $cat['name']));
        $cat['slug'] = $slug;
        if (isset($grouped[$cat['type']])) {
            $grouped[$cat['type']][] = $cat;
        }
    }

    return $grouped;
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
        return 'https://admin.starlitsteel.com/assets/images/no-image.png'; // Fallback image
    }

    if (preg_match('~^https?://~i', $relativePath)) {
        return $relativePath;
    }

    return 'https://admin.starlitsteel.com/storage/' . ltrim($relativePath, '/');
}

