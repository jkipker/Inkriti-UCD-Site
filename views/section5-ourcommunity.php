<?php
//twitter snippets for tweets
session_start();
error_reporting(1);
require_once("library/twitteroauth-master/twitteroauth/twitteroauth.php"); //Path to twitteroauth library
$twitteruser = "UnitedConcordia";
$notweets =8;
$consumerkey = "KxGg42KccAHCtuNqSOsnTgWPe";
$consumersecret = "cfFmUoEXU3Y1JbKdhuvAF88P3CMcOqKAljwqpkotng0cy91nHj";
$accesstoken = "2459385752-myx7Aszc4x4btu1Ikzp9UxkwELYzuTzrHgEgXDg";
$accesstokensecret = "TDS5Hjc6ENNUYvRigQTfhrxmEOyNWpBdteLo5v31lOjiS";

function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token_secret) {
  $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token_secret);
  return $connection;
}

$connection = getConnectionWithAccessToken($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);
$tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets."&exclude_replies=true");


?>
 <!-- Community -->
    <section class="ourCommunity">
    <div id="community">
    <div class="wrap">  
      <div class="socialmedia-wrapperleft">
        <div class="bg3">
          <div data-3750="left:-100px;" data-3900="left:435px;"><img src="img/community-bg-images.png" alt=""></div>
        </div>

        <div class="mediaWrap">
                    <div class="going-beyond">
          <h2 class="animated"><img src="img/titles/9-above-beyond.png"/></h2>
          <ul class="green-list">
            <li>Both our Government and Commercial Call Centers have earned BenchmarkPortal Certification as Centers for Excellence</li>
            <li>Our Commercial Call Center also earned 1<sup>st</sup> place in the medium-size Call Center Category in BenchmarkPortal’s Top 100 Call Center Competition.</li>
            <li>Most member calls are answered within 30 seconds, with a first-call resolution of more than 97%.</li>
            <li>Nearly 100% of all claims are processed in 30 days, with 70% processed electronically and 98% paid in 30 days.</li>
          </ul>
        </div>
        <div class="img"><img src="img/calling-clipart.png" class="call-center"></div>
        <div class="content-com">
          <p>In order for us to truly impact members and be effective in reaching them with our message of dental wellness, we need to improve access to information so they can make more informed decisions about their benefits and their health.</p>

            <p>Today’s on&ndash;the&ndash;go members can engage with us from their laptops, smartphones and tablets through a collection of user-friendly tools designed to keep them connected with everything healthy. For members who prefer a more personalized experience, a simple phone call connects them with a resourceful member of our United Concordia Dental team.</p>
          

          </div>
        </div>
        <div class="app">
          <h2><img src="img/titles/11-app.png"/></h2>
          <div>
            <p>When members are away from their
              computer, innovative mobile tools like
              our <strong>United Concordia Dental app</strong> can provide
              dental wellness answers and put coverage
              information at their fingertips.</p>
          </div>
        </div>


          <div class="comm-app-links">
            <a href="http://itunes.apple.com/us/app/united-concordia-dental-mobile/id522392221?mt=8" target="_blank"><img src="img/btn6-itunesapp.jpg" width="230" alt=""></a>
            <a href="http://play.google.com/store/apps/details?id=com.ucci.dmw&hl=en" target="_blank"><img style="margin-top:2px;" src="img/btn7-androidapp.jpg" width="230" alt=""></a>  

            <div class="share-box">
              <!-- <div><img src="img/social-share.png"/></div> -->
              <div>               
                <!-- <a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a> -->
                <!--script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script-->
                <!-- <a href="https://www.youtube.com/user/UCCIDental"><img class="social-ico" style="margin-right: 0;" src="img/social-youtube.png"/></a> -->
              </div>
            
          
          
        </div>

        <!-- amy shearer -->
        <div class="blocquotes amyShearer animated" data-3750="left[cubic]:1900px; opacity[cubic]:0" data-3950="left[cubic]:2020px;opacity[cubic]:1">
          <blockquote><span data-3900="transform:scale(0); opacity:0" data-4100="transform:scale(1); opacity:1" class="halloGreenTop">&nbsp;</span> We are excited to work with United Concordia Dental to
            promote <strong>overall health and wellness among children</strong> while creating the next generation of wildlife stewards. It
            is great when a partnership really impacts all aspects of
            children’s lives.<span data-3900="transform:scale(0); opacity:0" data-4100="transform:scale(1); opacity:1" class="halloGreenBtm">&nbsp;</span></blockquote>
          <span>&mdash; Amy Shearer<br>
          <i>Chief Marketing Officer, Philadelphia Zoo</i></span> </div>
        <div class="ponyies"> <img src="img/Page-1-Image-11.png" alt=""> </div>
        <div class="kids-app">
          <h2><img src="img/titles/12-kidsapp.png"/></h2>
          <p>For kids, our free <strong>Chomper Chums<sup>®</sup> app</strong> is an engaging tool that makes
            oral health fun by teaching the importance of proper brushing, flossing
            and rinsing, as well as the many benefits of good nutrition. Recognized
            throughout the industry, this app was recently honored with a prestigious
            Techburger Award.</p>
            <div class="comm-app-links">
              <a href="http://itunes.apple.com/us/app/chomper-chums/id579421399?mt=8" target="_blank">
                <img src="img/btn8-kids-itunes.jpg" width="230" alt=""></a>
              <a href="http://play.google.com/store/apps/details?id=com.ucci.dtt&hl=en" target="_blank"><img style="margin-top:2px;" src="img/btn8-kids-android.jpg" width="230" alt=""></a>

              <div class="share-box" style="margin: 0">
              <!-- <div><img src="img/social-share.png"/></div> -->
              <div>
               <!--  <a href="https://www.facebook.com/UnitedConcordiaDental"><img class="social-ico" src="img/social-fb.png"/></a> -->
                <!-- <a href="https://twitter.com/UnitedConcordia" target="_blank"><img class="social-ico" src="img/social-tweet.png"/></a> -->
                <!-- <a href="https://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a> -->
