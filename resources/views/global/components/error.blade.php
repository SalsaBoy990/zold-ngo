@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'fs-7 my-0 invalid-feedback list-unstyled px-2 pt-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="fs-7">{{ $message }}</li>
        @endforeach
    </ul>
@endif
