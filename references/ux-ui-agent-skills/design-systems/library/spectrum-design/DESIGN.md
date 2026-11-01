---
version: alpha
name: Adobe Spectrum
category: "Design Systems"
description: "Adobe's Spectrum design-system site is a calm #f7f7f7 canvas with white cards, Adobe Clean type (64px/500 display, 16px/400 body in #717171), near-black #131313 pill buttons (48px at 24px radius, 32px at 16px radius) and a single blue, #3b63fb with hover #274dea, reserved for announcements."
colors:
  canvas: "#f7f7f7"
  page-largest: "#ffffff"
  ink: "#000000"
  ink-body: "#717171"
  ink-heading: "#292929"
  ink-translucent: "#3a3a3ab3"
  primary: "#131313"
  on-primary: "#ffffff"
  surface-subtle: "#f3f3f3"
  accent-blue: "#3b63fb"
  accent-blue-hover: "#274dea"
  accent-blue-swc: "#0265dc"
  field-fill-swc: "#e6e6e6"
  border-swc: "#d5d5d5"
typography:
  display:
    fontFamily: adobe-clean, "Adobe Clean", "Trebuchet MS", sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 64px
  heading:
    fontFamily: adobe-clean, "Adobe Clean", "Trebuchet MS", sans-serif
    fontSize: 18px
    fontWeight: 600
    lineHeight: 21.6px
  body:
    fontFamily: adobe-clean, "Adobe Clean", "Trebuchet MS", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: adobe-clean, "Adobe Clean", "Trebuchet MS", sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
  nav:
    fontFamily: adobe-clean, "Adobe Clean", "Trebuchet MS", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button-large:
    fontFamily: adobe-clean, "Adobe Clean", "Trebuchet MS", sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 22px
rounded:
  xs: 6px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 32px
  2xl: 100px
spacing:
  s1: 1px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 13px
  s8: 16px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.lg}"
    padding: 0px 24px
    height: 48px
    borderColor: "{colors.primary}"
  button-compact:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 1px 16px
    height: 32px
    borderColor: "{colors.primary}"
  button-accent:
    backgroundColor: "{colors.accent-blue}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 16px
    height: 32px
    borderColor: "{colors.accent-blue}"
  button-accent-hover:
    backgroundColor: "{colors.accent-blue-hover}"
    textColor: "{colors.on-primary}"
  button-accent-swc:
    backgroundColor: "{colors.accent-blue-swc}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 14px
    height: 32px
  text-field-swc:
    backgroundColor: "{colors.field-fill-swc}"
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    padding: 0px 12px 0px 24px
    height: 32px
  nav:
    textColor: "{colors.ink-heading}"
    padding: 0px 24px
  nav-link:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 8px 12px
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink-translucent}"
    rounded: "{rounded.xl}"
    padding: 16px 12px
  footer:
    textColor: "{colors.ink-heading}"
---

## Overview

Spectrum is Adobe's design system, and this homepage presents itself the way the system presents everything else: quiet, rounded and documentation-first. The page opens with a small announcement strip ("Meet Spectrum Hub. The new home for Spectrum documentation is now live.") with a blue "What's new" button, then a centered 64px headline, "Start with Spectrum", a two-line description ("Spectrum is the system behind Adobe experiences, a shared language for turning ideas into products."), and a black pill button, "First stop, foundations". A floating white rail card at the left lists Getting started, Foundations, Content, Web and Support with line icons.

Below are two large rounded media cards, one a dark, glassy 3D-gradient render in blue, orange and magenta, the other a pale grey tile holding a screenshot of a product UI. Then "Explore components in context" introduces a live component playground: a white card with a rendered black "Get started" button on the left, a property table (FillStyle, IsDisabled, IsPending, Size, StaticColor, Variant, Children) on the right, and a grey code block with a "Copy code" button. The site demonstrates its own components, so the UI is the art direction.

