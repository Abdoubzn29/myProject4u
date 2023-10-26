<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>summarizer</title>
  <link rel="stylesheet" type="text/css" href="/myProject/content_Project/summarizer/summarize.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
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
    include '/Applications/XAMPP/xamppfiles/htdocs/myProject/content_Project/summarizer/summarizerApi/summarizerapi.php';
  ?>

  <!-- Main Content -->
  <main class="main">
  <div class="description">
      <h1>Summarizer</h1>
      <p>By condensing long texts, the Summarizer tool makes it easier to digest the main points.</p>
    </div>
    <form method="POST" action="">
      <label for="input-text">Enter text:</label>
      <textarea id="input-text" name="input_text" rows="10" cols="40" placeholder="Enter your phrase here..." oninput="checkCharacterLimit(this)" required><?php echo isset($inputText) ? $inputText : ''; ?></textarea>
      <div class="character-count">Characters typed: 0 / 1000</div> 
      <input type="submit" value="Summarize">
      <label for="output-text">Text Summarized:</label>
      <textarea id="output-text" name="output_text" rows="6" cols="40" readonly><?php echo isset($summary) ? $summary : ''; ?></textarea>
      <input type="button" class="copy-button" onclick="copyToClipboard()" value="Copy Text">
    </form>
  </main>

  <script src="/myProject/content_Project/summarizer/summarize.js"></script>
</body>
</html>
