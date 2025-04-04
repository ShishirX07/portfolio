<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gradient-to-b from-gray-50 to-white">
    <!-- Navigation Bar -->
    <nav class="bg-gradient-to-r from-indigo-900 to-blue-900 shadow-xl border-b border-indigo-400/20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-24 items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="index.php" class="text-2xl font-bold bg-gradient-to-r from-indigo-400 to-blue-300 bg-clip-text text-transparent flex items-center">
                        <i class="fas fa-camera-retro mr-3 text-indigo-400"></i>
                        Timeless Memories Photography portfolio
                    </a>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="about.php" class="group relative text-gray-300 hover:text-white px-3 py-2 transition-all duration-300">
                        <span class="relative">
                            About
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                    <a href="gallery.php" class="group relative text-gray-300 hover:text-white px-3 py-2 transition-all duration-300">
                        <span class="relative">
                            Gallery
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                    <a href="experience.php" class="group relative text-gray-300 hover:text-white px-3 py-2 transition-all duration-300">
                        <span class="relative">
                            Experience
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                    <a href="contact.php" class="group relative text-gray-300 hover:text-white px-3 py-2 transition-all duration-300">
                        <span class="relative">
                            Contact
                            <span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-indigo-400 group-hover:w-full transition-all duration-300"></span>
                        </span>
                    </a>
                    <a href="#" id="loginButton" class="ml-4 px-6 py-3 bg-indigo-600/30 backdrop-blur-sm rounded-full border border-indigo-400/30 hover:bg-indigo-700/40 transition-all duration-300 group">
                        <span class="text-indigo-400 group-hover:text-white flex items-center">
                            <i class="fas fa-lock text-sm mr-2"></i>
                            Admin
                        </span>
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav> 