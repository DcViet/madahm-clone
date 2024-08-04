<footer>
    <section class="flex flex-col w-169 py-10">
        <div class="footer-nav flex justify-between">
            <div>
                <img src="{{ $footer['logo'] }}" alt="마담_로고">
            </div>
            <ul class="footer-nav-list flex">
                @foreach($footer['nav'] as $navTitle => $navLinks)
                    <li>
                        <ul>
                            <p class="subtitle">{{ $navTitle }}</p>
                            @foreach($navLinks as $link)
                                <li>
                                    <a href="{{ $link['link'] }}">{{ $link['label'] }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="divide-line-lg-zinc-500 my-5"></div>
        <div class="flex justify-between">
            <div class="footer-company flex flex-col">
                <ul class="flex">
                    @foreach($footer['company']['info'] as $info)
                        <li>{{ $info }}</li>
                    @endforeach
                </ul>
                <ul class="flex">
                    <li>{{ $footer['company']['address'] }}</li>
                    <li>전화문의 <a href="tel:{{ $footer['company']['contact']['전화문의'] }}" class="mx-1">{{ $footer['company']['contact']['전화문의'] }}</a>(10:00 - 17:30)</li>
                    <li>제휴/문의 <a href="mailto:{{ $footer['company']['contact']['제휴/문의'] }}" class="ml-1">{{ $footer['company']['contact']['제휴/문의'] }}</a></li>
                </ul>
                <ul class="flex">
                    <li>{{ $footer['company']['rights'] }}</li>
                    @foreach($footer['company']['links'] as $label => $link)
                        <li>
                            <a href="{{ $link }}" class="text-zinc-300">{{ $label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer-sns">
                <ul class="flex">
                    <li>
                        <a href="{{ $footer['sns']['블로그'] }}">
                            <img src="{{ $footer['sns']['블로그이미지'] }}" alt="마담 블로그 바로가기">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <script src="/js/app.js" defer=""></script>
</footer>
