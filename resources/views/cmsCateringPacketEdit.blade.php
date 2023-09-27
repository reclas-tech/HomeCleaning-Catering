<x-cmsLayout>
    <h1 class="text-3xl font-semibold mt-2 mb-8">Edit Catering Packet</h1>
    <x-cmsInputBox label="Packet Name" title="Add Packet Name" id="packetName" value="Dari Backend"/>
    <x-cmsTextArea label="Description" id="description" title="Add Description" value="Dari Backend" />
    <div class="flex place-content-between items-end">
        <x-cmsAddPhoto title="Add Photo" subTitle="AddPhoto" desk="No photo." />
        <x-cmsButtonSave/>
    </div>
</x-cmsLayout>