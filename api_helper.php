// api_helper.php
<?php
function fetchApi(string $url): array
{
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_CONNECTTIMEOUT => 5,
        CURLOPT_TIMEOUT        => 5,
    ]);
    $resp = curl_exec($ch);
    curl_close($ch);
    return $resp !== false ? json_decode($resp, true) : [];
}

function getServices(): array
{
    static $services = null;
    if ($services === null) {
        $data = fetchApi('https://admin.starlitsteel.com/api/services');
        $services = $data['services'] ?? [];
    }
    return $services;
}
