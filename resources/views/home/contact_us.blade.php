<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>ReAir - Contact</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
    }
    header {
      background-color: #000;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
    }
    .logo {
      font-size: 24px;
      color: #00aaff;
    }
    nav a {
      margin: 0 15px;
      text-decoration: none;
      color: white;
    }
    .dropdown {
      position: relative;
    }
    .dropdown-content {
      display: none;
      position: absolute;
      right: 0;
      background-color: white;
      color: black;
      min-width: 160px;
      box-shadow: 0px 8px 16px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 10px 16px;
      text-decoration: none;
      display: block;
    }
    .dropdown:hover .dropdown-content {
      display: block;
    }

    .contact-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      padding: 50px 20px;
      background: #f9f9f9;
    }
    .contact-box {
      flex: 1 1 300px;
      padding: 20px;
      max-width: 400px;
    }
    .contact-box h3 {
      margin-bottom: 10px;
    }
    .form-box {
      flex: 1 1 300px;
      padding: 20px;
      max-width: 500px;
    }
    form input, form textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 4px;
      font-size: 16px;
    }
    form button {
      background-color: #2196F3;
      color: white;
      border: none;
      padding: 12px 20px;
      font-size: 16px;
      border-radius: 4px;
      cursor: pointer;
    }
    form button:hover {
      background-color: #1976D2;
    }

    .footer {
      background-color: #111;
      color: #ccc;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      padding: 40px 20px;
      font-size: 14px;
    }
    .footer div {
      flex: 1 1 200px;
      margin: 10px;
    }
    .footer a {
      color: #ccc;
      text-decoration: none;
      display: block;
      margin-top: 8px;
    }
    .footer .download img {
      height: 40px;
      margin-top: 10px;
    }
    .bottom-bar {
      text-align: center;
      background: #000;
      color: #999;
      padding: 10px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">🌍 ReAir</div>
    <nav>
    <a href="{{route('homepage')}}">Home</a>
    <a href="{{route('about_us')}}">About</a>
      
    </nav>
    <div class="dropdown">
      <a href="#" style="color: white;">Sign in</a>
      <div class="dropdown-content">
        <strong style="padding: 10px 16px; display: block;">As Admin</strong>
        <a href="#">Login</a>
        <a href="#">Sign up</a>
        <strong style="padding: 10px 16px; display: block;">As Customer</strong>
        <a href="#">Login</a>
        <a href="#">Sign up</a>
      </div>
    </div>
  </header>

  <section class="contact-container">
    <div class="contact-box">
      <h3>📞 Call To Us</h3>
      <p>We are available 24/7, 7 days a week.</p>
      <p>Phone: +260790782145</p>

      <h3>✉️ Write To Us</h3>
      <p>Fill out our form and we will contact you within 24 hours.</p>
      <p>Email: customersupport@exclusiv.com</p>
    </div>

    <div class="form-box">
      <form>
        <input type="text" name="name" placeholder="Your Name *" required />
        <input type="email" name="email" placeholder="Your Email *" required />
        <input type="text" name="phone" placeholder="Your Phone *" required />
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
      </form>
    </div>
  </section>

  <footer class="footer">
    <div>
      <h4>Exclusive</h4>
      <p>Subscribe</p>
      <input type="email" placeholder="Enter your email" />
    </div>
    <div>
      <h4>Support</h4>
      <p>reair@gmail.com</p>
      <p>+260 790783634</p>
    </div>
    <div>
      <h4>Account</h4>
      <a href="#">My Account</a>
      <a href="#">Login / Register</a>
    </div>
    <div>
      <h4>Quick Link</h4>
      <a href="#">Privacy Policy</a>
      <a href="#">Terms Of Use</a>
      <a href="#">FAQ</a>
      <a href="#">Contact</a>
    </div>
    <div class="download">
      <h4>Download App</h4>
      <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Google_Play_Store_badge_EN.svg" alt="Google Play">
      <img src="https://developer.apple.com/assets/elements/badges/download-on-the-app-store.svg" alt="App Store">
    </div>
  </footer>

  <div class="bottom-bar">
    © Copyright ReAir 2022. All rights reserved
  </div>

</body>
</html>
