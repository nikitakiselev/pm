<div class="panel panel-default">
    <div class="panel-heading">Категории</div>
    <div class="panel-body">
        <ul class="list-group">
            @foreach($categories as $category)
                <li class="list-group-item">
                    <span class="badge">0</span>
                    {{ $category->title }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
