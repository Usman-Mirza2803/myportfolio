<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hafiz Muhammad Usman | Full Stack Developer</title>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="parallax-container">
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>
</div>

<header class="navbar">
    <div class="nav-container">
        <div class="logo">HU</div>
        <nav>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>

                  <!-- Resume Button -->
                <li>
                    <a href="Usman_Resume.pdf" class="resume-btn" download>
                        Download Resume
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

<main class="container">
    <section class="hero" id="home" data-aos="zoom-out">
        <span class="badge">Professional Portfolio</span>
        <h1>Hi, I am <span class="text-gradient">Hafiz Muhammad Usman</span></h1>
        <p class="sub-heading">Full Stack Developer</p>
        <p class="skills-bar">
            HTML5 <span>•</span> CSS3 <span>•</span> Tailwind CSS <span>•</span> Bootstrap <span>•</span> JavaScript <span>•</span> jQuery <span>•</span> PHP <span>•</span> MySQL <span>•</span> Flutter- Beginner 
        </p>
        <div class="hero-btns">
            <a href="#contact" class="btn-primary">Hire Me</a>
            <a href="#projects" class="btn-secondary">View Projects</a>
        </div>
    </section>

    <h2 class="section-title" id="projects" data-aos="fade-up">Featured Projects</h2>
    <section class="projects-grid">
        <div class="project-card" data-aos="fade-up">
            <div class="card-inner">
                <div class="card-content">
                    <h2>Diet and Health Monitoring Application Using Artificial Intelligence </h2>
                    <p>
                    Diet and health monitoring play a crucial role in maintaining a balanced and healthy lifestyle. This application is designed to help users track their BMI, monitor daily nutrient intake, plan meals, manage hydration and physical activity.Users can input their food consumption, track water intake, count footsteps, and receive tailored recommendations for diet and sleep.Advanced features like meal planning, food scanner and professional health consultations ensure a holistic approach to wellness.Powered by Artificial Intelligence [Gemini] the app analyzes user data to provide personalized recommendations and insights,empowering users to achieve their health goals effectively 
                    and efficiently.
                    </p>
                </div>
            </div>
        </div>
        <div class="project-card" data-aos="fade-up" data-aos-delay="200">
            <div class="card-inner">
                <div class="card-content">
                    <h2>Sweet Bakery Website </h2>
                    <p>
                        The Sweet Bakery website is a beautifully designed online platform that showcases a variety of freshly baked goods, including cakes, pastries, and bread. With its warm color palette and inviting layout, the site creates a cozy atmosphere that reflects the bakery's charm. Key features include a user-friendly navigation menu, a captivating hero section, and detailed product displays that entice customers. The website also includes sections for customer testimonials, an about us page, and a contact form for inquiries. Additionally, a newsletter subscription option keeps customers informed about new offerings and promotions. Overall, the Sweet Bakery website is crafted to provide an engaging and seamless user experience, making it easy for visitors to explore and connect with the bakery's delicious treats. 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="about-section" data-aos="fade-up">
        <h2 class="section-title">About Me</h2>
        <div class="about-card">
            <p>I build modern, responsive, and user-friendly websites that deliver smooth and engaging digital experiences. I focus on clean design, secure backend systems, and efficient performance. My goal is to turn ideas into powerful web solutions that help businesses grow through technology.</p>
        </div>
    </section>

    <section id="contact" class="contact-section" data-aos="fade-up">
        <h2 class="section-title">Get In Touch</h2>
        <form action="contact.php" method="POST" class="contact-form">
            <div class="form-group">
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="email" name="email" placeholder="Email Address" required>
            </div>
            <textarea name="message" placeholder="How can I help you?" rows="5" required></textarea>
            <button type="submit" class="btn-primary">Send Message</button>
        </form>
    </section>
</main>

<footer class="footer">
    <p>&copy; <?php echo date("Y"); ?> Hafiz Muhammad Usman. All Rights Reserved.</p>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({ duration: 1000, once: true });

    // Mouse Parallax Effect
    document.addEventListener("mousemove", (e) => {
        const orbs = document.querySelectorAll(".orb");
        const x = (e.clientX / window.innerWidth) - 0.5;
        const y = (e.clientY / window.innerHeight) - 0.5;
        orbs.forEach((orb, i) => {
            const s = (i + 1) * 40;
            orb.style.transform = `translate(${x * s}px, ${y * s}px)`;
        });
    });
</script>

</body>
</html>