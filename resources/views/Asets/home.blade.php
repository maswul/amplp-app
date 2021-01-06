@extends('adminlte::page')

@section('title', 'Asets Manager')

@section('content_header')
    <h1>Asets Manager</h1>
@stop

@section('content')
    <x-adminlte-card title="Daftar Aset" theme="teal" theme-mode="outline" icon="fas fa-home">
        <div class="row mb-2">
            <div class="col-md-6">
                <livewire:asets.filter-controller/>
            </div>
            <div class="col-md-6 pr-4">
                <livewire:asets.tambah-controller/></div>
            </div>
        <div class="row mt-2" >
            <div class="col-md-12">
            <livewire:asets.asets-table/>
            </div>
        </div>
    </x-adminlte-card>
@stop
