<x-app-layout title="Account Management">
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">
            Account Management
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100">Daftar Admin</h3>
                    <button onclick="openModal()"
                        class="px-3 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md transition"
                        data-bs-toggle="tooltip" data-bs-placement="top" title="Tambah Admin">
                        <i class="bi bi-person-plus"></i>
                    </button>
                </div>

                <table class="w-full border-collapse">
                    <thead class="bg-gray-200 dark:bg-gray-700 text-left rounded-t-lg">
                        <tr>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100 rounded-tl-lg">Nama</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100">Email</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100">Password</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100">Role</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100 rounded-tr-lg">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3 text-gray-900 dark:text-gray-100">{{ $user->nama }}</td>
                                <td class="px-4 py-3 text-gray-900 dark:text-gray-100">{{ $user->email }}</td>
                                <td class="px-4 py-3 text-gray-900 dark:text-gray-100 relative group"><span
                                        class="password-mask">******</span></td>
                                <td class="px-4 py-3 text-gray-900 dark:text-gray-100">{{ $user->role }}</td>
                                <td class="px-4 py-3 flex space-x-2">
                                    <!-- Tombol Edit -->
                                    <button onclick="openModal({{ json_encode($user) }})"
                                        class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Akun">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>

                                    <!-- Tombol Reset Password -->
                                    <button onclick="openResetPasswordModal({{ $user->id }})"
                                        class="px-3 py-1 bg-yellow-600 hover:bg-yellow-700 text-white rounded-md transition"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Password">
                                        <i class="bi bi-key"></i>
                                    </button>

                                    <!-- Tombol Hapus -->
                                    <button onclick="openDeleteModal({{ $user->id }})"
                                        class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white rounded-md transition"
                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Hapus Akun">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Tambah/Edit User -->
    <div id="userModal"
        class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-[500px] max-w-[90vw] flex flex-col">
            <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4" id="modalTitle">Tambah Admin</h2>

            <form id="userForm" class="flex flex-col" onsubmit="saveUser(event)">
                @csrf
                <input type="hidden" id="userId" name="userId">

                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Nama:</label>
                    <input type="text" id="nama" name="nama"
                        class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-gray-300"
                        placeholder="Masukkan Nama" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Email:</label>
                    <div class="flex w-full border rounded-lg border-gray-300 dark:border-gray-600 overflow-hidden">
                        <input type="text" id="emailPrefix" name="emailPrefix"
                            class="w-full p-2 border-none rounded-l-lg dark:bg-gray-700 dark:text-gray-300"
                            placeholder="Masukkan Email" required>
                        <span
                            class="px-3 flex items-center dark:bg-gray-700 dark:text-gray-300 border-l border-gray-300 dark:border-gray-600">
                            @bumdessru.com
                        </span>
                    </div>
                    <input type="hidden" id="email" name="email">
                </div>

                <div class="mb-4" id="passwordField">
                    <label class="block text-gray-700 dark:text-gray-300">Password:</label>
                    <input type="password" id="password" name="password"
                        class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-gray-300"
                        placeholder="Masukkan Password">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Role:</label>
                    <input type="text" id="role" name="role" value="Admin"
                        class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-gray-400 italic bg-gray-200"
                        readonly placeholder="Role Pengguna">
                </div>

                <div class="flex justify-end space-x-3 mt-4">
                    <button type="button"
                        class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition"
                        onclick="closeModal()">Batal</button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                        Simpan
                    </button>
                </div>
            </form>

        </div>
    </div>

    <!-- Modal Reset Password -->
    <div id="resetPasswordModal"
        class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-[500px] max-w-[90vw] flex flex-col">
            <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">Reset Password</h2>

            <form id="resetPasswordForm" class="flex flex-col" onsubmit="resetPassword(event)">
                @csrf
                <input type="hidden" id="resetUserId" name="userId">

                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Password Baru:</label>
                    <input type="password" id="newPassword" name="newPassword"
                        class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-gray-400" required>
                </div>

                <div class="flex justify-end space-x-3 mt-4">
                    <button type="button"
                        class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition"
                        onclick="closeResetPasswordModal()">Batal</button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Modal Konfirmasi Hapus -->
    <div id="deleteUserModal"
        class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-[400px] max-w-[90vw] flex flex-col">
            <h2 class="text-xl font-bold text-gray-900 dark:text-gray-100 mb-4">Konfirmasi Hapus</h2>
            <p class="text-gray-700 dark:text-gray-300 mb-4">Apakah Anda yakin ingin menghapus akun ini?</p>

            <input type="hidden" id="deleteUserId">

            <div class="flex justify-end space-x-3">
                <button type="button"
                    class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition"
                    onclick="closeDeleteModal()">Batal</button>
                <button type="button" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md transition"
                    onclick="deleteUser()">Hapus</button>
            </div>
        </div>
    </div>


    <script>
        function openModal(user = null) {
            let modal = document.getElementById('userModal');
            let modalTitle = document.getElementById('modalTitle');
            let namaInput = document.getElementById('nama');
            let emailPrefixInput = document.getElementById('emailPrefix');
            let emailInput = document.getElementById('email');
            let roleInput = document.getElementById('role');
            let userIdInput = document.getElementById('userId');
            let passwordField = document.getElementById('passwordField');

            document.getElementById('userForm').reset(); // Reset form setiap kali modal dibuka

            if (user) {
                modalTitle.textContent = "Edit Admin";
                namaInput.value = user.nama;

                // Handle email untuk mode edit
                if (user.email && user.email.endsWith('@bumdessru.com')) {
                    emailPrefixInput.value = user.email.split('@')[0];
                } else {
                    emailPrefixInput.value = user.email;
                }

                roleInput.value = user.role;
                userIdInput.value = user.id;
                passwordField.style.display = 'none'; // Sembunyikan password saat edit
            } else {
                modalTitle.textContent = "Tambah Admin";
                roleInput.value = "Admin";
                passwordField.style.display = 'block'; // Tampilkan password saat tambah
            }

            modal.classList.remove('opacity-0', 'pointer-events-none');
        }

        function closeModal() {
            let modal = document.getElementById('userModal');
            modal.classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('userForm').reset(); // Reset form saat modal ditutup
            document.getElementById('userId').value = ""; // Kosongkan ID user
        }

        function saveUser(event) {
            event.preventDefault();

            // Combine email prefix with domain before submitting
            let emailPrefix = document.getElementById('emailPrefix').value;
            document.getElementById('email').value = emailPrefix + '@bumdessru.com';

            let form = document.getElementById("userForm");
            let formData = new FormData(form);
            let userId = document.getElementById("userId").value;
            let url = userId ? `/superadmin/account/update/${userId}` : `/superadmin/account/store`;
            let method = userId ? "PUT" : "POST";

            if (method === "PUT") {
                formData.append('_method', 'PUT');
            }

            fetch(url, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'error') {
                        let errorMessage = data.message || 'Terjadi kesalahan.';
                        Swal.fire("Error!", errorMessage, "error");
                    } else {
                        Swal.fire("Sukses!", data.message || "Data berhasil disimpan.", "success")
                            .then(() => location.reload());
                        closeModal();
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire("Error!", "Terjadi kesalahan saat menyimpan data.", "error");
                });
        }

        function openResetPasswordModal(userId) {
            document.getElementById('resetPasswordForm').reset(); // Reset form reset password
            document.getElementById('resetUserId').value = userId;
            document.getElementById('resetPasswordModal').classList.remove('opacity-0', 'pointer-events-none');
        }

        function closeResetPasswordModal() {
            let modal = document.getElementById('resetPasswordModal');
            modal.classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('resetPasswordForm').reset(); // Reset form saat modal ditutup
            document.getElementById('resetUserId').value = ""; // Kosongkan ID user
        }

        function resetPassword(event) {
            event.preventDefault();
            let formData = new FormData(document.getElementById("resetPasswordForm"));
            let userId = document.getElementById("resetUserId").value;

            formData.append('_method', 'PATCH');

            fetch(`/superadmin/account/reset-password/${userId}`, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === 'error') {
                        let errorMessage = data.message || 'Terjadi kesalahan.';
                        Swal.fire("Error!", errorMessage, "error");
                    } else {
                        Swal.fire("Sukses!", "Password berhasil direset.", "success")
                            .then(() => closeResetPasswordModal());
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire("Error!", "Gagal mereset password.", "error");
                });
        }

        function openDeleteModal(userId) {
            document.getElementById('deleteUserId').value = userId;
            document.getElementById('deleteUserModal').classList.remove('opacity-0', 'pointer-events-none');
        }

        function closeDeleteModal() {
            let modal = document.getElementById('deleteUserModal');
            modal.classList.add('opacity-0', 'pointer-events-none');
            document.getElementById('deleteUserId').value = ""; // Kosongkan ID user
        }

        function deleteUser() {
            let userId = document.getElementById('deleteUserId').value;
            let formData = new FormData();
            formData.append('_method', 'DELETE');

            fetch(`/superadmin/account/destroy/${userId}`, {
                    method: "POST",
                    body: formData,
                    headers: {
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }).then(response => response.json())
                .then(data => {
                    Swal.fire("Sukses!", "Akun berhasil dihapus.", "success").then(() => location.reload());
                }).catch(error => {
                    console.error('Error:', error);
                    Swal.fire("Error!", "Gagal menghapus akun.", "error");
                });

            closeDeleteModal();
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</x-app-layout>
