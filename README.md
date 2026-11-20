# RaggieSoft Hub (`raggiesoft.com`)

[![License: MIT](https://img.shields.io/badge/Code_License-MIT-0369a1.svg)](./LICENSE)
[![Stack: PHP 8.5 MVC + DaisyUI 5](https://img.shields.io/badge/Stack-PHP_8.5_MVC_%2B_DaisyUI_5-777bb4.svg)](https://raggiesoft.com)
[![Accessibility: WCAG 2.1 AA & Section 508 Web](https://img.shields.io/badge/Accessibility-WCAG_2.1_AA_%2F_Section_508_Web-15803d.svg)](https://raggiesoft.com)

Server-side rendered (SSR) root portal for **`https://raggiesoft.com`**, built on **PHP 8.5 MVC** (**Stardust Engine CMS**), **DaisyUI 5**, and **Phosphor Icons** with zero relational database dependencies.

---

## Architectural Highlights

- **Protected Front-Controller MVC (`amanda/elara.php`)**: Public Nginx traffic is routed exclusively through `amanda/elara.php` via `try_files`, keeping page templates (`pages/`), shared layout components (`includes/`), and hierarchical JSON route manifests (`data/routes/`) outside the public document root.
- **Subdomain Ecosystem Gateway**: Anchors the `raggiesoft.com` root domain while coordinating clean `301` edge redirects and cross-domain navigation across nine specialized `*.raggiesoft.com` subdomains (`corporate`, `engineroom`, `music`, `stardust`, `books`, `backstage`, `lore`, `nebulae`, and `storetrainer`).
- **Dynamic SEO & Structured Data**: Synthesizes per-route canonical URLs, OpenGraph (`og:*`) & Twitter Card metadata, Schema.org JSON-LD, `sitemap.xml`, `sitemap-network.xml`, and IndexNow verification keys.
- **WCAG 2.1 AA & Section 508 Web Compliance**: Enforces strict Content Security Policy (CSP) headers, semantic HTML5 landmarks, keyboard navigation, and $\ge 4.5:1$ contrast across both Light and Dark (`prefers-color-scheme`) color modes.

---

## Licensing & Fictitious Entities Disclaimer

- **Source Code:** Licensed under the **MIT License**.
- **Creative Content:** Licensed under **CC BY-SA 4.0**.
- **Fictitious Persons & Entities Disclaimer:** All narrative characters, bands, biographies, universities (including CPI, VDU, The Forgers, and The Crucible), corporations (OmniCorp, Apex Records, Engine Room Records, LLC, Prairie Coachworks, Sainte-Claire), transit agencies (BRT, CVTA), in-universe legal filings, and story events referenced across RaggieSoft properties are works of fiction.
