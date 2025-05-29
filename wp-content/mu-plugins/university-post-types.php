<?php

function university_post_types() {
  register_post_type('event', [
    'public' => true,
    'labels' => [
      'name' => 'Events',
    ],
    'menu_icon' => 'dashicons-calendar-alt'

  ]);
}

add_action('init', 'university_post_types');