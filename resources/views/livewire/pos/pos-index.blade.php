<div>
    <div class="mb-6 flex items-center justify-between">
        <div>
            <h2 class="text-2xl font-bold tracking-tight text-on-surface">Point of Sale</h2>
            <p class="text-on-surface-variant text-sm mt-1">Pilih layanan atau produk kasir barbershop.</p>
        </div>
        <div class="relative w-full max-w-xs hidden sm:block">
            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400">search</span>
            <input wire:model.live.debounce.300ms="search" type="text" class="w-full bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary outline-none" placeholder="Cari layanan...">
        </div>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Catalog Section -->
        <div class="lg:col-span-2 flex flex-col gap-6">
            <!-- Categories / Filter -->
            <div class="flex gap-2 overflow-x-auto hide-scrollbar pb-2">
                <button wire:click="$set('categoryId', null)" class="px-4 py-2 {{ is_null($categoryId) ? 'bg-primary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container' }} rounded-lg text-sm font-semibold shrink-0 transition-colors">Semua</button>
                @foreach($categories as $cat)
                <button wire:click="selectCategory({{ $cat->id }})" class="px-4 py-2 {{ $categoryId === $cat->id ? 'bg-primary text-white' : 'bg-surface-container-low text-on-surface-variant hover:bg-surface-container' }} rounded-lg text-sm font-semibold shrink-0 transition-colors">{{ $cat->name }}</button>
                @endforeach
            </div>

            <!-- Items Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @forelse($items as $item)
                <button wire:click="addToCart({{ $item->id }})" class="bg-surface-container-lowest p-4 rounded-xl border border-outline-variant/20 hover:border-primary/50 hover:shadow-md transition-all text-left group flex flex-col justify-between h-32 relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-16 h-16 {{ $item->type === 'service' ? 'bg-blue-50' : 'bg-orange-50' }} rounded-full blur-xl -mr-8 -mt-8 group-hover:{{ $item->type === 'service' ? 'bg-blue-100' : 'bg-orange-100' }} transition-colors"></div>
                    <div class="relative z-10">
                        <span class="material-symbols-outlined {{ $item->type === 'service' ? 'text-primary' : 'text-orange-600' }} mb-2">{{ $item->type === 'service' ? 'content_cut' : 'inventory_2' }}</span>
                        <h4 class="font-bold text-on-surface text-sm leading-tight">{{ $item->name }}</h4>
                    </div>
                    <p class="font-black text-on-surface relative z-10">${{ number_format($item->price, 2) }}</p>
                </button>
                @empty
                <div class="col-span-2 md:col-span-3 text-center py-12 text-on-surface-variant text-sm">Layanan/Produk tidak ditemukan.</div>
                @endforelse
            </div>
        </div>

        <!-- Cart Section -->
        <div class="lg:col-span-1">
            <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/20 flex flex-col h-[calc(100vh-10rem)] md:h-[calc(100vh-8rem)] sticky top-24">
                <div class="p-4 border-b border-surface-container flex flex-col gap-3">
                    <div class="flex items-center justify-between">
                        <h3 class="font-bold text-on-surface">Detail Order</h3>
                        <span class="bg-primary/10 text-primary text-xs font-bold px-2 py-1 rounded-md">Cart</span>
                    </div>
                    
                    @if (session()->has('message'))
                        <div class="text-xs text-emerald-700 bg-emerald-100 p-2 rounded-md font-bold">
                            {{ session('message') }}
                        </div>
                    @endif

                    <input type="text" wire:model="customerName" placeholder="Nama Pelanggan (opsional)" class="w-full text-sm bg-surface-container-low border-none rounded-lg focus:ring-2 focus:ring-primary py-2 px-3 outline-none">
                </div>
                
                <!-- Cart Items -->
                <div class="flex-1 overflow-y-auto p-4 space-y-4">
                    @forelse($cart as $index => $c)
                    <div class="flex items-center justify-between gap-2 border-b border-surface-container pb-2 last:border-0 last:pb-0">
                        <div class="flex-1">
                            <h4 class="font-bold text-sm text-on-surface">{{ $c['name'] }}</h4>
                            <p class="text-[11px] text-on-surface-variant">${{ number_format($c['price'], 2) }} x <input type="number" wire:model.live.debounce.500ms="cart.{{ $index }}.qty" class="w-12 text-center p-0 h-5 text-xs bg-surface-container-low border border-outline-variant/30 rounded" min="1"></p>
                        </div>
                        <div class="font-black text-sm text-on-surface">${{ number_format($c['price'] * $c['qty'], 2) }}</div>
                        <button wire:click="removeFromCart({{ $index }})" class="p-1 text-slate-400 hover:text-rose-500 transition-colors rounded">
                            <span class="material-symbols-outlined text-lg">delete</span>
                        </button>
                    </div>
                    @empty
                    <div class="text-center text-on-surface-variant text-sm py-4">Keranjang kosong. Pilih layanan di samping.</div>
                    @endforelse
                </div>

                <!-- Totals & Checkout -->
                <div class="p-4 bg-surface-container-low rounded-b-xl border-t border-surface-container">
                    <div class="space-y-2 mb-4 text-sm">
                        <div class="flex justify-between text-on-surface-variant">
                            <span>Subtotal</span>
                            <span class="font-bold">${{ number_format($subtotal, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-on-surface-variant">
                            <span>Tax (10%)</span>
                            <span class="font-bold">${{ number_format($tax, 2) }}</span>
                        </div>
                        <div class="flex justify-between text-on-surface text-lg mt-2 pt-2 border-t border-outline-variant/20 font-black">
                            <span>Total</span>
                            <span class="text-primary">${{ number_format($total, 2) }}</span>
                        </div>
                    </div>
                    
                    <button wire:click="checkout" @if(empty($cart)) disabled @endif class="w-full h-12 {{ empty($cart) ? 'bg-slate-300' : 'bg-primary-gradient hover:scale-[1.02] active:scale-95 shadow-lg shadow-primary/30' }} text-white font-bold rounded-xl transition-all text-sm flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined">payments</span>
                        Process Payment
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
