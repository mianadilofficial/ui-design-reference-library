---
version: alpha
name: Pitch
category: "Design & Creative Tools"
description: "Pitch (pitch.com), the Berlin-built AI presentation workspace: white #ffffff canvas against deep violet #280f62 bands, electric violet #5318eb primary, lime #c4ee87 sign-up chips, Mark Pro Bold display at 180px/-7.2px over Eina 03 Regular 16px body, 4px button radius and 16-40px rounded cards."
colors:
  canvas: "#ffffff"
  ink: "#0c021c"
  primary: "#5318eb"
  on-primary: "#ffffff"
  surface-deep: "#280f62"
  ink-body: "#363636"
  ink-muted: "#666666"
  lilac: "#c6a5ff"
  lime: "#c4ee87"
  lavender-tint: "#ebe3fe"
  hairline-glass: "#ffffff66"
  input-ink: "#0d031d"
  glass-card: "#ffffff29"
typography:
  display:
    fontFamily: "\"Mark Pro Bold\", \"Mark Pro Bold Placeholder\", sans-serif"
    fontSize: 180px
    fontWeight: 700
    lineHeight: 144px
    letterSpacing: "-7.2px"
  display-mobile:
    fontFamily: "\"Mark Pro Bold\", \"Mark Pro Bold Placeholder\", sans-serif"
    fontSize: 82px
    fontWeight: 700
    lineHeight: 65.6px
    letterSpacing: "-3.28px"
  lede:
    fontFamily: "\"Eina 03 Regular\", \"Eina 03 Regular Placeholder\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28.8px
    letterSpacing: "-0.36px"
  heading:
    fontFamily: "\"Mark Pro Bold\", \"Mark Pro Bold Placeholder\", sans-serif"
    fontSize: 32px
    fontWeight: 700
    lineHeight: 38.4px
    letterSpacing: "-1.28px"
  body:
    fontFamily: "\"Eina 03 Regular\", \"Eina 03 Regular Placeholder\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
    letterSpacing: "-0.32px"
  button:
    fontFamily: "\"Mark Pro\", MarkPro, Inter, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.78px
  button-strong:
    fontFamily: "\"Eina 03 Bold\", \"Eina 03 Bold Placeholder\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 19.2px
    letterSpacing: "-0.32px"
  input:
    fontFamily: "\"Mark Pro\", MarkPro, Inter, -apple-system, \"system-ui\", \"Segoe UI\", Roboto, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22.4px
    letterSpacing: "-0.14px"
rounded:
  xs: 1px
  sm: 4px
  md: 7.62px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 16px
  4xl: 20px
  card: 24px
  pill: 30px
  panel: 40px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px 12px 8px 16px
    height: 36px
  button-signup:
    backgroundColor: "{colors.lime}"
    textColor: "{colors.ink}"
    typography: "{typography.button-strong}"
    rounded: "{rounded.sm}"
    padding: 10px 12px
    height: 44px
  button-pill-dark:
    backgroundColor: "{colors.surface-deep}"
    rounded: "{rounded.pill}"
    padding: 12px
    height: 52px
  text-input:
    textColor: "{colors.input-ink}"
    typography: "{typography.input}"
    height: 72px
  card-glass:
    backgroundColor: "{colors.glass-card}"
    rounded: "{rounded.card}"
    padding: 12px
  card-prompt:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    border: "1px solid #ffffff66"
    boxShadow: "rgba(198, 165, 255, 0.35) 0px 20px 60px -20px"
    rounded: "{rounded.3xl}"
    padding: 20px
  card-testimonial:
    backgroundColor: "{colors.lime}"
    textColor: "{colors.ink}"
    rounded: "{rounded.4xl}"
    padding: 24px
  footer:
    textColor: "{colors.ink}"
    padding: 0px 24px
---

## Overview

