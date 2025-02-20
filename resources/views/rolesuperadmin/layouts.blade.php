<x-app-layout title="Layouts - {{ ucfirst(Auth::user()->role) }}">
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">
            Layouts - {{ ucfirst(Auth::user()->role) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden p-6">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Profil Desa</h3>

                <table class="w-full border-collapse">
                    <thead class="bg-gray-200 dark:bg-gray-700 text-left rounded-t-lg">
                        <tr>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100 rounded-tl-lg">Layout</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100 rounded-tr-lg">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (['sejarah_desa' => 'Sejarah Desa', 'visi_misi' => 'Visi & Misi Desa', 'fasilitas_desa' => 'Fasilitas Desa', 'prestasi_desa' => 'Prestasi Desa'] as $field => $label)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3 text-gray-900 dark:text-gray-100">{{ $label }}</td>
                                <td class="px-4 py-3">
                                    <button onclick="openModalCustom(this)" data-section="{{ $label }}"
                                        data-field="{{ $field }}" data-content="{{ $profilDesa->$field ?? '' }}"
                                        class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                                        Edit
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div id="editModal"
        class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 opacity-0 pointer-events-none transition-opacity duration-300">
        <div
            class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-[700px] max-w-[90vw] h-[500px] max-h-[90vh] flex flex-col">
            <h2 class="text-[32px] font-bold leading-[46px] font-clash-display text-gray-900 dark:text-gray-100 mb-4"
                id="modalTitle">Edit Layout</h2>

            <form id="editForm" class="flex flex-col flex-grow">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Judul:</label>
                    <input type="text" id="title" name="title"
                        class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-gray-400 italic" readonly>
                </div>

                <div class="mb-4 flex-grow">
                    <label class="block text-gray-700 dark:text-gray-300">Deskripsi:</label>
                    <textarea id="description" name="description"
                        class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white h-[200px] resize-none overflow-y-auto scrollbar-thin scrollbar-thumb-gray-400 scrollbar-track-gray-200 dark:scrollbar-thumb-gray-600 dark:scrollbar-track-gray-900"></textarea>
                </div>

                <input type="hidden" id="dbFieldName" name="dbFieldName">

                <div class="flex justify-end space-x-3 mt-4">
                    <button type="button"
                        class="w-full sm:w-auto px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition"
                        onclick="closeModal()">Batal</button>
                    <button type="submit"
                        class="w-full sm:w-auto px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById("editForm").addEventListener("submit", function(event) {
                event.preventDefault();

                const form = this;
                const dbFieldName = document.getElementById("dbFieldName").value;
                const description = document.getElementById("description").value;
                const token = document.querySelector('input[name="_token"]').value;

                fetch("{{ route('superadmin.layouts.update') }}", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": token
                        },
                        body: JSON.stringify({
                            dbFieldName: dbFieldName,
                            description: description
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.status === "success") {
                            Swal.fire({
                                title: "Berhasil!",
                                text: data.message,
                                icon: "success",
                                confirmButtonText: "OK"
                            }).then(() => {
                                location.reload();
                            });
                        } else {
                            Swal.fire({
                                title: "Gagal!",
                                text: data.message || "Terjadi kesalahan.",
                                icon: "error",
                                confirmButtonText: "OK"
                            });
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        Swal.fire({
                            title: "Gagal!",
                            text: "Terjadi kesalahan dalam menyimpan data.",
                            icon: "error",
                            confirmButtonText: "OK"
                        });
                    });
            });
        });

        function openModalCustom(buttonElement) {
            document.getElementById('modalTitle').innerText = 'Edit ' + buttonElement.getAttribute('data-section');
            document.getElementById('title').value = buttonElement.getAttribute('data-section');
            document.getElementById('description').value = buttonElement.getAttribute('data-content');
            document.getElementById('dbFieldName').value = buttonElement.getAttribute('data-field');

            const modal = document.getElementById('editModal');
            modal.classList.remove('opacity-0', 'pointer-events-none');
        }

        function closeModal() {
            const modal = document.getElementById('editModal');
            modal.classList.add('opacity-0', 'pointer-events-none');
        }
    </script>
</x-app-layout>
