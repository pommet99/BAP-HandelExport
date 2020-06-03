</body>
<div class="footer" style="background-color:#134074; height:20%; margin-bottom:0; display:flex;">
<img class="flogo" src="<?php echo get_template_directory_uri(); ?>/photos/logo2.png" alt="logo" style="padding:15px">

<div class="footer-menu">
  <a class="footer-link" href="#">Mentions Légales</a><br>
  <a class="footer-link" href="#">Contact</a>
</div>

<div class="footer-text">
  <a>2 Rue Fausse Chèneviére, 51390 Gueux</a><br>
  <a>contact@handelconcept.fr</a><br>
  <a>03 52 82 97 93</a>
</div>

<div class="socials">
<a href="https://www.facebook.com/handelconcept-106014120776202" class="fa fa-facebook" target="_blank"></a>
<a href="https://www.instagram.com/handelconcept/?hl=en" class="fa fa-instagram" target="_blank"></a>
<a href="https://www.linkedin.com/company/handel-concept/" class="fa fa-linkedin" target="_blank"></a>
</div>

</div>

<style>
@media only screen and (max-width: 600px){
    .flogo{
      padding:0;
      margin-left:-10px;
      margin-top:-5px;
    }

    .socials{
      margin-left:0px;
    }
}

.fa {
  font-size: 30px;
  text-align: center;
  text-decoration: none;
  color:orange;
  padding:15px;
}

.fa:hover {
    opacity: 0.7;
}

.socials{
  margin-left:27%;
}

.footer-text{
  color:white;
  margin-top:30px;
  margin-left:11%;
  text-align:center;
}

.footer-menu{
  margin-top:40px;
  margin-left:25px;
  text-align:center;
}

.footer-link{
  color:white;
  padding:10px;
  margin-top:20px;
  text-decoration:none;
}

.footer-link:hover{
  color:black;
  padding:10px;
  margin-top:20px;
  text-decoration:none;
}

</style>

<!-- jQuery first, Poppers then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="script.js"></script>

<?php wp_footer(); ?>
</body>
</html>
