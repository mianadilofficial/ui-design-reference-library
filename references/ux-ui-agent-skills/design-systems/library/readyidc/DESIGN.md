---
version: alpha
name: ReadyIDC
category: "Thai Brands"
description: "ReadyIDC is a Thai data-center and ISP site: dark navy hero imagery (#0e1131) with white type on a white canvas (#ffffff), grey ink (#54595f), an orange accent (#f15721), Prompt headings at 69.12px weight 600 with 1.4592px tracking, Sukhumvit Set buttons, translucent 10px-radius tab buttons and 16px-radius cards with deep shadows."
colors:
  canvas: "#ffffff"
  ink: "#54595f"
  primary: "#f15721"
  on-primary: "#ffffff"
  surface-2: "#0e1131"
  surface-3: "#fff0eb"
  ink-2: "#eaf0ff"
  ink-3: "#d7dcf0"
  ink-5: "#111111"
  ink-6: "#0f172a"
  hairline: "#0000001a"
  button-primary-bg: "#ffffff17"
  nav-text: "#000000"
  text-input-text: "#666666"
  text-input-border: "#ed3322"
typography:
  display:
    fontFamily: Prompt, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif
    fontSize: 69.12px
    fontWeight: 600
    lineHeight: 73.2672px
    letterSpacing: 1.4592px
  display-mobile:
    fontFamily: Prompt, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif
    fontSize: 32px
    fontWeight: 600
    lineHeight: 33.92px
    letterSpacing: 1.44px
  heading:
    fontFamily: Poppins, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 15.6px
    letterSpacing: 0.5px
  subheading:
    fontFamily: Prompt, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  body:
    fontFamily: Prompt, system-ui, -apple-system, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 20.8px
  button:
    fontFamily: "\"Sukhumvit Set\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 22.4px
  nav:
    fontFamily: "\"Sukhumvit Set\", Helvetica, Arial, sans-serif"
    fontSize: 25.6px
    fontWeight: 700
    lineHeight: 36px
  link:
    fontFamily: Prompt, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: 1.4592px
    textTransform: uppercase
  input:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 40px
rounded:
  xs: 3px
  sm: 5px
  md: 10px
  lg: 12px
  xl: 14px
  2xl: 16px
  3xl: 18px
  4xl: 24px
  pill: 9999px
spacing:
  s1: 5px
  s2: 6px
  s3: 8px
  s4: 8.8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 14.4px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 14.4px
    height: 45px
  button-secondary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 14.4px
    height: 45px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
    padding: 12.8px 19.2px
    boxShadow: rgba(241, 87, 33, 0.35) 0px 10px 24px 0px
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 5px 20px
    height: 34px
    borderColor: "{colors.text-input-border}"
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0.35) 0px 18px 42px 0px
  footer:
    textColor: "{colors.canvas}"
---

## Overview

The page title is "Home - ReadyIDC" and the page is bilingual: the header offers TH and EN, and the visible copy mixes English headings with Thai paragraphs. ReadyIDC presents itself as a data center and internet service provider (ISP): the hero reads "THAI DATA CENTER UP TIME 99.99%", then the h1 "Core Infrastructure for Business", followed by "DATA CENTER & INTERNET SERVICE PROVIDER (ISP)" and a Thai sentence about more than 20 years of experience. A promotional slider introduces "READYIDC Edge DC 2", "Location: Srisamarn", "AI Ready" and a "Get Started" button. Below the hero, a deep indigo panel is titled "READYIDC EDGE DC 2 Srisamarn", then "New Updates from ReadyIDC", an event story ("Ready IDC @ Techsauce Global Summit 2026"), and two product cards, "ReadyIDC PaaS" and "AI-ReadyIDC".

The look is a technology-infrastructure aesthetic: a photograph of a server hall in blue and orange light behind white text, an orange action color, dark indigo gradient panels, and white content sections with orange headings.

## Colors

