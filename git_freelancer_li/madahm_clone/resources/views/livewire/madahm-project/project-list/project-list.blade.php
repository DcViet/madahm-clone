<div>
    <p class="text-zinc-400">
        총 <span class="text-zinc-700 font-bold">{{ count($projects) }}건</span>
        의 프로젝트
    </p>
    <div class="divide-line-m spacing"></div>
    <div wire:ignore="" class="custom-select right-align placeholder-left">
        <select id="orderBy" name="orderBy" wire:model="orderBy" class="w-24 text-type p-none over-width" x-init="slimSelect('orderBy')" tabindex="-1" data-ssid="ss-20540" aria-hidden="true" style="display: none;">
            <option value="1">최신 등록 순</option>
            <option value="3">예산 높은 순</option>
            <option value="4">예산 낮은 순</option>
        </select>
        <div class="ss-20540 ss-main w-24 text-type p-none over-width" style="">
            <div class="ss-single-selected"><span class="placeholder">최신 등록 순</span><span class="ss-deselect ss-hide">x</span><span class="ss-arrow"><span class="arrow-down"></span></span></div>
            <div class="ss-content">
                <div class="ss-search"><input type="search" placeholder="Search" tabindex="0" aria-label="Search" autocapitalize="off" autocomplete="off" autocorrect="off"></div>
                <div class="ss-list" role="listbox">
                    <div class="ss-option ss-disabled ss-option-selected" role="option" data-id="84327524">최신 등록 순</div>
                    <div class="ss-option" role="option" data-id="84327524">예산 높은 순</div>
                    <div class="ss-option" role="option" data-id="76019240">예산 낮은 순</div>
                </div>
            </div>
        </div>
    </div>
    <div wire:ignore="" class="custom-select right-align placeholder-left">
        <select id="state" name="state" wire:model="stateParam" class="w-24 text-type p-none over-width" x-init="slimSelect('state')" tabindex="-1" data-ssid="ss-24536" aria-hidden="true" style="display: none;">
            <option value="0">전체</option>
            <option value="3">진행중</option>
            <option value="1">완료</option>
        </select>
        <div class="ss-24536 ss-main w-24 text-type p-none over-width" style="">
            <div class="ss-single-selected"><span class="placeholder">전체</span><span class="ss-deselect ss-hide">x</span><span class="ss-arrow"><span class="arrow-down"></span></span></div>
            <div class="ss-content">
                <div class="ss-search"><input type="search" placeholder="Search" tabindex="0" aria-label="Search" autocapitalize="off" autocomplete="off" autocorrect="off"></div>
                <div class="ss-list" role="listbox">
                    <div class="ss-option ss-disabled ss-option-selected" role="option" data-id="83457355">전체</div>
                    <div class="ss-option" role="option" data-id="97832965">진행중</div>
                    <div class="ss-option" role="option" data-id="12549134">완료</div>
                </div>
            </div>
        </div>
    </div>
</div>
