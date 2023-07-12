<x-layout title="Nova Série">
    <x-series.form :action="route('series.store')" :btname="Adicionar" :nome="old('nome')" :update="false" />
</x-layout>
