<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="description" content="PT Elynaz Indomasr Global Jasa Home Cleaning and Catering Indonesia Bandar Lampung">
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
    <title>Dashboard</title>
    <link rel="shortcut icon" href="{{ asset('assets/logoelynaz.png') }}" type="image/x-icon">
</head>
<body>
    <div class="">
        <x-navbarTampilan/>
        {{ $slot }}
        <x-footerTampilan/>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</body>
</html>