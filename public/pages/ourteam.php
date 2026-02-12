<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Our Team | Youth for Equity &amp; Social Change</title>
<link rel="shortcut icon" href="../assets/images/logo bg removed.png" type="image/x-icon">
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        "earth-brown": "#4a3728",
                        "leaf-green": "#1a7a0e",
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
        .hover-lift {
            transition: transform 0.3s cubic-bezier(0.34, 1.56, 0.64, 1), box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-8px) scale(1.02);
            box-shadow: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
        }
        .stagger-in {
            animation: fadeInUp 0.8s cubic-bezier(0.21, 1.02, 0.73, 1) forwards;
            opacity: 0;
        }
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        </style>
</head>
<body class="bg-background-light dark:bg-background-dark font-display text-earth-brown dark:text-background-light">
<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
<?php include "../../includes/header.php" ?>
<!-- Hero Section -->
<section class="mt-16 relative h-[60vh] min-h-[500px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 z-0">
<div class="absolute inset-0 bg-gradient-to-b from-black/60 to-background-dark/90 z-10"></div>
<img class="w-full h-full object-cover" data-alt="Group of diverse young activists smiling together" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB6-G-fSFq_yqugawNB82p8SjYfnA9heUYXou6Jh6GctgpwvRdt1NSK3MmwdyiMwqK9tqPglu9pBHzxEwDyVa_qc9BYfFmQcKrFd8j68J5fCVZH_0lgsCqOILm9FsXh9vVJtmazgbdbLD1IJyp9iYiZb0xl_akmxAYjf4kT_2_YdZmCfvOXzL0NjSsp5eX6VMGdOJhLQuxPLuLqt-WxqsfPsP7G8GSLBir7gQ2oSEhHW5YyNGFd_iu50-W3yPXs5F6KMWWNgidJgyw"/>
</div>
<div class="relative z-20 max-w-4xl px-6 text-center stagger-in">
<span class="inline-block px-4 py-1.5 mb-6 rounded-full bg-primary/20 text-primary border border-primary/30 text-xs font-bold uppercase tracking-widest">Our People</span>
<h1 class="text-white text-5xl md:text-7xl font-black leading-tight mb-6 tracking-tighter">
                    Meet the <span class="text-primary">Changemakers</span>
</h1>
<p class="text-white/90 text-lg md:text-xl max-w-2xl mx-auto leading-relaxed font-light">
                    Empowering a generation of leaders to reshape the landscape of social equity through collective leadership and youth agency.
                </p>
