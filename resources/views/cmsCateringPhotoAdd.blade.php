<x-cmsLayout>
    <x-alertInputRequired />
    <x-alertDataEnteredSuccessfully />
    <script>
        // handle Form submission
        function handleSignIn() {
            // var packetName = document.getElementById("packetName");
            var imageUpload = document.getElementById(
                "imageUpload"); // Make sure the input element for the image has id="image"
            // var desk = document.getElementById("desk")
            // var packetName = packetName.value;
            var imageUpload = imageUpload.value;
            // var desk = desk.value;

            if (imageUpload === "") {
                alertInputRequired();
                return;
            }

            if (imageUpload !== "") {
                alertDataEnteredSuccessfully();
                return;
            }

            // Perform other actions if all fields are filled
            // console.log("packet Name:", packetName);
            // console.log("Desk Value:", desk);
            console.log("Image Value:", imageUpload);
        }

    </script>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Add Catering Photo</h1>
    <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." />
    <div class="min-h-[45vh] flex items-end justify-end">
        <x-cmsButtonSave />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
</x-cmsLayout>
