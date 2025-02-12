@include('partials.head')
<div class="relative flex min-h-screen">
    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Main content -->
    <main class="flex-1 overflow-y-auto bg-white pl-64 pt-16">
        <div class="max-w-4xl px-4 py-8 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">How to Contribute</h1>

            <div class="mt-6 prose prose-slate max-w-none">
                <p class="text-gray-600 mb-5">To contribute, you can follow the steps below:</p>
                <h5 class="text-gray-600 mb-3"><b>Clone the repository</b></h5>
                <div class="bg-gray-300 p-5 overflow-auto rounded-lg relative mb-5">
                    <pre class="text-sm"><code class="bash-command" id="clone-repo">$ git clone https://github.com/fazallsaid/UniversitiesAPI.git</code></pre>
                    <button onclick="copyToClipboard('clone-repo')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition duration-300">
                        <i class="fa fa-copy"></i>
                    </button>
                </div>
                <h5 class="text-gray-600 mb-3"><b>Install the Dependencies</b></h5>
                <div class="bg-gray-300 p-5 overflow-auto rounded-lg relative mb-5">
                    <pre class="text-sm"><code class="bash-command" id="install-deps">$ composer install</code></pre>
                    <button onclick="copyToClipboard('install-deps')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition duration-300">
                        <i class="fa fa-copy"></i>
                    </button>
                </div>
                <h5 class="text-gray-600 mb-3"><b>Generate a key in your .env file</b></h5>
                <div class="bg-gray-300 p-5 overflow-auto rounded-lg relative mb-5">
                    <pre class="text-sm"><code class="bash-command" id="generate-key">$ php artisan key:generate</code></pre>
                    <button onclick="copyToClipboard('generate-key')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition duration-300">
                        <i class="fa fa-copy"></i>
                    </button>
                </div>
                <h5 class="text-gray-600 mb-3"><b>Migrate Database and Seed the Database</b></h5>
                <div class="bg-gray-300 p-5 overflow-auto rounded-lg relative mb-5">
                    <pre class="text-sm"><code class="bash-command" id="migrate-db">$ php artisan migrate --seed</code></pre>
                    <button onclick="copyToClipboard('migrate-db')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition duration-300">
                        <i class="fa fa-copy"></i>
                    </button>
                </div>
            </div>
            <script>
                function copyToClipboard(id) {
                    var text = document.getElementById(id).innerText.replace(/^\$/, '');
                    navigator.clipboard.writeText(text).then(function() {
                        var toast = document.createElement('div');
                        toast.classList.add('bg-green-500', 'p-2', 'rounded', 'fixed', 'right-4', 'top-[70px]', 'text-white', 'animate-fade-in', 'z-10');
                        toast.innerHTML = 'Copied!';
                        document.body.appendChild(toast);
                        setTimeout(function() {
                            toast.classList.remove('animate-fade-in');
                            toast.classList.add('animate-fade-out');
                            setTimeout(function() {
                                document.body.removeChild(toast);
                            }, 500);
                        }, 2000);
                    });
                }
            </script>
        </div>
    </main>
</div>
@include('partials.foot')
