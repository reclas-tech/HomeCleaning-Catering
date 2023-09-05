<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.css" rel="stylesheet" />
</head>
<script>
    tailwind.config = {
        extends: {
            carousel: {
                option: {
                    items: 2
                }
            }
        }
    }
</script>
<body>
<section>
        <div class="flex">
            <div class="w-1/12 flex items-center">
                <div class="w-full text-right">
                    <button onclick="prev()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg mr-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="sliderContainer" class="w-10/12 overflow-hidden">
                <ul id="slider" class="flex w-full">
                    <li class="p-5">
                        <div class="border p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/1.jpeg" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">Some Big Heading.</h2>
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere animi earum quasi
                                deleniti, maxime numquam.
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read
                                More</button>
                        </div>
                    </li>
                    <li class="p-5 height-1">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/2.jpeg" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">Some Big Heading.</h2>
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere animi earum quasi
                                deleniti, maxime numquam.
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read
                                More</button>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/3.webp" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">Some Big Heading.</h2>
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere animi earum quasi
                                deleniti, maxime numquam.
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read
                                More</button>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/1.jpeg" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">Some Big Heading.</h2>
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere animi earum quasi
                                deleniti, maxime numquam.
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read
                                More</button>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/2.jpeg" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">Some Big Heading.</h2>
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere animi earum quasi
                                deleniti, maxime numquam.
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read
                                More</button>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/3.webp" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">Some Big Heading.</h2>
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere animi earum quasi
                                deleniti, maxime numquam.
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read
                                More</button>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/1.jpeg" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">Some Big Heading.</h2>
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere animi earum quasi
                                deleniti, maxime numquam.
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read
                                More</button>
                        </div>
                    </li>
                    <li class="p-5">
                        <div class="border rounded-lg p-5 h-full">
                            <img class="h-50 w-full object-cover rounded-md" src="./images/2.jpeg" alt="">
                            <h2 class="mt-2 text-2xl font-bold text-gray-700">Some Big Heading.</h2>
                            <p class="mt-2 text-gray-500">
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facere animi earum quasi
                                deleniti, maxime numquam.
                            </p>
                            <button class="mt-4 px-6 py-3 rounded-md bg-green-600 text-white font-bold">Read
                                More</button>
                        </div>
                    </li>

                </ul>
            </div>
            <div class="w-1/12 flex items-center">
                <div class="w-full">
                    <button onclick="next()" class="p-3 rounded-full bg-white border border-gray-100 shadow-lg ml-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <script>
    let sliderContainer = document.getElementById('sliderContainer');
    let slider = document.getElementById('slider');
    let cards = slider.getElementsByTagName('li');

    let elementsToShow = 4;


    let sliderContainerWidth = sliderContainer.clientWidth;

    let cardWidth = sliderContainerWidth / elementsToShow;

    slider.style.width = cards.length * cardWidth + 'px';
    slider.style.transition='margin';
    slider.style.transitionDuration='1s';

    for (let index = 0; index < cards.length; index++) {
        const element = cards[index];
        element.style.width = cardWidth + 'px';
    }

    function prev() {
        if (+slider.style.marginLeft.slice(0, -2) != -cardWidth * (cards.length - elementsToShow))
            slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) - cardWidth) + 'px';
    }

    function next() {
        if (+slider.style.marginLeft.slice(0, -2) != 0)
            slider.style.marginLeft = ((+slider.style.marginLeft.slice(0, -2)) + cardWidth) + 'px';
    }

    // function autoPlay(){
    //     prev()
        
    //     if (+slider.style.marginLeft.slice(0, -2) === -cardWidth * (cards.length - elementsToShow)){
    //         slider.style.marginLeft = "0px";
    //     }   
        
    //     setTimeout(() => {
    //         autoPlay();
    //     }, 3000);
    // }

    // setTimeout(() => {
    //     autoPlay();
    // }, 3000);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.0/flowbite.min.js"></script>
</body>
</html>