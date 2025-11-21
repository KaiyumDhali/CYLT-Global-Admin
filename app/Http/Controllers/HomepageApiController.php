<?php

namespace App\Http\Controllers;

use App\Models\HomepageContent;

class HomepageApiController extends Controller
{
    public function show()
    {
        $rows = HomepageContent::all()->keyBy('section');

        $get = function ($key, $fallback = []) use ($rows) {
            if (!isset($rows[$key])) return $fallback;
            $raw = $rows[$key]->content;
            return is_string($raw)
                ? (json_decode($raw, true) ?? $fallback)
                : (is_array($raw) ? $raw : $fallback);
        };

        $hero          = $get('hero');
        $features      = $get('features');
        $vehicles      = $get('vehicles');
        $video_showcase= $get('video_showcase');
        $technology    = $get('technology');
        $manufacturing = $get('manufacturing');
        $lifestyle     = $get('lifestyle');

        return response()->json([
            'hero' => [
                'title'            => $hero['title'] ?? '',
                'subtitle'         => $hero['subtitle'] ?? '',
                'background_video' => $hero['video'] ?? '',
            ],

            'features' => $features ?? [],

            'featured_vehicles' => $vehicles['items'] ?? [],
            'vehicles_bg_video' => $vehicles['bg_video'] ?? '',

            'video_showcase' => collect($video_showcase ?? [])->map(function($item, $i){
                return [
                    'id' => $i + 1,
                    'title' => $item['title'] ?? '',
                    'url' => $item['url'] ?? '',
                ];
            })->values(),

            'technology' => [
                'background_video' => $technology['video'] ?? '',
                'right_video'      => $technology['video'] ?? '',
                'bullets'          => $technology['items'] ?? [],
                'description'          => $technology['description'] ?? '',
            ],

            'manufacturing' => [
                'background_video' => $manufacturing['video'] ?? '',
                'right_video' => $manufacturing['video'] ?? '',
                'paragraph'   => $manufacturing['paragraph'] ?? '',
                'description'  => $manufacturing['description'] ?? '',
            ],

            'lifestyle' => [
                'background_video' => $lifestyle['video'] ?? '',
                'stats'            => $lifestyle['stats'] ?? [],
            ],
        ]);
    }
}
