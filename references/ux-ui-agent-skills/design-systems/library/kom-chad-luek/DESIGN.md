---
version: alpha
name: Kom Chad Luek (komchadluek.net)
category: "Thai Brands"
description: "Kom Chad Luek (komchadluek.net) is a Thai news portal in the Prompt typeface with a red #d70000 brand, black-to-red 45-degree gradient bars, #f9f9f9 page ground, 38px bold white headlines over photographs and 20px-radius card tops."
colors:
  canvas: "#ffffff"
  page-largest: "#f9f9f9"
  ink: "#000000"
  primary: "#d70000"
  on-primary: "#ffffff"
  surface-light: "#f5f5f5"
  card-grey: "#808080"
  ink-muted: "#888888"
  on-dark-faint: "#ffffff40"
  hairline: "#f7f7f7e6"
  secondary-grey: "#6b6b6b"
  tertiary-dark: "#272727"
  accent-gold: "#bf9b67"
  accent-pink: "#bd274b"
  accent-violet: "#7f3884"
typography:
  display:
    fontFamily: __Prompt_8268a9, __Prompt_Fallback_8268a9
    fontSize: 16px
    fontWeight: 400
  heading:
    fontFamily: __Prompt_8268a9, __Prompt_Fallback_8268a9
    fontSize: 38px
    fontWeight: 700
  subheading:
    fontFamily: __Prompt_8268a9, __Prompt_Fallback_8268a9
    fontSize: 22px
    fontWeight: 400
    lineHeight: 29.7px
  body:
    fontFamily: __Prompt_8268a9, __Prompt_Fallback_8268a9
    fontSize: 18px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 10px
  md: 20px
  lg: 26px
  xl: 28px
  2xl: 50px
  3xl: 100px
spacing:
  s1: 2.5px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 9.6px
  s7: 10px
  s8: 14px
  s9: 15px
  s10: 16px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    rounded: "{rounded.sm}"
    padding: 5px 10px
    height: 36px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    padding: 0px 0px 0px 15px
  card:
    backgroundColor: "{colors.card-grey}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.canvas}"
    borderColor: "{colors.ink}"
---

## Overview

