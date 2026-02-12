<aside class="h-[100vh] w-64 bg-white dark:bg-zinc-900 border-r border-primary/10 flex flex-col shrink-0">
<div class="p-6 flex items-center gap-3">
<div class="flex lg:flex-1 items-center">
      
      <a href="index.php" class="flex items-center gap-3">
        
        <!-- Logo Image -->
        <img 
          src="../../assets/images/logo bg removed.png" 
          alt="Youth For Equity And Social Changes Logo" 
          class="h-12 w-auto object-contain"
        />

        <!-- Text -->
        <div class="leading-tight">
          <h1 class="text-base font-black tracking-tight">
            Youth for Equity
          </h1>
          <span class="text-primary text-sm font-bold">
            &amp; Social Change
          </span>
        </div>

      </a>
    </div>
</div>
<?php $currentPage = basename($_SERVER['PHP_SELF']);
function activeMenu($page, $currentPage) {
    return ($currentPage === $page)
        ? 'flex items-center gap-3 px-3 py-2.5 bg-primary/10 text-primary font-semibold rounded-lg'
        : 'flex items-center gap-3 px-3 py-2.5 text-slate-500 dark:text-slate-400 hover:bg-slate-50 dark:hover:bg-zinc-800 transition-colors rounded-lg';
}
?>
<nav class="flex-1 px-4 space-y-1 mt-4">
<a class="<?= activeMenu('dashboard.php', $currentPage); ?>" href="dashboard.php">
<span class="material-symbols-outlined">dashboard</span>
<span class="text-sm">Dashboard</span>
</a>
<a class="<?= activeMenu('donations.php', $currentPage); ?>" href="donations_admin.php">
<span class="material-symbols-outlined">volunteer_activism</span>
<span class="text-sm font-medium">Donations</span>
</a>
<a class="<?= activeMenu('volunteers.php', $currentPage); ?>" href="volunteers_admin.php">
<span class="material-symbols-outlined">groups</span>
<span class="text-sm font-medium">Volunteers</span>
</a>
<a class="<?= activeMenu('programs.php', $currentPage); ?>" href="programs_admin.php">
<span class="material-symbols-outlined">auto_stories</span>
<span class="text-sm font-medium">Programs</span>
</a>
<a class="<?= activeMenu('reports.php', $currentPage); ?>" href="reports_admin.php">
<span class="material-symbols-outlined">description</span>
<span class="text-sm font-medium">Reports</span>
</a>
<a class="<?= activeMenu('settings.php', $currentPage); ?>" href="admin_settings.php">
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
<button onclick="window.location='logout.php'" class="w-full mt-4 bg-primary text-white py-2.5 rounded-lg text-sm font-bold shadow-lg shadow-primary/20 hover:brightness-110 transition-all flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-sm">logout</span>
                    Logout
                </button>
</div>
</aside>
