---
version: alpha
name: "More Nutrition"
category: "Food & Beverage"
description: "More Nutrition matcha-and-protein product site (more-nutrition.webflow.io) in sage green #b6cba5 and pale #e8efe4 with forest #335c30 type and light green #90b96d, set in Founders Grotesk Condensed 99.56px uppercase, with tilted white-framed video cards and pill buttons."
colors:
  canvas: "#b6cba5"
  page-body: "#e8efe4"
  ink: "#333333"
  primary: "#90b96d"
  surface-2: "#ffffff"
  ink-secondary: "#335c30"
typography:
  display:
    fontFamily: "\"Founders Grotesk Condensed\", Arial, sans-serif"
    fontSize: 99.5556px
    fontWeight: 600
    lineHeight: 69.6889px
    letterSpacing: "-2.98667px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Founders Grotesk Condensed\", Arial, sans-serif"
    fontSize: 100px
    fontWeight: 600
    lineHeight: 70px
    letterSpacing: "-3px"
    textTransform: uppercase
  heading:
    fontFamily: "\"Founders Grotesk Condensed\", Arial, sans-serif"
    fontSize: 88.8889px
    fontWeight: 500
    lineHeight: 71.1111px
    letterSpacing: "-2.66667px"
  subheading:
    fontFamily: "\"Founders Grotesk Condensed\", Arial, sans-serif"
    fontSize: 35.5556px
    fontWeight: 500
    lineHeight: 28.4444px
    letterSpacing: "-1.06667px"
  body:
    fontFamily: "\"Founders Grotesk Condensed\", Arial, sans-serif"
    fontSize: 26.6667px
    fontWeight: 400
    lineHeight: 24.5333px
    letterSpacing: "-0.8px"
  link:
    fontFamily: "\"Founders Grotesk Condensed\", Arial, sans-serif"
    fontSize: 28.4444px
    fontWeight: 500
    lineHeight: 22.7556px
    letterSpacing: "-0.568889px"
rounded:
  xs: 5.33px
  sm: 7.11px
  md: 10.67px
  lg: 44.44px
  xl: 177.78px
  pill: 9999px
spacing:
  s1: 0.89px
  s2: 1.78px
  s3: 2.83px
  s4: 3.56px
  s5: 4.44px
  s6: 7.11px
  s7: 8.89px
  s8: 9.94px
  s9: 12.44px
  s10: 13.33px
components:
  link:
    textColor: "{colors.surface-2}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.ink}"
    padding: 12.4444px
---

# More Nutrition

## Overview
The measured site is more-nutrition.webflow.io, a Webflow-hosted site titled "More Nutrition - Matcha meets Protein" (document language not declared). It is the product page for an iced matcha latte protein drink: the hero headline is "MATCHA MEETS PROTEIN", a later headline reads "You deserve the best. You deserve More: Iced Matcha Latte.", and the supporting copy says "We want to make healthy, science-backed nutrition simple and accessible - so you can feel better, perform better, and enjoy life every single day." and "Loved by thousands of community members, this creation contains real green tea powder, premium protein, and glucomannan. Irresistibly delicious. Heavenly creamy." A "Buy now" pill sits beside a five-star rating line ("3158 Reviews"). The measured URL is the project's webflow.io address, so this document describes that published page.

The capture shows a sage-green first screen (the hero media did not render in the screenshot), then a dark green curved band with a repeating slogan "(A) · IT'S A MATCH(A)" set in large uppercase type along an arc, then a pale section with a three-line centered statement (the last line in light green), a cluster of three tilted portrait video cards inside thick white frames with a small sound icon, a text column with the buy button, and a handwritten note ("Why people love it") with a hand-drawn arrow. The page is long (12705px) and playful: soft greens, heavy condensed type, and slightly rotated cards.

