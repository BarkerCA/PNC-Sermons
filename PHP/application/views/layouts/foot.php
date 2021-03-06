  </section>
  <div class="site-footer">&nbsp;</div>
  <footer>
    <div class="row">
      <div class="medium-8 columns">
        <ul>
          <li>&copy; <?php echo date('Y'); ?> Pointe North Church - All Rights Reserved</li>
          <li>110 Bilo Drive, Moncks Corner, SC, 29461</li>
          <li>Telephone: <a href="tel:843-761-6196">843-761-6196</a></li>
          <li>Email: <a href="mailto:pnccinfo@pointenorth.org">pnccinfo@pointenorth.org</a></li>
        </ul>
        <p>
          <a href="https://pnccchssc.infellowship.com/UserLogin/Index?ReturnUrl=%2fonlinegiving%2fgivenow%2fstep1" target="_blank">Online Giving</a> |
          <a href="http://www.pointenorth.org/plan-a-visit/directions-maps/">Directions</a> |
          <a href="http://www.pointenorth.org/next-steps/care-prayer/">Prayer Requests</a> |
          <a href="http://www.pointenorth.org/privacy">Privacy Policy</a>
        </p>
      </div>
      <div class="medium-4 columns">
        <p>
          <a href="http://www.bible.com/app" target="_blank">
            <img id="youversion" src="http://assets.pointenorth.org/img/color_logo.png" />
            <img id="bible" src="http://assets.pointenorth.org/img/Bible-app-icon-english-144x144.png" />
          </a>
        </p>
        <p style="padding-top: 10px;">
          <a href="http://www.pointenorth.org/feed"><img class="social" id="rss" src="http://assets.pointenorth.org/img/social/rss-128.png" /></a>
          <a href="mailto:pnccinfo@pointenorth.org" target="_blank"><img class="social" id="email" src="http://assets.pointenorth.org/img/social/email-128.png" /></a>
          <a href="https://www.facebook.com/PointeNorth" target="_blank"><img class="social" id="facebook" src="http://assets.pointenorth.org/img/social/facebook-128.png" /></a>
          <a href="https://twitter.com/pncc_sc" target="_blank"><img class="social" id="twitter" src="http://assets.pointenorth.org/img/social/twitter-128.png" /></a>
          <a href="http://instagram.com/pncc_sc" target="_blank"><img class="social" id="instagram" src="http://assets.pointenorth.org/img/social/instagram-128.png" /></a>
          <img style="cursor: pointer;" id="paypal_footer" class="social" src="http://assets.pointenorth.org/img/social/paypal-128.png" onclick="document.forms['paypal_form'].submit();" />
          <form id="paypal_form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input name="cmd" value="_s-xclick" type="hidden">
              <input name="hosted_button_id" value="P8SXZVLAKNRQW" type="hidden">
          </form>
        </p>
      </div>
    </div>
  </footer>

  <?php echo javascript_link('sermons.js'); ?>

</body>
</html>