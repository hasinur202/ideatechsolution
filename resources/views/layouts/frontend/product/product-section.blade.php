<div class="col-md-12">
    @foreach ($demos as $demo)
    <div class="col-md-4 product-item">
        <a href="{{route('product.details')}}">
            <figure>
                <img class="tab-figure" src="{{asset('/images/'.$demo->image)}}" alt=" ">
            </figure>
            <h2>{{$demo->title}}</h2>
        </a>
    </div>
    @endforeach
</div>