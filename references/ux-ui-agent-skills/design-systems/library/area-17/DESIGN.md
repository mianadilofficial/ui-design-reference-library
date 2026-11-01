---
version: alpha
name: AREA 17
category: "Agencies & Studios"
description: "AREA 17's site is a restrained white #ffffff page in Suisse Intl: 55px/500 statements with -0.825px tracking, 16px/400 body (+0.064px), #1a1a1a ink, #949494 grey lists, light-grey #f2f2f2 buttons with 8px radius and 16px 24px padding, #e6e6e6 hairlines, full-bleed black #000000 media sections and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#1a1a1a"
  primary: "#f2f2f2"
  on-primary: "#1a1a1a"
  surface-dark: "#000000"
  ink-muted: "#949494"
  ink-subtle: "#757575"
  grey-666: "#666666"
  hairline: "#e6e6e6"
  grey-e1: "#e1e1e1"
  on-media-button: "#ffffff33"
  yellow: "#fdf313"
  green: "#39df4a"
  red: "#ff0000"
typography:
  display:
    fontFamily: SuisseIntl, Arial, sans-serif
    fontSize: 55px
    fontWeight: 500
    lineHeight: 60.5px
    letterSpacing: "-0.825px"
  display-mobile:
    fontFamily: SuisseIntl, Arial, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 36.8px
    letterSpacing: "-0.384px"
  subheading:
    fontFamily: SuisseIntl, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: SuisseIntl, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: 0.064px
  body-mobile:
    fontFamily: SuisseIntl, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    letterSpacing: 0.056px
rounded:
  xs: 4px
  sm: 8px
  pill: 9999px
spacing:
  s1: 8px
  s2: 12px
  s3: 16px
  s4: 24px
  s5: 32px
  s6: 48px
  s7: 64px
  s8: 75px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px 24px
    height: 54px
  button-on-media:
    backgroundColor: "{colors.on-media-button}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    height: 54px
  link-on-media:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 0px 12px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 16px
    height: 56px
    borderColor: "{colors.hairline}"
  card:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# AREA 17

## Overview

AREA 17 (area17.com, page title "AREA 17 — Brand, experience, and technology transformation") describes its aim, on its Culture page, as to "co-create the world we want to live in through craft, impact and soul", with the lines "We combine aesthetics and functionality to create art in service of life" and "Enhance life—don't distract from it". The page says co-founders Arnaud Mercier and George Eid set out to apply modernist design principles to the web, and lists a team of 57 across strategy, design, engineering and production, with managing directors for North America and for Europe & Asia. AREA 17 also maintains open-source tools, notably the Laravel CMS toolkit Twill.

The home page is quiet and typographic. The capture shows the "A/" monogram at top left and a small nav at top right ("Clients", "Capabilities", "Culture", "Contact", "Latest"). The opening statement "We partner with the world's most influential organizations to realize their vision and achieve their greatest impact." is set in Suisse Intl at 55px, followed by a full-width video of a man walking. A long section below it measures as black #000000 (a "We partner with" client reel, with white 55px client names such as "ElevenLabs" and "Lucas Museum of Narrative Art"), which rendered as empty white space in the capture. Then the second statement, "We're consultants and craftspeople. We integrate brand, experience, and technology to create lasting value for our clients.", with two grey buttons ("See our capabilities", "Explore our culture"); an "Industries we serve" list in large grey type; a "Latest updates" list of news rows with category labels (News, Clients, Ideas), headlines and square thumbnails; and a closing "Let's explore how we can help you achieve your goals." with "Get in touch".

## Colors

The CSS ships its palette as short-named custom properties; the values are:

- **Canvas `#ffffff`** (`--4n`) — the page background (11,970 area units).
- **Ink `#1a1a1a`** (`--4o`) — the text colour for statements, nav and body (1,607 characters).
- **Primary `#f2f2f2`** (`--7b`) with **on-primary `#1a1a1a`** — the fill of the buttons "See our capabilities", "Explore our culture", "More updates" and "Get in touch". AREA 17's actions are light grey, not dark.
- **Surface-dark `#000000`** (`--74`) — the black media sections (6,711 area units).
- **Ink-muted `#949494`** (`--79`) — the grey of the "Industries we serve" list (250 characters).
- **Ink-subtle `#757575`** (`--78`) and **grey-666 `#666666`** (`--77`) — further greys.
- **Hairline `#e6e6e6`** (`--5c`, `--0`) — the border colour (15 elements), including the input border and the rules between "Latest updates" rows. **Grey-e1 `#e1e1e1`** (`--7a`) is a declared light grey.
- **On-media-button `#ffffff33`** — white at 20% alpha, the fill of the "View all clients" button over black media; it rises to 27% on hover.
- **Yellow `#fdf313`** (`--7e`), **green `#39df4a`** (`--7f`) and **red `#ff0000`** (`--7c`) — declared accent values; none rendered on the measured home page.