<div class="mt-10 flex flex-wrap justify-center gap-4">
<a class="bg-primary text-white px-8 py-4 rounded-xl font-bold hover:bg-leaf-green transition-all shadow-xl shadow-primary/30" href="#leadership">Explore Leadership</a>
<a class="bg-white/10 backdrop-blur-md border border-white/20 text-white px-8 py-4 rounded-xl font-bold hover:bg-white/20 transition-all" href="#team">Our Volunteer</a>
</div>
</div>
</section>
<!-- Leadership Section -->
<main class="max-w-[1280px] mx-auto px-6 py-24" id="leadership">
<div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
<div class="max-w-xl">
<h2 class="text-3xl md:text-4xl font-black text-earth-brown dark:text-white mb-4">Core Leadership</h2>
<div class="h-1.5 w-20 bg-primary rounded-full mb-6"></div>
<p class="text-earth-brown/70 dark:text-background-light/70 text-lg">Guided by experts committed to systemic change and community-driven policy.</p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-24">
<!-- Leader Card 1 -->
<div class="hover-lift stagger-in bg-white dark:bg-zinc-900 rounded-xl overflow-hidden shadow-sm flex flex-col group" style="animation-delay: 0.1s;">
<div class="relative aspect-[4/5] overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Professional headshot of Strategy Lead" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAQ_dkX-4hayFg9etf8Hc6czXR5mCMCkxXGktOcUzUOTfrWgn-jACRUODatuaigXPhhFa5uy8cG4OLfy2rS-8cC2J1VAN8sgxafH81cFgDgpFazTFJhA6k2NbxA6yugTihZhW4R4JWGk4pKXjAGvaYnRKwdwbbG0eoilK91v-98qFTsmvP0kmPQwNcf-62g3keT9srmPmhfTZurc33UHloU6kmqCe052UZdYcSVcAJmBckMOrEsyGfr-vMwjsnV3Itwk_aUIIDBoiw"/>
<div class="absolute bottom-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">CORE STRATEGY</div>
</div>
<div class="p-8 border-t-4 border-primary">
<h3 class="text-2xl font-bold mb-1">Jordan Taylor</h3>
<p class="text-leaf-green font-semibold mb-4">Strategy Lead</p>
<p class="text-sm text-earth-brown/60 dark:text-background-light/50 italic mb-6">"Driving systemic change through data-led advocacy and grassroots networking."</p>
<div class="flex gap-4">
<a class="text-earth-brown/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">link</span></a>
<a class="text-earth-brown/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
</div>
</div>
</div>
<!-- Leader Card 2 -->
<div class="hover-lift stagger-in bg-white dark:bg-zinc-900 rounded-xl overflow-hidden shadow-sm flex flex-col group" style="animation-delay: 0.2s;">
<div class="relative aspect-[4/5] overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Professional headshot of Policy Director" src="https://lh3.googleusercontent.com/aida-public/AB6AXuApOWR4QrMHd4IuLBOXdJ6qq72EYKNyXy9Q-lTs9EEYK0hjmJHrw8zqgLF-KHPWAxDholFjKuab3eN2LExH84O6CKh9SDWJr-id0unpJabrWwdXKfX0Cxj0fAzh0MqW89T5gX159BmYf6_sHra7n1oPg9v28tI1JmxcW16Viw7JDHzpaQaTZnf24YBkpnSpksCpoP6bYWK-oeUhQrTV3TXXUnGSw44625C1pgyr3eEmAf_TknxIj12Tyhfl2fKa7sVzQpdRocKnaz8"/>
<div class="absolute bottom-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">ADVOCACY</div>
</div>
<div class="p-8 border-t-4 border-primary">
<h3 class="text-2xl font-bold mb-1">Sarah Chen</h3>
<p class="text-leaf-green font-semibold mb-4">Policy Director</p>
<p class="text-sm text-earth-brown/60 dark:text-background-light/50 italic mb-6">"Bridging the gap between marginalized youth and global policy makers."</p>
<div class="flex gap-4">
<a class="text-earth-brown/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">link</span></a>
<a class="text-earth-brown/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
</div>
</div>
</div>
<!-- Leader Card 3 -->
<div class="hover-lift stagger-in bg-white dark:bg-zinc-900 rounded-xl overflow-hidden shadow-sm flex flex-col group" style="animation-delay: 0.3s;">
<div class="relative aspect-[4/5] overflow-hidden">
<img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="Professional headshot of Youth Advocate" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCHSe8PuA4hk5ZofYlmUuLuTXJyRd8uUaunkLmM3ibj6FXajHJgdcX9dM--LE2bHNjP4SRdS5W0Yxr5rG76bUgU7tN3lIENkv4WnYv_cJlNO7KNeVBNWiDR0YkVQyVymXqPQoXKvTTVYyM3Bl3UV04QUfCXhdDq19yEC2AzlGJB_VeZECdBWxAtirQCwv7vOpcgdSJ9HOlzRmETGupV_NfvkS7I4wq1OPjjdgMjPj3of2efw-DbJyENL90V2OE6OL-6XUzktwZxc88"/>
<div class="absolute bottom-4 left-4 bg-primary text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">OUTREACH</div>
</div>
<div class="p-8 border-t-4 border-primary">
<h3 class="text-2xl font-bold mb-1">Marcus Williams</h3>
<p class="text-leaf-green font-semibold mb-4">Youth Advocate</p>
<p class="text-sm text-earth-brown/60 dark:text-background-light/50 italic mb-6">"Empowering local communities through inclusive education and mentorship."</p>
<div class="flex gap-4">
<a class="text-earth-brown/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">link</span></a>
<a class="text-earth-brown/40 hover:text-primary transition-colors" href="#"><span class="material-symbols-outlined">alternate_email</span></a>
</div>
</div>
</div>
</div>
<!-- Team Grid Header -->
<div class="text-center mb-16" id="team">
<h2 class="text-3xl font-black text-earth-brown dark:text-white mb-4">The Changemaker Team</h2>
<p class="text-earth-brown/60 dark:text-background-light/60 max-w-xl mx-auto">Meet the passionate individuals working behind the scenes to drive our mission forward every day.</p>
</div>
<!-- Staggered Grid -->
<div class="grid grid-cols-2 md:grid-cols-4 gap-6">
<!-- Team Member 1 -->
<div class="hover-lift bg-white dark:bg-zinc-900 p-4 rounded-xl shadow-sm border border-primary/5 stagger-in" style="animation-delay: 0.1s;">
<div class="w-full aspect-square rounded-lg mb-4 bg-cover bg-center" data-alt="Portrait of Lena Roe" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBnjmMqGIPfGXtF9I3Ucwz1j-iQsumuZAI9W9XgJvWnHcBM8TggDWqGek4rM9nIU_176VUFTVveiheLPs_XwPwhSH1xQrnBphPpo3ez_rLX4T3TVnxWgB5JTQ_6fKsydmrH_tolC_flp44wcDd23kFLwDm9lqQqs7qx7lKXE9RGoN5S6Cr2DyenwZ3ctdcIrVJxSgVtYPcA4riiWMF_RqNXjzUw2KzcuglBbAVFttKa_jnT8zL8wlIpDyOMhCMcEuWNR7OpyP1Ozig');"></div>
<h4 class="font-bold text-sm">Lena Roe</h4>
<p class="text-xs text-primary font-medium mb-2">Program Manager</p>
<p class="text-[10px] text-earth-brown/50 dark:text-white/40 leading-relaxed line-clamp-2">50+ workshops led across three continents this year.</p>
</div>
<!-- Team Member 2 -->
<div class="hover-lift bg-white dark:bg-zinc-900 p-4 rounded-xl shadow-sm border border-primary/5 stagger-in mt-4 md:mt-8" style="animation-delay: 0.2s;">
<div class="w-full aspect-square rounded-lg mb-4 bg-cover bg-center" data-alt="Portrait of David Kim" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBKcRhxLbkjEYkv_G7SiIbMZKvMS449-Nznqe7G-f9xkPNSODCwrjP96asJHr5mg65bysQQTfz_DBU1rlVqYAk3PMTnIHkmM0pnebVxAug_7XkdZSDLMR0b1QDHh7d6f1QZRa04qLCeZbX_-NvUrbl9GrXcVhVKHeVr7zz5wXcmfy3wXeq6gBFCGvjR0j66_c4TZd7k1gxNSIRzMjlNccFKv1AwW_nj-PWuT20CY26VuLLakBtFw79R1fHJzgvJKQ48FFHFrsARpNI');"></div>
<h4 class="font-bold text-sm">David Kim</h4>
<p class="text-xs text-primary font-medium mb-2">Community Liaison</p>
<p class="text-[10px] text-earth-brown/50 dark:text-white/40 leading-relaxed line-clamp-2">Connecting 200+ local NGOs to policy resources.</p>
</div>
<!-- Team Member 3 -->
<div class="hover-lift bg-white dark:bg-zinc-900 p-4 rounded-xl shadow-sm border border-primary/5 stagger-in" style="animation-delay: 0.3s;">
<div class="w-full aspect-square rounded-lg mb-4 bg-cover bg-center" data-alt="Portrait of Maya Patel" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAtZDo13PpXt8dSQARqd4o_YHiZoAoDjUqlhdX2ozqZsoJk1iZ4eSa9QBT4OAcP8ONKMWlYyuph__snsuSI18LjpGpW2cNDeZchrnhCFvYTnp7-9dKJpFJ-QmVHusJcy0_WB8fV8j2KNFFRNf1XbOmbcn8qk9UiClH2NzLX2fb-4qljDbGTYgZqz8LFhBP-JiauAdUXPSuAjhjIcTQMqMMg-KIZB5gYxDs4F7KpP-m4FnzLioI7ImldcvvJZ4_NBxuHTNXqbL0pmds');"></div>
<h4 class="font-bold text-sm">Maya Patel</h4>
<p class="text-xs text-primary font-medium mb-2">Lead Researcher</p>
<p class="text-[10px] text-earth-brown/50 dark:text-white/40 leading-relaxed line-clamp-2">Published 5 white papers on youth social agency.</p>
</div>
<!-- Team Member 4 -->
<div class="hover-lift bg-white dark:bg-zinc-900 p-4 rounded-xl shadow-sm border border-primary/5 stagger-in mt-4 md:mt-8" style="animation-delay: 0.4s;">
<div class="w-full aspect-square rounded-lg mb-4 bg-cover bg-center" data-alt="Portrait of Alex Thorne" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCS-XirPiJFPHj7nrcUn9fR9uVN2iP7nMxYmSFwAyxxPgSqhHFQVNHl5sSgA1Lmz3E-1KyXjIy2I3VYUFUIAmB3umjDqNKdHVxVUhvHuoQGJ-L09fg712oonqQ_qAFbie13Mv2Du8aJ7igtYk8k76x4p_zBbfzUu5VzRDa3bxE5Ko859TDV_Sum-oagwVotlwu9Vr9rcTZNJiaEoLeLldxmbupbBW3Qnw6O7kW8eCDzDUC5-4dskeZBhgk-PjeJ5MpQ1Tyy7XcP8i4');"></div>
<h4 class="font-bold text-sm">Alex Thorne</h4>
<p class="text-xs text-primary font-medium mb-2">Digital Organizer</p>
<p class="text-[10px] text-earth-brown/50 dark:text-white/40 leading-relaxed line-clamp-2">Reached 2M+ youth through viral equity campaigns.</p>
</div>
<!-- Team Member 5 -->
<div class="hover-lift bg-white dark:bg-zinc-900 p-4 rounded-xl shadow-sm border border-primary/5 stagger-in" style="animation-delay: 0.5s;">
<div class="w-full aspect-square rounded-lg mb-4 bg-cover bg-center" data-alt="Portrait of Sofia Garcia" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuB9uBsrgM7vSJSMmyF_5pGeMAOPR8CF-BMdGa4w5gUXNS-ANJ0MNbAJHNxglxdNystrQeooGxV3wPShUerxT5ci3CPbYnMgCjGf0Fg4AqF4j0C-ZxhKNJA0dO-w4daF-Edt4z65u_zyh6pr_3GpBinulaLe7qShdViwQli7wPf-50MJSRXys8ugB-0yiy3pXsZa2eWHZl7fC6eNxBUMAlQ42XNgq-2Ja8Jw2bGgmdxaGeb1rYGMI1KsECiwbXzrrjhfmPB55sxieFE');"></div>
<h4 class="font-bold text-sm">Sofia Garcia</h4>
<p class="text-xs text-primary font-medium mb-2">Creative Lead</p>
<p class="text-[10px] text-earth-brown/50 dark:text-white/40 leading-relaxed line-clamp-2">Designer behind the 'Generation Equal' movement.</p>
</div>
<!-- Team Member 6 -->
<div class="hover-lift bg-white dark:bg-zinc-900 p-4 rounded-xl shadow-sm border border-primary/5 stagger-in mt-4 md:mt-8" style="animation-delay: 0.6s;">
<div class="w-full aspect-square rounded-lg mb-4 bg-cover bg-center" data-alt="Portrait of James Chen" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBIj7PNmfKYlf_FjyaJc4AOxlXfzRhtHH9QmSJzDHPcPONVfPoZC2yjjbgvUINyJWPQ3tMNfxEOp0BiK35LT7n3hU6mJBCiI-2cYQj659-xJhLgeRIH0w5VszsMqxi6ik12bbf-gpUe-kaJE9Hwyd5i6s7EFWrMmq6mUqG-n3Wa-3N2p_arbTOjH3bZj-6ytTmDK8zAsuuVvIvSkZzO0w-vvlKZVH-K-pF2Cf7sNsbOWbXRD5Hx-ONGJJZFWOWIzYXflgCNk1gY3Rw');"></div>
<h4 class="font-bold text-sm">James Chen</h4>
<p class="text-xs text-primary font-medium mb-2">Partnerships</p>
<p class="text-[10px] text-earth-brown/50 dark:text-white/40 leading-relaxed line-clamp-2">Secured funding for 15 urban youth centers.</p>
</div>
<!-- Team Member 7 -->
<div class="hover-lift bg-white dark:bg-zinc-900 p-4 rounded-xl shadow-sm border border-primary/5 stagger-in" style="animation-delay: 0.7s;">
<div class="w-full aspect-square rounded-lg mb-4 bg-cover bg-center" data-alt="Portrait of Priya Das" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCEa4E4mCn6u0fC6ozDdtZB4jhWeUFRxw8VwrEIAXhWUY0YMiZdGhjl4vcY57k_G1MCZrkyUXUCotlcgeaucdtL6IH139d0GN819QUVuy2rofiHEsap1vzuENNG3qjTkr1LrBuJA-vNWCHwlkmSgmvay0gZvufd25QXsnkFWRO6XoRFUWblk3N2H2Gp3lc1ZmEohGq4_RqxMeAVtBJEHNbmo7EEbR7L2m5cHz0vr_x1qEyXJwztSuwePKgUqapzVXWe51xQPNeUS94');"></div>
<h4 class="font-bold text-sm">Priya Das</h4>
<p class="text-xs text-primary font-medium mb-2">Sustainability</p>
<p class="text-[10px] text-earth-brown/50 dark:text-white/40 leading-relaxed line-clamp-2">Driving eco-justice policy integration.</p>
</div>
<!-- Team Member 8 -->
<div class="hover-lift bg-white dark:bg-zinc-900 p-4 rounded-xl shadow-sm border border-primary/5 stagger-in mt-4 md:mt-8" style="animation-delay: 0.8s;">
<div class="w-full aspect-square rounded-lg mb-4 bg-cover bg-center" data-alt="Portrait of Omar Said" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCnr9E6h4dRua-RP41J81c4rPGG_65NBT7sOocpCveTtwaPiCSmLFtbeZqBETzDTzwzcXQDuLp9GqI4GqL55ja3hDimNILVLQktZsEGksfU3A71uD9C1USyDw99pVIuyIhfE8BmFEtYE4Ag-x3MlAVGNseKAcZeYoeJDF7cm2AVJNvZ9NuNyj9Bp3R8WPr14n169ZWfk48AbR3szwgUwvZ4X_22udVlEJs7zd804K_Z6JMyJMwbadDXkzDb_yLuwPta_0_KHbaRnEY');"></div>
<h4 class="font-bold text-sm">Omar Said</h4>
<p class="text-xs text-primary font-medium mb-2">Legal Counsel</p>
<p class="text-[10px] text-earth-brown/50 dark:text-white/40 leading-relaxed line-clamp-2">Advocating for youth rights in 12 court cases.</p>
</div>
</div>
</main>
<!-- CTA Section -->
<section class="bg-background-dark py-20 px-6 mt-12">
<div class="max-w-4xl mx-auto text-center stagger-in">
<h2 class="text-white text-3xl md:text-5xl font-black mb-6">Want to join our mission?</h2>
<p class="text-white/70 text-lg mb-10">We're always looking for passionate volunteers, activists, and change-makers to grow our collective voice.</p>
<div class="flex flex-col sm:flex-row gap-4 justify-center">
<button class="bg-primary hover:bg-leaf-green text-white px-10 py-4 rounded-xl font-bold transition-all transform hover:scale-105">Apply to Volunteer</button>
<button class="border border-white/20 text-white hover:bg-white/10 px-10 py-4 rounded-xl font-bold transition-all" onclick="window.location='donation.php'">Support Our Work</button>
</div>
</div>
</section>
<div class="h-1"></div>
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