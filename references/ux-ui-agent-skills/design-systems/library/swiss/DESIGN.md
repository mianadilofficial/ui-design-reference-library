---
version: alpha
name: Swiss Post
category: "Design Systems"
description: "Swiss Post (post.ch) pairs a signature postal yellow (#ffcc00) with white canvas, black ink and warm grey card surfaces (#f4f3f1), set in the proprietary Swiss Post Sans at light 300 for body and bold 700 for headings. Controls are nearly square (3px and 4px radii) with one circular back-to-top button, and photography of staff and stamps carries the warmth."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#333333"
  on-primary: "#ffffff"
  brand-yellow: "#ffcc00"
  ink-muted: "#666666"
  ink-soft: "#000000cc"
  ink-dark: "#303030"
  surface-warm: "#f4f3f1"
  hairline: "#cbcbcb"
  button-secondary-border: "#66666680"
  text-input-border: "#00000099"
typography:
  display:
    fontFamily: "\"Swiss Post Sans\", system-ui, sans-serif"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 57.6px
  display-mobile:
    fontFamily: "\"Swiss Post Sans\", system-ui, sans-serif"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 33.6px
  subheading:
    fontFamily: "\"Swiss Post Sans\", system-ui, sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 19.5px
  body:
    fontFamily: "\"Swiss Post Sans\", system-ui, sans-serif"
    fontSize: 24px
    fontWeight: 300
    lineHeight: 36px
  button:
    fontFamily: "\"Swiss Post Sans\", system-ui, sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 18px
  input:
    fontFamily: "\"Swiss Post Sans\", system-ui, sans-serif"
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
rounded:
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 13px
  s8: 16px
  s9: 18px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 10px 18px
    height: 42px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 13px 18px
    height: 64px
    borderColor: "{colors.button-secondary-border}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-muted}"
    typography: "{typography.subheading}"
    rounded: "{rounded.xs}"
    padding: 16px
    borderColor: "{colors.hairline}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 34px 48px 10px 16px
    height: 74px
    borderColor: "{colors.text-input-border}"
---

## Overview

Swiss Post's homepage (post.ch, German-language capture) reads as a utilitarian service portal wrapped in a very recognisable color: a saturated postal yellow, `{colors.brand-yellow}`, used for the logo tile at top left, the "Sendung verfolgen" (track a shipment) band, the hero panel listing the main services, and the full-width PostFinance / PostAuto bars above the footer. Everything else is deliberately neutral: a `{colors.canvas}` white page, `{colors.ink}` black type, `{colors.surface-warm}` warm grey cards, and a dark `{colors.primary}` button. The yellow does the branding; the neutrals keep forms, prices and opening hours legible.

The first screen is task-first. A bold "Sendung verfolgen" heading sits above a yellow band holding a large tracking-number field and a dark "Suchen" button, followed by a row of six outlined shortcut tiles (shop, prices, parcel labels, pick-up, personalised stamps, change of address). Below that a split hero puts a yellow list of services ("Briefe versenden", "Pakete versenden", "Express und Kurier", "Einschreiben aufgeben") beside a photograph of a smiling delivery employee in a yellow van door. Teaser cards follow, each with a photo or stamp artwork on top, a bold title, a lighter subline and a "Mehr erfahren" arrow link.

The voice is plain, short German: imperative verbs for tasks, benefit lines such as "Alles drin. Stark im Preis." for promotions. The capture was taken while a cookie dialog ("Cookie-Einstellungen") dimmed the top of the page; that dialog and its three buttons are consent UI and are not part of the brand's component vocabulary. All values in this document were measured from the DOM, so the dimming overlay does not affect them.

## Colors

