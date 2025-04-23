<?php
$month = date('m');
$day = date('d');
$day_of_week = date('w');
$activity = array('⛪️', '🙏🏽', '📿');
if ($month >= 1 && $month <= 3) :
	$activity[] = '✈️';
	$activity[] = '🇵🇦';
	$activity[] = '✍🏽';
	$activity[] = '📷';
	$activity[] = '🏊🏼';
	$activity[] = '🏖️';
	$activity[] = '🥵';
	$activity[] = '😎';
else :
	$activity[] = '👨🏻‍💻';
	$activity[] = '💭';
	$activity[] = '📱';
	$activity[] = '❤️‍🔥';
	if (rand(1, 31) == $day) :
		$activity[] = '✍🏽';
		$activity[] = '📷';
	endif;
	if ($day_of_week == rand(1, 3)) :
		$activity[] = '🏊🏼';
	endif;
	if ($day_of_week == 5) :
		$activity[] = '📚';
		$activity[] = '📿';
	endif;
endif;
printf('Today I had %1$d joyful activities which consist of %2$s', count($activity), implode(', ', $activity));
?>