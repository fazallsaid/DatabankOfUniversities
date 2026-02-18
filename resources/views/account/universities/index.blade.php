@include('account.partials.head')
<div class="card">
    <div class="card-body">
        <div class="flex justify-end mb-4">
            <button type="button" class="btn btn-primary" onclick="document.getElementById('myUniv').showModal()">
                <i class="ti ti-plus"></i> Add University
            </button>
        </div>
        @include('account.universities.modal.addModal')

        <div class="relative overflow-x-auto">
            <!-- Loading spinner -->
            <div id="loadingSpinner" class="flex items-center justify-center py-8">
                <div class="animate-spin rounded-full h-12 w-12 border-4 border-blue-500 border-t-transparent"></div>
            </div>

            <!-- table -->
            <table class="text-left w-full whitespace-nowrap text-sm text-gray-500 display university" style="display: none;" id="universityTable">
                <thead>
                    <tr class="text-sm">
                        <th scope="col" class="p-4 font-bold">University Name</th>
                        <th scope="col" class="p-4 font-bold">Acronym</th>
                        <th scope="col" class="p-4 font-bold">Address</th>
                        <th scope="col" class="p-4 font-bold">Contribute By</th>
                    </tr>
                </thead>
                <tbody id="universityTableBody">
                    <!-- Data will be populated here -->
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    fetchUniversities();
});

function fetchUniversities() {
    const loadingSpinner = document.getElementById('loadingSpinner');
    const universityTable = document.getElementById('universityTable');

    // Show loading spinner, hide table
    loadingSpinner.style.display = 'flex';
    universityTable.style.display = 'none';

    fetch('http://127.0.0.1:8000/api/university')
        .then(response => response.json())
        .then(data => {
            if(data.success) {
                const tableBody = document.getElementById('universityTableBody');
                tableBody.innerHTML = '';

                data.data.forEach(university => {
                    const row = `
                        <tr>
                            <td class="p-4 text-sm">
                                <div class="flex flex-col gap-1 text-gray-500">
                                    <h3 class="font-medium"><a href="{{url('account/universities/detail/${university.university_acronym}')}}" class="detail transition-colors">${university.university_name}</a></h3>
                                </div>
                            </td>
                            <td class="p-4">
                                <h3 class="font-medium">${university.university_acronym}</h3>
                            </td>
                            <td class="p-4">
                                <h3 class="font-medium" title="${university.university_address}">${university.university_address.length > 30 ? university.university_address.substring(0,30) + '...' : university.university_address}</h3>
                            </td>
                            <td class="p-4">
                                <span class="font-medium">${university.f_name} ${university.l_name}</span>
                            </td>
                        </tr>
                    `;
                    tableBody.innerHTML += row;
                });

                // Hide loading spinner, show table
                loadingSpinner.style.display = 'none';
                universityTable.style.display = 'table';

                // Initialize DataTables after data is loaded
                if ($.fn.DataTable.isDataTable('#universityTable')) {
                    $('#universityTable').DataTable().destroy();
                }
                $('#universityTable').DataTable({
                    responsive: true,
                    language: {
                        search: "Search:",
                        lengthMenu: "Show _MENU_ entries",
                        info: "Showing _START_ to _END_ of _TOTAL_ entries",
                        infoEmpty: "Showing 0 to 0 of 0 entries",
                        infoFiltered: "(filtered from _MAX_ total entries)"
                    }
                });
            } else {
                console.error('Failed to fetch universities:', data.message);
                loadingSpinner.style.display = 'none';
            }
        })
        .catch(error => {
            console.error('Error fetching universities:', error);
            loadingSpinner.style.display = 'none';
        });
}

document.addEventListener('DOMContentLoaded', function() {
    const addUniversityForm = document.getElementById('addUniversityForm');

    if (addUniversityForm) {
        addUniversityForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const formData = {
                university_name: document.getElementById('university_name').value,
                university_acronym: document.getElementById('university_acronym').value,
                university_address: document.getElementById('university_address').value,
                university_acreditation: document.getElementById('university_acreditation').value,
                university_website: document.getElementById('university_website').value,
                user_id: document.getElementById('user_id').value
            };

            fetch('http://127.0.0.1:8000/api/university/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify(formData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                if(data.success) {
                    document.getElementById('myUniv').close();
                    fetchUniversities();
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'University added successfully!',
                        timer: 3000,
                        timerProgressBar: true
                    }).then(() => {
                        // Reload the page after the success message
                        window.location.reload();
                    });
                } else {
                    console.error('Failed to add university:', data.message);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Failed to add university: ' + data.message,
                        timer: 3000,
                        timerProgressBar: true
                    });
                }
            })
            .catch(error => {
                console.error('Error adding university:', error);
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'Error adding university: ' + error.message,
                    timer: 3000,
                    timerProgressBar: true
                });
            });
        });
    }
});
</script>

@include('account.partials.foot')
