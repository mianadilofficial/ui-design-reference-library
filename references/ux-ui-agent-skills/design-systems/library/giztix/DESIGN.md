---
version: alpha
name: Giztix
category: "Thai Brands"
description: "Giztix (Thai online trucking service) design system: db_heavent Thai type with a 66px weight-700 hero, white canvas, saturated red #d90101 booking button, #333333 text, 6px button radius and 5px cards with soft shadow."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#d90101"
  on-primary: "#ffffff"
  surface-dark: "#000000"
  ink-on-dark-muted: "#ffffff99"
  ink-soft: "#b3b3b3"
  ink-border: "#cccccc"
  hairline: "#eeeeee50"
  nav-link-text: "#777777"
typography:
  display:
    fontFamily: db_heavent, "Open Sans", sans-serif
    fontSize: 66px
    fontWeight: 700
    lineHeight: 64px
  body:
    fontFamily: db_heavent, "Open Sans", sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: db_heavent, "Open Sans", sans-serif
    fontSize: 34px
    fontWeight: 400
    lineHeight: 34px
  nav:
    fontFamily: db_heavent, "Open Sans", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 5px
  md: 6px
spacing:
  s1: 6px
  s2: 8px
  s3: 12px
  s4: 15px
  s5: 20px
  s6: 21px
  s7: 35px
  s8: 40px
  s9: 80px
  s10: 95px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 60px
    borderColor: "{colors.ink-border}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 12px
    height: 60px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink-border}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.surface-dark}"
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.nav}"
    padding: 15px 35px 10px 0px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 35px 20px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 5px 10px 0px
---

# Giztix

## Overview
GIZTIX (the logo reads "GIZTIX EXPRESS") is a Thai online trucking and freight-booking service; the page title is "GIZTIX | Online Trucking Service" and the Thai title lists truck hire, pickup and 6-wheel truck services. The home page is a client-rendered React shell (the raw HTML only says "You need to enable JavaScript to run this app"), so everything below comes from the rendered measurement. The first screen is a white page with a pale grey ring shape behind a 3D-style illustration of a red GIZTIX truck standing on a smartphone, two people with cardboard boxes beside it. On the right, the Thai headline "บริการรถขนส่งเหมาคัน" is followed by "จองง่าย ได้ชัวร์ ส่งทั่วไทย", a two-line description, and two buttons: a solid red "จองรถขนส่งทันที" and an outlined red "เช็คราคาฟรี". The voice is direct and service-oriented, selling certainty and tracking ("ระบบติดตามสถานะงานขนส่ง"). The measured text is Thai; the page also offers an EN switch.

## Colors
The brand color is a saturated red `#d90101`, used as the fill of the main booking button and as text/border on the outlined secondary button; the logo and the truck illustration use the same red family in the capture. Canvas is white `#ffffff`. Body and headline text is `#333333`. Navigation links are grey `#777777`. A black `#000000` surface (the largest measured background area) and translucent white text `#ffffff99` belong to the dark footer region; `#b3b3b3` and `#cccccc` are secondary text/border greys, and `#eeeeee50` is a translucent hairline used on cards. The red also appears in a soft glow shadow `rgba(217, 1, 1, 0.125) 0px 6px 16px 0px`. The extractor reported `--swiper-theme-color: #007aff` in the root variables; that is a carousel library default, not a brand color, and is not used here.

## Typography
All headline and body text is set in db_heavent (DB Heavent, a Thai typeface; bold and regular files are loaded), with "Open Sans" and sans-serif as fallbacks; 1,324 measured characters use it against 193 in the system UI stack. The hero heading is 66px, weight 700, line-height 64px; primary button labels are 34px weight 400 with line-height 34px; body text is 20px weight 400 with line-height 20px; navigation is 18px. Other measured sizes by character count: 24px, 30px, 26px, 40px, 55px. DB Heavent is a proprietary Thai face; where it is unavailable, the declared fallback "Open Sans" does not carry Thai glyphs, so a Thai-capable substitute such as Sarabun or Noto Sans Thai would be needed. Font Awesome 5 Pro and Brands icon fonts are also loaded.

## Layout
The desktop capture is 1280px wide and 3,712px tall. A slim header holds the logo at left and, at right, "ติดตามสถานะงานขนส่ง", "สมัครสมาชิก", an outlined "เข้าสู่ระบบ" button, an EN language flag and a hamburger icon. The hero is two columns: illustration left, copy and buttons right. Below the hero, the capture shows large faint grey ring shapes on white and otherwise blank areas where lazily loaded content had not rendered, so the rest of the page layout is not documented. Measured paddings: 15px (most common), 20px, 21px, 35px, 40px, 80px and 95px.

