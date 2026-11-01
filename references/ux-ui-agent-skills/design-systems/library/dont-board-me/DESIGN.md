---
version: alpha
name: "Don't Board Me"
category: "Product & SaaS"
description: "Don't Board Me is a San Diego pet-sitting site with a candy-pink #f4ced3 canvas, signal-red #e33529 type in uppercase Bayon at 165px to 260px, #693413 brown ink, a #2b6786 blue counterpoint, Neue Montreal labels, square red buttons and round overlapping discs."
colors:
  canvas: "#f4ced3"
  ink: "#693413"
  primary: "#e33529"
  on-primary: "#ede2e2"
  surface-pink: "#f3c3cb"
  surface-blue: "#afd8fb"
  ink-blue: "#2b6786"
  cream: "#f6f6ed"
  surface-cream: "#f3f3e9"
  ink-black: "#000000"
  surface-footer: "#f3f0ef"
  red-bright: "#e93225"
  red-deep: "#a02b22"
  brown-light: "#925026"
  pink-dark: "#f0b5be"
  pink-light: "#f6d2d8"
  purple-light: "#e6dfe7"
  purple-mid: "#ead9ec"
  purple-soft: "#eacdef"
  blue-deep: "#124e6d"
  yellow-dark: "#dcc060"
  yellow-ultra: "#cfae3d"
  gray-warm: "#f4f4ea"
  white-soft: "#f3f3f3"
typography:
  display:
    fontFamily: Bayon
    fontSize: 165.333px
    fontWeight: 400
    lineHeight: 128.96px
    letterSpacing: "-3.30667px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Bayon
    fontSize: 66.56px
    fontWeight: 400
    lineHeight: 53.248px
    letterSpacing: "-2.6364px"
    textTransform: uppercase
  heading:
    fontFamily: Bayon
    fontSize: 260.444px
    fontWeight: 400
    lineHeight: 203.147px
    letterSpacing: "-5.20889px"
    textTransform: uppercase
  subheading:
    fontFamily: Bayon
    fontSize: 209.778px
    fontWeight: 400
    lineHeight: 163.627px
    letterSpacing: "-4.19556px"
    textTransform: uppercase
  body:
    fontFamily: Bayon
    fontSize: 37.3333px
    fontWeight: 400
    lineHeight: 37.3333px
    letterSpacing: "-0.746667px"
    textTransform: uppercase
  button:
    fontFamily: Bayon
    fontSize: 26.6667px
    fontWeight: 400
    lineHeight: 26.6667px
    letterSpacing: "-0.533333px"
    textTransform: uppercase
  label:
    fontFamily: Neue Montreal
    fontSize: 12.4444px
    fontWeight: 500
rounded:
  xs: 2.67px
  sm: 3.56px
  md: 8.89px
  lg: 133.33px
  none: 0px
  pill: 9999px
spacing:
  s1: 0.89px
  s2: 4px
  s3: 6.22px
  s4: 8px
  s5: 9.78px
  s6: 10.67px
  s7: 13.33px
  s8: 14.22px
  s9: 17.78px
  s10: 21.33px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 44px
  button-secondary:
    backgroundColor: "{colors.ink-blue}"
    textColor: "{colors.cream}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 47px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
    padding: 0px 0px 4.44444px
  card:
    backgroundColor: "{colors.surface-cream}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.pill}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

# Don't Board Me

## Overview

Don't Board Me is an in-home pet-sitting and dog-walking service serving the San Diego-Carlsbad, California metropolitan area (the footer line reads "SAN DIEGO-CARLSBAD, CA METROPOLITAN AREA", with a contact email and a phone number on the page). The measured site, `https://dontboardme.com/`, has the document title "Main" and the description "We specialize in providing reliable, compassionate, and personalized in-home pet care services tailored to meet the unique needs of your furry friends." Navigation is PRICING, ABOUT US, SERVICES, BLOG and CONTACTS with a BOOK NOW button; the page text covers the headline "A tired dog is a happy dog!", an about block, a numbered services list (dog walking), a four-step "how it works?" process (fill out the form, you are being contacted, first meeting, you receive quality service), testimonials, a "cost of walking" pricing trio, a "Have questions?" contact block and a footer with Instagram and TikTok links.

