<?php 
$cardsData = [
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
                    [
                        'Image' => asset('assets/menu.png'),
                    ],
];
?>

<div class="grid grid-cols-2 md:grid-cols-3 gap-6 items-center justify-items-center">
    @foreach($cardsData as $index => $item)
    <div>
        <img class="h-auto max-w-full rounded-lg" src="{{$item['Image']}}" alt="">
    </div>
    @endforeach
</div>
