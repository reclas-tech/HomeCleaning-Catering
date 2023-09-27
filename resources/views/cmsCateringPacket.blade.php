<x-cmsLayout>
        <h1 class="text-3xl font-semibold p-2 mt-2">Catering Packet</h1>
        <x-cmsTable :top="['Packet Name','Deskripsi']" exception="id" addRef="/cmsCateringPacketAdd"/>
</x-cmsLayout>