---
version: alpha
name: "World Bank Group"
category: "Government & Nonprofit"
description: "World Bank Group: international development portal with navy #012740 feature bands, pale #e7edf3 sections, blue #0071bc and #004370 pill buttons at 32px radius, Open Sans 700 at 48px, 8px bordered stat cards and no shadows."
colors:
  canvas: "#ffffff"
  ink: "#000d1ab2"
  primary: "#0071bc"
  on-primary: "#ffffffbf"
  surface: "#012740"
  surface-3: "#e7edf3"
  ink-3: "#004370"
  ink-4: "#ffffffe5"
  nav-text: "#000000"
  text-input-border: "#00396b3d"
  card-text: "#181f25"
  card-border: "#d9d9d9"
typography:
  display:
    fontFamily: "\"Open Sans\", roboto, roboto-fallback, opensans-fallback"
    fontSize: 48px
    fontWeight: 700
    lineHeight: 58px
  display-mobile:
    fontFamily: "\"Open Sans\", roboto, roboto-fallback, opensans-fallback"
    fontSize: 28px
    fontWeight: 700
    lineHeight: 29px
  heading:
    fontFamily: "\"Open Sans\", roboto, roboto-fallback, opensans-fallback"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44.8px
  subheading:
    fontFamily: "\"Open Sans\", roboto, roboto-fallback, opensans-fallback"
    fontSize: 40px
    fontWeight: 700
    lineHeight: 46px
    letterSpacing: "-0.6px"
  body:
    fontFamily: "\"Open Sans\", roboto, roboto-fallback, opensans-fallback"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: "-0.084px"
  button:
    fontFamily: "\"Open Sans\", roboto, roboto-fallback, opensans-fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"open sans\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25px
  button-secondary:
    fontFamily: "\"Open Sans\", roboto, roboto-fallback, opensans-fallback"
    fontSize: 14px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.4992px"
  input:
    fontFamily: Arial
    fontSize: 14px
    fontWeight: 400
rounded:
  xs: 4px
  sm: 5px
  md: 8px
  lg: 10px
  xl: 16px
  2xl: 32px
  3xl: 100px
  4xl: 125px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 20px
  s9: 22px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 4px 12px
    height: 32px
  button-secondary:
    backgroundColor: "{colors.ink-3}"
    textColor: "{colors.ink-4}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.2xl}"
    padding: 15px 32px
    height: 58px
  link:
    textColor: "{colors.ink-4}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.nav-text}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.3xl}"
    padding: 22px 10px 10px 29px
    height: 56px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.card-text}"
    rounded: "{rounded.md}"
    padding: 40px
    borderColor: "{colors.card-border}"
  footer:
    textColor: "{colors.canvas}"
---

# World Bank Group

## Overview

