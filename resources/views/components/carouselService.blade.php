<?php 
// $dataService = [
//     [
//                         'logo' => asset('assets/tampilanAssets/homeCleaningService.png'),
//                         'nameTitle' => 'General Cleaning & Housekeeping',
//                         'desk' =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the',
//                     ],
//                     [
//                         'logo' => asset('assets/tampilanAssets/homeCleaningService.png'),
//                         'nameTitle' => 'Asu 2',
//                         'desk' =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the',
//                     ],
//                     [
//                         'logo' => asset('assets/tampilanAssets/homeCleaningService.png'),
//                         'nameTitle' => 'Asu 3',
//                         'desk' =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the',
//                     ],
//                     [
//                         'logo' => asset('assets/tampilanAssets/homeCleaningService.png'),
//                         'nameTitle' => 'Asu 4',
//                         'desk' =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the',
//                     ],
//                     [
//                         'logo' => asset('assets/tampilanAssets/homeCleaningService.png'),
//                         'nameTitle' => 'Asu 5',
//                         'desk' =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the',
//                     ],
//                     [
//                         'logo' => asset('assets/tampilanAssets/homeCleaningService.png'),
//                         'nameTitle' => 'Asu 6',
//                         'desk' =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the',
//                     ],
//                     [
//                         'logo' => asset('assets/tampilanAssets/homeCleaningService.png'),
//                         'nameTitle' => 'Asu 7',
//                         'desk' =>  'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the',
//                     ],
// ];
?>

