<?php
define('API_BASE_URL', 'https://admin.starlitsteel.com/');

/**
 * Fetches data from an API endpoint using cURL.
 *
 * @param string $endpointPath  e.g. "api/services"
 * @return array|null           decoded JSON or null on failure
 */
function fetchDataFromApi(string $endpointPath): ?array
{
    $url = rtrim(API_BASE_URL, '/') . '/' . ltrim($endpointPath, '/');
    
    // --- DEBUG: uncomment to log or echo the URL being requested
    // error_log("API URL: $url");
    // echo "Calling: $url\n";

    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT        => 10,
        CURLOPT_SSL_VERIFYHOST => 2,
        CURLOPT_SSL_VERIFYPEER => true,
    ]);

    $json = curl_exec($ch);
    $err  = curl_error($ch);
    $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($json === false || $err) {
        trigger_error("cURL error fetching {$url}: $err", E_USER_WARNING);
        return null;
    }
    if ($code < 200 || $code >= 300) {
        trigger_error("API returned HTTP $code for {$url}", E_USER_WARNING);
        return null;
    }

    $data = json_decode($json, true);
    if (json_last_error() !== JSON_ERROR_NONE) {
        trigger_error("JSON decode error: " . json_last_error_msg(), E_USER_WARNING);
        return null;
    }

    return $data;
}


/**
 * Build a full image URL from a relative path.
 */
function getFullImageUrl(string $relativePath): string
{
    if (preg_match('~^https?://~i', $relativePath)) {
        return $relativePath;
    }
    return rtrim(API_BASE_URL, '/') . '/' . ltrim($relativePath, '/');
}
