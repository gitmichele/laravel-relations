@extends('layouts.main-layout')

@section('content')
    <main>
        <div class="container">

            <h2>Book by {{ $author -> firstname }} {{ $author -> lastname }}</h2>
            <ul>
                @foreach ($author -> books as $book)
                    <li>
                        {{ $book -> title }}
                    </li>
                @endforeach
            </ul>

        </div>
    </main>
@endsection