The page is built around a playful pink-and-red identity. The canvas is a candy pink (`#f4ced3`), almost all type is signal red (`#e33529`) in an enormous condensed display face (Bayon, uppercase), and secondary colors come from a large declared palette of pinks, purples, blues, creams and browns. The first thing a visitor sees is a loading intro: the red words "BOUNCE A BALL TO GET TO THE SITE" over the pink field, a bouncing yellow tennis ball, and the small line "YOU'VE LANDED ON A DOG WALKING SITE. FOLLOW OUR RULES TO KEEP YOUR DOG HAPPY" with a percentage counter ("LOADING 35%" in the mobile measurement). After it, the capture shows a line-drawn dog illustration with a red leash looping into the intro paragraph on a cream circle, an "ABOUT US" link on a pink disc, and the oversized heading "OUR SERVICES" with the tennis ball sitting on the S. Round, overlapping discs and arcs form the layout language, with pink illustrated dog artwork and small red outline icons on pale discs.

Microcopy is cheerful and in-voice: "Welcome Woof", "read a story", "share the love of your dog", "Your Trusted In-Home Pet Care Companions!". The footer credits "made by the first the last" with a link to `https://thefirstthelast.agency/`.

## Colors

The root variables declare a palette with `--c-*` names; the values below were measured or declared there.

- **Canvas `#f4ced3`**: light pink (`--c-light-pink`), the largest background area (6,921 units).
- **Surface pink `#f3c3cb`** (`--c-pink`, 5,188 units), **`#f6d2d8`** and **`#f0b5be`**: stepped pinks for discs and sections.
- **Ink `#693413`**: dark brown (`--c-dark-brown`, 420 characters), paired with **brown light `#925026`**.
- **Primary `#e33529`**: signal red (`--c-red`), the most-read text color (963 characters), the button fill, the headline color and the outline of the circular icons. **Red bright `#e93225`** and **red deep `#a02b22`** are declared variants.
- **On-primary `#ede2e2`** (`--c-gray2`): the text on red buttons.
- **Blue pair**: **surface blue `#afd8fb`** (`--c-light-blue`, 4,209 units), **ink blue `#2b6786`** (243 characters of text and the secondary button fill), declared deep blue `#124e6d`.
- **Creams and greys**: `#f6f6ed` (3,373 units, also the text on the blue button), `#f3f3e9` (2,655, the pricing card fill), `#f3f0ef` (the footer), `#f3f3f3`, `#f4f4ea`.
- **Purples**: `#e6dfe7`, `#ead9ec`, `#eacdef`; **yellows**: `#dcc060` and `#cfae3d`, declared.

The yellow of the tennis ball in the capture is image artwork and is not one of these tokens. Browser-default blue `#0000ee` (a `Times` link in the extraction) is a user-agent color and is not a brand color.

## Typography

Two measured families plus a declared third. Bayon, a heavy condensed display face, is set uppercase with negative tracking for headlines, paragraphs and buttons; Neue Montreal (weight 500) carries the small labels and navigation; the root variables also declare `HelveticaNeueCyr-Roman` and `HelveticaNeueCyr-Light`, which were not recorded in use.

- **Heading**: Bayon 260.444px / 203.147px, letter-spacing -5.20889px, the section title "OUR SERVICES".
- **Subheading**: Bayon 209.778px / 163.627px, letter-spacing -4.19556px, "HAVE QUESTIONS?".
- **Display**: Bayon 165.333px / 128.96px, letter-spacing -3.30667px, the hero h1 "A TIRED DOG IS A HAPPY DOG! YOUR TRUST...". On the 390px pass the h1 role measured 66.56px / 53.248px (the loader line) and the h2 113.36px / 88.4208px.
- **Body**: Bayon 37.3333px / 37.3333px, letter-spacing -0.746667px, uppercase intro paragraphs.
- **Button**: Bayon 26.6667px / 26.6667px, letter-spacing -0.533333px, uppercase.
- **Label**: Neue Montreal 12.4444px, weight 500, navigation and small text.

Further measured sizes: 62.2222px and 64px (numbers and sub-headings), 85.3333px, 112px, 9.77778px (330 characters) and 14.2222px. Weights are 500 (961 characters, Neue Montreal) and 400 (746, Bayon). The sizes are fractional pixel values exactly as measured.

## Layout

The desktop pass measured 1280px wide and an 11,143px page, so the site is a long scrolling story. The header measured 1280 × 65px with the nav links in 12.4444px caps; on mobile it is a menu panel. Sections are full-bleed and centered, interrupted by huge type that spans the viewport (the "OUR SERVICES" block measured 1280 × 203px), numbered items ("01", "02") at the left margin, round and arc-shaped illustration backgrounds, a horizontal pricing trio and a testimonials list with numbered handles (JaneDoe, HappyPF, Mike...). The footer measured 1280 × 261px on `#f3f0ef`. Frequent paddings are 6.22222px (21 uses), 9.77778px, 17.7778px and 28.4444px.

