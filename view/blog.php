<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="relative">
<header class="header sticky top-0 bg-white z-10 shadow-md flex items-center justify-between px-8 py-02">

<h1 class="w-3/12">
    <a href="./">
        <img class="w-[20%]" src="../view//assets//images//Logo.png" alt="">
    </a>
</h1>


<nav class="nav font-semibold text-lg">
    <ul class="flex items-center">
        <li
            class="p-4 border-b-2 border-purple-700  border-opacity-0 hover:border-opacity-100 hover:text-purple-700  duration-200 cursor-pointer active">
            <a href="index.php">Home</a>
        </li>
        <li
            class="p-4 border-b-2 border-purple-700  border-opacity-0 hover:border-opacity-100 hover:text-purple-700  duration-200 cursor-pointer">
            <a href="Plants.php">Plants</a>
        </li>

        <li
            class="p-4 border-b-2 border-purple-700  border-opacity-0 hover:border-opacity-100 hover:text-purple-700  duration-200 cursor-pointer">
            <a href="Cart.php">Cart</a>
        </li>
        <li
            class="p-4 border-b-2 border-purple-700  border-opacity-0 hover:border-opacity-100 hover:text-purple-700  duration-200 cursor-pointer">
            <a href="">Blog</a>
        </li>
        
    </ul>
</nav>


<div class="w-3/12 flex justify-end gap-5">
    <a href="../controller/logout.php" class="flex items-center mr-4 hover:text-purple-700 duration-200">
        <span class="inline-flex mr-1">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                </path>
            </svg>
        </span>
        Logout
    </a>
    <a href="Cart.php">
        <svg class="h-8 p-1 hover:text-purple-700 duration-200" aria-hidden="true" focusable="false"
            data-prefix="far" data-icon="shopping-cart" role="img" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 576 512" class="svg-inline--fa fa-shopping-cart fa-w-18 fa-7x">
            <path fill="currentColor"
                d="M551.991 64H144.28l-8.726-44.608C133.35 8.128 123.478 0 112 0H12C5.373 0 0 5.373 0 12v24c0 6.627 5.373 12 12 12h80.24l69.594 355.701C150.796 415.201 144 430.802 144 448c0 35.346 28.654 64 64 64s64-28.654 64-64a63.681 63.681 0 0 0-8.583-32h145.167a63.681 63.681 0 0 0-8.583 32c0 35.346 28.654 64 64 64 35.346 0 64-28.654 64-64 0-18.136-7.556-34.496-19.676-46.142l1.035-4.757c3.254-14.96-8.142-29.101-23.452-29.101H203.76l-9.39-48h312.405c11.29 0 21.054-7.869 23.452-18.902l45.216-208C578.695 78.139 567.299 64 551.991 64zM208 472c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm256 0c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm23.438-200H184.98l-31.31-160h368.548l-34.78 160z"
                class=""></path>
        </svg>
    </a>



