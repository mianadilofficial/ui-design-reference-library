---
version: alpha
name: Adovasio
category: "Portfolio"
description: "Italian luxury wedding photography studio measured at adovasio.it: warm cream #f5f2ed page, near-black #232323 band, white panels, a 192px light BerlingskeSerif 300 headline over full-bleed photography, Inter labels at 18px, 5px-radius buttons and asymmetric portrait layouts."
colors:
  canvas: "#f5f2ed"
  ink: "#232323"
  primary: "#ffffff"
  on-primary: "#232323"
  ink-muted: "#23232380"
  nav-bg: "#dfdcd6"
typography:
  display:
    fontFamily: BerlingskeSerif, serif
    fontSize: 192px
    fontWeight: 300
    lineHeight: 225.6px
  display-mobile:
    fontFamily: BerlingskeSerif, serif
    fontSize: 58.5px
    fontWeight: 300
    lineHeight: 68.7375px
  body:
    fontFamily: BerlingskeSerif, serif
    fontSize: 35px
    fontWeight: 300
    lineHeight: 40.25px
  button:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 19.8px
  nav:
    fontFamily: Inter, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22px
    textTransform: uppercase
rounded:
  xs: 5px
  sm: 22px
  md: 30px
spacing:
  s1: 1px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 17.84px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    height: 65px
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 0px 10px
    transform: matrix(1, 0, 0, 1, -91.5, -22)
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

## Overview
Adovasio is an Italian luxury wedding photography studio (page title "Italy Luxury Wedding Photographer | Tuscany, Lake Como & Amalfi Coast"). The fetched homepage describes the style as "elegant, editorial, and Italian flair". Navigation is Portfolio, About and Contact, with a "Check availability" button; the footer repeats those links, adds Instagram and Pinterest, shows "2026 © Adovasio" and credits Koki Kiko (koki-kiko.com).

The capture opens on a full-bleed wedding photograph (a couple kissing among flowers) with an enormous white serif headline spanning several lines ("Weddings that never fade"), the wordmark "ADOVASIO" centred in thin white capitals, and a "Menu" label with a three-line icon at the top right. A white panel then rises over the photo with a "Featured Weddings" pill and an underlined serif heading, with two portrait photographs set at different heights in an asymmetric layout. A dark band with a rounded white "Check availability" pill follows, then a project row ("Emily & David" and "See Project") and a cream section with the names spaced across the page. A cookie dialog appears over the hero in the capture; it is a consent control and is not documented as brand UI.

