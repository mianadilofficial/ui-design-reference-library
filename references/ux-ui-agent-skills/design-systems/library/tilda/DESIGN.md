---
version: alpha
name: Tilda
category: "Design & Creative Tools"
description: "Tilda's site uses its own open-licensed variable Tilda Sans at weight 300 for most text (16px/24.8px body, 72–78px light headlines) and 600 for the 46px hero, black #000000 ink on white with #efefef illustration panels, square 0px-radius #fa8669 coral buttons (hover #ff7a5a), and line-art illustrations in coral #ffa282."
colors:
  canvas: "#ffffff"
  page-body: "#ffffff"
  page-largest: "#efefef"
  ink: "#000000"
  primary: "#fa8669"
  on-primary: "#ffffff"
  primary-hover: "#ff7a5a"
  coral: "#ffa282"
  brand-orange: "#f99761"
  ink-coral: "#ff8562"
  ink-grey: "#7f7f7f"
  ink-charcoal: "#222222"
  ink-mid-grey: "#656565"
  surface-gray: "#f0f0f0"
  surface-dark: "#2a2a2a"
  surface-black: "#000000"
  surface-near-black: "#171717"
  card-bg: "#f8f8f8"
typography:
  display:
    fontFamily: TildaSans, Arial, sans-serif
    fontSize: 46px
    fontWeight: 600
    lineHeight: 52px
  heading:
    fontFamily: TildaSans, Arial, sans-serif
    fontSize: 72px
    fontWeight: 300
    lineHeight: 76px
  heading-mobile:
    fontFamily: TildaSans, Arial, sans-serif
    fontSize: 36px
    fontWeight: 300
  subheading:
    fontFamily: TildaSans, Arial, sans-serif
    fontSize: 78px
    fontWeight: 300
    lineHeight: 91.26px
  card-title:
    fontFamily: TildaSans, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 27px
  body:
    fontFamily: TildaSans, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24.8px
  button:
    fontFamily: TildaSans, Arial, sans-serif, Arial, sans-serif
    fontSize: 15px
    fontWeight: 600
    lineHeight: 21px
  nav-button:
    fontFamily: TildaSans, Arial, sans-serif, Arial, sans-serif
    fontSize: 13px
    fontWeight: 700
rounded:
  none: 0px
  xs: 4px
  sm: 6px
  md: 30px
  lg: 60px
  pill: 9999px
spacing:
  s1: 2px
  s2: 5px
  s3: 7.59px
  s4: 8px
  s5: 8.76px
  s6: 9.34px
  s7: 10px
  s8: 12.85px
  s9: 15px
  s10: 15.18px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 13.5px 44px
    height: 50px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-primary-large:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.none}"
    padding: 14.6px 70px
    height: 60px
  button-outline:
    textColor: "{colors.ink}"
    typography: "{typography.nav-button}"
    rounded: "{rounded.none}"
    border: "1px solid #000000"
    padding: 6.9px 20px
    height: 31px
  button-dark:
    backgroundColor: "{colors.surface-black}"
    textColor: "{colors.page-largest}"
    rounded: "{rounded.none}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.card-title}"
    rounded: "{rounded.xs}"
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
---

## Overview

Tilda is a website builder, and its home page (measured title "Create a Website for Free. Tilda Website Builder") is a long, editorial scroll that alternates airy white sections with black feature bands. The desktop capture opens on a split hero: on the left, a light-grey `#efefef` panel of black line-art illustration — people in polka-dot and coral clothing assembling website pieces around a large circled Tilda "T" logo; on the right, white space with the headline "Create beautiful websites on Tilda with [U+2726]AI" (the first two lines semibold, "with" light, "AI" as a small pink-violet chip), a short light-weight subline and two square buttons, an outlined "Overview" and a coral "Create a website for free". A minimal header sits on top: "Tilda Publishing" at the left and uppercase links "PRICING", "BLOG", "MORE", "LOG IN" with an outlined "SIGN UP" at the right.

