<?php
$pre = <<<HEREDOC
<div class="is-small-space hideme"><br><br><br></div>
<section class="hero">
    <div class="hero-body card">
        <div class="container ">
            <h1 class="title">
                Comments and Reviews
            </h1>
            <h6 class="subtitle">
                &nbsp &nbsp See what others have to say
            </h6>
            <div class="section box">

HEREDOC;
if (isset($cd) && $valid == true) {
    $sql = "SELECT * from comments where code='" . $cd . "' AND mal_ID='{$malid}'  ORDER BY priority";
    include 'config.php';
    if ($comments = mysqli_query($mysqli, $sql)) {
        echo $pre;
        if (mysqli_num_rows($comments) > 0) {

            while ($row = mysqli_fetch_array($comments)) {
                $article = <<<HEREDOC
                                        <article class="media">
                                            <figure class="media-left">
                                                <img class="image is-96x96" src="{$row['avatar']}" alt="bulma logo" class='image is-64x64'>
                                                
                                            </figure>
                                                                                      
                                            <div class="field">
                                                <div class="control">
                                                    <div class="subtitle" style="margin-bottom: 5px;">{$row['name']}</div>
                                                </div>
                                                <textarea class="textarea is-expanded " maxlength="400" name="description" style="width:420px;" readonly>{$row['comment']}</textarea>
                                            </div>
                                            <div class="media-right" style="padding-left:5px; padding-top:80px;">
                                         
  
                                            </div>
                                            </article>
HEREDOC;

                echo $article;
            }
        } else {
            echo "<h2>No comments yet! Check back later... </h2>";
        }
    }
    $post = <<<HEREDOC
        </div>
        </div>
        </div>
        </section>
HEREDOC;
    echo $post;
}
?>


<template>
    <div class="box">
        <article class="media">
            <div class="media-left">
                <figure class="image glide-image">
                    <!-- IMAGE -->
                    <img class="g-img " src="images/samples/101302l.jpg" alt="sample">
                    <div class="columns is-mobile is-centered">
                        <div class="column">
                            <small><span class="icon has-text-info">
                                    <i class="fas fa-thumbs-up"></i>
                                </span> · <span class="icon has-text-info">
                                    <i class="fas fa-thumbs-down"></i>
                                </span></small>
                        </div>
                    </div>

                </figure>
            </div>
            <div class="media-body">
                <h3 class="tmedia-heading"> Comments and Reviews</h3>
                <div class="content">
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                        <textarea class="textarea is-expanded" maxlength="400" name="description" placeholder="A brief description of your plan."></textarea>
                    </div>
                    <div class="field">
                        <div class="control">
                            <input class="input" type="text" placeholder="Text input">
                        </div>
                        <textarea class="textarea is-expanded" maxlength="400" name="description" placeholder="A brief description of your plan."></textarea>
                    </div>
                </div>
                <!-- <article class="media">
                <figure class="media-left">
                    <p class="image is-64x64">
                        <img src="https://bulma.io/images/placeholders/128x128.png">
                    </p>

                </figure>
                <div class="tmedia-body">
                    <div class="content">
                        <p style="overflow:hidden;">
                            <strong>Barbara Middleton</strong>
                            <br>
                            <textarea class="textarea is-expanded" maxlength="400" name="description" placeholder="A brief description of your plan."></textarea>

                            <br>

                            <small><span class="icon has-text-info">
                                    <i class="fas fa-thumbs-up"></i>
                                </span> · <span class="icon has-text-info">
                                    <i class="fas fa-thumbs-down"></i>
                                </span></small>
                            <div class="is-half-space hideme"></div>
                        </p>
                    </div>
                </div>
            </article> -->
                <?php //include "modal-comment.php" 
                ?>


                <!-- <p>
                    <strong>John Smith</strong> <small>@johnsmith</small> <small>31m</small>
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
                </p> -->
            </div>
            <!-- <div class="media-content">
            <div class="content">
                
            </div>
        </div> -->
        </article>

    </div>
</template>