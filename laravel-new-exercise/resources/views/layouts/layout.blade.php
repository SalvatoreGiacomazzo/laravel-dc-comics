<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield("additional-meta")
    <title>@yield("page-title", "")</title>
    @yield("additional-cdn")
</head>
<body>

    @include("partials.header")

    <main>
        @yield("main-content")
        <div class="container">
            <div class="row">
<div class="col-4">
    <div class="card p-2" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</div>

            </div>
        </div>
    </main>

    @include("partials.footer")
    @vite("resources/js/app.js")
    @yield("additional-scripts")
</body>
</html>
