<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BePurposed Collective | High Conversion Home</title>

  <style>
    :root {
      --cream: #f8efe8;
      --paper: #fffaf6;
      --blush: #faeae2;
      --clay: #b68878;
      --taupe: #907168;
      --espresso: #2f211d;
      --muted: #715f58;
      --white: #ffffff;
      --line: rgba(47, 33, 29, 0.13);
      --shadow: 0 24px 65px rgba(47, 33, 29, 0.13);
      --radius: 26px;
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
      font-family: Inter, Arial, sans-serif;
      background: var(--cream);
      color: var(--espresso);
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    button,
    input,
    textarea {
      font: inherit;
    }

    .container {
      width: min(1160px, calc(100% - 40px));
      margin: 0 auto;
    }

    .top-strip {
      background: var(--espresso);
      color: var(--blush);
      text-align: center;
      padding: 10px 16px;
      font-size: 0.88rem;
      font-weight: 700;
    }

    .navbar {
      position: sticky;
      top: 0;
      z-index: 50;
      background: rgba(248, 239, 232, 0.9);
      backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--line);
    }

    .nav-inner {
      min-height: 78px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 24px;
    }

    .brand {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 900;
      letter-spacing: -0.03em;
      font-size: 1.15rem;
    }

    .brand-mark {
      width: 42px;
      height: 42px;
      border-radius: 15px;
      background: var(--espresso);
      color: var(--white);
      display: grid;
      place-items: center;
      font-size: 0.9rem;
      box-shadow: 0 14px 28px rgba(47, 33, 29, 0.18);
    }

    .nav-links {
      display: flex;
      align-items: center;
      gap: 26px;
      color: var(--muted);
      font-size: 0.93rem;
      font-weight: 700;
    }

    .nav-links a:hover {
      color: var(--espresso);
    }

    .nav-cta {
      background: var(--espresso);
      color: var(--white) !important;
      padding: 12px 20px;
      border-radius: 999px;
      box-shadow: 0 14px 32px rgba(47, 33, 29, 0.2);
    }

    .menu-toggle {
      display: none;
      border: 1px solid var(--line);
      background: var(--white);
      padding: 10px 14px;
      border-radius: 999px;
      cursor: pointer;
      font-weight: 800;
    }

    .hero {
      position: relative;
      padding: 82px 0 70px;
      overflow: hidden;
    }

    .hero::before {
      content: '';
      position: absolute;
      width: 720px;
      height: 720px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(250, 234, 226, 1), rgba(250, 234, 226, 0));
      right: -260px;
      top: -260px;
      z-index: -1;
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1fr 430px;
      gap: 54px;
      align-items: center;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: var(--white);
      border: 1px solid var(--line);
      color: var(--taupe);
      padding: 10px 14px;
      border-radius: 999px;
      font-size: 0.82rem;
      font-weight: 900;
      margin-bottom: 22px;
      box-shadow: 0 10px 30px rgba(47, 33, 29, 0.06);
    }

    .badge-dot {
      width: 9px;
      height: 9px;
      border-radius: 50%;
      background: var(--clay);
    }

    .hero h1 {
      font-family: Georgia, 'Times New Roman', serif;
      font-size: clamp(3rem, 7vw, 6.4rem);
      line-height: 0.94;
      letter-spacing: -0.075em;
      max-width: 760px;
      margin-bottom: 24px;
    }

    .hero h1 span {
      color: var(--taupe);
      font-style: italic;
    }

    .hero-copy {
      color: var(--muted);
      font-size: 1.1rem;
      max-width: 640px;
      margin-bottom: 30px;
    }

    .hero-actions {
      display: flex;
      flex-wrap: wrap;
      gap: 14px;
      align-items: center;
      margin-bottom: 28px;
    }

    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      min-height: 54px;
      padding: 0 24px;
      border-radius: 999px;
      border: 1px solid transparent;
      font-weight: 900;
      cursor: pointer;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .btn:hover {
      transform: translateY(-2px);
    }

    .btn-primary {
      background: var(--espresso);
      color: var(--white);
      box-shadow: 0 18px 42px rgba(47, 33, 29, 0.22);
    }

    .btn-secondary {
      background: var(--white);
      color: var(--espresso);
      border-color: var(--line);
    }

    .trust-row {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
      color: var(--muted);
      font-size: 0.9rem;
      font-weight: 700;
    }

    .trust-row span {
      background: rgba(255, 255, 255, 0.72);
      border: 1px solid var(--line);
      padding: 9px 12px;
      border-radius: 999px;
    }

    .lead-card {
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: 34px;
      padding: 30px;
      box-shadow: var(--shadow);
      position: relative;
    }

    .lead-card::before {
      content: 'Apply';
      position: absolute;
      top: -18px;
      right: 28px;
      background: var(--clay);
      color: var(--white);
      padding: 8px 16px;
      border-radius: 999px;
      font-size: 0.78rem;
      font-weight: 900;
      letter-spacing: 0.08em;
      text-transform: uppercase;
    }

    .lead-card h2 {
      font-family: Georgia, 'Times New Roman', serif;
      font-size: 2rem;
      line-height: 1.05;
      letter-spacing: -0.04em;
      margin-bottom: 10px;
    }

    .lead-card p {
      color: var(--muted);
      margin-bottom: 20px;
      font-size: 0.95rem;
    }

    .field {
      margin-bottom: 13px;
    }

    .field label {
      display: block;
      font-size: 0.78rem;
      color: var(--muted);
      font-weight: 800;
      margin-bottom: 7px;
    }

    .field input,
    .field textarea,
    .field select {
      width: 100%;
      border: 1px solid var(--line);
      background: var(--paper);
      border-radius: 16px;
      padding: 13px 14px;
      outline: none;
      color: var(--espresso);
    }

    .field textarea {
      min-height: 104px;
      resize: vertical;
    }

    .lead-card .btn {
      width: 100%;
      margin-top: 4px;
    }

    .privacy-note {
      text-align: center;
      font-size: 0.78rem !important;
      margin: 13px 0 0 !important;
    }

    .section {
      padding: 78px 0;
    }

    .section-heading {
      text-align: center;
      max-width: 760px;
      margin: 0 auto 36px;
    }

    .eyebrow {
      color: var(--taupe);
      text-transform: uppercase;
      letter-spacing: 0.16em;
      font-size: 0.78rem;
      font-weight: 900;
      margin-bottom: 12px;
    }

    .section-heading h2,
    .split h2,
    .final-cta h2 {
      font-family: Georgia, 'Times New Roman', serif;
      font-size: clamp(2.2rem, 4.7vw, 4.5rem);
      line-height: 1;
      letter-spacing: -0.06em;
      margin-bottom: 16px;
    }

    .section-heading p,
    .split p,
    .final-cta p {
      color: var(--muted);
      font-size: 1rem;
    }

    .pain-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 16px;
    }

    .pain-card {
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: var(--radius);
      padding: 26px;
      min-height: 220px;
    }

    .pain-icon {
      width: 46px;
      height: 46px;
      border-radius: 16px;
      background: var(--blush);
      display: grid;
      place-items: center;
      margin-bottom: 22px;
      font-weight: 900;
      color: var(--taupe);
    }

    .pain-card h3 {
      font-size: 1.25rem;
      margin-bottom: 10px;
      letter-spacing: -0.03em;
    }

    .pain-card p {
      color: var(--muted);
      font-size: 0.95rem;
    }

    .split {
      display: grid;
      grid-template-columns: 0.95fr 1.05fr;
      gap: 28px;
      align-items: center;
      background: var(--espresso);
      color: var(--white);
      border-radius: 42px;
      padding: 54px;
      overflow: hidden;
      position: relative;
    }

    .split::after {
      content: '';
      position: absolute;
      width: 420px;
      height: 420px;
      border-radius: 50%;
      background: rgba(250, 234, 226, 0.08);
      right: -170px;
      bottom: -200px;
    }

    .split p {
      color: rgba(255, 255, 255, 0.72);
      max-width: 500px;
    }

    .process-list {
      display: grid;
      gap: 14px;
      position: relative;
      z-index: 1;
    }

    .process-item {
      display: grid;
      grid-template-columns: 54px 1fr;
      gap: 16px;
      align-items: start;
      background: rgba(255, 255, 255, 0.08);
      border: 1px solid rgba(255, 255, 255, 0.14);
      border-radius: 24px;
      padding: 20px;
    }

    .process-number {
      width: 54px;
      height: 54px;
      border-radius: 18px;
      background: var(--blush);
      color: var(--espresso);
      display: grid;
      place-items: center;
      font-weight: 900;
    }

    .process-item h3 {
      margin-bottom: 5px;
    }

    .process-item p {
      font-size: 0.93rem;
    }

    .outcomes {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 14px;
    }

    .outcome-card {
      background: var(--paper);
      border: 1px solid var(--line);
      border-radius: 24px;
      padding: 24px;
    }

    .outcome-card strong {
      display: block;
      font-family: Georgia, 'Times New Roman', serif;
      font-size: 2.4rem;
      line-height: 1;
      color: var(--taupe);
      margin-bottom: 14px;
    }

    .outcome-card span {
      display: block;
      font-weight: 900;
      margin-bottom: 8px;
    }

    .outcome-card p {
      color: var(--muted);
      font-size: 0.92rem;
    }

    .testimonial-wrap {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 18px;
    }

    .testimonial {
      background: var(--white);
      border: 1px solid var(--line);
      border-radius: var(--radius);
      padding: 30px;
      box-shadow: 0 14px 35px rgba(47, 33, 29, 0.06);
    }

    .quote {
      font-family: Georgia, 'Times New Roman', serif;
      font-size: 1.55rem;
      line-height: 1.25;
      letter-spacing: -0.035em;
      margin-bottom: 24px;
    }

    .person {
      display: flex;
      align-items: center;
      gap: 12px;
      color: var(--muted);
      font-size: 0.93rem;
      font-weight: 800;
    }

    .avatar {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--clay), var(--taupe));
    }

    .final-cta {
      text-align: center;
      background: var(--blush);
      border-radius: 42px;
      padding: 64px 28px;
      border: 1px solid var(--line);
    }

    .final-cta p {
      max-width: 680px;
      margin: 0 auto 28px;
    }

    footer {
      padding: 34px 0;
      border-top: 1px solid var(--line);
      color: var(--muted);
      font-size: 0.92rem;
    }

    .footer-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 16px;
    }

    @media (max-width: 980px) {
      .menu-toggle {
        display: inline-flex;
      }

      .nav-links {
        position: absolute;
        left: 20px;
        right: 20px;
        top: 88px;
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
      .split,
      .testimonial-wrap {
        grid-template-columns: 1fr;
      }

      .pain-grid,
      .outcomes {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 640px) {
      .container {
        width: min(100% - 28px, 1160px);
      }

      .hero {
        padding: 58px 0 54px;
      }

      .pain-grid,
      .outcomes {
        grid-template-columns: 1fr;
      }

      .split {
        padding: 34px 22px;
        border-radius: 30px;
      }

      .lead-card {
        padding: 24px;
        border-radius: 28px;
      }
    }

    
  </style>
</head>

<body>
  <div class="top-strip">
    Limited founding client conversations now open for BePurposed Collective.
  </div>

  <header class="navbar">
    <div class="container nav-inner">
      <a href="#home" class="brand">
        <span class="brand-mark">BP</span>
        <span>BePurposed Collective</span>
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
          <div class="badge"><span class="badge-dot"></span> For founders, executives, and purpose-driven leaders</div>
          <h1>Stop being underseen for work that already matters.</h1>
          <p class="hero-copy">
            BePurposed Collective helps serious leaders clarify their message, publish their perspective, and access the platforms that make their work easier to understand, trust, and refer.
          </p>

          <div class="hero-actions">
            <a href="#contact" class="btn btn-primary">Request a Conversation</a>
            <a href="#work" class="btn btn-secondary">See How It Works</a>
          </div>

          <div class="trust-row">
            <span>Executive coaching</span>
            <span>Thought leadership</span>
            <span>Podcast & platform visibility</span>
          </div>
        </div>

        <form class="lead-card" id="contact" method="post" action="#">
          <h2>Find out if BePurposed is the right fit.</h2>
          <p>Share a few details and we’ll start with a simple conversation.</p>

          <div class="field">
            <label for="name">Name</label>
            <input id="name" name="name" type="text" placeholder="Your full name" />
          </div>

          <div class="field">
            <label for="email">Email</label>
            <input id="email" name="email" type="email" placeholder="you@email.com" />
          </div>

          <div class="field">
            <label for="focus">What kind of support are you looking for?</label>
            <select id="focus" name="focus">
              <option value="">Choose one</option>
              <option>Leadership clarity</option>
              <option>Public visibility</option>
              <option>Publishing / press</option>
              <option>Podcast or speaking opportunities</option>
              <option>Not sure yet</option>
            </select>
          </div>

          <div class="field">
            <label for="message">What are you building or leading?</label>
            <textarea id="message" name="message" placeholder="Tell us briefly about your work."></textarea>
          </div>

          <button class="btn btn-primary" type="submit">Apply for a Conversation</button>
          <p class="privacy-note">No spam. Just a clear next step.</p>
        </form>
      </div>
    </section>

    <section class="section" id="about">
      <div class="container">
        <div class="section-heading">
          <p class="eyebrow">The problem</p>
          <h2>Your work may be strong, but your positioning may not be carrying it.</h2>
          <p>Many capable leaders are not lacking value. They are lacking clarity, language, and the right containers for their voice.</p>
        </div>

        <div class="pain-grid">
          <article class="pain-card">
            <div class="pain-icon">01</div>
            <h3>You are hard to explain.</h3>
            <p>Your work has depth, but people do not immediately understand what you do, why it matters, or who should know about it.</p>
          </article>

          <article class="pain-card">
            <div class="pain-icon">02</div>
            <h3>Your visibility feels scattered.</h3>
            <p>You have ideas, experience, and credibility, but your message is not organized into a clear public presence.</p>
          </article>

          <article class="pain-card">
            <div class="pain-icon">03</div>
            <h3>Your voice needs a stronger stage.</h3>
            <p>You are ready for bigger conversations, but you need the right story, format, and platform to get there.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section" id="work">
      <div class="container">
        <div class="split">
          <div>
            <p class="eyebrow">How BePurposed works</p>
            <h2>One ecosystem. Three moves.</h2>
            <p>
              BePurposed is built to move leaders from internal clarity to external authority through coaching, publication, and platform access.
            </p>
          </div>

          <div class="process-list">
            <div class="process-item">
              <div class="process-number">1</div>
              <div>
                <h3>Architect your message</h3>
                <p>Clarify what you are building, how you lead, and the core perspective people need to hear from you.</p>
              </div>
            </div>

            <div class="process-item">
              <div class="process-number">2</div>
              <div>
                <h3>Publish your authority</h3>
                <p>Turn your experience into written thought leadership that strengthens credibility and referral confidence.</p>
              </div>
            </div>

            <div class="process-item">
              <div class="process-number">3</div>
              <div>
                <h3>Amplify your voice</h3>
                <p>Use podcast, speaking, and platform opportunities to bring your message into the right conversations.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section" id="products">
      <div class="container">
        <div class="section-heading">
          <p class="eyebrow">What you walk away with</p>
          <h2>A clearer message, stronger authority, and a public presence you can actually use.</h2>
        </div>

        <div class="outcomes">
          <article class="outcome-card">
            <strong>01</strong>
            <span>Clear positioning</span>
            <p>Language that explains who you are, what you do, and why your work matters.</p>
          </article>

          <article class="outcome-card">
            <strong>02</strong>
            <span>Published perspective</span>
            <p>A refined thought-leadership piece that captures your voice and strengthens credibility.</p>
          </article>

          <article class="outcome-card">
            <strong>03</strong>
            <span>Platform readiness</span>
            <p>A message that can move into podcasts, speaking opportunities, and public conversations.</p>
          </article>

          <article class="outcome-card">
            <strong>04</strong>
            <span>Strategic momentum</span>
            <p>A clearer direction for what to say next, who to reach, and how to keep showing up.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section-heading">
          <p class="eyebrow">Client-ready trust section</p>
          <h2>Designed for leaders who want substance before spotlight.</h2>
        </div>

        <div class="testimonial-wrap">
          <article class="testimonial">
            <p class="quote">“I finally had language for the work I was already doing, and a clearer way to explain why it mattered.”</p>
            <div class="person">
              <span class="avatar"></span>
              <span>Founder / Executive Client</span>
            </div>
          </article>

          <article class="testimonial">
            <p class="quote">“The process helped me turn scattered ideas into a message I could actually use in rooms that mattered.”</p>
            <div class="person">
              <span class="avatar"></span>
              <span>Business Owner / Thought Leader</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="final-cta">
          <p class="eyebrow">Start here</p>
          <h2>Ready to become easier to understand, trust, and refer?</h2>
          <p>
            If your work already carries weight, the next step is making sure your message and visibility can carry it too.
          </p>
          <a href="#contact" class="btn btn-primary">Request a Conversation</a>
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
