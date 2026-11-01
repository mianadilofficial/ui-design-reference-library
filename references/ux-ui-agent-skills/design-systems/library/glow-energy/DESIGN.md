---
version: alpha
name: Glow Group
category: "Thai Brands"
description: "Glow Group (glow.co.th), a Thai power, steam and industrial-water producer, uses a white canvas #ffffff, brown-grey ink #4a3c31, corporate blue #004a9c and a vivid orange #f85f00 accent, with Prompt for headings and Sarabun for Thai body text at 16px/28px, and 3px corners."
colors:
  canvas: "#ffffff"
  ink: "#4a3c31"
  primary: "#f85f00"
  brand-blue: "#004a9c"
typography:
  display:
    fontFamily: Prompt
    fontSize: 32px
    fontWeight: 500
    lineHeight: 36.8px
    textTransform: uppercase
  subheading:
    fontFamily: Prompt
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
    textTransform: uppercase
  body:
    fontFamily: Sarabun
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  link:
    fontFamily: Prompt
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
rounded:
  xs: 3px
  pill: 9999px
spacing:
  s1: 4px
  s2: 7.2px
  s3: 8px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 28px
  s8: 32px
  s9: 48px
  s10: 80px
components:
  button-secondary:
    textColor: "{colors.brand-blue}"
    typography: "{typography.link}"
    height: 38px
  link:
    textColor: "{colors.brand-blue}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.brand-blue}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 3px 6px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.canvas}"
---

## Overview

Glow Group is the corporate site of a Thai energy company. The measured page (final URL `https://www.glow.co.th/th`, document title "GLOW GROUP", language `th`) opens with a white header carrying the Glow logo and a row of Thai navigation labels, then a full-width photographic hero of an industrial power plant with the English tagline "RELIABLE ENERGY SUPPLY" set in white uppercase. A second large photograph shows a technician in a white hard hat working on a solar panel under a blue sky. Below that, a section titled "ธุรกิจของเรา" (Our Business) describes the group's three businesses and is followed by a grid of coloured tiles that alternate orange and blue and each show one large capacity figure: 3,094 (electricity, megawatts), 1,116 (steam, tonnes per hour), 4,010 (clean water, cubic metres per hour), 1,282 (demineralised water) and 3,400 (chilled water, tonnes of cooling).

The tone is institutional and engineering-led: photography of plants and workers, large numerals, short bilingual labels (Thai primary, English taglines such as "Reliable energy supply", "Opening the new possibilities" and "Sustainable society and environment"). The brand's two colours carry the whole interface: blue #004a9c is the corporate colour for headings, links, the footer and half of the stat tiles, and orange #f85f00 is the energy accent for the notification bell, outlined circular arrow buttons, hover states and the other half of the tiles.

## Colors

The measured palette is deliberately small. Background area by weight: white #ffffff (2087), blue #004a9c (475), orange #f85f00 (3). Text colour by character count: white #ffffff (897, mostly on photography and the footer), brown-grey #4a3c31 (609), blue #004a9c (164) and orange #f85f00 (145).

- **canvas #ffffff** is the page background and the header background.
- **ink #4a3c31** is the body-text colour of paragraphs and the navigation link role; it is a warm dark brown rather than neutral black.
- **brand-blue #004a9c** colours the "ธุรกิจของเรา" heading, the "ดูทั้งหมด" (View all) text link, the header navigation text, and fills the footer.
- **primary #f85f00** is the accent. The extractor found no filled primary button; the orange appears as a 1px border colour on seven elements (the circular arrow outlines), as link hover colour, and as the notification bell fill.

