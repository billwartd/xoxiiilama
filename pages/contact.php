<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact — xoxiiilama</title>
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

<div class="static-page">
  <h1>Contact Us</h1>
  <p>Got a question, suggestion, or just want to say hi? Fill out the form below and we'll get back to you.</p>
  <form class="contact-form" onsubmit="event.preventDefault(); alert('Message sent! We\\'ll get back to you soon.');">
    <input type="text" placeholder="Your Name" required>
    <input type="email" placeholder="Your Email" required>
    <input type="text" placeholder="Subject">
    <textarea placeholder="Your Message" required></textarea>
    <button type="submit" class="btn btn-primary" style="align-self:flex-start;">Send Message</button>
  </form>
</div>

<footer class="footer"><div class="container footer-bottom"><p>&copy; 2026 xoxiiilama. All rights reserved.</p></div></footer>
</body>
</html>