## Colors
The measured painted areas are `{colors.canvas}` sage (#b6cba5, 2900 weighted area, the hero and card placeholders), white `{colors.surface-2}` (#ffffff, 1903, card frames), and pale mint `{colors.page-body}` (#e8efe4, 1872, the main content ground). The root variables name them: `--bg-light` is #b6cba5, `--light-green` is #90b96d and `--bg-pale` is #e8efe4.

Text uses `{colors.ink-secondary}` forest green (#335c30, the most-read color at 1558 weighted characters, also a small solid fill), white (736, on green and dark areas), `{colors.primary}` light green (#90b96d, 122, the highlighted last line of the headline) and `{colors.ink}` (#333333, 51, inside the white cards). A translucent green (#95ff8c59) appears on five small elements and a faint forest overlay (#335c3033) on six. The "Buy now" pill and the arrow badge use the forest green fill with white text. Borders are white (frames) and #e8efe4.

## Typography
A single face carries the page: Founders Grotesk Condensed at weights 400 (1572 weighted characters), 500 (604), 600 (273) and 700 (18), with Arial as the fallback; the webflow-icons font supplies icons. No foundry source was opened for the face.

`{typography.display}`: 99.5556px, weight 600, line-height 69.6889px, letter-spacing -2.98667px, uppercase (the h1). `{typography.display-mobile}`: 100px, weight 600, 70px line-height, -3px tracking (the mobile pass measured the h1 at this size; it is not smaller than desktop in the data). `{typography.heading}`: 88.8889px weight 500, line-height 71.1111px, -2.66667px tracking, sentence case. `{typography.subheading}`: 35.5556px weight 500, 28.4444px line-height, -1.06667px. `{typography.body}`: 26.6667px weight 400, 24.5333px line-height, -0.8px (the most-read size, 1185 weighted characters). `{typography.link}`: 28.4444px weight 500, 22.7556px line-height, -0.568889px ("Buy now"). Other sizes: 22.2222px, 19.5556px, 16px, 42.6667px, 23.1111px and 17.7778px. Line-height is deliberately tighter than the font size at nearly every level (for example 69.69 for 99.56), and tracking is about -3% at every size. A handwritten script annotation is also present but its font was not identified in the data.

## Layout
The desktop page is 1280px wide, 12705px tall, with a container variable `--size-container` computed from a clamp between `--size-container-min` 992px and a maximum tied to `--size-container-ideal` 1440. Sections are centered statements, a diagonal cluster of cards on the left and a narrow text column (391px) on the right. Measured gaps: 17.7778px (37 uses), 3.55556px (26), 8.88889px (24), 14.2222px (18), 53.3333px and 26.6667px; paddings: 35.5556px (22), 13.3333px (17), 4.44444px, 8.88889px, 17.7778px and 12.4444px (card padding). The spacing tokens `{spacing.s1}` to `{spacing.s10}` list 0.89px to 13.33px steps; the fractional values are the computed pixel results of the site's own unit scaling.

## Elevation & Depth
No box-shadow was measured. Depth is built from overlapping frames (white borders around tilted cards), the curved dark band and flat color planes. Do not add blur shadows.

## Shapes
Radii measured: 50% on 36 elements (`{rounded.pill}`, circular badges and icons), 5.33333px on 21 (`{rounded.xs}`, cards), 177.778px on nine (`{rounded.xl}`, pill buttons), 7.11111px on nine (`{rounded.sm}`), 100% on six, 10.6667px on four (`{rounded.md}`) and 44.4444px on three (`{rounded.lg}`). Cards are softly squared, buttons and badges fully round.

## Components
**Card** (`{components.card}`): white (#ffffff) background, #333333 text, 5.33333px radius, 12.4444px padding, 445px by 630px in the first example; the other card variants use the sage fill (#b6cba5) as a video placeholder with a round mute icon. **Link / Buy now** (`{components.link}`): white 28.4444px weight 500 text on a forest-green pill with a circular arrow badge on its left. Rating row: five stars and the underlined "3158 Reviews" at small size. No standard navigation, form or footer was detected by the extractor on this page, so none is tokenized.

## Design System Architecture
No public design system or brand-guidelines page was opened. The Webflow CSS root exposes a small variable set: color variables (`--bg-light`, `--light-green`, `--bg-pale`), container size variables and three easing curves (`--default-ease` cubic-bezier(.72, .17, .17, 1), `--smooth-ease` cubic-bezier(.32, .72, 0, 1) and `--bouncy-ease` cubic-bezier(.34, 1.42, .64, 1)). Fonts and spacing are expressed in a scaled pixel system rather than named tokens.

## Voice, Motion and Content Patterns
The voice is warm and direct: second person ("You deserve the best."), a pun that doubles as a slogan ("IT'S A MATCH(A)"), and a hand-written aside with an arrow pointing at the video cards ("Why people love it"). Claims are stated plainly and briefly: real green tea powder, premium protein, glucomannan, thousands of community members, 3158 reviews. The page leans on short-form vertical video: the three portrait cards each carry a mute toggle, so video is presented as framed cards. Because the site declares three named easing curves (default, smooth and bouncy), motion is a deliberate part of the system, but no animation timing was measured for this document, so none is specified here. The color story is monochrome by design: every section is a different value of green, with white used as a frame and contrast color.

## Do's and Don'ts
- Do use #b6cba5 as the hero ground, #e8efe4 for reading sections and #335c30 for text.
- Do use light green #90b96d to highlight the key phrase of a headline.
- Do set Founders Grotesk Condensed with negative tracking and tight line-height, uppercase for the h1.
- Do frame media in thick white borders and rotate them slightly.
- Don't add shadows or other hues; the page is monochrome green plus white.
- Don't use pure black for text; the darkest measured ink is #333333 and the main ink is forest green.
- Don't treat the sage placeholder fills as a brand color for text.

## Responsive Behavior
The mobile pass measured the h1 at 100px weight 600 (line-height 70px, -3px tracking) in a 350px column and the h1 text stays white. Other layout changes and breakpoints were not measured.

## Iteration Guide
1. Start with sage #b6cba5 and pale #e8efe4 grounds, forest #335c30 text.
2. Set headings in Founders Grotesk Condensed with -3% tracking.
3. Highlight one line per headline in #90b96d.
4. Use white-framed, slightly rotated cards and forest pill buttons.
5. Re-run `node web/scripts/verify-designs.mjs --slug=more-nutrition` after edits.
