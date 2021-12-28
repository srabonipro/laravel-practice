@props(['category'])

<div>

    <h1>{{ $category->title }} ({{ $category->id }})</h1>

    @foreach ($category->children as $child)

        <div style="margin-left: 40px">
            <x-category-item :category="$child" />
        </div>

    @endforeach

</div>
