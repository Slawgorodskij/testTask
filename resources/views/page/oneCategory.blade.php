@extends('templates.main')

@section('content')
    <section class="visual">
        @foreach($list_news as $news)
            <figure class="visual-block">
                <div class="visual-block__photo">
                    <img
                        class="visual-block__photo_image"
                        src="https://picsum.photos/250/300"
                        alt="photo"
                    />
                </div>
                <figcaption class="visual-block__text">
                    <a href="{{route('getOneNews', $news->id)}}">
                        <h2 class="visual-block__text-title">{{$news->title}}</h2>
                    </a>
                    <p> {{$news->description}}</p>
                </figcaption>
            </figure>
        @endforeach
            <div class="transition">
                <a href="/" class="transition-button">
                    <span class="transition-button__text">Вернуться на Главную</span>
                </a>
            </div>
    </section>
@endsection
