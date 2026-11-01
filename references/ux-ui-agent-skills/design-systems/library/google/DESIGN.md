---
version: alpha
name: Google
category: "AI"
description: "Google's homepage as measured in a Thai-locale session: a white #ffffff canvas, #1f1f1f text, a #0b57d0 blue pill sign-in button with 100px radius set in Google Sans Text 500, Arial for search input and links, a large pill search field, and a centered logo doodle as the only imagery."
colors:
  canvas: "#ffffff"
  ink: "#1f1f1f"
  primary: "#0b57d0"
  on-primary: "#ffffff"
  surface-2: "#f8f9fa"
  surface-3: "#f3f5f6"
  ink-2: "#474747"
  ink-4: "#1a0dab"
typography:
  display:
    fontFamily: Arial, sans-serif
    fontSize: 15px
    fontWeight: 400
  button:
    fontFamily: "\"Google Sans Text\", Roboto, Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18px
  nav:
    fontFamily: arial, sans-serif
    fontSize: 13px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 8px
  sm: 24px
  md: 26px
  lg: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 6px
  s3: 7px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 10px 12px
    height: 40px
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    padding: 14px 0px 0px
    height: 50px
---

# Google

## Overview

The Google homepage is the most reduced page in the catalogue: a white canvas (#ffffff), one centered logo doodle, one large rounded search field, two small suggestion chips, a language line, a country label and a footer. It was measured at https://www.google.com/ in a Thai-locale session (page language `th`), so the visible microcopy is Thai: a sign-in button reading "เข้าสู่ระบบ", top links such as Gmail and an images link, a "โหมด AI" (AI mode) control inside the search field, and a footer with About, Business, How Search works, Privacy, Terms and Settings links. Everything is arranged on a single vertical axis with very large amounts of empty space; the brand identity is carried by the wordmark and by whichever doodle is running that day. In the capture the doodle is a photographic starfield with the Google wordmark set over it, with a small round share button at its lower right.

There is no headline and no marketing copy. The extractor's h1 measurement is a footer country label, so the `display` token (Arial 400 at 15px) is a measured but non-headline style; see the role override in SOURCES.json. The only saturated interface colour is the blue of the sign-in pill, `primary` #0b57d0 with white (#ffffff) text.

## Colors

- **Canvas (#ffffff):** the page background and the search field fill.
- **Ink (#1f1f1f):** the most-read text colour (links, footer, labels). `ink-2` (#474747) is the secondary grey.
- **Primary (#0b57d0):** the measured fill of the sign-in button; `on-primary` is #ffffff. The same hex appears among the page's own custom properties together with other palette entries, so it is the interface blue rather than an incidental image colour.
- **Surfaces:** `surface-2` (#f8f9fa) and `surface-3` (#f3f5f6) are pale grey background fills measured on the page; the capture shows such tints on the suggestion chips and footer band.
- **Link colour:** `ink-4` (#1a0dab) is the measured colour of a text link (the "English" language link in the capture). It comes from the page's own CSS custom properties, not from the browser default link colours, which were excluded.

The doodle's palette is artwork, not interface, so none of its colours are tokenised.

## Typography

Three type roles are measured. The sign-in **button** uses "Google Sans Text" with Roboto, Helvetica and Arial fallbacks at 14px, weight 500, line height 18px. **Navigation** links (Gmail, images, footer) use arial at 13px, weight 400, line height 24px. The **input** uses Arial at 16px, weight 400, line height 22px, in an input 50px tall. The measured `display` style is Arial at 15px, 400, which is the footer country label rather than a headline. The page declares no loaded web fonts (the extractor found none), which is why most text renders in Arial.

Google Sans is proprietary to Google; its Google Fonts specimen page was opened but returned no readable body, so no claim about its licensing is made. Substitutes already in the font stack are Roboto, Helvetica and Arial; for the button use Roboto at weight 500.

## Layout

The layout is a centered column. From top to bottom: a right-aligned utility row (links, an apps-grid icon, and the sign-in pill), the doodle, the search field centred in a narrow measure, suggestion chips under it, a language offer line, then a large vacant region, a country label at lower left, and a full-width footer split into left and right link groups divided by a thin hairline. The spacing ladder is small and even: 4px, 6px, 7px, 8px, 10px, 12px, 14px, 15px, 16px and 18px, all measured, which reflects tight gaps between footer links and small controls rather than large layout margins, since the large margins are simply empty canvas.

## Elevation & Depth

Elevation is almost absent. The search field is distinguished from the page by a soft outline and light shadow in the capture, but no shadow value was measured on any role, so none is declared. Suggestion chips are flat tinted fills (#f3f5f6 range), and the footer is separated by a thin line. The single image, the doodle, sits flat on white without a frame.

## Shapes

The measured radius ladder is 8px, 24px, 26px, 100px and 9999px. The sign-in button uses `rounded.lg` (100px), producing a full pill at its 40px height. The search field and chips are visibly pill-shaped in the capture; the exact radius role of each was not measured individually, so only the ladder values are listed. Square corners are not used anywhere on interactive controls.

## Components

- **button-primary:** #0b57d0 fill, #ffffff label, Google Sans Text 14px weight 500, padding 10px 12px, 40px high, 100px radius.
- **nav / nav-link:** #1f1f1f text, arial 13px, no underline in the capture.
- **text-input:** Arial 16px in #1f1f1f, 50px high, with leading icons (plus, keyboard, voice, lens) and an AI-mode pill inside the field.
- **Suggestion chips:** pale grey pills below the field; flat fill, centered label.
- **Footer:** two link groups on a hairline-topped band.

## Design System Architecture

Google's brand guidance is not public in readable form: the [Partner Marketing Hub overview page](https://partnermarketinghub.withgoogle.com/brands/google/overview/) (opened) says brand use guidance is available through the Hub for signed-in partners and via brand.google, and the latter redirected to a sign-in wall. No design-system documentation could be read, so this file does not claim that google.com is built on Material or any other named system, and takes no values from one. The de-facto system is visible in the shipped CSS: short obfuscated custom property names (such as `--TMYS9` holding #0b57d0, `--JKqx2` holding #1a0dab, `--XKMDxc` holding #f3f5f6, `--ZXiaGf` holding #fff) that supply colour, font size and weight values to components, with Arial as the base family (`--qBwyqb`).

## Do's and Don'ts

- Do keep the canvas white and the page nearly empty; space is the brand.
- Do use #0b57d0 only for the single primary action.
- Do use full pill radii (100px) on buttons.
- Do let the doodle be the one image.
- Don't add headlines, gradients or banners to the page.
- Don't use #1a0dab as a general brand colour; it is a text link colour.
- Don't copy popup or consent controls into brand UI.
- Don't assume Google Sans is available; fall back to Roboto, Helvetica, Arial.

## Responsive Behavior

Only the desktop layout and a mobile measurement were captured for the extraction; the mobile pass is used for type and role checks, and no breakpoint values are claimed. The structure is inherently fluid: a centered column that narrows with the viewport and a footer that wraps.

## Iteration Guide

1. Start from #ffffff with #1f1f1f text.
2. Place one blue pill (#0b57d0, #ffffff, 40px high, 100px radius) at the top right.
3. Centre a 50px-high search input with Arial 16px and icon affordances.
4. Add chips in #f3f5f6 and a footer in 13px arial.
5. Keep spacing to the measured 4px to 18px ladder and leave the rest empty.

## Voice and Imagery Notes

The microcopy in the measured session is brief and friendly: the suggestion chips read as a short invitation to search with Google and a playful "I'm feeling lucky"-style phrase in Thai, the language line offers the page in English, and the sign-in button is a single verb phrase. Labels are never longer than a few words. Iconography inside the search field is monochrome line art in the ink colour, and the apps-grid icon at top right is a nine-dot square. The only full-colour imagery is the doodle, which changes with the day, so any reproduction of this system should treat the hero as a swappable slot of roughly the width of the search field rather than a fixed asset. Keep the slot's surroundings empty: the doodle's presence depends on the whitespace around it.

The footer's two groups follow a convention worth keeping: company and policy links at the left and right, never centred, in the same 13px arial as the top utility links, which keeps the page free of competing typographic levels. Hover and focus states were not measured for this page, so none are described.
