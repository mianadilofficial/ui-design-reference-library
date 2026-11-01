---
version: alpha
name: Bethesda.net
category: "Gaming"
description: "Dark, game-publisher hub for Bethesda Softworks' franchises (Fallout, DOOM, The Elder Scrolls, QUAKE): #191919 background, white text, uppercase Trade Gothic Bold Condensed at 70px for hero headlines, Montserrat 16px body, fully rounded pill buttons in #303030 and #e7e7e7, 10px-radius feed cards with outlined franchise tag pills and a #00d0c840 teal hover glow."
colors:
  canvas: "#191919"
  ink: "#ffffff"
  primary: "#303030"
  on-primary: "#ffffff"
  button-light: "#e7e7e7"
  black: "#000000"
  surface-header: "#1d1d1d"
  surface-pill: "#1e1e1e"
  card-hover: "#202020"
  outline: "#454545"
  heading-fill: "#1f2937"
  ink-muted: "#b3b3b3"
  ink-soft: "#d5d5d5"
  ink-caption: "#b8b8b8"
  tag-tan: "#bca875"
  tag-gold: "#ddb724"
  accent-teal: "#00a499"
  accent-yellow: "#faed7b"
  glow-teal: "#00d0c840"
typography:
  display:
    fontFamily: "\"Trade Gothic Bold Condensed No20\", \"Arial Narrow\", sans-serif"
    fontSize: 70px
    fontWeight: 400
    lineHeight: 76px
    letterSpacing: "-1.5px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Trade Gothic Bold Condensed No20\", \"Arial Narrow\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 40px
    letterSpacing: "-1px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Trade Gothic Bold No2\", \"Arial Black\", sans-serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-1.5px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"Trade Gothic Bold No2\", \"Arial Black\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: "-1px"
  body:
    fontFamily: Montserrat, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: Montserrat, sans-serif
    fontSize: 12px
    fontWeight: 600
    lineHeight: 18px
    letterSpacing: 1.2px
    textTransform: uppercase
  nav:
    fontFamily: Montserrat, Verdana, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  link:
    fontFamily: Montserrat, Verdana, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
rounded:
  xs: 2px
  sm: 8px
  md: 10px
  lg: 16px
  xl: 20px
  2xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 14px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 28px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 52px
    borderColor: "{colors.ink}"
  button-light:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.black}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 52px
    borderColor: "{colors.ink}"
  button-quiet:
    backgroundColor: "{colors.surface-pill}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 40px
    borderColor: "{colors.outline}"
  button-login:
    textColor: "{colors.ink}"
    rounded: "{rounded.xs}"
    height: 38px
    borderColor: "{colors.ink}"
  nav:
    backgroundColor: "{colors.surface-header}"
    textColor: "{colors.ink}"
    padding: 0px 36px
    height: 56px
  nav-link:
    textColor: "{colors.accent-teal}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.tag-gold}"
    typography: "{typography.link}"
    rounded: "{rounded.md}"
  card-hover:
    backgroundColor: "{colors.card-hover}"
  footer:
    textColor: "{colors.ink-muted}"
---

## Overview

Bethesda.net is the publisher hub for Bethesda Softworks' franchises. The English home page (`https://bethesda.net/en-EU`) is a dark, poster-driven feed: a slim black-grey header (hamburger, wordmark, search, a "LOG IN / SIGN UP" outlined button), a full-width hero of promotional art (a Vault Boy tearing through a slashed backdrop for the Fallout 76 "Slasher" update in the capture), a centred uppercase headline, a two-line description and two pill buttons (WATCH NOW, MORE DETAILS). Below it, "THE LATEST" opens a news grid: one large feature card, three small cards and a right-hand column of six compact rows, each tagged with its franchise in a small outlined pill (DOOM, The Elder Scrolls Online, QUAKE, Fallout). A banner for DOOM: The Dark Ages carries WATCH TRAILER and BUY NOW pills, an "EVENTS" band follows with an ALL EVENTS pill, and the footer groups links under ENGLISH and EXPLORE.

The art is the brand: every tile is key art or game screenshots, so the interface stays neutral grey-black and lets franchise colors appear only in thin tag outlines. Copy is event-driven and concise ("Update 51 Base-Game Patch Now Live on All Platforms", "Hell hath frozen over, but the Slayer's fire still burns..."), with the hero headline in all caps. The measured page title is "Home | Bethesda.net" and the description declares it the official site for the publisher of Fallout, DOOM, Dishonored, Skyrim, Wolfenstein and The Elder Scrolls.

