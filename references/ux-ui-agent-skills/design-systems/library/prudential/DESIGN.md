---
version: alpha
name: Prudential Financial
category: "Banking & Insurance"
description: "Prudential Financial's US home page (prudential.com): a white canvas with #1a1d1e text, Prudential blue #0066cc for links and the primary pill, navy #091f3d and #001f45 bands, a #443bb2 indigo card band, #ffd200 yellow for Request a call and Log In, Pru-Modern condensed headlines and Open Sans body, radii from 3px to 44px."
colors:
  canvas: "#ffffff"
  ink: "#1a1d1e"
  primary: "#0066cc"
  on-primary: "#ffffff"
  surface-navy: "#091f3d"
  surface-tint: "#f0f9ff"
  ink-on-dark-muted: "#ffffff99"
  ink-black: "#000000"
  navy-deep: "#001f45"
  button-secondary-bg: "#ffd200"
  card-bg: "#443bb2"
  card-border: "#ffffff80"
  primary-xhigh: "#004d99"
  teal-alt: "#018484"
  primary-mid: "#0076d1"
  tertiary-dark: "#262d9e"
  neutral-low: "#ebebeb"
  neutral-mid: "#717171"
typography:
  display:
    fontFamily: Opensans-Regular, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 17px
    fontWeight: 400
    lineHeight: 25.5px
    letterSpacing: "-0.17px"
  display-hero:
    fontFamily: "Pru-Modern SemiCond"
    fontSize: 84px
    fontWeight: 700
  heading:
    fontFamily: Pru-Modern, sans-serif
    fontSize: 38px
    fontWeight: 700
    lineHeight: 42.75px
    letterSpacing: "-0.38px"
  subheading:
    fontFamily: Pru-Modern, sans-serif
    fontSize: 28px
    fontWeight: 600
    lineHeight: 31.5px
    letterSpacing: "-0.28px"
  body:
    fontFamily: Opensans-Regular, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 22.5px
    letterSpacing: "-0.15px"
  button-secondary:
    fontFamily: Opensans-Regular, -apple-system, "system-ui", "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 21px
    letterSpacing: "-0.14px"
rounded:
  xs: 3px
  sm: 12px
  md: 24px
  lg: 30px
  xl: 44px
  2xl: 90px
  pill: 9999px
spacing:
  s1: 8px
  s2: 10px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 32px
  s8: 40px
  s9: 52px
  s10: 72px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.xl}"
    height: 44px
    boxShadow: rgba(0, 0, 0, 0.2) 0px 2px 6px 0px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.lg}"
    height: 48px
  link:
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.md}"
    padding: 20px
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.surface-navy}"
    textColor: "{colors.canvas}"
    padding: 24px 0px 40px
---

## Overview

`https://www.prudential.com/` (title "Invest, Insure, Retire and Plan | Prudential Financial", lang en-US) is the US consumer home page of the financial-services group, measured at 1280px: 776 visible elements, 6,312px scroll height. It is a conversion-oriented insurance and retirement page: utility bar, main nav, a navy hero, a band of three indigo cards, a goal-picker, a "How we support your goals" list and a long navy footer.

Top to bottom in the capture: a thin navy utility bar with "About us" and "Our sites" dropdowns at left and "Make a payment", "Find a form", "File a claim", "Find an advisor", "Get a quote" at right; a white header with the blue Prudential wordmark and rock logo, the menu Insurance, Investments & retirement, Tools & resources, Help, a blue "Search" link, a blue-outlined "Register" button and a yellow "Log In" button; the navy hero "CONNECT WITH AN ADVISOR" in giant condensed white capitals with the paragraph "Work with an experienced advisor to understand your options, build a personalized plan, and move closer to your long-term financial goals." and a yellow pill "Request a call →", beside a large circular portrait of a mother and daughter with an orange plus badge; an indigo band with three outlined cards ("Need help with your account?", "Make the most of your employer benefits", "Skip the medical exam* and get covered today") each with a small round photo and an outlined pill link ("Get support →", "Explore now →", "Get a quote →"); the question "What's most important to you right now?" over four selectable cards on a pale-blue panel (Planning for retirement, Protecting my family, Growing my money, Managing my expenses) with flat illustrations; "How we support your goals" with six blue-titled links (Life insurance, Investments, Retirement, Financial advisors, Annuities, Tools & education); and a navy "Connect with a local …" section. A floating blue "Find an Advisor" pill sits at the right edge of the capture.

