---
version: alpha
name: The 1
category: "Thai Brands"
description: "The 1 (the1.co.th), Thailand's loyalty-points app site — near-black canvas (#0a0a0a) with off-white text (#f5f5f5), a single signal red (#dd1a22) on 3.56px-radius download buttons, the proprietary the_one_official family in Light, Regular and Bold, and phone-mockup storytelling in a Thai-first, app-download-led layout."
colors:
  canvas: "#0a0a0a"
  ink: "#f5f5f5"
  primary: "#dd1a22"
  on-primary: "#f5f5f5"
  surface-black: "#000000"
  ink-muted: "#aaaaaa"
  ink-white: "#ffffff"
  hairline: "#f5f5f540"
typography:
  display:
    fontFamily: "the_one_official_Bold, sans-serif"
    fontSize: 40px
    fontWeight: 400
  display-mobile:
    fontFamily: "the_one_official_Bold, sans-serif"
    fontSize: 20px
    fontWeight: 400
  body:
    fontFamily: "the_one_official_Bold, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: "the_one_official_Bold"
    fontSize: 19.84px
    fontWeight: 400
    lineHeight: 21.3334px
  nav:
    fontFamily: "the_one_official_Bold, sans-serif"
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 3.56px
  sm: 4px
  md: 8px
  cta: 3.56px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 8px
  s5: 14.22px
  s6: 16px
  s7: 21.33px
  s8: 24px
  s9: 32px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 14.2222px 21.3334px
    height: 50px
    boxShadow: "rgba(0, 0, 0, 0.08) 0px 1px 4px 0px, rgba(0, 0, 0, 0.04) 0px -1px 0px 0px inset"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
  nav-link:
    textColor: "{colors.ink-white}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview

The 1 is the loyalty and rewards programme whose site is the1.co.th; the page title is "The 1 | สะสมคะแนนและรับสิทธิพิเศษ แลกรีวอร์ดสุดว้าว" (collect points and receive special privileges, redeem amazing rewards). The home page is an app-download page. Its job is to tell visitors three things — receive rewards made for you, scan a QR code to collect points, redeem points for many rewards — and then to send them to the App Store, Google Play or Huawei AppGallery. The navigation reflects the product family: สิทธิประโยชน์สมาชิก (member benefits), แอป The 1 (The 1 app), The 1 แฟมิลี่ (The 1 Family), The 1 for Business and The 1 Ads.

