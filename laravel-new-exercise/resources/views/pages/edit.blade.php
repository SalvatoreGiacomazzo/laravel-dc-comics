@extends('layouts.layout')

@section('main-content')

    <div class="container">
        <h1 class="text-center">Edit Album Info</h1>
         <div class="row justify-content-center">
          <div class="col-12">
            @if($errors->any())
            <div class="text-center bg-danger">

                <ul>
                    @foreach ($errors->all() as $error)
                    <li>
                       {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif
                    </div>
                    <form class="row gy-2 gx-3 align-items-center w-75" method="POST" action="{{ route('update', $album->id) }}">
                        @csrf
                        @method('PUT')

                                          <div class="col-auto">

                                              <button type="submit" class="btn btn-dark">Submit</button>

                                          <a href="{{ route('pages.albums') }}" class="btn">Back to the Albums</a>
                                        </div>
                  <label for="album_name" class="form-label">Album Name</label>
                  <input type="text" class="form-control" id="album_name" value="{{$album->album_name}}" name="album_name" value="{{old('album_name', $album->album_name)}}" required>


                    <label for="band_name" class="form-label">Band Name</label>
                    <input type="text" class="form-control" id="band_name" value="{{$album->band_name}}" name="band_name" value="{{old('band_name', $album->band_name)}}" required>

                  <div class="col-auto">
                    <label for="drop_year" class="form-label">Year of Release</label>
                    <input type="number" min="1900" max="2024" class="form-control" id="drop_year" value="{{$album->drop_year}}" name="drop_year" value="{{old('drop_year', $album->drop_year)}}" required>
                  </div>
                  <div class="col-auto">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" value="{{$album->genre}}" name="genre" value="{{old('genre'), $album->genre}}" value="{{old('genre', $album->genre)}}" required>
                  </div>
                  <div class="col-auto">
                    <label for="img_Url" class="form-label">Link the Album Cover</label>
                    <input type="text" class="form-control" id="img_Url" value="{{$album->img_Url}}" name="img_Url" value="{{old('img_Url', $album->img_Url)}}" required>
                  </div>

              </form>
        </div>
    </div>
</div>
</main>
@endsection