## Elevation & Depth

Nearly flat. One soft pink shadow, `rgba(221, 198, 202, 0.4) -3px 4px 14px 0px`, was measured on 4 elements. Depth otherwise comes from overlapping discs and arcs in different pinks, a large bottom-rounded arc shape (`0px 0px 662.222px 662.222px`), and illustration layered over color fields.

## Shapes

Round everything: 50% circles on 22 elements (icon discs, balls), a 133.333px radius on 6 elements (the rounded pricing cards and large pills), 8.88889px on 13, and small 3.55556px and 2.66667px on 4 each. The buttons themselves measured 0px radius, 44px (BOOK NOW) and 47px (TRY IT) tall, so the primary calls to action are square-cornered rectangles set against round backgrounds. Icons are red line drawings of dogs and walking motifs inside pale discs with a red outline on one.

## Components

- **Primary button** (`button-primary`): red `#e33529` fill, `#ede2e2` text, Bayon 26.6667px uppercase, 0px radius, 44px tall, 156px wide ("BOOK NOW").
- **Secondary button** (`button-secondary`): blue `#2b6786` fill, `#f6f6ed` text, 47px tall, 295px wide ("TRY IT").
- **Nav**: `#f4ced3` bar with red Neue Montreal 12.4444px caps links, padding `0px 0px 4.44444px`.
- **Pricing card** (`card`): `#f3f3e9` fill, black text, fully rounded (133.333px radius).
- **Footer**: `#f3f0ef` fill, red text.
- **Loader**: the intro screen with the bouncing ball and the "LOADING" counter is a page transition, not a reusable component.

## Design System Architecture

No public design system or brand guideline was found: the home page links only to site pages, social profiles, a WhatsApp number, legal pages and the credit link to the agency. The de-facto system is a set of 43 root custom properties: `--c-red`, `--c-red2`, `--c-dark-red`, the pink series (`--c-light-pink`, `-pink2`, `-pink3`, `--c-pink`, `--c-dark-pink`), the purples, `--c-light-blue`, `--c-dark-blue`, the yellows, the browns, the creams and greys, `--font` and `--font-light` (HelveticaNeueCyr), `--my-ease: cubic-bezier(0.24,1,0.36,1)`, `--z-modal: 510` and `--swiper-navigation-size: 44px`. Fonts loaded are Bayon, Neue Montreal and Swiper icons. Source: `https://dontboardme.com/`.

## Do's and Don'ts

- Do set headlines in Bayon uppercase at enormous sizes with tight negative tracking.
- Do use red `#e33529` on pink `#f4ced3`, and `#2b6786` blue as the single cool counterpoint.
- Do build with circles, arcs and overlapping discs; use hand-drawn dog illustration and red line icons.
- Do keep copy playful and dog-centered.
- Don't round the buttons: they measured 0px radius.
- Don't add heavy shadows; the one measured shadow is soft and pink.
- Don't use the unused declared yellows, purples and deep red as large surfaces without measuring them.
- Don't use `#0000ee` or the `Times` link style.

## Responsive Behavior

The 390px pass recorded: the h1 role at 66.56px / 53.248px (the "LOADING 35%" line), the h2 "OUR SERVICES" at 113.36px / 88.4208px in a 357 × 177px block, body text at 24.96px / 24.96px, the "BOOK NOW" button at 20.8px, 135 × 42px, and a navigation panel 390 × 48px that begins "CLOSE PRICING ABOUT US SERVICES BLOG CON" in Neue Montreal 14.56px, weight 500, with `11.44px 16.64px` padding. Breakpoints, column counts and the rest of the mobile layout were not measured.

## Iteration Guide

1. Set canvas `#f4ced3`, primary red `#e33529`, ink brown `#693413`, and load Bayon and Neue Montreal.
2. Start with a playful loader, then a hero headline at 165.333px in Bayon uppercase.
3. Compose sections with giant 260.444px titles, numbered items and round color discs.
4. Use square red 44px buttons with `#ede2e2` labels and one blue `#2b6786` secondary button.
5. Fill discs with dog line illustration and red outline icons.
6. Run `node web/scripts/verify-designs.mjs --slug=dont-board-me` after edits.
