<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEnteredSuccessfully />
    <script>
        // handle Form submission
        function handleSignIn() {
            var packetName = document.getElementById("packetName");
            var imageUpload = document.getElementById(
                "imageUpload"); // Make sure the input element for the image has id="image"
            var desk = document.getElementById("desk")
            var packetName = packetName.value;
            var imageUpload = imageUpload.value;
            var desk = desk.value;

            if (packetName === "" || imageUpload === "" || desk === "") {
                alertInputRequired();
                return;
            }

            if (packetName !== "" && imageUpload !== "" && desk !== "") {
                alertDataEnteredSuccessfully();
                return;
            }

            // Perform other actions if all fields are filled
            console.log("packet Name:", packetName);
            console.log("Desk Value:", desk);
            console.log("Image Value:", imageUpload);
        }

    </script>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Add Catering Packet</h1>
    <x-cmsInputBox label="Packet Name" title="Add Packet Name" id="packetName" value="" />
    <x-cmsTextArea label="Description" id="desk" title="Add Description" value="" />
    <div class="flex place-content-between items-end">
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." id="imageUpload" />
        <x-cmsButtonSave />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
</x-cmsLayout>
