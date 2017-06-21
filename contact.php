<?php
  require 'head.php';
 ?>
 <body>
   <?php
      require 'header.php';
      require 'nav.php';
      require 'container.php';
   ?>
   <section>
       <h1>Contacting Us</h1>
       <hr>
     <div class="flex-row">
       <div id="contact-reasons" class="flex-box">
         <p>We hope your expierence has been a positive one, but if it hasn't please let us know about it and what we can do to help, thank you.</p>
         <strong>Top 5 Comments</strong>
         <ol>
           <li></li>
           <li></li>
           <li></li>
           <li></li>
           <li></li>
         </ol>
       </div>
       <div class="flex-box">
       <form id="contact-us" action="./contact_post.php" method="post">
         <fieldset>
           <legend>Comment Box</legend>
         Name: <br>
         <input type="text" name="name" required><br>
         Email address:<br>
         <input type="text" name="email" required><br>
         Question/Comments<br>
         <textarea name="comment" rows="10" cols="30" required></textarea><br>
         <button class="orange-button" type="submit">Submit</button>
        </fieldset>
       </form>
      </div>
     </div>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
