<?php
/**
 * comyo.media
 * @link http://www.comyo-media.de
 * Projekt: Error Pages - YaS Online
 * @link $ProjectUrl$
 *
 * @author "David Marner" <marner@comyo-media.de>
 * @created 16.03.13 - 22:41
 */
$class = [
    'sha1' => 'text-success',
    'sha256' => 'text-info',
    'md5' => 'text-error',
    'crc32' => 'text-warning',
];
?>

<form action="" method="get">
    <label for="password">Password</label>
    <div class="input-append">
        <span class="add-on">
            <i class="icon-lock"></i>
        </span>
        <input id="password" type="text" name="password" value="<?php echo $_REQUEST['password'] ?>" placeholder="Password">
    </div>
    <div class="form-actions">
        <button type="submit" class="btn btn-primary">Hash it</button>
    </div>
</form>

<?php if (!empty($_REQUEST['password'])): ?>
    <ul class="unstyled">
    <?php foreach (hash_algos() as $algo): ?>
        <li class="<?php echo $class[$algo]; ?>"><strong><?php echo $algo ?></strong>: <?php echo hash($algo, $_REQUEST['password']) ?></li>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>

<?php include 'templates/credits.phtml'; ?>
