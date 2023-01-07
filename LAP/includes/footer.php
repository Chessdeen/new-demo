
  <hr class="footer_hr">
  <!-- footer section -->
  <section class="container-fluid footer_section">
    <p>
      &copy;
      2022 All Rights Reserved. Made by
      <a target="_blank" href="https://gtech.codes/">G-Tech Codes</a> |
      <a href="terms.php">Terms and Conditions</a> . 
      <a href="privacy.php">Privacy Policy</a>
    </p>
  </section>
  <!-- footer section -->

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>



  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width")
      document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    }
  </script>
  
    <script>
        // Get the button
        let mybutton = document.getElementById("myBtn");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            mybutton.style.display = "block";
          } else {
            mybutton.style.display = "none";
          }
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
    </script>
    <script>
        function myFunction() {
        var element = document.body;
        element.classList.toggle("dark-mode");
        }
    </script>

</body>

</html>