---
version: alpha
name: Coca-Cola
category: "Food & Beverage"
description: "Coca-Cola US site system: a #eeeeee canvas with white #ffffff cards, black #000000 pill buttons (40px high, full radius, 12px bold label), TCCC-UnityText at 700 with -1.5px tracking for 38px headlines, 16px image-and-card radius, and campaign photography carrying all colour."
colors:
  canvas: "#eeeeee"
  page-largest: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-3: "#6c6c6c"
  ink-3: "#d5d5d5"
  primary-hover: "#353535"
typography:
  display:
    fontFamily: Noto-regional, Noto-latin, TCCC-UnityText, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 48px
    letterSpacing: "-1.5px"
  display-mobile:
    fontFamily: Noto-regional, Noto-latin, TCCC-UnityText, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
    letterSpacing: "-1.5px"
  body:
    fontFamily: Noto-regional, Noto-latin, TCCC-UnityText, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Noto-regional, Noto-latin, TCCC-UnityText, sans-serif
    fontSize: 12px
    fontWeight: 700
    lineHeight: 20px
  nav:
    fontFamily: Noto-regional, Noto-latin, TCCC-UnityText, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 16px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 16px
  s4: 24px
  s5: 32px
  s6: 64px
  s7: 80px
  s8: 83.47px
  s9: 120px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.page-largest}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 16px
    height: 40px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 4px 16px
    height: 40px
  link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.pill}"
    padding: 4px 16px
  nav:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    boxShadow: rgba(0, 0, 0, 0.06) 0px 14px 24px 0px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-3}"
---

# Coca-Cola

## Overview

The measured site is the US homepage, https://www.coca-cola.com/us/en (title "Explore the Coca-Cola Official Site | Coca-Cola US"). It is a promotional hub rather than a product catalogue: a centred black headline "The Coca-Cola Official Site for Drinks & Experiences", a horizontal carousel of large rounded campaign banners, then alternating split modules, each an illustration or photograph beside a white card with a headline, a sentence of body copy and an outlined pill button. In the capture the banner carousel shows a Halloween-style Fanta promotion with a "Play Now" white pill, and below it come "Promos & Offers" and "Features" sections, a "View all Offerings" black pill, and cards for a Dia de los Muertos sweepstakes and a soccer-fandom feature.

