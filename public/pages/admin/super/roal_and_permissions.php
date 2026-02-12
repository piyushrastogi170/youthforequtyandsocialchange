<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Role &amp; Permission Management | Youth for Equity</title>
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
                    borderRadius: { "DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px" },
                },
            },
        }
    </script>
<style>
        .custom-scrollbar::-webkit-scrollbar {
            width: 6px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: transparent;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: #e5e7eb;
            border-radius: 10px;
        }
        .permission-row:hover {
            background-color: rgba(236, 91, 19, 0.03);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-slate-800 antialiased">
<div class="flex h-screen overflow-hidden">
<!-- Sidebar -->
<aside class="w-64 bg-white dark:bg-zinc-900 border-r border-slate-200 dark:border-zinc-800 flex flex-col">
<div class="p-6 flex items-center gap-3">
<div class="size-10 bg-primary rounded-xl flex items-center justify-center text-white shadow-lg shadow-primary/20">
<span class="material-symbols-outlined">diversity_3</span>
</div>
<div class="flex flex-col">
<h1 class="text-sm font-bold text-slate-900 dark:text-white leading-tight">Youth for Equity</h1>
<p class="text-[10px] text-slate-500 uppercase tracking-wider font-semibold">&amp; Social Change</p>
</div>
</div>
<nav class="flex-1 px-4 py-4 space-y-1 custom-scrollbar overflow-y-auto">
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-zinc-400 hover:bg-slate-50 dark:hover:bg-zinc-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
<span class="text-sm font-medium">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-zinc-400 hover:bg-slate-50 dark:hover:bg-zinc-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">folder_open</span>
<span class="text-sm font-medium">Projects</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-zinc-400 hover:bg-slate-50 dark:hover:bg-zinc-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">group</span>
<span class="text-sm font-medium">Team Access</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 bg-primary/10 text-primary rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px] fill-1">admin_panel_settings</span>
<span class="text-sm font-bold">Roles &amp; Permissions</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-zinc-400 hover:bg-slate-50 dark:hover:bg-zinc-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">forum</span>
<span class="text-sm font-medium">Communications</span>
</a>
<div class="pt-4 pb-2 px-3">
<p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest">System</p>
</div>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-zinc-400 hover:bg-slate-50 dark:hover:bg-zinc-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">settings</span>
<span class="text-sm font-medium">System Settings</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 text-slate-600 dark:text-zinc-400 hover:bg-slate-50 dark:hover:bg-zinc-800 rounded-lg transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">help</span>
<span class="text-sm font-medium">Help Center</span>
</a>
</nav>
<div class="p-4 border-t border-slate-200 dark:border-zinc-800">
<button class="w-full flex items-center justify-center gap-2 py-2.5 bg-slate-900 text-white rounded-lg text-sm font-bold shadow-sm hover:bg-slate-800 transition-all">
<span class="material-symbols-outlined text-[18px]">shield_person</span>
                    Admin Panel
                </button>
</div>
</aside>
<!-- Main Content -->
<main class="flex-1 flex flex-col overflow-hidden">
<!-- Header -->
<header class="h-20 bg-white dark:bg-zinc-900 border-b border-slate-200 dark:border-zinc-800 flex items-center justify-between px-8 shrink-0">
<div class="flex flex-col">
<h2 class="text-xl font-bold text-slate-900 dark:text-white">Role &amp; Permission Management</h2>
<p class="text-xs text-slate-500">Define and control access levels across the organization</p>
</div>
<div class="flex items-center gap-4">
<button class="relative p-2 text-slate-400 hover:bg-slate-50 rounded-full transition-colors">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 size-2 bg-primary border-2 border-white rounded-full"></span>
</button>
<div class="h-8 w-px bg-slate-200"></div>
<div class="flex items-center gap-3">
<div class="flex flex-col items-end">
<span class="text-sm font-bold text-slate-900 dark:text-white">Sarah Jenkins</span>
<span class="text-[11px] text-primary font-semibold">Super Admin</span>
</div>
<div class="size-10 rounded-full bg-slate-200 overflow-hidden border-2 border-primary/20">
<img alt="Profile" data-alt="Professional profile picture of administrative user" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDIqyDyMqH-8h6DKvPOMNmGFepcx-hxP7rLjWqActBfIgiYlI81Pj_heVTUbZY3f8eewdE72STRR7Cs6mF7VNbEWjbPb1SkKJLIxTADzWqtprpB7DXuUB1QsNJCpMgpTSNQj7zh8KGkjB80R5ZJactex_2NBY2oHn00c8b2rwi5cgqqOQaipl1Sj0ydfut1lwJM7UoexCWx3d5vB3M8uLUZOe2-EcOIUZpUCnWtv0oDrsUtE9FxmzOvW_4V-LzU9SQeKFBYO6C75aM"/>
</div>
</div>
</div>
</header>
<!-- Scrollable Content -->
<div class="flex-1 overflow-y-auto p-8 space-y-8 custom-scrollbar pb-32">
<!-- Roles Overview -->
<section>
<div class="flex items-center justify-between mb-4">
<h3 class="text-base font-bold text-slate-900 dark:text-white">Roles Overview</h3>
<button class="text-sm font-bold text-primary flex items-center gap-1 hover:underline">
<span class="material-symbols-outlined text-sm font-bold">add_circle</span>
                            Define New Role
                        </button>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-6">
