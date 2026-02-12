<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Thank You | Youth for Equity &amp; Social Change</title>
<link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
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
        @keyframes pulse-soft {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.05); opacity: 0.8; }
        }
        .animate-pulse-soft {
            animation: pulse-soft 3s infinite ease-in-out;
        }
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }

    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#121811] transition-colors duration-300">
<div class="relative flex min-h-screen flex-col overflow-x-hidden">
<!-- Navigation -->
<?php include "../../includes/header.php" ?>
<main class="mt-16 flex-1 flex flex-col items-center justify-center max-w-5xl mx-auto px-4 py-12 md:py-20">
<!-- Hero Success Section -->
<section class="text-center mb-16 fade-in-up stagger-1">
<div class="inline-flex items-center justify-center p-4 rounded-full bg-primary/10 mb-6 animate-pulse-soft">
<span class="material-symbols-outlined text-primary text-5xl">check_circle</span>
</div>
<h1 class="text-[#121811] tracking-tight text-4xl md:text-6xl font-bold leading-tight mb-4">
                    Thank You for Your Support
                </h1>
<p class="text-[#4a5a48] text-lg md:text-xl max-w-2xl mx-auto leading-relaxed">
                    Your generosity is the spark for social change. Together, we are building a more equitable future for the leaders of tomorrow.
                </p>
</section>
<!-- Impact Reassurance Card -->
<section class="w-full max-w-4xl mb-16 fade-in-up stagger-2">
<div class="bg-white rounded-xl shadow-xl shadow-black/5 overflow-hidden flex flex-col md:flex-row border border-primary/5">
<div class="w-full md:w-1/2 bg-center bg-cover min-h-[300px]" data-alt="Group of diverse young people collaborating together in a bright space" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA8vgM4MKC4JhuxE_nToC567afWs8DiEVEvJhOTgJ07mjno9uHq9JbhvZXmR3nxe45dqtv_tnPnuJD1fx-4ZKcOeRgkzxTbj_0Zm-76Mpa2OFxSgIwVqtAXNWd_8O1_2FVLO2Wky32jMYt3y1aGxq4O3XEPeNmektHPvW__QL6kMQiZynmkoemGzR_9FD-wVghvKJ722iASHvVjDYWRclWPt3uEXcR3cwdg_kXZ4dVD9-0zhKIoNDu6ApwsMhkhJoe5D1RU2eZKkJo");'>
</div>
<div class="w-full md:w-1/2 p-8 md:p-12 flex flex-col justify-center">
<div class="flex items-center gap-2 text-primary font-semibold mb-2">
<span class="material-symbols-outlined text-sm">auto_awesome</span>
<span class="uppercase tracking-widest text-xs">Direct Impact</span>
</div>
<h3 class="text-2xl font-bold text-[#121811] mb-4">Your Impact in Action</h3>
<p class="text-[#4a5a48] text-base leading-relaxed mb-6">
                            Your contribution directly empowers youth in underserved communities through mentorship, resources, and advocacy training. 100% of your gift goes towards our grassroots programs.
                        </p>
<button class="inline-flex items-center justify-center gap-2 w-fit px-6 py-3 bg-primary/10 text-primary font-bold rounded-lg hover:bg-primary hover:text-white transition-all duration-300">
                            Read Impact Report
                            <span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
</div>
</div>
</section>
<!-- Next Steps / Engagement Grid -->
<!-- Back to Home -->
<div class="mt-16 text-center">
<a class="inline-flex items-center gap-2 text-[#4a5a48] hover:text-primary transition-colors font-medium" href="index.php">
<span class="material-symbols-outlined text-sm">keyboard_backspace</span>
                        Return to Homepage
                    </a>
</div>
</section>
<?php include "../../includes/cta partner.php" ?>
</main>
<!-- Footer -->
<?php include "../../includes/footer.php" ?>
</div>
<!-- Back to Top Button -->
<button id="backToTop"
  class="fixed z-50 bottom-8 right-8 bg-primary text-[#121811] size-12 rounded-full 
  flex items-center justify-center shadow-lg 
  hover:scale-110 transition-all duration-300 
  opacity-0 invisible">

  <span class="material-symbols-outlined">arrow_upward</span>
</button>
<script>
  const backToTop = document.getElementById("backToTop");

  // Scroll par button show/hide
  window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
      backToTop.classList.remove("opacity-0", "invisible");
      backToTop.classList.add("opacity-100", "visible");
    } else {
      backToTop.classList.add("opacity-0", "invisible");
      backToTop.classList.remove("opacity-100", "visible");
    }
  });

  // Smooth scroll to top
  backToTop.addEventListener("click", function () {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  });
</script>

</body></html>