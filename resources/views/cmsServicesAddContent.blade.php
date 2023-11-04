<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEnteredSuccessfully />
    <h1 class="text-3xl font-semibold mt-2 mb-8">Add Home Cleaning Services</h1>
    <form action="{{ url() -> current() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-cmsInputBox label="Service Name" title="Add Service Name" id="name" value="" />
        <x-cmsTextArea label="Description" title="Add Description" id="description" value="" />
        <div class="flex place-content-between items-end">
            <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." />
            <x-cmsButtonSave />
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
