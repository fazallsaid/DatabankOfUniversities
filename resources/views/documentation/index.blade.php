@include('partials.head')
<div class="relative flex min-h-screen">
    <!-- Sidebar -->
    <aside class="fixed top-[3.3rem] left-0 h-full w-64 overflow-y-auto bg-transparent px-4 py-8 sm:px-6 lg:px-8 z-10">
        <div class="mb-8">
            <input type="text" id="search" placeholder="Search here..." class="w-full px-4 py-2 text-sm text-gray-800 bg-transparent rounded-md focus:outline-none border-gray-800 border-[1px] focus:ring-2 focus:ring-blue-500">
        </div>
        <script>
            document.getElementById('search').addEventListener('input', function() {
                let searchTerm = this.value.toLowerCase();
                document.querySelectorAll('aside nav a, .prose *').forEach(element => {
                    let content = element.textContent.toLowerCase();
                    if (element.closest('aside') || element.closest('.prose')) {
                        element.style.display = content.includes(searchTerm) ? '' : 'none';
                    }
                });
            });
        </script>
        <nav class="space-y-6">
            <div>
                <h2 class="text-sm font-semibold uppercase tracking-wider text-gray-400">Getting Started</h2>
                <ul class="mt-2 space-y-2">
                    <li><a href="#" class="text-gray-800 hover:bg-gray-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs') ? 'bg-gray-700 text-white pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl' : '' }}">Overview</a></li>
                    <li><a href="#" class="text-gray-800 hover:bg-gray-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs/installation') ? 'bg-gray-700 text-white pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl' : '' }}">Installation</a></li>
                    <li><a href="#" class="text-gray-800 hover:bg-gray-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs/configuration') ? 'bg-gray-700 text-white pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl' : '' }}">Configuration</a></li>
                </ul>
            </div>
            <div>
                <h2 class="text-sm font-semibold uppercase tracking-wider text-gray-400">Core Concepts</h2>
                <ul class="mt-2 space-y-2">
                    <li><a href="#" class="text-gray-800 hover:bg-gray-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs/transactions') ? 'bg-gray-700 text-white p-4' : '' }}">Transactions</a></li>
                    <li><a href="#" class="text-gray-800 hover:bg-gray-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs/payment-methods') ? 'bg-gray-700 text-white' : '' }}">Payment Methods</a></li>
                    <li><a href="#" class="text-gray-800 hover:bg-gray-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs/notifications') ? 'bg-gray-700 text-white' : '' }}">Notifications</a></li>
                </ul>
            </div>
        </nav>
    </aside>

    <!-- Main content -->
    <main class="flex-1 overflow-y-auto bg-white pl-64 pt-16">
        <div class="max-w-4xl px-4 py-8 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Welcome to Databank of Universities API Documentation</h1>

            <div class="mt-6 prose prose-slate max-w-none">
                <p class="mb-5">UniversitiesAPI is a web-based API application that provides access to anyone who wants to retrieve data about universities across Indonesia. This application is designed to assist developers and specific parties who wish to integrate university information into their projects.</p>
                <p class="mb-5">UniversitiesAPI offers comprehensive data on various universities in Indonesia. By utilizing this API, users can access information such as university names, locations, accreditations, and other relevant details. This application aims to serve as a valuable resource for developers looking to build systems or projects that incorporate university data.</p>

                <div class="bg-blue-50 border-l-4 border-blue-500 p-4 my-8">
                    <p class="text-sm text-blue-700">
                        <strong>Need assistance?</strong> Our support team is here to help. If you have any questions or encounter any issues while using UniversitiesAPI, please don't hesitate to contact us.
                    </p>
                </div>
            </div>
        </div>
    </main>
</div>
@include('partials.foot')
