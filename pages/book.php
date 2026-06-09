<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Book Details — xoxiiilama</title>
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
      <a href="free-ebooks.html" class="nav-link">Free eBooks</a>
      <a href="about.html" class="nav-link">About</a>
    </nav>
    <div class="header-actions"><div class="search-bar"><input type="text" id="searchInput" placeholder="Search..."><button id="searchBtn" class="search-btn">🔍</button></div></div>
    <button class="mobile-toggle" id="mobileToggle">☰</button>
  </div>
</header>

<div class="section">
  <div class="container" id="bookDetail">
    <div class="loading">Loading book details...</div>
  </div>
</div>

<div class="ad-container container">
  <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-XXXXXXXXXXXXXXXX" data-ad-slot="XXXXXXXXXX" data-ad-format="auto" data-full-width-responsive="true"></ins>
</div>

<div class="section">
  <div class="container">
    <h2 style="margin-bottom:1.5rem;">You May Also Like</h2>
    <div class="book-grid" id="relatedGrid"></div>
  </div>
</div>

<footer class="footer"><div class="container footer-bottom"><p>&copy; 2026 xoxiiilama. All rights reserved.</p></div></footer>
<script src="../js/app.js"></script>
<style>
.book-detail {
  display: grid;
  grid-template-columns: 300px 1fr;
  gap: 3rem;
  margin-top: 1rem;
}
.book-detail-cover {
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 10px 40px rgba(0,0,0,0.15);
}
.book-detail-cover img {
  width: 100%;
  aspect-ratio: 2/3;
  object-fit: cover;
}
.book-detail-info h1 {
  font-size: 2rem;
  margin-bottom: 0.5rem;
}
.book-detail-author {
  font-size: 1.1rem;
  color: var(--text-light);
  margin-bottom: 1.5rem;
}
.book-detail-author a { color: var(--primary); }
.book-detail-rating {
  display: flex;
  align-items: center;
  gap: 0.5rem;
  margin-bottom: 1.5rem;
}
.stars { color: #f59e0b; font-size: 1.2rem; }
.rating-num { font-weight: 700; }
.rating-count { color: var(--text-light); font-size: 0.9rem; }
.book-detail-price {
  display: flex;
  align-items: baseline;
  gap: 1rem;
  margin-bottom: 1.5rem;
}
.price-current {
  font-size: 2rem;
  font-weight: 800;
  color: var(--primary);
}
.price-original {
  font-size: 1.1rem;
  text-decoration: line-through;
  color: var(--text-lighter);
}
.price-discount {
  background: #dcfce7;
  color: #16a34a;
  padding: 0.2rem 0.6rem;
  border-radius: 4px;
  font-size: 0.8rem;
  font-weight: 700;
}
.book-detail-actions {
  display: flex;
  gap: 1rem;
  margin-bottom: 2rem;
}
.btn-buy {
  background: var(--primary);
  color: #fff;
  padding: 1rem 2.5rem;
  border: none;
  border-radius: var(--radius-sm);
  font-size: 1.05rem;
  font-weight: 700;
  cursor: pointer;
  transition: all 0.2s;
}
.btn-buy:hover { background: var(--primary-dark); transform: translateY(-1px); box-shadow: 0 4px 12px rgba(37,99,235,0.3); }
.btn-cart {
  background: transparent;
  color: var(--primary);
  border: 2px solid var(--primary);
  padding: 1rem 2rem;
  border-radius: var(--radius-sm);
  font-size: 1.05rem;
  font-weight: 700;
  cursor: pointer;
  transition: all 0.2s;
}
.btn-cart:hover { background: var(--primary-light); }
.book-detail-meta {
  display: grid;
  grid-template-columns: auto 1fr;
  gap: 0.5rem 1.5rem;
  font-size: 0.9rem;
  margin-bottom: 2rem;
  padding: 1.25rem;
  background: var(--bg-alt);
  border-radius: var(--radius-sm);
}
.meta-label { font-weight: 600; color: var(--text); }
.meta-value { color: var(--text-light); }
.book-detail-desc {
  line-height: 1.8;
  color: var(--text-light);
}
.book-detail-desc h3 { color: var(--text); margin-bottom: 0.75rem; }
.format-options {
  display: flex;
  gap: 0.75rem;
  margin-bottom: 1.5rem;
}
.format-btn {
  padding: 0.5rem 1.25rem;
  border: 2px solid var(--border);
  border-radius: var(--radius-sm);
  background: #fff;
  cursor: pointer;
  font-weight: 600;
  font-size: 0.85rem;
  transition: all 0.2s;
}
.format-btn.active, .format-btn:hover {
  border-color: var(--primary);
  color: var(--primary);
  background: var(--primary-light);
}
@media (max-width: 768px) {
  .book-detail { grid-template-columns: 1fr; max-width: 400px; margin: 0 auto; }
  .book-detail-cover { max-width: 250px; }
}
</style>
<script>
function generatePrice(editionCount) {
  const base = Math.floor(Math.random() * 8) + 3;
  const original = base + Math.floor(Math.random() * 5) + 2;
  const discount = Math.round((1 - base/original) * 100);
  return { price: base + 0.99, original: original + 0.99, discount };
}

function generateRating() {
  const r = (Math.random() * 1.5 + 3.5).toFixed(1);
  const count = Math.floor(Math.random() * 5000) + 100;
  return { rating: r, count };
}

async function loadBookDetail() {
  const params = new URLSearchParams(window.location.search);
  const workKey = params.get('key');
  if (!workKey) { document.getElementById('bookDetail').innerHTML = '<p>Book not found.</p>'; return; }

  try {
    const resp = await fetch(`https://openlibrary.org${workKey}.json`);
    const work = await resp.json();
    const title = work.title || 'Unknown';
    const coverId = work.covers?.[0] || work.cover_id;
    const coverUrl = coverId ? `https://covers.openlibrary.org/b/id/${coverId}-L.jpg` : 'https://placehold.co/300x450/e2e8f0/94a3b8?text=No+Cover';
    const desc = typeof work.description === 'string' ? work.description : work.description?.value || 'A captivating read that will keep you turning pages long into the night. This book has enchanted millions of readers worldwide.';
    const pages = work.first_publish_date || 'N/A';
    const subjects = work.subjects?.slice(0, 5) || [];
    const { price, original, discount } = generatePrice(work.edition_count || 10);
    const { rating, count } = generateRating();
    const stars = '★'.repeat(Math.round(rating)) + '☆'.repeat(5 - Math.round(rating));

    document.getElementById('bookDetail').innerHTML = `
      <div class="book-detail">
        <div class="book-detail-cover"><img src="${coverUrl}" alt="${title}"></div>
        <div class="book-detail-info">
          <h1>${title}</h1>
          <div class="book-detail-author">by <a href="bestsellers.html?q=${encodeURIComponent(title)}">View Author</a></div>
          <div class="book-detail-rating">
            <span class="stars">${stars}</span>
            <span class="rating-num">${rating}</span>
            <span class="rating-count">(${count.toLocaleString()} reviews)</span>
          </div>
          <div class="book-detail-price">
            <span class="price-current">$${price}</span>
            <span class="price-original">$${original}</span>
            <span class="price-discount">${discount}% OFF</span>
          </div>
          <div class="format-options">
            <button class="format-btn active">eBook</button>
            <button class="format-btn">Audiobook</button>
            <button class="format-btn">PDF</button>
          </div>
          <div class="book-detail-actions">
            <button class="btn-buy" onclick="handleBuy('${title}')">Buy Now — $${price}</button>
            <button class="btn-cart" onclick="addToCart('${title}')">Add to Cart</button>
          </div>
          <div class="book-detail-meta">
            <span class="meta-label">Format</span><span class="meta-value">ePub, PDF, Kindle</span>
            <span class="meta-label">Pages</span><span class="meta-value">${pages}</span>
            <span class="meta-label">Language</span><span class="meta-value">English</span>
            <span class="meta-label">Genres</span><span class="meta-value">${subjects.join(', ') || 'General'}</span>
            <span class="meta-label">Delivery</span><span class="meta-value">Instant download</span>
          </div>
          <div class="book-detail-desc">
            <h3>Description</h3>
            <p>${desc}</p>
          </div>
        </div>
      </div>`;

    // Related books
    const subject = subjects[0] || 'fiction';
    const related = await fetchBooks(subject.replace(/\s+/g, '_').toLowerCase(), 6);
    renderBooks('relatedGrid', related.filter(r => r.key !== workKey).slice(0, 6));

  } catch (e) {
    document.getElementById('bookDetail').innerHTML = '<p>Failed to load book details.</p>';
  }
}

function handleBuy(title) {
  // In production: redirect to checkout
  alert(`Proceeding to checkout for "${title}"`);
}

function addToCart(title) {
  let cart = JSON.parse(localStorage.getItem('bv_cart') || '[]');
  cart.push({ title, added: Date.now() });
  localStorage.setItem('bv_cart', JSON.stringify(cart));
  alert(`"${title}" added to cart!`);
}

loadBookDetail();
</script>
</body>
</html>
