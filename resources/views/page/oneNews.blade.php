@extends('templates.main')

@section('content')

    <section class="news">
        <div class="block-news">
            <figure class="block-news__title">
                <div class="block-news__photo">
                    <img
                        class="block-news__photo_image"
                        src="https://picsum.photos/500/300"
                        alt="photo"
                    />
                </div>
                <figcaption>
                    <h2>{{$news->title}}</h2>
                    <p> {{$news->description}}</p>
                </figcaption>
            </figure>
            <p class="block-news__text">{{$news->news_body}}</p>
        </div>
        <div class="transition">
            <a href="{{route('getOneCategory', $news->category['id'])}}" class="transition-button">
                <span class="transition-button__text">Вернуться назад</span>
            </a>
        </div>
    </section>
@endsection
