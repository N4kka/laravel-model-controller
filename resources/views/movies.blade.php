@extends('layouts/app')

@section('main-content')
    <h1 class="header-title">Movies List:</h1>

    <ul>
        <div class="single-movie">
            @foreach ($movies as $item)
                <li>
                    <h2>{{ $item->title }}</h2>
                    <h4>{{ $item->original_title }}</h4>
                    <p>{{ $item->nationality }}</p>
                    <p class="date">{{ $item->date }}</p>
                    <p>{{ $item->vote }}</p>
                </li>
            @endforeach
        </div>
    </ul>
@endsection
