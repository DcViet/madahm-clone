<section class="pt-[86px] w-full flex flex-col items-center">
    <article class="w-169 h-[148px] flex justify-between items-center px-10 py-9 mt-14 mb-16 border border-[#ebebeb] rounded-xl">
      <div class="h-[60px] flex flex-col justify-between leading-none">
        <p class="font-bold text-2xl text-neutral-800">{{ $title }}</p>
        <p class="text-xl text-zinc-600">{{ $description }}</p>
      </div>
      <a href="{{ $buttonLink }}" class="flex items-center btn btn-primary1 w-48 h-[55px]">
        <span class="!leading-none font-bold">{{ $buttonText }}</span>
        <svg class="rotate-180" width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g id="chevron-left">
            <path id="Vector" d="M15 19L8 12L15 5" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
          </g>
        </svg>
      </a>
    </article>
  </section>
  