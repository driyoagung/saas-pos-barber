<!-- TopNavBar -->
<header class="fixed top-0 w-full z-40 bg-white/80 dark:bg-slate-950/80 backdrop-blur-xl shadow-sm dark:shadow-none border-b border-slate-100 dark:border-slate-800 font-inter text-sm transition-all duration-300">
    <div class="flex items-center justify-between px-6 h-16 md:ml-64">
        
        <!-- Mobile Left Branding -->
        <div class="flex items-center gap-3 md:hidden">
            <div class="w-8 h-8 rounded-full shrink-0 bg-gradient-to-br from-primary to-primary-container flex items-center justify-center shadow-md">
                <span class="material-symbols-outlined text-white text-lg">precision_manufacturing</span>
            </div>
            <h1 class="text-lg font-black text-slate-900 dark:text-white tracking-tight">Executive Precision</h1>
        </div>

        <!-- Desktop Search & Right Side -->
        <div class="hidden md:flex flex-1 items-center">
            <div class="relative w-full max-w-md">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-full pl-10 pr-4 py-2 focus:ring-2 focus:ring-primary transition-all text-sm outline-none" placeholder="Global search commands..." type="text"/>
            </div>
        </div>

        <!-- Desktop & Mobile Controls -->
        <div class="flex items-center gap-4 cursor-pointer">
            <span class="material-symbols-outlined text-slate-500 hover:text-blue-600 cursor-pointer md:hidden">notifications</span>
            
            <button class="hidden md:flex w-10 h-10 items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-500 transition-all">
                <span class="material-symbols-outlined" data-icon="notifications">notifications</span>
            </button>
            <button class="hidden md:flex w-10 h-10 items-center justify-center rounded-full hover:bg-slate-100 dark:hover:bg-slate-800 text-slate-500 transition-all">
                <span class="material-symbols-outlined" data-icon="help">help</span>
            </button>
            
            <div class="hidden md:block h-8 w-[1px] bg-slate-200 dark:bg-slate-800 mx-2"></div>
            
            <div class="flex items-center gap-3">
                <div class="text-right hidden sm:block md:block">
                    <p class="text-xs font-bold text-slate-900 dark:text-white">Admin Hub</p>
                    <p class="text-[10px] text-blue-600 font-bold uppercase tracking-tighter">Pro Plan</p>
                </div>
                <img alt="User Profile" class="w-8 h-8 md:w-9 md:h-9 rounded-full object-cover border-2 border-primary-container/20" data-alt="User Profile" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZ3cAjIHMDyniH3KrbOKyK3KmAiZNLhVlmRS81DxL64TzfswmG1yCvDRVNg_Cp29QyAtrhOtYlsCpUN2qWU5hdtLH_C7kgs36-VXE_MNU50r603-aCCZxsif2ZL4OPf2xF3xWTTj8DPkEp7zVFdepdzMtXVaH842dWx_J1-fFO3Vg18-PSfKI_OzOq2GNj5IzeHvWNJ3CypDWorKrtJYV7hajaOKrgJzbO4S7-l_RfPzD8LRLJ1OQ1LW8VXbPJKNCxM6aBbyyfSQ"/>
            </div>
        </div>

    </div>
</header>
