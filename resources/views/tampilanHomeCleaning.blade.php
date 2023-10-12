<x-tampilanLayout>
    <div
        class="bg-[url({{asset('assets/tampilanAssets/firstHome.png')}})] min-h-screen bg-auto bg-no-repeat bg-[#0062D1]/[0.46] bg-blend-overlay flex justify-center items-center">
        <div class="w-4/6 flex flex-col justify-center items-center">
            <h1 class="text-6xl font-bold text-white text-center">PT. ElyNaz IndoMasr Global</h1>
            <p class="text-xl font-thin text-white text-center mt-4">PT. ElyNaz IndoMasr Global memberikan solusi
                layanan komprehensif yang disesuaikan dengan kinerja dan kebutuhan bisnis anda.</p>
            <x-cmsButton ref="#" color="#FA8F21" width="32" title="Explore Now"
                extendClass="text-white text-center mt-6" />
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center">
        <div class="w-[50%]">
            <h1 class="text-5xl font-bold text-black text-center mt-20">OUR SERVICES</h1>
            <p class="text-base font-thin text-black text-center mt-4">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
        </div>
    </div>
    <div class="mt-14">
        <x-carouselService />
    </div>

    <div class="mt-20 w-full h-[870px] relative bg-[url({{asset('assets/tampilanAssets/ORGANIGRAM.png')}})]">
        <div class="w-[40%] flex flex-col ml-16 mb-20 text-start">
            <h1 class="text-5xl font-bold text-white mt-20">OUR ORGANIGRAM</h1>
            <p class="text-base font-thin text-white mt-4">Lorem Ipsum is simply dummy text of the printing and
                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
        </div>
        <div class="justify-items-center">
            <div class="div"></div>
            <x-carouselOrganigram />
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center mt-36 mb-36">
        <div class="w-[80%] bg-[#FA8F21] p-10">
            <h1 class="text-5xl font-bold text-white text-center">WORKING COMPANIES</h1>
            <p class="text-base font-thin text-white text-center mt-4 m-8">Lorem Ipsum is simply dummy text of the
                printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
            <x-carouselWorkingCompanies />

        </div>
    </div>
</x-tampilanLayout>
