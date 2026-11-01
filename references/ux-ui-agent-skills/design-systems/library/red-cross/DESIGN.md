---
version: alpha
name: American Red Cross
category: "Government & Nonprofit"
description: "The American Red Cross site (redcross.org) runs on Red Cross Red #e11b22 for every action, Roboto 900 headlines in #333333/#212529 on white, Open Sans for the header utility layer, a #007caf link blue, 3px button corners with a soft rgba(0,0,0,0.15) 0 2px 4px shadow, and full-bleed photo bands of volunteers at work."
colors:
  canvas: "#ffffff"
  page-body: "#cccccc"
  ink: "#212529"
  ink-heading: "#333333"
  link-blue: "#007caf"
  primary: "#e11b22"
  on-primary: "#ffffff"
  primary-hover: "#b2141a"
  slate: "#6d6e70"
  band-brick: "#975149"
  hairline: "#e9ecef"
  nav-bg: "#f0f0f0"
  footer-bg: "#e8e8e8"
  surface-soft: "#fbfbfb"
  error: "#dc3545"
typography:
  display:
    fontFamily: Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 48.64px
    fontWeight: 900
    lineHeight: 52.0448px
  display-mobile:
    fontFamily: Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 30px
    fontWeight: 900
    lineHeight: 36px
  heading-section:
    fontFamily: Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 54px
    fontWeight: 900
  heading-section-mobile:
    fontFamily: Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 900
  subhead:
    fontFamily: Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 29.44px
    fontWeight: 400
  body:
    fontFamily: Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 27px
  button:
    fontFamily: Roboto
    fontSize: 19.2px
    fontWeight: 700
    lineHeight: 26.88px
    textTransform: uppercase
  button-small:
    fontFamily: Roboto
    fontSize: 14px
    fontWeight: 700
    lineHeight: 19.6px
    textTransform: uppercase
  header-utility:
    fontFamily: "\"Open Sans\", Arial, Helvetica, \"Helvetica Neue\", sans-serif"
    fontSize: 12.5px
    fontWeight: 700
    lineHeight: 18.75px
  link-fine:
    fontFamily: Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 10px
    fontWeight: 400
    lineHeight: 15px
  input:
    fontFamily: "\"Open Sans\", Arial, Helvetica, \"Helvetica Neue\", sans-serif"
    fontSize: 19.2px
    fontWeight: 300
    lineHeight: 19.2px
  footer:
    fontFamily: Roboto, Arial, "Helvetica Neue", Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 3px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 6.5px
  s5: 7px
  s6: 10px
  s7: 15px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 7px 16px
    height: 41px
    boxShadow: rgba(0, 0, 0, 0.15) 0px 2px 4px 0px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    padding: 7px 6px
    height: 36px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 2px 4px 0px
  tile-link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link-blue}"
    typography: "{typography.button-small}"
    rounded: "{rounded.xs}"
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.15) 0px 2px 4px 0px
  link:
    textColor: "{colors.link-blue}"
    typography: "{typography.link-fine}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    typography: "{typography.header-utility}"
    boxShadow: rgba(0, 0, 0, 0.3) 0px 2px 15px 0px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 6.5px 15px
    height: 42px
    borderColor: "{colors.slate}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.footer}"
---

## Overview

