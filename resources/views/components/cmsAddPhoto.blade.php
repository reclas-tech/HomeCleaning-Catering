    <p class="ml-[300px] text-[24px] font-semibold mt-[13%]">{{$title}}</p>
    <div class="ml-[300px] mr-[70px] flex justify-between">
        <div class="flex">
            <div class="inline-block text-left bg-white w-72 relative rounded-md">
                <input type="file" id="imageUpload" name="imageFile" class="absolute opacity-0 cursor-pointer">
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
