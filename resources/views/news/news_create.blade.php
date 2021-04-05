@extends('layout')

@section('css')
    <link href="{{asset('css/createForm.css')}}" rel="stylesheet" type="text/css" media="all" />
@endsection

@section('content')
    <div class="news">
        <h1>Create news</h1>
        <fieldset class="form-container">
             <legend class="form-container-header">Create a news</legend>
            <form action="{{route('news.store')}}"  method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <label for="name" class="form-input-header">Heading</label><input type="text" name="heading" id="name" class="form-input" required>
                <label for="image" class="form-input-header">Choose the image</label><input type="file" name="image" id="image" class="form-input" required>
                <label for="desc" class="form-input-header">Description</label><textarea name="description" id="desc" placeholder="Describe the news" class="form-input form-textarea" cols="30" rows="3"></textarea>
                <div class="form-btn-group">
                    <button class="form-btn">Create news</button>
                    <button type="reset" class="form-btn">Clear</button>
                </div>
            </form>
        </fieldset>
    </div>
@endsection
