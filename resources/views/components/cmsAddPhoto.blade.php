<div class="">
    <p class="text-xl font-semibold">{{$title}}</p>
    <div class="flex justify-between">
        <div class="flex">
            <div class="inline-block text-left bg-white w-72 relative rounded-md">
            <input type="file" id="imageUpload" name="image" class="absolute opacity-0 cursor-pointer" oninvalid="this.setCustomValidity('Input your image'); alertInputRequired()" onchange="this.setCustomValidity('')" accept="image/*" required >
            <label for="imageUpload"
                class="bg-[#FA8F21] hover:bg-dodgerblue text-white hover:text-white inline-block mr-2 px-6 py-2 rounded-md cursor-pointer">{{$subTitle}}</label>
            <span id="imageStatus" class="text-black">{{$desk}}</span>
        </div>
    </div>

    <script>
        var input = document.getElementById('imageUpload');
        var imageStatus = document.getElementById('imageStatus');
        input.addEventListener('change', function () {
            if (input.files.length > 0) {
                imageStatus.innerText = input.files[0].name;
            } else {
                imageStatus.innerText = "No photo.";
            }
        });
    </script>
    </div>
</div>
    
    