<x-tampilanLayout>
    <x-heroTampilan title="PT. ElyNaz IndoMasr Global "
        desc="PT. ElyNaz IndoMasr Global memberikan solusi layanan komprehensif yang disesuaikan dengan kinerja dan kebutuhan bisnis anda."
        ref="/" imgPath="{{asset('assets/tampilanAssets/cateringBackground.png')}}" />

    <div class="w-full flex flex-col s bg-[#EEEFF4] justify-center items-center p-8">
        <div class="w-[50%]">
            <h1 class="text-5xl font-bold text-black text-center mt-20">ELYNAZ PACKET</h1>
            <p class="text-base font-thin text-black text-center mt-4">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
        </div>
        <div class="hidden md:flex flex-col mt-4 w-[85%] justify-center items-center">
            <div class="flex justify-between w-full">
                <x-cateringCard />
                <x-cateringCard />
                <x-cateringCard />
            </div>
            <div class="flex justify-between w-[65%] mt-10 mb-20">
                <x-cateringCard />
                <x-cateringCard />
            </div>
        </div>

        <div class="flex md:hidden flex-col mt-4 w-full justify-center items-center">
            <div class="flex flex-col grid gap-10 ms-0 justify-between w-full">
                <x-cateringCard />
                <x-cateringCard />
                <x-cateringCard />
                <x-cateringCard />
                <x-cateringCard />
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center">
        <div class="w-[50%]">
            <h1 class="text-5xl font-bold text-black text-center mt-20">Photo Gallery</h1>
            <p class="text-base font-thin text-black text-center mt-4">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
        </div>
        <div class="hidden md:flex md:flex-col w-full">
            <div class="flex w-full p-10 gap-6 ">
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
            </div>
            <div class="w-full p-5 flex gap-6 ">
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
            </div>
            <div class="w-full p-5 flex gap-6 ">
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
                <div
                    class="w-[30rem] h-[20rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                    .
                </div>
            </div>
        </div>

        <div class="flex md:hidden flex-col justify-center items-center mt-4 gap-10 w-full">
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
            <div
                class="w-[25rem] h-[15rem] bg-[url({{asset('assets/tampilanAssets/dummyfood1.png')}})] bg-cover rounded-lg">
                .
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center mt-20 mb-24">
        <div class="w-[80%] bg-[#FA8F21] p-10">
            <h1 class="lg:text-5xl md:text-4xl sm:text-3xl font-bold text-white text-center">WORKING COMPANIES</h1>
            <p class="text-base font-thin text-white text-center mt-4 m-8">Lorem Ipsum is simply dummy text of the
                printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the
                1500s,
            </p>
            <x-carouselWorkingCompanies />
        </div>
    </div>
</x-tampilanLayout>
