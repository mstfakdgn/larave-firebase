<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'firebase' => [
        'type' => 'service_account',
        'database_url' => env('FIREBASE_DATABASE_URL', 'https://fir-first-c20bd.firebaseio.com/'),
        'project_id' => env('FIREBASE_PROJECT_ID', 'fir-first-c20bd'),
        'private_key_id' => env('FIREBASE_PRIVATE_KEY_ID', 'e9f5a42b60aa65bc4acc7408790f37871949a2ce'),
        // replacement needed to get a multiline private key from .env 
        'private_key' => str_replace("\\n", "\n", env('FIREBASE_PRIVATE_KEY', '-----BEGIN PRIVATE KEY-----\nMIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQC0TvAMNGe0fWPR\nYq9T6YBNU6xdg+XekhcQP30nRBdtSgAeLfATtVOXW64ePnDZ0p1qcPDyfBNz++xp\ngJx0EfHJkfIw3w0Fx4FDmuo5JzkP8/9p32tl8jrh70bTCxMy3uT7hGEmsjtgmrQX\n8dLVveUgjc18V80grOj4LEMhCnwJM5Aizmw4DCLJlF9R3jK6ZwVyzR8ejBv5Tqvr\neEwYIOJJTdV44Eh8DLplLVVl5vloxHslkJTj5wkvaV06F5+rw+I/HaUv/689JYoE\nvZ94P1Hq1D7/4dgkBPUF8Lpwr0sTW4DLqyZF03owEVDq9qks+uHNAwZyhYp+2Wzk\nyzzfx6c7AgMBAAECggEAANyLBoTKsT3V1ZwvfIc1EDChlP7zUXU8mrbhdhwRO5/o\nicEd9Bw6G4TJkMLyPk+YuzUvkTxKRTU1SZLL1N43FLvcZJ5iblcs0Orbg2Bbgcp4\nHvYsx53TDx/Z8FDBzh1vvlAgCNrME/Etbv6+VN04dsLtzCLB2iDy2ZEAks+sn8hT\njI/4TWTMLWZsYVY5Fon+grDGgMfwqi4Ats9P/IvJZF9UunHFMXF9M1hHxhPpIYOZ\n6R2t1hENNdoabZEINGw8w+9LlxYwfYjYnm2kEbco0S+ZqpSZcy+f3yWeujfAhjL6\ni8ffm4piGxYFwkPtudwwyvI3o8+vV9WMYuYv+uBTgQKBgQDZQdpADSxqI5uWK7oS\nMqOFTWXhmch/+MhBs5QfaSyBQQhrMB56OEB38N2NW7zCSQeMP+vTTujXC5W9fKhf\nLkETyQHuuK2NphiZdnsQrIb28pfXwB5RrRJVOly8/j4vbi8nVfAMF5GeRj3YFJvG\nbqvfKYxYvkCyCkVK4gIspzuTuwKBgQDUdk7lLp9k+aiK2QKMN8nJ3M0MjjpCaZCR\n2zav0cuRLuwsl1lo7PVDB3i6h6EuKYKhbjUjiG2BO9boVUZRql9NElUWbaE8DZfU\nGHDu6kRjOeePJXIEg000Ss4ftHQLSeSB1nb5K52Eajp1h1KzvYOKsdaUbW+7T4d+\nEujdc0RCgQKBgQCeuGyBVN544HC/gkybFOG/9m6TJe2ECLYMwexaElVQTLmgzXPG\nqKf4uEC0ECxT6FSaUuyv4Ltct/r6h0Le3oTutnAx/jvU+16HZza7VL/5U/w4xAOi\negWlvFCaRkgaEK5kV3Va8DETZ4+w+EVh7+Ki09DT2JKdP8Gl1n3uL3LoFwKBgCxV\n8+jHbeO4ZX90AaAZFDbXqMJx+55YQR7uy96svPoy/H3hp3rJ1/SA3qSuIOhtKSFe\nyh/8HD3XquUYxm/MSc7fgHoJrpfFjmVoJEj3AgZi0vuAKObgL4A2DAV5tq2UYebm\nRjWA8IHtWP2lm5B+f7C1o72diK9hzTh14bo0j44BAoGAbXxR+czUSRR5AiFmmiJx\nVlQHYoMw1HvrZcOAcr8DSwu1ob9PKXrinmgTUJ/C5LcW/nnYHUGYbldQDoBfLMAA\nK5glh6cxf4Mq/cLI8dxA13dyRdB+JAO82fSUhNEREzyFYG0jRhNBgjS3gPU+UvcU\naSuhB3POKpSCliznRNwZCIA=\n-----END PRIVATE KEY-----\n')),
        'client_email' => env('FIREBASE_CLIENT_EMAIL', 'firebase-adminsdk-nhrd4@fir-first-c20bd.iam.gserviceaccount.com'),
        'client_id' => env('FIREBASE_CLIENT_ID', '100230638377314307985'),
        "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
        "token_uri" => "https://oauth2.googleapis.com/token",
        "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
        'client_x509_cert_url' => env('FIREBASE_CLIENT_x509_CERT_URL', 'https://www.googleapis.com/robot/v1/metadata/x509/firebase-adminsdk-nhrd4%40fir-first-c20bd.iam.gserviceaccount.com'),
    ]

];
