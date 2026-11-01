---
version: alpha
name: "MoveMax"
category: "Thai Brands"
description: "MoveMax (movemax.me) is a Thai transport management software brand, measured live: Kanit type at weights 300 to 700, an orange #f36915 demo button with 8px corners, electric-blue #0016fff0 headings, a #54595f body ink and 26px-radius service cards on white."
colors:
  canvas: "#ffffff"
  ink: "#54595f"
  primary: "#f36915"
  on-primary: "#ffffff"
  surface-2: "#f9fafa"
  surface-3: "#ebebeb"
  ink-3: "#7a7a7a"
  ink-4: "#0016fff0"
  ink-5: "#282828"
  hairline: "#d8d8d8"
  button-secondary-bg: "#0fcb29"
  nav-text: "#0f1bce"
  card-text: "#000000"
typography:
  display:
    fontFamily: Kanit, sans-serif
    fontSize: 25px
    fontWeight: 400
    lineHeight: 77.5px
    letterSpacing: 0.2px
  display-mobile:
    fontFamily: Kanit, sans-serif
    fontSize: 22px
    fontWeight: 500
    lineHeight: 17.6px
  heading:
    fontFamily: Kanit, sans-serif
    fontSize: 20px
    fontWeight: 300
    lineHeight: 34px
    letterSpacing: 0.6px
  subheading:
    fontFamily: Kanit, sans-serif
    fontSize: 45px
    fontWeight: 400
    lineHeight: 45px
    letterSpacing: "-1.7px"
  body:
    fontFamily: Kanit, sans-serif
    fontSize: 24px
    fontWeight: 300
    lineHeight: 40.8px
    letterSpacing: 0.5px
  nav:
    fontFamily: Kanit, sans-serif
    fontSize: 23px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 6px
  sm: 7px
  md: 8px
  lg: 9px
  xl: 12px
  2xl: 26px
  pill: 9999px
spacing:
  s1: 5px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 13px
  s6: 16px
  s7: 18px
  s8: 19px
  s9: 22px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
    rounded: "{rounded.md}"
    padding: 18px 26px
    height: 76px
    boxShadow: rgba(0, 0, 0, 0.5) 0px 0px 10px 0px
  button-primary-hover:
    backgroundColor: "{colors.ink-3}"
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.canvas}"
    typography: "{typography.display-mobile}"
    rounded: "{rounded.lg}"
    padding: 6px 12px
    height: 34px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.heading}"
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.nav-text}"
    typography: "{typography.nav}"
    padding: 19px 13px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 10px
    height: 56px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.12) 0px 1px 2px 0px inset
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.2xl}"
    padding: 35px 68px
    borderColor: "{colors.hairline}"
---

# MoveMax

## Overview

MoveMax is a Thai software company selling transport and logistics tools. The measured page is the English home page at https://movemax.me/en/home/, whose document title is "MoveMax – โปรแกรมขนส่ง ระบบ TMS" (Thai for transport program, TMS system). The page opens with a thin electric-blue strip carrying two phone numbers (095-798-9568 and 095-526-5868) and a green "@movemax" chat link, then a white header with the MoveMax wordmark and a round certification badge, a navigation row (Home, Our Services, Price, Reseller, Contact us, an EN language switch) and an orange "Demo Appointment" button at the far right.

Under the header a full-width blue hero carousel shows a slide titled "Vehicle Route Planning (VRP)" in white, with the description "VRP is the Systems for automatically route planning & optimization. it can generate vehicle task and planning by Artificial-Intelligence (AI)". The artwork is an isometric illustration of a truck on a city map over a phone. Below, a blue all-caps heading "OUR SERVICES ?" introduces three bordered cards: TMS (Transportation Management System), VRP (Vehicle Route Planning) and BSS (Business Strategic & Services). A second heading, "How can increase the benefit for your Busine$$...", leads into benefit cards such as "Reduce Time to route planning", "Reduce Vehicle" and "Reduce Cost", whose body copy quotes figures in baht.

The tone is promotional and benefit-first, with literal English translated from Thai ("If you looking for a platform for your transport and logistics business, MoveMax can help"). Product names are acronyms (TMS, VRP, BSS), keywords inside body copy are picked out in orange, and illustrations are flat, light-blue and orange vector scenes of trucks, phones and charts. The site is built on WordPress: the measured root variables are the stock `--wp--preset--*` set plus a Swiper carousel variable, so brand styling lives in the theme rather than in named tokens.

## Colors

The canvas is white, #ffffff, covering by far the largest area, with #f9fafa (`surface-2`) and #ebebeb (`surface-3`) as quiet alternate section and panel tones. Text is mostly the grey #54595f (`ink`), measured on 2,029 characters, with #7a7a7a (`ink-3`) for secondary text and #282828 (`ink-5`) for darker headings inside cards.

