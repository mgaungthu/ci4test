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

## ⚙️ Setup Instructions

Follow the steps below to set up and run the project locally.

### 1️⃣ Clone the Repository
```bash
git clone <repository-url>
cd project-folder
```

### 2️⃣ Project Structure Overview
This project is a **static front-end project**.  
There is no build process, package manager, or server-side dependency required.

Key folders:
- `assets/css` – Stylesheets (utility styles, custom styles, responsive styles)
- `assets/js` – JavaScript files (menu toggle only)
- `assets/images` – Images and SVG assets
- `index.html` – Main entry file

---

### 3️⃣ Run the Project Locally

You can run the project in two ways:

#### Option A: Using a Local Server (Recommended)
Using a local server is recommended to ensure fonts, caching, and performance behave correctly.

```bash
npx serve
```

or

```bash
php -S localhost:8080
```

Then open the browser at:
```
http://localhost:8080
```

#### Option B: Open HTML File Directly
You can also open the main HTML file directly in your browser:

- Double-click `index.html`
- Or right-click → Open with browser

> ⚠️ Note: Some features such as font loading, caching behavior, and performance testing work best when using a local server.

---

### 4️⃣ Customization

- Update styles in `mystyle.css` for branding and layout changes
- Use utility classes from `util.css` for spacing and alignment
- Responsive adjustments are handled in `responsive.css`
- JavaScript logic for menu interaction is located in `assets/js`

---

### 5️⃣ Browser Support

The project is tested and works on modern browsers:
- Chrome
- Firefox
- Edge
- Safari

---

### 6️⃣ Notes

This project is intended for demonstration and evaluation purposes as part of a test challenge.  
The structure is intentionally kept simple for clarity, performance, and ease of review.
