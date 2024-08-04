<div class="card w-full p-0 px-10 py-6">
    <div class="flex flex-wrap items-start">
      <span class="tag border-0 bg-purple-blue-400 text-white">{{ $status }}</span>
      @if ($isNew)
        <span class="tag tag-sm border-red-500 text-red-500 ml-1">NEW</span>
      @endif
    </div>
    <div class="flex justify-between items-center flex-wrap text-2xl font-bold text-zinc-700 leading-none break-all py-3">
      <p class="w-11/12 break-word leading-tight">{{ $title }}</p>
      <div class="w-1/12 flex justify-end relative">
        <button type="button" wire:click="copyUrl">
          <img src="/assets/img/icons/copy.svg" alt="">
        </button>
        <div id="shareUrlCaption" class="toggle-message">
          <input type="text" style="display:none" id="ShareUrl" name="ShareUrl">
          The link has been copied.
        </div>
      </div>
    </div>
    <div class="flex items-center text-xs pt-5">
      <p class="text-zinc-400">registration date</p>
      <div class="divide-line spacing"></div>
      <p class="text-zinc-500">{{ $registrationDate }}</p>
    </div>
  </div>
  