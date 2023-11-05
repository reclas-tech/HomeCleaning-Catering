<x-tampilanLayout>
    <x-heroTampilan title="PT. ElyNaz IndoMasr Global " desc="PT. ElyNaz IndoMasr Global memberikan solusi layanan komprehensif yang disesuaikan dengan kinerja dan kebutuhan bisnis anda." ref="/" imgPath="{{asset('assets/tampilanAssets/cleaningBackground.png')}}"/>

    <div class="w-full flex flex-col justify-center items-center">
        <div class="w-[50%]">
            <h1 class="text-5xl font-bold text-black text-center mt-20">OUR SERVICES</h1>
            <p class="text-base font-thin text-black text-center mt-4">Lorem Ipsum is simply dummy text of the printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
        </div>
    </div>
    <div class="mt-14">
        <x-carouselService :dataService="$dataService" />
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
            <x-carouselOrganigram :dataOrganigram="$dataOrganigram" />
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center mt-36 mb-36">
        <div class="w-[80%] bg-[#FA8F21] p-10">
            <h1 class="text-5xl font-bold text-white text-center">WORKING COMPANIES</h1>
            <p class="text-base font-thin text-white text-center mt-4 m-8">Lorem Ipsum is simply dummy text of the
                printing
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            </p>
            <x-carouselWorkingCompanies :dataCompanies="$dataCompanies" />
        </div>
    </div>
</x-tampilanLayout>
