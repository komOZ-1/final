@extends('layouts/app')

@section('title')Услуги@endsection


@section('header')
    @include('header')
@endsection


@section('content')
    <div class="section" style="text-align: center;">
        <h1>Услуги</h1>
        <div class="services-my">
            <ul>
                <li>1 услуга</li>
                <li>2 услуга</li>
                <li>3 услуга</li>
                <li>4 услуга</li>
            </ul>
        </div>
    </div>
@endsection

@section('footer')
    @include('footer')
@endsection
