<?php

namespace App\Livewire;

use Livewire\Component;

class SwiperSection extends Component
{
    public $title = '마담과 함께하세요';
    public $description1 = '마담은 광고대행사를 필요로 하는 기업에게 매칭서비스를 제공합니다.';
    public $description2 = '필요로 하는 분야에 맞춰 특허받은 데이터 분석 솔루션을 기반으로 적합한 대행사를 분석, 매칭하여 브랜드 가치를 알리고, 마케팅 효율에 최적화된 성과가 나올 수 있도록 도움을 드립니다.';

    public $slides = [
        [
            'img' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/info/info-article02-01.svg',
            'title' => '#앱다운로드 수',
            'description' => '앱 다운로드 수 극대화 전략이 필요할 때'
        ],
        [
            'img' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/info/info-article02-02.svg',
            'title' => '#브랜드',
            'description' => '브랜드 효율을 위한 전략이 필요할 때'
        ],
        [
            'img' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/info/info-article02-03.svg',
            'title' => '#신제품',
            'description' => '브랜드 효율을 위한 전략이 필요할 때'
        ],
        [
            'img' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/info/info-article02-04.svg',
            'title' => '#신규 고객',
            'description' => '신규 고객 확보 전략이 필요할 때'
        ],
        [
            'img' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/info/info-article02-05.svg',
            'title' => '#매출 증대',
            'description' => '매출 증대를 위한 마케팅 전략이 필요할 때'
        ],
        [
            'img' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/info/info-article02-06.svg',
            'title' => '#검증',
            'description' => '브랜드 효율을 위한 전략이 필요할 때'
        ]
    ];

    public function render()
    {
        return view('livewire.madahm-info.swiper-section');
    }
}
