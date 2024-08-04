<div class="flex fit-page">
    <div class="w-4/12 bg-madahm-r-side">
        <div class="relative top-50 left-19">
            <img src="{{ $logoUrl }}" alt="" class="w-27">
            <b class="flex pt-4 text-b-4xl">
                {!! $headline !!}
            </b>
            <p class="pt-3 text-m-2xl text-zinc-200">
                {{ $subHeadline }}
            </p>
        </div>
    </div>
    <div class="w-8/12 min-w-129 p-12 overflow-y-auto relative">
        <a href="{{ $homeUrl }}" class="flex w-24 absolute text-m-base">
            <img src="{{ $homeIconUrl }}" alt="" class="mr-3">
            홈으로
        </a>
        <div class="w-full h-full flex justify-center pt-28">
            <section class="flex flex-col w-107">
                <div>
                    <h3 class="text-4xl font-bold">{{ $loginTitle }}</h3>
                </div>
                <form wire:submit.prevent="submit" action="" class="flex flex-col">
                    <div class="flex flex-col pt-10">
                        <label for="id" class="flex items-center px-4 py-2">
                            <p class="w-3/12">아이디</p>
                            <input type="text" class="w-9/12 p-2" id="id" name="id" maxlength="20"
                                autocomplete="off" placeholder="{{ $usernamePlaceholder }}" wire:model.defer="userid">
                        </label>
                        <label for="pw" class="flex items-center px-4 py-2 mt-2">
                            <p class="w-3/12">비밀번호</p>
                            <input type="password" class="w-9/12 p-2" id="pw" name="pw" maxlength="20"
                                minlength="8" autocomplete="off" placeholder="{{ $passwordPlaceholder }}"
                                wire:model.defer="password">
                        </label>
                    </div>
                    <div class="flex justify-end items-center text-xs text-zinc-500 pt-5 pb-10">
                        <a href="{{ $findIdUrl }}" class="under-line">아이디 찾기</a>
                        <span class="divide-line spacing"></span>
                        <a href="{{ $findPasswordUrl }}" class="under-line">비밀번호 찾기</a>
                    </div>
                    <button class="btn btn-default mb-4" type="submit">
                        로그인하기
                    </button>
                </form>
                <div class="py-8">
                    <p class="text-center">SNS계정으로 간편하게 로그인하기</p>
                    <ul class="flex justify-center mt-5">
                        <li class="mr-11">
                            <button id="naverSignIn" wire:click="naverSignIn">
                                <img src="{{ $naverIconUrl }}" alt="">
                            </button>
                        </li>
                        <li>
                            <button id="kakaoSignIn" wire:click="kakaoSignIn">
                                <img src="{{ $kakaoIconUrl }}" alt="">
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="hr-sect py-8">
                    <span class="px-3">아직 마담 회원이 아니신가요?</span>
                </div>
                <a href="{{ $signUpUrl }}" class="btn btn-zinc-100">회원가입하기</a>
            </section>
        </div>
    </div>
</div>