<div class="grid grid-cols-1">

    @if (count($dataService) == 1)

    <div class="relative w-full">
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 bg-white">
            
            <div class="duration-700 ease-in-out flex gap-6 justify-center p-lg-5 p-sm-2 p-5 pt-[4%]">
                <div class="w-[60%] max-w-sm h-64 relative">
                    <div class="w-96 h-64 left-0 top-0 absolute bg-white rounded-lg shadow-lg">
                        <div
                        class="w-52 h-24 left-[159.75px] line-clamp-3 top-[38.44px] absolute text-black text-2xl font-bold font-['Open Sans']">
                            {{ $dataService[0]['nameTitle'] }}</div>
                        <div
                        class="w-28 h-28 left-[27.35px] top-[32.67px] absolute flex items-center justify-center">
                        <div class="w-28 h-28 bg-sky-600 rounded-tr-2xl relative bg-[90%] bg-center bg-no-repeat bg-[url({{ $dataService[0]['logo'] }})]">
                            </div>
                        </div>
                    </div>
                    <div
                        class="w-80 left-[30px] top-[158px] line-clamp-4 absolute text-justify text-black text-sm font-normal font-['Poppins']">
                        {{ $dataService[0]['desk'] }}</div>
                </div>
            </div>

        </div>
    </div>

    @elseif (count($dataService) > 1 && count($dataService) < 4)

    <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 bg-white">
            
            @foreach($dataService as $index => $item)
            <div class="hidden duration-700 ease-in-out flex gap-6 justify-center p-lg-5 p-sm-2 p-5 pt-[4%]"
                data-carousel-item>
                <div class="w-[60%] max-w-sm h-64 relative">
                    <div class="w-96 h-64 left-0 top-0 absolute bg-white rounded-lg shadow-lg">
                        <div
                        class="w-52 h-24 left-[159.75px] line-clamp-3 top-[38.44px] absolute text-black text-2xl font-bold font-['Open Sans']">
                            {{ $item['nameTitle'] }}</div>
                        <div
                        class="w-28 h-28 left-[27.35px] top-[32.67px] absolute flex items-center justify-center">
                        <div class="w-28 h-28 bg-sky-600 rounded-tr-2xl relative bg-[90%] bg-center bg-no-repeat bg-[url({{ $dataService[0]['logo'] }})]">
                        </div>
                        </div>
                    </div>
                    <div
                        class="w-80 left-[30px] top-[158px] line-clamp-4 absolute text-justify text-black text-sm font-normal font-['Poppins']">
                        {{ $item['desk'] }}</div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <?php for($i = 0; $i < ceil(count($dataService) / 3); $i++) { ?>
            <button type="button" class="w-3 h-3 rounded-full"
                aria-current="<?= ($i == 0) ? 'true' : 'false' ?>" aria-label=""
                data-carousel-slide-to="<?= $i ?>"></button>
            <?php } ?>
        </div>
    </div>

    @elseif (count($dataService) >= 4)

    <!-- Mobile -->
    <div class="md:hidden">
        <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
            <div class="relative h-[340px] overflow-hidden rounded-lg bg-white">
                @foreach($dataService as $index => $item)
                @if($index % 1 == 0)
                <div class="hidden duration-700 ease-in-out flex gap-6 justify-center p-5 pt-[4%] "
                data-carousel-item="active">
                @endif
                <div class="container w-60 max-w-sm h-64 relative">
                    <div class="w-60 h-64 left-0 top-0 absolute bg-white rounded-lg shadow-lg">
                        <div
                                    class="align-items-center line-clamp-3 w-20 h-24 left-[120px] top-[40px] absolute text-black text-sm font-bold font-['Open Sans']">
                                    {{ $item['nameTitle'] }}</div>
                                    <div
                                    class="w-20 h-20 left-[27.35px] top-[32.67px] absolute flex items-center justify-center">
                                    <div class="w-20 h-20 bg-sky-600 rounded-tr-2xl relative bg-[90%] bg-center bg-no-repeat bg-[url({{ $dataService[0]['logo'] }})]">
                                    </div>
                                </div>
                            </div>
                            <div
                                class="w-44 left-[30px] line-clamp-4 top-[120px] absolute text-justify text-black text-sm font-normal font-['Poppins']">
                                {{ $item['desk'] }}</div>
                        </div>
                        @if($index % 1 == 0 || $index == count($dataService) - 1)
                    </div>
                    @endif
                    @endforeach

                </div>
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($dataService) / 1); $i++) { ?>
                    <button type="button" class="w-3 h-3 rounded-full"
                        aria-current="<?= ($i == 0) ? 'true' : 'false' ?>" aria-label=""
                        data-carousel-slide-to="<?= $i ?>"></button>
                    <?php } ?>
                </div>
            </div>
        </div>

        <!-- Tablet -->
        <div class="hidden md:block lg:hidden">
            <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96 bg-white">

                    @foreach($dataService as $index => $item)
                    @if($index % 2 == 0)
                    <div class="hidden duration-700 ease-in-out flex gap-12 justify-center p-5 pt-[4%] mr-2"
                    data-carousel-item="active">
                        @endif
                        <div class="w-[60%] max-w-sm h-64 relative">
                            <div class="w-96 h-64 left-0 top-0 absolute bg-white rounded-lg shadow-lg">
                                <div
                                class="w-52 h-24 left-[159.75px] line-clamp-3 top-[38.44px] absolute text-black text-2xl font-bold font-['Open Sans']">
                                    {{ $item['nameTitle'] }}</div>
                                    <div
                                    class="w-28 h-28 left-[27.35px] top-[32.67px] absolute flex items-center justify-center">
                                    <div class="w-28 h-28 bg-sky-600 rounded-tr-2xl relative bg-[90%] bg-center bg-no-repeat bg-[url({{ $dataService[0]['logo'] }})]">
                                    </div>
                                    </div>
                                </div>
                            <div
                                class="w-80 line-clamp-4 left-[30px] top-[158px] absolute text-justify text-black text-sm font-normal font-['Poppins']">
                                {{ $item['desk'] }}</div>
                        </div>
                        @if($index % 2 == 1 || $index == count($dataService) - 1)
                    </div>
                    @endif
                    @endforeach

                </div>
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($dataService) / 2); $i++) { ?>
                    <button type="button" class="w-3 h-3 rounded-full"
                    aria-current="<?= ($i == 0) ? 'true' : 'false' ?>" aria-label=""
                    data-carousel-slide-to="<?= $i ?>"></button>
                    <?php } ?>
                </div>
            </div>
        </div>
        
        <!-- Komputer -->
        <div class="hidden lg:block">
            <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative h-56 overflow-hidden rounded-lg md:h-96 bg-white">
                    
                    @foreach($dataService as $index => $item)
                    @if($index % 3 == 0)
                    <div class="hidden duration-700 ease-in-out flex gap-6 justify-center p-lg-5 p-sm-2 p-5 pt-[4%]"
                        data-carousel-item="active">
                        @endif
                        <div class="w-[60%] max-w-sm h-64 relative">
                            <div class="w-96 h-64 left-0 top-0 absolute bg-white rounded-lg shadow-lg">
                                <div
                                class="w-52 h-24 left-[159.75px] line-clamp-3 top-[38.44px] absolute text-black text-2xl font-bold font-['Open Sans']">
                                    {{ $item['nameTitle'] }}</div>
                                <div
                                class="w-28 h-28 left-[27.35px] top-[32.67px] absolute flex items-center justify-center">
                                <div class="w-28 h-28 bg-sky-600 rounded-tr-2xl relative bg-[90%] bg-center bg-no-repeat bg-[url({{ $dataService[0]['logo'] }})]">
                                </div>
                                </div>
                            </div>
                            <div
                                class="w-80 left-[30px] top-[158px] line-clamp-4 absolute text-justify text-black text-sm font-normal font-['Poppins']">
                                {{ $item['desk'] }}</div>
                        </div>
                        @if($index % 3 == 2 || $index == count($dataService) - 1)
                    </div>
                    @endif
                    @endforeach

                </div>
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($dataService) / 3); $i++) { ?>
                    <button type="button" class="w-3 h-3 rounded-full"
                        aria-current="<?= ($i == 0) ? 'true' : 'false' ?>" aria-label=""
                        data-carousel-slide-to="<?= $i ?>"></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    @endif
    </div>

