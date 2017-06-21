
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
  <h1>Test</h1>
    <?php
        require_once __DIR__ . '/vendor/autoload.php';
        $fb = new Facebook\Facebook([
            'app_id' => '839841886165025',
            'app_secret' => '517e3fdc7744d5b80c352ea17b6b95db',
            'default_graph_version' => 'v2.9',
        ]);
        
        $helper = $fb->getRedirectLoginHelper();
        try {
          $accessToken = $helper->getAccessToken();
        } catch(Facebook\Exceptions\FacebookSDKException $e) {
          // There was an error communicating with Graph
          echo $e->getMessage();
          exit;
        }
        
        if (isset($accessToken)) {
          // User authenticated your app!
          // Save the access token to a session and redirect
          $_SESSION['facebook_access_token'] = (string) $accessToken;
          // Log them into your web framework here . . .
          echo 'Successfully logged in!';
          exit;
        } elseif ($helper->getError()) {
          // The user denied the request
          // You could log this data . . .
          var_dump($helper->getError());
          var_dump($helper->getErrorCode());
          var_dump($helper->getErrorReason());
          var_dump($helper->getErrorDescription());
          // You could display a message to the user
          // being all like, "What? You don't like me?"
          exit;
        }
  ?>   
</section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
