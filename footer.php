</body>
<div class="footer" style="background-color:#134074; height:10%; margin-bottom:0; display:flex;">
<img class="flogo" src="<?php echo get_template_directory_uri(); ?>/photos/logo2.png" alt="logo" style="padding:15px">

<div class="socials">
<a href="https://facebook.com/" class="fa fa-facebook"></a>
<a href="https://instagram.com/" class="fa fa-instagram"></a>
<a href="https://linkedin.com/" class="fa fa-linkedin"></a>
</div>

</div>

<style>
@media only screen and (max-width: 600px){
    .flogo{
      padding:0;
      margin-left:-10px;
      margin-top:-5px;
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
  margin-top:1%;
}

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
