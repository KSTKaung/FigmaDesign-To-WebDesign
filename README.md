# Turn Figma Design Page to WebPage (CodeIgniter + Bootstrap)
Develop and design following Figma Design Page into Web Page.<br>
https://www.figma.com/file/rnqGoCJqAd7lPrPgYwkEmT/Test-Design?node-id=0%3A1&t=MvcfTYC4OogclTHU-1
## 🚀 Requirements
* PHP
* Web Browser
* Code editor (e.g., Visual Studio Code)
* Git (optional, for version control)

## 📥 Installation Steps
1. Download Dependencies
   * Download Bootstrap (v5) from the official website
   * Download PHP from the official Windows downloads page
2. Install PHP (Windows)
   1. Download the latest Thread Safe ZIP version of PHP
   2. Extract the ZIP file
   3. Rename the folder to:
     ```
     php
     ```
   4. Move the folder to:
   ```
    C:\php
   ```
3. Configure Environment Variables
   1. Search for “Environment Variables” in Windows
   2. Click Edit the system environment variables
   3. Click Environment Variables
   4. Under System Variables, select Path → click Edit
   5. Click New and add:
   ```
   C:\php
   ```
   6. Click OK to save all changes
4. Verify PHP Installation
   Open Command Prompt and run:
   ```
   php -v
   ```
   You should see the installed PHP version.
5. Configure PHP
   1. In C:\php, find:
   ```
   php.ini-development
   ```
   2. Rename it to:
   ```
   php.ini
   ```
   3. Open php.ini and enable the following extensions:
   ```
   extension=intl
   extension=mbstring
   ```
6. Run CodeIgniter Project
   Navigate to your project folder in terminal and run:
   ```
   php spark serve
   ```
   Then open your browser and go to:
   ```
   http://localhost:8080
   ```
## 🛠️ Tech Stack
* HTML5
* CSS3
* JavaScript
* Bootstrap 5
* CodeIgniter (PHP Framework)
## 📂 Project Structure (Basic)
```
│
├── app/                          # Application logic
│   ├── Config/
│   │   ├── App.php               # Base URL config
│   │   ├── Routes.php            # Route definitions
│   │   └── ...
│   │
│   ├── Controllers/
│   │   ├── BaseController.php
│   │   └── Home.php              
│   │
│   ├── Models/
│   │
│   ├── Views/
│   │   ├── layouts/              # 🔑 Master layout templates
│   │   │   └── main.php          # Base HTML with Bootstrap
│   │   │
│   │   ├── components/           # 🔑 Reusable UI parts
│   │   │   ├── navbar.php        #  Menu Bar
│   │   │
│   │   ├── pages/                # 🔑 Individual pages
│   │   │   ├── home.php        #  Home Page
│   │   │
│   │   └── errors/               # Error pages
│
├── public/                       # 🔑 Web root (point server here)
│   │
│   ├── assets/                   # All static files
│   │   │
│   │   ├── css/
│   │   │   ├── bootstrap.min.css # Bootstrap CSS
│   │   │   └── custom.css        # Your custom styles
│   │   │
│   │   ├── js/
│   │   │   ├── bootstrap.bundle.min.js  # Bootstrap JS
│   │   │   └── custom.js         # Your custom scripts
│   │   │
│   │   ├── images/               # Images include in web page
│   │   │   ├── badge.png
│   │   │   └── NavLogo.jpg
│   │   │   └── ...
│   │   │
│   │   └── fonts/                # custom fonts
│   │       └── Gotham
│   │
│   └── index.php                 # Entry point (do not edit)
│
├── system/                       # CodeIgniter core (do not edit)
├── writable/                     # Logs, cache, sessions
├── tests/                        # Unit tests
├── env                           # Environment config template
├── .env                          # Your environment config
├── composer.json
└── spark                         # CLI tool
```
## ⚠️ Notes
* Ensure PHP is properly added to PATH
* Do not upload sensitive files like `.env` to GitHub
* Make sure required PHP extensions are enabled
