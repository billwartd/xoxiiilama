<!DOCTYPE html>
<html lang="en" data-page="free">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Free eBooks — xoxiiilama</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="header">
  <div class="container header-inner">
    <a href="../index.html" class="logo"><span class="logo-icon">📚</span> Nimbori<span class="logo-accent">Lux</span></a>
    <nav class="nav">
      <a href="../index.html" class="nav-link">Home</a>
      <a href="bestsellers.html" class="nav-link">Bestsellers</a>
      <a href="categories.html" class="nav-link">Categories</a>
      <a href="free-ebooks.html" class="nav-link active">Free eBooks</a>
      <a href="about.html" class="nav-link">About</a>
    </nav>
    <div class="header-actions"><div class="search-bar"><input type="text" id="searchInput" placeholder="Search..."><button id="searchBtn" class="search-btn">🔍</button></div></div>
    <button class="mobile-toggle" id="mobileToggle">☰</button>
  </div>
</header>

<div class="page-header">
  <div class="container"><h1>🆓 Free eBooks</h1><p>Thousands of free titles — no cost, no catch</p></div>
</div>

<div class="ad-container container">
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="auto" data-full-width-responsive="true"></ins>
</div>

<div class="section">
  <div class="container">
    <div class="book-grid" id="freeGrid"><div class="loading">Loading free books...</div></div>
  </div>
</div>

<footer class="footer"><div class="container footer-bottom"><p>&copy; 2026 xoxiiilama. All rights reserved.</p></div></footer>
<script src="../js/app.js"></script>
<script>
(async () => {
  const subjects = ['classic','public_domain','gutenberg','open_textbook'];
  let allWorks = [];
  for (const s of subjects) {
    const w = await fetchBooks(s, 10);
    allWorks = allWorks.concat(w);
    if (allWorks.length >= 24) break;
  }
  renderBooks('freeGrid', allWorks.slice(0, 24), { class: 'badge-free', text: 'Free' });
})();
</script>
</body>
</html>
