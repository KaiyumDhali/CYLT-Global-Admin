<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HomepageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomepageController extends Controller
{
    public function edit()
    {
        // fetch existing sections (if any) or empty defaults
        $get = fn($s) => optional(HomepageContent::where('section', $s)->first())->content ?? [];

        $data = [
            // 'hero'          => $get('hero'),
            'features'      => $get('features'),
            'vehicles'      => $get('vehicles'),
            'video_showcase'=> $get('video_showcase'),
            'technology'    => $get('technology'),
            'manufacturing' => $get('manufacturing'),
            'lifestyle'     => $get('lifestyle'),
        ];

        return view('homepage.homepage', compact('data'));
    }

    public function update(Request $request)
    {
        // ---- VALIDATION ----
        $validated = $request->validate([
            // Hero
            // 'hero.title'       => ['required', 'string', 'max:180'],
            // 'hero.subtitle'    => ['nullable', 'string', 'max:500'],
            // 'hero.video'       => ['nullable', 'string', 'max:500'], // YouTube/MP4 URL

            // Features (array of {title,desc,icon})
            'features'         => ['nullable', 'array'],
            'features.*.title' => ['required_with:features', 'string', 'max:100'],
            'features.*.desc'  => ['required_with:features', 'string', 'max:300'],
            'features.*.icon'  => ['nullable', 'string', 'max:80'],

            // Vehicles
        'vehicles'               => ['nullable', 'array'],
        'vehicles.*.name'        => ['nullable', 'string', 'max:120'],
        'vehicles.*.category'    => ['nullable', 'string', 'max:120'],
        'vehicles.*.price'       => ['nullable', 'string', 'max:120'],
        'vehicles.*.image'       => ['nullable', 'file', 'image', 'max:2048'],
        'vehicles.*.image_old'   => ['nullable', 'string', 'max:300'],

        // ✅ Background video
        'vehicles.bg_video' => ['nullable', 'string', 'max:500'],

            // Video Showcase
            'video_showcase'         => ['nullable', 'array', 'max:6'],
            'video_showcase.*.title' => ['required_with:video_showcase', 'string', 'max:150'],
            'video_showcase.*.url'   => ['required_with:video_showcase', 'string', 'max:500'],

            // Technology
            'technology.video'       => ['nullable', 'string', 'max:500'],
            'technology.items'       => ['nullable', 'array'],
            'technology.items.*.title' => ['required_with:technology.items', 'string', 'max:120'],
            'technology.items.*.desc'  => ['required_with:technology.items', 'string', 'max:300'],
           'technology.description' => ['nullable', 'string', 'max:500'],

            'technology.items.*.icon'  => ['nullable', 'string', 'max:80'],

            // Manufacturing
            'manufacturing.video'    => ['nullable', 'string', 'max:500'],
            'manufacturing.paragraph'=> ['nullable', 'string'],
             'manufacturing.description' => ['nullable', 'string', 'max:500'],
            // Lifestyle
            'lifestyle.video'        => ['nullable', 'string', 'max:500'],
            'lifestyle.stats'        => ['nullable', 'array'],
            'lifestyle.stats.*.label'=> ['required_with:lifestyle.stats', 'string', 'max:80'],
            'lifestyle.stats.*.value'=> ['required_with:lifestyle.stats', 'string', 'max:80'],
        ]);

        // ✅ vehicles split: bg_video + items
    $vehiclesInput = $request->input('vehicles', []);
    $vehicles_bg_video = $vehiclesInput['bg_video'] ?? '';
    unset($vehiclesInput['bg_video']); // remove bg_video key from list

    // Filter only numeric keys (0,1,2...)
    $vehicles = array_filter($vehiclesInput, fn($key) => is_numeric($key), ARRAY_FILTER_USE_KEY);

    // ✅ Handle vehicle images
    foreach ($vehicles as $i => $row) {
        if ($request->hasFile("vehicles.$i.image")) {
            $path = $request->file("vehicles.$i.image")->store('vehicles', 'public');
            $vehicles[$i]['image'] = Storage::url($path);
        } else {
            $vehicles[$i]['image'] = $row['image_old'] ?? ($row['image'] ?? '');
        }
        unset($vehicles[$i]['image_old']);
    }

    // ---- UPSERT helper ----
    $upsert = function (string $section, array $content) {
        \App\Models\HomepageContent::updateOrCreate(
            ['section' => $section],
            ['content' => $content]
        );
    };

    // ✅ Save all sections
    // $upsert('hero',          $validated['hero']          ?? []);
    $upsert('features',      $validated['features']      ?? []);
    $upsert('vehicles', [
        'bg_video' => $vehicles_bg_video,
        'items'    => array_values($vehicles), // numeric reindex
    ]);
    $upsert('video_showcase',$validated['video_showcase']?? []);
    $upsert('technology',    $validated['technology']    ?? []);
    $upsert('manufacturing', $validated['manufacturing'] ?? []);
    $upsert('lifestyle',     $validated['lifestyle']     ?? []);

    return back()->with('success', 'Homepage content updated successfully.');
    }
}
