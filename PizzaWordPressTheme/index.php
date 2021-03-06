<?php get_header(); ?>

<div class="conteiner">

                <div class="first-screen__body">
                    <div class="first-screen__content">
                        <h1 class="title-h1">                
                           <?php dynamic_sidebar( 'first-screen-title' ); ?>
                        </h1>
                        <p class="subtitle-h1">                     
                           <?php dynamic_sidebar( 'first-screen-subtitle' ); ?>
                        </p>
                        <a href="#menu" class="button button__light">
                            read more
                        </a>
                        <p class="first-screen__content-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do iusmod tempor incididunt ut
                            labore et dolore magna.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="menu" class="second-screen">
            <div class="conteiner">
                <div class="second-screen__body">
                    <div class="second-screen__content">
                        <div class="second-screen__title">
                            <h2 class="title-h2 title-h2__dark">
                                Lorem Ipsum Dolor
                            </h2>
                            <p class="subtitle-h2">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus lacinia odio vitae
                                vestibulum vestibulum.
                            </p>
                        </div>

                        <div class="plate-list">
                            <?php
                                $query = new WP_Query( [
                                   'post_type' => 'menu'
                                ]);
                                $posts = $query->posts;
                                foreach ($posts as $post):
                                    $id = $post->ID;
                                    $title = $post->post_title;
                                
                                    $text = $post->post_content;
                                    $img = get_the_post_thumbnail_url( $post, 'full' );
                            ?>
                            <div class="plate-list__item">                             
                                <img src="<?php echo $img ?>" alt="" class="plate-list__img">
                                <p class="plate-list__name"><?php echo $title ?></p>
                                <p class="plate-list__description"><?php echo $text ?></p>
                            </div>
                            <?php endforeach; ?>


                            <!-- <div class="plate-list__item">
                                <img src="<?php my_path_images('plate-two.png') ?>" alt="" class="plate-list__img">
                                <p class="plate-list__name">Plate Two And Something</p>
                                <p class="plate-list__description">Lorem ipsum dolor, sit adipisicing
                                    elit. Sint, esse...</p>
                            </div>
                            <div class="plate-list__item">
                                <img src="<?php my_path_images('plate-three.png') ?>" alt="" class="plate-list__img">
                                <p class="plate-list__name">Plate Three</p>
                                <p class="plate-list__description">Lorem ipsum dolor, sit adipisicing
                                    elit. Sint, esse...</p>
                            </div> -->
                        </div>

                        <div class="second-screen__button">
                            <a href="menu-list.html" class="button button__dark">
                                Show More
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <section id="story" class="third-screen">
            <div class="conteiner">
                <div class="third-screen__body">
                    <div class="third-screen__content">
                        <h2 class="title-h2 title-h2__light">Lorem Ipsum Dolor</h2>
                        <div class="third-screen__items">
                            <p class="third-screen__item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex quia voluptas sit aspernatur
                            </p>
                            <p class="third-screen__item">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna
                                aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex quia voluptas sit aspernatur
                            </p>
                        </div>
                        <div class="third-screen__button">
                            <a href="about.html" class="button button__light">
                                MORE INFO
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="forth-screen">
            <div class="conteiner">
                <div class="forth-screen__body">
                    <div class="forth-screen__content">
                        <div class="offers">
                            <div class="offer">
                                <img src="<?php my_path_images('article-plate-one.png') ?>" alt="" class="offer__img">
                                <div class="offer__content">
                                    <h3 class="offer__title">
                                        Discount up to 50% All Excursions
                                    </h3>
                                    <p class="offer__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit,
                                        aliquam quaerat ullam velit vero ut dolorem distinctio neque esse! Aliquam
                                        voluptates repellat qui ipsum distinctio corporis perferendis esse dolorum.
                                        Dolorem.</p>
                                    <a href="article.html" class="button button__dark">
                                        read more
                                    </a>
                                </div>
                            </div>
                            <div class="offer">
                                <img src="<?php my_path_images('article-plate-two.png') ?>" alt="" class="offer__img">
                                <div class="offer__content">
                                    <h3 class="offer__title">
                                        January’s Promo: Buy 1 Get 1 Free!
                                    </h3>
                                    <p class="offer__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit,
                                        aliquam quaerat ullam velit vero ut dolorem distinctio neque esse! Aliquam
                                        voluptates repellat qui ipsum distinctio corporis perferendis esse dolorum.
                                        Dolorem.</p>
                                    <a href="article.html" class="button button__dark">
                                        read more
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <setion class="fifth-screen">
            <div class="conteiner">
                <div class="fifth-screen__body">
                    <div class="fifth-screen__content">
                        <h2 class="title-h2 title-h2__light">
                            Lorem ipsum dolor sit amet.
                        </h2>
                        <p class="subtitle-h2 subtitle-h2__light">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro sunt ducimus repellat illo,
                            perferendis ea.
                        </p>
                    </div>
                </div>
            </div>
        </setion>

        <section class="sixth-screen">
            <div class="conteiner">
                <div class="sixth-screen__body">
                    <div class="sixth-screen__content">
                        <div class="sixth-screen__item">
                            <h4 class="sixth-screen__item-title">Lorem Ipsum</h4>
                            <p class="sixth-screen__item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Reiciendis maiores itaque dolore soluta.</p>
                        </div>
                        <div class="sixth-screen__item">
                            <h4 class="sixth-screen__item-title">Lorem Ipsum</h4>
                            <p class="sixth-screen__item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Reiciendis maiores itaque dolore soluta.</p>
                        </div>
                        <div class="sixth-screen__item">
                            <h4 class="sixth-screen__item-title">Lorem Ipsum</h4>
                            <p class="sixth-screen__item-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Reiciendis maiores itaque dolore soluta.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="seventh-screen">
            <div class="conteiner">
                <div class="seventh-screen__body">
                    <div class="seventh-screen__content">
                        <h4 class="seventh-screen__title">
                            title here
                        </h4>
                        <p class="seventh-screen__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit atque excepturi distinctio
                            neque sequi alias ipsum unde porro eum eaque temporibus, magni eius accusantium rem tempore
                            adipisci, nihil eos aut!
                        </p>
                        <form class="get-mail" action="article.html" method="post" name="getMailForm">
                            <div class="get-mail__input-wrapp">
                                <input type="text" class="get-mail__input" placeholder="Your Email">
                                <button class="button button__dark">subscribe</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
</div>

<?php get_footer(); ?>