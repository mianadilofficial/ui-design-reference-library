---
version: alpha
name: Fauna Robotics
category: "Tech & AI"
description: "Fauna Robotics (faunarobotics.com), a New York humanoid robot company: warm cream #f8f0e3 canvas, near-black plum #180102 ink, orange #f16b46 buttons with a 32px and 8px mixed radius, Matter at weight 500 with 64px/-2px headlines, rounded 100px logo tiles."
colors:
  canvas: "#f8f0e3"
  page-largest: "#ece4d7"
  ink: "#180102"
  primary: "#f16b46"
  on-primary: "#f8f0e3"
  brand-gold: "#dbb154"
  brand-blue: "#63a4bc"
  ink-muted: "#18010266"
  ink-faint: "#aca396"
  brand-green: "#3dac91"
  brand-brown-bright: "#a7625a"
  brand-pink: "#e0a5cf"
  brand-khaki: "#8d8465"
typography:
  display:
    fontFamily: Matter, Arial, sans-serif
    fontSize: 64px
    fontWeight: 500
    lineHeight: 65.92px
    letterSpacing: "-2px"
  display-mobile:
    fontFamily: Matter, Arial, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 33.92px
    letterSpacing: "-1px"
  subheading:
    fontFamily: Matter, Arial, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 30px
    letterSpacing: "-0.5px"
  body:
    fontFamily: Matter, Arial, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 16px
  md: 32px
  lg: 40px
  xl: 64px
  2xl: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 4.32px
  s3: 8px
  s4: 16px
  s5: 19px
  s6: 20px
  s7: 24px
  s8: 27.04px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 0px 24px 0px 28px
    height: 60px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.brand-blue}"
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
    rounded: "{rounded.md}"
    padding: 19px 24px 19px 28px
    height: 60px
    borderColor: "{colors.brand-blue}"
  card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    padding: 0px 16px
  footer:
    textColor: "{colors.ink}"
    padding: 16px 0px
---

## Overview

