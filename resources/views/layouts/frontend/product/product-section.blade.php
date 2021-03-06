@foreach ($demos as $demo)
<div class="col-sm-6 col-md-4" id="classAdd">
    <div class="item-work">
        <div class="hover">
            <img src="{{ asset('/images/'.$demo->image) }}" alt="Image" style="height: 23rem"/>
            <div class="shadow">
                <dir class="myitem">
                    <a href="{{ route('product.details') }}" target="_blank" class="btn btn-success btn-sm" style="margin:auto">Details</a>
                </dir>
            </div>
        </div>
        <div class="info">
            <a href="single-work.html">{{ $demo->title }}</a>
            <i class="fa fa-tablet"></i>
            <i class="fa fa-desktop"></i>
        </div>
    </div>
</div>
@endforeach
