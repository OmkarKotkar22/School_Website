<h1 align="center">🏫 School Website Management System</h1>

<p align="center">
  <!-- Repository Size -->
  <img src="https://img.shields.io/badge/Repo%20Size-6.9%20MB-1E90FF?style=for-the-badge&logo=github" alt="Repo Size" />
  
  <!-- Languages Used -->
  <img src="https://img.shields.io/badge/Languages%20Used-HTML%2C%20CSS%2C%20PHP-FF69B4?style=for-the-badge&logo=codepen" alt="Languages Used" />
  
  <!-- Last Commit -->
  <img src="https://img.shields.io/badge/Last%20Commit-Nov%202025-32CD32?style=for-the-badge&logo=git" alt="Last Commit" />
  
  <!-- Open Issues -->
  <img src="https://img.shields.io/badge/Open%20Issues-0-FFA500?style=for-the-badge&logo=githubissues" alt="Open Issues" />
  
  <!-- GitHub Stars -->
  <img src="https://img.shields.io/badge/Stars-0-FFD700?style=for-the-badge&logo=github" alt="Stars" />
  
  <!-- Project Type -->
  <img src="https://img.shields.io/badge/Project-School%20Website-8A2BE2?style=for-the-badge&logo=googleclassroom" alt="Project Type" />
</p>

---

## 🌐 Project Overview

The **School Website Management System** is a dynamic, server-side application designed to provide a comprehensive online presence for an educational institution. Built primarily with **PHP** and **CSS**, it features public-facing informational pages and specialized forms for admissions, fee payments, and parent logins.

The project uses a modular design with shared components like `nav.php` and `footer.php`, ensuring consistency across the various pages. It demonstrates fundamental web development practices, including form handling and database interaction (implied by `*_save.php` files).

**Purpose:**  
To serve as a functional and easily deployable codebase for a modern school's official website, facilitating key operational tasks online.

---

## ✨ Key Features
- 📜 **Multiple Informational Pages** – Including About, Contact, and Gallery.  
- 📝 **Admission Forms** – Dedicated pages for student admission processing (`admission.php`, `contact_save.php`).
- 💳 **Online Fee Payment Module** – Includes form and save logic (`fee_payment.php`, `fee_payment_save.php`).
- 👨‍👩‍👧 **Parent Login Portal** – Secure access for parents (`parent_login.php`, `parent_login_save.php`).
- 💬 **Parent Testimonials** – A dedicated section for collecting and displaying feedback.
- 🖼️ **Image Gallery** – Showcasing school events and infrastructure.
- 📱 **Responsive Design** – Utilizes **Bootstrap 4.6.2** for a mobile-friendly layout.

---

## 💻 Tech Stack

| Technology | Purpose | Key Files/Usage |
|-------------|----------|---|
| **PHP** | Server-side logic, routing, and form handling | `index.php`, `about.php`, `*_save.php` |
| **CSS3** | Styling and layout presentation | `style.css`, `*.css` files |
| **Hack** | Core language for HHVM (used for backend scripting) | Language stats indicate usage |
| **Bootstrap 4.6.2** | Frontend framework for responsiveness | `assets/bootstrap-4.6.2-dist/` |

---

## 📂 Project Structure
School_Website/  
├── assets/  
│     └── bootstrap-4.6.2-dist/  
├── images/         
│  
├── index.php                              
├── about.php                                
├── admission.php    
├── contact.php  
├── fee_payment.php  
├── gallery.php  
├── parent_login.php  
├── parent_testimonial.php  
├── form.php                              
├── nav.php    
├── footer.php
│  
├── contact_connection.php  
├── contact_save.php  
├── enquiry_save.php  
├── fee_payment_save.php  
├── parent_login_save.php  
│  
├── style.css  
├── about.css  
├── admission.css  
├── contact.css  
├── fee_payment.css  
├── form.css  
├── gallery.css  
└── parent_testimonial.css            