The palette is small and mostly neutral. Measured by painted area, the dominant fills are the dark `{colors.primary}` (#333333, button and consent surfaces), the postal yellow `{colors.brand-yellow}`, white `{colors.canvas}`, and two warm greys; the lighter of them, `{colors.surface-warm}`, is the card body color.

- **Canvas `{colors.canvas}`** is the page background in the capture and the body fill.
- **Ink `{colors.ink}`** is the most-read text color (headings, card titles, nav). `{colors.ink-soft}` (black at 80% alpha) and `{colors.ink-dark}` (#303030) appear as secondary reading text; `{colors.ink-muted}` (#666666) is used for utility links in the top bar, shortcut-tile labels and footer links.
- **Primary `{colors.primary}`** is the fill of the one detected call to action, the "Suchen" button, with white `{colors.on-primary}` text. It is dark grey rather than yellow: yellow is a surface color in this system, not a button color on the homepage.
- **Brand yellow `{colors.brand-yellow}`** fills large panels and bands. Dark text sits on it.
- **Borders**: `{colors.hairline}` (#cbcbcb) for neutral outlines, `{colors.button-secondary-border}` (grey at 50% alpha) around the circular back-to-top button and `{colors.text-input-border}` (black at 60% alpha) around the tracking field.

Other hues appear in the shipped stylesheet (blues, reds, greens, purples) but they are not part of the homepage's visible palette, so none are adopted here. The browser-default link blue (#0000ee) also shows in the text-color table; it is a user-agent default on an unstyled link, not a brand color.

## Typography

One family carries everything: Swiss Post Sans, with `system-ui, sans-serif` as the declared fallback. The measured page loads it at three weights (300, 400, 700). A second family, Frutiger Neue for Post, is also present in the font table for a minority of characters. Swiss Post Sans is proprietary and no public substitute is declared by the site; if you cannot license it, fall back to the system sans from the stack and keep the 300/400/700 weight contrast.

- **Display** (`{typography.display}`): 48px, weight 700, line-height 57.6px. On mobile (390px) the display style drops to `{typography.display-mobile}`: 28px, 700, 33.6px. Section headings such as "Sendung verfolgen" use the 28px bold size on desktop as well.
- **Body** (`{typography.body}`): 24px, weight 300, line-height 36px. This is the large, light text used for teaser sublines ("Entdecken Sie jetzt Ihre liebsten Motive."). The light weight against bold titles is the main typographic contrast.
- **Subheading** (`{typography.subheading}`): 13px, weight 400, line-height 19.5px, in `{colors.ink-muted}`, used for the shortcut-tile labels.
- **Button** (`{typography.button}`): 15px, weight 400, line-height 18px.
- **Input** (`{typography.input}`): 17px, weight 400, line-height 25.5px.

Letter-spacing is the default (normal) everywhere; there is no tracking tweak and no uppercase transform.

## Layout

The measured page is 1280px wide and about 2,629px tall at desktop. Content sits in a centered column that begins well inside the viewport edges (the capture shows roughly a 96px inset at 960px scale for the main column), while the yellow PostFinance/PostAuto bars and the footer run full width. Teasers are laid out in a four-column card grid with equal gutters; the fourth card wraps to a second row, leaving empty cells to its right.

The spacing scale from measurement is `{spacing.s1}` 1px, 2px, 4px, 8px, 10px, 12px, 13px, 16px, 18px and 20px. The most frequent gap is 8px; the most frequent paddings are 16px, 8px, 12px and 20px. The "Suchen" button uses padding 10px 18px at 42px height. The tracking field is 74px tall with padding 34px 48px 10px 16px (extra top padding for a floating label).

## Elevation & Depth

The system is nearly flat. Cards are separated from the white canvas by the tonal shift to `{colors.surface-warm}` rather than by shadows. The only measured box shadow is `rgba(0, 0, 0, 0.8) 0px 3px 7px 0px`, found on the consent dialog; treat it as dialog chrome, not a card shadow. Depth otherwise comes from color blocking: yellow bands against white, photography against grey.

## Shapes

Corners are small and square-leaning. The measured radii are `{rounded.xs}` (3px, the primary button and link-style items), `{rounded.sm}` (4px, the most frequent value on the page) and a fully round shape for the circular "Zurück zum Seitenanfang" back-to-top button (measured as 100%, recorded as `{rounded.pill}`). Photography and cards have no rounded corners in the capture; tiles and yellow panels are rectangles. Borders on the shortcut tiles are 1px-style outlines in `{colors.hairline}`.

## Components

- **button-primary**: `{colors.primary}` fill, `{colors.canvas}` text, 15px/400 label, `{rounded.xs}` radius, padding 10px 18px, 42px high, with a 2px border in the same dark grey.
- **button-secondary**: the circular back-to-top control, `{colors.canvas}` fill, `{colors.ink-muted}` icon/text, 64px square footprint, `{rounded.pill}`, border `{colors.button-secondary-border}`.
- **link**: tile-style link with `{colors.canvas}` fill, `{colors.ink-muted}` 13px label, `{rounded.xs}`, 16px padding and a `{colors.hairline}` border; used for the six online-service shortcuts.
- **text-input**: `{colors.canvas}` fill, `{colors.ink}` 17px text, border `{colors.text-input-border}`, 74px tall, with a floating label inside the field.
- **Teaser card**: image area on top, then a `{colors.surface-warm}` body with a bold title, a 24px light subline and an arrow plus "Mehr erfahren" link.
- **Yellow service list**: rows on `{colors.brand-yellow}` separated by thin dark rules, each ending in a chevron.

## Design System Architecture

Swiss Post publishes an official design system at https://design-system.post.ch, a Storybook whose index lists documentation and components such as Accordion, Button, Card, Dialog, Footer, Header, Form Input and Pagination. Its source is the public repository https://github.com/swisspost/design-system, whose README describes four packages: Styles (theming for Bootstrap and ng-bootstrap), Components (framework-agnostic web components), Internet Header, and Icons, published under the Apache 2.0 license.

The homepage does use part of this ecosystem: its HTML contains `swisspost-internet-header` and `swisspost-internet-footer` elements, matching the Internet Header package named in the README. Its own stylesheet (`/assets-portal/css/main.min.css`) uses Bootstrap-style class names (`.btn`, `.btn-outline-secondary`, `.accordion`) alongside portal-specific prefixes (`ppm-coveo-search`). Because the page's visual values here come from measured computed styles, and no design-system token values were adopted, every number in this file is a measurement of the live page, not a published token. If you need canonical tokens, read the design-system site and repository directly.

## Do's and Don'ts

- Do use `{colors.brand-yellow}` as a large surface (bands, panels, logo tile) and put dark ink on it.
- Do keep the primary action dark (`{colors.primary}`) with white text.
- Do pair bold 700 titles with 300-weight sublines to build hierarchy without extra colors.
- Do use real photography of staff, vehicles and stamps.
- Don't round buttons beyond 3 to 4px, except the circular back-to-top control.
- Don't add drop shadows to cards; use the `{colors.surface-warm}` tint.
- Don't treat the cookie dialog or its buttons as brand components.
- Don't use the browser-default link blue as an accent.

## Responsive Behavior

The extraction measured a 390px mobile viewport as well as desktop. The display heading shrinks from 48px (`{typography.display}`) to 28px with 33.6px line height (`{typography.display-mobile}`). The shortcut tile row and four-up card grid are multi-column on desktop and are expected to collapse as the viewport narrows; only the heading change was measured, so confirm other breakpoints on the live site. Tap targets remain generous: the primary button is 42px high, the field 74px and the back-to-top control 64px.

## Iteration Guide

1. Start from `{colors.canvas}` and `{colors.ink}`; add yellow only as a block, never as thin text color.
2. Build the primary button first (`{colors.primary}`, 3px radius, 10px 18px padding, 15px label) and reuse it for every main action.
3. Set body copy at 24px/300 for teasers and 13px/400 for tile labels; check the weight contrast against 700 titles.
4. Group content on `{colors.surface-warm}` cards with an image on top and an arrow link below.
5. When a number is not in the frontmatter, measure it on the live site before adding it. Treat the design-system site and repository as the reference for anything beyond the homepage.
