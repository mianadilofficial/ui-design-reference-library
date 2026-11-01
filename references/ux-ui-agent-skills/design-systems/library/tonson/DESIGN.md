---
version: alpha
name: "Tonson Group"
category: "Thai Brands"
description: "Monochrome Bangkok investment-company site in Nord and Questrial: black #000000 header, charcoal #111111 sections, white #ffffff content, #b3b3b3 grey accent, 93px uppercase headlines, 60px-radius pill buttons and photography-led color."
colors:
  canvas: "#ffffff"
  surface-charcoal: "#111111"
  ink: "#000000"
  primary: "#b3b3b3"
  on-primary: "#000000"
  ink-footer-grey: "#777777"
  ink-body-root: "#263508"
  hairline: "#69727d"
typography:
  display:
    fontFamily: "\"Nord Regular\", sans-serif"
    fontSize: 93px
    fontWeight: 400
    lineHeight: 120.9px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Nord Regular\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 41.6px
  body:
    fontFamily: Questrial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 36.3px
  button:
    fontFamily: "\"Nord Regular\", sans-serif"
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
  nav:
    fontFamily: Questrial, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: Questrial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  md: 60px
spacing:
  s1: 5px
  s2: 10px
  s3: 12px
  s4: 13px
  s5: 14px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 24px
    height: 40px
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 15px 45px
    height: 47px
    borderColor: "{colors.canvas}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    padding: 13px 0px
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 12px 16px
    height: 40px
    borderColor: "{colors.hairline}"
    boxShadow: rgba(0, 0, 0, 0.05) 0px 1px 2px 0px
  footer:
    textColor: "{colors.ink-footer-grey}"
---

# Tonson Group

## Overview

The measured site is tonsongroup.com, titled "TONSON GROUP – Privately Owned Investment Company" (language en-US). Tonson Group presents itself in the page copy as a privately owned, Bangkok-based investment company since 2006 that oversees "a portfolio of long-term holdings in assets and businesses in Thailand and around the world". The site is a short, image-led corporate page of 4350px at 1280px, in English.

The capture shows a black top bar with a text navigation (Home with an underline, About us, Sectors, Research and Analysis), a widely letter-spaced "TONSON" wordmark centered, and an outlined pill "Contact us" at the right; a full-bleed hero photograph looking up between blue-glass skyscrapers with the 93px white headline "TONSON GROUP", a two-line description and an outlined email pill ("enquiries@tonsongroup.com"); a white section "BASED IN BANGKOK / SINCE 2006" with a paragraph, an outlined "Read more" pill and a photograph of towers overlaid with chart lines; a near-black section "WHAT WE DO / OUR BUSINESS" with the line "We are a diversified investment company and consider investments based on their potential for long-term success", another "Read more" pill and a wide photograph of a world map over a city skyline; and, further down, a footer holding an enquiry form (Name, Email, Company, Message, Send) and an address line beginning "900 Tonson T". No popup, scrim or grayscale filter was detected.

## Colors

Measured background areas: charcoal `#111111` (2490, the dark content sections), white `#ffffff` (1359), black `#000000` (693, the top bar and footer-adjacent areas), light grey `#b3b3b3` (5, the Send button) and grey `#777777` (footer text color, 0 area). Text colors by characters: white (583), black (278), grey `#777777` (62), `#263508` (15, the root body color declared by the theme), and `#b3b3b3` (4, navigation text on the black bar). Borders: `#69727d` (4, form fields), white (3), black (2), `#6d6d6d` (1) and `#b3b3b352` (1).

The palette is deliberately monochrome: black and charcoal bands, white sections, white-on-black text, and grey `#b3b3b3` for navigation text and the form button. The grey is the extractor's primary color because the "Send" form button is the only filled button, so `primary` here is a neutral accent, not a hue. The photography supplies all chroma (saturated sky blue, glass and white clouds). The olive `#263508` is a theme default on a few characters and is not used on any visible brand surface.

## Typography

Three families are in use plus one root default. Nord Regular (63 characters, uppercase, wide tracking in the capture) sets display headings and the Send button; Nord Medium (62) sets the footer; Questrial (802 characters) is the body and navigation face; Inter at 400 is the root font-family of the body element (15 characters).

