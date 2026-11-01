---
version: alpha
name: Lime
category: "Logistics & Mobility"
description: "Lime's homepage on li.me: Poppins at weight 400 only (72px/79.2px 'Ride Green' hero, 40px/56px section heads at -0.2px, 14px/25.2px body), black #000000 ink on a white #ffffff canvas alternating with full-bleed black #000000 bands, and Lime green #00dd00 pill buttons (40px radius, 12px 24px padding, 48px tall, black label) that flip to black with white text on hover. Grey #eeeeee 20px-radius vehicle cards with product cut-outs, darker greens #00b200 and #00ab4e for eyebrows and step titles."

colors:
  primary: "#00dd00"
  on-primary: "#000000"
  primary-hover: "#000000"
  on-primary-hover: "#ffffff"
  green-200: "#00b200"
  green-step: "#00ab4e"
  green-tint: "#eafbea"
  canvas: "#ffffff"
  ink: "#000000"
  on-dark: "#ffffff"
  gray-300: "#939292"
  card: "#eeeeee"
  card-hover: "#d9d9d9"
  dark-1a: "#1a1a1a"
  dark-1e: "#1e1e1e"
  outline-white: "#ffffff4d"

typography:
  display-hero:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 72px
    fontWeight: 400
    lineHeight: 79.2px
  headline-02:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 56px
    letterSpacing: -0.2px
  news-title:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 44.8px
  headline-04:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  title-medium:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 500
    lineHeight: 30px
  eyebrow:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 22px
  body:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  body-sm:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 25.2px
  button:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 22.4px
  caption:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 12px
    fontWeight: 400
  mobile-h1:
    fontFamily: "Poppins, ui-sans-serif, system-ui, sans-serif"
    fontSize: 30px
    fontWeight: 400
    lineHeight: 33px

rounded:
  sm: 10px
  card: 20px
  button: 40px
  pill: 9999px

spacing:
  s6: 6px
  s8: 8px
  s12: 12px
  s20: 20px
  s24: 24px
  s40: 40px
  s56: 56px
  s80: 80px
  s96: 96px

components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    borderColor: "{colors.primary}"
    borderWidth: 1px
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px 24px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
    borderColor: "{colors.primary-hover}"
  button-outline-white:
    textColor: "{colors.on-dark}"
    borderColor: "{colors.outline-white}"
    borderWidth: 1px
    typography: "{typography.button}"
    rounded: "{rounded.button}"
    padding: 12px 24px
    height: 48px
  button-outline-white-hover:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  language-button:
    textColor: "{colors.on-dark}"
    borderColor: "{colors.outline-white}"
    borderWidth: 1px
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 8px
    height: 39px
  vehicle-card:
    backgroundColor: "{colors.card}"
    textColor: "{colors.ink}"
    typography: "{typography.headline-04}"
    rounded: "{rounded.card}"
    padding: 40px
    height: 405px
  vehicle-card-hover:
    backgroundColor: "{colors.card-hover}"
  carousel-dot:
    backgroundColor: "{colors.card-hover}"
    rounded: "{rounded.pill}"
    size: 10px
  carousel-dot-active:
    backgroundColor: "{colors.green-200}"
  nav:
    textColor: "{colors.on-dark}"
    typography: "{typography.body}"
    height: 112px
  link:
    textColor: "{colors.gray-300}"
    typography: "{typography.button}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-dark}"
    typography: "{typography.headline-04}"
    padding: 80px 0px 56px
---

## Overview

Lime's homepage (measured at https://www.li.me on a 1280px viewport) is a simple, photo-led consumer page. It runs full-bleed photography and alternating white and black bands, with one electric accent: Lime green `#00dd00`.

The hero is a full-viewport photograph: a rider in a corduroy jacket on a green-and-white Lime e-bike, passing a wall of ivy with orange flowers. Over it sit:
- "Ride Green" in white Poppins 400 at 72px, centered
- two pills under the headline: an outlined white "Locations" and a green "Download the App"
- a transparent header: the white wheel-and-wordmark logo with an "EN" language chip at left; About Us, Why Lime, Vehicles, Locations, Blog and Help in the middle; a green "Download App" pill at right

