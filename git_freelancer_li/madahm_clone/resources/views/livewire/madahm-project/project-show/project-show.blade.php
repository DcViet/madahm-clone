<div class="flex-all-center flex-col">

    <div class="flex-all-center w-full bg-gray-50">
        <section id="fixedPadding" class="w-169 py-9 flex justify-between items-center">
            <div class="flex">


                <label wire:ignore="" for="service" class="flex items-center w-48 pl-4 py-3 mr-3 bg-white">
                    <p class="break-keep-all text-zinc-400">분야</p>
                    <div class="divide-line-m spacing"></div>
                    <div ref="select-box"></div>

                    <div class="w-full custom-select right-align placeholder-left">
                        <select class="w-full text-type p-none pr-4" id="service" name="service"
                            wire:model="serviceParam" tabindex="-1" aria-hidden="true" style="display: none;">
                            <option value="0">전체</option>
                            <option value="1">통합마케팅</option>
                            <option value="2">온라인광고</option>
                            <option value="3">오프라인광고</option>
                            <option value="4">CPA</option>
                            <option value="5">영상제작</option>
                            <option value="6">웹앱개발</option>
                        </select>
                        <!-- Element for displaying Slim Select -->
                        <div class="ss-19055 ss-main w-full text-type p-none pr-4">
                            <div class="ss-single-selected"><span class="placeholder">전체</span><span
                                    class="ss-deselect ss-hide">x</span><span class="ss-arrow"><span
                                        class="arrow-down"></span></span></div>
                            <div class="ss-content">
                                <div class="ss-search"><input type="search" placeholder="Search" tabindex="0"
                                        aria-label="Search" autocapitalize="off" autocomplete="off" autocorrect="off">
                                </div>
                                <div class="ss-list" role="listbox">
                                    <div class="ss-option ss-disabled ss-option-selected" role="option"
                                        data-id="29999594">전체</div>
                                    <div class="ss-option" role="option" data-id="24253526">통합마케팅</div>
                                    <div class="ss-option" role="option" data-id="88923401">온라인광고</div>
                                    <div class="ss-option" role="option" data-id="77440167">오프라인광고</div>
                                    <div class="ss-option" role="option" data-id="40123787">CPA</div>
                                    <div class="ss-option" role="option" data-id="13600331">영상제작</div>
                                    <div class="ss-option" role="option" data-id="16869717">웹앱개발</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </label>


                <label wire:ignore="" for="budget" class="flex items-center w-48 pl-4 py-3 mr-3 bg-white">
                    <p class="break-keep-all text-zinc-400">예산</p>
                    <div class="divide-line-m spacing"></div>
                    <div class="w-full custom-select right-align placeholder-left">

                        <select class="w-full text-type p-none pr-4" id="budget" name="budget"
                            wire:model="budgetParam" x-init="slimSelect('budget')" tabindex="-1" data-ssid="ss-88678"
                            aria-hidden="true" style="display: none;">
                            <option value="0">전체</option>
                            <option value="1">100만 이하</option>
                            <option value="2">100 - 500만</option>
                            <option value="3">500 - 1000만</option>
                            <option value="4">1000 - 3000만</option>
                            <option value="5">3000 - 5000만</option>
                            <option value="6">5000 - 1억</option>
                            <option value="7">1억 이상</option>
                        </select>

                        <div class="ss-88678 ss-main w-full text-type p-none pr-4" style="">

                            <div class="ss-single-selected">
                                <span class="placeholder">전체</span>
                                <span class="ss-deselect ss-hide">x</span>
                                <span class="ss-arrow"><span class="arrow-down"></span>
                                </span>
                            </div>
                            <div class="ss-content">
                                <div class="ss-search"><input type="search" placeholder="Search" tabindex="0"
                                        aria-label="Search" autocapitalize="off" autocomplete="off"
                                        autocorrect="off"></div>
                                <div class="ss-list" role="listbox">
                                    <div class="ss-option ss-disabled ss-option-selected" role="option"
                                        data-id="13874756">전체</div>
                                    <div class="ss-option" role="option" data-id="99696293">100만 이하</div>
                                    <div class="ss-option" role="option" data-id="2872942">100 - 500만</div>
                                    <div class="ss-option" role="option" data-id="82699992">500 - 1000만</div>
                                    <div class="ss-option" role="option" data-id="96520818">1000 - 3000만</div>
                                    <div class="ss-option" role="option" data-id="69997532">3000 - 5000만</div>
                                    <div class="ss-option" role="option" data-id="357917">5000 - 1억</div>
                                    <div class="ss-option" role="option" data-id="73866606">1억 이상</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </label>

            </div>
            <div>
                <label for="" class="relative flex items-center px-4 py-3 w-75 rounded-full bg-white">
                    <input type="text" class="w-60 outline-none" placeholder="프로젝트 검색"
                        wire:keydown.enter="searchEvent" wire:model.defer="search">
                    <button class="absolute p-4 right-0 cursor-pointer" type="button" wire:click="searchEvent">
                        <span class="flex icon-search-zinc-500 w-5 h-5"></span>
                    </button>
                </label>
            </div>
        </section>
    </div>


    <div class="w-169 pb-40">
        <section class="project-list pb-10 custom-type">
            <a
                href="/project/detail/7245?page=1&amp;orderBy=1&amp;stateParam=0&amp;serviceParam=0&amp;budgetParam=0&amp;search=">
                <div class="card flex p-0 mb-5">
                    <div class="flex w-full card-data-0 py-7 pl-7 pr-10">
                        <div class="relative img-border-box img-md">
                            <img src="https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/sector/ST19_1.png"
                                alt="">
                            <div class="sector_name">
                                여행
                            </div>
                        </div>
                        <div class="card-data-1 pl-6 max-w-159">
                            <div class="pb-2 leading-none">
                                <div class="card-header">

                                    <div class="w-8/12 relative flex">
                                        <div class="flex flex-wrap items-start">
                                            <span class="tag !border-0 bg-purple-blue-400 text-white !mb-0">모집중</span>
                                            <span class="tag text-red-500 border-red-500">NEW</span>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="flex flex-wrap">
                                                <div class="tag-list">
                                                    <button type="button"
                                                        class="tag !border-0 bg-zinc-100 cursor-pointer !m-0"
                                                        @click="moreTag(4);">
                                                        <p class="pr-1 !text-bold text-zinc-500">
                                                            배너광고 외 1개
                                                        </p>
                                                        <div class="icon-toggle">
                                                            <div id="more-list-4-state" class="icon-toggle-dropdown">
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <div id="more-list4" class="more-list">
                                                        <div class="w-11/12 flex flex-wrap">
                                                            <span class="tag !border-0 bg-zinc-100">
                                                                인플루언서/체험단
                                                            </span>
                                                        </div>
                                                        <button type="button"
                                                            class="absolute top-1 right-1 text-xs p-2"
                                                            @click="tagClose(4)">
                                                            <div
                                                                class="icon-close-zinc-600
                                                  w-3vw h-3vw sm:w-3 sm:h-3">
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-reference">
                                        2024년 08월 05일
                                    </div>
                                </div>
                                <div class="w-full text-zinc-700 text-b-lg ellipsis !leading-none">
                                    거창군 농촌 관광 체험단 인플루언서 모집
                                </div>
                            </div>
                            <div class="flex pt-6px">
                                <div class="multi-line-ellipsis">
                                    거창군에 위치한 비영리단체입니다.
                                    8월 말에 2박 3일간 지역 행사를 기획하고 있습니다.
                                    행사를 직접 참여하실 인플루언서 체험단 섭외가 필요합니다.
                                    지역 행사 관련 체험단 모집 경험이 있는 대행사를 희망합니다.
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="card-data-2">
                        <li>
                            <p class="data-name">예산</p>
                            <p class="data-info">
                                3,000,000원
                            </p>
                        </li>
                        <li>
                            <p class="data-name">기간</p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Less than a month
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">deadline</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Deadline
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hits</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        52 rounds
                                    </font>
                                </font>
                            </p>
                        </li>
                    </ul>
                </div>
            </a>
            <a
                href="/project/detail/7246?page=1&amp;orderBy=1&amp;stateParam=0&amp;serviceParam=0&amp;budgetParam=0&amp;search=">
                <div class="card flex p-0 mb-5">
                    <div class="flex w-full card-data-0 py-7 pl-7 pr-10">
                        <div class="relative img-border-box img-md">
                            <img src="https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/sector/ST22_1.png"
                                alt="">
                            <div class="sector_name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Clothing/fashionable
                                    </font>
                                </font>
                            </div>
                        </div>
                        <div class="card-data-1 pl-6 max-w-159">
                            <div class="pb-2 leading-none">
                                <div class="card-header">

                                    <div class="w-8/12 relative flex">
                                        <div class="flex flex-wrap items-start">
                                            <span class="tag !border-0 bg-purple-blue-400 text-white !mb-0">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Recruitment</font>
                                                </font>
                                            </span>
                                            <span class="tag text-red-500 border-red-500">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">NEW</font>
                                                </font>
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="flex flex-wrap">
                                                <div class="tag-list">
                                                    <button type="button"
                                                        class="tag !border-0 bg-zinc-100 cursor-pointer !m-0"
                                                        @click="moreTag(5);">
                                                        <p class="pr-1 !text-bold text-zinc-500">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                    3 banners
                                                                </font>
                                                            </font>
                                                        </p>
                                                        <div class="icon-toggle">
                                                            <div id="more-list-5-state" class="icon-toggle-dropdown">
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <div id="more-list5" class="more-list">
                                                        <div class="w-11/12 flex flex-wrap">
                                                            <span class="tag !border-0 bg-zinc-100">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        Search ad
                                                                    </font>
                                                                </font>
                                                            </span>
                                                            <span class="tag !border-0 bg-zinc-100">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        SNSmarketing
                                                                    </font>
                                                                </font>
                                                            </span>
                                                            <span class="tag !border-0 bg-zinc-100">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        Blog marketing
                                                                    </font>
                                                                </font>
                                                            </span>
                                                        </div>
                                                        <button type="button"
                                                            class="absolute top-1 right-1 text-xs p-2"
                                                            @click="tagClose(5)">
                                                            <div
                                                                class="icon-close-zinc-600
                                                  w-3vw h-3vw sm:w-3 sm:h-3">
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-reference">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2024 years 08 months 02 days
                                            </font>
                                        </font>
                                    </div>
                                </div>
                                <div class="w-full text-zinc-700 text-b-lg ellipsis !leading-none">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Fashion Platform Online Performance Marketing Operations
                                        </font>
                                    </font>
                                </div>
                            </div>
                            <div class="flex pt-6px">
                                <div class="multi-line-ellipsis">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            We have a fashion platform for shopping in self-rub &amp; style.
                                            (Influe-style select shop currently operating both Web and APP)

                                            Currently Naver SA (BSA), Meta, Google (GDN), Kakaobizu Board, YouTube,
                                            Viral,
                                            etc
                                            Marketing is available in a variety of channels.

                                            With strategic marketing proposals and operations
                                            Agencies have a high understanding of the fashion/clothing industry

                                            To activate its fashion platform
                                            We hope you will make suggestions with various performance marketing orders.

                                            #Fashion platform__Web/APP__ Online performance marketing
                                        </font>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="card-data-2">
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">budget</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        30,000,000 won
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">term</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Less than 6 months
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">deadline</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        August 8
                                        (D-2)
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hits</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        118 rounds
                                    </font>
                                </font>
                            </p>
                        </li>
                    </ul>
                </div>
            </a>
            <a href="/project/detail/7243?page=1&amp;orderBy=1&amp;stateParam=0&amp;serviceParam=0&amp;budgetParam=0&amp;search="
                @click="privateProjectEvent">
                <div class="card flex p-0 mb-5">
                    <div class="flex w-full card-data-0 py-7 pl-7 pr-10">
                        <div class="relative img-border-box img-md">
                            <img src="https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/sector/lock.png"
                                alt="">
                        </div>
                        <div class="card-data-1 pl-6 max-w-159">
                            <div class="pb-2 leading-none">
                                <div class="card-header">

                                    <div class="w-8/12 relative flex">
                                        <div class="flex flex-wrap items-start">
                                            <span class="tag !border-0 bg-purple-blue-500 text-white !mb-0">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">deadline</font>
                                                </font>
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="flex flex-wrap">
                                                <div class="tag-list">
                                                    <span class="tag !border-0 bg-zinc-100 !m-0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                Search ad
                                                            </font>
                                                        </font>
                                                    </span>
                                                    <div id="more-list6" class="more-list">
                                                        <div class="w-11/12 flex flex-wrap">
                                                        </div>
                                                        <button type="button"
                                                            class="absolute top-1 right-1 text-xs p-2"
                                                            @click="tagClose(6)">
                                                            <div class="icon-close-zinc-600 w-3vw h-3vw sm:w-3 sm:h-3">
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-reference">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2024 year 07/31
                                            </font>
                                        </font>
                                    </div>
                                </div>
                                <div class="w-full text-zinc-700 text-b-lg ellipsis !leading-none">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Academic Research Surveyor Online Marketing
                                        </font>
                                    </font>
                                </div>
                            </div>
                            <div
                                class="flex flex-col items-center justify-between text-zinc-700 leading-none rounded-bl-lg overflow-hidden">
                                <div class="w-full bg-gray-50 text-center py-2 leading-normal">
                                    <div class="flex-all-center">
                                        <div class="icon-lock-zinc-700 w-4 h-4 pr-2"></div>
                                        <p>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">This is a private project.
                                                </font>
                                            </font>
                                        </p>
                                    </div>
                                    <p>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Only partners and clients involved
                                                in
                                                the
                                                project can be viewed.</font>
                                        </font>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="card-data-2">
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">budget</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Private
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">term</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Private
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">support</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Private
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hits</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Private
                                    </font>
                                </font>
                            </p>
                        </li>
                    </ul>
                </div>
            </a>
            <a
                href="/project/detail/7239?page=1&amp;orderBy=1&amp;stateParam=0&amp;serviceParam=0&amp;budgetParam=0&amp;search=">
                <div class="card flex p-0 mb-5">
                    <div class="flex w-full card-data-0 py-7 pl-7 pr-10">
                        <div class="relative img-border-box img-md">
                            <img src="https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/sector/ST01_1.png"
                                alt="">
                            <div class="sector_name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        IT/solution
                                    </font>
                                </font>
                            </div>
                        </div>
                        <div class="card-data-1 pl-6 max-w-159">
                            <div class="pb-2 leading-none">
                                <div class="card-header">

                                    <div class="w-8/12 relative flex">
                                        <div class="flex flex-wrap items-start">
                                            <span class="tag !border-0 bg-purple-blue-500 text-white !mb-0">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Selection</font>
                                                </font>
                                            </span>
                                            <span class="tag text-red-500 border-red-500">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">NEW</font>
                                                </font>
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="flex flex-wrap">
                                                <div class="tag-list">
                                                    <span class="tag !border-0 bg-zinc-100 !m-0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                Promotion/event
                                                            </font>
                                                        </font>
                                                    </span>
                                                    <div id="more-list7" class="more-list">
                                                        <div class="w-11/12 flex flex-wrap">
                                                        </div>
                                                        <button type="button"
                                                            class="absolute top-1 right-1 text-xs p-2"
                                                            @click="tagClose(7)">
                                                            <div
                                                                class="icon-close-zinc-600
                                                  w-3vw h-3vw sm:w-3 sm:h-3">
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-reference">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2024 years 07/30
                                            </font>
                                        </font>
                                    </div>
                                </div>
                                <div class="w-full text-zinc-700 text-b-lg ellipsis !leading-none">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Taxi calling app offline marketing
                                        </font>
                                    </font>
                                </div>
                            </div>
                            <div class="flex pt-6px">
                                <div class="multi-line-ellipsis">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            An application that provides taxi calling services.
                                            We want to go offline marketing, such as promotional distribution events, to
                                            promote
                                            the app.
                                            We hope to collaborate with agencies with offline marketing experience, such
                                            as
                                            promotional events.
                                        </font>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="card-data-2">
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">budget</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        20,000,000 won
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">term</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Less than 2 months
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">support</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        3 people
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hits</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        96th
                                    </font>
                                </font>
                            </p>
                        </li>
                    </ul>
                </div>
            </a>
            <a
                href="/project/detail/7238?page=1&amp;orderBy=1&amp;stateParam=0&amp;serviceParam=0&amp;budgetParam=0&amp;search=">
                <div class="card flex p-0 mb-5">
                    <div class="flex w-full card-data-0 py-7 pl-7 pr-10">
                        <div class="relative img-border-box img-md">
                            <img src="https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/sector/ST04_3.png"
                                alt="">
                            <div class="sector_name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Games/application
                                    </font>
                                </font>
                            </div>
                        </div>
                        <div class="card-data-1 pl-6 max-w-159">
                            <div class="pb-2 leading-none">
                                <div class="card-header">

                                    <div class="w-8/12 relative flex">
                                        <div class="flex flex-wrap items-start">
                                            <span class="tag !border-0 bg-purple-blue-500 text-white !mb-0">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Selection</font>
                                                </font>
                                            </span>
                                            <span class="tag text-red-500 border-red-500">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">NEW</font>
                                                </font>
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="flex flex-wrap">
                                                <div class="tag-list">
                                                    <button type="button"
                                                        class="tag !border-0 bg-zinc-100 cursor-pointer !m-0"
                                                        @click="moreTag(8);">
                                                        <p class="pr-1 !text-bold text-zinc-500">
                                                            <font style="vertical-align: inherit;">
                                                                <font style="vertical-align: inherit;">
                                                                    3 other
                                                                </font>
                                                            </font>
                                                        </p>
                                                        <div class="icon-toggle">
                                                            <div id="more-list-8-state" class="icon-toggle-dropdown">
                                                            </div>
                                                        </div>
                                                    </button>
                                                    <div id="more-list8" class="more-list">
                                                        <div class="w-11/12 flex flex-wrap">
                                                            <span class="tag !border-0 bg-zinc-100">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        Banner light
                                                                    </font>
                                                                </font>
                                                            </span>
                                                            <span class="tag !border-0 bg-zinc-100">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        Search ad
                                                                    </font>
                                                                </font>
                                                            </span>
                                                            <span class="tag !border-0 bg-zinc-100">
                                                                <font style="vertical-align: inherit;">
                                                                    <font style="vertical-align: inherit;">
                                                                        SNSmarketing
                                                                    </font>
                                                                </font>
                                                            </span>
                                                        </div>
                                                        <button type="button"
                                                            class="absolute top-1 right-1 text-xs p-2"
                                                            @click="tagClose(8)">
                                                            <div
                                                                class="icon-close-zinc-600
                                                  w-3vw h-3vw sm:w-3 sm:h-3">
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-reference">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2024 years 07/30
                                            </font>
                                        </font>
                                    </div>
                                </div>
                                <div class="w-full text-zinc-700 text-b-lg ellipsis !leading-none">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Cafe Subscription Service B2B Online Marketing
                                        </font>
                                    </font>
                                </div>
                            </div>
                            <div class="flex pt-6px">
                                <div class="multi-line-ellipsis">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            We operate an app service that uses a prepaid monthly subscription.
                                            For additional admission to private cafes, regardless of region
                                            I would like to proceed with online DB marketing.
                                            Landing pages are ready and to achieve your goals
                                            We hope to collaborate with an agency with a lot of DB marketing experience.
                                        </font>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="card-data-2">
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">budget</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        15,000,000 won
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">term</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Less than 3 months
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">support</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        7 people
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hits</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        101 rounds
                                    </font>
                                </font>
                            </p>
                        </li>
                    </ul>
                </div>
            </a>
            <a
                href="/project/detail/7237?page=1&amp;orderBy=1&amp;stateParam=0&amp;serviceParam=0&amp;budgetParam=0&amp;search=">
                <div class="card flex p-0 mb-5">
                    <div class="flex w-full card-data-0 py-7 pl-7 pr-10">
                        <div class="relative img-border-box img-md">
                            <img src="https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/sector/ST12_2.png"
                                alt="">
                            <div class="sector_name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Hospital/medical/pharmaceutical
                                    </font>
                                </font>
                            </div>
                        </div>
                        <div class="card-data-1 pl-6 max-w-159">
                            <div class="pb-2 leading-none">
                                <div class="card-header">

                                    <div class="w-8/12 relative flex">
                                        <div class="flex flex-wrap items-start">
                                            <span class="tag !border-0 bg-purple-blue-400 text-white !mb-0">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">Recruitment</font>
                                                </font>
                                            </span>
                                            <span class="tag text-red-500 border-red-500">
                                                <font style="vertical-align: inherit;">
                                                    <font style="vertical-align: inherit;">NEW</font>
                                                </font>
                                            </span>
                                        </div>
                                        <div class="flex flex-wrap">
                                            <div class="flex flex-wrap">
                                                <div class="tag-list">
                                                    <span class="tag !border-0 bg-zinc-100 !m-0">
                                                        <font style="vertical-align: inherit;">
                                                            <font style="vertical-align: inherit;">
                                                                CPA
                                                            </font>
                                                        </font>
                                                    </span>
                                                    <div id="more-list9" class="more-list">
                                                        <div class="w-11/12 flex flex-wrap">
                                                        </div>
                                                        <button type="button"
                                                            class="absolute top-1 right-1 text-xs p-2"
                                                            @click="tagClose(9)">
                                                            <div
                                                                class="icon-close-zinc-600
                                                  w-3vw h-3vw sm:w-3 sm:h-3">
                                                            </div>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-reference">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                2024 years 07/30
                                            </font>
                                        </font>
                                    </div>
                                </div>
                                <div class="w-full text-zinc-700 text-b-lg ellipsis !leading-none">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            Hair transplant CPA advertising
                                        </font>
                                    </font>
                                </div>
                            </div>
                            <div class="flex pt-6px">
                                <div class="multi-line-ellipsis">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">
                                            I am eating hair in Gangnam.
                                            This is a situation where a DB is needed for those who wish to have a hair
                                            transplant.
                                        </font>
                                    </font>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="card-data-2">
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">budget</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        20,000,000 won
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">term</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        Less than a month
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">deadline</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        August 9
                                        (D-3)
                                    </font>
                                </font>
                            </p>
                        </li>
                        <li>
                            <p class="data-name">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Hits</font>
                                </font>
                            </p>
                            <p class="data-info">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">
                                        46 rounds
                                    </font>
                                </font>
                            </p>
                        </li>
                    </ul>
                </div>
            </a>
        </section>

        <div class="pt-10">
            <div class="row w-full flex justify-center bg-none m-0 border-0">


            </div>
        </div>
    </div>
</div>