<!--script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script-->
                <!-- <a href="https://www.youtube.com/user/UCCIDental"><img class="social-ico" style="margin-right: 0;" src="img/social-youtube.png"/></a> -->
              </div>
            </div>
            </div>
        </div>
                </div>
      </div><!--social media wrapper-->
      <div class="socialmedia-wrapper">
        <div class="col">
          <div class="social-descript-box">
          <h1><img src="img/titles/13-social-media.png"/></h1>
          <p class="social-descript">In 2013, we engaged consumers through
a Facebook program designed to educate them about the connection between oral and overall wellness, while supporting three charities connected to United Concordia’s mission&ndash;National Diabetes Association, March of Dimes and Arthritis Foundation. Consumers can also find us on Twitter, YouTube, and LinkedIn.</p>

          <!--social links-->
          <ul class="social-links">

            <li><a href="https://www.facebook.com/UnitedConcordiaDental" target="_blank"><img src="img/facebook-icon.png" width="35" height="35" alt="facebook"></a></li>
            <li><a href="https://twitter.com/UnitedConcordia" target="_blank"><img src="img/twitter-icon.png"  width="35" height="35" alt="twitter"></a></li>
            <li><a href="https://www.youtube.com/user/UCCIDental" target="_blank"><img src="img/youtube-icon.png"  width="35" height="35" alt="youtube"></a></li>
            <li><a href="https://www.linkedin.com/company/united-concordia" target="_blank"><img src="img/linkdin-icon.png"  width="35" height="35" alt="linkedin"></a></li>
          </ul>
        </div>
      </div>

      <div class="col col2">

<!-- Start Twitter code Integration -->
       <?php foreach ($tweets as $row) : ?>
            <div class="socialmedia-box">
            <p> <?php echo $row->text; ?></p>
            <a href="https://twitter.com/UnitedConcordia/status/<?php echo $row->id ?>" target="_blank" class="link-icon"><img src="img/twitter-icon.png" alt="twitter" width="24" height="24"></a> </div>
       <?php endforeach; ?>
<!-- End Twitter code Integration -->
    </div><!-- end column-->
      </div><!-- /wrap -->
    </div>
    </div><!-- end of community-->
    </section>