{{-- <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
  <div class="container">
    <a class="navbar-brand" href="/">
      <span class="brand-text">FotoStudio</span>
    </a>
    
    <button class="navbar-toggler custom-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="ms-auto nav-buttons">
        <a href="/login" class="btn btn-nav {{ request()->is('login') ? 'active' : '' }}">Login</a>
        <a href="/shop" class="btn btn-nav {{ request()->is('shop') ? 'active' : '' }}">Shop</a>
        <a href="/gallery" class="btn btn-nav {{ request()->is('gallery') ? 'active' : '' }}">Gallery</a>
        <a href="/contact" class="btn btn-nav {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
      </div>
    </div>
  </div>
</nav>

<!-- Spacer to prevent content from hiding under fixed navbar -->
<div class="navbar-spacer"></div>

<style>
  :root { 
    --primary-color: #1eaae9;
    --primary-hover: #0f8fd1;
    --navbar-height: 72px;
  }

  /* Navbar Base Styles - dark translucent over hero */
  .navbar-custom {
    background: rgba(0,0,0,0.70); /* slightly transparent dark */
    color: white;
    padding: 12px 0;
    transition: background 0.4s ease, box-shadow 0.4s ease, padding 0.3s ease;
    z-index: 1030;
    backdrop-filter: blur(6px);
  }

  /* Scrolled state: solid white with dark text and shadow */
  .navbar-custom.scrolled {
    background: #ffffff; /* keep white but avoid gray text */
    color: #062b44; /* deep blue instead of gray */
    box-shadow: 0 8px 30px rgba(30,170,233,0.12); /* soft blue-tinted shadow */
    padding: 10px 0;
  }

  .navbar-spacer {
    height: var(--navbar-height);
  }

  /* Brand Styling */
  .navbar-brand {
    font-size: 1.5rem;
    font-weight: 700;
    padding: 6px 0;
    margin: 0;
    display: flex;
    align-items: center;
  }

  .brand-text {
    color: #ffffff; /* white over dark */
    transition: color 0.35s ease, transform 0.35s ease;
  }

  .navbar-custom.scrolled .brand-text {
    color: #062b44; /* deep blue when scrolled - no gray */
  }

  /* Navigation Buttons */
  .nav-buttons {
    display: flex;
    align-items: center;
    gap: 0.5rem;
  }

  .btn-nav {
    background-color: var(--primary-color);
    color: white !important;
    border-radius: 28px;
    padding: 8px 20px;
    margin-left: 12px;
    transition: transform 0.25s ease, background-color 0.25s ease, box-shadow 0.25s ease;
    border: none;
    font-weight: 600;
    box-shadow: 0 2px 8px rgba(30,170,233,0.12);
    display: inline-flex;
    align-items: center;
    justify-content: center;
  }

  /* Hover: slightly enlarge and brighten */
  .btn-nav:hover, .btn-nav:focus {
    transform: scale(1.05);
    background-color: var(--primary-hover);
    box-shadow: 0 8px 22px rgba(15,143,209,0.18);
    color: white !important;
  }

  /* When navbar is scrolled (white background) keep buttons as blue but stronger contrast */
  .navbar-custom.scrolled .btn-nav {
    background-color: var(--primary-color);
    color: white !important;
    box-shadow: 0 4px 18px rgba(30,170,233,0.14);
  }

  .navbar-custom.scrolled .btn-nav:hover {
    background-color: var(--primary-hover);
  }

  .btn-nav::after {
    content: '';
    position: absolute;
    top: 50%;
    left: 50%;
    width: 0;
    height: 0;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 50%;
    transform: translate(-50%, -50%);
    transition: width 0.3s ease, height 0.3s ease;
  }

  .btn-nav:active::after {
    width: 200px;
    height: 200px;
    opacity: 0;
  }

  /* Toggler Customization */
  .custom-toggler {
    border: none;
    padding: 0.25rem 0.75rem;
    transition: all 0.3s ease;
  }

  .custom-toggler:focus {
    box-shadow: none;
    outline: none;
  }

  .navbar-toggler-icon {
    /* default (over dark hero): white lines */
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23ffffff' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }

  /* when scrolled (white bg) show dark/blue toggler */
  .navbar-custom.scrolled .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%23062b44' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
  }

  /* Collapse Animation */
  .navbar-collapse {
    transition: all 0.3s ease-in-out;
  }

  /* Responsive Styles */
  @media (max-width: 991px) {
    .nav-buttons {
      margin-top: 1rem;
      flex-direction: column;
      gap: 0.5rem;
      width: 100%;
    }

    .btn-nav {
      margin-left: 0;
      width: 100%;
      text-align: center;
    }

    .navbar-collapse {
      max-height: calc(100vh - var(--navbar-height));
      overflow-y: auto;
    }

    .custom-toggler {
      padding: 0.5rem;
    }
  }

  @media (max-width: 576px) {
    .navbar-brand {
      font-size: 1.25rem;
    }

    .navbar-custom {
      padding: 10px 0;
    }
  }

  /* Dark mode support */
  @media (prefers-color-scheme: dark) {
    .navbar-custom {
      background-color: rgba(33, 37, 41, 0.98);
    }

    .brand-text {
      color: var(--primary-color);
    }

    .btn-nav:hover {
      background-color: transparent;
    }
  }
</style> --}}
