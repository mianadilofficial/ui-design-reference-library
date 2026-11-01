---
version: alpha
name: Basecamp
category: "Productivity & SaaS"
description: "Basecamp's home page by 37signals: white #ffffff and warm #fff9f5 canvas, slate ink #29353c, square-cornered #117af3 blue buttons (hover #0067de), #146dc7 underlined links, Graphik 800 headlines at 37.45px with tight tracking over Graphik 400 body at 17px, fluid percentage-based type, and soft layered card shadows."
colors:
  canvas: "#ffffff"
  surface-warm: "#fff9f5"
  surface-dark: "#0b151b"
  ink: "#29353c"
  ink-muted: "#6d767b"
  ink-tan: "#8e724e"
  link: "#146dc7"
  primary: "#117af3"
  on-primary: "#ffffff"
  primary-hover: "#0067de"
  hairline: "#ffffff26"
typography:
  display:
    fontFamily: Graphik, sans-serif
    fontSize: 37.4475px
    fontWeight: 800
    lineHeight: 41.1923px
    letterSpacing: "-0.982997px"
  display-mobile:
    fontFamily: Graphik, sans-serif
    fontSize: 27.5px
    fontWeight: 800
    lineHeight: 30.25px
    letterSpacing: "-0.721875px"
  heading:
    fontFamily: Graphik, sans-serif
    fontSize: 27.2346px
    fontWeight: 400
    lineHeight: 35.4049px
    letterSpacing: "-0.714907px"
  subheading:
    fontFamily: Graphik, sans-serif
    fontSize: 20.4259px
    fontWeight: 800
    lineHeight: 30.6389px
    letterSpacing: "-0.280856px"
  body:
    fontFamily: Graphik, sans-serif
    fontSize: 17.0216px
    fontWeight: 400
    lineHeight: 25.5324px
    letterSpacing: "-0.234047px"
  button:
    fontFamily: Graphik, sans-serif
    fontSize: 13.6173px
    fontWeight: 500
    lineHeight: 13.6173px
    letterSpacing: "-0.187238px"
  button-large:
    fontFamily: Graphik, sans-serif
    fontSize: 17.0216px
    fontWeight: 500
    lineHeight: 17.0216px
    letterSpacing: "-0.234047px"
  input:
    fontFamily: Graphik, sans-serif
    fontSize: 15.3194px
    fontWeight: 400
    lineHeight: 22.9792px
    letterSpacing: "-0.210642px"
rounded:
  none: 0px
  xs: 2.15px
  sm: 3.23px
  md: 3.95px
  lg: 4.31px
  xl: 6.81px
  2xl: 8.51px
  3xl: 12px
  4xl: 37.45px
  pill: 9999px
spacing:
  s1: 0.54px
  s2: 1.08px
  s3: 1.32px
  s4: 1.61px
  s5: 2.15px
  s6: 2.26px
  s7: 2.69px
  s8: 2.71px
  s9: 2.84px
  s10: 3.77px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12.2556px 13.6173px
    height: 33px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-signin:
    backgroundColor: "{colors.surface-warm}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 12.2556px 13.6173px
    height: 33px
  button-subscribe:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-large}"
    rounded: "{rounded.none}"
    padding: 17.0216px 18.7238px
    height: 46px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
    padding: 2.1277px 0px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    padding: 11.2981px 16.8514px 10.1491px
    height: 44px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    boxShadow: >-
      oklch(0 0 0 / 0.02) 0px 0px 0px 1px, oklch(0 0 0 / 0.1) 0px 5.44691px 54.4691px -32.6815px, oklch(0 0 0 / 0.2) 0px 10.8938px 76.2568px -38.1284px, oklch(0 0 0 / 0.3) 0px 10.8938px 32.6815px
      -43.5753px, oklch(0 0 0 / 0.4) 0px 21.7876px 43.5753px -59.916px, oklch(0 0 0 / 0.5) 0px 32.6815px 54.4691px -70.8099px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    padding: 0px 54.4691px
