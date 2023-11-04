<div class="grid grid-cols-1">
    <!-- mobile -->
    <div class="md:hidden">
        <div id="indicators-carousel" class="relative" data-carousel="slide">
            <div class="relative overflow-hidden md:h-80 flex">

                @foreach($data as $index => $item)
                @if($index % 2 == 0)
                <div class="hidden duration-700 ease-in-out flex gap-4 justify-center p-lg-5 p-sm-2 p-3 pt-[2%] bg-white"
                    data-carousel-item="active">
                    @endif
                    <div class="w-64 h-64 relative">
                        <img class="w-full h-64 absolute m-auto p-5" src="{{ $item['logo'] }}" alt="bg-profile" />
                    </div>

                    @if($index % 2 == 0 || $index == count($data) - 1)
                </div>
                @endif
                @endforeach

            </div>
            <!-- <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($data) / 3); $i++) { ?>
                    <button type="button" class="w-3 h-3 rounded-full"
                        aria-current="<?= ($i == 0) ? 'true' : 'false' ?>" aria-label=""
                        data-carousel-slide-to="<?= $i ?>"></button>
                    <?php } ?>
                </div> -->
        </div>
    </div>


    <!-- tablet -->
    <div class="hidden md:block lg:hidden">
        <div id="indicators-carousel" class="relative" data-carousel="slide">
            <div class="relative overflow-hidden md:h-80">

                @foreach($data as $index => $item)
                @if($index % 3 == 0)
                <div class="hidden duration-700 ease-in-out flex gap-4 justify-center p-lg-5 p-sm-2 p-3 pt-[2%] bg-white"
                    data-carousel-item="active">
                    @endif
                    <div class="w-64 h-64 relative">
                        <img class="w-full h-full absolute m-auto p-5" src="{{ $item['logo'] }}" alt="bg-profile" />
                    </div>

                    @if($index % 3 == 2 || $index == count($data) - 1)
                </div>
                @endif
                @endforeach

            </div>
            <!-- <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($data) / 3); $i++) { ?>
                    <button type="button" class="w-3 h-3 rounded-full"
                        aria-current="<?= ($i == 0) ? 'true' : 'false' ?>" aria-label=""
                        data-carousel-slide-to="<?= $i ?>"></button>
                    <?php } ?>
                </div> -->
        </div>
    </div>

    <!-- Komputer -->
    <div class="hidden lg:block">
        <div id="indicators-carousel" class="relative" data-carousel="slide">
            <div class="relative overflow-hidden md:h-80">

                @foreach($data as $index => $item)
                @if($index % 4 == 0)
                <div class="hidden duration-700 ease-in-out flex gap-4 justify-center p-lg-5 p-sm-2 p-3 pt-[2%] bg-white"
                    data-carousel-item="active">
                    @endif
                    <div class="w-64 h-64 relative">
                        <img class="w-full h-full absolute m-auto p-5" src="{{ $item['logo'] }}" alt="bg-profile" />
                    </div>

                    @if($index % 4 == 3 || $index == count($data) - 1)
                </div>
                @endif
                @endforeach

            </div>
            <!-- <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($data) / 4); $i++) { ?>
                    <button type="button" class="w-3 h-3 rounded-full"
                        aria-current="<?= ($i == 0) ? 'true' : 'false' ?>" aria-label=""
                        data-carousel-slide-to="<?= $i ?>"></button>
                    <?php } ?>
                </div> -->
        </div>
    </div>


</div>
