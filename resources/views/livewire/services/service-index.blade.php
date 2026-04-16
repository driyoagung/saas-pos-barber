<div>
    <div class="mb-6 flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold tracking-tight text-on-surface">Layanan & Produk</h2>
            <p class="text-on-surface-variant text-sm mt-1">Manajemen katalog layanan potong rambut dan produk.</p>
        </div>
        <button class="bg-primary-gradient text-white font-semibold text-sm px-5 py-2.5 rounded-lg shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all flex items-center gap-2 w-full md:w-auto justify-center">
            <span class="material-symbols-outlined text-lg">add</span>
            Tambah Baru
        </button>
    </div>

    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden">
        <div class="p-4 md:p-6 border-b border-surface-container flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="relative w-full md:w-64">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
                <input type="text" class="w-full bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none" placeholder="Cari katalog...">
            </div>
            
            <div class="flex gap-2 w-full md:w-auto">
                <select class="bg-surface-container-low border-none text-sm rounded-lg py-2 pl-4 pr-10 focus:ring-2 focus:ring-primary w-full md:w-auto outline-none">
                    <option>Semua Kategori</option>
                    <option>Haircut</option>
                    <option>Produk</option>
                </select>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low">
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest">Nama Item</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest hidden md:table-cell">Kategori</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest">Harga</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-blue-50 text-primary flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined">content_cut</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-on-surface">Premium Haircut</p>
                                    <p class="text-[11px] text-on-surface-variant md:hidden">Haircut</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant hidden md:table-cell">
                            <span class="bg-slate-100 px-2 py-1 rounded-md text-slate-600 text-xs font-semibold">Haircut</span>
                        </td>
                        <td class="px-6 py-4 text-sm font-black text-on-surface">$45.00</td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 hover:bg-blue-50 text-blue-600 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button class="p-2 hover:bg-rose-50 text-rose-600 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </td>
                    </tr>
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4">
                            <div class="flex items-center gap-3">
                                <div class="w-10 h-10 rounded-lg bg-orange-50 text-orange-600 flex items-center justify-center shrink-0">
                                    <span class="material-symbols-outlined">inventory_2</span>
                                </div>
                                <div>
                                    <p class="text-sm font-bold text-on-surface">Pomade Suavecito</p>
                                    <p class="text-[11px] text-on-surface-variant md:hidden">Produk</p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant hidden md:table-cell">
                            <span class="bg-orange-100 px-2 py-1 rounded-md text-orange-700 text-xs font-semibold">Produk</span>
                        </td>
                        <td class="px-6 py-4 text-sm font-black text-on-surface">$18.50</td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 hover:bg-blue-50 text-blue-600 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">edit</span>
                            </button>
                            <button class="p-2 hover:bg-rose-50 text-rose-600 rounded-lg transition-colors">
                                <span class="material-symbols-outlined text-lg">delete</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination Mockup -->
        <div class="p-4 border-t border-surface-container flex items-center justify-between">
            <p class="text-xs text-on-surface-variant hidden sm:block">Menampilkan 1 hingga 2 dari 24 item</p>
            <div class="flex gap-2 w-full sm:w-auto justify-between sm:justify-end">
                <button class="px-3 py-1.5 border border-outline-variant/20 rounded-md hover:bg-surface-container transition-colors disabled:opacity-30 text-sm font-medium" disabled>Sebelumnya</button>
                <button class="px-3 py-1.5 border border-outline-variant/20 rounded-md hover:bg-surface-container transition-colors text-sm font-medium">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>