Then:
- a white "Our Vehicles / Discover the Gen4" section (green eyebrow, black 40px heading) with three grey rounded cards, each holding a studio cut-out of a vehicle (E-Scooter, E-Bike, Seated E-Scooter) and its name
- a black "How to Lime" band: a carousel of rounded lifestyle photos (phone in hand, unlocking a scooter, a rider with flowers in the basket), each with a green step title ("Get the app and create an account.") and 14px white instructions, plus green/grey carousel dots
- white "Our U.S. Cities" and "Our Core Principles" sections, dark "Our Latest News" cards, a "Download the App" band and a black footer

**Key Characteristics:**
- One typeface, Poppins, and essentially one weight, 400; there is no bold display type.
- Lime green `#00dd00` for every primary pill, with a black label. Hover inverts the pill to black with white text.
- White `#ffffff` canvas and black `#000000` bands in alternation; black `#000000` text on white.
- Pills at 40px radius, 48px tall; cards at 20px radius.
- Darker greens for text: `#00b200` eyebrows and active dots, `#00ab4e` step titles on black.
- Photography of real riders in daylight, and clean studio product shots.

## Colors

> Source: computed styles on https://www.li.me (extraction + recorded probes). Lime publishes no color specification (see SOURCES.json).

### Brand & Accent
- **Lime green** (`{colors.primary}` `#00dd00`): primary pills ("Download App", "Download the App", "View More"), the footer logo (`text-brand-green`), the language-chip hover text.
- **Green 200** (`{colors.green-200}` `#00b200`): eyebrows ("Our Vehicles", class `text-green-200`) and the active carousel dot.
- **Step green** (`{colors.green-step}` `#00ab4e`): step titles in the black "How to Lime" band.
- **Green tint** (`{colors.green-tint}` `#eafbea`): hover background of the language chip on a light header.

### Surface
- **Canvas** (`{colors.canvas}` `#ffffff`): page and the vehicles, cities and principles sections (`bg-white`).
- **Black** (`#000000`): "How to Lime" band and footer (`bg-black`).
- **Dark greys** (`{colors.dark-1a}` `#1a1a1a`, `{colors.dark-1e}` `#1e1e1e`): large dark background areas measured lower on the page, where the "Our Latest News" and "Download the App" headings are set in white.
- **Card grey** (`{colors.card}` `#eeeeee`): vehicle cards; hover `{colors.card-hover}` `#d9d9d9`.
- **Gray 300** (`{colors.gray-300}` `#939292`): hero placeholder background (`bg-gray-300`) behind the photo.

### Text
- **Ink** (`{colors.ink}` `#000000`): headings and text on white; also the label on green pills.
- **On dark** (`{colors.on-dark}` `#ffffff`): hero, black bands and footer. By character count white is the most-read text color (883 weighted characters), because much of the copy sits on photos and black bands.
- **Gray 300** (`#939292`): footer links (`text-gray-300 … hover:text-white`) and nav-link hover on a light header.

### Root variables
`:root` exposes a small header theme: `--text: #fff`, `--icon: #fff`, `--bg: transparent`, `--text-accent: #000`, `--icon-active: #000`, `--bg-accent: #fff`, `--text-active: #939292`.

## Typography

### Font Family
- **Poppins** (served as `Poppins, ui-sans-serif, system-ui, sans-serif`; weights 400, 600, 700 loaded) for everything. By weight, 1,455 of 1,483 measured characters are 400; 700 appears only in small amounts.
- The stylesheets also declare `LimeSerif` and `HelveticaNeue` faces. Neither rendered on the measured homepage.

### Hierarchy (measured)

