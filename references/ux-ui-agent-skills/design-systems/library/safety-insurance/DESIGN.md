---
version: alpha
name: Tokio Marine Group Thailand
category: "Thai Brands"
description: "Tokio Marine Group Thailand landing page (reached from safety.co.th): white canvas with deep teal ink (#022b39), petrol-blue pill buttons (#00546c, hover #006d8a), lighter teal secondary (#33abba), Lato Bold headings at 30.56px, pastel category chips, a rounded dark footer (#032b39) and a sky-and-lifestyle hero."
colors:
  canvas: "#ffffff"
  ink: "#022b39"
  primary: "#00546c"
  on-primary: "#ffffff"
  surface: "#032b39"
  surface-2: "#01212c"
  ink-2: "#5f5f5f"
  ink-4: "#1a1a1a"
  ink-5: "#0096a9"
  ink-6: "#313131"
  primary-hover: "#006d8a"
  button-secondary-bg: "#33abba"
  tag-blue: "#ebf0ff"
  tag-pink: "#fceef3"
  tag-green: "#ecf7ee"
  tag-orange: "#fdf1eb"
typography:
  display:
    fontFamily: Lato-Bold, NotoSansJP-Bold, Arimo-Bold, sans-serif
    fontSize: 30.56px
    fontWeight: 400
    lineHeight: 48.896px
  display-mobile:
    fontFamily: Lato-Bold, NotoSansJP-Bold, Arimo-Bold, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 38.4px
  subheading:
    fontFamily: Lato-Medium, NotoSansJP-Regular, Arimo-Regular, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 38.4px
  body:
    fontFamily: Lato-Regular, NotoSansJP-Regular, Arimo-Regular, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  button:
    fontFamily: Lato-Semibold, NotoSansJP-Regular, Arimo-Bold, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 14.2px
rounded:
  xs: 16px
  sm: 25px
  md: 32px
  lg: 50px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 9px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 19px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 9px 12px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 9px 12px
    height: 48px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.xs}"
    padding: 19px
    boxShadow: rgba(0, 0, 0, 0.1) 0px 2px 4px 0px
---

# Tokio Marine Group Thailand (landing page behind safety.co.th) — Design System Notes

## Overview
The requested URL https://www.safety.co.th/ did not stay on its own domain: the measurement's final URL is https://www.tokiomarine.com/th/th.html, the Thai landing page of the Tokio Marine Group (page title "ประกันภัยรถยนต์ ทรัพย์สิน และประกันชีวิต"). This is therefore the parent/operator site, not a standalone "Safety Insurance" brand site, so this file is named after the measured site and documents the Tokio Marine Group Thailand landing page. Two attempts to fetch the page text with WebFetch returned an empty page (see SOURCES.json), so the description below comes from the extraction record and the capture image only.

The page is a short, single-purpose router. A tall hero photograph shows a white modern house with a blue door, a parked car with a suitcase, and a family on a park swing under palm trees, all in a soft sky-blue haze. Centered over it, the Thai headline "ทุกก้าวมั่นใจ ไปได้ไกลกว่า" is followed by "ให้โตเกียวมารีนดูแล คุ้มครองครบทุกความต้องการ" in teal, a small prompt "เลือกบริการที่ใช่สำหรับคุณ" (choose the service that suits you) and two pill buttons: "ประกันภัย" in dark petrol blue and "ประกันชีวิตและสุขภาพ" in lighter teal. Below, the section "ดูแลครบทุกด้าน มั่นใจทุกสถานการณ์" presents two columns, one per operating company, each with the Tokio Marine Insurance Group logo: "บมจ. คุ้มภัยโตเกียวมารีนประกันภัย (ประเทศไทย)" (motor and property) and "บมจ. โตเกียวมารีนประกันชีวิต (ประเทศไทย)" (life and health). Under each are colored pill chips such as "รถยนต์ใช้ส่วนบุคคล", "บ้านและครอบครัว", "การเดินทาง", "อุบัติเหตุ", "สวัสดิการพนักงาน", "ประกันชีวิตตลอดชีพ", "ประกันสุขภาพและโรคร้ายแรง" and "ประกันกลุ่ม". A pale gradient band asks "ต้องการพูดคุยกับเจ้าหน้าที่ไหม?" (Want to talk to an agent?) with two white cards and "ติดต่อเจ้าหน้าที่" buttons. The footer is a dark rounded panel with the "Tokio Marine Group" wordmark and the English tagline "Inspiring Confidence. Accelerating Progress." with "© 2026 All Rights Reserved".

A cookie/landing header component (`cmp-lading-header`) was hidden by the extractor and is not documented.

## Colors
- **Canvas `#ffffff`** for the content area; pale blue-green gradient for the contact band (its exact stops were not tokenized).
- **Ink `#022b39`**: the dominant text (251 characters) and the h2 color; a very dark teal.
- **Primary `#00546c`**: the petrol-blue fill of the main pill CTA ("ประกันภัย", "ติดต่อเจ้าหน้าที่"), white text. Hover state measured as **`#006d8a`**. The same value `#00546c` also colors 28 characters of text (the card title).
- **Secondary teal `#33abba`**: fill of the second pill ("ประกันชีวิตและสุขภาพ" and its contact button), white text.
- **`ink-5` `#0096a9`**: the h1 headline color (62 characters), a brighter teal.
- **Footer `#032b39` (`surface`) and `#01212c` (`surface-2`)**: the two stacked dark bands at the bottom (area-weights 407 and 164).
- **Neutral text**: `#5f5f5f` (`ink-2`, body copy, 99 characters), `#1a1a1a` (`ink-4`) and `#313131` (`ink-6`).
- **Pastel chip fills** measured by area: `#ebf0ff` (blue), `#fceef3` (pink), `#ecf7ee` (green) and `#fdf1eb` (orange, from the CTA candidates). Each chip pairs a tinted background with a matching colored icon.

