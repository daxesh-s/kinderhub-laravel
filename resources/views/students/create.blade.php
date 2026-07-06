<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add New Student</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }

        .form-input {
            transition: all 0.2s ease;
        }

        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
            border-color: #3b82f6;
        }

        .upload-area {
            transition: all 0.3s ease;
        }

        .upload-area:hover {
            background-color: #f8fafc;
            border-color: #3b82f6;
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
                        S
                    </div>
                    <h1 class="text-2xl font-semibold text-gray-900">Student Manager</h1>
                </div>
                <div class="flex items-center gap-x-4">
                    <a href="students-list.html"
                        class="flex items-center gap-x-2 text-gray-600 hover:text-gray-900 px-4 py-2 rounded-2xl text-sm font-medium">
                        <i class="fas fa-arrow-left"></i>
                        <span>Back to List</span>
                    </a>
                </div>
            </div>
        </nav>

        <div class="max-w-5xl mx-auto px-6 py-8">
            <!-- Header -->
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-semibold text-gray-900">Add New Student</h2>
                    <p class="text-gray-500 mt-1">Fill in the student information below</p>
                </div>
                <div class="flex items-center gap-x-3">
                    <button onclick="window.history.back()"
                        class="px-6 py-3 text-gray-700 font-medium border border-gray-300 rounded-2xl hover:bg-gray-50 transition-colors">
                        Cancel
                    </button>
                    <button onclick="saveStudent()"
                        class="flex items-center gap-x-2 bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-2xl font-medium transition-colors">
                        <i class="fas fa-save"></i>
                        <span>Save Student</span>
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
                <!-- Main Form -->
                <div class="lg:col-span-8">
                    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-8">

                        <!-- Profile Picture -->
                        <div class="flex items-start gap-6 mb-10">
                            <div id="profilePreview"
                                class="w-28 h-28 bg-gray-100 border-2 border-dashed border-gray-300 rounded-3xl flex items-center justify-center overflow-hidden">
                                <div class="text-center">
                                    <i class="fas fa-user text-4xl text-gray-400"></i>
                                    <p class="text-xs text-gray-500 mt-2">Photo</p>
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Profile Picture</label>
                                <input type="file" id="profilePicture" accept="image/*" class="hidden"
                                    onchange="previewImage(event)">
                                <button onclick="document.getElementById('profilePicture').click()"
                                    class="upload-area border border-dashed border-gray-300 rounded-2xl px-6 py-4 text-sm text-gray-600 hover:text-blue-600 flex items-center gap-x-3">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <span>Upload Photo</span>
                                </button>
                                <p class="text-xs text-gray-500 mt-2">JPG, PNG up to 2MB</p>
                            </div>
                        </div>

                        <form id="studentForm" class="space-y-10">
                            <!-- Academic Information -->
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-5 flex items-center gap-x-3">
                                    <span class="w-2 h-6 bg-blue-600 rounded"></span>
                                    Academic Information
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <!-- School -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">School <span
                                                class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <select id="school_id"
                                                class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                                <option value="">Select School</option>
                                                <option value="1">Delhi Public School</option>
                                                <option value="2">St. Xavier's International</option>
                                                <option value="3">Modern Convent School</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Class -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Class <span
                                                class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <select id="class_id"
                                                class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                                <option value="">Select Class</option>
                                                <option value="1">Class 1</option>
                                                <option value="2">Class 2</option>
                                                <option value="3">Class 3</option>
                                                <option value="4">Class 4</option>
                                                <option value="5">Class 5</option>
                                                <option value="6">Class 6</option>
                                                <option value="7">Class 7</option>
                                                <option value="8">Class 8</option>
                                                <option value="9">Class 9</option>
                                                <option value="10">Class 10</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Admission Number -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Admission Number
                                            <span class="text-red-500">*</span></label>
                                        <div class="relative">
                                            <div
                                                class="absolute left-5 top-1/2 -translate-y-1/2 text-gray-400 font-medium">
                                                ADM</div>
                                            <input type="text" id="admission_number"
                                                class="form-input w-full bg-gray-50 border border-gray-200 pl-16 py-3.5 rounded-2xl text-sm focus:outline-none"
                                                placeholder="12345">
                                        </div>
                                    </div>

                                    <!-- Roll Number -->
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Roll Number</label>
                                        <input type="number" id="roll_number"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                </div>
                            </div>

                            <!-- Personal Information -->
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-5 flex items-center gap-x-3">
                                    <span class="w-2 h-6 bg-emerald-600 rounded"></span>
                                    Personal Information
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">First Name <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" id="first_name"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Last Name <span
                                                class="text-red-500">*</span></label>
                                        <input type="text" id="last_name"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
                                        <div class="flex gap-6">
                                            <label class="flex items-center gap-x-2">
                                                <input type="radio" name="gender" value="MALE"
                                                    class="w-4 h-4 text-blue-600">
                                                <span class="text-sm">Male</span>
                                            </label>
                                            <label class="flex items-center gap-x-2">
                                                <input type="radio" name="gender" value="FEMALE"
                                                    class="w-4 h-4 text-blue-600">
                                                <span class="text-sm">Female</span>
                                            </label>
                                            <label class="flex items-center gap-x-2">
                                                <input type="radio" name="gender" value="OTHER"
                                                    class="w-4 h-4 text-blue-600">
                                                <span class="text-sm">Other</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Date of
                                            Birth</label>
                                        <input type="date" id="date_of_birth"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Blood Group</label>
                                        <select id="blood_group"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                            <option value="">Select Blood Group</option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Nationality</label>
                                        <input type="text" id="nationality" value="Indian"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                </div>
                            </div>

                            <!-- Parents -->
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-5 flex items-center gap-x-3">
                                    <span class="w-2 h-6 bg-amber-600 rounded"></span>
                                    Parents Information
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Father's
                                            Name</label>
                                        <input type="text" id="father_name"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Mother's
                                            Name</label>
                                        <input type="text" id="mother_name"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                </div>
                            </div>

                            <!-- Contact -->
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-5 flex items-center gap-x-3">
                                    <span class="w-2 h-6 bg-purple-600 rounded"></span>
                                    Contact Information
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                                        <input type="email" id="email"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Phone</label>
                                        <input type="tel" id="phone"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>

                                    <div class="md:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Address</label>
                                        <textarea id="address" rows="3"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none"></textarea>
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">City</label>
                                        <input type="text" id="city"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">State</label>
                                        <input type="text" id="state"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>

                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Country</label>
                                        <input type="text" id="country" value="India"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Postal Code</label>
                                        <input type="text" id="postal_code"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                </div>
                            </div>

                            <!-- Additional -->
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-5 flex items-center gap-x-3">
                                    <span class="w-2 h-6 bg-rose-600 rounded"></span>
                                    Additional Details
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Religion</label>
                                        <input type="text" id="religion"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Caste</label>
                                        <input type="text" id="caste"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Previous
                                            School</label>
                                        <input type="text" id="previous_school"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                </div>

                                <div class="mt-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">Medical Notes</label>
                                    <textarea id="medical_notes" rows="3"
                                        class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none"
                                        placeholder="Any medical conditions or allergies..."></textarea>
                                </div>
                            </div>

                            <!-- Emergency Contact -->
                            <div>
                                <h3 class="text-lg font-semibold text-gray-900 mb-5 flex items-center gap-x-3">
                                    <span class="w-2 h-6 bg-red-600 rounded"></span>
                                    Emergency Contact
                                </h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Contact
                                            Name</label>
                                        <input type="text" id="emergency_contact_name"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-2">Contact
                                            Phone</label>
                                        <input type="tel" id="emergency_contact_phone"
                                            class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none">
                                    </div>
                                </div>
                            </div>

                            <!-- Admission Date -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Admission Date</label>
                                <input type="date" id="admission_date" value="2025-07-06"
                                    class="form-input w-full bg-gray-50 border border-gray-200 px-5 py-3.5 rounded-2xl text-sm focus:outline-none max-w-xs">
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="lg:col-span-4">
                    <div class="bg-white rounded-3xl shadow-sm border border-gray-100 p-6 sticky top-8">
                        <h4 class="font-semibold text-gray-900 mb-4">Instructions</h4>
                        <ul class="space-y-4 text-sm text-gray-600">
                            <li class="flex gap-3">
                                <i class="fas fa-check text-emerald-500 mt-0.5"></i>
                                Fields marked with * are required
                            </li>
                            <li class="flex gap-3">
                                <i class="fas fa-check text-emerald-500 mt-0.5"></i>
                                Upload a clear passport size photo
                            </li>
                            <li class="flex gap-3">
                                <i class="fas fa-check text-emerald-500 mt-0.5"></i>
                                Admission number will be auto-prefixed with ADM
                            </li>
                            <li class="flex gap-3">
                                <i class="fas fa-check text-emerald-500 mt-0.5"></i>
                                You can save as draft and complete later
                            </li>
                        </ul>

                        <div class="mt-10 pt-6 border-t">
                            <button onclick="saveStudent()"
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-4 rounded-2xl font-medium flex items-center justify-center gap-x-2">
                                <i class="fas fa-save"></i>
                                Save Student
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('profilePreview');
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.innerHTML = `<img src="${e.target.result}" class="w-full h-full object-cover">`;
                }
                reader.readAsDataURL(file);
            }
        }

        function saveStudent() {
            // Demo save action
            alert("✅ Student has been successfully created! (Demo)");
            // In real app, submit form via AJAX or redirect
            // window.location.href = "students-list.html";
        }

        async function fetchSchoolsData() {
            try {
                let options = '<option value>Select School</option>';
                const req = await fetch("{{ route('schools.lists') }}")
                const data = await req.json()
                data.forEach((school)=>{
                    options += `<option value='${school.id}'>${school.name}</option>`;
                })
                document.getElementById("school_id").innerHTML= options;
            } catch (error) {
                console.error("Error fetchSchoolsData: ", error);
            }
        }
        window.addEventListener('load', async () => {
            await fetchSchoolsData()
        })
    </script>
</body>

</html>
