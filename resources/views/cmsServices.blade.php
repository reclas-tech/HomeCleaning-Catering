<x-cmsLayout>
    <h1 class="text-3xl font-semibold p-2 mt-2">Home Cleaning Services</h1>
    <x-cmsTable :top="['Services Name', 'Description']" :test="$test" :allPage="$data -> lastPage()" :currentPage="$data -> currentPage()" :prevPage="$data -> previousPageUrl()" :nextPage="$data -> nextPageUrl()" exception="id" addRef="cmsServicesAddContent" :search="$varSearch" />

    @if (session()->has('successAddContent'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertDataEnteredSuccessfully();
            });
        </script>
    @endif
</x-cmsLayout>
