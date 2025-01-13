<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hero Section with Animations</title>
    <style>
        /* Global Styles */
        :root {
            --primary-color: #0ef;
            --text-color: #fff;
            --background-gradient: radial-gradient(circle, #0f0 0%, #000 100%);
        }

        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background: #000;
            color: var(--text-color);
        }

        #main {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 10%;
            background: var(--background-gradient);
            position: relative;
            overflow: hidden;
        }

        .hero-content {
            flex: 1;
            z-index: 2;
        }

        .hero-title {
            font-size: 3.5rem;
            line-height: 1.2;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 20px;
            letter-spacing: 2px;
            background: linear-gradient(90deg, #0ef, #0f9, #0ef);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .role {
            font-size: 1.8rem;
            color: var(--text-color);
            margin-bottom: 30px;
        }

        /* Call-to-Action Buttons */
        .cta-buttons {
            display: flex;
            justify-content: flex-start;
            gap: 15px;
        }

        .cta-button {
            padding: 12px 30px;
            font-size: 1.2rem;
            color: #000;
            background: var(--primary-color);
            border: none;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .cta-button:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px var(--primary-color);
        }

        /* About Image Container */
        .about-image-container {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 1;
        }

        .image-border {
            position: absolute;
            width: 300px;
            height: 300px;
            border: 5px solid var(--primary-color);
            border-radius: 50%;
            transition: transform 0.3s ease-in-out;
        }

        .about-image {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            object-fit: cover;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
            transition: transform 0.3s ease-in-out;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            #main {
                flex-direction: column;
                padding: 20px;
                text-align: center;
            }

            .hero-title {
                font-size: 2.5rem;
            }

            .role {
                font-size: 1.5rem;
            }

            .about-image-container {
                margin-top: 20px;
            }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    <section id="main">
        <div class="hero-content">
            <h1 class="hero-title">Hi, I'm Adarsh Kumar</h1>
            <div class="role">A Full Stack Web Developer</div>
            <div class="cta-buttons">
                <a href="#portfolio" class="cta-button">View Portfolio</a>
                <a href="#contact" class="cta-button">Contact Me</a>
            </div>
        </div>
        <div class="about-image-container">
            <div class="image-border"></div>
            <img src="your-image.jpg" alt="Adarsh Kumar" class="about-image">
        </div>
    </section>

    <script>
        // Text Animation for Role
        document.addEventListener('DOMContentLoaded', () => {
            const roles = [
                "A Full Stack Web Developer",
                "A Problem Solver",
                "A Creative Designer"
            ];
            
            let roleIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            const roleElement = document.querySelector('.role');
            
            function typeEffect() {
                const currentRole = roles[roleIndex];
                
                if (isDeleting) {
                    roleElement.textContent = currentRole.substring(0, charIndex - 1);
                    charIndex--;
                } else {
                    roleElement.textContent = currentRole.substring(0, charIndex + 1);
                    charIndex++;
                }

                // Speed adjustments
                let typeSpeed = isDeleting ? 50 : 100;
                
                if (!isDeleting && charIndex === currentRole.length) {
                    typeSpeed = 2000; // Pause at end
                    isDeleting = true;
                } else if (isDeleting && charIndex === 0) {
                    isDeleting = false;
                    roleIndex = (roleIndex + 1) % roles.length;
                    typeSpeed = 500; // Pause before typing next
                }
                
                setTimeout(typeEffect, typeSpeed);
            }
            
            // Start the typing animation
            setTimeout(typeEffect, 1000);
        });

        // Image Animation
        document.addEventListener('DOMContentLoaded', () => {
            const imageContainer = document.querySelector('.about-image-container');
            const image = document.querySelector('.about-image');
            const border = document.querySelector('.image-border');
            
            // Mouse move effect
            imageContainer.addEventListener('mousemove', (e) => {
                const { left, top, width, height } = imageContainer.getBoundingClientRect();
                const x = (e.clientX - left) / width - 0.5;
                const y = (e.clientY - top) / height - 0.5;
                
                image.style.transform = `
                    scale(1.05)
                    translateY(-10px)
                    rotateY(${x * 10}deg)
                    rotateX(${y * -10}deg)
                `;
                
                border.style.transform = `
                    scale(1.1)
                    rotateY(${x * -5}deg)
                    rotateX(${y * 5}deg)
                `;
            });
            
            // Reset on mouse leave
            imageContainer.addEventListener('mouseleave', () => {
                image.style.transform = '';
                border.style.transform = '';
            });
            
            // Subtle pulse effect
            let pulseTimeout;
            const addPulseEffect = () => {
                if (Math.random() > 0.7) { // 30% chance to pulse
                    image.style.transform = 'scale(1.02)';
                    setTimeout(() => {
                        image.style.transform = '';
                    }, 200);
                }
                pulseTimeout = setTimeout(addPulseEffect, 3000);
            };
            
            addPulseEffect();
        });
    </script>
</body>
</html>
