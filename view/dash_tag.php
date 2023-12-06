<?php
include "../model/config.php";
include 'session.php';

$result = $mysqli->query("SELECT * FROM theme");
$themes = $result->fetch_all(MYSQLI_ASSOC);

?>



<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a4fc922de4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <title>

    </title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="icon" type="image/png" href="" />
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body class="bg-purple-400 ">
    <main>
        <div class="min-h-screen flex flex-col flex-auto flex-shrink-0 antialiased  ">



            <!-- navbar -->
            <div class="fixed w-full flex items-center  bg-purple-300 justify-between h-14 text-black z-10 gap-9 ">
                <div class="flex items-center justify-start md:justify-center pl-3 w-14 md:w-64 h-14 bg-purple-300">
                    <span class="hidden md:block">ANAS NAKHLI</span>
                </div>
                <div class="flex items-center justify-around h-14 bg-purple-300  ">
                    <ul class="flex justify-between">
                        <li>
                            <div class="block w-px h-6 mx-3 bg-gray-400 dark:bg-gray-700"></div>
                        </li>
                        <li>
                            <a href="../controller/logout.php" class="flex items-center mr-4 hover:text-blue-100">
                                <span class="inline-flex mr-1">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                </span>
                                Logout
                            </a>
                        </li>


                    </ul>
                </div>
            </div>

            <!-- tag form  -->
            <div class="max-w-md w-full bg-white p-8 rounded shadow-md ml-[20%] mt-[7%]">
                <div class="flex items-center mb-4">
                    <img src="tag.svg" alt="icon" class="mr-2">
                </div>

                <div class="mb-4">
                    <p class="text-gray-600">Press enter to add a tag</p>
                    <ul>
                        <input type="text" spellcheck="false" id="tagInput" class="border border-gray-300 p-2 w-full rounded focus:outline-none focus:border-blue-500">
                    </ul>
                </div>

                <div>
                    <label class="text-white dark:text-gray-200" for="passwordConfirmation">theme</label>
                    <select name="theme" class=" w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring">
                        <?php

                        foreach ($themes  as $theme) { ?>

                            <option value='<?php echo $category["IdTheme"]  ?>'><?= $category["ThemeName"] ?></option>
                        <?php  } ?>

                    </select>
                </div>

                <div class="mb-4 flex items-center">
                    <button id="removeAllBtn" class="bg-red-500 text-white p-2 rounded hover:bg-red-600">
                        Remove All
                    </button>
                    <button id="saveAllBtn" class="bg-green-500 text-white p-2 rounded hover:bg-green-600 ml-2">
                        Save All
                    </button>
                </div>

                <ul id="tagList" class="space-y-2">
                </ul>
            </div>

            <script>
                const ul = document.getElementById("tagList");
                const input = document.getElementById("tagInput");
                const categorySelect = document.getElementById("categorySelect");
                const removeAllBtn = document.getElementById("removeAllBtn");
                const saveAllBtn = document.getElementById("saveAllBtn");

                let maxTags = Infinity;
                let tags = [];
                let selectedCategory = "all";

                createTag();

                function createTag() {
                    ul.innerHTML = "";
                    const filteredTags = selectedCategory === "all" ? tags : tags.filter(tag => tag.startsWith(selectedCategory));
                    filteredTags.forEach(tag => {
                        let liTag = `
                            <li class="flex items-center bg-blue-200 p-2 rounded">
                                <span>${tag}</span>
                                <button class="ml-2 bg-red-500 text-white p-1 rounded" onclick="remove('${tag}')">Remove</button>
                            </li>`;
                        ul.insertAdjacentHTML("beforeend", liTag);
                    });
                }



                function remove(tag) {
                    tags = tags.filter(t => t !== tag);
                    createTag();
                }

                function addTag(e) {
                    if (e.key === "Enter") {
                        let tag = e.target.value.trim();
                        if (tag.length > 0 && !tags.includes(tag)) {
                            tags.push(tag);
                            createTag();
                            e.target.value = "";
                        }
                    }
                }

                function removeAll() {
                    tags = [];
                    createTag();
                }

                function saveAll() {
                    // Placeholder function to save the tags (adjust as needed)
                    console.log("Tags to save:", tags);
                }

                function onCategoryChange() {
                    selectedCategory = categorySelect.value;
                    createTag();
                }

                input.addEventListener("keyup", addTag);
                removeAllBtn.addEventListener("click", removeAll);
                saveAllBtn.addEventListener("click", saveAll);
                categorySelect.addEventListener("change", onCategoryChange);
            </script>



            <!-- slider  -->
            <div class="fixed flex flex-col top-14 left-0 w-14 hover:w-64 md:w-64 bg-purple-900 h-full text-white transition-all duration-300 border-none z-10 sidebar">
                <div class="overflow-y-auto overflow-x-hidden flex flex-col justify-between flex-grow">
                    <ul class="flex flex-col py-4 space-y-1">
                        <li class="px-5 hidden md:block">
                            <div class="flex flex-row items-center h-8">
                                <div class="text-sm font-light tracking-wide text-white uppercase">Main</div>
                            </div>
                        </li>
                        <li>
                            <a href="dashboard.php" class="relative flex flex-row items-center h-11 focus:outline-none transition hover:bg-purple-300 hover:text-[#000000] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-white pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg class="w-5 h-5 " fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                                        </path>
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">plantes</span>
                            </a>
                            <a href="dash_article.php" class="relative flex flex-row items-center h-11 focus:outline-none transition hover:bg-purple-300 hover:text-[#000000] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-white pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path d="M168 80c-13.3 0-24 10.7-24 24V408c0 8.4-1.4 16.5-4.1 24H440c13.3 0 24-10.7 24-24V104c0-13.3-10.7-24-24-24H168zM72 480c-39.8 0-72-32.2-72-72V112C0 98.7 10.7 88 24 88s24 10.7 24 24V408c0 13.3 10.7 24 24 24s24-10.7 24-24V104c0-39.8 32.2-72 72-72H440c39.8 0 72 32.2 72 72V408c0 39.8-32.2 72-72 72H72zM176 136c0-13.3 10.7-24 24-24h96c13.3 0 24 10.7 24 24v80c0 13.3-10.7 24-24 24H200c-13.3 0-24-10.7-24-24V136zm200-24h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zM200 272H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Articles</span>
                            </a>
                            <a href="dash_tag.php" class="relative flex flex-row items-center h-11 focus:outline-none transition hover:bg-purple-300 hover:text-[#000000] text-white-600 hover:text-white-800 border-l-4 border-transparent hover:border-white pr-6">
                                <span class="inline-flex justify-center items-center ml-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512">
                                        <path d="M168 80c-13.3 0-24 10.7-24 24V408c0 8.4-1.4 16.5-4.1 24H440c13.3 0 24-10.7 24-24V104c0-13.3-10.7-24-24-24H168zM72 480c-39.8 0-72-32.2-72-72V112C0 98.7 10.7 88 24 88s24 10.7 24 24V408c0 13.3 10.7 24 24 24s24-10.7 24-24V104c0-39.8 32.2-72 72-72H440c39.8 0 72 32.2 72 72V408c0 39.8-32.2 72-72 72H72zM176 136c0-13.3 10.7-24 24-24h96c13.3 0 24 10.7 24 24v80c0 13.3-10.7 24-24 24H200c-13.3 0-24-10.7-24-24V136zm200-24h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zM200 272H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24z" />
                                    </svg>
                                </span>
                                <span class="ml-2 text-sm tracking-wide truncate">Tags</span>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        </div>


</body>

</html>


</main>


</body>

</html>