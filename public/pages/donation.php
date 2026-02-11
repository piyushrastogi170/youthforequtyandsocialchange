<!DOCTYPE html>

<html lang="en"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Donate For Youth | Youth for Equity &amp; Social Change</title>
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
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style></head>
<body class="bg-background-light dark:bg-background-dark font-display text-[#121811]">
<div class="relative flex min-h-screen flex-col overflow-x-hidden">
<?php include "../../includes/header.php" ?>
<main class="flex-1">
<!-- Hero Section -->
<section class="relative h-[400px] md:h-[500px] flex items-center justify-center overflow-hidden">
<div class="absolute inset-0 bg-cover bg-center" data-alt="Diverse youth group smiling together outdoors" style='background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url("https://lh3.googleusercontent.com/aida-public/AB6AXuDfNIhQADl8vuKG4Y1FZ86J4cUQZrshC_J7PMCzxIcnLD_6oHMbaDA-_S0brYguhG8f9cgF-uwybaGzpIlLmVSePOpEq3LeX4M-llunaPrdczdmEFuSJPqEFcTDkV7BIks08OONf7RQhXp9cYHKxyPVnRgCuHjUC-toJiLDjNl7KJ6Nhoj14EJmn_E3xQFV7LXvhSa85ECd3XyoM1QoqgpWvkEZeauT9CDVgbDQ62TAbj5QN4-Mhd-Nc1IW5GxFw6TFcokFAT31ggA");'></div>
<div class="relative z-10 text-center px-4 max-w-4xl">
<h1 class="text-white text-4xl md:text-6xl font-black mb-6 leading-tight tracking-tight">
                        Invest in the Future of Equity
                    </h1>
<p class="text-white/90 text-lg md:text-xl font-medium max-w-2xl mx-auto">
                        Empowering youth to lead social change through community growth, education, and sustained advocacy.
                    </p>
</div>
</section>
<form action="donation-handling.php" method="post" >
<!-- Donation Section -->
<section class="max-w-[1200px] mx-auto px-4 -mt-20 relative z-20 pb-20">
<div class="bg-white rounded-xl shadow-2xl p-6 md:p-12">

<!-- Frequency Toggle -->
<div class="flex flex-col items-center mb-10">
<h2 class="text-2xl font-bold mb-6">Choose Your Impact</h2>

<div class="flex bg-background-light p-1 rounded-full w-full max-w-xs border border-primary/10">
<button id="oneTimeBtn" type="button"
class="flex-1 py-2 px-6 rounded-full text-sm font-bold bg-white shadow-sm text-primary">
One-time
</button>

<button id="monthlyBtn" type="button"
class="flex-1 py-2 px-6 rounded-full text-sm font-bold text-slate-500 hover:text-primary transition-colors">
Monthly
</button>

</div>
</div>

<!-- Tiers Grid -->
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mb-12">

<label class="group cursor-pointer">
<input class="peer hidden donation-radio" name="amount" type="radio" value="5000">
<div class="h-full border-2 border-slate-100 rounded-xl p-6 transition-all duration-300 peer-checked:border-primary peer-checked:bg-primary/5 hover:scale-105 group-hover:shadow-lg bg-white">
<span class="material-symbols-outlined text-primary mb-4 block">school</span>
<h3 class="text-3xl font-black mb-2">₹5000</h3>
<p class="text-sm text-slate-600">Provides 1 week of tutoring and mentoring for one student.</p>
</div>
</label>

<label class="group cursor-pointer">
<input class="peer hidden donation-radio" name="amount" type="radio" value="10000">
<div class="h-full border-2 border-slate-100 rounded-xl p-6 transition-all duration-300 peer-checked:border-primary peer-checked:bg-primary/5 hover:scale-105 group-hover:shadow-lg bg-white">
<span class="material-symbols-outlined text-primary mb-4 block">groups</span>
<h3 class="text-3xl font-black mb-2">₹10000</h3>
<p class="text-sm text-slate-600">Funds a community workshop on social equity and leadership.</p>
</div>
</label>

