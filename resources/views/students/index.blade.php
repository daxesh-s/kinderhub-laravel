<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Students List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .table-row:hover {
            background-color: #f8fafc;
        }

        .modal {
            animation: modalPop 0.3s ease-out forwards;
        }

        @keyframes modalPop {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }
    </style>
</head>

<body class="bg-gray-50">

    <div class="min-h-screen">
        <!-- Top Navigation -->
        <nav class="bg-white border-b border-gray-200">
            <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
                <div class="flex items-center gap-x-3">
                    <div
                        class="w-8 h-8 bg-blue-600 rounded-xl flex items-center justify-center text-white font-bold text-xl">
                        S</div>
                    <h1 class="text-2xl font-semibold text-gray-900">Student Manager</h1>
                </div>
                <button
                    class="flex items-center gap-x-2 bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-2xl font-medium text-sm transition-colors">
                    <i class="fas fa-plus"></i>
                    <span>Add Student</span>
                </button>
            </div>
        </nav>
        {{-- {{ dd($students) }} --}}

        <div class="max-w-7xl mx-auto px-6 py-8">
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:items-center justify-between mb-8">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-900">Students</h2>
                    <p class="text-gray-500 mt-1">Total Students: <span class="font-semibold text-gray-700">
                            {{ $students->total() }}
                        </span>
                    </p>
                </div>
            </div>

            <!-- Controls -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 mb-8">
                <div class="flex flex-col lg:flex-row gap-4">
                    <div class="flex-1 relative">
                        <div class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-400">
                            <i class="fas fa-search"></i>
                        </div>
                        <input type="text" placeholder="Search by name, email or phone..."
                            class="w-full bg-gray-50 border border-gray-200 pl-11 py-3 rounded-2xl focus:outline-none focus:border-blue-500 text-sm">
                    </div>

                    <div class="flex flex-wrap gap-3">
                        <select
                            class="bg-white border border-gray-200 px-5 py-3 rounded-2xl text-sm focus:outline-none focus:border-blue-500">
                            <option value="">All Countries</option>
                            <option value="India">India</option>
                            <option value="USA">USA</option>
                            <option value="UK">UK</option>
                        </select>

                        <select
                            class="bg-white border border-gray-200 px-5 py-3 rounded-2xl text-sm focus:outline-none focus:border-blue-500">
                            <option value="">All States</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="California">California</option>
                        </select>

                        <button
                            class="px-6 py-3 text-gray-500 hover:text-gray-700 flex items-center gap-x-2 text-sm font-medium">
                            <i class="fas fa-sync-alt"></i> Reset
                        </button>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full min-w-full">
                        <thead>
                            <tr class="border-b border-gray-100 bg-gray-50">
                                <th
                                    class="px-6 py-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-12">
                                    #</th>
                                <th
                                    class="px-6 py-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Student</th>
                                <th
                                    class="px-6 py-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Contact</th>
                                <th
                                    class="px-6 py-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Location</th>
                                <th
                                    class="px-6 py-5 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Created At</th>
                                <th
                                    class="px-6 py-5 text-center text-xs font-medium text-gray-500 uppercase tracking-wider w-32">
                                    Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach ($students as $student)
                                <tr class="table-row">
                                    <td class="px-6 py-6 text-sm text-gray-400 font-medium">{{ $student->id }}</td>
                                    <td class="px-6 py-6">
                                        <div class="flex items-center gap-x-3">
                                            @if (empty($student->profile_picture))
                                                <div
                                                    class="w-9 h-9 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center font-medium">
                                                    {{ substr($student->first_name, 0, 1) }}{{ substr($student->last_name, 0, 1) }}
                                                </div>
                                            @else
                                                <div
                                                    class="w-9 h-9 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-2xl flex items-center justify-center font-medium">
                                                    <img src={{ $student->profile_picture }} />
                                                </div>
                                            @endif

                                            <div class="font-semibold text-gray-900">
                                                {{ $student->first_name . ' ' . $student->last_name }}</div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-6 text-sm">
                                        {{ $student->email }}<br>
                                        <span class="text-gray-500">{{ $student->phone }}</span>
                                    </td>
                                    <td class="px-6 py-6 text-sm">
                                        {{ $student->city }}, {{ $student->state }}<br>
                                        <span class="text-gray-400">{{ $student->country }}</span>
                                    </td>
                                    <td class="px-6 py-6 text-sm text-gray-500">
                                        {{ $student->created_at->format('d M Y') }}</td>
                                    <td class="px-6 py-6">
                                        <div class="flex items-center justify-center gap-x-3">
                                            <button onclick="viewStudent(1)"
                                                class="text-blue-600 hover:text-blue-700 p-2">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                            <button onclick="editStudent(1)"
                                                class="text-amber-600 hover:text-amber-700 p-2">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button onclick="showDeleteModal(1)"
                                                class="text-red-600 hover:text-red-700 p-2">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="px-6 py-5 bg-gray-50 border-t flex items-center justify-between">
                    <div class="text-sm text-gray-500">
                        Showing 1 to 10 of 248 students
                    </div>
                    <div class="flex items-center gap-x-1">
                        <button class="px-4 py-2 text-sm text-gray-400 hover:text-gray-600 flex items-center gap-x-1">
                            <i class="fas fa-chevron-left"></i> Prev
                        </button>
                        <button
                            class="w-8 h-8 flex items-center justify-center bg-blue-600 text-white rounded-2xl text-sm font-medium">1</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded-2xl text-sm font-medium text-gray-600">2</button>
                        <button
                            class="w-8 h-8 flex items-center justify-center hover:bg-gray-100 rounded-2xl text-sm font-medium text-gray-600">3</button>
                        <button class="px-4 py-2 text-sm text-gray-400 hover:text-gray-600 flex items-center gap-x-1">
                            Next <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- View Detail Modal -->
    <div id="viewModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="modal bg-white rounded-3xl max-w-md w-full mx-4 overflow-hidden">
            <div class="px-8 py-6 border-b flex items-center justify-between">
                <h3 class="text-xl font-semibold">Student Details</h3>
                <button onclick="closeViewModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-2xl"></i>
                </button>
            </div>
            <div class="p-8 space-y-6" id="modalContent">
                <!-- Content filled by JS -->
            </div>
            <div class="px-8 py-5 border-t bg-gray-50 flex justify-end">
                <button onclick="closeViewModal()"
                    class="px-8 py-3 bg-gray-100 hover:bg-gray-200 rounded-2xl font-medium">
                    Close
                </button>
            </div>
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div id="deleteModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
        <div class="modal bg-white rounded-3xl max-w-sm w-full mx-4 p-8">
            <div class="text-center">
                <div
                    class="w-16 h-16 mx-auto bg-red-100 text-red-600 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-trash text-3xl"></i>
                </div>
                <h3 class="text-xl font-semibold mb-2">Delete Student?</h3>
                <p class="text-gray-500 mb-8">This action cannot be undone.</p>

                <div class="flex gap-4">
                    <button onclick="closeDeleteModal()"
                        class="flex-1 py-4 text-gray-700 font-medium border border-gray-300 rounded-2xl hover:bg-gray-50">
                        Cancel
                    </button>
                    <button onclick="confirmDelete()"
                        class="flex-1 py-4 bg-red-600 hover:bg-red-700 text-white font-medium rounded-2xl">
                        Yes, Delete
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        let currentDeleteId = null;

        function viewStudent(id) {
            const students = {
                1: {
                    name: "Aarav Sharma",
                    email: "aarav.sharma@email.com",
                    phone: "+91 98765 43210",
                    city: "Mumbai",
                    state: "Maharashtra",
                    country: "India",
                    created: "15 Jan 2025",
                    updated: "20 Jun 2025"
                },
                2: {
                    name: "Sophia Williams",
                    email: "sophia.w@email.com",
                    phone: "+1 415-555-0123",
                    city: "San Francisco",
                    state: "California",
                    country: "USA",
                    created: "10 Feb 2025",
                    updated: "01 Jul 2025"
                }
            };

            const student = students[id];
            if (!student) return;

            document.getElementById('modalContent').innerHTML = `
                <div class="flex items-center gap-x-4 mb-8">
                    <div class="w-20 h-20 bg-gradient-to-br from-blue-500 to-indigo-600 text-white rounded-3xl flex items-center justify-center text-4xl font-medium">
                        ${student.name.split(' ').map(n => n[0]).join('')}
                    </div>
                    <div>
                        <h4 class="text-2xl font-semibold">${student.name}</h4>
                    </div>
                </div>
                <div class="space-y-5">
                    <div><strong>Email:</strong> <a href="mailto:${student.email}" class="text-blue-600">${student.email}</a></div>
                    <div><strong>Phone:</strong> ${student.phone}</div>
                    <div><strong>Location:</strong> ${student.city}, ${student.state}, ${student.country}</div>
                    <div><strong>Created At:</strong> ${student.created}</div>
                    <div><strong>Last Updated:</strong> ${student.updated}</div>
                </div>
            `;
            document.getElementById('viewModal').classList.remove('hidden');
        }

        function closeViewModal() {
            document.getElementById('viewModal').classList.add('hidden');
        }

        function showDeleteModal(id) {
            currentDeleteId = id;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            document.getElementById('deleteModal').classList.add('hidden');
        }

        function confirmDelete() {
            alert(`Student with ID ${currentDeleteId} has been deleted. (Demo)`);
            closeDeleteModal();
            // In real app, you would remove the row here
        }

        function editStudent(id) {
            alert(`Edit student ${id} clicked. (You can connect this to your edit form)`);
        }

        // Close modals when clicking outside
        document.addEventListener('click', function(e) {
            const viewModal = document.getElementById('viewModal');
            const deleteModal = document.getElementById('deleteModal');
            if (e.target === viewModal) closeViewModal();
            if (e.target === deleteModal) closeDeleteModal();
        });
    </script>
</body>

</html>
