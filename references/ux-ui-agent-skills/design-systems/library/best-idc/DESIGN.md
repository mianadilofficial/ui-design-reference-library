---
version: alpha
name: Best Internet Service Solution (Best IDC)
category: "Thai Brands"
description: "Thai web-hosting and data-center storefront built on stock Bootstrap 4.1.1: a black #000000 fixed navbar with lime #00ff00 brand text, a #f8f9fa content panel, Bootstrap system-font stack at 16px/24px with 32px and 28px weight-500 headings, Bootstrap blue #007bff links, teal #17a2b8 side panels, 3.2px to 4px corners and image-overlay cards."
colors:
  canvas: "#f8f9fa"
  page-body: "#ffffff"
  ink: "#212529"
  primary: "#00ff00"
  link-blue: "#007bff"
  link-hover: "#0056b3"
  nav-bg: "#000000"
  surface-dark: "#343a40"
  info-panel: "#17a2b8"
  success: "#28a745"
  danger: "#dc3545"
  footer-red: "#ff0000"
  panel-heading-purple: "#74008c"
  text-input-text: "#444746"
  hairline: "#dee2e6"
  card-border: "#00000020"
typography:
  display:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 32px
    fontWeight: 500
    lineHeight: 38.4px
  subheading:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 28px
    fontWeight: 500
    lineHeight: 33.6px
  body:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "-apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  input:
    fontFamily: arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 3.2px
  md: 4px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 56px
components:
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.body}"
  link-hover:
    textColor: "{colors.link-hover}"
    typography: "{typography.body}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.primary}"
    padding: 8px 16px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 5px 0px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    height: 20px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.link-blue}"
    rounded: "{rounded.md}"
    borderColor: "{colors.card-border}"
  card-overlay:
    backgroundColor: "{colors.surface-dark}"
    rounded: "{rounded.md}"
    borderColor: "{colors.card-border}"
  info-panel:
    backgroundColor: "{colors.info-panel}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.footer-red}"
---

## Overview

Best Internet Service Solution Co., Ltd. (Best IDC, formerly Best Thai Host, เบสไทยโฮส) sells web hosting, domain registration, co-location, dedicated servers, cloud servers, VPS, SSL certificates and Google Workspace (G Suite) licences to Thai customers. Its home page, `https://www.bestinternet.co.th/`, is a storefront in Thai with an English brand name: a fixed black navbar, a three-slide image carousel, a left column that mixes a "what is my IP" line, a domain search form, a price table, and "Recommend" product cards, and a right sidebar of teal panels (About, Service, sister websites), a DBD Registered badge and a Line QR code. The footer is a single scrolling marquee line in red with the company address, telephone, e-mail and Line ID.

The look is Bootstrap 4.1.1 with very little theming. Layout, spacing, radii, buttons, cards and the carousel are all stock, and the measured blue `#007bff`, grey `#6c757d` and the `.btn-success` green and `.btn-danger` red are Bootstrap's default palette, so they are not a brand identity. The site's own marks are a few inline choices: the pure-black navbar, lime `#00ff00` for the brand name and active nav item, red `#ff0000` for the footer marquee, and a purple `#74008c` heading on the teal sister-site panel.

The voice is a hosting reseller's: direct Thai product names ("บริการจด Domain name", "บริการ colocation server"), prices in baht per year or month ("เพียง 1,800 บาท /ปี", "เพียง 700 บาท /เดือน"), a red "HOT!" badge next to the .com price and a carousel line such as "Linux Cloud VPS เริ่มต้นที่ 428บาท/เดือน". The result is information-dense and uneven in polish: several promo cards place blue text directly on a purple-to-orange image.

## Colors

All values below were measured on the live page or its Bootstrap stylesheet.

- **Canvas `#f8f9fa`** is the main content panel (`main.container.bg-light`) and the sidebar background; it is the largest painted area. **Page body `#ffffff`** is the browser canvas outside the container and the background of cards, the price table and the search box.
- **Ink `#212529`** is Bootstrap's default body color and covers 812 weighted characters (headings, table text).
- **Link blue `#007bff`** colors by far the most text (2196 weighted characters: links, card copy, the sidebar service names). It is Bootstrap 4's `--primary`, so it reflects the framework, not a chosen brand color. On hover links darken to `#0056b3` and gain an underline (measured on 15 links).
- **Primary `#00ff00`** (lime) is the site's own accent: the "Best Internet" brand link beside the logo and the active "Home" item, both on the black navbar. The generator's own pick, `#007bff`, is kept as `link-blue`.
- **Nav `#000000`** is set inline on the navbar. **Surface dark `#343a40`** is Bootstrap's `bg-dark`, the background of the "Recommend" image cards (`card bg-dark text-white`).
- **Info panel `#17a2b8`** (Bootstrap `bg-info`) fills the About box and the sister-sites box in the sidebar; the sister-sites heading is `#74008c` on it.
- **Success `#28a745`** and **danger `#dc3545`** are the Search button and the `.com` extension select in the domain form.
- **Footer red `#ff0000`** is the marquee text. **Hairline `#dee2e6`** (58 borders) is the table and divider line; the card border is `#00000020`.

