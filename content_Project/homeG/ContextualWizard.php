<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ContextualWizard</title>

    <!-- CSS Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/myProject/content_Project/ContextualWizard/cawz.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <style>
      /* Additional CSS styles */
    </style>
  </head>

  <body>
    <!-- Sidebar Navigation -->
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

    <!-- Top Navigation -->
    <nav class="navbar">
      <div class="navbar-content">
        <i class="fa-solid fa-bars" id="sidebar-close"></i>
      </div>
    </nav>

    <?php
    // Include the required PHP file
    include '/Applications/XAMPP/xamppfiles/htdocs/myProject/content_Project/ContextualWizard/contextualAPi/ContextualApi.php';
    ?>

    <main class="main">
      <div class="description">
        <h1>Contextual Wizard</h1>
        <p>By analyzing the context and your questions, ContextualWizard provides relevant answers and information</p>
      </div>

      <!-- Form for Contextual Wizard -->
      <form method="POST" action="">
        <label for="context">Context:</label>
        <textarea id="context-area" name="context" rows="20" cols="50" placeholder="Enter your context here....." oninput="checkCharacterLimit(this)" required><?php echo $context; ?></textarea>
        <div class="character-count">Characters typed: 0 / 1000</div>

        <label for="question">Question:</label>
        <textarea id="question" name="question" rows="4" cols="50" placeholder="Enter your question here....." oninput="checkCharacterLimitQ(this)" required><?php echo $question; ?></textarea>
        <div class="character-countQ">Characters typed: 0 / 120</div>

        <input type="submit" class="submit" value="Submit">

        <label for="question">Answer:</label>
        <textarea id="answer" rows="4" cols="50" placeholder="Your answer will appear here....." readonly><?php if (!empty($answer)) : ?><?php echo $answer; ?><?php endif; ?></textarea>

        <input type="button" class="copy-button" onclick="copyToClipboard()" value="Copy Text">
      </form>
    </main>

    <!-- JavaScript -->
    <script src="/myProject/content_Project/ContextualWizard/cawz.js"></script>
  </body>
</html>
