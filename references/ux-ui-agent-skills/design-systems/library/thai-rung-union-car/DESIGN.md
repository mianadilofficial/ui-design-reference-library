---
version: alpha
name: Thai Rung Union Car
category: "Thai Brands"
description: "Thai Rung Union Car corporate site (thairung.co.th/en): white canvas with #e8e8e8 grays, brand blue #1a4a99 on a #ecf6ff active-nav tint, Sukhumvit 16px body and 32px bold display, square 0px corners, one 12px header shadow and a Bootstrap 4 slider layout."
colors:
  canvas: "#ffffff"
  ink: "#4a4a4a"
  primary: "#ecf6ff"
  on-primary: "#1a4a99"
  surface-gray: "#e8e8e8"
  ink-strong: "#1c1c1c"
  ink-muted: "#808080"
  ink-nav: "#6d6e70"
  accent-cyan: "#00a5e1"
typography:
  display:
    fontFamily: Sukhumvit, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
  heading:
    fontFamily: Sukhumvit, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 28.8px
  body:
    fontFamily: Sukhumvit, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  button:
    fontFamily: Sukhumvit, -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 16px
rounded:
  xs: 10px
  none: 0px
  pill: 9999px
spacing:
  s1: 8px
  s2: 16px
  s3: 20px
  s4: 21px
  s5: 24px
  s6: 30px
  s7: 32px
  s8: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 16px
    height: 48px
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
    rounded: "{rounded.none}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 0px 12px 0px
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 16px 0px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
---

# Thai Rung Union Car (THAIRUNG)

## Overview
The measured site is thairung.co.th/en/, the English-language corporate site of Thai Rung Union Car Public Company Limited, the automotive manufacturer and industrial-products group whose logo (a blue oval "TR" emblem above the blue word THAIRUNG) heads every page. The extracted page language is `en-US`; the site also offers a Thai version through a language switch (ไทย / Eng) in the header.

The page is a full-screen, slide-by-slide homepage (the measured page height is only 800px, with a vertical dot navigation at the right edge). A white header holds the logo at the left and, at the right, a small gray utility line (Work with us, Contact Us, the language switch) over the main navigation: Home (the active item has a pale blue fill), The Company, Industrial Products, Investor, Technology, News & Event. The sliding content under the header sits on a pale gray background with a large faint ornamental scroll pattern and a thin gold horizontal band. At the time of capture, the first slide was a grayscale royal tribute with a portrait in an ornate frame and Thai script, and the page text includes the mobile heading "Thai Rung Union Car Public Company Limited" followed by "FROM A GREAT VISION TO A DEEP PASSION". That tribute slide is a seasonal editorial slide and is not documented as brand UI. A floating "Website Transformer" badge in the bottom-right corner is a third-party accessibility widget and is excluded.

The other slide headings in the page text are "EXCEPTIONAL QUALITY BY CONSTANT INNOVATION", "EXPANDING AUTOMOTIVE POSSILITIES" (spelled so on the site), "BUILDING A BETTER COMMUNITY" and "PRIDE IN OUR JOURNEY". The voice is aspirational corporate English in uppercase slogans; Thai strings appear in the contact block.

## Colors
The page is nearly all white and light gray. Backgrounds by area: `#ffffff` (5,634), `#e8e8e8` (1,024) and a pale blue `#ecf6ff` (3), which is the fill of the active and hovered navigation item. Text colors by characters: `#4a4a4a` (163, body text and the `ink` role), `#1a4a99` (116, the brand blue), `#1c1c1c` (60, navigation labels), `#808080` (49), white (38), `#6d6e70` (28) and `#b4b6b8` (14).

The brand blue is `#1a4a99`: it is the text color of the active navigation item and the links. The detected call-to-action is the navigation "Home" item with fill `#ecf6ff` and text `#1a4a99`, so `primary` here is the pale blue tint and `on-primary` is the brand blue. The stylesheet also contains `#19499c` (31 uses), `#00a5e1` (21 uses; a bright cyan, recorded as `accent-cyan`), the mobile heading color `#64cfec` and Bootstrap constants (`--yellow`, `--indigo`, `--pink`, `--teal`, `#dc3545`); the Bootstrap values are not brand colors. Interestingly the root variable `--green` is set to `#1a4a99`, meaning the brand blue was assigned to Bootstrap's `green` slot.

