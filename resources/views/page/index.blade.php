@extends('../templates.main')

@section('content')
    @foreach($categories as $item)
        <figure class="visual-block">
            <div class="visual-block__photo">
                <img
                    class="visual-block__photo_image"
                    src="https://picsum.photos/250/300"
                    alt="photo"
                />
            </div>
            <figcaption class="visual-block__text">
                <a href="{{route('getOneCategory', $item->id)}}">
                    <h2 class="visual-block__text-title">{{$item->title}}</h2>
                </a>
                @for($i=0; $i<3; $i++)
                    @if(isset($item['news'][$i]))
                        <h2>{{$item['news'][$i]['title']}}</h2>
                        <p>{{$item['news'][$i]['description']}}</p>
                    @endif
                @endfor
            </figcaption>
        </figure>
    @endforeach
@endsection
