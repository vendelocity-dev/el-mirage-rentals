<?php

return array(
    // Mail Address and Name
    'sender_email'   => 'esteban@copterpilot.com',
    'sender_name'    => 'El Mirage Rentals',

    // Mail Config
    'mail_type'     => 'smtp', // smtp or mail - mail is the php mail function
    'smtp_server'   => 'smtp.sendgrid.net',
    'smtp_port'     => '587',
    'smtp_user'     => 'apikey',
    'smtp_password' => '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',


    // Mail Subjects
    'contact_form_subject' => 'New message form El Mirage Rentals',
    'newsletter_form_subject' => 'New message form website',
    'inquiry_form_subject' => 'New Rental Request',
    'inquiry_autoresponder_subject' => 'Thanks for your Rental Inquiry',

    // Mailchimp
    'mailchimp_support' => false, // ture is activated
    'mailchimp_api_key' => 'xxxxxx-your-api-key-xxxxxx',
    'mailchimp_list_id' => 'xxx-list-id-xxx',
);