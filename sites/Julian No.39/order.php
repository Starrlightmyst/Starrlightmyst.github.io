<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
  <title>No. 39 - Custom Design Knit Crafts</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <!-- <link rel="stylesheet" href="css/skeleton.css"> -->
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/common.min.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->


    <header>
      <a href="index.html"><img id="logo" src="images/site-logo.png" alt=""></a>

    <nav>
      <div class="nav-mobile">
        <a href="#!" id="nav-toggle"><span></span></a>
      </div>
      <ul class="nav-list">
        <li><a href="gallery.html">Gallery</a></li>
        <!--
    Order form
      Name
    Email
    Request
    Size
    Color picker
    Features/Additonal requests
  budget


  -->
        <li><a href="https://www.etsy.com/jp/shop/crounjules" target="_blank">Shop</a></li>
        <li><a href="order.php">Custom Orders</a>
          <!-- <ul class="nav-dropdown">
            <li><a href="#!">Contact</a></li>
          </ul> -->
        </li>
      </ul>
    </nav>
    </header>
    <main>
      <section class="main-content">
        <h1>No. 39 - Custom Design Knit Crafts</h1>


          <h2>Custom Order Form</h2>

        <div class="order-form">
          <form id="order-form" method="POST" action="contact.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required>
            <br>
            <input name="email" type="email" class="form-control" placeholder="Your Email" required>
            <br>
            <textarea name="message" class="form-control" placeholder="Message" cols="30" rows="10"></textarea>
            <button type="submit" name="submit" class="form-control submit">Submit Order Request</button>

          </form>


        </div>
      </section>


    </main>
    <footer>
      <p>built and designed by <a href="http://starrlightmyst.github.io" target="_blank">Lavita Starr</a></p>
    </footer>


    <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
      <script
  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
  crossorigin="anonymous"></script>

      <script>
        ;(function($) {
          $(function() {
            $('nav ul li > a:not(:only-child)').click(function(e) {
              $(this)
              .siblings('.nav-dropdown')
              .toggle()
              $('.nav-dropdown')
              .not($(this).siblings())
              .hide()
              e.stopPropagation()
            })
            $('html').click(function() {
              $('.nav-dropdown').hide()
            })
          })
        })(jQuery)
      </script>

      <script>
        $('#nav-toggle').on('click', function() {
          this.classList.toggle('active')
        })
      </script>
      <script>
        $('#nav-toggle').click(function() {
          $('nav ul').toggle()
        })
      </script>


<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>