The page's consent dialog (a Ketch overlay) was hidden by the extractor before measuring and is not part of the design; the visually hidden "Enter to skip to main content." link measured by the generator is an accessibility control and is not documented as a component.

## Colors

The page declares its own custom properties on `:root`: `--background-color: rgb(25, 25, 25)`, `--text-color: rgb(255, 255, 255)`, `--primary-color: rgb(255, 255, 255)`, `--secondary-color: rgb(69, 69, 69)`, `--outline-color: rgb(69, 69, 69)`, `--accent-color: rgb(250, 237, 123)`, `--hover-background: rgba(255, 255, 255, 0.05)` and `--bg-color: #000`. The tokens follow them.

- **Canvas `#191919`** matches the page's `--background-color` and is the dominant flat color in the capture and the feed-card background. **Black `#000000`** is the body background behind it and the text color on the light pill. **Surface header `#1d1d1d`** is the header bar.
- **Ink `#ffffff`** is the most-read text color (1512 weighted characters): headlines, titles and button labels. Greys carry supporting text: `#b3b3b3` (304 characters, footer and secondary lines), `#d5d5d5` (272) and `#b8b8b8` (150).
- **Primary `#303030`** fills the dark pills (MORE DETAILS, WATCH TRAILER, CHECK IT OUT) with a 1px white border and white text; **button light `#e7e7e7`** with `#000000` text fills the WATCH NOW pill. **Surface pill `#1e1e1e`** with a `#454545` outline is the quiet pill (SEE MORE, ALL EVENTS), whose border turns to `#ffffff` on hover.
- **Card hover `#202020`** is the background a feed card takes on hover and focus, together with a teal glow `0 0 20px #00d0c840` declared in the stylesheet (the measured shadow is `rgba(0, 208, 200, 0.25)`).
- **Franchise tag colors** are thin 1px outlines and small text on tags: measured border colors include `#ddb724`, `#bca875`, `#30a000` and `#c08117`; the tokens keep the tan `#bca875` and gold `#ddb724`.
- **Accents:** `#00a499` (measured on a navigation link) and `#faed7b` (the page's `--accent-color`); four 4px bottom-edge shadows in teal `rgb(0, 164, 153)`, steel blue `rgb(62, 115, 153)`, light blue `rgb(112, 178, 190)` and yellow `rgb(250, 237, 123)` were measured on single elements.
- **Heading fill `#1f2937`** is the computed color of the "THE LATEST" heading, which the capture shows drawn as outlined letters on the dark canvas, so the fill is nearly invisible against the background.

## Typography

Fonts are declared in the site's own stylesheet (`https://bethesda.net/_static-landing-pages/global-kiaYUtGK.css`) and loaded from its own static path, with Montserrat from Google's font host:

- **Trade Gothic Bold Condensed No20** (`TradeGothicBoldCondensed20.latin*.woff2`) is the heading face (`--font-heading`), used for the hero headline at 70px / 76px with `-1.5px` tracking, uppercase, fallback `"Arial Narrow", sans-serif`.
- **Trade Gothic Bold No2** (`TradeGothicBold2.latin*.woff2`, `--font-subtitle`) sets section headings (36px, uppercase, `-1.5px`) and card titles (20px / 24px, `-1px`), fallback `"Arial Black", sans-serif`.
- **Montserrat** (400, 500, 600, 700 declared) is the body, caption, button, overline and badge face (`--font-body`, `--font-button` and others point at it): 16px / 20px body, buttons at 12px, 600 weight, `1.2px` tracking, uppercase.
- Also declared in the stylesheet are Trade Gothic LT Std (and Condensed), Eurostile LT Std (and Condensed), Open Sans and Noto Sans JP; Eurostile and Trade Gothic LT Std account for 120 weighted characters in the measurement, and the CSS corpus counts Noto Sans JP most often (1130 declarations).

| Token | Family | Size / line | Notes |
|---|---|---|---|
| display | Trade Gothic Bold Condensed No20 | 70px / 76px | uppercase, -1.5px |
| display-mobile | same | 36px / 40px | at 390px, -1px |
| heading | Trade Gothic Bold No2 | 36px / 24px | uppercase, -1.5px |
| subheading | Trade Gothic Bold No2 | 20px / 24px | -1px |
| body | Montserrat | 16px / 20px | |
| button | Montserrat | 12px / 18px, 600 | uppercase, 1.2px |
| nav | Montserrat, Verdana | 16px / 24px | |
| link | Montserrat, Verdana | 12px / 18px | card meta |

Measured sizes by weighted characters: 16px (832), 12px (678), 14px (383), 20px (219), 26px (113), 36px (110), 11px (60), 70px (48), 10px (24), 22px (16). Weights: 400 (2024), 600 (253), 700 (190), 500 (16). The heading faces are declared without a numeric weight, so they measure as 400.

Font substitutes: the two heading faces and Eurostile are commercial type served from the site's own files. The site's own font stacks list `"Arial Narrow"` (condensed headline) and `"Arial Black"` (subtitle); use those only if the files are not licensed to you. Montserrat is available from the Google font host the stylesheet itself uses.

## Layout

The stylesheet declares a global navigation height of `50px` (`60px` from 1280px), and the measured desktop header is 56px tall with `0px 36px` padding. The page is 6036px tall at 1280px. Sections are full-width bands with 10px to 30px gaps (measured gaps: 10px, 20px, 8px, 4px, 16px, 12px, 30px, 96px, 14px).

The feed is built from a custom `feed-layout-section` grid: `grid-template-columns: repeat(auto-fit, minmax(min(var(--min-column-size), 100%), 1fr))`, a 10px gap, and `grid-auto-rows` of 400px for a single card, 360px for two or three cards (`--min-column-size: 220px`) and a 400px column minimum when four cards are present. In the capture a 2-column macro layout puts a feature card above three narrower cards on the left and six compact cards (thumbnail left, tag and title right) on the right, then a full-width banner card.

Paddings by use: 10px (42), 20px (21), 16px (20), 12px (19), 24px (13), 8px (12), 2px (10), 40px (10), 4px (10), 28px (3), 64px (3), 36px (1). Hero text is centred with generous vertical space around the headline; the headline block is 1217px wide at 1280px.

## Elevation & Depth

Depth is mostly tonal and image-driven: the hero art fades to the canvas with a dark gradient, cards measure `#191919` (the same as `--background-color`) over a `#000000` body, and 1px borders in `#454545` or `#202020` outline compact controls. No resting shadow was measured except `rgba(0, 208, 200, 0.25) 0px 0px 0px 0px` (6 elements, a zero-offset ring) and single 4px solid bottom shadows in four colors.

The stylesheet defines the interactive glow: on hover or focus of a feed card the background becomes `#202020` and a `0 0 20px #00d0c840` teal glow appears, with a `.3s` transition on background and shadow and a `.15s` transition on the card image's transform (`scale(1)`), both on `cubic-bezier(.4,0,.2,1)` and only inside `prefers-reduced-motion: no-preference`. Each feed card also declares a 1px border drawn with a conic gradient of translucent white (`#ffffff26`, `#ffffff0d`, `#ffffff06`, `#ffffff08`, `#ffffff38`). The consent modal and its scrim are excluded.

## Shapes

Radii are generous and consistent: pills (`9999px`) for all call-to-action buttons and tag chips (26 elements), 10px for feed cards (24), 8px for card images (13, from `image-clip`, which also has a `10px 10px 0` margin), 16px (10), 20px (5), 24px (3) and 2px for the "LOG IN / SIGN UP" button (1). The stylesheet also declares `--rounded-box: 1rem`, `--rounded-btn: .5rem` and `--tab-radius: .5rem`, alongside `--tw-*` variables; these names follow the Tailwind and daisyUI conventions.

Imagery is rectangular with rounded corners (card images 8px, cards 10px) and the hero is full-bleed. Icons are thin line glyphs (hamburger, search, play triangle, right arrow inside pills), white on dark.

## Components

**Primary pill (`button-primary`).** `#303030` fill, 1px `#ffffff` border, white Montserrat 12px / 600 uppercase with `1.2px` tracking, padding `16px 20px`, 52px high, fully rounded, with a trailing icon (arrow or play). Used for MORE DETAILS, WATCH TRAILER and CHECK IT OUT (24px side padding on the last).

**Light pill (`button-light`).** `#e7e7e7` fill with `#000000` label, same size and 52px height: the lead action (WATCH NOW, BUY NOW).

**Quiet pill (`button-quiet`).** `#1e1e1e` fill, 1px `#454545` border, 40px high, used for SEE MORE and ALL EVENTS; the border goes white on hover.

**Login button (`button-login`).** Transparent, 1px white border, 2px radius, 38px high, 12px uppercase label at weight 500; hover lowers opacity from 1 to 0.8.

**Header (`nav`).** `#1d1d1d`, 56px high, `0px 36px` padding, white Montserrat labels; on mobile it measures 390px by 48px with `0px 16px` padding.

**Feed card (`card`).** `#191919` background, 10px radius, a franchise tag pill (outlined in the franchise color, 12px text) above a white 16px title in Montserrat or Trade Gothic; hover applies `card-hover`.

**Tag pills.** Fully rounded outlines with 1px borders in the franchise color and small text in the same color (`#bca875`, `#ddb724`); they identify DOOM, The Elder Scrolls Online, QUAKE and Fallout.

**Footer.** `#b3b3b3` Montserrat 12px, weight 600, uppercase headings (ENGLISH, EXPLORE), links beneath.

## Design System Architecture

Bethesda publishes no public design system or brand guideline page that the home page links to; the HTML links no brand, press or design URL. The system is shipped inside the page: one bundled stylesheet (`/_static-landing-pages/global-kiaYUtGK.css`, about 200 KB) that contains Tailwind utility variables (`--tw-ring-*`, `--tw-shadow`), daisyUI-style variables (`--rounded-box`, `--rounded-btn`, `--animation-btn`, `--btn-focus-scale`, the `--p`, `--s`, `--a` OKLCH palette defaults), and Bethesda's own tokens (`--background-color`, `--text-color`, `--accent-color`, `--font-heading`, `--font-subtitle`, `--font-body`, `--font-button`, `--font-caption`, `--font-overline`, `--font-badge`, `--global-nav-height`).

Components are custom elements such as `feed-layout-section`, `image-clip` and elements marked `data-element="feed-card"`. The type system is named by role (heading, subtitle, body, button, caption, overline, badge), which the front matter mirrors. Third-party layers on the page (Ketch consent, Google Tag Manager) are not part of the design system.

## Do's and Don'ts

Do
- Put promotional art edge to edge and keep the interface neutral: `#191919` canvas, white text, grey secondary text.
- Set hero and section headlines in condensed Trade Gothic caps with negative tracking and keep body copy in Montserrat 16px.
- Use pills for every action: `#e7e7e7` with black text for the lead action, `#303030` with a white outline for the second action, `#1e1e1e` with a `#454545` outline for quiet actions.
- Mark franchises with small outlined tag pills in their own color instead of coloring the card.
- Reveal hover through a `#202020` background and a teal `#00d0c840` glow, `.3s` on `cubic-bezier(.4,0,.2,1)`.

Don't
- Do not use square-cornered buttons except the login control, which measures 2px.
- Do not fill cards with franchise colors; the measured cards are `#191919`.
- Do not document the consent banner, its scrim or the skip-to-content link as brand UI.
- Do not set the heading faces at a numeric bold; they are single-weight files measured at 400.
- Do not add drop shadows at rest; only the hover glow and a few 4px accents exist.

## Responsive Behavior

The stylesheet declares breakpoints at `width >= 744px`, `960px`, `1024px`, `1280px` and `1536px`, max-width rules at `599px`, `743px` and `744px`, a `638px` rule and a `48rem` rule, plus `hover: hover`, `prefers-color-scheme: dark`, `prefers-reduced-motion: no-preference` and `reduce` queries. The global nav height is `50px` and becomes `60px` at 1280px.

Measured at 390px: the hero headline is 36px / 40px with `-1px` tracking (desktop 70px / 76px), the description is 16px / 20px (358px wide), the primary pill is 358px wide and 52px high with unchanged 12px / 600 type and `16px 20px` padding, and the header is 390px wide and 48px high with `0px 16px` padding. The font sizes by weighted characters at 390px are 16px (832), 12px (430), 14px (383), 20px (292), 26px (122), 36px (76), 11px (60) and 10px (24). How the feed grid, the right-hand news column and the banner reflow is not measured, and no mobile capture image exists.

## Iteration Guide

1. Set the page to `#191919` with white text and put promotional art full-bleed at the top, with the headline in Trade Gothic Bold Condensed No20 at 70px / 76px, uppercase, `-1.5px`.
2. Build calls to action as 52px pills: `#e7e7e7` / `#000000` for the lead, `#303030` with a 1px `#ffffff` border for the second, Montserrat 12px / 600 uppercase with `1.2px` tracking and a trailing icon.
3. Lay out news with an auto-fit grid, 10px gaps and 10px-radius `#191919` cards; give each card a franchise tag pill and a 16px or 20px title.
4. Add the hover treatment last: `#202020` background and `0 0 20px #00d0c840` glow at `.3s`, with the image transform at `.15s`, both on `cubic-bezier(.4,0,.2,1)`.
5. Use the quiet pill (`#1e1e1e`, 1px `#454545`, 40px high) for section-level actions such as SEE MORE.
6. Re-measure against `web/data/extracted/bethesda.json` before adding colors; franchise outline colors must come from measured tag borders.
