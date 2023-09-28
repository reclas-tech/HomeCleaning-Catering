<x-cmsLayout>
    <h1 class="text-3xl font-bold p-2 mt-2">Selamat datang, di CMS Panel</h1>
    <div class="mt-6">
        <div class="flex justify-center">
            <x-cmsDashboardGroup show="2" title="Home Cleaning" button1="Service" ref1="cmsServices"
                button2="Organigram" ref2="cmsOrganigram" img="cleaningLogo" />
            <x-cmsDashboardGroup show="2" title="Catering" button1="Packet" ref1="cmsCateringPacket"
                button2="Photo Gallery" ref2="cmsCateringPhoto" img="cateringLogo" />
        </div>
        <div class="flex justify-center">
            <x-cmsDashboardGroup show="1" title="Company" button1="Working Company" ref1="cmsWorkingCompanies"
                img="companyLogo" />
        </div>
    </div>
</x-cmsLayout>
