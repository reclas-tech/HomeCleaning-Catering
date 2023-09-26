@if($show==2)
    <div class="m-4 w-72 bg-white shadow-lg rounded-lg">
        <h4 class="bg-[#0062D1] rounded-t-lg text-xl p-1 pl-4 text-white">{{$title}}</h4>
        <div class="flex p-3">
            <div class="flex flex-col justify-center">
                <x-cmsButton ref="{{$ref1}}" color="#FFFFFF" width="32" title="{{$button1}}" extendClass="ms-2 me-4 text-[#FA8F21] shadow-lg text-semibold"/> 
                <x-cmsButton ref="{{$ref2}}" color="#FFFFFF" width="32" title="{{$button2}}" extendClass="ms-2 me-4 text-[#FA8F21] shadow-lg text-semibold"/> 
            </div>
            <div class="w-full flex justify-center items-center">
                <img class="p-2" src={{ asset('assets/cmsAssets/'.$img.'.svg') }} alt="">
            </div>
        </div>
    </div>
@else
    <div class="m-4 w-72 bg-white shadow-lg rounded-lg">
        <h4 class="bg-[#0062D1] rounded-t-lg text-xl p-1 pl-4 text-white">{{$title}}</h4>
        <div class="flex p-3">
            <div class="flex flex-col justify-center">
                <x-cmsButton ref="{{$ref1}}" color="#FFFFFF" width="32" title="{{$button1}}" extendClass="ms-2 me-4 text-[#FA8F21] shadow-lg w-36"/>  
            </div>
            <div class="w-full flex justify-center items-center text-semibold">
                <img class="p-2" src={{ asset('assets/cmsAssets/'.$img.'.svg') }} alt="">
            </div>
        </div>
    </div>
@endif