<x-tampilanLayout>
    <x-heroTampilan title="PT. ElyNaz IndoMasr Global " desc="PT. ElyNaz IndoMasr Global memberikan solusi layanan komprehensif yang disesuaikan dengan kinerja dan kebutuhan bisnis anda." ref="/" imgPath="{{asset('assets/tampilanAssets/firstHome.png')}}"/>
    <div class="flex flex-col md:flex-row justify-between items-center min-h-screen md:px-10">
        <div class="max-w-sm p-6 sm:mb-4">
            <h5 class="mb-2 text-5xl font-bold tracking-tight text-black">PRODUK <br> DAN LAYANAN</h5>
            <p class="mb-3 font-normal text-medium text-black text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
        </div>
        <div class="max-w-sm p-4 rounded-lg shadow bg-[url({{asset('assets/tampilanAssets/cardCleaning.png')}})] bg-cover">
            <h5 class="mb-2 text-5xl font-bold tracking-tight text-white mb-4 sm:mb-6">SweepMop <br> Cleaning</h5>
            <div class="bg-white/[0.16] p-3 rounded-md h-fit">
                <p class="mb-3 font-sm text-white text-justify">Berdiri sejak tahun 2010, Sweepmop telah berpengalaman di bidang pelayanan jasa, SweepMop menjadi solusi kebersihan yang tepat bagi kebutuhan anda. Pilihan pembersihan yang beragam dapat disesuaikan dengan kebutuhan para pelanggan Sweepmop mulai dari pembersihan Hunian, Kantor, Hotel, Rumah Sakit, Pabrik, Asrama, Sekolah, baik pembersihan harian maupun perawatan berkala hingga pelayanan kebersihan khusus bagi industri tertentu</p>
                <div class="flex justify-end">
                    <x-cmsButton ref="/" color="#FA8F21" width="36" title="Lihat Selengkapnya" extendClass="text-white text-center mt-6 "/>
                </div>
            </div>
        </div>
        <div class="max-w-sm p-4 rounded-lg shadow bg-[url({{asset('assets/tampilanAssets/cardCleaning.png')}})] bg-cover ">
            <h5 class="mb-2 text-5xl font-bold tracking-tight text-white mb-4 sm:mb-6">Elynaz <br> Catering</h5>
            <div class="bg-white/[0.16] p-3 rounded-md h-fit">
                <p class="mb-3 font-sm text-white text-justify">Elynaz Catering telah berpengalaman di bidang jasa pelayanan boga dengan memadukan unsur kesehatan dalam setiap makanannya. Elynaz Catering berkomitmen untuk menyajikan makanan yang enak dan sehat karna kepuasan pelanggan adalah penghargaan dan nilai jual yang tertinggi dan mempunyai misi memberikan layanan prima kepada seluruh pelanggan, memberikan produk dan cita rasa yang berkualitas, mengutamakan kualitas, kebersihan dan kerapihan.</p>
                <div class="flex justify-end">
                    <x-cmsButton ref="/" color="#FA8F21" width="36" title="Lihat Selengkapnya" extendClass="text-white text-center mt-6 "/>
                </div>
            </div>
        </div>
    </div>
    <div class="flex flex-col md:flex-row md:justify-between items-center md:min-h-screen md:px-10 bg-[#0062D1] p-5">
        <div class="max-w-sm p-6 sm:mb-4">
            <h5 class="mb-2 text-5xl font-bold tracking-tight text-white">NIKMATI <br> PENGALAMAN <br> ISTIMEWA!</h5>
            <p class="mb-3 font-normal text-medium text-white text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
        </div>
        <div id="default-carousel" class="relative w-full bg-white p-2" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                    <!-- Item 1 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src={{asset('assets/tampilanAssets/bannerDynamic.png')}} class="absolute block sm:w-[75%] md:w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
                    <!-- Item 2 -->
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src={{asset('assets/tampilanAssets/bannerDynamic2.png')}} class="absolute block sm:w-[75%] md:w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                    </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="none">
                    <path d="M10.0089 23.9999C9.75277 24.0008 9.49968 23.9442 9.26825 23.8345C9.03681 23.7247 8.83292 23.5645 8.67154 23.3657L0.39005 13.0809C0.137864 12.7742 0 12.3895 0 11.9924C0 11.5954 0.137864 11.2107 0.39005 10.904L8.96302 0.619231C9.25405 0.269179 9.67226 0.0490432 10.1256 0.00725332C10.579 -0.0345366 11.0305 0.105442 11.3806 0.396395C11.7307 0.687348 11.9509 1.10544 11.9927 1.5587C12.0345 2.01196 11.8945 2.46326 11.6035 2.81331L3.93926 12.001L11.3463 21.1887C11.556 21.4403 11.6892 21.7467 11.7301 22.0716C11.771 22.3965 11.718 22.7264 11.5773 23.0221C11.4367 23.3178 11.2142 23.5671 10.9362 23.7404C10.6583 23.9137 10.3365 24.0037 10.0089 23.9999Z" fill="#BBBBBB"/>
                </svg>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="none">
                    <path d="M1.99108 23.9999C2.24723 24.0008 2.50032 23.9442 2.73175 23.8345C2.96319 23.7247 3.16708 23.5645 3.32846 23.3657L11.61 13.0809C11.8621 12.7742 12 12.3895 12 11.9924C12 11.5954 11.8621 11.2107 11.61 10.904L3.03698 0.619231C2.74595 0.269179 2.32774 0.0490432 1.87435 0.00725332C1.42097 -0.0345366 0.969549 0.105442 0.619401 0.396395C0.269252 0.687348 0.049057 1.10544 0.00725555 1.5587C-0.0345459 2.01196 0.105471 2.46326 0.396503 2.81331L8.06074 12.001L0.653693 21.1887C0.444027 21.4403 0.310843 21.7467 0.269899 22.0716C0.228955 22.3965 0.281965 22.7264 0.422658 23.0221C0.56335 23.3178 0.785836 23.5671 1.06379 23.7404C1.34174 23.9137 1.66353 24.0037 1.99108 23.9999Z" fill="#BBBBBB"/>
                </svg>
            </button>
        </div>

        {{-- <div id="default-carousel" class="relative w-full bg-white p-2" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-[30rem]">
                <!-- Item 1 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src={{asset('assets/tampilanAssets/bannerDynamic.png')}} class="absolute block w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <img src={{asset('assets/tampilanAssets/bannerDynamic2.png')}} class="absolute block w-[90%] -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="none">
                    <path d="M10.0089 23.9999C9.75277 24.0008 9.49968 23.9442 9.26825 23.8345C9.03681 23.7247 8.83292 23.5645 8.67154 23.3657L0.39005 13.0809C0.137864 12.7742 0 12.3895 0 11.9924C0 11.5954 0.137864 11.2107 0.39005 10.904L8.96302 0.619231C9.25405 0.269179 9.67226 0.0490432 10.1256 0.00725332C10.579 -0.0345366 11.0305 0.105442 11.3806 0.396395C11.7307 0.687348 11.9509 1.10544 11.9927 1.5587C12.0345 2.01196 11.8945 2.46326 11.6035 2.81331L3.93926 12.001L11.3463 21.1887C11.556 21.4403 11.6892 21.7467 11.7301 22.0716C11.771 22.3965 11.718 22.7264 11.5773 23.0221C11.4367 23.3178 11.2142 23.5671 10.9362 23.7404C10.6583 23.9137 10.3365 24.0037 10.0089 23.9999Z" fill="#BBBBBB"/>
                </svg>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24" fill="none">
                    <path d="M1.99108 23.9999C2.24723 24.0008 2.50032 23.9442 2.73175 23.8345C2.96319 23.7247 3.16708 23.5645 3.32846 23.3657L11.61 13.0809C11.8621 12.7742 12 12.3895 12 11.9924C12 11.5954 11.8621 11.2107 11.61 10.904L3.03698 0.619231C2.74595 0.269179 2.32774 0.0490432 1.87435 0.00725332C1.42097 -0.0345366 0.969549 0.105442 0.619401 0.396395C0.269252 0.687348 0.049057 1.10544 0.00725555 1.5587C-0.0345459 2.01196 0.105471 2.46326 0.396503 2.81331L8.06074 12.001L0.653693 21.1887C0.444027 21.4403 0.310843 21.7467 0.269899 22.0716C0.228955 22.3965 0.281965 22.7264 0.422658 23.0221C0.56335 23.3178 0.785836 23.5671 1.06379 23.7404C1.34174 23.9137 1.66353 24.0037 1.99108 23.9999Z" fill="#BBBBBB"/>
                </svg>
            </button>
        </div> --}}
    </div>

</x-tampilanLayout>