The CSS also declares translucent blacks (`--76` #0000001A, `--75` #0000000D) and a focus tint `rgb(147 197 253 / .5)` (`--5d`). A #2c0000 background area belongs to a client thumbnail (Magnific).

## Typography

**Suisse Intl** (`SuisseIntl, Arial, sans-serif`) is the only family in use, self-hosted from `/build/assets/`: `SuisseIntl-Regular-WebXL` at weight 400 and `SuisseIntl-Book-WebXL` registered at weight 500. The CSS also defines a serif stack, `SuisseWorks, Times, Georgia, serif` (`--11`), and a weight value of 450 (`--14`), which were not measured on the home page.

- **Display** — statements and client names: 55px/500, line-height 60.5px (110%), letter-spacing -0.825px (-0.015em).
- **Mid sizes** — 32px with -0.416px tracking (475 characters) and 42px with -0.588px tracking (264 characters). The extractor did not record which elements carry them or their line-heights; in the capture the "Industries we serve" list and the update headlines are the type between body and display size.
- **Subheading** — 20px/400/28px ("Industries we serve", "Latest updates").
- **Body** — 16px/400/22.4px with +0.064px (0.004em) tracking: nav, buttons, labels.

Weight 500 accounts for 1,197 of 2,008 measured characters — the large type is all 500, the small type all 400. Tracking is negative on large sizes and slightly positive on small ones. The CSS variables encode the same system as unitless tokens: line-heights 115%, 120%, 130%, 140%, 150%; tracking values -.04em, -.012em, -.011em, -.01em, .004em, .05em.

## Layout

Content spans x = 16 to 1252 at 1280px (16px side margin). Statements are left-aligned and occupy roughly the left 80% of the width (the H1 span measures 1,037px wide). The "Latest updates" rows use a three-part grid: category label at far left, headline and link in the middle, square thumbnail at right, with #e6e6e6 rules between rows. `maxCardColumns` is 5.

Measured gaps are 8px (63 elements), 16px (44), 12px and 48px. Paddings are 16px (39), 24px (15), 12px, 232px, 75px, 64px, 48px and 32px; the opening statement has 192px of bottom padding before the video. The page is very spacious vertically between sections.

## Elevation & Depth

None in the light sections. The only measured shadow is a 1px black ring (`rgb(0, 0, 0) 0px 0px 0px 1px` combined with transparent layers), on one element. Depth comes from the contrast between white sections and full-bleed black media sections, and from translucent white buttons (#ffffff33) laid over video.

## Shapes

Measured radii: 8px (32 elements — buttons, the input and cards), 4px (9 — nav links) and 9999px (3). Buttons, the newsletter input and the light-grey cards share the 8px radius, nav links use the smaller 4px radius, and three elements are fully rounded (9999px). The logo is the "A/" monogram — a capital A followed by a slash — set at the top left of the header.

## Components

- **Header** — "A/" monogram left; nav links "Clients", "Capabilities", "Culture", "Contact", "Latest" at 16px/400, 0px 12px padding, 4px radius, 32px tall.
- **Primary button** — #f2f2f2 fill, #1a1a1a 16px/400 text, 8px radius, 16px 24px padding, 54px tall ("See our capabilities").
- **Button on media** — "View all clients": white text on #ffffff33 with an #e6e6e6 border, 8px radius, 54px tall; hover raises the fill to rgba(255, 255, 255, 0.27).
- **Client reel** — black section with white 55px/500 client names as links.
- **Industry list** — a stacked list of large grey (#949494) items under a 20px label.
- **Update row** — small category label, a mid-size headline, "Read the case study →"-style link, square thumbnail, separated by #e6e6e6 rules.
- **Text input** — newsletter field: white, 1px #e6e6e6 border, 8px radius, 16px padding, 56px tall.
- **Focus** — 2px solid #1a1a1a outline with 2px offset (measured on the skip link).

## Design System Architecture

No public AREA 17 brand guideline or published token package was found. The Culture page (https://area17.com/about) has no brand or press-kit links. AREA 17's GitHub organisation (https://github.com/area17) publishes `tailwind-plugins` ("A series of Tailwind plugins to enable/encourage systematised web design/development"), `scss-utilities`, `vitrine-ui` ("Customizable, accessible components library for Laravel Blade"), `blast` ("Storybook for Laravel Blade") and the Twill CMS — tooling for building systematised sites, but not this site's own token set.

On the site itself, the design tokens are shipped as CSS custom properties with minified names (`--4o` #1A1A1A, `--7b` #F2F2F2, `--5c` #E6E6E6, `--10` the Suisse Intl stack, `--2z` 500, `--1m` -.01em and so on), plus readable layout values such as `--logo-base-height` and `--spacing-row-logo`. Media queries are mobile-first `min-width` steps at 600, 800, 900, 960, 1200 and 2000px, with a few `max-width` 480/800px rules.

## Do's and Don'ts

**Do**
- Use Suisse Intl only: 500 for large statements, 400 for small text.
- Set statements at 55px/60.5px with -0.825px tracking, left-aligned.
- Make buttons light grey (#f2f2f2) with dark text, 8px radius and 16px 24px padding.
- Use #949494 for long secondary lists and #e6e6e6 for rules and borders.
- Alternate white typographic sections with full-bleed black media sections.
- Leave generous vertical space between sections.

**Don't**
- Don't make primary buttons dark or colourful; the measured action style is light grey.
- Don't add drop shadows to cards or buttons.
- Don't bold body text; 400 is the small-text weight.
- Don't use the declared yellow, green or red as interface accents on marketing pages; they did not render on the home page.

## Responsive Behavior

Measured at 390px wide:

- Statements become 32px/500/36.8px with -0.384px tracking (desktop 55px).
- Body becomes 14px/400/21px with +0.056px tracking (desktop 16px/22.4px).
- The most-read mobile sizes are 14px, 20px, 32px, 24px and 16px.
- The opening statement keeps 128px bottom padding (desktop 192px).
- The primary CTA shown is "View all clients" (#ffffff33 fill, white text).
- No header links are visible; a menu toggle labelled "Open Primary Navigation" appears.
- Content spans x = 12 to 378.

The CSS breakpoints are `min-width` 600, 800, 900, 960, 1200 and 2000px. Intermediate widths were not measured.

## Iteration Guide

1. White page, #1a1a1a text, Suisse Intl 400/500 only.
2. Open with a 55px/500 statement, -0.825px tracking, left-aligned with a wide right margin.
3. Follow with full-bleed video or a black section with white 55px links.
4. Add #f2f2f2 buttons (8px radius, 16px 24px, 54px tall) under statements.
5. List industries or services in large #949494 type.
6. Build update rows with label, headline and thumbnail separated by #e6e6e6 rules.
7. On mobile, drop statements to 32px and body to 14px, and hide the nav behind a toggle.
