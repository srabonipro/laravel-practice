@extends('layouts.app')

@section('content')
    <h1>Calendar Page</h1>
    <livewire:appointments-calendar/>
@endsection

@section('styles')
    @livewireStyles
@endsection

@section('scripts')
    @livewireScripts
    @livewireCalendarScripts
@endsection