Kom Chad Luek (https://www.komchadluek.net/, a Thai news and entertainment site whose title begins "คม ชัด ลึก เกาะติดทุกกระแสร้อน ไขทุกปมสังคม การเมือง แวดวงบันเทิง") is a high-density, red-and-black portal. The top of the capture is taken over by a 25th-anniversary event banner (a large "25th Anniversary" key visual with date and venue). Beneath it a red header bar holds the logo and social/search/account icons, and a black navigation bar lists sections such as ข่าว (News), คอลัมนิสต์, บันเทิง, ไลฟ์สไตล์, ตรวจสอบ, ดวง, ศรัทธาสายมู, Online Program and แกลลอรี่. A banner ad and a headline carousel follow, where a fuel-price story shows a large photograph at left and bold white headline text on a red gradient at right.

"Highlight" is a red tab label above a red-gradient band holding three rounded photo cards, each with a colored category tag (บันเทิง, ข่าวทั่วไป, คมชัดลึก อวอร์ด) and a two-line white headline on a grey caption area. A weather widget and ads sit between sections, and a red section bar labelled "ข่าว" with sub-links (การเมือง, อาชญากรรม) introduces the next card row. The headlines are written in an urgent news register and include quotation marks, exclamation marks and personal names.

The capture also contains a cookie notice and ad slots (including the anniversary takeover); the extractor was re-run for this slug, and cookie, ad and widget controls are not documented as brand UI.

## Colors

The brand red is #d70000, published in the shipped CSS as --primary-color and used on the button border, section bars and gradient. Black #000000 is ink and the navigation bar; the page ground is #f9f9f9 (the highest-weight background area), with #f5f5f5 as a lighter panel tone and #808080 as the caption/card grey behind headlines (361 area units). White (#ffffff) is the text color on dark and red areas and measured as the most-read text color. Muted text is #888888 and a 25%-alpha white (#ffffff40) is used on dark surfaces. Hairlines are #f7f7f7e6.

The shipped CSS root variables also publish --secondary-color #6b6b6b, --tertiary-color #272727, --gold-color #bf9b67, --pink-color #bd274b and --violet-color #7f3884, and a gradient --background-gradient: linear-gradient(45deg,#000,#d70000), which also appears as the measured background image of the h1 text block and the footer. The conic "--primary-glow" blues and the "--callout" greys in the stylesheet belong to a framework starter template and are not used as brand colors.

## Typography

Prompt (weights 400, 500, 700), served as a self-hosted font with a fallback, is the single typeface; Sarabun is declared as --front-secondary. Measured sizes by use: 38px at weight 700 (770 characters, the lead-story headlines in white), 22px at 400 with a 29.7px line height (card headlines), 18px at 400 (body and footer address), 16px (the base size for nav and buttons, the largest share in the mobile pass at 1,434 characters), 14px, 12px and 9.8px for tags. Line heights are mostly "normal"; only the 22px role has an explicit 29.7px line height.

## Layout

The page is 1280px wide and 4284px tall, and the shipped CSS publishes --max-width: 1400px, --height-menu: 40px, --height-logo: 90px, --height-input: 40px, --height-section: 600px, --height-footer: 500px and --padding: 0 1rem. The structure: full-width takeover banner, red logo bar, black nav bar, centered ad, a full-width carousel (image left, red-gradient headline panel right), a full-width gradient band with three highlight cards, ad and weather widgets, and category sections with a red header bar and card rows. Cards are in three- and four-column rows with small gutters. Measured spacing steps: 2.5px, 4px, 5px, 7px, 8px, 9.6px, 10px, 14px, 15px and 16px.

## Elevation & Depth

One shadow was measured: rgba(0, 0, 0, 0.2) 0px 4px 20px 0px (a floating element). The CSS also publishes --box-shadow-default: 0px 2px 3px hsla(0,0%,53%,.9) and --border-default: 1px solid hsla(0,0%,97%,.9). Depth is mostly created by the black-to-red gradient bands and by photographs with dark gradient overlays that carry white headlines.

## Shapes

Measured radii: 20px 20px 0px 0px (19 elements, the top corners of photo cards), 50px (8, pills and tags; matching --border-radius: 50px), 0px 0px 10px 10px and 0px 0px 20px 20px (caption areas under the photo), 0px 10px 0px 0px and 0px 20px 0px 0px (tab shapes), 3px, 26px, 28px, 100px, and 10px (matching --border-radius-input: 10px). Cards are therefore round-cornered tiles where the photograph and the caption have complementary rounded corners.

## Components

- Outlined "ดูทั้งหมด" (View all) button: white fill, black Prompt 16px text, 1px red #d70000 border, 10px radius, padding 5px 10px, height 36px. No filled primary button was detected on the home page.
- Section tab ("Highlight", "ข่าว"): red fill, white text, with a rounded corner at the top right (0px 10px 0px 0px).
- Photo card: 20px-rounded top corners, a colored category tag at the lower left of the photograph, and a grey #808080 caption area with white 22px/29.7px headline and rounded bottom corners.
- Lead-story headline: Prompt 700 38px in white over a red gradient.
- Navigation: black bar, white Prompt 16px items with small triangular markers and 15px left padding.
- Footer: black-to-red gradient background, white 18px address text.

## Design System Architecture

No public design system or brand-guideline page was opened. The shipped CSS exposes a root-variable layer (--primary-color, --secondary-color, --tertiary-color, --gold-color, --pink-color, --violet-color, --font-default, --front-secondary, --border-radius, --border-radius-input, --height-menu, --height-logo, --max-width, --transition-default) which forms a small de-facto token set on top of a Next.js-style starter (the --primary-glow, --tile-* and --callout-* variables are framework template leftovers).

## Do's and Don'ts

Do use #d70000 with black and white, set lead headlines in Prompt 700 at 38px in white over photographs, and use the black-to-red 45-degree gradient for bars and the footer. Do round card top corners at 20px and use red tabs for section labels.

Don't use the framework glow blues or callout greys as brand colors. Don't treat cookie, ad or anniversary-takeover elements as brand UI. Don't mix a second typeface; Prompt carries everything. Don't use flat shadow-heavy cards; the measured shadow is a single soft 4px/20px at 20% black.

## Responsive Behavior

The mobile pass (390px) measured the h1 role at Prompt 400 16px with the same gradient background image, body text at 18px in white, and 16px as the most-used font size (1,434 characters), followed by 20px, 14px and 18px. Navigation collapse, column counts and breakpoints were not measured.

## Iteration Guide

1. Start from #f9f9f9 ground, black nav bar, red #d70000 header and section tabs.
2. Use Prompt only: 38px/700 for lead headlines, 22px/29.7px for card headlines, 16px for navigation.
3. Place photographs in cards with 20px top corners and a grey caption area.
4. Use the 45-degree black-to-red gradient for the footer and hero text bands.
5. Keep buttons as white outlined 10px-radius controls with a red border, and verify new values against the shipped --variables.

## Additional Notes

Imagery is press photography: celebrity portraits, an aerial view of a motorway, a group shot from an awards event and a close-up of fuel pumps. Each card photograph carries a small station watermark in the corner and a colored category chip, so editorial branding is repeated on every tile. The header area uses a brand key visual rather than a plain logo on the 25th-anniversary takeover. Advertising occupies large white or pale slots between editorial sections (a King Power banner and a weather widget powered by a third-party provider are visible), and these are not part of the brand system. The hover state measured for the cookie accept button changes only its fill, so no site-wide hover convention was measured.
