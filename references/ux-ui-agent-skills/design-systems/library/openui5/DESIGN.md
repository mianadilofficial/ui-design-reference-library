---
version: alpha
name: OpenUI5
category: "Design Systems"
description: "OpenUI5 project site: white and #f4f9fb bands, brand blue #1873b4 with #0f9be6 gradient hero, black ink, SAP's 72 typeface at 17.6px body and 37.431px headings, flat blue illustrations, no shadows, 5px-radius buttons."

colors:
  canvas: "#ffffff"
  page-largest: "#f4f9fb"
  ink: "#000000"
  primary: "#1873b4"
  on-primary: "#ffffff"
  brand-blue-light: "#0f9be6"
  brand-blue-dark: "#223548"
  brand-blue-contrast: "#b9d5e8"
  success: "#30914c"
  ink-on-brand-muted: "#ffffffcc"
typography:
  display:
    fontFamily: "\"72\", Arial, Helvetica, sans-serif"
    fontSize: 37.431px
    fontWeight: 500
    lineHeight: 46.7888px
  display-mobile:
    fontFamily: "\"72\", Arial, Helvetica, sans-serif"
    fontSize: 28.3637px
    fontWeight: 500
    lineHeight: 35.4547px
  subheading:
    fontFamily: "\"72\", Arial, Helvetica, sans-serif"
    fontSize: 22.44px
    fontWeight: 500
    lineHeight: 28.05px
  body:
    fontFamily: "\"72\", Arial, Helvetica, sans-serif"
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 22px
rounded:
  btn: 5px
spacing:
  s1: 11.2px
  s2: 16px
  s3: 32px
  s4: 38.4px
  s5: 40px
  s6: 48px
  s7: 64px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.body}"
    rounded: "{rounded.btn}"
  button-primary-hover:
    backgroundColor: "{colors.brand-blue-light}"
    textColor: "{colors.on-primary}"
  nav:
    textColor: "{colors.ink-on-brand-muted}"
  nav-link:
    textColor: "{colors.ink-on-brand-muted}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

# OpenUI5

## Overview

openui5.org is the project home page for OpenUI5, the JavaScript UI framework that SAP released under the Apache 2.0 licence; the page states this itself ("OpenUI5 is a JavaScript UI Framework released by SAP under the Apache 2.0 license. It's open for contributions and feedback!"). The measured page is short and calm: a saturated blue hero band with the OpenUI5 wordmark, a white band with three centered teasers ("Enterprise-Grade", "Responsive on All Devices", "Free and Open Source"), a very pale blue band headed "Start coding", and a blue footer carrying the copyright line and legal links. A footer line says the site is hosted on GitHub Pages.

The voice is plain, technical and reassuring, with short declarative claims about standards, devices and licensing rather than marketing superlatives. There are no photographs; imagery is limited to the phoenix-outline watermark inside the hero and three flat, blue line-and-fill illustrations (a monitor with a chart and checkmark, a set of devices, a monitor with a lightbulb and gears). Colour is almost entirely one hue family: a mid blue `#1873b4`, a brighter sky blue `#0f9be6`, and a deep navy `#223548`, laid on white and a faint blue-grey.

The page is not built around a primary button. The only interactive chrome visible in the capture is a text navigation (Documentation, Releases, Events, Community) and a GitHub icon, all set in white over the hero.

## Colors

All colours come from the site's own `:root` custom properties, which the extractor recorded and which the shipped stylesheet https://openui5.org/css/common.css declares. `canvas` is `#ffffff` (`--background-color`). `page-largest` `#f4f9fb` (`--background-color-alternate`) is the largest background area, filling the "Start coding" band. `ink` is `#000000` (`--text-color`), the dominant text colour on the light bands.

`primary` is `#1873b4`, the site's `--brand-color`; it is also the footer fill and the start of the hero gradient. `brand-blue-light` `#0f9be6` is `--brand-color-alt`, the other end of the hero gradient and the hover fill of the stylesheet's `.btn` class. `brand-blue-dark` `#223548` is `--dark-brand-color`. `brand-blue-contrast` `#b9d5e8` is `--brand-color-contrast`. `success` `#30914c` is `--sucess-color` (spelled that way in the CSS). `on-primary` is white, used for text over the hero and footer, and `ink-on-brand-muted` `#ffffffcc` is the 80%-opaque white used for the navigation and footer links, which brighten to solid white on hover according to the hover probe.

The stylesheet also declares dark-mode brand values (`--brand-color-dark-primary` `#FF5A37`, `--brand-color-dark-secondary` `#FFA42C`, `--brand-color-dark-bg` `#000`) and a `prefers-color-scheme: dark` media block. These were not rendered in the light capture and are not tokens here.

## Typography

The whole page is set in the typeface named "72" with Arial, Helvetica and sans-serif as fallbacks; the extraction lists the 72 family in regular and bold (plus SAP-icons and Mono variants in the CSS corpus). The page loads it as a webfont (no foundry or licence page was opened, so licensing is not stated here). For substitution use Arial or Helvetica, which the CSS already names.

