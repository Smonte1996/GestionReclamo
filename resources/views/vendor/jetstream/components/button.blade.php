<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-green-400 text-white text-uppercase btn-sm']) }}>
    {{ $slot }}
</button>
