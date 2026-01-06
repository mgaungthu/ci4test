# Responsive Landing Page – Test Challenge

## 📄 Project Overview

This project is a **responsive landing page** built as part of a test challenge.  
The goal of the project is to demonstrate clean front-end structure, responsive layout, performance awareness, and accessibility best practices while keeping the implementation lightweight and maintainable.

The page includes a responsive navigation menu, hero section, call-to-action areas, and content sections that work consistently across desktop, tablet, and mobile devices.

---

## 🛠 Technologies Used

- **HTML5**  
  Used for semantic markup and proper document structure.

- **CSS3**  
  Used for custom styling, animations, layout control, and visual design.

- **Bootstrap 5**  
  Used mainly for:
  - Grid system
  - Responsive layout
  - Cross-device compatibility  
  Bootstrap components are kept minimal to reduce overhead.

- **Custom Utility CSS**  
  A utility CSS file is used for spacing, margins, padding, and reusable helper classes to keep the layout consistent and easy to maintain.

- **Custom Styles (`mystyle.css`)**  
  Contains project-specific styles, branding, colors, typography, and visual enhancements.

- **JavaScript (Minimal Usage)**  
  A small amount of JavaScript (jQuery) is used only to handle:
  - Navigation menu open / close behavior  
  No heavy frameworks are used to keep performance optimal.

---

## ⚙️ Setup Instructions (CodeIgniter 4)

Follow the steps below to set up and run the **CodeIgniter 4** project locally.

---

### 1️⃣ Clone the Repository
```bash
git clone <repository-url>
cd ci4test
```

---

### 2️⃣ Server Requirements
Make sure your local environment meets the following requirements:

- PHP **8.1 or higher**
- Composer
- Web server (Apache / Nginx) or PHP built-in server
- Enabled PHP extensions:
  - intl
  - mbstring
  - json
  - curl
  - openssl

You can check PHP version with:
```bash
php -v
```

---

### 3️⃣ Install Dependencies
CodeIgniter 4 uses Composer to manage dependencies.

```bash
composer install
```

This will generate the `vendor/` directory required to run the framework.

---

### 4️⃣ Environment Configuration
Create the environment configuration file:

```bash
cp env .env
```

Open `.env` and update the following values if needed:

```env
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'
```

> ⚠️ Do not commit `.env` to Git. Use `.env.example` for sharing configuration.

---

### 5️⃣ Folder Permissions
Ensure the `writable/` directory is writable:

```bash
chmod -R 775 writable
```

(This step is required for logs, cache, and session files.)

---

### 6️⃣ Run the Application

#### Option A: Using CodeIgniter Built-in Server (Recommended)
```bash
php spark serve
```

The application will be available at:
```
http://localhost:8080
```

#### Option B: Using PHP Built-in Server
```bash
php -S localhost:8080 -t public
```

---

### 7️⃣ Project Structure Overview
Key folders in this CodeIgniter 4 project:

- `app/Controllers` – Application controllers
- `app/Views` – View files (landing page, layout, partials)
- `app/Config` – Configuration files
- `public/` – Public web root (CSS, JS, images)
- `writable/` – Cache, logs, sessions (must be writable)
- `vendor/` – Composer dependencies

---

### 8️⃣ Notes

- The web server document root must point to the `public/` directory.
- This project is configured for **development mode** by default.
- For production, set `CI_ENVIRONMENT = production` in `.env`.

This project is created for demonstration and evaluation purposes as part of a test challenge.
