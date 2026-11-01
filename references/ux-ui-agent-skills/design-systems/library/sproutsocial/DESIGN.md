---
version: alpha
name: Sprout Social
category: "Design Systems"
description: "Sprout Social's marketing site pairs a near-black #040404 canvas with white rounded content panels, Proxima Nova at 800 weight for 57px headlines, a Fern green #98e58e call to action with a Cactus #59cb59 hover, 6px button radii and 16px card radii, all built on the Seeds design system."
colors:
  canvas: "#040404"
  ink: "#ffffff"
  primary: "#98e58e"
  on-primary: "#040404"
  neutral-200: "#dee1e1"
  ink-muted: "#6e797a"
  black: "#000000"
  ink-input: "#162020"
  primary-hover: "#59cb59"
  text-input-border: "#c8cccc"
  emerald: "#006b40"
  cobalt: "#205bc3"
  neutral-100: "#f3f4f4"
typography:
  display:
    fontFamily: "\"Proxima Nova\", proxima-nova, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 57.0001px
    fontWeight: 800
    lineHeight: 64.0002px
  display-mobile:
    fontFamily: "\"Proxima Nova\", proxima-nova, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 43px
    fontWeight: 800
    lineHeight: 50.6665px
  body:
    fontFamily: "\"Proxima Nova\", proxima-nova, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 23.9999px
    fontWeight: 400
    lineHeight: 31.9998px
  button:
    fontFamily: "\"Proxima Nova\", proxima-nova, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  nav:
    fontFamily: "\"Proxima Nova\", proxima-nova, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26.667px
  link:
    fontFamily: "\"Proxima Nova\", proxima-nova, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 18px
    fontWeight: 700
    lineHeight: 26.6666px
  input:
    fontFamily: "\"Proxima Nova\", proxima-nova, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, \"Helvetica Neue\", Helvetica, sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 14px
  xl: 16px
  2xl: 24px
  3xl: 64px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 12px
  s5: 16px
  s6: 24px
  s7: 24.14px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 23.9999px
    height: 52px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 7.99999px 12px
    height: 44px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    rounded: "{rounded.xs}"
    padding: 7.99999px
    height: 52px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xl}"
    padding: 7.99999px
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 32px 0px
---

## Overview

