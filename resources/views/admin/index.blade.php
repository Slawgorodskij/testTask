@extends('../templates.main')

@section('content')
    <a href="{{ route('admin.news.create') }}" class="transition-button">
        <span class="transition-button__text">Добавить</span>
    </a>
    <section class="news">
        @foreach($news as $item)
            <div class="block-news">
                <a href="{{ route('admin.news.show', $item->id) }}">
                    <h2>{{$item->title}}</h2>
                    <p> {{$item->description}}</p>
                </a>
            </div>
        @endforeach
        {{ $news->links() }}
    </section>
@endsection
