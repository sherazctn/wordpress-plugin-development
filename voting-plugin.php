<?php
/*
Plugin Name: SK Voting Plugin
Plugin URI: https://sheraz.dev/sk-voting-plugin
Description: A simple plugin to allow users to vote on posts or pages.
Version: 1.0
Author: Muhammad Sheraz
Author URI: https://sheraz.dev
*/





function voting_system_display() {
    global $post;
    $votes = get_post_meta($post->ID, 'votes', true);
    $votes = ($votes == '') ? 0 : $votes;

    $output = '
    <div class="voting-system">
        <p>Votes: <span id="votes-count">' . $votes . '</span></p>
        <button id="vote-up">Vote Up</button>
        <button id="vote-down">Vote Down</button>
    </div>
    <script>
        document.querySelector("#vote-up").addEventListener("click", function() {
            var count = parseInt(document.querySelector("#votes-count").innerHTML) + 1;
            document.querySelector("#votes-count").innerHTML = count;
            // Save the vote count to the database
            // ...
        });
        document.querySelector("#vote-down").addEventListener("click", function() {
            var count = parseInt(document.querySelector("#votes-count").innerHTML) - 1;
            document.querySelector("#votes-count").innerHTML = count;
            // Save the vote count to the database
            // ...
        });
    </script>
    ';

    return $output;
}
add_filter('the_content', 'voting_system_display');