The Sprout Social homepage (https://sproutsocial.com) alternates two surfaces. The page opens on a near-black band (`{colors.canvas}`, #040404) carrying a white 57px headline, "Powerful tools for social media management", then an email field and a mint-green button reading "Try free for 30 days". Below it a large white panel with heavily rounded top and bottom corners rises over the black and holds the next headline, "Own every social media touchpoint", in `{colors.canvas}` ink on white. The page then returns to black for the "Trusted partnerships and integrations across leading platforms" block. The result is a black, white, black rhythm in which rounded white sheets slide over a dark ground.

Color is restrained. The only saturated brand color in the interface chrome is the green of the primary button, `{colors.primary}` (#98e58e), which darkens to `{colors.primary-hover}` (#59cb59) on hover. Text on that button is `{colors.on-primary}` (#040404). The header is a white bar with a green leaf logo, a row of menu items (Platform, Solutions, Pricing, Resources), a "Log in" control, an outlined "Schedule a demo" button and a filled black "Try for free" button. The hero imagery is photographic: people working on laptops and phones, overlaid with small white floating cards showing sample metrics (impressions, reach, engagement) and a sentiment chart. A large pastel purple-to-pink gradient block under "Tour the product" provides the one big color field on the white panel.

An assistant chat card ("Ivy") appears in the capture over the lower right of the hero. It is a product feature of the page, a white card with a photo, a green "Get a demo" button and an input, and it is treated here as content, not as a layout primitive.

**Key Characteristics:**
- Black and white alternating bands with oversized rounded corners on the white panels.
- A single green action color, Fern `{colors.primary}`, reserved for the main conversion button; the header and secondary buttons are black or outlined.
- Proxima Nova in extra-bold (800) for headlines at 57px (hero) and 43px (section headings), regular 400 for body.
- Product-UI fragments as floating white cards with small radii on top of lifestyle photography.
- Sentence-case, plain-spoken microcopy ("Try free for 30 days", "Tour the product", "See all integrations").

## Colors

The generated palette comes from the measured page and matches the color tokens documented in the Seeds color reference (https://seeds.sproutsocial.com/visual/color/), which names #040404 as Onyx (Neutral 1100), #ffffff as Snowcap (Neutral 000), #dee1e1 as Border Gray (Neutral 200), #98e58e as Fern, #59cb59 as Cactus, #006b40 as Emerald and #205bc3 as Cobalt, the documented link color.

- `{colors.canvas}` (#040404): the hero and footer-adjacent dark ground, and the main text color on white panels.
- `{colors.ink}` (#ffffff): headline and body text on the dark bands, and the fill of the header bar and form fields.
- `{colors.primary}` (#98e58e): the filled call-to-action; `{colors.primary-hover}` (#59cb59) is its measured hover state.
- `{colors.neutral-200}` (#dee1e1): light border and divider gray, and a secondary text tone on dark.
- `{colors.neutral-100}` (#f3f4f4): the Seeds page-background gray (documented, not measured on the capture).
- `{colors.ink-muted}` (#6e797a): a muted gray measured in text; it appears to be the lighter label tone in the four-column feature strip.
- `{colors.ink-input}` (#162020): text inside the form input and the nav link color.
- `{colors.text-input-border}` (#c8cccc): the form field outline.
- `{colors.black}` (#000000): pure black, measured in text but rarely used.
- `{colors.emerald}` (#006b40): Seeds' deep green, the darkest logo green.
- `{colors.cobalt}` (#205bc3): documented link blue; not seen on the hero.

The measured nav hover color on menu items shifts to a teal (#026661) that is not carried into the token set because it is a single interaction state, not a palette role. Browser-default link colors are not part of this palette.

## Typography

Seeds' brand typography page (https://seeds.sproutsocial.com/visual/brand-typography/) names Proxima Nova as the primary typeface, with Extra Bold, Bold and Regular headline weights, Bold and Regular for subheads, and Regular and Bold for body and labels, and says product screens use system fonts (San Francisco, Roboto). The homepage loads Proxima Nova at 400, 700 and 800 and also Inter at 400. The font stack declared in the tokens is "Proxima Nova", proxima-nova, then the system UI stack.

- `{typography.display}`: 57.0001px, weight 800, line height 64.0002px: the hero headline.
- `{typography.display-mobile}`: 43px, weight 800, line height 50.6665px: the headline measured at a 390px viewport (the 43px size is also the desktop section-heading size).
- `{typography.body}`: 23.9999px, weight 400, line height 31.9998px: the large intro text size measured as body on the capture.
- `{typography.button}`: 16px, weight 700, line height 24px.
- `{typography.nav}`: 18px, weight 400, line height 26.667px.
- `{typography.link}`: 18px, weight 700, line height 26.6666px.
- `{typography.input}`: 16px, weight 400, line height 24px.

Seeds recommends sentence case for headlines, curly quotes, 50 to 80 characters per line, no periods at the end of headlines, and no uppercase for runs longer than three words. The site follows that: headlines are sentence case with no trailing period. Proxima Nova is a licensed commercial typeface; if it is unavailable, fall back through the declared stack to the system sans-serif (the stack lists -apple-system, Segoe UI, Roboto, Helvetica Neue).

## Layout

The page is 1280px wide in the desktop measurement and about 6883px tall. Content sits in a wide container with a generous inner margin: in the capture the headline starts roughly 18px from the left edge on the white panel at the narrower capture width, and the hero imagery is inset from the edges. Sections are stacked full-bleed bands (black, white panel, black), each with large vertical padding. Four-column feature strips sit below the main gradient panel, each column a bold or gray label with a short description under a thin gradient underline on the active item.

The Seeds space reference (https://seeds.sproutsocial.com/visual/space/) lists Space 100 to Space 800 as 2, 4, 8, 12, 16, 24, 32 and 40px, described as an 8px grid with two half sizes. The tokens carry that scale as `{spacing.s1}` (2px), `{spacing.s2}` (4px), `{spacing.s3}` (8px), `{spacing.s4}` (12px), `{spacing.s5}` (16px), `{spacing.s6}` (24px), `{spacing.s8}` (32px), `{spacing.s9}` (40px) and `{spacing.s10}` (48px), plus a measured 24.14px value (`{spacing.s7}`) that is a computed size, not a documented token.

## Elevation & Depth

Most surfaces are flat: the measured CSS uses `none` for shadows far more often than any other value. When shadows exist they follow the Seeds elevation reference (https://seeds.sproutsocial.com/visual/elevation/): Level 100 is 0px 2px 4px for hover and focus, Level 300 is 0px 8px 16px for small to medium interactive elements such as buttons and cards, and Level 400 is 0px 16px 32px for toasts, modals and overlays. The shipped CSS shows 0 2px 4px, 0 4px 8px, 0 8px 16px and 0 16px 32px with a dark gray-teal shadow color at low alpha. Depth otherwise comes from layering: the white panel overlaps the black band, and the floating metric cards and chat card sit above the photograph with white backgrounds and rounded corners.

## Shapes

Seeds' border reference (https://seeds.sproutsocial.com/visual/border/) defines an outer radius of 8px, an inner radius of 6px, a pill of 9999em and a 1px border width, noting that the inner radius prevents distortion when radii nest. The measured tokens are `{rounded.xs}` (4px, inputs), `{rounded.sm}` (6px, buttons), `{rounded.md}` (8px), `{rounded.lg}` (14px), `{rounded.xl}` (16px, cards), `{rounded.2xl}` (24px), `{rounded.3xl}` (64px, the large panel corners) and `{rounded.pill}` (9999px). Buttons are therefore softly squared, not pill-shaped, while the large white content panels are dramatically rounded.

## Components

**`button-primary`**: Fern fill `{colors.primary}`, text `{colors.on-primary}`, `{typography.button}`, radius `{rounded.sm}`, padding 12px 23.9999px, height 52px, with a 2px border of the same green. Its hover (`button-primary-hover`) swaps the fill to `{colors.primary-hover}`.

**`button-secondary`**: on the measured page, the white header buttons are a black outlined "Schedule a demo" and a black-filled "Try for free", both 44px tall with 6px radii; the token carries the outlined form with `{typography.button}`, padding 7.99999px 12px. On hover the outline and text shift to a dark gray-teal.

**`text-input`**: white field, `{colors.ink-input}` text, `{typography.input}`, 4px radius, 52px tall, 1px border in `{colors.text-input-border}`, paired directly beside the primary button in the hero.

**`card`**: a 16px radius card (`{rounded.xl}`) on dark with white text; floating metric cards in the hero are white with small radii.

**`nav` and `nav-link`**: white bar, `{colors.canvas}` text, 18px regular menu labels with small chevrons for dropdown items.

**`link`**: `{typography.link}`, 18px bold, `{colors.ink}` on dark with an underline treatment ("See all integrations").

**`footer`**: dark background with `{colors.ink}` text and 32px vertical padding.

## Design System Architecture

Sprout Social publishes its design system as Seeds at https://seeds.sproutsocial.com. The site describes itself as a creative hub with sections for brand foundation, patterns, visual design (border, brand typography, color, elevation, logo system, motion, product typography, space) and writing. Its token pages list each token in Sass (for example `$Border-radius--600`), JavaScript (`BORDER_RADIUS_600`) and CSS custom property form (`--border-radius--600`).

The marketing site demonstrably uses Seeds: the homepage HTML at https://sproutsocial.com carries classes with a `seeds-` prefix (for example `seeds-mw685`, `seeds-w-1050-nm`), its stylesheet defines `.seeds-w-*`, `.seeds-mw-*` and `.seeds-min-w-*` utility families with breakpoint suffixes (`-ns`, `-nm`, `-m`, `-l`), and other utilities reference Seeds color names such as `c--neutral-200`. The Seeds link in the page footer points to https://seeds.sproutsocial.com/brand-assets/. Utility classes combine with Seeds-style tokens (the Space 100 to 800 numbering reappears in classes such as `mt200`).

## Do's and Don'ts

**Do**
- Use `{colors.primary}` for the single main conversion action in a band, with `{colors.on-primary}` text.
- Alternate `{colors.canvas}` bands with white panels that have very large corner radii.
- Set headlines in Proxima Nova 800, sentence case, with no trailing period.
- Keep buttons at the 6px radius and inputs at 4px.
- Pair photography of real working people with small white UI cards.

**Don't**
- Don't make buttons pill-shaped; the measured buttons use the 6px radius.
- Don't use undocumented font weights or sizes (the Seeds typography page forbids it).
- Don't use uppercase for strings longer than three words, or justify paragraphs.
- Don't use the teal hover color as a fill or a palette role.
- Don't add heavy shadows; use the Level 100, 300 and 400 values only.

## Responsive Behavior

At a 390px viewport the hero headline measures 43px at weight 800 (`{typography.display-mobile}`), down from 57px on desktop. Utility classes carry breakpoint suffixes (`-ns` for not small, `-nm` for not medium, `-m`, `-l`, `-xm`), suggesting values are overridden per breakpoint. The mobile layout was measured only for headline sizes; the measured control heights are the measured heights of 44px for header buttons and 52px for the hero button and field on desktop.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}` and decide which band is dark and which is a rounded white panel.
2. Add exactly one `{colors.primary}` button per band; verify hover uses `{colors.primary-hover}`.
3. Set headings in Proxima Nova 800 at 57px or 43px and body at the Seeds-sanctioned 14 to 18px range for dense text.
4. Round the big panels with `{rounded.3xl}` and the controls with `{rounded.sm}` and `{rounded.xs}`.
5. Pull spacing only from the 2, 4, 8, 12, 16, 24, 32, 40px scale.
6. Re-run `node web/scripts/verify-designs.mjs --slug=sproutsocial` after any value change.
