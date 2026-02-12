<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Thank You | Youth for Equity &amp; Social Change</title>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark text-[#121811] dark:text-white min-h-screen flex flex-col">
<!-- Header / TopNavBar -->
<?php include "../../includes/header.php" ?>
<!-- Main Content -->
<main class="mt-16 flex-grow flex flex-col items-center px-4 py-12 md:py-20">
<div class="max-w-3xl w-full text-center">
<!-- Success Icon & Heading -->
<div class="mb-6 flex justify-center">
<div class="bg-primary/10 p-4 rounded-full">
<span class="material-symbols-outlined text-primary text-6xl" data-icon="check_circle">check_circle</span>
</div>
</div>
<h2 class="text-4xl md:text-5xl font-bold mb-4 text-[#121811] dark:text-white">Thank You for Reaching Out!</h2>
<p class="text-lg text-gray-600 dark:text-gray-300 mb-10 max-w-2xl mx-auto">
                Your message has been successfully received. Our team of advocates is currently reviewing your inquiry, and we typically respond within <span class="font-semibold text-primary">24-48 hours</span>.
            </p>
<!-- Reassurance Card -->
<div class="bg-white dark:bg-zinc-900 rounded-xl shadow-lg border border-primary/10 overflow-hidden mb-12">
<div class="flex flex-col md:flex-row">
<div class="md:w-1/3 bg-cover bg-center h-48 md:h-auto" data-alt="Diverse youth collaborating in a bright workspace" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDzM5BixrX5fy7qsfhHr-j6Mlc_h_SdShDpbQbdGK1ZGXbOiYOINMkDeEjrgoVBVZjJRo640o6WXCyMg2FB6FudHjDY99Da1jHmPh7HHf1np58p9y1lzx6tXN03rewlOR0abBHqNYNcvdMHVwaZyShEWUWxWnqPvf4Des3k5o4d-UItvRV-26_9_dqXVz7Afoq2Tzlq7zW4AHsVog2firdxV_eOkIhSgdjVMw8UwQj95BKaCq4Wq1VRpk_PAUfdl0HddrZi0ggAyhA");'></div>
<div class="p-8 md:w-2/3 text-left">
<h3 class="text-xl font-bold mb-3">What Happens Next?</h3>
<p class="text-gray-600 dark:text-gray-400 mb-4">
                            One of our community coordinators will match your request with the right department to ensure you get the most helpful response. In the meantime, feel free to explore our community resources.
                        </p>
<div class="flex items-center gap-2 text-primary font-medium">
<span class="material-symbols-outlined text-sm">notifications_active</span>
<span class="text-sm">We'll Call you on Your Mobile Number shortly.</span>
</div>
</div>
</div>
</div>
<!-- Closing Statement -->
<div class="mt-16 border-t border-gray-100 dark:border-zinc-800 pt-10">
<p class="text-lg font-medium italic text-gray-600 dark:text-gray-300">"Together, we are building a more equitable future."</p>
<div class="mt-6">
<a class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-semibold rounded-lg hover:brightness-110 transition-all" href="index.php">
<span class="material-symbols-outlined">arrow_back</span>
                        Back to Homepage
                    </a>
</div>
</div>
</div>
</main>
<!-- Footer -->
<?php include "../../includes/footer.php" ?>
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