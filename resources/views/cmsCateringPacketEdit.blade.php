<x-cmsLayout>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Edit Catering Packet</h1>
    <form action="{{ url() -> current() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-cmsInputBox label="Packet Name" title="Add Packet Name" id="name" value="{{ $data -> name }}" />
        <x-cmsTextArea label="Description" id="description" title="Add Description" value="{{ $data -> description }}" />
        <div class="flex place-content-between items-end">
            {{-- <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." id="image" /> --}}
            <x-cmsButtonSave />
        </div>
    </form>
    @if (session()->has('failedAddContent'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertInputRequired('Save data failed');
            });
        </script>
    @endif
</x-cmsLayout>