Measured roles: the display style (`display`) is 37.431px at weight 500 on a 46.7888px line-height, and `display-mobile` is 28.3637px on 35.4547px at the 390px viewport. These measurements come from the first heading the extractor found ("Key facts", visually hidden) and from the "Start coding" h2, which has the same style. The visible hero wordmark "OpenUI5" is set much larger: the stylesheet gives h1 `font-size: var(--type-4)` and weight 700, but the capture shows a light "Open" and bold "UI5" lockup, so treat it as a logo rather than a text style. `subheading` is 22.44px/28.05px at weight 500, used for the teaser titles. `body` is 17.6px on a 22px line-height at weight 400.

Sizes are fluid in the source: the stylesheet defines `--type-0` through `--type-5` as `clamp()` expressions, so the pixel values above are the resolved sizes at the measured viewport widths.

## Layout

A single full-width page of horizontal bands. The hero is a short band (the stylesheet sets its height to 25vh) with a diagonal gradient (225deg, from `#1873b4` to `#0f9be6`) and a large phoenix outline drawn behind the content at low opacity. The navigation sits on the hero, logo left, links and GitHub icon right. Below, content sits in a container capped at 1240px in the stylesheet, and the teasers use an auto-fill grid with a minimum column width of 19rem (20rem at wider screens), which gives three centered columns on desktop. The "Start coding" band presents an embedded sample app from a separate host; in the capture the embed area is blank, so its contents are not described.

Spacing values measured on the page are 11.2px, 16px, 32px, 38.4px, 40px, 48px and 64px (`s1` to `s7`). Vertical rhythm is generous: the bands have large paddings and the teaser illustrations are given a fixed 100px height in the CSS, with a 1.5rem gap before the title.

## Elevation & Depth

The page is flat. The extraction found no box shadows, no border colours and no border radii on measured elements. Hierarchy comes entirely from band colour (blue hero, white content, pale blue code band, blue footer), the faint watermark, and type weight. Do not add shadows or cards when extending the look.

## Shapes

No rounded corners were measured on the rendered page. The only radius in play is the stylesheet's `.btn` rule, `border-radius: 5px`, which is captured as `btn`. Illustrations are rectilinear monitors and device frames with thin outlines and solid blue fills; icons are the SAP icon font and an inline GitHub mark.

## Components

**Navigation**: transparent over the hero, links in `ink-on-brand-muted` (white at 80% opacity) in the body style, turning solid white on hover. The home link is the OpenUI5 logo mark; there is a GitHub link at the end of the row. A mobile hamburger menu exists in the stylesheet (`.mobile-nav-menu`).

**Teaser**: centered column with a 100px-high flat illustration, a subheading and a three-line description in black body text.

**Hero**: gradient band with the wordmark lockup and the phoenix watermark.

**Button (`.btn`, defined in the stylesheet)**: fill `#1873b4`, white text, 5px radius, hover and focus fill `#0f9be6`, with a 2px white focus outline. It is declared in the shipped CSS but does not appear in the captured view.

**Footer**: fill `#1873b4`, white copyright text on the left, and white legal links (Legal Disclosure, Terms of use, Privacy, Trademark, Copyright) on the right.

## Design System Architecture

The site is a small hand-written static page, not a component-library demo. Its stylesheet https://openui5.org/css/common.css defines a `:root` token set (colour, a six-step fluid type scale, and a light/dark brand palette), a grid helper (`.grid-wrap`), a `.teaser` pattern, a `.btn` and a `.head` hero. The framework it promotes has its own, separate design system: the UI5 SDK at https://sdk.openui5.org (opened; it identifies itself as the OpenUI5 SDK Demo Kit, but the fetched content was only the title) documents the controls, and the repository https://github.com/SAP/openui5 describes OpenUI5 as an HTML5 rendering library with a rich set of controls and data binding. No evidence was found that this marketing page uses those controls; only the 72 font family and SAP icon font names overlap with the SAP ecosystem. Therefore `dsUrl` values were not taken for this document; every value above is measured from openui5.org itself.

## Do's and Don'ts

- Do keep colour to one blue family: `#1873b4`, `#0f9be6`, `#223548`.
- Do alternate white, pale `#f4f9fb` and blue bands to separate sections instead of cards or lines.
- Do set text in the 72 family (Arial/Helvetica fallback), weight 500 for headings and 400 for body.
- Do keep copy short and factual.
- Don't add shadows or rounded cards; the measured page has none.
- Don't use browser-default link colours; links here are white over blue or black.
- Don't introduce a second accent hue in light mode.
- Don't describe the dark-mode palette as part of the light design.

## Responsive Behavior

The extractor measured 1280px desktop and 390px mobile. The heading style drops from 37.431px to 28.3637px at mobile. The stylesheet contains breakpoints at 450px, 768px, 780px, 821px and 900px: below 780px a hamburger navigation replaces the link row, from 821px the hero container becomes a row, and the teaser grid is an auto-fill grid that collapses to fewer columns as the width narrows. Type scales fluidly through clamp() so it needs no breakpoint of its own.

## Iteration Guide

1. Set `canvas` white, `ink` black, `primary` `#1873b4`; alternate bands with `page-largest` `#f4f9fb`.
2. Build the hero as a 225deg gradient from `#1873b4` to `#0f9be6` with a faint outline watermark.
3. Use the 72 family at 17.6px/22px for body and 22.44px/28.05px at weight 500 for sub-headings.
4. Make buttons `#1873b4` with white text, 5px radius, brightening to `#0f9be6` on hover.
5. Keep footer and nav links at 80% white, solid white on hover.
6. Re-run `node web/scripts/verify-designs.mjs --slug=openui5` after each change.
