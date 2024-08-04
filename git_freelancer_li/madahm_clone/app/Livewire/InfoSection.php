<?php

namespace App\Livewire;

use Livewire\Component;

class InfoSection extends Component
{
    public $title1 = '대한민국 대표 광고 플랫폼 마담';
    public $description1_1 = '이제 마담으로 광고대행사의 수준과 전문성을';
    public $description1_2 = '간편하게 비교하고 매칭받을 수 있습니다.';
    public $title2 = '한계를 넘어, 더 많은 성공사례를 만듭니다.';
    public $description2_1 = '마담의 특허받은 분석 솔루션으로, 업계 최고 수준의 성과를';
    public $description2_2 = '내는 다양한 대행사를 매칭 받아 기업의 성장을 함께합니다.';

    public function render()
    {
        return view('livewire.madahm-info.info-section');
    }
}
