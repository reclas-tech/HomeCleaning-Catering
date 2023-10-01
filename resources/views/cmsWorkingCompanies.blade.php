<x-cmsLayout>
    <div class="p-4 ml-4 mr-4">
        <h1 class="text-3xl font-semibold p-2 mt-2">Working Companies</h1>
        <x-cmsTable :top="['Company Name']" exception="id" addRef="cmsWorkingCompaniesAddContent"/>
    </div>
</x-cmsLayout>
