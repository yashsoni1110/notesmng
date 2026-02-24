# 📚 NotesHub — Academic Notes & Papers Platform

A modern, full-stack web platform for students to access academic notes and previous year question papers — built with PHP, MySQL, and Bootstrap.

---

## ✨ Features

### For Students

- 📘 **Browse & Download Notes** — Organized by course (BCA / BBA)
- 📄 **Previous Year Papers** — Sorted by subject, course, and year
- 🔐 **User Authentication** — Register, login, and email verification
- 📬 **Contact Form** — Send queries directly to admins
- 🌙 **Premium UI** — Modern, animated, fully responsive design

### For Admins

- 🛡️ **Secure Admin Panel** — Separate login with session protection
- 📤 **Upload Notes & Papers** — PDF upload with metadata
- 👥 **User Management** — View all registered users
- 💬 **Query Management** — Read and manage contact form submissions
- 🔔 **Site Shutdown Mode** — Temporarily disable the public site

---

## 🏗️ Tech Stack

| Layer    | Technology                        |
| -------- | --------------------------------- |
| Backend  | PHP 8+                            |
| Database | MySQL (via MySQLi)                |
| Frontend | HTML5, Bootstrap 5.2, Vanilla CSS |
| Icons    | Bootstrap Icons 1.11              |
| Fonts    | Inter, Poppins (Google Fonts)     |
| Server   | Apache (XAMPP)                    |

---

## 📂 Project Structure

```
notesmng/
├── index.php              # Homepage
├── notes.php              # Notes listing page
├── papers.php             # Question papers listing page
├── aboutus.php            # About Us page
├── contact.php            # Contact page
├── email_confirm.php      # Email verification
├── boot.css               # Main design system stylesheet
│
├── inc/
│   ├── header.php         # Navbar & auth modals
│   ├── footer.php         # Footer & JS
│   └── links.php          # Global CSS/JS includes + DB bootstrap
│
├── admin/
│   ├── index.php          # Admin login
│   ├── users.php          # User management
│   ├── notes.php          # Notes management
│   ├── papers.php         # Papers management
│   ├── User_queries.php   # Contact form queries
│   ├── css/common.css     # Admin panel stylesheet
│   └── inc/
│       ├── header.php     # Admin sidebar & topbar
│       ├── links.php      # Admin CSS/JS includes
│       ├── scripts.php    # Admin JS utilities
│       ├── db_config.php  # Database connection
│       └── essentials.php # Helper functions
│
└── images/                # Uploaded content & assets
```

---

## 🚀 Getting Started

### Prerequisites

- [XAMPP](https://www.apachefriends.org/) (PHP 8+ & MySQL)
- A web browser

### Installation

1. **Clone or copy** the project into your XAMPP `htdocs` folder:

   ```
   C:\xampp\htdocs\notesmng\
   ```

2. **Start XAMPP** — Start both **Apache** and **MySQL** from the XAMPP Control Panel.

3. **Create the database:**
   - Open [phpMyAdmin](http://localhost/phpmyadmin)
   - Create a new database (e.g. `notesmng`)
   - Import the provided SQL file

4. **Configure the database:**
   - Open `admin/inc/db_config.php` and set your credentials:
     ```php
     $host = "localhost";
     $user = "root";
     $pass = "";
     $db   = "notesmng";
     ```

5. **Open the site:**

   ```
   http://localhost/notesmng
   ```

6. **Access the admin panel:**
   ```
   http://localhost/notesmng/admin
   ```

---

## 🗄️ Database Tables

| Table          | Description                               |
| -------------- | ----------------------------------------- |
| `settings`     | Site-wide settings (title, shutdown mode) |
| `admin_cred`   | Admin login credentials                   |
| `users`        | Registered student accounts               |
| `notes`        | Uploaded academic notes (PDF)             |
| `papers`       | Uploaded question papers (PDF)            |
| `user_queries` | Contact form submissions                  |

---

## 🎨 Design System

The frontend uses a custom CSS design system (`boot.css`) with:

- **Deep Indigo** primary (`#4338ca`) and **Teal** secondary (`#0891b2`)
- CSS custom properties for all colors, shadows, and spacing
- Smooth scroll-triggered `appear-animation` on all sections
- Fully responsive mobile-first layout

The admin panel has its own design system (`admin/css/common.css`) with:

- Dark sidebar navigation with icon-based menu items
- Clean card/table components for data management
- Glassmorphism login page

---

## 🔒 Security Notes

- Admin routes are protected via `adminLogin()` — unauthenticated users are redirected automatically
- All form inputs are sanitized via `filteration()` before database queries
- File uploads are restricted to `.pdf` format only

---

## 📜 License

This project is intended for educational use.
