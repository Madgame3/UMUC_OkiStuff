<?php
  require 'head.php';
 ?>
 <body>
   <?php
      require 'header.php';
      require 'nav.php';
      require 'container.php';
   ?>
   <section id="index-page">
     <h1>Home & Living</h1>
     <hr>
    <div id="item-flex-box">
      <?php
        require 'connect.php';
          $sql = "select title,price,date,image from items where category='Home & Living' order by date desc limit 16";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
          while($row = $result->fetch_assoc()){
            $image = base64_encode($row['image']);

              echo "<div class='item-box'>";
              echo "<div class='item-box-title'>".$row['title']."</div>";
              echo "<div class='item-box-image'>";
              echo "<img src='data:image/png;base64,". $image ."' alt='item for sale'/>"."</div>";
              echo "<div class='item-box-time'><p> Price: ".$row['price']."</p></div>";
              echo "</div>";
            
            //"<img src='data:image/jpeg;base64',". base64_encode(stream_get_contents($row['image']))."/>";
          }
        }
        mysqli_close($conn);
       ?>

    </div>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
