---
version: alpha
name: Minor Food
category: "Thai Brands"
description: "Minor Food corporate site: a navy #13213c and white editorial layout pairing condensed Manuka headlines at 44px, Newsreader serif body at 18px and Plus Jakarta Sans labels, with a square uppercase FIND OUT MORE button, hairline-bordered news cards and flat depth."

colors:
  canvas: "#ffffff"
  ink: "#13213c"
  primary: "#13213c"
  on-primary: "#ffffff"
  ink-body: "#495057"
  ink-on-dark: "#e6e5e5"
  ink-faint: "#444444"
  accent-yellow: "#ffb502"
  hairline: "#f1f1f1"
typography:
  display:
    fontFamily: Manuka
    fontSize: 44px
    fontWeight: 700
    lineHeight: 52.8px
    letterSpacing: 1px
  display-mobile:
    fontFamily: Manuka
    fontSize: 34px
    fontWeight: 700
    lineHeight: 40.8px
    letterSpacing: 1px
  subheading:
    fontFamily: "\"Plus Jakarta Sans\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
  body:
    fontFamily: Newsreader
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"Plus Jakarta Sans\""
    fontSize: 12px
    fontWeight: 700
    lineHeight: 15px
    letterSpacing: 1px
    textTransform: uppercase
  link:
    fontFamily: Newsreader
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  input:
    fontFamily: Newsreader
    fontSize: 16px
    fontWeight: 400
rounded:
  xs: 4px
  none: 0px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 3px
  s4: 5px
  s5: 6px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 14px
  s10: 15px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 8px 10px
    height: 33px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 30px 0px
---

# Minor Food — Design System

## Overview

