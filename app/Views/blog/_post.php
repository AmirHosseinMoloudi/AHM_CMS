<?php if (! empty($post)) : ?>
<div class="Blog-box">
    <div class="Blog-box-title">
        <a class="Blog-box-title-link" href="<?= $post->link() ?>"><?= esc($post->title) ?></a>
    </div>

    <div class="meta">
        <?= $post->date ?>
        <?= ! empty($post->author) ? 'توسط ' . esc($post->author) : '' ?>

        <br><br>برچسب ها:
        <ul class="tags">
            <?php foreach ($post->tags as $tag) : ?>
                <li><a href="/Blog/c/<?= $tag ?>"><?= esc($tag) ?></a></li>
            <?php endforeach ?>
        </ul>
    </div>

    <br>

    <div class="clr"></div>

    <?= $post->html ?>

</div><!--Blog-box ends here-->

<div class="clr"></div>

<?php endif ?>
