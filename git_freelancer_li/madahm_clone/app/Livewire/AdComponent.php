<?php

namespace App\Livewire;

use Livewire\Component;

class AdSection extends Component
{
    public $title = '광고대행사가 필요할 때, 마담과 시작하세요';
    public $description = '마담은 기업과 함께 성장할 수 있도록 시작부터 끝까지 함께합니다.';
    public $buttonText = '무료 매칭 받기';
    public $buttonLink = '/project/create';

    public function render()
    {
        return view('livewire.madahm-info.ad-section');
    }
}
