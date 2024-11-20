<!-- Sidebar -->
<aside class="scrollbar fixed top-0 left-0 z-40 w-72 lg:w-56 h-screen pt-14 transition-transform -translate-x-full bg-white border-r border-gray-200 lg:translate-x-0" aria-label="Sidenav" id="drawer-navigation">
    <div class="overflow-y-auto py-5 px-3 h-full bg-gray-800">
        <!-- Menu (It's for mobile) -->
        <ul class="space-y-0.5 inline lg:hidden">
            <?php if ($_SESSION['role_name'] !== 'masyarakat'): ?>
                <li>
                    <a href="index.php?page=dashboard" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                        <svg class="w-6 h-6 text-white  dark:text-white group-hover:text-gray-800 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                        </svg>

                        <span class="ml-3 group-hover:text-gray-800 text-white">Dashboard</span>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['role_name'] === 'superadmin'): ?>
                <li>
                    <a href="index.php?page=users" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                        <svg class="w-6 h-6 text-gray-200  dark:text-white group-hover:text-gray-800 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        </svg>

                        <span class="ml-3 group-hover:text-gray-800 text-white">Users</span>
                    </a>
                </li>
            <?php endif ?>
            <li>
                <a href="index.php?page=reports" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                    <svg class="w-6 h-6 text-gray-200  dark:text-white group-hover:text-gray-800 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z" clip-rule="evenodd" />
                    </svg>

                    <span class="ml-3 group-hover:text-gray-800 text-white">Reports</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=list" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                    <svg class="w-6 h-6 text-gray-200  dark:text-white group-hover:text-gray-800 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                    </svg>

                    <span class="ml-3 group-hover:text-gray-800 text-white">Report list</span>
                </a>
            </li>
        </ul>

        <!-- Menu (It's for Lablet and Desktop) -->
        <ul class="hidden lg:inline space-y-0.5">
            <?php if ($_SESSION['role_name'] !== 'masyarakat'): ?>
                <li>
                    <a href="index.php?page=dashboard" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                        <svg class="w-6 h-6 text-gray-200  dark:text-white group-hover:text-gray-800 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4" />
                        </svg>

                        <span class="ml-3 group-hover:text-gray-800 text-white">Dashboard</span>
                    </a>
                </li>
            <?php endif ?>
            <?php if ($_SESSION['role_name'] === 'superadmin'): ?>

                <li>
                    <a href="index.php?page=users" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                        <svg class="w-6 h-6 text-gray-200  dark:text-white group-hover:text-gray-800 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z" clip-rule="evenodd" />
                        </svg>


                        <span class="ml-3 group-hover:text-gray-800 text-white">Users</span>
                    </a>
                </li>
            <?php endif ?>
            <li>
                <a href="index.php?page=reports" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                    <svg class="w-6 h-6 text-gray-200  dark:text-white group-hover:text-gray-800 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7Z" clip-rule="evenodd" />
                    </svg>

                    <span class="ml-3 group-hover:text-gray-800 text-white">Reports</span>
                </a>
            </li>
            <li>
                <a href="index.php?page=list" class="flex items-center p-2 text-base font-medium text-primary rounded-lg hover:bg-blue-500 group transition duration-75">
                    <svg class="w-6 h-6 text-gray-200  dark:text-white group-hover:text-gray-800 transition duration-75" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M9 8h10M9 12h10M9 16h10M4.99 8H5m-.02 4h.01m0 4H5" />
                    </svg>

                    <span class="ml-3 group-hover:text-gray-800 text-white">Report list</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- End of the Sidebar -->

</div>