---

# Basecamp

## Overview

The measured page is `https://basecamp.com/`, titled simply "Basecamp", language `en`. It is the home page of 37signals' project-management product. Basecamp's About page, written by co-founder and CEO Jason Fried, tells the origin story: 37signals was a web design firm whose projects outgrew its tools, so it built its own system; clients asked to use it, and Basecamp became the business. The footer states that Basecamp is "designed, built, and backed by 37signals".

The look is plain-spoken, document-like and confident — more like a well-set letter than a SaaS landing page. The top bar is minimal: "Have an account? Sign in" at left, the Basecamp mountain logo centred, and a square blue "Want an account? Sign up free" at right. The hero places a large product screenshot ("Website Redesign Project" with Message Board, To-dos, Docs & Files, Schedule) beside a list of underlined blue links ("Pricing & sign up — A free plan + paid upgrades", "Basecamp 5 is here", "Reliable to the core", "69,665 people are working in Basecamp right now") and the h1 "Manage projects, coordinate teams, and master your company with Basecamp." followed by "Famously straightforward and easy-to-use, there's simply nothing else like it."

The page continues with a letter from Jason Fried on a white paper card with a handwritten signature ("Hey there— Tell me if this sounds about right…"); "Take a minute to meet some of our customers" with a video still of an elevated train; customer quotes with yellow highlighter marks; "How about a quick demonstration?"; "Big numbers. Highly-trusted. Rugged, reliable, ready." on a dark world map with a grid of usage stats; "Remember when companies cared about service?" with two staff video cards; a live-demo schedule; and the newsletter sign-off "Have an awesome day!" above a cloud of footer link chips. The voice is first-person, frank and a little cheeky.

## Colors

The stylesheet defines colours as OKLCH triplets (`--oklch-ink`, `--oklch-blue`, `--oklch-blue-deep`, `--oklch-theme-3` …) wrapped by `--color-*` variables; the measured sRGB values are:

- **canvas `#ffffff`** — page background; 39% of the capture.
- **surface-warm `#fff9f5`** — a warm off-white used for large backgrounds (second by area, 22% of the capture) and the "Sign in" button (`oklch(0.9856 0.0084 56.32)`, `--oklch-theme-3`).
- **surface-dark `#0b151b`** — the near-black map section.
- **ink `#29353c`** — the most-read text colour by far (`oklch(0.3209 0.0204 233.83)`), a slate blue-grey rather than black.
- **ink-muted `#6d767b`** — secondary text; **ink-tan `#8e724e`** — a warm brown accent text.
- **primary `#117af3`** — Basecamp blue (`oklch(0.5957 0.2005 256.64)`, `--oklch-blue`): the sign-up and subscribe buttons.
- **primary-hover `#0067de`** — measured hover fill (`oklch(0.5357 0.2005 256.64)`).
- **link `#146dc7`** — inline links (`--oklch-blue-deep`, `oklch(0.535 0.1602 254.08)`); links hover to the ink colour with an underline.
- **hairline `#ffffff26`** — 15% white borders on dark surfaces.

Other measured colours: text `#a42d1e` (a deep red), `#9a9fa2`, `#2377d2`, `#408552`; backgrounds `#fcf8f3`, `#fbf8f3` (paper cards), `#ffffe780` (translucent yellow highlight), `#c4ffff1a`, `#0f78d1`. The stylesheet also declares five pastel "theme" tints (`--oklch-theme-1` … `--oklch-theme-5`) and a `--color-canvas-hover` computed as `oklch(from var(--color-canvas) calc(l - 0.02) c h)` — hover darkens lightness by 0.02, which matches the measured Sign-in hover from `oklch(0.9856 …)` to `oklch(0.9656 …)`.

## Typography