Hover was measured on header navigation links: the text and the border colour change from rgb(0, 74, 156) to rgb(248, 95, 0), so the blue-to-orange swap is the interaction signal. The stylesheet also contains the stock Bootstrap 4 palette (for example #007bff, #28a745, #dc3545) in its root variables; these are framework defaults that the measured page does not use and are not brand colours.

## Typography

Two families are used. **Prompt** (loaded weights 400 and 600; measured weights 500, 600 and 700 in use) sets the hero and section headings, the navigation and the link role. **Sarabun** (weight 400) sets running Thai text. By character count Prompt accounts for 1026 characters and Sarabun for 789.

- Display: Prompt 500, 32px on a 36.8px line, uppercase (the hero heading "THE COMPLETE ENERGY & SERVICES PROVIDER").
- Subheading: Prompt 500, 24px on a 36px line, uppercase.
- Body: Sarabun 400, 16px on a 28px line, colour ink.
- Link: Prompt 600, 16px on a 24px line, colour brand-blue.

Header navigation text measures 13px Prompt with a 22.75px line and uppercase transform. The most-read sizes are 16px (971 characters), 15px (363), 32px (191), 14px (129) and 13px (115); a 50px size also appears (25 characters).

Both fonts are loaded by the site itself (loadedFonts lists Prompt 400 and 600 and Sarabun 400), so no substitution is needed.

## Layout

The measured desktop viewport is 1280px wide and the page is 4000px tall in the capture. The header is 100px high. The hero photography runs full-bleed; the content section beneath it sits on a two-column split with the section title on the left and the descriptive paragraph on the right (paragraph block 560px wide). The stat tiles form a contained grid between side margins: two wide tiles on the first row, three narrower tiles on the second.

Paddings measured by frequency: 15px (39 elements), 16px (10), 8px (8), 28px (6), 80px (4), 7.2px (4), 12px (2). The spacing scale in the frontmatter is exactly this set plus the 4px, 32px and 48px steps from the generator. Vertical rhythm is generous: large photographic bands separate text sections, and body copy keeps a 28px line height.

## Elevation & Depth

Depth is minimal. The only measured shadow is the header's `rgba(0, 0, 0, 0.15) 0px 3px 6px 0px`, which separates the white header from the photographic hero. Tiles and text blocks are flat colour or photograph with a colour wash; no card shadows were measured (the extractor found no card components). Layering comes from photography, with a blue or orange tint laid over imagery inside the stat tiles.

## Shapes

Measured border radii: 50% (12 elements) and 3px (1 element). The 50% radius produces the circular outlined arrow buttons next to "ดูทั้งหมด" and the round bell icon; 3px is the one small-radius element. The frontmatter keeps `xs: 3px` and `pill: 9999px` from the generator. Tiles and photographs have square corners in the capture.

## Components

- **Header / nav:** white background, brand-blue Prompt labels in uppercase at 13px, shadow `rgba(0, 0, 0, 0.15) 0px 3px 6px 0px`, 100px tall. Labels: เกี่ยวกับเรา (About us), พันธมิตรธุรกิจ (Business partners), ธุรกิจบริษัท (Company businesses), บรรษัทภิบาล (Corporate governance), นักลงทุนสัมพันธ์ (Investor relations), ข่าวและกิจกรรมบริษัท (News and activities), ความรับผิดชอบต่อสังคม (Social responsibility), ติดต่อเรา (Contact us). The header also exposes a language switch, a search panel, increase/regular font size controls and a dark-mode toggle.
- **Text link with circular arrow:** "ดูทั้งหมด", Prompt 600 16px, brand-blue, 38px high and 109px wide, followed by an orange-outlined circle with a chevron.
- **Stat tiles:** orange or blue photographic tiles with a white line icon, a large white numeral and a white Thai unit caption.
- **Footer:** brand-blue background (#004a9c), white text, Prompt 15px weight 700 for the company name block, 371px tall, with the group's address.
- **Floating notification button:** orange circular bell on the hero; it is a site utility control and not part of the brand component set.

## Design System Architecture

No public design system or brand-guideline page was found: the homepage at https://www.glow.co.th/th links to corporate pages, investor pages and policies but no design-system or brand-guidelines page. The de-facto system is a Bootstrap 4 stylesheet (root variables `--primary: #007bff`, `--breakpoint-sm: 576px`, `--breakpoint-md: 768px`, `--breakpoint-lg: 992px`, `--breakpoint-xl: 1200px`) layered with a theme that sets Prompt and Sarabun and the blue/orange palette, plus Font Awesome 5 Pro and an icomoon icon font. The Bootstrap colour variables are untouched defaults; the brand colours live directly in component CSS.

## Do's and Don'ts

- Do keep the page white and let photography and the two brand colours carry the identity.
- Do set headings in Prompt uppercase and Thai paragraphs in Sarabun 16px/28px.
- Do use brand-blue #004a9c for headings, links and the footer, and orange #f85f00 for accents and hover.
- Do pair large numerals with short unit captions on tiles.
- Don't treat the Bootstrap default blue #007bff as a brand colour.
- Don't add heavy shadows; the only measured shadow is the header's.
- Don't document the notification bell, language switch or dark-mode toggle as brand UI.

## Responsive Behavior

Mobile was measured at a 390px-wide viewport. Measured values: the hero heading stays Prompt 500 32px on a 36.8px line and occupies a 360px wide, 110px tall block; the body paragraph stays Sarabun 16px on a 28px line in a 360px wide block 196px tall; the header measures 390px wide and 100px tall and its text reads "เมนู" (Menu) in Sarabun 16px, while the desktop navigation row was not recorded in the mobile pass. Mobile font-size frequencies: 16px (987), 15px (363), 32px (191), 14px (129), 24px (46). Breakpoints declared in the stylesheet are 576px, 768px, 992px and 1200px. Tile grid reflow, image cropping and touch-target sizes were not measured.

## Iteration Guide

1. Start from the frontmatter tokens: canvas #ffffff, ink #4a3c31, brand-blue #004a9c, primary #f85f00.
2. Build headings in Prompt 500 at 32px/36.8px uppercase; body in Sarabun 400 at 16px/28px.
3. Use a 100px white header with the 3px 6px shadow and blue uppercase labels at 13px.
4. For calls to action use the text link plus orange-outlined circular arrow rather than a filled button, since no filled CTA was measured.
5. Alternate orange and blue photographic tiles for statistics, white numerals.
6. When adding a page, measure it with the extractor before adding any new token; unmeasured values (hover on tiles, dark-mode palette, mobile grid) stay "not measured".
