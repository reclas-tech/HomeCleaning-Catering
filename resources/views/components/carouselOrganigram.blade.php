<?php 
// $dataOrganigram = [
//     [
//                         'profileName' => 'Bonnie Green',
//                         'profileRole' => 'Visual Designer',
//                         'profileImage' => asset('assets/tampilanAssets/profile.png'),
//                     ],
//                     [
//                         'profileName' => 'Alice Blue',
//                         'profileRole' => 'Frontend Developer',
//                         'profileImage' => asset('assets/tampilanAssets/profile.png'),
//                     ],
//                     [
//                         'profileName' => 'Charlie Brown',
//                         'profileRole' => 'UX/UI Designer',
//                         'profileImage' => asset('assets/tampilanAssets/profile.png'),
//                     ],
//                     [
//                         'profileName' => 'Ngentot',
//                         'profileRole' => 'UX/UI Designer',
//                         'profileImage' => asset('assets/tampilanAssets/profile.png'),
//                     ],
//                     [
//                         'profileName' => 'Ngentot 1',
//                         'profileRole' => 'Visual Designer',
//                         'profileImage' => asset('assets/tampilanAssets/profile.png'),
//                     ],
//                     [
//                         'profileName' => 'Ngentot 2',
//                         'profileRole' => 'Frontend Developer',
//                         'profileImage' => asset('assets/tampilanAssets/profile.png'),
//                     ],
//                     [
//                         'profileName' => 'Ngentot 3',
//                         'profileRole' => 'UX/UI Designer',
//                         'profileImage' => asset('assets/tampilanAssets/profile.png'),
//                     ],
//                     [
//                         'profileName' => 'Ngentot 4',
//                         'profileRole' => 'UX/UI Designer',
//                         'profileImage' => asset('assets/tampilanAssets/profile.png'),
//                     ],
// ];
?>

<div id="animation-carousel" class="relative w-full" data-carousel="slide">
    @if (count($dataOrganigram) == 1)
        <div class="relative p-5 overflow-hidden z-0 bg-white bg-opacity-30">

            <div class="duration-200 ease-linear flex gap-6 justify-center pl-[7%] pr-[7%] pt-[4%] pb-[4%]">
                <div class="w-64 h-[19rem] bg-[#FA8F21] border border-[#FA8F21] rounded-lg shadow dark:bg-[#FA8F21] dark:border-[#FA8F21] z-30 overflow-hidden p-1">
                    <div class="flex flex-col items-center justify-content-center mt-[8%] blur-none ">
                        <img class="w-[155px] h-[155px] mb-3 rounded-full shadow-lg" src="{{ $dataOrganigram[0]['profileImage'] }}" alt="bg-profile" />
                        <h5 class="mb-1 text-xl font-medium text-white dark:text-white line-clamp-1 text-center">{{ $dataOrganigram[0]['profileName'] }}</h5>
                        <span class="text-sm text-white dark:text-white line-clamp-3 text-center">{{ $dataOrganigram[0]['profileRole'] }}</span>
                    </div>
                </div>
            </div>

        </div>
    @elseif (count($dataOrganigram) > 1 && count($dataOrganigram) < 5)
        <div class="relative h-[25rem] overflow-hidden bg-white bg-opacity-30">

                @foreach ($dataOrganigram as $item)
                <div class="hidden duration-200 ease-linear flex gap-6 justify-center pl-[7%] pr-[7%] pt-[4%] pb-[4%]" data-carousel-item>
                <div class="w-64 h-[19rem] bg-[#FA8F21] border border-[#FA8F21] rounded-lg shadow dark:bg-[#FA8F21] dark:border-[#FA8F21] z-30 overflow-hidden p-1">
                    <div class="flex flex-col items-center justify-content-center mt-[8%] blur-none ">
                        <img class="w-[155px] h-[155px] mb-3 rounded-full shadow-lg" src="{{ $item['profileImage'] }}" alt="bg-profile" />
                        <h5 class="mb-1 text-xl font-medium text-white dark:text-white line-clamp-1 text-center">{{ $item['profileName'] }}</h5>
                        <span class="text-sm text-white dark:text-white line-clamp-3 text-center">{{ $item['profileRole'] }}</span>
                    </div>
                </div>
                </div>
                @endforeach

        </div>
    @elseif (count($dataOrganigram) >= 5)
    <div class="relative h-72 overflow-hidden md:h-96 z-0 bg-white bg-opacity-30">

        @foreach($dataOrganigram as $index => $item)
        @if($index % 4 == 0)
        <div class="hidden duration-200 ease-linear flex gap-6 justify-center pl-[7%] pr-[7%] pt-[4%] pb-[4%]"
        data-carousel-item>
        @endif
        <div
        class="w-[80%] max-w-sm bg-white border border-[#FA8F21] rounded-lg shadow dark:bg-[#FA8F21] dark:border-[#FA8F21] z-30 overflow-hidden">
        <div class="flex flex-col items-center justify-content-center mt-[8%] blur-none ">
                    <img class="w-[155px] h-[155px] mb-3 rounded-full shadow-lg" src="{{ $item['profileImage'] }}"
                        alt="bg-profile" />
                    <h5 class="mb-1 text-xl font-medium text-white dark:text-white">
                        {{ $item['profileName'] }}</h5>
                    <span class="text-sm text-white dark:text-white">{{ $item['profileRole'] }}</span>
                </div>
            </div>
            @if($index % 4 == 3)
        </div>
        @endif
        @endforeach
    </div>
    <button type="button"
    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
    data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full group-focus:outline-none">
            <svg class="w-8 h-8 text-white dark:text-[#D9D9D9]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M5 1 1 5l4 4" />
        </svg>
        <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
    data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full group-focus:outline-none">
            <svg class="w-8 h-8 text-white dark:text-[#D9D9D9]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 6 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="m1 9 4-4-4-4" />
        </svg>
        <span class="sr-only">Next</span>
        </span>
    </button>
@endif
</div>
