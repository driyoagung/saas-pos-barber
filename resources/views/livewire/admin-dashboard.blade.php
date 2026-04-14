<div>
    <!-- Dashboard Header (Desktop & Mobile combined layout) -->
    <section class="mb-8 hidden md:flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <h2 class="text-3xl font-extrabold tracking-tight text-on-surface">Dashboard Overview</h2>
            <p class="text-on-surface-variant body-md mt-1">Welcome back, Marcus. Here's what's happening today.</p>
        </div>
        <div class="flex gap-3">
            <button class="bg-surface-container-lowest text-on-surface-variant font-semibold body-md px-4 py-2.5 rounded-lg border border-outline-variant/20 hover:bg-surface-container transition-colors flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">calendar_today</span>
                Last 30 Days
            </button>
            <button class="bg-primary-gradient text-on-primary font-semibold body-md px-6 py-2.5 rounded-lg shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all flex items-center gap-2">
                <span class="material-symbols-outlined text-lg">add</span>
                New Report
            </button>
        </div>
    </section>

    <!-- Mobile Header Version -->
    <section class="mb-8 md:hidden">
        <h2 class="text-[1.5rem] font-bold text-on-surface tracking-tight mb-1">Portfolio Summary</h2>
        <p class="text-on-surface-variant text-sm font-medium">Welcome back, Admin</p>
    </section>

    <!-- Stat Cards: Bento Grid Style -->
    <section class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 mb-8">
        <!-- Revenue Card -->
        <div class="bg-surface-container-lowest p-4 md:p-6 rounded-xl md:rounded-lg shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
            <div class="flex justify-between items-start mb-2 md:mb-4">
                <div class="p-1.5 md:p-2 bg-blue-50 dark:bg-blue-900/30 rounded-lg text-primary md:bg-blue-50 md:text-primary">
                    <span class="material-symbols-outlined text-lg md:text-2xl" style="font-variation-settings: 'FILL' 1;">payments</span>
                </div>
                <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 md:px-2 md:py-1 rounded-full">+12.5%</span>
            </div>
            <p class="text-[0.75rem] md:text-label-md text-on-surface-variant font-semibold md:font-medium uppercase tracking-wider mb-1">Total Revenue</p>
            <h3 class="text-xl md:text-2xl font-black text-on-surface">$124,592.00</h3>
            <div class="mt-3 md:mt-4 h-8 md:w-full flex items-end gap-1">
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[40%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[60%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[50%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[80%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[90%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[75%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary h-full rounded-t-sm"></div>
            </div>
        </div>

        <!-- Orders / Users Card -->
        <div class="bg-surface-container-lowest p-4 md:p-6 rounded-xl md:rounded-lg shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
            <div class="flex justify-between items-start mb-2 md:mb-4">
                <div class="p-1.5 md:p-2 bg-slate-50 dark:bg-slate-800/30 rounded-lg text-secondary">
                    <span class="material-symbols-outlined text-lg md:text-2xl" style="font-variation-settings: 'FILL' 1;">group</span>
                </div>
                <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 md:px-2 md:py-1 rounded-full">+5.2%</span>
            </div>
            <p class="text-[0.75rem] md:text-label-md text-on-surface-variant font-semibold md:font-medium uppercase tracking-wider mb-1">Active Users</p>
            <h3 class="text-xl md:text-2xl font-black text-on-surface">12,842</h3>
            <div class="mt-3 md:mt-4 h-8 w-full flex items-end gap-1">
                <div class="flex-1 bg-secondary/10 group-hover:bg-secondary/20 transition-colors h-[30%] rounded-t-sm"></div>
                <div class="flex-1 bg-secondary/10 group-hover:bg-secondary/20 transition-colors h-[40%] rounded-t-sm"></div>
                <div class="flex-1 bg-secondary/10 group-hover:bg-secondary/20 transition-colors h-[60%] rounded-t-sm"></div>
                <div class="flex-1 bg-secondary/10 group-hover:bg-secondary/20 transition-colors h-[55%] rounded-t-sm"></div>
                <div class="flex-1 bg-secondary/10 group-hover:bg-secondary/20 transition-colors h-[70%] rounded-t-sm"></div>
                <div class="flex-1 bg-secondary/10 group-hover:bg-secondary/20 transition-colors h-[85%] rounded-t-sm"></div>
                <div class="flex-1 bg-secondary h-[80%] rounded-t-sm"></div>
            </div>
        </div>

        <!-- Sales Card -->
        <div class="bg-surface-container-lowest p-4 md:p-6 rounded-xl md:rounded-lg shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
            <div class="flex justify-between items-start mb-2 md:mb-4">
                <div class="p-1.5 md:p-2 bg-blue-50 dark:bg-blue-900/30 rounded-lg text-primary">
                    <span class="material-symbols-outlined text-lg md:text-2xl" style="font-variation-settings: 'FILL' 1;">shopping_cart</span>
                </div>
                <span class="text-xs font-bold text-rose-600 bg-rose-50 px-1.5 py-0.5 md:px-2 md:py-1 rounded-full">-2.4%</span>
            </div>
            <p class="text-[0.75rem] md:text-label-md text-on-surface-variant font-semibold md:font-medium uppercase tracking-wider mb-1">Total Sales</p>
            <h3 class="text-xl md:text-2xl font-black text-on-surface">3,254</h3>
            <div class="mt-3 md:mt-4 h-8 w-full flex items-end gap-1">
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[90%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[80%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[70%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[60%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[55%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[50%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary h-[45%] rounded-t-sm"></div>
            </div>
        </div>

        <!-- Growth / Conversion Card -->
        <div class="bg-surface-container-lowest p-4 md:p-6 rounded-xl md:rounded-lg shadow-sm border border-outline-variant/10 hover:shadow-md transition-shadow group">
            <div class="flex justify-between items-start mb-2 md:mb-4">
                <div class="p-1.5 md:p-2 bg-blue-50 dark:bg-blue-900/30 rounded-lg text-primary">
                    <span class="material-symbols-outlined text-lg md:text-2xl" style="font-variation-settings: 'FILL' 1;">trending_up</span>
                </div>
                <span class="text-xs font-bold text-emerald-600 bg-emerald-50 px-1.5 py-0.5 md:px-2 md:py-1 rounded-full">+18.9%</span>
            </div>
            <p class="text-[0.75rem] md:text-label-md text-on-surface-variant font-semibold md:font-medium uppercase tracking-wider mb-1">MoM Growth</p>
            <h3 class="text-xl md:text-2xl font-black text-on-surface">24.5%</h3>
            <div class="mt-3 md:mt-4 h-8 w-full flex items-end gap-1">
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[20%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[35%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[45%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[50%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[70%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary/10 group-hover:bg-primary/20 transition-colors h-[85%] rounded-t-sm"></div>
                <div class="flex-1 bg-primary h-full rounded-t-sm"></div>
            </div>
        </div>
    </section>

    <!-- Asymmetric Analytics Section (Desktop + Mobile variants) -->
    <section class="grid grid-cols-1 lg:grid-cols-3 gap-6 md:gap-8 mb-8">
        <!-- Area Chart Area / Growth Performance -->
        <div class="lg:col-span-2 bg-surface-container-lowest p-6 md:p-8 rounded-xl shadow-sm border border-outline-variant/10">
            <div class="flex items-center justify-between mb-6 md:mb-8">
                <div>
                    <h3 class="text-sm md:text-lg font-bold text-on-surface tracking-widest md:tracking-normal uppercase md:capitalize">Growth Performance</h3>
                    <p class="hidden md:block text-xs text-on-surface-variant">Performance analysis for the current fiscal quarter</p>
                </div>
                <div class="flex gap-2">
                    <span class="flex items-center gap-1.5 text-xs font-semibold text-primary cursor-pointer">
                        <span class="w-2 h-2 rounded-full bg-primary hidden md:inline-block"></span> 
                        <span class="md:hidden text-[10px] font-bold uppercase">Weekly</span>
                        <span class="hidden md:inline-block">Current</span>
                        <span class="material-symbols-outlined text-sm md:hidden">expand_more</span>
                    </span>
                    <span class="hidden md:flex items-center gap-1.5 text-xs font-semibold text-on-surface-variant/40">
                        <span class="w-2 h-2 rounded-full bg-on-surface-variant/20"></span> Projected
                    </span>
                </div>
            </div>

            <!-- Stylized Bar Chart for Mobile / Desktop mix -->
            <div class="flex items-end justify-between gap-2 h-40 md:h-64 mt-4">
                <div class="flex-1 bg-surface-container-high rounded-t-md relative group h-[40%] hover:bg-primary-container transition-all">
                    <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] md:text-xs font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">4k</span>
                </div>
                <div class="flex-1 bg-surface-container-high rounded-t-md relative group h-[65%] hover:bg-primary-container transition-all">
                    <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] md:text-xs font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">6.5k</span>
                </div>
                <div class="flex-1 bg-primary rounded-t-md relative group h-[85%] shadow-[0_0_15px_rgba(37,99,235,0.4)] md:shadow-none">
                    <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] md:text-xs font-bold text-primary whitespace-nowrap">8.5k</span>
                </div>
                <div class="flex-1 bg-surface-container-high rounded-t-md relative group h-[50%] hover:bg-primary-container transition-all">
                    <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] md:text-xs font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">5k</span>
                </div>
                <div class="flex-1 bg-surface-container-high rounded-t-md relative group h-[75%] hover:bg-primary-container transition-all">
                    <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] md:text-xs font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">7.5k</span>
                </div>
                <div class="flex-1 bg-surface-container-high rounded-t-md relative group h-[60%] hover:bg-primary-container transition-all">
                    <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] md:text-xs font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">6k</span>
                </div>
                <div class="flex-1 bg-surface-container-high rounded-t-md relative group h-[95%] hover:bg-primary-container transition-all">
                    <span class="absolute -top-6 left-1/2 -translate-x-1/2 text-[10px] md:text-xs font-bold opacity-0 group-hover:opacity-100 transition-opacity whitespace-nowrap">9.5k</span>
                </div>
            </div>
            
            <div class="flex justify-between mt-4 px-1 text-[10px] md:text-xs font-bold text-on-surface-variant">
                <span>MON</span>
                <span>TUE</span>
                <span class="text-primary">WED</span>
                <span>THU</span>
                <span>FRI</span>
                <span>SAT</span>
                <span>SUN</span>
            </div>
        </div>

        <!-- Insights / Right Column (Hidden on Mobile for brevity, or can be shown) -->
        <div class="hidden lg:flex bg-primary-gradient rounded-xl p-8 text-white flex-col justify-between shadow-2xl shadow-primary/20 relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-white/10 rounded-full blur-3xl -mr-16 -mt-16"></div>
            <div class="relative z-10">
                <span class="inline-block px-3 py-1 rounded-full bg-white/20 text-[10px] font-bold uppercase tracking-widest mb-4">Market Insight</span>
                <h4 class="text-2xl font-bold leading-tight mb-4">Enterprise demand is up by 24% this week.</h4>
                <p class="text-sm opacity-80 leading-relaxed">Consider expanding your fleet capacity in the Northeast region to meet the growing customer requests.</p>
            </div>
            <div class="mt-8 relative z-10">
                <button class="w-full bg-white text-primary font-bold py-3 rounded-lg hover:bg-white/90 transition-colors text-sm shadow-xl">
                    Optimize Resources
                </button>
            </div>
        </div>
    </section>

    <!-- Recent Transactions -->
    <section class="mb-8">
        <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/10 overflow-hidden">
            
            <div class="p-4 md:p-6 border-b border-surface-container flex items-center justify-between">
                <div>
                    <h3 class="text-sm md:text-lg font-bold text-on-surface uppercase tracking-widest md:tracking-normal md:normal-case">Recent Transactions</h3>
                    <p class="hidden md:block text-xs text-on-surface-variant">Monitor all inbound and outbound enterprise payments</p>
                </div>
                <button class="hidden md:block text-primary text-sm font-bold hover:underline">Download CSV</button>
                <button class="md:hidden text-primary text-[10px] font-bold uppercase">View History</button>
            </div>

            <!-- Desktop Table View -->
            <div class="hidden md:block overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-surface-container-low">
                            <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-widest">Customer</th>
                            <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-widest">Date</th>
                            <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-widest">Amount</th>
                            <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-widest">Status</th>
                            <th class="px-6 py-4 text-label-md font-bold text-on-surface-variant uppercase tracking-widest">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-surface-container">
                        <tr class="hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-600">JD</div>
                                    <div>
                                        <p class="text-sm font-bold text-on-surface">Jordan Global Co.</p>
                                        <p class="text-[10px] text-on-surface-variant">Premium Cut</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-on-surface-variant">Oct 12, 2023</td>
                            <td class="px-6 py-4 text-sm font-black text-on-surface">$45.00</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-emerald-100 text-emerald-700">
                                    <span class="w-1 h-1 rounded-full bg-emerald-700"></span> Completed
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-2 hover:bg-slate-200 rounded-full transition-colors">
                                    <span class="material-symbols-outlined text-lg text-slate-400">more_vert</span>
                                </button>
                            </td>
                        </tr>
                        <tr class="bg-surface-container-low/30 hover:bg-surface-container-low transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-8 h-8 rounded-full bg-slate-200 flex items-center justify-center text-xs font-bold text-slate-600">SM</div>
                                    <div>
                                        <p class="text-sm font-bold text-on-surface">Skyline Media</p>
                                        <p class="text-[10px] text-on-surface-variant">Basic Cut</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-sm text-on-surface-variant">Oct 11, 2023</td>
                            <td class="px-6 py-4 text-sm font-black text-on-surface">$25.50</td>
                            <td class="px-6 py-4">
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold bg-blue-100 text-blue-700">
                                    <span class="w-1 h-1 rounded-full bg-blue-700"></span> Processing
                                </span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <button class="p-2 hover:bg-slate-200 rounded-full transition-colors">
                                    <span class="material-symbols-outlined text-lg text-slate-400">more_vert</span>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="p-4 border-t border-surface-container flex items-center justify-between">
                    <p class="text-xs text-on-surface-variant">Showing 1 to 2 of 42 transactions</p>
                    <div class="flex gap-2">
                        <button class="p-2 border border-outline-variant/20 rounded-md hover:bg-surface-container transition-colors disabled:opacity-20">
                            <span class="material-symbols-outlined text-sm">chevron_left</span>
                        </button>
                        <button class="p-2 border border-outline-variant/20 rounded-md hover:bg-surface-container transition-colors">
                            <span class="material-symbols-outlined text-sm">chevron_right</span>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Mobile List View -->
            <div class="md:hidden space-y-3 p-4">
                <div class="bg-surface-container-lowest p-3 rounded-xl flex items-center justify-between border border-outline-variant/10">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">shopping_cart</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-on-surface">Walk-in Customer</p>
                            <p class="text-[11px] text-on-surface-variant font-medium">Aug 24, 10:30 AM</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-black text-primary">+$45.50</p>
                        <p class="text-[10px] text-primary font-bold uppercase tracking-tighter">Completed</p>
                    </div>
                </div>
                
                <div class="bg-surface-container-lowest p-3 rounded-xl flex items-center justify-between border border-outline-variant/10">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-surface-container-low flex items-center justify-center">
                            <span class="material-symbols-outlined text-primary">account_balance_wallet</span>
                        </div>
                        <div>
                            <p class="text-sm font-bold text-on-surface">John Doe</p>
                            <p class="text-[11px] text-on-surface-variant font-medium">Aug 23, 04:15 PM</p>
                        </div>
                    </div>
                    <div class="text-right">
                        <p class="text-sm font-black text-primary">+$120.00</p>
                        <p class="text-[10px] text-primary font-bold uppercase tracking-tighter">Completed</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
