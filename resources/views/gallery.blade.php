@extends('layouts/layout');

@section('title', 'Gallery');

@section('content')
    <main>
        <div class="wrapper">
            <div class="videos">
                <div class="videos__wrapper">
                    <div class="video__item">Tornado Kick</div>
                    <iframe class="video__element" src="https://www.youtube.com/embed/NMICZNCv4hE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="videos__wrapper">
                    <div class="video__item">Sparring combination</div>
                    <iframe class="video__element" src="https://www.youtube.com/embed/T4Z7Bf26LD8?start=1" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </main>
@endsection

