<?php
namespace App\Livewire;

use Livewire\Component;

class ContentComponent extends Component
{
    public $sections = [
        'section0' => [
            'title' => '대행사 매칭을 원하시는 클라이언트의 업종을 선택해주세요',
        ],
        'section2' => [
            'buttons' => [
                [
                    'id' => 'ST01',
                    'label' => 'IT/솔루션',
                    'imgSrc' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/main/icon-section-ST01.svg',
                    'alt' => 'IT/솔루션',
                ],
                [
                    'id' => 'ST02',
                    'label' => '가구/인테리어',
                    'imgSrc' => 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/main/icon-section-ST02.svg',
                    'alt' => '가구/인테리어',
                ],
                // Add more buttons as needed
            ],
        ],
        'section3' => [
            'title' => '광고대행사가 필요할 때, 마담에서 매칭받으세요',
            'subtitle' => '마담은 기업의 마케팅을 잘 할 수 있는 광고대행사를 무료 매칭해드립니다',
            'buttonText' => '프로젝트 더보기',
            'buttonLink' => '/project',
        ],
        'section4' => [
            'stats' => [
                [
                    'title' => '프로젝트 매칭금액',
                    'value' => '0',
                    'unit' => '억',
                ],
                [
                    'title' => '매칭요청 프로젝트',
                    'value' => '0',
                    'unit' => '건',
                ],
                [
                    'title' => '파트너스 대행사',
                    'value' => '0',
                    'unit' => '곳',
                ],
            ],
        ],
        'section5' => [
            'title' => '다양한 분야에서 마담의 대행사 매칭 서비스를 이용하였습니다',
            'tabs' => [
                [
                    'id' => 'section5-tab-0',
                    'label' => 'IT/솔루션',
                    'value' => '0',
                ],
                [
                    'id' => 'section5-tab-1',
                    'label' => '가구 인테리어',
                    'value' => '1',
                ],
                [
                    'id' => 'section5-tab-2',
                    'label' => '건설/분양/부동산',
                    'value' => '2',
                ],
            ],
        ],
    ];

    public function render()
    {
        return view('livewire.content-component');
    }
}
