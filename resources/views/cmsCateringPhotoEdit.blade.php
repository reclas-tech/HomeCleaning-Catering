<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEditedSuccessfully />
    <h1 class="text-3xl font-semibold mt-2 mb-8">Edited Catering Photo</h1>
    <form action="{{ url() -> current() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No Photo" />
        <div class="min-h-[45vh] flex items-end justify-end">
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
