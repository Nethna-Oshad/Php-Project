<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Frequently Asked Questions</title>
  <link rel="stylesheet" href="styles.css"> <!-- Link to your custom CSS file -->
  <style>
    .answer {
      display: none;
      overflow: hidden; /* Hide any overflow content */
      transition: max-height 0.3s ease-out; /* Add transition effect */
      max-height: 0; /* Initially hide the content */
    }

    .answer.active {
      display: block;
      max-height: 1000px; /* Adjust to your preference or set to 'none' */
    }

    .faq{
      
      margin-top: 10px;
      height:40px;
      margin-left: 170px;
      margin-right: 170px;
      height: 70px;
      border-radius: 30px;
      border-color: blue;
      border-width: 2px;
      border-style: solid;

    }
    .faq .question{
      margin-left: 30px;
      margin-top: 20px;
      position: relative;
    }
    .titile-p{
      text-align: center;
    }
    h2{
      font-size:50px;
    }
  </style>
</head>
<body>
  <nav>
        <div class="container">
            <div class="brand">Your Brand Name</div>
            <ul class="nav-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
    </nav>

  <div class="container content">
    <h2>Frequently Asked Questions</h2>
    <p class="titile-p">How can we help you? </p>
    <p class="titile-p">Please check out the list below for frequently asked questions.If you are unable to find the answers to your question, feel free to reach out to us! We look forward to assisting you.</p>
    <div class="faq1">
      <div class="faq">
        <h3 class="question">Important delivery updates</h3>
        <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
      <div class="faq">
        <h3 class="question">How to order prescribed medication?</h3>
        <p class="answer">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
      </div>
      <div class="faq">
        <h3 class="question">Can i order medicine without signing in?</h3>
        <p class="answer">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
      </div>
      <div class="faq">
        <h3 class="question">Can i upload more than one prescription?</h3>
        <p class="answer">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
      </div>
      <div class="faq">
        <h3 class="question">How can i check if the medicines i have ordered are available?</h3>
        <p class="answer">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
      </div>
      <div class="faq">
        <h3 class="question">How to add grocery items to my order?</h3>
        <p class="answer">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</p>
      </div>
      <!-- Add more questions and answers as needed -->
    </div>
  </div>

  <footer>
    <div class="container footer-content">
      <ul class="footer-links">
        <li><a href="privacy_policy.html">Privacy Policy</a></li>
        <li><a href="faq.html">FAQ</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <p>&copy; 2024 Your Company Name. All rights reserved.</p>
    </div>
  </footer>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const questions = document.querySelectorAll('.question');
      questions.forEach(question => {
        question.addEventListener('click', function() {
          const answer = this.nextElementSibling;
          answer.classList.toggle('active'); // Toggle the 'active' class
        });
      });
    });
  </script>
</body>
</html>
