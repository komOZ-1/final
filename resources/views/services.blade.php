@extends('layouts/app')

@section('header')
    @include('header')
@endsection


@section('content')
    <div class="section">
        <h1 style="text-align: center;">Services</h1>
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
