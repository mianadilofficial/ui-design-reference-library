---
version: alpha
name: Fremtind
category: "Design Systems"
description: "Fremtind Forsikring (fremtind.no) is a calm, editorial insurance site built on its Jøkul design system: a warm sand canvas (#f4f2ef), granite ink and action colour (#1b1917), a near-black footer (#000000), light-weight Fremtind Grotesk at 30px/40px, outlined pill buttons (9999px radius) and an 8px-radius dark navigation card laid over a full-bleed street photograph."
colors:
  canvas: "#f4f2ef"
  ink: "#1b1917"
  primary: "#1b1917"
  on-primary: "#f9f9f9"
  surface-black: "#000000"
  surface-dis: "#ece9e5"
  ink-muted: "#636060"
  hairline-footer: "#c8c5c3"
typography:
  display:
    fontFamily: "\"Fremtind Grotesk\", \"Adjusted Arial Fallback\", Arial, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 40px
  display-mobile:
    fontFamily: "\"Fremtind Grotesk\", \"Adjusted Arial Fallback\", Arial, sans-serif"
    fontSize: 26px
    fontWeight: 400
    lineHeight: 34px
  subheading:
    fontFamily: "\"Fremtind Grotesk\", \"Adjusted Arial Fallback\", Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  button-secondary:
    fontFamily: "\"Fremtind Grotesk\", \"Adjusted Arial Fallback\", Arial, sans-serif"
    fontSize: 20px
    fontWeight: 700
    lineHeight: 32px
rounded:
  xs: 8px
  pill: 9999px
spacing:
  s1: 2px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 24px
  s6: 32px
  s7: 40px
  s8: 64px
  s9: 104px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
  button-secondary:
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.pill}"
    padding: 8px 24px
    height: 50px
    borderColor: "{colors.ink}"
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.on-primary}"
    typography: "{typography.subheading}"
    padding: 0px 24px 0px 0px
  card:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xs}"
    padding: 40px
  footer:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.hairline-footer}"
    padding: 104px 0px
---

## Overview

The captured page is the Norwegian home page of Fremtind Forsikring (language `no`). It opens with a full-bleed photograph of two people riding an electric bicycle down a city street, with a dark rounded card pinned to the top left. The card holds the small wordmark "Fremtind", a search icon and a menu icon, and below them four large light-weight links in off-white: "Forsikringene dine", "Meld skade", "Skadesakene dine" and "Skjemaoppgaver". A line of small print at the foot of the card says the company is owned by SpareBank 1 Gruppen, DNB and Eika Gruppen.

