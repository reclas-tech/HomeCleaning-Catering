<x-tampilanLayout>
    <x-heroTampilan title="PT. ElyNaz IndoMasr Global "
        desc="PT. ElyNaz IndoMasr Global memberikan solusi layanan komprehensif yang disesuaikan dengan kinerja dan kebutuhan bisnis anda."
        ref="#section2" imgPath="{{asset('assets/tampilanAssets/cleaningBackground.png')}}" butTitle="Explore Now" />
    <x-humberger refWA="https://api.whatsapp.com/send/?phone=081539274249&text&type=phone_number&app_absent=0"
        refInstagram="https://www.instagram.com/sweepmop/" />
    <div id="section2" class="w-full flex flex-col justify-center items-center">
        <div class="w-[70%] md:w-[50%]">
            <h1 class="text-xl md:text-5xl font-bold text-black text-center mt-20">OUR SERVICES</h1>
            <p class="text-base font-thin text-black text-justify mt-4">Berdiri sejak tahun 2010, Sweepmop telah
                berpengalaman di bidang pelayanan jasa, SweepMop menjadi solusi kebersihan yang tepat bagi kebutuhan
                anda. Pilihan pembersihan yang beragam dapat disesuaikan dengan kebutuhan para pelanggan Sweepmop mulai
                dari pembersihan Hunian, Kantor, Hotel, Rumah Sakit, Pabrik, Asrama, Sekolah, baik pembersihan harian
                maupun perawatan berkala hingga pelayanan kebersihan khusus bagi industri tertentu
            </p>
        </div>
    </div>
    <div class="mt-14">
        <x-carouselService />
    </div>
    <div
        class="mt-20 w-full h-[870px] bg-cover bg-no-repeat relative bg-[url({{asset('assets/tampilanAssets/ORGANIGRAM.png')}})]">
        <div class="lg:w-[40%] md:w-[70%] sm:w-full flex flex-col ml-16 mr-16 mb-20 text-start">
            <h1 class="lg:text-5xl md:text-3xl sm:text-xl font-bold text-white mt-20">OUR ORGANIGRAM</h1>
            <p class="text-base font-thin text-white mt-4">Ini adalah organigram dari SweepMop dan Home Cleaning yang
                menunjukkan struktur organisasi dan bagaimana setiap bagian dalam perusahaan kami berperan dalam
                memberikan layanan terbaik kepada pelanggan kami
            </p>
        </div>
        <div class="justify-items-center">
            <x-carouselOrganigram />
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center mt-36 mb-36">
        <div class="w-[80%] bg-[#FA8F21] p-10 rounded-lg">
            <h1 class="lg:text-5xl md:text-4xl sm:text-3xl font-bold text-white text-center">WORKING COMPANIES</h1>
            <p
                class="text-sm md:text-base font-thin text-white text-justify md:text-center mt-4 m-2 md:m-8 pl-0 md:pl-24 md:pr-24">
                Perusahaan yang
                Bekerjasama dengan Home Cleaning dan Catering
            </p>
            <x-carouselWorkingCompanies />

        </div>
    </div>
</x-tampilanLayout>
