<h1>pagina con film</h1>

<ul>
    @foreach ($movies as $item)
        <li>
            <h1>{{ $item->title }}</h1>
            <h2>{{ $item->original_title }}</h2>
            <p>{{ $item->nationality }}</p>
            <p>{{ $item->date }}</p>
            <p>{{ $item->vote }}</p>
        </li>
    @endforeach
</ul>
