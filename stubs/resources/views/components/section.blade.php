@props(['heading' => ''])

<section {{ $attributes->merge(['class' => 'bg-white w-full p-6 shadow-md rounded-md']) }}>
    @if($heading)
        <h2 class="mb-6 font-semibold text-xl">{{$heading}}</h2>
    @endif
    {{$slot}}
</section>
