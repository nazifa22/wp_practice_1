<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="tagline text-center">
                        <?php bloginfo($show = "description"); ?>
                    </h3>
                    <h1 class="align-self-center display-1 text-center heading">
                        <?php bloginfo($show = "name") ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="posts">
        <?php 
            while(have_posts()) :
                the_post();
            ?>
                <div <?php post_class(); ?>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h2 class="post-title">
                                    <?php the_title(); ?>
                                </h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <p>
                                    <strong>
                                        <?php the_author(); ?>
                                    </strong>
                                    <br/>
                                    <?php the_date(); ?>
                                </p>
                                <?php echo get_the_tag_list(
                                    $before = "<ul class=\"list-unstyled\"><li>", 
                                    $sep = "</li><li>", 
                                    $after = "</li></ul>"
                                ); 
                                ?>
                            </div>
                            <div class="col-md-8">
                                <p>
                                    <?php
                                        if(has_post_thumbnail()) {
                                            the_post_thumbnail(
                                                $size = "full",
                                                array("class" => "img-fluid")
                                            );
                                        }
                                    ?>
                                </p>
                                <p>
                                        <?php the_content(); ?>
                                </p>
                            </div>
                        </div>                 
                    </div>
                </div>    
        <?php
            endwhile;
        ?>
        

        <div class="post">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="post-title">This is a beautiful day in Dhaka!</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <strong>John Doe</strong><br/>
                            15th May, 2018
                        </p>
                        <div class="tags">
                            <ul class="list-unstyled">
                                <li>weather</li>
                                <li>blog</li>
                                <li>dhaka</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <p>
                            <img class="img-fluid" src="https://images.pexels.com/photos/707344/pexels-photo-707344.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260"
                                alt="Post Title">
                        </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut deserunt dicta doloribus error,
                            harum,
                            illo impedit incidunt ipsam ipsum necessitatibus nihil perferendis perspiciatis provident quasi
                            reiciendis saepe
                            sequi sint, voluptatum?
                        </p>

                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab accusantium adipisci aspernatur
                            beatae
                            consequatur dicta distinctio ea eaque enim eos est et eveniet exercitationem expedita hic, id,
                            minima
                            molestias necessitatibus optio perferendis quaerat quidem reiciendis rem reprehenderit
                            repudiandae
                            saepe
                            sunt totam ullam unde velit. A ab animi aperiam at beatae cum cupiditate dignissimos distinctio
                            ducimus
                            eaque est exercitationem illo labore laudantium magni maxime molestias odio quibusdam quidem,
                            sequi
                            soluta sunt ullam voluptate voluptates voluptatum? Dolores earum enim esse est, illo nemo sit
                            velit.
                            Aperiam, aspernatur cum explicabo illum iusto labore nam nobis quibusdam ratione sed suscipit
                            unde
                            voluptate voluptatibus. Alias distinctio est et laborum quis tempore! Autem consequuntur
                            cupiditate

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>    
    <div class="container pagination">
        <div class="row text-center">
            <div class="col-md-12">
                <?php
                    the_posts_pagination(array(
                        "sreen_render_text" => "",
                        "prev_text" => "New Posts",
                        "next_text" => "Old Posts"
                    ));
                ?>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; LWHH - All Rights Reserved
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</body>
</html>