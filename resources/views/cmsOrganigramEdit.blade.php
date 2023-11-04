<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEditedSuccessfully />
    <h1 class="text-3xl font-semibold mt-2 mb-8">Edited Home Cleaning Organigram</h1>
    <form action="{{ url() -> current() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-cmsInputBox label="Name" title="Add Name" id="name" value="{{ $data -> name }}" />
        <x-cmsInputBox label="Position" title="Add Position" id="position" value="{{ $data -> position }}" />
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
