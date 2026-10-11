<?php
$pageTitle = 'Home | Some Teams';

require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>

<main>
    <h1>Women's Football Teams</h1>
    <section class="teams-card-grid">
        <?php foreach ($teams as $team => $teamInfo) : ?>
            <article class="team-card">
                <header class="team-card-header">
                    <img src="<?php echo $teamInfo['logo_uefa']; ?>" alt="<?php echo $team; ?> logo">
                    <h2><?php echo $team; ?></h2>
                </header>
                <div class="team-card-info">
                    <p>League: <?php echo $teamInfo['league']; ?></p>
                    <p>UEFA ranking: <?php echo $teamInfo['uefa-coefficient-ranking']; ?></p>
                    <?php if ($teamInfo['league-position'] !== null) :  ?>
                        <p>League position: <?php echo $teamInfo['league-position']; ?></p>
                    <?php endif; ?>
                    <p>City: <?php echo $teamInfo['city']; ?></p>
                </div>
                <footer class="team-card-footer">
                    <a href="<?php echo $teamInfo['url']; ?>" target="_blank">Visit website</a>
                </footer>
            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php
require __DIR__ . '/footer.php';
?>