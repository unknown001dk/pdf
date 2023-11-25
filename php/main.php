<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All in One PDF</title>
  <link rel="stylesheet" href="../css/output.css">
  <?php 
  require "../html/header.html" 
  ?>
</head>
<body>
  
<div 
class="bg-indigo-100 py-6 md:py-12"
>
      <div 
      class="text-center max-w-2xl mx-auto"
      >
        <h1 
        class="text-3xl md:text-4xl font-medium mb-2"
        >
        Get Ready to change your pdf
        </h1>
        <button 
        class="bg-indigo-600 text-white py-2 px-6 rounded-full text-xl mt-6 hover:bg-blue-300"
        >
        Get Started
        </button>

        <!--Drag and drop input started-->

        <div 
        class=" mt-4 flex items-center justify-center w-full"
        >
          <label 
          for="dropzone-file" 
          class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600"
          >
              <div 
              class="flex flex-col items-center justify-center pt-5 pb-6"
              >
                  <svg 
                  class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" 
                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" 
                  fill="none" viewBox="0 0 20 16">
                      <path 
                      stroke="currentColor" 
                      stroke-linecap="round" 
                      stroke-linejoin="round" 
                      stroke-width="2" 
                      d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"
                      />
                  </svg>
                  <p 
                  class="mb-2 text-sm text-gray-500 dark:text-gray-400"
                  >
                  <span 
                  class="font-semibold"
                  >
                  Click to upload
                  </span>
                  or drag and drop</p>
                  <p 
                  class="text-xs text-gray-500 dark:text-gray-400"
                  >
                  PDF, DOCX
                </p>
              </div>
              <input 
              id="dropzone-file" 
              type="file" 
              class="hidden" 
              />
          </label>
        </div> 
        <!--Drag and drop input Ended-->

        <!--multiple div icon start-->

        <div 
        class="flex justify-between mt-9"
        >
          <div 
          class="py-4 px-5 bg-red-200"
          >
            01
          </div>
          <div 
          class="py-4 px-5 bg-green-200 "
          >
            02
          </div>
          <div 
          class="py-4 px-5 bg-white"
          >
            03
          </div>
          <div 
          class="py-4 px-5 bg-red-200"
          >
            01
          </div>
          <div 
          class="py-4 px-5 bg-green-200 "
          >
            02
          </div>
          <div 
          class="py-4 px-5 bg-white"
          >
            03
          </div>
        </div>

        <div 
        class="flex justify-between mt-9"
        >
          <div 
          class="py-4 px-5 bg-red-200"
          >
            01
          </div>
          <div 
          class="py-4 px-5 bg-green-200 "
          >02</div>
          <div 
          class="py-4 px-5 bg-white"
          >
            03
          </div>
          <div 
          class="py-4 px-5 bg-red-200"
          >01</div>
          <div 
          class="py-4 px-5 bg-green-200 "
          >
            02
          </div>
          <div 
          class="py-4 px-5 bg-white"
          >
            03
          </div>
        </div>

        <!--multiple div icon end-->

      </div>
  </div> 
</body>

<?php 
require "../html/footer.html"
?>
</html>