<?php get_header(); ?>

<!-- Content [ -->
<div class="row hp-news">
  <div id="hp-news" class="element-1-2 wp-hp-news">
    <div id="wp-hp-news__txt-content" class="test">
      <!-- rest api data js -->
      <div class="wp-hp-news__content-wrapper">
        <h6 class="wp-hp-news__section-name"><a href="/news" alt="ivana todorovic latest news">NEWS</a></h6>
        <h4 class="wp-hp-news__what"></h4>
        <h5 class="wp-hp-news__title"></h5>
        <p class="wp-hp-news__desc"></p>
      </div>
    </div>
  </div>
  <div id="hp-badge" class="element-1-2 wp-hp-badge">
    <div class="wp-hp-badge__content-wrapper">
      <h4 class="wp-hp-badge__what">DOCUMENTARY FILMMAKER</h4>
      <h5 class="wp-hp-badge__title"><a href="/lecturer/#tedx">TEDxAUK talk</a></h5>
      <p></p>
    </div>
  </div>
</div>

<!-- hp quote  -->
<div class="row">
    <div class="quote-wrapper">
    <q class="quote">These are the films that we need
   in order to get closer to people
  who are so far from us</q>
  <div class="dash-container">
        <div class="dash dash-center"></div>
  </div>
  <p class="quote-below-txt">Maike Mia Horhe / Curator of Berlinare Shorts</br>
  (When I was boy, I was a girl)</p>
  </div>
</div>

<div class="row p-lr-1">
  <h1 class="hp-spacer-top-bi">FILMS</h1>
</div>

<div class="row  row--100p">
  <div class="film-cover film-cover--when-i-was-boy">
    <a href="/films/when-i-was-a-boy-i-was-a-girl">
      <div class="cover-fx">
        <div class="film-cover__group-content">
          <h4 class="film-cover__title">WHEN I WAS BOY<br>
            I WAS A GIRL</h4>
            <div class="film-cover__separator"></div>
            <p class="film-cover__sub-title">EVERYONE DESERVES HAPPINESS IN LIFE ...HAPPINESSS.</p>
          </div>
        </div></a>
      </div>

      <div class="film-cover film-cover--harlem">
        <a href="/films/a-harlem-mother"><div class="cover-fx">
          <div class="film-cover__group-content">
            <h4 class="film-cover__title">A HARLEM MOTHER</h4>
            <div class="film-cover__separator"></div>
            <p class="film-cover__sub-title">LIFE IS GOOD UNTIL YOU ARE LIVING IT.</p>
          </div>
        </div></a>
      </div>

      <div class="film-cover film-cover--represent">
        <a href="/rapresent"><div class="cover-fx">
          <div class="film-cover__group-content">
            <h4 class="film-cover__title">RAPRESENT</h4>
            <div class="film-cover__separator"></div>
            <p class="film-cover__sub-title">ITS A BAD FEELING HURTING SOMEBODY ELSE IF YOU CAN HURT YOURSELF.</p>
          </div>
        </div></a>
      </div>

      <div class="film-cover film-cover--everyday-life">
        <a href="/films/everyday-life-of-roma-children-from-block-71">  <div class="cover-fx">
          <div class="film-cover__group-content">
            <h4 class="film-cover__title">EVERYDAY LIFE OF ROMA CHILDREN FROM BLOCK 71</h4>
            <div class="film-cover__separator"></div>
            <p class="film-cover__sub-title">I DON'T KNOW HOW TO LEARN.</p>
          </div>
        </div></a>
      </div>

      <!-- about  -->
      <div class="row">
        <div class="intro-text p-lr-1">
          <h1 class="margin-top-2">ABOUT</h1>
          <h2>DIRECTOR / DP / PRODUCER & LECTURER</h2>
          <p>Ivana Todorovic is a character driven documentary filmmaker with passion for social change from
            Belgarde, Serbia. Her films have been shown in more then 80 international film festivals, such as the Berlinale Shorts, Traverse City Festival, Rotterdam, Palm Springs Shorts, Rooftop etc. and wone acclaim worldwide.
            Films are used in media campaigns, educational and NGO settings.
          </p>
          <a class="orange" href="/biography" title="about Ivana Todorovic">Read more <span>&#187;</span></a>
        </div>
      </div>

    </div>
    <!-- ] Content -->

    <script>
    jQuery(document).ready(function($) {
      console.log('api in.....');
      $.ajax({
        type: 'GET',
        cache: true,
        // get all news + ord by modified date + show on hp flag
        url: 'http://ivanatodorovic.com:5015/wp-json/posts?filter[category_name]=news&filter[orderby]=modified',
        dataType: 'json',
        success: function(posts) {  // @TODO split in Fn()....
          console.log('wp api exec succ....');
          // console.log(posts);

          /* from wp api
          g_news_img: (URL)
          fg_news_showonhp: true, // show on hp ord by date
          fg_news_showonhp_title: "PLANS TO SELL ART",
          fg_news_showonhp_what:  "NEW YORK TIMES",
          fg_news_showonhp_desc:  "Ivana Todorovic recently with friends in TRI space"
          */

          var html;

          for(var i = 0, l = posts.length; i < l; ++i){
            if(posts[i].meta.fg_news_showonhp){ // if true
              wpHpNewsImg = posts[i].meta.fg_news_img; //global
              wpHpNewsURL = posts[i].link;
              wpHpNewsURLTitle = posts[i].meta.fg_news_showonhp_title;
              wpHpNewsWhat = posts[i].meta.fg_news_showonhp_what;
              wpHpNewsDesc = posts[i].meta.fg_news_showonhp_desc;
              break; // exit loop
            }
          }

          $('#wp-hp-news__txt-content').append(html);
          $('.wp-hp-news__what').append(wpHpNewsWhat);
          $('.wp-hp-news__title').append(wpHpNewsURLTitle);
          $('.wp-hp-news__desc').append(wpHpNewsDesc);
          $('.test').css("background", "url("+wpHpNewsImg+") center center/cover no-repeat");

        }
      });
    });
    </script>

    <?php get_footer(); ?>
