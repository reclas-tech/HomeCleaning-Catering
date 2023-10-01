<x-cmsLayout>
    <h1 class="text-3xl font-semibold p-2 mt-2">Home Cleaning Organigram</h1>
    <x-cmsTable :top="['Name','Position']" exception="id" addRef="/cmsOrganigramAdd"/>
</x-cmsLayout>