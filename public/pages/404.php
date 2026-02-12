<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>404 | Youth for Equity &amp; Social Change</title>
<link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
              "earth-brown": "#5d4037",
              "forest-dark": "#1b2e1a",
            },
            fontFamily: {
              "display": ["Inter", "sans-serif"]
            },
            borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
          },
        },
      }
    </script>
<style>
      .material-symbols-outlined {
        font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
      }
      .float-animation {
        animation: float 6s ease-in-out infinite;
      }
      @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-20px); }
      }
      .fade-in {
        animation: fadeIn 0.8s ease-out forwards;
      }
      .stagger-1 { animation-delay: 0.2s; opacity: 0; }
      .stagger-2 { animation-delay: 0.4s; opacity: 0; }
      .stagger-3 { animation-delay: 0.6s; opacity: 0; }
      @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
      }

    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-forest-dark dark:text-white transition-colors duration-300">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<!-- Header -->
<?php include "../../includes/header.php" ?>
<!-- Main Content -->
<main class="mt-16 flex-1 flex flex-col items-center justify-center px-6 py-12 md:py-24 text-center">
<!-- Hero Graphic -->
<div class="relative mb-8 float-animation">
<div class="text-[120px] md:text-[180px] font-black text-primary/10 select-none">404</div>
<div class="absolute inset-0 flex items-center justify-center">
<span class="material-symbols-outlined text-primary text-7xl md:text-9xl">explore</span>
</div>
</div>
<!-- Text Content -->
<div class="max-w-2xl mx-auto space-y-6 fade-in stagger-1">
<h1 class="text-forest-dark dark:text-white text-4xl md:text-5xl font-bold tracking-tight">
                    Oops! We've lost our way.
                </h1>
<p class="text-earth-brown dark:text-white/70 text-lg md:text-xl leading-relaxed max-w-lg mx-auto">
                    Even the best paths have unexpected turns. Let's get you back to making an impact.
                </p>
</div>
<!-- Actions -->
<div class="mt-12 flex flex-col items-center gap-8 fade-in stagger-2">
<button onclick="window.location='index.php'" class="group flex min-w-[240px] cursor-pointer items-center justify-center gap-2 overflow-hidden rounded-lg h-14 px-8 bg-primary text-forest-dark hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 font-bold text-lg shadow-lg shadow-primary/20">
<span class="material-symbols-outlined">home</span>
<span>Return to Homepage</span>
</button>
<!-- Secondary Links -->
<div class="flex flex-wrap justify-center gap-6 md:gap-12 fade-in stagger-3">
<a class="flex items-center gap-2 text-forest-dark/60 dark:text-white/60 hover:text-primary transition-colors font-medium" href="aboutus.php">
<span class="material-symbols-outlined text-sm">volunteer_activism</span>
                        About YESC
                    </a>
<a class="flex items-center gap-2 text-forest-dark/60 dark:text-white/60 hover:text-primary transition-colors font-medium" href="ourteam.php">
<span class="material-symbols-outlined text-sm">auto_stories</span>
                        Our Team
                    </a>
<a class="flex items-center gap-2 text-forest-dark/60 dark:text-white/60 hover:text-primary transition-colors font-medium" href="contact.php">
<span class="material-symbols-outlined text-sm">contact_support</span>
                        Contact Support
                    </a>
</div>
</div>
</main>
<!-- Footer Decoration -->
<?php include "../../includes/footer.php" ?>
</body></html>