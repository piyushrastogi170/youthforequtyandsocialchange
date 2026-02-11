.scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 4px;
            background: #21d411;
            z-index: 100;
        }







        <!-- Scroll Progress Bar -->
<div class="scroll-progress"></div>




// Simple scroll progress bar indicator
        window.addEventListener('scroll', () => {
            const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
            const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
            const scrolled = (winScroll / height) * 100;
            document.querySelector(".scroll-progress").style.width = scrolled + "%";
        });






        