- **Canvas:** `#ffffff`, the dominant background area (2409) in the content sections.
- **Ink:** `#54595f`, the grey body color on white (470 characters). White `#ffffff` is the most-read text color (1796) because the hero and dark panels carry white type. Light blue-greys `#eaf0ff` (1053) and `#d7dcf0` (1011) are secondary text on dark panels.
- **Primary / accent:** `#f15721`, an orange used for headings ("READYIDC EDGE DC 2 Srisamarn", "New Updates from ReadyIDC", h3 "GPU VPS with Passthrough"), for the shadow under the orange buttons (`rgba(241, 87, 33, 0.35) 0px 10px 24px 0px`) and for button fills seen in the capture. `#fff0eb` is the pale orange tint.
- **Navy:** `#0e1131` (surface-2), with `#0f133b99` as the translucent card fill in the hero and `#0f172a` as a dark text value.
- **Translucent whites:** `#ffffff17` and `#ffffff0f` are the fills of the hero tab buttons; `#ffffff1f` is a card border; `#0000001a` is the hairline.
- **Form error / input border:** `#ed3322` (red) on the text input border.
- **Other:** `#111111`, `#666666` (input text), `#cfe0ff`, `#7a7a7a`, `#292978` (border), `#e626991f` (pink at low alpha).

The cookie "Manage consent" tab and the floating orange chat bubble in the capture are third-party or overlay controls and are not documented as brand UI.

## Typography

- **Display (h1):** Prompt, system-ui, -apple-system, "Segoe UI", Roboto, Arial, sans-serif; 69.12px, weight 600, line height 73.2672px, letter spacing 1.4592px; 32px / 33.92px with 1.44px on mobile.
- **Eyebrow heading (h2):** Poppins, 12px, weight 400, line height 15.6px, letter spacing 0.5px ("AI Ready • Edge Data Center").
- **Subheading (h3):** Prompt 16px, weight 500, line height 19.2px, in orange.
- **Body:** Prompt 13px, weight 400, line height 20.8px.
- **Button:** "Sukhumvit Set", Helvetica, Arial, sans-serif; 14px, weight 700, line height 22.4px.
- **Navigation:** Sukhumvit Set 25.6px weight 700 (the mobile menu items), line height 36px.
- **Link ("CONTACT US"):** Prompt 16px, weight 700, uppercase, letter spacing 1.4592px.
- **Input:** Prompt 16px, weight 400, line height 40px.

Prompt carries 6935 characters, Sukhumvit Set 294, Poppins 89. Prompt and Poppins are Google fonts with Thai coverage (Prompt includes Thai script); Sukhumvit Set is a Thai typeface. By size: 16px (4323), 13px (1172), 14px (594), 22px (212), 15px. Weights: 400 (5819), 800, 600, 500, 300, 700, 900.

## Layout

The desktop pass measured 1280px wide, 6547px tall. The header is transparent over the hero: logo at left, then HOME, ABOUT US, PRODUCTS & SERVICES (with a dropdown caret), NEWS & BLOG, PAYMENT, CONTACT US, a language switcher (TH / EN), a pill search field and a "SIGN IN" outlined pill (1px solid white, radius 50px, 34px high). The hero is a split layout: headline, description, two buttons (CONTACT US filled orange, OUR PRODUCT outlined) and a row of certification badges at left; at right a tab strip (GPU VPS, Promotion Presale, Enterprise Cloud, Vistit Service, Promotion Domain .ai, Proxmox VE Subsc.) above a rounded promotional card and a text card.

Content sections: a rounded dark indigo panel with an image at left and bullets with check icons at right; a news section headed with an orange title and a thin rule; a photo carousel; two white cards with orange titles. Gaps measured: 10px (28), 12px, 14px, 5px, 8px, 36px, 15px, 64px. Paddings: 14px (68), 10px (52), 28px (36), 15px, 14.4px, 8.8px, 18px.

## Elevation & Depth

Shadows are a strong part of this site: `rgba(16, 24, 40, 0.08) 0px 12px 30px 0px` (33 elements, cards), `rgba(241, 87, 33, 0.35) 0px 10px 24px 0px` (19, orange buttons), `rgba(0, 0, 0, 0.25) 0px 16px 40px 0px` (14), `rgba(0, 0, 0, 0.22) 0px 8px 30px 0px`, `rgba(0, 0, 0, 0.25) 0px 4px 12px 0px`, `rgba(16, 5, 77, 0.1) 0px 10px 30px 0px`, and `rgba(0, 0, 0, 0.35) 0px 18px 42px 0px` on the hero card. Glass effects (translucent whites over the photo) and indigo gradients supply additional depth.

