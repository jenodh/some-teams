<?php
$pageTitle = 'Home | Some Teams';

require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
?>

<main>

    <section class="page-header">
        <h1>Women's Football Teams</h1>
    </section>


    <section class="teams-card-grid">
        <?php foreach ($teams as $team => $teamInfo) : ?>
            <article class="team-card">

                <div class="card-tags">
                    <span class="tag">UEFA ranking #<?php echo $teamInfo['uefa-coefficient-ranking']; ?></span>
                </div>

                <header class="team-card-header">
                    <img src="<?php echo $teamInfo['logo_uefa']; ?>" alt="<?php echo $team; ?> logo">
                    <h2><?php echo $team; ?></h2>
                </header>

                <div class="team-card-info">
                    <p><?php echo $teamInfo['league']; ?></p>
                    <p>City: <?php echo $teamInfo['city']; ?></p>
                    <?php if ($teamInfo['league-position'] !== null) : ?>
                        <p>League position: <?php echo $teamInfo['league-position']; ?></p>
                    <?php endif; ?>
                </div>

                <footer class="team-card-footer">
                    <a href="<?php echo $teamInfo['url']; ?>" target="_blank" rel="noopener noreferrer">Visit website</a>
                </footer>

            </article>
        <?php endforeach; ?>
    </section>
</main>

<?php
require __DIR__ . '/footer.php';
?>