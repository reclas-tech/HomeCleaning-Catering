<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEditedSuccessfully />
    <script>
        // handle Form submission
        function handleSignIn() {
            var servicesName = document.getElementById("servicesName");
            var imageUpload = document.getElementById(
                "imageUpload"); // Make sure the input element for the image has id="image"
            var desk = document.getElementById("desk")
            var servicesName = servicesName.value;
            var imageUpload = imageUpload.value;
            var desk = desk.value;

            if (servicesName === "" || imageUpload === "" || desk === "") {
                alertInputRequired();
                return;
            }

            if (servicesName !== "" && imageUpload !== "" && desk !== "") {
                alertDataEditedSuccessfully();
                return;
            }

            // Perform other actions if all fields are filled
            console.log("services Name:", servicesName);
            console.log("Desk Value:", desk);
            console.log("Image Value:", imageUpload);
        }

    </script>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Edit Home Cleaning Services</h1>
    <x-cmsInputBox label="Name" title="Add Name" id="servicesName" value="Dari Backend" />
    <x-cmsTextArea label="Position" title="Add Position" id="desk" value="Dari Backend" />
    <div class="flex place-content-between items-end">
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." />
        <x-cmsButtonSave />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
</x-cmsLayout>
