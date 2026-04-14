<!DOCTYPE html>
<html class="light" lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ $title ?? 'Executive Precision Admin Dashboard' }}</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Inter', sans-serif; min-height: max(884px, 100dvh); }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .bg-primary-gradient {
            background: linear-gradient(135deg, #004ac6 0%, #2563eb 100%);
        }
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    </style>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "primary-container": "#2563eb",
                        "surface-container-highest": "#e0e3e5",
                        "on-error-container": "#93000a",
                        "primary-fixed": "#dbe1ff",
                        "tertiary-container": "#656d84",
                        "on-tertiary-container": "#eef0ff",
                        "secondary-fixed-dim": "#bcc7de",
                        "tertiary-fixed-dim": "#bec6e0",
                        "inverse-primary": "#b4c5ff",
                        "on-secondary-fixed": "#111c2d",
                        "on-primary-container": "#eeefff",
                        "secondary": "#545f73",
                        "on-background": "#191c1e",
                        "on-primary-fixed-variant": "#003ea8",
                        "on-surface-variant": "#434655",
                        "on-secondary-container": "#586377",
                        "surface-bright": "#f7f9fb",
                        "surface": "#f7f9fb",
                        "primary": "#004ac6",
                        "on-primary": "#ffffff",
                        "surface-dim": "#d8dadc",
                        "on-secondary": "#ffffff",
                        "on-primary-fixed": "#00174b",
                        "on-tertiary": "#ffffff",
                        "surface-container": "#eceef0",
                        "surface-container-low": "#f2f4f6",
                        "on-tertiary-fixed-variant": "#3f465c",
                        "tertiary": "#4d556b",
                        "surface-container-high": "#e6e8ea",
                        "on-secondary-fixed-variant": "#3c475a",
                        "surface-tint": "#0053db",
                        "surface-variant": "#e0e3e5",
                        "inverse-on-surface": "#eff1f3",
                        "secondary-fixed": "#d8e3fb",
                        "error": "#ba1a1a",
                        "tertiary-fixed": "#dae2fd",
                        "on-tertiary-fixed": "#131b2e",
                        "outline": "#737686",
                        "error-container": "#ffdad6",
                        "surface-container-lowest": "#ffffff",
                        "outline-variant": "#c3c6d7",
                        "on-surface": "#191c1e",
                        "primary-fixed-dim": "#b4c5ff",
                        "inverse-surface": "#2d3133",
                        "secondary-container": "#d5e0f8",
                        "background": "#f7f9fb"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.5rem",
                        "lg": "1rem",
                        "xl": "1.5rem",
                        "full": "9999px"
                    },
                    "fontFamily": {
                        "headline": ["Inter"],
                        "body": ["Inter"],
                        "label": ["Inter"]
                    }
                },
            },
        }
    </script>
    @livewireStyles
</head>
<body class="bg-background text-on-surface antialiased pb-20 md:pb-0">
    @include('livewire.includes.sidebar')
    @include('livewire.includes.top-nav')

    <!-- Main Content Canvas -->
    <main class="pt-20 pb-24 md:pb-8 px-6 md:ml-64 min-h-screen transition-all duration-300 md:max-w-none max-w-md mx-auto">
        {{ $slot }}
    </main>

    @include('livewire.includes.bottom-nav')

    @livewireScripts
</body>
</html>
