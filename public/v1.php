<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BePurposed Collective | Home</title>

  <style>
    :root {
      --cream: #faf3ed;
      --blush: #faeae2;
      --taupe: #907168;
      --espresso: #32241f;
      --muted: #6f5d57;
      --white: #ffffff;
      --line: rgba(50, 36, 31, 0.12);
      --shadow: 0 24px 70px rgba(50, 36, 31, 0.12);
      --radius: 28px;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
    }

    body {
      font-family: Georgia, 'Times New Roman', serif;
      background: var(--cream);
      color: var(--espresso);
      line-height: 1.6;
    }

    a {
      color: inherit;
      text-decoration: none;
    }

    button,
    input,
    textarea {
      font: inherit;
    }

    .site-shell {
      overflow: hidden;
    }

    .container {
      width: min(1180px, calc(100% - 40px));
      margin: 0 auto;
    }

    .announcement {
      background: var(--espresso);
      color: var(--blush);
      text-align: center;
      padding: 10px 18px;
      font-size: 0.9rem;
      letter-spacing: 0.04em;
    }

    .navbar {
      position: sticky;
      top: 0;
      z-index: 20;
      background: rgba(250, 243, 237, 0.88);
      backdrop-filter: blur(18px);
      border-bottom: 1px solid var(--line);
    }

    .nav-inner {
      min-height: 82px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 26px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 700;
      letter-spacing: 0.05em;
      text-transform: uppercase;
    }

    .brand-mark {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--taupe), #c9a99d);
      display: grid;
      place-items: center;
      color: var(--white);
      font-size: 0.95rem;
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 28px;
      font-family: Arial, sans-serif;
      font-size: 0.92rem;
      color: var(--muted);
    }

    .nav-links a {
      transition: color 0.2s ease;
    }

    .nav-links a:hover {
      color: var(--espresso);
    }

    .nav-cta {
      padding: 12px 20px;
      border-radius: 999px;
      background: var(--espresso);
      color: var(--white) !important;
      box-shadow: 0 12px 28px rgba(50, 36, 31, 0.18);
    }

    .menu-toggle {
      display: none;
      border: 1px solid var(--line);
      background: var(--white);
      border-radius: 999px;
      padding: 10px 14px;
      cursor: pointer;
      font-family: Arial, sans-serif;
    }

    .hero {
      position: relative;
      padding: 96px 0 86px;
    }

    .hero::before {
      content: '';
      position: absolute;
      top: -120px;
      right: -220px;
      width: 560px;
      height: 560px;
      border-radius: 50%;
      background: var(--blush);
      z-index: -1;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.08fr 0.92fr;
      gap: 56px;
      align-items: center;
    }

    .eyebrow {
      font-family: Arial, sans-serif;
      text-transform: uppercase;
      letter-spacing: 0.16em;
      color: var(--taupe);
      font-weight: 700;
      font-size: 0.78rem;
      margin-bottom: 18px;
    }

    .hero h1 {
      font-size: clamp(3rem, 7vw, 6.8rem);
      line-height: 0.94;
      letter-spacing: -0.07em;
      max-width: 760px;
      margin-bottom: 26px;
    }

    .hero h1 span {
      color: var(--taupe);
      font-style: italic;
      letter-spacing: -0.05em;
    }

    .hero-copy {
      font-family: Arial, sans-serif;
      color: var(--muted);
      font-size: 1.08rem;
      max-width: 610px;
      margin-bottom: 34px;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      align-items: center;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 52px;
      padding: 0 24px;
      border-radius: 999px;
      font-family: Arial, sans-serif;
      font-weight: 700;
      border: 1px solid transparent;
      transition: transform 0.2s ease, box-shadow 0.2s ease, background 0.2s ease;
      cursor: pointer;
    }

    .btn:hover {
      transform: translateY(-2px);
    }

    .btn-primary {
      background: var(--espresso);
      color: var(--white);
      box-shadow: 0 18px 42px rgba(50, 36, 31, 0.22);
    }

    .btn-secondary {
      background: transparent;
      color: var(--espresso);
      border-color: var(--line);
    }

    .hero-card {
      background: var(--white);
      border-radius: var(--radius);
      padding: 26px;
      box-shadow: var(--shadow);
      border: 1px solid var(--line);
      position: relative;
    }

    .portrait-card {
      min-height: 520px;
      border-radius: 24px;
      background:
        linear-gradient(rgba(50, 36, 31, 0.12), rgba(50, 36, 31, 0.28)),
        url('https://images.unsplash.com/photo-1551836022-d5d88e9218df?auto=format&fit=crop&w=1000&q=80');
      background-size: cover;
      background-position: center;
      display: flex;
      align-items: flex-end;
      padding: 24px;
      color: var(--white);
      overflow: hidden;
    }

    .floating-note {
      background: rgba(255, 255, 255, 0.9);
      color: var(--espresso);
      border-radius: 22px;
      padding: 22px;
      max-width: 330px;
      backdrop-filter: blur(12px);
    }

    .floating-note strong {
      display: block;
      font-size: 1.5rem;
      line-height: 1.1;
      margin-bottom: 8px;
    }

    .floating-note p {
      font-family: Arial, sans-serif;
      color: var(--muted);
      font-size: 0.92rem;
    }

    .stats-row {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 14px;
      margin-top: 16px;
    }

    .stat {
      background: var(--blush);
      border-radius: 20px;
      padding: 18px;
    }

    .stat strong {
      display: block;
      font-size: 1.7rem;
      line-height: 1;
    }

    .stat span {
      font-family: Arial, sans-serif;
      color: var(--muted);
      font-size: 0.82rem;
    }

    .section {
      padding: 84px 0;
    }

    .section-header {
      display: flex;
      align-items: flex-end;
      justify-content: space-between;
      gap: 28px;
      margin-bottom: 34px;
    }

    .section-header h2 {
      font-size: clamp(2.2rem, 4vw, 4.2rem);
      line-height: 1;
      letter-spacing: -0.05em;
      max-width: 700px;
    }

    .section-header p {
      font-family: Arial, sans-serif;
      color: var(--muted);
      max-width: 430px;
    }

    .pillars {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }

    .pillar-card {
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: var(--radius);
      padding: 32px;
      min-height: 300px;
      transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .pillar-card:hover {
      transform: translateY(-6px);
      box-shadow: var(--shadow);
    }

    .pillar-number {
      font-family: Arial, sans-serif;
      color: var(--taupe);
      font-size: 0.82rem;
      letter-spacing: 0.12em;
      margin-bottom: 44px;
    }

    .pillar-card h3 {
      font-size: 2rem;
      margin-bottom: 14px;
    }

    .pillar-card p {
      font-family: Arial, sans-serif;
      color: var(--muted);
      font-size: 0.98rem;
    }

    .experience {
      background: var(--espresso);
      color: var(--white);
      border-radius: 44px;
      padding: 58px;
      display: grid;
      grid-template-columns: 0.9fr 1.1fr;
      gap: 46px;
      align-items: start;
    }

    .experience h2 {
      font-size: clamp(2.2rem, 4vw, 4.8rem);
      line-height: 0.98;
      letter-spacing: -0.05em;
      margin-bottom: 20px;
    }

    .experience p {
      font-family: Arial, sans-serif;
      color: rgba(255, 255, 255, 0.72);
    }

    .timeline {
      display: grid;
      gap: 16px;
    }

    .timeline-item {
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.14);
      border-radius: 24px;
      padding: 24px;
    }

    .timeline-item small {
      font-family: Arial, sans-serif;
      color: var(--blush);
      text-transform: uppercase;
      letter-spacing: 0.12em;
    }

    .timeline-item h3 {
      font-size: 1.5rem;
      margin: 8px 0;
    }

    .split-cta {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 26px;
      align-items: center;
      background: var(--blush);
      border-radius: 44px;
      padding: 54px;
    }

    .split-cta h2 {
      font-size: clamp(2.2rem, 4vw, 4.5rem);
      line-height: 1;
      letter-spacing: -0.05em;
      margin-bottom: 20px;
    }

    .split-cta p {
      font-family: Arial, sans-serif;
      color: var(--muted);
      margin-bottom: 26px;
    }

    .contact-card {
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: var(--radius);
      padding: 28px;
      box-shadow: var(--shadow);
    }

    .form-row {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 14px;
    }

    .field {
      margin-bottom: 14px;
    }

    .field label {
      display: block;
      font-family: Arial, sans-serif;
      color: var(--muted);
      font-size: 0.82rem;
      margin-bottom: 8px;
    }

    .field input,
    .field textarea {
      width: 100%;
      border: 1px solid var(--line);
      border-radius: 16px;
      background: #fffaf7;
      padding: 14px 15px;
      color: var(--espresso);
      outline: none;
      font-family: Arial, sans-serif;
    }

    .field textarea {
      min-height: 120px;
      resize: vertical;
    }

    footer {
      padding: 38px 0;
      border-top: 1px solid var(--line);
      font-family: Arial, sans-serif;
      color: var(--muted);
    }

    .footer-inner {
      display: flex;
      justify-content: space-between;
      align-items: center;
      gap: 20px;
      flex-wrap: wrap;
    }

    @media (max-width: 920px) {
      .menu-toggle {
        display: inline-flex;
      }

      .nav-links {
        position: absolute;
        left: 20px;
        right: 20px;
        top: 92px;
        display: none;
        flex-direction: column;
        align-items: stretch;
        background: var(--white);
        border: 1px solid var(--line);
        border-radius: 24px;
        padding: 22px;
        box-shadow: var(--shadow);
      }

      .nav-links.is-open {
        display: flex;
      }

      .hero-grid,
      .experience,
      .split-cta {
        grid-template-columns: 1fr;
      }

      .pillars,
      .stats-row {
        grid-template-columns: 1fr;
      }

      .section-header {
        display: block;
      }

      .section-header p {
        margin-top: 18px;
      }
    }

    @media (max-width: 640px) {
      .container {
        width: min(100% - 28px, 1180px);
      }

      .hero {
        padding: 64px 0;
      }

      .portrait-card {
        min-height: 420px;
      }

      .experience,
      .split-cta {
        padding: 32px 22px;
        border-radius: 30px;
      }

      .form-row {
        grid-template-columns: 1fr;
      }
    }

    
  </style>
