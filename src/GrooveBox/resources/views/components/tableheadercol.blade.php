@props(['col' => '', 'class' => ''])

<th class="col{{ $col }} {{ $class }}">
    {{ $slot }}
</th>
