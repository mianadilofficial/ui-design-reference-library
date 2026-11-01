---
version: alpha
name: Lunch Money
category: "Fintech & Crypto"
description: "Lunch Money's site: a light #fafafa page set entirely in Avenir (60px/600 headline in #444444, 16px/27.2px body in #343434), a deep teal #2c6a64 pill CTA with a teal glow that darkens to #244f4a, lighter #44958c teal for links and 3px-radius secondary buttons, #fbb700 yellow underline accents, 5px white cards and a mint #eef4f2 footer."
colors:
  canvas: "#fafafa"
  ink: "#343434"
  primary: "#2c6a64"
  on-primary: "#ffffff"
  primary-hover: "#244f4a"
  teal: "#44958c"
  ink-heading: "#444444"
  ink-black: "#000000"
  ink-secondary: "#4f4f4f"
  ink-caption: "#bababa"
  ink-input: "#1f2a2c"
  surface-mint: "#eef4f2"
  surface-cream: "#fbf7ee"
  accent-yellow: "#fbb700"
  hairline: "#ececec"
typography:
  display:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 60px
    fontWeight: 600
    lineHeight: 66px
  heading:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 36px
    fontWeight: 600
    lineHeight: 39.6px
  subheading:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 24px
    fontWeight: 600
  body:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 27.2px
  button:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 18.4px
    fontWeight: 700
    lineHeight: 18.4px
  button-secondary:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 17.6px
    fontWeight: 600
  nav:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 600
  label-caps:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 11.2px
    fontWeight: 700
    letterSpacing: 1.792px
    textTransform: uppercase
  input:
    fontFamily: Avenir, Helvetica, sans-serif
    fontSize: 15.2px
    fontWeight: 400
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 5px
  xl: 8px
  2xl: 12px
  3xl: 15px
  4xl: 25px
  pill: 9999px
spacing:
  s1: 2.04px
  s2: 2.4px
  s3: 4.8px
  s4: 6px
  s5: 7.48px
  s6: 8px
  s7: 9px
  s8: 10px
  s9: 10.4px
  s10: 11px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 18px 38px
    height: 54px
    boxShadow: rgba(44, 106, 100, 0.45) 0px 10px 24px -12px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    boxShadow: rgba(44, 106, 100, 0.55) 0px 16px 32px -14px
  button-secondary:
    backgroundColor: "{colors.teal}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.sm}"
    padding: 11px 16px 8px
    height: 40px
  button-subscribe:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    rounded: "{rounded.xl}"
    padding: 12px 18px 8px
    height: 38px
  link:
    textColor: "{colors.teal}"
    typography: "{typography.nav}"
    padding: 2.4px
  nav:
    textColor: "{colors.teal}"
    padding: 0px 16px
  login-button:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.teal}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 10.4px 12.8px 8px
    borderColor: "{colors.teal}"
  text-input:
    textColor: "{colors.ink-input}"
    typography: "{typography.input}"
    padding: 9px 0px
    height: 36px
  testimonial-card:
    backgroundColor: "{colors.on-primary}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 27.2px 20.8px 20.8px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.surface-mint}"
    textColor: "{colors.primary}"
    typography: "{typography.label-caps}"
    border: "4px solid #44958c"
---

# Lunch Money

## Overview

Lunch Money (lunchmoney.app) bills itself as "Delightfully simple personal finance & budgeting". The desktop home page was measured at 1280px (4804px tall). A consent scrim was hidden before measuring. The mobile pass did not reach the site; see Responsive Behavior. The page is light, friendly and a bit nerdy: one family (Avenir) throughout, a teal palette, a smiling yellow coin mascot, and a real budgeting dashboard as the hero's proof.

From the top: a right-aligned teal nav (Features, Resources, Developers, Pricing, About) with an outlined "Login" button, then the hero. A cartoon coin with a smiley face sits beside the 60px headline "Delightfully simple personal finance & budgeting", the 36px line "Made for you, the modern-day spender.", a deep-teal "Get Started Free →" pill and a small note: "Try it free for 30 days! No credit card required to start. Your price is locked in for life." The heading "Trusted and loved across 30+ countries by many:" introduces a cloud of heart-marked audience labels (Individuals, Couples, Families, Digital Nomads, Cross-Border Banking Users, Engineers, Designers, Startup Founders, High-Earning Individuals, People Like You!). A full "Welcome Lenny!" dashboard screenshot follows, with accounts overview, spending breakdown bars and review checklists.

