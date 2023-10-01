<div class="mb-4">
    <p class="text-xl font-semibold mb-3">{{$label}}</p>
    <div class="relative">
        <input type="text" id="{{$id}}" value="{{$value}}"
        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-black bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-black dark:border-gray-600 dark:focus:border-bg-[#0062D1] focus:outline-none focus:ring-0 focus:border-bg-[#0062D1] peer"
        placeholder=" " />
        <label for="{{$id}}"
        class="absolute text-sm text-[#0062D1] dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white px-2 peer-focus:px-2 peer-focus:text-[#0062D1] peer-focus:dark:text-[#0062D1] peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
        {{$title}}
        </label>
    </div>
</div>