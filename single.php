<?php get_header(); ?>
    <!-- Header -->
    <!-- Main -->
    <article id="main">
    <!-- Content -->
        <div id="content" class="container">
          <section id="header">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
                    <div id="info">
                        <ul>
                          <li class="author"><?php the_author_posts_link(); ?></li>
                          <li class="date"><?php the_time('Y/m/d'); ?></li>
                          <li class="tag"><?php the_tags('タグ: ',' '); ?></li>
                        </ul>
                    </div>
                    <!-- Advertisement -->
                    <p>広告</p>
                    <!-- /Advertisement -->
                </section>
                <section id="sentence">
                  <?php the_content('続きを読む &rarr;'); ?>
                </section
                      <button class="nextpage"><span>次のページへ▶︎ 6つのクラスタに分類する</span></button>
                        <div class="pagenation">
                          <ul>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                          </ul>
                        </div>
                </div>
              </article>
            <!-- whileを終了し、投稿がないなら以下を表示 -->
            <?php endwhile; else: ?>
                <p>記事が見つかりませんでした。</p>
            <?php endif; ?>
        <!-- Content -->
        <!-- Contact -->
    <section id="contact_wrapper">
        <ul class="buttons-icon">
            <li>
                <input type="submit" id="social-facebook" name="social-facebook" class="social-icon facebook" value="f" />
            </li>
            <li>
                <input type="submit" id="soial-twitter" name="social-twitter" class="social-icon twitter" value="T" />
            </li>
            <li>
                <input type="submit" id="social-line" name="social-line" class="social-icon line" value="L" />
            </li>
            <li>
                <input type="submit" id="social-hatena" name="social-hatena" class="social-icon hatena" value="B!" />
            </li>
        </ul>
    </section>
    <section id="follow">
        <h3>いいねして記事の更新情報をチェック</h3>
        <div class="fb-like" data-href="http://credo.asia" data-width="200px" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
        <div class="twitterfollow">
            <a href="https://twitter.com/credo_media" class="twitter-follow-button" data-show-count="false" data-lang="ja">@credo_mediaをフォロー</a>
            <script>
                ! function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0],
                        p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + '://platform.twitter.com/widgets.js';
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, 'script', 'twitter-wjs');
            </script>
        </div>
    </section>
    <!-- /Contact -->
        <!-- New articles -->
            <section id="recent" class="article_list">
                <h3>最新の記事</h3>
                <hr>
                        <span class="thum">
                    <a href="http://github.com" title="">
                        <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/github-mark@1200x630.png">
                    </a>
                </span>
                <div class="info">
                    <?php /* The loop */ ?>
                      <?php $items = get_posts('numberposts=4', 'offset=1') ?>
                      <ul class="new_posts_loop">
                      <?php foreach ($items as $post) : ?>

                      <?php setup_postdata($post); ?>
                        <li>
                          <a class="article" href="<?php the_permalink(); ?>">
                            <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/github-mark@1200x630.png" alt="">
                            <p><?php the_title(); ?></p>
                            <ul>
                              <li class="author">ふかざわ</li>
                              <li class="date"><?php the_time('Y/m/d'); ?></li>
                              <li class="tag">IT・テクノロジー</li>
                            </ul>
                          </a>
                        </li>
                      <?php endforeach ; ?>
                    <button type="button" name="more"></button>
                    </div>
                  <div class="cf"></div>
                  <div class="button">もっと読む</div>
              </section>
              <!-- /New articles -->
            <!-- Popular articles -->
            <section id="popular" class="article_list">
                <h3>人気の記事</h3>
                <ul>
                    <li>
                        <span class="thum">
                    <a href="http://github.com" title="">
                        <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/github-mark@1200x630.png">
                    </a>
                </span>
                        <div class="info">
                            <h4>
                    <a href="#" title="">Github -Where Software is Built-</a>
                </h4>
                            <ul>
                                <li class="author">Chris Wanstrath</li>
                                <li class="date">2008/04/10</li>
                                <li class="tag">IT・テクノロジー</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span class="thum">
                    <a href="http://github.com" title="">
                        <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/img1.jpg">
                    </a>
                </span>
                        <div class="info">
                            <h4>
                    <a href="#" title="">Kingdom Hearts 3</a>
                </h4>
                            <ul>
                                <li class="author">Square Enix</li>
                                <li class="date">2016/xx/xx</li>
                                <li class="tag">IT・テクノロジー</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span class="thum">
                    <a href="http://github.com" title="">
                        <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/c2a18fae.png">
                    </a>
                </span>
                        <div class="info">
                            <h4>
                    <a href="#" title="">MetalGearSolid 5 -The Phantom Pain-</a>
                </h4>
                            <ul>
                                <li class="author">Kojima Hideo</li>
                                <li class="date">2015/09/02</li>
                                <li class="tag">IT・テクノロジー</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <span class="thum">
                    <a href="http://github.com" title="">
                        <img src="/hottocafemichikusa/wp-content/themes/CredoMobileFront/images/ps4.jpg">
                    </a>
                </span>
                        <div class="info">
                            <h4>
                    <a href="#" title="">Playstation 4</a>
                </h4>
                            <ul>
                                <li class="author">Sony Computer Entertainment</li>
                                <li class="date">2014/02/22</li>
                                <li class="tag">うんこ</li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </section>
            <?php related_post_output(); ?>
        </div>
        <div class="cf"></div>
          <p>広告</p>
            <div class="fb-page" data-href="https://www.facebook.com/Credo-588011671280566/timeline/" data-width="100%" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"></div>
    </article>
    <!-- other articles -->
    <!-- <div id="others"> -->
      <!-- <?php related_post_output(); ?> -->
    <!-- </div> -->
    <!-- /other articles -->
<?php get_footer(); ?>
