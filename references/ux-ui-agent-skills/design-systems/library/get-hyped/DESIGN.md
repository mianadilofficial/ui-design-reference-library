---
version: alpha
name: Get Hyped
category: "Product & SaaS"
description: "Get Hyped (gethyped.nl) is a Dutch social-first content agency site in Inter 600 (85.3333px headline with -4.26667px tracking), on a cream #faf4ec canvas with #161616 text, orange #fa5424 actions, flat pink #fcb8fa, blue #0d8dff and green #33c791 tilted cards with 32px radii."
colors:
  canvas: "#ffffff"
  page-body: "#faf4ec"
  ink: "#161616"
  primary: "#fa5424"
  on-primary: "#fffef7"
  surface-pink: "#fcb8fa"
  ink-black: "#000000"
  surface-sand: "#eae4d8"
  ink-pink-light: "#fdd0fe"
  hairline: "#16161659"
  card-bg: "#0d8dff"
  accent-green: "#33c791"
typography:
  display:
    fontFamily: Inter, sans-serif
    fontSize: 85.3333px
    fontWeight: 600
    lineHeight: 81.0667px
    letterSpacing: "-4.26667px"
  display-mobile:
    fontFamily: Inter, sans-serif
    fontSize: 55.3653px
    fontWeight: 600
    lineHeight: 52.5971px
    letterSpacing: "-2.76827px"
  heading:
    fontFamily: Inter, sans-serif
    fontSize: 21.3333px
    fontWeight: 600
    lineHeight: 23.4667px
    letterSpacing: "-0.64px"
  button:
    fontFamily: Inter, sans-serif
    fontSize: 13.3333px
    fontWeight: 600
    lineHeight: 13.3333px
    letterSpacing: "-0.266667px"
rounded:
  xs: 5.33px
  sm: 7.5px
  md: 8.33px
  lg: 10px
  xl: 10.67px
  2xl: 13.33px
  3xl: 21.33px
  4xl: 26.67px
  none: 0px
  pill: 9999px
spacing:
  s1: 5.33px
  s2: 7.5px
  s3: 8px
  s4: 8.53px
  s5: 9px
  s6: 10.67px
  s7: 12.8px
  s8: 13.33px
  s9: 16px
  s10: 21.33px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 37px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 37px
  link:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
  nav:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    transform: matrix(0.985181, 0.17152, -0.17152, 0.985181, -10.0056, 3.56857)
---

## Overview

