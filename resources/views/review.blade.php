@extends('layouts/app')

@section('title')Отзывы@endsection


@section('header')
    @include('header')
@endsection


@section('content')
    <h1 style="text-align: center">Форма добавления отзыва</h1>

    @if($errors->any())
        <div class="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error  }}</li>
                @endforeach
            </ul>
        </div>


    @endif

    <div style="text-align: center">
        <form method="post" action="{{route('review_check')}}">
            @csrf
            <input type="email" name="email" id="email" placeholder="Введите email" class="ul-widget-feedBack-form-control normal"><br>
            <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="ul-widget-feedBack-form-control normal"><br>
            <textarea name="message" id="message" class="ul-widget-feedBack-form-control normal" placeholder="Введите сообщение"></textarea><br>
            <button type="submit" class="ul-w-button1 ul-w-downloadFile-showButton ul-w-feedBack-submit middle">Отправить</button>
        </form>
    </div>


  @endsection

@section('footer')
    @include('footer')
@endsection
