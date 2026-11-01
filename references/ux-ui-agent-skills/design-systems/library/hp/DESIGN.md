---
version: alpha
name: HP
category: "Consumer Electronics"
description: "HP (hp.com/us-en) measured live: forma-djr-micro typeface, electric blue #024ad8 Shop buttons with 8px radius and white text, #1a1a1a ink, white and #f5f5f5 surfaces, 56px display headings at weight 500, 16px card radius and product-photography tiles under an hpi- token system."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#024ad8"
  on-primary: "#ffffff"
  surface-2: "#f5f5f5"
  ink-3: "#000000"
  ink-4: "#3d3d3d"
  ink-6: "#e8e8e8"
typography:
  display:
    fontFamily: forma-djr-micro, Arial, sans-serif
    fontSize: 56px
    fontWeight: 500
    lineHeight: 56px
  display-mobile:
    fontFamily: forma-djr-micro, Arial, sans-serif
    fontSize: 36px
    fontWeight: 500
    lineHeight: 36px
  subheading:
    fontFamily: forma-djr-micro, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: forma-djr-micro, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: forma-djr-micro, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 18px
  link:
    fontFamily: forma-djr-micro, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 8px
  md: 16px
  lg: 74px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 12.8px
  s8: 13px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 36px
  button-primary-hover:
    backgroundColor: "{colors.ink-4}"
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.link}"
    padding: 12.8px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-4}"
  nav-link:
    textColor: "{colors.ink-4}"
    typography: "{typography.nav}"
    padding: 15px 2px
---

## Overview
The measured page is https://www.hp.com/us-en/home.html (title "Laptop Computers, Desktops, Printers, Ink & Toner | HP® Official Site", lang `en-us`), the United States storefront home page of HP. It is a clean, light retail page: a white header with the blue round HP logo, a text menu (Laptops, Desktops, Printers, Accessories, Subscriptions, Support) and an outlined "HP for Business" pill, plus search, cart and account icons at the right; a one-line promotional strip ("Early Black Friday Sale. Save up to 68% on select tech...") with a blue "Shop" link; and a split hero with a rounded laptop-and-AI-callouts image at the left and "Built for what's next / HP OmniBook 5 14"" with a paragraph and two buttons ("Learn" filled, "Shop" outlined) at the right.