Bootstrap's blues and greens should not be read as brand color; the lime and black navbar is the only deliberate palette.

## Typography

The measured family is Bootstrap's system stack: `-apple-system, "system-ui", "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif` plus emoji fallbacks, on 3349 weighted characters, and `SFMono-Regular` on 25 (code spans). The head also links Google Fonts "Mitr" (weights 300, 400 and 700), but no measured element uses it and no web font was loaded, so Mitr is declared and unused. The search input uses `arial, sans-serif`.

| Token | Size / line | Weight | Where |
|---|---|---|---|
| display | 32px / 38.4px | 500 | carousel title ("Best Co-Location"), h2 |
| subheading | 28px / 33.6px | 500 | h3 heading |
| nav | 20px / 30px | 400 | navbar brand and links |
| body | 16px / 24px | 400 | paragraphs, table, card text |
| input | 16px / 24px | 400 | the search box, in Arial |

Measured sizes by weighted characters: 16px (2697), 20px (341), 24px (234), 14px (65), 32px (25) and 28px (12); weights 400 (2524), 500 (758), 700 (88) and 900 (4). Letter spacing is `normal` and text transform is `none` throughout. Thai text is not set in a Thai-specific face; it falls back to whatever the system provides.

Font substitutes: none required, because the stack consists of operating-system fonts. To rebuild, copy the stack as written.

## Layout

The page uses Bootstrap's `.container` (width 100%, 15px side padding; the stylesheet gives it `max-width: 720px` from 768px and `max-width: 1140px` from 1200px) holding a `.row` with `col-md-8 blog-main` and `col-md-4 blog-sidebar bg-light`. At the measured 1280px viewport the page is 4727px tall with the content panel centred on white.

Rows inside the main column: a carousel (three slides with previous and next controls and three indicator bars) on a full-width band under the navbar; the IP line, a bordered search box, the domain form (a "Best Domain" label cell, a text field with the placeholder "YourCompany", the `.com` select, a Search button); a four-column table of TLD prices (Domain Dot, New Price, Transfer, Renewal); a "Recommend" heading with product cards; and blog-style news items with "อ่านต่อ" and "View" links. The sidebar stacks the About box, a Service list of eight icon rows, the sister-sites box, the DBD badge and the Line QR code.

Spacing follows Bootstrap's scale: paddings of 12px (105 uses), 20px (29), 8px (23), 1px (20), 15px (15), 4px (12), 16px (8), 6px (3), 5px (1) and 56px (1). The navbar uses `8px 16px` padding and its links 5px vertical padding.

## Elevation & Depth

Resting elements are flat: the measured `boxShadow` list is empty. Separation comes from 1px hairlines (`#dee2e6`), the `#00000020` card border, panel color changes and photographs. The stylesheet corpus contains Bootstrap focus rings (`0 0 0 .2rem rgba(0,123,255,.25)` and `.5` for primary, `rgba(108,117,125,.5)` secondary, `rgba(40,167,69,.5)` success, `rgba(23,162,184,.5)` info) and a `0 3px 10px rgba(34, 25, 25, 0.4)` rule (15 uses), but none was measured on a visible element at rest.

The only measured state change besides link hover is the carousel's Previous and Next controls, which go from opacity 0.5 to 0.9 on hover. The navbar is `fixed-top`, so it floats over scrolled content.

## Shapes

