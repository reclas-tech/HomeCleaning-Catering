<div class="ml-[300px]">
    <button id="addButton" style="visibility: hidden;" onclick="handleAdd()">
        <div
            class="w-[158px] h-[40px] py-2 rounded-md bg-[#0062D1] text-white text-center text-[14px] hover:bg-amber-600">
            Save
        </div>
    </button>
</div>
</div>

<script>
    const labelInput = document.getElementById("name");
    const addButton = document.getElementById("addButton");

    labelInput.addEventListener("input", () => {
        if (labelInput.value.trim() !== "") {
            addButton.style.visibility = "visible";
        } else {
            addButton.style.visibility = "hidden";
        }
    });

</script>
