@extends('layouts.main-layout')

@section('content')
    <main>
        <section id="library-books">
            <div class="container">
                <h2>
                    Books
                </h2>

                <ul>

                </ul>
                @foreach ($books as $book)
                   <li>
                    {{ $book -> title }} - 
                    <a href="{{ route('show_author', $book -> author -> id) }}">
                        {{ $book -> author -> firstname }} {{ $book -> author -> lastname }}
                    </a>
                   </li>
                @endforeach
            </div>
        </section>
    </main>
@endsection