@extends('layouts.app')

@section('content')
    @foreach ($categories as $category)
        <h1>{{ $category->title }} ({{ $category->id }})</h1>
    @endforeach
@endsection
