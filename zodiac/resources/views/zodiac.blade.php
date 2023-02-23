@extends('layouts.app')

@section('content')
<div class="container">
    <div class="zodiac-single-page">
        <h1>{{$page_title}}</h1>
        <div class="zodiac-text">
            <h2>Здраве</h2>
            <p>{{$zodiac->text_health}}</p>
        </div>
        <div class="zodiac-text">
            <h2>Работа</h2>
            <p>{{$zodiac->text_work}}</p>
        </div>
        <div class="zodiac-text">
            <h2>Любов</h2>
            <p>{{$zodiac->text_love}}</p>
        </div>
    </div>             
    <div class="zodiac-sidebar">
        @foreach ($zodiac_list as $key => $sign)
        @include('layouts.parts.zodiac')
    @endforeach
    </div>
@endsection

@push('scripts')

@endpush