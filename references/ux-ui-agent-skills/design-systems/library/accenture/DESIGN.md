---
version: alpha
name: Accenture
category: "Agencies & Studios"
description: "Accenture English homepage measured at accenture.com/en: black #000000 canvas with white text, uppercase Graphik 600 hero headline at 80px with -3px tracking, GT Sectra Fine 300 serif subheads, warm grey #f1f1ef story cards and flat purple #460073, blue #0041f0 and red #e2062e tiles."
colors:
  canvas: "#000000"
  ink: "#ffffff"
  primary: "#ffffff"
  surface-card: "#f1f1ef"
  ink-muted: "#a2a2a0"
  accent-purple: "#a100ff"
  card-purple: "#460073"
  card-purple-deep: "#39005e"
  card-blue: "#0041f0"
  card-red: "#e2062e"
typography:
  display:
    fontFamily: Graphik, sans-serif
    fontSize: 80px
    fontWeight: 600
    lineHeight: 88px
    letterSpacing: "-3px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Graphik, sans-serif
    fontSize: 42.9px
    fontWeight: 600
    lineHeight: 49.335px
    letterSpacing: "-1.44px"
    textTransform: uppercase
  heading:
    fontFamily: Graphik, sans-serif
    fontSize: 18.3111px
    fontWeight: 700
    lineHeight: 27.4667px
  subheading:
    fontFamily: "\"GT Sectra Fine\", Palatino"
    fontSize: 28px
    fontWeight: 300
    lineHeight: 35px
  body:
    fontFamily: Graphik, Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: "-0.07px"
  nav:
    fontFamily: Graphik, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 16px
rounded:
  none: 0px
spacing:
  s1: 6px
  s2: 8px
  s3: 16px
  s4: 24px
  s5: 28px
  s6: 32px
  s7: 40px
  s8: 48px
  s9: 60px
  s10: 72px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview
Accenture's English homepage (title "Reinvented with Accenture", lang en) is a black, editorial page for a professional-services company. The header lists Services, Products, Insights, About Us and Careers, with Contact Us, Careers and Locations as utility links; the footer carries Privacy Statement, Terms & Conditions, Cookie Policy/Settings, Accessibility Statement and social links. The main heading reads "Together We Reinvented", set in huge uppercase Graphik.

The capture shows the hero area as empty black with a pause control: the hero headline is animated and the measured hero span carries a transform of translateX(-1280px), so the text is off-screen in the screenshot. Below it, a grid of tall story cards (4 columns, 2 rows) shows announcements and perspectives: a solid deep-purple card, pale warm-grey cards with line illustrations (people around an "AZ" screen, data-centre diagrams), and cards with abstract 3D renders (purple glass cubes, blue light waves, grey spheres on a track). Each card has an uppercase label ("ANNOUNCEMENT", "PERSPECTIVE"), a 16px-class headline and an "Expand" link with a chevron. A pull-quote section follows ("human in the lead, not human in the loop." by Julie Sweet) beside a portrait on a tan background, and a "Client spotlight" section lists case studies with "Explore" chevron links.

