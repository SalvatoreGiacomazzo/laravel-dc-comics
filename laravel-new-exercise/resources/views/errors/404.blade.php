@extends('layouts.app') <!-- Assicurati che questo sia il layout che include Bootstrap -->
@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 404</title>
</head>
<body>
<div class="d-flex justify-content-center align-items-center">
    <h1>No album was found!</h1>
<a href="{{ route("pages.albums") }}" class="btn btn-primary">Back to the Albums</a>
</div>
</body>
@endsection
