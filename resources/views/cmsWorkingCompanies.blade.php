<x-cmsLayout>
    <div class="p-4 ml-4 mr-4">
        <h1 class="text-3xl font-semibold p-2 mt-2">Working Companies</h1>
        <x-cmsTable :top="['Company Name']" :test="$test" :allPage="$data -> lastPage()" :currentPage="$data -> currentPage()" :prevPage="$data -> previousPageUrl()" :nextPage="$data -> nextPageUrl()" exception="id" addRef="cmsWorkingCompaniesAddContent" :search="$varSearch" />
    </div>
    @if (session()->has('successAddContent'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertDataEnteredSuccessfully();
            });
        </script>
    @endif
</x-cmsLayout>
