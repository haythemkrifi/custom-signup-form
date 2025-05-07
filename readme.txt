=== Custom Signup Form for Dokan ===
Contributors: haythemkrifi
Tags: dokan, registration, multi-vendor, custom form, seller registration, buyer registration
Requires at least: 5.0
Tested up to: 6.5
Requires PHP: 7.4
Stable tag: 1.0
License: GPLv2 or later


Custom registration form for WordPress with support for Buyer, Seller, or Both user types — fully compatible with Dokan multi-vendor marketplace.

== Description ==

This plugin adds a beautiful, modern registration form like Alibaba's, allowing users to register as a **Buyer**, **Seller**, or **Both**. It automatically assigns the correct user role for [Dokan](https://wordpress.org/plugins/dokan-lite/) and stores custom information such as:

- Company Name
- Full Name (First and Last)
- Phone Number
- Country
- Email & Password

🎯 Features:
- Easy shortcode integration: `[custom_signup_form]`
- Dokan-compatible user role assignment (`customer` or `seller`)
- Custom fields saved in user meta
- Mobile-friendly modern UI with CSS styling
- Success/error messages included

== Installation ==

1. Upload the plugin folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the ‘Plugins’ menu in WordPress
3. Add the shortcode `[custom_signup_form]` to any page or post
4. Done! Visitors can now register with custom roles and fields

== Changelog ==

= 1.0 =
* Initial release by Haythem Krifi

== Frequently Asked Questions ==

= Does this work with Dokan Lite and Pro? =
Yes! The roles and user meta are fully compatible with Dokan.

= Can I customize the fields or layout? =
Yes, just modify the `form-template.php` and `style.css` files inside the plugin folder.

= Where are the user details saved? =
All custom fields are saved in the WordPress user meta (e.g., `company_name`, `billing_phone`, etc.).

== Credits ==
Developed by Haythem Krifi.
