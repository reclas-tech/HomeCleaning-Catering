<x-cmsLayout>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Add Home Cleaning Services</h1>
    <x-cmsInputBox label="Service Name" title="Add Service Name" id="name" value="" />
    <x-cmsTextArea label="Description" title="Add Description" id="position" value="" />
    <div class="flex place-content-between items-end">
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." />
        <x-cmsButtonSave />
    </div>
</x-cmsLayout>
