---
version: alpha
name: UBS
category: "Banking & Insurance"
description: "UBS United States home page measured live: white and warm-grey (#f4f3ee, #f9f9f7) surfaces, near-black #1c1c1c light-weight Frutiger text (300, 48.0048px h1), a single UBS red #e60000 for the Client logins and Find out how buttons, and a tight 2px corner radius throughout."
colors:
  canvas: "#ffffff"
  page-largest: "#f4f3ee"
  ink: "#1c1c1c"
  primary: "#e60000"
  on-primary: "#ffffff"
  surface-2: "#f9f9f7"
  ink-2: "#5a5d5c"
typography:
  display:
    fontFamily: Frutiger, Arial, Helvetica, sans-serif
    fontSize: 48.0048px
    fontWeight: 300
    lineHeight: 57.0057px
  display-mobile:
    fontFamily: Frutiger, Arial, Helvetica, sans-serif
    fontSize: 32.0032px
    fontWeight: 300
    lineHeight: 40.004px
  subheading:
    fontFamily: Frutiger, Arial, Helvetica, sans-serif
    fontSize: 24.0024px
    fontWeight: 300
    lineHeight: 36.0036px
  body:
    fontFamily: Frutiger, Arial, Helvetica, sans-serif
    fontSize: 16.0016px
    fontWeight: 300
    lineHeight: 24.0024px
  button:
    fontFamily: Frutiger, Arial, Helvetica, sans-serif
    fontSize: 16.0016px
    fontWeight: 500
    lineHeight: 18.0018px
  nav:
    fontFamily: Frutiger, Arial, Helvetica, sans-serif
    fontSize: 22.0022px
    fontWeight: 300
    lineHeight: 26.0026px
  link:
    fontFamily: sans-serif
    fontSize: 16.0016px
    fontWeight: 400
    lineHeight: 16.0016px
  button-secondary:
    fontFamily: Frutiger, Arial, Helvetica, sans-serif
    fontSize: 12.0012px
    fontWeight: 500
    lineHeight: 15.8416px
rounded:
  xs: 2px
  cta: 2px
spacing:
  s1: 2px
  s2: 4px
  s3: 4px
  s4: 8px
  s5: 8px
  s6: 12px
  s7: 12px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    padding: 0px 24px
    height: 48px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 8.0008px 12px
    height: 32px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    clipPath: inset(50%)
  footer:
    textColor: "{colors.ink-2}"
    padding: 80.008px 0px 0px
---

## Overview

This DESIGN.md documents the UBS United States home page, measured from https://www.ubs.com/us/en.html (page title "Our financial services in the United States of America | UBS United States", language en). The interface is a restrained private-bank look: a white header with a thin navigation row, a full-width street photograph at the top carrying a translucent white message panel, then alternating bands of warm grey (`page-largest` #f4f3ee) and white holding image-over-text cards. Type is light (weight 300 dominates: 3,651 of the measured characters) and the only saturated colour is UBS red (`primary` #e60000), reserved for action buttons.

The copy voice is calm and first-person-plural: "You're moving at the speed of life", "Explore our capabilities", "Your ambitions. Your values. Your legacy." Section labels such as "Wealth transfer" and "Research: Chief Investment Office" appear as small eyebrow lines above large light headlines. Outlined secondary actions ("See how", "Explore midterm election insights") carry a chevron icon. The overall impression is editorial and spacious, with photography of people in motion, a portrait, a meeting and a skyline.

## Colors

`canvas` #ffffff and `page-largest` #f4f3ee are the two surfaces; by measured area the warm grey #f4f3ee (2,558) exceeds white (570), with `surface-2` #f9f9f7 (1,014) used for card surfaces. A deep maroon #570307 (387) and a translucent white #ffffffcc (212) were also measured as background areas; the latter is the overlay behind the hero headline. `ink` #1c1c1c is the main text colour (3,704 characters) and `ink-2` #5a5d5c is secondary text (1,155 characters), used in the footer. `primary` #e60000 fills the primary and secondary buttons, and `on-primary` is white. Red measured on only 11 background areas, so it is a rare, deliberate signal.

