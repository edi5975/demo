## HTML to Laravel 12 Blade Demo
## Overview

This is a demo project showing how a static HTML / Bootstrap admin template can be converted into a Laravel 12 Blade layout.

It demonstrates:

Proper Blade layouts and partials

Clean separation of header, navbar, sidebar, and footer

Responsive admin dashboard pages

Laravel 12 ready-to-use Blade structure

This project is ideal for developers, agencies, or businesses who want HTML templates converted into Laravel-ready views quickly and professionally.

## Features

layouts/app.blade.php – master layout with @yield and @include

Partials for:

partials/navbar.blade.php

partials/sidebar.blade.php

partials/footer.blade.php

Dashboard and Users pages converted from HTML → Blade

Clean asset handling using Laravel asset() helper

Mobile-friendly responsive layout

Compatible with Laravel 12

## Project Structure
resources/views/
├── layouts/
│   └── app.blade.php
├── partials/
│   ├── navbar.blade.php
│   ├── sidebar.blade.php
│   └── footer.blade.php
├── dashboard.blade.php
└── users.blade.php