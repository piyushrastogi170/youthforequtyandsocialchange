<?php
session_start();

if(!isset($_SESSION['role']) || 
   ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'super_admin')){
    header("Location: login.php");
    exit();
}


// Authontication
function requireRole($role) {
    if (!isset($_SESSION['admin_id']) || $_SESSION['role'] !== $role) {
        header("Location: login.php");
        exit;
    }
}
requireRole('super_admin');
?>
<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>NGO Dashboard - Youth for Equity &amp; Social Change</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "display": ["Public Sans", "sans-serif"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Public Sans', sans-serif; }
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200">
<div class="flex min-h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-72 bg-white dark:bg-zinc-900 border-r border-slate-200 dark:border-zinc-800 flex flex-col fixed h-full z-50">
<div class="p-6">
<div class="flex items-center gap-3">
<div class="size-10 bg-primary rounded-xl flex items-center justify-center text-white">
<span class="material-symbols-outlined">diversity_3</span>
</div>
<div>
<h1 class="text-sm font-bold leading-tight text-slate-900 dark:text-white uppercase tracking-wider">Youth for Equity</h1>
<p class="text-xs text-slate-500 dark:text-slate-400">&amp; Social Change</p>
</div>
</div>
</div>
<nav class="flex-1 px-4 space-y-1 mt-4">
<a class="flex items-center gap-3 px-4 py-3 rounded-xl bg-primary/10 text-primary group transition-all" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm font-semibold">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-zinc-800 transition-all" href="#">
<span class="material-symbols-outlined">inventory_2</span>
<span class="text-sm font-medium">Projects</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-zinc-800 transition-all" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-medium">Team Access</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-zinc-800 transition-all" href="#">
<span class="material-symbols-outlined">chat_bubble</span>
<span class="text-sm font-medium">Communications</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-zinc-800 transition-all mt-8" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="text-sm font-medium">System Settings</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-600 dark:text-slate-400 hover:bg-slate-100 dark:hover:bg-zinc-800 transition-all" href="#">
<span class="material-symbols-outlined">help_center</span>
<span class="text-sm font-medium">Help Center</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-zinc-800">
<button class="flex items-center gap-3 px-4 py-3 w-full rounded-xl text-slate-500 hover:text-red-500 transition-colors">
<span class="material-symbols-outlined">logout</span>
<span class="text-sm font-medium">Log Out</span>
</button>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 ml-72">
<!-- Navbar -->
<header class="h-20 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-md border-b border-slate-200 dark:border-zinc-800 flex items-center justify-between px-8 sticky top-0 z-40">
<h2 class="text-xl font-bold text-slate-800 dark:text-white">Super Admin Dashboard</h2>
<div class="flex items-center gap-6">
<button class="relative p-2 text-slate-500 hover:bg-slate-100 dark:hover:bg-zinc-800 rounded-full transition-all">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-primary rounded-full border-2 border-white dark:border-zinc-900"></span>
</button>
<div class="flex items-center gap-3 pl-6 border-l border-slate-200 dark:border-zinc-800">
<div class="text-right">
<p class="text-sm font-bold text-slate-900 dark:text-white leading-none">Alex Rivera</p>
<p class="text-xs text-slate-500 dark:text-slate-400">Super Admin</p>
</div>
<div class="size-10 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold border border-primary/30">
                            AR
                        </div>
</div>
</div>
</header>
<div class="p-8">
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm hover:shadow-md transition-all group">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined">payments</span>
</div>
<span class="text-emerald-500 text-xs font-bold px-2 py-1 bg-emerald-50 dark:bg-emerald-500/10 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-xs">trending_up</span> +12%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Donations</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">$124,500</h3>
</div>
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm hover:shadow-md transition-all group">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined">rocket_launch</span>
</div>
<span class="text-emerald-500 text-xs font-bold px-2 py-1 bg-emerald-50 dark:bg-emerald-500/10 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-xs">trending_up</span> +2%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Active Projects</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">18</h3>
</div>
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm hover:shadow-md transition-all group">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined">admin_panel_settings</span>
</div>
<span class="text-slate-400 text-xs font-bold px-2 py-1 bg-slate-50 dark:bg-zinc-800 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-xs">remove</span> 0%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Total Admins</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">12</h3>
</div>
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm hover:shadow-md transition-all group">
<div class="flex justify-between items-start mb-4">
<div class="p-2 bg-primary/10 rounded-lg text-primary group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined">volunteer_activism</span>
</div>
<span class="text-emerald-500 text-xs font-bold px-2 py-1 bg-emerald-50 dark:bg-emerald-500/10 rounded-full flex items-center gap-1">
<span class="material-symbols-outlined text-xs">trending_up</span> +8%
                            </span>
</div>
<p class="text-slate-500 dark:text-slate-400 text-sm font-medium">Pending Volunteers</p>
<h3 class="text-2xl font-bold text-slate-900 dark:text-white mt-1">45</h3>
</div>
</div>
<!-- Charts and Tables -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<!-- Donation Overview Chart -->
<div class="lg:col-span-2 bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm">
<div class="flex items-center justify-between mb-8">
<div>
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Donation Overview</h3>
<p class="text-sm text-slate-500 dark:text-slate-400">Monthly fundraising performance</p>
</div>
<select class="text-sm border-slate-200 dark:border-zinc-800 dark:bg-zinc-800 rounded-lg px-3 py-1 outline-none">
<option>Last 12 Months</option>
<option>Last 6 Months</option>
</select>
</div>
<div class="relative h-[250px] w-full mt-4">
<!-- SVG Chart Simulation -->
<svg class="w-full h-full" preserveaspectratio="none" viewbox="0 0 500 150">
<defs>
<lineargradient id="gradient" x1="0%" x2="0%" y1="0%" y2="100%">
<stop offset="0%" style="stop-color:#ec5b13;stop-opacity:0.2"></stop>
<stop offset="100%" style="stop-color:#ec5b13;stop-opacity:0"></stop>
</lineargradient>
</defs>
<path d="M0,120 Q50,80 100,100 T200,60 T300,90 T400,30 T500,50 L500,150 L0,150 Z" fill="url(#gradient)"></path>
<path d="M0,120 Q50,80 100,100 T200,60 T300,90 T400,30 T500,50" fill="none" stroke="#ec5b13" stroke-linecap="round" stroke-width="3"></path>
</svg>
<div class="flex justify-between mt-4 text-[11px] text-slate-400 font-medium uppercase tracking-tighter">
<span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>May</span><span>Jun</span><span>Jul</span><span>Aug</span><span>Sep</span><span>Oct</span><span>Nov</span><span>Dec</span>
</div>
</div>
</div>
<!-- Quick Stats/Info Column -->
<div class="bg-white dark:bg-zinc-900 p-6 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm">
<h3 class="text-lg font-bold text-slate-900 dark:text-white mb-6">Upcoming Milestones</h3>
<div class="space-y-6">
<div class="flex gap-4">
<div class="w-1 bg-primary rounded-full"></div>
<div>
<p class="text-sm font-bold text-slate-900 dark:text-white">Education Drive 2024</p>
<p class="text-xs text-slate-500">Goal: $50,000 • In 12 days</p>
<div class="w-full h-1.5 bg-slate-100 dark:bg-zinc-800 rounded-full mt-2">
<div class="h-full bg-primary rounded-full w-[75%]"></div>
</div>
</div>
</div>
<div class="flex gap-4">
<div class="w-1 bg-emerald-500 rounded-full"></div>
<div>
<p class="text-sm font-bold text-slate-900 dark:text-white">Clean Water Initiative</p>
<p class="text-xs text-slate-500">Goal: $15,000 • In 4 days</p>
<div class="w-full h-1.5 bg-slate-100 dark:bg-zinc-800 rounded-full mt-2">
<div class="h-full bg-emerald-500 rounded-full w-[92%]"></div>
</div>
</div>
</div>
<div class="flex gap-4">
<div class="w-1 bg-slate-300 rounded-full"></div>
<div>
<p class="text-sm font-bold text-slate-900 dark:text-white">Community Center Reno</p>
<p class="text-xs text-slate-500">Goal: $25,000 • In 28 days</p>
<div class="w-full h-1.5 bg-slate-100 dark:bg-zinc-800 rounded-full mt-2">
<div class="h-full bg-slate-300 rounded-full w-[15%]"></div>
</div>
</div>
</div>
</div>
<button class="w-full mt-8 py-3 text-sm font-bold text-primary border border-primary/30 rounded-xl hover:bg-primary/5 transition-colors">
                            View All Project Milestones
                        </button>
</div>
</div>
<!-- Recent Activity Table -->
<div class="mt-8 bg-white dark:bg-zinc-900 rounded-xl border border-slate-200 dark:border-zinc-800 shadow-sm overflow-hidden">
<div class="p-6 border-b border-slate-200 dark:border-zinc-800 flex items-center justify-between">
<h3 class="text-lg font-bold text-slate-900 dark:text-white">Recent Activity</h3>
<div class="flex gap-2">
<button class="p-2 border border-slate-200 dark:border-zinc-800 rounded-lg hover:bg-slate-50 dark:hover:bg-zinc-800">
<span class="material-symbols-outlined text-sm">filter_alt</span>
</button>
<button class="p-2 border border-slate-200 dark:border-zinc-800 rounded-lg hover:bg-slate-50 dark:hover:bg-zinc-800">
<span class="material-symbols-outlined text-sm">download</span>
</button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left">
<thead>
<tr class="bg-slate-50 dark:bg-zinc-800/50 text-slate-500 dark:text-slate-400 text-xs font-bold uppercase tracking-wider">
<th class="px-6 py-4">Activity</th>
<th class="px-6 py-4">User</th>
<th class="px-6 py-4">Date</th>
<th class="px-6 py-4">Status</th>
<th class="px-6 py-4 text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-100 dark:divide-zinc-800">
<tr class="hover:bg-slate-50 dark:hover:bg-zinc-800/30 transition-colors">
<td class="px-6 py-4">
<p class="text-sm font-semibold text-slate-900 dark:text-white">Project Approved</p>
<p class="text-xs text-slate-500">Youth Arts Initiative</p>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-slate-200 dark:bg-zinc-700 overflow-hidden">
<img alt="User avatar" data-alt="Small profile avatar of Sarah Johnson" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA5AI9EFcg18m4ihKDhzdDxamS0LtAliZX6DXuRZeA1DpsqQNsP4LvAW_XDsLvRibqqWRH8nFBYQ01CuVnTYErG0VXZARM9fRNmfQPnmwsrATjWKZnx5k6Px-Ja23e5u36ipddLHYtjX5G4W8wVR5NVAA-PBRVXD-iMfL5wsZFge4YW3mkCSorAQ8UsbUUltO5QelLHD_VDA1Oi_i_Wmh0hq__qaeMr1GLbyye1O5vUI6ZpeP9O5kXV6GJIDKuY4AwsgyDXip69V1k"/>
</div>
<span class="text-sm font-medium">Sarah Johnson</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">Oct 24, 2023</td>
<td class="px-6 py-4">
<span class="flex items-center gap-1.5 text-xs font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-500/10 px-2 py-1 rounded-full w-fit">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Completed
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-slate-600 dark:hover:text-white">
<span class="material-symbols-outlined text-sm">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-zinc-800/30 transition-colors">
<td class="px-6 py-4">
<p class="text-sm font-semibold text-slate-900 dark:text-white">New Donation Received</p>
<p class="text-xs text-slate-500">Amount: $1,250.00</p>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-primary/10 flex items-center justify-center text-[10px] font-bold text-primary">MW</div>
<span class="text-sm font-medium">Michael Wu</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">Oct 23, 2023</td>
<td class="px-6 py-4">
<span class="flex items-center gap-1.5 text-xs font-bold text-emerald-600 bg-emerald-50 dark:bg-emerald-500/10 px-2 py-1 rounded-full w-fit">
<span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Verified
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-slate-600 dark:hover:text-white">
<span class="material-symbols-outlined text-sm">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-zinc-800/30 transition-colors">
<td class="px-6 py-4">
<p class="text-sm font-semibold text-slate-900 dark:text-white">Volunteer Application</p>
<p class="text-xs text-slate-500">Program: Rural Education</p>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-slate-200 dark:bg-zinc-700 overflow-hidden">
<img alt="User avatar" data-alt="Small profile avatar of Emma Davis" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB41RmFfPKi5_LDyxxU2t3NgRiF3qQqHJGVc5hsTJ1WbVslkRCqo9nXMxI_xcf-oKdUlaYlzZUOXv37UOp89e3D2wB14JbDxGb8bIf6hdeEvq6q9vREyVEDw0TCv1Rz0YmRE5LIJG1f093tdDGslLdlJzyE0Njs_nMa_d8rsRXSr6u4v7ii4SY1h6a67w4qdpfo56TJhaSo8fJzYoOe5QY728xy0iV9kMAFi8WXSTioTLPYb_qUKP4g1BU1P9tVvYK3Xs7G-XXzs7s"/>
</div>
<span class="text-sm font-medium">Emma Davis</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">Oct 22, 2023</td>
<td class="px-6 py-4">
<span class="flex items-center gap-1.5 text-xs font-bold text-orange-600 bg-orange-50 dark:bg-orange-500/10 px-2 py-1 rounded-full w-fit">
<span class="w-1.5 h-1.5 rounded-full bg-orange-600"></span> Pending Review
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-slate-600 dark:hover:text-white">
<span class="material-symbols-outlined text-sm">more_vert</span>
</button>
</td>
</tr>
<tr class="hover:bg-slate-50 dark:hover:bg-zinc-800/30 transition-colors">
<td class="px-6 py-4">
<p class="text-sm font-semibold text-slate-900 dark:text-white">Admin Access Revoked</p>
<p class="text-xs text-slate-500">User: System Auditor</p>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="size-7 rounded-full bg-slate-200 dark:bg-zinc-700 flex items-center justify-center text-[10px] font-bold">JD</div>
<span class="text-sm font-medium">John Doe</span>
</div>
</td>
<td class="px-6 py-4 text-sm text-slate-500">Oct 21, 2023</td>
<td class="px-6 py-4">
<span class="flex items-center gap-1.5 text-xs font-bold text-slate-500 bg-slate-100 dark:bg-zinc-800 px-2 py-1 rounded-full w-fit">
<span class="w-1.5 h-1.5 rounded-full bg-slate-500"></span> Inactive
                                        </span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-slate-400 hover:text-slate-600 dark:hover:text-white">
<span class="material-symbols-outlined text-sm">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="p-6 border-t border-slate-200 dark:border-zinc-800 flex items-center justify-between">
<p class="text-sm text-slate-500">Showing 1 to 4 of 24 activities</p>
<div class="flex gap-2">
<button class="px-4 py-2 text-sm font-semibold border border-slate-200 dark:border-zinc-800 rounded-lg hover:bg-slate-50 dark:hover:bg-zinc-800 disabled:opacity-50" disabled="">Previous</button>
<button class="px-4 py-2 text-sm font-semibold bg-primary text-white rounded-lg hover:bg-primary/90">Next</button>
</div>
</div>
</div>
</div>
</main>
</div>
<?php include "../../includes/footer.php" ?>
</body></html>
</body></html>