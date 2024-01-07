<script>
    //Wrong otp
    function alertOTPWrongNotFound(title, message) {
        const modalContainer = document.getElementById("modalContainer");
        const modal = document.createElement("div");
        modal.id = "customModal";
        modal.className =
            "hidden fixed bottom-0 right-0 bg-opacity-75 bg-white flex justify-center items-center mb-5 mr-12 z-[99]";
        modal.innerHTML = `
            <button id="customModalClose">
            <div class="w-60 h-14 px-4 py-2.5 bg-white rounded shadow justify-between items-center inline-flex">
            <div class="h-9 relative">
                <div class="w-52 h-9 left-0 top-0 absolute justify-between items-center gap-4 inline-flex">
                    <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M26.7141 18.5L39.0491 7.09014C40.317 5.91733 40.317 4.01587 39.0491 2.84306L36.9264 0.87961C35.6585 -0.293203 33.6029 -0.293203 32.335 0.87961L20 12.2895L7.66502 0.87961C6.39712 -0.293203 4.34148 -0.293203 3.07358 0.87961L0.950929 2.84306C-0.316976 4.01587 -0.316976 5.91733 0.950929 7.09014L13.2859 18.5L0.950929 29.9099C-0.316976 31.0827 -0.316976 32.9841 0.950929 34.1569L3.07358 36.1204C4.34148 37.2932 6.39712 37.2932 7.66502 36.1204L20 24.7105L32.335 36.1204C33.6029 37.2932 35.6585 37.2932 36.9264 36.1204L39.0491 34.1569C40.317 32.9841 40.317 31.0827 39.0491 29.9099L26.7141 18.5Z"
                            fill="#FF473E" />
                    </svg>
                    <div class="w-full text-center text-base font-semibold ">${title || "Wrong OTP Code"}</div>
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
