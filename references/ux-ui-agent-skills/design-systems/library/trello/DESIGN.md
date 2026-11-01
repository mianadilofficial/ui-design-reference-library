---
version: alpha
name: Trello
category: "Productivity & SaaS"
description: "Trello's marketing home (an Atlassian product): white #ffffff and #f4f5f7 grey bands, Atlassian blue #0065ff buttons (#0747a6 hover) and a full-width blue section, #091e42 navy text, #172b4d navy footer, Charlie Display 500 headlines at 48px/60px over Charlie Text 20px/30px body, square 0px header CTA and 4.8px form corners."
colors:
  canvas: "#ffffff"
  surface-grey: "#f4f5f7"
  surface-subtle: "#fafbfc"
  surface-banner: "#deebff"
  card-bg: "#efefef"
  ink: "#091e42"
  navy: "#172b4d"
  ink-black: "#000000"
  on-dark-muted: "#ffffffcc"
  link: "#0052cc"
  primary: "#0065ff"
  on-primary: "#ffffff"
  primary-hover: "#0747a6"
  text-input-border: "#dfe1e6"
typography:
  display:
    fontFamily: "\"Charlie Display\", sans-serif"
    fontSize: 48px
    fontWeight: 500
    lineHeight: 60px
  display-mobile:
    fontFamily: "\"Charlie Display\", sans-serif"
    fontSize: 32px
    fontWeight: 500
    lineHeight: 40px
  heading:
    fontFamily: "\"Charlie Display\", sans-serif"
    fontSize: 36px
    fontWeight: 700
    lineHeight: 48px
  eyebrow:
    fontFamily: "\"Charlie Display\", sans-serif"
    fontSize: 16px
    fontWeight: 500
    lineHeight: 20px
    textTransform: uppercase
  body:
    fontFamily: "\"Charlie Text\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  button:
    fontFamily: "\"Charlie Text\", sans-serif"
    fontSize: 19.2px
    fontWeight: 400
    lineHeight: 28.8px
  small:
    fontFamily: "\"Charlie Text\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 18px
  link:
    fontFamily: "\"Charlie Text\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  none: 0px
  xs: 4.8px
  sm: 8px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 8px
  s4: 11.2px
  s5: 12px
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
    rounded: "{rounded.none}"
    padding: 8px 24px
    height: 60px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-signup:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 11.2px 16px 12.8px
    height: 50px
    borderColor: "{colors.primary}"
  button-outline:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.link}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 11.2px 16px 12.8px
    height: 50px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.link}"
    typography: "{typography.link}"
  nav-link:
    textColor: "{colors.navy}"
    typography: "{typography.link}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
    typography: "{typography.link}"
    rounded: "{rounded.xs}"
    padding: 11.2px 12px 12.8px
    height: 50px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.xs}"
    padding: 16px 16px 16px 24px
    boxShadow: rgba(9, 30, 66, 0.15) 0px 8px 16px 0px
  feature-card:
    backgroundColor: "{colors.surface-subtle}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 24px
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.on-primary}"
    typography: "{typography.small}"
---

# Trello

## Overview

The measured page is `https://trello.com/`, titled "Capture, organize, and tackle your to-dos from anywhere", language `en`. Trello's About page states that it began at Fog Creek Software in 2010–2011, spun off as Trello, Inc. in 2014 and was acquired by Atlassian in 2017; the header logo carries a small "ATLASSIAN" label above the Trello wordmark and the footer reads "Copyright © 2026 Atlassian".

The look is Atlassian's: bright, clear, blue-led and businesslike, with friendly product illustration. A white header with the Trello logo, menus (Features, Solutions, Plans, Pricing, Resources), "Log in" and a square, full-height blue "Get Trello for free" block at the right edge; a pale blue announcement bar ("Accelerate your teams' work with AI features now available for all Premium and Enterprise!"); then a grey hero with the headline at left and an email field plus "Sign up - it's free!" button, and a hand holding a phone showing the Trello Inbox on the right, framed by orange and purple geometric shapes, hand-drawn arrows and floating app icons (Teams, Slack, Gmail).

Below, "TRELLO 101" explains Inbox, Boards and Planner with a tabbed list beside a colourful board screenshot (purple Inbox column, blue board). A full-width Atlassian-blue section "From message to action" holds two white cards ("EMAIL MAGIC", "MESSAGE APP SORCERY"). "WORK SMARTER" shows three feature cards (Integrations, Automation, Card mirroring) with outlined buttons, followed by a testimonial with a deep-blue stat panel ("75% of organizations report that Trello delivers value to their business within 30 days"), a customer logo row (Visa, Coinbase, John Deere, Zoom, Grand Hyatt, Fender), a final email sign-up and a navy footer. The microcopy is playful: "Drag, drop, get it done", "Message app sorcery", "leave the robots to do the rest".

