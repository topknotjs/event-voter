<?php
/**
 * Set current active contestants
 */
include "classes/db.php";
$db = new VoterDB();
$db->setInActiveContest();
echo(false);