<label class="group cursor-pointer">
<input class="peer hidden donation-radio" name="amount" type="radio" value="50000">
<div class="h-full border-2 border-slate-100 rounded-xl p-6 transition-all duration-300 peer-checked:border-primary peer-checked:bg-primary/5 hover:scale-105 group-hover:shadow-lg bg-white">
<span class="material-symbols-outlined text-primary mb-4 block">star</span>
<h3 class="text-3xl font-black mb-2">₹50000</h3>
<p class="text-sm text-slate-600">Sponsors a youth leader's participation in national advocacy summits.</p>
</div>
</label>

<!-- Custom -->
<div class="h-full border-2 border-slate-100 rounded-xl p-6 bg-white flex flex-col justify-between">
<div>
<span class="material-symbols-outlined text-primary mb-4 block">edit_note</span>
<h3 class="text-lg font-bold mb-2">Custom Amount</h3>
</div>
<div class="relative mt-4">
<span class="absolute left-3 top-1/2 -translate-y-1/2 font-bold text-slate-400">₹</span>
<input id="customAmount"
class="w-full pl-8 pr-4 py-2 rounded-lg border-slate-200 focus:ring-primary focus:border-primary"
placeholder="0.00" type="number">
</div>
</div>

</div>

<!-- FULL FORM (UNCHANGED) -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-12 border-t border-slate-100 pt-12">

<div class="space-y-6">

<h3 class="text-xl font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person</span>
Personal Information
</h3>

<div class="grid grid-cols-2 gap-4">
<div class="col-span-2 sm:col-span-1">
<label class="block text-sm font-semibold mb-2">First Name</label>
<input class="w-full rounded-lg border-slate-200 focus:ring-primary" type="text" required placeholder="First Name" name="f_name">
</div>

<div class="col-span-2 sm:col-span-1">
<label class="block text-sm font-semibold mb-2">Last Name</label>
<input class="w-full rounded-lg border-slate-200 focus:ring-primary" type="text" placeholder="Last Name" name="l_name">
</div>

<div class="col-span-2">
<label class="block text-sm font-semibold mb-2">Mobile No</label>
<input class="w-full rounded-lg border-slate-200 focus:ring-primary" type="tel" placeholder="+91-XXXXXXXXXX" name="mobile">
</div>

<div class="col-span-2">
<label class="block text-sm font-semibold mb-2">Email Address</label>
<input class="w-full rounded-lg border-slate-200 focus:ring-primary" type="email" placeholder="example@email.com" name="email" >
</div>
</div>
<h3 class="text-xl font-bold flex items-center gap-2 pt-4">
<span class="material-symbols-outlined text-primary">Amount</span>
</h3>

<div class="relative">
  
  <span class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-500 font-semibold">
    ₹
  </span>

  <input 
    id="finalAmount"
    type="number"
    class="w-full pl-8 rounded-lg border-slate-200 focus:ring-primary bg-gray-100 text-gray-700"
    style="cursor: not-allowed"
    disabled
    placeholder="0" name="amount"
  />

</div>


