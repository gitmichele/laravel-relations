@extends('layouts.main-layout')

@section('content')
    <main>
        <section id="libraries">
            <div class="container">
    
                <h2>Libraries list</h2>
    
                <ul>
                    @foreach ($libraries as $library)
                        <li>
                            <h3 >
                                {{ $library -> name }}
                            </h3>
                            <div class="library-details">
                                <div class="det-text">
                                    <div class="det-col">
                                        <span class="det-title">
                                            Where:  
                                        </span>
                                        <span>
                                            {{ $library -> address }}, {{ $library -> city }}, {{ $library -> state }}
                                        </span>
                                    </div>
    
                                    <div class="det-col">
                                        <span class="det-title">
                                            Phone: 
                                        </span>
                                        <span>
                                            {{ $library -> phone_number }}
                                        </span>
                                    </div>
    
                                    <div class="det-col">
                                        <span class="det-title">
                                            Seats: 
                                        </span>

                                        <span>
                                            {{ $library -> seats }}
                                        </span>
                                    </div>
                                </div>

                                <div class="det-btn">
                                    <a href="{{ route('show_books', $library -> id) }}">
                                        find-books
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
@endsection