Below the hero, a letter-spaced uppercase kicker ("BUILD A BEAUTIFUL WEBSITE WITHOUT CODE") introduces a huge light headline ("Share your passion with the world"), then a zig-zag of features (Intuitive AI-Powered Website Builder, Block Library, Create Your Own Blocks, AI & Vibe Coding) each paired with a line illustration. A video, a black "AI-Powered Website Creation" band with a coral icon, "Tilda Design Features" with laptop mock-ups, a grid of "Even more features for exceptional results" cards, a testimonial, integration and payment logo walls, SEO and publishing sections follow.

The voice is friendly and reassuring — "Now everyone can be a designer!", "It's like a game: Simple, fun, and easy." Typography and generous whitespace do most of the design work; colour is limited to coral and black.

## Colors

Tilda's media kit (https://tilda.cc/mediakit/) publishes the brand palette: **Coral `#ffa282`**, **Gray `#f0f0f0`**, **White `#ffffff`**, **Black `#000000`** and a complementary **Orange `#f99761`**, with the guidance "Use Coral to highlight key elements, such as bars, buttons, or icons" and "Use complementary Orange to add more contrast to small elements, such as links."

What the home page renders:

- **Canvas `#ffffff`** — the page background behind the text columns.
- **Illustration grey `#efefef`** (`page-largest`) — the largest background by area: the hero illustration panel and other illustration fields. `#f0f0f0`, `#ededed` and `#f8f8f8` (cards) are close neighbours.
- **Ink `#000000`** — almost all text; secondary greys are `#7f7f7f` (sublines such as "Create a website in minutes…"), `#656565` and `#222222`.
- **Primary `#fa8669`** — the coral button fill; hover measured `#ff7a5a`. The media-kit coral `#ffa282` is measured as an illustration background.
- **Coral text `#ff8562`** — coral headline accents and links.
- **Dark bands** — `#000000`, `#2a2a2a`, `#171717` and `#111111` backgrounds for the AI and video sections.

## Typography

The site is set entirely in **Tilda Sans**, Tilda's own typeface. According to its page (https://tilda.cc/lp/tildasans/), it was designed for Tilda by Paratype (Dmitry Golub, Aleksandra Korolkova, Nickolai Nedashkovsky), is free under the SIL Open Font License 1.1, covers extended Latin and Cyrillic (673 characters), and ships as a variable font spanning Light to Black. The page loads it as `TildaSans` with a weight range of 250–1000, falling back to Arial.

Weight 300 dominates — about 15,000 of 17,000 measured characters — so the site reads light and open.

| Role | Size / line-height | Weight |
|---|---|---|
| Hero display | 46px / 52px | 600 (the word "with" at 300) |
| Section heading ("AI-Powered Website Creation") | 72px / 76px | 300 |
| Large heading ("Share your passion with the world") | 78px / 91.26px | 300 |
| Card title | 20px / 27px | 400 |
| Body | 16px / 24.8px | 300 |
| Button | 15px / 21px | 600 |
| Header button ("SIGN UP") | 13px | 700, uppercase |

Measured sizes by character count are led by 20px, then 16px, 14px, 18px, 24px, 19px, 26px, 22px, 28px and 48px. Uppercase labels are letter-spaced: 14px at 1px or 2.5px and 13px at 0.5px.

**Substitute:** none needed — Tilda Sans is downloadable under the OFL from the page above.

## Layout

The desktop layout is wide and centred, with content spanning x=30 to x=1229 in the 1280px viewport. The hero is a 50/50 split; feature sections alternate illustration and text left and right; card grids go up to three columns. Vertical rhythm is generous — measured paddings include 200px (eight instances) and 252px (six) alongside 30px (the most frequent), 5px, 10px, 20px and 60px. Fractional gaps (9.344px, 7.592px, 8.76px, 12.848px) were also measured, alongside 40px and 70px gaps.

Text blocks are short and centred under large headings, or left-aligned beside illustrations. Logo walls (integrations, payment systems) use grey monochrome logos in loose rows.

## Elevation & Depth

Shadows are rare — four elements, each with a different shadow: `rgba(0, 0, 0, 0.3) 0px 0px 10px 0px`, `rgba(0, 11, 48, 0.2) 0px 15px 30px -10px`, `rgba(63, 18, 79, 0.3) 0px 20px 20px -10px` and `rgba(0, 0, 0, 0.2) 0px 0px 10px 0px`. Depth on the page comes from contrast between white sections and black bands, from laptop and phone mock-ups, and from the grey illustration panels.