The measured weight mix is almost entirely regular: weight 400 covers 1,316 characters and weight 700 only 201, so emphasis comes from size and the red color rather than from bold text. Text color usage by character count is `#333333` (567), translucent white `#ffffff99` (523), white (337), black (43), `#b3b3b3` and `#cccccc` (18 each) and red `#d90101` (11). Red is therefore rare as text and concentrated on the buttons, which keeps the action unmistakable against the white canvas and the pale ring shapes. The hero copy is left-aligned beside the illustration, with generous white space between the two buttons and the description above them.

The sizes are consistent between the two secondary measurements: the 20px body size is the dominant one at 759 characters, then 24px at 218 characters, so the page has a narrow, practical scale built around one reading size and a few larger service headings.

## Elevation & Depth
Cards use a soft shadow `rgba(0, 0, 0, 0.1) 0px 5px 10px 0px` (four occurrences); one element uses `rgba(0, 0, 0, 0.1) 0px 10px 20px 0px`. On hover, the primary button gains a red-tinted shadow (`rgba(217, 1, 1, 0.25) 0px 10px 20px 0px`) and its border grey darkens to `rgb(173, 173, 173)` from `rgb(204, 204, 204)`. The hero illustration provides depth through its 3D rendering rather than UI effects.

## Shapes
Measured radii are small: 4px, 5px and 6px. The primary and secondary buttons use 6px (`rounded.md`), cards use 5px (`rounded.sm`). Nothing is pill-shaped; the geometry is rectangular and utilitarian, with the large decorative circles in the background as the only round forms.

## Components
**button-primary**: red `#d90101` fill, white text, db_heavent 34px, radius 6px, padding 6px 12px, height 60px, 1px `#cccccc` border (hero "จองรถขนส่งทันที", 250px wide).
**button-secondary**: white fill, red text, same type and radius, 60px height, red border (hero "เช็คราคาฟรี").
**nav-link**: db_heavent 18px, `#777777`, padding 15px 35px 10px 0px.
**link**: `#cccccc` text at 20px (footer links).
**card**: white, `#333333` text, 5px radius, padding 35px 20px, hairline border `#eeeeee50`, shadow `rgba(0, 0, 0, 0.1) 0px 5px 10px 0px`.
The cookie consent bar visible in the capture is not part of the brand UI and is not tokenized.

## Design System Architecture
No public design system or brand guideline was found on the home page, and none is linked. The site is a React single-page app; the only root custom properties measured are the Swiper carousel's (`--swiper-theme-color`, `--swiper-navigation-size: 44px`), so styling is not driven by a token layer. The de-facto system is a handful of repeated values: red `#d90101`, text `#333333`, db_heavent for all Thai text, and 4 to 6px radii.

## Do's and Don'ts
- Do use `#d90101` for the single main booking action and keep its label white.
- Do pair the filled red button with an outlined red twin for the secondary action.
- Do set Thai text in db_heavent at 66px/64px for hero headings.
- Do keep corners at 6px for buttons and 5px for cards.
- Don't use the carousel default blue `#007aff` as a brand color.
- Don't put the cookie banner accept button forward as a brand button.
- Don't introduce rounded pill buttons; none were measured.

## Responsive Behavior
At the 390px mobile pass the hero heading stays 66px weight 700 with 64px line-height in a 330px-wide block, and the primary button label drops from 34px to 28px with a 54px height and 276px width (it is 60px high and 250px wide on desktop). Mobile font sizes by character count are 20px, 24px, 26px, 40px, 55px, 28px, 66px and 18px. The mobile navigation element measured 390px wide and 50px high with 20px text. Breakpoint widths and menu behavior were not measured.

## Iteration Guide
1. Start from canvas `#ffffff`, ink `#333333`, primary `#d90101`.
2. Build the hero as illustration plus copy, a filled red button and an outlined red button, both 6px radius.
3. Use db_heavent for Thai; supply a Thai-capable fallback because the declared fallback lacks Thai glyphs.
4. Keep cards white with the single `0px 5px 10px` soft shadow.
5. Measure below-the-fold sections before documenting them; the capture did not render them.
6. Re-run `node web/scripts/verify-designs.mjs --slug=giztix` after edits.
