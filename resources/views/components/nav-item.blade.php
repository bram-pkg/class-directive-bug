@props(['icon'])

<div>
    <x-icon @class([$icon, 'pe-2'])/>
    {{ $slot }}
</div>