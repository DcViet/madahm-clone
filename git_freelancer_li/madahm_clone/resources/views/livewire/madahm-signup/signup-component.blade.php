<div class="flex fit-page">
  <div class="w-4/12 bg-madahm-r-side">
    <div class="relative top-50 left-19">
      <img src="{{ $logoUrl }}" alt="" class="w-27">
      <b class="flex pt-4 text-b-4xl">
        {{ $title }}<br>
        {{ $subtitle }}
      </b>
      <p class="pt-3 text-m-2xl text-zinc-200">
        {{ $partnersCount }}
      </p>
    </div>
  </div>
  <div class="w-8/12 min-w-129 p-12 overflow-y-auto">
    <div class="w-full h-full flex justify-center pt-28">
      <section class="flex flex-col w-107">
        <div>
          <h3 class="text-4xl font-bold">{{ $mainTitle }}</h3>
          <p class="text-sm mt-3">{{ $mainSubtitle }}</p>
        </div>
        <div class="flex flex-col py-10 text-center">
          <ul class="join-gubun-list">
            @foreach ($joinOptions as $option)
            <li class="w-full">
              <a href="{{ $option['url'] }}">
                <label class="join-gubun marker-hidden">
                  <div class="flex items-center">
                    <img src="{{ $option['image'] }}" alt="">
                    <p>{{ $option['text'] }}</p>
                  </div>
                </label>
              </a>
            </li>
            @endforeach
          </ul>
        </div>
      </section>
    </div>
  </div>
</div>
