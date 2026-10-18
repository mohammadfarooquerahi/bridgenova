# BridgeNova — Global Youth Leadership & Strategic Alliance WordPress Theme

> **Project:** Custom WordPress Theme for Bridge Global Network  
> **Theme Version:** 1.0.6  
> **Developed by:** [Mohammad Farooque](https://www.linkedin.com/in/mohammadfarooque/)

---

## 📌 Overview

**BridgeNova** is a custom, high-performance WordPress theme engineered for **Bridge Global Network** — an international platform empowering young leaders through global exchange, leadership development, diplomatic dialogue, social innovation, and community impact.

Designed with an executive dark navy (`#0a1c33`) aesthetic paired with refined gold (`#caa256`) accents, the theme offers seamless responsiveness, interactive components (smooth FAQ accordions, team carousels, dynamic counters, event grids), and full non-technical client editability.

---

## 🚀 Key Features

* **Visual Live Customizer ("Theme Options"):**
  * **Hero Section:** Customizable eyebrow, title, description paragraph, background image uploader, and 3 action button labels & URLs.
  * **Animated Impact Counters:** Editable metrics for Members, Countries, Programs, and Partners.
  * **About BRIDGE Showcase:** Editable titles, mission statements, and narrative paragraphs.
  * **Six Strategic Pillars:** Dedicated controls for Pillar 01 through Pillar 06.
  * **FAQ Accordion Manager:** Full control over FAQs 1–8 with automatic hiding for blank entries.
  * **Contact & Social Media Hub:** Central email, phone number, location address, and social links (Facebook, Instagram, LinkedIn, YouTube, X).
  * **Footer & Copyright:** Editable brand summary and automated current-year copyright attribution.
* **WordPress Page Editor Integration (`the_content()`):**
  * Every page template (`page-about-us.php`, `page-services.php`, `page-contact-us.php`, `page-our-team.php`, `page-partners.php`, `page-speakers.php`, `page-gallery.php`, `page-events.php`, `page-registration.php`, `page-event-registration.php`) supports native WordPress block content.
* **Custom Post Types (CPT):**
  * Built-in CPT registration for `bridge_event`, `bridge_team`, `bridge_partner`, and `bridge_testimonial`.
* **Refined Navigation:**
  * Clean single-arrow dropdown indicators (`▼`) with smooth 180° rotation on desktop hover and responsive mobile drawer toggle.
* **Developer Watermark:**
  * Discreet developer attribution in the footer linking to [Mohammad Farooque](https://www.linkedin.com/in/mohammadfarooque/) with smooth 10% to 20% opacity hover transition.

---

## 📂 Repository Structure

```text
BridgeNova/
├── bridgenova/                         # WordPress theme source directory
│   ├── assets/
│   │   ├── css/
│   │   │   └── main.css                # Complete theme styling & responsive rules
│   │   └── js/
│   │       └── main.js                 # Vanilla JS for accordions, carousels & nav
│   ├── inc/
│   │   ├── customizer.php              # Comprehensive Theme Options Customizer panel
│   │   └── template-functions.php      # Helper functions, breadcrumbs & social links
│   ├── 404.php                         # Custom 404 error template
│   ├── archive.php                     # Blog & archive template
│   ├── comments.php                    # Comments template
│   ├── footer.php                      # Global footer with developer credit & widgets
│   ├── front-page.php                  # Dynamic homepage with full Customizer bindings
│   ├── functions.php                   # Theme setup, CPTs, walker nav & auto-page router
│   ├── header.php                      # Header, transparent/solid sticky nav & mobile drawer
│   ├── index.php                       # Default fallback template
│   ├── page.php                        # Standard WordPress page template
│   ├── page-about-us.php               # About BRIDGE showcase template
│   ├── page-contact-us.php             # Contact page with AJAX form & map embed
│   ├── page-event-registration.php     # Event registration form template
│   ├── page-events-bridge.php          # Dedicated upcoming events showcase
│   ├── page-gallery-2.php              # Filterable photo & moments gallery
│   ├── page-our-team.php               # Leadership team grid with modal/readmore bios
│   ├── page-partners.php               # Institutional & strategic partnerships
│   ├── page-registration.php           # Membership application template
│   ├── page-services.php               # Six Pillars of service breakdown
│   ├── page-speakers.php               # Keynote speakers & global voices roster
│   ├── single.php                      # Single post template
│   └── style.css                       # Theme stylesheet header & metadata (v1.0.6)
├── bridgenova.zip                      # Production-ready theme distribution archive
├── BridgeNova_Client_Website_Guide.pdf # 10-page Printable Client Handover & User Guide
├── BridgeNova_Client_Website_Guide.html# Browser-viewable Client Handover Guide
├── .gitignore                          # Git ignore configuration
└── README.md                           # Project documentation
```

---

## 🛠️ Installation & Activation

1. In WordPress Admin, navigate to **Appearance > Themes > Add New > Upload Theme**.
2. Upload `bridgenova.zip` and click **Install Now**, then **Activate**.
3. All primary pages, static homepage assignments, and permalink structures will auto-configure.
4. Navigate to **Appearance > Theme Options (Edit All Sections)** or click **Customize** to populate brand content, upload hero images, and update contact details.
5. Refer to `BridgeNova_Client_Website_Guide.pdf` for comprehensive client handover documentation.

---

## 👨‍💻 Developer & Author

* **Developer:** Mohammad Farooque  
* **LinkedIn:** [linkedin.com/in/mohammadfarooque](https://www.linkedin.com/in/mohammadfarooque/)  
* **GitHub:** [github.com/mohammadfarooquerahi](https://github.com/mohammadfarooquerahi)
