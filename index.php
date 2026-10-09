<?php

require __DIR__ . '/data.php';

foreach ($teams as $team => $teamInfo) { ?>
    <h2><?php echo $team; ?></h2>
<?php
}
?>