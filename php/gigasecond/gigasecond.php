<?php

function from($date) {
	$rdate = clone $date;
	return $rdate->add(new DateInterval('PT1000000000S'));
}