<button id="donateBtn"
class="w-full bg-primary text-white py-4 rounded-xl font-black text-lg hover:bg-primary/90 transition-all flex items-center justify-center gap-3">
<span class="material-symbols-outlined">lock</span>
Complete Donation
</button>
</form>
</div>
<!-- Trust Signals & Impact -->
<div class="bg-primary/5 rounded-xl p-8 border border-primary/10">
<h3 class="text-xl font-bold mb-6">Where your money goes</h3>
<div class="space-y-8">
<div>
<div class="flex justify-between items-end mb-2">
<span class="font-bold text-slate-700">90% Programs &amp; Education</span>
<span class="text-primary font-black text-xl">90%</span>
</div>
<div class="w-full bg-slate-200 h-3 rounded-full overflow-hidden">
<div class="bg-primary h-full w-[90%]"></div>
</div>
</div>
<div>
<div class="flex justify-between items-end mb-2">
<span class="font-bold text-slate-700">10% Operations &amp; Admin</span>
<span class="text-slate-400 font-bold">10%</span>
</div>
<div class="w-full bg-slate-200 h-3 rounded-full overflow-hidden">
<div class="bg-slate-400 h-full w-[10%]"></div>
</div>
</div>
</div>
<div class="mt-12 space-y-4">
<div class="flex items-start gap-3 bg-white p-4 rounded-lg shadow-sm">
<span class="material-symbols-outlined text-primary">task_alt</span>
<div>
<p class="text-sm font-bold">Fully Tax-Deductible</p>
<p class="text-xs text-slate-500">YESC is a registered non-profit organization under Section 12A of the Income Tax Act, 1961.</p>
</div>
</div>
<div class="flex items-start gap-3 bg-white p-4 rounded-lg shadow-sm">
<span class="material-symbols-outlined text-primary">security</span>
<div>
<p class="text-sm font-bold">Secure Transactions</p>
<p class="text-xs text-slate-500">256-bit SSL encrypted connection and PCI-compliant processing.</p>
</div>
</div>
</div>
<!-- FAQ Section -->
<div class="mt-12">
<h3 class="text-lg font-bold mb-4">Frequently Asked Questions</h3>
<div class="space-y-3">
<details class="group bg-white rounded-lg border border-slate-100 overflow-hidden">
<summary class="flex justify-between items-center p-4 cursor-pointer font-semibold text-sm list-none">
                                            Will I get a tax receipt?
                                            <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="px-4 pb-4 text-xs text-slate-600">
                                            Yes, you will receive an automated tax receipt via email immediately after your donation is processed.
                                        </div>
</details>
<details class="group bg-white rounded-lg border border-slate-100 overflow-hidden">
<summary class="flex justify-between items-center p-4 cursor-pointer font-semibold text-sm list-none">
                                            Can I cancel a monthly gift?
                                            <span class="material-symbols-outlined group-open:rotate-180 transition-transform">expand_more</span>
</summary>
<div class="px-4 pb-4 text-xs text-slate-600">
                                            Absolutely. You can cancel Autopay Any time. If you have any Query Please <a href="contact.php" class="font-bold text-blue">Contact US.</a>
                                        </div>
</details>
</div>
</div>
</div>
</div>
</div>

</div>
</div>

</section>








</main>
<?php include "../../includes/footer.php" ?>
</div>
</body>
<script>
document.addEventListener("DOMContentLoaded", function () {

  const oneTimeBtn = document.getElementById("oneTimeBtn");
  const monthlyBtn = document.getElementById("monthlyBtn");

  function activate(activeBtn, inactiveBtn) {

    // Active button styles
    activeBtn.classList.add(
      "bg-white",
      "shadow-sm",
      "text-primary",
      "scale-100"
    );

    activeBtn.classList.remove(
      "text-slate-500"
    );

    // Inactive button styles
    inactiveBtn.classList.remove(
      "bg-white",
      "shadow-sm",
      "text-primary",
      "scale-100"
    );

    inactiveBtn.classList.add(
      "text-slate-500"
    );
  }

  oneTimeBtn.addEventListener("click", function () {
    activate(oneTimeBtn, monthlyBtn);
  });

  monthlyBtn.addEventListener("click", function () {
    activate(monthlyBtn, oneTimeBtn);
  });

});
document.addEventListener("DOMContentLoaded", function () {

  const radios = document.querySelectorAll(".donation-radio");
  const customAmount = document.getElementById("customAmount");
  const finalAmount = document.getElementById("finalAmount");

  /* Default selected value */
  const checked = document.querySelector(".donation-radio:checked");
  if (checked) {
    finalAmount.value = checked.value;
  }

  /* When card is selected */
  radios.forEach(radio => {
    radio.addEventListener("change", function () {
      finalAmount.value = this.value;
      customAmount.value = "";
    });
  });

  /* When custom amount is typed */
  customAmount.addEventListener("input", function () {

    // Uncheck radio cards
    radios.forEach(r => r.checked = false);

    // Show custom value
    finalAmount.value = this.value;
  });

});
</script>

</html>




