<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class NewsController extends Controller
{
    public function index()
    {
        $videoList = $this->_videoList();

        return view('news', compact('videoList'));
    }

    public function show()
    {
        return view('detail-news');
    }

    protected function _videoList()
    {
        $part = 'snippet';
        $maxResults = '3';
        $order = 'date';
        $channelId = config('services.youtube.channel_id');
        $apiKey = config('services.youtube.api_key');
        $youTubeEndPoint = config('services.youtube.search_endpoint');
        $type = 'video';

        $url = "$youTubeEndPoint?part=$part&maxResults=$maxResults&channelId=$channelId&type=$type&order=$order&key=$apiKey";
        $response = Http::get($url);
        $results = json_decode($response);

        return $results;
    }
}