Then four icon-led feature groups (See the big picture, Surface spending habits, Simplify your finances, Improve financial awareness) with check-list items whose key words are underlined in yellow, a teal "Explore all features" button, a horizontal row of testimonial cards, "See why users choose Lunch Money", an "As seen in" press row (Product Hunt #3 Product of the Day, Jamstack Conf Web App of the Year, TechCrunch, Card Rates and others), a security statement ("All of your data in Lunch Money is encrypted at rest with AES-256…"), and a cream closing band, "A thoughtful tool for serious money clarity.", surrounded by playful illustrations (house, car, coin, suitcase, money bag, credit card) with the mascot peeking from the bottom. The page ends with a mint footer.

The voice is personal and indie: the testimonials are first-name quotes ("GARY, BUDGETING FROM UK"), and the copy is plain and helpful.

## Colors

- **Canvas — #fafafa.** The largest background area (5958).
- **White — #ffffff** (stored as `on-primary`). Cards, the dashboard frame, the Login button.
- **Surface mint — #eef4f2.** The footer (area 729).
- **Surface cream — #fbf7ee.** The closing "money clarity" band (area 554).
- **Ink — #343434.** Body text (2284 characters).
- **Ink heading — #444444.** h1, h2 and h3.
- **Ink black — #000000.** Feature-list text (794 characters).
- **Ink secondary — #4f4f4f.** Supporting copy (657 characters).
- **Ink caption — #bababa.** Testimonial attribution captions (432 characters at 12px).
- **Ink input — #1f2a2c.** Newsletter input text.
- **Primary — #2c6a64.** The deep teal of the main pill CTA, the Subscribe button, the bottom bar and the footer labels. Hover darkens it to **#244f4a**.
- **Teal — #44958c.** Nav and link text, the Login border, the 3px-radius secondary buttons and the footer's 4px top rule. Its 8% tint (#44958c14) appears as a background wash.
- **Accent yellow — #fbb700.** Underline highlights under key words (17 border uses) and the mascot's world. The "price locked in" link hovers to rgb(242, 178, 6).
- **Hairline — #ececec.** Testimonial card borders (17).

Small illustration accents measured: #68cbba, #4facc5, #e57e96.

## Typography

**Avenir** is the only measured family (5049 characters), loaded at 400, 500 and 600, with the fallback `Helvetica, sans-serif`.

Measured roles:

- **Display (h1)** — 60px / 66px, weight 600, #444444.
- **Heading (h2)** — 36px / 39.6px, weight 600 ("Made for you, the modern-day spender.").
- **Subheading (h3)** — 24px, weight 600 ("Trusted and loved across 30+ countries by many:"). The closing heading measured 38.4px.
- **Body** — 16px / 27.2px, weight 400, #343434. The 1.7 line height gives testimonials and lists a relaxed feel.
- **Primary button** — 18.4px / 18.4px, weight 700.
- **Secondary button** — 17.6px, weight 600.
- **Nav** — 16px, weight 600, teal.
- **Caps label** — 11.2px, weight 700, 1.792px tracking, uppercase (footer column headings). An 11.84px variant with 2.1312px tracking sets the eyebrow "BUILT FOR THE FINANCIALLY INTENTIONAL".
- **Input** — 15.2px, weight 400.

The rem-based sizing produces fractional pixel values: 14.4px (751 characters), 17.6px (677), 13.6px, 25.6px, 14.08px and 11.84px.

## Layout

The desktop page is a centered single column, with content spanning 70px to 1215px in the main white band. The hero is a two-part composition: the mascot on the left and the headline column (560px) on the right. Feature groups form a 2×2 grid of icon, heading and check-list. The testimonials run as a horizontal row of 285px cards that bleed off both edges (up to 5 visible). The press logos sit in a centered wrapped row. The footer is a 5-column link grid under FEATURES, COMPARE, RESOURCES and COMPANY labels, above a newsletter row and a thin #2c6a64 bottom bar (54px).

Measured spacing is fine-grained: card padding `27.2px 20.8px 20.8px` (17 uses), 16px and 24px paddings, 48px section padding. Gaps are small (10px, 24px, 6px).

## Elevation & Depth

Depth is used once, on purpose: the primary pill carries a teal glow, `rgba(44, 106, 100, 0.45) 0px 10px 24px -12px`, which grows on hover to `rgba(44, 106, 100, 0.55) 0px 16px 32px -14px`. One other shadow, `rgb(128, 128, 128) 0px 0px 5px 0px`, appears on a single element. Cards are flat, outlined by #ececec. The cartoon illustrations add their own depth with hard outlines and flat fills.

## Shapes

Measured radii: **5px** (18 elements — testimonial cards and panels), **15px** (17) and **25px** (16), **50%** (6 — round icons and avatars), **3px** (4 — the secondary teal buttons), **999px** (3 — the primary pill), **4px** (the Login button), **8px** (Subscribe), **12px**, **2px** and **80%**. The contrast between the fully round primary CTA and the nearly square secondary buttons is part of the hierarchy.

## Components

- **Primary pill.** "Get Started Free →": #2c6a64 fill, white Avenir 18.4px/700, padding `18px 38px`, 54px tall, teal glow. Hover changes the fill to #244f4a and enlarges the glow.
- **Secondary button.** "Explore all features", "See why users choose Lunch Money", "Learn more about security": #44958c fill, white 17.6px/600, 3px radius, padding `11px 16px 8px`, 40px tall.
- **Login button.** White with `1px solid #44958c`, teal 16px/600 text, 4px radius, padding `10.4px 12.8px 8px`. On hover it inverts to a teal fill with white text.
- **Nav link.** Teal #44958c 16px/600, 2.4px padding. Features and Resources show dropdown carets.
- **Check-list item.** A small round colored check icon (yellow, teal, blue or pink per group) followed by text with key words in bold and underlined in yellow.
- **Testimonial card.** White, `1px solid #ececec`, 5px radius, padding `27.2px 20.8px 20.8px`, a yellow quote badge on top, centered 16px/27.2px quote with bold highlights, and an uppercase #bababa attribution.
- **Newsletter row.** A 15.2px input (36px tall, `9px 0px` padding) and an 8px-radius #2c6a64 "Subscribe" button (38px).
- **Footer.** #eef4f2 with a `4px solid #44958c` rule, 11.2px uppercase teal column labels, and a #2c6a64 bottom bar with copyright, Privacy/Terms/API Terms and social icons.

## Design System Architecture

We could not read any public Lunch Money brand material: the footer lists a "Media Kit" link, but https://lunchmoney.app/media-kit returned HTTP 403 to our fetch. No public design-system documentation was found. The site's CSS declares no root custom properties (0 measured), so the system exists only as computed values: one family (Avenir), a two-step teal action scale (#2c6a64 primary with #244f4a hover; #44958c secondary), a yellow accent (#fbb700), warm and cool pale surfaces (#fbf7ee, #eef4f2), and rem-based sizes that compute to fractional pixels (e.g. 17.6px = 1.1rem, 27.2px padding).

## Do's and Don'ts

**Do**
- Set everything in Avenir: 600 for headings, 400 for body at 16px/27.2px.
- Use deep teal #2c6a64 for the one primary pill per view, with its teal glow.
- Use lighter teal #44958c for links, nav and secondary 3px-radius buttons.
- Underline key words in #fbb700 yellow inside feature lists and testimonials.
- Bring in the smiling coin mascot and flat, outlined money illustrations.
- Keep cards flat with #ececec borders and 5px corners.

**Don't**
- Don't make secondary buttons pills; only the main CTA is fully round.
- Don't add shadows to cards; the glow belongs to the primary CTA only.
- Don't use dark section backgrounds beyond the thin #2c6a64 bottom bar.
- Don't replace the real dashboard screenshot with abstract graphics.

## Responsive Behavior

Not measured. The 390px mobile pass reached a bot-protection interstitial instead of the site: its h1 read "lunchmoney.app" and its h2 "Performing security verification", with body text "This website uses a security service to protect ag…". None of those values describe Lunch Money's design, so no mobile tokens are recorded. Breakpoints, the mobile header and mobile type sizes were not measured.

## Iteration Guide

1. Set a #fafafa page with white panels, #343434 body and #444444 headings in Avenir.
2. Build the type: 60/66 display, 36/39.6 and 24px headings at 600, 16/27.2 body, 11.2px uppercase labels with 1.792px tracking.
3. Add the #2c6a64 primary pill (54px, glow, #244f4a hover), the #44958c 3px secondary button and the outlined Login button that inverts on hover.
4. Lay out the hero with the mascot, the feature 2×2 with yellow-underlined check lists, a horizontal testimonial strip of 5px cards, and a cream closing band with illustrations.
5. End with the #eef4f2 footer under a 4px #44958c rule and the #2c6a64 bottom bar.
6. Re-run the mobile measurement before documenting any small-screen behavior.
