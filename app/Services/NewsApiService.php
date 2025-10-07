<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class NewsApiService
{
    private $baseUrl;
    private $apiKey;

    public function __construct()
    {
        $this->baseUrl = config('services.newsapi.base_url');
        $this->apiKey = config('services.newsapi.key');
    }

    public function getCyberSecurityNews($pageSize = 6)
    {
        $response = Http::get($this->baseUrl . 'everything', [
            'q' => 'cybersecurity',
            'language' => 'en',
            'sortBy' => 'publishedAt',
            'pageSize' => $pageSize,
            'apiKey' => $this->apiKey,
        ]);

        if ($response->successful()) {
            return $response->json()['articles'] ?? [];
        }

        return [];
    }
}
