<?php
session_start();

if (!isset($_SESSION['admin_id'])) {
    header("Location: ../admin_login.php");
    exit;
}
?>
<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Youth for Equity &amp; Social Change - Admin Dashboard</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#21d411",
                        "background-light": "#f6f8f6",
                        "background-dark": "#122210",
                    },
                    fontFamily: {
                        "display": ["Inter", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
<style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 dark:text-slate-100 min-h-screen">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="w-64 bg-white dark:bg-zinc-900 border-r border-primary/10 flex flex-col shrink-0">
<div class="p-6 flex items-center gap-3">
<div class="size-10 bg-primary rounded-lg flex items-center justify-center text-white shadow-lg shadow-primary/20">
<span class="material-symbols-outlined text-2xl">diversity_3</span>
</div>
<div class="flex flex-col">
<span class="font-bold text-sm tracking-tight leading-none">Youth for Equity</span>
<span class="text-[10px] text-primary font-semibold uppercase tracking-widest mt-1">Social Change</span>
</div>
</div>
<nav class="flex-1 px-4 space-y-1 mt-4">
<a class="flex items-center gap-3 px-3 py-2.5 bg-primary/10 text-primary font-semibold rounded-lg" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-zinc-800 transition-colors rounded-lg" href="#">
<span class="material-symbols-outlined">volunteer_activism</span>
<span class="text-sm font-medium">Donations</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-zinc-800 transition-colors rounded-lg" href="#">
<span class="material-symbols-outlined">groups</span>
<span class="text-sm font-medium">Volunteers</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-zinc-800 transition-colors rounded-lg" href="#">
<span class="material-symbols-outlined">auto_stories</span>
<span class="text-sm font-medium">Programs</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-zinc-800 transition-colors rounded-lg" href="#">
<span class="material-symbols-outlined">description</span>
<span class="text-sm font-medium">Reports</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-zinc-800 transition-colors rounded-lg" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
</nav>
<div class="p-4 mt-auto">
<div class="bg-primary/5 rounded-xl p-4 border border-primary/10">
<p class="text-[11px] font-bold text-primary uppercase tracking-wider mb-2">Campaign Goal</p>
<div class="h-2 w-full bg-primary/20 rounded-full mb-2">
<div class="h-full bg-primary rounded-full w-[72%] shadow-[0_0_8px_rgba(33,212,17,0.4)]"></div>
</div>
<div class="flex justify-between text-[11px] font-medium">
<span>₹8.5L raised</span>
<span>72%</span>
</div>
</div>
<button class="w-full mt-4 bg-primary text-white py-2.5 rounded-lg text-sm font-bold shadow-lg shadow-primary/20 hover:brightness-110 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">support</span>
                    Support NGO
                </button>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-y-auto">







<!-- Top Bar -->
<header class="h-16 bg-white dark:bg-zinc-900 border-b border-primary/10 flex items-center justify-between px-8 shrink-0 sticky top-0 z-10">
<div class="flex-1 max-w-xl">
<div class="relative group">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 group-focus-within:text-primary transition-colors">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-slate-100 dark:bg-zinc-800 border-none rounded-lg text-sm focus:ring-2 focus:ring-primary/30 transition-all placeholder:text-slate-400" placeholder="Search donors, volunteers, or reports..." type="text"/>
</div>
</div>
<div class="flex items-center gap-6">
<button class="relative text-slate-500 hover:text-primary transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-0 right-0 size-2 bg-red-500 rounded-full border-2 border-white dark:border-zinc-900"></span>
</button>
<div class="h-8 w-px bg-slate-200 dark:bg-zinc-800"></div>
<div class="flex items-center gap-3 pl-2">
<div class="text-right hidden sm:block">
<p class="text-sm font-bold leading-none">Arjun Mehta</p>
<p class="text-[11px] text-slate-400 font-medium">System Admin</p>
</div>
<div class="size-10 rounded-full bg-primary/20 border-2 border-primary overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Admin profile picture arjun mehta" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgmvePCwiQZFE6fk-SHlQ9jDJD8lWBvhjU8faC7AH0FGQLQ1KiMvCNpQP66sZwJ4j9IIy0FpSbZf75R3BBNZEy041cWRy0nZJ1un_ItKZLi-sXO90_X_Y6eEZteEW_7dlmIOPwtM0yHCinhsnbgmKYzClEJOE7HW3DPkZCA25iiAPfhiNU4QhNPKdHkc16oEH1VYcHngF52MnzKxzvObpfxJ7NUJCS2bOtmcRUx8hYd26phVzPmPmhw1nWwuRbCRegDlJ5v4BSsuY"/>
</div>
<span class="material-symbols-outlined text-slate-400 cursor-pointer">expand_more</span>
</div>
</div>
</header>






<div class="p-8 space-y-8">
<!-- Welcome Section -->
<div>
<h1 class="text-3xl font-black text-slate-900 dark:text-white tracking-tight">Welcome back, Arjun 👋</h1>
<p class="text-slate-500 dark:text-slate-400 mt-1">Here's a snapshot of Youth for Equity's impact today.</p>
</div>
<!-- Metrics Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Metric 1 -->
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">payments</span>
</div>
<span class="text-primary text-xs font-bold flex items-center gap-0.5">+12.4% <span class="material-symbols-outlined text-xs">trending_up</span></span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Donations</p>
<h3 class="text-2xl font-black mt-1">₹ 12,45,000</h3>
</div>
<!-- Metric 2 -->
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">handshake</span>
</div>
<span class="text-primary text-xs font-bold flex items-center gap-0.5">+5.2% <span class="material-symbols-outlined text-xs">trending_up</span></span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Volunteers</p>
<h3 class="text-2xl font-black mt-1">1,240</h3>
</div>
<!-- Metric 3 -->
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">rocket_launch</span>
</div>
<span class="text-slate-400 text-xs font-bold flex items-center gap-0.5">0.0% <span class="material-symbols-outlined text-xs">remove</span></span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Programs Impacted</p>
<h3 class="text-2xl font-black mt-1">18</h3>
</div>
<!-- Metric 4 -->
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined">favorite</span>
</div>
<span class="text-primary text-xs font-bold flex items-center gap-0.5">+15.8% <span class="material-symbols-outlined text-xs">trending_up</span></span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Lives Touched</p>
<h3 class="text-2xl font-black mt-1">45,000</h3>
</div>
</div>
<!-- Main Grid Section -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Trends Chart Area -->
<div class="lg:col-span-2 space-y-6">
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm">
<div class="flex items-center justify-between mb-8">
<div>
<h3 class="text-lg font-bold">Donation Trends</h3>
<p class="text-xs text-slate-500 dark:text-slate-400">Monthly funding summary for 2024</p>
</div>
<select class="bg-slate-50 dark:bg-zinc-800 border-none rounded-lg text-xs font-bold py-1.5 focus:ring-primary/20">
<option>Last 6 Months</option>
<option>Last 12 Months</option>
</select>
</div>
<div class="relative h-64 w-full">
<svg class="w-full h-full" preserveaspectratio="none" viewbox="0 0 1000 250">
<defs>
<lineargradient id="chartGradient" x1="0" x2="0" y1="0" y2="1">
<stop offset="0%" stop-color="#21d411" stop-opacity="0.3"></stop>
<stop offset="100%" stop-color="#21d411" stop-opacity="0.0"></stop>
</lineargradient>
</defs>
<path d="M0,200 Q150,180 300,100 T600,120 T900,40 L1000,40 L1000,250 L0,250 Z" fill="url(#chartGradient)"></path>
<path d="M0,200 Q150,180 300,100 T600,120 T900,40 L1000,40" fill="none" stroke="#21d411" stroke-linecap="round" stroke-width="4"></path>
<!-- Grid lines simulated -->
<line stroke="#f1f5f9" stroke-width="1" x1="0" x2="1000" y1="50" y2="50"></line>
<line stroke="#f1f5f9" stroke-width="1" x1="0" x2="1000" y1="100" y2="100"></line>
<line stroke="#f1f5f9" stroke-width="1" x1="0" x2="1000" y1="150" y2="150"></line>
<line stroke="#f1f5f9" stroke-width="1" x1="0" x2="1000" y1="200" y2="200"></line>
</svg>
<div class="absolute inset-0 flex justify-between items-end px-2 pt-4">
<span class="text-[10px] font-bold text-slate-400">JAN</span>
<span class="text-[10px] font-bold text-slate-400">FEB</span>
<span class="text-[10px] font-bold text-slate-400">MAR</span>
<span class="text-[10px] font-bold text-slate-400">APR</span>
<span class="text-[10px] font-bold text-slate-400">MAY</span>
<span class="text-[10px] font-bold text-slate-400">JUN</span>
</div>
</div>
</div>
<!-- Quick Actions Section -->
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm">
<h3 class="text-lg font-bold mb-4">Quick Actions</h3>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
<button class="flex flex-col items-center justify-center p-4 bg-slate-50 dark:bg-zinc-800 hover:bg-primary/10 hover:text-primary transition-all rounded-xl border border-transparent hover:border-primary/20 group">
<span class="material-symbols-outlined text-3xl mb-2">add_circle</span>
<span class="text-sm font-bold">New Program</span>
</button>
<button class="flex flex-col items-center justify-center p-4 bg-slate-50 dark:bg-zinc-800 hover:bg-primary/10 hover:text-primary transition-all rounded-xl border border-transparent hover:border-primary/20 group">
<span class="material-symbols-outlined text-3xl mb-2">file_export</span>
<span class="text-sm font-bold">Export Report</span>
</button>
<button class="flex flex-col items-center justify-center p-4 bg-slate-50 dark:bg-zinc-800 hover:bg-primary/10 hover:text-primary transition-all rounded-xl border border-transparent hover:border-primary/20 group">
<span class="material-symbols-outlined text-3xl mb-2">send</span>
<span class="text-sm font-bold">Newsletter</span>
</button>
</div>
</div>
</div>
<!-- Recent Activity Section -->
<div class="space-y-6">
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-primary/10 shadow-sm h-full flex flex-col">
<div class="flex items-center justify-between mb-6">
<h3 class="text-lg font-bold">Recent Activity</h3>
<button class="text-xs text-primary font-bold hover:underline">View All</button>
</div>
<div class="flex-1 space-y-6">
<!-- Activity 1 -->
<div class="flex gap-4 items-start relative pb-6 border-l-2 border-slate-100 dark:border-zinc-800 ml-3 pl-6">
<div class="absolute -left-3 size-6 bg-primary rounded-full border-4 border-white dark:border-zinc-900 flex items-center justify-center">
<span class="material-symbols-outlined text-[10px] text-white">volunteer_activism</span>
</div>
<div>
<p class="text-sm font-bold text-slate-800 dark:text-slate-100 leading-tight">New Donation Received</p>
<p class="text-xs text-slate-500 mt-1">Rahul Sharma donated <span class="text-primary font-bold">₹25,000</span> to Urban Education Fund.</p>
<p class="text-[10px] text-slate-400 mt-2 font-medium">10 mins ago</p>
</div>
</div>
<!-- Activity 2 -->
<div class="flex gap-4 items-start relative pb-6 border-l-2 border-slate-100 dark:border-zinc-800 ml-3 pl-6">
<div class="absolute -left-3 size-6 bg-primary rounded-full border-4 border-white dark:border-zinc-900 flex items-center justify-center">
<span class="material-symbols-outlined text-[10px] text-white">person_add</span>
</div>
<div>
<p class="text-sm font-bold text-slate-800 dark:text-slate-100 leading-tight">New Volunteer Joined</p>
<p class="text-xs text-slate-500 mt-1">Aisha V. signed up for the <span class="font-bold">Green Earth Initiative</span> program.</p>
<p class="text-[10px] text-slate-400 mt-2 font-medium">2 hours ago</p>
</div>
</div>
<!-- Activity 3 -->
<div class="flex gap-4 items-start relative pb-6 border-l-2 border-slate-100 dark:border-zinc-800 ml-3 pl-6">
<div class="absolute -left-3 size-6 bg-primary rounded-full border-4 border-white dark:border-zinc-900 flex items-center justify-center">
<span class="material-symbols-outlined text-[10px] text-white">done_all</span>
</div>
<div>
<p class="text-sm font-bold text-slate-800 dark:text-slate-100 leading-tight">Milestone Reached</p>
<p class="text-xs text-slate-500 mt-1">Program 'Health for All' reached <span class="font-bold">5,000</span> beneficiaries this month.</p>
<p class="text-[10px] text-slate-400 mt-2 font-medium">Yesterday</p>
</div>
</div>
<!-- Activity 4 -->
<div class="flex gap-4 items-start relative ml-3 pl-6">
<div class="absolute -left-3 size-6 bg-primary rounded-full border-4 border-white dark:border-zinc-900 flex items-center justify-center">
<span class="material-symbols-outlined text-[10px] text-white">mail</span>
</div>
<div>
<p class="text-sm font-bold text-slate-800 dark:text-slate-100 leading-tight">Campaign Launched</p>
<p class="text-xs text-slate-500 mt-1">Newsletter 'Q3 Impact Report' was sent to 12,000 subscribers.</p>
<p class="text-[10px] text-slate-400 mt-2 font-medium">2 days ago</p>
</div>
</div>
</div>
<button class="w-full py-2.5 mt-8 bg-slate-50 dark:bg-zinc-800 text-slate-600 dark:text-slate-300 rounded-lg text-xs font-bold hover:bg-slate-100 transition-colors">
                                Export Activity Log
                            </button>
</div>
</div>
</div>
</div>
<?php include "../../includes/footer.php" ?>
</main>
</div>
</body></html>