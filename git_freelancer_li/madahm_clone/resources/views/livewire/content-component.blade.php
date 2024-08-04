<section class="w-full flex flex-col items-center pt-21">
    <section id="section0" class="w-169 mt-[74px] mb-14">
        <h1 class="font-bold text-[34px] text-center text-zinc-800">{{ $sections['section0']['title'] }}</h1>
    </section>

    <section id="section2" class="w-169 mb-18">
        <div class="grid grid-cols-7 gap-x-[84px] gap-y-[23px]">
            @foreach($sections['section2']['buttons'] as $button)
                <button type="button" class="w-[80px]" x-on:click="eventModalOpen('{{ $button['id'] }}', '{{ $button['label'] }}')">
                    <span class="mb-2 w-[80px] h-[80px] border rounded-2xl flex flex-col items-center justify-center border-[#F0F0F3] hover:border-red-600">
                        <img src="{{ $button['imgSrc'] }}" class="w-2/3" alt="{{ $button['alt'] }}">
                    </span>
                    <span class="text-xs text-center -tracking-[0.6px] truncate text-zinc-700">{{ $button['label'] }}</span>
                </button>
            @endforeach
        </div>
    </section>

    <section id="section3" class="w-169 mb-18">
        <div class="w-full border rounded-2xl shadow-md">
            <div class="p-[42px] flex justify-between">
                <div>
                    <h2 class="mb-1 font-bold text-2xl">{{ $sections['section3']['title'] }}</h2>
                    <h3 class="text-xl">{{ $sections['section3']['subtitle'] }}</h3>
                </div>
                <a href="{{ $sections['section3']['buttonLink'] }}" class="flex items-center py-4 px-11 rounded-full bg-red-600 text-white font-bold text-lg">{{ $sections['section3']['buttonText'] }}</a>
            </div>
        </div>
    </section>

    <section id="section4" class="w-full mb-18">
        <div class="flex justify-center">
            <div class="w-full bg-gray-50 flex flex-col items-center pt-10 pb-12 border-y border-y-neutral-100 text-black">
                <div class="w-[870px] flex justify-between text-zinc-800">
                    @foreach($sections['section4']['stats'] as $stat)
                        <div class="w-56 flex flex-col items-center">
                            <h5 class="mb-2 text-base text-center">{{ $stat['title'] }}</h5>
                            <p class="text-6xl font-bold"><span>{{ $stat['value'] }}</span>{{ $stat['unit'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="section5" class="w-169">
        <div class="flex justify-between mb-18">
            <div class="w-[430px] h-[330px]">
                <h2 class="w-[350px] font-bold text-2xl text-zinc-800 mb-[30px]">{{ $sections['section5']['title'] }}</h2>
                <div class="flex flex-wrap gap-2">
                    @foreach($sections['section5']['tabs'] as $tab)
                        <div>
                            <input type="radio" id="{{ $tab['id'] }}" name="section5-tab" class="hidden peer" value="{{ $tab['value'] }}">
                            <label for="{{ $tab['id'] }}" class="block cursor-pointer text-sm text-zinc-400 py-2 px-3 bg-white border border-solid !border-zinc-300 rounded-full leading-none peer-checked:text-white peer-checked:font-bold peer-checked:bg-[#434D5E] peer-checked:border-[#434D5E]">{{ $tab['label'] }}</label>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="w-[550px] h-[330px] flex items-center justify-center border border-solid rounded-2xl border-[#ebebeb]">
                <!-- Add content for this section if needed -->
            </div>
        </div>
    </section>
</section>
