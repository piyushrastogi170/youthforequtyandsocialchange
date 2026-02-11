<!DOCTYPE html>

<html class="scroll-smooth" lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Our Causes | Youth for Equity &amp; Social Change</title>
<link rel="shortcut icon" href="../assets/images/logo bg removed.png" type="image/x-icon">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
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
                    borderRadius: {"DEFAULT": "0.25rem", "lg": "0.5rem", "xl": "0.75rem", "full": "9999px"},
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        .stagger-1 { animation-delay: 0.1s; }
        .stagger-2 { animation-delay: 0.2s; }
        .stagger-3 { animation-delay: 0.3s; }
        .stagger-4 { animation-delay: 0.4s; }
        .stagger-5 { animation-delay: 0.5s; }
    </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#121811] dark:text-white antialiased">
<?php include "../../includes/header.php" ?>
<main>
<!-- Hero Section -->
<section class="relative pt-24 pb-16 px-6 overflow-hidden">
<div class="absolute inset-0 -z-10 opacity-30">
<div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px]"></div>
<div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-primary/5 rounded-full blur-[120px]"></div>
</div>
<div class="max-w-4xl mx-auto text-center animate-fade-in-up">
<span class="inline-block px-4 py-1.5 bg-primary/10 text-primary text-xs font-bold tracking-widest uppercase rounded-full mb-6">Our Mission in Action</span>
<h2 class="text-5xl md:text-6xl font-black mb-8 leading-[1.1] tracking-tight">Driving Change Through <span class="text-primary underline decoration-primary/30 underline-offset-8">Purposeful Action</span></h2>
<p class="text-lg md:text-xl text-[#658961] dark:text-gray-400 max-w-2xl mx-auto leading-relaxed">
                    We tackle the most pressing challenges facing today's youth by focusing on systemic barriers and empowering individual potential.
                </p>
</div>
</section>
<!-- Causes Grid -->
<section class="max-w-7xl mx-auto px-6 py-20">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
<!-- Card 1 -->
<div class="group bg-white dark:bg-background-dark/50 p-8 rounded-xl border border-[#dce6db] dark:border-primary/20 hover:border-primary transition-all duration-300 hover:shadow-2xl hover:shadow-primary/5 animate-fade-in-up stagger-1">
<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">school</span>
</div>
<h3 class="text-xl font-bold mb-4">Education Equity</h3>
<p class="text-[#658961] dark:text-gray-400 mb-8 leading-relaxed">Ensuring every child has access to quality learning resources, advanced technology, and professional mentorship regardless of background.</p>
<a class="inline-flex items-center font-bold text-sm text-primary group/link" href="#">
                        Learn More 
                        <span class="material-symbols-outlined ml-1 group-hover/link:translate-x-1 transition-transform">arrow_right_alt</span>
</a>
</div>
<!-- Card 2 -->
<div class="group bg-white dark:bg-background-dark/50 p-8 rounded-xl border border-[#dce6db] dark:border-primary/20 hover:border-primary transition-all duration-300 hover:shadow-2xl hover:shadow-primary/5 animate-fade-in-up stagger-2">
<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">diversity_3</span>
</div>
<h3 class="text-xl font-bold mb-4">Youth Leadership</h3>
<p class="text-[#658961] dark:text-gray-400 mb-8 leading-relaxed">Cultivating the next generation of changemakers through immersive workshops, public speaking, and project management training.</p>
<a class="inline-flex items-center font-bold text-sm text-primary group/link" href="#">
                        Learn More 
                        <span class="material-symbols-outlined ml-1 group-hover/link:translate-x-1 transition-transform">arrow_right_alt</span>
</a>
</div>
<!-- Card 3 -->
<div class="group bg-white dark:bg-background-dark/50 p-8 rounded-xl border border-[#dce6db] dark:border-primary/20 hover:border-primary transition-all duration-300 hover:shadow-2xl hover:shadow-primary/5 animate-fade-in-up stagger-3">
<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">campaign</span>
</div>
<h3 class="text-xl font-bold mb-4">Community Awareness</h3>
<p class="text-[#658961] dark:text-gray-400 mb-8 leading-relaxed">Building informed communities through dialogue, grassroots mobilization, and digital storytelling campaigns.</p>
<a class="inline-flex items-center font-bold text-sm text-primary group/link" href="#">
                        Learn More 
                        <span class="material-symbols-outlined ml-1 group-hover/link:translate-x-1 transition-transform">arrow_right_alt</span>
