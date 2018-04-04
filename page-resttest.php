<?php

get_header(); ?>
    <style>
        .admin-quick-add {
            background-color: #DDD;
            padding: 15px;
            margin-bottom: 15px;
        }

        .admin-quick-add input,
        .admin-quick-add textarea {
            width: 100%;
            border: none;
            padding: 10px;
            margin: 0 0 10px 0;
            box-sizing: border-box;
        }
    </style>

    <h2>Testing REST API Page</h2>

<?php
if (current_user_can('administrator')) : ?>

    <div class="admin-quick-add">
        <h3> Quick Add Post </h3>
        <input type="text" name="title" placeholder="Title">
        <textarea name="content" placeholder="Content"></textarea>
        <button id="quick-add-button"> Create Post</button>
    </div>

<?php endif; ?>

    <button id="rest_post_button"> LOAD MORE DATA</button>
    <div id="rest_posts_container"></div>

<?php

get_footer();