Minor Food presents itself as "A Global Leading Food Service Company". Its English home page (https://www.minorfood.com/en) states that, with over 2,699 outlets in 24 countries and 80 brands, it is one of the largest quick-service and casual dining chains in the Asia-Pacific region, committed to "a 100% satisfaction rate and maximizing stakeholder values". The Our Company page adds that it was founded in 1980 by Bill Heinecke to bring the American fast-food concept to Thailand, and describes a "Drive Culture" of "Think Entrepreneurially, Act Professionally". A small "Minor International" link sits in the utility row at the top of the page.

The measured page is a corporate editorial layout in navy and white. A wide four-panel video strip of people biting into pizza and chicken opens the page, then a centered mission paragraph, three large statistics (80 brands, 24 countries, 2,699 outlets) divided by thin vertical lines, a gray dot-matrix world map with blue location markers, a carousel of portfolio brand logos (The Pizza Company, Swensen's, Dairy Queen, Sizzler and more), a "What's Going On Around Minor Food" news row of image cards, and a single "FIND OUT MORE" button. The voice is aspirational and team-oriented, with careers and partnerships as recurring calls to action.

## Colors

The identity is a single deep navy on white. `{colors.primary}` and `{colors.ink}` are both #13213c, which makes headlines, the logo wordmark, the primary button fill and the footer background all the same navy. `{colors.canvas}` (#ffffff) is the page, `{colors.on-primary}` (#ffffff) is text on navy, and `{colors.hairline}` (#f1f1f1) draws the thin borders around news cards and dividers. Secondary text colors are `{colors.ink-body}` (#495057) for most paragraph text and `{colors.ink-faint}` (#444444) for small labels. `{colors.ink-on-dark}` (#e6e5e5) is the soft white used for text on the navy footer, and `{colors.accent-yellow}` (#ffb502) appears in a small amount of measured text.

A bright red tab fixed at the right edge of the page (a back-to-top control) and the red from brand logos in the carousel are not interface colors and are not part of this palette. Keep the interface navy and white and let the portfolio logos supply other colors.

## Typography

Three families form a deliberate editorial contrast. Manuka, a condensed bold display face, sets the headings: `{typography.display}` is 44px at weight 700 on a 52.8px line with 1px letter spacing ("Minor Food | A Global Leading Food Service Company"), and `{typography.display-mobile}` drops to 34px on 40.8px at the 390px viewport. Newsreader, a serif, sets running text: `{typography.body}` is 18px on 27px, `{typography.link}` is 20px on 30px and `{typography.input}` is 16px. Plus Jakarta Sans, a clean sans, handles interface labels: `{typography.subheading}` is 20px at weight 700 on 24px (news card titles and navigation labels), and `{typography.button}` is 12px at weight 700 on 15px, uppercase with 1px letter spacing.

The serif body against condensed headings and sans labels gives the page a magazine feel. The statistics numerals use the same condensed display face at large size.

Font substitutes: Manuka, Newsreader and Plus Jakarta Sans are all delivered as webfonts on the site, so none is required. If Manuka cannot be licensed, any condensed bold sans at weight 700 with 1px tracking will approximate it; verify widths before reusing headline lengths.

## Layout

The header is a white bar with the logo (MINOR over FOOD, in a navy serif wordmark) at left, and five dropdown links (Our Company, Our Businesses, Franchise & Partners, Careers, Sustainability) with small triangle indicators plus a menu icon at right; above them a tiny utility row holds "Minor International", an EN language link and "Find Your Ideal Career". After the video strip, content is centered in a narrow column for the mission text, widens for the statistics row and the map, and sits in a three-card row with arrows for the news carousel. Vertical rhythm is generous and white.

The spacing set from the live CSS is 1px, 2px, 3px, 5px, 6px, 8px, 10px, 12px, 14px and 15px for component internals. The primary button uses 8px 10px padding, and the footer is padded 30px at the top and bottom.

## Elevation & Depth

Depth is minimal and almost entirely flat. Two shadows were measured: a light `rgba(0, 0, 0, 0.1) 1px 1px 4px 0px` on news cards and a larger `rgba(0, 0, 0, 0.2) 7px 14px 24px 0px` on one floating element. News cards are mostly distinguished by a thin `{colors.hairline}` border and white space, not elevation. The video strip, the map's dot grid and the photography supply the visual depth. There are no gradients on interface elements.

## Shapes

Shape is conservative and corporate. `{rounded.none}` (0px) is the primary button radius, so the call to action is a sharp navy rectangle. `{rounded.xs}` (4px) is used on small input corners and `{rounded.pill}` for circular markers (the 100% radius appears twice in the measured data). Images and cards are square-cornered. Do not soften the primary button; its hard edge matches the logo wordmark and the condensed headings.

## Components

**Primary button.** `{components.button-primary}`: navy `{colors.ink}` fill, white text, Plus Jakarta Sans 12px bold uppercase with 1px tracking, 8px 10px padding, 33px tall, 0px radius. Label: "FIND OUT MORE".

**Link.** `{components.link}`: navy Newsreader 20px, square.

**Navigation.** `{components.nav}`: navy text on white; items use the 20px Plus Jakarta Sans bold label style with a small downward triangle for dropdowns.

**News card.** A white card with a thin #f1f1f1 border, a square photo, a bold title in Plus Jakarta Sans and generous padding; arrows in navy sit outside the row.

**Footer.** `{components.footer}`: navy background, white text and 30px vertical padding.

**Statistic.** A very large Manuka numeral with a small Newsreader caption beneath it, separated from neighbors by a thin vertical line.

## Design System Architecture

No public design system, token package or brand guideline was found: the pages opened (https://www.minorfood.com/en and https://www.minorfood.com/en/our-company) are a corporate site, so there is no official public system to cite. The de-facto system can be read from the shipped CSS: a Bootstrap-style variable set (`--primary` is #007bff, `--secondary` is #6c757d) that the page overrides in component rules, with the real brand navy #13213c applied directly; Font Awesome 5 Pro and Brands icon fonts; and three webfonts (Manuka, Newsreader, Plus Jakarta Sans). Because the Bootstrap defaults are not what is visible, extend the brand from the measured navy and type trio rather than from the root variables.

## Do's and Don'ts

- Do use navy #13213c for text, buttons and the footer on a white canvas.
- Do pair Manuka headings, Newsreader body and Plus Jakarta Sans labels.
- Do keep the primary button square, 33px tall, uppercase and tracked at 1px.
- Do let large condensed numerals carry statistics.
- Don't use the Bootstrap blue #007bff; it is a framework default.
- Don't treat the red back-to-top tab or the brand logos' colors as interface colors.
- Don't add rounded corners to buttons or cards.
- Don't add heavy shadows to news cards; a hairline border is enough.

## Responsive Behavior

At the 390px mobile viewport the display style steps down from 44px (`{typography.display}`) to 34px (`{typography.display-mobile}`) with the same Manuka weight and tracking. Bootstrap-style breakpoints are present in the CSS, but the exact reflow of the video strip, the statistics row, the map and the three-card carousel was not measured, so verify them before specifying behavior. The desktop header shows a menu icon beside the five links; its narrow-screen behavior was not verified.

## Iteration Guide

1. Start from a white page with navy #13213c text and a navy footer.
2. Headline in Manuka 44px (34px on mobile) with 1px letter spacing; body in Newsreader 18px; labels in Plus Jakarta Sans.
3. Add a single square navy "FIND OUT MORE" button, 12px bold uppercase.
4. Present facts as large numerals with small serif captions and thin vertical dividers.
5. Use #f1f1f1 hairlines for cards and keep shadows to a minimum.
6. Check new colors against the measured list: #13213c, #ffffff, #495057, #e6e5e5, #444444, #ffb502, #f1f1f1.
