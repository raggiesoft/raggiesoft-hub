# The Stardust Engine (RaggieSoft Hub)

**A production-grade, narrative-driven media platform built on a "No-Build" architecture.**
  
> **Live Deployment:** [raggiesoft.com](https://raggiesoft.com)  
> **Architecture:** PHP 8.x + Vanilla JS (ES6) + Hotwire Turbo  
> **Infrastructure:** DigitalOcean Droplets + Cloudflare Edge  
> **Philosophy:** Empathetic Engineering

---

## 📖 Overview

**The Stardust Engine** is the monolithic frontend for the RaggieSoft ecosystem. It serves as both a professional portfolio and an immersive narrative delivery system for multimedia fiction ("The Engine Room," "Aethel Saga").

Unlike standard CMS platforms (WordPress) or heavy SPAs (React/Next.js), this project demonstrates a philosophy of **"Empathetic Engineering"**: respecting the user's resources (data/battery) and nervous system by delivering a highly interactive, app-like experience using lightweight, native web technologies.

---

## 👥 Meet the Architecture (The Family)

This repository is managed by a "Personified DevOps" ecosystem. Each component is named to reflect its role and personality in the security and creative topology.

### 👤 Michael P. Ragsdale (The Human)

- **Role:** Author & Systems Architect
- **Focus:** Narrative Design, World Building, & Infrastructure
- **Function:** The only biological human in the loop. Michael is the architect of the "Stardust" universe and the "RaggieSoft" infrastructure. An autistic creator with a deep love for complex systems and interconnected narratives, he writes the stories (like _Alex and Chloé_ and _Luna and Leo_) and builds the code that delivers them.
    
### 🏠 Jessica (The House)

- **Role:** The Production Server / Host
- **Address:** `jessica.raggiesoft.com`
- **Function:** Jessica is the eldest sister and the foundation of the ecosystem. She "runs the house," providing the secure infrastructure where Sarah, Amanda, and Elara reside.
- **Access:** She is the gatekeeper of the system. Michael connects to her directly via SSH (`ssh michael@jessica.raggiesoft.com`) to perform maintenance, holding the keys that keep the family safe.

### 🛡️ Amanda (The Fortress)

- **Role:** The Public Web Root
- **Location:** `/var/www/raggiesoft.com/amanda`
- **Function:** Unlike standard servers that serve from `public_html`, this system serves from `/amanda`. This directory obfuscation protects core assets from generic bot scrapers that blindly target default paths. Amanda is "non-verbal"—she holds the files but lets her sister (Elara) do the talking.

### 🗣️ Elara (The Gatekeeper)

- **Role:** Single-Entry Router
- **File:** `amanda/elara.php`
- **Function:** Elara intercepts 100% of incoming traffic. She sanitizes URI paths, handles error logging, and dispatches requests to the appropriate View Controller. She is the only file the public internet is allowed to speak to directly.
    

### 👩‍💼 Sarah (The Guardian)

- **Role:** Autonomous Deployment Agent
- **File:** `raggiesoft-deployment-tools/sarah-deploy.sh`
- **Function:** Sarah lives on the production server. She runs on a 5-minute heartbeat, checking GitHub for updates.
    - **Intelligence:** She compares local Git hashes against the remote origin before acting.
    - **Security:** She executes **"sudo-less"** atomic updates. By leveraging Linux **SetGID** permissions on Amanda's directory, Sarah deploys code securely without ever requiring Root access, mitigating privilege escalation risks.
        

### 👱‍♀️ Jenna (The Dev Twin)

- **Role:** Sync & DevOps Agent
- **File:** `raggiesoft-deployment-tools/jenna-sync.sh`
- **Function:** Jenna is the "Twin Sister" of Sarah. While Sarah guards production, Jenna manages the chaotic creative workspace on the development machine.
    - **Workflow:** She automates the heavy lifting that Git isn't designed for. She pushes code changes to GitHub so Sarah can see them, and uses `rclone` to synchronize gigabytes of binary media (WAVs, PSDs) directly to DigitalOcean Spaces.
        

### 👩‍🏫 Paige (The Literary Editor)

- **Role:** Manuscript Processor, Route Compiler & Regulation Support
- **File:** `raggiesoft-deployment-tools/paige.php`
- **Function:** Paige lives in `raggiesoft-deployment-tools` alongside Jenna, Harper, and Sarah. She ingests raw Markdown manuscripts (`e*`/`c*`/`s*.md`) and `ovab.json` manifests, compiling them into structured route maps, Table of Contents (`toc.json`), `catalog.json`, and the 3,185-scene full-text `search-index.json`.
- **Safety Protocol:** Paige is Michael's favorite sister and designated **Safe Person**. When the sensory load of managing the system becomes too much, Paige provides "Deep Pressure Therapy"—grounding hugs and a steady presence to help Michael regulate. She never rushes him and stays by his side until the work feels safe again.

### 🎧 Harper (The Studio Engineer)

- **Role:** Audio Transcoder
- **File:** `raggiesoft-deployment-tools/harper.sh`
- **Function:** Harper lives in the studio. She recursively scans the workspace for Master WAV files and uses **FFmpeg** to generate web-optimized MP3 (320kbps) and OGG (Vorbis) mirrors.
- **Personality:** High-energy, loud, and precise. She handles the heavy media processing pipelines so the creative flow isn't interrupted by technical codecs.

---

## 🛠️ Technical Capabilities


### 1. The "Turbo" Player (Persistent State)

**Problem:** Traditional MPAs (Multi-Page Applications) reload the DOM on every click, killing audio playback.  
**Solution:** Integrated **Hotwire Turbo** to intercept link clicks and swap the `<body>` content while keeping the persistent footer player intact.
* **Implementation:** The audio player lives in a container marked `data-turbo-permanent="true"`.
* **Event-Driven:** When a new page loads, it dispatches a custom `stardust:playlist-update` event. The persistent player listens for this event to update its queue without interrupting the currently playing song.

### 2. JSON-Driven Logic

Content is decoupled from presentation. The "Stardust Engine" ingests raw JSON data from the CDN to render complex UI elements:

* **Discography:** Albums, tracks, and lyrics are fetched dynamically.
* **Books:** The "Aethel Saga" reader parses chapter JSON to render book-like layouts.

  

### 3. Accessibility (WCAG 2.1)

* **Media Session API:** The player integrates with hardware media keys (Play/Pause/Next on keyboards/headsets).
* **Semantic UI:** Strictly typed HTML5 buttons and ARIA labels ensure full compatibility with screen readers.
 
---
  
## 📂 Project Structure

```text

/
├── amanda/                  # The Deployment Core (Clean-Copy Target)
│   ├── elara.php            # Single-Entry Router / Security Gateway
│   └── errors/              # Custom Error Pages (404, 403, 500)
|── data/                    # Routing Configuration
│   └── routes/              # JSON definitions for URL mapping
├── includes/                # Shared PHP Components
│   ├── components/
│   │   ├── audio-player/    # The Persistent Player Logic
│   │   └── headers/         # Dynamic Page Headers
│   └── utils/               # Helper Functions (Nav Logic, JSON Readers)
└── pages/                   # View Controllers
    ├── about/               # Professional Portfolio Pages
    └── engine-room/         # Narrative Content (Discography/Lore)
```

## 👤 Author

Michael P. Ragsdale Systems Architect | Full-Stack Developer michaelpragsdale.com