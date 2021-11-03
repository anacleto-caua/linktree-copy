<button {{ $attributes->merge(['type' => 'button', 'class' => 'items-center px-4 py-3 my-3 bg-red-800 border border-transparent rounded-md font-semibold text-xs text-white tracking-widest disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
