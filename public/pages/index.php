<!DOCTYPE html>

<html class="light" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Youth for Equity &amp; Social Change | India</title>
<link rel="shortcut icon" href="../assets/images/logo bg removed.png" type="image/x-icon">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        .leaf-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M30 0c1.333 10 6.667 15 15 15-8.333 0-13.667 5-15 15-1.333-10-6.667-15-15-15 8.333 0 13.667-5 15-15z' fill='%2321d411' fill-opacity='0.05' fill-rule='evenodd'/%3E%3C/svg%3E");
        }
        .hero-gradient {
            background: linear-gradient(rgba(18, 34, 16, 0.6), rgba(18, 34, 16, 0.9));
        }
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
<style>
        @keyframes revealUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes revealFade {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .reveal-hidden { opacity: 0; }
        .animate-reveal-up { animation: revealUp 0.8s cubic-bezier(0.4, 0, 0.2, 1) forwards; }
        .animate-reveal-fade { animation: revealFade 1s ease-out forwards; }
        .stagger-item { opacity: 0; transition: all 0.6s cubic-bezier(0.4, 0, 0.2, 1); transform: translateY(20px); }
        .stagger-item.revealed { opacity: 1; transform: translateY(0); }
    </style></head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#121811] dark:text-white transition-colors duration-300">
<!-- Scroll Progress Bar -->
<div class="scroll-progress"></div>
<?php include "../../includes/header.php" ?>
<!-- Hero Section -->
<section class="z-0 h-[93vh] relative overflow-hidden bg-white dark:bg-background-dark leaf-pattern py-20 lg:py-32">

  <!-- Background Image -->
  <div class="absolute inset-0 -z-10">
    <img 
      alt="Diverse youth collaborating in an outdoor workshop" 
      class="w-full h-full object-cover"
      src="https://lh3.googleusercontent.com/aida-public/AB6AXuD64YnBcWFBs3LAfyUZe8EFAnbzj7OL9ZiCEiAzJN4TpZFA3EHYQ0hrw7gpBMef1rfO6_c9gli2SR3RKyW6aHu00KPbtQbAe4TiImH9aEW7X8f4REdUOqOmvlro19LLQh5d6hNBovpFsWK-UD20HpnIJgvthUMlB_MdLuxcW7io95m65XZ3QZwL4gp0baORYAgtGMU9APgvQU2mFLWVaODo-lE0SXrZiS5ySNanw12eCTWhjj4re9DpKxJrdS645mc_h3kmH_aGmtA"
    />
  </div>

  <!-- Gradient Overlay -->
  <div class="hero-gradient absolute inset-0 -z-0"></div>

  <!-- Content -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
    <div class="max-w-3xl">

      <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-xs font-bold uppercase tracking-wider mb-6">
        <span class="relative flex h-2 w-2">
          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
          <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
        </span>
        Investing in the future
      </div>

      <h1 class="text-5xl lg:text-7xl font-black text-white leading-[1.1] mb-8">
        Empowering Youth, <br/>
        <span class="text-primary">Cultivating Equity</span>, <br/>
        Driving Change
      </h1>

      <p class="text-lg lg:text-xl text-white/80 leading-relaxed mb-10 max-w-2xl">
        Join a community dedicated to education, social justice, and growth for the next generation of changemakers. We dismantle barriers to unlock human potential.
      </p>

      <div class="flex flex-col sm:flex-row gap-4">
        <button class="flex items-center justify-center gap-2 bg-primary hover:bg-primary/90 text-white px-8 py-4 rounded-xl text-base font-bold transition-all shadow-xl shadow-primary/20">
          Become a Volunteer
          <span class="material-symbols-outlined">arrow_forward</span>
        </button>

        <button onclick="window.location='donation.php'" class="flex items-center justify-center gap-2 bg-white/10 border-2 border-white/20 hover:border-primary/50 px-8 py-4 rounded-xl text-base font-bold transition-all text-white">
          Support the Cause
        </button>
      </div>

    </div>
  </div>

</section>



<!-- Impact Highlights -->
<section class="py-16 bg-background-light dark:bg-background-dark/50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
<!-- Stat Card 1 -->
<div class="bg-white dark:bg-background-dark p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-[#21d411]/5 stagger-item">
<div class="size-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6">
<span class="material-symbols-outlined text-3xl">groups</span>
</div>
<div class="text-4xl font-black text-[#122210] dark:text-white mb-2 tracking-tight counter-up" data-target="5000">0+</div>
<div class="text-sm font-medium text-[#122210]/60 dark:text-white/60">Youth Reached</div>
</div>
<!-- Stat Card 2 -->
<div class="bg-white dark:bg-background-dark p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-[#21d411]/5 stagger-item">
<div class="size-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6">
<span class="material-symbols-outlined text-3xl">public</span>
</div>
<div class="text-4xl font-black text-[#122210] dark:text-white mb-2 tracking-tight counter-up" data-target="50">0+</div>
<div class="text-sm font-medium text-[#122210]/60 dark:text-white/60">Communities Supported</div>
</div>
<!-- Stat Card 3 -->
<div class="bg-white dark:bg-background-dark p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-[#21d411]/5 stagger-item">
<div class="size-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6">
<span class="material-symbols-outlined text-3xl">calendar_today</span>
</div>
<div class="text-4xl font-black text-[#122210] dark:text-white mb-2 tracking-tight counter-up" data-target="120">0+</div>
<div class="text-sm font-medium text-[#122210]/60 dark:text-white/60">Programs Run</div>
</div>
<!-- Stat Card 4 -->
<div class="bg-white dark:bg-background-dark p-8 rounded-2xl shadow-sm hover:shadow-xl transition-shadow border border-[#21d411]/5 stagger-item">
<div class="size-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6">
<span class="material-symbols-outlined text-3xl">favorite</span>
</div>
<div class="text-4xl font-black text-[#122210] dark:text-white mb-2 tracking-tight counter-up" data-target="15">0k+</div>
<div class="text-sm font-medium text-[#122210]/60 dark:text-white/60">Lives Impacted</div>
</div>
</div>
</div>



</section>
<!-- Mission Section -->
<section class="py-24 bg-white dark:bg-background-dark overflow-hidden">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex flex-col lg:flex-row items-center gap-16">
<div class="lg:w-1/2 stagger-item">
<h2 class="text-sm font-bold text-primary uppercase tracking-[0.2em] mb-4">Our Mission</h2>
<h3 class="text-4xl lg:text-5xl font-extrabold text-[#122210] dark:text-white mb-8 leading-tight">
                        Creating pathways to equity through education and action.
                    </h3>
<div class="space-y-6 text-lg text-[#122210]/70 dark:text-white/70 leading-relaxed">
<p>
                            We are dedicated to fostering equity and education for youth globally. Our mission is to dismantle systemic barriers and provide the tools necessary for the next generation to lead with social justice at the forefront.
                        </p>
<p>
                            Through community-led initiatives and innovative educational models, we empower young individuals to become architects of their own future, ensuring that your background never limits your potential.
                        </p>
</div>
<div class="mt-10 flex items-center gap-6">
<div class="flex -space-x-3">
<div class="size-12 rounded-full border-2 border-white bg-cover bg-center" data-alt="Portrait of a young diverse student" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBzWfYF4b14rKt7lX3IaZGqzCM1OvrgjAaT_3rgZpLPQcZi-p7UodV4VoD4jRJ4t_WLnaTpgDM2h3lbxko-V8o2I39yZwUoQ333UFrPSDhBQgndjTeL7qo4nuILG_4Vlv9XmaXrC1P0TNkYImHTF1gvcwwDy_gsruu-qc_ZC_Sp0b4aCYoo_tPwfa0ErKWFwryJUxAsbKf0CWOShqS4oNfUUve2LBdTXodzICWpvktyxkwOJOlBSBJn4luMx_kL0KSvZy9QryZyz_U')"></div>
<div class="size-12 rounded-full border-2 border-white bg-cover bg-center" data-alt="Portrait of a smiling community leader" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDuPYafSe_zVY1apHeMs_W-KkvounEcuPxEpsImawDPZc5FNpT2dMQSHqrCI_VrnfYTYYltlkSLnFpw4hXTGwkvsjCqfGz9K7f3X6S-q8tY8_KlZn2S2db90HlaEO_0qRmFSef6KEdZR-uizcBwnOaIZUel8rm89j6pqZ_GNKdI9DODU81SeKcqCnVJSZhgb1fM94xqLD4FtJtUU2cyf3Te2YMxts-8Jzt1Uwy9iggRKr84TRUy3nK3FjO4vxB8g2ckggCULNq_trw')"></div>
<div class="size-12 rounded-full border-2 border-white bg-cover bg-center" data-alt="Portrait of an inspired young activist" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtvUK0y-4koyAE4KyUkdsYYuvLVMTkOxvTyMREqpRCJ1gNJtByIW9jPnx9ZiQ85oB9UFDw4ghaZie0eV9SknsuuXrEorFxuRLEP222FMlfSwfC6uo71gGtXWKYxmkeBEPMoX-j_cq3zBggHROI079RuFyABbkT8Pml1h34Loo6D--Ivt0iCb6GqBluPrwmhw5ZNCXgHEodgbJswlcV3BvFI35rUJq-qpVcV78gaTD_dL9yQujMp_mZ5eHmhENeEUdn-KEAC70RS3k')"></div>
</div>
<p class="text-sm font-semibold text-[#122210] dark:text-white">Trusted by 10k+ advocates</p>
</div>
</div>
<div class="lg:w-1/2 relative stagger-item">
<div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl aspect-[4/5] bg-cover bg-center" data-alt="Diverse youth group collaborating in a bright modern workshop space" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCAN5e2wKDojMp4gvfkyvZAEohdgyjHUIoWfyG7PhEXk4wdnXKJ4i12K6jjv6BA7hZpWGObTk0kqe5Ga4XXIsFwFMLkOi4hswH5CaY0hJt9vhKwLENx8dm70qcjw7AZ-6kKIffo18MPXMyxi9nzd9aMldWRtL_EJNePLyzl2vye2OviJ-hFcJycPU7HeQ8RxBe1_mf5dsZS_qrB4VvpcU2MDGFZzK5p5ungC5WPDLLUniKuGzNYX-jurg2FGDatRTEMtZd6hSMy0wY')"></div>
<div class="relative lg:absolute lg:-bottom-6 lg:-left-6 mt-6 lg:mt-0 z-20 bg-primary p-6 rounded-2xl shadow-xl max-w-[240px]">
<p class="text-white font-bold text-lg italic">"Education is the most powerful weapon which you can use to change the world."</p>
</div>
<!-- Decorative blobs -->
<div class="absolute -top-10 -right-10 size-64 bg-primary/10 rounded-full blur-3xl -z-0"></div>
</div>
</div>
</div>
</section>







<!-- Featured Programs -->
<section class="py-24 bg-background-light dark:bg-background-dark/50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center max-w-2xl mx-auto mb-16">
<h2 class="text-3xl lg:text-4xl font-extrabold text-[#122210] dark:text-white mb-4">Our Core Programs</h2>
<p class="text-[#122210]/60 dark:text-white/60">Strategic initiatives designed to create lasting social impact and individual growth.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Program Card 1 -->
<div class="group bg-white dark:bg-background-dark p-8 rounded-2xl border border-[#21d411]/5 hover:border-primary/50 transition-all duration-300 stagger-item">
<div class="size-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl">menu_book</span>
</div>
<h4 class="text-xl font-bold mb-4 text-[#122210] dark:text-white">Education &amp; Literacy</h4>
<p class="text-[#122210]/60 dark:text-white/60 leading-relaxed mb-6">
                        Providing comprehensive resources and tutoring programs to ensure every child has the foundation for lifelong learning.
                    </p>
<a class="text-primary font-bold inline-flex items-center gap-2 group-hover:gap-4 transition-all" href="#">
                        Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
<!-- Program Card 2 -->
<div class="group bg-white dark:bg-background-dark p-8 rounded-2xl border border-[#21d411]/5 hover:border-primary/50 transition-all duration-300 stagger-item">
<div class="size-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl">balance</span>
</div>
<h4 class="text-xl font-bold mb-4 text-[#122210] dark:text-white">Equity Advocacy</h4>
<p class="text-[#122210]/60 dark:text-white/60 leading-relaxed mb-6">
                        Empowering communities to challenge systemic injustice and fight for fair representation in policy and governance.
                    </p>
<a class="text-primary font-bold inline-flex items-center gap-2 group-hover:gap-4 transition-all" href="#">
                        Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
<!-- Program Card 3 -->
<div class="group bg-white dark:bg-background-dark p-8 rounded-2xl border border-[#21d411]/5 hover:border-primary/50 transition-all duration-300 stagger-item">
<div class="size-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-8 group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-4xl">psychology</span>
</div>
<h4 class="text-xl font-bold mb-4 text-[#122210] dark:text-white">Youth Leadership</h4>
<p class="text-[#122210]/60 dark:text-white/60 leading-relaxed mb-6">
                        Cultivating the skills, confidence, and networks needed for young people to become visionary leaders in their fields.
                    </p>
<a class="text-primary font-bold inline-flex items-center gap-2 group-hover:gap-4 transition-all" href="#">
                        Learn More <span class="material-symbols-outlined text-sm">arrow_forward</span>
</a>
</div>
</div>
</div>
</section>

<?php include "../../includes/cta.php" ?>
<?php include "../../includes/footer.php" ?>
<script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter-up');
            const revealItems = document.querySelectorAll('.stagger-item');
            const speed = 200;

            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach((entry, index) => {
                    if (entry.isIntersecting) {
                        if (entry.target.classList.contains('counter-up')) {
                            startCounter(entry.target);
                        } else if (entry.target.classList.contains('stagger-item')) {
                            // Add staggered delay based on position in grid if they are siblings
                            const siblings = Array.from(entry.target.parentElement.children);
                            const delay = siblings.indexOf(entry.target) * 100;
                            setTimeout(() => {
                                entry.target.classList.add('revealed');
                            }, delay);
                        }
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            const startCounter = (counter) => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText.replace(/[^0-9]/g, '');
                    const inc = target / speed;

                    if (count < target) {
                        const nextVal = Math.ceil(count + inc);
                        if (counter.getAttribute('data-target') === '15') {
                            counter.innerText = nextVal + 'k+';
                        } else {
                            counter.innerText = nextVal.toLocaleString() + '+';
                        }
                        setTimeout(updateCount, 10);
                    } else {
                        if (counter.getAttribute('data-target') === '15') {
                            counter.innerText = '15k+';
                        } else {
                            counter.innerText = target.toLocaleString() + '+';
                        }
                    }
                };
                updateCount();
            };

            counters.forEach(counter => observer.observe(counter));
            revealItems.forEach(item => observer.observe(item));

            // Simple scroll progress bar indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector(".scroll-progress").style.width = scrolled + "%";
        });

        });
        
        
    </script>

    </body>
    </html>