<!-- Super Admin Card -->
<div class="bg-white dark:bg-zinc-900 rounded-xl p-5 border-t-4 border-t-primary shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-3">
<div class="p-2 bg-primary/10 rounded-lg">
<span class="material-symbols-outlined text-primary">security</span>
</div>
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
</div>
<h4 class="text-base font-bold text-slate-900 dark:text-white">Super Admin</h4>
<p class="text-xs text-slate-500 mt-1 mb-4 leading-relaxed">Full organization access with system-wide configuration rights.</p>
<div class="flex items-center justify-between mt-auto pt-3 border-t border-slate-50 dark:border-zinc-800">
<span class="text-xs font-semibold text-slate-600 dark:text-zinc-400">1 Active User</span>
<span class="text-[10px] px-2 py-0.5 bg-slate-100 dark:bg-zinc-800 rounded-full text-slate-500">Fixed Role</span>
</div>
</div>
<!-- Program Manager Card -->
<div class="bg-white dark:bg-zinc-900 rounded-xl p-5 border-t-4 border-t-slate-300 dark:border-t-zinc-700 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-3">
<div class="p-2 bg-blue-50 dark:bg-blue-900/20 rounded-lg">
<span class="material-symbols-outlined text-blue-500">assignment_ind</span>
</div>
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
</div>
<h4 class="text-base font-bold text-slate-900 dark:text-white">Program Manager</h4>
<p class="text-xs text-slate-500 mt-1 mb-4 leading-relaxed">Project oversight and volunteer management capabilities.</p>
<div class="flex items-center justify-between mt-auto pt-3 border-t border-slate-50 dark:border-zinc-800">
<span class="text-xs font-semibold text-slate-600 dark:text-zinc-400">4 Active Users</span>
<span class="text-[10px] px-2 py-0.5 bg-blue-50 dark:bg-blue-900/30 text-blue-600 rounded-full">Operational</span>
</div>
</div>
<!-- Communications Card -->
<div class="bg-white dark:bg-zinc-900 rounded-xl p-5 border-t-4 border-t-slate-300 dark:border-t-zinc-700 shadow-sm hover:shadow-md transition-shadow">
<div class="flex justify-between items-start mb-3">
<div class="p-2 bg-green-50 dark:bg-green-900/20 rounded-lg">
<span class="material-symbols-outlined text-green-500">campaign</span>
</div>
<button class="text-slate-400 hover:text-primary"><span class="material-symbols-outlined">edit</span></button>
</div>
<h4 class="text-base font-bold text-slate-900 dark:text-white">Communications</h4>
<p class="text-xs text-slate-500 mt-1 mb-4 leading-relaxed">Specialized in external relations, content, and notifications.</p>
<div class="flex items-center justify-between mt-auto pt-3 border-t border-slate-50 dark:border-zinc-800">
<span class="text-xs font-semibold text-slate-600 dark:text-zinc-400">2 Active Users</span>
<span class="text-[10px] px-2 py-0.5 bg-green-50 dark:bg-green-900/30 text-green-600 rounded-full">Creative</span>
</div>
</div>
</div>
</section>
<!-- Permissions Matrix -->
<section>
<div class="bg-white dark:bg-zinc-900 rounded-xl shadow-sm border border-slate-200 dark:border-zinc-800 overflow-hidden">
<div class="px-6 py-4 border-b border-slate-100 dark:border-zinc-800 bg-slate-50/50 dark:bg-zinc-800/50 flex items-center justify-between">
<h3 class="text-base font-bold text-slate-900 dark:text-white">Permissions Matrix</h3>
<div class="flex gap-2">
<span class="inline-flex items-center px-2 py-1 rounded text-[10px] font-bold bg-amber-100 text-amber-700 gap-1 uppercase">
<span class="material-symbols-outlined text-[14px]">warning</span> High Risk
                                </span>
