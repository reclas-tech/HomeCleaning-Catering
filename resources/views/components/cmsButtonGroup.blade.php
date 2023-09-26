<div class="bg-white py-1 px-2 rounded-lg">
    <h2 class="py-1">{{ $head }}</h2>
    @if($show==2)
        <x-cmsButton title={{$title1}} ref="{{$ref1}}" color={{$color}} width="{{$width}}" extendClass="{{$extendClass}}"/>
        <x-cmsButton title={{$title2}} ref="{{$ref2}}" color={{$color}} width="{{$width}}" extendClass="{{$extendClass}}"/>
    @endif
    @if($show==1)
        <x-cmsButton title={{$title1}} ref="{{$ref1}}" color={{$color}} width="{{$width}}" extendClass="{{$extendClass}}"/>
    @endif
</div>