The measured page is the home page of Fauna Robotics (https://faunarobotics.com/, title "Fauna Robotics | Capable, Safe, Fun Robots for Everyone"). The company builds a humanoid robot called Sprout, and the page sells it to developers, enterprises and researchers. The capture opens on a cream page with the Fauna Robotics logo (a small robot glyph and the lowercase words "fauna robotics" in a heavy rounded face) at the top left and a pill-shaped nav at the right: Home (in orange, active), Product, Company, Careers, News, followed by a separate orange button "Request Robot". The centred headline reads "Capable, safe, fun. Robots for everyone." and under it is a large rounded video frame showing two people next to the robot. A "Trusted by" row shows scrolling logo tiles (Boston Dynamics, UC San Diego, New York University and others). The next headline is "Create new experiences. Shipping today." above a dark rounded video frame of the robot's face with a blue "Play video" button.

Further copy in the page markup is organised by audience: "For developers", "For enterprises", "For researchers", with feature titles "A modern platform", "Modular autonomy", "Compliant, capable locomotion", "Ready for developers", "Socially engaging" and "Safety-first design" ("Designed for safer human interaction with lightweight materials, a soft exterior, minimized pinch points…"). The closing statement is "Fauna Robotics, building a world where robots operate everywhere people do." and the footer notes "Designed in New York City." The tone is friendly and non-technical for robotics: short three-word rhythms ("Capable, safe, fun.") and a playful, toy-like colour palette.

## Colors

The brand colours are published as named tokens in the stylesheet (201 root custom properties).

- Canvas `#f8f0e3` is a warm cream; it is the page background and the text colour on coloured buttons (on-primary). Page-largest `#ece4d7` (declared `--brown--50`) is the largest measured area (2637), used for tiles and cards.
- Ink `#180102` (declared `--black--900`) is a near-black with a plum cast; it is the text colour (634 characters). Ink muted `#18010266` (`--black--300`, 40% ink, 561 characters) is the colour of secondary labels such as "Trusted by"; ink faint `#aca396` (`--brown--200`) is a warm grey.
- Primary `#f16b46` (declared `--brand--orange`) is the brand orange: the fill and border of the "Request Robot" button, the active nav label and the hover colour of links. On hover the button fill turns `#180102`.
- Brand blue `#63a4bc` (`--brand--blue`) is the fill of the secondary button "More about us" and the "Play video" button.
- Brand gold `#dbb154` (`--brand--yellow`) is a measured area colour (275). Brand green `#3dac91` (`--brand--green`) and brand brown bright `#a7625a` (`--brand--brown-bright`) are measured area colours (227 each).
- Declared but not measured as areas: pink `#e0a5cf`, khaki `#8d8465`, browns `#60574a`, `#938a7d`, `#7a7164`, `#473e31`, `#ded2c0`, and a grey `#b3b3b3`.
- Translucent steps are declared (`--black--100: #1801021a`, `--white--100: #f8f0e31a`), and a measured area `#18010233` (20% ink) is a scrim colour.

The robot's own colours (pale sage body with lime-yellow accents) come from photography and are not interface tokens.

## Typography

One family: Matter, weight 500 only (the CSS loads a single "Matter 500 normal" face), with Arial and sans-serif as fallbacks. All 1425 measured characters are Matter.

Measured scale (desktop):

- Display: 64px, weight 500, line height 65.92px, letter spacing -2px.
- Subheading: 24px on 30px, letter spacing -0.5px.
- Body: 16px on 24px.
- Footer statement: 32px, weight 500.
- Also frequent: 99.2px and 42px sizes.

Large type is tightened (-2px at 64px, -1px at 32px on mobile, -0.5px at 24px); small type is untracked. A single weight is used for everything, with hierarchy made only by size and colour. Matter is a commercial typeface and Arial is the only declared fallback.

## Layout

A centred, single-column marketing page. The header holds the logo at left, a pill nav and the CTA at the right. Headlines are centred with generous space above and below; media frames run almost the full width with large outer margins; the logo strip scrolls horizontally. Cards for audiences and features follow below (the page has 356 visible elements and a scroll height of 9785px at 1280px). Spacing values measured: 4, 4.32, 8, 16, 19, 20, 24, 27.04, 28 and 32px. The footer is 656px high with a 32px statement.

## Elevation & Depth

No box shadows are measured. Depth comes from rounded colour blocks: the nav sits in a beige pill, tiles are beige on cream, and the dark robot video frame is a heavy black block against the cream page. A soft fade at the left and right edges of the logo strip is visible in the capture.

## Shapes

Shape is the signature of the system, with a deliberately large radius scale: 8px, 16px, 32px, 40px, 64px, 100px and full pill. The primary button has a distinctive mixed radius `32px 8px 8px 32px` (round on the left, square-ish on the right), the secondary button is 32px, the logo-strip tiles are 100px (card radius) with 16px side padding; the 40px, 64px and 16px values are also in the measured set (their elements are not identified), and the capture shows strongly rounded corners on the large video frames. The nav is a full pill. This pairing of heavy rounding and one sharp-cornered side is the brand's visible shape habit.

## Components

- Primary button "Request Robot": fill and 1px border `#f16b46`, text `#f8f0e3`, Matter 16px weight 500, padding 0px 24px 0px 28px, height 60px, radius `32px 8px 8px 32px`; hover fill `#180102`.
- Secondary button "More about us": fill and border `#63a4bc`, cream text, padding 19px 24px 19px 28px, height 60px, radius 32px.
- Nav pill: beige background with Product, Company, Careers, News in `#180102`; links change to `#f16b46` on hover; the active item "Home" is orange.
- Logo tile: `#ece4d7` fill, 100px radius, 16px horizontal padding, 140px high by 308px wide as measured.
- Video frame: very large radius, dark content; centred blue "Play video" button with a play glyph.
- Footer: `#180102` text at 32px weight 500 on the cream page with 16px vertical padding.

## Design System Architecture

No public design system or brand guideline was found: the page https://faunarobotics.com/ was opened and has no link to a design system, brand guideline, press kit or GitHub organisation, so none is cited. The shipped CSS is a tokenised system: the root contains 201 custom properties including colour scales (`--black--100` to `--black--900`, `--white--50` to `--white--400`, `--brown--50` to `--brown--700`), brand colours (`--brand--orange`, `--brand--blue`, `--brand--yellow`, `--brand--green`, `--brand--pink`, `--brand--khaki`, `--brand--brown-bright`) and component tokens such as `--button-primary--buttonbackground: var(--brand--orange)`, `--button-secondary--buttonbackground: var(--brand--blue)` and `--links--text-color-hover: var(--brand--orange)`. Components therefore reference the brand palette through variables.

## Do's and Don'ts

Do:
- Use orange `#f16b46` for the single primary action and blue `#63a4bc` for the secondary.
- Round everything generously; give the primary button the `32px 8px 8px 32px` shape.
- Set all text in Matter 500, tighten tracking as size grows and keep headlines centred.
- Show real robots and people in large rounded frames.
- Turn buttons `#180102` on hover and links orange.

Don't:
- Use pure black or pure white; ink is `#180102` and canvas `#f8f0e3`.
- Add shadows; none are measured.
- Introduce other font weights; only 500 is loaded.
- Use the declared pink, khaki or browns as large areas on the home page; they are not measured as areas.

## Responsive Behavior

Measured with the 390px mobile pass: h1 "Capable, safe, fun. Robots for everyone." and h2 "Create new experiences. Shipping today." are Matter 32px weight 500 on 33.92px with -1px tracking in `#180102`; body copy is 16px in cream on a dark block; the "Request Robot" button keeps 16px type, 60px height, padding 0px 24px 0px 28px and the `32px 8px 8px 32px` radius. Frequent mobile font sizes by character count are 16px, 24px, 32px, 60px and 28px. Reflow of the nav, cards and video frames at mobile width is not measured.

## Iteration Guide

1. Start with `#f8f0e3` canvas, `#ece4d7` tiles, `#180102` ink.
2. Set Matter 500 at 64px with -2px tracking for hero headlines, 24px for subheads, 16px for body.
3. Build the CTA as a 60px-high orange button with the `32px 8px 8px 32px` radius; secondary in blue with 32px.
4. Wrap media in strongly rounded frames and logos in 100px-radius beige tiles.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=fauna-robotics --url=https://faunarobotics.com --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=fauna-robotics`.
