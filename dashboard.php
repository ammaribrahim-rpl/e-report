<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");
$report_unsolved = query("SELECT  COUNT(status) as status FROM reports WHERE status = 0");
$report_solved = query("SELECT COUNT(status) as status FROM reports WHERE status = 1");

?>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 mb-6">
    <!-- Incoming Report -->
    <div class="h-32 md:h-64 p-4">
        <a href="#" class="flex flex-col justify-center text-center w-full h-full bg-gradient-to-r from-blue-400 to-blue-600 border border-blue-300 rounded-lg shadow-lg hover:shadow-2xl hover:scale-105 transition-transform duration-300 ease-out">
            <h5 class="mb-2 text-3xl md:text-6xl font-extrabold tracking-widest text-white animate-pulse">
                <?= $report_unsolved[0]['status'] ?>
            </h5>
            <p class="font-medium text-white text-lg md:text-2xl">
                Incoming Report
            </p>
        </a>
    </div>

    <!-- Completed Report -->
    <div class="h-32 md:h-64 p-4">
        <a href="#" class="flex flex-col justify-center text-center w-full h-full bg-gradient-to-r from-red-400 to-red-600 border border-red-300 rounded-lg shadow-lg hover:shadow-2xl hover:scale-105 transition-transform duration-300 ease-out">
            <h5 class="mb-2 text-3xl md:text-6xl font-extrabold tracking-widest text-white animate-bounce">
                <?= $report_solved[0]['status'] ?>
            </h5>
            <p class="font-medium text-white text-lg md:text-2xl">
                Completed Report
            </p>
        </a>
    </div>
</div>

<!-- Large Content Area -->
<div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-96 mb-6 bg-gradient-to-br from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800 shadow-inner relative overflow-hidden">
    <div class="absolute w-64 h-64 bg-blue-500 rounded-full blur-xl opacity-50 -top-16 -left-16 animate-spin-slow"></div>
    <div class="absolute w-64 h-64 bg-red-500 rounded-full blur-xl opacity-50 -bottom-16 -right-16 animate-spin-slow"></div>
</div>

<!-- Two Smaller Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    <!-- Card 1 -->
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72 bg-gradient-to-r from-green-400 to-green-600 hover:from-green-500 hover:to-green-700 transition duration-300 shadow-lg hover:shadow-xl hover:scale-105 flex items-center justify-center text-white font-bold text-2xl md:text-4xl">
        Card 1
    </div>
    <!-- Card 2 -->
    <div class="border-2 border-dashed rounded-lg border-gray-300 dark:border-gray-600 h-48 md:h-72 bg-gradient-to-r from-purple-400 to-purple-600 hover:from-purple-500 hover:to-purple-700 transition duration-300 shadow-lg hover:shadow-xl hover:scale-105 flex items-center justify-center text-white font-bold text-2xl md:text-4xl">
        Card 2
    </div>
</div>