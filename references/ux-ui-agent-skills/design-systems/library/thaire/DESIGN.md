---
version: alpha
name: Thai Reinsurance
category: "Thai Brands"
description: "Thai Reinsurance (THRE) English homepage: white canvas with gray Arial body text (#6b6b6b), near-black Prompt headings (#1a1110), Red Hat Display hero type at 50px, a yellow (#ffd400) READ MORE button with navy text (#00005a) at 3px radius, dark navy footer (#191d2d) and moody photographic panels."
colors:
  canvas: "#ffffff"
  ink: "#6b6b6b"
  primary: "#ffd400"
  on-primary: "#00005a"
  surface: "#191d2d"
  ink-4: "#1a1110"
  primary-hover: "#9a9a9a"
typography:
  display:
    fontFamily: "\"Red Hat Display\", sans-serif"
    fontSize: 50px
    fontWeight: 400
    lineHeight: 60px
    textTransform: capitalize
  display-mobile:
    fontFamily: "\"Red Hat Display\", sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 48px
    textTransform: capitalize
  heading:
    fontFamily: Prompt, sans-serif
    fontSize: 50px
    fontWeight: 300
    lineHeight: 70px
    textTransform: capitalize
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
    textTransform: capitalize
  body:
    fontFamily: Arial, sans-serif
    fontSize: 16px
    fontWeight: 200
    lineHeight: 24px
  button:
    fontFamily: Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
    textTransform: uppercase
  link:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 19.2px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
spacing:
  s1: 2px
  s2: 3px
  s3: 5px
  s4: 10px
  s5: 15px
  s6: 20px
  s7: 30px
  s8: 35px
  s9: 40px
  s10: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 15px 30px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-4}"
    padding: 15px 0px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 0px 24px 0px
  nav-link:
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.canvas}"
    padding: 0px 0px 20px
---

# Thai Reinsurance (THRE) — Design System Notes

## Overview
Measured URL: https://www.thaire.co.th/ (title "Thai Re Insurance – Thai Re-Insurance Professionals", language en-US). Thai Reinsurance Public Company Limited is a business-to-business reinsurer, so the site speaks to insurers and investors rather than to retail buyers. The navigation reads "ABOUT THRE", "PRODUCTS & SERVICES", "NEWS & ACTIVITIES", "CAREERS", "CONTACT US", followed by a Facebook icon, an "IR" (investor relations) icon and a TH / EN language switch. Submenus (from the fetched page text) include Company Profile, Milestone, Factsheet, Board of Directors, Committees, Management Team, Reinsurance Capacity, Customer Solutions, International Market and BlueVenture Group.

The homepage is a corporate narrative in stacked bands. A hero carousel shows a man in a dark suit holding a crimson umbrella in a blue-dark city street, with centered white-and-yellow headline "We Sell Innovation And Services Through Reinsurance Capacity And Expertise." and short yellow pagination bars. An "About Us" band sets a small gray "General Information" label and a large black "About Us" title with a yellow vertical rule at left, and two justified gray text columns at right that state the company was established on 18th July 1978 and that it holds more than 3,700 million baht of registered capital, is rated A- by Fitch Rating and has a CAR of 300%; a yellow "READ MORE" button closes the band. "Area of Expertise" is a row of five tall dark gradient panels (brown, crimson, teal, olive, blue) reserved for icons or text. "Our Services" is a slate-blue band with a yellow script-like title and white centered copy. Further sections named on the page include Reinsurance Capacity, Co-developed Products, Our Executives and Our DNA (the acronym THAIRE: Technology, Harmony, Active, Innovation, Reinsurance Expertise, Expression).

During measurement the site first showed a "Tender Offer for Securities" promotional modal with a gray scrim and a consent screen (`pdpa_screen`). The extraction was re-run once with `--force`, which hid both (the page record lists `pdpa_screen` and an Elementor popup scrim as hidden). The modal and consent buttons are not brand UI and are not documented.

## Colors
- **Canvas `#ffffff`** for the header and content bands.
- **Ink `#6b6b6b`**: the dominant text color (2,267 characters): body copy on white is a mid gray. **`#ffffff`** is the second most used text color (2,092 characters), for copy over photography and dark bands.
- **Heading ink `#1a1110` (`ink-4`)**: near-black used for headings such as "About Us" and for header text.
- **Primary yellow `#ffd400`**: the button fill and the accent in headlines, rules and pagination (172 characters of yellow text). The `on-primary` navy **`#00005a`** is the measured text color on the button (the "READ MORE" label). The hover fill of the button is **`#9a9a9a`** (`primary-hover`), a neutral gray.
- **Footer navy `#191d2d` (`surface`)**: the dark footer fill (area-weight 1,236).
- Large translucent navy overlays (`#0f1a4791`, `#0d173e94`) are the photographic hero tints; they are overlays, not flat tokens.
- A bright turquoise `#1abc9c` appears in the area list (513 units) without a recognizable role in the capture, and a magenta `#cc3366` on 15 characters; both were left out of the tokens as unidentified.

