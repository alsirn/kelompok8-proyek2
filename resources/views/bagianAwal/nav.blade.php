<nav class="navbar navbar-expand-lg navbar-custom">
  <div class="container">
    <a class="navbar-brand" href="/">FotoStudio</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="ms-auto nav-buttons">
        <a href="/login" class="btn btn-nav">Login</a>
        <a href="/shop" class="btn btn-nav">Shop</a>
        <a href="/gallery" class="btn btn-nav">Gallery</a>
        <a href="/contact" class="btn btn-nav">Contact</a>
      </div>
    </div>
  </div>
</nav>

<style>
  :root { --primary-color: #1eaae9; }
  .navbar-brand { font-size: 1.5rem; font-weight: bold; color: var(--primary-color) !important; }
  .btn-nav { background-color: var(--primary-color); color: white !important; border-radius: 30px; padding: 8px 25px; margin-left: 15px; transition: all 0.3s ease; border: 2px solid var(--primary-color); }
  .btn-nav:hover { background-color: white; color: var(--primary-color) !important; }
  .navbar-custom { background-color: white; box-shadow: 0 2px 10px rgba(0,0,0,0.1); padding: 15px 0; }
  @media (max-width:768px) { .nav-buttons { margin-top:15px; display:flex; flex-direction:column; gap:10px; } .btn-nav { margin-left:0; text-align:center; } }
  .footer { background-color: white; border-top: 1px solid rgba(0,0,0,0.1); color: #666; }
</style>