The stylesheet exposes `--col-*` custom properties (for example `--col-shadow-key-lg`, `--col-icon-inverted-static` #fff, `--col-link-text-inverted-static` #fff), indicating a token-driven colour layer; only the values listed in the frontmatter were measured on rendered elements.

## Typography

The face is Frutiger, loaded in weights 300–499 (variable range) and 500, with Arial, Helvetica, sans-serif as fallbacks; an `ubs-icons` icon font is also loaded. Desktop h1 is Frutiger 300 at 48.0048px / 57.0057px; `subheading` is 300 at 24.0024px / 36.0036px; body is 300 at 16.0016px / 24.0024px; buttons are 500 at 16.0016px / 18.0018px, and the small header button is 500 at 12.0012px / 15.8416px. The nav token measured 22.0022px / 26.0026px but belongs to a visually hidden "Skip to main content" link (clip-path inset(50%), 1px by 1px), so it is not a visible navigation style. Links in the header measured as plain `sans-serif` 400 at 16.0016px. Other measured sizes include 14.0014px, 13.0013px, 12.0012px, 40.004px and 32.0032px.

Frutiger is a commercial typeface; when it cannot be licensed, the declared Arial, Helvetica fallback is the documented substitute. Keep weight 300 for headlines and body to preserve the light look.

## Layout

The measured page is 1280px wide and 5,964px tall. The header is 106px tall (`--main-content-start-position` 106px). The stylesheet declares `--grid-container-max-width-xl` 1290px, `--grid-container-spacing` 20px and `--grid-absolute-gutter` 20px. Measured gaps include 40px (most common), 20.002px, 8.0008px, 12.0012px and 24.0024px; paddings include 64px, 24px, 40.004px, 60.006px and 80.008px (footer top). The capture shows a four-card row for the capabilities, a two-column image-and-text band, and an alternating image side on the next band.

## Elevation & Depth

Depth is nearly flat. The only measured box shadow on rendered elements is `rgb(28, 28, 28) 0px 0px 0px 1px inset` (6 uses), a 1px inset outline on the outlined buttons. The stylesheet defines a shadow token family (`--col-shadow-key-lg` rgba(0, 0, 0, 0.05), `--col-shadow-amb-sm` rgba(0, 0, 0, 0.08) and others) but those did not render on the home page. Layers are separated by background-colour bands instead of shadows, and the hero uses a translucent white panel.

## Shapes

One radius dominates: 2.0002px (8 elements), tokenised as `xs` and `cta` at 2px. Corners are therefore nearly square; buttons, small header controls and outlined buttons all use it. The stylesheet also contains 6px, 5px, 1px, 8px and 15px radii, which did not appear on rendered home-page elements.

## Components

`button-primary` is the "Find out how" link-button: #e60000 fill, white Frutiger 500 16.0016px label, 2px radius, 0px 24px padding, 48px tall, 176px wide. `button-secondary` is the header "Client logins" button: same red fill, white 12.0012px label, padding 8.0008px 12px, 32px tall, 94px wide; its hover state was recorded in the extraction. Outlined buttons in the content area have a 1px #1c1c1c inset outline on white with a red chevron. The `nav` is a white header with the UBS wordmark, a "United States of America" site label, "Locations", a "Tools & Services" outlined button and a search icon, and a second row of primary links: Wealth Management, Asset Management, Investment Bank, Corporate and Institutional Clients, About us, Careers. `footer` text is `ink-2` #5a5d5c with 80.008px top padding and includes a "Back to top" control (not documented as brand UI).

## Design System Architecture

No public UBS design system site was opened in this session. The de-facto system is visible in the shipped CSS: colour tokens prefixed `--col-` (shadow, icon, link and border roles), layout tokens prefixed `--grid-` and `--sticky-manager-` and `--primaryheader-sticky-height`, plus a proprietary `ubs-icons` font. Components are named by function (primary header, sticky manager, skip links) rather than by a published library.

## Do's and Don'ts

Do keep surfaces white or warm grey (#f4f3ee, #f9f9f7) and text #1c1c1c at light weights. Do reserve #e60000 for the primary and header actions. Do keep corners at 2px. Do use outlined buttons with a chevron for secondary actions.

Don't introduce additional accent colours. Don't use heavy font weights for headlines; weight 300 is measured. Don't use large radii or pill buttons. Don't treat the hidden skip link's 22.0022px size as a visible nav size.

## Responsive Behavior

The mobile pass (390px wide) recorded: h1 32.0032px / 40.004px weight 300 (`display-mobile`), body 14.0014px / 22.0022px, the primary CTA at 14.0014px / 16.0016px, 302px wide and 48px tall, and a 79px-tall, 390px-wide header. Other mobile behaviour, including menu form and column counts, is not measured.

## Iteration Guide

1. Set canvas #ffffff, bands #f4f3ee and card surface #f9f9f7.
2. Set all text in Frutiger 300 with #1c1c1c; secondary text #5a5d5c.
3. Make primary buttons #e60000, white 500 label, 2px radius, 48px tall.
4. Use a translucent #ffffffcc panel over hero photography.
5. Gate with `node web/scripts/verify-designs.mjs --slug=ubs`.

## Additional Measurements

Font weights by character count were 300 (3,651), 400 (999) and 500 (297), so the page is overwhelmingly light with medium weight reserved for button labels. Font sizes by character count were led by 16.0016px (2,940), then 12.0012px (564), 14.0014px (553), 24.0024px (464), 40.004px (228) and 32.0032px (76); the large headings in the capabilities and editorial bands therefore sit at 40.004px, a size that is measured on the page though not tokenised separately. Letter spacing measured as normal on every extracted role. The hero headline and its supporting sentence sit on a translucent white panel over the photograph, with a short red vertical rule at the left edge of the text in the capture, and the "Find out how" button is attached beneath. The "Our Services" control at the bottom-left of the hero is an outlined white button with a downward arrow. These details come from the extraction and the capture; none are used as tokens beyond those listed in the frontmatter.
