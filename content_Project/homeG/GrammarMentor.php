<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>GrammarMentor</title>
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
      <h1>Welcome to GrammarMentor</h1>
      <p>This tool helps you identify grammatical errors in your writing and suggest corrections.</p>
    </div>
    
    <!-- Grammarly Editor -->
    <grammarly-editor-plugin>
      <div class="container">
        <textarea id="myTextarea" rows="8" cols="40" placeholder="Enter your text here" oninput="checkCharacterLimit(this)"></textarea>
        <div class="character-count">Characters typed : 0 / 1000</div> 
        <button class='copy-button' onclick="copyToClipboard()">CopyText</button>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@grammarly/editor-sdk?clientId=client_AxhJ8rHQBn37xgPqnMS89Q"></script>
    </grammarly-editor-plugin>

    <!-- Grammarly Editor SDK -->
    

    <script src="/myProject/content_Project/home/home&gramma.js"></script>
  </main>
</body>
</html>
