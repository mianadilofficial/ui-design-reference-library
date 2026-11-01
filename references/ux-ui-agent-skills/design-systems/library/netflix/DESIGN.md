---
version: alpha
name: Netflix
category: "Music & Audio"
description: "Netflix Thailand sign-up page netflix.com/th-en: black #000000 canvas, Netflix red #e50914 Get Started button with white 24px Netflix Sans label, 56px bold display, #2d2d2d FAQ bars, radii 2px to 16px, no shadows."
colors:
  canvas: "#000000"
  page-largest: "#232323"
  ink: "#ffffff"
  primary: "#e50914"
  on-primary: "#ffffff"
  surface-card: "#2d2d2d"
  ink-muted: "#ffffffb3"
  ink-subtle: "#ffffff80"
  ink-dim: "#414141"
  hairline: "#808080b3"
  primary-hover: "#c11119"
typography:
  display:
    fontFamily: "\"Netflix Sans\", \"Helvetica Neue\", \"Segoe UI\", Roboto, Ubuntu, sans-serif"
    fontSize: 56px
    fontWeight: 700
    lineHeight: 70px
  display-mobile:
    fontFamily: "\"Netflix Sans\", \"Helvetica Neue\", \"Segoe UI\", Roboto, Ubuntu, sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 40px
  heading:
    fontFamily: "\"Netflix Sans\", \"Helvetica Neue\", \"Segoe UI\", Roboto, Ubuntu, sans-serif"
    fontSize: 24px
    fontWeight: 500
  subheading:
    fontFamily: "\"Netflix Sans\", \"Helvetica Neue\", \"Segoe UI\", Roboto, Ubuntu, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: "\"Netflix Sans\", \"Helvetica Neue\", \"Segoe UI\", Roboto, Ubuntu, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 4px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 22px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.heading}"
    rounded: "{rounded.sm}"
    padding: 12px 24px
    height: 56px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.sm}"
    padding: 4px 16px
    height: 32px
  nav:
    textColor: "{colors.ink}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.subheading}"
    padding: 6px 36px 6px 34px
    height: 32px
  footer:
    textColor: "{colors.ink-muted}"
---

## Overview

The measured page is netflix.com redirected to https://www.netflix.com/th-en/, the Thailand English sign-up landing page, titled "Netflix Thailand - Watch TV Shows Online, Watch Movies Online". It is 1280px wide, 2,951px tall, with 373 visible elements and `lang="en"`.

The capture is a dark, cinematic landing page. A header carries the red NETFLIX wordmark at the left, an "English" language selector and a red "Sign In" button at the right. The hero is a tilted wall of title posters dimmed by a vignette, with the centred white headline "More watching. Less scrolling.", the line "Starts at THB 99. Cancel anytime." and the prompt "Ready to watch? Enter your email to create or restart your membership.", followed by an email field and a large red "Get Started" button with a chevron. A glowing red-to-blue curved edge separates the hero from the content.

Below, "Trending Now" is a horizontal row of vertical posters with huge outlined rank numerals (7, 8, 9, 10) overlapping each poster's lower-left, and a left arrow control. "More Reasons to Join" is four rounded dark-purple gradient cards (Enjoy on your TV, Download your shows to watch offline, Watch everywhere, Create profiles for kids), each with a headline, a short description and a small icon at the lower right. "Frequently Asked Questions" is six full-width grey bars with a plus icon at the right. The page closes with a repeated email form and the footer "Questions? Call 1-800-012-674" followed by link columns (FAQ, Help Center, Account, Media and others).

Imagery is poster art and key art from the catalogue rather than product UI; the page's only non-poster graphics are small glossy icons on the reason cards. Voice is short, second-person and promotional: "Cancel anytime", "Ready to watch?". A language-selector control and the chevron on the button are page controls.

## Colors

Measured background areas: `#232323` (1,361), `#2d2d2d` (496), `#000000` (138), `#161616b3` (60), `#e50914` (26), `#ffffff1a` (3). Text colors by characters: `#ffffff` (2,307), `#ffffffb3` (627), `#ffffff80` (70), `#414141` (11). The only border color is `#808080b3` (4 elements).

- **Canvas `#000000`** is the page ground, with `#232323` (`page-largest`) the biggest measured area (the dark panels and cards) and `#2d2d2d` the FAQ bar fill.
- **Netflix red `#e50914`** fills the Get Started and Sign In buttons. On hover Sign In goes to `rgb(193, 17, 25)`, which is **`#c11119`**, the `primary-hover` token, and its border turns black.
- **White `#ffffff`** is headline and primary text; **`#ffffffb3`** (70% white) is body copy and footer text; **`#ffffff80`** (50% white) is tertiary text.
- **`#414141`** is a dim text color measured on 11 characters.
- **`#161616b3`** is the translucent dark overlay and **`#808080b3`** the 70% grey border (for the email field).