The interface is deliberately monochrome: a light grey canvas (#eeeeee), white cards (#ffffff), black text and buttons (#000000), and mid greys. All saturated colour (orange, blue, red, green) comes from campaign artwork. Voice is playful and brief ("He's Right Behind... and Coming for You.", "Play Now", "Learn More", "Explore for More"). No popup covers the capture. The header shows the company wordmark in a black script at the left, links (Brands, Discover, Impact, Shop, Promos & Offers) with small chevrons, and a black "Sign Up" pill at the right, which is the extractor's primary CTA and a real primary button.

## Colors

- **Canvas (#eeeeee)** is the page background; **page-largest (#ffffff)** is the largest white area: cards, the header and secondary buttons.
- **Ink and primary (#000000)** are the text and the primary button fill; **on-primary (#ffffff)** is the label colour. Hover fill is `primary-hover` #353535.
- **Mid grey (#6c6c6c)** and **light grey (#d5d5d5)** are measured secondary colours; `ink-3` (#d5d5d5) is the footer text colour on the black footer.
- The shipped CSS also declares additional reds and greens as custom properties (for example #ea0000 and #95cb87), but they are not measured on any interface surface of this page, so they are not tokenised.

Text on the hero banner is white over a darkened orange gradient photograph. The headline and body there are white (#ffffff) over image, so the "Play Now" button inverts to a white pill with black text, matching the secondary button role.

## Typography

One family is used everywhere: **TCCC-UnityText** at 400 and 700, with Noto-regional and Noto-latin ahead of it in the stack and generic sans-serif behind. The h1 is 38px, weight 700, line height 48px and letter spacing -1.5px (32px on 40px at the mobile measurement). Body is 16px / 24px at 400. Navigation links are 16px / 24px at 700. The primary button label is 12px / 20px at 700, while the secondary and outlined button labels are 16px at 700. The shipped CSS maps the same family to heading, body and action roles (for example `--typography-font-family-brand-heading`), confirming a single-family system.

TCCC-UnityText is proprietary to the company; for substitutes use Noto Sans (already the declared lead fallback) at 700 for headings with -1.5px tracking.

## Layout

Content widths follow column-based custom properties such as `--desktop-dimension-size-width-column-3` (357px) and card image maximums. Sections are centred headings over wide modules. Spacing is a clean 4px-based scale: 4px, 8px, 16px, 24px, 32px, 64px, 80px, 120px (plus an 83.47px measurement). The split modules in the capture place a rounded image panel overlapped by a white text card, and the carousel shows neighbouring slides cropped at both edges to signal horizontal movement.

## Elevation & Depth

Cards float with a very soft, wide shadow, `rgba(0, 0, 0, 0.06) 0px 14px 24px 0px`, so white cards lift gently off the #eeeeee canvas. No other shadows were measured. Depth also comes from overlap: the text card overlaps the edge of its image in the split modules.

## Shapes

Two shape values dominate: **pill (9999px)** for every button and link chip (the shipped CSS declares the button radius as 8000px, equivalent to a full pill), and **16px** (`rounded.xs`) for cards, images, banners and modals. The CSS also lists 8px as a generic medium radius. Buttons are always pills; panels are always softly rounded rectangles; the footer is a flat black band.

## Components

- **button-primary:** #000000 fill, #ffffff label, 12px bold, 40px high, padding 0px 16px, pill radius; hover fill #353535.
- **button-secondary:** #ffffff fill, #000000 label, 16px bold, 40px high, padding 4px 16px, pill, used on imagery.
- **Outlined pill:** transparent with a 2px solid #000000 border and black 16px bold label ("Learn More"), used inside white cards.
- **link:** the nav link chip style, #ffffff background, black label, pill.
- **nav:** white bar, #000000 links at 16px bold.
- **card:** 16px radius with the soft shadow above, #000000 text.
- **footer:** #000000 background with #d5d5d5 text.

## Design System Architecture

No public Coca-Cola design-system documentation was found, so none is cited. The de-facto system is unusually explicit in the shipped CSS: roughly 400 root custom properties follow a structured naming scheme of the form `--color-{text|icon|surface|stroke}-{role}-on_{context}-{state}` (for example `--color-text-action-on_brand-primary-default`, `--color-surface-action-opaque-on_brand-secondary-hover`), plus `--dimension-spacing-*`, `--dimension-radius-*`, and per-breakpoint overrides prefixed `--desktop-`, `--tablet-` and `--mobile-`, and an `--inverse-` set for dark surfaces. That is a semantic, multi-breakpoint, theme-aware design-token layer, although it is documented nowhere that was opened, and it is described here from the measured stylesheet only.

## Do's and Don'ts

- Do keep the interface black, white and grey; let campaign art provide colour.
- Do use full pill buttons at 40px height.
- Do set headlines at 700 with -1.5px tracking.
- Do give cards the 16px radius and the soft 24px-blur shadow.
- Don't introduce a brand red button; the measured primary is black.
- Don't place coloured text on banners; use white on darkened imagery.
- Don't use sharp corners on buttons or cards.
- Don't change the single type family per role.

## Responsive Behavior

The CSS exposes separate desktop, tablet and mobile values: heading-xl is 48px line height on desktop and 32px size on tablet and mobile; card padding at tablet is 24px; mobile has full-width cards with a 0px radius (`--mobile-dimension-radius-component-full_width_card`). The measured mobile h1 is 32px on 40px leading, with the same -1.5px tracking.

## Iteration Guide

1. Canvas #eeeeee, cards #ffffff, text and buttons #000000.
2. Headline 38px / 48px bold, -1.5px; body 16px / 24px.
3. Buttons: pill, 40px, black fill white label or white fill black label on imagery.
4. Cards: 16px radius, soft shadow, 24px to 32px padding.
5. Space on the 4px, 8px, 16px, 24px, 32px, 64px scale.
6. Let photography and illustration supply colour; do not tokenise it.

## Imagery and Voice Notes

Imagery in the capture is campaign-first: a studio product shot (a themed crate of cans on ice cubes) against a hot orange-to-black gradient, a flat illustrated character with a phone mockup on a saturated blue field, and a documentary-style photograph of fans cheering with a bottle raised. Each image is cropped to a rounded rectangle at the 16px radius, and none is framed with a border. Text never sits directly on the busiest part of an image; the banner uses a dark left side of the artwork so that white copy remains legible.

Microcopy is short, imperative and light-hearted. Buttons say what happens next in two or three words: Play Now, Learn More, Explore for More, View all Offerings, Sign Up. Section headings are plain nouns (Promos & Offers, Features) set centred in the bold face. Body paragraphs inside cards are one to three sentences at 16px, left aligned in black on white, which keeps measure short and contrast at its maximum.

Carousel indicators below the banners are small dots, with the active one stretched into a short black bar, and are the only decoration beyond buttons. Hover behaviour was measured for the primary button only (fill changes from #000000 to #353535); other states are not described.
