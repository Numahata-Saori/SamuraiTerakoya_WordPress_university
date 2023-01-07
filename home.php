<!-- get_header()関数 -->
<?php get_header();?>

<!-- メインビジュアル -->
<div class="home">
  <div class="home_slider_container">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
          <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <!-- get_template_directory_uri()関数 -->
            <!-- <img src="images/top1_1200_630.jpg" class="d-block w-100" style="background-color: #2b7b8e26" /> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/top1_1200_630.jpg" class="d-block w-100" style="background-color: #2b7b8e26" /
            <div class="carousel-caption d-none d-md-block">
              <!-- get_template_directory_uri()関数 -->
              <!-- <img src="images/logo_big_slide.png" /> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" />
              <div class="title-slide">
                <p>Samurai University</p>
              </div>
              <div class="content-slide">
                <p>
                  SAMURAI大学の理念には「プログラミングを通して、
                  国際社会に貢献する豊かな教養を備えた人材の育成」と
                  「公正な世界観に基づき、
                  時代と社会の要請に応えていく実学」の思いが込められています
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!-- get_template_directory_uri()関数 -->
            <!-- <img src="images/top2_1200_630.jpg" class="d-block w-100" /> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/top2_1200_630.jpg" class="d-block w-100" />
            <div class="carousel-caption d-none d-md-block">
              <!-- get_template_directory_uri()関数 -->
              <!-- <img src="images/logo_big_slide.png" /> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" />
              <div class="title-slide">
                <p>Samurai University</p>
              </div>
              <div class="content-slide">
                <p>
                  SAMURAI大学の理念には「プログラミングを通して、
                  国際社会に貢献する豊かな教養を備えた人材の育成」と
                  「公正な世界観に基づき、
                  時代と社会の要請に応えていく実学」の思いが込められています
                </p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <!-- get_template_directory_uri()関数 -->
            <!-- <img src="images/top3_1200_630.jpg" class="d-block w-100" /> -->
            <img src="<?php echo get_template_directory_uri(); ?>/images/top3_1200_630.jpg" class="d-block w-100" />
            <div class="carousel-caption d-none d-md-block">
              <!-- get_template_directory_uri()関数 -->
              <!-- <img src="images/logo_big_slide.png" /> -->
              <img src="<?php echo get_template_directory_uri(); ?>/images/logo_big_slide.png" />
              <div class="title-slide">
                <p>Samurai University</p>
              </div>
              <div class="content-slide">
                <p>
                  SAMURAI大学の理念には「プログラミングを通して、
                  国際社会に貢献する豊かな教養を備えた人材の育成」と
                  「公正な世界観に基づき、
                  時代と社会の要請に応えていく実学」の思いが込められています
                </p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- メインビジュアルここまで -->

