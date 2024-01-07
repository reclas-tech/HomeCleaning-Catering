<script>
    // alertInputRequired
    function alertInputRequired(title, message) {
        const modalContainer = document.getElementById("modalContainer");
        const modal = document.createElement("div");
        modal.id = "customModal";
        modal.className =
            "hidden fixed bottom-0 right-0 bg-opacity-75 bg-white flex justify-center items-center mb-14 mr-12 z-[99]";
        modal.innerHTML = `
    <button id="customModalClose">
        <div class="w-60 h-14 px-4 py-2.5 bg-white rounded shadow justify-between items-center inline-flex">
            <div class="h-9 relative">
                <div class="w-52 h-9 left-0 top-0 absolute justify-between items-center gap-4 inline-flex">
                    <svg width="36" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.1998 10H16.7998V21H19.1998V10Z" fill="#F4DE12" />
                        <path d="M19.1998 23H16.7998V25H19.1998V23Z" fill="#F4DE12" />
                        <path
                            d="M19.3511 0H16.649L0 26.8234V30H36V26.8234L19.3511 0ZM33.6 28H2.4V27.3099L18 2.17663L33.6 27.3099V28Z"
                            fill="#F4DE12" />
                    </svg>

                    <div class="w-full text-center text-base font-semibold ">${title || "Input Required Field"}</div>
                    <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.0001 0.990556L14.0094 0L7.50004 6.5094L0.990643 0L0 0.990556L6.50945 7.5L0 14.0094L0.990643 15L7.50004 8.4906L14.0094 15L15.0001 14.0094L8.49064 7.5L15.0001 0.990556Z"
                            fill="#404040" />
                    </svg>
                </div>
            </div>
        </div>
    </button>
    `;
        modalContainer.appendChild(modal);
        const modalClose = modal.querySelector("#customModalClose");
        modal.style.display = "flex";
        modalClose.addEventListener("click", function () {
            modalContainer.removeChild(modal);
        });
        modal.style.display = "flex";
        modal.classList.add("slide-in");
        modalClose.addEventListener("click", function () {
            modal.classList.remove("slide-in");
            modal.classList.add("slide-out");

            modal.addEventListener("animationend", function () {
                modalContainer.removeChild(modal);
            });
        });
        setTimeout(function () {
            modal.classList.remove("slide-in");
            modal.classList.add("slide-out");
            modal.addEventListener("animationend", function () {
                modalContainer.removeChild(modal);
            });
        }, 2000);
    }

</script>