Measured roles: display "TONSON GROUP" 93px at 400 with a 120.9px line height, uppercase; body 22px in Questrial with a 36.3px line height; button label 15px in Nord Regular; navigation 15px with a 20px line height; form input 16px. The most frequent sizes are 15px (308 characters), 20px (258), 22px (127), 24px (112), 14px (63), 55px (37) and 18px (25). Small section labels ("BASED IN BANGKOK", "WHAT WE DO") are uppercase with a short rule to their left.

## Layout

A centered content column of generous width with a lot of vertical air. Sections alternate: full-bleed photo hero, a white two-column section (text left, image right), a charcoal section with a single full-width image, then the dark footer. The header is a three-part bar (links, centered wordmark, button). Spacing steps recorded: 5, 10, 12, 13, 14, 15, 16, 20, 24 and 30px; the theme's root variables set left block padding to 80px (`--wp--custom--ast-default-block-left-padding`).

## Elevation & Depth

Depth is flat. The only shadow measured is `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px` (5 uses, on the Send button and form fields). Visual depth comes from the photography and from alternating white and charcoal bands.

## Shapes

Pills dominate: 60px radius (6 uses) on "Contact us", "Read more", the email pill and the Send button. Form fields use 4px (3 uses) and one element uses 3px. Photographs and section blocks are square-cornered.

## Components

- Primary button ("Send"): fill `#b3b3b3`, black text, Nord Regular 15px, padding `0px 24px`, 40px tall, 60px radius, shadow `rgba(0, 0, 0, 0.05) 0px 1px 2px 0px`.
- Outlined pill ("Contact us"): transparent, `1px solid #ffffff`, white 15px Questrial text, padding `15px 45px`, 47px tall, 60px radius; on hover the fill becomes `rgba(179, 179, 179, 0.19)`.
- Navigation: black bar, `#b3b3b3` text 15px, link padding `13px 0px`, active link underlined in the capture.
- Text input: white text, 16px, 4px radius, padding `12px 16px`, 40px tall, `1px solid #69727d`.
- Footer: black with `#777777` text and the enquiry form.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and no such link is present. The de-facto system is a WordPress site: the root variables carry the `--ast-*` and `--e-global-color-astglobalcolor*` prefixes plus WordPress `--wp--preset--*` values (for example a preset outlined shadow `6px 6px 0px -3px rgb(255, 255, 255), 6px 6px rgb(0, 0, 0)` that was not observed on rendered elements). The brand overrides Astra with its own fonts (Nord, Questrial) and a monochrome palette applied in page-level styles.

## Do's and Don'ts

Do keep the palette black, charcoal `#111111`, white and grey `#b3b3b3`, and let photography carry color. Do set display headings in uppercase Nord at large size and body in Questrial. Do use 60px pill buttons with a thin outline on dark and photographic backgrounds. Do label sections with a small uppercase tag preceded by a short rule.
Don't add accent colors; none were measured. Don't use the `#263508` olive or WordPress preset colors such as the vivid purple. Don't add heavy shadows; only a 5-percent shadow exists.

## Responsive Behavior

The 390px mobile pass measured: the first heading is "Since 2006" at 32px in Nord Regular with a 41.6px line height and black text; the Send button is unchanged (15px, 40px tall, 60px radius); the navigation block is black, 80px tall with 11px white Questrial text. Mobile font sizes recorded: 17px, 16px, 12px, 10px, 32px and 14px. Whether the navigation collapses and how the hero headline scales were not measured.

## Iteration Guide

1. Alternate white `#ffffff` and charcoal `#111111` bands; black `#000000` header.
2. Nord uppercase at 93px for the hero, Questrial 22px for body.
3. Use 60px pill buttons, outlined white on dark.
4. Use photography with tall glass architecture and map-over-skyline imagery.
5. Re-measure before adding values.

### Imagery and voice

Imagery is corporate stock photography with a cool blue cast: a low-angle view through glass towers under a clouded sky in the hero, a tower cluster with glowing market-chart lines in the white section, and a pale world map with curved connection lines above a dense city skyline in the dark section. White headline type is set directly over the hero photograph with no scrim or panel, relying on the sky and glass for contrast. The voice is brief and declarative, written in short English sentences about holdings, long-term potential and a Bangkok base; calls to action are limited to "Read more", "Contact us" and a visible enquiry email. There are no testimonials, statistics or product screenshots on the measured home page.