## Colors
The page is black: `{colors.canvas}` (#000000) covers 6474 area-weight units; white `{colors.ink}` is 3233 text weight against 1020 for black text on light cards. `{colors.surface-card}` (#f1f1ef) is the warm grey of the perspective cards (234 units). `{colors.ink-muted}` (#a2a2a0) is the measured hover colour of the header buttons (white to rgb(162, 162, 160)). The card fills measured on the page are `{colors.card-purple}` (#460073), `{colors.card-purple-deep}` (#39005e), `{colors.card-blue}` (#0041f0) and `{colors.card-red}` (#e2062e), with 177 units each for the first, blue and red and 117 for the deeper purple. `{colors.accent-purple}` (#a100ff) appears as the saturated purple in illustrations (1 unit). The extractor found no filled button, so `{colors.primary}` is white, the colour of the main links and header text.

Shadows include a focus ring `0 0 0 5px #19f` (a blue, listed 8 times in the stylesheet), a white 2px ring, and an elevation `0 8px 12px 6px rgba(0,0,0,.15), 0 4px 4px rgba(0,0,0,.3)`.

## Typography
Graphik (400, 500, 600) is the main family, with GT Sectra Fine (300) as a serif for card and section headings and an "icont" icon font. The stylesheet also lists Manrope (24 uses). Fallbacks are Arial, Helvetica and sans-serif, and Palatino for the serif.

- `{typography.display}`: Graphik 600 at 80px / 88px, -3px tracking, uppercase. Mobile: 42.9px / 49.335px, -1.44px.
- `{typography.heading}`: Graphik 700 at 18.3111px / 27.4667px ("Shaping tomorrow, today"). Mobile 14.7px / 22.05px.
- `{typography.subheading}`: GT Sectra Fine 300 at 28px / 35px ("A Leader in Reinvention").
- `{typography.body}`: Graphik 400 at 14px / 21px, -0.07px. Mobile 12px / 18px.
- `{typography.nav}`: Graphik 400 at 16px / 16px.

Font substitutes: Graphik is a commercial grotesque and GT Sectra Fine a commercial serif; the site's own fallbacks are Arial/Helvetica and Palatino.

## Layout
Desktop width is 1280px with a page height of 7305px. The header height variable is `--rad-global-header-height: 72px` and the nav height `--rad-nav-height: 56px`. The story card grid is four equal columns with narrow gutters, each card tall and portrait. Spacing variables `--rad-spacing-sm: 16px`, `-md: 32px`, `-lg: 48px`, `-xl: 96px`, `-xxl: 160px` and component spacings 10px, 20px and 40px give the vertical rhythm; the measured spacing set is 6, 8, 16, 24, 28, 32, 40, 48, 60 and 72px. Sections alternate between full-width black and an inset image-plus-quote row at about 60px from the left edge.

## Elevation & Depth
Role-level shadows are none. The stylesheet declares one elevated style (`0 8px 12px 6px rgba(0,0,0,.15), 0 4px 4px rgba(0,0,0,.3)`) used 8 times, which is a menu or overlay shadow; it is not seen on the cards in the capture. Cards are flat colour fields or images.

## Shapes
The radius frequency table is empty for the visible elements; cards and images render square. The stylesheet lists 8px (36 uses), 4px (15), 1px (11), 3px (9) and 20px (4) in component rules, but which visible elements use them was not measured, so the only radius token is `{rounded.none}` (0px), the measured border-radius of the body, headings and navigation roles.

## Components
**Story card**: portrait tile with either a coloured fill (`{colors.card-purple}`) or a `{colors.surface-card}` field with an illustration, an uppercase label, a headline, and a white strip at the bottom with "Expand" and a chevron on image cards.

**Header navigation**: black bar, 72px, white 16px Graphik text; hover turns text and border to `{colors.ink-muted}`.

**Text link with chevron**: "Explore" and "Expand" in 14px type, white on black.

**Quote block**: large white sentence in Graphik, attribution in small type, beside a portrait on a tan field.

**Pause control**: small pause icon at the left of the hero for the animation.

## Design System Architecture
The homepage opened for this document (https://www.accenture.com/en) links no brand guideline or design system; it links "Media Relations" to newsroom.accenture.com, which was not opened. The shipped CSS shows a prefixed token set named `--rad-*`: `--rad-spacing-sm|md|lg|xl|xxl`, `--rad-component-spacing-none|small|medium|large` (0, 10px, 20px, 40px), `--rad-nav-height`, `--rad-global-header-height`, and subnav margins for tablet (48px), desktop (80px) and wide desktop (107px). Components therefore take spacing from named steps instead of raw pixel values.

Voice and imagery: headings are declarative and forward-looking ("Together We Reinvented", "Shaping tomorrow, today", "A Leader in Reinvention"), and the cards mix two visual languages: monochrome line illustrations of people and devices on warm grey, and glossy abstract 3D renders in purple, blue and silver. Photography is limited to portraits against a flat tan backdrop. The page density is moderate to high: eight cards are visible at once, but each has only a label, a headline and one link, so the text load per card stays small.

The client-spotlight list at the bottom of the capture is a plain stack of white headlines on black, each followed by an "Explore" link with a chevron, so the same link pattern used on cards is reused outside them.

## Do's and Don'ts
- Do put content on black with white text, and use light warm-grey cards for illustrated pieces.
- Do set the hero headline in uppercase Graphik 600 with -3px tracking.
- Do use GT Sectra Fine 300 for editorial subheadings.
- Do label each card in small uppercase before its headline.
- Don't use drop shadows on cards.
- Don't add a coloured primary button; the measured page has none.
- Don't use the blue focus ring colour (#19f) as a brand fill.

## Responsive Behavior
Measured at 390px: h1 42.9px / 49.335px, h2 14.7px / 22.05px, body 12px / 18px with a 252px wide box, the h1 box 338px wide; the mobile header shows the items "Menu", "Close Menu", Services, Products, Insights, About Us, Careers on a black background. Card grid columns at narrow widths, and tablet breakpoints, were not measured (the stylesheet names a tablet subnav margin of 48px).

## Iteration Guide
1. Black canvas, white text, `{colors.surface-card}` for light cards.
2. Headline 80px uppercase Graphik 600, -3px tracking; serif subheads in GT Sectra Fine 300 at 28px.
3. Four-column portrait card grid with uppercase labels and "Expand" links.
4. Use `{colors.card-purple}`, `{colors.card-blue}` or `{colors.card-red}` as flat tile fills; keep `{colors.accent-purple}` for illustration accents.
5. Hover on header items: text to `{colors.ink-muted}`.
6. Other hover and dark/light switching are not measured.
