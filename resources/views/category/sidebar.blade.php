@component('components.panel')
    @slot('title')
        Категории
    @endslot

    <div class="list-group">
        @foreach($categories as $category)
            <a href="{{ route('category.show', $category) }}" class="list-group-item">
                <span class="badge">{{ $category->products_count }}</span>
                {{ $category->title }}
            </a>
        @endforeach
    </div>
@endcomponent
