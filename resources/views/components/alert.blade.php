@props(['tipe' => 'info'])
<div style="
    padding: 12px;
    margin-bottom: 15px;
    border-radius: 5px;
    background-color: {{ $tipe === 'bahaya' ? '#f8d7da' : ($tipe === 'sukses' ? '#d4edda' : '#d1ecf1') }};
    color: #333;">
    {{ $slot }}
</div>
