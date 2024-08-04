<?php

namespace App\Livewire;

use Livewire\Component;

class SignupComponent extends Component
{
    public $logoUrl = "https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/madahm_logo_typo.svg";
    public $title = "광고대행사가 필요할 때,";
    public $subtitle = "마담과 시작하세요";
    public $partnersCount = "6,218명의 파트너스가 기다리고 있습니다";
    public $mainTitle = "회원가입";
    public $mainSubtitle = "가입 방법을 선택해주세요.";
    public $joinOptions = [
        [
            'url' => '/sign-up-step?join=basic',
            'image' => 'https://madahm.com/assets/img/icons/icon_madahm.svg',
            'text' => '마담으로 가입하기'
        ],
        [
            'url' => '/auth/kakao?returnUrl=/sns-sign-up-step',
            'image' => 'https://madahm.com/assets/img/icons/sns_kakao.svg',
            'text' => '카카오로 가입하기'
        ],
        [
            'url' => '/auth/naver?returnUrl=/sns-sign-up-step',
            'image' => 'https://madahm.com/assets/img/icons/sns_naver.svg',
            'text' => '네이버로 가입하기'
        ]
    ];

    public function render()
    {
        return view('livewire.madahm-signup.signup-component');
    }
}