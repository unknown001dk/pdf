<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All in One PDF</title>
  <link rel="stylesheet" href="../css/output.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <?php 
  require "../html/header.html" 
  ?>
  <!--<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>-->
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
        class="md:flex md:justify-between col-auto mt-9"
        >
          <div>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" className="w-6 h-6">
                <path strokeLinecap="round" strokeLinejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
              </svg>
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
        class="md:flex justify-between mt-9"
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