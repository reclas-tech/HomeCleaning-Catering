<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEditedSuccessfully />
    <script>
        // handle Form submission
        function handleSignIn() {
            var imageUpload = document.getElementById(
                "imageUpload");
            var imageUpload = imageUpload.value;
            if (imageUpload === "") {
                alertInputRequired();
                return;
            }
            if (imageUpload !== "") {
                alertDataEditedSuccessfully();
                return;
            }
            console.log("Image Value:", imageUpload);
        }

    </script>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Edited Catering Photo</h1>
    <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="Dari Backend" />
    <div class="min-h-[45vh] flex items-end justify-end">
        <x-cmsButtonSave />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
</x-cmsLayout>
