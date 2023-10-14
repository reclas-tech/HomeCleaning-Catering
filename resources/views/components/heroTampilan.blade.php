<div class="bg-[url({{$imgPath}})] w-full min-h-screen bg-cover bg-no-repeat bg-[#0062D1]/[0.46] bg-blend-overlay flex justify-center items-center">
    <div class="w-4/6 flex flex-col justify-center items-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white text-center">{{$title}}</h1>
        <p class="text-sm md:text-xl font-thin text-white text-center mt-4">{{$desc}}</p>
        <x-cmsButton ref="{{$ref}}" color="#FA8F21" width="32" title="Explore Now" extendClass="text-white text-center mt-6"/>
    </div>
</div>