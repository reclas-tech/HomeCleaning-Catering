<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEnteredSuccessfully />
    <script>
        // handle Form submission
        function handleSignIn() {
            var servicesName = document.getElementById("servicesName");
            var imageUpload = document.getElementById(
                "imageUpload");
            var desk = document.getElementById("desk")
            var servicesName = servicesName.value;
            var imageUpload = imageUpload.value;
            var desk = desk.value;

            if (servicesName === "" || imageUpload === "" || desk === "") {
                alertInputRequired();
                return;
            }

            if (servicesName !== "" && imageUpload !== "" && desk !== "") {
                alertDataEnteredSuccessfully();
                return;
            }

            console.log("Services Name:", servicesName);
            console.log("Desk Value:", desk);
            console.log("Image Value:", imageUpload);
        }

    </script>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Add Home Cleaning Services</h1>
    <x-cmsInputBox label="Service Name" title="Add Service Name" id="servicesName" value="" />
    <x-cmsTextArea label="Description" title="Add Description" id="desk" value="" />
    <div class="flex place-content-between items-end">
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." />
        <x-cmsButtonSave />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
</x-cmsLayout>