Two saturated colors carry the brand. The orange #f36915 (`primary`) is the fill of the Demo Appointment button and the highlight color of key phrases in the cards ("Logistic Business & transportation Services", "AI technology", "Business Transformation"); it is measured as text on 326 characters. The electric blue #0016fff0 (`ink-4`, an 8-digit value with alpha f0) is the heading color of "OUR SERVICES ?" and the benefit headline and the hero fill; it is the background on 228 area-weight units and the text color on 559 characters. A second blue, #0f1bce (`nav-text`), is the navigation link color and the hover color of nav items; it also appears as a background (weight 65) on the top strip.

A green #0fcb29 (`button-secondary-bg`) fills the small "@movemax" chat-style button in the top strip with white 22px text. Hairline borders are #d8d8d8 (`hairline`), used on cards and the input. Hover on the primary button swaps the fill from #f36915 to the grey #7a7a7a (`ink-3`) while keeping white text.

Social brand colors are present in the CSS and must not be read as MoveMax colors: #3b5998, #c4302b, #00c300 and #318ffc each have an area weight of 1 or less and are not used as site colors. The stock WordPress palette (for example #0693e3, #9b51e0) appears only as root variables and is not used in the measured design.

## Typography

The page is set almost entirely in Kanit, a Thai and Latin sans-serif, with a generic sans-serif fallback ("Kanit, sans-serif"). Kanit measures 4,451 characters against 870 for Tahoma and 190 for Open Sans, which are fallback or plugin text. The loaded font list shows Kanit at 300, 400, 500 and 700. Weight 300 dominates (3,577 characters), then 400 (1,410), 500 (435) and 700 (83).

Measured roles:
- `display`: the h1 at 25px, weight 400, line-height 77.5px, letter-spacing 0.2px, in #54595f. The h1 is the intro sentence under the services heading.
- `heading`: the h2 at 20px, weight 300, line-height 34px, letter-spacing 0.6px.
- `subheading`: the h3 "OUR SERVICES ?" at 45px, weight 400, line-height 45px, letter-spacing -1.7px, in electric blue.
- `body`: 24px, weight 300, line-height 40.8px, letter-spacing 0.5px (the hero description, white on blue).
- `nav`: 23px, weight 400, line-height 20px.
- `display-mobile`: 22px, weight 500, line-height 17.6px.

The most used size by character count is 18px (1,690), followed by 20px (827), 22px (761), 24px (661), 25px (364) and 28px (339). Larger display sizes are 45px (104 characters), 44px, 48px and one 98px measurement. Tight negative tracking (-1px to -1.7px) is applied only on the 45px headings; other sizes use 0.2px to 0.6px positive tracking. Text is not transformed through CSS except where the copy itself is typed in capitals ("OUR SERVICES ?", "CONTACT TO DEMO").

Kanit is a free Google Fonts family, so no substitute is needed; if it fails to load, the declared fallback is the browser's default sans-serif, whose Thai glyph shapes will differ.

## Layout

The measured page is 1280px wide and 9,625px tall in the desktop pass, which makes it a long single-page marketing scroll. The structure is a top strip, a header with logo and navigation, a hero carousel, then centred sections each beginning with a large heading and a one-line subtitle. Cards sit in a row of three with equal width and roughly equal gutters, bordered and lifted.

Spacing values measured as paddings, by weight, are 10px (47), 30px (46), 48px (11), 28px, and 68px (7 each), then 19px, 13px, 18px and 16px. Gaps of 5px and 10px are used inside rows. The spacing tokens `s1` to `s10` in the frontmatter list 5, 8, 10, 12, 13, 16, 18, 19, 22 and 28px. The card token uses 35px 68px padding; the primary button uses 18px 26px; navigation links use 19px 13px.

Sections are generous vertically. In the capture the headings are centred, the card copy is centred under small illustrations, and the "WHY MOVEMAX" label sits to the left of a row of three benefit cards.

## Elevation & Depth

Depth is soft and wide. The most frequent shadow is rgb(216, 216, 216) 0px 0px 25px 0px, measured on 22 elements: a pale grey glow around cards that makes them float on white without a hard edge. A directional variant, rgb(216, 216, 216) 5px 4px 10px 0px, appears twice. The primary button has a stronger rgba(0, 0, 0, 0.5) 0px 0px 10px 0px halo (`button-primary.boxShadow`), and two further darker shadows (rgba(0, 0, 0, 0.5) 1px 3px 8px 2px and rgba(0, 0, 0, 0.66) 0px 0px 10px 0px) were measured once each. Form inputs use an inset shadow, rgba(0, 0, 0, 0.12) 0px 1px 2px 0px inset. Borders are 1px #d8d8d8, with one #e9e9e9.

## Shapes

