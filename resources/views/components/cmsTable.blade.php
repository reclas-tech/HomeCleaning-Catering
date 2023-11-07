<div class="flex justify-end my-2">
    <x-cmsSearch :value="$search" />
    <x-cmsButton ref="{{$addRef}}" color="#FA8F21" width="32" title="+Add Data" extendClass="ms-2 me-4 text-white"/> 
</div>
<div class="relative overflow-x-auto"> 
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase">
            <tr class="border-b-2 border-black">
                <th scope="col" class="px-5 py-3">
                    No
                </th>
                @foreach ($top as $thead)
                    <th scope="col" class="px-6 py-3">
                        {{ $thead }}
                    </th>
                @endforeach 
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @if($test['data'] === [] )
                <tr class="">
                    <td colspan="{{sizeof($top)+2}}" class="text-lg text-center">
                        <p class="p-2">There Is No Data</p>
                    </td>
                </tr>
            @else
                @for ($i = 0; $i < sizeof($test['data']); $i++)
                <tr class="bg-white border-b-2 border-black">
                <td class="px-5 py-4 text-gray-700 font-bold truncate text-center">
                    {{ $i + 1 + (($currentPage - 1) * 10)}}
                </td>
                        @foreach($test['data'][$i] as $key => $value)
                            @if ($key !== $exception)
                            <td class="px-6 py-4">
                                <p class="text-gray-700 font-semibold truncate max-w-[22rem]">
                                    {{$value}}
                                </p>
                            </td>
                            @endif
                        @endforeach
                        <td class="px-2.5 py-2 w-fit flex flex-row gap-1 items-center justify-center">
                            <a href="{{ url() -> current() }}/edit/{{ $test['data'][$i]['id'] }}" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-3 py-2.5 dark:focus:ring-yellow-900">Edit</a>
                            <button value="{{ $test['data'][$i]['id'] }}" onclick="deleteData(this)" data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                        </td>
                </tr>
                @endfor
            @endif
        </tbody>
    </table>
    <div class="flex justify-center my-2">
        <nav aria-label="Page navigation example">
            <ul class="inline-flex -space-x-px text-sm">
              <li>
                <a @if ($prevPage) href="{{ $prevPage }}" @endif class="flex items-center justify-center px-3 h-8 ml-0 leading-tight"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="13" viewBox="0 0 12 13" fill="none">
                    <path d="M11 1L2 6.5L11 12" stroke="#FA8F21" stroke-width="2"/>
                    </svg></a>
              </li>
              @if ($currentPage - 2 > 1)
                <li>
                    <a href="{{ url() -> current() }}?page=1" class="flex items-center justify-center px-3 h-8 leading-tight font-semibold">1</a>
                </li>
                @if ($currentPage - 2 !== 1)
                <li>
                    <p>...</p>
                </li>
                @endif
              @endif
              @for ($i = 1; $i <= $allPage; $i++)
                @if ($i === $currentPage - 1 || $i === $currentPage + 1)
                  <li>
                    <a href="{{ url() -> current() }}?page={{ $i }}" class="flex items-center justify-center px-3 h-8 leading-tight font-semibold">{{ $i }}</a>
                  </li>
                @elseif ($i === $currentPage)
                    <li>
                        <a class="flex items-center justify-center px-3 h-8 leading-tight font-semibold">{{ $i }}</a>
                    </li>
                @endif
              @endfor
              @if ($currentPage + 2 < $allPage)
                @if ($currentPage + 2 !== $allPage)
                <li>
                    <p>...</p>
                </li>
                @endif
                <li>
                    <a href="{{ url() -> current() }}?page={{ $allPage }}" class="flex items-center justify-center px-3 h-8 leading-tight font-semibold">{{ $allPage }}</a>
                </li>
              @endif
              <li>
                <a @if ($nextPage) href="{{ $nextPage }}" @endif class="flex items-center justify-center px-3 h-8 ml-0 leading-tight"><svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 15 14" fill="none">
                    <path d="M1 1L12 6.61441L1 12.2288" stroke="#FA8F21" stroke-width="2"/>
                    </svg></a>
              </li>
            </ul>
          </nav>
    </div>
</div>
<div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-2 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <div class="relative bg-white rounded-lg shadow w-[28rem]">
            <div class="p-3 text-center">
                <div class="flex justify-between items-center mb-5 px-4">
                    <div class="flex justify-center items-center">
                        <img src={{ asset('assets/tampilanAssets/trashLogo.svg') }} alt="">
                        <h3 class="ms-3 text-lg font-semibold">Are you sure to delete this data?</h3>
                    </div>
                    <button type="button" data-modal-hide="popup-modal">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                            <path d="M15.0001 1.70689L14.0094 0.716339L7.50004 7.22574L0.990643 0.716339L0 1.70689L6.50945 8.21634L0 14.7258L0.990643 15.7163L7.50004 9.20694L14.0094 15.7163L15.0001 14.7258L8.49064 8.21634L15.0001 1.70689Z" fill="#404040"/>
                        </svg>
                    </button>
                </div>
                <button onclick="dataDelete()" data-modal-hide="popup-modal" type="button" class="text-white bg-[#FF473E] font-medium rounded-lg text-sm inline-flex items-center px-10 py-2 text-center mr-2">
                    YES
                </button>
                <button data-modal-hide="popup-modal" type="button" class="text-white bg-[#1B62B8] font-medium rounded-lg text-sm inline-flex items-center px-10 py-2 text-center mr-2">NO</button>
            </div>
        </div>
    </div>
</div>

<script>
    let deleteIndex = null;
    function deleteData (elmnt) {
        deleteIndex = elmnt.getAttribute('value');
    }
    function dataDelete () {
        fetch(window.location.origin + window.location.pathname + "/" + deleteIndex).then((res) => res.json()).then((data) => {
            if (!data.status) {
                alertInputRequired('Delete data failed');
            } else {
                alertDataEditedSuccessfully('Delete data successfully');
                setTimeout(
                    function(){
                        window.location.reload();
                    }, 800);
            }
        });
    }
</script>