Below, a pale-grey band titled "Our Products" lists six categories as icon-style product pictures with centred labels separated by thin vertical rules (Laptops, Desktops, Printers and Digital Presses, Cartridges & Paper, Monitors & Accessories, HP for Business). "Shop These Must Haves" shows four product cards (HP Z Workstations, OmniBook 7 Laptops, OmniDesk PCs, Workspace Solutions), each with a short description and a blue Shop button. An editorial banner, "The race to adapt" (HP's 2026 Work Relationship Index), uses a full-bleed photograph with white text and a light "Explore the Research" button. The voice is clear and benefit-led, with short sentences and sentence-case headings.

## Colors
- **Canvas** `#ffffff` (7355 area): header, hero and card backgrounds.
- **Surface** `#f5f5f5` (3834): the grey bands behind product sections; the root variable `--hpi-mode-background-default` is the same value.
- **Ink** `#1a1a1a` (2496 characters): headings and body text (`--hpi-mode-foreground-default`). Navigation and link text is `#3d3d3d` (`--hpi-mode-foreground-medium`), pure `#000000` appears on 130 characters, and borders and disabled fills use `#e8e8e8`.
- **Primary** `#024ad8` (1824 area; `--hpi-color-electric-blue-7`): the Shop, Learn buttons and text links. The root scale has twelve electric-blue steps from `#e4eefa` (0) to `#0a1d4e` (12), including `#296ef9` (6), `#103fb2` (8) and `#0e3191` (9).
- **Dark** `#1a1a1a` is also a background (762), used for the dark Learn button variant, which turns `#3d3d3d` on hover (measured rgb(61, 61, 61)).
- **Orange bloom** reds such as `#ff5050` and `#b3262b` are declared in the root variables but do not measure on the visible page.

## Typography
The family is "forma-djr-micro" (4103 characters, all text), with Arial as the declared fallback and "Helvetica Neue", Helvetica for navigation text. Variables declare weights light 300, regular 400, medium 500 and bold 700; measured use is 400 (2540 characters), 500 (1535) and 700 (28).

- **display**: 56px / 500, line-height 56px ("The website that builds around you.", "HP OmniBook 5 14"" style headings).
- **display-mobile**: 36px / 500, line-height 36px.
- **subheading**: 24px / 500, line-height 28px.
- **body**: 16px / 400, line-height 24px.
- **nav**: 14px / 400, line-height 18px.
- **link**: 16px / 400.

Other measured sizes are 24px (955 characters), 12px (692), 20px (575) and 18px (346). Headings are sentence case without tracking. The face is a commercial typeface served by HP; no substitute was measured.

## Layout
Desktop pass: 1280px wide, 6273px tall. The nav row is 48px tall. Content is a left-aligned container with generous side margins; the hero is a 50/50 split where the image bleeds to the left edge with a rounded right side, the category row is six equal columns with 1px dividers, and product cards are four equal columns. The editorial banner is a rounded full-width image container. Section headings sit at the left edge of the container above each grid. Spacing steps in the tokens are 2, 4, 6, 8, 10, 12, 12.8, 13, 15 and 16px.

## Elevation & Depth
No box shadows were measured. The root variable `--hpi-mode-effects-drop-shadow` is `rgba(26,26,26,.2)` and `--hpi-mode-effects-highlight-default` is `rgba(81,140,255,.1)`, but no rendered element used a shadow. Depth comes from the white / `#f5f5f5` surface alternation, rounded product-photo tiles, and the dark overlay over banner photography.

## Shapes
Radii measured: 16px (32 elements, cards, image tiles and banners), 8px (31 elements, buttons), 74px (one element, the outlined "HP for Business" pill) and 3px (one). The primary button uses 8px. Product tiles sit in 16px-rounded light-grey containers; the carousel control is a pill-shaped grey capsule at the bottom left of the hero image.

## Components
- **button-primary**: `#024ad8` fill, white 16px text, 8px radius, padding 6px 12px, 36px tall ("Shop", "Learn"); hover darkens the dark variant to `#3d3d3d`.
- **secondary button**: white fill with a blue outline and blue text, same size ("Shop" beside "Learn").
- **light button**: grey fill with dark text over photography ("Explore the Research").
- **nav / nav-link**: white bar, `#3d3d3d` 14px links with 15px 2px padding.
- **pill**: "HP for Business" with 74px radius and blue outline.
- **product card**: image tile, 24px title, 16px description, blue Shop button.
- **link**: 16px `#3d3d3d` with 12.8px padding (skip links).

## Design System Architecture
No public design system or brand guideline was found on the page. The shipped CSS reveals an internal system with the prefix `hpi-`: 99 root variables including colour scales (`--hpi-color-electric-blue-0` to `-12`, `--hpi-color-gray-7: #636363`, `--hpi-color-gray-10: #292929`, `--hpi-color-orange-bloom-*`), semantic mode tokens (`--hpi-mode-foreground-default: #1a1a1a`, `--hpi-mode-background-default: #f5f5f5`, `--hpi-mode-background-container-default: #fff`, `--hpi-mode-stroke-decorative-default: #e8e8e8`, `--hpi-mode-stroke-informative-default: #858585`, with hover and active variants), effect tokens, and font variables `--font`, `--font-light`, `--font-bold` and `--font-weight-*`. Colour tokens are therefore organised by role (foreground, background, stroke) and by state (default, hover, active, disabled); only the one mode measured on the page is documented here.

## Do's and Don'ts
- Do use `#024ad8` for primary actions and links, with white text, 8px radius and 36px height.
- Do set headings at weight 500 in forma-djr-micro, 56px on desktop.
- Do alternate white and `#f5f5f5` sections and round image containers at 16px.
- Do use the `--hpi-mode-*` role names when mapping colours.
- Don't add shadows to cards; none were measured.
- Don't use the unmeasured orange-bloom reds as UI colours.
- Don't use browser-default link blue.

## Responsive Behavior
At 390px the mobile pass measured: the first and second headings at 36px / 500 (56px on desktop), body text at 14px, the "Learn" button 112px wide by 36px tall in `#024ad8`, and frequent sizes 18px (1400 characters), 14px, 16px, 12px, 36px and 24px. The nav block was not detected at mobile width. Other responsive behaviour is not measured.

## Iteration Guide
1. Start with a white header, a promo strip and a split hero with a rounded image.
2. Put product categories on a `#f5f5f5` band with six columns and thin dividers.
3. Use 16px-rounded image tiles with 24px titles, 16px descriptions and 36px `#024ad8` buttons.
4. Keep all text in forma-djr-micro: 500 for headings, 400 for body.
5. Add one editorial photo banner with white text and a light button.

## Notes for Rebuilding
The page keeps a very small set of surfaces and one action colour, so fidelity depends on proportions. Headline copy runs in a tight 56px line height (equal to the font size) at weight 500, while card titles use 24px at a 28px line height and descriptions use 16px at 24px. The hero pairs a filled and an outlined button of the same 36px height and 8px radius, so emphasis is carried by fill alone. The promotional strip above the hero is plain text on white with a single blue link, not a coloured banner. Category tiles in the "Our Products" band have no card chrome; they are product pictures with centred labels separated by 1px vertical rules, on the `#f5f5f5` surface. The measured hover on the dark "Learn" button lightens its fill from `#1a1a1a` to `#3d3d3d` without altering text or border colours.
