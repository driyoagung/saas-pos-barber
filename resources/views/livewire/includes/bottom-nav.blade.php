<!-- BottomNavBar (Mobile Only) -->
<nav class="md:hidden fixed bottom-0 w-full z-50 rounded-t-2xl bg-white/90 dark:bg-slate-950/90 backdrop-blur-md border-t border-slate-200 dark:border-slate-800 shadow-[0_-8px_24px_rgba(0,0,0,0.05)]">
    <div class="flex justify-around items-center h-16 px-4 pb-safe">
        <a wire:navigate class="flex flex-col items-center justify-center rounded-xl px-4 py-1.5 active:scale-90 transition-all duration-150 {{ request()->routeIs('dashboard') ? 'bg-primary-gradient text-white shadow-lg shadow-primary/30' : 'text-slate-400 dark:text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800' }}" href="{{ route('dashboard') }}">
            <span class="material-symbols-outlined" data-icon="home" style="font-variation-settings: 'FILL' {{ request()->routeIs('dashboard') ? 1 : 0 }};">home</span>
            <span class="text-[10px] font-bold uppercase tracking-wider">Home</span>
        </a>
        <a wire:navigate class="flex flex-col items-center justify-center rounded-xl px-4 py-1.5 active:scale-90 transition-all duration-150 {{ request()->routeIs('pos') ? 'bg-primary-gradient text-white shadow-lg shadow-primary/30' : 'text-slate-400 dark:text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800' }}" href="{{ route('pos') }}">
            <span class="material-symbols-outlined" data-icon="point_of_sale" style="font-variation-settings: 'FILL' {{ request()->routeIs('pos') ? 1 : 0 }};">point_of_sale</span>
            <span class="text-[10px] font-bold uppercase tracking-wider">POS</span>
        </a>
        <a wire:navigate class="flex flex-col items-center justify-center rounded-xl px-4 py-1.5 active:scale-90 transition-all duration-150 {{ request()->routeIs('services') ? 'bg-primary-gradient text-white shadow-lg shadow-primary/30' : 'text-slate-400 dark:text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800' }}" href="{{ route('services') }}">
            <span class="material-symbols-outlined" data-icon="inventory_2" style="font-variation-settings: 'FILL' {{ request()->routeIs('services') ? 1 : 0 }};">inventory_2</span>
            <span class="text-[10px] font-bold uppercase tracking-wider">Produk</span>
        </a>
        <a wire:navigate class="flex flex-col items-center justify-center rounded-xl px-4 py-1.5 active:scale-90 transition-all duration-150 {{ request()->routeIs('transactions') ? 'bg-primary-gradient text-white shadow-lg shadow-primary/30' : 'text-slate-400 dark:text-slate-500 hover:bg-slate-50 dark:hover:bg-slate-800' }}" href="{{ route('transactions') }}">
            <span class="material-symbols-outlined" data-icon="receipt_long" style="font-variation-settings: 'FILL' {{ request()->routeIs('transactions') ? 1 : 0 }};">receipt_long</span>
            <span class="text-[10px] font-bold uppercase tracking-wider">Riwayat</span>
        </a>
    </div>
</nav>
