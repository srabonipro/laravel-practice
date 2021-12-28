@extends('layouts.app')

@section('content')

    @foreach ($categories as $category)

        <x-category-item :category="$category" />

    @endforeach

@endsection
