---
version: alpha
name: AstraZeneca
category: "Pharma"
description: "AstraZeneca global home page: white #ffffff canvas, slate ink #3c4242, plum #830051 buttons with 2px radius, navy #003865 stat tile, dark #1b1b1b footer, lexia serif headlines (42px light, 28px, 23px) with positive tracking, Helvetica Neue navigation, science and people photography."
colors:
  canvas: "#ffffff"
  ink: "#3c4242"
  primary: "#830051"
  on-primary: "#ffffff"
  accent-magenta: "#d0006f"
  surface-navy: "#003865"
  surface-charcoal: "#1b1b1b"
  surface-soft: "#f8f8f8"
  ink-border: "#d2d2d2"
  ink-black: "#000000"
typography:
  display:
    fontFamily: lexia, Times, "Times New Roman", serif
    fontSize: 42px
    fontWeight: 300
    lineHeight: 48px
    letterSpacing: 1.1px
  display-mobile:
    fontFamily: lexia, Times, "Times New Roman", serif
    fontSize: 30px
    fontWeight: 300
    lineHeight: 36px
    letterSpacing: 0.9px
  heading:
    fontFamily: lexia, Times, "Times New Roman", serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36.5217px
    letterSpacing: 1.05px
  subheading:
    fontFamily: lexia, Times, "Times New Roman", serif
    fontSize: 23px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: 1.05px
  body:
    fontFamily: lexia, Times, "Times New Roman", serif
    fontSize: 18px
    fontWeight: 300
    lineHeight: 26px
    letterSpacing: 0.3px
  button:
    fontFamily: lexia, Times, "Times New Roman", serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 20px
    letterSpacing: 1.4px
  nav:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: lexia, Times, "Times New Roman", serif
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
    letterSpacing: 0.5px
rounded:
  xs: 2px
  pill: 9999px
spacing:
  s1: 3px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 15px
  s7: 17px
  s8: 20px
  s9: 25.59px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 45px 15px 15px
    height: 52px
    borderColor: "{colors.ink}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 45px 15px 15px
    height: 72px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 12px 107px 12px 17px
    height: 44px
  footer:
    backgroundColor: "{colors.surface-charcoal}"
    textColor: "{colors.canvas}"
    padding: 40px 0px 10px
---

## Overview

The measured site is astrazeneca.com, titled "AstraZeneca - Research-Based BioPharmaceutical Company". The home page opens with a thin white header (the winged-logo wordmark at the left, "AstraZeneca Websites", "Global site" and a search icon at the right), a one-row menu (What science can do, R&D, Our therapy areas, Our company, Careers, Investors, Media, Sustainability, Partnering) and a hero in which the h1 "What science can do" is set in light italic serif over a photograph of a researcher at a microscope beside a blue DNA visual.

Below, the page reads as a magazine: "Trending story" and "Featured articles" columns with article thumbnails and plum category tags ("Technologies", "Articles"); a plum "Keep up to date with the latest news" button; a large portrait-and-quote module (a pull quote attributed to an executive); an inclusion photograph; a navy tile reading "We have 183 projects in our pipeline" with a "View pipeline" link; a cell-therapy illustration and a research-centre photograph with grey caption bars; a sustainability panel; a media-centre panel; and a dark footer with "AstraZeneca Websites", "Resources", "Quick links" and social icons.

The voice is scientific and humane at once: headlines name the topic plainly ("Heart failure and impaired kidney function: Understanding the cardiorenal connection"), the hero line is a short idea, and the pipeline tile shows a number first. Cookie overlays (CookieReportsOverlay and CookieReportsBannerAZ) were hidden for measurement and are not brand UI.

## Imagery and Voice

Imagery splits into two registers: scientific visuals (a researcher at a microscope, a DNA strand, a rendered cell and bone illustration in pink tones, a laboratory building with a faceted glass facade) and documentary photographs of patients, clinicians and staff in natural light. Each image sits in a plain rectangle, often with a one- or two-line italic caption in grey beneath, followed by a circled chevron. Category labels are italic and plum. Copy leans on plain nouns and verbs, short quoted statements from named executives, and call-to-action phrases such as "Learn about our cell therapy ambition", "Explore all our science centres" and "View pipeline".

## Colors