## Typography
The measured font mix by character count is Arial (3,484 characters, body and buttons), Red Hat Display (699, the hero headline), Prompt (386, section titles and navigation labels) and Caveat (150, a script face). Loaded files are Prompt at 300, 400, 500 and 600, Red Hat Display 400, eicons and Font Awesome 5 Free and Brands.

- `display`: Red Hat Display, 50px / 60px, weight 400, capitalized (the hero line; the yellow part is rendered bolder than the white part in the capture).
- `display-mobile`: 40px / 48px at 390px.
- `heading`: Prompt, 50px / 70px, weight 300, capitalized ("About Us", "Area of Expertise").
- `subheading`: Prompt, 20px / 28px, weight 400, capitalized.
- `body`: Arial, 16px / 24px, weight 200 (measured), justified in the About text.
- `button`: Arial, 16px / 16px, weight 400, uppercase.
- `link`: Prompt, 16px / 19.2px, weight 600.

Red Hat Display and Prompt are open-licensed Google fonts, so no substitute is needed.

## Layout
Width 1280px, height 5082px. A white header with the blue THRE logo at left and a spaced menu row sits above a full-bleed hero. The About band is asymmetric: a narrow title column at left and two wide text columns at right, with the button right-aligned. "Area of Expertise" is a five-column full-width gallery. The text on dark bands is centered. The spacing scale is declared in the generated tokens; the button uses `15px 30px` padding at 46px high and the nav `15px 0px`.

## Elevation & Depth
Soft, wide, low-opacity shadows: `rgba(0, 0, 0, 0.1) 0px 0px 30px 0px` (3 uses), `rgba(0, 0, 0, 0.2) 0px 0px 20px 0px` (3 uses), `rgba(0, 0, 0, 0.15) 0px 0px 24px 0px` (the header, 1 use) and `rgba(0, 0, 0, 0.15) 0px 0px 30px 0px` (1 use). They produce a diffused halo rather than a drop shadow. The sticky header uses the 24px halo.

## Shapes
Radii are small: 3px (8 uses, buttons), 2px (3) and 4px (1); the social icons in the header are drawn as round glyphs. The button is therefore a near-square rectangle with a 3px radius, which suits the formal B2B tone.

## Components
- **button-primary**: `#ffd400` fill, `#00005a` text, 16px uppercase Arial, 3px radius, `15px 30px` padding, 46px tall, a chevron icon at the right; hover `#9a9a9a`.
- **nav**: white, `#1a1110` text, `15px 0px` padding, 24px halo shadow; menu items are uppercase small Prompt/Arial text with small caret icons for submenus.
- **link**: Prompt 16px / 600.
- **footer**: `#191d2d` with white text, `0px 0px 20px` padding.
- **Hero pagination**: short yellow bars.
- **Section label**: small gray text above a large black title with a yellow vertical rule.

## Design System Architecture
No public design system or brand guidelines are linked from the homepage (the fetched page text lists company, product, news, careers, investor and affiliate links only), so no search was run. The page is built with Elementor (the popup scrim class `elementor-popup-modal-12343` and eicons font are in the record) on WordPress-style markup, with fonts loaded from Google Fonts families (Prompt, Red Hat Display) and Font Awesome 5 for icons. Brand values live in Elementor widget settings rather than in published tokens.

## Do's and Don'ts
- Do use yellow `#ffd400` sparingly: one button, rules and headline emphasis.
- Do keep body copy gray `#6b6b6b` on white and white on photography.
- Do use Prompt light at 50px for section titles.
- Don't use rounded pill buttons; the system uses a 3px radius.
- Don't add colored fills to the five expertise panels beyond the dark gradient treatment.
- Don't reproduce the tender-offer modal or consent buttons as brand components.

## Responsive Behavior
At 390px the display type measures 40px with a 48px line height, down from 50px/60px. The menu and gallery layouts at narrow widths were not measured.

## Iteration Guide
1. Pair a dark photographic hero with a Red Hat Display headline and one yellow emphasis phrase.
2. Use gray body text on white with a Prompt-light 50px title and a yellow vertical rule.
3. Add a single yellow `#ffd400` button with navy `#00005a` text and 3px radius per section.
4. Close with a navy `#191d2d` footer and a halo-shadowed header.

## Content and Voice
Copy is formal, third-person and corporate: "Thai Reinsurance Public Company Limited was established on 18th July 1978", "We operate reinsurance business to help non-life businesses diversify risk; including but not limited to property, personal accident, engineering, and marine and cargo risk". Headings are title-cased English with small lead-in labels ("General Information", "It's What We Do"). The only call to action on the measured page is "READ MORE". Imagery is atmospheric and metaphorical rather than literal: an umbrella in a city street stands for protection, and the five gradient panels stand in for lines of expertise.
