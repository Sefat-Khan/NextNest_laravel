
@if (file_exists(public_path('images/nextnetslogo.png')))
    <img
        src="{{ asset('images/nextnetslogo.png') }}"
        alt="{{ config('app.name') }}"
        {{ $attributes->merge(['class' => 'h-10 w-auto']) }}
    >
@else
    <svg viewBox="0 0 316 316" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
        <!-- original SVG path here -->
    </svg>
@endif
