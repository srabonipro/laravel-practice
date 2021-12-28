@extends('layouts.app')

@section('content')
    @foreach ($categories as $category)
        <h1>{{ $category->title }} ({{ $category->id }})</h1>

        @foreach ($category->children as $child)
            <h1 style="margin-left: 40px">{{ $child->title }} ({{ $child->id }})</h1>

            @foreach ($child->children as $subchild)
                <h1 style="margin-left: 80px">{{ $subchild->title }} ({{ $subchild->id }})</h1>
            @endforeach
        @endforeach

    @endforeach
@endsection
