<div class="alert">
    <div class="alert-header">
        {{$title}}
    </div>
    {{-- Untuk Children dari component atau isi dari component --}}
    {{$slot}}
    <div class = 'alert-footer'>
        {{$footer}}
    </div>
</div>