<!-- ニュースとイベント -->
<div class="news">
  <div class="footer_row">
    <div class="row news_row">
      <!-- ニュース -->
      <div class="col-lg-6 col-md-6 col-sx-12 news_col">
        <div class="home_title">News</div>
        <div class="home_title_sub">ニュース</div>
        <!-- <div class="news_post_small">
          <div class="news_post_meta">
            <ul>
              <li><a href="news_detail.html">2022/05/02</a></li>
            </ul>
          </div>
          <div class="news_post_small_title">
            <a href="news_detail.html">公開講座「UnityでつくるiOSアプリ」受講生募集</a>
          </div>
        </div>
        <div class="news_post_small">
          <div class="news_post_meta">
            <ul>
              <li><a href="news_detail.html">2022/05/02</a></li>
            </ul>
          </div>
          <div class="news_post_small_title">
            <a href="news_detail.html">新規カリキュラム「Pythonコース」登場!</a>
          </div>
        </div>
        <div class="news_post_small">
          <div class="news_post_meta">
            <ul>
              <li><a href="news_detail.html">2022/05/02</a></li>
            </ul>
          </div>
          <div class="news_post_small_title">
            <a href="news_detail.html">新規カリキュラム「Pythonコース」登場!</a>
          </div>
        </div> -->

        <?php
          //取得したい投稿記事などの条件を引数として渡す
          $args = array(
            // 投稿タイプ
            'post_type'      => 'post',
            // カテゴリー名
            'category_name' => 'news',
            // 1ページに表示する投稿数
            'posts_per_page' => 3,
          );
          // get_posts()関数で投稿記事一覧を取得
          // データの取得
          $posts = get_posts($args);

          // // ループ処理
          // foreach($posts as $post):
          //   // 投稿データをセット
          //   setup_postdata($post);
          //   // パーマリンクを表示
          //   echo get_permalink();
          //   echo "<br/>";
          //   // 投稿の日付を表示
          //   echo get_the_date();
          //   echo "<br/>";
          //   // 投稿のタイトルを表示
          //   the_title();
          //   echo "<br/><br/>";
          // endforeach;
          // // 使用した投稿データをリセット
          // wp_reset_postdata();
        ?>

        <!-- ループ処理 -->
        <?php foreach($posts as $post): ?>
        <!-- 投稿データをセット -->
        <?php setup_postdata($post); ?>
        <div class="news_post_small">
          <div class="news_post_meta">
            <ul>
              <li>
                <!-- aタグで投稿記事へのリンクを作成 -->
                <a href="<?php echo get_permalink(); ?>">
                  <!-- 日付を出力する -->
                  <?php echo get_the_date(); ?>
                </a>
              </li>
            </ul>
          </div>
          <div class="news_post_small_title">
            <!--  aタグで投稿記事へのリンクを作成する -->
            <a href="<?php the_permalink(); ?>">
              <!--  投稿記事のタイトルを表示する -->
              <?php the_title(); ?>
            </a>
          </div>
        </div>
        <?php endforeach; ?>

        <!-- 使用した投稿データをリセット -->
        <!-- ループとセットで利用する関数 -->
        <?php wp_reset_postdata(); ?>
      </div>
      <!-- ニュースここまで -->

      <!-- イベント -->
      <div class="col-lg-6 col-md-6 col-sx-12 news_col">
        <div class="home_title">Event</div>
        <div class="home_title_sub">イベント</div>
        <!-- <div class="news_post_small">
          <div class="row news_post_row">
            <div class="col-lg-3 col-md-4 col-sx-12">
              <div class="calendar_border">
                <div class="calendar_border_1">
                  <div class="calendar_month">OCT</div>
                  <div class="calendar_day">
                    <span>8</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sx-12">
              <div class="news_post_small_title">
                <a href="events_detail.html">AWSハンズオンセミナー</a>
              </div>
              <div class="news_post_content">
                10月8日　新宿〇〇ビル8Fにて、AWSハンズオンセミナーを開催します。AWSを実際に構築してみます。参加希望者は...
              </div>
            </div>
          </div>
        </div>
        <div class="news_post_small">
          <div class="row news_post_row">
            <div class="col-lg-3 col-md-4 col-sx-12">
              <div class="calendar_border">
                <div class="calendar_border_1">
                  <div class="calendar_month">OCT</div>
                  <div class="calendar_day">
                    <span>15</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-8 col-sx-12">
              <div class="news_post_small_title">
                <a href="events_detail.html">Raspberry Piハンズオンセミナー</a>
              </div>
              <div class="news_post_content">
                11月15日　新宿〇〇ビル8Fにて、Raspberry
                Piを使った、センサーを利用した自動走行ハンズオンセミナーを開催し...
              </div>
            </div>
          </div>
        </div> -->

        <?php
          //取得したい投稿記事などの条件を引数として渡す
          $args = array(
            // 投稿タイプ
            'post_type'      => 'post',
            // カテゴリー名
            'category_name' => 'event',
            // 1ページに表示する投稿数
            'posts_per_page' => 2,
          );
          // データの取得
          $posts = get_posts($args);
        ?>

        <!-- ループ処理 -->
        <?php foreach($posts as $post): ?>
          <?php setup_postdata($post); ?>
          <div class="news_post_small">
            <div class="row news_post_row">
              <div class="col-lg-3 col-md-4 col-sx-12">
                <div class="calendar_border">
                  <div class="calendar_border_1">
                    <!-- <div class="calendar_month">OCT</div> -->
                    <div class="calendar_month">
                      <!-- post_custom()関数 -->
                      <!-- カスタムフィールドで設定した値を取得 -->
                      <?php echo post_custom('month'); ?>
                    </div>
                    <div class="calendar_day">
                      <!-- <span>8</span> -->
                      <span>
                        <!-- post_custom()関数 -->
                        <!-- カスタムフィールドで設定した値を取得 -->
                        <?php echo post_custom('day'); ?>
                      </span>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-9 col-md-8 col-sx-12">
                <div class="news_post_small_title">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_title() ; ?>
                  </a>
                </div>
                <div class="news_post_content">
                  <?php
                    // get_the_content()⇒投稿内容（コンテンツ）の取得
                    // wp_trim_words()⇒文字列を指定の文字数で切り取る。切り取った文字列の末尾に別の文字を付与できる。
                    $content = wp_trim_words( get_the_content() ,  50, '...');
                    echo $content;
                  ?>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
      </div>
      <!-- イベントここまで -->
    </div>
  </div>
