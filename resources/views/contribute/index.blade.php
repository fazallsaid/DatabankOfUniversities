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
                <h5 class="text-gray-600 mb-3">Clone the repository</h5>
                <div class="bg-gray-300 p-5 overflow-auto rounded-lg relative mb-5">
                    <pre class="text-sm"><code id="bash-command">$ git clone https://github.com/fazallsaid/UniversitiesAPI.git</code></pre>
                    <button onclick="copyToClipboard('#bash-command')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition duration-300">
                        <i class="fa fa-copy"></i>
                    </button>
                    <script>
                        function copyToClipboard(element) {
                            var text = $(element).text();
                            var $temp = $("<input>");
                            $("body").append($temp);
                            $temp.val(text).select();
                            document.execCommand("copy");
                            $temp.remove();
                            var toast = document.createElement('div');
                            toast.classList.add('bg-green-500', 'p-2', 'rounded', 'fixed', 'right-4', 'top-4', 'text-white', 'animate-fade-in');
                            toast.innerHTML = 'Copied!';
                            document.body.appendChild(toast);
                            setTimeout(function() {
                                toast.classList.remove('animate-fade-in');
                                toast.classList.add('animate-fade-out');
                                setTimeout(function() {
                                    document.body.removeChild(toast);
                                }, 500);
                            }, 2000);
                        }
                    </script>
                </div>
                <h5 class="text-gray-600 mb-3">Install the Dependencies</h5>
                <div class="bg-gray-300 p-5 overflow-auto rounded-lg relative mb-5">
                    <pre class="text-sm"><code id="bash-command">$ composer install</code></pre>
                    <button onclick="copyToClipboard('#bash-command')" class="absolute top-2 right-2 text-gray-500 hover:text-gray-700 transition duration-300">
                        <i class="fa fa-copy"></i>
                    </button>
                    <script>
                        function copyToClipboard(element) {
                            var text = $(element).text();
                            var $temp = $("<input>");
                            $("body").append($temp);
                            $temp.val(text).select();
                            document.execCommand("copy");
                            $temp.remove();
                            var toast = document.createElement('div');
                            toast.classList.add('bg-green-500', 'p-2', 'rounded', 'fixed', 'right-4', 'top-4', 'text-white', 'animate-fade-in');
                            toast.innerHTML = 'Copied!';
                            document.body.appendChild(toast);
                            setTimeout(function() {
                                toast.classList.remove('animate-fade-in');
                                toast.classList.add('animate-fade-out');
                                setTimeout(function() {
                                    document.body.removeChild(toast);
                                }, 500);
                            }, 2000);
                        }
                    </script>
                </div>
            </div>
        </div>
    </main>
</div>
@include('partials.foot')
