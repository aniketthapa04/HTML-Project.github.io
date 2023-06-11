<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $quoteText = $_POST['quote'];
  $quoteAuthor = $_POST['author'];

  // Read the existing HTML file
  $html = file_get_contents('quotes.html');

  // Find the closing </body> tag and append the new quote HTML
  $quoteHtml = '
    <div class="quote-container">
      <div class="quote-text">' . $quoteText . '</div>
      <div class="quote-author">- ' . $quoteAuthor . '</div>
    </div>';

  $html = str_replace('</body>', $quoteHtml . '</body>', $html);

  // Save the updated HTML file
  file_put_contents('quotes.html', $html);

  // Redirect back to the main page
  header('Location: quotes.html');
  exit();
}
?>


Here's a step-by-step guide to configuring a local development environment using XAMPP:

Download and install XAMPP from the Apache Friends website (https://www.apachefriends.org).

After installation, launch XAMPP and start the Apache server.

Place your HTML file (index.html) and PHP code (add_quote.php) in the appropriate folder. By default, you can put them in the htdocs folder located inside the XAMPP installation directory. For example, C:\xampp\htdocs.

Access the web server by opening your browser and navigating to http://localhost.

To access your quote website, you can visit http://localhost/index.html. Make sure the server is running, and the file path is correct.

When you submit the form on the website, the form data will be sent to add_quote.php for processing. The PHP code will append the new quote to the index.html file and redirect back to the main page.