Corners are small. Measured radii: 4px on 28 elements (Bootstrap's `.25rem`), `3px 3px 0px 0px` on 12 (image tops of cards), 3.2px on 10 and 3px on 2; the stylesheet corpus also holds 16px, 8px, 4.8px, 2px, 160px and 1px values. Buttons, the select and cards use 4px; the sidebar panels carry Bootstrap's `rounded` class. The logo is a small square image set to 35px by 35px in the HTML. Images in the service list are small square thumbnails; the carousel and product cards are full-bleed rectangles.

## Components

**Navbar (`nav`).** `navbar navbar-expand-md navbar-dark fixed-top` with inline `background-color: #000000`, 61px high at 1280px and 390px, padding `8px 16px`. The brand link is lime `#00ff00` at 20px with the 35px logo; items are Home (bold lime, current), About, Service (dropdown), Blog, Contact and Support (dropdown).

**Links (`link`, `link-hover`).** Blue `#007bff` text without underline; hover `#0056b3` with underline.

**Carousel.** Three slides with captions (the measured title is white 32px / 500; the visible slide in the capture shows blue caption text) and Previous and Next controls at 0.5 opacity that rise to 0.9; three indicator bars below.

**Domain search.** A white bordered search box with a magnifier icon (Arial 16px, `#444746` text, 20px tall), a "Best Domain" label cell, a text field, a red `.com` select (`btn btn-danger`) and a green Search button (`btn btn-success`) that carry Bootstrap's 4px radius.

**Price table.** `table table-hover` with centred columns and a red "HOT!" badge beside `.com`; prices read "฿450.00 THB", "฿650.00 THB", "฿500.00 THB" and "฿700.00 THB".

**Cards (`card`, `card-overlay`).** Bootstrap `.card` (white, 1px `#00000020` border, 4px radius) holding an image top and a text body; the "Recommend" items use `card bg-dark text-white` with the image as `card-img` and an overlay of blue text.

**Sidebar panels (`info-panel`).** Teal `bg-info` boxes with italic headings ("About", "เว็บไซต์ในเครือ") and links.

**Footer (`footer`).** A `<marquee scrollamount="4">` containing red text, then a "Back to top" link. The Facebook customer-chat widget declared in the page (`fb-customerchat`) is a third-party control and is not part of the design.

## Design System Architecture

Best IDC publishes no brand guidelines or design system of its own; the home page links none. The system is Bootstrap 4.1.1: the page loads `https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css` and `.../js/bootstrap.min.js`, jQuery 3.3.1 slim and Popper 1.14.3, plus two jQuery UI theme sheets from `jQueryAssets/`. The measured `:root` custom properties (`--primary: #007bff`, `--secondary: #6c757d`, `--success: #28a745`, `--danger: #dc3545`, `--info: #17a2b8`, `--dark: #343a40`, `--light: #f8f9fa`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`) are Bootstrap's own variables (the stylesheet header reads "Bootstrap v4.1.1").

Class names show how the page is composed: `blog-main`, `blog-sidebar`, `blog-post`, `blog-footer`, `card`, `card-img-overlay`, `btn-group`, `btn-sm`, `btn-outline-secondary`, `bg-light`, `bg-dark`, `bg-info`, `rounded`, `box-shadow`, `font-italic`. Theming is done through inline `style` attributes (`color: lime`, `color: darkgreen`, `color: chartreuse`, `color: mediumblue`, `color: red`, `background-color: #000000`) rather than a custom stylesheet or tokens. A rebuild should therefore start from Bootstrap 4.1.1 and add these inline accents.

## Do's and Don'ts

Do
- Start from Bootstrap 4.1.1 defaults for layout, buttons, cards, tables and the carousel.
- Keep the navbar pure black with a lime brand name and active item.
- Use the system font stack at 16px / 24px for text and 32px or 28px at weight 500 for headings.
- Use `#17a2b8` panels with italic headings for sidebar groups and `#dee2e6` hairlines between items.
- Show prices in baht with the "HOT!" badge for the featured TLD.

Don't
- Do not describe `#007bff`, `#28a745` or `#dc3545` as brand colors; they are Bootstrap's defaults.
- Do not put text on a busy gradient image without an overlay; the measured promo cards place `#007bff` text on a purple-to-orange image and the contrast is poor.
- Do not add the Facebook chat widget or the scrolling marquee to a reproduction as brand components.
- Do not add shadows or pill shapes; none was measured at rest.
- Do not treat Mitr as the brand face; the page links it but no measured element uses it.

## Responsive Behavior

The head declares `<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">` and the navbar carries `navbar-expand-md` plus a `navbar-toggler` button (`data-toggle="collapse"`), and Bootstrap's stylesheet declares that the expanded navbar starts at `min-width: 768px` (`--breakpoint-md: 768px`). The columns are declared as `col-md-8` and `col-md-4`, the product grid as `col-md-6` and `col-lg-4`.

The 390px mobile pass measured: the navbar is 390px wide and 61px high with the same lime brand text on `#000000`; the carousel title stays 32px / 38.4px at weight 500; the body paragraph is 16px / 24px and 318px wide (192px high); and the size distribution is unchanged (16px for 2654 weighted characters). How the sidebar and product grid reflow at that width is not measured, and no mobile capture image exists.

## Iteration Guide

1. Load Bootstrap 4.1.1 and set the page on a `.container` with `col-md-8` main and `col-md-4` sidebar columns.
2. Apply a `#000000` fixed-top navbar and color the brand and active item `#00ff00`.
3. Put content on `#f8f9fa` and cards on `#ffffff` with a 1px `#00000020` border and 4px radius; keep body text `#212529` and links `#007bff` with a `#0056b3` underline on hover.
4. Use teal `bg-info` sidebar panels with italic headings, a four-column hover table for pricing, and image cards for products.
5. Keep success and danger buttons for the domain form only, and keep the footer as a single red line.
6. Verify any added value against `web/data/extracted/best-idc.json` before adding it as a token.