| Token | Size | Weight | Line height | Tracking | Example |
|---|---|---|---|---|---|
| `display-hero` | 72px | 400 | 79.2px | normal | h1 "Ride Green" |
| `headline-02` | 40px | 400 | 56px | -0.2px | "Discover the Gen4", "How to Lime", "Our Core Principles" |
| `news-title` | 28px | 400 | 44.8px | normal | news card titles |
| `headline-04` | 20px | 400 | 32px | normal | vehicle names, step titles, footer column heads |
| `title-medium` | 20px | 500 | 30px | normal | principle titles on /why ("Safety") |
| `eyebrow` | 20px | 400 | 22px | normal | "Our Vehicles" (green) |
| `body` | 16px | 400 | 24px | normal | base text, nav |
| `body-sm` | 14px | 400 | 25.2px | normal | step instructions |
| `button` | 14px | 400 | 22.4px | normal | pill labels, footer links |
| `caption` | 12px | 400 | — | — | small print |
| `mobile-h1` | 30px | 400 | 33px | normal | h1 at 390px |

### Principles
- Hierarchy comes almost only from size and color. The one measured exception is weight 500 for the 20px principle titles on the Why Lime page.
- Headlines are short and centered (hero, vehicles) or left-aligned in the bands ("How to Lime").
- Body line-height is generous (14px on 25.2px = 1.8).
- Class names expose the scale: `headline-02`, `headline-03`, `headline-04`.

### Note on Font Substitutes
Poppins is an open-source Google Font, so no substitute is needed. Keep weight 400 for headlines.

## Layout

### Spacing System
- Measured paddings: 24px (27 uses), 12px, 6px, 40px (card padding), 80px (section padding), 20px, 14px, 8px, 96px. Measured gaps: 20px, 24px, 12px.
- Sections use `py-12 lg:py-20` (80px at desktop); the vehicles section has `pt-20 pb-14 lg:pb-24` (80px top, 96px bottom). The footer is `80px 0 56px`.

### Grid & Container
- Content width measures 1232px at a 1280px viewport (24px side gutters).
- Vehicle cards: three 397px columns with 20px gaps, each 405px tall.
- The "How to Lime" carousel bleeds off the right edge, showing a partial third card.

### Section Recipes (as seen on the homepage)
- **Hero**: full-viewport photo (`h-screen`), the header overlaid (pulled up with `-mt-[130px]` at desktop); centered 72px white headline, two pills.
- **Vehicles**: centered green eyebrow + black 40px heading; three grey cards with centered cut-outs and 20px names.
- **How to Lime**: black band, left 40px heading, carousel of 20px-rounded photos with green step titles, 14px white copy and dot pagination.
- **Cities / Principles**: white sections with a 40px heading.
- **News**: dark section (white headings) with photo cards (20px radius) and 28px titles; green "View More" pill.
- **Footer**: black, green logo, column heads in 20px white, links in 14px grey.

### Whitespace Philosophy
Large photos and big empty margins around short headlines. Each section has one heading and one row of content.

### Voice & Microcopy
- Short, friendly imperatives: "Ride Green", "Discover the Gen4", "How to Lime" (the brand used as a verb).
- Step copy is plain and practical: "Starting a ride is easy - scan the QR code on an e-scooter or e-bike to get on your way", "Follow local traffic rules … of course, enjoy the ride!".
- Every section ends in an app download prompt.

### Motion
- Sections and headings fade in on scroll (classes `intersect-fadein`, `intersect-fadeup`, `delay-150`).
- Hover changes: green pills invert to black/white; outlined white pills fill white with black text; vehicle cards darken from `#eeeeee` to `#d9d9d9`; nav links fade to `#939292` on a light header.

### Image Direction
- Lifestyle: diverse riders in natural daylight, warm tones, the green vehicle always in frame.
- Product: clean studio cut-outs of the Gen4 scooter and bike on the light-grey card.
- Close-ups of hands using the app on a phone.

