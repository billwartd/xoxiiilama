<!DOCTYPE html>
<html lang="en" data-page="bestsellers">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bestsellers — xoxiiilama</title>
<link rel="stylesheet" href="../css/style.css">
<meta name="description" content="Browse the top bestselling eBooks. Fiction, non-fiction, and more.">
</head>
<body>
<header class="header">
  <div class="container header-inner">
    <a href="../index.html" class="logo"><span class="logo-icon">📚</span> Nimbori<span class="logo-accent">Lux</span></a>
    <nav class="nav">
      <a href="../index.html" class="nav-link">Home</a>
      <a href="bestsellers.html" class="nav-link active">Bestsellers</a>
      <a href="categories.html" class="nav-link">Categories</a>
      <a href="free-ebooks.html" class="nav-link">Free eBooks</a>
      <a href="about.html" class="nav-link">About</a>
    </nav>
    <div class="header-actions">
      <div class="search-bar"><input type="text" id="searchInput" placeholder="Search books, authors..."><button id="searchBtn" class="search-btn">🔍</button></div>
    </div>
    <button class="mobile-toggle" id="mobileToggle">☰</button>
  </div>
</header>

<div class="page-header">
  <div class="container">
    <h1>📚 Bestsellers</h1>
    <p>The most popular eBooks readers can't put down</p>
  </div>
</div>

<div class="ad-container container">
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="auto" data-full-width-responsive="true"></ins>
</div>

<div class="container">
  <div class="content-with-sidebar">
    <div>
      <div class="book-grid" id="mainGrid"><div class="loading">Loading bestsellers...</div></div>
    </div>
    <aside class="sidebar">
      <div class="sidebar-card">
        <h3>Top Genres</h3>
        <a href="bestsellers.html?cat=fiction">Fiction</a>
        <a href="bestsellers.html?cat=romance">Romance</a>
        <a href="bestsellers.html?cat=thriller">Thriller</a>
        <a href="bestsellers.html?cat=science_fiction">Science Fiction</a>
        <a href="bestsellers.html?cat=fantasy">Fantasy</a>
        <a href="bestsellers.html?cat=biography">Biography</a>
        <a href="bestsellers.html?cat=self_help">Self-Help</a>
      </div>
      <div class="sidebar-card">
        <h3>Ad Space</h3>
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="vertical"></ins>
      </div>
    </aside>
  </div>
</div>

<footer class="footer">
  <div class="container footer-bottom"><p>&copy; 2026 xoxiiilama. All rights reserved.</p></div>
</footer>

<script src="../js/app.js"></script>
<script>
(async () => {
  const params = new URLSearchParams(window.location.search);
  const q = params.get('q');
  const cat = params.get('cat') || 'popular';
  const subject = q || cat;
  const works = await fetchBooks(subject, 24);
  renderBooks('mainGrid', works, { class: 'badge-bestseller', text: 'Bestseller' });
})();
</script>
</body>
</html>
