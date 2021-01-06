@extends('adminlte::page')

@section('title', 'Asets Manager')

@section('content_header')
    <h1>Asets Manager</h1>
@stop

@section('content')
    <x-adminlte-card title="Daftar Aset" theme="teal" theme-mode="outline" icon="fas fa-home">
        <div ><livewire:asets.tambah-controller/></div>
        <div >
            <livewire:asets.asets-table/>
        </div>
    </x-adminlte-card>
@stop
