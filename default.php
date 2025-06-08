<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Premium Membership Plans – Night Sky Edition</title>
  <meta name="description" content="Join the Humane Society of Monroe County's membership program. Choose from personal and business plans that support animal welfare with exclusive benefits.">
  <meta name="keywords" content="humane society, animal shelter, pet adoption, membership, HSMC, donations, animal welfare">
  <meta property="og:title" content="Premium Membership Plans – HSMC">
  <meta property="og:description" content="Support animal welfare through membership plans with exclusive benefits.">
  <meta property="og:type" content="website">
  <meta name="theme-color" content="#50c878">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com">
  <link rel="preconnect" href="https://i.imgur.com">
  <link rel="preconnect" href="https://vid.cdn-website.com">
  <link rel="preload" href="https://i.imgur.com/H8hb0qN.png" as="image">
  
  <link rel="canonical" href="https://www.monroe-humane.org/membership">
  <link href="https://fonts.googleapis.com/css2?family=Bubblegum+Sans&display=swap&text=ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789%20%24%25%26%28%29%2C-.%2F%3A%3B%3F@%5B%5C%5D%5E_%60%7B%7C%7D~%22%27%3C%3E%21" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  
  <style>
    /* Critical CSS for immediate rendering */
    :root {
      --text-light: #fff;
      --accent: #50c878;
      --bg-dark: #000;
      --overlay: rgba(0,0,0,0.6);
      --card-bg: #2a2a2a; /* Original card background */
      --card-bg-gradient-end: #333333; /* Slightly lighter end for subtle gradient */
      --radius: 12px;
      --shadow: 0 15px 30px rgba(0,0,0,0.7);
      --card-hover-shadow: 0 20px 40px rgba(0,0,0,0.8);
    }
    *, *::before, *::after { box-sizing: border-box; margin:0; padding:0 }
    html { scroll-behavior: smooth; } /* For smooth #target links if JS fails, but JS override is better */
    body {
      font-family: 'Bubblegum Sans', cursive, sans-serif;
      color: var(--text-light);
      background: var(--bg-dark);
      overflow-x: hidden;
      position: relative;
    }
    .body-no-scroll {
      overflow: hidden !important;  
    }
    .skip-link {
      position: absolute;
      top: -50px; /* Adjusted for better initial hiding */
      left: 0;
      background: var(--accent);
      color: black;
      padding: 10px 15px; /* Slightly larger */
      z-index: 3000;
      text-decoration: none;
      transition: top 0.3s ease-in-out;
      border-bottom-right-radius: var(--radius);
    }
    .skip-link:focus {top: 0;}
    header {
      position: sticky; top:0;
      display: flex;
      align-items: center;
      padding: 1.5rem 2rem;
      background: rgba(0,0,0,0.85);
      box-shadow: 0 2px 8px rgba(0,0,0,0.5);
      z-index: 100;
    }
    .video-background {
      position: fixed; top:0; left:0;
      width:100%; height:100%;
      object-fit: cover; z-index:-2;
    }
    #overlay {
      position: fixed; top:0; left:0;
      width:100%; height:100%;
      background: var(--overlay); z-index:-1;
    }

    .page-container {
      max-width: 1400px;  
      margin-left: auto;
      margin-right: auto;
      padding-left: 2rem;  
      padding-right: 2rem;
      position: relative;  
      z-index: 10;  
    }
    
    .visually-hidden { /* For accessible names on elements that shouldn't be seen */
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        border: 0;
    }


    @media (max-width: 768px) {
      .page-container {
        padding-left: 1rem;
        padding-right: 1rem;
      }
    }
      @media (max-width: 600px) {  
      header {
        padding: 1rem;  
      }
      .page-container {  
        padding-left: 0.75rem;
        padding-right: 0.75rem;
      }
    }
  
  .qr-link {
    width: 10rem; height: 10rem;
    cursor: pointer;
    transition: transform .3s;
  }
  .qr-link:hover {
    transform: scale(1.15);
  }

  .qr-code {
    width: 100%;
    height: 100%;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;  
  }

    #starry-canvas {
      position: fixed; top:0; left:0;
      width:100%; height:100%;
      z-index:-1; pointer-events:none;
    }
    
    .nav-left { display: flex; gap: .75rem; flex: 1; }
    .nav-center { display: flex; justify-content: center; position: absolute; left: 50%; transform: translateX(-50%); }
    .nav-right { display: flex; gap: .75rem; flex: 1; justify-content: flex-end; }
    .nav-left button, .nav-right button {
      padding:.6rem 1rem; background:#1c1c1c; border:1px solid var(--accent);
      border-radius:var(--radius); color:var(--text-light); cursor:pointer;
      transition: background .3s, transform .2s, box-shadow .3s;
    }
    .nav-left button:hover, .nav-right button:hover {
      background:var(--accent); color:#000; transform:scale(1.05);
      box-shadow:0 4px 12px rgba(80,200,120,0.5);
    }
    header img { max-height: 4rem; }
    #hamburger-btn { display:none; background:transparent; border:none; color:var(--text-light); font-size:1.5rem; cursor: pointer; transition: transform 0.2s ease; }
    #hamburger-btn:hover { transform: scale(1.1); }
    #hamburger-menu {
      position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.95);
      transform:translateY(-100%); transition: transform .4s ease-in-out; will-change: transform;
      z-index:2000; display: flex; flex-direction: column; align-items: center; justify-content: center;
    }
    #hamburger-menu.open { transform:translateY(0) }
    .close-menu-btn {  
      position:absolute; top:20px; right:20px; background:transparent; border:none;  
      color:#e74c3c; font-size:2rem; cursor: pointer; transition: transform 0.2s ease, color 0.2s ease;
    }
    .close-menu-btn:hover { transform: scale(1.1); color: #ff6b6b; }
    .mobile-nav { display:flex; flex-direction:column; align-items:center; justify-content:center; height:100%; }
    .mobile-nav button {
      margin:15px 0; padding:12px 25px; font-size:1.3rem; background:#1c1c1c;
      border:1px solid var(--accent); border-radius:var(--radius); color:var(--text-light);
      cursor:pointer; width: 80%; max-width: 250px; transition: all 0.3s ease;
    }
    .mobile-nav button:hover {
      background: var(--accent); color: #000; transform: translateY(-3px);
      box-shadow: 0 5px 15px rgba(80,200,120,0.5);
    }
    
    /* Core Benefits Animation */
    .core-benefits {
      max-width:48rem; margin:2rem auto; text-align:center;
      opacity: 0; /* Initial state for animation */
      transform: translateY(30px); /* Initial state for animation */
      transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }
    .core-benefits.is-visible { /* Animated state */
        opacity: 1;
        transform: translateY(0);
    }
    .core-benefits h3 { color:var(--accent); font-size:1.75rem; margin-bottom:.5rem; }
    .core-benefits .benefits {
      display:grid; grid-template-columns:repeat(auto-fit,minmax(12rem,1fr));
      gap:1rem; justify-items:center; font-size:1.2rem;
    }

    .toggle-bar { text-align:center; margin:2rem auto; z-index:50; }
    .toggle-bar button {
      margin:0 .5rem; padding:.75rem 1.5rem; background:transparent;
      border:2px solid var(--accent); border-radius:var(--radius); color:var(--text-light);
      cursor:pointer; transition: background .3s, color .3s;
    }
    .toggle-bar button.active, .toggle-bar button:hover { background:var(--accent); color:#000; }

    .plans-section { display:none; opacity:0; transition:opacity .4s ease }
    .plans-section.active { display:block; opacity:1 }
    .cards {
      display:grid; gap:1.5rem;
      grid-template-columns:repeat(auto-fit,minmax(16rem,1fr));
      margin-bottom:3rem;
    }
    @media (min-width:600px) { .cards { grid-template-columns:repeat(2,1fr) } }
    @media (min-width:1000px) { .cards { grid-template-columns:repeat(3,1fr) } }
    
    .card {
      background: linear-gradient(145deg, var(--card-bg), var(--card-bg-gradient-end)); /* Subtle gradient */
      border-radius:var(--radius);
      padding:1.5rem;
      box-shadow:var(--shadow);
      text-align:center;
      display:flex; flex-direction:column;
      min-height:28rem;
      transition: transform 0.3s ease-out, box-shadow 0.3s ease-out; /* For hover effect */
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: var(--card-hover-shadow);
    }
    .card h3 { font-size:2.25rem; margin-bottom:.75rem }
    .card p { font-size:1.75rem; margin-bottom:1.25rem; color:#f9f871 }
    .card .benefits {
      display:flex; flex-direction:column;
      gap:.75rem; align-items:center;
      font-size:2.2rem; margin-bottom:1.5rem;
    }
    .card .benefit-item { text-shadow:0 1px 2px rgba(0,0,0,0.6) }
    .card-footer { margin-top:auto; display:flex; flex-direction:column; align-items:center; gap:.75rem; }
    
    .join-btn {
      background:var(--accent); color:#000; border:none; border-radius:var(--radius);
      font-size:1.25rem; padding:.75rem 1.5rem; cursor:pointer;
      transition:transform .2s, box-shadow .3s;
    }
    .join-btn:hover { transform:scale(1.05); box-shadow:0 4px 12px rgba(80,200,120,0.5); }

    .glow-loyal, .glow-silver, .glow-gold, .glow-diamond, .glow-rainbow,
    .glow-dalmatian, .glow-shepherd, .glow-goldenbiz, .glow-danebiz {
      text-shadow: 0 0 5px var(--accent), 0 0 10px var(--accent), 0 0 15px rgba(80, 200, 120, 0.4);
    }

    .comparison-section {
      max-width:1200px; margin:2rem auto 4rem; text-align:center;
    }
    .comparison-section h3 { color:var(--accent); font-size:1.8rem; margin-bottom:1rem; }
    .table-container { margin-bottom:2rem; overflow-x:auto; }
    .toggle-table-btn {
      display:none; margin:1rem auto; padding:.75rem 1.5rem; background:var(--accent);
      color:#000; border:none; border-radius:var(--radius); cursor:pointer;
      transition:transform .2s, box-shadow .3s;
    }
    .toggle-table-btn:hover { transform:scale(1.05); box-shadow:0 4px 12px rgba(80,200,120,0.5); }
    .comparison-table {
      background:var(--card-bg); border-radius:var(--radius); box-shadow:var(--shadow);
      padding:1rem; display:none; opacity:0; max-height:0;
      transition:opacity .3s ease, max-height .3s ease;
    }
    .comparison-table.active { display:block }
    .comparison-table.visible { opacity:1; max-height:2000px; }
    .comparison-table table { width:100%; border-collapse:collapse; font-size:1.1rem; color:var(--text-light); }
    .comparison-table th, .comparison-table td {
      padding:.75rem; text-align:center; border-bottom:1px solid rgba(255,255,255,0.1);
    }
    .comparison-table th:first-child, .comparison-table td:first-child { text-align:left; min-width:150px; }
    .comparison-table th { background:rgba(0,0,0,0.3); color:var(--accent); font-size:1.2rem }
    .comparison-table .check { color:var(--accent); font-size:1.3rem }
    .mobile-comparison { display:none }
    .comparison-card {
      background:var(--card-bg); border-radius:var(--radius); box-shadow:var(--shadow);
      margin:1rem 0; overflow:hidden;
    }
    .card-header {
      padding:.75rem; background:rgba(0,0,0,0.3); border-left:4px solid var(--accent);
      display:flex; justify-content:space-between; align-items:center;
      cursor:pointer; transition:background .2s;
    }
    .card-header:hover { background:rgba(80,200,120,0.2) }
    .card-header h4 { font-size:1.2rem; }
    .card-header span { font-size:1rem; color:#f9f871; }
    .benefits-list {
      max-height:0; opacity:0; overflow:hidden;
      transition:max-height .3s ease, opacity .3s ease; padding:0 1rem;
    }
    .comparison-card.expanded .benefits-list { max-height:500px; opacity:1; padding:1rem; }
    .benefits-list .benefit-item { margin-bottom:.5rem; font-size:1rem; color:#f9f871; text-align:left; }

    #back-to-top {
      position:fixed; bottom:1.5rem; right:1.5rem; width:3rem; height:3rem; border:none;
      border-radius:50%; background:rgba(0,0,0,0.6); color:#fff; font-size:1.5rem;
      cursor:pointer; opacity:0; pointer-events:none; transition:opacity .3s; z-index:1500;
    }
    #back-to-top.show { opacity:1; pointer-events:auto }

    .feature-container {  
      position:fixed; top:50%; left:50%; transform:translate(-50%,-50%);
      display:none; width:90%; max-width:800px; height:auto; max-height:90vh;
      background:rgba(0,0,0,0.95); border-radius:var(--radius); box-shadow:var(--shadow);
      z-index:2000; overflow-y: auto;  
    }
    .feature-container iframe { width:100%; height:100%; border:none; } /* Kept for pet-modal */
    .feature-container > .close-modal-btn {
      position: absolute; top: 1rem; right: 1rem; background:rgba(0,0,0,0.7); border:none;
      color:#e74c3c; font-size:1.8rem; cursor:pointer; transition:color .2s;
      z-index: 2001; padding: 0.25rem 0.5rem; line-height: 1;  
    }
    .feature-container > .close-modal-btn:hover { color:#c0392b }

    .modal-spinner {
      position:absolute; top:50%; left:50%; margin:-20px 0 0 -20px;
      width:40px; height:40px; border:4px solid rgba(255,255,255,0.3);
      border-top:4px solid var(--accent); border-radius:50%; animation:spin 1s linear infinite;
      display:none; z-index:2100; /* Ensure spinner is above content host but below close button if needed */
    }
    @keyframes spin { to { transform:rotate(360deg) } }

    #pet-modal { display: none; flex-direction: column; height:80vh; }
    .iframe-container { position: relative; width: 100%; flex: 1; min-height: 0; overflow: hidden; }
    #pet-iframe { width: 100%; height: 100%; border: none; background: transparent; }
    .loading-overlay {
      position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8);
      display: flex; flex-direction: column; align-items: center; justify-content: center;
      z-index: 10; transition: opacity 0.5s ease;
    }
    .pet-spinner {
      width: 60px; height: 60px; border: 5px solid rgba(80,200,120,0.2);
      border-top: 5px solid var(--accent); border-radius: 50%; animation: pet-spin 1.2s linear infinite;
    }
    .loading-text { color: var(--accent); font-size: 1.4rem; margin-top: 1.5rem; text-align: center; }
    .loading-subtext { color: #ddd; font-size: 0.9rem; margin-top: 0.5rem; max-width: 80%; text-align: center; }
    @keyframes pet-spin { to { transform: rotate(360deg); } }
    .pet-modal-footer {
      background: rgba(22, 22, 22, 0.95); padding: 1rem; display: flex;
      justify-content: space-between; align-items: center;
      border-top: 1px solid rgba(80,200,120,0.3); border-radius: 0 0 var(--radius) var(--radius);
    }
    .pet-disclaimer { font-size: 0.9rem; color: #ddd; flex: 1; }
    .pet-controls { display: flex; gap: 10px; }
    .refresh-pets-btn {
      background: var(--accent); color: #000; border: none; border-radius: var(--radius);
      padding: 0.5rem 1rem; cursor: pointer; font-weight: bold;
      transition: transform 0.2s, box-shadow 0.3s;
    }
    .refresh-pets-btn:hover { transform: scale(1.05); box-shadow: 0 4px 12px rgba(80,200,120,0.5); }

    #terms-modal .modal-content { padding-top: 3.5rem; text-align: left; }
    #terms-modal .modal-content h3 { margin-bottom: 1.5rem; } /* ID added in HTML for aria-labelledby */
    .clarification-item {
        background-color: rgba(255, 255, 255, 0.03); border-left: 4px solid var(--accent);
        padding: 1.25rem; margin-bottom: 1.5rem; border-radius: var(--radius);  
        box-shadow: 0 2px 8px rgba(0,0,0,0.3);  
    }
    .clarification-item:last-child { margin-bottom: 0; }
    .clarification-item h4 {
        font-size: 1.45rem; color: #f9f871; margin-top: 0; margin-bottom: 0.85rem;
        display: flex; align-items: center;
    }
    .clarification-item .emoji-icon {
        margin-right: 0.6rem; font-size: 1.6rem; color: var(--accent); line-height: 1;  
    }
    #terms-modal .modal-content p, #terms-modal .modal-content ul {
        font-size: 1.1rem; line-height: 1.75; margin-bottom: 0.85rem; color: #e0e0e0;  
    }
    #terms-modal .modal-content ul { list-style-type: none; padding-left: 0.5rem; }
    #terms-modal .modal-content ul li {
        margin-bottom: 0.6rem; padding-left: 1.5rem; position: relative;  
    }
    #terms-modal .modal-content ul li::before {
        content: '🐾'; color: var(--accent); font-size: 0.9em;  
        position: absolute; left: 0; top: 2px;  
    }
    #terms-modal .modal-content strong { color: var(--text-light); font-weight: bold; }

    #membership-modal { height: 80vh; } /* Keep overall modal height */
    /* Style for the new host of the BetterUnite embed */
    #bu-embed-host {
        width: 100%;
        height: 100%; /* Fill the modal's content area */
        overflow: auto; /* Allow scrolling if content overflows */
        position: relative; /* For spinner positioning if needed */
        z-index: 2000; /* Match previous iframe z-index relative to modal */
    }
    /* The #bu-checkout div will be created by JS, BetterUnite script will populate it.
       Minimal styling here, as BU script should handle its content. */
    #bu-checkout {
        width: 100%;
        min-height: 100%; /* Try to ensure it fills the space */
        display: flex;
        flex-direction: column;
    }


    @media (max-width:600px) {
      #hamburger-btn { display:block }
      .nav-left, .nav-right { display:none }
      .video-background { display:none }
      body { background:linear-gradient(180deg,#0d1b2a,#1b263b) }
      .comparison-table table { display:none }
      .mobile-comparison { display:block }
      .toggle-table-btn { display:block }
      .comparison-table.active.visible { display:block; opacity:1; max-height:2000px }
      .card-footer { flex-direction:column; gap:.5rem }
      .feature-container {
        top:0; left:0; transform:none; width:100vw; height:100vh; max-height:100vh; border-radius: 0;
      }
      header { justify-content: space-between; }
      .nav-center { order: 2; margin-left: auto; position: static; transform: none; }
      header img { max-height: 2.5rem; }
      #hamburger-btn { order: 1; }
      .mobile-nav button {
        font-size: 1.1rem; padding: 12px 15px; width: 80%; min-width: 180px;
        white-space: normal; overflow: visible;
      }
      .mobile-nav .nav-terms { font-size: 1.1rem; padding: 12px 15px; width: 80%; white-space: normal; }
      .card { padding: 1rem; min-height: 24rem; }
      .card h3 { font-size: 1.8rem; }
      .card p { font-size: 1.4rem; }
      .card .benefits { font-size: 1.8rem; }
      #terms-modal .modal-content { padding: 1rem; padding-top: 3rem; line-height: 1.4; }
      #terms-modal .modal-content h3 { font-size: 1.5rem; }
      #back-to-top { bottom: 1rem; right: 1rem; }
      .feature-container > .close-modal-btn {
        top: 0.75rem; right: 0.75rem; font-size: 1.6rem; padding: 0.2rem 0.4rem;
      }
      .mobile-toggle-bar {
        display: flex; justify-content: center; width: 100%; margin: 10px 0 20px;
      }
      .mobile-toggle-bar button {
        margin: 0 5px; padding: 10px 15px; background: transparent;
        border: 2px solid var(--accent); border-radius: var(--radius); color: var(--text-light);
        cursor: pointer; transition: background 0.3s, color 0.3s; font-size: 1rem;
      }
      .mobile-toggle-bar button.active, .mobile-toggle-bar button:hover { background: var(--accent); color: #000; }
      .clarification-item { padding: 1rem; margin-bottom: 1rem; }
      .clarification-item h4 { font-size: 1.3rem; }
      .clarification-item .emoji-icon { font-size: 1.4rem; }
      #terms-modal .modal-content p, #terms-modal .modal-content ul { font-size: 1rem; line-height: 1.65; }
      #terms-modal .modal-content ul li { padding-left: 1.25rem; }
      #terms-modal .modal-content ul li::before { font-size: 0.85em; top: 1px; }
    }
    @media (min-width:601px) and (max-width:1024px) {
      .comparison-table { font-size:.9rem }
      .comparison-table th, .comparison-table td { padding:.5rem; min-width:60px; }
      .comparison-table th:first-child, .comparison-table td:first-child { min-width:120px; }
      .comparison-table table { min-width:700px }
      .nav-terms { white-space: normal; padding: 0.6rem 0.9rem; }
      header { padding: 1.2rem 1.5rem; }
      .cards { gap: 1.2rem; }
      .card { min-height: 26rem; }
    }
    @media (min-width:601px) {
      .mobile-comparison { display:none }
      .comparison-table table { display:table }
    }

    /* New Pet Browser styles */
    .modal-content-pet {
      max-width: 1280px;
      margin: 0 auto;
      padding: 0 16px 44px 16px;
      color: #334155;
      height: 100%;
      overflow-y: auto;
    }

    #pet-modal header {
      text-align: center;
      margin: 38px 0 18px 0;
      border-bottom: 1px solid #e2e8f0;
      padding-bottom: 20px;
      background: transparent;
      box-shadow: none;
      position: relative;
      z-index: auto;
      justify-content: center;
    }

    #pet-modal .page-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #0f766e;
      margin-bottom: 0.15em;
    }

    #pet-modal .subtitle {
      color: #64748b;
      font-size: 1.13rem;
      margin-bottom: 0.6em;
    }

    .controls-card {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 2px 12px 0 rgba(51, 65, 85, 0.07);
      padding: 1.5em 1em 1em 1em;
      margin: 0 auto 28px auto;
      max-width: 900px;
    }

    .controls-grid {
      display: grid;
      grid-template-columns: 1fr 1fr 1.6fr;
      gap: 1em;
      align-items: end;
    }

    @media (max-width: 800px) {
      .controls-grid { grid-template-columns: 1fr; }
    }

    .filter-select, .search-input {
      width: 100%;
      padding: 0.85em 1.05em;
      border: 1.5px solid #cbd5e1;
      border-radius: 0.5em;
      background: #fff;
      font-size: 1.09em;
      color: #334155;
      box-shadow: 0 1px 4px rgba(100,116,139,0.07);
      transition: border 0.18s, box-shadow 0.18s;
    }

    .filter-select:focus, .search-input:focus {
      border-color: #14b8a6;
      box-shadow: 0 0 0 2px rgba(20,184,166,0.21);
      outline: none;
    }

    .search-row {
      display: flex;
      width: 100%;
    }

    .search-input {
      flex: 1 1 auto;
      border-radius: 0.5em 0 0 0.5em;
      border-right: none;
      font-size: 1.06em;
    }

    .search-button {
      display: flex;
      align-items: center;
      justify-content: center;
      background: #0d9488;
      color: #fff;
      border: none;
      border-radius: 0 0.5em 0.5em 0;
      padding: 0 1.08em;
      cursor: pointer;
      font-size: 1.15em;
      transition: background 0.13s;
    }

    .search-button:hover, .search-button:focus {
      background: #0f766e;
      outline: none;
    }

    .pet-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 1.4em;
      margin-top: 2em;
      min-height: 320px;
    }

    .pet-card {
      background: #fff;
      border-radius: 1rem;
      box-shadow: 0 4px 24px 0 rgba(51,65,85,0.10);
      overflow: hidden;
      display: flex;
      flex-direction: column;
      cursor: pointer;
      transition: transform 0.14s, box-shadow 0.13s;
      border: 1.5px solid #e2e8f0;
    }

    .pet-card:hover, .pet-card:focus-visible {
      transform: translateY(-3px) scale(1.023);
      box-shadow: 0 10px 32px 0 rgba(20,184,166,0.18);
      border-color: #14b8a6;
      outline: none;
    }

    .pet-photo {
      width: 100%;
      aspect-ratio: 4/3;
      object-fit: cover;
      background: #f1f5f9;
      min-height: 170px;
      border-bottom: 1px solid #e2e8f0;
    }

    .pet-details {
      padding: 1.08em 1em 0.9em 1em;
      flex: 1 1 auto;
      display: flex;
      flex-direction: column;
      color: #334155;
    }

    .pet-name {
      font-size: 1.22em;
      font-weight: 600;
      color: #1e293b;
      margin-bottom: 0.25em;
      text-overflow: ellipsis;
      overflow: hidden;
      white-space: nowrap;
      max-width: 100%;
    }

    .pet-row {
      font-size: 0.98em;
      color: #64748b;
      margin-bottom: 0.07em;
    }

    .pet-card .view-profile {
      margin-top: auto;
      padding-top: 1em;
      border-top: 1px solid #e2e8f0;
      text-align: center;
    }

    .view-profile span {
      color: #0d9488;
      font-weight: 500;
      text-decoration: none;
      transition: text-decoration 0.13s;
    }

    .pet-card:hover .view-profile span,
    .pet-card:focus-visible .view-profile span {
      text-decoration: underline;
    }

    /* Loading spinner */
    .loading-container {
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 300px;
      height: 40vh;
      width: 100%;
      flex-direction: column;
      grid-column: 1 / -1;
    }

    .spinner {
      display: inline-block;
      width: 56px;
      height: 56px;
      border: 6px solid #14b8a6;
      border-bottom-color: transparent;
      border-radius: 50%;
      margin-bottom: 1.4em;
      animation: spin 1s linear infinite;
    }

    @keyframes spin {
      0%   { transform: rotate(0deg);}
      100% { transform: rotate(360deg);}
    }

    /* Modal styling */
    .modal-overlay {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.6);
      z-index: 1000;
      align-items: center;
      justify-content: center;
      padding: 1em;
      transition: opacity 0.25s;
    }

    .modal-overlay.active {
      display: flex;
      opacity: 1;
    }

    .modal-content {
      background: #fff;
      border-radius: 1.1rem;
      box-shadow: 0 8px 40px rgba(20,184,166,0.13);
      width: 100%;
      max-width: 600px;
      max-height: 94vh;
      display: flex;
      flex-direction: column;
      overflow: hidden;
      animation: modalFadeIn 0.22s;
      position: relative;
    }

    @keyframes modalFadeIn {
      from { transform: translateY(40px) scale(0.98); opacity: 0; }
      to { transform: none; opacity: 1; }
    }

    .modal-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1.18em 1.3em 1em 1.3em;
      border-bottom: 1px solid #e2e8f0;
      background: #fff;
      flex-shrink: 0;
    }

    .modal-header h2 {
      font-size: 1.4em;
      font-weight: 600;
      color: #0f766e;
      margin: 0;
    }

    .modal-close {
      background: none;
      border: none;
      color: #64748b;
      font-size: 2em;
      cursor: pointer;
      padding: 0.2em 0.5em;
      border-radius: 50%;
      transition: background 0.11s, color 0.11s;
    }

    .modal-close:hover, .modal-close:focus {
      background: #e0f2fe;
      color: #0d9488;
      outline: none;
    }

    .modal-iframe-container {
      flex: 1 1 auto;
      display: flex;
      flex-direction: column;
      min-height: 0;
      position: relative;
      background: #fff;
    }

    .modal-iframe {
      display: block;
      width: 100%;
      height: 60vh;
      min-height: 280px;
      border: none;
      background: #fff;
      flex: 1 1 auto;
    }

    .modal-error {
      position: absolute;
      inset: 0;
      background: #fff;
      padding: 2em 1.5em;
      color: #dc2626;
      font-size: 1.1em;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2;
    }

  </style>
