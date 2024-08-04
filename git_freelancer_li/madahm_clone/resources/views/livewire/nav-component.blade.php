<nav class="main-header navbar flex justify-center w-full fit-width flex-col main-bg-white" >
    <div class="w-full flex justify-center items-center">
      <div class="flex justify-between py-6 w-169">
        <div class="flex items-center">
          <h1>
            <a href="/" class="gnb_event_link">
              <img src="{{ $logoUrl }}" alt="madam_logo">
            </a>
          </h1>
        </div>
        <ul class="navbar-nav1 flex items-center h-[37px]">
          @foreach ($navLinks as $link)
            <li class="text-primary1 font-bold">
              <a href="{{ $link['url'] }}" class="gnb_event_link">
                {{ $link['label'] }}
                @if (isset($link['new']) && $link['new'])
                  <span class="text-emerald-500 text-xs font-bold">New</span>
                @endif
              </a>
            </li>
          @endforeach
          <li class="relative" @click="toggleList('navMore')" @click.outside="navMoreOpen = false">
            <button type="button" id="btn-list-more" class="items-center btn-list-more icon-toggle-dropdown">
              <p>see more</p>
            </button>
            <div class="nav-more">
              <ul class="nav-more-list">
                <li class="list-title">User Guide</li>
                @foreach ($moreLinks['userGuide'] as $link)
                  <li>
                    <a href="{{ $link['url'] }}" class="gnb_event_link">
                      {{ $link['label'] }}
                    </a>
                  </li>
                @endforeach
              </ul>
              <div class="divide-line-lg mx-6"></div>
              <ul class="nav-more-list">
                <li class="list-title">Service Introduction</li>
                @foreach ($moreLinks['serviceIntro'] as $link)
                  <li>
                    <a href="{{ $link['url'] }}" class="gnb_event_link">
                      {{ $link['label'] }}
                    </a>
                  </li>
                @endforeach
              </ul>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav2 flex items-center">
          @foreach ($authLinks as $link)
            <li>
              <a href="{{ $link['url'] }}" class="btn btn-xs-r-lg border mr-2 gnb_event_link">
                {{ $link['label'] }}
              </a>
            </li>
          @endforeach
        </ul>
        <!-- Thêm form đăng xuất -->
<button wire:click="logout" class="btn btn-default">Đăng Xuất</button>

      </div>
    </div>
  </nav>
  