<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="tailcss.css">
        <link rel="stylesheet" href="style.css">

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/zxcvbn/4.4.2/zxcvbn.js"></script>

        <style>@import url('https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.min.css');</style>
    </head>

    <body class="bg-blue-100">
    <!--
        <div class="grid grid-cols-1 lg:grid-cols-3">
            <div class=" lg:items-center lg:flex min-h-screen"></div>
            <div class="bg-gray-400 lg:items-center lg:flex min-h-screen p-8">
                <div class="flex-grow flex-row text-center ">
                        <p class="font-serif text-4xl">YUMK - Intranet</h1>
                </div>
            </div>
            <div class="lg:items-center lg:flex min-h-screen"></div>
        </div>
    -->

    <!-- component -->
        <div class="min-w-screen min-h-screen bg-gray-900 flex items-center justify-center px-5 py-5">
            <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
                <div class="md:flex w-full">
                    <div class="hidden md:block w-1/2 bg-green-banner py-10 px-10">
                        <img src="../assets/img/gastos.jpg">
                    </div>
                    <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                        <div class="text-center mb-10">
                            <h1 class="font-bold text-3xl text-gray-900">LOGIN</h1>
                            <p>Acesse seu sistema online de gastos.</p>
                        </div>
                        <div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">User</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                                        <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="John">
                                    </div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <label for="" class="text-xs font-semibold px-1">Password</label>
                                    <div class="flex">
                                        <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-key-outline text-gray-400 text-lg"></i></div>
                                        <input type="password" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500" placeholder="*************">
                                    </div>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <button class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">LOGIN NOW</button>
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-1/2 px-3 mb-5">
                                    <p class="text-right">
                                        <a class="text-xs font-semibold px-1" href="#">Não possui uma conta?</a>
                                    </p>
                                </div>
                                <div class="w-1/2 px-3 mb-5">
                                    <p class="text-left">
                                        <a class="text-xs font-semibold px-1" href="#">Esqueci minha senha</a>
                                    </p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>