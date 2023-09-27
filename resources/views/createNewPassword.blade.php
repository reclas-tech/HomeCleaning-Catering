<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        // enterNewPassword
        function enterNewPassword(title, message) {
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
                    <div class="w-full text-center text-base font-semibold ">${title || "Enter New Password"}</div>
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
        // reEnterNewPassword
        function reEnterNewPassword(title, message) {
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
                    <div class="w-full text-center text-base font-semibold ">${title || "Re-enter New Password"}</div>
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
        // Password Change Successfully
        function showAlertPasswordChangeSuccessfuly(title, message) {
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
                    <div class="w-full text-center text-base font-semibold ">${title || "Password Change Successfully"}</div>
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

        // showAlertRequiredField
        function showAlertRequiredField(title, message) {
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

        //Wrong otp
        function showAlertWrongNotFound(title, message) {
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

        // password not found
        function showAlertPasswordNotFound(title, message) {
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
                    <div class="w-full text-center text-base font-semibold ">${title || "Password Not Found"}</div>
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
        function toggleNewPasswordVisibility(action) {
            var passwordInput = document.getElementById("newPassword");

            var eyeOpenIcon1 = document.getElementById("eye-open1");
            var eyeCloseIcon1 = document.getElementById("eye-close1");

            if (action === "open") {
                passwordInput.type = "password";
                eyeOpenIcon1.style.display = "none";
                eyeCloseIcon1.style.display = "block";
            } else {
                passwordInput.type = "text";
                eyeOpenIcon1.style.display = "block";
                eyeCloseIcon1.style.display = "none";
            }
        }

        function toggleReNewPasswordVisibility(action) {
            var reEnterNewPasswordInput = document.getElementById("reEnterNewPassword");

            var eyeOpenIcon2 = document.getElementById("eye-open2");
            var eyeCloseIcon2 = document.getElementById("eye-close2");

            if (action === "open") {
                reEnterNewPasswordInput.type = "password";
                eyeOpenIcon2.style.display = "none";
                eyeCloseIcon2.style.display = "block";
            } else {
                reEnterNewPasswordInput.type = "text";
                eyeOpenIcon2.style.display = "block";
                eyeCloseIcon2.style.display = "none";
            }
        }

        // handle Form submission
        function handleSignIn() {
            var newPasswordInput = document.getElementById("newPassword");
            var newPassword = newPasswordInput.value;
            var reEnterNewPasswordInput = document.getElementById("reEnterNewPassword");
            var reEnterNewPassword = reEnterNewPasswordInput.value;

            if (newPassword === "" && reEnterNewPassword === "") {
                enterNewPassword();
                return;
            }
            if (newPassword === "" && reEnterNewPassword !== "") {
                enterNewPassword();
                return;
            }
            if (newPassword !== "" && reEnterNewPassword === "") {
                reEnterNewPassword();
                return;
            }
            if (newPassword === "admin" && reEnterNewPassword === "admin") {
                showAlertPasswordChangeSuccessfuly();
                return;
            }
            console.log("newPassword:", newPassword);
            console.log("reEnterNewPassword:", reEnterNewPassword);
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
                    <p class="text-2xl">CREATE NEW PASSWORD</p>
                    <div class="mt-[16px]">
                        <p class="text-base">Please enter your new password.</p>
                    </div>
                </div>
                <div class="text-black">
                    <div class="mb-[20px]">
                        <label class="block">
                            <span class="block text-base text-white mb-[8px]">
                                Enter New Password
                            </span>
                            <div class="password-container">
                                <input type="password" name="newPassword" id="newPassword"
                                    class="h-[47px] px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                    placeholder="*********" />
                                <button class="eye-icon" id="eye-open1" onclick="toggleNewPasswordVisibility('open')">
                                    <svg id="eye-open1" width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-eye-fill cursor-pointer text-[#8F8F8F]" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </button>
                                <button class="eye-icon" id="eye-close1" onclick="toggleNewPasswordVisibility('close')">
                                    <svg id="eye-icon" width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-eye-fill text-[#8F8F8F]" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                                        <path
                                            d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z" />
                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z" />
                                    </svg>
                                </button>
                            </div>
                        </label>
                    </div>
                    <div class="mb-[32px]">
                        <label class="block">
                            <span class="block text-base text-white mb-[8px]">
                                Re-enter New Password
                            </span>
                            <div class="password-container">
                                <input type="password" name="reEnterNewPassword" id="reEnterNewPassword"
                                    class="h-[47px] px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                    placeholder="*********" />
                                <button class="eye-icon" id="eye-open2" onclick="toggleReNewPasswordVisibility('open')">
                                    <svg id="eye-open" width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-eye-fill cursor-pointer text-[#8F8F8F]" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </button>
                                <button class="eye-icon" id="eye-close2"
                                    onclick="toggleReNewPasswordVisibility('close')">
                                    <svg id="eye-icon" width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-eye-fill text-[#8F8F8F]" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z" />
                                        <path
                                            d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z" />
                                        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z" />
                                    </svg>
                                </button>
                            </div>
                        </label>
                    </div>
                </div>
                <button type="button"
                    class="w-full h-[52px] text-base text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-blue-300 px-5 py-2.5 mr-2 mb-2 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] rounded transition duration-300"
                    onclick="handleSignIn()">Change Password</button>
            </div>
        </div>
        <x-cmsBgLogin />
    </div>
    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>

    <script></script>
</body>

</html>
