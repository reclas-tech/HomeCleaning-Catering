<x-tampilanLayout>
    <x-heroTampilan title="ELYNAZ CATERING "
        desc="Elynaz Catering merupakan catering terpercaya yang sudah dipercaya dikalangan perusahaan baik swasta dan juga pemerintah dalam menghidangkan makanan siap hidang."
        ref="#section2" imgPath="{{asset('assets/tampilanAssets/cateringBackground.png')}}" butTitle="Explore Now" />
    <x-humberger refWA="https://api.whatsapp.com/send/?phone=082278887980&text&type=phone_number&app_absent=0" refInstagram="https://www.instagram.com/elynazcatering/" />
    <div id="section2" class="w-full flex flex-col s bg-[#EEEFF4] justify-center items-center p-8">
        <div class="w-[90%] mb-5">
            <h1 class="text-5xl font-bold text-black text-center mt-20">ELYNAZ PACKET</h1>
            <p class="text-base font-thin text-black text-center mt-4 text-justify">Elynaz Catering telah berpengalaman di bidang jasa pelayanan boga dengan memadukan unsur kesehatan dalam setiap makanannya. Elynaz Catering berkomitmen untuk menyajikan makanan yang enak dan sehat karna kepuasan pelanggan adalah penghargaan dan nilai jual yang tertinggi. Elynaz Catering mempunyai misi memberikan layanan prima kepada seluruh pelanggan, memberikan produk dan cita rasa yang berkualitas, mengutamakan kualitas, kebersihan dan kerapihan, dan terus berinovasi dalam menciptakan padu padan dalam setiap acara. Kami menyediakan berbagai paket pilihan yang dapat disesuaikan dengan kebutuhan anda. 
            </p>
        </div>
            <div class="flex flex-wrap gap-10 mt-4 w-[85%] justify-center items-center">
                @if (count($dataCatering) > 0)
                    @foreach ($dataCatering as $item)
                        <x-cateringCard :name="$item['name']" :description="$item['description']" />
                    @endforeach
                @endif
            </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center">
        <div class="w-[50%]">
            <h1 class="text-5xl font-bold text-black text-center mt-20">Photo Gallery</h1>
            <p class="text-base font-thin text-black text-center my-4">Jelajahi galeri makanan kami dan temukan kelezatan yang menunggu untuk memanjakan lidah Anda. Scroll ke bawah untuk menikmati galeri makanan kami yang menggugah selera!
            </p>
        </div>
        <div class="flex md:flex-col w-full">
            <div class="flex w-full flex-col md:flex-row gap-4 flex-wrap items-center justify-center">

                @if (count($dataPhotoGalery) > 0)

                @foreach ($dataPhotoGalery as $item) 
                <div
                    class=" w-[15rem] hover:md:w-[28rem] hover:md:h-[23rem] hover:w-[18rem] hover:h-[16rem] h-[13rem] md:w-[25rem] md:h-[20rem] bg-cover bg-[url({{ $item['logo'] }})] bg-cover rounded-lg ease-in-out duration-100">
                    .
                </div>
                @endforeach

                @endif
            </div>
        </div>
    </div>

    <div class="w-full flex flex-col justify-center items-center mt-20 mb-24">
        <div class="w-[80%] bg-[#FA8F21] p-10 rounded-lg">
            <h1 class="lg:text-5xl md:text-4xl sm:text-3xl font-bold text-white text-center">WORKING COMPANIES</h1>
            <p class="text-base font-thin text-white text-center mt-4 m-8">
                Berikut Merupakan Perusahaan yang
                Bekerjasama dengan PT. Elynaz Indomasr Global
            </p>
            <x-carouselWorkingCompanies :dataCompanies="$dataCompanies" />
        </div>
    </div>
</x-tampilanLayout>
