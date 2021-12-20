@extends('layouts.app')
@section('pag-title', 'home page')

@section('content')
<div class="comic">
    <div class="poster">
        <img class="image_comic" src="{{ $comic['thumb']}}" alt="{{ $comic['title'] }} poster">
        <div id="comic_gallery">
            <h6 class="text-uppercase text-center light">View Gallery</h6>
        </div>
    </div>
</div>
<div class="row_blue"></div>

<div class="text_comic mx-auto my-0">
    <h4>{{ $comic['title'] }}</h4>
    <div class="row_green d-flex ">
        <h6>
            <span class="price">U.S. Price: </span>
            {{ $comic['price'] }}
        </h6>
        <div class="available" >
            <h6 class="text-uppercase">Available</h6>
        </div>
        <span class="vr"></span>
        <div class="check">
            <p>
                Check Availability
                <i class="fas fa-sort-down"></i>
            </p>
        </div>
       
    </div>
    <div>
        <p>
            {{ $comic['description'] }}
        </p>
    </div>

</div>
@endsection