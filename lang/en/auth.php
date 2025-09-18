<?php

declare(strict_types=1);

return [
<<<<<<< HEAD
<<<<<<< HEAD
    /*
    |--------------------------------------------------------------------------
    | Authentication Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during authentication for various
    | messages that we need to display to the user. You are free to modify
    | these language lines according to your application's requirements.
    |
    */

    'failed' => 'These credentials do not match our records.',
    'password' => 'The provided password is incorrect.',
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',

    'login' => [
        'title' => 'Sign in to your account',
        'email' => 'Email',
        'password' => 'Password',
        'remember_me' => 'Remember me',
        'forgot_password' => 'Forgot your password?',
        'submit' => 'Sign in',
        'or' => 'or',
        'create_account' => 'create a new account',
        'link' => 'Sign in',
=======
    'login' => [
        'title' => 'Sign in to your account',
        'subtitle' => 'Enter your credentials to access',
        'email' => 'Email address',
        'email_placeholder' => 'example@email.com',
        'password' => 'Password',
        'password_placeholder' => '••••••••',
        'remember' => 'Remember me',
        'submit' => 'Sign in',
        'forgot_password' => 'Forgot your password?',
        'no_account' => 'Don\'t have an account?',
        'register' => 'Sign up',
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)
    ],

    'register' => [
        'title' => 'Create a new account',
<<<<<<< HEAD
        'name' => 'Name',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Confirm Password',
        'submit' => 'Register',
        'already_registered' => 'Already have an account?',
        'link' => 'Register',
    ],

    'verify' => [
        'title' => 'Verify your email address',
        'success' => 'A new verification link has been sent to your email address.',
        'notice' => 'Before proceeding, please check your email for a verification link. If you did not receive the email,',
        'another_request' => 'click here to request another',
    ],

    'forgot_password' => [
        'title' => 'Forgot password',
        'email' => 'Email',
        'submit' => 'Send reset link',
    ],

    'reset_password' => [
        'title' => 'Reset password',
        'email' => 'Email',
        'password' => 'Password',
        'password_confirmation' => 'Confirm Password',
        'submit' => 'Reset Password',
    ],

    'confirm_password' => [
        'title' => 'Confirm password',
        'password' => 'Password',
        'submit' => 'Confirm',
    ],

    'logout' => [
        'submit' => 'Logout',
        'title' => 'Logout',
        'success_title' => 'Logout successful',
        'success_message' => 'You have been successfully logged out.',
        'error_title' => 'Error during logout',
        'error_message' => 'An error occurred during logout. Please try again.',
        'confirm_message' => 'Are you sure you want to logout?',
        'confirm_button' => 'Confirm logout',
        'cancel_button' => 'Cancel',
        'back_to_home' => 'Back to home',
        'try_again' => 'Try again',
        'processing' => 'Logging out...',
    ],
    
    'user_dropdown' => [
        'manage_account' => 'Manage Account',
        'profile' => 'Profile',
        'settings' => 'Settings',
        'logout' => 'Logout',
    ],
=======
    'failed' => 'These credentials do not match our records!',
    'general_error' => 'You do not have access to do that.',
    'socialite' => [
        'unacceptable' => ':provider is not an acceptable login type.',
    ],
    'throttle' => 'Too many login attempts. Please try again in :seconds seconds.',
    'unknown' => 'An unknown error occurred',
>>>>>>> 80d56bca (Squashed 'laravel/Modules/Xot/' content from commit 88673e4f7)
=======
        'subtitle' => 'Enter your details to register',
        'name' => 'Full name',
        'name_placeholder' => 'John Doe',
        'email' => 'Email address',
        'email_placeholder' => 'example@email.com',
        'password' => 'Password',
        'password_placeholder' => '••••••••',
        'password_confirmation' => 'Confirm password',
        'password_confirmation_placeholder' => '••••••••',
        'submit' => 'Sign up',
        'already_registered' => 'Already have an account? Sign in',
    ],

    'forgot-password' => [
        'title' => 'Reset your password',
        'subtitle' => 'Enter your email to receive the reset link',
        'email' => 'Email address',
        'email_placeholder' => 'example@email.com',
        'submit' => 'Send reset link',
        'back_to_login' => 'Back to login',
    ],

    'reset-password' => [
        'title' => 'Reset password',
        'subtitle' => 'Enter your new password',
        'email' => 'Email address',
        'email_placeholder' => 'example@email.com',
        'password' => 'New password',
        'password_placeholder' => '••••••••',
        'password_confirmation' => 'Confirm password',
        'password_confirmation_placeholder' => '••••••••',
        'submit' => 'Reset password',
    ],

    'passwords' => [
        'reset' => 'Your password has been reset!',
        'sent' => 'We have emailed your password reset link!',
        'throttled' => 'Please wait before retrying.',
        'token' => 'This password reset token is invalid.',
        'user' => 'We can\'t find a user with that email address.',
    ],

    'login-via' => 'Or log in via',

    'login-failed' => 'Login failed, please try again.',

    'user-not-allowed' => 'Your email is not part of a domain that is allowed.',

    'registration-not-enabled' => 'Registration of a new user is not allowed.',

    'login-in' => 'Sign in',
    'sign-up' => 'Sign up',
>>>>>>> 0bcedf94 (Squashed 'laravel/Modules/User/' content from commit 947e4724)
];
