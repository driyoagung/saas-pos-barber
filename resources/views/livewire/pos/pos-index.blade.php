<div>
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold tracking-tight text-on-surface">Point of Sale</h2>
            <p class="text-on-surface-variant text-sm mt-1">Pilih layanan atau produk kasir barbershop.</p>
        </div>
        <div class="relative w-full max-w-xs hidden sm:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
            <input type="text" class="w-full bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none" placeholder="Cari layanan...">
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Catalog Section -->
        <div class="lg:col-span-2 flex flex-col gap-6">
            <!-- Categories / Filter -->
            <div class="flex gap-2 overflow-x-auto hide-scrollbar pb-2">
                <button class="px-4 py-2 bg-primary text-white rounded-lg text-sm font-semibold shrink-0">Semua</button>
                <button class="px-4 py-2 bg-surface-container-low text-on-surface-variant hover:bg-surface-container rounded-lg text-sm font-semibold shrink-0 transition-colors">Haircut</button>
                <button class="px-4 py-2 bg-surface-container-low text-on-surface-variant hover:bg-surface-container rounded-lg text-sm font-semibold shrink-0 transition-colors">Hair Care</button>
                <button class="px-4 py-2 bg-surface-container-low text-on-surface-variant hover:bg-surface-container rounded-lg text-sm font-semibold shrink-0 transition-colors">Produk/Pomade</button>
            </div>

            <!-- Items Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Item 1 -->
                <button class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/20 hover:border-primary/50 hover:shadow-md transition-all text-left group flex flex-col justify-between h-32 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-blue-50 rounded-full blur-xl -mr-8 -mt-8 group-hover:bg-blue-100 transition-colors"></div>
                    <div>
                        <span class="material-symbols-outlined text-primary mb-2">content_cut</span>
                        <h4 class="font-bold text-on-surface text-sm leading-tight">Premium Haircut</h4>
                    </div>
                    <p class="font-black text-primary">$45.00</p>
                </button>
                
                <!-- Item 2 -->
                <button class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/20 hover:border-primary/50 hover:shadow-md transition-all text-left group flex flex-col justify-between h-32 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-slate-50 rounded-full blur-xl -mr-8 -mt-8 group-hover:bg-slate-100 transition-colors"></div>
                    <div>
                        <span class="material-symbols-outlined text-secondary mb-2">face</span>
                        <h4 class="font-bold text-on-surface text-sm leading-tight">Basic Haircut</h4>
                    </div>
                    <p class="font-black text-on-surface">$25.00</p>
                </button>

                <!-- Item 3 -->
                <button class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/20 hover:border-primary/50 hover:shadow-md transition-all text-left group flex flex-col justify-between h-32 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-slate-50 rounded-full blur-xl -mr-8 -mt-8 group-hover:bg-slate-100 transition-colors"></div>
                    <div>
                        <span class="material-symbols-outlined text-secondary mb-2">dry_cleaning</span>
                        <h4 class="font-bold text-on-surface text-sm leading-tight">Hot Towel Shave</h4>
                    </div>
                    <p class="font-black text-on-surface">$20.00</p>
                </button>

                <!-- Item 4 -->
                <button class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/20 hover:border-primary/50 hover:shadow-md transition-all text-left group flex flex-col justify-between h-32 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-slate-50 rounded-full blur-xl -mr-8 -mt-8 group-hover:bg-slate-100 transition-colors"></div>
                    <div>
                        <span class="material-symbols-outlined text-emerald-600 mb-2">water_drop</span>
                        <h4 class="font-bold text-on-surface text-sm leading-tight">Creambath / Hair Spa</h4>
                    </div>
                    <p class="font-black text-on-surface">$35.00</p>
                </button>

                <!-- Item 5 -->
                <button class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/20 hover:border-primary/50 hover:shadow-md transition-all text-left group flex flex-col justify-between h-32 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-16 h-16 bg-orange-50 rounded-full blur-xl -mr-8 -mt-8 group-hover:bg-orange-100 transition-colors"></div>
                    <div>
                        <span class="material-symbols-outlined text-orange-600 mb-2">inventory_2</span>
                        <h4 class="font-bold text-on-surface text-sm leading-tight">Pomade Suavecito</h4>
                    </div>
                    <p class="font-black text-on-surface">$18.50</p>
                </button>
            </div>
        </div>

        <!-- Cart Section -->
        <div class="lg:col-span-1">
            <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/20 flex flex-col h-[calc(100vh-10rem)] md:h-[calc(100vh-8rem)] sticky top-24">
                <div class="p-4 border-b border-surface-container flex items-center justify-between">
                    <h3 class="font-bold text-on-surface">Order Detail</h3>
                    <span class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded-md">Order #0042</span>
                </div>
                
                <!-- Cart Items -->
                <div class="flex-1 overflow-y-auto p-4 space-y-4">
                    <!-- Cart Item 1 -->
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex-1">
                            <h4 class="font-bold text-sm text-on-surface">Premium Haircut</h4>
                            <p class="text-[11px] text-on-surface-variant">$45.00 x 1</p>
                        </div>
                        <div class="font-black text-sm text-on-surface">$45.00</div>
                        <button class="p-1 text-slate-400 hover:text-error transition-colors rounded">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="flex items-center justify-between gap-2">
                        <div class="flex-1">
                            <h4 class="font-bold text-sm text-on-surface">Pomade Suavecito</h4>
                            <p class="text-[11px] text-on-surface-variant">$18.50 x 2</p>
                        </div>
                        <div class="font-black text-sm text-on-surface">$37.00</div>
                        <button class="p-1 text-slate-400 hover:text-error transition-colors rounded">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                </div>

                <!-- Totals & Checkout -->
                <div class="p-4 bg-surface-container-low rounded-b-xl border-t border-surface-container">
                    <div class="space-y-2 mb-4 text-sm">
                        <div class="flex justify-between text-on-surface-variant">
                            <span>Subtotal</span>
                            <span class="font-bold">$82.00</span>
                        </div>
                        <div class="flex justify-between text-on-surface-variant">
                            <span>Tax (10%)</span>
                            <span class="font-bold">$8.20</span>
                        </div>
                        <div class="flex justify-between text-on-surface text-lg mt-2 pt-2 border-t border-outline-variant/20 font-black">
                            <span>Total</span>
                            <span class="text-primary">$90.20</span>
                        </div>
                    </div>
                    
                    <button class="w-full bg-primary-gradient text-white font-bold py-3.5 rounded-xl shadow-lg shadow-primary/30 hover:scale-[1.02] active:scale-95 transition-all text-sm flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">payments</span>
                        Process Payment
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
