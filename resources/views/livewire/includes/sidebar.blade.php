<!-- SideNavBar (Desktop Only) -->
<aside class="hidden md:flex h-full w-64 flex-col fixed left-0 top-0 bg-slate-50 dark:bg-slate-900 z-50 font-inter text-sm antialiased transition-all duration-300">
    <div class="flex flex-col gap-4 p-6 h-full">
        <div class="flex items-center gap-3 mb-8">
            <div class="w-10 h-10 bg-primary-gradient rounded-full shrink-0 flex items-center justify-center text-white shadow-md">
                <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">architecture</span>
            </div>
            <div>
                <h1 class="text-xl font-bold tracking-tight text-slate-900 dark:text-white">Executive Precision</h1>
                <p class="text-[10px] text-slate-500 font-medium uppercase tracking-widest">Admin Dashboard</p>
            </div>
        </div>
        <nav class="flex-1 space-y-2 px-2">
            <a wire:navigate class="flex items-center gap-3 px-4 py-3 transition-all duration-200 rounded-xl active:scale-95 {{ request()->routeIs('dashboard') ? 'text-white font-semibold bg-primary-gradient shadow-lg shadow-primary/30' : 'text-slate-500 dark:text-slate-400 font-medium hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800' }}" href="{{ route('dashboard') }}">
                <span class="material-symbols-outlined" data-icon="dashboard" style="font-variation-settings: 'FILL' {{ request()->routeIs('dashboard') ? 1 : 0 }};">dashboard</span>
                <span>Dashboard</span>
            </a>
            <a wire:navigate class="flex items-center gap-3 px-4 py-3 transition-all duration-200 rounded-xl active:scale-95 {{ request()->routeIs('pos') ? 'text-white font-semibold bg-primary-gradient shadow-lg shadow-primary/30' : 'text-slate-500 dark:text-slate-400 font-medium hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800' }}" href="{{ route('pos') }}">
                <span class="material-symbols-outlined" data-icon="point_of_sale" style="font-variation-settings: 'FILL' {{ request()->routeIs('pos') ? 1 : 0 }};">point_of_sale</span>
                <span>POS Kasir</span>
            </a>
            <a wire:navigate class="flex items-center gap-3 px-4 py-3 transition-all duration-200 rounded-xl active:scale-95 {{ request()->routeIs('services') ? 'text-white font-semibold bg-primary-gradient shadow-lg shadow-primary/30' : 'text-slate-500 dark:text-slate-400 font-medium hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800' }}" href="{{ route('services') }}">
                <span class="material-symbols-outlined" data-icon="inventory_2" style="font-variation-settings: 'FILL' {{ request()->routeIs('services') ? 1 : 0 }};">inventory_2</span>
                <span>Layanan & Produk</span>
            </a>
            <a wire:navigate class="flex items-center gap-3 px-4 py-3 transition-all duration-200 rounded-xl active:scale-95 {{ request()->routeIs('transactions') ? 'text-white font-semibold bg-primary-gradient shadow-lg shadow-primary/30' : 'text-slate-500 dark:text-slate-400 font-medium hover:text-slate-900 dark:hover:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-800' }}" href="{{ route('transactions') }}">
                <span class="material-symbols-outlined" data-icon="receipt_long" style="font-variation-settings: 'FILL' {{ request()->routeIs('transactions') ? 1 : 0 }};">receipt_long</span>
                <span>Riwayat Transaksi</span>
            </a>
        </nav>
        <div class="mt-auto pt-6 border-t border-slate-200 dark:border-slate-800">
            <div class="flex items-center gap-3 p-2 rounded-xl bg-slate-100 dark:bg-slate-800/50">
                <img alt="Executive Admin" class="w-10 h-10 rounded-lg object-cover" data-alt="close-up portrait of a professional male executive in a grey suit with a confident expression in a bright studio" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA4wfty3Zme7b8XaIZQliaR0Bl1w-NDX-Rx19ar0YwPKgByp9pFK7Wjfldk4_CsjcoGuXJrhLDGWmPhe0cWJnzPVaoTsU-1fPZmnvoxBm1JtmNydMTALmn9_qH2rBRczrrXuJjDOZPe9Ixm9eC86xDtB7mBWqJamwtDC-BBhDo47LzTYCBgI8EIPwx5Xxpsej47VT9-X2LZHWBHo5vihFGLjOlnYE2EfNxLN3CSQKRyxXivP-1ROvjMpFd3uTOGJkj8yTOdPfhO7A"/>
                <div class="overflow-hidden">
                    <p class="text-xs font-bold text-slate-900 dark:text-white truncate">Marcus Sterling</p>
                    <p class="text-[10px] text-slate-500 truncate">Executive Admin</p>
                </div>
            </div>
        </div>
    </div>
</aside>
