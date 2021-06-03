@extends('layouts.main-layout')

@section('content')
    <main>
        <section id="libraries">
            <div class="container">
    
                <h2>Libraries list</h2>
    
                <ul>
                    @foreach ($libraries as $library)
                        <li>
                            <a href="">
                                {{ $library -> name }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </main>
@endsection