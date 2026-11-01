---
version: alpha
name: Babbel
category: "Education"
description: "Babbel's language-learning home: warm cream #f6f4ef canvas, Babbel orange #fe4d01 Sign up pills and promo bands, sunshine #ffd966 sections, near-black #151515 text and pills, Feature Text LC serif headings at 32px over Graphik Babbel LCG body at 14px/20px, 4000px pills and 4px/12px/16px corners."
colors:
  canvas: "#f6f4ef"
  page-body: "#f6f4ef"
  surface: "#ffffff"
  surface-sunshine: "#ffd966"
  ink: "#151515"
  ink-secondary: "#46443f"
  primary: "#fe4d01"
  on-primary: "#ffffff"
  primary-hover: "#e54501"
  button-dark-hover: "#34332f"
  hairline: "#e7e5e2"
typography:
  display:
    fontFamily: "\"Feature Text LC\", serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 40px
  subheading:
    fontFamily: "\"Feature Text LC\", serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  body:
    fontFamily: "\"Graphik Babbel LCG\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  button:
    fontFamily: "\"Graphik Babbel LCG\", sans-serif"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 20px
  nav:
    fontFamily: "\"Graphik Babbel LCG\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 12px
  md: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 6px 16px
    height: 36px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-dark:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.surface}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10px 24px
    height: 44px
    borderColor: "{colors.ink}"
  button-dark-hover:
    backgroundColor: "{colors.button-dark-hover}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.surface}"
    textColor: "{colors.ink}"
    height: 64px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  footer:
    textColor: "{colors.ink}"
---

# Babbel

## Overview

The measured page is `https://www.babbel.com/`, titled "Learn a Language Online - Fast & Effective | Babbel", language `en`. It is Babbel's main marketing home for English speakers: a long, warm, editorial page that asks "Which language do you want to learn?" and walks the visitor through the product, the method, content, reviews and an FAQ before a final orange call to action.

The look is warm and bookish rather than techy. The page background is a soft cream (`#f6f4ef`), headings are set in a serif (Feature Text LC) at regular weight, and body copy uses a custom Graphik cut (Graphik Babbel LCG). Colour comes in big flat bands: Babbel orange (`#fe4d01`) for the promo strip, the "Over 25 million subscriptions sold!" ribbon and the closing CTA section; sunshine yellow (`#ffd966`) for "The Proven Babbel Method" and "People love Babbel" sections. Buttons are pills — orange for Sign up in the header, near-black for "Start learning" in the content.

Imagery in the capture is lifestyle photography of real people — friends at a café table, a woman laughing on a sofa with her phone, two people on steps — overlaid with small product cards ("Talk about your favorite food", "Lesson 4 — Introduce yourself", and skill tiles "Flashcards", "Writing", "Listening", "Speaking"). The hero shows a collage of rounded photo and lesson cards. Microcopy is direct and encouraging: "Learn Fast. Talk Sooner.", "Backed by Proven Results", "Designed by Language Experts", "It's like having a private tutor in your pocket." Emphasis words inside serif headings ("*language*", "*beyond*") are set in orange italic.

## Colors

- **canvas / page-body `#f6f4ef`** — the body background and the largest background by area; 40% of the capture's pixels. Babbel's warm off-white.
- **surface `#ffffff`** — the 64px header bar, FAQ rows, language chips and cards.
- **surface-sunshine `#ffd966`** — full-width yellow sections (the method and the reviews bands).
- **ink `#151515`** — the most-read text color by far (3,594 characters) and the fill of the dark "Start learning" pills.
- **ink-secondary `#46443f`** — a warm dark grey for secondary text.
- **primary `#fe4d01`** — Babbel orange: the header "Sign up" pill (with a 1px `#fe4d01` border), the top promo strip, the subscriptions ribbon, the closing CTA band and orange emphasis words in headings.
- **on-primary `#ffffff`** — text on orange.
- **primary-hover `#e54501`** — measured hover fill and border of the Sign up pill; the "Log in" text link also turns this orange on hover.
- **button-dark-hover `#34332f`** — measured hover fill of the black "Start learning" pills.
- **hairline `#e7e5e2`** — the most common border color.

