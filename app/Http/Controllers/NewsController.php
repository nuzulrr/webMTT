<?php

namespace App\Http\Controllers;

use App\Services\NewsApiService;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function index(NewsApiService $newsApi)
    {
        $news = cache()->remember('landing.cybernews', 1800, function () use ($newsApi) {
            return $newsApi->getCyberSecurityNews(6);
              if (empty($data)) {
                return $newsApi->getFallbackNews();
            }

            return $data;
        });

        return view('welcome', compact('news'));
    }
}
