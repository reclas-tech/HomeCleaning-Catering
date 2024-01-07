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
            cmsNavbarPrimary:'#0062D1',
          }
          
        }
      }
    }
    </script>
    <x-alertDataEditedSuccessfully />
    <x-alertDataEnteredSuccessfully />
    <x-alertInputRequired />
    <x-alertSuccessLogin />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('assets/logoelynaz.png') }}" type="image/x-icon">
</head>
<body>
    <x-side-bar/>
    <div class="sm:ml-64">
        <x-navbarCms/>
        <div class="p-4 mx-4">
          {{ $slot }}
        </div>
    </div>
    <div id="modalContainer"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</body>
</html>