**Key Characteristics:**
- Warm-neutral canvas (`{colors.canvas}` #f7f7f7) with pure-white (`{colors.page-largest}`) cards and panels.
- Primary actions are black pills (`{colors.primary}` #131313); blue (`{colors.accent-blue}`) appears only on the announcement button and links.
- Adobe Clean in medium and semibold weights; headlines are tight (line-height equals font size at 64px).
- Very generous corner radii: 16, 24 and 32px, with fully rounded pills.
- Live, interactive component demos (a property table and code sample) instead of marketing illustration.
- Grey-on-white body copy, `{colors.ink-body}` #717171, centered in narrow columns.

## Colors

Measured on spectrum.adobe.com, with the page's own `--s2-*` variables as cross-checks.

- **Canvas** `{colors.canvas}` #f7f7f7 is the page background (the site's `--se-body-background-color` is `light-dark(#f7f7f7, #000)`); `{colors.page-largest}` #ffffff is the largest painted area, the cards and panels; `{colors.surface-subtle}` #f3f3f3 is a secondary tile fill (the grey media card, the code block).
- **Ink**: `{colors.ink}` #000000 for headlines and links; `{colors.ink-heading}` #292929 for smaller headings (the 18px "One system, built for every platform"); `{colors.ink-body}` #717171, the most-read color, for paragraphs; `{colors.ink-translucent}` #3a3a3ab3 for card captions.
- **Primary** `{colors.primary}` #131313 is the fill of the black pill buttons (the "First stop, foundations", "See all components" and "Sign in" buttons) with `{colors.on-primary}` white text. This matches `--s2-gray-900`, which the page declares as `light-dark(rgb(19 19 19), rgb(242 242 242))`.
- **Accent blue** `{colors.accent-blue}` #3b63fb is `--s2-blue-900` and the fill of the detected "What's new" button; hover darkens it to `{colors.accent-blue-hover}` #274dea, which is `--s2-blue-1000`. The extractor's automatic primary was this blue; this file reassigns the primary role to the black pill because the capture shows black as the main action color and the live playground labels the black button's variant "primary".
- **Spectrum Web Components accent** `{colors.accent-blue-swc}` #0265dc is the button fill measured on the component docs page https://opensource.adobe.com/spectrum-web-components/components/button/, a different (earlier-generation) accent than the site's own blue. `{colors.field-fill-swc}` #e6e6e6 and `{colors.border-swc}` #d5d5d5 come from the same docs, on the Textfield page.

The page defines a full dual-mode ramp: grays 25 to 1000, and blue, red, orange, yellow, green, seafoam, cyan and pink from 100 to 1200, each written as `light-dark(...)`. The Adobe corporate red is declared as `--se-adobe-corporate-color` rgb(235 16 0). The ramps exist in CSS but only grays and one blue are painted in the capture.

## Typography

Three families appear in the CSS: **Adobe Clean** (loaded at 400, 500, 700), **Adobe Clean Display** (named in `--s2-font-display-family`), and, on the Spectrum Web Components docs, **Adobe Clean Serif** for the h1. Trebuchet MS is the declared fallback on the site (Trebuchet MS 400 and 700 are also loaded). Spectrum's own token source (https://raw.githubusercontent.com/adobe/spectrum-design-data/main/packages/tokens/src/typography.json) names the families "Adobe Clean Spectrum VF", "Adobe Clean Serif" and "Adobe Clean Han".

| Role | Size / line | Weight |
|---|---|---|
| Display (h1) | 64px / 64px | 500 |
| Heading (card titles) | 18px / 21.6px | 600 |
| Body | 16px / 24px | 400 |
| Compact button | 14px / 18px | 500 |
| Large button | 18px / 22px | 700 |
| Nav | 16px / 24px | 600 |

The site declares a heading scale `--s2-heading-size-*` of xs 16, s 18, m 22, l 28, xl 36, xxl 40, xxxl 58 and xxxxl 73px with heading line-height 1.2, heading weight 600, and body scale xxs 11 to xxxl 25px with body line-height 1.5 and weight 400. Component text uses a separate xs to xl scale (11, 12, 14, 16, 18px). The 64px h1 is measured at weight 500; the 58px value is the declared `--s2-heading-size-xxxl`.

### Font substitutes
Adobe Clean is Adobe's proprietary typeface (served from Adobe's font infrastructure). Substitute Source Sans 3 (open source, also from Adobe) at 500 and 600 for headings and 400 for body; the SWC docs themselves list "Source Sans Pro" in the fallback stack.

## Layout

The page uses a 12-column system declared as `--se-grid-container-width` 83.4%, `--se-grid-gutter-width` 8.3% and `--se-grid-column-width` container width over 12. The site nav has `--sitenav-nav-width` 220px expanded and 56px collapsed, a header height of 104px, and inline margins of 24 and 56px. In the capture the left rail floats as a rounded white card, the hero copy is centered in a narrow column about 500px wide, and the media cards sit side by side in a centered 660px band.

The spacing scale is the S2 ladder: 2, 4, 8, 12, 16, 24, 32, 40, 48, 64, 80 and 96px (`--s2-spacing-50` to `-1000`). Sections are separated by large empty bands of canvas, often 150px or more at the screenshot's scale.

## Elevation & Depth

Depth is soft and diffuse. The one measured box shadow is `rgba(0,0,0,0.12) 40px 40px 100px 0`, a wide, offset ambient shadow beneath the playground card. The site also declares `--s2-elevated-shadow` as three stacked layers (`0 0 2px rgb(0 0 0 / 12%)`, `0 2px 6px rgb(0 0 0 / 4%)`, `0 4px 12px rgb(0 0 0 / 8%)`) and `--sh-glass-blur` 32px with `--sh-glass-background-color` `light-dark(#ffffff80, #ffffff0a)`, a glass treatment declared in CSS; the announcement strip's measured background is `#156bff14`. Surfaces otherwise separate by tone: #ffffff on #f7f7f7.

## Shapes

Radii in the page: 32px (6 occurrences; media cards, rail card), 8px, 24px (the large pill buttons), 6px, 16px (the small buttons) and 100px. Spectrum's own corner-radius scale on the page runs `--s2-corner-radius-75` 3px, 100 4px, 200 5px, 300 6px, 400 7px, 500 8px, 600 9px, 700 10px, 800 16px, 850 20px, 950 32px and 1050 40px. The upstream token file confirms `corner-radius-100` 4px, `corner-radius-500` 8px and `corner-radius-800` 16px. The shape rule: containers 16 to 32px, small controls 4 to 8px, buttons fully rounded for their height (the 32px button uses 16px, the 48px button 24px).

## Components

**Large black pill.** `button-primary`: #131313 fill, white text at 18px/700, 0 24px padding, 48px tall, 24px radius, 2px border in the same color. Used for the hero and "See all components" calls to action, with a leading line icon.

**Compact black pill.** `button-compact`: 32px tall, 14px/500, 16px radius, 1px 16px padding. This is the "Sign in" button in the header, set beside a search icon and a light/dark contrast toggle.

**Accent button.** `button-accent`: #3b63fb, white 14px/500, 32px tall, 16px radius; hover fill `{colors.accent-blue-hover}`. It sits inside the pale-blue announcement strip.

**Spectrum Web Components button (measured on the component docs).** `button-accent-swc`: #0265dc fill, 14px/700, 32px tall, 16px radius, 0 14px padding, on the docs page for `sp-button`. **Textfield (same docs).** `text-field-swc`: #e6e6e6 fill, 4px radius, 32px tall, 14px/400, 0 12px 0 24px padding; border color #d5d5d5 appears widely on those docs.

**Rail card.** White, 32px radius, with icon-and-label rows in grey 14px type.

**Media cards.** 32px radius; one dark gradient render, one grey `{colors.surface-subtle}` card with a laid-in UI screenshot.

**Playground.** A white 32px-radius card with a two-column layout: the live component at left, a labeled property list at right (dropdowns in #f3f3f3-toned fills, toggles) and a code block below with a "Copy code" button (measured fill #e9e9e9, 8px radius).

## Design System Architecture

Spectrum is itself the public system, and it is open. The repository https://github.com/adobe/spectrum-design-data (opened) describes itself as holding "Design data, including design tokens, component schemas, and tooling for Spectrum", with the packages `@adobe/spectrum-tokens`, `@adobe/spectrum-component-schemas` and `@adobe/spectrum-design-data`, under the Apache-2.0 license, with the main branch holding Spectrum 2 data and an `s1-legacy` branch for Spectrum 1. Its tokens are organized in three levels: global tokens (base values), alias tokens (references to globals) and component tokens (component-specific). Token files read from the repo: `color-palette.json`, `layout.json`, `typography.json` and `layout-component.json` under `packages/tokens/src/`.

Implementations cited by the site are React and Web Components (with iOS and Android listed as coming; the page says "Dedicated areas for React and Web Components are available in beta"). The Spectrum Web Components documentation at https://opensource.adobe.com/spectrum-web-components/ was opened and measured for Button and Textfield. The page's CSS prefixes show the layers: `--s2-*` for Spectrum 2 tokens, `--swc-*` for Web Components aliases (for example `--swc-gray-25: var(--s2-gray-25)`), `--se-*` for the site's own tokens and `--sh-*` and `--sitenav-*` for the shell. The docs sub-pages under spectrum.adobe.com/page/ returned "Not found" when opened in this session (the site announces "Spectrum Hub" as the new documentation home), so component guidance there was not read.

## Do's and Don'ts

**Do**
- Use `{colors.primary}` black pills for the primary action and keep blue for announcements, selection and links.
- Round buttons to half their height (16px at 32px, 24px at 48px).
- Put content on white cards over the `{colors.canvas}` page background, with 32px corners on large media.
- Show real components with a property table and code sample.
- Set body copy in `{colors.ink-body}` with line-height 1.5.

**Don't**
- Don't use the blue as the fill of every button; the capture's main actions are black.
- Don't use hard borders on cards; separation comes from tone and a soft shadow.
- Don't use Adobe red (`--se-adobe-corporate-color`) in UI; it marks the logo.
- Don't set headlines in bold 700; the display uses 500 and the heading 600.
- Don't mix the older #0265dc accent with the site's #3b63fb on one surface.

## Responsive Behavior

The site nav declares an expanded width of 220px and a collapsed width of 56px, and the home rail card has a collapse icon at its bottom-left, so the navigation is collapsible. Component sizes follow Spectrum's S/M/L/XL heights: `--s2-component-s-height` 24px, `--s2-component-m-height` 32px, `--s2-component-l-height` 40px and `--s2-component-xl-height` 48px, which matches the 32px and 48px buttons above. The token source states paired desktop and mobile values (for example 14px desktop and 17px on mobile for the base component font size, per the typography file). Mobile-width measurements of this page were not taken in a way that changes the tokens here.

## Iteration Guide

1. Start from `{colors.canvas}` and white cards; set headings in Adobe Clean 500 to 600 and body in `{colors.ink-body}`.
2. Add one black pill per section: 48px tall for heroes, 32px in the header.
3. Add one blue element at most (an announcement strip or link), using `{colors.accent-blue}` with hover `{colors.accent-blue-hover}`.
4. Use 32px radii for cards and media and the ambient 100px shadow for the featured demo only.
5. Document by demonstration: a live component with a property table.
6. Run `node web/scripts/verify-designs.mjs --slug=spectrum-design`.