Below the hero the page settles into a warm sand canvas (#f4f2ef) and a two-column editorial layout: a short muted label on the left ("Hvem er vi?", "Jobb med oss", "Bærekraft") and a column of large, light, readable paragraphs on the right, each ending with a plain text link ("Mer om oss", "Se hva vi tilbyr", "Bærekraft i Fremtind"). Two candid workplace photographs of different sizes are paired between sections. A near-black footer closes the page.

The voice is humble and plain Norwegian: short declarative sentences, no sales language, and no coloured calls to action. It reads like an annual report written for customers. Nothing is loud: the palette is warm greys plus black, imagery does the emotional work, and the type is set large and light.

## Colors

- **Canvas (#f4f2ef)** is the page background, matching the design system's page-background variable (`--jkl-color-background-page: #F4F2EF`, the "sand" colour).
- **Ink and primary (#1b1917)** is granite: the text colour, the fill of the navigation card, and the system's action colour (`--jkl-color-background-action`) and interactive border. Off-white **on-primary (#f9f9f9)** is the text on top of it (`--jkl-color-text-on-action`).
- **Muted ink (#636060)** colours the left-hand section labels and hover states.
- **Soft surface (#ece9e5)** is the second-largest measured background, used for panels and highlighted rows.
- **Black (#000000)** fills the footer, whose text and borders use **footer grey (#c8c5c3)**.

The stylesheet also defines Norwegian-named brand colours (sand, granitt, dis, svaberg, stein, skifer, fjellgra, varde, snohvit, hvit, svart) and functional colours for info, success, warning and error messages. None of those functional colours appear in the capture, so they are not tokens. The browser-default blue (#0000ee) the extractor reported for some links is not a brand colour and is excluded.

## Typography

One family: **Fremtind Grotesk** (loaded in regular 400 and bold 700), with a metrics-adjusted Arial fallback ("Adjusted Arial Fallback") and Arial behind it. There is also an icon font, Fremtind Material Symbols, for the search and menu glyphs. The scale is large and light: 30px/40px at 400 for the lead links and section headings (26px/34px on mobile), 24px/32px for the sub-heading size (the body of the page measures 24px on a 38px line), 16px for small print with 1.28px letter-spacing, and 20px/32px at 700 for buttons. Text is mostly weight 400, and bold appears only on controls. Arial is the declared fallback.

## Layout

A wide, airy two-column grid: a narrow label column and a wide text column, with the text column starting about a third of the way across. Vertical spacing is generous, built from 24px, 32px, 40px, 64px and 104px steps (104px is the footer padding; the stylesheet names it `--jkl-spacing-64-104`, a fluid 64px to 104px step). Smaller gaps of 2px, 8px, 12px and 16px sit inside components. The hero is a full-bleed image, and the header height is defined as 4.5rem in the stylesheet. Content never feels dense: each block gets its own band of sand.

## Elevation & Depth

Flat. There are no measured box shadows. The navigation card gains presence from contrast alone, dark granite over a bright photograph, and from its 8px corners. Surfaces are separated by tone (sand, #ece9e5, black) rather than shadow or outline.

## Shapes

Because the palette is so quiet, shape does much of the interface work: the rounded dark card reads as the one interactive surface on the first screen, and the pill outline tells the visitor an action is available without any colour change. Keep that restraint when adding new components.

Two radii: 8px for the navigation card and similar containers, and a full pill (9999px, with 999px also measured) for buttons, with circular (50%) icon buttons. Photographs are plain rectangles. The pairing of a gently rounded card with fully round buttons is the shape language.

## Components

- **Navigation card.** Granite (#1b1917), 8px radius, 40px padding, off-white 30px/40px links stacked in the lower half, wordmark and icons across the top, small print at the bottom.
- **Outlined button.** Transparent with a 1px granite border, 20px bold granite label, 8px 24px padding, 50px tall, pill radius. The stylesheet's action fill is granite with off-white text for a solid button.
- **Text link.** Granite, large and plain, set on its own line after a paragraph.
- **Section row.** Muted 30px label left, 30px paragraph right.
- **Footer.** Black with #c8c5c3 text and 104px vertical padding.
- **Loader and accordion** components exist in the markup (jkl-loader, accordion modules) but are not visible in the capture.

## Design System Architecture

Fremtind publishes its own open-source design system, [Jøkul](https://jokul.fremtind.no), described on its page as Fremtind's design system with Storybook, GitHub (fremtind/jokul), Figma and brand-guideline links, and component categories covering feedback, buttons and navigation, layout, forms and data display (version 6.1.0-next.1 at the time of reading). The [GitHub repository](https://github.com/fremtind/jokul) describes it as a React component and CSS/SCSS library under the MIT licence, published as `@fremtind/jokul` (earlier as `@fremtind/jkl-*`).

fremtind.no uses it: the page markup carries `jkl-` classes (`jkl-link`, `jkl-nav-link`, `jkl-icon`, `jkl-logo`, `jkl-loader__dot`, `jkl-sr-only`) and the stylesheet's custom properties use the `--jkl-` prefix, including `--jkl-color-brand-sand`, `--jkl-color-brand-granitt`, `--jkl-color-background-page`, `--jkl-color-background-action`, `--jkl-button-font-size: 1.25rem`, `--jkl-spacing-40` and semantic text, border and background colour roles. The values in this file are those measured on the page and its custom properties.

## Do's and Don'ts

- Do keep the canvas warm (#f4f2ef) and the ink granite (#1b1917); avoid pure black except in the footer.
- Do set copy large and light, in Fremtind Grotesk at weight 400.
- Do let photographs of real people carry the emotion; keep calls to action as plain text links or outlined pills.
- Do round buttons fully and containers at 8px.
- Don't add accent colours, gradients or shadows.
- Don't use the browser-default link blue.
- Don't write promotional copy; keep to direct, humble Norwegian.
- Don't use bold for anything but buttons.

## Responsive Behavior

The H1-size text drops from 30px/40px to 26px/34px on mobile. The stylesheet uses fluid spacing steps (for example 64px to 104px) so that vertical rhythm compresses on smaller screens, and the two-column label and text layout is a desktop arrangement; only the type change was measured at the mobile width. Buttons keep a 50px height and the navigation sits behind the menu icon in the card.

## Iteration Guide

1. Start with sand #f4f2ef, granite #1b1917, muted #636060, soft #ece9e5 and a black footer.
2. Use Fremtind Grotesk (or Arial) at 400: 30px/40px for display, 24px/32px for sub-headings, 20px/32px bold for buttons.
3. Build a dark 8px-radius card with off-white (#f9f9f9) links over a full-bleed photograph for the header.
4. Use outlined pill buttons (9999px, 1px granite border, 50px tall).
5. Space with 24px, 32px, 40px, 64px and 104px steps; keep content to one idea per band.
6. Write short, plain sentences and end each block with one text link.
