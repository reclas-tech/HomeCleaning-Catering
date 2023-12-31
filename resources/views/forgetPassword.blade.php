<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forget Password</title>
    <link rel="shortcut icon" href="{{ asset('assets/logoelynaz.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <x-alertOTPCodeHasBeenSent/>
    <x-alertEnterEmail/>
    <x-alertEmailNotFound/>
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
            <form action="{{ url('/forgetPassword') }}" method="POST" class="m-auto flex w-2/4 flex-col">
                @csrf
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
                                placeholder="example@company.com" oninvalid="this.setCustomValidity('Input your email address'); alertEnterEmail()" oninput="this.setCustomValidity('')" maxlength="255" value="{{ old('email') }}" required />
                        </label>
                    </div>
                </div>
                <button type="submit" id="sendEmail"
                    class="w-full h-[52px] text-base text-white bg-[#FA8F21] hover:bg-[#D87815] focus:ring-4 focus:ring-blue-300 px-5 py-2.5 mr-2 mb-2 dark:bg-[#FA8F21] dark:hover:bg-[#D87815] rounded transition duration-300">Send Email</button>
            </form>
        </div>
        <x-cmsBgLogin />
    </div>

    @if (session()->has('failedForgetPassword'))
        <script>
            document.addEventListener("DOMContentLoaded", function(event) { 
                alertEmailNotFound();
            });
        </script>
    @endif

    <!-- Custom Modal Container -->
    <div id="modalContainer"></div>

</body>

</html>
