<?php
  session_start();
  if (!isset($_SESSION["username"])) {
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <!-- Navigation -->
    <nav class="bg-gray-800 p-2 mt-0 fixed w-full z-10 top-0">
        <div class="container mx-auto flex flex-wrap items-center">
            <div class="flex w-full md:w-1/2 justify-center md:justify-start text-white font-extrabold">
                <a class="text-white no-underline hover:text-white hover:no-underline" href="#">
                    <span class="text-2xl pl-2">Dashboard</span>
                </a>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/2 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-white no-underline" href="#">Beranda</a>
                    </li>
                    <!-- <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="#">Profile</a>
                    </li> -->
                    <li class="mr-3">
                        <a class="inline-block text-gray-600 no-underline hover:text-gray-200 hover:text-underline py-2 px-4" href="user.html">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <div class="container pt-24 md:pt-36 mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-6">
                <h2 class="text-lg font-bold mb-2">Card 1</h2>
                <p class="text-gray-700">Content of card 1</p>
        
                <!-- Button to Copy Link -->
                <button id="copyButton" class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Copy Link
                </button>
            </div>
        
            <div class="w-full lg:w-1/4 px-4 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-bold mb-2">Card 2</h2>
                    <p class="text-gray-700">Content of card 2</p>
                </div>
            </div>
            <div class="w-full lg:w-1/4 px-4 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-bold mb-2">Card 3</h2>
                    <p class="text-gray-700">Content of card 3</p>
                </div>
            </div>
            <div class="w-full lg:w-1/4 px-4 mb-8">
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <h2 class="text-lg font-bold mb-2">Card 4</h2>
                    <p class="text-gray-700">Content of card 4</p>
                </div>
            </div>
        </div>
    </div>
    <script>
        const copyButton = document.getElementById('copyButton');

        copyButton.addEventListener('click', () => {
            const dummyInput = document.createElement('input');
            document.body.appendChild(dummyInput);
            dummyInput.setAttribute('value', 'file:///C:/Users/Asus/iky/syntax/project/kirim_pesan.html');
            dummyInput.select();
            document.execCommand('copy');
            document.body.removeChild(dummyInput);

            // You can add further actions after copying
            alert('Link copied to clipboard!');
        });
    </script>
</body>
</html>
