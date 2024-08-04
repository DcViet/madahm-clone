<?php

namespace App\Livewire;

use Livewire\Component;

class FooterComponent extends Component
{
    public $footer = [
        'logo' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/madahm_logo_typo.svg',
        'nav' => [
            '프로젝트' => [
                ['label' => '대행사 매칭요청', 'link' => '/project/create'],
                ['label' => '진행중인 프로젝트', 'link' => '/project'],
            ],
            '파트너스' => [
                ['label' => '파트너스 리스트', 'link' => '/partners-list'],
            ],
            '이용가이드' => [
                ['label' => '클라이언트 이용방법', 'link' => '/client/guide'],
                ['label' => '파트너스 이용방법', 'link' => '/partners/guide'],
            ],
            '서비스 소개' => [
                ['label' => '마담 소개', 'link' => '/info'],
                ['label' => '공지사항', 'link' => '/notice'],
                ['label' => '소개서 다운로드', 'link' => '/madahm-intro'],
            ],
        ],
        'company' => [
            'info' => [
                '(주)마담',
                '대표 황선홍',
                '사업자등록번호 706-88-00561',
            ],
            'address' => '서울특별시 성동구 성수이로 119, 5층 (덕산빌딩)',
            'contact' => [
                '전화문의' => '02-468-0516',
                '제휴/문의' => 'help@madahm.com',
            ],
            'rights' => 'Ⓒ MADAHM All rights reserved.',
            'links' => [
                '이용약관' => '/service',
                '개인정보처리방침' => '/privacy',
            ],
        ],
        'sns' => [
            '블로그' => 'https://blog.naver.com/madahm',
            '블로그이미지' => '/assets/img/icons/icon-blog-gray.svg',
        ],
    ];

    public function render()
    {
        return view('livewire.footer-component');
    }
}