Other measured values: a `#d7d4cf` border on one element, a pale `#ffd6c4` peach background on a small element, and `#ffffff4d` translucent white. Focus rings are `2px solid rgb(21, 21, 21)` with 2px offset plus a `rgb(255, 255, 255) 0px 0px 0px 2px` box-shadow halo, so the ring reads on both cream and orange.

## Typography

Two custom families are loaded: **Feature Text LC** (400 normal and 400 italic) for headings and **Graphik Babbel LCG** (400 and 600) for everything else. Graphik carries 3,502 measured characters, Feature Text 477. Feature Text is a commercial serif and Graphik a commercial grotesque, both cut for Babbel ("LC"/"LCG" suffixes); if unavailable, substitute a regular-weight text serif for headings and a neutral grotesque such as the declared `sans-serif` fallback for body.

- **display** — Feature Text LC 32px / 400 / 40px. The h1 "Which language do you want to learn?" and the section h2s ("The effective way to learn a language online", "The Proven Babbel Method", "Babbel and beyond", "People love Babbel").
- **subheading** — Feature Text LC 24px / 400 / 32px. Feature headings: "Learn to speak a new language with confidence", "Learn Fast. Talk Sooner.", "Babbel Videos".
- **body** — Graphik Babbel LCG 14px / 400 / 20px. Paragraphs under features.
- **button** — Graphik Babbel LCG 16px / 600 / 20px. All pill labels.
- **nav** — Graphik Babbel LCG 16px / 400 / 20px. Header links ("Log in", "American English") and language links.

The FAQ heading "Frequently Asked Questions" was measured at 40px / 400, the largest size on the page. Sizes by frequency: 16px, 14px, 12px (language chips, 600), 20px, 24px, 32px, 40px. Only two weights are used: 400 and 600. Headings never go bold — hierarchy is size and the serif/sans contrast.

## Layout

At 1280px the page is 5,482px tall and built from full-width colour bands, measured top to bottom:

1. 52px orange `#fe4d01` promo strip ("Use code BOO20 for 20% off Lifetime!" with a countdown and a "Start Learning!" pill).
2. 64px white header — orange "+Babbel" logo left; "American English" selector, "Log in" and the orange "Sign up" pill right.
3. 2,086px cream band, content x=148–1064, two columns: the hero question with language chips beside a photo collage, the orange ribbon, then three alternating image/text feature rows.
4. 405px yellow band, x=190–1090, three columns: the method's three icon-led claims.
5. 545px cream band, three columns: Babbel Videos, Spanish Learning Hub, Babbel Magazine cards.
6. 368px yellow band, two columns: review carousel with circular arrow buttons.
7. 912px cream band, one column x=257–1023: the FAQ accordion of white rows with chevrons.
8. 321px orange band: "Join millions of Babbel learners breaking the language barrier every day" with white language pills.

A four-column footer (Courses, More Babbel, Company) closes the page. Measured gaps cluster at 12px, 4px, 24px, 20px, 16px, 40px, 32px and 48px; paddings at 4px, 24px, 8px, 32px, 12px, 40px and 64px.

## Elevation & Depth

No box shadows were measured on the page — the shadow list is empty. Depth is created entirely by flat colour: white cards and FAQ rows on cream, cream on yellow, white on orange, and photographs with rounded corners. The only "shadow" values are the focus halo (`rgb(255, 255, 255) 0px 0px 0px 2px`) paired with the 2px `#151515` outline. Keep surfaces flat.

## Shapes

Measured radii: `4000px` on 26 elements (every button and language chip — stored as `pill`), `4px` on 11 (FAQ rows and small elements), `12px` on 6 and `16px` on 1 (photo and media cards). The vocabulary is fully round for anything you press, softly rounded for imagery, and nearly square for list rows.

