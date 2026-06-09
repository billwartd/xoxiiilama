<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>xoxiiilama — Your Universe of eBooks</title>
<link rel="stylesheet" href="css/style.css">
<meta name="description" content="Discover millions of eBooks. Bestsellers, new releases, free books and more. Your universe of reading awaits.">
<!-- Google Ads placeholder -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-XXXXXXXXXXXXXXXX" crossorigin="anonymous"></script>
</head>
<body>

<!-- HEADER -->
<header class="header">
  <div class="container header-inner">
    <a href="index.html" class="logo">
      <span class="logo-icon">📚</span>
      <span class="logo-text">Nimbori<span class="logo-accent">Lux</span></span>
    </a>
    <nav class="nav">
      <a href="index.html" class="nav-link active">Home</a>
      <a href="pages/bestsellers.html" class="nav-link">Bestsellers</a>
      <a href="pages/categories.html" class="nav-link">Categories</a>
      <a href="pages/free-ebooks.html" class="nav-link">Free eBooks</a>
      <a href="pages/about.html" class="nav-link">About</a>
    </nav>
    <div class="header-actions">
      <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search books, authors..." aria-label="Search books">
        <button id="searchBtn" class="search-btn" aria-label="Search">🔍</button>
      </div>
    </div>
    <button class="mobile-toggle" id="mobileToggle" aria-label="Menu">☰</button>
  </div>
</header>

<!-- HERO -->
<section class="hero">
  <div class="container hero-inner">
    <div class="hero-text">
      <h1>Discover Your Next<br><span class="gradient-text">Great Read</span></h1>
      <p>Millions of eBooks at your fingertips. From timeless classics to the latest bestsellers — your universe of reading starts here.</p>
      <div class="hero-cta">
        <a href="pages/bestsellers.html" class="btn btn-primary">Explore Bestsellers</a>
        <a href="pages/free-ebooks.html" class="btn btn-outline">Free eBooks</a>
      </div>
      <div class="hero-stats">
        <div class="stat"><span class="stat-num">5M+</span><span class="stat-label">Books</span></div>
        <div class="stat"><span class="stat-num">100K+</span><span class="stat-label">Authors</span></div>
        <div class="stat"><span class="stat-num">50K+</span><span class="stat-label">Free Titles</span></div>
      </div>
    </div>
    <div class="hero-books" id="heroBooks"></div>
  </div>
</section>

<!-- AD BANNER -->
<div class="ad-container container">
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="auto" data-full-width-responsive="true"></ins>
</div>

<!-- TRENDING NOW -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <h2>🔥 Trending Now</h2>
      <a href="pages/bestsellers.html" class="see-all">See All →</a>
    </div>
    <div class="book-grid" id="trendingGrid"></div>
  </div>
</section>

<!-- CATEGORIES -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <h2>📖 Browse by Category</h2>
      <a href="pages/categories.html" class="see-all">All Categories →</a>
    </div>
    <div class="category-grid">
      <a href="pages/categories.html?cat=fiction" class="category-card">
        <span class="cat-icon">✍️</span>
        <span class="cat-name">Fiction</span>
      </a>
      <a href="pages/categories.html?cat=romance" class="category-card">
        <span class="cat-icon">❤️</span>
        <span class="cat-name">Romance</span>
      </a>
      <a href="pages/categories.html?cat=mystery" class="category-card">
        <span class="cat-icon">🔍</span>
        <span class="cat-name">Mystery</span>
      </a>
      <a href="pages/categories.html?cat=science" class="category-card">
        <span class="cat-icon">🔬</span>
        <span class="cat-name">Science</span>
      </a>
      <a href="pages/categories.html?cat=history" class="category-card">
        <span class="cat-icon">🏛️</span>
        <span class="cat-name">History</span>
      </a>
      <a href="pages/categories.html?cat=self-help" class="category-card">
        <span class="cat-icon">💡</span>
        <span class="cat-name">Self-Help</span>
      </a>
      <a href="pages/categories.html?cat=fantasy" class="category-card">
        <span class="cat-icon">🐉</span>
        <span class="cat-name">Fantasy</span>
      </a>
      <a href="pages/categories.html?cat=biography" class="category-card">
        <span class="cat-icon">👤</span>
        <span class="cat-name">Biography</span>
      </a>
    </div>
  </div>
</section>

<!-- AD BANNER 2 -->
<div class="ad-container container">
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="auto" data-full-width-responsive="true"></ins>
</div>

<!-- NEW RELEASES -->
<section class="section">
  <div class="container">
    <div class="section-header">
      <h2>✨ New Releases</h2>
      <a href="pages/bestsellers.html" class="see-all">See All →</a>
    </div>
    <div class="book-grid" id="newReleasesGrid"></div>
  </div>
</section>

<!-- READING LIST / EDITOR PICKS -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header">
      <h2>⭐ Editor's Picks</h2>
    </div>
    <div class="book-grid" id="editorPicksGrid"></div>
  </div>
</section>

<!-- NEWSLETTER -->
<section class="newsletter">
  <div class="container newsletter-inner">
    <h2>Stay in the Loop</h2>
    <p>Get weekly book recommendations, deals, and new releases delivered to your inbox.</p>
    <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Thanks for subscribing!');">
      <input type="email" placeholder="Enter your email" required aria-label="Email">
      <button type="submit" class="btn btn-primary">Subscribe</button>
    </form>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer">
  <div class="container footer-inner">
    <div class="footer-col">
      <span class="logo"><span class="logo-icon">📚</span> Book<span class="logo-accent">Verse</span></span>
      <p>Your universe of eBooks. Discover, read, and explore millions of titles.</p>
    </div>
    <div class="footer-col">
      <h4>Explore</h4>
      <a href="pages/bestsellers.html">Bestsellers</a>
      <a href="pages/free-ebooks.html">Free eBooks</a>
      <a href="pages/categories.html">Categories</a>
      <a href="pages/new-releases.html">New Releases</a>
    </div>
    <div class="footer-col">
      <h4>Company</h4>
      <a href="pages/about.html">About Us</a>
      <a href="pages/contact.html">Contact</a>
      <a href="pages/privacy.html">Privacy Policy</a>
      <a href="pages/terms.html">Terms of Service</a>
    </div>
    <div class="footer-col">
      <h4>Support</h4>
      <a href="pages/contact.html">Help Center</a>
      <a href="pages/affiliate.html">Affiliate Program</a>
      <a href="pages/privacy.html#cookies">Cookie Policy</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; 2026 xoxiiilama. All rights reserved. Book covers provided by <a href="https://openlibrary.org" target="_blank" rel="noopener">Open Library</a>.</p>
  </div>
</footer>

<script src="js/app.js"></script>
</body>
</html>
