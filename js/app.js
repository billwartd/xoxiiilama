// Open Library API
const OL_BASE = 'https://openlibrary.org';
const OL_COVER = 'https://covers.openlibrary.org/b/olid';

// Amazon affiliate placeholder
const AFFILIATE_BASE = 'https://www.amazon.com/s?k=';

// Subject queries for different sections
const SECTIONS = {
  trending: { subject: 'trending', seeds: ['fiction','romance','thriller','fantasy','science_fiction'] },
  newReleases: { subject: 'new', seeds: ['new_arrivals','2024','2025','recent'] },
  editorPicks: { subject: 'picks', seeds: ['classic','award','literary_fiction','philosophy'] }
};

// Fetch books from Open Library
async function fetchBooks(subject, limit = 10) {
  try {
    // Fetch more than needed so we can filter out books without covers
    const resp = await fetch(`${OL_BASE}/subjects/${subject}.json?limit=${limit * 3}`);
    const data = await resp.json();
    const works = data.works || [];
    // Only return books that have covers
    return works.filter(w => w.cover_id).slice(0, limit);
  } catch (e) {
    console.error('Fetch error:', e);
    return [];
  }
}

// Create book card HTML
function bookCardHTML(work, badge = '') {
  const title = work.title || 'Unknown Title';
  const author = work.authors?.[0]?.name || 'Unknown Author';
  const coverId = work.cover_id;
  const coverUrl = `https://covers.openlibrary.org/b/id/${coverId}-M.jpg`;
  const bookLink = `pages/book.html?key=${encodeURIComponent(work.key)}`;
  const isHomePage = !document.querySelector('[data-page]') || document.body.dataset.page === 'home';
  const link = isHomePage ? bookLink : `book.html?key=${encodeURIComponent(work.key)}`;

  return `
    <a href="${link}" class="book-card">
      <div class="book-cover">
        <img src="${coverUrl}" alt="${title}" loading="lazy" onerror="this.src='https://placehold.co/200x300/e2e8f0/94a3b8?text=No+Cover'">
        ${badge ? `<span class="book-badge ${badge.class}">${badge.text}</span>` : ''}
      </div>
      <div class="book-info">
        <div class="book-title">${title}</div>
        <div class="book-author">${author}</div>
        <div class="book-price">View Details</div>
      </div>
    </a>`;
}

// Render books into a grid
function renderBooks(gridId, works, badge = null) {
  const grid = document.getElementById(gridId);
  if (!grid) return;
  if (works.length === 0) {
    grid.innerHTML = '<div class="loading">No books found</div>';
    return;
  }
  grid.innerHTML = works.map(w => bookCardHTML(w, badge)).join('');
}

// Load hero books
async function loadHeroBooks() {
  const container = document.getElementById('heroBooks');
  if (!container) return;
  const works = await fetchBooks('fantasy', 6);
  container.innerHTML = works.slice(0, 3).map(w => {
    const coverId = w.cover_id;
    const coverUrl = coverId ? `https://covers.openlibrary.org/b/id/${coverId}-L.jpg` : '';
    return coverId ? `<div class="hero-book"><img src="${coverUrl}" alt="${w.title}" loading="lazy"></div>` : '';
  }).join('');
}

// Load all sections
async function loadHome() {
  // Trending
  const trending = await fetchBooks('popular', 12);
  renderBooks('trendingGrid', trending, { class: 'badge-bestseller', text: 'Popular' });

  // New releases
  const newRel = await fetchBooks('2024', 12);
  renderBooks('newReleasesGrid', newRel, { class: 'badge-new', text: 'New' });

  // Editor picks
  const picks = await fetchBooks('classic', 8);
  renderBooks('editorPicksGrid', picks, { class: 'badge-free', text: 'Pick' });

  // Hero
  loadHeroBooks();
}

// Search
async function doSearch(query) {
  if (!query.trim()) return;
  window.location.href = `pages/bestsellers.html?q=${encodeURIComponent(query)}`;
}

document.getElementById('searchBtn')?.addEventListener('click', () => {
  doSearch(document.getElementById('searchInput').value);
});

document.getElementById('searchInput')?.addEventListener('keydown', (e) => {
  if (e.key === 'Enter') doSearch(e.target.value);
});

// Mobile menu
document.getElementById('mobileToggle')?.addEventListener('click', () => {
  document.querySelector('.nav').classList.toggle('open');
});

// Load page-specific content
const page = document.body.dataset.page;
if (page === 'home' || !page) {
  loadHome();
}