Bootstrap's default `--primary` `#007bff` is declared on `:root` and is a framework default, not a brand color.

## Typography
The `:root` declares four font roles: `--font-family-regular` (Lato-Regular), `--font-family-medium` (Lato-Medium), `--font-family-semibold` (Lato-Semibold) and `--font-family-bold` (Lato-Bold), each followed by NotoSansJP and Arimo fallbacks. Lato has no Thai glyphs, so Thai text renders in whichever fallback the browser finds; the extractor records the Lato stack as the font family regardless. Medium is the most used by character count (431), then Regular (123), Semibold (81) and Bold (70).

- `display`: Lato-Bold stack, 30.56px / 48.896px (the h1 and h2).
- `display-mobile`: 24px / 38.4px at 390px.
- `subheading`: Lato-Medium stack, 24px / 38.4px.
- `body`: Lato-Regular stack, 14px / 22.4px.
- `button`: Lato-Semibold stack, 16px / 14.2px.

The italic Latin tagline in the footer is an image or special type and was not measured.

## Layout
Width 1280px, height 1861px: a very short page. Everything is centered on a single axis; the hero overlays text on photography, then two equal columns, then a contact band and the footer. Spacing values: 4, 6, 9, 10, 12, 15, 16, 19, 20 and 24px; chips and buttons use `9px 12px` padding, and cards 19px.

## Elevation & Depth
Only one shadow is measured: `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px` on the white contact cards. The footer's top corners are rounded (`32px 32px 0px 0px`), which makes it appear as a dark sheet rising from the page.

## Shapes
Radii: 50px (13 uses, chips and buttons), `32px 32px 0px 0px` (4 uses, the footer and pale band), 1000px (2 uses, pill buttons), 16px (2 uses, cards) and 25px (2 uses). Tokens: `xs` 16px, `sm` 25px, `md` 32px, `lg` 50px, `pill` 9999px. Buttons use the pill value; cards use `xs`.

## Components
- **button-primary**: `#00546c` fill, white text, 16px semibold, pill, `9px 12px` padding, 48px tall; hover `#006d8a`.
- **button-secondary**: `#33abba` fill, white text, same size and pill shape.
- **Chips**: pastel-tinted pill with a small colored icon and an `#022b39`-range label.
- **card**: white, 16px radius, 19px padding, `rgba(0, 0, 0, 0.1) 0px 2px 4px 0px` shadow, with an icon tile, a title and a full-width button.
- **Footer**: dark rounded panel with the group wordmark and tagline.

## Design System Architecture
No public design system or brand guidelines were found at the opened source: https://www.tokiomarine.com/th/th.html returned no readable text to WebFetch and the page as captured links no guideline document. The de-facto system is visible in the shipped CSS variables: a Bootstrap-derived `:root` (`--breakpoint-sm` 576px, `--breakpoint-md` 768px, `--breakpoint-lg` 992px, `--breakpoint-xl` 1200px, default `--primary` `#007bff`) extended with custom `--font-family-regular/medium/semibold/bold` variables and `--input-padding-x` 1.25rem / `--input-padding-y` 1rem, plus Swiper (`--swiper-navigation-size` 44px).

## Do's and Don'ts
- Do route users with two clear pill buttons, dark petrol first and lighter teal second.
- Do tint category chips with pastel fills and matching icon colors.
- Do keep copy short and imperative.
- Don't use Bootstrap's `#007bff` as brand blue.
- Don't mistake this landing page for a full product site; it omits products, quote flows and navigation.
- Don't use shadows beyond the single light card shadow.

## Responsive Behavior
Bootstrap breakpoints at 576, 768, 992 and 1200px are declared, and the mobile measurement reduces the display type from 30.56px to 24px. Stacking of the two-column company layout: not measured.

## Iteration Guide
1. Start with a photographic hero and a centered headline in `#0096a9`/`#022b39`.
2. Offer two pill actions: `#00546c` and `#33abba`.
3. Group products as pastel chips under company logos.
4. End with a contact band and the dark rounded `#032b39` footer.
5. If the page changes domain again, re-measure and rename the document after the real site.

## Content and Voice
Copy is short, polite Thai written in the second person, framed as guidance rather than selling: "เลือกบริการที่ใช่สำหรับคุณ" asks the visitor to choose, "ดูแลครบทุกด้าน มั่นใจทุกสถานการณ์" promises completeness and the contact band opens with a question, "ต้องการพูดคุยกับเจ้าหน้าที่ไหม?", followed by a gentle line telling visitors to call the hotline or the customer help centre. The only English on the measured page is the footer tagline and the copyright line. Every chip label is a plain product noun, which keeps the page scannable in a few seconds.
