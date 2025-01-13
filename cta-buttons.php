<?php
// Redirect to the homepage if accessed directly
if (basename(__FILE__) == basename($_SERVER['PHP_SELF'])) {
    header("Location: index.php");
    exit;
}
?>

<div class="hero-section">
    <div class="content-container">
        <div class="text-content">
            <h3 class="subtitle">HEY, IT'S ME</h3>
            <h1 class="title">Adarsh Prashar</h1>
            <p class="description">
                I'm passionate about bridging technology and user needs. I am a Full-Stack Web Developer with a robust foundation in Computer Science and a zeal for continuous learning. My expertise spans Front-End, Back-End, and Database development, including technologies like HTML, CSS, JavaScript, Java, and SQL. I thrive on problem-solving and innovation, aiming to contribute to projects that push technological boundaries.
            </p>
            <div class="social-links">
                <a href="#" class="social-icon"><i class='bx bxl-linkedin'></i></a>
                <a href="#" class="social-icon"><i class='bx bxl-github'></i></a>
                <a href="#" class="social-icon"><i class='bx bxl-facebook'></i></a>
                <a href="#" class="social-icon"><i class='bx bxl-instagram'></i></a>
                <a href="#" class="social-icon"><i class='bx bxl-whatsapp'></i></a>
            </div>
            <div class="cta-buttons">
                <a href="#" class="btn download"><i class='bx bx-download'></i> Download CV</a>
                <a href="#lets-connect" class="btn hire"><i class='bx bx-send'></i> Hire Me</a>
            </div>
        </div>
        <div class="image-content">
            <div class="profile-image">
                <img src="profile-image.png" alt="Profile Image">
            </div>
        </div>
    </div>
</div>

<style>
:root {
    --primary-color: #0ef;
    --bg-color: #1f242d;
    --text-color: #fff;
    --secondary-color: rgba(255, 255, 255, 0.1);
}

body {
    font-family: 'Open Sans', sans-serif;
    background: var(--bg-color);
    color: var(--text-color);
    margin: 0;
    padding: 0;
}

.hero-section {
    width: 100%;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--bg-color);
    padding: 0 20px;
}

.content-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    width: 100%;
    gap: 20px;
}

.text-content {
    flex: 1;
    max-width: 600px;
    padding: 20px;
}

.subtitle {
    font-size: 1.2rem;
    color: var(--primary-color);
    text-transform: uppercase;
    margin-bottom: 10px;
    letter-spacing: 2px;
}

.title {
    font-size: 3rem;
    font-weight: bold;
    margin-bottom: 20px;
    color: var(--text-color);
}

.description {
    font-size: 1rem;
    line-height: 1.8;
    margin-bottom: 20px;
    color: rgba(255, 255, 255, 0.8);
}

.social-links {
    display: flex;
    gap: 10px;
    margin-bottom: 20px;
}

.social-icon {
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--secondary-color);
    border-radius: 50%;
    color: var(--primary-color);
    font-size: 1.2rem;
    transition: all 0.3s;
    text-decoration: none;
}

.social-icon:hover {
    background: var(--primary-color);
    color: var(--bg-color);
}

.cta-buttons {
    display: flex;
    gap: 20px;
}

.btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 20px;
    background: var(--primary-color);
    color: var(--bg-color);
    border: none;
    border-radius: 30px;
    font-weight: bold;
    text-decoration: none;
    transition: all 0.3s;
}

.btn.download {
    background: transparent;
    color: var(--primary-color);
    border: 2px solid var(--primary-color);
}

.btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0, 239, 239, 0.3);
}

.image-content {
    flex: 1;
    display: flex;
    align-items: center;
    justify-content: center;
}

.profile-image {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    background: var(--secondary-color);
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
}

.profile-image img {
    width: 90%;
    height: 90%;
    border-radius: 50%;
    object-fit: cover;
}

@media (max-width: 768px) {
    .content-container {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .text-content {
        padding: 10px;
    }

    .image-content {
        margin-top: 20px;
    }

    .profile-image {
        width: 200px;
        height: 200px;
    }
}
</style>
