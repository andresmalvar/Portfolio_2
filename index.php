<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Liobert Luis P. Malibiran | Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fff5e6;
      color: #333;
      line-height: 1.6;
      scroll-behavior: smooth;
    }
    a {
      text-decoration: none;
      color: inherit;
    }
    img {
      max-width: 100%;
      display: block;
    }
    nav {
      background: white;
      padding: 1rem 0;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 4px rgba(0,0,0,0.05);
    }
    nav .container {
      display: flex;
      justify-content: center;
      gap: 2rem;
    }
    nav a {
      color: #ff7a00;
      font-weight: bold;
      transition: color 0.3s ease;
    }
    nav a:hover {
      color: #cc6600;
    }
    header.hero {
      background: linear-gradient(135deg, #ff944d, #ffb84d);
      color: white;
      text-align: center;
      padding: 4rem 1rem;
      animation: fadeSlideDown 1.2s ease-out;
    }
    .hero .profile-pic {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      object-fit: cover;
      border: 4px solid white;
      margin: 0 auto 1rem;
      animation: fadeIn 2s ease-in-out;
    }
    .hero h1 {
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }
    .hero p {
      font-size: 1.2rem;
      max-width: 600px;
      margin: 0 auto 1.5rem;
    }
    .btn {
      background: white;
      color: #ff7a00;
      padding: 0.7rem 1.5rem;
      border-radius: 30px;
      font-weight: bold;
      margin: 0.5rem;
      display: inline-block;
      transition: transform 0.3s ease, background 0.3s;
    }
    .btn:hover {
      background: #ffe0cc;
      transform: scale(1.05);
    }
    section {
      padding: 4rem 1rem;
      opacity: 0;
      animation: fadeInUp 1s ease forwards;
      animation-delay: 0.2s;
    }
    section:nth-child(odd) {
      background: #ffffff;
    }
    section:nth-child(even) {
      background: #fff2e0;
    }
    h2 {
      text-align: center;
      font-size: 2rem;
      color: #ff7a00;
      margin-bottom: 2rem;
    }
    .container {
      width: 90%;
      max-width: 1100px;
      margin: auto;
    }
    .project-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 2rem;
    }
    .card {
      background: white;
      padding: 2rem;
      border-radius: 15px;
      box-shadow: 0 6px 20px rgba(0,0,0,0.06);
      transition: transform 0.4s ease;
    }
    .card:hover {
      transform: scale(1.05);
    }
    ul.skills-list {
      list-style: none;
      padding: 0;
      text-align: center;
      font-size: 1.1rem;
    }
    ul.skills-list li {
      margin-bottom: 0.6rem;
    }
    blockquote {
      text-align: center;
      font-style: italic;
      max-width: 600px;
      margin: 0 auto;
      padding: 1rem;
      background: #ffe9d1;
      border-left: 4px solid #ff7a00;
      border-radius: 8px;
    }
    footer {
      text-align: center;
      padding: 2rem 1rem;
      background: #fff;
      font-size: 0.9rem;
      color: #666;
    }

    /* Animations */
    @keyframes fadeIn {
      0% { opacity: 0; }
      100% { opacity: 1; }
    }
    @keyframes fadeInUp {
      0% { opacity: 0; transform: translateY(40px); }
      100% { opacity: 1; transform: translateY(0); }
    }
    @keyframes fadeSlideDown {
      0% { opacity: 0; transform: translateY(-30px); }
      100% { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <!-- Hero -->
  <header class="hero">
    <img src="R.jpg" alt="Liobert Luis P. Malibiran" class="profile-pic" />
    <h1>Liobert Luis P. Malibiran</h1>
    <p>Creative Designer & Frontend Developer passionate about building clean, user-friendly websites.</p>
    <a href="#projects" class="btn">View Projects</a>
    <a href="#contact" class="btn">Contact Me</a>
    <a href="Liobert-Malibiran-Resume.pdf" class="btn" download>Download Resume</a>
  </header>

  <!-- Navbar -->
  <nav>
    <div class="container">
      <a href="#about">About</a>
      <a href="#skills">Skills</a>
      <a href="#projects">Projects</a>
      <a href="#testimonials">Testimonials</a>
      <a href="#contact">Contact</a>
    </div>
  </nav>

  <!-- About -->
  <section id="about">
    <div class="container">
      <h2>About Me</h2>
      <p>I'm a frontend developer and designer from the Philippines. I specialize in creating modern, responsive websites using HTML and CSS. I enjoy combining clean design with efficient code to build user-friendly digital experiences.</p>
      <p style="text-align: center;">📍 Based in Cuenca, Batangas | ✅ Available for freelance work</p>
    </div>
  </section>

  <!-- Skills -->
  <section id="skills">
    <div class="container">
      <h2>Skills</h2>
      <ul class="skills-list">
        <li>✅ HTML5 & CSS3</li>
        <li>✅ Responsive Web Design</li>
        <li>✅ UI/UX Design (Figma)</li>
        <li>✅ Version Control (Git)</li>
      </ul>
    </div>
  </section>

  <!-- Projects -->
  <section id="projects">
    <div class="container">
      <h2>Projects</h2>
      <div class="project-grid">
        <div class="card">
          <h3>Personal Portfolio</h3>
          <p>A fully responsive personal website built with HTML and CSS, showcasing my projects and contact info.</p>
        </div>
        <div class="card">
          <h3>Landing Page</h3>
          <p>A product landing page created with a mobile-first design, highlighting a clean layout and call-to-action focus.</p>
        </div>
        <div class="card">
          <h3>Design Mockup</h3>
          <p>Designed a user interface mockup using Figma and converted it into a functional layout using HTML/CSS.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials -->
  <section id="testimonials">
    <div class="container">
      <h2>What People Say</h2>
      <blockquote>
        "Liobert is a creative and reliable designer who always delivers great work!" – Client A
      </blockquote>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <h2>Contact Me</h2>
      <p style="text-align: center;">Want to work together or just say hi? Email me at <strong>malibiranlp@students.nu-lipa.edu.ph</strong></p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <p>&copy; 2025 Liobert Luis P. Malibiran. All rights reserved.</p>
  </footer>

</body>
</html>