- **Canvas** `#ffffff` (1,655 area units). **Ink** `#3c4242`, a slate, covers 985 measured characters and 551 area units (dark blocks). White covers 793 characters on photography and dark areas.
- **Primary** `#830051`, a plum: the fill of the "Keep up to date with the latest news" button (52px tall, white text, border 1px solid #3c4242) and the color of category tags and the pull-quote mark (28 characters of text).
- **Accent magenta** `#d0006f` appears on 6 characters and on focus rings (`0 0 0 2px #d0006f`, 4 uses); the body element's child colors also list #d9338c and #4f5757.
- **Surface navy** `#003865` (87 area units) fills the pipeline tile; **surface charcoal** `#1b1b1b` (474) the footer; **surface soft** `#f8f8f8` (58); **ink border** `#d2d2d2` (79 characters of text and a 1px ring).
- Black `#000000` is used on 31 characters, including the mobile h1.

The browser default link color #0000ee appeared on a nav link and is not a brand color; it is not a token. The site declares no root custom properties (rootVars empty), so these colors come from rendered elements.

## Typography

Lexia is the brand serif (weights 200, 300, 400, 700 and italics) used for 1,136 characters, and "Helvetica Neue" for 839 (the menu and small labels). An icon font, az-webfont, is also loaded.

- Display (h1): lexia 300, 42px / 48px, letter-spacing 1.1px. Mobile: 30px / 36px, 0.9px.
- Heading (h2 "Trending story"): lexia 400, 28px / 36.5217px, 1.05px; on mobile the h2 measured 24px / 29.7143px.
- Subheading (article titles): lexia 400, 23px / 30px, 1.05px.
- Body: lexia 300, 18px / 26px, 0.3px.
- Button: lexia 700 (the capture shows the label in bold italic), 16px / 20px, 1.4px.
- Nav: Helvetica Neue 16px / 20px. Input: lexia 300 14px / 20px, 0.5px.
- Small sizes of 10px and 11px account for 755 characters (tags, captions, legal).

Font substitutes: lexia is a licensed face; use a readable slab-like serif (such as Merriweather Light) for lexia and Helvetica or Arial for the nav.

## Layout

Page height is 2,688px at 1280px in this capture. The hero is full width with text at the lower left. Beneath it is a two-column zone (a large image and a list of article rows with 200px-wide thumbnails) separated from a modular grid by a thin horizontal rule. The grid mixes a wide portrait-quote card with a narrower photograph, then a row of a navy tile, a wide image and a caption card, then two panels. Spacing steps measured: 3, 8, 10, 12, 14, 15, 17, 20, 25.59 and 30px; the footer padding is 40px 0px 10px.

## Elevation & Depth

Shadows are light: `0 1px 3px 0 rgba(27,27,27,.07), 0 1px 0 1px rgba(235,235,235,.5)` (5 uses) on cards, ring-style shadows for focus (`0 0 0 2px #d0006f`, `0 0 0 2px #8a8e8e`, `0 0 0 1px #d2d2d2`), and `0 0 6px 2px #333` (2). Most elements (18) have no shadow. Captions sit on translucent grey bars over photography instead of shadows.

## Shapes

Measured radii: 5px (7 uses), 3px (6), 2px (4), 24px (4), 0px (3), 40px (2), 28px (2) and 10px. Buttons are 2px; the tokens carry 2px and a 9999px pill. Circular icon buttons (the outlined arrows and social icons) are round. Photography is rectangular.

## Components

- **Primary button:** #830051 fill, white lexia 700 16px with 1.4px tracking, 52px tall, 2px radius, padding 15px 45px 15px 15px (room for a chevron), border 1px solid #3c4242.
- **Secondary (outlined) button** ("Explore our approach to sustainable healthcare"): transparent, ink text and border, 72px tall, same radius and padding.
- **Text input:** white, lexia 14px, 44px tall, padding 12px 107px 12px 17px.
- **Category tag:** small plum italic text under article titles.
- **Stat tile:** navy, white italic lead text, large number, "View pipeline" link with a circled chevron.
- **Footer:** #1b1b1b with white text, padding 40px 0px 10px, and round social icons.

## Design System Architecture

No public design system or brand guideline was found on the pages opened (astrazeneca.com home via extraction); the page links to none. The site has no root custom properties, so the de-facto system is its component CSS: a lexia serif type scale with letter-spacing between 0.3px and 1.4px, a plum and slate palette, and Helvetica Neue for the navigation. The az-webfont icon font supplies glyphs, and the skip links ("Skip to content", "Skip to navigation", "Skip to footer") are in the measured text, showing accessibility entry points.

## Do's and Don'ts

- Do set headlines in lexia with generous tracking; use light weight (300) for the largest titles.
- Do use plum #830051 for the primary action and for category tags.
- Do pair scientific imagery with portraits of people.
- Do use the navy tile for numerical facts.
- Don't use #0000ee; it is a browser default link color.
- Don't show cookie overlays as brand UI.
- Don't round buttons beyond 2px.

## Responsive Behavior

A 390px mobile pass measured: h1 30px / 36px in black (#000000) at 0.9px, and h2 24px / 29.7143px, both in 350px wide boxes. Menu form, column counts and image sizing on mobile: not measured. Breakpoints: not measured.

## Iteration Guide

1. White canvas, #3c4242 ink, #830051 for the single primary button.
2. lexia 300 at 42px for hero titles, 28px and 23px for sections and articles, 18px body.
3. Build the grid as photograph-led modules with caption bars and one navy fact tile.
4. Footer in #1b1b1b.
5. Run `node web/scripts/verify-designs.mjs --slug=astrazeneca`, then measure mobile before documenting it.
