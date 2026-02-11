# LijMec Wire Harness WordPress Theme

A modern, professional WordPress theme for LijMec Wire Harness - Precision Wire Harness Engineering for Critical Industries.

## Features

- **Modern Design**: Clean, professional design with dark mode support
- **Fully Responsive**: Works perfectly on all devices and screen sizes
- **Custom Post Types**: Services and Industries custom post types
- **Contact Form**: Built-in contact form with email notifications
- **Theme Customizer**: Easy customization of contact information and social media links
- **SEO Optimized**: Proper semantic HTML and meta tags
- **Performance Optimized**: Fast loading with optimized assets
- **Translation Ready**: Fully translatable with .pot file support

## Installation

1. **Upload the theme**:
   - Copy the entire `Website` folder to your WordPress installation's `wp-content/themes/` directory
   - Rename the folder to `lijmec-theme` if desired

2. **Activate the theme**:
   - Log in to your WordPress admin panel
   - Go to Appearance → Themes
   - Find "LijMec Wire Harness" and click "Activate"

3. **Configure the theme**:
   - Go to Appearance → Customize
   - Configure your contact information, social media links, and other settings
   - Upload a custom logo if desired

## Theme Structure

```
lijmec-theme/
├── css/                    # Stylesheets
│   └── main.css           # Main theme styles
├── js/                     # JavaScript files
│   ├── lib/               # Third-party libraries
│   ├── career-tabs.js     # Career tabs functionality
│   └── script.js          # Main theme scripts
├── images/                 # Theme images and assets
├── fonts/                  # Custom fonts
├── functions.php           # Theme functions and features
├── style.css              # Theme stylesheet (required by WordPress)
├── header.php             # Header template
├── footer.php             # Footer template
├── index.php              # Main template file
├── front-page.php         # Homepage template
├── single.php             # Single post template
├── page.php               # Page template
└── README.md              # This file
```

## Customization

### Contact Information

Go to **Appearance → Customize → Contact Information** to set:
- Primary email address
- Secondary email address
- Phone number
- Physical address

### Social Media Links

Go to **Appearance → Customize → Social Media Links** to set:
- Facebook URL
- YouTube URL
- Instagram URL
- LinkedIn URL

### Logo

Go to **Appearance → Customize → Site Identity** to:
- Upload a custom logo
- Set site title and tagline
- Upload a site icon (favicon)

## Custom Post Types

### Services
Create and manage your service offerings:
- Go to **Services → Add New** in the admin menu
- Add title, description, and featured image
- Services can be displayed on custom pages

### Industries
Showcase the industries you serve:
- Go to **Industries → Add New** in the admin menu
- Add title, description, and featured image
- Industries can be displayed on custom pages

## Contact Form

The homepage includes a built-in contact form that:
- Validates user input
- Sends email notifications to the configured email address
- Includes spam protection with WordPress nonces
- Provides user feedback on submission

## Development

### Requirements
- WordPress 5.0 or higher
- PHP 7.4 or higher
- Modern browser with JavaScript enabled

### Technologies Used
- HTML5
- CSS3 (Tailwind CSS)
- JavaScript (ES6+)
- GSAP (Animation library)
- Lenis (Smooth scroll)
- WordPress Theme API

## Support

For support, please contact:
- Email: info@lijmec.com
- Website: https://lijmec.com
- Developer: MountBox (https://mountbox.in)

## Credits

- **Design & Development**: MountBox
- **Client**: LijMec Wire Harness
- **Animation Libraries**: GSAP, Lenis
- **Icons**: Custom SVG icons

## License

This theme is licensed under the GNU General Public License v2 or later.

## Changelog

### Version 1.0
- Initial release
- Homepage with all sections
- Custom post types for Services and Industries
- Contact form functionality
- Theme customizer options
- Responsive design
- Dark mode support
