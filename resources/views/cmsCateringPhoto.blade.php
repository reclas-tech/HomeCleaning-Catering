<x-cmsLayout>
    <h1 class="text-3xl font-semibold p-2 mt-2">Catering Photo Gallery</h1>
    <x-cmsTable :top="['Image']" exception="id" addRef="/cmsCateringPhotoAdd" :test="$test" :allPage="$data -> lastPage()" :currentPage="$data -> currentPage()" :prevPage="$data -> previousPageUrl()" :nextPage="$data -> nextPageUrl()" :search="$varSearch" />

    @if (session()->has('successAddContent'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertDataEnteredSuccessfully();
            });
        </script>
    @endif
</x-cmsLayout>