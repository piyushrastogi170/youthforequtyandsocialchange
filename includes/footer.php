<!-- Footer -->
<footer class="bg-[#122210] text-white py-20">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 lg:gap-24">
<div class="md:col-span-1">
<div class="flex items-center gap-3 mb-6">
<div class="flex items-center">
    <img 
      src="../assets/images/logo.png" 
      class="h-14 w-auto" 
      alt="Youth For Equity Logo"
    >
  </div>

  <div class="leading-tight">
    <h1 class="text-base font-black tracking-tight">
      Youth for Equity
    </h1>
    <span class="text-primary text-sm font-bold">
      &amp; Social Change
    </span>
  </div>
</div>

<p class="text-white/60 text-sm leading-relaxed mb-8">
                        Youth for Equity &amp; Social Change is a non-profit dedicated to dismantling barriers and fostering growth for the next generation of leaders.
                    </p>
<div class="flex gap-4">
<a class="size-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary/20 transition-colors" onclick="shareWebsite()">
<span class="material-symbols-outlined text-lg">share</span>
</a>
<a class="size-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary/20 transition-colors" href="tel:+91 0000000000">
<span class="material-symbols-outlined text-lg">phone</span>
</a>
<a class="size-10 rounded-full border border-white/10 flex items-center justify-center hover:bg-primary/20 transition-colors" target="_blank" href="https://maps.app.goo.gl/aDHtAtCM3VsCLpNKA">
<span class="material-symbols-outlined text-lg">map</span>
</a>
</div>
</div>
<div>
<h5 class="font-bold mb-6 text-primary">Quick Links</h5>
<ul class="space-y-4 text-sm text-white/60">
<li><a class="hover:text-white transition-colors" href="#">Our History</a></li>
<li><a class="hover:text-white transition-colors" href="#">Annual Reports</a></li>
<li><a class="hover:text-white transition-colors" href="#">Partner With Us</a></li>
<li><a class="hover:text-white transition-colors" href="#">Volunteer Opportunities</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-6 text-primary">Support</h5>
<ul class="space-y-4 text-sm text-white/60">
<li><a class="hover:text-white transition-colors" href="donation.php">Donate Now</a></li>
<li><a class="hover:text-white transition-colors" href="#">Gift Aid</a></li>
<li><a class="hover:text-white transition-colors" href="#">FAQ</a></li>
<li><a class="hover:text-white transition-colors" href="#">Privacy Policy</a></li>
</ul>
</div>
<div>
<h5 class="font-bold mb-6 text-primary">Contact</h5>
<div class="space-y-4 text-sm text-white/60">
<p class="flex items-start gap-3">
<span class="material-symbols-outlined text-primary text-lg">location_on</span>
                            123 Equity Way, Social Center,<br/>NY 10001, United States
                        </p>
<p class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-lg">mail</span>
                            hello@yesc.org
                        </p>
<p class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-lg">call</span>
                            +1 (555) 123-4567
                        </p>
</div>
</div>
</div>
<div class="mt-20 pt-8 border-t border-white/5 text-center text-xs text-white/40 space-y-2">
    
    <p>
        © 2026 Youth for Equity &amp; Social Change. All rights reserved.
    </p>

    <p>
        Website designed & developed by 
        <a href="https://piyushrastogi.in" target="_blank" class="text-primary hover:underline">
            JE. Piyush Rastogi
        </a> – Web & Android Developer.
    </p>

</div>

</footer>
<script>
function shareWebsite() {
  if (navigator.share) {
    navigator.share({
      title: document.title,
      text: "Check out this website!",
      url: window.location.href
    });
  } else {
    alert("Sharing not supported on this browser. Copy the URL manually.");
  }
}
</script>