</div>
</header>
<section class="absolute w-full z-[-10]">
    <?xml version="1.0" tandalone="no"?><svg  xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 666.6602897441694" preserveAspectRatio="xMaxYMax slice"><g transform="scale(1.7391606810553226)"><rect x="0" y="0" width="574.9995" height="383.33299999999997" fill="#ffffff"/><rect x="319.44416666666666" y="63.88883333333333" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><rect x="0" y="127.77766666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 0 127.78 A 31.94 31.94 0 0 1  31.94 159.72 L 0 127.78 A 31.94 31.94 0 0 0 31.94 159.72" fill="#d3bcdb"/><path d="M 0 159.72 A 31.94 31.94 0 0 1  31.94 191.66 L 0 159.72 A 31.94 31.94 0 0 0 31.94 191.66" fill="#bc98c7"/><rect x="127.77766666666666" y="127.77766666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 159.72 159.72 A 31.94 31.94 0 0 1  191.66 127.78 L 159.72 159.72 A 31.94 31.94 0 0 0 191.66 127.78" fill="#e4e9e1"/><path d="M 191.67 127.78 A 63.89 63.89 0 0 1  255.56 191.67000000000002 L 191.67 127.78 A 63.89 63.89 0 0 0 255.56 191.67000000000002" fill="#9cb091"/><rect x="383.33299999999997" y="127.77766666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 383.33 159.72 A 31.94 31.94 0 0 1  415.27 127.78 L 383.33 159.72 A 31.94 31.94 0 0 0 415.27 127.78" fill="#f5eff6"/><path d="M 383.33 159.72 A 31.94 31.94 0 0 1  415.27 191.66 L 383.33 159.72 A 31.94 31.94 0 0 0 415.27 191.66" fill="#e4e9e1"/><rect x="447.22183333333334" y="127.77766666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 479.17 127.78 A 31.94 31.94 0 0 1  511.11 159.72 L 479.17 127.78 A 31.94 31.94 0 0 0 511.11 159.72" fill="#faf8fb"/><rect x="0" y="191.66649999999998" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 0 223.60999999999999 A 31.94 31.94 0 0 1  31.94 191.67 L 0 223.60999999999999 A 31.94 31.94 0 0 0 31.94 191.67" fill="#a371b2"/><path d="M 31.94 191.67 A 31.94 31.94 0 0 1  63.88 223.60999999999999 L 31.94 191.67 A 31.94 31.94 0 0 0 63.88 223.60999999999999" fill="#f4eef6"/><path d="M 0 223.61 A 31.94 31.94 0 0 1  31.94 255.55 L 0 223.61 A 31.94 31.94 0 0 0 31.94 255.55" fill="#6b895b"/><rect x="63.88883333333333" y="191.66649999999998" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 63.89 223.61 A 31.94 31.94 0 0 1  95.83 255.55 L 63.89 223.61 A 31.94 31.94 0 0 0 95.83 255.55" fill="#c9d4c4"/><path d="M 95.83 223.61 A 31.94 31.94 0 0 1  127.77 255.55 L 95.83 223.61 A 31.94 31.94 0 0 0 127.77 255.55" fill="#a5b79b"/><rect x="127.77766666666666" y="191.66649999999998" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 127.78 223.60999999999999 A 31.94 31.94 0 0 1  159.72 191.67 L 127.78 223.60999999999999 A 31.94 31.94 0 0 0 159.72 191.67" fill="#a5b79b"/><path d="M 159.72 223.60999999999999 A 31.94 31.94 0 0 1  191.66 191.67 L 159.72 223.60999999999999 A 31.94 31.94 0 0 0 191.66 191.67" fill="#eee5f1"/><path d="M 127.78 255.55 A 31.94 31.94 0 0 1  159.72 223.61 L 127.78 255.55 A 31.94 31.94 0 0 0 159.72 223.61" fill="#d9c5df"/><path d="M 159.72 255.55 A 31.94 31.94 0 0 1  191.66 223.61 L 159.72 255.55 A 31.94 31.94 0 0 0 191.66 223.61" fill="#b187be"/><rect x="319.44416666666666" y="191.66649999999998" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 319.44 223.60999999999999 A 31.94 31.94 0 0 1  351.38 191.67 L 319.44 223.60999999999999 A 31.94 31.94 0 0 0 351.38 191.67" fill="#9aae8f"/><path d="M 351.39 223.61 A 31.94 31.94 0 0 1  383.33 255.55 L 351.39 223.61 A 31.94 31.94 0 0 0 383.33 255.55" fill="#9e6bae"/><rect x="383.33299999999997" y="191.66649999999998" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 415.28 191.67 A 31.94 31.94 0 0 1  447.21999999999997 223.60999999999999 L 415.28 191.67 A 31.94 31.94 0 0 0 447.21999999999997 223.60999999999999" fill="#b6c5ae"/><rect x="0" y="255.55533333333332" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 0 255.56 A 31.94 31.94 0 0 1  31.94 287.5 L 0 255.56 A 31.94 31.94 0 0 0 31.94 287.5" fill="#839c76"/><path d="M 31.94 287.5 A 31.94 31.94 0 0 1  63.88 255.56 L 31.94 287.5 A 31.94 31.94 0 0 0 63.88 255.56" fill="#bdcab6"/><path d="M 0 319.44 A 31.94 31.94 0 0 1  31.94 287.5 L 0 319.44 A 31.94 31.94 0 0 0 31.94 287.5" fill="#dae1d6"/><path d="M 31.94 319.44 A 31.94 31.94 0 0 1  63.88 287.5 L 31.94 319.44 A 31.94 31.94 0 0 0 63.88 287.5" fill="#bc98c7"/><rect x="63.88883333333333" y="255.55533333333332" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 63.89 255.56 A 31.94 31.94 0 0 1  95.83 287.5 L 63.89 255.56 A 31.94 31.94 0 0 0 95.83 287.5" fill="#efe7f2"/><path d="M 95.83 287.5 A 31.94 31.94 0 0 1  127.77 255.56 L 95.83 287.5 A 31.94 31.94 0 0 0 127.77 255.56" fill="#779268"/><path d="M 63.89 319.44 A 31.94 31.94 0 0 1  95.83 287.5 L 63.89 319.44 A 31.94 31.94 0 0 0 95.83 287.5" fill="#9d69ae"/><path d="M 95.83 287.5 A 31.94 31.94 0 0 1  127.77 319.44 L 95.83 287.5 A 31.94 31.94 0 0 0 127.77 319.44" fill="#628251"/><path d="M 127.78 319.45 A 63.89 63.89 0 0 1  191.67000000000002 255.56 L 127.78 319.45 A 63.89 63.89 0 0 0 191.67000000000002 255.56" fill="#f0f3ef"/><rect x="191.66649999999998" y="255.55533333333332" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 223.61 255.56 A 31.94 31.94 0 0 1  255.55 287.5 L 223.61 255.56 A 31.94 31.94 0 0 0 255.55 287.5" fill="#9963aa"/><path d="M 223.61 287.5 A 31.94 31.94 0 0 1  255.55 319.44 L 223.61 287.5 A 31.94 31.94 0 0 0 255.55 319.44" fill="#9aaf8f"/><rect x="255.55533333333332" y="255.55533333333332" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 255.56 287.5 A 31.94 31.94 0 0 1  287.5 255.56 L 255.56 287.5 A 31.94 31.94 0 0 0 287.5 255.56" fill="#ba96c6"/><path d="M 287.5 255.56 A 31.94 31.94 0 0 1  319.44 287.5 L 287.5 255.56 A 31.94 31.94 0 0 0 319.44 287.5" fill="#d1b9d9"/><path d="M 255.56 319.44 A 31.94 31.94 0 0 1  287.5 287.5 L 255.56 319.44 A 31.94 31.94 0 0 0 287.5 287.5" fill="#d0dacb"/><path d="M 287.5 287.5 A 31.94 31.94 0 0 1  319.44 319.44 L 287.5 287.5 A 31.94 31.94 0 0 0 319.44 319.44" fill="#b9c7b1"/><rect x="319.44416666666666" y="255.55533333333332" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 319.44 255.56 A 31.94 31.94 0 0 1  351.38 287.5 L 319.44 255.56 A 31.94 31.94 0 0 0 351.38 287.5" fill="#8fa683"/><path d="M 351.39 287.5 A 31.94 31.94 0 0 1  383.33 255.56 L 351.39 287.5 A 31.94 31.94 0 0 0 383.33 255.56" fill="#8b4e9f"/><path d="M 351.39 319.44 A 31.94 31.94 0 0 1  383.33 287.5 L 351.39 319.44 A 31.94 31.94 0 0 0 383.33 287.5" fill="#fbf9fc"/><rect x="383.33299999999997" y="255.55533333333332" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 415.28 255.56 A 31.94 31.94 0 0 1  447.21999999999997 287.5 L 415.28 255.56 A 31.94 31.94 0 0 0 447.21999999999997 287.5" fill="#d6c0dd"/><path d="M 383.33 287.5 A 31.94 31.94 0 0 1  415.27 319.44 L 383.33 287.5 A 31.94 31.94 0 0 0 415.27 319.44" fill="#e5eae2"/><path d="M 415.28 319.44 A 31.94 31.94 0 0 1  447.21999999999997 287.5 L 415.28 319.44 A 31.94 31.94 0 0 0 447.21999999999997 287.5" fill="#afbfa7"/><rect x="511.11066666666665" y="255.55533333333332" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 543.06 287.5 A 31.94 31.94 0 0 1  575 255.56 L 543.06 287.5 A 31.94 31.94 0 0 0 575 255.56" fill="#bccab5"/><path d="M 511.11 319.44 A 31.94 31.94 0 0 1  543.0500000000001 287.5 L 511.11 319.44 A 31.94 31.94 0 0 0 543.0500000000001 287.5" fill="#ccd6c6"/><path d="M 543.06 319.44 A 31.94 31.94 0 0 1  575 287.5 L 543.06 319.44 A 31.94 31.94 0 0 0 575 287.5" fill="#88489c"/><rect x="0" y="319.44416666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 0 319.44 A 31.94 31.94 0 0 1  31.94 351.38 L 0 319.44 A 31.94 31.94 0 0 0 31.94 351.38" fill="#d4bedb"/><path d="M 31.94 319.44 A 31.94 31.94 0 0 1  63.88 351.38 L 31.94 319.44 A 31.94 31.94 0 0 0 63.88 351.38" fill="#8a4b9d"/><path d="M 0 351.39 A 31.94 31.94 0 0 1  31.94 383.33 L 0 351.39 A 31.94 31.94 0 0 0 31.94 383.33" fill="#d1dacc"/><path d="M 31.94 351.39 A 31.94 31.94 0 0 1  63.88 383.33 L 31.94 351.39 A 31.94 31.94 0 0 0 63.88 383.33" fill="#d8c3df"/><path d="M 63.89 319.44 A 63.89 63.89 0 0 1  127.78 383.33 L 63.89 319.44 A 63.89 63.89 0 0 0 127.78 383.33" fill="#d6c0dd"/><rect x="127.77766666666666" y="319.44416666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 127.78 351.38 A 31.94 31.94 0 0 1  159.72 319.44 L 127.78 351.38 A 31.94 31.94 0 0 0 159.72 319.44" fill="#f3ecf5"/><path d="M 159.72 319.44 A 31.94 31.94 0 0 1  191.66 351.38 L 159.72 319.44 A 31.94 31.94 0 0 0 191.66 351.38" fill="#8da480"/><path d="M 127.78 351.39 A 31.94 31.94 0 0 1  159.72 383.33 L 127.78 351.39 A 31.94 31.94 0 0 0 159.72 383.33" fill="#9fb395"/><path d="M 159.72 351.39 A 31.94 31.94 0 0 1  191.66 383.33 L 159.72 351.39 A 31.94 31.94 0 0 0 191.66 383.33" fill="#f6f1f8"/><rect x="191.66649999999998" y="319.44416666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 191.67 319.44 A 31.94 31.94 0 0 1  223.60999999999999 351.38 L 191.67 319.44 A 31.94 31.94 0 0 0 223.60999999999999 351.38" fill="#749065"/><path d="M 223.61 319.44 A 31.94 31.94 0 0 1  255.55 351.38 L 223.61 319.44 A 31.94 31.94 0 0 0 255.55 351.38" fill="#945ca6"/><path d="M 191.67 383.33 A 31.94 31.94 0 0 1  223.60999999999999 351.39 L 191.67 383.33 A 31.94 31.94 0 0 0 223.60999999999999 351.39" fill="#e8ede6"/><path d="M 223.61 351.39 A 31.94 31.94 0 0 1  255.55 383.33 L 223.61 351.39 A 31.94 31.94 0 0 0 255.55 383.33" fill="#79946b"/><path d="M 255.56 383.33 A 63.89 63.89 0 0 1  319.45 319.44 L 255.56 383.33 A 63.89 63.89 0 0 0 319.45 319.44" fill="#b288bf"/><path d="M 319.44 383.33 A 63.89 63.89 0 0 1  383.33 319.44 L 319.44 383.33 A 63.89 63.89 0 0 0 383.33 319.44" fill="#8b4d9e"/><rect x="383.33299999999997" y="319.44416666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 383.33 351.38 A 31.94 31.94 0 0 1  415.27 319.44 L 383.33 351.38 A 31.94 31.94 0 0 0 415.27 319.44" fill="#be9bc9"/><path d="M 415.28 319.44 A 31.94 31.94 0 0 1  447.21999999999997 351.38 L 415.28 319.44 A 31.94 31.94 0 0 0 447.21999999999997 351.38" fill="#f1f4f0"/><path d="M 383.33 351.39 A 31.94 31.94 0 0 1  415.27 383.33 L 383.33 351.39 A 31.94 31.94 0 0 0 415.27 383.33" fill="#d5bedc"/><path d="M 415.28 383.33 A 31.94 31.94 0 0 1  447.21999999999997 351.39 L 415.28 383.33 A 31.94 31.94 0 0 0 447.21999999999997 351.39" fill="#fdfefd"/><path d="M 447.22 319.44 A 63.89 63.89 0 0 1  511.11 383.33 L 447.22 319.44 A 63.89 63.89 0 0 0 511.11 383.33" fill="#b188be"/><rect x="511.11066666666665" y="319.44416666666666" width="63.88883333333333" height="63.88883333333333" fill="#ffffff"/><path d="M 511.11 319.44 A 31.94 31.94 0 0 1  543.0500000000001 351.38 L 511.11 319.44 A 31.94 31.94 0 0 0 543.0500000000001 351.38" fill="#e0cfe5"/><path d="M 543.06 319.44 A 31.94 31.94 0 0 1  575 351.38 L 543.06 319.44 A 31.94 31.94 0 0 0 575 351.38" fill="#edf0eb"/><path d="M 511.11 351.39 A 31.94 31.94 0 0 1  543.0500000000001 383.33 L 511.11 351.39 A 31.94 31.94 0 0 0 543.0500000000001 383.33" fill="#c3a4cd"/><path d="M 543.06 383.33 A 31.94 31.94 0 0 1  575 351.39 L 543.06 383.33 A 31.94 31.94 0 0 0 575 351.39" fill="#fefdfe"/></g></svg>
    



