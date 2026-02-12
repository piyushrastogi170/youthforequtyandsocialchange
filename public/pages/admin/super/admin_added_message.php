<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Administrator Added | YESC NGO Portal</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#ec5b13",
                        "background-light": "#f8f6f6",
                        "background-dark": "#221610",
                    },
                    fontFamily: {
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body {
            font-family: "Public Sans", sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-slate-100 min-h-screen flex flex-col">
<!-- Top Navigation Bar -->
<header class="w-full border-b border-slate-200 dark:border-primary/20 bg-white dark:bg-background-dark/50 backdrop-blur-md sticky top-0 z-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-16 flex items-center justify-between">
<div class="flex items-center gap-3">
<div class="w-8 h-8 bg-primary rounded flex items-center justify-center text-white">
<span class="material-symbols-outlined">diversity_3</span>
</div>
<h1 class="text-lg font-bold tracking-tight text-slate-800 dark:text-white">YESC NGO Portal</h1>
</div>
<div class="flex items-center gap-4">
<button class="p-2 text-slate-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined">search</span>
</button>
<button class="p-2 text-slate-500 hover:text-primary transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white dark:border-background-dark"></span>
</button>
<div class="h-8 w-px bg-slate-200 dark:bg-primary/20 mx-1"></div>
<div class="flex items-center gap-3 pl-2">
<div class="text-right hidden sm:block">
<p class="text-xs font-semibold text-slate-900 dark:text-white leading-none">Super Admin</p>
<p class="text-[10px] text-slate-500 dark:text-slate-400">Manage Account</p>
</div>
<div class="w-10 h-10 rounded-full bg-primary/10 border border-primary/20 overflow-hidden flex items-center justify-center">
<span class="material-symbols-outlined text-primary">account_circle</span>
</div>
</div>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-grow flex items-center justify-center p-6 sm:p-12">
    <!-- Redirect Popup -->
<div id="redirectPopup" class="fixed top-6 left-1/2 -translate-x-1/2 bg-white shadow-xl border border-slate-200 rounded-xl p-5 w-96 z-50 hidden transition-all duration-300">

<div class="flex justify-between items-start">
    <div>
        <h2 class="text-sm font-bold text-slate-800 mb-1">
            Redirect Notice
        </h2>
        <p class="text-xs text-slate-600">
            Aap <span id="countdown" class="font-bold text-primary">5</span> seconds me redirect ho jayenge.
        </p>
    </div>

    <button onclick="cancelRedirect()" 
        class="text-slate-400 hover:text-red-500 text-lg leading-none">
        &times;
    </button>
</div>

</div>


<div class="max-w-2xl w-full">
<!-- Success Card Container -->
<div class="bg-white dark:bg-[#2d1e16] rounded-xl shadow-2xl shadow-primary/5 border border-slate-100 dark:border-primary/10 p-8 sm:p-12 text-center">
<!-- Success Icon -->
<div class="mb-8 flex justify-center">
<div class="w-24 h-24 bg-emerald-100 dark:bg-emerald-900/30 rounded-full flex items-center justify-center text-emerald-600 dark:text-emerald-400">
<span class="material-symbols-outlined text-6xl" style="font-variation-settings: 'wght' 700;">check_circle</span>
</div>
</div>
<!-- Headline -->
<h2 class="text-3xl font-bold text-slate-900 dark:text-white mb-4">
                    Admin Added Successfully
                </h2>
<!-- Subtext -->
<p class="text-lg text-slate-600 dark:text-slate-400 mb-10 max-w-lg mx-auto leading-relaxed">
                    An invitation email has been sent to the new administrator. They can now access the <strong>Youth for Equity &amp; Social Change</strong> dashboard using their credentials.
                </p>
<!-- Admin Details Summary Card -->
<div class="bg-slate-50 dark:bg-background-dark/40 rounded-xl border border-slate-100 dark:border-primary/5 p-6 mb-10 text-left">
<h3 class="text-xs font-bold uppercase tracking-wider text-primary mb-4">Summary of Admin Details</h3>
<div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6 gap-x-8">
<div>
<p class="text-xs text-slate-500 dark:text-slate-500 mb-1 uppercase tracking-tight">Full Name</p>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-400 text-sm">person</span>
<p class="text-base font-semibold text-slate-800 dark:text-slate-200">Jordan Smith</p>
</div>
</div>
<div>
<p class="text-xs text-slate-500 dark:text-slate-500 mb-1 uppercase tracking-tight">Email Address</p>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-400 text-sm">mail</span>
<p class="text-base font-semibold text-slate-800 dark:text-slate-200">jordan.smith@yesc.org</p>
</div>
</div>
<div class="sm:col-span-2 pt-4 border-t border-slate-200/50 dark:border-primary/5">
<p class="text-xs text-slate-500 dark:text-slate-500 mb-1 uppercase tracking-tight">Assigned Role</p>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-slate-400 text-sm">shield_person</span>
<div class="px-2.5 py-1 bg-primary/10 text-primary text-sm font-bold rounded-lg">
                                    Admin
                                </div>
</div>
</div>
</div>
</div>
<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<button onclick="window.location='admin_management.php'" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-primary hover:bg-primary/90 text-white font-bold rounded-xl transition-all shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-xl">manage_accounts</span>
                        Back to Admin Management
                    </button>
<button onclick="window.location='super_admin_dashboard.php'" class="inline-flex items-center justify-center gap-2 px-8 py-3.5 bg-transparent hover:bg-slate-100 dark:hover:bg-primary/5 text-slate-700 dark:text-slate-300 font-bold border-2 border-slate-200 dark:border-primary/20 rounded-xl transition-all">
<span class="material-symbols-outlined text-xl">dashboard</span>
                        Go to Dashboard
                    </button>
</div>
</div>
<!-- Footer Information -->
<div class="mt-8 text-center">
<p class="text-sm text-slate-500 dark:text-slate-500 flex items-center justify-center gap-1">
<span class="material-symbols-outlined text-base">info</span>
                    Need help with onboarding? <a class="text-primary hover:underline font-medium" href="../../contact.php">Visit Support Center</a>
</p>
</div>
</div>
</main>
<!-- Simplified Mobile Nav (Visible only on very small screens if needed) -->
<?php include dirname(__DIR__, 4) . '/includes/admin_footer.php'; ?>
<script>
let redirectInterval;

function startRedirectTimer(seconds, redirectUrl) {

    const popup = document.getElementById('redirectPopup');
    const countdownElement = document.getElementById('countdown');

    popup.classList.remove('hidden');

    let timeLeft = seconds;
    countdownElement.textContent = timeLeft;

    redirectInterval = setInterval(() => {
        timeLeft--;
        countdownElement.textContent = timeLeft;

        if (timeLeft <= 0) {
            clearInterval(redirectInterval);
            window.location.href = redirectUrl;
        }
    }, 1000);
}

function cancelRedirect() {
    clearInterval(redirectInterval);
    document.getElementById('redirectPopup').classList.add('hidden');
}

// Start timer (5 seconds → redirect to dashboard)
startRedirectTimer(5, "admin_management.php");
</script>

</body></html>