Get Hyped (https://www.gethyped.nl/, title "Social-first content agency voor merken | Get Hyped") is a Dutch social-first content agency, and its home page (1280px wide, 7092px tall) is deliberately loud and playful. On a warm cream `{colors.page-body}` field, a black stacked-letter "GETHYPED" logo sits at the top left, a white pill-shaped menu (Expertises, Work, About, Contact) at the centre and a pink "Get Results" pill with a flame icon at the right. The hero headline "Get Hyped. Get Noticed. Get Results." is set at 85.3333px weight 600 with tight -4.26667px tracking, followed by the Dutch line "Klaar met gokken op content die niets oplevert?" ("Done gambling on content that delivers nothing?"). Beneath it four tilted cards fan across the page: a blue "10M+ Organische views" stat card, a video still of a woman at a clothes rail, a green "30+ Merken geholpen" stat card, and a video still of a man in a car with a meme caption. A full-width pink band follows, then a manifesto paragraph ("We stoppen niet bij mooie plaatjes en vette beelden. We maken het meetbaar...") beside a portrait, and a white rounded "Expertise 01 Social strategy" section with an orange-framed tilted photo.

The mood is energetic and slightly irreverent: tilted cards, saturated flat colours, rounded photographs with thick coloured frames, meme-style captions and blunt headline rhythm ("Nooit meer content zonder strategie. Nooit meer content zonder resultaat."). Copy mixes English headlines with Dutch body text.

## Colors

The identity is a cream canvas with four flat accent colours. `{colors.page-body}` (#faf4ec) is the page background (1979 area weight) and `{colors.canvas}` (#ffffff, 1254) is used for rounded sections and the menu pill. `{colors.primary}` (#fa5424, orange-red) is the action colour: buttons, the frames around photos and the "Meer over social strategie" link (309 area); its text colour `{colors.on-primary}` (#fffef7) is a warm white. Accent fills: `{colors.surface-pink}` (#fcb8fa, pink; 1905 area, the large band and the "Get Results" pill), `{colors.card-bg}` (#0d8dff, blue; 1193, the 10M+ card) and `{colors.accent-green}` (#33c791, green; 1177, the 30+ card). Smaller values measured: #28aaff, #73e2b6 and #fc997b (1 to 2 area each).

Text is `{colors.ink}` (#161616, 1711 characters) throughout, with #000000 (52), white (112) and #fffef7 (47) on coloured fills. `{colors.surface-sand}` (#eae4d8) is the large muted "01" numeral and tag fill and `{colors.ink-pink-light}` (#fdd0fe) a light pink text colour. `{colors.hairline}` (#16161659) is the 1px border on 26 elements. Root variables published by the CMS include `--swatch--eerie-black` #171c1c; they are not tokenised.

## Typography

Inter is the only family (1930 characters), loaded at 300 to 700, with weights 600 (1100 characters), 500 (790) and 700 (40). The look comes from large sizes with strongly negative tracking: display 85.3333px/81.0667px with -4.26667px (-0.05em), 53.3333px with -2.13333px, 58.6667px with -2.93333px (stat numbers), heading and paragraph 21.3333px with -0.64px (615 characters; body copy is 21.3333px/27.7333px weight 600), 16px with -0.48px, button 13.3333px/13.3333px with -0.266667px, and tiny 9.33333px and 10.6667px labels. Tracking is about -0.03em for body sizes and -0.05em for display. On mobile the h1 is 55.3653px/52.5971px with -2.76827px, body 19.5407px/25.4029px and the button 16.2839px.

## Layout

Layouts are fluid and Webflow-built, so measurements are scaled (many values are multiples of 5.33333px, the page's scaling unit). Measured gaps: 16px (20), 5.33333px (12), 10.6667px (10), 21.3333px, 32px, 69.3333px, 12.8px, 64px and 8px; paddings 8px (21), 42.6667px (14), 9px (12), 26.6667px (10), 16px, 13.3333px and 64px. Sections alternate cream, pink and a large white rounded container; the hero cards overlap and rotate. The header is a three-part bar (logo, centred pill menu, CTA).

## Imagery and Voice

Imagery is short-form social video stills rather than polished campaign photography: a woman browsing a clothing rail, a man grinning from a car seat with a meme-style caption ("DIE KLINKT TOCH"), a woman in sunglasses and an orange sweater pulling a playful pose, and a cropped close-up of a hand inside an orange frame. Each is cropped to a rounded rectangle and often tilted, which signals the agency's own content format. The voice is direct and confident in two languages: English slogans ("Get Hyped. Get Noticed. Get Results.") and Dutch explanations of results ("Groei door slimme content", "Van start-up tot multinational", "Slimme strategie. Sterke start."). Numbers are used as proof points in oversized type (10M+, 30+), and the manifesto repeats a two-line pattern ("Nooit meer ... zonder ...") for rhythm.

## Elevation & Depth

No box shadows were measured. Depth is made with overlap and rotation instead: the four hero cards are rotated (one measured transform is `matrix(0.985181, 0.17152, -0.17152, 0.985181, -10.0056, 3.56857)`, about 10 degrees), photographs are framed in thick colour borders, and white rounded panels sit on the cream field.

## Shapes

Shape language is rounded and varied: 10.6667px (27 elements), 8.33333px (12), 10px (11), 7.5px (8), 26.6667px (7), 5.33333px (7), 21.3333px (7), 13.3333px (5), 32px (4, the stat cards), 100% (4, circles), `0px 0px 13.3333px 13.3333px` (3) and 1280px (3, pill). The measured primary and secondary text-link buttons are 0px radius on the anchor itself, with an inner rounded arrow chip; the visible pills are the outer wrappers.

## Components

- Primary button ("Meer over social strategie"): #fa5424 fill, #fffef7 13.3333px weight 600 text, 37px high, 213px wide, with a white arrow chip.
- Secondary button ("Get Results"): #fa5424 on the anchor (124px by 37px) inside a pink pill with a flame icon.
- Link button ("Leer ons kennen"): #faf4ec background, #161616 text, 37px high, 156px wide, with a black arrow chip.
- Menu pill: white capsule with 12px weight 600 items.
- Stat card: 32px radius, blue (#0d8dff) or green (#33c791), 58.6667px number, 21.3333px label, hairline rule and 10.6667px caption; 360px wide and 431px high, rotated.
- Tag: "Expertise" in a #eae4d8-tinted small chip; large faint section number "01".

## Design System Architecture

No public design-system page was opened. The page is a Webflow site: root variables with Webflow-style names (`--_layout---radius--border-radius-medium` 2em, `--_layout---radius--menu` 1em, `--_paragraphs---paragraph-regular--font-size` 1.25em, `--spacing--tablet-96px`, `--swatch--eerie-black`) show a variable-driven layout, paragraph and swatch system, with em-based sizing that explains the non-integer pixel values.

## Do's and Don'ts

- Do set everything in Inter 600 with heavy negative tracking, up to -0.05em at display size.
- Do use flat saturated cards (blue, green, pink) with generous radii and a rotation.
- Do keep the cream #faf4ec background and #161616 text.
- Do use #fa5424 for actions and photo frames and pair buttons with an arrow chip.
- Don't use shadows; none were measured.
- Don't use more than one rotated element per row without overlapping the next.
- Don't add a fifth accent colour beyond orange, pink, blue and green.

## Responsive Behavior

At 390px the h1 measured 55.3653px/52.5971px, h2 14.6555px/16.1211px, body 19.5407px/25.4029px at 357px wide, and the primary button 16.2839px, 260px by 45px. Sizes by characters on mobile: 16.2839px (702), 19.5407px (584), 32.5678px (157), 14.6555px (106), 45.595px (72), 11.3987px (68), 15px (52). Menu collapse and card rotation on mobile were not measured.

## Iteration Guide

1. Start with a cream page, #161616 text and Inter 600 at -0.03em tracking.
2. Add a 85px headline with -0.05em tracking and four tilted colour or video cards.
3. Use pink, blue, green and orange as flat fills with 32px or 10.6667px radii.
4. Make buttons small (13.3333px) with an arrow chip.
5. Hover states and motion were not measured; verify before adding them.