</head>

<body>
  <div class="site-shell">
    <div class="announcement">
      Now welcoming leaders, founders, and purpose-driven professionals ready to be seen at the level they operate.
    </div>

    <header class="navbar">
      <div class="container nav-inner">
        <a href="#home" class="brand">
          <span class="brand-mark">BP</span>
          <span>BePurposed</span>
        </a>

        <button class="menu-toggle" id="menuToggle" type="button">Menu</button>

        <nav class="nav-links" id="navLinks">
          <a href="#home">Home</a>
          <a href="#about">About</a>
          <a href="#work">Work With Us</a>
          <a href="#products">Products</a>
          <a href="#contact">Contact</a>
          <a href="#contact" class="nav-cta">Apply Now</a>
        </nav>
      </div>
    </header>

    <main id="home">
      <section class="hero">
        <div class="container hero-grid">
          <div>
            <p class="eyebrow">Leadership coaching • visibility • positioning</p>
            <h1>Your work is meaningful. <span>Make it visible.</span></h1>
            <p class="hero-copy">
              BePurposed Collective helps leaders clarify their message, strengthen their positioning, and step into the rooms, platforms, and conversations their work deserves.
            </p>
            <div class="hero-actions">
              <a href="#contact" class="btn btn-primary">Start the Conversation</a>
              <a href="#work" class="btn btn-secondary">Explore the Process</a>
            </div>
          </div>

          <div class="hero-card">
            <div class="portrait-card">
              <div class="floating-note">
                <strong>Positioning for leaders with purpose.</strong>
                <p>Clarity, presence, and visibility built around the person behind the work.</p>
              </div>
            </div>
            <div class="stats-row">
              <div class="stat">
                <strong>01</strong>
                <span>Clarify your voice</span>
              </div>
              <div class="stat">
                <strong>02</strong>
                <span>Build authority</span>
              </div>
              <div class="stat">
                <strong>03</strong>
                <span>Expand your reach</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section" id="about">
        <div class="container">
          <div class="section-header">
            <h2>For leaders whose visibility has not caught up with their impact.</h2>
            <p>
              This is not more content for the sake of content. BePurposed is built to help serious leaders think clearly, communicate with authority, and become easier to understand, trust, and refer.
            </p>
          </div>
        </div>
      </section>

      <section class="section" id="work">
        <div class="container">
          <div class="section-header">
            <h2>The BePurposed Method</h2>
            <p>Three connected pillars designed to move your leadership from internal clarity to public visibility.</p>
          </div>

          <div class="pillars">
            <article class="pillar-card">
              <div class="pillar-number">PILLAR 01</div>
              <h3>Architect</h3>
              <p>Executive coaching and guided reflection to clarify the person behind the role, the decisions being made, and the message that needs to be heard.</p>
            </article>

            <article class="pillar-card">
              <div class="pillar-number">PILLAR 02</div>
              <h3>Press</h3>
              <p>Thoughtful written visibility through articles, features, and positioning work that makes your experience easier to understand and share.</p>
            </article>

            <article class="pillar-card">
              <div class="pillar-number">PILLAR 03</div>
              <h3>Stage</h3>
              <p>Podcast, speaking, and platform opportunities that connect your voice to the people and rooms where your message belongs.</p>
            </article>
          </div>
        </div>
      </section>

      <section class="section">
        <div class="container">
          <div class="experience">
            <div>
              <p class="eyebrow">90-day leadership visibility journey</p>
              <h2>From unclear to positioned.</h2>
              <p>
                The process is built for people who already carry responsibility but need their public presence to reflect the level they actually operate.
              </p>
            </div>

            <div class="timeline">
              <div class="timeline-item">
                <small>Phase One</small>
                <h3>Extract the truth</h3>
                <p>Clarify your story, leadership thesis, message, and the ideas that should anchor your visibility.</p>
              </div>
              <div class="timeline-item">
                <small>Phase Two</small>
                <h3>Shape the message</h3>
                <p>Refine your positioning into usable language, written content, and a stronger public-facing narrative.</p>
              </div>
              <div class="timeline-item">
                <small>Phase Three</small>
                <h3>Amplify the voice</h3>
                <p>Turn clarity into authority through published work, conversation, and platform opportunities.</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section" id="products">
        <div class="container">
          <div class="section-header">
            <h2>Built around your next level of visibility.</h2>
            <p>
              Whether through coaching, publication, podcast features, or future resources, every offer is designed to help your work become clearer and more visible.
            </p>
          </div>
        </div>
      </section>

      <section class="section" id="contact">
        <div class="container">
          <div class="split-cta">
            <div>
              <p class="eyebrow">Work with BePurposed</p>
              <h2>Ready to be seen clearly?</h2>
              <p>
                Start with a simple conversation. Tell us what you are building, where your message feels unclear, and what kind of visibility you are ready for.
              </p>
            </div>

            <form class="contact-card" method="post" action="#">
              <div class="form-row">
                <div class="field">
                  <label for="firstName">First name</label>
                  <input id="firstName" name="first_name" type="text" placeholder="Your name" />
                </div>
                <div class="field">
                  <label for="email">Email</label>
                  <input id="email" name="email" type="email" placeholder="you@email.com" />
                </div>
              </div>

              <div class="field">
                <label for="role">What are you building or leading?</label>
                <input id="role" name="role" type="text" placeholder="Company, role, project, or mission" />
              </div>

              <div class="field">
                <label for="message">Where do you feel underseen?</label>
                <textarea id="message" name="message" placeholder="Tell us what feels unclear or ready for growth."></textarea>
              </div>

              <button class="btn btn-primary" type="submit">Request a Conversation</button>
            </form>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <div class="container footer-inner">
        <p>© <span id="year"></span> BePurposed Collective. All rights reserved.</p>
        <p>Architect • Press • Stage</p>
      </div>
    </footer>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const menuToggle = document.getElementById('menuToggle');
      const navLinks = document.getElementById('navLinks');
      const year = document.getElementById('year');

      year.textContent = new Date().getFullYear();

      menuToggle.addEventListener('click', function () {
        navLinks.classList.toggle('is-open');
      });

      navLinks.querySelectorAll('a').forEach(function (link) {
        link.addEventListener('click', function () {
          navLinks.classList.remove('is-open');
        });
      });
    });
  </script>
</body>
</html>
