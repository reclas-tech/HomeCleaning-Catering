<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Page</title>
    <link rel="shortcut icon" href="{{ asset('assets/logoelynaz.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <x-alertInputRequired />
    <x-alertDataEnteredSuccessfully />
    <x-alertModalEmailPasswordWrong />
    <x-alertPasswordNotFound />
    <x-alertPasswordChangeSuccessfuly />
    <x-alertWrongEmailPassword />
    <x-alertSuccessLogin />
    <x-alertOTPCodeHasBeenSent />
    <x-alertEnterOTPCode />
    <x-alertEnterNewPassword />
    <x-alertLogout />
    <script>
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
        <form action="{{ url('/login') }}" method="POST" class="left w-1/2 flex-col justify-between bg-[#0062D1] h-full flex">
            @csrf
            <div class="m-auto flex w-2/4 flex-col">
                <div class="heading mb-[29px] text-center text-white">
                    <p class="text-3xl">LOGIN CMS PANEL</p>
                    <div class="mt-[16px]">
                        <p class="text-base">Please enter your credentials.</p>
                    </div>
                </div>
                <div class="text-black">
                    <div class="mb-[20px]">
                        <label class="block">
                            <span class="block text-base text-white mb-[8px]">
                                Email
                            </span>
                            <input type="email" id="email" name="email"
                                class="h-[47px] px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                placeholder="example@company.com" oninvalid="this.setCustomValidity('Input your email address'); alertInputRequired()" oninput="this.setCustomValidity('')" maxlength="255" value="{{ old('email') }}" required />
                        </label>
                    </div>
                    <div class="mb-[20px]">
                        <label class="block">
                            <span class="block text-base text-white mb-[8px]">
                                Password
                            </span>
                            <div class="password-container">
                                <input type="password" name="password" id="password"
                                    class="h-[47px] px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1"
                                    placeholder="*********" oninvalid="this.setCustomValidity('Input your password, at least 6 character'); alertInputRequired()" oninput="this.setCustomValidity('')" minLength="6" maxlength="255" required />
                                <button type="button" class="eye-icon" id="eye-open" onclick="togglePasswordVisibility('open')">
                                    <svg id="eye-open" width="1em" height="1em" viewBox="0 0 16 16"
                                        class="bi bi-eye-fill cursor-pointer text-[#8F8F8F]" fill="currentColor"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path fill-rule="evenodd"
                                            d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>
                                </button>
                                <button type="button" class="eye-icon" id="eye-close" onclick="togglePasswordVisibility('close')">
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
                <div class="justify-end inline-flex mb-[22px]">
                    <a href="/forgetPassword">
                        <div class="text-white text-base">Forgot password</div>
                    </a>
                </div>
                <button type="submit" id="signIn"
                    class="w-full h-[52px] text-base text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-blue-300 px-5 py-2.5 mr-2 mb-2 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] rounded transition duration-300">Sign In</button>
            </div>
        </form>
        <x-cmsBgLogin />
    </div>

    @if (session()->has('failedLogin'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertModalEmailPasswordWrong();
            });
        </script>
    @endif

    @if (session()->has('successLogout'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertLogout();
            });
        </script>
    @endif

    @if (session()->has('successCreateNewPassword'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertPasswordChangeSuccessfuly();
            });
        </script>
    @endif

    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>
    <img src={asset=({path})} alt="">
</body>

</html>
