@extends('layouts.app')
@section('title','Homepage Manage')

@section('content')
<main>
  <div class="main-content">
    <div class="page-content">
      <div class="container-fluid d-flex justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-10">
          <div class="card border-0 shadow-lg rounded-4">
            <div class="card-body p-5">
              <h2 class="mb-4 text-center fw-bold text-primary">
                <i class="bx bx-cog"></i> Manage Homepage
              </h2>

              @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  {{ session('success') }}
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
              @endif
              @if($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                  <ul class="mb-0">
                    @foreach($errors->all() as $er) <li>{{ $er }}</li>@endforeach
                  </ul>
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
              @endif

              <form action="{{ route('homepage.update') }}" method="POST" enctype="multipart/form-data" class="mt-4">
                @csrf

                {{-- HERO --}}
                <div class="mb-4 p-3 border rounded-3 d-none">
                  <h5 class="fw-bold">🎬 Hero Section</h5>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label fw-semibold">Title</label>
                      <input type="text" name="hero[title]" class="form-control shadow-sm"
                             value="{{ $data['hero']['title'] ?? '' }}" placeholder="Driving Innovation">
                    </div>
                    <div class="col-md-6">
                      <label class="form-label fw-semibold">Subtitle</label>
                      <input type="text" name="hero[subtitle]" class="form-control shadow-sm"
                             value="{{ $data['hero']['subtitle'] ?? '' }}" placeholder="Beyond Limits">
                    </div>
                    <div class="col-12">
                      <label class="form-label fw-semibold">Background Video URL (YouTube/MP4)</label>
                      <input type="text" name="hero[video]" class="form-control shadow-sm"
                             value="{{ $data['hero']['video'] ?? '' }}" placeholder="https://...mp4 or YouTube">
                    </div>
                  </div>
                </div>

                {{-- FEATURES --}}
                <div class="mb-4 p-3 border rounded-3">
                  <h5 class="fw-bold">⚡ Service Section</h5>
                  <div id="featuresWrapper">
                    @php $features = $data['features'] ?? []; @endphp
                    @forelse($features as $i => $f)
                      <div class="row g-3 feature-row mb-2">
                        <div class="col-md-4">
                          <input type="text" name="features[{{ $i }}][title]" class="form-control shadow-sm"
                            value="{{ $f['title'] ?? '' }}" placeholder="Electric Innovation">
                        </div>
                        <div class="col-md-6">
                          <input type="text" name="features[{{ $i }}][desc]" class="form-control shadow-sm"
                            value="{{ $f['desc'] ?? '' }}" placeholder="Short description">
                        </div>
                        <div class="col-md-2 d-flex align-items-center gap-2">
                          <input type="text" name="features[{{ $i }}][icon]" class="form-control shadow-sm"
                            value="{{ $f['icon'] ?? '' }}" placeholder="Zap/Shield/Award">
                          <button type="button" class="btn btn-outline-danger remove-feature">X</button>
                        </div>
                      </div>
                    @empty
                      @for($i=0;$i<3;$i++)
                        <div class="row g-3 feature-row mb-2">
                          <div class="col-md-4"><input type="text" name="features[{{ $i }}][title]" class="form-control shadow-sm" placeholder="Title"></div>
                          <div class="col-md-6"><input type="text" name="features[{{ $i }}][desc]" class="form-control shadow-sm" placeholder="Description"></div>
                          <div class="col-md-2 d-flex align-items-center gap-2">
                            <input type="text" name="features[{{ $i }}][icon]" class="form-control shadow-sm" placeholder="Icon">
                            <button type="button" class="btn btn-outline-danger remove-feature">X</button>
                          </div>
                        </div>
                      @endfor
                    @endforelse
                  </div>
                  <button type="button" class="btn btn-outline-success mt-2" id="addFeatureBtn">+ Add Feature</button>
                </div>

               {{-- VEHICLES SLIDER --}}
<div class="mb-4 p-3 border rounded-3">
  <h5 class="fw-bold">🚗 Vehicles Slider</h5>

  {{-- ✅ Background Video --}}
  <div class="mb-3">
    <label class="form-label fw-semibold">Background Video URL (YouTube/MP4)</label>
    <input type="text"
           name="vehicles[bg_video]"
           class="form-control shadow-sm"
           value="{{ $data['vehicles']['bg_video'] ?? '' }}"
           placeholder="https://youtu.be/xxxxxx বা https://cdn.com/video.mp4">
  </div>

  {{-- ✅ Vehicles List --}}
  <div id="vehiclesWrapper">
    @php
      $vehicles = $data['vehicles']['items'] ?? [];
    @endphp

    @forelse($vehicles as $i => $v)
      <div class="row g-3 vehicle-row mb-2 align-items-center border-bottom pb-2">
        <div class="col-md-3">
          <input type="text" name="vehicles[{{ $i }}][name]" class="form-control shadow-sm"
                 value="{{ $v['name'] ?? '' }}" placeholder="LuxeDrive EV-X">
        </div>
        <div class="col-md-3">
          <input type="text" name="vehicles[{{ $i }}][category]" class="form-control shadow-sm"
                 value="{{ $v['category'] ?? '' }}" placeholder="Electric SUV">
        </div>
        <div class="col-md-3">
          <input type="text" name="vehicles[{{ $i }}][price]" class="form-control shadow-sm"
                 value="{{ $v['price'] ?? '' }}" placeholder="From $89,990">
        </div>
        <div class="col-md-2">
          <input type="file" name="vehicles[{{ $i }}][image]" class="form-control shadow-sm">
          <input type="hidden" name="vehicles[{{ $i }}][image_old]" value="{{ $v['image'] ?? '' }}">
          @if(!empty($v['image']))
            <small class="text-muted d-block mt-1">Current: {{ $v['image'] }}</small>
          @endif
        </div>
        <div class="col-md-1 text-end">
          <button type="button" class="btn btn-outline-danger btn-sm remove-vehicle">X</button>
        </div>
      </div>
    @empty
      {{-- default blank rows --}}
      @for($i=0;$i<2;$i++)
        <div class="row g-3 vehicle-row mb-2 align-items-center border-bottom pb-2">
          <div class="col-md-3"><input type="text" name="vehicles[{{ $i }}][name]" class="form-control shadow-sm" placeholder="Name"></div>
          <div class="col-md-3"><input type="text" name="vehicles[{{ $i }}][category]" class="form-control shadow-sm" placeholder="Category"></div>
          <div class="col-md-3"><input type="text" name="vehicles[{{ $i }}][price]" class="form-control shadow-sm" placeholder="Price"></div>
          <div class="col-md-2"><input type="file" name="vehicles[{{ $i }}][image]" class="form-control shadow-sm"></div>
          <div class="col-md-1 text-end"><button type="button" class="btn btn-outline-danger btn-sm remove-vehicle">X</button></div>
        </div>
      @endfor
    @endforelse
  </div>

  <button type="button" class="btn btn-outline-success mt-2" id="addVehicleBtn">+ Add Vehicle</button>
</div>


                {{-- VIDEO SHOWCASE (2–3) --}}
                <div class="mb-4 p-3 border rounded-3">
                  <h5 class="fw-bold">🎥 Experience Journy Section (YouTube/MP4)</h5>
                  <div id="videosWrapper">
                    @php $videos = $data['video_showcase'] ?? []; @endphp
                    @forelse($videos as $i => $vi)
                      <div class="row g-3 video-row mb-2">
                        <div class="col-md-4"><input type="text" name="video_showcase[{{ $i }}][title]" class="form-control shadow-sm" value="{{ $vi['title'] ?? '' }}" placeholder="Title"></div>
                        <div class="col-md-7"><input type="text" name="video_showcase[{{ $i }}][url]" class="form-control shadow-sm" value="{{ $vi['url'] ?? '' }}" placeholder="YouTube/MP4 URL"></div>
                        <div class="col-md-1 d-flex align-items-center"><button type="button" class="btn btn-outline-danger remove-video">X</button></div>
                      </div>
                    @empty
                      @for($i=0;$i<3;$i++)
                        <div class="row g-3 video-row mb-2">
                          <div class="col-md-4"><input type="text" name="video_showcase[{{ $i }}][title]" class="form-control shadow-sm" placeholder="Title"></div>
                          <div class="col-md-7"><input type="text" name="video_showcase[{{ $i }}][url]" class="form-control shadow-sm" placeholder="YouTube/MP4 URL"></div>
                          <div class="col-md-1 d-flex align-items-center"><button type="button" class="btn btn-outline-danger remove-video">X</button></div>
                        </div>
                      @endfor
                    @endforelse
                  </div>
                  <button type="button" class="btn btn-outline-success mt-2" id="addVideoBtn">+ Add Video</button>
                </div>

                {{-- TECHNOLOGY --}}
                <div class="mb-4 p-3 border rounded-3">
                  <h5 class="fw-bold">🧠 Charging infrastructure</h5>
                  <div class="row g-3">
                    <div class="col-12">
                      <label class="form-label fw-semibold">Background/Showcase Video URL</label>
                      <input type="text" name="technology[video]" class="form-control shadow-sm"
                             value="{{ $data['technology']['video'] ?? '' }}" placeholder="https://...">
                    </div>
                    <div class="col-12">
      <label class="form-label fw-semibold">Main Description</label>
      <textarea name="technology[description]" rows="3" class="form-control shadow-sm"
        placeholder="Write a paragraph about this section...">{{ $data['technology']['description'] ?? '' }}</textarea>
    </div>
                  </div>
                  <div class="mt-3">
                    <label class="form-label fw-semibold">Items (icon,title,desc)</label>
                    <div id="techWrapper">
                      @php $techItems = $data['technology']['items'] ?? []; @endphp
                      @forelse($techItems as $i => $ti)
                        <div class="row g-3 tech-row mb-2">
                          <div class="col-md-3"><input type="text" name="technology[items][{{ $i }}][title]" class="form-control shadow-sm" value="{{ $ti['title'] ?? '' }}" placeholder="AI Assistance"></div>
                          <div class="col-md-7"><input type="text" name="technology[items][{{ $i }}][desc]" class="form-control shadow-sm" value="{{ $ti['desc'] ?? '' }}" placeholder="Description"></div>
                         
                          <div class="col-md-2 d-flex align-items-center gap-2">
                            <input type="text" name="technology[items][{{ $i }}][icon]" class="form-control shadow-sm" value="{{ $ti['icon'] ?? '' }}" placeholder="Zap/Cpu/...">
                            <button type="button" class="btn btn-outline-danger remove-tech">X</button>
                          </div>
                        </div>
                      @empty
                        @for($i=0;$i<4;$i++)
                          <div class="row g-3 tech-row mb-2">
                            <div class="col-md-3"><input type="text" name="technology[items][{{ $i }}][title]" class="form-control shadow-sm" placeholder="Title"></div>
                            <div class="col-md-7"><input type="text" name="technology[items][{{ $i }}][desc]" class="form-control shadow-sm" placeholder="Description"></div>
                            <div class="col-md-2 d-flex align-items-center gap-2">
                              <input type="text" name="technology[items][{{ $i }}][icon]" class="form-control shadow-sm" placeholder="Icon">
                              <button type="button" class="btn btn-outline-danger remove-tech">X</button>
                            </div>
                          </div>
                        @endfor
                      @endforelse
                    </div>
                    <button type="button" class="btn btn-outline-success mt-2" id="addTechBtn">+ Add Item</button>
                  </div>
                </div>

                {{-- MANUFACTURING --}}
                <div class="mb-4 p-3 border rounded-3">
                  <h5 class="fw-bold">🏭 Vehicle Conversion</h5>
                  <div class="row g-3">
                    <div class="col-md-6">
                      <label class="form-label fw-semibold">Video URL</label>
                      <input type="text" name="manufacturing[video]" class="form-control shadow-sm"
                             value="{{ $data['manufacturing']['video'] ?? '' }}" placeholder="https://...">
                    </div>
                                      <div class="col-6">
      <label class="form-label fw-semibold">Main Description</label>
      <textarea name="manufacturing[description]" rows="3" class="form-control shadow-sm"
        placeholder="Write a paragraph about this section...">{{ $data['manufacturing']['description'] ?? '' }}</textarea>
    </div>
                    <div class="col-md-6">
                      <label class="form-label fw-semibold">Paragraph</label>
                      <textarea name="manufacturing[paragraph]" rows="3" class="form-control shadow-sm"
                                placeholder="Write a paragraph...">{{ $data['manufacturing']['paragraph'] ?? '' }}</textarea>
                    </div>
                  </div>
                </div>

                {{-- LIFESTYLE --}}
                <div class="mb-4 p-3 border rounded-3">
                  <h5 class="fw-bold">✨ SKD product development</h5>
                  <div class="row g-3">
                    <div class="col-12">
                      <label class="form-label fw-semibold">Background Video URL</label>
                      <input type="text" name="lifestyle[video]" class="form-control shadow-sm"
                             value="{{ $data['lifestyle']['video'] ?? '' }}" placeholder="https://...">
                    </div>
                  </div>
                  <div class="mt-3">
                    <label class="form-label fw-semibold">Stats (value + label)</label>
                    <div id="statsWrapper">
                      @php $stats = $data['lifestyle']['stats'] ?? []; @endphp
                      @forelse($stats as $i => $st)
                        <div class="row g-3 stat-row mb-2">
                          <div class="col-md-3"><input type="text" name="lifestyle[stats][{{ $i }}][value]" class="form-control shadow-sm" value="{{ $st['value'] ?? '' }}" placeholder="50K+"></div>
                          <div class="col-md-7"><input type="text" name="lifestyle[stats][{{ $i }}][label]" class="form-control shadow-sm" value="{{ $st['label'] ?? '' }}" placeholder="Happy Owners"></div>
                          <div class="col-md-2 d-flex align-items-center"><button type="button" class="btn btn-outline-danger remove-stat">X</button></div>
                        </div>
                      @empty
                        @for($i=0;$i<3;$i++)
                          <div class="row g-3 stat-row mb-2">
                            <div class="col-md-3"><input type="text" name="lifestyle[stats][{{ $i }}][value]" class="form-control shadow-sm" placeholder="Value"></div>
                            <div class="col-md-7"><input type="text" name="lifestyle[stats][{{ $i }}][label]" class="form-control shadow-sm" placeholder="Label"></div>
                            <div class="col-md-2 d-flex align-items-center"><button type="button" class="btn btn-outline-danger remove-stat">X</button></div>
                          </div>
                        @endfor
                      @endforelse
                    </div>
                    <button type="button" class="btn btn-outline-success mt-2" id="addStatBtn">+ Add Stat</button>
                  </div>
                </div>

                <div class="d-flex justify-content-end gap-2">
                  <a href="{{ route('homepage.edit') }}" class="btn btn-secondary">Reset</a>
                  <button type="submit" class="btn btn-primary">
                    <i class="bx bx-save"></i> Save Homepage
                  </button>
                </div>
              </form>
            </div>
          </div>

          {{-- Simple helpers (same style as your service form) --}}
          <div class="text-center mt-3 text-muted">Tip: You can paste YouTube links or direct MP4 links in video fields.</div>
        </div>
      </div>
    </div>
  </div>
</main>

{{-- Minimal JS (no external dep needed except Bootstrap already in layout) --}}
<script>
document.addEventListener('DOMContentLoaded', () => {
  // === Feature add/remove ===
  const featuresWrapper = document.getElementById('featuresWrapper');
  document.getElementById('addFeatureBtn').addEventListener('click', () => {
    const index = featuresWrapper.querySelectorAll('.feature-row').length;
    const row = document.createElement('div');
    row.className = 'row g-3 feature-row mb-2';
    row.innerHTML = `
      <div class="col-md-4"><input type="text" name="features[${index}][title]" class="form-control shadow-sm" placeholder="Title"></div>
      <div class="col-md-6"><input type="text" name="features[${index}][desc]" class="form-control shadow-sm" placeholder="Description"></div>
      <div class="col-md-2 d-flex align-items-center gap-2">
        <input type="text" name="features[${index}][icon]" class="form-control shadow-sm" placeholder="Icon">
        <button type="button" class="btn btn-outline-danger remove-feature">X</button>
      </div>`;
    featuresWrapper.appendChild(row);
  });
  featuresWrapper.addEventListener('click', e => {
    if (e.target.classList.contains('remove-feature')) {
      const rows = featuresWrapper.querySelectorAll('.feature-row');
      if (rows.length > 1) e.target.closest('.feature-row').remove();
    }
  });


  // === Vehicle add/remove ===
  const vehiclesWrapper = document.getElementById('vehiclesWrapper');
  document.getElementById('addVehicleBtn').addEventListener('click', () => {
    const index = vehiclesWrapper.querySelectorAll('.vehicle-row').length;
    const row = document.createElement('div');
    row.className = 'row g-3 vehicle-row mb-2 align-items-center border-bottom pb-2';
    row.innerHTML = `
      <div class="col-md-3">
        <input type="text" name="vehicles[${index}][name]" class="form-control shadow-sm" placeholder="Name">
      </div>
      <div class="col-md-3">
        <input type="text" name="vehicles[${index}][category]" class="form-control shadow-sm" placeholder="Category">
      </div>
      <div class="col-md-3">
        <input type="text" name="vehicles[${index}][price]" class="form-control shadow-sm" placeholder="Price">
      </div>
      <div class="col-md-2">
        <input type="file" name="vehicles[${index}][image]" class="form-control shadow-sm">
      </div>
      <div class="col-md-1 text-end">
        <button type="button" class="btn btn-outline-danger btn-sm remove-vehicle">X</button>
      </div>`;
    vehiclesWrapper.appendChild(row);
  });

  vehiclesWrapper.addEventListener('click', e => {
    if (e.target.classList.contains('remove-vehicle')) {
      const rows = vehiclesWrapper.querySelectorAll('.vehicle-row');
      if (rows.length > 1) e.target.closest('.vehicle-row').remove();
    }
  });


  // === Video add/remove ===
  const videosWrapper = document.getElementById('videosWrapper');
  document.getElementById('addVideoBtn').addEventListener('click', () => {
    const index = videosWrapper.querySelectorAll('.video-row').length;
    const row = document.createElement('div');
    row.className = 'row g-3 video-row mb-2';
    row.innerHTML = `
      <div class="col-md-4"><input type="text" name="video_showcase[${index}][title]" class="form-control shadow-sm" placeholder="Title"></div>
      <div class="col-md-7"><input type="text" name="video_showcase[${index}][url]" class="form-control shadow-sm" placeholder="YouTube/MP4 URL"></div>
      <div class="col-md-1 d-flex align-items-center"><button type="button" class="btn btn-outline-danger remove-video">X</button></div>`;
    videosWrapper.appendChild(row);
  });
  videosWrapper.addEventListener('click', e => {
    if (e.target.classList.contains('remove-video')) {
      const rows = videosWrapper.querySelectorAll('.video-row');
      if (rows.length > 1) e.target.closest('.video-row').remove();
    }
  });


  // === Technology add/remove ===
  const techWrapper = document.getElementById('techWrapper');
  document.getElementById('addTechBtn').addEventListener('click', () => {
    const index = techWrapper.querySelectorAll('.tech-row').length;
    const row = document.createElement('div');
    row.className = 'row g-3 tech-row mb-2';
    row.innerHTML = `
      <div class="col-md-3"><input type="text" name="technology[items][${index}][title]" class="form-control shadow-sm" placeholder="Title"></div>
      <div class="col-md-7"><input type="text" name="technology[items][${index}][desc]" class="form-control shadow-sm" placeholder="Description"></div>
      <div class="col-md-2 d-flex align-items-center gap-2">
        <input type="text" name="technology[items][${index}][icon]" class="form-control shadow-sm" placeholder="Icon">
        <button type="button" class="btn btn-outline-danger remove-tech">X</button>
      </div>`;
    techWrapper.appendChild(row);
  });
  techWrapper.addEventListener('click', e => {
    if (e.target.classList.contains('remove-tech')) {
      const rows = techWrapper.querySelectorAll('.tech-row');
      if (rows.length > 1) e.target.closest('.tech-row').remove();
    }
  });


  // === Lifestyle stats add/remove ===
  const statsWrapper = document.getElementById('statsWrapper');
  document.getElementById('addStatBtn').addEventListener('click', () => {
    const index = statsWrapper.querySelectorAll('.stat-row').length;
    const row = document.createElement('div');
    row.className = 'row g-3 stat-row mb-2';
    row.innerHTML = `
      <div class="col-md-3"><input type="text" name="lifestyle[stats][${index}][value]" class="form-control shadow-sm" placeholder="Value"></div>
      <div class="col-md-7"><input type="text" name="lifestyle[stats][${index}][label]" class="form-control shadow-sm" placeholder="Label"></div>
      <div class="col-md-2 d-flex align-items-center">
        <button type="button" class="btn btn-outline-danger remove-stat">X</button>
      </div>`;
    statsWrapper.appendChild(row);
  });
  statsWrapper.addEventListener('click', e => {
    if (e.target.classList.contains('remove-stat')) {
      const rows = statsWrapper.querySelectorAll('.stat-row');
      if (rows.length > 1) e.target.closest('.stat-row').remove();
    }
  });
});
</script>

@endsection
