<div>
    <div class="mb-6 flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <h2 class="text-2xl font-bold tracking-tight text-on-surface">Riwayat Transaksi</h2>
            <p class="text-on-surface-variant text-sm mt-1">Daftar semua transaksi masuk dari pelanggan.</p>
        </div>
        <div class="flex gap-2">
            <button class="bg-surface-container-lowest text-on-surface border border-outline-variant/20 font-semibold text-sm px-4 py-2.5 rounded-lg hover:bg-surface-container transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">filter_alt</span>
                Filter
            </button>
            <button class="bg-surface-container-lowest text-primary border border-outline-variant/20 font-semibold text-sm px-4 py-2.5 rounded-lg hover:bg-surface-container transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">download</span>
                Ekspor PDF
            </button>
        </div>
    </div>

    <!-- Stats summary specific to transactions -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
        <div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/10 shadow-sm">
            <p class="text-[10px] uppercase font-bold text-on-surface-variant tracking-wider mb-1">Total Hari Ini</p>
            <h4 class="text-lg font-black text-primary">$420.50</h4>
        </div>
        <div class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/10 shadow-sm">
            <p class="text-[10px] uppercase font-bold text-on-surface-variant tracking-wider mb-1">Transaksi Berhasil</p>
            <h4 class="text-lg font-black text-emerald-600">12</h4>
        </div>
    </div>

    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-surface-container">
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest">ID Trx</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest hidden md:table-cell">Tanggal & Waktu</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest">Pelanggan</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest text-right">Total</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest text-center">Status</th>
                        <th class="px-6 py-4 text-xs font-bold text-on-surface-variant uppercase tracking-widest text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-surface-container">
                    <!-- Tx 1 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4 text-sm font-semibold text-primary">#TRX-0042</td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant hidden md:table-cell">12 Okt 2023, 14:30</td>
                        <td class="px-6 py-4">
                            <p class="text-sm font-bold text-on-surface">Walk-in Customer</p>
                            <p class="text-[11px] text-on-surface-variant md:hidden">12 Okt, 14:30</p>
                        </td>
                        <td class="px-6 py-4 text-sm font-black text-on-surface text-right">$90.20</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700">
                                Selesai
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 hover:bg-slate-200 rounded-full transition-colors">
                                <span class="material-symbols-outlined text-lg text-slate-500">receipt_long</span>
                            </button>
                        </td>
                    </tr>
                    
                    <!-- Tx 2 -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4 text-sm font-semibold text-primary">#TRX-0041</td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant hidden md:table-cell">12 Okt 2023, 13:15</td>
                        <td class="px-6 py-4">
                            <p class="text-sm font-bold text-on-surface">Ahmad Budi</p>
                            <p class="text-[11px] text-on-surface-variant md:hidden">12 Okt, 13:15</p>
                        </td>
                        <td class="px-6 py-4 text-sm font-black text-on-surface text-right">$25.00</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700">
                                Selesai
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 hover:bg-slate-200 rounded-full transition-colors">
                                <span class="material-symbols-outlined text-lg text-slate-500">receipt_long</span>
                            </button>
                        </td>
                    </tr>

                    <!-- Tx 3 (Refund) -->
                    <tr class="hover:bg-surface-container-low transition-colors">
                        <td class="px-6 py-4 text-sm font-semibold text-primary">#TRX-0040</td>
                        <td class="px-6 py-4 text-sm text-on-surface-variant hidden md:table-cell">12 Okt 2023, 11:00</td>
                        <td class="px-6 py-4">
                            <p class="text-sm font-bold text-on-surface">Joko Susilo</p>
                            <p class="text-[11px] text-on-surface-variant md:hidden">12 Okt, 11:00</p>
                        </td>
                        <td class="px-6 py-4 text-sm font-black text-on-surface text-right">$45.00</td>
                        <td class="px-6 py-4 text-center">
                            <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-rose-100 text-rose-700">
                                Dikembalikan
                            </span>
                        </td>
                        <td class="px-6 py-4 text-right">
                            <button class="p-2 hover:bg-slate-200 rounded-full transition-colors">
                                <span class="material-symbols-outlined text-lg text-slate-500">receipt_long</span>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        <div class="p-4 border-t border-surface-container flex items-center justify-between">
            <p class="text-xs text-on-surface-variant hidden sm:block">Menampilkan 1 hingga 3 dari 124 riwayat</p>
            <div class="flex gap-2 w-full sm:w-auto justify-between sm:justify-end">
                <button class="px-3 py-1.5 border border-outline-variant/20 rounded-md hover:bg-surface-container transition-colors disabled:opacity-30 text-sm font-medium" disabled>Sebelumnya</button>
                <button class="px-3 py-1.5 border border-outline-variant/20 rounded-md hover:bg-surface-container transition-colors text-sm font-medium">Selanjutnya</button>
            </div>
        </div>
    </div>
</div>
