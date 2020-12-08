@extends('layout')
@section('title')Страница review
@endsection

@section('main_content')
    <h1>form</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="post" action="/review/check">
        {{ csrf_field() }}
        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
        <input type="text" name="subject" id="subject" class="form-control" placeholder="Subject">
        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Review text"></textarea>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
    <h2>All reviews</h2>
    @foreach($reviews as $el)
        <div class="alert alert-warning">
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->message }}</p>
        </div>
    @endforeach
@endsection

