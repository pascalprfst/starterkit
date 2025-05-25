<nav {{ $attributes->merge(['class' => 'w-full border-b border-l']) }}>
    <div class="flex divide-x [&>*:last-child]:border-r">
        {{$slot}}
    </div>
</nav>
