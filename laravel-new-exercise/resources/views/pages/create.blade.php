@extends("layouts.layout")

@section("page-title", "Add a new Album")

@section("main-content")

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <form class="row gy-2 gx-3 align-items-center w-75">

                  <label for="album_name" class="form-label">Album Name</label>
                  <input type="text" class="form-control" id="album_name" name="album_name">


                    <label for="band_name" class="form-label">Band Name</label>
                    <input type="text" class="form-control" id="band_name" name="band_name">

                  <div class="col-auto">
                    <label for="drop_year" class="form-label">Year of Release</label>
                    <input type="number" min="1900" max="2024" class="form-control" id="drop_year" name="drop_year">

                  <div class="col-auto">
                    <label for="genre" class="form-label">Genre</label>
                    <input type="text" class="form-control" id="genre" name="genre">

                  <div class="col-auto">
                    <label for="img_Url" class="form-label">Link the Album Cover</label>
                    <input type="text" class="form-control" id="img_Url" name="img_Url">




                <div class="col-auto">
                  <button type="submit" class="btn btn-dark">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
</main>

@endsection
