<a name="readme-top"></a>

<br/>
<br/>

<div align="center">
  <a href="https://github.com/SammyyB/">
    <img src="backend/public/assets/sammy.png" alt="Sammy" width="250" height="250">
  </a>
<!-- * Title Section -->
  <h3 align="center">Golden Crumbs Cookie House</h3>
</div>

<!-- * Description Section -->
<div align="center">
This project is a beginner-friendly Golden Crumbs Cookie House system.  
It demonstrates a modular approach to managing users, products, orders, and analytics, with sample cards, interactive buttons, and a roadmap to help teams quickly extend and customize the system.
</div>

<br/>

![](https://visit-counter.vercel.app/counter.png?page=zyx-0314/ci4-template)

<!-- ! Make sure it was similar to your github -->

---

<br/>
<br/>

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#overview">Overview</a>
      <ol>
        <li>
          <a href="#key-components">Key Components</a>
        </li>
        <li>
          <a href="#technology">Technology</a>
        </li>
      </ol>
    </li>
    <li>
      <a href="#rules-practices-and-principles">Rules, Practices and Principles</a>
    </li>
    <li>
      <a href="#resources">Resources</a>
    </li>
  </ol>
</details>

---

# Overview

This template provides a **minimal CodeIgniter 4 project layout** for the Golden Crumbs system, with conventions for file organization, commit practices, and sample modules.  

It is designed to be **easy to start with** and a **reference for adding new features**.

* **Purpose**: a clean starting point for Golden Crumbs CI4 apps.  
* **Audience**: developers who want a predictable structure and quick onboarding.

### Key Components

These are **modules/components** included in your system:

| Component                 | Purpose                                                                                   | Notes                                                                 |
| ------------------------- | ----------------------------------------------------------------------------------------- | --------------------------------------------------------------------- |
| **Auth (Login/Signup)**   | Handles customer and admin login, registration, session and cookie management.            | Uses CI4 sessions + optional MySQL `users` table.                     |
| **Product Management**    | CRUD operations for cookies, combos, and featured items.                                   | Includes best-seller highlights, images, and pricing.                 |
| **Order & Tracking System** | Allows customers to place orders and track them in real-time.                             | Includes stages: Pending → Baking → Ready → Completed.                |
| **Roadmap / Progress Cards** | Visualizes system features, planned modules, and progress stages.                         | Uses cards with color-coded statuses (Completed, In Progress, Planned).|
| **Feedback & Reviews**    | Enables customers to leave ratings and comments.                                           | Helps admin monitor customer satisfaction.                             |
| **CTAs & Hero Section**   | Encourages users to Login or Sign Up from the landing page.                                | Uses Golden Crumbs brand colors and fonts (Pacifico + Montserrat).     |
| **UI Components**         | Reusable buttons, cards, and layouts for landing pages and dashboards.                     | Fragmented PHP views for consistency across pages.                     |
| **Logo & Branding**       | Circle and square logos, color palette, and typography guidelines.                         | Pacifico font for headings/logos, Montserrat for body text.            |
| **Scheduler / Admin Tools** | (Optional) Sample modules showing task scheduling or content updates.                     | Demonstrates extending system with new features and tables.           |


 <!-- ! Start simple. Use these modules as **learning samples**; extend or replace them based on your project’s needs. -->

### Technology

#### Language

![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge\&logo=html5\&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge\&logo=css3\&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge\&logo=javascript\&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge\&logo=php\&logoColor=white)

#### Framework/Library

![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge\&logo=tailwindcss\&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=for-the-badge\&logo=codeigniter\&logoColor=white)

#### Databases

<!-- ! Keep only the used technology -->

---

## Quick Start (Docker)

Run the development stack and the app (rebuild if needed):

```cmd
docker compose up --watch
```

- Create a controller (add --resource to scaffold resourceful methods if you like) (using CodeIgniter's spark tool):
```cmd
docker compose exec php php spark make:controller Usars
```

If you prefer, you can include `-f "compose.yaml"` explicitly; the shorter commands above work when running from the repo root.

## Ports & Database

Defaults used in this project (host mapping):

| Service     | Host port |
|-------------|-----------:|
| nginx (app) | 8090      |

Database credentials used in examples and CI:

- Host: localhost
- Port: 3390
- Database: app
- User: root
- Password: root

Be careful: seeding and truncating are destructive operations — run only on local/dev environments unless you know what you're doing.

## Rules, Practices and Principles

<!-- ! Dont Revise this -->

1. Always prefix project titles with `AD-`.
2. Place files in their **respective CI4 folders** (`Controllers/`, `Services/`, `Repositories/`, `Views/`).
3. Naming conventions:

   | Type             | Case        | Example                   |
   | ---------------- | ----------- | ------------------------- |
   | Classes          | PascalCase  | `UserService.php`         |
   | Interfaces       | PascalCase  | `UserRepositoryInterface` |
   | DB tables/fields | snake\_case | `users`, `created_at`     |
   | Docs             | kebab-case  | `dev-manual.md`           |

4. Git commits use: `feat`, `fix`, `docs`, `refactor`.
5. Use **Controller → Service → Repository** pattern.
6. Assets (CSS/JS/img) live under `public/`.
7. Docker configs are at the repo root (`docker-compose.yml`, `nginx.conf`).
8. Docs are maintained in `/docs` (dev, technical, sop, commit, principles, copilot).

Example structure:

```
AD-ProjectName/
├─ backend/ci4/
│  ├─ app/Controllers/
│  ├─ app/Services/
│  ├─ app/Repositories/
│  ├─ app/Views/
│  ├─ public/
│  ├─ writable/
│  ├─ .env
│  └─ composer.json
├─ docker/               # Docker configs at root
├─ docs/                 # Manuals and project docs
├─ .gitignore
└─ readme.md
```

<!-- ! Dont Revise this -->

---

## Resources

| Title                   | Purpose                                                               | Link                                                                       |
| ----------------------- | --------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| ChatGPT                 | General AI assistance for planning application architecture and docs. | [https://chat.openai.com](https://chat.openai.com)                         |
| Google Photos (Assets)  | Stock imagery and graphics used in UI mockups and documentation.      | [https://photos.google.com](https://photos.google.com)                     |
| System Documentation    | Internal docs from PHP, MongoDB, and PostgreSQL used in development.  | — (see `/docs` folder in repo)                                             |

<!-- ! Add what tools aided you -->