## Shapes

Radii: 14px (52 elements, the most used), 10px (27), 18px (14), 50% (10), 12px (8), 16px (7), 999px (7), 5px (4); also 3px, 24px and a 9999px pill token. Hero tab buttons are 10px, cards 16px, images 14px, the "CONTACT US" link 12px, the search field and "SIGN IN" are pills.

## Components

- **Tab button (the extractor's primary button):** `#ffffff17` fill, white text, Sukhumvit Set 14px weight 700, radius 10px, padding `0px 14.4px`, height 45px. Hover recorded: opacity changes from 1 to 0.9. This is the measured button role; the orange "CONTACT US" call to action is measured as a link element with a 12px radius, padding `12.8px 19.2px`, height 54px and the orange shadow, but its fill was not captured as a computed background color, so the fill is described from the capture only as orange (the orange value `#f15721` is measured elsewhere).
- **Outlined pill ("SIGN IN"):** Prompt 15px weight 600, white 1px border, radius 50px, padding `4px 25px`.
- **Text input:** white fill, `#666666` text, 1px solid `#ed3322`, radius 50px, padding `5px 20px`.
- **Card:** 16px radius, shadow `rgba(0, 0, 0, 0.35) 0px 18px 42px 0px`; promo card fill `#0f133b99` with a `#ffffff1f` border at 10px radius.
- **Footer:** white text, 302px tall, contact and social-channel block in Thai.

## Design System Architecture

No public design system or brand guideline was opened. The site is built on WordPress with the Elementor page builder: the root variables include `--wp--preset--*` entries, and the CSS references `--e-global-typography-text-font-family` and `--e-global-typography-secondary-font-family`, plus Bootstrap-style variables (`--light: #f8f9fa`, `--yellow: #ffc107`, `--gray-dark: #343a40`). Icon fonts loaded include Font Awesome 5 and 6, eicons, dashicons, slick and swiper icons. The Bootstrap and WordPress preset colors are framework defaults, not brand colors. Measurements come from `web/data/extracted/readyidc.json` for https://www.readyidc.com/en/.

## Do's and Don'ts

- Do use `#f15721` as the one accent for headings, calls to action and shadows.
- Do place white type over dark photography or indigo panels, and grey `#54595f` on white.
- Do give cards 16px radius and soft deep shadows.
- Do set display headings in Prompt weight 600 with 1.4592px tracking.
- Don't use the WordPress preset colors or the Bootstrap yellow as brand colors.
- Don't document the cookie "Manage consent" tab or chat bubble as brand components.
- Don't use sharp corners; measured radii start at 3px and are mostly 10px to 18px.

## Responsive Behavior

The 390px pass measured: h1 32px weight 600 with line height 33.92px and 1.44px tracking; h2 12px; body 13px with line height 20.8px; the tab button at 12px with line height 19.2px, 58px high and 85px wide; header text "SIGN IN" in red `#ed3322` at 13px; the header measured 52px. Menu behavior and the layout of cards at mobile width were not measured.

## Iteration Guide

1. White canvas, grey `#54595f` text, orange `#f15721` accent, navy `#0e1131` panels.
2. Display type: Prompt 600, 69.12px / 73.2672px on desktop.
3. Buttons 45px high with 10px radius for tabs; pill 50px for search and sign-in.
4. Cards 16px radius with `rgba(16, 24, 40, 0.08) 0px 12px 30px 0px`.
5. Thai copy is set in Prompt; keep line height near 1.6 (20.8px on 13px body).
6. Re-measure with `node web/scripts/extract-tokens.mjs --batch=web/data/batches/phase3-thai.json --only=readyidc --force --no-motion`, then `node web/scripts/generate-frontmatter.mjs --slug=readyidc` and the gate.
