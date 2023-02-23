@extends('layouts.app')

@section('content')
<div class="container">
    <div class="page-content">
        <h1>{{$page->title}}</h1>
        {{$page->content}}
    </div>
</div>
@endsection

@push('scripts')

@endpush