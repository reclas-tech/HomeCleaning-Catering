<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create New Password</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <x-alertInputRequired />
    <x-alertEnterNewPassword />
    <x-alertReEnterNewPassword />
    <x-alertPasswordChangeSuccessfuly />
    <x-alertPasswordNotFound />
    <script>
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
            <form action="{{ url('/createNewPassword') }}" method="POST" class="m-auto flex w-2/4 flex-col">
                @csrf
                <input type="hidden" name="email" value="{{ $email }}">
                <input type="hidden" name="otp" value="{{ $otp }}">
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
                                <input type="password" name="password" id="newPassword"
                                    class="h-[47px] px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                    placeholder="*********" oninvalid="this.setCustomValidity('Masukkan Kata Sandi Baru, Minimal 6 Karakter'); alertEnterNewPassword('Masukkan Kata Sandi Baru')" oninput="this.setCustomValidity('')" minlength="6" required />
                                <button type="button" class="eye-icon" id="eye-open1" onclick="toggleNewPasswordVisibility('open')">
                                    <svg id="eye-open1" width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-eye-fill cursor-pointer text-[#8F8F8F]" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </button>
                                <button type="button" class="eye-icon" id="eye-close1" onclick="toggleNewPasswordVisibility('close')">
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
                                <input type="password" name="password_confirmation" id="reEnterNewPassword"
                                    class="h-[47px] px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                    placeholder="*********" oninvalid="this.setCustomValidity('Masukkan Konfirmasi Kata Sandi Baru'); alertReEnterNewPassword('Masukkan Kata Sandi Baru')" oninput="this.setCustomValidity('')" minlength="6" required />
                                <button type="button" class="eye-icon" id="eye-open2" onclick="toggleReNewPasswordVisibility('open')">
                                    <svg id="eye-open" width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-eye-fill cursor-pointer text-[#8F8F8F]" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </button>
                                <button type="button" class="eye-icon" id="eye-close2"
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
                <button type="submit" id="signIn"
                    class="w-full h-[52px] text-base text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-blue-300 px-5 py-2.5 mr-2 mb-2 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] rounded transition duration-300">Change Password</button>
            </form>
        </div>
        <x-cmsBgLogin />
    </div>

    @if (session()->has('successCheckOTP'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertOTPCodeHasBeenSent('Silahkan buat kata sandi baru');
            });
        </script>
    @endif

    @if (session()->has('failedCreateNewPassword'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertPasswordNotFound('Gagal membuat kata sandi baru');
            });
        </script>
    @endif

    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>

</body>

</html>
