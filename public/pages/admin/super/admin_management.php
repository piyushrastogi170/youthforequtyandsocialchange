<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Super Admin Dashboard | Youth for Equity &amp; Social Change</title>
<link rel="shortcut icon" href="../../../assets/images/logo.png" type="image/x-icon">
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
                        "display": ["Public Sans"]
                    },
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        body { font-family: 'Public Sans', sans-serif; }
        .material-symbols-outlined { font-size: 24px; vertical-align: middle; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-100 antialiased font-display">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar Navigation -->
<aside class="w-64 flex-shrink-0 bg-white dark:bg-[#2a1d17] border-r border-primary/10 flex flex-col">
<div class="p-6 flex items-center gap-3">
<div class="size-10 bg-primary rounded-xl flex items-center justify-center text-white">
<span class="material-symbols-outlined">diversity_3</span>
</div>
<div class="flex flex-col">
<h1 class="text-sm font-bold leading-tight">Youth for Equity</h1>
<p class="text-[10px] uppercase tracking-wider text-primary font-semibold">Admin Console</p>
</div>
</div>
<nav class="flex-1 px-4 space-y-1 mt-4">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/5 transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-primary">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/5 transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-primary">folder_open</span>
<span class="text-sm font-medium">Projects</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-primary/10 text-primary transition-colors group" href="#">
<span class="material-symbols-outlined">group</span>
<span class="text-sm font-semibold">Team Access</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/5 transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-primary">chat</span>
<span class="text-sm font-medium">Communications</span>
</a>
<div class="pt-4 pb-2 text-[10px] font-bold text-slate-400 uppercase tracking-widest px-3">System</div>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/5 transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-primary">settings</span>
<span class="text-sm font-medium">Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 dark:text-slate-400 hover:bg-primary/5 transition-colors group" href="#">
<span class="material-symbols-outlined group-hover:text-primary">help</span>
<span class="text-sm font-medium">Help Center</span>
</a>
</nav>
<div class="p-4 mt-auto border-t border-primary/10">
<button class="w-full flex items-center justify-center gap-2 py-2.5 bg-slate-100 dark:bg-slate-800 rounded-lg text-sm font-semibold hover:bg-slate-200 dark:hover:bg-slate-700 transition-colors">
<span class="material-symbols-outlined text-sm">logout</span>
                    Logout
                </button>
</div>
</aside>
<!-- Main Content Container -->
<main class="flex-1 flex flex-col min-w-0 overflow-y-auto">
<!-- Header Section -->
<header class="sticky top-0 z-10 bg-background-light/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-primary/5 px-8 py-6">
<div class="flex items-center justify-between gap-4">
<div>
<h2 class="text-2xl font-bold tracking-tight">Team Access</h2>
<p class="text-sm text-slate-500 dark:text-slate-400 mt-1">Manage your organization's Admin roles.</p>
</div>
<div class="flex items-center gap-3">
<button class="p-2 rounded-lg bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 shadow-sm">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="h-8 w-px bg-slate-200 dark:bg-slate-700 mx-1"></div>
<div class="flex items-center gap-3 px-2 py-1 rounded-full bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 shadow-sm">
<div class="size-8 rounded-full bg-primary/20 flex items-center justify-center text-primary font-bold text-xs">SAD</div>
<span class="text-xs font-semibold mr-2">Super Admin Dashboard</span>
</div>
</div>
</div>
</header>
<!-- Dashboard Content -->
<div class="p-8 space-y-8 max-w-7xl mx-auto w-full">
<!-- Registration Section -->
<section class="grid grid-cols-1 lg:grid-cols-3 gap-8">
<div class="lg:col-span-1 space-y-6">
<div class="bg-white dark:bg-slate-800 p-6 rounded-xl border border-primary/10 shadow-sm">
<h3 class="text-lg font-bold mb-4 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person_add</span>
                                Add New Admin
                            </h3>
<form class="space-y-4" action="add_admin.php" method="post">
<div>
<label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Full Name</label>
<input class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2.5 text-sm focus:ring-primary focus:border-primary transition-all" placeholder="Full Name" name="name" type="text" required />
</div>
<div>
<label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Email Address</label>
<input class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2.5 text-sm focus:ring-primary focus:border-primary transition-all" placeholder="name@admin.in" name="email" type="email" required />
</div>
<div>
<label for="password" class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Set Password</label>
<input class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2.5 text-sm focus:ring-primary focus:border-primary transition-all" placeholder="••••••••" name="password" type="password" required />
</div>
<div>
<label class="block text-xs font-bold text-slate-500 uppercase tracking-wider mb-1.5">Assigned Role</label>
<select name="role" class="w-full bg-slate-50 dark:bg-slate-900 border-slate-200 dark:border-slate-700 rounded-lg px-4 py-2.5 text-sm focus:ring-primary focus:border-primary transition-all"  required >
<option value="" default>Select</option>
<option value="admin">Admin</option>
<option value="super_admin">Super Admin</option>
</select>
</div>
<button class="w-full py-3 bg-primary hover:bg-primary/90 text-white rounded-lg font-bold text-sm transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2" type="submit">
<span class="material-symbols-outlined text-lg">send</span>
                                    Submit
                                </button>
</form>
</div>

</div>
<!-- Existing Administrators Table -->
<div class="lg:col-span-2 space-y-4">
<div class="flex items-center justify-between mb-2">
<h3 class="text-lg font-bold">Existing Administrators</h3>
<div class="flex items-center gap-2">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-lg">search</span>
<input class="pl-10 pr-4 py-1.5 bg-white dark:bg-slate-800 border-slate-200 dark:border-slate-700 rounded-full text-xs focus:ring-primary focus:border-primary transition-all w-48 lg:w-64" placeholder="Filter admins..." type="text"/>
</div>
</div>
</div>
<div class="bg-white dark:bg-slate-800 rounded-xl border border-primary/10 shadow-sm overflow-hidden">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-slate-50 dark:bg-slate-900/50 border-b border-primary/5">
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Admin Details</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Role</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest">Status</th>
<th class="px-6 py-4 text-xs font-bold text-slate-500 uppercase tracking-widest text-right">Actions</th>
</tr>
</thead>
<tbody class="divide-y divide-primary/5">
<!-- Row 1 -->
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-900/20 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-primary flex items-center justify-center text-white text-xs font-bold">SM</div>
<div class="flex flex-col">
<span class="text-sm font-semibold">Sarah Martinez</span>
<span class="text-xs text-slate-500">sarah.m@youthforequity.org</span>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex px-2 py-1 rounded-md bg-primary/10 text-primary text-[10px] font-bold uppercase tracking-tight">Super Admin</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<div class="size-2 rounded-full bg-emerald-500"></div>
<span class="text-xs font-medium text-emerald-600 dark:text-emerald-400">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 hover:bg-primary/10 rounded-md text-slate-400 hover:text-primary transition-colors" title="Edit">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 hover:bg-primary/10 rounded-md text-slate-400 hover:text-primary transition-colors" title="Settings">
<span class="material-symbols-outlined text-lg">settings_suggest</span>
</button>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-900/20 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300 text-xs font-bold">DC</div>
<div class="flex flex-col">
<span class="text-sm font-semibold">David Chen</span>
<span class="text-xs text-slate-500">d.chen@youthforequity.org</span>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex px-2 py-1 rounded-md bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-tight">Program Manager</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<div class="size-2 rounded-full bg-emerald-500"></div>
<span class="text-xs font-medium text-emerald-600 dark:text-emerald-400">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 hover:bg-primary/10 rounded-md text-slate-400 hover:text-primary transition-colors" title="Edit">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 hover:bg-primary/10 rounded-md text-slate-400 hover:text-red-500 transition-colors" title="Remove">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-900/20 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full border-2 border-dashed border-primary/30 flex items-center justify-center text-primary/50 text-xs font-bold">AR</div>
<div class="flex flex-col">
<span class="text-sm font-semibold">Aisha Roberts</span>
<span class="text-xs text-slate-500">aisha.r@external.org</span>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex px-2 py-1 rounded-md bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-tight">Communications</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<div class="size-2 rounded-full bg-amber-500 animate-pulse"></div>
<span class="text-xs font-medium text-amber-600 dark:text-amber-400">Pending</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-1">
<button class="px-3 py-1.5 bg-primary/10 text-primary hover:bg-primary hover:text-white rounded text-[10px] font-bold transition-all uppercase tracking-wide">
                                                    Resend Invite
                                                </button>
<button class="p-1.5 hover:bg-primary/10 rounded-md text-slate-400 hover:text-red-500 transition-colors" title="Remove">
<span class="material-symbols-outlined text-lg">cancel</span>
</button>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-slate-50/50 dark:hover:bg-slate-900/20 transition-colors group">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="size-9 rounded-full bg-slate-200 dark:bg-slate-700 flex items-center justify-center text-slate-600 dark:text-slate-300 text-xs font-bold">JP</div>
<div class="flex flex-col">
<span class="text-sm font-semibold">Jordan Patel</span>
<span class="text-xs text-slate-500">patel.j@youthforequity.org</span>
</div>
</div>
</td>
<td class="px-6 py-4">
<span class="inline-flex px-2 py-1 rounded-md bg-slate-100 dark:bg-slate-700 text-slate-600 dark:text-slate-400 text-[10px] font-bold uppercase tracking-tight">Program Manager</span>
</td>
<td class="px-6 py-4">
<div class="flex items-center gap-1.5">
<div class="size-2 rounded-full bg-emerald-500"></div>
<span class="text-xs font-medium text-emerald-600 dark:text-emerald-400">Active</span>
</div>
</td>
<td class="px-6 py-4 text-right">
<div class="flex items-center justify-end gap-1">
<button class="p-1.5 hover:bg-primary/10 rounded-md text-slate-400 hover:text-primary transition-colors" title="Edit">
<span class="material-symbols-outlined text-lg">edit</span>
</button>
<button class="p-1.5 hover:bg-primary/10 rounded-md text-slate-400 hover:text-red-500 transition-colors" title="Remove">
<span class="material-symbols-outlined text-lg">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
<div class="px-6 py-4 bg-slate-50 dark:bg-slate-900/50 border-t border-primary/5 flex items-center justify-between">
<span class="text-xs text-slate-500">Showing 4 of 12 administrators</span>
<div class="flex items-center gap-2">
<button class="px-3 py-1.5 text-xs font-semibold bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded hover:bg-slate-50 transition-colors disabled:opacity-50" disabled="">Previous</button>
<button class="px-3 py-1.5 text-xs font-semibold bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded hover:bg-slate-50 transition-colors">Next</button>
</div>
</div>
</div>
</div>
</section>
<!-- Role Permissions Summary -->
<section class="mt-12">
<h3 class="text-lg font-bold mb-6">Permission Reference</h3>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<div class="bg-white dark:bg-slate-800 p-5 rounded-xl border border-primary/10 border-t-4 border-t-primary">
<h4 class="font-bold text-sm mb-3">Super Admin</h4>
<ul class="space-y-2">
<li class="flex items-start gap-2 text-xs text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-emerald-500 text-sm leading-none mt-0.5">check_circle</span>
                                    Manage organization settings
                                </li>
<li class="flex items-start gap-2 text-xs text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-emerald-500 text-sm leading-none mt-0.5">check_circle</span>
                                    Add/Remove administrators
                                </li>
<li class="flex items-start gap-2 text-xs text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-emerald-500 text-sm leading-none mt-0.5">check_circle</span>
                                    Financial reporting access
                                </li>
</ul>
</div>
<div class="bg-white dark:bg-slate-800 p-5 rounded-xl border border-primary/10 border-t-4 border-t-slate-400">
<h4 class="font-bold text-sm mb-3">Program Manager</h4>
<ul class="space-y-2">
<li class="flex items-start gap-2 text-xs text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-emerald-500 text-sm leading-none mt-0.5">check_circle</span>
                                    Create/Edit projects
                                </li>
<li class="flex items-start gap-2 text-xs text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-emerald-500 text-sm leading-none mt-0.5">check_circle</span>
                                    Manage volunteer assignments
                                </li>
<li class="flex items-start gap-2 text-xs text-slate-400 dark:text-slate-600">
<span class="material-symbols-outlined text-sm leading-none mt-0.5">block</span>
                                    No admin management
                                </li>
</ul>
</div>
<div class="bg-white dark:bg-slate-800 p-5 rounded-xl border border-primary/10 border-t-4 border-t-slate-300">
<h4 class="font-bold text-sm mb-3">Communications</h4>
<ul class="space-y-2">
<li class="flex items-start gap-2 text-xs text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-emerald-500 text-sm leading-none mt-0.5">check_circle</span>
                                    Publish blog/social content
                                </li>
<li class="flex items-start gap-2 text-xs text-slate-600 dark:text-slate-400">
<span class="material-symbols-outlined text-emerald-500 text-sm leading-none mt-0.5">check_circle</span>
                                    Send mass notifications
                                </li>
<li class="flex items-start gap-2 text-xs text-slate-400 dark:text-slate-600">
<span class="material-symbols-outlined text-sm leading-none mt-0.5">block</span>
                                    Read-only project view
                                </li>
</ul>
</div>
</div>
</section>
</div>
<!-- Footer -->
<footer class="mt-auto py-6 px-8 text-center">
<p class="text-[10px] text-slate-400 uppercase tracking-[0.2em] font-medium">
                    © 2026 Youth for Equity &amp; Social Change • Secure Admin Portal
                </p>
</footer>
</main>
</div>
</body></html>