</a>
</div>
<!-- Card 4 -->
<div class="group bg-white dark:bg-background-dark/50 p-8 rounded-xl border border-[#dce6db] dark:border-primary/20 hover:border-primary transition-all duration-300 hover:shadow-2xl hover:shadow-primary/5 animate-fade-in-up stagger-4">
<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">balance</span>
</div>
<h3 class="text-xl font-bold mb-4">Social Justice</h3>
<p class="text-[#658961] dark:text-gray-400 mb-8 leading-relaxed">Advocating for systemic policy changes and protecting the voices of marginalized groups in our legal and social systems.</p>
<a class="inline-flex items-center font-bold text-sm text-primary group/link" href="#">
                        Learn More 
                        <span class="material-symbols-outlined ml-1 group-hover/link:translate-x-1 transition-transform">arrow_right_alt</span>
</a>
</div>
<!-- Card 5 -->
<div class="group bg-white dark:bg-background-dark/50 p-8 rounded-xl border border-[#dce6db] dark:border-primary/20 hover:border-primary transition-all duration-300 hover:shadow-2xl hover:shadow-primary/5 animate-fade-in-up stagger-5">
<div class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:bg-primary group-hover:text-white transition-colors">
<span class="material-symbols-outlined text-3xl">work_history</span>
</div>
<h3 class="text-xl font-bold mb-4">Skill Development</h3>
<p class="text-[#658961] dark:text-gray-400 mb-8 leading-relaxed">Providing vocational training, digital literacy, and job placement assistance for long-term economic independence.</p>
<a class="inline-flex items-center font-bold text-sm text-primary group/link" href="#">
                        Learn More 
                        <span class="material-symbols-outlined ml-1 group-hover/link:translate-x-1 transition-transform">arrow_right_alt</span>
</a>
</div>
</div>
</section>
<!-- Highlight Section -->
<section class="py-24 bg-white dark:bg-background-dark/30 border-y border-[#dce6db] dark:border-primary/10">
<div class="max-w-7xl mx-auto px-6">
<div class="flex flex-col lg:flex-row items-center gap-16">
<div class="flex-1 w-full animate-fade-in-up">
<div class="relative">
<div class="absolute -top-6 -left-6 w-32 h-32 bg-primary/20 rounded-xl -z-10"></div>
<div class="aspect-video w-full rounded-2xl bg-center bg-cover shadow-2xl overflow-hidden" data-alt="Young students working together in a classroom" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBZ0WGvZR6-1lJnhI5UOlchghAARYrvUki9dRDdnX8iSQfPEEDl7xjoBWr6zm2d1UeNWHkdY-_c8Lzk_M82GOrtlms2KOlX_t9kZVIKYItg36Y9qd6S42Bxtl0K07zvwyAjZ2W6za1R1BrSdj3PqJJsfDObuDnx1Fom5x1M4OWLRwt9SUlhvQrJoCqCMKUfce-kFDzQNHUu4SXb_kOrrsLcwt_OoBXixvByquqYWMgjR5iFY24Oqyr6lGT1XRhoKGy2tW5Y5oEFvzo');">
</div>
<div class="absolute -bottom-8 -right-8 bg-primary p-8 rounded-2xl shadow-xl animate-bounce">
<div class="text-center">
<p class="text-4xl font-black text-background-dark">98%</p>
<p class="text-xs font-bold text-background-dark/80 uppercase tracking-widest">Graduation Rate</p>
</div>
</div>
</div>
</div>
<div class="flex-1 animate-fade-in-up">
<span class="text-primary font-bold text-sm tracking-widest uppercase mb-4 block">Major Cause Spotlight</span>
<h2 class="text-4xl font-black mb-6 leading-tight">The Education Equity Initiative</h2>
<p class="text-lg text-[#658961] dark:text-gray-400 mb-8 leading-relaxed">
                            Our flagship program focuses on bridging the digital divide in underserved urban and rural communities. By providing over 15,000 students with high-speed internet, dedicated tablets, and 1-on-1 virtual tutoring, we've transformed academic outcomes and sparked lifelong curiosity.
                        </p>
<div class="flex flex-wrap gap-8 mb-10">
<div>
<p class="text-3xl font-black text-primary">15k+</p>
<p class="text-xs font-semibold text-[#658961] dark:text-gray-400 uppercase tracking-tighter">Students Enrolled</p>
</div>
<div class="w-px h-12 bg-[#dce6db] dark:bg-primary/20"></div>
<div>
<p class="text-3xl font-black text-primary">250+</p>
<p class="text-xs font-semibold text-[#658961] dark:text-gray-400 uppercase tracking-tighter">School Partners</p>
</div>
</div>
<button class="flex items-center gap-3 bg-background-dark dark:bg-primary text-white dark:text-background-dark px-8 py-4 rounded-xl font-bold transition-all hover:translate-y-[-2px] hover:shadow-lg">
                            Read Full Impact Story
                            <span class="material-symbols-outlined">menu_book</span>
</button>
</div>
</div>
</div>
</section>
<?php include "../../includes/cta partner.php" ?>
</main>
<!-- Footer -->
<?php include "../../includes/footer.php" ?>
</body></html>