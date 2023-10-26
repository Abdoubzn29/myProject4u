<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="/myProject/content_Project/home/home_grammer.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
</head>
<body>
  <!-- Sidebar -->
  <nav class="sidebar">
    <a href="HomeDash.php" class="logo">RewriteWizard</a>

    <div class="menu-content">
      <ul class="menu-items">
        <div class="menu-title"></div>

        <!-- Sidebar menu items -->
        <li class="item">
          <a href="GrammarMentor.php">GrammarMentor</a>
        </li>

        <li class="item">
          <a href="Paraphraser.php">Paraphraser</a>
        </li>

        <li class="item">
          <a href="summarizer.php">Summarizer</a>
        </li>
        
        <li class="item">
          <a href="ContextualWizard.php">ContextualWizard</a>
        </li>
        
        <li class="itemB">
          <a href="/myProject/login/logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Top Navigation Bar -->
  <nav class="navbar">
    <div class="navbar-content">
      <i class="fa-solid fa-bars" id="sidebar-close"></i>
      
    </div>
  </nav>

  <!-- Main Content -->
  <main class="main">
    <div class="description">
      <h1>Welcome to RewriteWizard</h1>
      <p>Explore our powerful features to enhance your writing</p>
    </div>

    <div class="feature-container">
      <!-- Feature: GrammarMentor -->
      <div class="feature">
        <h2>GrammarMentor</h2>
        <p>GrammarMentor helps you improve your writing by identifying and suggesting corrections for grammatical errors.</p>
        <a href="GrammarMentor.php" class="feature-link">Learn More</a>
      </div>

      <!-- Feature: Paraphraser -->
      <div class="feature">
        <h2>Paraphraser</h2>
        <p>The Paraphraser tool helps you rephrase sentences for clarity and to avoid repetition.</p>
        <a href="Paraphraser.php" class="feature-link">Learn More</a>
      </div>

      <!-- Feature: Summarizer -->
      <div class="feature">
        <h2>Summarizer</h2>
        <p>The Summarizer tool condenses long texts into shorter, concise summaries, making it easier to grasp the main points.</p>
        <a href="summarizer.php" class="feature-link">Learn More</a>
      </div>

      <!-- Feature: ContextualWizard -->
      <div class="feature">
        <h2>ContextualWizard</h2>
        <p>ContextualWizard provides relevant answers and information based on the context and your questions or queries.</p>
        <a href="ContextualWizard.php" class="feature-link">Learn More</a>
      </div>
    </div>
  </main>

  <script src="/myProject/content_Project/home/home&grammar.js"></script>
</body>
</html>