One family carries the whole page: **Graphik** (400, 400 italic, 500, 500 italic, 600, 700, 800), 12,853 measured characters. The stylesheet also declares `--font-family-monaspace`, `--font-family-martian-mono` and `--font-family-sharpie` (a marker face for handwritten notes). Graphik is commercial; a neutral grotesque at the same weights is the substitute.

Type is fluid and proportional. The root sets `--font-size: max(1.25rem, 2.225vw)` and every style is a percentage of it (`--font-size-xxx-large: 137.5%`, `--font-size-medium: 75%`, `--font-size-small: 62.5%`, `--font-size-xx-small: 50%`). The measured sizes follow exactly: 37.4475px is 137.5% of 27.2346px, 20.4259px is 75%, 17.0216px is 62.5%, 13.6173px is 50%.

- **display** — Graphik 37.4475px / 800 / 41.1923px, -0.982997px. The h1 and section titles ("Take a minute to meet some of our customers").
- **heading** — Graphik 27.2346px / 400 / 35.4049px. The light subline under the h1.
- **subheading** — Graphik 20.4259px / 800 / 30.6389px. Card titles ("Durable infrastructure").
- **body** — Graphik 17.0216px / 400 / 25.5324px. The letter and paragraphs.
- **button** — Graphik 13.6173px / 500. **button-large** — 17.0216px / 500.
- **input** — Graphik 15.3194px / 400 / 22.9792px.

Letter-spacing is a consistent negative em value (`--letter-spacing: -0.01375em`, `--letter-spacing-tight: -0.02625em`). Very small sizes (5.65–9.69px) come from the scaled-down product screenshot, which is live HTML rather than an image.

## Layout

At 1280px the extractor saw a single 7,729px white band spanning x=41–1239 with up to four columns (six card columns at most in the stats grid). Three header links were visible. The capture shows a narrow, centred, document-like column for most sections — the letter, quotes, stats — with full-width media for videos and the map. Section titles are centred and bold; sublines are lighter and grey.

Spacing is expressed in ems (`--space-small: 0.5em`, `--space-medium: 1em`, `--space-neutral: 1.5em`, `--space-large: 2em`, `--space-x-large: 3em` up to `--space-xxxx-large: 6em`), so measured pixel values are fractional: gaps of 27.2346px, 40.8518px, 16.3407px; section padding of 81.7037px; footer side padding 54.4691px.

## Elevation & Depth

Basecamp uses distinctive stacked shadows with negative spread so the shadow sits low and soft under the card:

- `oklch(0 0 0 / 0.02) 0px 0px 0px 1px, oklch(0 0 0 / 0.1) 0px 5.44691px 54.4691px -32.6815px, … oklch(0 0 0 / 0.5) 0px 32.6815px 54.4691px -70.8099px` — the product screenshot card (`--box-shadow-card`).
- `oklch(0 0 0 / 0.0625) 0px 0px 0px 1px, oklch(0 0 0 / 0.04) 0px 3.40432px 27.2346px -8.5108px, …` — chips and small cards (`--box-shadow`).
- `rgba(41, 53, 60, 0.1) -0.538172px 0px 0px 0px inset, rgba(41, 53, 60, 0.1) 0px 0.538172px 0px 0px inset` — hairline cell dividers (53 elements).

The stylesheet names a whole family: `--box-shadow-lifted`, `--box-shadow-button`, `--box-shadow-edgeless`, `--box-shadow-card-soft`, `--box-shadow-intro`, `--box-shadow-play`, `--box-shadow-inset`, `--box-shadow-strong`. The letter sits on a paper-coloured card with a lifted shadow.

## Shapes

Buttons and inputs are square — 0px radius on the sign-up, sign-in and subscribe buttons and the email field. Measured radii elsewhere: `50%` (53 — avatars and play buttons), `4.30538px` (52 — small cards), `2.15269px` (36), `37.4475px` (18 — pill-shaped "99.99% uptime" stat chips), `20%` (7), `3.95234px`, `6.80864px`, `8.5108px` (the product card), `12px`. Because radii are em-based too, they scale with the type.