</div>
<!-- ニュースとイベントここまで -->

<!-- コース -->
<div class="courses">
  <div class="footer_row">
    <div class="row">
      <div class="col">
        <div class="section_title_container text-center">
          <h2 class="home_title">COURSES</h2>
          <div class="section_subtitle">コース</div>
        </div>
      </div>
    </div>

    <?php
    //取得したい投稿記事などの条件を引数として渡す
    $args = array(
      // 投稿タイプ
      'post_type'      => 'course',
      // 1ページに表示する投稿数
      'posts_per_page' => 3,
    );
    // データの取得
    $posts = get_posts($args);
    ?>

    <div class="row courses_row">
      <!-- ループ処理 -->
      <?php foreach ($posts as $post) : ?>
        <?php setup_postdata($post); ?>
        <div class="col-lg-4 course_col">
          <div class="course">
            <div class="course_image">
              <!-- <img src="images/pic6-3.jpg" alt="" /> -->
              <!-- サムネイル画像を取得 -->
              <?php the_post_thumbnail();?>
            </div>
            <div class="course_body">
              <h3 class="course_title">
                <!-- <a href="courses_detail.html">教育学部</a> -->
                <!-- タイトルを取得 -->
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h3>
              <div class="course_text">
                <p>
                  <!-- 広い視野と総合力を持つ世界に通用する、教育者・指導者を育成 -->
                  <!-- 内容を取得 -->
                  <?php echo wp_trim_words(get_the_content(), 22, '...'); ?>
                </p>
              </div>
            </div>
            <div class="course_footer">
              <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                <!-- <div class="course_price ml-auto">詳細を見る</div> -->
                <div class="course_price ml-auto"><a href="<?php the_permalink(); ?>">詳細を見る</a></div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
      <!-- 使用した投稿データをリセット -->
      <?php wp_reset_postdata(); ?>
    </div>
  </div>
</div>
<!-- コースここまで -->

<!-- 数字 -->
<div class="counter">
  <!-- get_template_directory_uri()関数 -->
  <!-- <div class="counter_background" style="background-image: url(images/pic_chart.png)"></div> -->
  <div class="counter_background" style="background-image: url(<?php echo get_template_directory_uri();?>/images/pic_chart.png)"></div>
  <div class="footer_row">
    <div class="">
      <div class="">
        <div class="counter_content">
          <div class="milestones row">
            <div class="milestone col-md-3 col-lg-3 col-sx-12">
              <div class="milestone_counter">
                <p>教授数</p>
                <!-- get_template_directory_uri()関数 -->
                <!-- <img src="images/icon4.png" alt="" /> -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon4.png" alt="" />
                <span class="milestone_number">335</span><span class="milestone_count">名</span>
              </div>
            </div>
            <div class="milestone col-md-3 col-lg-3 col-sx-12">
              <div class="milestone_counter">
                <p>卒業生徒</p>
                <!-- get_template_directory_uri()関数 -->
                <!-- <img src="images/icon3.png" alt="" /> -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon3.png" alt="" />
                <span class="milestone_number">4526</span><span class="milestone_count">名</span>
              </div>
            </div>
            <div class="milestone col-md-3 col-lg-3 col-sx-12">
              <div class="milestone_counter">
                <p>学習コース</p>
                <!-- get_template_directory_uri()関数 -->
                <!-- <img src="images/icon2.png" alt="" /> -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon2.png" alt="" />
                <span class="milestone_number">12</span><span class="milestone_count">コース</span>
              </div>
            </div>
            <div class="milestone col-md-3 col-lg-3 col-sx-12">
              <div class="milestone_counter">
                <p>受賞</p>
                <!-- get_template_directory_uri()関数 -->
                <!-- <img src="images/icon1.png" alt="" /> -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/icon1.png" alt="" />
                <span class="milestone_number">35</span><span class="milestone_count">回</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- 数字ここまで -->

<!-- get_footer()関数 -->
<?php get_footer(); ?>