## Colors
The page is `{colors.canvas}` (#f5f2ed), a warm cream, covering 17458 area units; `{colors.ink}` (#232323) fills 2355 units as the dark band, and white `{colors.primary}` (#ffffff, 1403 units) is the panel and button fill. Text is `{colors.ink}` (256 weight), white on photographs (160), cream (28) on dark and `{colors.ink-muted}` (#23232380, 21). `{colors.nav-bg}` (#dfdcd6) is the measured navigation panel tone. `{colors.on-primary}` is #232323 for text on the white button.

The measured hover on "Check availability" moves its text from #232323 to #f5f2ed, with its border from white to rgb(140, 139, 136). No saturated accent colour exists; flower and landscape photography supply all colour.

## Typography
Two families: BerlingskeSerif (weight 300, a light serif) for headlines and body, and Inter (variable 100 to 900) for UI labels and navigation.

- `{typography.display}`: BerlingskeSerif 300 at 192px / 225.6px, white on photography. Mobile: 58.5px / 68.7375px.
- `{typography.body}`: BerlingskeSerif 300 at 35px / 40.25px ("Your story deserves timeless images."). Mobile body: 26px / 29.9px.
- `{typography.button}`: Inter 400 at 18px / 19.8px (16px / 17.6px on the mobile pass).
- `{typography.nav}`: Inter 400 at 20px / 22px, uppercase.

Serif sizes are large even for body copy, and headings and body use the same weight (300), so contrast comes from size. Font substitutes: BerlingskeSerif is a commercial face; use a light transitional or didone serif for headings; Inter is open source.

## Layout
Desktop width is 1280px with a page height of 20068px, long scroll. Layout is asymmetric and gallery-like: portraits sit at different heights beside a centred title, project captions are pinned to the left and right edges ("Emily" at the left, "&" in the centre, "David" at the right). The measured spacing steps are 1, 6, 8, 10, 12, 15, 16, 17.84, 20 and 24px; the body paragraph box is 298px wide on desktop. The header is a transparent overlay with a centred wordmark.

## Elevation & Depth
No shadows were measured. Depth comes from stacked panels: a white panel overlaps the hero photograph and a dark band follows, and photographs sit directly on flat fills. Do not add shadows.

## Shapes
The CSS corpus has one dominant radius, 4.8px (473 uses), plus 8px, 4px, 30px, 22px and 6.4px. The measured element radii are 22px (3), 30px (1) and 5px (1). In tokens, `{rounded.xs}` is 5px (the "Featured Weddings" button), `{rounded.sm}` 22px and `{rounded.md}` 30px; the "Check availability" button in the capture is a pill but its radius was measured as 0px on the link wrapper, so no pill token is declared.

## Components
**Primary button** (`button-primary`): white fill, `{colors.ink}` Inter 18px label with a superscript count ("Featured Weddings 11"), 5px radius, 65px tall; 340px wide on mobile.

**Check availability**: pill-shaped in the capture (cream text on a dark band after hover); hover colour measured as described above.

**Menu**: the word "Menu" with a three-line icon, white on photography.

**Link panel** (`link`): cream background, `{colors.ink}` text, Inter 18px.

**Footer**: cream background, ink text, links Portfolio, About, Contact, Instagram, Pinterest.

## Design System Architecture
No brand guideline or design system is linked from the homepage opened for this document (https://www.adovasio.it/); the footer credits Koki Kiko, whose site was not opened. The shipped CSS exposes only animation variables (`--power1-out`, `--power3-out` as `linear()` easing functions, `--size: 1728`, `--svh`, `--lvh`), so there is no token layer for colour or type; the de-facto system is two neutrals plus white, one serif and one sans.

Imagery and art direction: photography is editorial wedding work shot outdoors, in gardens and on terraces, with soft natural light and a pastel palette of whites, greens and blush. The hero photograph carries motion (petals in the air in the capture), and the white headline is split into words placed at different positions: "Weddings" near the top, "that" at the left edge, and further words lower on the picture, so the headline wraps around the couple instead of covering them. Featured portraits are shown small, to leave open white space around each image.

Microcopy is brief and personal: "Your story deserves timeless images. Reach out to see if you..." addresses the couple directly, project captions are first names joined by an ampersand ("Emily & David"), and the project link reads "See Project". The navigation button reads "Check availability" rather than "Contact us", which sets the tone of a booking enquiry. A numeric superscript on the "Featured Weddings" button shows how many featured weddings there are (11 at measurement).

Motion is part of the visual identity in the measurements: the h1 span has a translateY transform of 157.283px at measurement time on desktop (and none on mobile), the Menu button's opacity was measured at 0.999885 before hover and 1 after, and the stylesheet defines `linear()` easing curves named `--power1-out` and `--power3-out`. The motion recording was skipped for this document (--no-motion), so durations are not documented.

The footer repeats the main links as plain text and adds Instagram and Pinterest, so social links are text labels and not icon buttons. The copyright line reads "2026 © Adovasio" and the credit line shows a studio logo with a link.

## Do's and Don'ts
- Do open with a full-bleed photograph and a white light-weight serif headline several hundred pixels wide.
- Do keep palette to cream, near-black and white.
- Do use asymmetric placement for portraits and pinned captions.
- Do set UI labels in Inter and all editorial text in the light serif.
- Don't add colour accents, shadows or heavy weights.
- Don't treat the cookie dialog buttons as brand buttons.
- Don't centre every image; stagger them.

## Responsive Behavior
Measured at 390px: the h1 becomes 58.5px / 68.7375px (box 101px wide for the word "that"), body text 26px / 29.9px (box 360px wide), the "Featured Weddings" button is 340px wide and 65px tall with 16px type, and the header at 390px is 55px tall, white background, with the items Portfolio, About, Contact and "Check availability". Image grid reflow was not measured.

## Iteration Guide
1. Cream `{colors.canvas}` page, `{colors.ink}` text, white panels.
2. Hero photograph full bleed with a 192px light serif headline in white.
3. Body copy in BerlingskeSerif 300 at 35px; labels in Inter.
4. Buttons: white 65px with 5px radius for primary, pill for the call to action on dark.
5. Pin names and captions to the edges; stagger portraits.
6. Dark mode and other hover states are not measured.
