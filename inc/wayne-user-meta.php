<?php

function userMetaSocialForm(WP_User $user) {
    ?>
    <h2>Social Media</h2>
        <table class="form-table">
            <tr>
                <th><label for="user_facebook">Facebook</label></th>
                <td>
                    <input
                        type="text"
                        value="<?php echo esc_attr(get_user_meta($user->ID, 'facebook', true)); ?>"
                        name="user_facebook"
                        id="user_facebook"
                        placeholder="URL"
                    >
                </td>
            </tr>
            <tr>
                <th><label for="user_twitter">Twitter</label></th>
                <td>
                    <input
                        type="text"
                        value="<?php echo esc_attr(get_user_meta($user->ID, 'twitter', true)); ?>"
                        name="user_twitter"
                        id="user_twitter"
                        placeholder="username"
                    >
                </td>
            </tr>
            <tr>
                <th><label for="user_instagram">Instagram</label></th>
                <td>
                    <input
                        type="text"
                        value="<?php echo esc_attr(get_user_meta($user->ID, 'instagram', true)); ?>"
                        name="user_instagram"
                        id="user_instagram"
                        placeholder="username"
                    >
                </td>
            </tr>
            <tr>
                <th><label for="user_github">Github</label></th>
                <td>
                    <input
                        type="text"
                        value="<?php echo esc_attr(get_user_meta($user->ID, 'github', true)); ?>"
                        name="user_github"
                        id="user_github"
                        placeholder="username"
                    >
                </td>
            </tr>
            <tr>
                <th><label for="user_slogan">Slogan</label></th>
                <td>
                    <input
                        type="text"
                        value="<?php echo esc_attr(get_user_meta($user->ID, 'slogan', true)); ?>"
                        name="user_slogan"
                        id="user_slogan"
                    >
                </td>
            </tr>
        </table>
    <?php
    }
    add_action('show_user_profile', 'userMetaSocialForm');
    add_action('edit_user_profile', 'userMetaSocialForm');
     
    function userMetaSocialSave($userId) {
        if (!current_user_can('edit_user', $userId)) {
            return;
        }
     
        update_user_meta($userId, 'facebook', $_REQUEST['user_facebook']);
        update_user_meta($userId, 'twitter', $_REQUEST['user_twitter']);
        update_user_meta($userId, 'instagram', $_REQUEST['user_instagram']);
        update_user_meta($userId, 'github', $_REQUEST['user_github']);
        update_user_meta($userId, 'slogan', $_REQUEST['user_slogan']);
    }
    add_action('personal_options_update', 'userMetaSocialSave');
    add_action('edit_user_profile_update', 'userMetaSocialSave');


?>