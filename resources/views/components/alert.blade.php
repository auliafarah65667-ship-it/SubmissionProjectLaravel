@props(['tipe' => 'info'])

<div style="padding: 10px; margin: 10px 0; border: 1px solid #999;
    color: {{ $tipe === 'bahaya' ? 'red' : ($tipe === 'sukses' ? 'green' : 'blue') }};">
    {{ $slot }}
</div>