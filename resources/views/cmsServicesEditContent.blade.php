<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        cmsSidebarPrimary: '#2186FF',
                        cmsNavbarPrimary: '#0062D1',
                    }
                }
            }
        }

    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <title>Edit Content</title>
    <style>
        .transparent-icon {
            opacity: 0;
        }

    </style>
</head>

<body>
    <x-side-bar />
    <div class="sm:ml-64">
        <x-navbarCms />
    </div>
    <div class="">
        <slot>
            <p class="ml-[300px] mt-[25px] text-3xl font-semibold">Edit Home Cleaning Services</p>

            <x-cmsInputBox label="Services Name" title="Add Services Name" />
    </div>
    <x-cmsAddPhoto title="Add Photo" subTitle="Add
                    Photo" desk="No photo." />
    <x-cmsButtonSave />
    </slot>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
    <script>
        // handle Form Add
        function handleAdd() {
            var name = document.getElementById("name");
            var description = document.getElementById("description");
            var imageUpload = document.getElementById("imageUpload");
            var name = name.value;
            var description = description.value;
            var imageUpload = imageUpload.value;
            if (name !== "" && imageUpload === "" && position === "") {
                console.log("testtt")
                return;
            }
            console.log("Name:", name);
            console.log("description:", description);
            console.log("imageUpload:", imageUpload);
        }

    </script>
</body>

</html>
