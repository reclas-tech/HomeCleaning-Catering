<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEditedSuccessfully/>
    <script>
        // handle Form submission
        function handleSignIn() {
            var companyNameInput = document.getElementById("companyName");
            var imageUpload = document.getElementById(
                "imageUpload"); // Make sure the input element for the image has id="image"
            var companyName = companyNameInput.value;
            var imageUpload = imageUpload.value;

            if (companyName === "" || imageUpload === "") {
                alertInputRequired();
                return;
            }

            if (companyName !== "" && imageUpload !== "") {
                alertDataEditedSuccessfully();
                return;
            }

            // Perform other actions if all fields are filled
            console.log("Company Name:", companyName);
            console.log("Image Value:", imageUpload);
        }

    </script>

    <h1 class="text-3xl font-semibold mt-2 mb-8">Edit Working Companies</h1>
    <x-cmsInputBox label="Company Name" title="Edit Company Name" id="companyName" value="Dari Backend" />
    <!-- <x-cmsInputBox label="Position" title="Add Position" id="position" value="Dari Backend"/> -->
    <div class="flex place-content-between items-end">
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." id="imageUpload" />
        <x-cmsButtonSave />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
</x-cmsLayout>
