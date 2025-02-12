@extends("layouts.layout")

@section('page-title', $album->album_name)

@section("main-content")
<main>

    <div class="container show">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card bg-dark text-light">
                    <img src="{{ $album->img_Url }}" class="card-img-top" alt="{{ $album->album_name }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $album->album_name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $album->band_name }}</h6>

                        <p class="card-text">{{ $album->genre }}, {{ $album->drop_year }}</p>
                        <a href="{{ route("pages.albums") }}" class="btn">Back to the Albums</a>
                        <a href="{{ route('edit', $album->id) }}" class="btn btn-sm">Edit</a>
                        <form action="{{route('destroy', $album->id)}}" method="POST">
                           @method('DELETE')
                            @csrf
                        <a href="#">  <button type="submit" class="btn btn-sm" id="delete" >Delete</button></a>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include("partials.footer")

</main>

@endsection
