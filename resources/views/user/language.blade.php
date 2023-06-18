@php
    $locales = config('app.locales');
@endphp

<ul>
    @if ($locales)
        @foreach ($locales as $locale => $language)
            <li>
                <a href="{{ route('change.language', $locale) }}">{{ $language }}</a>
            </li>
        @endforeach
    @endif
</ul>
