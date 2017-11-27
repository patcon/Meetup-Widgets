<?php
global $events;

echo '<div class="navbar-extrabar">Next event: ';
foreach ( $events as $event ) {
	printf(
		'<a href="%1$s">%2$s on %3$s at %4$s</a>',
		esc_url( $event->event_url ),
		strip_tags( $event->name ),
		date( 'F d, g:ia', intval( $event->time / 1000 + $event->utc_offset / 1000 ) ),
		strip_tags( $event->venue->name )
	);
}
echo '</ul></div>';