Voice: reassuring, plain-English and second-person ("your options", "right now"), with asterisked disclaimers.

## Colors

The stylesheet publishes a semantic token set in the root (108 variables), which the measured colours match.

- **canvas `#ffffff`** (`--bg-neutral-lowest`), **ink `#1a1d1e`** (`--text-neutral-high`, 3,100 characters), **primary `#0066cc`** (`--bg-primary-high`, `--text-primary-high`, `--border-primary-high`): links, section titles, the Register outline and the floating pill. **primary-xhigh `#004d99`** and **primary-mid `#0076d1`** are darker/lighter steps.
- **surface-navy `#091f3d`** (2,171 area) is the footer and utility-bar navy; **navy-deep `#001f45`** (`--bg-primary-alt-high`, 666 area; also measured as a text colour on 79 characters) is the hero band; `#001836` is a deeper navy (52 area).
- **card-bg `#443bb2`** (`--bg-tertiary-alt-md`, 587 area) is the indigo card band, with **card-border `#ffffff80`** outlines and white text; **tertiary-dark `#262d9e`** is the darker indigo token.
- **button-secondary-bg `#ffd200`** (`--bg-secondary-md`) is the yellow action colour with dark `#1a1d1e` text. **teal-alt `#018484`** (`--bg-secondary-alt-md`) is a published teal.
- **surface-tint `#f0f9ff`** (`--bg-primary-xlow`) is the pale-blue panel behind the goal cards (1,551 area).
- **ink-on-dark-muted `#ffffff99`** is white at 60%, the most common text colour by characters (5,835) on the navy footer.
- Neutrals: `#ebebeb` (`--bg-neutral-low`, `--border-neutral-xlow`), `#717171` (`--text-neutral-md`, `--border-neutral-md`), `#ccc`, `#f2f2f2`, `#000`.
- `#0000ee` (181 characters) is the browser default link colour and is excluded.

## Typography

Fonts: **Pru-Modern** (700, and a SemiCond 700 cut) for headings and **Opensans-Regular** (400, 400 italic, 600, 700, family name as loaded) for text. Root variables: `--type-font-family-headings: "Pru-Modern",sans-serif`, `--type-font-weight-headings: 700`, `--type-font-size-root: 62.5%` (1rem = 10px), `--type-font-size-display-lg: 7.2rem`, `--type-font-size-h1-lg: 4.6rem`, `--type-font-size-d3: 4rem`, `--type-font-size-h2-sm: 2.8rem`, `--type-font-size-h6: 1.6rem`, `--type-font-size-sm: 1.4rem`, `--type-letter-spacing-link: .03em`.

- **display-hero**: Pru-Modern SemiCond 700, 84px (23 characters, which is the length of "CONNECT WITH AN ADVISOR"); line-height was not measured, and the capture shows capitals.
- **heading** (h2, "What's most important to you right now?"): Pru-Modern 700, 38px/42.75px, -0.38px tracking. **subheading** (h3 links): Pru-Modern 600, 28px/31.5px.
- **display** (the hero paragraph): Open Sans 400, 17px/25.5px; **body**: 15px/22.5px, -0.15px tracking. **button-secondary**: Open Sans 600, 14px/21px.

Sizes by characters: 12px (4,752), 15px (4,191), 17px (521), 22px (336), 18px (320), 38px, 14px, 28px, 46px (38). Weights: 400 (7,949), 700 (1,152), 200 (972), 600 (494). Tracking is slightly negative throughout (-0.01em).

## Layout

A centred container with generous side margins (content begins near the left at the same margin as the header logo). Bands: utility bar, header, navy hero (text left, circular image right), indigo three-card band, white goal-picker with a pale-blue rounded panel, a two-column links list beside a round photo, navy footer and pre-footer. Footer height 1,696px with `24px 0px 40px` padding and a 90px top-left corner. Spacing values: 8, 10, 12, 16, 20, 24, 32, 40, 52, 72px.

## Elevation & Depth

