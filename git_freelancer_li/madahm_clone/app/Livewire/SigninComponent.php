<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SigninComponent extends Component
{
    public $logoUrl = 'https://madahm-s3.s3.ap-northeast-2.amazonaws.com/assets/images/madahm_logo_typo.svg';
    public $headline = '광고대행사가 필요할 때,<br>마담과 시작하세요';
    public $subHeadline = '6,218명의 파트너스가 기다리고 있습니다';
    public $homeUrl = '/';
    public $homeIconUrl = 'https://madahm.com/assets/img/icons/bold_arrow.svg';
    public $loginTitle = '로그인';
    public $usernamePlaceholder = '아이디는 6-20자의 영문과 숫자만 사용 가능합니다';
    public $passwordPlaceholder = '8-20자의 영문과 숫자, 특수문자만 사용 가능합니다';
    public $findIdUrl = '/find-id';
    public $findPasswordUrl = '/find-pw';
    public $signUpUrl = '/sign-up';
    public $naverIconUrl = 'https://madahm.com/assets/img/icons/sns_naver.svg';
    public $kakaoIconUrl = 'https://madahm.com/assets/img/icons/sns_kakao.svg';
    
    public $userid;
    public $password;
    
    protected $rules = [
        'userid' => 'required|string',
        'password' => 'required|string|min:8',
    ];
    
    public function submit()
    {
        $this->validate();

        if (Auth::attempt(['userid' => $this->userid, 'password' => $this->password])) {
            return redirect()->intended('/home');
        }

        throw ValidationException::withMessages([
            'userid' => __('The provided credentials do not match our records.'),
        ]);
    }

    public function naverSignIn()
    {
        // Logic for Naver sign-in goes here.
    }

    public function kakaoSignIn()
    {
        // Logic for Kakao sign-in goes here.
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/'); // Redirect sau khi đăng xuất
    }
    
    public function render()
    {
        return view('livewire.madahm-signin.signin-component');
    }
}
