</style>
<div>
    <aside id="default-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-cmsSidebarPrimary ">
            <ul class="flex flex-col space-y-2 font-medium h-full">
                <li>
                    <div class="logoCms bg-gray-100 text-center">
                        Logo Perusahaan
                    </div>
                </li>
                <li>
                    <x-cmsButtonGroup show="1" head="Company" title1="Working Companies" ref1="#"/>
                </li>
                <li>
                    <x-cmsButtonGroup show="2" head="Catering" title1="Product" title2="Menu" ref1="#" ref2="#"/>
                </li>
                <li>
                    <x-cmsButtonGroup show="2" head="Home Cleaning" title1="Service" title2="Organigram" ref1="#" ref2="#"/>
                </li>
                <li class="absolute inset-x-6 bottom-0">
                    <div class="w-52 py-1 mb-5 flex items-center justify-center rounded-md bg-[#F02016] text-white">
                        Logout
                    </div>
                </li>
            </ul>
        </div>
    </aside>
</div>
