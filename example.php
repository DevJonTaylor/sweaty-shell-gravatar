<?php
/**
 * @author Jon Taylor
 * @file example.php
 * @since 1.1
 * @version 1.1
 */

use SweatyShell\Gravatar;

include_once(__DIR__.DIRECTORY_SEPARATOR.'vendor'.DIRECTORY_SEPARATOR.'autoload.php');

$gravatar = new Gravatar;
$gravatar->setEmail('jonnytest1101@icloud.com');

echo $gravatar; // https://www.gravatar.com/avatar/588cd72d8f5aebcbe98201e20c9af7b0