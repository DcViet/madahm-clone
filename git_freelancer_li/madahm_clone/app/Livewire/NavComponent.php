<?php
namespace App\Livewire;

use Livewire\Component;

class NavComponent extends Component
{
    public $logoUrl = 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/madahm_logo.svg';
    public $navLinks = [
        ['url' => '/project/create', 'label' => 'Agency Matching Request'],
        ['url' => '/project', 'label' => 'Ongoing projects'],
        ['url' => '/partners-list', 'label' => 'Partners List'],
        ['url' => '/recruits', 'label' => 'Job Posting', 'new' => true],
    ];
    public $moreLinks = [
        'userGuide' => [
            ['url' => '/client/guide', 'label' => 'How to use the client and FAQ'],
            ['url' => '/partners/guide', 'label' => 'How to use Partners and FAQ'],
        ],
        'serviceIntro' => [
            ['url' => '/info', 'label' => 'Madam Introduction'],
            ['url' => '/notice', 'label' => 'announcement'],
            ['url' => '/madahm-intro', 'label' => 'Download the introduction'],
        ]
    ];
    public $authLinks = [
        ['url' => '/sign-up', 'label' => 'sign up'],
        ['url' => '/sign-in', 'label' => 'log in'],
    ];

    public function render()
    {
        return view('livewire.nav-component');
    }
}





