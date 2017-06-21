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
     <?php
       require 'connect.php';

       $contact_name = mysqli_real_escape_string($conn, $_POST['contact_name']);
       $email = mysqli_real_escape_string($conn, $_POST['email']);
       $phone = mysqli_real_escape_string($conn, $_POST['phone']);
       $title = mysqli_real_escape_string($conn, $_POST['title']);
       $price = mysqli_real_escape_string($conn, $_POST['price']);
       $category = mysqli_real_escape_string($conn, $_POST['category']);
       $description = mysqli_real_escape_string($conn, $_POST['description']);
       $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));

       $sql = "INSERT INTO items (title, image, category, description, contact_name, email, phone, price) VALUES ('$title','$image','$category','$description','$contact_name','$email','$phone','$price')";
       if ($conn->query($sql) === TRUE) {
           echo "<h1>New record created successfully</h1><hr>";
           echo "<table class='php_table php_large_only'>
           <tr>
           <th>Title</th>
           <th>Category</th>
           <th>Name</th>
           <th>email</th>
           <th>phone</th>
           <th>price</th>
           </tr>";
           echo "<tr>";
           echo "<td>" . $_POST['title'] . "</td>";
           echo "<td>" . $_POST['category'] . "</td>";
           echo "<td>" . $_POST['contact_name'] . "</td>";
           echo "<td>" . $_POST['email'] . "</td>";
           echo "<td>" . $_POST['phone'] . "</td>";
           echo "<td>" . $_POST['price'] . "</td>";
           echo "</tr>";
           echo "</table>";
       } else {
           echo "Error: " . $sql . "<br>" . $conn->error . $sql->error;
       }
       $aExtraInfo = getimagesize($_FILES['image']['tmp_name']);
       $sImage = "data:" . $aExtraInfo["mime"] . ";base64," . base64_encode(file_get_contents($_FILES['image']['tmp_name']));
       echo '<img src="' . $sImage . '" alt="Your Image" class="php_image" />';
      mysqli_close($conn);
      ?>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
