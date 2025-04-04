<?php $pageTitle = "Portfolio"; ?>
<?php include 'header.php'; ?>

    <!-- Hero Section -->
    <div class="relative h-screen overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <img 
                alt="Himalayan Mountains" 
                class="w-full h-full object-cover object-center animate-zoom-pan"
                height="1080"
                src="https://wallpaperaccess.com/full/11153927.jpg"
                width="1920"
            />
            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-80% to-black opacity-90"></div>
        </div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 h-full flex items-center">
            <div class="text-white space-y-8 lg:space-y-12 w-full max-w-3xl">
                <h1 class="text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold leading-tight md:leading-none">
                    <span class="block mb-4 md:mb-6 animate-fade-in-up [animation-delay:200ms] opacity-0 translate-y-8">
                        Capturing Nepal's
                    </span>
                    <span class="text-indigo-400 bg-clip-text bg-gradient-to-r from-indigo-400 to-blue-300 inline-block animate-fade-in-up [animation-delay:300ms] opacity-0 translate-y-8">
                        Timeless Beauty
                    </span>
                </h1>
                <p class="text-lg md:text-xl lg:text-2xl font-light leading-relaxed md:leading-normal opacity-90 animate-fade-in-up [animation-delay:400ms] opacity-0 translate-y-8">
                    Professional photography showcasing the breathtaking<br class="hidden lg:block"> 
                    landscapes and cultural heritage of Nepal's soul.
                </p>
                <div class="animate-fade-in-up [animation-delay:500ms] opacity-0 translate-y-8">
                    <a class="inline-block bg-indigo-600 text-white px-8 py-4 rounded-full text-base md:text-lg font-medium hover:bg-indigo-700 transition-all duration-500 hover:shadow-2xl hover:-translate-y-1 focus:ring-2 focus:ring-indigo-400 focus:ring-offset-2 animate-bounce-delay" 
                       href="gallery.php">
                        Explore Gallery
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- New Footer Section -->
    <footer class="bg-gray-900 text-gray-300 relative z-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 lg:gap-12">
                <!-- Contact Info -->
                <div class="animate-fade-in-up [animation-delay:600ms] opacity-0 translate-y-8">
                    <h3 class="text-indigo-400 text-lg font-semibold mb-4">Capture the Moment</h3>
                    <p class="mb-2">Kathmandu, Nepal</p>
                    <p class="mb-2">+977 123 4567</p>
                    <p>heritagenepal.com</p>
                </div>

                <!-- Social Links -->
                <div class="animate-fade-in-up [animation-delay:700ms] opacity-0 translate-y-8">
                    <h3 class="text-indigo-400 text-lg font-semibold mb-4">Follow the Journey</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="hover:text-indigo-400 transition-colors" aria-label="Instagram">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
                            </svg>
                        </a>
                        <!-- Add more social icons as needed -->
                    </div>
                </div>

                <!-- Copyright & Credits -->
                <div class="md:text-right animate-fade-in-up [animation-delay:800ms] opacity-0 translate-y-8">
                    <p class="text-sm opacity-75">
                        &copy; Heritage nepal 2024 <br>
                        Crafted with <span class="text-indigo-400">♥</span> in Tilottama, Nepal
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <style>
        @keyframes fade-in-up {
            from { 
                opacity: 0;
                transform: translateY(1rem) scale(0.98);
            }
            to { 
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }
        .animate-fade-in-up {
            animation: fade-in-up 1s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }
        @keyframes kenburns-right {
            0% { transform: scale(1) translateX(0); }
            100% { transform: scale(1.05) translateX(20px); }
        }
        .animate-kenburns-right {
            animation: kenburns-right 20s ease-out forwards;
        }
        /* New animation keyframes */
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-30px); }
            60% { transform: translateY(-15px); }
        }
        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        .animate-bounce-delay {
            animation: bounce 2s ease infinite 1s;
        }
        /* New zoom animations */
        @keyframes zoom-in {
            from { transform: scale(1); opacity: 0; }
            to { transform: scale(1.1); opacity: 1; }
        }
        
        @keyframes zoom-out {
            from { transform: scale(1.1); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }

        @keyframes zoom-pan {
            0% { 
                transform: scale(1.15) translateY(4%);
                animation-timing-function: cubic-bezier(0.33, 0.66, 0.66, 1);
            }
            100% { 
                transform: scale(1) translateY(0);
            }
        }

        .animate-zoom-in {
            animation: zoom-in 1.5s cubic-bezier(0.4, 0, 0.2, 1) forwards;
        }

        .animate-zoom-out {
            animation: zoom-out 1.2s ease-out forwards;
        }

        .animate-zoom-pan {
            animation: zoom-pan 25s ease-out forwards;
        }

        /* Responsive Typography */
        h1 {
            letter-spacing: -0.025em;
        }

        p {
            line-height: 1.75;
            letter-spacing: -0.015em;
            max-width: 36rem;
        }

        @media (min-width: 768px) {
            h1 {
                letter-spacing: -0.035em;
            }
            p {
                line-height: 1.8;
            }
        }

        /* Add to existing styles */
        footer {
            background: linear-gradient(135deg, rgba(17, 24, 39, 0.95) 0%, rgba(8, 12, 32, 0.95) 100%);
            backdrop-filter: blur(10px);
        }
    </style>

    <script>
        // Scroll-triggered animations
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = 
                        entry.target.dataset.animation || 'fade-in-up 1s cubic-bezier(0.4, 0, 0.2, 1) forwards';
                }
            });
        }, { threshold: 0.25 });

        // Observe all animate-on-scroll elements
        document.querySelectorAll('.animate-on-scroll').forEach((el) => {
            observer.observe(el);
        });

        // Parallax effect for hero image
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallax = document.querySelector('.parallax-layer');
            if(parallax) {
                parallax.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
        });

        // Add zoom animation to the main heading
        document.querySelector('h1').classList.add('animate-zoom-in');
        
        // Add zoom-out effect to the subtitle
        document.querySelector('p').classList.add('animate-zoom-out');
        document.querySelector('p').style.animationDelay = '400ms';
    </script>

<?php include 'footer.php'; ?> 