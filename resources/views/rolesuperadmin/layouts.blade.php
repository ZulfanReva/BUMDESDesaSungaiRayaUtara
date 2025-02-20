<x-app-layout title="Layouts - {{ ucfirst(Auth::user()->role) }}">
    <x-slot name="header">
        <h2 class="text-2xl font-semibold text-gray-800 dark:text-gray-200">
            Layouts - {{ ucfirst(Auth::user()->role) }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 shadow-lg rounded-lg overflow-hidden p-6">
                <!-- Header Profil Desa -->
                <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Profil Desa</h3>

                <table class="w-full border-collapse">
                    <thead class="bg-gray-200 dark:bg-gray-700 text-left rounded-t-lg">
                        <tr>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100 rounded-tl-lg">Layout</th>
                            <th class="px-4 py-2 text-gray-800 dark:text-gray-100 rounded-tr-lg">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3 text-gray-900 dark:text-gray-100">Sejarah Desa</td>
                            <td class="px-4 py-3">
                                <button onclick="openModal('Sejarah Desa', '{{ $profilDesa->sejarah_desa ?? '' }}')"
                                    class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3 text-gray-900 dark:text-gray-100">Visi & Misi Desa</td>
                            <td class="px-4 py-3">
                                <!-- Fixed button with data attribute -->
                                <button onclick="openModalCustom(this)" data-section="Visi & Misi Desa"
                                    data-field="visi_misi" data-content="{{ $profilDesa->visi_misi ?? '' }}"
                                    class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        <tr class="border-b dark:border-gray-700">
                            <td class="px-4 py-3 text-gray-900 dark:text-gray-100">Fasilitas Desa</td>
                            <td class="px-4 py-3">
                                <button onclick="openModal('Fasilitas Desa', '{{ $profilDesa->fasilitas_desa ?? '' }}')"
                                    class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                                    Edit
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-4 py-3 text-gray-900 dark:text-gray-100">Prestasi Desa</td>
                            <td class="px-4 py-3">
                                <!-- Fixed button with data attribute -->
                                <button onclick="openModalCustom(this)" data-section="Prestasi Desa"
                                    data-field="prestasi_desa" data-content="{{ $profilDesa->prestasi_desa ?? '' }}"
                                    class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <!-- Modal -->
    <div id="editModal"
        class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-[500px]">
            <h2 class="text-[32px] font-bold leading-[46px] font-clash-display text-gray-900 dark:text-gray-100"
                id="modalTitle">Edit Layout</h2>

            <form id="editForm">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Judul:</label>
                    <input type="text" id="title" name="title"
                        class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" readonly>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Deskripsi:</label>
                    <textarea id="description" name="description" class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white"></textarea>
                </div>

                <!-- Hidden field to store the database field name -->
                <input type="hidden" id="dbFieldName" name="dbFieldName" value="">

                <div class="flex justify-end">
                    <button type="button"
                        class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition mr-2"
                        onclick="closeModal()">Batal</button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Script Modal dan Form Auto-Fill -->
    <!-- Modal -->
    <div id="editModal"
        class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 opacity-0 pointer-events-none transition-opacity duration-300">
        <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-lg w-[500px]">
            <h2 class="text-[32px] font-bold leading-[46px] font-clash-display text-gray-900 dark:text-gray-100"
                id="modalTitle">Edit Layout</h2>

            <form id="editForm">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Judul:</label>
                    <input type="text" id="title" name="title"
                        class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white" readonly>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 dark:text-gray-300">Deskripsi:</label>
                    <textarea id="description" name="description" class="w-full p-2 border rounded-lg dark:bg-gray-700 dark:text-white"></textarea>
                </div>

                <input type="hidden" id="dbFieldName" name="dbFieldName" value="">

                <div class="flex justify-end">
                    <button type="button"
                        class="px-4 py-2 bg-gray-500 hover:bg-gray-600 text-white rounded-md transition mr-2"
                        onclick="closeModal()">Batal</button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md transition">Simpan</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function openModal(section, content) {
            document.getElementById('modalTitle').innerText = section;
            document.getElementById('title').value = section;
            document.getElementById('description').value = content;
            document.getElementById('dbFieldName').value = '';
            const modal = document.getElementById('editModal');
            modal.classList.remove('opacity-0', 'pointer-events-none');
            console.log("Modal opened for: " + section);
        }

        function openModalCustom(buttonElement) {
            const section = buttonElement.getAttribute('data-section');
            const content = buttonElement.getAttribute('data-content');
            const fieldName = buttonElement.getAttribute('data-field');

            document.getElementById('modalTitle').innerText = section;
            document.getElementById('title').value = section;
            document.getElementById('description').value = content;
            document.getElementById('dbFieldName').value = fieldName;
            const modal = document.getElementById('editModal');
            modal.classList.remove('opacity-0', 'pointer-events-none');
            console.log("Custom modal opened for: " + section + ", field: " + fieldName);
        }

        function closeModal() {
            const modal = document.getElementById('editModal');
            modal.classList.add('opacity-0', 'pointer-events-none');
        }
    </script>
</x-app-layout>
