<aside class="fixed top-[3.3rem] left-0 h-full w-64 overflow-y-auto bg-transparent px-4 py-8 sm:px-6 lg:px-8 z-10">
    <div class="mb-8">
        <input type="text" id="search" placeholder="Search here..." class="w-full px-4 py-2 text-sm text-gray-800 bg-transparent rounded-md focus:outline-none border-gray-800 focus:ring-2 focus:ring-blue-500">
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
                <li><a href="{{url('docs')}}" class="text-gray-800 hover:bg-blue-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs') ? 'bg-blue-700 text-white pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl' : '' }}">Overview</a></li>
                <li><a href="{{url('docs/usage')}}" class="text-gray-800 hover:bg-blue-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs/usage') ? 'bg-blue-700 text-white pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl' : '' }}">Usage</a></li>
                <li><a href="{{url('docs/data')}}" class="text-gray-800 hover:bg-blue-700 pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl hover:text-white {{ request()->is('docs/data') ? 'bg-blue-700 text-white pt-1 pb-1 pl-[1rem] pr-[1rem] rounded-xl' : '' }}">Collected Data</a></li>
            </ul>
        </div>
    </nav>
</aside>