Radii are rounded and varied. The measured frequencies are 8px (29 elements), 26px (7), 10% (4), 7px (4), 12px (2), 9px and 6px (1 each). In `rounded`: `xs` 6px, `sm` 7px, `md` 8px, `lg` 9px, `xl` 12px, `2xl` 26px and `pill` 9999px. The Demo Appointment button uses `md` (8px); the green chat button uses `lg` (9px); the text input uses `sm` (7px); the large service cards use `2xl` (26px), which gives them their soft, bubble-like outline.

## Components

**Primary button** (`button-primary`): fill #f36915, white label in the `heading` style (20px, weight 300, Kanit), padding 18px 26px, height 76px, 8px radius, halo shadow of rgba(0, 0, 0, 0.5) 0px 0px 10px 0px. Copy used on the page: "Demo Appointment", "CONTACT TO DEMO". Hover changes the fill to #7a7a7a.

**Secondary button** (`button-secondary`): fill #0fcb29, white 22px weight 500 label, padding 6px 12px, height 34px, 9px radius; it is the "@movemax" contact link in the top strip.

**Navigation** (`nav`, `nav-link`): text only, 23px weight 400 in #0f1bce with 19px 13px padding per link; the active item (Home) carries an orange underline in the capture, and every link turns #0f1bce on hover from #54595f. Dropdown carets mark Our Services and Contact us.

**Text input** (`text-input`): white fill, #54595f text at 23px, padding 10px, height 56px, 1px #d8d8d8 border, 7px radius and the inset shadow.

**Card** (`card`): white fill, black text, 26px radius, padding 35px 68px and a #d8d8d8 border; the soft grey glow shadow is measured on cards generally. Inside: a flat illustration, a bold black title (TMS, VRP, BSS), then a centred description with orange keywords.

**Link** (`link`): white text at the `heading` style, used for the phone numbers on the blue strip.

The cookie bar (cookie-law-info-bar) was hidden during capture and is not part of the system.

## Design System Architecture

No public design system or brand guideline for MoveMax was found linked from the home page, and none was opened for this document. The de-facto system is a WordPress theme with the page-builder-style styling that the stock `--wp--preset--*` variables indicate (font sizes small 13px and large 36px, a default preset color list, spacing presets such as 0.67rem, 1.5rem, 2.25rem and 3.38rem). Those presets are WordPress defaults and none of their colors are used here. Carousel controls come from Swiper (`--swiper-navigation-size: 44px`). Icons come from three icon fonts in the loaded list: eicons, Font Awesome 5 Brands and Font Awesome 5 Free. The brand layer is therefore expressed in the theme CSS: Kanit as the type family, orange #f36915 as the action color, blue #0016fff0 for headings and the hero, and 26px rounded white cards. Source reviewed: https://movemax.me/en/home/ only.

## Do's and Don'ts

Do set copy in Kanit at weight 300 for body and 400 to 500 for emphasis, with the positive 0.2px to 0.6px tracking measured on the page.

Do use the orange #f36915 for the single demo call to action and for keyword highlights inside card copy.

Do use electric blue #0016fff0 for section headings and the hero field, and #0f1bce for navigation links and hover.

Do round service cards at 26px and buttons at 8px, with a pale grey glow shadow on cards.

Don't use the share-icon colors (#3b5998, #c4302b, #00c300, #318ffc) or the WordPress preset palette as brand colors.

Don't add dark drop shadows to cards; the card shadow measured is the pale rgb(216, 216, 216) glow.

Don't set headings at 45px without the tight -1.7px tracking measured on the "OUR SERVICES ?" heading.

## Responsive Behavior

Only the 390px mobile pass was recorded. In it the body text stays 24px at weight 300 with line-height 40.8px and letter-spacing 0.5px (width 356px); the h2 phone number remains 20px; the Demo Appointment button measures 14px, weight 300, padding 12px 16px, 8px radius and 154px width with the same #f36915 fill; and the character count by size is led by 18px (3,318) and 14px (1,159). The mobile pass picked the "@movemax" label (22px, weight 500) as its first heading. Breakpoints, column counts and how the navigation or card rows are arranged on mobile were not measured.

## Iteration Guide

1. Start with `canvas` #ffffff, `ink` #54595f, `primary` #f36915 with `on-primary` #ffffff, and the blue #0016fff0 for headings.
2. Set everything in Kanit; use 24px weight 300 for lead copy, 20px for card copy and 45px with -1.7px tracking for section titles.
3. Build the section order: phone strip, header with orange demo button, blue hero carousel, services headline, three 26px cards, benefit headline, benefit cards.
4. Keep corner radii to 8px on controls and 26px on cards; use the pale 25px grey glow on cards.
5. Run `node web/scripts/verify-designs.mjs --slug=movemax` after edits and re-measure with the extractor if the live page changes.
6. Anything not in the frontmatter or in `web/data/extracted/movemax.json` should be left out, not estimated.
