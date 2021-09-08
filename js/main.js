(function() {
    if (document.readyState = "loading") {
        document.addEventListener("DOMContentLoaded", documentIsReady) 
    } else {
        documentIsReady()
    }
    
    function documentIsReady() {
        const hamburger = document.querySelector(".hamburger");
        const navMenu = document.querySelector("nav");
        const navOverlay = document.querySelector(".nav-overlay");
        const navLink = document.querySelectorAll(".nav-link");
        const main = document.querySelector("main"); 
        const nav = document.querySelector("nav");
     
        nav.addEventListener("mouseenter", openNav);
        nav.addEventListener("mouseleave", closeNav)
        hamburger.addEventListener("click", openMobileNav);
        navLink.forEach(n => n.addEventListener("click", closeMobileMenu));
        function openNav() {
            main.classList.toggle("active-desktop");
        }
        function closeNav() {
            main.classList.toggle("active-desktop");
        }
        function openMobileNav() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
            navOverlay.classList.toggle("active");
            main.classList.toggle("active");
        }
        function closeMobileMenu() {
            hamburger.classList.toggle("active");
            navMenu.classList.toggle("active");
            navOverlay.classList.toggle("active");
            main.classList.toggle("active");
        }
    
        const appHeight = () => {
            const doc = document.documentElement
            doc.style.setProperty("--app-height", `${window.innerHeight}px`)
        }
        window.addEventListener("resize", appHeight);
        appHeight()

        $('a').click(function(){
            $('html, body').animate({
                scrollTop: $( $(this).attr('href') ).offset().top-250
            }, 500);
            return false;
        });
    }
    }())