## Components

- **button-primary** — "Want an account? Sign up free": `#117af3`, white Graphik 13.6173px/500, `12.2556px 13.6173px`, 33px tall, square. Hover `#0067de`. Focus `2px solid` ink outline at 2px offset (measured).
- **button-signin** — "Have an account? Sign in": `#fff9f5`, ink text, same geometry; hover darkens by 0.02 lightness.
- **button-subscribe** — newsletter "Subscribe": `#117af3`, 17.0216px/500, `17.0216px 18.7238px`, 46px, square.
- **text-input** — email: ink 15.3194px, `11.2981px 16.8514px 10.1491px`, 44px, square.
- **link** — `#146dc7` underlined body text; hover to ink.
- **stat chip** — white pill (37.4475px radius) with a 1px shadow ring: "99.99% uptime".
- **card** — white product card, 8.51px radius, the stacked low shadow.
- **highlight** — translucent yellow `#ffffe780` marker behind key phrases in testimonials.
- **footer** — centred newsletter block, then a wrap of bordered link chips.

## Design System Architecture

No public Basecamp design system or brand guideline was found. The About page (https://basecamp.com/about) and https://basecamp.com/press (a marketing page, not a press kit) list no brand, logo or design resources; the only company link is https://37signals.com/policies.

The shipped CSS reveals a compact, hand-built token system of 126 root variables, written in modern CSS rather than a framework: colours stored as raw OKLCH channel triplets (`--oklch-blue: 0.5957 0.2005 256.64`) and wrapped as `--color-*` (`--color-ink`, `--color-ink-1` … `--color-ink-5`, `--color-link`, `--color-highlight`, `--color-blue-hover`, `--color-green-deep`); relative-colour hover states (`oklch(from var(--color-canvas) calc(l - 0.02) c h)`); a percentage type scale on a fluid root size; em-based spacing; and a named shadow library. There are no Tailwind or utility-framework variables.

## Do's and Don'ts

**Do**
- Write like a person: first-person letters, plain sentences, underlined links in running text.
- Use slate `#29353c` for text and `#117af3` for the one action; hover to `#0067de`.
- Keep buttons and inputs square.
- Set headlines in Graphik 800 with tight negative tracking and pair them with a light 400 subline.
- Scale type and spacing proportionally from one fluid root size.
- Use low, soft, stacked shadows under cards.

**Don't**
- Don't round buttons; the measured radius is 0.
- Don't use pure black text.
- Don't add gradients or decorative colour fields; colour is reserved for links, the CTA and highlights.
- Don't mix in a second sans-serif; Graphik covers every role.
- Don't replace links with buttons in the hero — the hero uses a list of underlined links.

## Responsive Behavior

The mobile pass at 390px recorded: one visible header link and a menu toggle labelled "Open navigation"; h1 at Graphik 27.5px / 800 / 30.25px (137.5% of a 20px root, the `1.25rem` floor of the fluid size); h2 at 20px / 400 / 26px; body at 12.5px / 18.75px; the CTA "Try Basecamp Free" at 12.5px/500, `12.5px 13.75px`, 33px, square. The mobile bands measured a 60px white header then long `#f5f9ff` (pale blue) bands from x=20 to x=370, a media band and a closing white band. Breakpoints were not measured.

## Iteration Guide

1. Set `--font-size: max(1.25rem, 2.225vw)` and size everything in percentages and ems.
2. Use white and `#fff9f5`, slate `#29353c` text, Graphik throughout.
3. Build a minimal top bar: Sign in (warm) left, logo centred, square blue Sign up right.
4. Hero: product screenshot card with the stacked low shadow, beside a list of underlined `#146dc7` links and an 800-weight h1.
5. Add a personal letter on a paper card, quotes with yellow highlights, and plain stats.
6. Keep all controls square; reserve `#117af3` for actions.
7. Close with a newsletter block and a cloud of footer link chips.
