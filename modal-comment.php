<?php

if (isset($_GET['code'])) {
    for ($counter = 0; $counter < count($meta); $counter++) {
        $sql = "SELECT * from comments where code=" . $_GET['code'];
        include 'config.php';
        if ($comments = mysqli_query($mysqli, $sql)) {
            if (mysqli_num_rows($comments) > 0) {
                $comment = mysqli_fetch_array($comments);
                $article = <<<HEREDOC
                <article class="media">
    <figure class="media-left">
        <p class="image is-64x64">
            <img src="{$comment['avatar']}">
        </p>
    </figure>
    <div class="media-content">
        <div class="content">
            <p>
                <strong>Barbara Middleton</strong>
                <br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis porta eros lacus, nec ultricies elit blandit non. Suspendisse pellentesque mauris sit amet dolor blandit rutrum. Nunc in tempus turpis.
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
</article>
HEREDOC;
                echo $article;
            }
        } else {
        }
    }
}
// array_push($labels, truncate($meta[$counter]['anime']['title'], 12));
// $len = ($meta[$counter]['anime']['episodes'] * $meta[$counter]['anime']['duration']);
// array_push($length, $len);
// array_push($eps, $meta[$counter]['anime']['episodes']);
// array_push($dur, $meta[$counter]['anime']['duration']);
// array_push($rank, $meta[$counter]['anime']['rank']);
?>
<article class="media">
    <figure class="media-left">
        <p class="image is-64x64">
            <img src="https://bulma.io/images/placeholders/128x128.png">
        </p>

    </figure>
    <div class="media-content">
        <div class="content">
            <p>
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
</article>