<?php
// Fetch JSON data from API
$api_url = "https://www.nrb.org.np/api/forex/v1/rates?from=2024-12-01&to=2024-12-07&per_page=10&page=1";
$response = file_get_contents($api_url);
$data = json_decode($response, true);

// Extract rates if available
$rates = $data['data']['payload'] ?? [];
?>
