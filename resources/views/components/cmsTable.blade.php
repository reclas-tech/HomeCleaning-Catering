<?php
    $test = [
        'Status' => 200,
        'Data' => [
            [
                'id' => '1',
                'Nama' => 'Rizky',
                'No' => '1'
],
[
                'id' => '1',
                'Nama' => 'Rizky',
                'No' => '1'
],
[
                'id' => '1',
                'Nama' => 'Rizky',
                'No' => '1'
],
        ]
    ]
?>

<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase">
            <tr class="border-b-2 border-black">
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                @foreach ($top as $thead)
                    <th scope="col" class="px-6 py-3">
                        {{ $thead }}
                    </th>
                @endforeach 
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if($test['Data'] === [] )
                <tr class="">
                    <td colspan="{{sizeof($top)+2}}" class="text-lg text-center">
                        <p class="p-2">There Is No Data</p>
                    </td>
                </tr>
            @else
                @for ($i = 0; $i < sizeof($test['Data']); $i++)
                <tr class="bg-white border-b">
                <td class="px-6 py-4">
                    {{$i+1}}
                </td>
                        @foreach($test['Data'][$i] as $key => $value)
                            @if ($key !== $exception)
                            <td class="px-6 py-4">
                                {{$value}}
                            </td>
                            @endif
                        @endforeach
                        <td class="px-1 py-2">
                            <a href="/cms/edit/{{$test['Data'][$i]['id']}}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                            <a href="/cms/edit/{{$test['Data'][$i]['id']}}" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</a>
                        </td>
                </tr>
                @endfor
            @endif
        </tbody>
    </table>
</div>