# LijMec WordPress Theme - Quick Reference

## 🚀 Installation (3 Steps)

1. **Upload**: Copy `Website` folder to `wp-content/themes/`
2. **Activate**: Go to Appearance → Themes → Activate "LijMec Wire Harness"
3. **Configure**: Set homepage in Settings → Reading → Select "A static page"

---

## 📁 Important Files

| File | Purpose |
|------|---------|
| `style.css` | WordPress theme header |
| `functions.php` | Theme features & settings |
| `front-page.php` | Homepage template |
| `header.php` | Site header |
| `footer.php` | Site footer |
| `index.php` | Blog posts page |
| `single.php` | Single post view |
| `page.php` | Static pages |

---

## ⚙️ Settings Locations

### Contact Information
**Path**: Appearance → Customize → Contact Information
- Primary Email
- Secondary Email
- Phone Number
- Address

### Social Media
**Path**: Appearance → Customize → Social Media Links
- Facebook
- YouTube
- Instagram
- LinkedIn

### Logo
**Path**: Appearance → Customize → Site Identity
- Upload Logo
- Site Title
- Tagline

---

## 📝 Content Management

### Blog Posts
**Path**: Posts → Add New
- Title, content, featured image
- Categories and tags
- Publish or schedule

### Pages
**Path**: Pages → Add New
- Title, content, featured image
- Page attributes
- Publish or draft

### Services
**Path**: Services → Add New
- Custom post type for services
- Featured image recommended

### Industries
**Path**: Industries → Add New
- Custom post type for industries
- Featured image recommended

---

## 🎨 Customization Quick Tips

### Change Contact Email
```
Appearance → Customize → Contact Information → Primary Email
```

### Add Social Media Link
```
Appearance → Customize → Social Media Links → [Platform] URL
```

### Upload Logo
```
Appearance → Customize → Site Identity → Select Logo
```

### Create Menu
```
Appearance → Menus → Create New Menu → Assign to "Primary Menu"
```

---

## 📧 Contact Form

**Location**: Homepage (bottom section)

**Fields**:
- Name (required)
- Email (required)
- Place (optional)
- Message (optional)

**Email Sent To**: Primary email in Customizer

**Spam Protection**: WordPress nonces (built-in)

---

## 🔧 Common Tasks

### Set Homepage
```
1. Pages → Add New → Title: "Home"
2. Settings → Reading → Static Page → Select "Home"
3. Save Changes
```

### Add Blog Page
```
1. Pages → Add New → Title: "Blog"
2. Settings → Reading → Posts Page → Select "Blog"
3. Save Changes
```

### Create Navigation Menu
```
1. Appearance → Menus → Create Menu
2. Add pages/links
3. Assign to "Primary Menu"
4. Save Menu
```

---

## 🎯 Homepage Sections

All sections display automatically on the homepage:

1. ✅ Hero Section
2. ✅ About Us
3. ✅ What We Offer (4 services)
4. ✅ Why Choose Us (4 features)
5. ✅ Industries (6 cards)
6. ✅ Statistics (4 counters)
7. ✅ Contact Form

**No configuration needed** - they just work!

---

## 🛠️ Troubleshooting

### Images Not Loading?
- Check `images` folder uploaded correctly
- Clear browser cache (Ctrl+F5)

### Styles Not Working?
- Verify `css/main.css` exists
- Clear browser cache
- Check file permissions (644)

### Contact Form Not Sending?
- Install WP Mail SMTP plugin
- Configure SMTP settings
- Check spam folder

### Theme Not Showing?
- Verify `style.css` exists
- Check folder name
- Refresh themes page

---

## 📱 Responsive Breakpoints

- **Desktop**: 1920px+
- **Laptop**: 1366px - 1920px
- **Tablet**: 768px - 1366px
- **Mobile**: 320px - 768px

---

## 🔌 Recommended Plugins

### Essential
- **WP Mail SMTP** - Email delivery
- **Yoast SEO** - SEO optimization

### Performance
- **WP Super Cache** - Caching
- **Autoptimize** - Minification
- **Smush** - Image optimization

### Security
- **Wordfence** - Security
- **UpdraftPlus** - Backups

---

## 📞 Quick Support

**Email**: info@lijmec.com  
**Phone**: +91 99958 22922  
**Developer**: MountBox - mountbox.in

---

## 📚 Documentation Files

- **README.md** - Full documentation
- **INSTALLATION.md** - Installation guide
- **CONVERSION-SUMMARY.md** - Conversion details
- **QUICK-REFERENCE.md** - This file

---

## ✅ Pre-Launch Checklist

- [ ] Theme activated
- [ ] Homepage set
- [ ] Contact info configured
- [ ] Social links added
- [ ] Logo uploaded
- [ ] Test contact form
- [ ] Create first post
- [ ] Test on mobile
- [ ] Check all links
- [ ] Install SEO plugin
- [ ] Set up analytics
- [ ] Create backup

---

## 🎨 Color Scheme

The theme uses Tailwind CSS with custom colors:

- **Primary**: Red (#ef4444)
- **Background**: Dark theme
- **Text**: White/Light gray

To change colors, edit `css/main.css`

---

## 📊 File Sizes

- **Total Theme**: ~250KB (excluding images)
- **CSS**: ~246KB
- **JS**: ~24KB
- **PHP Templates**: ~50KB

---

## 🌐 Browser Support

- ✅ Chrome (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Edge (latest)

---

## 💡 Pro Tips

1. **Always backup** before making changes
2. **Use child theme** for customizations
3. **Test on staging** before going live
4. **Optimize images** before uploading
5. **Keep WordPress updated**
6. **Use strong passwords**
7. **Enable caching** for performance
8. **Monitor site speed** regularly

---

## 🔄 Update Process

When updating the theme:

1. Backup your site
2. Upload new theme files
3. Test thoroughly
4. Clear all caches

---

**Quick Start**: Upload → Activate → Configure → Done! 🎉

---

**Version**: 1.0  
**Last Updated**: February 11, 2026  
**Status**: Production Ready ✅