The American Red Cross home page (redcross.org, measured 2026 at 1280px and 390px) is a campaign board rather than a product page. It is built from full-width horizontal bands, each of which sells one way to help: give blood, give money, take a class, volunteer, prepare for a disaster, or shop. Every band ends in the same object — a Red Cross Red (#e11b22) uppercase button with 3px corners and a soft drop shadow — so the page reads as a series of appeals with one consistent "act now" mark.

The voice is direct and second-person ("You Can Make a Difference", "Volunteers Needed!", "Fall Into the Habit of Donating Blood!"). Headlines are set in Roboto at weight 900, the heaviest cut the site loads, in dark grey rather than red; red is reserved for the action. Photography carries the emotion: real volunteers in red vests on disaster sites, blood donors, CPR trainees, families wrapped in Red Cross blankets. Illustration appears only as simple red-outlined circular icons in the "Special Ways to Share in Our Mission" and store sections, and as flat grey pictograms in the news carousel.

The overall impression is institutional, dense and practical: white canvas, grey utility header, red buttons, blue links, little decoration and no gradients in the measured page.

## Colors

- **Red Cross Red `#e11b22`** (`primary`) — the measured fill of every primary CTA (MAKE AN APPOINTMENT, GIVE NOW, FIND A CLASS, FIND YOUR OPPORTUNITY, SIGN UP NOW) and the site's root variable `--RC-red`. It is an action color, not a text color: only 24 measured characters of text use it.
- **Pressed red `#b2141a`** (`primary-hover`) — the measured background of the primary button after hover.
- **On-primary `#ffffff`** — button label color.
- **Canvas `#ffffff`** — the white of the content bands; it covers the most measured background area. The `body` element itself computes to **`#cccccc`** (`page-body`), which shows only where no band covers it.
- **Ink `#212529`** — section headings ("The Red Cross Mission At Work", 54px/900), form-field text and footer copy.
- **Heading grey `#333333`** (`ink-heading`) — the hero headline and hero sub-copy on the beige blood-drive band.
- **Link blue `#007caf`** (`link-blue`, root var `--RC-blue`) — the most-read text color on the page by character count, because the news carousel captions, "Read All News", store links and the text-link tiles all use it.
- **Slate `#6d6e70`** — input borders and a large grey background area.
- **Brick `#975149`** (`band-brick`) — the solid band behind "Deliver Life-Saving Blood in Your Community".
- **Hairline `#e9ecef`** — 1px borders on small buttons and tiles.
- **Header grey `#f0f0f0`** (`nav-bg`, root var `--RC-header-bg`), **footer grey `#e8e8e8`**, and the near-white **`#fbfbfb`** of the preparedness/store section.
- **Error `#dc3545`** — declared as `--RC-error` in the site's root variables (not seen rendered on the home page).

The page never uses red for large surfaces; the brand red appears as small, high-contrast rectangles against white, beige, brick or photography.

## Typography

Two families are loaded: **Roboto** (300, 400, 700, 900) for content and buttons, and **Open Sans** (300, 400, 700) for the header utility layer and form inputs. By measured character count Open Sans is slightly ahead (3,505 vs 2,194) because the header and dropdown menus are dense with it; Roboto carries every headline, paragraph and button.

| Role | Family | Size / line-height | Weight |
| --- | --- | --- | --- |
| Hero headline | Roboto | 48.64px / 52.0448px | 900 |
| Section heading | Roboto | 54px | 900 |
| Hero sub-copy | Roboto | 29.44px | 400 |
| Body | Roboto | 18px / 27px | 500 |
| Primary button | Roboto | 19.2px / 26.88px, uppercase | 700 |
| Small button | Roboto | 14px / 19.6px, uppercase | 700 |
| Header utility | Open Sans | 12.5px / 18.75px | 700 |
| Form input | Open Sans | 19.2px / 19.2px | 300 |
| Fine-print link | Roboto | 10px / 15px | 400 |
| Footer | Roboto | 12px / 18px | 400 |

On the 390px pass the hero headline is 30px/36px at 900 and section headings are 32px at 900. Letter-spacing is `normal` everywhere it was measured. Buttons are always uppercase; headlines are always title case. Both families are free Google Fonts, so no substitute is needed.

## Layout

The measured desktop page is 1,280px wide and 4,460px tall, built as ten horizontal bands:

1. Header (124px, near-white) with content between x=195 and x=1240.
2. Blood-drive hero (471px) on a beige photograph: headline, sub-copy, a ZIP field and the red button on the left half (x=30–610), a portrait on the right.
3. Brick band (202px) with an illustration card at left and a headline and small button at right.
4. A 971px photo region: a large "You Can Make a Difference" tile beside a four-photo mosaic, then the full-width CPR training band with a class-type select, ZIP field and FIND A CLASS button.
5. White news band (575px) — centered 54px heading, "Read All News" link, and a four-up carousel of grey pictograms with blue captions and side arrows.
6. Volunteer photo band (480px) with copy right-aligned (x=670–1250).
7. White "Special Ways to Share" band with four bordered tiles, each a red-outlined circle icon above an uppercase blue label.
8. A 1,192px near-white (#fbfbfb) section: four-column disaster-safety photo carousel with red labels on dark bars, then the store's four icon links, then a "Sign Up for News" panel.
9. A 62px grey (#e8e8e8) footer.

Most content runs from x=30 to x=1250, i.e. a 1,220px measure with 30px side gutters. Padding values are dominated by 10px, then 15px, 30px and 20px. Text alignment alternates: hero and photo bands are left-aligned, section headings in white bands are centered.

## Elevation & Depth

Depth is limited to a small family of measured shadows:

- `rgba(0, 0, 0, 0.15) 0px 2px 4px 0px` — on every red button and on the tiles (26 occurrences).
- `rgba(0, 0, 0, 0.16) 0px 2px 4px 0px` — a near-identical variant (20 occurrences).
- `rgba(0, 0, 0, 0.3) 0px 2px 15px 0px` — the header (root var `--RC-header-shadow`).
- `--RC-card-shadow: 0 0 2.4rem 0 rgba(0, 0, 0, 0.1)` is declared in root variables.

There are no layered surfaces, glass effects or gradients on the measured home page; depth comes from photography and from the contrast between white bands and the brick and photo bands.

## Shapes

The shape language is almost square. The only measured radius on buttons, inputs and tiles is **3px**; one element uses `50%` (a circle). Circular red-outlined icon frames appear in the mission and store sections. Photos are hard-edged rectangles butted together in the mosaic with thin white gutters. Nothing on the page uses pill-shaped buttons; the `pill` token records the single 50% circle only.

## Components

- **Primary button** — `#e11b22` fill, white uppercase Roboto 700 at 19.2px, padding 7px 16px, 41px tall, 3px radius, shadow `rgba(0,0,0,0.15) 0 2px 4px`. Hover darkens the fill to `#b2141a`; label color and shadow stay the same.
- **Small button** — the same red at 14px/700, padding 7px 6px, 36px tall, with a 1px `#e9ecef` border (DRIVE TO SAVE A LIFE, SIGN UP NOW, the safety-tip labels).
- **Text-link tile** — white tile, `#007caf` uppercase 14px/700 label, 1px `#e9ecef` border, 3px radius, the same soft shadow; used for the four "Special Ways" options under their icons.
- **Form field** — white, 1px `#6d6e70` border, 3px radius, Open Sans 300 at 19.2px in `#212529`, padding 6.5px 15px, 42px tall; a tiny label sits above ("Zip/Sponsor Code", "Select a Class Type"). Inputs always sit inline with a red button to their right.
- **Header** — `#f0f0f0` background with the strong `0 2px 15px rgba(0,0,0,0.3)` shadow, five visible links at desktop, Open Sans 12.5px/700 utility text (Sign In, Español, Your Local Red Cross).
- **News carousel** — four columns of flat grey pictograms with centered blue captions ending in "»", grey chevron arrows at both edges.
- **Safety carousel** — photo cards with a dark bar and a small red uppercase label button.
- **Newsletter panel** — a dark header strip with an envelope icon and "Sign Up for News", a white body with grey copy and a small red SIGN UP NOW button.
- **Footer** — `#e8e8e8`, Roboto 12px/18px in `#212529`.

## Design System Architecture

No public design system or brand-guidelines site for redcross.org could be opened: both https://www.redcross.org/brand and https://www.redcross.org/about-us.html returned HTTP 403 to the fetch tool (recorded in SOURCES.json). The de-facto system is visible in the shipped CSS custom properties, which use an `--RC-` prefix: `--RC-red: #E11B22`, `--RC-blue: #007CAF`, `--RC-header-bg: #f0f0f0`, `--RC-error: #dc3545`, a grey ramp (`--RC-gray-light #F6F6F6`, `--RC-gray-medium #CCCCCC`, `--RC-gray-dark #949494`, `--RC-disabled #707070`), `--RC-header-shadow`, `--RC-card-shadow`, `--RC-blue-gradient` and `--Roboto-font`. Donation-form weights are tokenized separately (`--Roboto-donation-form-weight: 500`, bold `600`). The page also loads Font Awesome 5/6 and a `rco-icon` icon font, and a font named `glyphicons-haflings-regular`.

## Do's and Don'ts

**Do**
- Use `#e11b22` for the one action in each band, as a 3px-radius uppercase Roboto 700 button with the 0 2px 4px shadow.
- Darken to `#b2141a` on hover.
- Set headlines in Roboto 900 in `#333333` or `#212529`, title case.
- Use `#007caf` for text links and link tiles.
- Pair a form field directly with a red button in the same row (ZIP + MAKE AN APPOINTMENT, class type + ZIP + FIND A CLASS).
- Use documentary photography of real volunteers, donors and disaster sites.

**Don't**
- Don't set headlines or long text in red.
- Don't round buttons beyond 3px or turn them into pills.
- Don't add gradients or glass surfaces; the measured page has none.
- Don't introduce a second accent color; blue is for links only.
- Don't use lowercase or sentence-case button labels.

## Responsive Behavior

Measured at 390px:

- The header shows 2 links and a visible menu toggle labelled "Menu" (desktop: 5 links, no toggle).
- Hero headline drops from 48.64px to 30px/36px at weight 900; section headings drop from 54px to 32px.
- Body text stays at 18px/27px.
- Band order changes in the mobile pass: "You Can Make a Difference" photo band comes first, then the blood-drive band (beige, 268px), then the brick band (493px tall on mobile versus 202px on desktop).
- Content spans x=19 to x=371, giving roughly 19px side gutters.
- The safety section measured as alternating 82px media bars and 275px near-white blocks.
- The footer measured 189px tall on mobile versus 62px on desktop.

Tablet breakpoints and menu-drawer contents were not measured.

## Iteration Guide

1. Start with white bands and the `#212529`/`#333333` Roboto 900 headings; add the brick (`#975149`) or a full-bleed photo for an emotional band.
2. Give each band one red action. If a band needs data entry, put a 42px white field with a `#6d6e70` border next to the button.
3. Keep side gutters at 30px on desktop and the content measure at about 1,220px; center headings in white bands, left-align copy over photos.
4. Use `#007caf` for secondary navigation inside content: "Read All News", carousel captions, store links.
5. For icons use red-outlined circles (mission and store) or flat grey pictograms (news) — never both in one band.
6. When writing microcopy, address the reader directly and attach a concrete benefit ("Come to give blood by Oct. 18 and we'll send you a $15 e-gift card").
7. Verify new values against the `--RC-` root variables before adding any; anything not in that set or in the measured page is outside the system.
