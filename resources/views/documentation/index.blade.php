@include('partials.head')
<div class="relative flex min-h-screen">
    <!-- Sidebar -->
    @include('partials.sidebar')

    <!-- Main content -->
    <main class="flex-1 overflow-y-auto bg-white pl-64 pt-16">
        <div class="max-w-4xl px-4 py-8 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold text-gray-900">Overview</h1>

            <div class="mt-6 prose prose-slate max-w-none">
                <p class="mb-5"><b>Databank of Universities</b> is a web-based API application that provides access to anyone who wants to retrieve data about universities across Indonesia. This application is designed to assist developers and specific parties who wish to integrate university information into their projects.</p>
                <p class="mb-5"><b>Databank of Universities</b> offers comprehensive data on various universities in Indonesia. By utilizing this API, users can access information such as university names, locations, accreditations, and other relevant details. This application aims to serve as a valuable resource for developers looking to build systems or projects that incorporate university data.</p>

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
