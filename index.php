<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sidebar Navigation</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

  <!-- jQuery CDN -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <style>
    * {
      box-sizing: border-box;
    }
    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: Arial, sans-serif;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      height: 60px;
      background-color: #343a40;
      color: white;
      display: flex;
      align-items: center;
      padding: 0 20px;
      z-index: 1000;
      justify-content: space-between;
    }

    .toggle-btn {
      display: none;
      background: #007bff;
      color: white;
      padding: 6px 12px;
      border: none;
      cursor: pointer;
    }

    #wrapper {
      display: flex;
      height: 100%;
      padding-top: 60px; /* for header */
    }

    #sidebar {
      width: 260px;
      background-color: #212529;
      color: white;
      overflow-y: auto;
      height: calc(100vh - 60px);
      position: fixed;
      top: 60px;
      left: 0;
      transition: transform 0.3s ease;
    }

    #sidebar .nav-link {
      color: white;
      padding: 10px 20px;
    }

    #sidebar .nav-link:hover {
      background-color: #495057;
    }

    #mainContent {
      margin-left: 280px;
      padding: 20px;
      flex-grow: 1;
      width: 100%;
    }

    /* Responsive */
    @media (max-width: 768px) {
      #sidebar {
        transform: translateX(-100%);
      }
      #sidebar.active {
        transform: translateX(0);
      }
      #mainContent {
        margin-left: 0;
      }
      .toggle-btn {
        display: block;
      }
    }
  </style>
</head>
<body>

  <!-- Header -->
  <header>
    <span>📘 jQuery E Book</span>
    <button class="toggle-btn" onclick="toggleSidebar()">☰ Menu</button>
  </header>

  <!-- Layout Wrapper -->
  <div id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark" id="sidebar">
      <h4 class="text-white text-center my-3">JQuery Methods</h4>
      <ul class="nav flex-column">
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/appendPrepend.php">Append Prepend</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/appendToPrependTo.php">Append To || Prepend To</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/classMethod.php">Class Methods</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/cssMethod.php">CSS Method</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/emptyRemove.php">Empty Remove</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/events.php">Events</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/getMethod.php">Get Method</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/multipleclickevent.php">Multiple Click ON OFF</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/setMethod.php">Set Method</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/clone.php">Clone Method</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/replace.php">Replace</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/wrapunwrap.php">Wrap Unwrap</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/widthHeight.php">Width Height</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/hideshow.php">Hide Show</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/fade.php">Fade Effects</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/slideeffect.php">Slide Effects</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/animate.php">Animate</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/ancestors.php">Ancestors</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/descendrants.php">Descendrants</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/sibling.php">Sibling</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/filteringMethods.php">Filtering Methods</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/hasis.php">Has Is Methods</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/each.php">Each Method</a></li>
        <li class="nav-item"><a href="#" class="nav-link" data-page="pages/eventPreventDefault.php">Prevent Default</a></li>



      </ul>
    </div>

    <!-- Main Content -->
    <div id="mainContent">
      <h2 style="color : #f54281">Welcome to jQuery Learning</h2><br>

      <img src="images/jQuery-logo.png" width="1000px" height="300px">

      <p>
        <strong>jQuery</strong> is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal, event handling, animations, and AJAX much simpler with an easy-to-use syntax that works across a wide range of browsers.
      </p>

      <p>
        With just a few lines of code, you can do complex tasks like hiding elements, updating content, handling user interactions, or making asynchronous server requests.
      </p>

      <ul>
        <li>🎯 Easy to learn and use</li>
        <li>⚡ Reduces the amount of JavaScript code</li>
        <li>🌐 Works across all major browsers</li>
        <li>🔁 Great for dynamic content updates without page reloads (AJAX)</li>
      </ul>

      <p>
        In this demo, use the sidebar to explore different jQuery methods like <code>append()</code>, <code>css()</code>, <code>click()</code>, and more — each page includes real examples and code.
      </p>

      <p class="text-success fw-bold">Start experimenting and boost your web development skills with jQuery!</p>
    </div>
  </div>

  <!-- Sidebar Toggle Script -->
  <script>
    function toggleSidebar() {
      document.getElementById('sidebar').classList.toggle('active');
    }
  </script>

  <!-- Your Page Loader Script -->
  <script src="js/app.js"></script>
</body>
</html>
