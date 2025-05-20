@props(['label' => '', 'required' => false, 'disabled' => false, 'type' => 'text'])

<div>
    @if($label)
        <label for="{{$attributes->get('id')}}" class="block font-medium text-sm text-slate-700">{{$label}}
            @if($required)
                <span class="text-red-500 relative -ml-0.5">*</span>
            @endif
        </label>
    @endif
    <input type="{{$type}}" @disabled($disabled)
        {{ $attributes->merge(['class' => 'border-slate-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-sm shadow-sm w-full']) }} />

    @if($errors->get($attributes['name']))
        <ul class="text-sm text-red-500 space-y-1">
            @foreach ((array) $errors->get($attributes['name']) as $message)
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    @endif
</div>