The World Bank Group site (https://www.worldbank.org/ext/en/home, title "World Bank Group - International Development, Poverty and Sustainability") is a large editorial and data portal for an international development institution. The measured home page opens with a deep navy feature card (#012740) holding the lead story, the first measured h1 being "How AI Is Reshaping Regional Economies" with a white "Read the Reports" pill button, followed by "MORE TOP STORIES" teasers labelled "IMMERSIVE STORY" and "NEWS". Below that, an "OUR PRIORITIES" accordion of tall photographic panels (Jobs, Mission 300, Health Works, AgriConnect, Gender, Water Forward), a "DATA FOR DEVELOPMENT" block with statistic cards ("3.4 additional jobs...", "10 percent of global gross domestic product...", "9 in 10 people without electricity live in Sub-Saharan Africa"), a newsletter band "STAY CURRENT WITH OUR LATEST DATA & INSIGHTS", "RESEARCH & PUBLICATIONS", "THE POWER OF PURPOSE" with statistics (26%, 10x, $1.2 T), "TRANSFORMING KNOWLEDGE TRANSFORMING LIVES", regional pills, and "PARTNER WITH THE WORLD BANK GROUP". The footer lists the group institutions IBRD, IDA, IFC, MIGA and ICSID. Scroll height at 1280px is 7522px.

The capture was re-measured with consent overlays hidden (the extraction records consentOverlaysHidden: onetrust-banner-sdk); a promotional modal and cookie bar are not part of the brand system and nothing below is taken from them.

## Colors

The brand is blue on white. `canvas` is #ffffff. `surface` #012740 is the largest background area (weight 1326) and the dark navy of feature cards and the footer region; `surface-3` #e7edf3 is the pale blue-grey section ground (weight 354). `primary` #0071bc fills the small "Work With Us" button, with `on-primary` #ffffffbf (white at 75 percent alpha) as its label. `ink-3` #004370 is the deep blue used for secondary buttons, outlines (14 border occurrences) and headings (596 text characters). `ink` is #000d1ab2, near-black navy at 70 percent alpha, the most-read text colour (976 characters). `ink-4` #ffffffe5 is white at 90 percent alpha for text on navy. Other measured values: `nav-text` #000000, `card-text` #181f25, `card-border` #d9d9d9 and `text-input-border` #00396b3d.

The stylesheet publishes a large scale of root variables, for example `--teal-40` #02aac0, `--teal-90` #01505b, `--green-900` #0e4348, `--green-60`, `--red-60` #c91c25, `--pale-green-70` #296b4d, `--text-on-state-info-emphasis` #004370, `--text-on-state-warning-default` #896001 and `--domain-interactive-on-light-pressed` #012740. A yellow #ffb90b was measured in the capture area ranking (weight 19) as an accent on the story modal; it is not promoted to a token. No box shadows were measured after the overlays were hidden.

## Typography

Open Sans is the single family (4327 characters; "open sans" 33 and Arial 1 for the input), loaded as regular and 700 with roboto and roboto-fallback/opensans-fallback metric stacks. Icons come from a font named loopicon. Weights: 400 (2660 characters), 700 (1555), 500 (89), 600 (57). Tokens: `display` 48px weight 700 line-height 58px; `heading` 40px weight 400 line-height 44.8px; `subheading` 40px weight 700 line-height 46px with -0.6px tracking (the section titles "OUR PRIORITIES" pair a light word with a bold word); `body` 24px weight 400 line-height 36px, -0.084px; `button` 16px 400 with 24px line-height; `button-secondary` 14px 700, -0.4992px; `nav` 16px 400 line-height 25px; `input` Arial 14px. The most common sizes by characters are 20px (1132), 16px (978), 13.008px (565), 24px (441), 14px (386), 40px (237) and 28px (234). Mobile h1 measures 28px weight 700 line-height 29px (`display-mobile`).

## Layout

The page uses a contained column with generous vertical bands. Measured paddings: 32px (21 occurrences), 24px (19), 40px (14), 72px (13), 8px (12), 16px (10), 64px, 96px; card padding is 40px. Landing-page root variables name the banner top padding (`--spacing---landing-page-our-priorities-banner-top-padding` 12.5rem) and a "loop" component family (`--loop-card-image-radius-2` 2.5rem, `--loop-button-label-font-size` 1rem, `--loop-tag-label-font-size` 1.125rem, `--loop-text-area-line-height` 1.5rem). Spacing tokens: 2px, 4px, 8px, 10px, 12px, 15px, 16px, 20px, 22px and 24px. Sections alternate full-width image panels, two-column text and image blocks, and three-up card rows (the mobile pass records up to 3 card columns).

## Elevation & Depth

Surfaces are flat. Cards rely on a 1px light border (#d9d9d9) and a white fill against a pale blue-grey band; feature cards are solid navy. Hairline alpha borders #00396b14, #00396b29 and #00396b3d appear on inputs and dividers. No box shadow was measured in the clean extraction.

## Shapes

Radii are the signature: buttons and tags are pills, with 32px on 22 elements (`rounded.2xl`, the button radius), 50% on 19 and 100% on 7 (circular icon buttons), 8px on 14 (cards, `rounded.md`), 5px, 16px, 4px, 125px and compound radii such as 10px 10px 0px 0px and 100px 0px 0px 100px for segmented controls. The search input uses `rounded.3xl` 100px with 22px 10px 10px 29px padding and a height of 56px.

## Components

- Primary button (`button-primary`): fill #0071bc, label #ffffffbf, 16px weight 400, 4px 12px padding, 32px radius, height 32px ("Work With Us" in the utility bar).
- Secondary button (`button-secondary`): fill #004370, label #ffffffe5, 14px weight 700, 15px 32px padding, 32px radius, height 58px ("More Research & Publications").
- Outlined/white button: white fill, #004370 text, 16px weight 700, 16px 32px padding, 32px radius, height 60px ("Watch Here", "Read the Reports").
- Text input: white, 56px high, 100px radius, 1px #00396b3d border, Arial 14px.
- Statistic card: white, 8px radius, 40px padding, #d9d9d9 border, a thin coloured top rule per category (People, Prosperity), a large figure, supporting copy and a "Source" link with a circular share icon.
- Navigation: black text on white, 16px; the mobile pass shows one header link and a menu toggle.

## Design System Architecture

No public brand-guidelines page was opened for this report; the measured stylesheet itself exposes a design-token layer. Root variables follow a hue-scale naming (`--teal-40`, `--green-60`, `--red-60`), semantic text/background names (`--text-on-state-info-emphasis`, `--background-container-on-dark-state-success-low`, `--background-container-on-light-link-tertiary-pressed`, `--domain-interactive-on-light-pressed`, `--domain-elevations-dark-low`, `--neutral-alpha-16-a`) and a "loop" component prefix for components. Source: https://www.worldbank.org/ext/en/home and web/data/extracted/world-bank.json. No official public design-system link was found on the measured page.

## Do's and Don'ts

- Do use navy #012740 for hero and feature bands with white (90 percent alpha) text.
- Do use pill buttons at 32px radius, blue #0071bc or deep blue #004370.
- Do pair a light-weight and a bold word in uppercase section titles.
- Do show data as large figures in white cards with a source link.
- Don't add drop shadows; none were measured.
- Don't use the promotional yellow or modal styling as UI tokens.
- Don't set body copy lighter than the 70 percent alpha navy ink.

## Responsive Behavior

The 390px mobile pass recorded: h1 28px weight 700 line-height 29px; body paragraph 18px with 27px line-height; sizes 16px (2266 characters), 13.008px, 18px, 14px and 28px; one header link visible, a menu toggle visible (label "news and events") and up to 3 card columns. Other mobile behaviour was not measured.

## Iteration Guide

1. Set the ground as `canvas` #ffffff with `surface-3` #e7edf3 bands and `surface` #012740 feature cards.
2. Use Open Sans for everything: 48px bold display, 40px titles, 24px body.
3. Build buttons as 32px-radius pills in #0071bc or #004370.
4. Cards: white, 8px radius, 40px padding, #d9d9d9 border.
5. Run `node web/scripts/verify-designs.mjs --slug=world-bank` after edits.
6. Page rhythm to follow, as measured top to bottom: utility bar with the small blue "Work With Us" button, English language selector and search; navigation with the logo and "Where We Work"; the navy lead story; "OUR PRIORITIES" panels; "DATA FOR DEVELOPMENT" cards; newsletter band with an email and first-name input and a "Sign Up" button; "RESEARCH & PUBLICATIONS" with a "More Research & Publications" button; impact figures; knowledge band; regional pills; partner tiles; footer with institution links, social icons and legal links (Careers, Newsletters, Contacts, Access to Information, Legal, File a Complaint, Scam Alert).
7. Copy voice is institutional and statistic-led: short uppercase section titles, a headline figure followed by one plain sentence, and a "Learn More" or "Read the Report" link under each block.
8. Category tags above cards ("IMMERSIVE STORY", "NEWS", "People", "Prosperity") are small bold uppercase labels at 12px or 13px with positive tracking (12px/0.25px and 13px/0.78px were measured).
