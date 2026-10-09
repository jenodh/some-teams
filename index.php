<?php

require __DIR__ . '/data.php';

foreach ($teams as $team => $teamInfo) : ?>
    <article>
        <img src="<?php echo $teamInfo['logo_uefa']; ?>" alt="<?php echo $team; ?> logo">
        <h2><?php echo $team; ?></h2>
        <p>League: <?php echo $teamInfo['league']; ?></p>
        <p>UEFA ranking: <?php echo $teamInfo['uefa-coefficient-ranking']; ?></p>
        <?php if ($teamInfo['league-position'] !== null) :  ?>
            <p>League position: <?php echo $teamInfo['league-position']; ?></p>
        <?php endif; ?>
        <p>City: <?php echo $teamInfo['city']; ?></p>
        <a href="<?php echo $teamInfo['url']; ?>" target="_blank">Visit website</a>
    </article>
<?php endforeach; ?>