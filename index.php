<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Twibbon</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
    <link rel="stylesheet" href="output.css" />
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css"
      rel="stylesheet"
    />
  </head>

  <body class="px-2 bg-no-repeat bg-gradient-to-tr from-white to-purple-900">
    <div class="max-w-[1440px] mx-auto pb-20">
      <div class="w-full min-h-[400px] flex justify-center items-center">
        <h1 class="font-bold text-center text-7xl">Twibbon Maker</h1>
      </div>

      <div class="flex flex-col items-center justify-center w-full">
        <h2 class="font-bold">Get Started !</h2>
        <h2 class="font-bold">Upload your photo</h2>

        <label
          for="photoimg"
          class="flex mt-5 flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600 max-w-[700px]"
        >
          <div class="flex flex-col items-center justify-center pt-5 pb-6">
            <svg
              class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400"
              aria-hidden="true"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 20 16"
            >
              <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
              />
            </svg>
            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
              <span class="font-semibold">Click to upload</span> or drag and
              drop
            </p>
            <p class="text-xs text-gray-500 dark:text-gray-400">
              PNG, JPG, or SVG
            </p>
          </div>

          <input id="photoimg" type="file" class="hidden" value="" />
        </label>
      </div>

      <div class="flex flex-col items-center justify-center w-full mt-10">
        <label
          for="twibbonimg"
          class="block mb-2 text-sm font-bold text-gray-900"
          >Select Twibbon</label
        >
        <select
          id="twibbonimg"
          class="bg-gray-900 border border-gray-300 max-w-[300px] text-sm rounded-lg block w-full p-2.5 text-white"
        >
          <option value="img/MabaTwibbon.png">Maba Twibbon</option>
          <option value="img/PanitiaTwibbon.png">Panitia Twibbon</option>
        </select>
      </div>

      <div
        class="flex flex-col flex-wrap items-center justify-center w-full gap-10 mt-20 md:flex-row"
      >
        <div
          class="setting-image p-5 w-full max-w-[600px] flex-1 flex flex-col gap-5"
        >
          <div>
            <label htmlFor="wh">Resize</label>
            <input
              type="range"
              id="wh"
              min="0"
              max="100"
              value="50"
              class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer"
            />
          </div>

          <div>
            <label htmlFor="width">Width</label>
            <input
              type="range"
              id="width"
              min="-300"
              max="300"
              value="50"
              class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer"
            />
          </div>

          <div>
            <label htmlFor="height">Height</label>
            <input
              type="range"
              id="height"
              min="-300"
              max="300"
              value="50"
              class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer"
            />
          </div>

          <div>
            <label htmlFor="top">Top</label>
            <input
              type="range"
              id="top"
              min="-500"
              max="500"
              value="0"
              class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer"
            />
          </div>

          <div>
            <label htmlFor="left">Left</label>
            <input
              type="range"
              id="left"
              min="-500"
              max="500"
              value="0"
              class="w-full h-2 bg-gray-700 rounded-lg appearance-none cursor-pointer"
            />
          </div>
        </div>

        <div class="flex flex-col items-center justify-center flex-1 card">
          <div
            class="twibbon rounded-md overflow-hidden max-w-[400px] max-h-[400px]"
          >
            <img src="" id="twibbon" alt="" />
            <img src="" id="photo" alt="" />
          </div>
        </div>
      </div>

      <a
        href="#"
        id="download"
        class="p-5 text-center bg-gray-900 max-w-[300px] mx-auto rounded-md text-white mt-10 block"
      >
        Download
      </a>
    </div>

    <script type="text/javascript" src="script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
  </body>
</html>
