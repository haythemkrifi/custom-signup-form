<?php
/**
 * Plugin Name: Custom Signup Form
 * Plugin URI:  https://haythemkrifi.rf.gd
 * Description: A custom registration form with Buyer, Seller and Both roles (Dokan compatible).
 * Version: 1.0
 * Author: Haythem Krifi
 * License: GPL-2.0+
 */

add_shortcode('custom_signup_form', 'render_custom_signup_form');
add_action('wp_enqueue_scripts', 'custom_signup_form_styles');

function render_custom_signup_form() {
    ob_start();
    include plugin_dir_path(__FILE__) . 'form-template.php';
    return ob_get_clean();
}

function custom_signup_form_styles() {
    wp_enqueue_style('custom-signup-style', plugin_dir_url(__FILE__) . 'style.css');
}

add_action('init', 'handle_custom_signup_form');

function handle_custom_signup_form() {
    if (isset($_POST['submit_signup'])) {
        $email = sanitize_email($_POST['email']);
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $role_choice = sanitize_text_field($_POST['role']);
        $company = sanitize_text_field($_POST['company']);
        $first_name = sanitize_text_field($_POST['first_name']);
        $last_name = sanitize_text_field($_POST['last_name']);
        $phone = sanitize_text_field($_POST['tel_country'] . '-' . $_POST['tel_area'] . '-' . $_POST['tel_number']);
        $country = sanitize_text_field($_POST['country']);

        if (!is_email($email) || email_exists($email)) {
            set_transient('signup_message', ['type' => 'error', 'text' => 'Invalid or existing email.'], 30);
            return;
        }

        if ($password !== $confirm_password) {
            set_transient('signup_message', ['type' => 'error', 'text' => 'Passwords do not match.'], 30);
            return;
        }

        // Create the user account
        $user_id = wp_create_user($email, $password, $email);
        if (is_wp_error($user_id)) {
            set_transient('signup_message', ['type' => 'error', 'text' => 'Failed to create user. Try again.'], 30);
            return;
        }

        // Assign roles based on the user's choice
        $user = new WP_User($user_id);
        if ($role_choice === 'buyer') {
            $user->set_role('customer'); // Assign 'customer' role
        } elseif ($role_choice === 'seller') {
            $user->set_role('seller'); // Assign 'seller' role
        } elseif ($role_choice === 'both') {
            $user->set_role('seller'); // Set primary role as 'seller'
            $user->add_role('customer'); // Add additional role as 'customer'
        }

        // Update user meta data
        update_user_meta($user_id, 'first_name', $first_name);
        update_user_meta($user_id, 'last_name', $last_name);
        update_user_meta($user_id, 'billing_phone', $phone);
        update_user_meta($user_id, 'company_name', $company);
        update_user_meta($user_id, 'country', $country);

        // Log the user in
        wp_set_current_user($user_id);
        wp_set_auth_cookie($user_id, true);
        do_action('wp_login', $email, $user);

        // Redirect code removed
    }
}