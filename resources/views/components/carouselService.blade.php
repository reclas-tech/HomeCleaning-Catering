<div class="grid grid-cols-1">
        <!-- Mobile -->
        <div class="md:hidden">
            <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
                <div class="relative h-[340px] overflow-hidden rounded-lg bg-white">
                    @foreach($data as $index => $item)
                    @if($index % 1 == 0)
                    <div class="hidden duration-700 ease-in-out flex gap-6 justify-center p-5 pt-[4%] "
                        data-carousel-item="active">
                        @endif
                        <div class="container w-60 max-w-sm h-64 relative">
                            <div class="w-60 h-64 left-0 top-0 absolute bg-white rounded-lg shadow-lg">
                                <div
                                    class="align-items-center w-20 h-24 left-[120px] top-[40px] absolute text-black text-sm font-bold font-['Open Sans']">
                                    {{ $item['nameTitle'] }}</div>
                                <div
                                    class="w-20 h-20 left-[27.35px] top-[32.67px] absolute flex items-center justify-center">
                                    <div class="w-20 h-20 bg-sky-600 rounded-tr-2xl relative">
                                        <img class="w-[74px] h-[65px] shadow-lg absolute inset-0 m-auto"
                                            src="{{ $item['logo'] }}" alt="bg-profile" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="w-44 left-[30px] top-[120px] absolute text-justify text-black text-sm font-normal font-['Poppins']">
                                {{ $item['desk'] }}</div>
                        </div>
                        @if($index % 1 == 0 || $index == count($data) - 1)
                    </div>
                    @endif
                    @endforeach

                </div>
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($data) / 1); $i++) { ?>
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

                    @foreach($data as $index => $item)
                    @if($index % 2 == 0)
                    <div class="hidden duration-700 ease-in-out flex gap-12 justify-center p-5 pt-[4%] mr-2"
                        data-carousel-item="active">
                        @endif
                        <div class="w-[60%] max-w-sm h-64 relative">
                            <div class="w-96 h-64 left-0 top-0 absolute bg-white rounded-lg shadow-lg">
                                <div
                                    class="w-52 h-24 left-[159.75px] top-[38.44px] absolute text-black text-2xl font-bold font-['Open Sans']">
                                    {{ $item['nameTitle'] }}</div>
                                <div
                                    class="w-28 h-28 left-[27.35px] top-[32.67px] absolute flex items-center justify-center">
                                    <div class="w-28 h-28 bg-sky-600 rounded-tr-2xl relative">
                                        <img class="w-[74px] h-[65px] shadow-lg absolute inset-0 m-auto"
                                            src="{{ $item['logo'] }}" alt="bg-profile" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="w-80 left-[30px] top-[158px] absolute text-justify text-black text-sm font-normal font-['Poppins']">
                                {{ $item['desk'] }}</div>
                        </div>
                        @if($index % 2 == 1 || $index == count($data) - 1)
                    </div>
                    @endif
                    @endforeach

                </div>
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($data) / 2); $i++) { ?>
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

                    @foreach($data as $index => $item)
                    @if($index % 3 == 0)
                    <div class="hidden duration-700 ease-in-out flex gap-6 justify-center p-lg-5 p-sm-2 p-5 pt-[4%]"
                        data-carousel-item="active">
                        @endif
                        <div class="w-[60%] max-w-sm h-64 relative">
                            <div class="w-96 h-64 left-0 top-0 absolute bg-white rounded-lg shadow-lg">
                                <div
                                    class="w-52 h-24 left-[159.75px] top-[38.44px] absolute text-black text-2xl font-bold font-['Open Sans']">
                                    {{ $item['nameTitle'] }}</div>
                                <div
                                    class="w-28 h-28 left-[27.35px] top-[32.67px] absolute flex items-center justify-center">
                                    <div class="w-28 h-28 bg-sky-600 rounded-tr-2xl relative">
                                        <img class="w-[74px] h-[65px] shadow-lg absolute inset-0 m-auto"
                                            src="{{ $item['logo'] }}" alt="bg-profile" />
                                    </div>
                                </div>
                            </div>
                            <div
                                class="w-80 left-[30px] top-[158px] absolute text-justify text-black text-sm font-normal font-['Poppins']">
                                {{ $item['desk'] }}</div>
                        </div>
                        @if($index % 3 == 2 || $index == count($data) - 1)
                    </div>
                    @endif
                    @endforeach

                </div>
                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                    <?php for($i = 0; $i < ceil(count($data) / 3); $i++) { ?>
                    <button type="button" class="w-3 h-3 rounded-full"
                        aria-current="<?= ($i == 0) ? 'true' : 'false' ?>" aria-label=""
                        data-carousel-slide-to="<?= $i ?>"></button>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