</section>
<section class="absolute">
<div class="grid grid-cols-4">
<div class="flex flex-wrap place-items-center h-screen">
    <!-- card -->
    <div class="overflow-hidden shadow-lg transition duration-500 ease-in-out transform hover:-translate-y-5 hover:shadow-2xl rounded-lg h-90 w-60 md:w-80 cursor-pointer m-auto">
        <a href="#" class="w-full block h-full">
            <img alt="blog photo" src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="max-h-40 w-full object-cover"/>
            <div class="bg-white w-full p-4">
                <p class="text-indigo-500 text-2xl font-medium">
                    Should You Get Online Education?
                </p>
                <p class="text-gray-800 text-sm font-medium mb-2">
                    A comprehensive guide about online education.
                </p>
                <p class="text-gray-600 font-light text-md">
                    It is difficult to believe that we have become so used to having instant access to information at...
                    <a class="inline-flex text-indigo-500" href="#">Read More</a>
                </p>
                <div class="flex flex-wrap justify-starts items-center py-3 border-b-2 text-xs text-white font-medium">
                    <span class="m-1 px-2 py-1 rounded bg-indigo-500">
                        #online
                    </span>
                    <span class="m-1 px-2 py-1 rounded bg-indigo-500">
                        #internet
                    </span>
                    <span class="m-1 px-2 py-1 rounded bg-indigo-500">
                        #education
                    </span>
                </div>
                <div class="flex items-center mt-2">
                    <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src='https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200'>
        
                    <div class="pl-3">
                        <div class="font-medium">
                            Jean Marc
                        </div>
                            <div class="text-gray-600 text-sm">
                            CTO of Supercars
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    
    </div>

</div>



</section>
    
</body>
</html>