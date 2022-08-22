@extends('master')
@section('content')
      @foreach($categories as $category)
        <div class="product-item">
            <a href="/category/{{ $category->code }}" class="product-thumb">
              <img src="./templates/images/child.jpg" alt="" />
            </a>
          <div class="product-info">
            <h4>{{ $category->name }}</h4>
            <p>
              {{ $category->description }}
            </p>
          </div>  
        </div>
      @endforeach

@endsection