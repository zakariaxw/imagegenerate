<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" rel="stylesheet" />
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>Laravel AI </title>


</head>

<body class="bg-gradient-to-r from-gray-700 via-gray-900 to-black">


    <div class="container mt-5">


        <div class="flex justify-center items-center h-screen">
            <div
                class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 bg-gradient-to-r from-gray-100 to-gray-300 dark:border-gray-700">
                <section>
                    <h2 class="flex justify-center">Here's Your Thiking</h2>

                    <figure class="my-3">

                        <img class="h-auto max-w-full" src="{{ $url }}" alt="{{ $description }}">
                        <figcaption class="flex justify-center text-black">{{ $description }}</figcaption>
                    </figure>
                    <div class="flex justify-center">
                        <button onclick="windows.location.reload()"
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800 btn-loader btn-loader">
                            <span
                                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                Generate Again
                            </span>
                        </button>


                        <a href=""
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800">
                            <span
                                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                Back
                            </span>
                        </a>


                    </div </section>
            </div>
        </div>

    </div>

</body>

</html>