</head>
<body>
  <a href="#main-content" class="skip-link">Skip to content</a>
  <canvas id="starry-canvas" aria-hidden="true"></canvas>
  <video class="video-background" loop autoplay muted playsinline preload="metadata"
      poster="https://i.imgur.com/placeholder.jpg" aria-hidden="true" fetchpriority="high">
    <source src="https://vid.cdn-website.com/77cfa591/videos/2mEW5HLmSCOMjsNEDzd9_Humane+Society+of+Monroe+County+bg-v.mp4"
            type="video/mp4">
    <span class="sr-only">Background video showing night sky</span>
  </video>
  <div id="overlay" aria-hidden="true"></div>

  <header>
    <button id="hamburger-btn" aria-label="Open menu" aria-expanded="false" aria-controls="hamburger-menu">☰</button>
    <div class="nav-left">
      <button class="nav-home">Home</button>
      <button class="nav-pets">View Pets</button>
      <button class="nav-terms">Clarifications</button>
    </div>
    <div class="nav-center">
      <a href="https://www.monroe-humane.org" aria-label="HSMC Home" target="_blank" rel="noopener">
        <img src="https://i.imgur.com/H8hb0qN.png" alt="HSMC Logo" fetchpriority="high">
      </a>
    </div>
    <div class="nav-right">
      <button class="nav-exit">Exit</button>
    </div>
  </header>

  <div id="hamburger-menu">
    <button class="close-menu-btn" aria-label="Close menu">✖</button>
    <div class="mobile-nav">
      <button class="nav-home">Home</button>
      <button class="nav-pets">View Pets</button>
      <button class="nav-terms">Clarifications</button>
      <div class="mobile-toggle-bar">
        <button id="mobile-btn-personal" class="active">Personal</button>
        <button id="mobile-btn-business">Business</button>
      </div>
      <button class="nav-exit">Exit</button>
    </div>
  </div>

  <div class="page-container">  
    <div class="core-benefits">
      <h3>Core Benefits (all tiers)</h3>
      <div class="benefits">
        <div class="benefit-item">📧 Members-only newsfeed</div>
        <div class="benefit-item">💬 Community updates & invites</div>
      </div>
    </div>

    <main id="main-content">
      <div class="toggle-bar">
        <button id="btn-personal" class="active">Personal</button>
        <button id="btn-business">Business</button>
      </div>
      
      <section id="personal" class="plans-section active">
        <h2 style="text-align:center; margin-bottom:1.5rem; font-size:2rem; color:var(--accent);">
          Individual Membership Plans
        </h2>
        <div class="cards">
          <div class="card" data-delay="0.05s"> 
            <h3 class="glow-loyal">💖 Loyal Companion</h3> 
            <p>Variable Monthly Membership</p> 
            <div class="benefits"> 
              <div class="benefit-item">📧 Members-only Newsfeed</div> 
              <div class="benefit-item">💬 Community Updates & Invites</div> 
            </div> 
            <div class="card-footer"> 
              <div class="qr-link" tabindex="0" role="button" aria-label="Join Loyal Companion membership" data-url="https://app.betterunite.com/adopthsmc-loyalcompanioncampaign?embedded=true"> 
                <div class="qr-code" data-src="https://i.imgur.com/84Mb6jN.png"></div> 
              </div> 
              <button class="join-btn" onclick="openMembershipModal()" aria-describedby="loyal-companion-desc"> 
                Join Now 
              </button> 
              <div id="loyal-companion-desc" class="visually-hidden">Join the Loyal Companion membership tier</div>
            </div> 
          </div>
          
          <div class="card" data-delay="0.1s"> 
            <h3 class="glow-silver">🐱 Kitty Love</h3> 
            <p>$45 / year Membership</p> 
            <div class="benefits"> 
              <div class="benefit-item">🎟️ Membership Card</div> 
              <div class="benefit-item">🗳️ One Vote at Annual Meeting</div> 
              <div class="benefit-item">🎫 10% Off In-Store Shirt Coupon</div> 
              <div class="benefit-item">🧸 Pet-toy Coupon</div> 
              <div class="benefit-item">✅ Includes all Loyal Companion benefits</div> 
            </div> 
            <div class="card-footer"> 
              <div class="qr-link" tabindex="0" role="button" aria-label="Join Kitty Love membership" data-url="https://app.betterunite.com/hsmc-becomeamembertoday?embedded=true"> 
                <div class="qr-code" data-src="https://i.imgur.com/4NLunsW.png"></div> 
              </div> 
              <button class="join-btn" onclick="openMembershipModal()" aria-describedby="kitty-love-desc"> 
                Join Now 
              </button> 
              <div id="kitty-love-desc" class="visually-hidden">Join the Kitty Love membership tier for $45 per year</div>
            </div> 
          </div>
          
          <div class="card" data-delay="0.15s"> 
            <h3 class="glow-gold">🐶 Puppy Pack</h3> 
            <p>$65 / year Membership</p> 
            <div class="benefits"> 
              <div class="benefit-item">🧸 Additional Pet-toy Coupon</div> 
              <div class="benefit-item">✅ Includes previous tier benefits</div> 
            </div> 
            <div class="card-footer"> 
              <div class="qr-link" tabindex="0" role="button" aria-label="Join Puppy Pack membership" data-url="https://app.betterunite.com/hsmc-becomeamembertoday?embedded=true"> 
                <div class="qr-code" data-src="https://i.imgur.com/4NLunsW.png"></div> 
              </div> 
              <button class="join-btn" onclick="openMembershipModal()" aria-describedby="puppy-pack-desc"> 
                Join Now 
              </button> 
              <div id="puppy-pack-desc" class="visually-hidden">Join the Puppy Pack membership tier for $65 per year</div>
            </div> 
          </div>
          
          <div class="card" data-delay="0.2s"> 
            <h3 class="glow-diamond">🐶 Pug Pack</h3> 
            <p>$100 / year Membership</p> 
            <div class="benefits"> 
              <div class="benefit-item">👕 HSMC T-Shirt Coupon</div> 
              <div class="benefit-item">✅ Includes previous tier benefits</div> 
            </div> 
            <div class="card-footer"> 
              <div class="qr-link" tabindex="0" role="button" aria-label="Join Pug Pack membership" data-url="https://app.betterunite.com/hsmc-becomeamembertoday?embedded=true"> 
                <div class="qr-code" data-src="https://i.imgur.com/4NLunsW.png"></div> 
              </div> 
              <button class="join-btn" onclick="openMembershipModal()" aria-describedby="pug-pack-desc"> 
                Join Now 
              </button> 
              <div id="pug-pack-desc" class="visually-hidden">Join the Pug Pack membership tier for $100 per year</div>
            </div> 
          </div>
          
          <div class="card" data-delay="0.25s"> 
            <h3 class="glow-rainbow">🐾 Bulldog Pack</h3> 
            <p>$250 / year Membership</p> 
            <div class="benefits"> 
              <div class="benefit-item">🗳️🗳️ Two Votes at Annual Meeting</div> 
              <div class="benefit-item">🎫 20% Off Storewide Coupon</div> 
              <div class="benefit-item">🍖 Pet Treat Coupon</div> 
              <div class="benefit-item">👕👕 Two T-Shirt Coupons</div> 
              <div class="benefit-item">✅ Includes previous tier benefits</div> 
            </div> 
            <div class="card-footer"> 
              <div class="qr-link" tabindex="0" role="button" aria-label="Join Bulldog Pack membership" data-url="https://app.betterunite.com/hsmc-becomeamembertoday?embedded=true"> 
                <div class="qr-code" data-src="https://i.imgur.com/4NLunsW.png"></div> 
              </div> 
              <button class="join-btn" onclick="openMembershipModal()" aria-describedby="bulldog-pack-desc"> 
                Join Now 
              </button> 
              <div id="bulldog-pack-desc" class="visually-hidden">Join the Bulldog Pack membership tier for $250 per year</div>
            </div> 
          </div>
          
          <div class="card" data-delay="0.3s"> 
            <h3 class="glow-rainbow">🐾 Catnip Patron</h3> 
            <p>$500 / year Membership</p> 
            <div class="benefits"> 
              <div class="benefit-item">📰 Newsletter Recognition</div> 
              <div class="benefit-item">🎫 $25 Gift Coupon</div> 
              <div class="benefit-item">🚀 Priority Program Access</div> 
              <div class="benefit-item">✅ Includes previous tier benefits</div> 
            </div> 
            <div class="card-footer"> 
              <div class="qr-link" tabindex="0" role="button" aria-label="Join Catnip Patron membership" data-url="https://app.betterunite.com/adopthsmc-catnippatron?embedded=true"> 
                <div class="qr-code" data-src="https://i.imgur.com/TxmD348.png"></div> 
              </div> 
              <button class="join-btn" onclick="openMembershipModal()" aria-describedby="catnip-patron-desc"> 
                Join Now 
              </button> 
              <div id="catnip-patron-desc" class="visually-hidden">Join the Catnip Patron membership tier for $500 per year</div>
            </div> 
          </div>
        </div>
      </section>

      <section id="business" class="plans-section">
        <h2 style="text-align:center; margin-bottom:1.5rem; font-size:2rem; color:var(--accent);">
          Business Membership Plans
        </h2>
        <div class="cards">
          <div class="card" data-delay="0.35s"> <h3 class="glow-dalmatian">💼 Dalmatian Business</h3> <p>$500 / year Membership</p> <div class="benefits"> <div class="benefit-item">📅 Annual Listing</div> <div class="benefit-item">🎨 Logo on Events</div> </div> <div class="card-footer"> <div class="qr-link" tabindex="0" data-url="https://app.betterunite.com/hsmc-becomeamembertoday?embedded=true"> <div class="qr-code" data-src="https://i.imgur.com/4NLunsW.png"></div> </div> <button class="join-btn" onclick="openMembershipModal()"> Join Now </button> </div> </div>
          <div class="card" data-delay="0.4s"> <h3 class="glow-shepherd">💼 Shepherd Business</h3> <p>$1,000 / year Membership</p> <div class="benefits"> <div class="benefit-item">🌟 Monthly Spotlight</div> <div class="benefit-item">📣 Social Thank-you</div> <div class="benefit-item">✅ Includes Dalmatian Business benefits</div> </div> <div class="card-footer"> <div class="qr-link" tabindex="0" data-url="https://app.betterunite.com/hsmc-becomeamembertoday?embedded=true"> <div class="qr-code" data-src="https://i.imgur.com/4NLunsW.png"></div> </div> <button class="join-btn" onclick="openMembershipModal()"> Join Now </button> </div> </div>
          <div class="card" data-delay="0.45s"> <h3 class="glow-goldenbiz">💼 Golden Business</h3> <p>$2,500 / year Membership</p> <div class="benefits"> <div class="benefit-item">🎉 Event Sponsorship</div> <div class="benefit-item">📲 Promotional Posts</div> <div class="benefit-item">✅ Includes previous tier benefits</div> </div> <div class="card-footer"> <div class="qr-link" tabindex="0" data-url="https://app.betterunite.com/hsmc-becomeamembertoday?embedded=true"> <div class="qr-code" data-src="https://i.imgur.com/4NLunsW.png"></div> </div> <button class="join-btn" onclick="openMembershipModal()"> Join Now </button> </div> </div>
          <div class="card" data-delay="0.5s"> <h3 class="glow-danebiz">💼 Dane Business</h3> <p>$5,000 / year Membership</p> <div class="benefits"> <div class="benefit-item">🏆 Title Sponsorship</div> <div class="benefit-item">📰 Featured Press Release</div> <div class="benefit-item">✅ Includes previous tier benefits</div> </div> <div class="card-footer"> <div class="qr-link" tabindex="0" data-url="https://app.betterunite.com/hsmc-becomeamembertoday?embedded=true"> <div class="qr-code" data-src="https://i.imgur.com/4NLunsW.png"></div> </div> <button class="join-btn" onclick="openMembershipModal()"> Join Now </button> </div> </div>
        </div>
      </section>

      <section class="comparison-section">
        <h3>Compare Membership Plans</h3>
        <div class="table-container">
          <button id="toggle-personal-table" class="toggle-table-btn" aria-expanded="false" aria-controls="personal-table">
            Show Comparison
          </button>
          <div id="personal-table" class="comparison-table active">
            <table aria-label="Comparison of Personal membership plans">
              <thead> <tr> <th>Benefit</th> <th>Loyal Companion</th> <th>Kitty Love</th> <th>Puppy Pack</th> <th>Pug Pack</th> <th>Bulldog Pack</th> <th>Catnip Patron</th> </tr> </thead>
              <tbody> <tr><td>Price</td><td>Variable/Month</td><td>$45/Year</td><td>$65/Year</td><td>$100/Year</td><td>$250/Year</td><td>$500/Year</td></tr> <tr><td>Members-only Newsfeed</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Community Updates</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Membership Card</td><td></td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Vote at Annual Meeting</td><td></td><td>1</td><td>1</td><td>1</td><td>2</td><td>2</td></tr> <tr><td>In-Store Shirt Coupon</td><td></td><td>10% Off</td><td>10% Off</td><td class="check">✔</td><td>2 × ✔</td><td>2 × ✔</td></tr> <tr><td>Pet-toy Coupon</td><td></td><td class="check">✔</td><td>2 × ✔</td><td>2 × ✔</td><td>2 × ✔</td><td>2 × ✔</td></tr> <tr><td>In-Store Credit Voucher</td><td></td><td></td><td></td><td></td><td class="check">✔</td><td class="check">✔</td></tr>  <tr><td>Storewide Coupon</td><td></td><td></td><td></td><td></td><td>20% Off</td><td>20% Off</td></tr> <tr><td>Pet Treat Coupon</td><td></td><td></td><td></td><td></td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Newsletter Recognition</td><td></td><td></td><td></td><td></td><td></td><td class="check">✔</td></tr> <tr><td>Priority Program Access</td><td></td><td></td><td></td><td></td><td></td><td class="check">✔</td></tr>
              </tbody>
            </table>
            <div class="mobile-comparison"> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>💖 Loyal Companion</h4> <span>Variable/Month</span> </div> <div class="benefits-list"> <div class="benefit-item">📧 Members-only Newsfeed</div> <div class="benefit-item">💬 Community Updates & Invites</div> </div> </div> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>🐱 Kitty Love</h4> <span>$45/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">🎟️ Membership Card</div> <div class="benefit-item">🗳️ One Vote at Annual Meeting</div> <div class="benefit-item">🎫 10% Off In-Store Shirt Coupon</div> <div class="benefit-item">🧸 Pet-toy Coupon</div> <div class="benefit-item">✅ Includes all Loyal Companion benefits</div> </div> </div> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>🐶 Puppy Pack</h4> <span>$65/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">🧸 Additional Pet-toy Coupon</div> <div class="benefit-item">✅ Includes previous tier benefits</div> </div> </div> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>🐶 Pug Pack</h4> <span>$100/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">👕 HSMC T-Shirt Coupon</div> <div class="benefit-item">✅ Includes previous tier benefits</div> </div> </div> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>🐾 Bulldog Pack</h4> <span>$250/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">🗳️🗳️ Two Votes at Annual Meeting</div> <div class="benefit-item">🎫 20% Off Storewide Coupon</div> <div class="benefit-item">🍖 Pet Treat Coupon</div> <div class="benefit-item">👕👕 Two T-Shirt Coupons</div> <div class="benefit-item">✅ Includes previous tier benefits</div> </div> </div> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>🐾 Catnip Patron</h4> <span>$500/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">📰 Newsletter Recognition</div> <div class="benefit-item">🎫 $25 Gift Coupon</div> <div class="benefit-item">🚀 Priority Program Access</div> <div class="benefit-item">✅ Includes previous tier benefits</div> </div> </div>
            </div>
          </div>
        </div>
        <div class="table-container">
          <button id="toggle-business-table" class="toggle-table-btn" aria-expanded="false" aria-controls="business-table">
            Show Comparison
          </button>
          <div id="business-table" class="comparison-table">
            <table aria-label="Comparison of Business membership plans">
              <thead> <tr> <th>Benefit</th> <th>Dalmatian Business</th> <th>Shepherd Business</th> <th>Golden Business</th> <th>Dane Business</th> </tr> </thead>
              <tbody> <tr><td>Price</td><td>$500/Year</td><td>$1,000/Year</td><td>$2,500/Year</td><td>$5,000/Year</td></tr> <tr><td>Members-only Newsfeed</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Community Updates</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Membership Card</td><td></td><td class="check">✔</td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Vote at Annual Meeting</td><td></td><td>1</td><td>1</td><td>2</td></tr> <tr><td>In-Store Shirt Coupon</td><td></td><td>10% Off</td><td>10% Off</td><td>2 × ✔</td></tr> <tr><td>Pet-toy Coupon</td><td></td><td class="check">✔</td><td>2 × ✔</td><td>2 × ✔</td></tr> <tr><td>In-Store Credit Voucher</td><td></td><td></td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Storewide Coupon</td><td></td><td></td><td></td><td>20% Off</td></tr> <tr><td>Pet Treat Coupon</td><td></td><td></td><td class="check">✔</td><td class="check">✔</td></tr> <tr><td>Newsletter Recognition</td><td></td><td></td><td></td><td class="check">✔</td></tr> <tr><td>Priority Program Access</td><td></td><td></td><td></td><td class="check">✔</td></tr>
              </tbody>
            </table>
            <div class="mobile-comparison"> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>💼 Dalmatian Business</h4> <span>$500/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">📅 Annual Listing</div> <div class="benefit-item">🎨 Logo on Events</div> </div> </div> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>💼 Shepherd Business</h4> <span>$1,000/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">🌟 Monthly Spotlight</div> <div class="benefit-item">📣 Social Thank-you</div> <div class="benefit-item">✅ Includes Dalmatian Business benefits</div> </div> </div> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>💼 Golden Business</h4> <span>$2,500/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">🎉 Event Sponsorship</div> <div class="benefit-item">📲 Promotional Posts</div> <div class="benefit-item">✅ Includes previous tier benefits</div> </div> </div> 
                <div class="comparison-card"> <div class="card-header" onclick="toggleCard(this)" aria-expanded="false"> <h4>💼 Dane Business</h4> <span>$5,000/Year</span> </div> <div class="benefits-list"> <div class="benefit-item">🏆 Title Sponsorship</div> <div class="benefit-item">📰 Featured Press Release</div> <div class="benefit-item">✅ Includes previous tier benefits</div> </div> </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div> <button id="back-to-top" aria-label="Back to top">↑</button>

  <div id="pet-modal" class="feature-container" role="dialog" aria-modal="true" aria-labelledby="pet-modal-title">
    <button class="close-modal-btn" aria-label="Close pet modal">✖</button>
    <div class="modal-content-pet">
      <header>
        <h1 class="page-title" id="pet-modal-title">Adoptable Pets</h1>
        <div class="subtitle">Find your new best friend!</div>
      </header>
      <div class="controls-card">
        <div class="controls-grid">
          <div>
            <label for="speciesFilter">Species</label>
            <select id="speciesFilter" class="filter-select">
              <option value="">All Species</option>
            </select>
          </div>
          <div>
            <label for="genderFilter">Gender</label>
            <select id="genderFilter" class="filter-select">
              <option value="">All Genders</option>
              <option value="Female">Female</option>
              <option value="Male">Male</option>
            </select>
          </div>
          <div>
            <label for="search">Search</label>
            <div class="search-row">
              <input type="text" id="search" class="search-input" placeholder="Name, breed, etc.">
              <button id="searchButton" class="search-button" aria-label="Search Pets">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" width="22" height="22">
                  <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"></path>
                </svg>
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="pet-grid" id="petGrid">
        <div class="loading-container">
          <div class="spinner"></div>
          <p style="font-size:1.15em; color:#64748b;">Loading pets…</p>
        </div>
      </div>
    </div>
    
    <div class="modal-overlay" id="modalOverlay" tabindex="-1">
      <div class="modal-content" role="dialog" aria-modal="true" aria-labelledby="modalTitle">
        <div class="modal-header">
          <h2 id="modalTitle">Pet Profile</h2>
          <button class="modal-close" id="modalClose" aria-label="Close modal">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" width="30" height="30">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <div class="modal-iframe-container">
          <iframe class="modal-iframe" id="modalIframe" src="about:blank" title="Petango Profile"></iframe>
          <div class="modal-error" id="modalError" style="display:none;">No profile available for this pet.</div>
        </div>
      </div>
    </div>
  </div>

  <div id="terms-modal" class="feature-container" role="dialog" aria-modal="true" aria-labelledby="terms-modal-title"> 
    <button class="close-modal-btn" aria-label="Close terms modal">✖</button> 
    <div class="modal-content"> 
        <h3 id="terms-modal-title">Membership Information & Clarifications</h3> 
        <div class="clarification-item"> <h4><span class="emoji-icon">💌</span> Membership Welcome Packets</h4> <p>Your membership welcome packet is prepared shortly after you join. Depending on your chosen tier, this packet may include your physical membership card and valuable coupons.</p> <ul> <li><strong>Office Pickup (Recommended):</strong> You can pick up your welcome packet directly from our HSMC office during regular business hours. This is generally the quickest way to receive your membership materials and start enjoying your benefits!</li> <li><strong>Mail Delivery (By Request):</strong> If you prefer to have your packet mailed to your address, please call us at <strong>(734) 243-3669</strong> to make this request. Kindly allow 7-10 business days for mail delivery.</li> </ul> </div> 
        <div class="clarification-item"> <h4><span class="emoji-icon">🎟️</span> Using Your Coupons & Vouchers</h4> <p>All in-store vouchers and coupons, whether received in your welcome packet or delivered electronically for special promotions, are intended for <strong>one-time use</strong>. They are typically valid for <strong>12 months</strong> from the date of issuance, unless a different expiration date is explicitly stated on the coupon or voucher itself.</p> <ul> <li>To redeem, please present your physical coupon/voucher or the digital version (e.g., an email on your smartphone) at the HSMC.</li> </ul> </div> 
        <div class="clarification-item"> <h4><span class="emoji-icon">🗳️</span> Annual Meeting & Voting Rights</h4> <p>Certain membership tiers grant you voting rights at our Annual Meeting. This is an important way for members to contribute to the direction and governance of the Humane Society of Monroe County. The number of votes you receive corresponds to your membership level, as outlined in the plan details.</p> </div> 
        <div class="clarification-item"> <h4><span class="emoji-icon">📧</span> Digital Communications & News</h4> <p>Core benefits such as the members-only newsfeed, community updates, and event invitations will primarily be delivered digitally to the email address you provided during membership signup. To ensure you don't miss out, please add our email address to your contacts and check your spam or promotions folder occasionally.</p> </div> 
    </div> 
  </div>
  
  <div id="membership-modal" class="feature-container" role="dialog" aria-modal="true" aria-labelledby="membership-modal-title">
    <h2 id="membership-modal-title" class="visually-hidden">Membership Checkout</h2>
    <button class="close-modal-btn" aria-label="Close membership modal">✖</button>
    <div class="modal-spinner" role="status" aria-label="Loading…"></div>
    <div id="bu-embed-host">
        </div>
  </div>

  <script>
    // Centralized Body Overflow Management
    const bodyOverflowRequesters = new Set();
    const NO_SCROLL_CLASS = 'body-no-scroll';
    let previouslyFocusedElement = null;

    function requestBodyOverflowHidden(requesterId) { 
      if (!requesterId) return; 
      const isFirstRequester = bodyOverflowRequesters.size === 0; 
      bodyOverflowRequesters.add(requesterId); 
      if (isFirstRequester) { 
        document.body.style.overflow = 'hidden'; 
        document.body.classList.add(NO_SCROLL_CLASS); 
      } 
      if (typeof resizeCanvas === 'function') resizeCanvas(); 
    }
    
    function releaseBodyOverflowHidden(requesterId) { 
      if (!requesterId) return; 
      bodyOverflowRequesters.delete(requesterId); 
      if (bodyOverflowRequesters.size === 0) { 
        document.body.style.overflow = ''; 
        document.body.classList.remove(NO_SCROLL_CLASS); 
      } 
      if (typeof resizeCanvas === 'function') resizeCanvas(); 
    }

    // Performance optimization: Cache DOM elements
    const elements = {};
    
    function initializeElements() {
      elements.btnP = document.getElementById('btn-personal');
      elements.btnB = document.getElementById('btn-business');
      elements.secP = document.getElementById('personal');
      elements.secB = document.getElementById('business');
      elements.tableP = document.getElementById('personal-table');
      elements.tableB = document.getElementById('business-table');
      elements.toggleP = document.getElementById('toggle-personal-table');
      elements.toggleB = document.getElementById('toggle-business-table');
      elements.backBtn = document.getElementById('back-to-top');
      elements.canvas = document.getElementById('starry-canvas');
      elements.ctx = elements.canvas?.getContext('2d');
      elements.petModal = document.getElementById('pet-modal');
      elements.termsModal = document.getElementById('terms-modal');
      elements.memModal = document.getElementById('membership-modal');
      elements.buEmbedHost = document.getElementById('bu-embed-host');
      elements.spinner = elements.memModal?.querySelector('.modal-spinner');
      elements.hamburgerBtn = document.getElementById('hamburger-btn');
      elements.hamburgerMenu = document.getElementById('hamburger-menu');
      elements.closeMenuBtn = elements.hamburgerMenu?.querySelector('.close-menu-btn');
      elements.mobileBtnP = document.getElementById('mobile-btn-personal');
      elements.mobileBtnB = document.getElementById('mobile-btn-business');
    }

    // Improved debounce function with immediate execution option
    function debounce(func, wait, immediate = false) { 
      let timeout; 
      return function executedFunction(...args) { 
        const later = () => { 
          timeout = null; 
          if (!immediate) func.apply(this, args); 
        }; 
        const callNow = immediate && !timeout; 
        clearTimeout(timeout); 
        timeout = setTimeout(later, wait); 
        if (callNow) func.apply(this, args); 
      }; 
    }

    document.addEventListener('DOMContentLoaded', () => {
      initializeElements();
      updateTables();  
      if(window.innerWidth >= 600) reanimate('personal', true);

      // Improved skip link with better accessibility
      const skipLink = document.querySelector('.skip-link');
      if (skipLink) {
        skipLink.addEventListener('click', function(e) {
          e.preventDefault();
          const targetId = this.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);
          if (targetElement) {
            targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            targetElement.focus({ preventScroll: true });
          }
        });
      }

      // Optimize Core Benefits animation with better performance
      const coreBenefitsSection = document.querySelector('.core-benefits');
      if (coreBenefitsSection && 'IntersectionObserver' in window) {
        const coreBenefitsObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              coreBenefitsObserver.unobserve(entry.target);
            }
          });
        }, { threshold: 0.2, rootMargin: '0px 0px -50px 0px' });
        coreBenefitsObserver.observe(coreBenefitsSection);
      }

      // Fixed and optimized intersection observer for cards
      if ('IntersectionObserver' in window) {
        const cardObserverOptions = {
          rootMargin: '0px 0px -10% 0px', 
          threshold: 0.1 
        };
        
        const cardObserver = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const card = entry.target;
              card.classList.add('animate__animated', 'animate__zoomIn');
              cardObserver.unobserve(card);  
            }
          });
        }, cardObserverOptions);
        
        document.querySelectorAll('.card').forEach(card => {
          card.classList.remove('animate__animated', 'animate__zoomIn');  
          cardObserver.observe(card);
        });

        // Optimize QR code loading with better error handling
        const qrCodeObserver = new IntersectionObserver((entries, observer) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const qrDiv = entry.target;
              const qrImageSrc = qrDiv.dataset.src;
              if (qrImageSrc) {
                const img = new Image();
                img.onload = () => {
                  qrDiv.style.backgroundImage = `url('${qrImageSrc}')`;
                };
                img.onerror = () => {
                  console.warn('Failed to load QR code image:', qrImageSrc);
                  qrDiv.style.backgroundImage = 'url(data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100"><rect width="100%" height="100%" fill="%23ccc"/><text x="50%" y="50%" text-anchor="middle" dy="0.3em" fill="%23666">QR Code</text></svg>)';
                };
                img.src = qrImageSrc;
              }
              observer.unobserve(qrDiv);  
            }
          });
        }, { rootMargin: '50px' });  

        document.querySelectorAll('.qr-code[data-src]').forEach(qrDiv => {
          qrCodeObserver.observe(qrDiv);
        });
      } else {
        // Fallback for older browsers with error handling
        document.querySelectorAll('.qr-code[data-src]').forEach(qrDiv => {
          const qrImageSrc = qrDiv.dataset.src;
          if (qrImageSrc) {
            const img = new Image();
            img.onload = () => {
              qrDiv.style.backgroundImage = `url('${qrImageSrc}')`;
            };
            img.onerror = () => {
              console.warn('Failed to load QR code image:', qrImageSrc);
            };
            img.src = qrImageSrc;
          }
        });
        
        document.querySelectorAll('.card').forEach(card => {
          card.classList.add('animate__animated', 'animate__zoomIn');
        });
        
        if (coreBenefitsSection) { 
          coreBenefitsSection.classList.add('is-visible');
        }
      }

      resizeCanvas();
      initShooters();
    }, { passive: true });
    
    function toggleCard(header) { 
      const card = header.parentElement; 
      card.classList.toggle('expanded'); 
      const isExpanded = card.classList.contains('expanded');
      header.setAttribute('aria-expanded', isExpanded.toString());
    }

    // Improved navigation handlers with error checking
    document.querySelectorAll('.nav-home, .nav-exit').forEach(button => { 
      button.addEventListener('click', () => { 
        try {
          window.open('https://www.monroe-humane.org', '_blank', 'noopener,noreferrer'); 
        } catch (error) {
          console.error('Failed to open external link:', error);
          window.location.href = 'https://www.monroe-humane.org';
        }
      }); 
    });
    
    function reanimate(id, useFullDelay) { 
      if (!window.requestAnimationFrame) return;
      const cards = document.querySelectorAll(`#${id} .card`);
      if (!cards.length) return;
      
      cards.forEach(c => {
        c.classList.remove('animate__animated', 'animate__zoomIn');
        void c.offsetWidth;  
        const delay = parseFloat(c.dataset.delay || 0) * (useFullDelay ? 1000 : 50);
        setTimeout(() => {  
          c.classList.add('animate__animated', 'animate__zoomIn');
        }, delay); 
      });
    }

    function updateTables() {
      if (!elements.btnP || !elements.btnB) return;
      
      const mobile = window.innerWidth < 600;
      const isPersonalActive = elements.btnP.classList.contains('active');
      
      if (isPersonalActive) {
        elements.secP?.classList.add('active');
        elements.secB?.classList.remove('active');
        elements.tableP?.classList.add('active');
        elements.tableB?.classList.remove('active');
        
        if (elements.toggleP) {
          elements.toggleP.style.display = mobile ? 'block' : 'none';
        }
        if (elements.toggleB) {
          elements.toggleB.style.display = 'none';
        }
        
        if (!mobile) { 
          elements.tableP?.classList.add('visible'); 
          elements.tableB?.classList.remove('visible'); 
        }
      } else {
        elements.secB?.classList.add('active');
        elements.secP?.classList.remove('active');
        elements.tableB?.classList.add('active');
        elements.tableP?.classList.remove('active');
        
        if (elements.toggleB) {
          elements.toggleB.style.display = mobile ? 'block' : 'none';
        }
        if (elements.toggleP) {
          elements.toggleP.style.display = 'none';
        }
        
        if (!mobile) { 
          elements.tableB?.classList.add('visible'); 
          elements.tableP?.classList.remove('visible'); 
        }
      }
    }

    // Improved button handlers with null checks
    if (elements.btnP) {
      elements.btnP.onclick = () => { 
        elements.btnP.classList.add('active'); 
        elements.btnB?.classList.remove('active'); 
        elements.mobileBtnP?.classList.add('active'); 
        elements.mobileBtnB?.classList.remove('active'); 
        updateTables(); 
        if(window.innerWidth >= 600) reanimate('personal', false); 
      };
    }
    
    if (elements.btnB) {
      elements.btnB.onclick = () => { 
        elements.btnB.classList.add('active'); 
        elements.btnP?.classList.remove('active'); 
        elements.mobileBtnB?.classList.add('active'); 
        elements.mobileBtnP?.classList.remove('active'); 
        updateTables(); 
        if(window.innerWidth >= 600) reanimate('business', false); 
      };
    }

    if (elements.toggleP) {
      elements.toggleP.onclick = () => { 
        const vis = elements.tableP.classList.toggle('visible'); 
        elements.toggleP.textContent = vis ? 'Hide Comparison' : 'Show Comparison'; 
        elements.toggleP.setAttribute('aria-expanded', vis ? 'true' : 'false'); 
      };
    }
    
    if (elements.toggleB) {
      elements.toggleB.onclick = () => { 
        const vis = elements.tableB.classList.toggle('visible'); 
        elements.toggleB.textContent = vis ? 'Hide Comparison' : 'Show Comparison'; 
        elements.toggleB.setAttribute('aria-expanded', vis ? 'true' : 'false'); 
      };
    }

    // Improved modal management with better error handling
    function openModal(modal) { 
      if (!modal || !modal.id) { 
        console.error('Invalid modal provided to openModal');
        return; 
      } 
      
      previouslyFocusedElement = document.activeElement;
      requestAnimationFrame(() => { 
        modal.style.display = modal.id === 'pet-modal' ? 'flex' : 'block'; 
        requestBodyOverflowHidden(modal.id); 
        const closeButton = modal.querySelector('.close-modal-btn');
        if (closeButton) {
          closeButton.focus();
        }
      }); 
    }
    
    function closeModal(modalToClose) { 
      if (!modalToClose || !modalToClose.id) { 
        console.error('Invalid modal provided to closeModal');
        return; 
      } 
      
      requestAnimationFrame(() => { 
        modalToClose.style.display = 'none'; 
        releaseBodyOverflowHidden(modalToClose.id); 
        if (previouslyFocusedElement) {
          try {
            previouslyFocusedElement.focus();
          } catch (error) {
            console.warn('Failed to restore focus:', error);
          }
          previouslyFocusedElement = null;
        }
      }); 
    }

    // Initialize navigation handlers
    document.querySelectorAll('.nav-pets').forEach(b => b.onclick = () => openPetModal());
    document.querySelectorAll('.nav-terms').forEach(b => b.onclick = () => openModal(elements.termsModal));
    
    document.querySelectorAll('.feature-container > .close-modal-btn').forEach(btn => { 
      btn.onclick = () => { 
        let modalToClose = btn.closest('.feature-container'); 
        if (modalToClose) { 
          if (modalToClose.id === 'pet-modal') {
            closePetModal(); 
          } else {
            closeModal(modalToClose); 
          }
        } 
      }; 
    });
    
    // Improved membership modal with better error handling
    function openMembershipModal() { 
      if (!elements.memModal || !elements.spinner || !elements.buEmbedHost) {
        console.error("Membership modal components not found.");
        return;
      }

      elements.spinner.style.display = 'block';
      elements.buEmbedHost.innerHTML = ''; 

      const checkoutDiv = document.createElement('div');
      checkoutDiv.id = 'bu-checkout'; 
      elements.buEmbedHost.appendChild(checkoutDiv);

      const fixedBetterUniteCheckoutPageUrl = 'https://bnte.us/sc/kokSYhX8';

      const script = document.createElement('script');
      script.src = `https://app.betterunite.com/embedjs?u=${encodeURIComponent(fixedBetterUniteCheckoutPageUrl)}`;
      script.async = true; 

      script.onload = () => {
        if(elements.spinner) elements.spinner.style.display = 'none';
      };

      script.onerror = () => {
        console.error('Failed to load BetterUnite embed script');
        if(elements.spinner) elements.spinner.style.display = 'none';
        elements.buEmbedHost.innerHTML = '<p style="color: white; text-align: center; padding: 20px;">Error loading membership checkout. Please try again later or contact support.</p>';
      };

      elements.buEmbedHost.appendChild(script); 
      openModal(elements.memModal); 
    }
    
    // Updated QR link handlers
    document.querySelectorAll('.qr-link').forEach(qr => { 
      qr.onclick = e => { e.preventDefault(); openMembershipModal(); }; 
      qr.onkeydown = e => { 
        if (e.key === 'Enter' || e.key === ' ') { 
          e.preventDefault(); 
          openMembershipModal(); 
        } 
      }; 
    });

    // Optimized scroll handler
    let lastKnownScrollPosition = 0; 
    let ticking = false;
    
    const handleScroll = () => {
      lastKnownScrollPosition = window.pageYOffset; 
      if (!ticking) { 
        window.requestAnimationFrame(() => { 
          if (elements.backBtn) {
            elements.backBtn.classList.toggle('show', lastKnownScrollPosition > 300); 
          }
          ticking = false; 
        }); 
        ticking = true; 
      }
    };
    
    window.addEventListener('scroll', handleScroll, { passive: true });
    
    if (elements.backBtn) {
      elements.backBtn.onclick = () => window.scrollTo({top: 0, behavior: 'smooth'});
    }

    // Canvas animation variables
    let stars = [], shooters = [], lastTime = 0, animationActive = false;
    
    function resizeCanvas() { 
      if (!elements.canvas || !elements.ctx) return; 
      
      elements.canvas.width = window.innerWidth; 
      elements.canvas.height = window.innerHeight; 
      initStars(); 
      
      const prefersReducedMotion = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
      const shouldBeActive = window.innerWidth <= 600 && !document.body.classList.contains(NO_SCROLL_CLASS) && !prefersReducedMotion; 
      
      if (shouldBeActive && !animationActive) { 
        animationActive = true; 
        lastTime = 0; 
        requestAnimationFrame(animate); 
      } else if (!shouldBeActive && animationActive) { 
        animationActive = false; 
      }
    }

    function initStars() { 
      if (!elements.canvas) return; 
      stars = []; 
      const starCount = Math.min(200, Math.floor(window.innerWidth / 6)); 
      for(let i = 0; i < starCount; i++) { 
        stars.push({ 
          x: Math.random() * elements.canvas.width, 
          y: Math.random() * elements.canvas.height, 
          size: Math.random() * 1.5 + 0.5, 
          opacity: Math.random() * 0.4 + 0.3 
        }); 
      } 
    }
    
    function initShooters() { 
      if (!elements.canvas) return; 
      shooters = []; 
      const shooterCount = window.innerWidth < 600 ? 2 : 3; 
      for(let i = 0; i < shooterCount; i++) { 
        shooters.push({ 
          x: -50, 
          y: -50, 
          length: Math.random() * 40 + 20, 
          speed: Math.random() * 4 + 2, 
          opacity: 0, 
          trail: [], 
          active: false 
        }); 
      } 
    }
    
    function animate(t) { 
      if (!animationActive || !elements.ctx) return; 
      
      if(!lastTime) lastTime = t; 
      const dt = (t - lastTime) / 1000; 
      lastTime = t; 
      
      elements.ctx.clearRect(0, 0, elements.canvas.width, elements.canvas.height); 
      
      // Draw stars
      stars.forEach(s => { 
        elements.ctx.globalAlpha = s.opacity; 
        elements.ctx.fillStyle = 'white'; 
        elements.ctx.beginPath(); 
        elements.ctx.arc(s.x, s.y, s.size, 0, Math.PI * 2); 
        elements.ctx.fill(); 
      }); 
      
      // Handle shooters
      let activeShooterCount = shooters.filter(s => s.active).length; 
      shooters.forEach(s => { 
        if(s.active) { 
          s.x -= s.speed * (dt * 60); 
          s.opacity -= dt * 1.5; 
          s.trail.push({x: s.x, y: s.y}); 
          if(s.trail.length > s.length) s.trail.shift(); 
          if(s.opacity <= 0) { 
            s.active = false; 
            s.trail = []; 
            activeShooterCount--; 
          } 
          elements.ctx.beginPath(); 
          elements.ctx.moveTo(s.x, s.y); 
          elements.ctx.globalAlpha = s.opacity; 
          s.trail.forEach(p => elements.ctx.lineTo(p.x, p.y)); 
          elements.ctx.strokeStyle = 'rgba(255,255,255,0.7)'; 
          elements.ctx.lineWidth = 1.5; 
          elements.ctx.stroke(); 
        } else if(Math.random() < (0.002 * (dt * 60)) && activeShooterCount < (window.innerWidth < 600 ? 1 : 2)) { 
          Object.assign(s, { 
            x: elements.canvas.width + Math.random() * 100, 
            y: Math.random() * elements.canvas.height * 0.7, 
            opacity: 1, 
            active: true, 
            trail: [] 
          }); 
          activeShooterCount++; 
        } 
      }); 
      
      if (animationActive) { 
        requestAnimationFrame(animate); 
      } 
    }
    
    window.addEventListener('resize', debounce(resizeCanvas, 250), { passive: true });

    // Improved hamburger menu with better accessibility
    if (elements.hamburgerBtn && elements.hamburgerMenu && elements.closeMenuBtn) {
      elements.hamburgerBtn.addEventListener('click', () => { 
        previouslyFocusedElement = document.activeElement;
        requestAnimationFrame(() => { 
          elements.hamburgerMenu.classList.add('open'); 
          requestBodyOverflowHidden('hamburger-menu'); 
          elements.hamburgerBtn.setAttribute('aria-expanded', 'true'); 
          elements.closeMenuBtn.focus();
        }); 
      });
      
      function closeHamburgerMenu() { 
        elements.hamburgerMenu.classList.remove('open'); 
        releaseBodyOverflowHidden('hamburger-menu'); 
        elements.hamburgerBtn.setAttribute('aria-expanded', 'false'); 
        if (previouslyFocusedElement) {
          try {
            previouslyFocusedElement.focus();
          } catch (error) {
            console.warn('Failed to restore focus after closing menu:', error);
          }
          previouslyFocusedElement = null;
        }
      }
      
      elements.closeMenuBtn.addEventListener('click', closeHamburgerMenu);
      
      // Improved click outside handler
      document.addEventListener('click', (event) => { 
        if (elements.hamburgerMenu.classList.contains('open') && 
            !elements.hamburgerMenu.contains(event.target) && 
            !elements.hamburgerBtn.contains(event.target)) { 
          closeHamburgerMenu(); 
        } 
      });
      
      // Improved keyboard handlers
      document.addEventListener('keydown', (event) => { 
        if (event.key === 'Escape') { 
          if (elements.hamburgerMenu.classList.contains('open')) { 
            closeHamburgerMenu(); 
          } else { 
            const openModals = [elements.memModal, elements.petModal, elements.termsModal].filter(m => m && m.style.display !== 'none'); 
            if (openModals.length > 0) { 
              const modalToClose = openModals[0]; 
              if (modalToClose.id === 'pet-modal') { 
                closePetModal(); 
              } else { 
                closeModal(modalToClose); 
              } 
            } 
          } 
        } 
      });
      
      if (elements.mobileBtnP) {
        elements.mobileBtnP.addEventListener('click', () => { 
          elements.mobileBtnP.classList.add('active'); 
          elements.mobileBtnB?.classList.remove('active'); 
          elements.btnP?.click(); 
        });
      }
      
      if (elements.mobileBtnB) {
        elements.mobileBtnB.addEventListener('click', () => { 
          elements.mobileBtnB.classList.add('active'); 
          elements.mobileBtnP?.classList.remove('active'); 
          elements.btnB?.click(); 
        });
      }
      
      // Improved mobile navigation handler
      const mobileNav = document.querySelector('.mobile-nav');
      if (mobileNav) {
        mobileNav.addEventListener('click', (event) => { 
          const button = event.target.closest('button'); 
          if (button && !button.parentElement.classList.contains('mobile-toggle-bar')) { 
            if (['nav-home', 'nav-pets', 'nav-terms', 'nav-exit'].some(cls => button.classList.contains(cls))) { 
              closeHamburgerMenu(); 
            } 
          } 
        });
      }
    }

    // Pet Modal functionality with improved error handling
    const petIframe = document.getElementById('pet-iframe'); const petLoading = document.getElementById('pet-loading');
    let petIframeLoadedOnce = false;  
    function openPetModal() { openModal(elements.petModal); petLoading.style.opacity = '1'; petLoading.style.display = 'flex'; if (!petIframeLoadedOnce) { if (petIframe.getAttribute('data-src')) { petIframe.src = petIframe.getAttribute('data-src'); petIframeLoadedOnce = true; } else { petLoading.style.opacity = '0'; petLoading.style.display = 'none'; } } }
    function closePetModal() { closeModal(elements.petModal); }
    petIframe.addEventListener('load', () => { if (petIframe.src && petIframe.src !== 'about:blank' && !petIframe.src.startsWith('blob:') && petIframe.src !== window.location.href + '#') { setTimeout(() => { petLoading.style.opacity = '0'; setTimeout(() => { if (petLoading.style.opacity === '0') { petLoading.style.display = 'none'; } }, 500); }, 300); } });
    function refreshPets() { petLoading.style.display = 'flex'; petLoading.style.opacity = '1'; const baseUrl = petIframe.getAttribute('data-src'); if (!baseUrl) { petLoading.style.opacity = '0'; petLoading.style.display = 'none'; return; } const timestamp = Date.now(); const refreshUrl = baseUrl.includes('?') ? `${baseUrl}&refresh=${timestamp}` : `${baseUrl}?refresh=${timestamp}`; petIframe.src = refreshUrl; }

    // Constants for the CSV
    const COL_ID       = "ID";
    const COL_NAME     = "Name";
    const COL_SPECIES  = "Species";
    const COL_BREED    = "Breed";
    const COL_SEX      = "Sex/SN";
    const COL_AGE      = "Age";
    const COL_LOCATION = "Location";
    const COL_PHOTO    = "Photo URL";
    const COL_DESC     = "Description";
    const COL_ARCHIVED = "Archived";

    // Sheet info
    const SHEET_ID  = '1jO9GowDUU6GzSHA39zbR7beK3GgW9bAsY71LIftdCyM';
    const SHEET_GID = '0';
    const CSV_URL   = `https://docs.google.com/spreadsheets/d/${SHEET_ID}/export?format=csv&gid=${SHEET_GID}`;

    let allPets = [];
    let displayedPets = [];
    let speciesFilterEl, genderFilterEl, searchEl, searchButtonEl, petGridEl;
    let modalOverlayEl, modalContentEl, modalIframeEl, modalErrorEl, modalCloseBtn, modalTitleEl;
    let petDataLoaded = false;

    // Modified openPetModal function to load pet data if needed
    function openPetModal() {
      openModal(elements.petModal);
      
      // Don't repeatedly fetch pet data if already loaded
      if (!petDataLoaded) {
        // Initialize references to elements (lazy init when modal opens)
        speciesFilterEl = document.getElementById('speciesFilter');
        genderFilterEl  = document.getElementById('genderFilter');
        searchEl        = document.getElementById('search');
        searchButtonEl  = document.getElementById('searchButton');
        petGridEl       = document.getElementById('petGrid');
        modalOverlayEl  = document.getElementById('modalOverlay');
        modalContentEl  = modalOverlayEl.querySelector('.modal-content');
        modalIframeEl   = document.getElementById('modalIframe');
        modalErrorEl    = document.getElementById('modalError');
        modalCloseBtn   = document.getElementById('modalClose');
        modalTitleEl    = document.getElementById('modalTitle');

        // Setup event listeners
        setupPetEventListeners();
        
        // Load the pet data
        loadPets();
        petDataLoaded = true;
      }
    }

    // Helper: Extract gender part from the "Sex/SN" field
    function getGender(sexField) {
      if (!sexField) return "";
      return String(sexField).split('/')[0].trim();
    }

    // Populate "Species" dropdown based on non-archived pets
    function populateSpeciesFilter(pets) {
      const speciesSet = new Set();
      pets.forEach(pet => {
        const species = String(pet[COL_SPECIES] || "").trim();
        if (species) speciesSet.add(species);
      });
      const speciesArr = Array.from(speciesSet).sort((a, b) => a.localeCompare(b));
      speciesFilterEl.innerHTML = '<option value="">All Species</option>' +
        speciesArr.map(s => `<option value="${s}">${s}</option>`).join('');
    }

    // Render visible pet cards, excluding archived ones defensively
    function renderPets() {
      const speciesVal = speciesFilterEl.value;
      const genderVal  = genderFilterEl.value;
      const query      = searchEl.value.trim().toLowerCase();
      
      displayedPets = allPets.filter(pet => {
        // Defensive check: skip if archived
        if (String(pet[COL_ARCHIVED] || "").trim().toLowerCase() === "yes") {
          return false;
        }
        // Species filter
        if (speciesVal && String(pet[COL_SPECIES] || "").trim() !== speciesVal) {
          return false;
        }
        // Gender filter
        if (genderVal && getGender(pet[COL_SEX]) !== genderVal) {
          return false;
        }
        // Search query against name, breed, species, or description
        if (query) {
          const matchesName    = String(pet[COL_NAME] || "").toLowerCase().includes(query);
          const matchesBreed   = String(pet[COL_BREED] || "").toLowerCase().includes(query);
          const matchesSpecies = String(pet[COL_SPECIES] || "").toLowerCase().includes(query);
          const matchesDesc    = String(pet[COL_DESC] || "").toLowerCase().includes(query);
          return (matchesName || matchesBreed || matchesSpecies || matchesDesc);
        }
        // If no query and all filters passed, keep the pet
        return true;
      });
      
      // If no pets match, show a "No pets match your criteria" message
      if (!displayedPets.length) {
        petGridEl.innerHTML = `
          <div class="loading-container" style="min-height:220px;">
            <div style="font-size:1.13em;color:#64748b;">No pets match your criteria.</div>
            <div style="color:#94a3b8; font-size:0.98em;">Try adjusting filters or search terms.</div>
          </div>
        `;
        return;
      }
      
      // Otherwise, build the grid of pet cards
      petGridEl.innerHTML = displayedPets.map((p, i) => {
        const petName     = String(p[COL_NAME] || '(No Name)').trim();
        const petSpecies  = String(p[COL_SPECIES] || 'N/A').trim();
        const petBreed    = String(p[COL_BREED] || 'N/A').trim();
        const petSex      = getGender(p[COL_SEX]) || 'N/A';
        const petAge      = String(p[COL_AGE] || 'N/A').trim();
        const petLocation = String(p[COL_LOCATION] || 'N/A').trim();
        const photoUrl    = (p[COL_PHOTO] && isImageURL(p[COL_PHOTO]))
                        ? p[COL_PHOTO]
                        : `https://placehold.co/600x400/e2e8f0/94a3b8?text=No+Photo&font=Inter`;
        return `
          <div class="pet-card" data-pet-index="${i}" tabindex="0" aria-label="View profile for ${petName}">
            <img class="pet-photo" loading="lazy" src="${photoUrl}" alt="${petName}">
            <div class="pet-details">
              <div class="pet-name" title="${petName}">${petName}</div>
              <div class="pet-row"><b>Species:</b> ${petSpecies}</div>
              <div class="pet-row"><b>Breed:</b> ${petBreed}</div>
              <div class="pet-row"><b>Sex:</b> ${petSex}</div>
              <div class="pet-row"><b>Age:</b> ${petAge}</div>
              <div class="pet-row"><b>Location:</b> ${petLocation}</div>
              <div class="view-profile"><span>View Profile</span></div>
            </div>
          </div>
        `;
      }).join('');
      
      // Attach click/keyboard listeners to each pet card for opening the modal
      document.querySelectorAll('.pet-card').forEach(card => {
        card.addEventListener('click', () => openPetDetail(parseInt(card.dataset.petIndex)));
        card.addEventListener('keydown', e => {
          if (e.key === 'Enter' || e.key === ' ') {
            e.preventDefault();
            openPetDetail(parseInt(card.dataset.petIndex));
          }
        });
      });
    }

    // Validate if a string is a valid image URL
    function isImageURL(url) {
      if (typeof url !== 'string') return false;
      url = url.trim();
      return (
        /^https?:\/\/.+\.(jpg|jpeg|png|gif|webp|bmp|svg)(\?.*)?$/i.test(url) ||
        /drive\.google\.com\/(?:uc\?export=view&id=|file\/d\/)([a-zA-Z0-9_-]+)/.test(url) ||
        /photos\.app\.goo\.gl\//.test(url)
      );
    }

    // Load Petango details
    function loadPapaParse(callback) {
      if (window.Papa) {
        callback();
        return;
      }
      
      const script = document.createElement('script');
      script.src = "https://cdn.jsdelivr.net/npm/papaparse@5.4.1/papaparse.min.js";
      script.onload = callback;
      script.onerror = () => {
        console.error("Failed to load PapaParse library");
        petGridEl.innerHTML = `
          <div class="loading-container">
            <p style="color:red;">Could not load required libraries.</p>
          </div>
        `;
      };
      document.head.appendChild(script);
    }

    // Fetch CSV, parse, filter out archived pets, then populate filters and render
    function loadPets() {
      petGridEl.innerHTML = `
        <div class="loading-container">
          <div class="spinner"></div>
          <p style="font-size:1.15em; color:#64748b;">Loading pets…</p>
        </div>
      `;
      
      loadPapaParse(() => {
        fetch(CSV_URL)
          .then(response => {
            if (!response.ok) {
              throw new Error(`Network response was not ok: ${response.statusText} (Status: ${response.status})`);
            }
            return response.text();
          })
          .then(csv => {
            const parsed = Papa.parse(csv, { header: true, skipEmptyLines: true });
            allPets = parsed.data.map(pet => ({
              [COL_ID]:       pet[COL_ID] || null,
              [COL_NAME]:     pet[COL_NAME] || '',
              [COL_SPECIES]:  pet[COL_SPECIES] || '',
              [COL_BREED]:    pet[COL_BREED] || '',
              [COL_SEX]:      pet[COL_SEX] || '',
              [COL_AGE]:      pet[COL_AGE] || '',
              [COL_LOCATION]: pet[COL_LOCATION] || '',
              [COL_PHOTO]:    pet[COL_PHOTO] || '',
              [COL_DESC]:     pet[COL_DESC] || '',
              [COL_ARCHIVED]: pet[COL_ARCHIVED] || 'No'
            }));
            
            // Filter out any pets marked as archived = "Yes"
            allPets = allPets.filter(pet => {
              return String(pet[COL_ARCHIVED] || "").trim().toLowerCase() !== "yes";
            });
            
            if (allPets.length === 0) {
              petGridEl.innerHTML = `
                <div class="loading-container">
                  <p style="font-size:1.1em;">No pets found.</p>
                </div>
              `;
              return;
            }
            
            // Populate species dropdown from the filtered list
            populateSpeciesFilter(allPets);
            
            // Render pet grid based on filtered list and current filters
            renderPets();
          })
          .catch(e => {
            petGridEl.innerHTML = `
              <div class="loading-container">
                <p style="color:red;">Could not load pet list. Please try again later.</p>
              </div>
            `;
            console.error("Error loading pets:", e);
          });
      });
    }

    // Setup event listeners for the pet search functionality
    function setupPetEventListeners() {
      searchEl.addEventListener('input', renderPets);
      searchButtonEl.addEventListener('click', renderPets);
      speciesFilterEl.addEventListener('change', renderPets);
      genderFilterEl.addEventListener('change', renderPets);
      modalCloseBtn.addEventListener('click', closePetDetail);
      modalOverlayEl.addEventListener('click', function(e) {
        if (e.target === this) closePetDetail();
      });
      
      // Handle Escape key for closing the detail modal
      document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modalOverlayEl.classList.contains('active')) {
          closePetDetail();
        }
      });
    }

    // Open modal and load Petango profile (or show error if no ID)
    function openPetDetail(idx) {
      if (idx < 0 || idx >= displayedPets.length) {
        modalTitleEl.textContent = 'Error';
        modalIframeEl.style.display = "none";
        modalErrorEl.textContent = "Could not display pet details due to an internal error (invalid index).";
        modalErrorEl.style.display = 'flex';
        modalOverlayEl.classList.add('active');
        modalContentEl.focus();
        return;
      }
      
      const pet = displayedPets[idx];
      const animalID = String(pet[COL_ID] || "").trim();
      const petName  = String(pet[COL_NAME] || "Pet").trim();
      
      modalTitleEl.textContent = petName ? `${petName}'s Profile` : 'Pet Profile';
      
      if (animalID) {
        modalIframeEl.src = `https://ws.petango.com/webservices/adoptablesearch/wsAdoptableAnimalDetails2.aspx?id=${animalID}&css=&authkey=40fm1dbi1t4267edhjlafrfmbgfqfvmi0vjjm3iori7pxqk8xp&PopUp=true`;
        modalIframeEl.style.display = "block";
        modalErrorEl.style.display = "none";
      } else {
        modalIframeEl.src = "about:blank";
        modalIframeEl.style.display = "none";
        modalErrorEl.textContent = `Detailed profile for ${petName || 'this pet'} is not available as an ID was not provided.`;
        modalErrorEl.style.display = "flex";
      }
      
      modalOverlayEl.classList.add('active');
      modalContentEl.focus();
    }

    // Close the pet-detail modal
    function closePetDetail() {
      modalOverlayEl.classList.remove('active');
      setTimeout(() => {
        modalIframeEl.src = "about:blank";
      }, 250);
    }

    // Replace refreshPets with new implementation
    function refreshPets() {
      // Reset filters
      speciesFilterEl.value = '';
      genderFilterEl.value = '';
      searchEl.value = '';
      
      // Reload pets
      loadPets();
    }
  </script>
</body>
</html>
