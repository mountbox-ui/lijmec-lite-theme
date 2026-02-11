# LijMec WordPress Theme - Installation Guide

## Quick Start Guide

This guide will help you convert your static HTML website into a fully functional WordPress theme.

---

## Prerequisites

Before you begin, make sure you have:

1. **WordPress Installation**: A working WordPress installation (version 5.0 or higher)
2. **FTP/File Access**: Access to your WordPress files via FTP, cPanel, or local file system
3. **Admin Access**: WordPress admin panel login credentials

---

## Installation Steps

### Step 1: Prepare Your WordPress Installation

1. **Access your WordPress installation directory**
   - If using local development: Navigate to your WordPress folder
   - If using hosting: Use FTP client (FileZilla, etc.) or cPanel File Manager

2. **Navigate to the themes directory**
   ```
   wp-content/themes/
   ```

### Step 2: Upload the Theme

**Option A: Direct Upload (Recommended)**

1. Copy the entire `Website` folder to `wp-content/themes/`
2. Rename it to `lijmec-theme` (optional, but recommended)
3. Your theme path should be: `wp-content/themes/lijmec-theme/`

**Option B: ZIP Upload via WordPress Admin**

1. Compress the `Website` folder into a ZIP file
2. Log in to WordPress Admin Panel
3. Go to **Appearance → Themes**
4. Click **Add New** → **Upload Theme**
5. Choose your ZIP file and click **Install Now**

### Step 3: Activate the Theme

1. Log in to your WordPress Admin Panel
2. Go to **Appearance → Themes**
3. Find "LijMec Wire Harness" theme
4. Click **Activate**

### Step 4: Configure Theme Settings

#### Set Up Contact Information

1. Go to **Appearance → Customize**
2. Click on **Contact Information**
3. Enter your:
   - Primary Email: `info@lijmec.com`
   - Secondary Email: `lijmec@gmail.com`
   - Phone Number: `+91 99958 22922`
   - Address: Your complete business address
4. Click **Publish** to save

#### Configure Social Media Links

1. In the Customizer, click on **Social Media Links**
2. Enter your social media URLs:
   - Facebook URL
   - YouTube URL
   - Instagram URL
   - LinkedIn URL
3. Click **Publish** to save

#### Upload Logo

1. In the Customizer, click on **Site Identity**
2. Click **Select Logo** and upload your logo image
3. Adjust the logo size if needed
4. Click **Publish** to save

### Step 5: Set Up Homepage

1. Go to **Pages → Add New**
2. Create a new page titled "Home" (you can leave it blank)
3. Click **Publish**
4. Go to **Settings → Reading**
5. Select **A static page** under "Your homepage displays"
6. Choose "Home" from the dropdown
7. Click **Save Changes**

The homepage will automatically display all the content from your original HTML design.

### Step 6: Test Your Theme

1. Visit your website's homepage
2. Check that all sections are displaying correctly:
   - Hero section with images
   - About Us section
   - What We Offer section
   - Why Choose Us section
   - Industries section
   - Counter/Statistics section
   - Contact form
3. Test the contact form by submitting a test message
4. Check your email for the contact form notification

---

## Additional Configuration

### Creating Blog Posts

1. Go to **Posts → Add New**
2. Enter your post title and content
3. Add a featured image (recommended)
4. Click **Publish**

### Creating Pages

1. Go to **Pages → Add New**
2. Enter your page title and content
3. Add a featured image (optional)
4. Click **Publish**

### Managing Services (Custom Post Type)

1. Go to **Services → Add New**
2. Enter service title and description
3. Add a featured image
4. Click **Publish**

### Managing Industries (Custom Post Type)

1. Go to **Industries → Add New**
2. Enter industry title and description
3. Add a featured image
4. Click **Publish**

---

## File Structure Verification

After installation, your theme directory should contain:

```
wp-content/themes/lijmec-theme/
├── css/
│   └── main.css
├── js/
│   ├── lib/
│   ├── career-tabs.js
│   └── script.js
├── images/
│   └── images/
├── fonts/
├── functions.php
├── style.css
├── header.php
├── footer.php
├── index.php
├── front-page.php
├── single.php
├── page.php
├── 404.php
├── search.php
└── README.md
```

---

## Troubleshooting

### Theme Not Appearing in WordPress

**Problem**: Theme doesn't show up in Appearance → Themes

**Solution**:
1. Check that `style.css` exists in the theme root directory
2. Verify the theme header in `style.css` is properly formatted
3. Ensure folder permissions are correct (755 for directories, 644 for files)

### Images Not Loading

**Problem**: Images from the original HTML are not displaying

**Solution**:
1. Verify the `images` folder was uploaded correctly
2. Check that image paths in templates use `get_template_directory_uri()`
3. Clear your browser cache

### Contact Form Not Working

**Problem**: Contact form submissions not sending emails

**Solution**:
1. Check your WordPress email settings
2. Install an SMTP plugin like "WP Mail SMTP" for reliable email delivery
3. Verify the email address in **Appearance → Customize → Contact Information**

### Styles Not Applying

**Problem**: Website looks unstyled or broken

**Solution**:
1. Check that `css/main.css` exists and was uploaded correctly
2. Clear your browser cache (Ctrl+F5 or Cmd+Shift+R)
3. Check browser console for any CSS loading errors

---

## Performance Optimization (Optional)

### Recommended Plugins

1. **WP Super Cache** or **W3 Total Cache** - For caching
2. **Autoptimize** - For CSS/JS minification
3. **Smush** - For image optimization
4. **WP Mail SMTP** - For reliable email delivery

### Additional Optimizations

1. Enable GZIP compression on your server
2. Use a CDN for static assets
3. Optimize images before uploading
4. Enable browser caching

---

## Support & Resources

### Getting Help

- **Theme Documentation**: See README.md in theme folder
- **WordPress Codex**: https://codex.wordpress.org/
- **WordPress Support**: https://wordpress.org/support/

### Contact

- **Email**: info@lijmec.com
- **Developer**: MountBox - https://mountbox.in

---

## Next Steps

After successful installation:

1. ✅ Create essential pages (About, Services, Contact, etc.)
2. ✅ Add your first blog post
3. ✅ Configure SEO settings (use Yoast SEO plugin)
4. ✅ Set up Google Analytics
5. ✅ Create a backup of your site
6. ✅ Test on different devices and browsers

---

## Backup Recommendation

Before making any changes to your theme:

1. Install a backup plugin (UpdraftPlus, BackupBuddy, etc.)
2. Create a full backup of your site
3. Store the backup in a safe location

---

**Congratulations!** Your LijMec WordPress theme is now installed and ready to use! 🎉