## Typography
Sukhumvit is the main family (430 characters measured), with Ramintra (38 characters) for display. Loaded fonts are Sukhumvit 400 and 700, Ramintra 400 and 700, and Gotham 700. Sukhumvit and Ramintra are Thai-language fonts (the stack falls back to system sans-serif); I could not confirm their license terms, so practical open substitutes are Prompt or Sarabun.

Measured roles: display 32px / 38.4px weight 700 (the mobile h1 also measures 32px / 38.4px); heading 24px / 28.8px weight 700; body 16px / 19.2px weight 400; button 16px / 16px weight 700. Sizes by characters: 16px (244), 14px (101), 18px (85), 60px (19) and 48px (19) with weight 900 (the large slide numerals or headlines). No letter-spacing was recorded. Weights used are 400, 700 and 900 only.

## Layout
The root variables contain Bootstrap 4 breakpoints: `--breakpoint-sm` 576px, `--breakpoint-md` 768px and `--breakpoint-lg` 1092px (the site's own larger value). The header is a white bar with a soft shadow (`rgba(0, 0, 0, 0.1) 0px 0px 12px 0px`); the content is a set of full-height slides stepped by a dot rail. Paddings measured: 16px (21 uses), 21px, 32px, 8px, 48px. The nav items are 48px-high blocks with 16px padding.

The content structure is therefore a sequence of self-contained screens rather than a long scrolling page: each slide pairs one uppercase English slogan with imagery, and the header persists above all of them. Because the extractor measured the page at a scroll height of 800px, the roughly 5,600 units of white area weight and 1,000 of gray come from the header, slide background and nav rather than from long-form content, which explains why so few colors, sizes and radii were recorded for this brand compared with a scrolling news or retail site.

## Elevation & Depth
There is one shadow: the header's `rgba(0, 0, 0, 0.1) 0px 0px 12px 0px`. Everything else is flat. Depth comes from the layered ornamental pattern in the slide background, the gold band, and photography.

## Shapes
The radius table has only two entries: 10px (1) and 100% (1, the dot-navigation circles). Every other element computes a 0px radius, so rectangles dominate: nav items, buttons and links are square. The tokens record `none: 0px` for buttons.

## Components
- **button-primary (active nav item):** fill `#ecf6ff`, text `#1a4a99`, Sukhumvit 16px weight 700, 0px radius, padding 16px, height 48px.
- **nav:** white `#ffffff` bar, text `#6d6e70`, with the single soft shadow; nav-link text takes `#1a4a99` on hover (the hover record shows `rgb(28, 28, 28)` becoming `rgb(26, 74, 153)` with a `rgb(236, 246, 255)` background).
- **link / footer:** text `#1a4a99`.
- **Language switch:** "ไทย" and "Eng" with an underline on the active language (seen in the capture; not separately measured).
- **Dot rail:** small circles at the right edge, the active one larger.

## Design System Architecture
No public design system, brand guideline or press kit was found; the homepage text lists company, products, investor, technology, news and careers links but no brand resource. The de-facto system is a Bootstrap 4 theme (Bootstrap variables such as `--gray-dark: #343a40`, `--yellow: #ffc107` and the grid breakpoints are present in the root variables) customized so that `--green` is the brand blue `#1a4a99`, plus a Swiper slider (`--swiper-navigation-size` is 44px) for the slide behavior. The type stack is Sukhumvit first, then the system fonts.

## Do's and Don'ts
- Do use `#1a4a99` for links and the active nav state, with the `#ecf6ff` tint as its background.
- Do keep corners square; only the dot navigation is round.
- Do use bold Sukhumvit uppercase English slogans for slide headlines.
- Do keep the header white with one soft 12px shadow.
- Don't use Bootstrap's yellow, indigo, pink or teal; they are framework defaults.
- Don't document the tribute slide or the floating widget as part of the brand UI.
- Don't add extra shadows or radii; none were measured.

## Responsive Behavior
Mobile (390px) was measured for type only: the h1 is 32px / 38.4px weight 700 in `#64cfec`, the h2 24px and the body 16px / 19.2px. The declared breakpoints are 576px, 768px and 1092px as root variables; menu and slide behavior on mobile is not measured.

## Iteration Guide
1. White canvas, `#4a4a4a` text, `#e8e8e8` gray fills, one shadow on the header.
2. Sukhumvit (or Prompt) at 16 / 24 / 32px; weight 700 for headings and buttons.
3. Brand blue `#1a4a99` on a `#ecf6ff` tint for active states.
4. Square corners everywhere except the dot rail.
5. Exclude seasonal tribute slides and floating widgets.
6. Verify with `node web/scripts/verify-designs.mjs --slug=thai-rung-union-car`.
