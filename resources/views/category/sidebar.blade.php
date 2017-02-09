@component('components.panel')
    @slot('title')
        Категории
    @endslot

    <ul class="list-group">
        @foreach($categories as $category)
            <li class="list-group-item">
                {{--<span class="badge">{{ $category->products->count() }}</span>--}}
                <span class="badge">{{ $category->products_count }}</span>
                {{ $category->title }}
            </li>
        @endforeach
    </ul>
@endcomponent