Pitch is a Berlin-made presentation workspace ("Made in Berlin. Vouched for globally." on its About page) that now sells itself as an AI presentation platform. The measured home page, titled "The AI presentation workspace", is a long Framer-built marketing page of 14,310px at a 1280px viewport. Its personality comes from three moves that repeat from top to bottom: a giant, tightly tracked headline in Mark Pro Bold ("Create slides that win." at 180px), a two-pole colour field that swings between a pure white canvas (#ffffff) and a deep aubergine violet (#280f62), and small, punchy chips of acid lime (#c4ee87) and electric violet (#5318eb) that mark every action.

The capture shows the page opening with a thin lilac (#c6a5ff) announcement strip ("Pitch's MCP & API are here"), then a full-bleed violet hero with the headline in white, a white prompt box with a violet "Generate" button, and a row of customer logos. Below that the page alternates: white feature bands with product screenshots of slide editors, a violet media band with a "Create" demo, a wall of testimonial tiles in lime, lilac and violet with portrait photography, a white "complete presentation toolkit" grid of product cards, a violet "Pitch for people who mean business" band, a templates showcase with oversized outline type, an FAQ accordion and a closing "Let's Pitch" footer in violet.

The tone is confident and agency-like: short imperative headlines ("Create slides that win.", "From first draft to closed deal, and beyond"), numeric proof ("4M+", "150+", "5H+"), and a product that is always shown, never described abstractly.

## Colors

The palette is measured from the live page and its Framer CSS variables (24 `--token-*` root variables, all mapping to the values below).

- **Canvas `#ffffff`** — the page body background and the largest painted area (weight 7,779 by area). White bands carry feature content and product shots.
- **Surface deep `#280f62`** — the second largest area (6,879), used for the hero region, the "for people who mean business" band and the footer zone. The bands list also records near neighbours #38197f, #2d126d and #291064 at the bottom of the page, which are gradient stops of the same violet field.
- **Primary `#5318eb`** — the "Generate" button fill and the colour of the h3 "Make stunning slides". It is the third largest painted area (1,873), so it reads as a brand colour, not just an accent. Hovering the "Log in" pill fills it with a measured rgb(83, 23, 235), the same violet.
- **On-primary `#ffffff`** — text on violet buttons and on the violet bands.
- **Ink `#0c021c`** — a near-black with a violet cast; the body element colour and the second most-read text colour (2,321 characters).
- **Ink body `#363636`** and **ink muted `#666666`** — neutral greys for long descriptions and captions (1,191 and 195 characters).
- **Lilac `#c6a5ff`** — the announcement strip fill, accent text on dark, and the hover fill of the lime sign-up chip.
- **Lime `#c4ee87`** — the sign-up chip, the "Get a demo" button and several testimonial tiles. It is the brand's only warm-leaning colour and it is used sparingly (141 by area).
- **Lavender tint `#ebe3fe`** — a pale violet used in small fills.
- **Glass card `#ffffff29`** and **hairline glass `#ffffff66`** — translucent white for cards and borders placed over violet.
- **Input ink `#0d031d`** — the text colour inside the hero prompt textarea.

Colour pairing rules seen on the page: violet surfaces carry white text; white surfaces carry ink; lime surfaces carry ink, never white.

## Typography

Two commercial families do almost all of the work, both served as Framer font assets:

- **Mark Pro Bold** (700) for display and section headings. The hero h1 is 180px with a 144px line height (0.8) and -7.2px tracking, which makes the two-line headline a solid block. Section headings measured at 32px/38.4px with -1.28px tracking; the frequency table also records 48px/-1.92px and 64px/-2.56px headline sizes, all at the same -4% tracking ratio.
- **Eina 03 Regular** (400) for body copy and ledes — the most-read family on the page (4,885 characters). Body is 16px/25.6px with -0.32px tracking; the hero lede is 18px/28.8px with -0.36px. Eina 03 Bold (700) appears in the sign-up chip at 16px/19.2px and in footer column headings at 18px.
- **Mark Pro** (Regular) with an Inter, system-ui fallback stack is used inside product UI fragments: the "Generate" button at 14px/19.78px and the prompt textarea at 16px/22.4px with -0.14px tracking.
- **Space Mono** (45 characters) appears for small eyebrow labels such as "MY PITCH" and "TRUSTED".

Every text size carries negative tracking of about 2% for body and 4% for headlines. Font substitutes when the commercial faces are unavailable: Mark Pro and Eina 03 are proprietary; the page's own fallback stack lists Inter, -apple-system, system-ui, Segoe UI and Roboto, so Inter Bold is the nearest declared substitute for display and Inter Regular for body.

## Layout

The page is a 1280px-wide composition with content blocks centred inside it. The measured band map shows a 44px announcement strip, a 1,178px hero media band, then alternating white and media bands of 284px to 3,712px in height. The widest measured card grid has 3 columns. Spacing values cluster on a 4px base: gaps of 4, 8, 10, 16, 20, 24, 32 and 40px dominate, with large section paddings of 80px, 104px and 120px.

The density is low and image-led. Each feature block pairs a short heading and one paragraph with a large product screenshot. The testimonial area is a masonry-like wall of tiles that mixes colour fills and portrait photos. The templates section uses oversized outlined words ("PITCH DECK", "MARKETING", "DESIGN") as a vertical list.

## Elevation & Depth

Depth is mostly made by colour contrast between white and violet bands, not by shadow. Only one box shadow is measured on the page: `rgba(198, 165, 255, 0.35) 0px 20px 60px -20px`, a soft lilac glow under the white prompt card in the hero. Over violet surfaces, depth comes from translucent white glass (#ffffff29 fills with #ffffff66 hairlines) that lets the violet show through. Product screenshots float on their bands with rounded corners, and the capture shows them overlapping band edges, which gives the page a layered, slide-deck feel without heavy shadows.

## Shapes

Radii are small on controls and large on containers. Buttons and the sign-up chip use 4px; the hero prompt card uses 16px; testimonial tiles 20px; glass cards 24px; outlined navigation pills 30px; larger panels 40px (the most frequent large radius, 18 uses). Smaller values of 1px, 7.62px, 8px, 10px and 12px appear inside product screenshots and small UI fragments. The overall feeling is soft rectangles with a crisp, almost square button — a contrast that keeps actions looking like tools rather than toys.

## Components

- **Primary button** — "Generate": #5318eb fill, white text, Mark Pro 14px/19.78px, 4px radius, 8px 12px 8px 16px padding, 36px tall. It sits inside the hero prompt box.
- **Sign-up chip** — "Sign up": lime #c4ee87 fill, ink text, Eina 03 Bold 16px/700, 4px radius, 10px 12px padding, 44px tall. On hover the fill changes to lilac rgb(198, 165, 255) with the text unchanged.
- **Log in pill** — white fill with ink text and a 30px radius; on hover it inverts to violet rgb(83, 23, 235) with white text.
- **Dark pill** — "Start creating": #280f62 fill, 30px radius, 12px padding, 52px tall.
- **Prompt input** — a 72px-tall textarea in Mark Pro 16px, text #0d031d, inside a white 16px-radius card with a #ffffff66 hairline and the lilac glow shadow. Prompt chips inside the card take a faint rgba(13, 3, 29, 0.04) fill on hover.
- **Glass card** — #ffffff29 fill, 24px radius, 12px padding, used on violet.
- **Testimonial tile** — lime fill, 20px radius, 24px padding, a large quotation mark, ink text and a small attribution.
- **Text link** — "See what's new" stays ink and gains an underline on hover.
- **Footer** — ink text, 0px 24px padding, multi-column link lists headed in Eina 03 Bold 18px, ending in a giant "Let's Pitch" wordmark band.

## Design System Architecture

Pitch publishes no public design system or brand guidelines that we could open; its press room (https://pitch.com/press) offers a press kit as a Google Drive folder, and its About page (https://pitch.com/about) links only to that press room. The de-facto system is readable from the shipped site: it is built in Framer, so colours are exposed as UUID-named CSS variables (`--token-bf6e6ad9-…` = #280f62, `--token-07c59440-…` = #5318eb, `--token-70cecdac-…` = #c4ee87, `--token-7cd3dd22-…` = #0c021c, `--token-2659268f-…` = #363636), several of them duplicated under different IDs. Fonts are served as Framer assets from framerusercontent.com (for example https://framerusercontent.com/assets/r2tj1pD9b2S1hgQsz6QeRjN6ZXE.woff2) with "Placeholder" fallback faces for layout stability. The system therefore has six core colours (white, ink, violet, deep violet, lilac and lime) and two typefaces, applied through Framer components rather than a published token package.

## Do's and Don'ts

**Do**
- Set headlines in Mark Pro Bold with tight tracking (-4% of size) and line heights at or below 1.2; the hero uses 0.8.
- Alternate full-width white (#ffffff) and deep violet (#280f62) bands to pace a long page.
- Use electric violet #5318eb for the main action and lime #c4ee87 for sign-up moments.
- Keep buttons at a 4px radius and containers at 16-40px.
- Show the product: real slide editor screenshots, real templates, real customer faces.
- Put ink (#0c021c) text on lime and lilac; put white text on violet.

**Don't**
- Don't put white text on lime #c4ee87.
- Don't add heavy drop shadows; the page has one soft lilac glow.
- Don't use pure black for text; the ink is a violet-tinted #0c021c.
- Don't introduce extra hues such as blue, orange or red; the palette is violet, lilac, lime and neutrals.
- Don't set body copy without the slight negative tracking (-0.32px at 16px).
- Don't use pill radii on the primary button; pills belong to navigation-style links.

## Responsive Behavior

The extractor's mobile pass at 390px measured the following:
- The h1 "Create slides that win." drops from 180px to 82px with a 65.6px line height and -3.28px tracking, keeping the same 0.8 line-height ratio and -4% tracking.
- The mobile h2 measured as Mark Pro Bold 32px/38.4px with -1.28px tracking ("Pitch is your presentation workspace").
- Body text stays at Eina 03 Regular 16px/25.6px; its measured block width is 310px.
- The navigation measured 72px tall (80px on desktop); 1 header link was visible on mobile against 8 on desktop, and no menu toggle was detected by the extractor.
- The primary call to action detected on mobile is the lime "Get a demo" button: 4px radius, 10px 12px padding, 44px tall.

Breakpoint values, grid column counts per width and image behaviour at intermediate widths were not measured.

## Iteration Guide

1. Start with the two-colour field: #ffffff canvas and #280f62 bands. Get the ratio right (roughly half and half by area on the measured page) before adding accents.
2. Set the hero headline in Mark Pro Bold (or Inter Bold as a substitute) at 180px/144px with -7.2px tracking on desktop and 82px/65.6px with -3.28px on mobile.
3. Add #5318eb for primary actions and #c4ee87 for sign-up and demo actions; check that each has ink or white text as listed in Colors.
4. Use Eina 03 Regular (or Inter Regular) at 16px/25.6px, -0.32px, in #363636 or #0c021c for body copy.
5. Wrap product screenshots in 16-40px rounded containers; over violet, use #ffffff29 glass with a #ffffff66 hairline.
6. Use only the lilac glow shadow `rgba(198, 165, 255, 0.35) 0px 20px 60px -20px` and only under a floating white card.
7. Compare against the capture: if the page looks more like a generic SaaS site than Pitch, check the headline size and tracking against the tokens and count how many lime surfaces are on screen.
