<div class="panel panel-default">
    <div class="panel-heading">Категории</div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    {{--<span class="badge">{{ $category->products->count() }}</span>--}}
                    <span class="badge">{{ $category->products_count }}</span>
                    {{ $category->title }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
