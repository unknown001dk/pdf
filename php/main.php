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

<?php

//session_start();
    //include("connection.php");
    //include("functions.php");

   // $user_data = check_login($con);

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
        class=""
        >

            <div 
            class="md:flex md:justify-between col-auto mt-9 rounded"
            >
            <button 
            class=""
            >
                <svg 
                class="stroke-blue-500 hover:stroke-orange-300 w-52 h-52"
                fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path 
                    stroke-linecap="round" stroke-linejoin="round" 
                    d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"
                    ></path>
                </svg>
            </button>

            <button>
                <svg 
                class="w-52 h-52 stroke-blue-400 hover:stroke-orange-300 "
                fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" 
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path 
                    stroke-linecap="round" stroke-linejoin="round" 
                    d="M19.5 13.5L12 21m0 0l-7.5-7.5M12 21V3"
                    ></path>
                </svg>
            </button>

            <button>  
                <svg 
                class="stroke-cyan-400 fill-gray-300 w-52 h-52 hover:stroke-orange-300"
                fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" 
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path 
                    stroke-linecap="round" 
                    stroke-linejoin="round"  d="M4.5 12.75l7.5-7.5 7.5 7.5m-15 6l7.5-7.5 7.5 7.5"
                    ></path>
                </svg>
            </button>  

            <button>
                <svg 
                class="w-52 h-52"
                fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" 
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path 
                    stroke-linecap="round" stroke-linejoin="round" 
                    d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"
                    ></path>
                </svg>
            </button>   
            </div>

            <div 
            class="py-4 px-5 bg-green-200 mt-7 rounded"
            >
                <svg 
                class=""
                fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path 
                    stroke-linecap="round" stroke-linejoin="round"
                    d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"
                    ></path>
                </svg>
            </div>

        </div>

        <!--multiple div icon end-->

        <!--Speed dial start-->

        <div id="dialParent" class="group fixed bottom-6 end-6">
    <div
        id="dialContent"
        class="mb-4 hidden flex-col items-center space-y-2"
    >
        <button
            type="button"
            data-tooltip-target="tooltip-share"
            data-tooltip-placement="left"
            class="flex h-[52px] w-[52px] items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-400">
            <svg
                class="h-5 w-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 18 18"
            >
                <path
                    d="M14.419 10.581a3.564 3.564 0 0 0-2.574 1.1l-4.756-2.49a3.54 3.54 0 0 0 .072-.71 3.55 3.55 0 0 0-.043-.428L11.67 6.1a3.56 3.56 0 1 0-.831-2.265c.006.143.02.286.043.428L6.33 6.218a3.573 3.573 0 1 0-.175 4.743l4.756 2.491a3.58 3.58 0 1 0 3.508-2.871Z"
                />
            </svg>
            <span class="sr-only">Share</span>
        </button>
        <div
            id="tooltip-share"
            role="tooltip"
            class="tooltip invisible absolute z-10 inline-block w-auto rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
        >
            Share
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
            type="button"
            data-tooltip-target="tooltip-print"
            data-tooltip-placement="left"
            class="flex h-[52px] w-[52px] items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-400">
            <svg
                class="h-5 w-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path d="M5 20h10a1 1 0 0 0 1-1v-5H4v5a1 1 0 0 0 1 1Z" />
                <path
                    d="M18 7H2a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2v-3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v3a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2Zm-1-2V2a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v3h14Z"
                />
            </svg>
            <span class="sr-only">Print</span>
        </button>
        <div
            id="tooltip-print"
            role="tooltip"
            class="tooltip invisible absolute z-10 inline-block w-auto rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
        >
            Print
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
            type="button"
            data-tooltip-target="tooltip-download"
            data-tooltip-placement="left"
            class="flex h-[52px] w-[52px] items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-400">
            <svg
                class="h-5 w-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 20 20"
            >
                <path
                    d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"
                />
                <path
                    d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"
                />
            </svg>
            <span class="sr-only">Download</span>
        </button>
        <div
            id="tooltip-download"
            role="tooltip"
            class="tooltip invisible absolute z-10 inline-block w-auto rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
        >
            Download
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <button
            type="button"
            data-tooltip-target="tooltip-copy"
            data-tooltip-placement="left"
            class="flex h-[52px] w-[52px] items-center justify-center rounded-full border border-gray-200 bg-white text-gray-500 shadow-sm hover:bg-gray-50 hover:text-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white dark:focus:ring-gray-400">
            <svg
                class="h-5 w-5"
                aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg"
                fill="currentColor"
                viewBox="0 0 18 20"
            >
                <path
                    d="M5 9V4.13a2.96 2.96 0 0 0-1.293.749L.879 7.707A2.96 2.96 0 0 0 .13 9H5Zm11.066-9H9.829a2.98 2.98 0 0 0-2.122.879L7 1.584A.987.987 0 0 0 6.766 2h4.3A3.972 3.972 0 0 1 15 6v10h1.066A1.97 1.97 0 0 0 18 14V2a1.97 1.97 0 0 0-1.934-2Z"
                />
                <path
                    d="M11.066 4H7v5a2 2 0 0 1-2 2H0v7a1.969 1.969 0 0 0 1.933 2h9.133A1.97 1.97 0 0 0 13 18V6a1.97 1.97 0 0 0-1.934-2Z"
                />
            </svg>
            <span class="sr-only">Copy</span>
        </button>
        <div
            id="tooltip-copy"
            role="tooltip"
            class="tooltip invisible absolute z-10 inline-block w-auto rounded-lg bg-gray-900 px-3 py-2 text-sm font-medium text-white opacity-0 shadow-sm transition-opacity duration-300 dark:bg-gray-700"
        >
            Copy
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
    </div>
    <button
        type="button"
        id="dialButton"
        aria-controls="speed-dial-menu-default"
        aria-expanded="false"
        class="flex h-14 w-14 items-center justify-center rounded-full bg-blue-700 text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg
            class="h-5 w-5 transition-transform group-hover:rotate-45"
            aria-hidden="true"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 18 18"
        >
            <path
                stroke="currentColor"
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M9 1v16M1 9h16"
            />
        </svg>
        <span class="sr-only">Open actions menu</span>
    </button>
</div>




        <!--Speed dial End-->

      </div>
  </div> 
</body>

<?php require "../html/footer.html" ?>
<script src="../js/speed_dial.js"></script>
</html>