<ul id="projectInfo2" class="card flex justify-between w-full p-0 py-6 mt-4 transition" x-init="widthCalc('projectInfo2')">
    <li class="flex justify-center dash-line dash-half" style="width: 33.3333%;">
      <div class="flex flex-col items-center w-full">
        <span class="icon-cash-zinc-500 w-7 h-7"></span>
        <div class="text-center pt-3">
          <p class="pb-1 text-zinc-500">budget</p>
          <p class="text-zinc-700 font-bold">{{ $budget }}</p>
        </div>
      </div>
    </li>
    <li class="flex justify-center dash-line dash-half" style="width: 33.3333%;">
      <div class="flex flex-col items-center w-full">
        <span class="icon-clock-zinc-500 w-6 h-6 mb-1"></span>
        <div class="text-center pt-3">
          <p class="pb-1 text-zinc-500">period</p>
          <p class="text-zinc-700 font-bold">{{ $period }}</p>
        </div>
      </div>
    </li>
    <li class="flex justify-center dash-line dash-half" style="width: 33.3333%;">
      <div class="flex flex-col items-center w-full">
        <span class="icon-cursor-click-zinc-500 w-5 h-5 mb-1"></span>
        <div class="text-center pt-3">
          <p class="pb-1 text-zinc-500">views</p>
          <p class="text-zinc-700 font-bold">{{ $views }}</p>
        </div>
      </div>
    </li>
  </ul>
  