<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'StarRoom - Booking Hotel Terbaik')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <canvas id="particles-canvas"></canvas>
    <x-navbar></x-navbar>

    {{ $slot }}

    <script>
        // ==================== PARTICLES SYSTEM ====================
        function initParticles() {
            const canvas = document.getElementById("particles-canvas");
            if (!canvas) return;

            const ctx = canvas.getContext("2d");
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;

            const particles = [];
            const particleCount = 50;

            class Particle {
                constructor() {
                    this.x = Math.random() * canvas.width;
                    this.y = Math.random() * canvas.height;
                    this.vx = (Math.random() - 0.5) * 0.5;
                    this.vy = (Math.random() - 0.5) * 0.5;
                    this.size = Math.random() * 2 + 1;
                    this.opacity = Math.random() * 0.5 + 0.2;
                }

                update() {
                    this.x += this.vx;
                    this.y += this.vy;

                    if (this.x < 0 || this.x > canvas.width) this.vx *= -1;
                    if (this.y < 0 || this.y > canvas.height) this.vy *= -1;
                }

                draw() {
                    ctx.beginPath();
                    ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
                    ctx.fillStyle = `rgba(255, 255, 255, ${this.opacity})`;
                    ctx.fill();
                }
            }

            for (let i = 0; i < particleCount; i++) {
                particles.push(new Particle());
            }

            function animateParticles() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);

                particles.forEach((particle) => {
                    particle.update();
                    particle.draw();
                });

                // Draw connections
                particles.forEach((particle, i) => {
                    particles.slice(i + 1).forEach((otherParticle) => {
                        const dx = particle.x - otherParticle.x;
                        const dy = particle.y - otherParticle.y;
                        const distance = Math.sqrt(dx * dx + dy * dy);

                        if (distance < 100) {
                            ctx.beginPath();
                            ctx.moveTo(particle.x, particle.y);
                            ctx.lineTo(otherParticle.x, otherParticle.y);
                            ctx.strokeStyle = `rgba(255, 255, 255, ${0.1 * (1 - distance / 100)})`;
                            ctx.lineWidth = 1;
                            ctx.stroke();
                        }
                    });
                });

                requestAnimationFrame(animateParticles);
            }

            animateParticles();

            window.addEventListener("resize", () => {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            });
        }

        // ==================== SCROLL ANIMATIONS ====================
        function handleScrollAnimations() {
            const elements = document.querySelectorAll(
                ".fade-in-element, .slide-in-left, .slide-in-right, .slide-in-up"
            );

            elements.forEach((element) => {
                const elementTop = element.getBoundingClientRect().top;
                const elementVisible = 150;

                if (elementTop < window.innerHeight - elementVisible) {
                    element.classList.add("animate");
                }
            });
        }

        // ==================== TYPING ANIMATION ====================
        function initTypingAnimation() {
            const typingElement = document.getElementById("typing-text");
            if (!typingElement) return;

            const typingTexts = [
                "Temukan Kamar Impian Anda",
                "Sewa Kamar Terbaik di Indonesia",
                "Platform Pencarian Kamar #1",
                "Booking Kamar Dalam Sekali Klik",
            ];

            let textIndex = 0;
            let charIndex = 0;
            let isDeleting = false;

            function typeWriter() {
                const currentText = typingTexts[textIndex];

                if (isDeleting) {
                    typingElement.textContent = currentText.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    typingElement.textContent = currentText.substring(0, charIndex + 1);
                    charIndex++;
                }

                let typeSpeed = isDeleting ? 50 : 100;

                if (!isDeleting && charIndex === currentText.length) {
                    typeSpeed = 2000; // Pause at end
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    textIndex = (textIndex + 1) % typingTexts.length;
                    typeSpeed = 500; // Pause before next text
                }

                setTimeout(typeWriter, typeSpeed);
            }

            setTimeout(typeWriter, 1000);
        }

        // ==================== COUNTER ANIMATION ====================
        function animateCounter(element) {
            const target = parseInt(element.getAttribute("data-target"));
            const increment = target / 100;
            let current = 0;

            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }

                if (target >= 1000) {
                    element.textContent = Math.floor(current / 1000) + "K+";
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 20);
        }

        // ==================== 3D TILT EFFECT ====================
        function initTiltEffect() {
            const tiltCards = document.querySelectorAll(".tilt-card");

            tiltCards.forEach((card) => {
                card.addEventListener("mousemove", (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;

                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;

                    const rotateX = (y - centerY) / 10;
                    const rotateY = (centerX - x) / 10;

                    card.style.transform =
                        `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
                });

                card.addEventListener("mouseleave", () => {
                    card.style.transform =
                        "perspective(1000px) rotateX(0deg) rotateY(0deg) scale3d(1, 1, 1)";
                });
            });
        }

        // ==================== MAGNETIC BUTTONS ====================
        function initMagneticButtons() {
            const magneticBtns = document.querySelectorAll(".magnetic-btn");

            magneticBtns.forEach((btn) => {
                btn.addEventListener("mousemove", (e) => {
                    const rect = btn.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;

                    btn.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
                });

                btn.addEventListener("mouseleave", () => {
                    btn.style.transform = "translate(0px, 0px)";
                });
            });
        }

        // ==================== PARALLAX EFFECT ====================
        function handleParallax() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll(".hero-visual");

            parallaxElements.forEach((element) => {
                const speed = scrolled * 0.3;
                element.style.transform = `translateY(${speed}px)`;
            });

            const floatingElements = document.querySelectorAll(".floating-element");
            floatingElements.forEach((element, index) => {
                const speed = scrolled * (0.1 + index * 0.05);
                element.style.transform = `translateY(${speed}px)`;
            });
        }

        // ==================== INITIALIZATION ====================
        document.addEventListener('DOMContentLoaded', function() {
            initParticles();
            initTypingAnimation();
            initTiltEffect();
            initMagneticButtons();

            const statNumbers = document.querySelectorAll(".stat-number");
            if (statNumbers.length > 0) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach((entry) => {
                        if (entry.isIntersecting) {
                            animateCounter(entry.target);
                            observer.unobserve(entry.target);
                        }
                    });
                });

                statNumbers.forEach((stat) => observer.observe(stat));
            }

            handleScrollAnimations();

            // Hide loading screen after page loads
            setTimeout(() => {
                const loadScreen = document.getElementById('load');
                if (loadScreen) {
                    loadScreen.classList.add('hidden');
                }
            }, 1500);
        });

        window.addEventListener("scroll", () => {
            handleScrollAnimations();
            handleParallax();
        });

        window.addEventListener("resize", () => {
            const canvas = document.getElementById("particles-canvas");
            if (canvas) {
                canvas.width = window.innerWidth;
                canvas.height = window.innerHeight;
            }
        });
    </script>
</body>

</html>
