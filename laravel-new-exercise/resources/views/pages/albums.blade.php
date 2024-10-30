
@extends("layouts.layout")

@section("page-title", "Albums October 2024")

@section("main-content")

<div class="container">
    <div class="row g-2">
        @foreach ($albums as $album)
<div class="col-4">
<div class="card bg-dark p-2" style="width: 18rem;">
<img class="card-img-top" src="{{$album->img_Url}}" alt="Card image cap">
<div class="card-body">
  <h4 class="card-title text-light">{{$album->album_name}}</h5>
  <h5 class="card-title text-light">{{$album->band_name}}</h5>
  <p class="card-text">{{$album->genre}}, {{$album->drop_year}}</p>
  <a href="{{ route('pages.show', $album->id) }}" class="btn">Show</a>
</div>
</div>
</div>
@endforeach
    </div>
</div>


@endsection
