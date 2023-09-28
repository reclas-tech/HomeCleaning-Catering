<script>
    // OTP Code Has Been Sent
    function alertOTPCodeHasBeenSent(title, message) {
        const modalContainer = document.getElementById("modalContainer");
        const modal = document.createElement("div");
        modal.id = "customModal";
        modal.className =
            "hidden fixed bottom-0 right-0 bg-opacity-75 bg-white flex justify-center items-center mb-5 mr-12";
        modal.innerHTML = `
            <button id="customModalClose">
            <div class="w-60 h-14 px-4 py-2.5 bg-white rounded shadow justify-between items-center inline-flex">
            <div class="h-9 relative">
                <div class="w-52 h-9 left-0 top-0 absolute justify-between items-center gap-4 inline-flex">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23 46C35.7025 46 46 35.7025 46 23C46 10.2975 35.7025 0 23 0C10.2975 0 0 10.2975 0 23C0 35.7025 10.2975 46 23 46Z"
                            fill="#4BD37B" />
                        <path
                            d="M33.7337 9.20001L17.6337 25.76L12.2671 20.24L6.90039 25.76L17.6337 36.8L39.1004 14.72L33.7337 9.20001Z"
                            fill="white" />
                    </svg>
                    <div class="w-full text-center text-base font-semibold ">${title || "OTP Code Has Been Sent"}</div>
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
