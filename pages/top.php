<?php
/*
* Template Name: トップページ
* Template Post Type: page
*/
?>
<?php get_header() ?>
<main class="top bk_graph">
    <section class="mv">
        <picture class="mv__img">
            <source media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv_sp.webp" />
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/top/mv_pc.webp" alt="souのイメージ画像" />
        </picture>
        <div class="wrap1080">
            <div class="mv__text">
                <h2>豊富な経験と技術で<br>オンリーワンの住まい</h2>
                <p>地域風土を熟した工務店<br class="sp">だからこそ提案できる住まいづくり</p>
            </div>
            <div class="mv__performance">
                <?php echo img("top", "mv__bottom-performance", "webp", "", "施工実績") ?>
            </div>
        </div>
        <ul class="mv__links">
            <li class="hover-opacity">
                <a href="">
                    <div><?php echo img("top", "mv__bottom1", "webp", "", "建てる") ?></div>
                    <span>建てる</span>
                </a>
            </li>
            <li class="hover-opacity">
                <a href="">
                    <div><?php echo img("top", "mv__bottom2", "webp", "", "リノベーション") ?></div>
                    <span>リノベーション</span>
                </a>
            </li>
            <li class="hover-opacity">
                <a href="">
                    <div><?php echo img("top", "mv__bottom3", "webp", "", "施工事例") ?></div>
                    <span>施工事例</span>
                </a>
            </li>
            <li class="hover-opacity">
                <a href="">
                    <div><?php echo img("top", "mv__bottom4", "webp", "", "住み替え") ?></div>
                    <span>住み替え</span>
                </a>
            </li>
            <li class="hover-opacity">
                <a href="">
                    <div><?php echo img("top", "mv__bottom5", "webp", "", "住まう") ?></div>
                    <span>住まう</span>
                </a>
            </li>
        </ul>
    </section>
    <section class="build">
        <div class="wrap1440">
            <div class="wrap1080">
                <div class="flex">
                    <div class="flex__left">
                        <div class="headline">
                            <h3>建てる</h3>
                            <span>BUILD</span>
                        </div>
                        <div class="sp"><?php echo img("top", "build__img", "webp", "element", "イメージ画像") ?></div>
                        <p>
                            地震や火事にも強く、小さな土地でも<br class="pc">
                            最大限活かせるこだわりの家を実現します。
                        </p>
                        <small>耐火構造のノウハウが豊富で、地区トップクラスの木造耐火を誇っています。</small>
                        <div class="btn2">
                            <a href="">詳しく見る</a>
                        </div>
                    </div>
                    <div class="flex__right element">
                        <!-- <?php echo img("top", "build__img", "webp", "element", "イメージ画像") ?> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="renovation">
        <div class="wrap1440">
            <div class="wrap1080">
                <div class="flex">
                    <div class="flex__left pc-tab element">
                        <!-- <?php echo img("top", "renovation__img1", "webp", "element", "イメージ画像") ?> -->
                    </div>
                    <div class="flex__right">
                        <div class="headline">
                            <h3>リノベーション</h3>
                            <span>RENOVATION</span>
                        </div>
                        <div class="sp"><?php echo img("top", "renovation__img1", "webp", "element", "イメージ画像") ?></div>
                        <p>
                            培ってきたノウハウと技術で<br>
                            お客様の描く理想を実現します。
                        </p>
                        <small>
                            古くなったリゾートマンションを最新設備と上質な非日常空間としてご提供。<br>
                            屋上リフォームやエコリフォームなど、時代に合ったリフォームをご提案します。
                        </small>
                    </div>
                </div>
            </div>
            <div class="renovation__bottom element">
                <div class="flex">
                    <?php echo img("top", "renovation__img2", "webp", "sp", "イメージ画像") ?>
                    <div class="flex__left pc-tab"></div>
                    <div class="flex__right">
                        <p>
                            直近10年でのリノベーション実績数は2000件以上。お客様の「こんな住まいにしたい」という想いを丁寧にヒアリングし、そこに向けてどのような実現方法があるのかを私たちがご提案します。長年現場で培ってきた技術と提案力でお客様の理想の住まいへの道筋をしっかりと組み立て、作り上げていくことを心がけています。
                        </p>
                        <div class="btn3"><a href="">詳しく見る</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="committed">
        <div class="wrap1080">
            <h3>約40年培った<br>
                木造住宅とその可能性
            </h3>
            <span>COMMITTED TO</span>
            <p>
                創業1986年以来「安心・安全・快適」をモットーに住まいをご提供してまいりました。<br>
                ２×４耐火住宅の豊富な施工実績。住まいに関する各事業の展開、住まいのことならトータルでおまかせしていただけます。
            </p>
            <div class="btn2">
                <a href="">詳しく見る</a>
            </div>
        </div>
    </section>
    <section class="works">
        <div class="headline">
            <h3>施工事例</h3>
            <span>WORKS</span>
        </div>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <?php
                $paged = get_query_var("paged") ? get_query_var("paged") : 1;
                $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'works',
                    'paged' => $paged,
                    'posts_per_page' => 4,
                ));
                $my_posts = get_posts($the_query);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="swiper-slide">
                            <?php $groupA = SCF::get('img-list'); ?>
                            <div class="swiper-slide__item">
                                <a class="hover-opacity" href="">
                                    <div class="works__img">
                                        <img src="<?php echo wp_get_attachment_image_url($groupA[0]['img'], 'full'); ?>">
                                        <p class="category">
                                            <?php
                                            $terms = get_the_terms($post->ID, 'case');
                                            if ($terms) :
                                                foreach ($terms as $term) {
                                                    echo  $term->name;
                                                }
                                            endif;
                                            ?>
                                        </p>
                                    </div>
                                    <p class="title"><?php the_title(); ?></p>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
        </div>
        <div class="btn2"><a href="">実績一覧を見る</a></div>
    </section>
    <section class="bunjyou">
        <div class="wrap1080">
            <div class="flex">
                <div class="headline">
                    <h3>分譲物件</h3>
                    <span>SALE IN LOTS</span>
                </div>
                <div class="viewAll pc-tab hover-opacity">
                    <a href="">VIEW ALL</a>
                </div>
            </div>
            <div class="bunjyou__main">
                <?php
                $paged = get_query_var("paged") ? get_query_var("paged") : 1;
                $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'sale-in-lots',
                    'paged' => $paged,
                    'posts_per_page' => 3,
                ));
                $my_posts = get_posts($the_query);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <a class="hover-opacity" href="">
                            <div class="bunjyo__img">
                                <img src="<?php echo wp_get_attachment_image_url($groupA[0]['img'], 'full'); ?>">
                                <p class="category">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'case');
                                    if ($terms) :
                                        foreach ($terms as $term) {
                                            echo  $term->name;
                                        }
                                    endif;
                                    ?>
                                </p>
                            </div>
                            <p class="place">
                                <?php $myfield = scf::get('place');
                                echo $myfield; ?>
                            </p>
                            <p class="title"><?php the_title(); ?></p>
                            <p class="floor">
                                間取り<span></span>
                                <b><?php $myfield = scf::get('floor');
                                    echo $myfield; ?></b>
                            </p>
                            <p class="cost">
                                費用<span></span>
                                <b>
                                    <?php $myfield = scf::get('cost');
                                    echo $myfield; ?>
                                </b>
                            </p>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="viewAll sp">
                <a href="">VIEW ALL</a>
            </div>
        </div>
    </section>
    <section class="jisya">
        <div class="wrap1080">
            <div class="flex">
                <div class="headline">
                    <h3>自社所有物件</h3>
                    <span>OWNED PROPERTY</span>
                </div>
                <div class="viewAll pc-tab hover-opacity">
                    <a href="">VIEW ALL</a>
                </div>
            </div>
            <div class="jisya__main">
                <?php
                $paged = get_query_var("paged") ? get_query_var("paged") : 1;
                $the_query = new WP_Query(array(
                    'post_status' => 'publish',
                    'post_type' => 'sale-in-lots',
                    'paged' => $paged,
                    'posts_per_page' => 3,
                ));
                $my_posts = get_posts($the_query);
                ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <a class="hover-opacity" href="">
                            <div class="jisya__img">
                                <img src="<?php echo wp_get_attachment_image_url($groupA[0]['img'], 'full'); ?>">
                                <p class="category">
                                    <?php
                                    $terms = get_the_terms($post->ID, 'case');
                                    if ($terms) :
                                        foreach ($terms as $term) {
                                            echo  $term->name;
                                        }
                                    endif;
                                    ?>
                                </p>
                            </div>
                            <p class="place">
                                <?php $myfield = scf::get('place');
                                echo $myfield; ?>
                            </p>
                            <p class="title"><?php the_title(); ?></p>
                            <p class="floor">
                                間取り<span></span>
                                <b><?php $myfield = scf::get('floor');
                                    echo $myfield; ?></b>
                            </p>
                            <p class="cost">
                                費用<span></span>
                                <b>
                                    <?php $myfield = scf::get('cost');
                                    echo $myfield; ?>
                                </b>
                            </p>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="viewAll sp">
                <a href="">VIEW ALL</a>
            </div>
        </div>
    </section>
    <section class="staff">
        <div class="wrap1440">
            <div class="wrap1080">
                <div class="flex">
                    <div class="flex__left">
                        <picture>
                            <source class="element" media="(max-width:767px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/top/staff__img_sp.webp" />
                            <img class="element" src="<?php echo get_template_directory_uri(); ?>/assets/images/top/staff__img_pc.webp" alt="souのイメージ画像" />
                        </picture>
                    </div>
                    <div class="flex__right">
                        <div class="headline">
                            <h3>スタッフ紹介</h3>
                            <span>STAFF</span>
                        </div>
                        <p>
                            SOUホールディングスで働くスタッフたちは、お客様に寄り添い、よりい
                            い建物をご提供できるようこだわりと情熱を持った社員たちばかりです。
                            仕事に対する想いやお客様へのメッセージを、ご紹介いたします。
                        </p>
                        <div class="btn3">
                            <a target="_blank" href="">スタッフを知る</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="info">
        <div class="wrap1080">
            <div class="news">
                <h3>おしらせ</h3>
                <ul>
                    <?php
                    $paged = get_query_var("paged") ? get_query_var("paged") : 1;
                    $the_query = new WP_Query(array(
                        'post_status' => 'publish',
                        'post_type' => 'post',
                        'paged' => $paged,
                        'posts_per_page' => 3,
                    ));
                    $my_posts = get_posts($the_query);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li>
                                <a href="">
                                    <!-- コラム見せる時にコメント解除 -->
                                    <!-- <p class="title"><?php
                                                            if (mb_strlen($post->post_title, 'UTF-8') > 63) {
                                                                $title = mb_substr($post->post_title, 0, 63, 'UTF-8');
                                                                echo $title . '...';
                                                            } else {
                                                                echo $post->post_title;
                                                            }
                                                            ?></p> -->
                                    <p class="title"><?php
                                                        if (mb_strlen($post->post_title, 'UTF-8') > 78) {
                                                            $title = mb_substr($post->post_title, 0, 78, 'UTF-8');
                                                            echo $title . '...';
                                                        } else {
                                                            echo $post->post_title;
                                                        }
                                                        ?></p>
                                    <b class="day"><?php echo get_the_date(); ?>/</b><span class="category"><?php echo my_the_post_category(false) ?></span>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <div class="viewAll hover-opacity"><a href="">VIEW ALL</a></div>
            </div>
            <div class="column">
                <h3>コラム</h3>
                <ul>
                    <?php
                    $paged = get_query_var("paged") ? get_query_var("paged") : 1;
                    $the_query = new WP_Query(array(
                        'post_status' => 'publish',
                        'post_type' => 'column',
                        'paged' => $paged,
                        'posts_per_page' => 3,
                    ));
                    $my_posts = get_posts($the_query);
                    ?>
                    <?php if ($the_query->have_posts()) : ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li>
                                <a href="">
                                    <div>
                                        <?php the_post_thumbnail('full'); ?>
                                    </div>
                                    <div>
                                        <span class="vol">vol.<?php echo get_post_number($post->post_type); ?>/</span>
                                        <b class="teram">
                                            <?php
                                            $terms = get_the_terms($post->ID, 'genre');
                                            if ($terms) :
                                                foreach ($terms as $term) {
                                                    echo  $term->name;
                                                }
                                            endif;
                                            ?>
                                        </b>
                                        <p class="title"><?php
                                                            if (mb_strlen($post->post_title, 'UTF-8') > 26) {
                                                                $title = mb_substr($post->post_title, 0, 26, 'UTF-8');
                                                                echo $title . '...';
                                                            } else {
                                                                echo $post->post_title;
                                                            }
                                                            ?></p>
                                        <div class="content">
                                            <?php
                                            if (mb_strlen($post->post_content, 'UTF-8') > 84) {
                                                $content = mb_substr($post->post_content, 0, 84, 'UTF-8');
                                                echo $content . '……';
                                            } else {
                                                echo $post->post_content;
                                            }
                                            ?>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
                <div class="viewAll hover-opacity"><a href="">VIEW ALL</a></div>
            </div>
        </div>
    </section>
    <section class="external">
        <div class="wrap1080">
            <div class="btns">
                <div class="btn hover-opacity"><a href="">台東区ガイド</a></div>
                <div class="btn hover-opacity"><a target="_blank" href="https://www.souholdings.co.jp"><?php echo img("top", "logo", "webp", "", "SOUホールディングス") ?>本社HP</a></div>
            </div>
        </div>
    </section>
    <?php include(dirname(__FILE__) . '/../parts/contact-point.php'); ?>
</main>
<?php get_footer(); ?>