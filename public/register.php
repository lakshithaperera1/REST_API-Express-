<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Join Our Blog Community</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Google Fonts for blog typography -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Source+Sans+Pro:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary-color: #2c3e50;
      --primary-hover: #1a252f;
      --secondary-color: #e74c3c;
      --accent-color: #3498db;
      --dark-color: #2c3e50;
      --light-color: #ecf0f1;
      --text-color: #34495e;
    }
    
    body {
      font-family: 'Source Sans Pro', sans-serif;
      background-color: #f9f9f7;
      color: var(--text-color);
    }
    
    h1, h2, h3, h4, h5 {
      font-family: 'Playfair Display', serif;
    }
    
    .bg-image {
      background-image: url('https://images.unsplash.com/photo-1455390582262-044cdead277a?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1073&q=80');
      background-size: cover;
      background-position: center;
      position: relative;
      overflow: hidden;
    }
    
    .bg-image::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(44, 62, 80, 0.9) 0%, rgba(26, 37, 47, 0.9) 100%);
      z-index: 1;
    }
    
    .image-content {
      position: relative;
      z-index: 2;
      padding: 2rem;
    }
    
    .card {
      border: none;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      background-color: white;
    }
    
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    
    .card-header {
      background-color: var(--primary-color);
      color: white;
      padding: 1.5rem;
      text-align: center;
      border-bottom: none;
    }
    
    .card-body {
      padding: 2rem;
    }
    
    .form-control:focus {
      border-color: var(--accent-color);
      box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25);
    }
    
    .input-group-text {
      background-color: white;
      border-color: #e2e8f0;
      color: var(--primary-color);
    }
    
    .btn-primary {
      background-color: var(--primary-color);
      border-color: var(--primary-color);
      padding: 0.75rem;
      font-weight: 600;
      transition: all 0.3s ease;
      letter-spacing: 0.5px;
    }
    
    .btn-primary:hover {
      background-color: var(--primary-hover);
      border-color: var(--primary-hover);
      transform: translateY(-2px);
    }
    
    .feature-card {
      background-color: rgba(255, 255, 255, 0.1);
      backdrop-filter: blur(10px);
      border-radius: 8px;
      padding: 1.5rem;
      transition: all 0.3s ease;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    
    .feature-card:hover {
      transform: translateY(-5px);
      background-color: rgba(255, 255, 255, 0.2);
    }
    
    .feature-icon {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: white;
    }
    
    .blog-logo {
      width: 120px;
      height: 120px;
      object-fit: contain;
      margin-bottom: 1.5rem;
      transition: all 0.5s ease;
    }
    
    .blog-logo:hover {
      transform: scale(1.05) rotate(5deg);
    }
    
    .password-strength {
      height: 6px;
      border-radius: 3px;
      transition: all 0.3s ease;
    }
    
    .alert-message {
      border-radius: 8px;
      padding: 1rem 1.5rem;
      margin-bottom: 1rem;
      display: flex;
      align-items: center;
      animation: fadeIn 0.5s ease;
      border-left: 4px solid;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    
    .alert-icon {
      font-size: 1.5rem;
      margin-right: 1rem;
    }
    
    .quote-mark {
      font-size: 3rem;
      color: rgba(255, 255, 255, 0.2);
      line-height: 1;
      margin-bottom: 1rem;
    }
    
    .testimonial-text {
      font-style: italic;
      position: relative;
      padding: 0 1rem;
    }
    
    .author-name {
      font-weight: 600;
      margin-top: 1rem;
    }
    
    .author-title {
      font-size: 0.9rem;
      opacity: 0.8;
    }
    
    /* Responsive adjustments */
    @media (max-width: 992px) {
      .image-section {
        min-height: 400px;
      }
      
      .card-body {
        padding: 1.5rem;
      }
    }
    
    @media (max-width: 768px) {
      .image-section {
        min-height: 300px;
      }
      
      .card-header {
        padding: 1rem;
      }
    }
  </style>
</head>
<body class="bg-light">
  <div class="container-fluid vh-100">
    <div class="row h-100">
      <!-- Form Section -->
      <div class="col-lg-6 d-flex align-items-center justify-content-center py-4 py-lg-5">
        <div class="w-100 px-3" style="max-width: 480px;">
          <div class="card mb-4">
            <div class="card-header">
              <div class="d-flex justify-content-center mb-3">
                <div class="bg-white d-inline-flex justify-content-center align-items-center rounded-circle p-3 shadow-sm">
                  <i class="fas fa-pen-fancy fs-4" style="color: var(--primary-color);"></i>
                </div>
              </div>
              <h2 class="fw-bold mb-1">Join Our Blog</h2>
              <p class="mb-0">Become part of our writing community</p>
            </div>
            <div class="card-body">
              <!-- Success/Error messages will appear here -->
              <div id="message-container"></div>
              
              <form id="registration-form" action="" method="POST">
                <div class="mb-3">
                  <label for="name" class="form-label fw-medium">Full Name</label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="fas fa-user"></i>
                    </span>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
                  </div>
                </div>
                
                <div class="mb-3">
                  <label for="email" class="form-label fw-medium">Email Address</label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <i class="fas fa-envelope"></i>
                    </span>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email address" required>
                  </div>
                </div>
                
                <div class="mb-4">
                  <label for="password" class="form-label fw-medium">Password</label>
                  <div class="input-group mb-2">
                    <span class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </span>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Create a strong password" required>
                    <button class="btn btn-outline-secondary" type="button" id="toggle-password">
                      <i class="fas fa-eye"></i>
                    </button>
                  </div>
                  <div class="progress password-strength mb-1">
                    <div id="password-strength-meter" class="progress-bar" role="progressbar" style="width: 0%"></div>
                  </div>
                  <div id="strength-text" class="form-text text-end small">Password strength</div>
                </div>
                
                <div class="form-check mb-4">
                  <input class="form-check-input" type="checkbox" id="newsletter" checked>
                  <label class="form-check-label small" for="newsletter">
                    Subscribe to our weekly newsletter with writing tips and blog updates
                  </label>
                </div>
                
                <button type="submit" id="submit-btn" class="btn btn-primary w-100 py-3 mb-3">
                  <span>Join the Community</span>
                  <i class="fas fa-feather-alt ms-2"></i>
                </button>
                
                <div class="text-center">
                  <small class="text-muted">Already a member? <a href="#" class="text-decoration-none fw-medium" style="color: var(--primary-color);">Sign in</a></small>
                </div>
              </form>
            </div>
          </div>
          
          <div class="text-center small text-muted mt-3">
            By joining, you agree to our <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Terms</a> and <a href="#" class="text-decoration-none" style="color: var(--primary-color);">Privacy Policy</a>
          </div>
        </div>
      </div>
      
      <!-- Image Section -->
      <div class="col-lg-6 d-none d-lg-block p-0 image-section">
        <div class="bg-image h-100">
          <div class="d-flex flex-column justify-content-center align-items-center h-100 image-content text-white text-center p-4">
            <img src="https://cdn-icons-png.flaticon.com/512/3281/3281289.png" 
                 alt="Blog Logo" class="blog-logo">
            <h1 class="display-5 fw-bold mb-3">The Writer's Haven</h1>
            <p class="lead mb-5">
              Where ideas flourish and stories come to life
            </p>
            
            <div class="w-75 mx-auto mb-5">
              <div class="quote-mark">"</div>
              <div class="testimonial-text mb-4">
                Joining this blog community transformed my writing journey. The feedback and support from fellow writers helped me grow beyond what I thought was possible.
              </div>
              <div class="author-name">Sarah Johnson</div>
              <div class="author-title">Published Author & Community Member</div>
            </div>
            
            <div class="row g-3 w-100" style="max-width: 600px;">
              <div class="col-md-4 mb-3">
                <div class="feature-card">
                  <i class="fas fa-users feature-icon"></i>
                  <h5 class="mb-0">Community</h5>
                  <p class="small opacity-75 mb-0">Connect with writers</p>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="feature-card">
                  <i class="fas fa-book-open feature-icon"></i>
                  <h5 class="mb-0">Publish</h5>
                  <p class="small opacity-75 mb-0">Share your stories</p>
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <div class="feature-card">
                  <i class="fas fa-comments feature-icon"></i>
                  <h5 class="mb-0">Engage</h5>
                  <p class="small opacity-75 mb-0">Get valuable feedback</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Bootstrap Bundle with Popper -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
  
  <script>
    // Password strength checker
    const passwordInput = document.getElementById('password');
    const strengthMeter = document.getElementById('password-strength-meter');
    const strengthText = document.getElementById('strength-text');
    const togglePasswordBtn = document.getElementById('toggle-password');
    
    passwordInput.addEventListener('input', function() {
      const password = passwordInput.value;
      const strength = calculatePasswordStrength(password);
      
      // Update progress bar width
      strengthMeter.style.width = strength + '%';
      
      // Remove all classes
      strengthMeter.className = 'progress-bar';
      
      // Add appropriate class based on strength
      if (password === '') {
        strengthMeter.style.width = '0%';
        strengthText.textContent = 'Password strength';
        strengthText.className = 'form-text text-end small text-muted';
      } else if (strength < 30) {
        strengthMeter.classList.add('bg-danger');
        strengthText.textContent = 'Weak';
        strengthText.className = 'form-text text-end small text-danger';
      } else if (strength < 60) {
        strengthMeter.classList.add('bg-warning');
        strengthText.textContent = 'Medium';
        strengthText.className = 'form-text text-end small text-warning';
      } else if (strength < 80) {
        strengthMeter.classList.add('bg-info');
        strengthText.textContent = 'Good';
        strengthText.className = 'form-text text-end small text-info';
      } else {
        strengthMeter.classList.add('bg-success');
        strengthText.textContent = 'Strong';
        strengthText.className = 'form-text text-end small text-success';
      }
    });
    
    function calculatePasswordStrength(password) {
      let strength = 0;
      
      // Length contribution
      if (password.length >= 12) {
        strength += 30;
      } else if (password.length >= 8) {
        strength += 20;
      } else if (password.length >= 6) {
        strength += 10;
      }
      
      // Character variety contribution
      if (/[A-Z]/.test(password)) strength += 20; // Has uppercase
      if (/[a-z]/.test(password)) strength += 20; // Has lowercase
      if (/[0-9]/.test(password)) strength += 20; // Has number
      if (/[^A-Za-z0-9]/.test(password)) strength += 20; // Has special char
      
      // Deduct points for common patterns
      if (password.match(/123/) || password.match(/abc/) || password.match(/password/i)) {
        strength = Math.max(10, strength - 30);
      }
      
      return Math.min(strength, 100);
    }
    
    // Toggle password visibility
    togglePasswordBtn.addEventListener('click', function() {
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);
      this.innerHTML = type === 'password' ? '<i class="fas fa-eye"></i>' : '<i class="fas fa-eye-slash"></i>';
    });
    
    // Form submission handling
    const form = document.getElementById('registration-form');
    const submitBtn = document.getElementById('submit-btn');
    const messageContainer = document.getElementById('message-container');
    
    function showMessage(type, message) {
      const icon = type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle';
      const alertClass = type === 'success' ? 'alert-success' : 'alert-danger';
      const borderColor = type === 'success' ? '#2ecc71' : '#e74c3c';
      
      messageContainer.innerHTML = `
        <div class="alert-message ${alertClass}" style="border-left-color: ${borderColor}">
          <i class="fas ${icon} alert-icon"></i>
          <div>
            <strong>${type === 'success' ? 'Welcome!' : 'Oops!'}</strong>
            <div class="small">${message}</div>
          </div>
        </div>
      `;
      
      // Auto-hide after 5 seconds
      setTimeout(() => {
        const alert = messageContainer.querySelector('.alert-message');
        if (alert) {
          alert.style.opacity = '0';
          alert.style.transition = 'opacity 0.5s ease';
          setTimeout(() => alert.remove(), 500);
        }
      }, 5000);
    }
    
    form.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Show loading state on button
      const originalContent = submitBtn.innerHTML;
      submitBtn.innerHTML = '<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Creating Account...';
      submitBtn.disabled = true;
      
      // Simulate API call (replace with actual fetch)
      setTimeout(() => {
        // This would be replaced with actual fetch to your API
        const isSuccess = Math.random() > 0.3; // 70% chance of success for demo
        
        if (isSuccess) {
          showMessage('success', 'Welcome to our writing community! Start sharing your stories today.');
          form.reset();
          // Reset password strength meter
          strengthMeter.style.width = '0%';
          strengthMeter.className = 'progress-bar';
          strengthText.textContent = 'Password strength';
          strengthText.className = 'form-text text-end small text-muted';
        } else {
          showMessage('error', 'This email is already registered. Please use a different email or login.');
        }
        
        // Reset button state
        submitBtn.innerHTML = originalContent;
        submitBtn.disabled = false;
      }, 1500);
    });
  </script>
  
  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
      'name'     => $_POST['name'],
      'email'    => $_POST['email'],
      'password' => $_POST['password']
    ];
    
    $ch = curl_init('http://localhost:5000/api/auth/register');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
      'Content-Type: application/json'
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    
    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    
    // Decode the JSON response to check for success
    $responseData = json_decode($response, true);
    $isSuccess = ($http_code >= 200 && $http_code < 300) && 
                 (!isset($responseData['error']) || $responseData['error'] === false);
    
    echo "<script>
      // Reset button state
      document.getElementById('submit-btn').innerHTML = '<span>Join the Community</span><i class=\"fas fa-feather-alt ms-2\"></i>';
      document.getElementById('submit-btn').disabled = false;
      
      if (" . ($isSuccess ? 'true' : 'false') . ") {
        showMessage('success', 'Welcome to our writing community! Start sharing your stories today.');
        document.getElementById('registration-form').reset();
        // Reset password strength meter
        document.getElementById('password-strength-meter').className = 'progress-bar';
        document.getElementById('password-strength-meter').style.width = '0%';
        document.getElementById('strength-text').textContent = 'Password strength';
        document.getElementById('strength-text').className = 'form-text text-end small text-muted';
      } else {
        showMessage('error', 'This email is already registered. Please use a different email or login.');
      }
    </script>";
  }
  ?>
</body>
</html>