</div>
</div>
<table class="w-full text-left border-collapse">
<thead>
<tr class="text-xs font-bold text-slate-400 uppercase tracking-widest border-b border-slate-100 dark:border-zinc-800">
<th class="px-6 py-4">Permission Name</th>
<th class="px-6 py-4 text-center">Super Admin</th>
<th class="px-6 py-4 text-center">Prog. Manager</th>
<th class="px-6 py-4 text-center">Communications</th>
</tr>
</thead>
<tbody class="divide-y divide-slate-50 dark:divide-zinc-800">
<!-- Row 1 -->
<tr class="permission-row transition-colors">
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-zinc-200">Manage organization settings</span>
<span class="text-[11px] text-slate-500">Core system and branding controls</span>
</div>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" disabled="" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary opacity-60"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
</tr>
<!-- Row 2 (High Risk) -->
<tr class="permission-row transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-2">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-zinc-200">Financial reporting</span>
<span class="text-[11px] text-slate-500">Access grants, expenses, and donations</span>
</div>
<span class="material-symbols-outlined text-[16px] text-amber-500" title="High-risk permission">verified_user</span>
</div>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
</tr>
<!-- Row 3 -->
<tr class="permission-row transition-colors">
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-zinc-200">Create/Edit projects</span>
<span class="text-[11px] text-slate-500">Manage charity initiatives and timelines</span>
</div>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
</tr>
<!-- Row 4 -->
<tr class="permission-row transition-colors">
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-zinc-200">Publish blog content</span>
<span class="text-[11px] text-slate-500">Post updates to the public website</span>
</div>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
</tr>
<!-- Row 5 -->
<tr class="permission-row transition-colors">
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-zinc-200">Send mass notifications</span>
<span class="text-[11px] text-slate-500">Email and SMS broad communications</span>
</div>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
</tr>
<!-- Row 6 -->
<tr class="permission-row transition-colors">
<td class="px-6 py-4">
<div class="flex flex-col">
<span class="text-sm font-semibold text-slate-800 dark:text-zinc-200">View audit logs</span>
<span class="text-[11px] text-slate-500">Trace user actions and system events</span>
</div>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
<td class="px-6 py-4 text-center">
<label class="relative inline-flex items-center cursor-pointer">
<input class="sr-only peer" type="checkbox"/>
<div class="w-9 h-5 bg-slate-200 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:bg-primary"></div>
</label>
</td>
</tr>
</tbody>
</table>
</div>
</section>
<!-- Add New Role Card -->
<section>
<div class="max-w-2xl bg-white dark:bg-zinc-900 rounded-xl shadow-sm border border-slate-200 dark:border-zinc-800 overflow-hidden">
<div class="px-6 py-4 border-b border-slate-100 dark:border-zinc-800">
<h3 class="text-base font-bold text-slate-900 dark:text-white">Create New Role</h3>
</div>
<div class="p-6">
<form class="space-y-4">
<div class="grid grid-cols-2 gap-4">
<div class="space-y-1.5">
<label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Role Name</label>
<input class="w-full rounded-lg border-slate-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 text-sm focus:ring-primary focus:border-primary" placeholder="e.g. Volunteer Coordinator" type="text"/>
</div>
<div class="space-y-1.5">
<label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Clone Permissions From</label>
<select class="w-full rounded-lg border-slate-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 text-sm focus:ring-primary focus:border-primary">
<option>Select an existing role...</option>
<option>Super Admin</option>
<option>Program Manager</option>
<option>Communications</option>
</select>
</div>
</div>
<div class="space-y-1.5">
<label class="text-xs font-bold text-slate-500 uppercase tracking-wider">Description</label>
<textarea class="w-full rounded-lg border-slate-200 dark:border-zinc-700 bg-white dark:bg-zinc-800 text-sm focus:ring-primary focus:border-primary" placeholder="Describe the responsibilities of this role..." rows="2"></textarea>
</div>
<div class="pt-2">
<button class="px-4 py-2 bg-slate-100 dark:bg-zinc-800 text-slate-700 dark:text-zinc-300 rounded-lg text-sm font-bold hover:bg-slate-200 transition-colors" type="button">
                                        Configure Custom Permissions
                                    </button>
</div>
</form>
</div>
</div>
</section>
</div>
<!-- Sticky Save Bar -->
<div class="absolute bottom-6 left-1/2 -translate-x-1/2 w-fit bg-white dark:bg-zinc-900 border border-slate-200 dark:border-zinc-800 rounded-2xl shadow-2xl px-6 py-3 flex items-center gap-6 z-50">
<div class="flex items-center gap-2">
<span class="size-2 bg-primary animate-pulse rounded-full"></span>
<span class="text-xs font-medium text-slate-600 dark:text-zinc-400">Unsaved changes in matrix</span>
</div>
<div class="h-8 w-px bg-slate-200 dark:bg-zinc-800"></div>
<div class="flex gap-3">
<button class="px-4 py-2 text-sm font-bold text-slate-500 hover:text-slate-700">Discard</button>
<button class="px-6 py-2 bg-primary text-white rounded-xl text-sm font-bold shadow-lg shadow-primary/30 hover:scale-[1.02] transition-transform">Save Changes</button>
</div>
</div>
<!-- Success Toast (Floating) -->
<div class="fixed top-24 right-8 bg-green-50 dark:bg-green-900/30 border border-green-200 dark:border-green-800/50 rounded-xl px-4 py-3 shadow-lg flex items-center gap-3 z-[60]">
<div class="size-8 bg-green-500 rounded-full flex items-center justify-center text-white">
<span class="material-symbols-outlined text-[18px]">check</span>
</div>
<div>
<p class="text-sm font-bold text-green-800 dark:text-green-400 leading-none">Settings Updated</p>
<p class="text-[11px] text-green-600 dark:text-green-500 mt-1">Permission changes applied successfully.</p>
</div>
<button class="ml-4 text-green-400 hover:text-green-600"><span class="material-symbols-outlined text-[16px]">close</span></button>
</div>
</main>
</div>
</body></html>