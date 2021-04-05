@extends('layout')

@section('css')
    <link href="{{asset('css/news.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div class="news">
        <h1>News</h1>
        <div id="content">
            <p>Hover over the news to see the description</p>
            @forelse($news as $item)
            <div class="container">
                <div class="flipper">
                    <div class="front">
                        <img src="{{asset('/storage/'.$item->image)}}" alt="cherry blossoms" style="">
                        <p class="caption">{{$item->heading}}</p>
                    </div>
                    <div class="back">
                        <a href="https://en.wikipedia.org/wiki/Cherry_blossom" target="_blank">
                            <h1>{{$item->heading}}</h1>
                        </a>
                        <p class="date">{{$item->created_at}}</p>
                        <p class="description">{{str_limit($item->description, 300)}}</p>
                    </div>
                </div>
            </div>
            @empty
            <p>No news</p>
            @endforelse

        </div>
       <div style="display: flex; justify-content: center">
           <h3 style="margin-bottom: 25px">
               {{ $news->links() }}
           </h3>
       </div>
    </div>
@endsection