## Colors

- **canvas `#ffffff`** — page and header background; 46% of the capture.
- **surface-grey `#f4f5f7`** — hero and Trello 101 bands (Atlassian N20).
- **surface-banner `#deebff`** — the announcement bar (Atlassian B50).
- **surface-subtle `#fafbfc`** — feature cards (N10). **card-bg `#efefef`** — the active Inbox tab card.
- **ink `#091e42`** — the most-read text colour: headings and body (Atlassian's darkest navy).
- **navy `#172b4d`** — nav link text and the footer background (N500 `22,43,77` / the body text colour).
- **primary `#0065ff`** — Atlassian blue (B300): CTAs, the "From message to action" band, outlined-button borders, nav hover text.
- **primary-hover `#0747a6`** — button hover (measured) and the deep-blue stat panel; links also hover to it.
- **link `#0052cc`** — inline links and outlined-button labels (B400).
- **on-primary `#ffffff`**, **on-dark-muted `#ffffffcc`** — text on blue and navy.
- **ink-black `#000000`** — input text and card body.
- **text-input-border `#dfe1e6`** — email input border.

A further measured border is `#505f79`. The illustration accents (orange, purple, green inbox labels) live in images and SVGs.

## Typography

Trello uses Atlassian's brand typefaces **Charlie Display** (500, 700) and **Charlie Text** (400, 700). Charlie Text carries 3,099 measured characters, Charlie Display 416. The stylesheet declares them with Atlassian's system-font fallback: `--bxp-charlie-text-font-family: "Charlie Text", var(--atlassian-recommended-system-fonts)` where the fallback is `-apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, "Fira Sans", "Droid Sans", "Helvetica Neue", sans-serif`. Charlie is proprietary; use that system stack as the substitute.

- **display** — Charlie Display 48px / 500 / 60px. The h1.
- **heading** — Charlie Display 36px / 700 / 48px. "From message to action"; the stat panel measured 36px / 500.
- **eyebrow** — Charlie Display 16px / 500 / 20px, uppercase. "EMAIL MAGIC", "MESSAGE APP SORCERY".
- **body** — Charlie Text 20px / 400 / 30px. Paragraphs.
- **button** — Charlie Text 19.2px / 400 / 28.8px. The header CTA.
- **link** — Charlie Text 16px / 400 / 24px. Links, sign-up button, input.
- **small** — Charlie Text 12px / 400 / 18px. Footer legal links.

Feature card titles measured 24px / 500 / 32px. Sizes in use: 16px, 20px, 24px, 36px, 12px, 48px, 19.2px; weights 400, 500, 700. Button labels are regular weight (400), not bold.

## Layout

At 1280px the page is 4,866px tall. Measured bands: 60px white header (x=8–1264); 84px `#deebff` banner; 364px `#f4f5f7` hero (content x=86–624 — the text column); a 57px media strip; 388px grey continuation; a 796px white "Trello 101" band (x=86–719); a 932px `#0065ff` band (x=150–1130) with two white cards; and a 1,600px white band (x=86–1170) with three feature cards, the testimonial, logos and the final sign-up, then the navy footer.

Spacing is 16px-based: paddings 16px (75 uses), 32px, 24px, 11.2px, 8px, 20px, 40px, with 52px, 80px and 128px for section padding; gaps 16px, 4px, 24px, 8px, 32px. Inputs and sign-up buttons use the 11.2px/12.8px vertical padding pair (0.7rem/0.8rem).

## Elevation & Depth

Two shadows were measured, both tinted with navy `rgba(9, 30, 66, …)`, Atlassian style:

- `rgba(9, 30, 66, 0.15) 0px 8px 16px 0px` — the active tab card (Inbox) and the white cards on the blue band.
- `rgba(9, 30, 66, 0.2) 0px 3px 5px 0px, rgba(9, 30, 66, 0.31) 0px 0px 1px 0px` — raised elements such as the feature cards.

Focus states are measured: the header CTA gets `2px solid rgb(9, 30, 66)` outline at 1px offset; the sign-up button gets the same outline plus `rgba(122, 134, 154, 0.5) 0px 0px 0px 3.2px`.

## Shapes

Measured radii: `4.8px` on 13 elements (inputs, sign-up and outlined buttons, tab cards), `8px` on 8 (feature cards and screenshot frames), `50%` on 5 (round carousel and play buttons). The header "Get Trello for free" CTA has no radius at all — a square block flush to the header's right edge.

## Components

- **button-primary** — header "Get Trello for free": `#0065ff`, white Charlie Text 19.2px/400, `8px 24px` padding, 60px tall (the full header height), 0px radius. Hover: `#0747a6` with underline.
- **button-signup** — "Sign up - it's free!": `#0065ff` fill and 1px border, white 16px/400, `11.2px 16px 12.8px`, 50px tall, 4.8px radius; hover `#0747a6`.
- **button-outline** — "Browse Integrations", "Get to know Automation", "Compare plans": white fill, 1px `#0065ff` border, `#0052cc` label, same geometry.
- **text-input** — "Email": white, 1px `#dfe1e6`, 4.8px, 50px tall, paired inline with the sign-up button.
- **nav** — `#172b4d` 16px items with chevrons; hover turns text `#0065ff`.
- **tab card** — Inbox / Boards / Planner list; the active item is a `#efefef` card with a blue left accent bar, 4.8px radius, `16px 16px 16px 24px` padding and the 8px/16px shadow.
- **feature-card** — `#fafbfc`, 8px radius, 24px padding, an illustrated icon, a 24px/500 title, body and an outlined button.
- **footer** — `#172b4d` with white text, Trello logo, four link columns, language selector and social icons.

## Design System Architecture

Trello is built on the Atlassian design language. Trello's About page (https://trello.com/about) points to https://www.atlassian.design/ for "logos, screenshots, branding guidelines, and other assets" and offers a logo ZIP. The Atlassian Design site (https://atlassian.design/) is the public home of Atlassian's design system, with Foundations for Color, Typography, Accessibility, Tokens and Iconography.

The shipped page shows that heritage directly: 83 root variables, mostly Atlassian's legacy colour palette as RGB triplets named by hue and step — `--color-B300-rgb: 0,101,255` (the primary), `--color-B400-rgb: 0,82,204` (links), `--color-B50-rgb: 222,235,255` (banner), `--color-N20-rgb: 244,245,247` (grey band), `--color-N500-rgb: 22,43,77`, plus R, G, Y, O, P, T and M ramps. A product-specific `--color-trelloblue-rgb: 0,121,191` sits alongside. Fonts are tokenised as `--bxp-charlie-display-font-family` and `--bxp-charlie-text-font-family`, and website-wide variables use a `--wac-` prefix (`--wac-color-heading: #101214`, `--wac-color-body: #292a2e`).

## Do's and Don'ts

**Do**
- Use Atlassian blue `#0065ff` for actions and for one full-width feature band; hover to `#0747a6`.
- Set text in navy (`#091e42`, `#172b4d`), not black.
- Use Charlie Display 500 for headlines and Charlie Text 400 for body and buttons.
- Pair an email input with the blue sign-up button, both 50px tall with 4.8px corners.
- Use navy-tinted shadows (`rgba(9, 30, 66, …)`).
- Illustrate with real Trello UI plus playful shapes, arrows and app icons.

**Don't**
- Don't bold button labels; measured weight is 400.
- Don't round the header CTA; it is a square block.
- Don't use pill buttons for CTAs; pills appear only as round icon buttons.
- Don't use the stylesheet's `--color-trelloblue-rgb` (`0,121,191`) as the CTA colour; the measured primary is `#0065ff`.
- Don't use neutral grey shadows.

## Responsive Behavior

The mobile pass at 390px recorded: a menu toggle labelled "Navigation" and a 70px white nav (the nav text measured 20px / 400 / 30px in `#172b4d`); h1 at Charlie Display 32px / 500 / 40px; h2 at 24px / 700 / 32px; body unchanged at 20px / 30px; the primary CTA "Get Trello for free" at 20px with 16px padding, 62px tall, 0px radius. Bands ran from x=16 to x=374: white nav, a 122px `#deebff` banner, a 949px grey hero, white, a 280px blue band and media. 12px became the most-read size on mobile. Breakpoints were not measured.

## Iteration Guide

1. Start with a white 60px header and a square `#0065ff` "Get Trello for free" block at the right.
2. Load Charlie Display/Text or the Atlassian system stack; headline 48px/60px at 500.
3. Use `#f4f5f7` for the hero, `#deebff` for a thin announcement bar, `#0065ff` for one feature band.
4. Build the email + sign-up pair: 50px, 4.8px corners, `#dfe1e6` input border.
5. Feature cards: `#fafbfc`, 8px radius, 24px padding, outlined `#0065ff` buttons with `#0052cc` labels.
6. Shadows from `rgba(9, 30, 66, …)` only; navy `#172b4d` footer.
7. Take any new colour from the Atlassian ramps (`--color-B*`, `--color-N*`).