### Inner Pages (measured on https://www.li.me/why)
The Why Lime page (extracted as `lime--why`) shows the system away from the hero:
- **Light header**: white bar with a hairline bottom rule, the logo in black, the "EN" chip on a `rgba(0,0,0,0.05)` fill with 10px radius, black 14px links and the same green "Download App" pill.
- **Sub-navigation**: a second row with the page name "Why Lime" in bold at left and anchor links (Safety, Sustainability, Community, Innovation) in `#939292` at right.
- **Intro split**: "What Drives Us" at 40px/56px/-0.2px on the left, a 14px/25.2px paragraph on the right (571px wide).
- **Feature photo**: a full-container image with 20px radius.
- **Principles grid**: green eyebrow "What Separates Us" over "Our Core Principles", then a two-column grid of edge-to-edge square-cornered photos, each with a centered 20px/30px weight-500 title and a 14px caption ("Foundational to our service", "Commitment to carbon-free").
- Backgrounds by area: white, then `#1e1e1e` and black dark sections lower down; text is again mostly white by character count.
- Gaps of 20px and 40px, paddings of 24px, 56px, 80px and 96px recur, matching the homepage.

## Elevation & Depth

| Level | Treatment | Use |
|---|---|---|
| 0 | flat | all sections, cards and buttons |

No box shadows were measured on homepage elements. Depth comes from photography and from the contrast between white and black bands.

### Decorative Depth
Vehicle cut-outs carry their own soft studio shadow inside the image; the cards themselves are flat grey.

## Shapes

### Border Radius Scale
| Token | Value | Use |
|---|---|---|
| `{rounded.sm}` | 10px | language chip ("EN") |
| `{rounded.card}` | 20px | vehicle cards, carousel and news photos (23 elements) |
| `{rounded.button}` | 40px | every pill button (48px tall, so fully round) |
| `{rounded.pill}` | 9999px | carousel dots (18 elements) |

### Geometry
Everything is rounded; there are no square buttons or cards. The logo's wheel/lime-slice mark is circular.

## Components

### Buttons
- **Primary** (`button-primary`): `#00dd00` fill, 1px `#00dd00` border, black Poppins 14px/22.4px 400 label, padding `12px 24px`, 48px tall, 40px radius (class `button button-sm button-green`).
- **Primary hover** (`button-primary-hover`): fill and border black `#000000`, label white (measured).
- **Outline white** (`button-outline-white`): transparent with a 1px `rgba(255,255,255,0.3)` border and white label ("Locations" over the hero). Hover: white fill, black label.

### States (measured hover)
| Element | Before | After |
|---|---|---|
| Green pill ("Download App") | `#00dd00` fill and border, black text | `#000000` fill and border, white text |
| Outline white pill ("Locations") | transparent, white text, `rgba(255,255,255,0.3)` border | `#ffffff` fill, black text |
| Vehicle card | `#eeeeee` | `#d9d9d9` |
| Language chip (light header) | `rgba(0,0,0,0.05)` fill, black text | `#eafbea` fill, `#00dd00` text |
| Nav link (light header) | black | `#939292` |
| Footer link | `#939292` | white (Tailwind `hover:text-white` class) |

No focus, pressed or disabled states were measured, so none are specified.

### Cards & Containers
- **Vehicle card** (`vehicle-card`): `#eeeeee`, 20px radius, 40px padding, 405px tall, centered product cut-out and 20px/32px name. Hover: `#d9d9d9`.
- **Photo card** (carousel, news): image with 20px radius, text below (green 20px step title or white 28px news title).

### Navigation
- **Nav** (`nav`): 112px transparent header over the hero; white logo, "EN" language chip (10px radius, 1px `rgba(255,255,255,0.3)` border, 8px padding), 16px white links, green "Download App" pill.
- On a light header state, links turn black and fade to `#939292` on hover; the language chip shows a `rgba(0,0,0,0.05)` fill and hovers to `#eafbea` with green text.

### Carousel
- **Dots** (`carousel-dot`): 10px circles, `#d9d9d9` inactive, `#00b200` active.

### Links
Footer links (`link`): 14px/22.4px `#939292`, hover white.

### Footer
`footer`: black, padding `80px 0 56px`, green Lime logo, column headings ("Join Us", "About") in 20px/32px white, 14px grey links.

No form inputs appear on the homepage, so none are specified.

## Design System Architecture

