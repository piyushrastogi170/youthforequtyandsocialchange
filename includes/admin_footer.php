
<!-- Footer -->
<footer class="mt-auto py-6 px-8 text-center bg-[#122210]">
<p class="text-[10px] text-white uppercase tracking-[0.2em] font-medium">
                    © 2026 Youth for Equity &amp; Social Change • Secure Admin Portal
                </p>
</footer>

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


// Simple scroll progress bar indicator
window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector(".scroll-progress").style.width = scrolled + "%";
        });
</script>