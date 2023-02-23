@extends('layouts.app')

@section('content')
<div class="container">
    <div class="zodiac">
        @foreach ($zodiac as $key => $sign)
            @include('layouts.parts.zodiac')
        @endforeach
    </div>
</div>
@endsection

@push('scripts')

@endpush