## Components

- **button-primary (Sign up)** — `#fe4d01` fill and 1px border, white Graphik 16px/600, `6px 16px` padding, 36px tall, pill. Hover: `#e54501` fill and border.
- **button-dark (Start learning / Start Your Spanish Lesson Now / Watch / Read)** — `#151515` fill and border, white 16px/600 label, `10px 24px` padding, 44px tall, pill. Hover: `#34332f`.
- **language chip** — white pill with a round flag icon and a 12px/600 `#151515` label, 36px tall ("Spanish (Mexico)", "French", "German", "More").
- **nav** — white 64px bar; "Log in" text link turns `#e54501` on hover.
- **feature card** — photograph with 12–16px corners, overlaid with small product UI tiles.
- **FAQ row** — white bar, 4px radius, bold question text and a chevron at right.
- **promo strip** — orange bar with white countdown boxes and a dark pill.

## Design System Architecture

No public Babbel design system or brand guideline was found. Babbel's About Us page (https://www.babbel.com/about-us) links to its press room (https://www.babbel.com/press/en-us), whose Assets page (https://www.babbel.com/press/en-us/downloads) offers downloads labelled Office, Studies & Research, Babbel Logo, Product, Lifestyle and Executives — no colour codes, typefaces or usage rules are published there.

The de-facto system is visible in the shipped page: the root exposes no CSS custom properties, so values are compiled into component styles. The system shows a strict palette (cream, white, yellow, orange, near-black), two bespoke font cuts with only two weights, one pill shape for every action with consistent 36px and 44px heights, and a consistent hover rule (darken the fill: orange to `#e54501`, black to `#34332f`).

## Do's and Don'ts

**Do**
- Use cream `#f6f4ef` as the page and switch to full-width `#ffd966` or `#fe4d01` bands for emphasis sections.
- Set headings in Feature Text LC at regular weight; highlight one word in orange italic.
- Use pills for every button: orange for the account action, near-black for learning actions.
- Pair lifestyle photography of real people with small in-app UI cards.
- Keep surfaces flat — no shadows.
- Use the double focus ring: 2px `#151515` outline, 2px offset, white 2px halo.

**Don't**
- Don't bold the serif headings; the measured heading weight is 400.
- Don't use pure black or grey-blue text; ink is the warm `#151515`.
- Don't place orange buttons on orange bands — on orange, chips and buttons turn white or dark.
- Don't add drop shadows to cards.
- Don't introduce more weights than 400 and 600.

## Responsive Behavior

The mobile pass at 390px recorded: no visible header links and a menu toggle labelled "Open menu"; a 64px white nav; the orange promo strip growing from 52px to 126px tall; content bands running from x=16 to x=374 (16px side gutters); at most two card columns. The h1 stayed at Feature Text 32px/400/40px, while section h2s measured 24px/400/32px (32px on desktop). Body text stayed 14px/20px and became the most-read size. The mobile primary CTA was the dark pill "Start Your Spanish Lesson Now" (`#151515`, 10px 24px, 44px). Band order matched desktop: orange, white, cream, yellow, cream, yellow. Breakpoint values were not measured.

## Iteration Guide

1. Lay down the cream `#f6f4ef` canvas, a 64px white header and an orange promo strip.
2. Load Feature Text LC (headings, 400) and Graphik Babbel LCG (400/600), or close substitutes.
3. Set the hero question at 32px/40px serif with one orange italic word, followed by white language pills.
4. Build sections as full-width bands, alternating cream and `#ffd966`; end with a `#fe4d01` band.
5. Use the two pill buttons: orange 36px for Sign up, black 44px for learning actions, each darkening on hover.
6. Round photos 12–16px, list rows 4px, everything clickable to a pill.
7. Verify there are no shadows and no weights other than 400 and 600.
