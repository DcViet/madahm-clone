<article class="w-169 h-[305px] mb-20 flex justify-between items-center">
    <div class="w-[365px] h-full leading-none">
      <div class="flex flex-col justify-between w-[365px] h-[237px] leading-none">
        <p class="font-bold text-2xl text-neutral-800">{{ $title }}</p>
        <p class="text-lg text-zinc-600">{{ $description1 }}</p>
        <p class="text-lg text-zinc-600">{{ $description2 }}</p>
      </div>
    </div>
    <div id="swiper" class="swiper !w-[666px] !h-[305px] !mx-0 swiper-initialized swiper-horizontal swiper-free-mode swiper-backface-hidden">
      <div class="swiper-wrapper" id="swiper-wrapper-c31832f43d9e2dfd" aria-live="polite">
        @foreach ($slides as $slide)
          <div class="swiper-slide !flex !flex-col !justify-between !items-center !px-5 !py-9 !w-[200px] !h-[240px] !bg-[#fbfbff] !border !border-zinc-200 !rounded-3xl" role="group">
            <img src="{{ $slide['img'] }}">
            <p class="text-zinc-600 font-bold text-lg text-center">{{ $slide['title'] }}</p>
            <p class="text-zinc-600 text-lg text-center leading-tight">{{ $slide['description'] }}</p>
          </div>
        @endforeach
      </div>
      <div id="swiper-scrollbar" class="swiper-scrollbar !w-full !h-[2px] !left-0 swiper-scrollbar-horizontal">
        <div class="swiper-scrollbar-drag-sector"></div>
      </div>
      <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
    </div>
  </article>
  