<x-cmsLayout>
    <h1 class="text-3xl font-semibold p-2 mt-2">Catering Packet</h1>
    <x-cmsTable :top="['Packet Name','Deskripsi']" :test="$test" :allPage="$data -> lastPage()" :currentPage="$data -> currentPage()" :prevPage="$data -> previousPageUrl()" :nextPage="$data -> nextPageUrl()" exception="id" addRef="/cmsCateringPacketAdd" :search="$varSearch" />

    @if (session()->has('successAddContent'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertDataEnteredSuccessfully();
            });
        </script>
    @endif
</x-cmsLayout>