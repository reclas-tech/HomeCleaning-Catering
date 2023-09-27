<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // Enter the Email
        function showAlertEntertheEmail(title, message) {
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
                    <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M26.7141 18.5L39.0491 7.09014C40.317 5.91733 40.317 4.01587 39.0491 2.84306L36.9264 0.87961C35.6585 -0.293203 33.6029 -0.293203 32.335 0.87961L20 12.2895L7.66502 0.87961C6.39712 -0.293203 4.34148 -0.293203 3.07358 0.87961L0.950929 2.84306C-0.316976 4.01587 -0.316976 5.91733 0.950929 7.09014L13.2859 18.5L0.950929 29.9099C-0.316976 31.0827 -0.316976 32.9841 0.950929 34.1569L3.07358 36.1204C4.34148 37.2932 6.39712 37.2932 7.66502 36.1204L20 24.7105L32.335 36.1204C33.6029 37.2932 35.6585 37.2932 36.9264 36.1204L39.0491 34.1569C40.317 32.9841 40.317 31.0827 39.0491 29.9099L26.7141 18.5Z"
                            fill="#FF473E" />
                    </svg>
                    <div class="w-full text-center text-base font-semibold ">${title || "Enter the Email"}</div>
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

        // OTP Code Has Been Sent
        function showAlertOTPCodeHasBeenSent(title, message) {
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

        // Email not found
        function showAlertEmailNotFound(title, message) {
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
                    <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M26.7141 18.5L39.0491 7.09014C40.317 5.91733 40.317 4.01587 39.0491 2.84306L36.9264 0.87961C35.6585 -0.293203 33.6029 -0.293203 32.335 0.87961L20 12.2895L7.66502 0.87961C6.39712 -0.293203 4.34148 -0.293203 3.07358 0.87961L0.950929 2.84306C-0.316976 4.01587 -0.316976 5.91733 0.950929 7.09014L13.2859 18.5L0.950929 29.9099C-0.316976 31.0827 -0.316976 32.9841 0.950929 34.1569L3.07358 36.1204C4.34148 37.2932 6.39712 37.2932 7.66502 36.1204L20 24.7105L32.335 36.1204C33.6029 37.2932 35.6585 37.2932 36.9264 36.1204L39.0491 34.1569C40.317 32.9841 40.317 31.0827 39.0491 29.9099L26.7141 18.5Z"
                            fill="#FF473E" />
                    </svg>
                    <div class="w-full text-center text-base font-semibold ">${title || "Email Not Found"}</div>
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


        // enter otp
        function showAlertEnterOTPCode(title, message) {
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
                    <svg width="40" height="37" viewBox="0 0 40 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M26.7141 18.5L39.0491 7.09014C40.317 5.91733 40.317 4.01587 39.0491 2.84306L36.9264 0.87961C35.6585 -0.293203 33.6029 -0.293203 32.335 0.87961L20 12.2895L7.66502 0.87961C6.39712 -0.293203 4.34148 -0.293203 3.07358 0.87961L0.950929 2.84306C-0.316976 4.01587 -0.316976 5.91733 0.950929 7.09014L13.2859 18.5L0.950929 29.9099C-0.316976 31.0827 -0.316976 32.9841 0.950929 34.1569L3.07358 36.1204C4.34148 37.2932 6.39712 37.2932 7.66502 36.1204L20 24.7105L32.335 36.1204C33.6029 37.2932 35.6585 37.2932 36.9264 36.1204L39.0491 34.1569C40.317 32.9841 40.317 31.0827 39.0491 29.9099L26.7141 18.5Z"
                            fill="#FF473E" />
                    </svg>
                    <div class="w-full text-center text-base font-semibold ">${title || "Enter the OTP Code"}</div>
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

        // fungtion lain
        function togglePasswordVisibility(action) {
            var passwordInput = document.getElementById("password");
            var eyeOpenIcon = document.getElementById("eye-open");
            var eyeCloseIcon = document.getElementById("eye-close");

            if (action === "open") {
                passwordInput.type = "text";
                eyeOpenIcon.style.display = "none";
                eyeCloseIcon.style.display = "block";
            } else {
                passwordInput.type = "password";
                eyeOpenIcon.style.display = "block";
                eyeCloseIcon.style.display = "none";
            }
        }

        // handle Form submission
        function handleSignIn() {
            var emailInput = document.getElementById("email");
            var email = emailInput.value;
            if (email === "") {
                showAlertEntertheEmail();
                return;
            } else if (email === "admin@gmail.com") {
                showAlertOTPCodeHasBeenSent();
                return;
            } else {
                showAlertEmailNotFound();
                return;
            }
            console.log("Email:", email);
        }

    </script>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        .password-container {
            position: relative;
        }

        .eye-icon {
            display: inline-block;
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            cursor: pointer;
        }

        #eye-close {
            display: none;
        }

        #customModal {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
        }

        #customModal .bg-white {
            max-width: 320px;
        }

        #customModal .bg-white {
            margin-left: auto;
            margin-right: auto;
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        @keyframes slideOut {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(100%);
            }
        }

        .slide-in {
            animation: slideIn 0.5s forwards;
        }

        .slide-out {
            animation: slideOut 0.5s forwards;
        }

    </style>
</head>

<body class="antialiased">

    <div class="m-0 box-border flex h-screen w-full bg-slate-500 p-0">
        <div class="left w-1/2 flex-col justify-between bg-[#0062D1] h-full flex">
            <div class="m-auto flex w-2/4 flex-col">
                <div class="heading mb-[29px] text-center text-white">
                    <p class="text-3xl">FORGET PASSWORD</p>
                    <div class="mt-[16px]">
                        <p class="text-base">Please enter your email.</p>
                    </div>
                </div>
                <div class="text-black">
                    <div class="mb-[26px]">
                        <label class="block">
                            <span class="block text-base text-white mb-[8px]">
                                Email
                            </span>
                            <input type="email" id="email" name="email"
                                class="h-[47px] px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="example@company.com" />
                        </label>
                    </div>
                </div>
                <button type="button" id="sendEmail"
                    class="w-full h-[52px] text-base text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-blue-300 px-5 py-2.5 mr-2 mb-2 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] rounded transition duration-300"
                    onclick="handleSignIn()">Send Email</button>
            </div>
        </div>
        <x-cmsBgLogin />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>

    <script>
        const sendEmail = document.getElementById("sendEmail");

        sendEmail.addEventListener("click", () => {
            window.location.href = "forgetPasswordOTP";
        });

    </script>
</body>

</html>
