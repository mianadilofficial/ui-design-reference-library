---
version: alpha
name: Microsoft
category: "Design Systems"
description: "microsoft.com home: white header and light-gray sections alternating with full-bleed black product heroes, a Segoe UI Variable text stack at 16px, Aux Mono display headlines at 40px with -1px tracking, Microsoft blue #0078d4 buttons with 8px radius, 24px-radius cards and 16px-radius suggestion chips."
colors:
  canvas: "#ffffff"
  ink: "#17253d"
  primary: "#0078d4"
  on-primary: "#ffffff"
  ink-muted: "#616161"
  ink-strong: "#0e1726"
  ink-on-dark: "#f4fafd"
  ink-chip: "#2a446f"
  surface-cream: "#fff9f5"
  surface-black: "#000000"
  surface-chip: "#e6effd"
  surface-footer: "#f2f2f2"
  hairline: "#e7e7e7"
  nav-text: "#262626"
  nav-link-text: "#0067b8"
typography:
  display:
    fontFamily: "\"Aux Mono\", \"Aux Mono Fallback\", SFMono-Regular, Consolas, \"Liberation Mono\", Menlo, Courier, monospace"
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: "-1px"
  display-mobile:
    fontFamily: "\"Aux Mono\", \"Aux Mono Fallback\", SFMono-Regular, Consolas, \"Liberation Mono\", Menlo, Courier, monospace"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: "\"Segoe UI Variable Display\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 600
    lineHeight: 24px
    letterSpacing: "-0.27px"
  body:
    fontFamily: "\"Segoe UI Variable Text\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-0.48px"
  button:
    fontFamily: "\"Segoe UI Variable Text\", \"Segoe UI\", segoeui, \"Helvetica Neue\", helvetica, arial, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 22px
    letterSpacing: "-0.3px"
rounded:
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 200px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 6.56px
  s6: 7px
  s7: 8px
  s8: 10px
  s9: 11px
  s10: 12px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 16px
    height: 40px
    boxShadow: rgba(0, 0, 0, 0.12) 0px 0px 0px 0px, rgba(0, 0, 0, 0.12) 0px 0px 0px 0px
  button-chip:
    backgroundColor: "{colors.surface-chip}"
    textColor: "{colors.ink-chip}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 17px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.nav-text}"
    padding: 0px 64px
  nav-link:
    textColor: "{colors.nav-link-text}"
    typography: "{typography.body}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    padding: 0px 48px 0px 0px
    height: 24px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    boxShadow: rgba(0, 0, 0, 0.12) 0px 0px 2px 0px, rgba(0, 0, 0, 0.14) 0px 2px 4px 0px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.ink-muted}"
    padding: 0px 64px
---

## Overview

The capture of https://www.microsoft.com is a stack of full-width product stories under a slim white header. The header carries the four-square Microsoft logo with wordmark and product links (Microsoft 365, Azure, Copilot, Windows, Surface, XBOX, Deals, Small Business, Support), then "All Microsoft", search, cart and a circular account control. The first story is a black hero: a dark laptop photograph, a "PRE-ORDER NOW" tag, the headline "SURFACE LAPTOP ULTRA" in a wide monospace face, a two-line description, and two buttons, one white-filled and one outlined in white. Next is a light-gray story ("SURFACE RTX SPARK DEV BOX", with a small "New" tag and an outlined "Pre-order now" button) beside a product photo on a soft floor shadow, then a near-black Windows story with a glowing chip image and a white outlined "Learn more" button, then a pale gradient section titled "More from Microsoft" with a Personal / Business toggle, an "Ask a question" input and rounded suggestion chips.

A chat prompt ("Can we help you?", "Chat now", "No thanks") floats over the right of the first hero. That is a third-party style assistant widget; it is not documented here as brand UI, and a stealth re-run of the extractor still showed it.

