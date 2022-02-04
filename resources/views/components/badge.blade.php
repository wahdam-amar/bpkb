@php
$active = $value === 'Positive';
@endphp

<span @class([
    'bg-green-100 text-green-800' => $active,
    'bg-red-100 text-red-800' => !$active,
    'text-xs font-semibold mr-2 px-2.5 py-0.5 rounded',
])>{{ $value }}</span>