Shadows measured: `rgb(188, 228, 251) 0px 0px 0px 1px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px` (4 elements, the goal cards: a pale-blue ring plus soft drop), `rgba(0, 0, 0, 0.45) 0px 0px 0px 1px, rgba(0, 0, 0, 0.12) 0px 1px 3px 0px` (4), `rgba(0, 0, 0, 0.2) 0px 2px 6px 0px` (2, the floating pill) and an inset `rgba(0, 0, 0, 0.6) 0px 2px 2px -2px`. Colour blocking (navy, indigo, white, pale blue) does most of the separating.

## Shapes

Radii: 30px (20 elements), 12px (8), 50% (7), `0px 0px 24px` (6), 24px (3), 3px (2), 44px (1), and corner variants `0px 0px 24px 24px`, `0px 0px 0px 60px`, `90px 0px 0px`. Buttons are pills (30px on the yellow buttons, 44px on the floating blue pill), photos are circles, cards and panels have 12-24px corners, and the register button is nearly square at 3px.

## Components

- **button-primary** (floating "Find an Advisor" pill, which is the extractor's detected primary action): `#0066cc` fill, white 15px text, 44px radius, 44px high, soft `0 2px 6px` shadow.
- **button-secondary** ("Request a call", "Log In"): `#ffd200` fill, `#1a1d1e` Open Sans 600 14px text, 30px radius, 48px high.
- **Register (outlined)**: white fill, `1px solid #0066cc`, blue 600 15px text, 3px radius, `8px 12px` padding, 41px high.
- **Indigo card**: `#443bb2` fill, `#ffffff80` outline, 24px radius, 20px padding, white text, outlined pill link at its foot.
- **Goal card**: white, pale-blue ring shadow, round check marker, flat illustration and centred label, on a `#f0f9ff` rounded panel.
- **Link list item**: Pru-Modern 600 28px blue title with 15px text below.
- **Footer**: `#091f3d`, white and 60%-white text.

## Design System Architecture

No public design-system or brand-guideline page was opened, and none is cited. The shipped stylesheet nevertheless exposes a well-organised internal token system: semantic variables named by role and step, for example `--text-neutral-high`, `--text-primary-high`, `--bg-primary-xlow`, `--bg-primary-alt-high`, `--bg-secondary-md`, `--bg-tertiary-alt-md`, `--border-neutral-md` and alpha tokens such as `--bg-neutral-highest-alpha-20`, together with a type scale in rem on a 62.5% root (`--type-font-size-*`). Measured from `https://www.prudential.com/` (`web/data/extracted/prudential.json`).

## Do's and Don'ts

- Do use `#1a1d1e` for text on white and `#0066cc` for links and titles.
- Do use `#ffd200` with dark text for the highest-priority actions (Request a call, Log In).
- Do set headlines in Pru-Modern 700 and body in Open Sans with slight negative tracking.
- Do mask hero and card photography as circles.
- Don't set white text on `#ffd200` or dark text on navy.
- Don't use `#0000ee` (browser default) for links.
- Don't use hard drop shadows; use the pale-blue ring plus 12% soft shadow.
- Don't treat the floating "Find an Advisor" pill as part of the main layout grid.

## Responsive Behavior

The mobile pass recorded type only: sizes 12px (4,752 characters), 15px (4,083), 17px (461), 18px (320), 20px (225), 28px (162); the hero paragraph stayed 17px/25.5px, and a call-to-action measured "Find an Advisor" in white on `#0066cc`. Mobile column counts, nav form and breakpoints were not measured.

## Iteration Guide

1. Canvas `#ffffff`, text `#1a1d1e`, primary `#0066cc`, action yellow `#ffd200`.
2. Pru-Modern 700 for headings (38px h2, 28px h3), Open Sans 15px body with -0.15px tracking.
3. Use navy `#091f3d` / `#001f45` bands, an indigo `#443bb2` card band, and `#f0f9ff` for pale panels.
4. Pill buttons 30-44px, outlined pills on dark bands, circular photos.
5. Re-measure: `node web/scripts/extract-tokens.mjs --slug=prudential --url=https://www.prudential.com --force --no-motion`, then `node web/scripts/verify-designs.mjs --slug=prudential`.