## Shapes

The UI is square. Buttons — coral, outlined and black — all measured 0px radius. Rounded values appear only on secondary elements: 50% (18 instances: avatars, round icons, the language switcher dot), 4px (cards), 60px, 30px and 6px. Illustrations use thick black outlines and rounded, hand-drawn forms, which soften the hard-edged UI around them.

## Components

- **Primary button** — "Create a website for free": `#fa8669` fill and 1px border, white Tilda Sans 15px/600, 13.5px 44px padding, 50px tall, square corners; hover `#ff7a5a`.
- **Large primary button** — the same coral at 22px/500, 14.6px 70px padding, 60px tall.
- **Outline button** — "SIGN UP" / "Overview": transparent, 1px solid black, black 13px/700 uppercase, 6.9px 20px padding, 31px tall in the header.
- **Dark button** — "All Tilda features", "Watch more tutorials": black fill with `#efefef` or white text, square.
- **Feature card** — `#f8f8f8`, 4px radius, a 20px/400 title ("Tilda CRM") and a light description.
- **Kicker** — uppercase 14px with 1–2.5px letter-spacing, centred above section headings.
- **Header** — logotype left, five uppercase links right (the desktop pass counted five visible header links), no background colour.
- **Footer** — a 36px/300 closing line ("The website you've been dreaming of is j…") followed by link columns in black on white.

## Design System Architecture

Tilda publishes its brand foundations openly: the media kit (https://tilda.cc/mediakit/) gives the logo files, spelling of the name, the five brand colours with usage notes, and names Tilda Sans as the brand typeface; the typeface page (https://tilda.cc/lp/tildasans/) documents the font and offers variable, web and TTF downloads. No component-level design system or token package was found, and the home page declares no CSS custom properties. The page is assembled from Tilda's own blocks (including Zero Block, linked from the home page as http://zero.tilda.cc/); the measured CSS contains fractional gap values (9.344px, 7.592px, 12.848px).

## Do's and Don'ts

**Do**
- Set everything in Tilda Sans; use 300 for body and large headlines, 600 for the hero and buttons.
- Keep buttons square with a coral `#fa8669` fill or a 1px black outline.
- Use coral only to highlight key elements — buttons, bars, icons — as the media kit asks.
- Pair text with black line-art illustrations on `#efefef` panels.
- Letter-space uppercase kickers and header links.

**Don't**
- Don't round the buttons; every measured button is 0px.
- Don't use heavy weights for large headlines — 72px and 78px headings are 300.
- Don't add colours outside the coral, orange, grey, white and black palette for UI.
- Don't add drop shadows to cards; only four elements on the page use one.
- Don't crowd sections — the measured section padding reaches 200px and more.

## Responsive Behavior

Measured at 390px: the "AI-Powered Website Creation" heading drops from 72px to 36px at weight 300; body stays 16px/300; the primary button keeps its coral fill, 15px/600 type and 50px height but its horizontal padding drops from 44px to 25px. The header still shows three visible links at 390px (five on desktop) and no menu toggle was detected; card rows were measured at up to three columns. The mobile font-size list is led by 16px, 18px, 12px and 20px, with 44px and 30px appearing for headings. The stylesheet's breakpoints include `max-width 1199px`, `max-width 959px`, `max-width 639px` and `max-width 479px` (with `min-width` counterparts at 480px, 640px, 960px and 1200px). Other reflow was not measured.

## Iteration Guide

1. Load Tilda Sans (variable, OFL) and default body to 16px/24.8px at 300 in `#000000`.
2. Hero: 46px/52px at 600 with a light-weight word for rhythm; one outlined and one coral square button.
3. Sections: uppercase letter-spaced kicker, 72–78px light headline, short centred paragraph.
4. Buttons stay square; coral `#fa8669` (hover `#ff7a5a`) for the primary, black outline or black fill for the rest.
5. Illustrations: black line art on `#efefef` with coral `#ffa282` accents.
6. Alternate white sections with black bands; keep shadows out.
7. At 390px reduce section headings to 36px and button side padding to 25px.
