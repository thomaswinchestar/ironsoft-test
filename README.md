# IronPDF for C++ - CodeIgniter 4 Implementation

This project implements the IronPDF for C++ landing page template using CodeIgniter 4 framework, following MVC architecture and best practices.

## What is CodeIgniter?

CodeIgniter is a PHP full-stack web framework that is light, fast, flexible and secure. More information can be found at the [official site](https://codeigniter.com).

## Project Structure

```
ci-ironpdf/
├── app/
│   ├── Config/
│   │   ├── App.php          # Application configuration
│   │   ├── Paths.php         # Path configuration
│   │   └── Routes.php        # Route definitions
│   ├── Controllers/
│   │   ├── BaseController.php # Base controller with common methods
│   │   ├── Home.php          # Home page controller
│   │   ├── Products.php      # Products controller
│   │   └── Api.php           # API controller for JSON data
│   ├── Data/
│   │   └── site_data.json    # JSON data source for dynamic content
│   └── Views/
│       ├── layouts/
│       │   └── main.php      # Main layout template
│       ├── partials/
│       │   ├── navigation.php # Navigation partial
│       │   └── footer_cta.php # Footer CTA partial
│       ├── home/
│       │   ├── index.php     # Home page view
│       │   ├── features.php  # Features page view
│       │   ├── about.php     # About page view
│       │   └── career.php    # Career page view
│       └── products/
│           ├── index.php     # Products listing view
│           └── show.php      # Single product view
├── public/
│   ├── index.php             # Front controller
│   ├── .htaccess             # Apache rewrite rules
│   ├── css/
│   │   └── styles.css        # Custom styles
│   └── assets/               # SVG and image assets
├── writable/                 # Logs, cache, sessions
└── vendor/                   # Composer dependencies
```

## Features

- **MVC Architecture**: Follows CodeIgniter 4's Model-View-Controller pattern
- **JSON Data Source**: Uses `site_data.json` for dynamic content (simulating a database)
- **Routing**: Clean URL routing with parameters
- **View Partials**: Reusable view components (navigation, footer)
- **Layout System**: Main layout template with content injection
- **Responsive Design**: Mobile-friendly Bootstrap 5 layout
- **Dynamic Navigation**: Dropdown menus with product links
- **Clickable Product Cards**: Product cards link to individual product pages
- **Dark Theme Styling**: Consistent purple/pink gradient theme across all pages
- **API Endpoint**: JSON API for site data

## Routes

| Route | Controller | Method | Description |
|-------|------------|--------|-------------|
| `/` | Home | index | Home page |
| `/home` | Home | index | Home page (alias) |
| `/features` | Home | features | Features page |
| `/about` | Home | about | About page |
| `/career` | Home | career | Career page |
| `/products` | Products | index | Products listing |
| `/products/java` | Products | show | IronPDF for Java page |
| `/products/python` | Products | show | IronPDF for Python page |
| `/products/nodejs` | Products | show | IronPDF for NodeJS page |
| `/api/site-data` | Api | siteData | JSON API endpoint |

## Prerequisites

- PHP 8.1 or higher
- Composer
- Git

**Required PHP Extensions:**
- intl
- mbstring
- json

## Quick Start

### 1. Clone the Repository

```bash
git clone https://github.com/thomaswinchestar/ironsoft-test.git
cd ironsoft-test
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Configure Environment (Optional)

Copy the environment file and update if needed:

```bash
cp env .env
```

Edit `.env` to configure:
- `app.baseURL` - Your application URL (default: `http://localhost:8080/`)
- Database settings (if needed)

### 4. Run the Development Server

```bash
php spark serve
```

Then open your browser to `http://localhost:8080`

## Alternative: Using PHP Built-in Server

```bash
cd public
php -S localhost:8080
```

## Production Deployment

For production deployment to web servers (Apache/Nginx), see [DEPLOYMENT.md](DEPLOYMENT.md) for detailed instructions.

## Navigation Menu

The navigation includes:

- **PRODUCTS** (dropdown)
  - All Products → `/products`
  - IronPDF for Java → `/products/java`
  - IronPDF for Python → `/products/python`
  - IronPDF for NodeJS → `/products/nodejs`
- **FEATURES** → `/features`
- **ABOUT US** → `/about`
- **CAREER** → `/career`

## JSON Data Source

The application uses `app/Data/site_data.json` as a simulated data source containing:

- Site metadata (title, description, keywords)
- Navigation menu items and dropdowns
- Hero section content
- Early access section content
- Features list
- Products list with status (released/coming soon)
- Footer CTA content

## Pages Overview

### Home Page (`/`)
Main landing page with hero banner, early access signup, features section, why section, and clickable product cards.

### Product Pages (`/products/java`, `/products/python`, `/products/nodejs`)
Individual product pages with "Early Access" styling, product description, and all product cards displayed.

### Career Page (`/career`)
Job listings page with open positions displayed in product card style.

### Features Page (`/features`)
Detailed features section for IronPDF capabilities.

### About Page (`/about`)
Information about why Iron Software created the C++ PDF library.

## CodeIgniter 4 Best Practices

1. **Folder Structure**: Follows CI4's recommended directory layout
2. **Controllers**: Extend BaseController for shared functionality
3. **Views**: Organized in subdirectories by feature
4. **Routing**: Centralized route definitions in `Config/Routes.php`
5. **Data Separation**: JSON data file separate from controllers
6. **Assets**: Static files in public directory
7. **Security**: Front controller pattern prevents direct file access

## Quality Assurance

See `QA_CHECKLIST.md` for comprehensive testing guidelines covering:
- Pixel alignment & spacing
- Typography accuracy
- Responsiveness across devices
- Cross-browser compatibility
- SEO validation
- Core Web Vitals
- Lighthouse audit criteria
- Functional testing

## License

This project is for demonstration purposes.
