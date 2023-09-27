<x-cmsLayout>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Add Home Cleaning Organigram</h1>
    <x-cmsInputBox label="Name" title="Add Name" id="name" value=""/>
    <x-cmsInputBox label="Position" title="Add Position" id="position" value=""/>
    <div class="flex place-content-between items-end">
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." />
        <x-cmsButtonSave/>
    </div>
</x-cmsLayout>