@extends('templates.main')

@section('content')

    <section class="news">
        <div class="block-news">
            <h2>{{$news->title}}</h2>
            <p> {{$news->description}}</p>
            <p class="block-news__text">{{$news->news_body}}</p>
        </div>
        <div class="action">
            <a href="{{ route('admin.news.edit', $news->id) }}" class="transition-button">
                <span class="transition-button__text">Редактировать</span>
            </a>

            <form action="{{ route('admin.news.destroy', $news->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="transition-button">Удалить</button>
            </form>

        </div>

        <div class="transition">
            <a href="{{route('admin.news.index')}}" class="transition-button">
                <span class="transition-button__text">Вернуться назад</span>
            </a>
        </div>
    </section>
@endsection
