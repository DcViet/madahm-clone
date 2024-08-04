<div>
    <div class="flex">
        <label wire:ignore="" for="service" class="flex items-center w-48 pl-4 py-3 mr-3 bg-white">
            <p class="break-keep-all text-zinc-400">분야</p>
            <div class="divide-line-m spacing"></div>
            <div ref="select-box"></div>
            <div class="w-full custom-select right-align placeholder-left">
                <select class="w-full text-type p-none pr-4" id="service" name="service" wire:model="serviceParam" x-init="slimSelect('service')" tabindex="-1" data-ssid="ss-22844" aria-hidden="true" style="display: none;">
                    <option value="0">전체</option>
                    <option value="1">통합마케팅</option>
                    <option value="2">온라인광고</option>
                    <option value="3">오프라인광고</option>
                    <option value="4">CPA</option>
                    <option value="5">영상제작</option>
                    <option value="6">웹앱개발</option>
                </select>
                <div class="ss-22844 ss-main w-full text-type p-none pr-4" style="">
                    <div class="ss-single-selected"><span class="placeholder">전체</span><span class="ss-deselect ss-hide">x</span><span class="ss-arrow"><span class="arrow-down"></span></span></div>
                    <div class="ss-content">
                        <div class="ss-search"><input type="search" placeholder="Search" tabindex="0" aria-label="Search" autocapitalize="off" autocomplete="off" autocorrect="off"></div>
                        <div class="ss-list" role="listbox">
                            <div class="ss-option ss-disabled ss-option-selected" role="option" data-id="83457355">전체</div>
                            <div class="ss-option" role="option" data-id="82895043">통합마케팅</div>
                            <div class="ss-option" role="option" data-id="22934821">온라인광고</div>
                            <div class="ss-option" role="option" data-id="60048240">오프라인광고</div>
                            <div class="ss-option" role="option" data-id="64204800">CPA</div>
                            <div class="ss-option" role="option" data-id="20887661">영상제작</div>
                            <div class="ss-option" role="option" data-id="34834167">웹앱개발</div>
                        </div>
                    </div>
                </div>
            </div>
        </label>
        <label wire:ignore="" for="budget" class="flex items-center w-48 pl-4 py-3 mr-3 bg-white">
            <p class="break-keep-all text-zinc-400">예산</p>
            <div class="divide-line-m spacing"></div>
            <div class="w-full custom-select right-align placeholder-left">
                <select class="w-full text-type p-none pr-4" id="budget" name="budget" wire:model="budgetParam" x-init="slimSelect('budget')" tabindex="-1" data-ssid="ss-21973" aria-hidden="true" style="display: none;">
                    <option value="0">전체</option>
                    <option value="1">100만 이하</option>
                    <option value="2">100 - 500만</option>
                    <option value="3">500 - 1000만</option>
                    <option value="4">1000 - 3000만</option>
                    <option value="5">3000 - 5000만</option>
                    <option value="6">5000 - 1억</option>
                    <option value="7">1억 이상</option>
                </select>
                <div class="ss-21973 ss-main w-full text-type p-none pr-4" style="">
                    <div class="ss-single-selected"><span class="placeholder">전체</span><span class="ss-deselect ss-hide">x</span><span class="ss-arrow"><span class="arrow-down"></span></span></div>
                    <div class="ss-content">
                        <div class="ss-search"><input type="search" placeholder="Search" tabindex="0" aria-label="Search" autocapitalize="off" autocomplete="off" autocorrect="off"></div>
                        <div class="ss-list" role="listbox">
                            <div class="ss-option ss-disabled ss-option-selected" role="option" data-id="89357835">전체</div>
                            <div class="ss-option" role="option" data-id="48979254">100만 이하</div>
                            <div class="ss-option" role="option" data-id="70175101">100 - 500만</div>
                            <div class="ss-option" role="option" data-id="56060329">500 - 1000만</div>
                            <div class="ss-option" role="option" data-id="66442890">1000 - 3000만</div>
                            <div class="ss-option" role="option" data-id="6170656">3000 - 5000만</div>
                            <div class="ss-option" role="option" data-id="13477403">5000 - 1억</div>
                            <div class="ss-option" role="option" data-id="35889488">1억 이상</div>
                        </div>
                    </div>
                </div>
            </div>
        </label>
    </div>
    <div>
        <label for="" class="relative flex items-center px-4 py-3 w-75 rounded-full bg-white">
            <input type="text" class="w-60 outline-none" placeholder="프로젝트 검색" wire:keydown.enter="searchEvent" wire:model.defer="search">
            <button class="absolute p-4 right-0 cursor-pointer" type="button" wire:click="searchEvent">
                <span class="flex icon-search-zinc-500 w-5 h-5"></span>
            </button>
        </label>
    </div>
</div>
