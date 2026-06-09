<!DOCTYPE html>
<html lang="en" data-page="categories">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Categories — xoxiiilama</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header">
  <div class="container header-inner">
    <a href="../index.html" class="logo"><span class="logo-icon">📚</span> Nimbori<span class="logo-accent">Lux</span></a>
    <nav class="nav">
      <a href="../index.html" class="nav-link">Home</a>
      <a href="bestsellers.html" class="nav-link">Bestsellers</a>
      <a href="categories.html" class="nav-link active">Categories</a>
      <a href="free-ebooks.html" class="nav-link">Free eBooks</a>
      <a href="about.html" class="nav-link">About</a>
    </nav>
    <div class="header-actions"><div class="search-bar"><input type="text" id="searchInput" placeholder="Search..."><button id="searchBtn" class="search-btn">🔍</button></div></div>
    <button class="mobile-toggle" id="mobileToggle">☰</button>
  </div>
</header>

<div class="page-header">
  <div class="container"><h1>📖 Browse Categories</h1><p>Find your next favorite book by genre</p></div>
</div>

<div class="section">
  <div class="container">
    <div class="category-grid" style="grid-template-columns:repeat(auto-fill,minmax(160px,1fr));gap:1.25rem;">
      <a href="bestsellers.html?cat=fiction" class="category-card"><span class="cat-icon">✍️</span><span class="cat-name">Fiction</span></a>
      <a href="bestsellers.html?cat=romance" class="category-card"><span class="cat-icon">❤️</span><span class="cat-name">Romance</span></a>
      <a href="bestsellers.html?cat=mystery" class="category-card"><span class="cat-icon">🔍</span><span class="cat-name">Mystery & Thriller</span></a>
      <a href="bestsellers.html?cat=science_fiction" class="category-card"><span class="cat-icon">🚀</span><span class="cat-name">Sci-Fi</span></a>
      <a href="bestsellers.html?cat=fantasy" class="category-card"><span class="cat-icon">🐉</span><span class="cat-name">Fantasy</span></a>
      <a href="bestsellers.html?cat=horror" class="category-card"><span class="cat-icon">👻</span><span class="cat-name">Horror</span></a>
      <a href="bestsellers.html?cat=biography" class="category-card"><span class="cat-icon">👤</span><span class="cat-name">Biography</span></a>
      <a href="bestsellers.html?cat=history" class="category-card"><span class="cat-icon">🏛️</span><span class="cat-name">History</span></a>
      <a href="bestsellers.html?cat=self_help" class="category-card"><span class="cat-icon">💡</span><span class="cat-name">Self-Help</span></a>
      <a href="bestsellers.html?cat=science" class="category-card"><span class="cat-icon">🔬</span><span class="cat-name">Science</span></a>
      <a href="bestsellers.html?cat=philosophy" class="category-card"><span class="cat-icon">🤔</span><span class="cat-name">Philosophy</span></a>
      <a href="bestsellers.html?cat=poetry" class="category-card"><span class="cat-icon">🌸</span><span class="cat-name">Poetry</span></a>
      <a href="bestsellers.html?cat=travel" class="category-card"><span class="cat-icon">✈️</span><span class="cat-name">Travel</span></a>
      <a href="bestsellers.html?cat=cooking" class="category-card"><span class="cat-icon">🍳</span><span class="cat-name">Cooking</span></a>
      <a href="bestsellers.html?cat=business" class="category-card"><span class="cat-icon">💼</span><span class="cat-name">Business</span></a>
      <a href="bestsellers.html?cat=children" class="category-card"><span class="cat-icon">🧒</span><span class="cat-name">Children's</span></a>
    </div>

    <h2 style="margin-top:3rem;margin-bottom:1.5rem;">Popular in This Category</h2>
    <div class="book-grid" id="catBooks"><div class="loading">Loading...</div></div>
  </div>
</div>

<footer class="footer"><div class="container footer-bottom"><p>&copy; 2026 xoxiiilama. All rights reserved.</p></div></footer>
<script src="../js/app.js"></script>
<script>
(async () => {
  const cat = new URLSearchParams(location.search).get('cat') || 'fiction';
  const works = await fetchBooks(cat, 16);
  renderBooks('catBooks', works);
})();
</script>
</body>
</html>
