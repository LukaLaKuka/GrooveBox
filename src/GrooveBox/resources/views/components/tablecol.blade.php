@props(['col' => '', 'class' => ''])

<td class="col{{ $col }} {{$class}}">
    {{$slot}}
</td>