Text on the heroes is white over photography; because those heroes sit over dark imagery, the canvas for the system is the white header/body surface (#ffffff) and the ink is the dark navy-gray (#17253d) measured on light sections. The hero text color is recorded separately as ink-on-dark (#f4fafd). Voice is product-marketing: short imperative button labels ("Pre-order now", "Learn more", "Read the story", "Shop XBOX Series S") and one-sentence promises.

## Colors

Canvas is #ffffff, with #f2f2f2 for the footer band and a warm cream #fff9f5 measured over a large area in light sections. Surface black #000000 fills the hero. Body ink is #17253d and heading ink on light surfaces is #0e1726; the most frequent text color on the page, #616161, serves as muted text and the footer text. Light text on dark heroes is #f4fafd.

Microsoft blue #0078d4 is the primary action fill with white text; it is the fill of content buttons such as "Check your registration" and "Read the report". Navigation links resolve to #0067b8 and header text is #262626. Chips use a pale blue #e6effd with #2a446f text. Hairlines are #e7e7e7.

The page defines a very large named palette in its root variables (greens, oranges, limes, teals and others) for illustration and product accents; none of these appear as UI roles in the capture and none are promoted to tokens. Browser-default link blues and purples do not appear.

## Typography

Two voices. Display headlines use "Aux Mono" (with a fallback face and then system monospace) at 40px, weight 500, line height 48px and letter-spacing -1px, set in uppercase on hero stories, shrinking to 32px / 40px / -0.8px on mobile. Everything else uses the Segoe UI family: "Segoe UI Variable Text" for 16px body at weight 400, 24px leading and -0.48px tracking; "Segoe UI Variable Display" for 18px / 24px weight 600 subheadings with -0.27px tracking; and Segoe UI Variable Text at 15px / 22px weight 600 with -0.3px tracking for buttons. Light-section headings ("More from Microsoft") are set in the Segoe family, larger and regular weight, while the mono face is reserved for product-name headlines.

Segoe UI is the family that Fluent 2's typography page names as its default typeface; the site is consistent with that, though the tracking and sizes here are measured from the live page rather than taken from the docs. Segoe UI is proprietary to Microsoft; where it is absent the stack falls to Helvetica Neue, Helvetica and Arial, and Aux Mono falls to system monospace.

## Layout

Stories are full-bleed bands, alternating dark, light and dark, each with a centered or half-split composition. Header content has 64px side padding (nav and footer padding use 0px 64px). Hero copy is centered over the image; secondary stories use two columns with text on one side and the product or illustration on the other. Spacing tokens measured are small (1px, 4px to 12px) for control internals; band spacing is generous and not tokenized.

Density is low: each band carries one headline, one or two sentences, and one or two buttons. Photography is polished product rendering on dark or soft-gray backdrops, with a macro chip image in the Windows band.

## Elevation & Depth

Cards use a two-layer shadow of rgba(0,0,0,0.12) 0px 0px 2px and rgba(0,0,0,0.14) 0px 2px 4px, a subtle lift for white cards on tinted backgrounds. Buttons carry a zero-offset shadow pair that renders as no visible elevation. Product images float with soft cast shadows that belong to the photography. The "Ask a question" box has a thin gradient underline stroke instead of a shadow.

## Shapes

Radii form a clear ladder: 4px (links), 8px (buttons), 16px (chips and the secondary action), 24px (cards), 200px and 9999px (toggle and pill controls), plus 50% for circles such as the account control. The mix of 8px buttons and pill chips lets the primary action read as more formal than suggestions.

## Components

**Primary button.** Fill #0078d4, white text, Segoe UI Variable Text 15px/600, 8px radius, 40px high, 8px 16px padding.

**Hero buttons.** On black, one button is filled white with dark text and one is outlined with a thin white border and white text; these invert the primary treatment for dark backgrounds.

**Light-section outline button.** "Pre-order now" sits on gray with a dark-blue outline and text.

**Chips.** "Help me choose a PC", "Microsoft 365 tips", "Sign in to my account": 16px radius, pale blue #e6effd fill, #2a446f text.

**Toggle.** A white pill with the active "Personal" segment filled navy.

**Cards.** White, 24px radius, two-layer soft shadow.

**Header.** White, 64px side padding, links #262626 which shift to blue #0067b8.

**Footer.** #f2f2f2 band, 64px side padding, muted #616161 text.

## Design System Architecture

Microsoft's public design system is Fluent 2 (https://fluent2.microsoft.design), which describes UI kits, components and guidance for web, iOS, Android and Windows, a neutral, shared and brand color structure delivered as global and alias tokens, and Segoe UI as the default typeface. microsoft.com shows partial overlap: it uses Segoe UI and Segoe UI Variable faces, loads an icon font named MWF-FLUENT-ICONS and an older FabricMDL2Icons font. Its CSS variables, however, are the site's own `--ds-*` set (for example `--ds-action-button-font-size`, `--ds-action-button-font-weight` and `--ds-font-family-segoe-variable-display`) together with `--header-*`, `--uhf-*`, `--chat-*` and `--spacing-*` families, rather than Fluent's published token names. No values in this file were taken from Fluent documentation; they come from measurements of the live page.

The de-facto system is therefore a site-level token layer (`--ds-*`) that defines button sizing, font stacks and a large named color palette, applied to marketing "stories" built from a consistent band pattern.

## Do's and Don'ts

- Do set hero product names in the monospace display face at 40px with -1px tracking, and everything else in the Segoe UI Variable stack.
- Do use #0078d4 with white text for the main action, 8px radius.
- Do invert buttons on black heroes: white fill or white outline.
- Do alternate dark and light bands and keep one message per band.
- Don't use chat-widget or consent controls as brand button styles.
- Don't put blue on large surfaces; it is reserved for actions and links.
- Don't add heavy shadows; cards use only the two-layer soft shadow.

## Responsive Behavior

The extractor measured a mobile pass in which the display headline falls from 40px / 48px to 32px / 40px with tracking -0.8px. Header padding of 64px applies at desktop; the layout beyond the type change was not inspected visually, so only the type values are recorded. Buttons are 40px tall and chips are comfortably tappable.

## Iteration Guide

1. Begin with a white page and #17253d text, Segoe UI Variable Text 16px.
2. Use Aux Mono 40px / 500 / -1px for product-name headlines on black or gray bands.
3. Make the primary button #0078d4, white 15px/600 text, 8px radius, 40px high.
4. Use 16px-radius pale-blue chips (#e6effd, #2a446f text) for suggestions, 24px radius for cards.
5. Invert button treatment on dark bands; keep copy short and imperative.
