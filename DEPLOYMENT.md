# Deployment Guide - InfinityFree Hosting

This guide will help you deploy the IronPDF for C++ CodeIgniter 4 project to InfinityFree hosting.

## Prerequisites

- InfinityFree hosting account
- FTP client (FileZilla recommended)
- Your project files ready for upload

## Step 1: Prepare Your Project for Production

### 1.1 Update Environment Configuration

Create or update your `.env` file with production settings:

```env
# ENVIRONMENT
CI_ENVIRONMENT = production

# APP
app.baseURL = 'https://ironpdf.42web.io/public/'
app.indexPage = ''

# DATABASE (if needed)
# database.default.hostname = localhost
# database.default.database = your_database_name
# database.default.username = your_database_user
# database.default.password = your_database_password
# database.default.DBDriver = MySQLi
```

### 1.2 Update App Configuration

Edit `app/Config/App.php`:

```php
public string $baseURL = 'https://ironpdf.42web.io/public/';
public string $indexPage = '';
```

## Step 2: Upload Files to InfinityFree

### 2.1 File Structure on Server

InfinityFree uses `htdocs` as the web root. You need to structure your files as follows:

```
htdocs/
├── .htaccess          (from public folder)
├── index.php          (from public folder)
├── favicon.ico        (from public folder)
├── robots.txt         (from public folder)
├── css/               (from public folder)
├── assets/            (from public folder)
├── app/               (from root)
├── writable/          (from root)
├── vendor/            (from root - if using Composer)
├── .env               (from root)
└── spark              (from root)
```

### 2.2 Upload Process

1. **Connect via FTP:**
   - Host: `ftpupload.net` (or your specific FTP host)
   - Username: Your InfinityFree username
   - Password: Your InfinityFree password
   - Port: 21

2. **Upload all files from `public/` folder to `htdocs/`:**
   - `index.php`
   - `.htaccess`
   - `favicon.ico`
   - `robots.txt`
   - `css/` folder
   - `assets/` folder

3. **Upload project folders to `htdocs/`:**
   - `app/` folder
   - `writable/` folder
   - `vendor/` folder (if you have it)
   - `.env` file
   - `spark` file

## Step 3: Update Path Configuration

Since the files are now in a different structure, you need to update the paths.

### 3.1 Edit `index.php` in htdocs

Update the paths at the top of `htdocs/index.php`:

```php
// Path to the front controller (this file)
define('FCPATH', __DIR__ . DIRECTORY_SEPARATOR);

// Ensure the current directory is pointing to the front controller's directory
chdir(FCPATH);

/*
 *---------------------------------------------------------------
 * BOOTSTRAP THE APPLICATION
 *---------------------------------------------------------------
 */

// Location of the Paths config file.
$pathsConfig = FCPATH . 'app/Config/Paths.php';
require realpath($pathsConfig) ?: $pathsConfig;

$paths = new Config\Paths();

// Location of the framework bootstrap file.
$bootstrap = $paths->systemDirectory . '/bootstrap.php';
require realpath($bootstrap) ?: $bootstrap;
```

### 3.2 Edit `app/Config/Paths.php`

Update the paths to reflect the new structure:

```php
<?php

namespace Config;

class Paths
{
    public string $systemDirectory = __DIR__ . '/../../vendor/codeigniter4/framework/system';
    public string $appDirectory = __DIR__ . '/..';
    public string $writableDirectory = __DIR__ . '/../../writable';
    public string $testsDirectory = __DIR__ . '/../../tests';
    public string $viewDirectory = __DIR__ . '/../Views';
}
```

## Step 4: Configure .htaccess

Make sure your `.htaccess` file in `htdocs/` has the correct rewrite rules:

```apache
# Disable directory browsing
Options -Indexes

# Prevent access to .env file
<Files .env>
    Order allow,deny
    Deny from all
</Files>

# Rewrite rules
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /

    # Redirect Trailing Slashes...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_URI} (.+)/$
    RewriteRule ^ %1 [L,R=301]

    # Rewrite "www.example.com -> example.com"
    RewriteCond %{HTTPS} !=on
    RewriteCond %{HTTP_HOST} ^www\.(.+)$ [NC]
    RewriteRule ^ http://%1%{REQUEST_URI} [R=301,L]

    # Handle Front Controller...
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^ index.php [L]
</IfModule>

<IfModule !mod_rewrite.c>
    # If we don't have mod_rewrite installed, all 404's
    # can be sent to index.php, and everything works as normal.
    ErrorDocument 404 index.php
</IfModule>

# Disable server signature
ServerSignature Off
```

## Step 5: Set Folder Permissions

Set the correct permissions for the `writable` folder:

1. Right-click on `writable` folder in your FTP client
2. Set permissions to `755` or `777` (depending on server requirements)
3. Apply recursively to all subfolders

## Step 6: Test Your Deployment

1. Visit `https://ironpdf.42web.io/public`
2. Check if the home page loads correctly
3. Test all routes:
   - `/features`
   - `/about`
   - `/career`
   - `/products`
   - `/products/java`
   - `/products/python`
   - `/products/nodejs`

## Troubleshooting

### Issue: 404 Errors on All Pages

**Solution:** Check if `mod_rewrite` is enabled. If not, contact InfinityFree support or use `index.php` in URLs.

### Issue: CSS/Images Not Loading

**Solution:** 
1. Check that `baseURL` in `.env` and `app/Config/App.php` is correct
2. Verify all asset files are uploaded to the correct location
3. Check file permissions

### Issue: "Whoops!" Error Page

**Solution:**
1. Check `writable` folder permissions (should be 755 or 777)
2. Check error logs in `writable/logs/`
3. Verify `.env` file is uploaded and `CI_ENVIRONMENT` is set to `production`

### Issue: Blank Page

**Solution:**
1. Enable error reporting temporarily by editing `index.php`:
   ```php
   ini_set('display_errors', 1);
   error_reporting(E_ALL);
   ```
2. Check PHP version (should be 8.1 or higher)
3. Check if all required PHP extensions are installed

## Alternative: Using Subdirectory Structure

If you prefer to keep the standard CodeIgniter structure:

1. Upload entire project to `htdocs/ci-ironpdf/`
2. Create `.htaccess` in `htdocs/` to redirect to public folder:

```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^$ ci-ironpdf/public/ [L]
    RewriteRule (.*) ci-ironpdf/public/$1 [L]
</IfModule>
```

3. Update `baseURL` to `https://ironpdf.42web.io/public`

## Security Checklist

- [ ] `.env` file is protected (not accessible via browser)
- [ ] `CI_ENVIRONMENT` is set to `production`
- [ ] Debug mode is disabled
- [ ] `writable` folder has correct permissions
- [ ] Database credentials are secure (if using database)
- [ ] All sensitive files are outside web root or protected

## Performance Optimization

1. **Enable Caching:**
   Edit `app/Config/Cache.php` to use file-based caching

2. **Optimize Assets:**
   - Minify CSS files
   - Compress images
   - Enable Gzip compression in `.htaccess`

3. **Use CDN for External Libraries:**
   Already implemented for Bootstrap and fonts

## Support

If you encounter issues:
- Check InfinityFree documentation: https://forum.infinityfree.net/
- Review CodeIgniter 4 deployment guide: https://codeigniter.com/user_guide/installation/running.html
- Check server error logs in cPanel

---

**Last Updated:** January 2026
