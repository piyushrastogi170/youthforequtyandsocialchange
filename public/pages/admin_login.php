<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Admin Login | Youth for Equity &amp; Social Change</title>
<link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<?php
session_start();

if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
?>

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
        /* Custom transitions for smoother UI feel as requested */
        .form-input:focus {
            box-shadow: 0 0 0 2px rgba(33, 212, 17, 0.2);
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark min-h-screen flex flex-col">
    <?php include "../../includes/header.php" ?>
<!-- Main Container for Centering and Animation -->
<main class="flex-grow flex items-center justify-center p-4">
<div class="mt-16 w-full max-w-[480px] animate-in fade-in slide-in-from-bottom-4 duration-700">
<!-- Organization Logo & Header Section -->
<div class="flex flex-col items-center mb-8">
<div class="flex items-center gap-3 mb-4">
<div class="flex lg:flex-1 items-center">
      
      <a href="index.php" class="flex items-center gap-3">
        
        <!-- Logo Image -->
        <img 
          src="../assets/images/logo bg removed.png" 
          alt="Youth For Equity And Social Changes Logo" 
          class="h-20 w-auto object-contain"
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
</div>
<!-- Login Card -->
<div class="bg-white dark:bg-zinc-900 shadow-xl rounded-xl p-8 border border-[#dce6db]/50 dark:border-zinc-800">
<div class="mb-8 text-center">
<h1 class="text-[#121811] dark:text-white text-3xl font-bold mb-2">Admin Portal</h1>
<p class="text-[#658961] dark:text-zinc-400 text-sm">Access the dashboard to manage impact and operations.</p>
</div>
<!-- Login Form -->
<form action="admin_login_logic.php" class="space-y-5" method="POST">
<!-- Email Field -->
<div class="space-y-2">
<label class="text-[#121811] dark:text-zinc-200 text-sm font-medium" for="email">Email Address</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#658961] text-xl">mail</span>
<input class="form-input w-full pl-10 pr-4 py-3 rounded-lg border border-[#dce6db] focus:border-primary focus:ring-0 text-[#121811] dark:bg-zinc-800 dark:border-zinc-700 dark:text-white transition-all duration-200" id="email" name="email" placeholder="name@organization.org" required="" type="email"/>
</div>
</div>
<!-- Password Field -->
<div class="space-y-2">
<label class="text-[#121811] dark:text-zinc-200 text-sm font-medium" for="password">Password</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-[#658961] text-xl">lock</span>
<input class="form-input w-full pl-10 pr-4 py-3 rounded-lg border border-[#dce6db] focus:border-primary focus:ring-0 text-[#121811] dark:bg-zinc-800 dark:border-zinc-700 dark:text-white transition-all duration-200" id="password" name="password" placeholder="••••••••" required type="password"/>
</div>
</div>
<input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>">
<!-- Utilities: Remember Me & Forgot Password -->
<div class="flex items-center justify-end py-2">
<a class="text-sm font-medium text-primary hover:text-opacity-80 transition-colors" href="#">Forgot Password?</a>
</div>
<!-- Sign In Button -->
<button class="w-full bg-primary hover:bg-opacity-90 active:scale-[0.98] text-white font-semibold py-3.5 rounded-lg shadow-lg shadow-primary/20 transition-all duration-200 flex items-center justify-center gap-2" type="submit">
<span>Sign In</span>
<span class="material-symbols-outlined text-xl">login</span>
</button>
</form>
<!-- Decorative Image / Graphic (Optional but part of components vibe) -->
<div class="mt-8 pt-8 border-t border-[#f0f4f0] dark:border-zinc-800 flex justify-center">
<div class="flex -space-x-2">
<img class="w-8 h-8 rounded-full border-2 border-white dark:border-zinc-900 object-cover" data-alt="Diverse youth group collaborating together" src="https://lh3.googleusercontent.com/aida-public/AB6AXuATyLhPzp7YpYE90rbNF3ufIkiBV77Ei5_IO2E63fM4Oh-UICYIpUlV-Ywgexnu8FjoPF4byImg3HayDEowTAxIJQvI-3WI7pvPOcbh7Lw-fBUv6mpJ9JnGXzMJSCpzRU0ijEdx8vk-c7Pq1Z_aIvcl7t0nUNmLC1EGuxLP0cK9QJbZfG4cGBmE_Ufnuu1XkhpgROmOTDzTImMBQ_SaADY7XvZ9zVHyM5FrZnPl0twTS_sKFxXVEN8ooSZmfVzlW8onwKgabGxa-Uk"/>
<img class="w-8 h-8 rounded-full border-2 border-white dark:border-zinc-900 object-cover" data-alt="Young community organizers in meeting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsZOvUjyTvMiiBMoZOfYVhI6zPLDqDWtQvcq1eBk_JtR76G4i1bwjHLf1u4ErJg-ad4ryr-GRZgzfAhjsqrlV4LONZcLrrURr2Wkpz8rzCT2WBy7I22IVFnmJmXVJyPocCGoruNf63oIC8pAnz_dUqYfteMdMvx4v-mLdUHEi7PdCWhtQKD1tV26SSBsFy-fNBq4AP1HYvYJ_nUHo-NHaarj-xAbY4pZ6J3Dy-aF8zZravI3khf0Nw21XuFZBW9pGs0-ASa0WwMgI"/>
<img class="w-8 h-8 rounded-full border-2 border-white dark:border-zinc-900 object-cover" data-alt="Students working on social project" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdKXIIQGoOelEk7bqku0quSVirgI_aKAxMnzvpmNyEXTgdgHLsYVmiWwGg5sDM27En0oFnl2Il0UWufnSMAS8Am8qd-FNvOdGpk9z5TeMQAbPZOp87mbHDmbXSTYWgnDLfC8gLWEIE2p5SOiuhXJ6yJUn13tfk3ikSE889z0oD7eaK9pwsTuswVmJYnMvnFUl9OkA-Tsx81r-dS4bpijH80I_785KMk3y8MU9BQwbA-09TKYjohQjqGmK5xKXZxb2wB0T5uKzAqCg"/>
</div>
</div>
</div>
<!-- Security Footer Disclaimer -->
<div class="mt-8 text-center px-6">
<div class="flex items-center justify-center gap-2 text-xs text-[#658961] dark:text-zinc-500 uppercase tracking-widest font-semibold mb-2">
<span class="material-symbols-outlined text-sm">verified_user</span>
                Secure Administrator Access
            </div>
<p class="text-xs text-[#658961] dark:text-zinc-500 leading-relaxed">
                This is a secure administrative area. Unauthorized access is prohibited. All activity is monitored and logged.
            </p>
</div>
<!-- Help Link -->
<div class="mt-8 text-center py-10">
<a class="text-sm text-[#658961] dark:text-zinc-400 hover:underline" href="tel:+917268824971">
                Contact Technical Support (Developer)
            </a>
</div>
</div>
</main>
<?php include "../../includes/footer.php" ?>


</body></html>