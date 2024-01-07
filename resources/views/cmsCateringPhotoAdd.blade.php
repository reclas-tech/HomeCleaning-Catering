<x-cmsLayout>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Add Catering Photo</h1>
    <form action="{{ url() -> current() }}" method="POST" enctype="multipart/form-data">
        @csrf
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." id="image" />
        <div class="min-h-[45vh] flex items-end justify-end">
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
