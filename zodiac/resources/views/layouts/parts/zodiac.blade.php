<div class="zodiac-single">
    <a href="{{ route('single', [$key, $date]) }}">
        <div class="image">
            <img src="{{ asset('icons/'.$key.'.svg') }}" alt="">
        </div>
        <h2>{{$sign}}</h2>
    </a>
</div>