<?php
/**
 * comyo.media
 * @link http://www.comyo-media.de
 * Projekt: Error Pages - YaS Online
 * @link $ProjectUrl$
 *
 * @author "David Marner" <marner@comyo-media.de>
 * @created 16.03.13 - 21:55
 */

$fileName = 'http';

if (!empty($_REQUEST['url'])) {
    $fileName .= preg_replace('/[^a-z0-9]+/i', '.', $_REQUEST['url']);
}

$fileName .= '.php';

include 'templates/header.phtml';
if (file_exists($fileName)) {
    include $fileName;
} else {
    include 'default.phtml';
}
include 'templates/footer.phtml';
