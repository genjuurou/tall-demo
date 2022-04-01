<div {{ $attributes->merge(['class' => "font-['Pacifico'] font-bold text-gray-800 dark:text-zinc-200", 'role' => "banner"]) }}>
    <a href="{{ route('dashboard') }}">{{ config('app.name') }}</a>
</div>
