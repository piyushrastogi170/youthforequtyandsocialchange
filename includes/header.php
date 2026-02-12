<!-- Header / Navbar -->

<!-- Scroll Progress Bar -->
<style>
.scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: #21d411;
            z-index: 100;
        }
</style>
<div class="scroll-progress"></div>
<script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script>
<header class="fixed top-0 z-50 w-full bg-white/80 dark:bg-background-dark/80 backdrop-blur-md border-b border-[#21d411]/10">
  <nav aria-label="Global" class="mx-auto flex max-w-7xl items-center justify-between px-6 lg:px-8 h-16">
    
    <div class="flex lg:flex-1 items-center">
      
      <a href="index.php" class="flex items-center gap-3">
        
        <!-- Logo Image -->
        <img 
          src="../assets/images/logo bg removed.png" 
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
    <div class="flex lg:hidden">
      <button type="button" command="show-modal" commandfor="mobile-menu" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
        <span class="sr-only">Open main menu</span>
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
          <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </button>
    </div>
    <el-popover-group class="hidden lg:flex lg:gap-x-12">
      <?php $currentPage = basename($_SERVER['PHP_SELF']); ?>

<a href="index.php" 
   class="text-sm/6 font-semibold hover:text-primary <?= ($currentPage == 'index.php') ? 'text-primary' : 'text-gray-900'; ?>">
   Home
</a>

<a href="aboutus.php" 
   class="text-sm/6 font-semibold hover:text-primary <?= ($currentPage == 'aboutus.php') ? 'text-primary' : 'text-gray-900'; ?>">
   About YESC
</a>

<a href="ourteam.php" 
   class="text-sm/6 font-semibold hover:text-primary <?= ($currentPage == 'ourteam.php') ? 'text-primary' : 'text-gray-900'; ?>">
   Our Team
</a>

<a href="causes.php" 
   class="text-sm/6 font-semibold hover:text-primary <?= ($currentPage == 'causes.php') ? 'text-primary' : 'text-gray-900'; ?>">
   Causes
</a>

<a href="contact.php" 
   class="text-sm/6 font-semibold hover:text-primary <?= ($currentPage == 'contact.php') ? 'text-primary' : 'text-gray-900'; ?>">
   Contact
</a>

    </el-popover-group>
    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
    <button onclick="window.location='donation.php'" class="bg-primary hover:bg-primary/90 text-white px-6 py-2.5 rounded-lg text-sm font-bold transition-all shadow-lg shadow-primary/20">
                        Donate
                    </button>
<button class="md:hidden text-[#121811] dark:text-white">
    </div>
  </nav>
  <el-dialog>
    <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
      <div tabindex="0" class="fixed inset-0 focus:outline-none">
        <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">

  <!-- Left: Logo + Text -->
  <a href="index.php" class="flex items-center gap-3">
    
    <img 
      src="../assets/images/logo bg removed.png" 
      alt="Youth For Equity And Social Changes Logo" 
      class="h-12 w-auto object-contain"
    />

    <div class="leading-tight">
      <h1 class="text-base font-black tracking-tight">
        Youth for Equity
      </h1>
      <span class="text-primary text-sm font-bold">
        &amp; Social Change
      </span>
    </div>

  </a>

  <!-- Right: Close Button -->
  <button 
    type="button" 
    command="close" 
    commandfor="mobile-menu" 
    class="rounded-md p-2 text-gray-700"
  >
    <span class="sr-only">Close menu</span>
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true" class="size-6">
      <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
    </svg>
  </button>

</div>

          


          <div class="mt-6 flow-root">
            <div class="-my-6 divide-y divide-gray-500/10">
              <div class="space-y-2 py-6">
                <a href="index.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Home</a>
                <a href="aboutus.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">About YESC</a>
                <a href="ourteam.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Our Team</a>
                <a href="causes.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Causes</a>
                <a href="contact.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Contact US</a>
                <a href="faq.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">FAQs</a>
                <a href="pravacy-policy.php" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Pravacy Policy</a>
              </div>
              <div class="py-6">
                <a href="admin_login.php" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Admin Login</a>
              </div>
            </div>
          </div>
        </el-dialog-panel>
      </div>
    </dialog>
  </el-dialog>
</header>

