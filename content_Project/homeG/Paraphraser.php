<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>paraphraser</title>
  <link rel="stylesheet" type="text/css" href="/myProject/content_Project/paraphraser/paraphras.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
 
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
    include '/Applications/XAMPP/xamppfiles/htdocs/myProject/content_Project/paraphraser/paraphraresApi/indexvrai.php';
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Retrieve the submitted text
      $submittedText = $_POST['input_text'];
    }
  ?>

  <!-- Main Content -->
  <main class="main">
  <div class="description">
      <h1>Paraphraser</h1>
      <p>The Paraphraser tool assists in rephrasing sentences to enhance clarity and avoid repetition.</p>
    </div>
    <form class="form_P" method="POST" action="">
      <label for="input-text">Enter Phrase:</label>
      <textarea id="myTextarea" class="textarea_P" name="input_text" rows="4" cols="40" placeholder="Enter your phrase here....." oninput="checkCharacterLimit(this)"><?php echo isset($submittedText) ? $submittedText : ''; ?></textarea>
      <div class="character-count">Characters typed: 0 / 200</div> 
      <input type="submit" value="Paraphrase">
      
      <label for="input-text">Output:</label>
      
      <div class="ResaultBlock">
        <h6 class="resault">
          <?php
            // Display the paraphrased suggestions
            foreach ($suggestions as $suggestion) {
              echo '<div class="resaultFrag">' . $suggestion['text'] . '</div>';
            }
          ?>
        </h6>
      </div>
    </form>
  </main>
  <script>
    
  </script>

  <script src="/myProject/content_Project/paraphraser/paraphraser.js"></script>
</body>
</html>
