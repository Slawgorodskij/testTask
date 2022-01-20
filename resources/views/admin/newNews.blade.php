@extends('../templates.main')

@section('content')



    <div class="mt-8">
        <form class="space-y-5 mt-5" method="POST"
              action="{{ isset($news) ? route("admin.news.update", $news->id) : route("admin.news.store") }}">
            @csrf

            @if(isset($news))
                @method('PUT')
            @endif

            @if(is_int($category))
                <input hidden type="checkbox" name="category_id" value="{{$category}}" checked>
            @else
                @foreach($category as $item)
                    <label>
                        <input type="radio" name="category_id" value="{{$item->id}}">
                        {{$item->title}}
                    </label>
                @endforeach
            @endif


            <input name="title" type="text"
                   class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-500 @enderror"
                   placeholder="Название" value="{{ $news->title ?? '' }}"/>

            @error('title')
            <p class="text-red-500">{{ $message }}</p>
            @enderror

            <input name="description" type="text"
                   class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-500 @enderror"
                   placeholder="Описание" value="{{ $news->description ?? '' }}"/>

            @error('description')
            <p class="text-red-500">{{ $message }}</p>
            @enderror

            <input name="news_body" type="text"
                   class="w-full h-12 border border-gray-800 rounded px-3 @error('news_body') border-red-500 @enderror"
                   placeholder="Текст" value="{{ $news->news_body ?? '' }}"/>

            @error('news_body')
            <p class="text-red-500">{{ $message }}</p>
            @enderror

{{--            <input name="slug" type="text"--}}
{{--                   class="w-full h-12 border border-gray-800 rounded px-3 @error('slug') border-red-500 @enderror"--}}
{{--                   placeholder="Псевдоним для новости" value="{{ $news->slug ?? '' }}"/>--}}

{{--            @error('description')--}}
{{--            <p class="text-red-500">{{ $message }}</p>--}}
{{--            @enderror--}}

            <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">
                Сохранить
            </button>
        </form>
    </div>

    <div class="transition">
        <a href="{{$route}}" class="transition-button">
            <span class="transition-button__text">{{$title_button}}</span>
        </a>
    </div>
@endsection