The page publishes no CSS custom properties in the extraction (`rootVars` is empty), so every value comes from computed styles.

## Typography

Netflix Sans is the single family, loaded at 400, 500 and 700, with the stack "Netflix Sans", "Helvetica Neue", "Segoe UI", Roboto, Ubuntu, sans-serif. By characters it sets all 3,015 measured characters. Weights: 400 (2,762), 500 (212), 700 (41).

| Role | Size / line | Weight |
| --- | --- | --- |
| display (h1) | 56px / 70px | 700 |
| display-mobile | 32px / 40px | 700 |
| heading (h2, primary button) | 24px | 500 |
| subheading (body) | 16px / 24px | 400 |
| nav (Sign In) | 14px / 14px | 500 |

Sizes by characters: 24px (1,940, the FAQ question and card titles), 16px (692), 14px (228), 13px (70), 20px (33), 56px (30), 100px (22, the rank numerals). Letter spacing is normal everywhere. Hierarchy comes from a steep jump from 56px to 24px and then 16px, in bold at the top and regular below.

## Layout

The content column in the capture is a single centred block with headline and form centred over the hero; section titles sit left-aligned above full-width rows and card grids. Measured paddings: 24px (20 elements), 8px (10), 22px (10), 16px (9), 3px (6), 4px, 12px, 148px, 6px, 34px, 2px, 100px, 32px. The only measured gap is 2px (8 elements). The primary button is 56px high with `12px 24px` padding; the small Sign In button is 32px high with `4px 16px`; the email field is 32px high with `6px 36px 6px 34px` padding in the measurement. The "Trending Now" row, four reason cards and six FAQ bars sit in the same left and right margins.

## Elevation & Depth

No box shadows were measured. Depth is made with tone: black ground, `#232323` and `#2d2d2d` panels, gradient cards, dimmed posters under a `#161616b3` overlay and the glowing curved hero edge. The reason cards are purple-to-dark gradients in the capture; the gradient stops were not measured.

## Shapes

Radii: 8px (44 elements), 2px (18), 4px (7), 16px (4), and one `50% 50% 0 0 / 100% 100% 0 0` curve (the hero's elliptical edge). Posters and cards use 8px, the 16px radius belongs to the large reason cards, buttons and fields use 4px, and 2px is the link radius. The measured token set also includes a 9999px pill value from the generator for round icon controls.

## Components

- **Primary button (Get Started).** `#e50914` fill, white 24px weight 500 text, 4px radius, 56px high, `12px 24px` padding; hover `#c11119`.
- **Sign In.** `#e50914` fill, white 14px weight 500, 4px radius, 32px high, `4px 16px` padding.
- **Email field.** Transparent dark field with 70% grey border and a floating "Email address" label, 32px high in the measurement.
- **Rank poster.** 8px radius poster with an oversized outlined numeral (100px) overlapping the bottom left.
- **Reason card.** Rounded gradient card with a 24px bold headline and a 16px description in 70% white.
- **FAQ bar.** `#2d2d2d` full-width bar, 24px white question and a plus icon.
- **Footer.** 16px text at 70% white.

## Design System Architecture

No public Netflix design-system or brand-guideline page was opened or searched for (the homepage data showed no link to one); the source here is the shipped page at https://www.netflix.com/th-en/. The page exposes no CSS custom properties, so the de-facto system is a handful of computed values: one family, one red, a black-and-grey ladder, white at three opacities (100%, 70%, 50%) and an 8px radius. Fonts and sizes were measured from rendered text.

## Do's and Don'ts

Do:
- Keep the ground black and let poster art carry colour; use red only for the primary action and the wordmark.
- Use white at 100%, 70% and 50% for text hierarchy.
- Set the hero headline at 56px bold and card or FAQ titles at 24px.
- Use 8px for posters and 4px for buttons.

Don't:
- Don't add shadows; none were measured.
- Don't introduce a second typeface.
- Don't use red for body text or large surfaces; red covers only 26 area units.

## Responsive Behavior

On the mobile pass the h1 drops to 32px bold with a 40px line height (326px wide, 80px high) and the h2 "Trending Now" drops from 24px to 18px at weight 500. Other mobile measurements, breakpoints and the carousel behavior were not measured.

## Iteration Guide

1. Start with `#000000`, white text and `#e50914` for the one primary action.
2. Use `#232323` and `#2d2d2d` for panels and FAQ bars.
3. Type in Netflix Sans: 56px bold, 24px medium, 16px regular, 14px medium for small buttons.
4. Round posters at 8px and buttons at 4px.
5. Measure any new page before adding tokens: `node web/scripts/extract-tokens.mjs --slug=netflix--<page> --url=<url> --force --no-motion`.