Lime publishes no public design system, token package, component library or brand-guideline page. The official press page (https://www.li.me/press) links a press kit, and the press portal (https://lime.lingoapp.com/p/Press-Portal-djQ2JP) offers only photography, B-roll and logo assets. The searches are listed in SOURCES.json.

What the live site shows (the de-facto system):
- **Token architecture.** The site is built with Tailwind CSS (`--tw-ring-*`, `--tw-shadow` variables; utilities like `py-12 lg:py-20`, `rounded-2xl`, `w-2.5 h-2.5 rounded-full`). Custom theme names appear in class names: `text-brand-green` (`#00dd00`), `text-green-200` (`#00b200`), `bg-gray-300` / `text-gray-300` (`#939292`). The header theme uses a few CSS variables (`--text`, `--icon`, `--bg`, `--text-accent`, `--icon-active`, `--bg-accent`, `--text-active`), swapped between a transparent-over-photo state and a light state.
- **Theming.** No dark/light mode switch; sections set their own background (`bg-white`, `bg-black`).
- **Type & spacing.** Custom type classes `headline-02` (40px/56px), `headline-03`, `headline-04` (20px/32px), all Poppins 400. Spacing follows Tailwind's 4px scale (12, 20, 24, 40, 56, 80, 96px).
- **Component model.** Button classes `button button-sm button-green` and `button-outline-white`; cards are Tailwind-composed links (`flex items-center rounded-2xl transition`). Entrance animation utilities: `intersect-fadein`, `intersect-fadeup`.
- **Accessibility.** No published rules. Observed: 48px pills, and black (not white) text on the `#00dd00` green.
- **Delivery.** No public packages or Figma kit found.

## Do's and Don'ts

### Do
- Use Poppins 400 for everything, including the 72px hero.
- Use `#00dd00` green pills with black labels, inverting to black/white on hover.
- Alternate white and black full-bleed bands.
- Round pills to 40px and cards and photos to 20px.
- Put the green on actions and small accents (eyebrows, dots); keep text black or white.
- Show real riders and clean product cut-outs.

### Don't
- Don't use bold headlines.
- Don't put white text on the bright green; the site uses black.
- Don't add drop shadows to cards.
- Don't use square corners.
- Don't flood sections with green backgrounds; green is reserved for actions, logo and small text accents.

## Responsive Behavior

### Breakpoints
Tailwind defaults are used (`md:` and `lg:` prefixes appear in class names: `md:headline-04`, `lg:py-20`, `lg:-mt-[130px]` vs `-mt-[84px]`). At 390px (measured):
- h1 goes from 72px/79.2px to 30px/33px.
- Body copy stays 14px/25.2px.
- Most-set mobile sizes: 14px, 16px, 28px, 30px, 12px, 20px.

### Touch Targets
Pills stay 48px tall.

### Collapsing Strategy
- Section padding classes are `py-12 lg:py-20`; 80px was measured at desktop, the mobile value was not measured.
- The header overlap changes from 130px to 84px (`-mt-[84px] lg:-mt-[130px]`).
- Footer column heads use `text-3xl lg:headline-04`, so they are larger on mobile.

### Image Behavior
The hero stays full-screen (`h-screen`); carousels keep swiping horizontally.

## Iteration Guide

1. White canvas, Poppins 400, black text; 14px/25.2px for body copy.
2. Full-screen photo hero with a transparent header, white 72px/79.2px headline, an outlined white pill and a green pill.
3. Sections: green 20px eyebrow (`#00b200`), black 40px/56px/-0.2px heading, 80px vertical padding.
4. Vehicle cards: `#eeeeee`, 20px radius, 40px padding, product cut-out, hover `#d9d9d9`.
5. Black band with a photo carousel, green step titles (`#00ab4e`) and 10px dots.
6. Buttons: `#00dd00`, black 14px label, `12px 24px`, 48px, 40px radius; hover black with white text.
7. Black footer, `80px 0 56px`, green logo, 20px white heads, 14px `#939292` links.

### Common Mistakes When Recreating Lime
- Making headlines bold; Lime uses 400 throughout.
- Using white text on green pills; it is black.
- Using a softer lime/chartreuse; the shipped green is `#00dd00`.
- Adding shadows or borders to cards; they are flat grey.
- Forgetting the black bands; the page alternates white and black.
