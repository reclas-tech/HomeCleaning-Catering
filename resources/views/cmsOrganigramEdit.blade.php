<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEditedSuccessfully />
    <script>
        // handle Form submission
        function handleSignIn() {
            var organigramName = document.getElementById("organigramName");
            var imageUpload = document.getElementById(
                "imageUpload");
            var position = document.getElementById("position")
            var organigramName = organigramName.value;
            var imageUpload = imageUpload.value;
            var position = position.value;

            if (organigramName === "" || imageUpload === "" || position === "") {
                alertInputRequired();
                return;
            }

            if (organigramName !== "" && imageUpload !== "" && position !== "") {
                alertDataEditedSuccessfully();
                return;
            }

            console.log("Services Name:", organigramName);
            console.log("Desk Value:", position);
            console.log("Image Value:", imageUpload);
        }

    </script>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Edited Home Cleaning Organigram</h1>
    <x-cmsInputBox label="Name" title="Add Name" id="organigramName" value="Dari Backend" />
    <x-cmsInputBox label="Position" title="Add Position" id="position" value="Dari Backend" />
    <div class="flex place-content-between items-end">
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." />
        <x-cmsButtonSave />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
</x-cmsLayout>