The visual identity is dark and confident. A near-black canvas (#0a0a0a) carries off-white type (#f5f5f5), and one red (#dd1a22) marks the action: the "ดาวน์โหลดเลย" download button in the header and the "ดูรายละเอียด" (see details) button in the hero. The only interruption is a white hero band that holds a rotating campaign banner. The first slide at capture time advertised "The 1 EXCLUSIVE" with Central-group shopping bags, a model on an armchair and the two spending thresholds. The banner artwork is campaign content that changes; the black and red frame around it is the stable part.

Below the hero a dark section titled "The 1 Your Everyday Lifestyle App" shows three phone mockups side by side — a welcome screen, a QR code and barcode, a points-redemption screen — each with a Thai caption beneath. A final block pairs a phone held in a hand with the heading "ค้นหาสิทธิประโยชน์เพิ่มเติมได้ที่ แอป The 1", a white QR code and three store badges. The logo is the words "The" in white and a stylised numeral "1" with a red underline.

Microcopy voice is warm, short and exclamatory in Thai ("โหลดเลย!" is "download now!"), with English product names left as is. At capture time a cookie-consent card with a red accept button appeared at the lower right of the hero; it is a consent control and not part of the brand system.

## Colors

- **Canvas (#0a0a0a)** is the dominant background (by area) of the page: the nav, the app-story section and the footer.
- **Ink (#f5f5f5)** is the text colour on dark, used for headings, captions and the footer; it is also the label colour on the red button.
- **Primary red (#dd1a22)** is the fill of the download button and the hero button, the underline in the logo's numeral, and the red states inside the phone mockups.
- **Surface black (#000000)** is true black, measured as the text colour on the white hero band and as a minor background.
- **Ink white (#ffffff)** appears for nav link emphasis (the nav link token) and small white details.
- **Muted ink (#aaaaaa)** is the resting colour of navigation items and the footer's small links; on hover they turn to #f5f5f5.
- **Hairline (#f5f5f540)** is a 25%-opacity off-white used for separators such as the rule above the copyright line.

The stylesheet also defines a family of red variables (#dd1a22, #e21e28 and #e62428), a blue (#0e5be4), a cyan (#36bec1) and greys (#333, #6f6f6f, #d0d0d0, #2b2b2b). The home page shows only the first red in interface elements; the others are available theme variables rather than visible palette entries.

On the white hero band the text switches to black on white, and red buttons keep their white-ish label. Thus the system is a dark-first palette with a white campaign window and red as the only chromatic action colour.

## Typography

The site uses a proprietary family, **the_one_official**, loaded in three faces: Light (300), Regular (400) and Bold (700). The measured usage is Bold for most characters (839), Regular for 264 and Light for 75. Each face is loaded under its own family name (the_one_official_Bold, the_one_official_Regular, the_one_official_Light), so the computed font-weight reads 400 throughout and the frontmatter weights are 400; the visual weight comes from the Bold family. The stack is `the_one_official_Bold, sans-serif`.

Sizes: the section heading "Your Everyday Lifestyle App" is 40px, body captions are 24px with a 32px line height, the button label is 19.84px with a 21.3334px line height, navigation items are 16px, and footer links are 18px. On a 390px viewport the heading and body both become 20px. The hero's Thai headline uses a larger bold size over the white band. The theme variables list a size scale from 10px up to 55px (text-xs 12px, text-m 16px, text-l 18px, text-xl 30px, 48px and 55px).

Letter spacing is neutral for body. The hierarchy is shallow: a heading, a caption size and a small nav size, all in the same bold face, which gives the page a poster-like, app-store feel.

Font substitutes: the stack's own generic sans-serif fallback, at the same sizes, if the_one_official is not available.

## Layout

The desktop capture is 1280px wide and 2204px tall. A black header bar, measured at 98px high, holds the logo at left, five navigation items in the centre and the red download button at the right. Below it a white hero band with two columns: Thai headline, subhead and red button at left, campaign image at right, with a row of small carousel dots centred under the band. Then the black app-story section: a centred heading, three columns of phone mockups with captions, and a two-column block with the handheld phone at left and the download heading, QR code and store badges at right.

The footer has four columns — สมาชิก The 1, บริษัท, ติดตามเรา and ดาวน์โหลดแอป The 1 — plus the customer-service line "ศูนย์บริการสมาชิก The 1" with the number 0 2660 1000. A thin rule separates the copyright line ("© 2020 The 1, All Rights Reserved"), the privacy policy and terms links, and a language dropdown showing a Thai flag and "ไทย". The theme's free-form section max width is 1250px. Measured spacing steps are 2, 3, 4, 8, 14.22, 16, 21.33, 24, 32 and 48px, a 4/8-based rhythm.

## Elevation & Depth

Depth is limited. The red button carries a soft two-part shadow (rgba(0, 0, 0, 0.08) at 0 1px 4px plus a 4% inset line at the bottom), which makes it feel slightly raised against a dark canvas. Phone mockups provide the sense of layering: devices with their own bezels and shadows sit on a flat black section, and the last section fades from black into a dark grey toward the footer.

The cookie card at capture time was a white floating panel — a consent popup and not a system elevation level.

## Shapes

Corners are small and tight. The primary button uses a 3.56px radius (the `cta` token); other measured radii are 4px and 8px (the card radius). The white QR container and store badges have small rounded corners; the language dropdown has a thin outlined border, and the carousel dots are circles. The phone mockups use their own rounded device outlines. There are no pill buttons and no large radii on the home page.

Icons are simple white glyphs: Apple, Play and AppGallery store marks, three social icons in the footer, and a chevron in the language selector.

## Components

**Download button (primary).** Fill #dd1a22, label #f5f5f5 at 19.84px, padding 14.2222px 21.3334px, 50px high, 3.56px radius, soft shadow. It is paired with a small app icon at its left in the header and appears as plain text in the hero ("ดูรายละเอียด").

**Navigation.** Five items, 16px, muted #aaaaaa at rest and #f5f5f5 on hover, over the #0a0a0a bar.

**Hero carousel.** White band; left text block with a bold black Thai headline and a smaller bold subhead; right campaign banner; dot pagination.

**Phone-mockup columns.** Three centred devices with 24px captions beneath.

**Download block.** Heading at 24px to 40px scale, QR code on a white tile, and three store badges (App Store, Google Play, AppGallery).

**Footer.** Four link columns in muted grey with white headings, a customer-service number, social icons, a copyright row, and a language selector.

**Cookie card (excluded).** White consent panel with a red accept button — not a brand component.

## Design System Architecture

No public design system or brand guideline for The 1 was found among the pages I opened (https://www.the1.co.th/ and https://www.the1.co.th/th/about-us, which gave only the same app-programme summary). The site's own stylesheet exposes a token layer in root custom properties under two prefixes: `--vt-c-*` for colours (for example `--vt-c-red3: #dd1a22`, `--vt-c-black-1: #0a0a0a`, `--vt-c-black-soft: #222`, `--vt-c-white-mute: #f2f2f2`) and `--vt-the1-*` for sizes and typography (for example `--vt-the1-text-xl: 30px`, `--vt-the1-text-xxl: 48px`, `--vt-the1-size-xs: 4px`, `--vt-the1-free-form-section-max-width: 1250px`), with separate mobile variants for several text sizes.

This means the brand red in the interface (#dd1a22) and the canvas (#0a0a0a) correspond to named variables in the site's CSS, so the values in this file are the shipped token values. Swiper and a select-component library contribute extra variables (`--swiper-*`, `--vs-*`), which are third-party defaults and not brand tokens.

## Do's and Don'ts

Do build on near-black (#0a0a0a) with #f5f5f5 text, and use #dd1a22 only for the main action. Do keep button corners at 3.56px and the label in the bold brand face. Do tell the story with device mockups and short Thai captions, and end pages with a download block (QR plus store badges). Do reserve white for the campaign hero band and the QR tile.

Don't use more than one chromatic action colour. Don't use pill or large-radius buttons. Don't use shadows heavier than the button's soft shadow on dark surfaces. Don't introduce a lighter body weight than the brand's bold-first approach unless using the Light face for small details. Don't show the cookie card, its red accept button or the language dropdown as brand UI. Don't replace campaign images with decorative illustration; the site relies on product screens and campaign photography.

## Responsive Behavior

The extractor measured 1280px and 390px. At 390px the first-level heading and body text are both 20px, down from 40px and 24px on desktop, so the scale compresses to a single size. The theme variables contain explicit mobile versions for title, sub-title, paragraph and FAQ text sizes (for example a title of 1.75rem and a sub-title of 20px), which confirms that the system defines separate mobile type sizes.

The narrow-layout arrangement of the three phone mockups and the download block was not captured, so no stacking rules are claimed. The header download button and the five-item navigation are the desktop arrangement.

## Iteration Guide

1. Start from #0a0a0a canvas and #f5f5f5 text; use #aaaaaa for resting nav and footer links.
2. Use the_one_official Bold (or a bold sans-serif) for all text; 40px headings, 24px/32px captions, 16px nav, 19.84px button labels.
3. Make the single action button #dd1a22, 50px tall, 3.56px radius, 14.2222px 21.3334px padding with the soft shadow.
4. Use a white band only for the campaign hero; keep the rest black.
5. Show product value through phone mockups with short Thai captions.
6. End with a QR code and store badges (App Store, Google Play, AppGallery).
7. Use 25%-opacity off-white (#f5f5f540) for hairlines.
8. Exclude consent popups when copying the look; validate any new value against web/data/extracted/the1.json.
