<style>
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






        <!-- Scroll Progress Bar -->
<div class="scroll-progress"></div>




// Simple scroll progress bar indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector(".scroll-progress").style.width = scrolled + "%";
        });



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
