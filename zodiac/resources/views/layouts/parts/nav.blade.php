    <div class="container">
        <div class="header-nav">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('icons/logo.png') }}" alt="">
                </a>
            </div>
            <nav class="nav-menu">
                <ul class="nav">
                    <li><a href="/">Начало</a></li> 
                    <li><a href="{{ route('single.page', 'za-sayta') }}">За сайта</a></li> 
                    <li><a href="{{ route('single.page', 'contact') }}">За Контакти</a></li> 
                </ul>
            </nav>
            <a href="#" class="mennu-toggle">
                <img src="{{ asset('icons/bar.svg') }}" alt="">
            </a>
        </div>
    </div> 