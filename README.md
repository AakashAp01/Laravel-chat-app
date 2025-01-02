# Laravel Chat Application

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="https://github.com/laravel/framework/actions">
    <img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version">
  </a>
  <a href="https://packagist.org/packages/laravel/framework">
    <img src="https://img.shields.io/packagist/l/laravel/framework" alt="License">
  </a>
</p>

## About Laravel Chat Application

This is a real-time chat application built using the following technologies:

### Technologies Used

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="100" alt="Laravel">
  <img src="https://avatars.githubusercontent.com/u/739550?s=200&v=4" width="100" alt="Pusher">
  <img src="https://reactjs.org/logo-og.png" width="100" alt="React">
  <img src="https://tailwindcss.com/_next/static/media/twitter-card.2bd1e0a2.jpg" width="100" alt="Tailwind CSS">
  <img src="https://laravel.com/img/logomark.min.svg" width="100" alt="Laravel Reverb">
</p>

### Features

- **Real-Time Communication:** Powered by [Pusher](https://pusher.com) for instant messaging.
- **Elegant UI:** Built with [Tailwind CSS](https://tailwindcss.com) for responsive design.
- **Modern Frontend:** Implemented using [React](https://reactjs.org) for a seamless user experience.
- **Robust Backend:** Developed with [Laravel](https://laravel.com) for efficient and secure server-side processing.
- **Scalable Architecture:** Incorporates [Laravel Reverb](https://laravel.com/docs/reverb) for background job processing.

## 🚀 Getting Started

Follow the steps below to set up and run the project:

### Prerequisites

Ensure you have the following installed on your system:

- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)
- [MySQL](https://www.mysql.com/)

### Installation Steps

1. Clone the repository:

   ```bash
   git clone https://github.com/your-repo/laravel-chat-app.git
   cd laravel-chat-app
   ```

2. Install dependencies:

   ```bash
   composer update
   npm install
   ```

3. Configure the `.env` file:

   - Set up your database credentials.
   - Add your Pusher credentials.

4. Run the database migrations:

   ```bash
   php artisan migrate
   ```

5. Build frontend assets:

   ```bash
   npm run dev
   ```

6. Start the Laravel queue listener:

   ```bash
   php artisan queue:listen
   ```

7. Start Laravel Reverb:

   ```bash
   php artisan reverb:start
   ```

8. Launch the development server:

   ```bash
   php artisan serve
   ```

   Your application should now be running! Open your browser and navigate to `http://127.0.0.1:8000` to view the application.

