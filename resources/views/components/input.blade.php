@props(['title', 'atrib', 'type'])

<div {{ $attributes }}>
    <label for="{{ $atrib }}" class="block font-medium text-sm text-gray-700">
        {{ $title ?? Str::ucfirst($atrib) }}
    </label>
    
    <input
        id="{{ $atrib }}"
        name="{{ $atrib }}"
        type="{{ $type ?? 'text' }}"
        :value="{{ old($atrib) }}"
        {!! $attributes->merge(
            ['class' => 'rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full mt-2 mb-3 mx-auto']
        ) !!}
         autofocus
         />
</div>