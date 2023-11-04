<x-cmsLayout>
    <x-alertInputRequired/>
    <x-alertDataEnteredSuccessfully/>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Add Working Companies</h1>
    <form action="{{ url() -> current() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-cmsInputBox label="Company Name" title="Add Company Name" id="name" value="" />
        <div class="flex place-content-between items-end">
            <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." id="image" />
            <x-cmsButtonSave/>
        </div>
    </form>
    @if (session()->has('failedAddContent'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertWrongEmailPassword('Gagal menyimpan data');
            });
        </script>
    @endif
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
</x-cmsLayout>
