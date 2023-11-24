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


        <section >

            <div class="flex justify-center items-center md:h-screen">
                <div
                    class="m-auto w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-6 md:p-8 bg-gradient-to-r from-gray-100 to-gray-300 dark:border-gray-700">
                    <form action="{{ route('images.generate') }}" method="POST" class="space-y-6" novalidate>
                        @csrf
    
                        <h5 class="text-xl font-bold text-gray-900 dark:text-black flex justify-center">Imagine Your Picture</h5>
                        <div class="">
                            <input type="text" name="description" value="{{ old('description') }}"
                                class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:border-gray-500 dark:placeholder-gray-400 dark:text-black focus:bg-gray-100 focus:text-black"
                                placeholder="Ask Here" required maxlength="1000">
                            @error('description')
                                <div class="alert text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="">
                            <select name="size"
                                class="bg-white border border-gray-300 text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-500 dark:placeholder-gray-400 dark:text-black focus:bg-gray-100 focus:text-black">
                                <option value="sm" @if (old('size') === 'sm') selected @endif>Small</option>
                                <option value="md" @if (old('size') === 'md') selected @endif>Medium</option>
                                <option value="lg" @if (old('size') === 'lg') selected @endif>Large</option>
                            </select>
                            @error('size')
                                <div class="alert text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex justify-center">
                            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-cyan-500 to-blue-500 group-hover:from-cyan-500 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-cyan-200 dark:focus:ring-cyan-800 ">
                                <span
                                    class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                    Generate Image
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
    
    
            </div>
        </section>





    </div>
    
</body>
</html>