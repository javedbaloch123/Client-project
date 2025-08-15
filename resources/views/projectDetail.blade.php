@extends('layout.layout')

@section('main')
     {{-- @dd($data); --}}
    <x-project-detail :data="$data" />
@endsection