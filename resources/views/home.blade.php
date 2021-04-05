@extends('layout')
@section('content')
<aside class="profile-card">
    <div>
        <!-- here’s the avatar -->
        <a href="http://ali.shahab.pk">
            <img src="{{asset('/storage/'.Auth::user()->image)}}">
        </a>

        <!-- the username -->
        <h1>{{Auth::user()->name}}</h1>

        <!-- and role or location -->
        <h2>Birthday: {{Auth::user()->birthday}}</h2>

    </div>
</aside>
<!-- that’s all folks! -->
@endsection
