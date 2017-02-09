@extends('app')

@section('content')
    <h1 class="page-header">Все товары</h1>

    @foreach($products->chunk(4) as $chunkedProducts)
        <div class="row">
            @foreach($chunkedProducts as $product)
                <div class="col-md-3">
                    <img src="{{ $product->preview }}" alt="{{ $product->title }}" class="img-responsive"/>

                    <h2>{{ $product->title }}</h2>

                    <p>
                        <span class="label label-info">{{ $product->amount }}</span>
                    </p>

                    <p>
                        @foreach($product->categories as $category)
                            <span class="label label-default">{{ $category->title }}</span>
                        @endforeach
                    </p>

                    <p class="text-muted">
                        Склады: {{ $product->stocks->pluck('title')->implode(', ') }}
                    </p>

                    <p>{!! $product->description !!}</p>
                </div>
            @endforeach
        </div>
    @endforeach

    {{ $products->links() }}
@endsection

@section('sidebar')
    @include('category.sidebar')
    @include('category.low-price')
@endsection
