---
version: alpha
name: Mailchimp
category: "Design Systems"
description: "Mailchimp.com — Cavendish Yellow (#ffe01b) pill buttons ringed in warm near-black (#231e15) on a #f5f5f5 canvas with white 24px-radius cards, Means Web serif display at 64px/400 with -1.2px tracking against Graphik Web sans at 16px, and a dark brown band with yellow-highlighted numbers."
colors:
  canvas: "#f5f5f5"
  page-body: "#ffffff"
  ink: "#231e15"
  ink-muted: "#231e15a6"
  ink-soft: "#403b3b"
  ink-teal: "#004e56"
  primary: "#ffe01b"
  on-primary: "#231e15"
  hairline: "#dbd9d2"
  surface-amber: "#e7b75f"
typography:
  display:
    fontFamily: "\"Means Web\", Georgia, Times, \"Times New Roman\", serif"
    fontSize: 64px
    fontWeight: 400
    lineHeight: 76.8px
    letterSpacing: "-1.2px"
  display-mobile:
    fontFamily: "\"Means Web\", Georgia, Times, \"Times New Roman\", serif"
    fontSize: 36px
    fontWeight: 400
    lineHeight: 46.8px
  heading:
    fontFamily: "\"Means Web\", Georgia, Times, \"Times New Roman\", serif"
    fontSize: 35.2px
    fontWeight: 400
    lineHeight: 35.2px
    letterSpacing: "-0.5px"
  body:
    fontFamily: "\"Graphik Web\", \"Helvetica Neue\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"Graphik Web\", \"Helvetica Neue\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 15px
    fontWeight: 600
    lineHeight: 24px
  button-small:
    fontFamily: "\"Graphik Web\", \"Helvetica Neue\", Helvetica, Arial, Verdana, sans-serif"
    fontSize: 13px
    fontWeight: 500
    lineHeight: 14.3px
rounded:
  xs: 2px
  sm: 3px
  md: 4px
  lg: 10px
  xl: 16px
  2xl: 24px
  3xl: 26px
  4xl: 32px
  cta: 40px
  pill: 9999px
spacing:
  s1: 2px
  s2: 2.4px
  s3: 5px
  s4: 6px
  s5: 7.2px
  s6: 8px
  s7: 10px
  s8: 12px
  s9: 12.8px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.cta}"
    padding: 12px 24px
    height: 48px
    boxShadow: rgb(35, 30, 21) 0px 0px 0px 1px
  button-small:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button-small}"
    rounded: "{rounded.3xl}"
    padding: 12px 24px
    height: 44px
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.2xl}"
    boxShadow: rgba(0, 0, 0, 0.06) 0px 4px 16px 0px
  footer:
    backgroundColor: "{colors.surface-amber}"
    textColor: "{colors.ink}"
    padding: 60px 0px
---

## Overview

Mailchimp's home page looks like a friendly print magazine for small-business owners. It combines a literary serif for display type, rounded white cards on a warm light-grey page, and a single loud accent (a sunny yellow) used for buttons and highlighted words. The thin dark ring around each yellow button and the brown-black ink color (`{colors.ink}`) give it a hand-drawn, slightly retro warmth rather than the cool blues of typical SaaS.

The capture is partly covered by a modal titled "Make Mailchimp work for you" (an industry drop-down and "top 4 things you want to achieve" checkboxes). That is a personalisation survey, not part of the brand's regular interface, and it is not documented as brand UI here; the extractor's detected h1, "Email & SMS marketing minus the learning curve", lies behind it. Below the modal the page shows a promo bar at the very top ("Save 50% for 12 months - limited time offer. Get started today."), a section titled "Recommended for your business" in the serif with an outlined "Customize my experience" pill, a two-by-two grid of white feature cards, a centered yellow "See pricing" pill, a row of customer logos (Spotify, Bodyarmor, Gap Inc., Canva, RE/MAX, The Onion), and a dark brown band with the line "Mailchimp customers generated $1.1 billion in gross revenue in just 62 days." where "$1.1 billion" is highlighted in a yellow marker block.

Each feature card pairs a short title, one sentence, a checklist of three benefits with black check circles, and a yellow circular arrow button next to a bold link like "See our content creation tools". Imagery on the right of each card is product UI and lifestyle photography inside rounded frames: an email template on a tan panel, a phone mockup, a hand holding a phone, and a collage of integration logos.

## Colors

- **Canvas** `{colors.canvas}` is the page background; `{colors.page-body}` (white) is the card and modal surface.
- **Ink** `{colors.ink}` is a warm near-black brown and carries nearly all text, button labels and button rings. `{colors.ink-muted}` is the same ink at about 65% alpha for secondary copy (the site's CSS names it `--copy-color-light`); `{colors.ink-soft}` is a slightly cooler dark used on hover borders.
- **Primary** `{colors.primary}` is Cavendish Yellow. Mailchimp's brand-assets page calls Cavendish Yellow the hero color and Peppercorn the accent color (no hex values are given there; the hex here is measured on the site, where the CSS variable `--cta-background-color` also holds it).
- **Hairline** `{colors.hairline}` is a warm light grey used for dividers and the disabled button background variable.
- **Teal ink** `{colors.ink-teal}` is a deep teal measured as text color on a small amount of copy.
- **Surface amber** `{colors.surface-amber}` is a golden ochre that the extractor measured as the footer background.

The dark band near the bottom uses the ink color itself as a background, with yellow for highlights. Selection color in the CSS is yellow at 15% alpha and the link hover background is yellow at 65%.

## Typography

Two families load: Means Web (a serif, regular and italic) for display and headings, and Graphik Web (300, 400, 500, 600) for everything else. The hero token `{typography.display}` is Means Web 64px at weight 400 on a 76.8px line with -1.2px tracking; section headings like "Recommended for your business" use `{typography.heading}` (35.2px, same family, -0.5px). Body copy is Graphik at 16px on a 28px line (`{typography.body}`); primary buttons use 15px at weight 600; smaller pills use 13px at weight 500 (`{typography.button-small}`).

The pairing is the personality: an elegant old-style serif with tight tracking set large, next to a neutral grotesque for explanation. The site's CSS uses viewport-relative heading sizes (for instance `--h1-size: 9.6vw`, `--display-text-size: 12vw`) that are capped at desktop, which is how the 64px measurement arises. Means is proprietary; Georgia (already the CSS fallback) or a transitional serif is the substitute, and Helvetica Neue or Arial for Graphik.

## Layout

Content is laid out in a centered column on the 1280px capture: the card grid spans two equal columns with a small gutter, and each card is split into text on the left and an inset image on the right. The CSS defines a spacing scale of 4, 8, 12, 16, 24, 32, 48 and 64px (`--spacing-1` to `--spacing-8`) and a module padding of 48px (24px reduced). The navigation height variable is 4.125rem. Sections alternate light grey canvas, white logo strip and a dark brown band, each with generous vertical padding.

## Elevation & Depth

Elevation is soft and warm. Cards carry a faint shadow of black at 6% alpha, 4px down with a 16px blur; larger floating surfaces use `0 15.5px 44px` at about 9% alpha, and some panels use a two-layer ink-tinted shadow (`0 8px 64px` at 6% plus `0 4px 8px` at 4%). The CSS also defines `--elevation-shadow-color` as ink at 15%. Buttons use a different device: a 1px ink ring, and on hover an extra solid ink offset of about 3.25px beneath the button (a "depth" edge, the CSS variable `--cta-depth-color`), so buttons seem to lift like a physical key.

## Shapes

Buttons are pills: 40px radius on the 48px primary button and 26px on the 44px smaller buttons (`--cta-border-radius` is 2em). Cards are 24px (`{rounded.2xl}`), with 16px and 32px also measured for images and panels; form controls such as the industry drop-down use 4px, and joined segments appear with a 24px radius on one side only. Avatars and icon buttons are circles (50%). The contrast between square-ish inputs and round buttons is deliberate.

## Components

- **Primary button** — yellow fill, `{colors.on-primary}` ink text 15px/600, 48px tall, 12px 24px padding, `{rounded.cta}`, 1px ink ring, lifting offset on hover. Example: "Sign Up".
- **Small yellow button** — same fill at 44px tall, 13px/500, radius 26px: "See pricing", "Buy Now".
- **Dark button** — ink fill with white text and the same shape, for example "Start Free Trial".
- **Outlined pill** — transparent with ink text and a 1px ink ring ("Customize my experience" next to the section title).
- **Arrow circle** — a small yellow circle with a black arrow beside a bold text link.
- **Feature card** — white, 24px radius, soft shadow, icon, title, sentence, three check-marked bullets and a link; the product image is inset at the right.
- **Highlight** — a yellow block behind key words in dark bands.
- **Header and promo bar** — a dark thin promo strip with an underlined link above the main navigation.

## Design System Architecture

The dsUrl for this brand, styleguide.mailchimp.com, is the Mailchimp Content Style Guide. I opened its welcome, Voice and Tone and Web Elements pages: it is a public writing guide (Creative Commons BY-NC 4.0, mirrored on GitHub as mailchimp/content-style-guide) and not a visual component or token system, so no tokens come from it. It does supply the voice used in this document: the voice is plainspoken, genuine, translator-like and dry-humored, tone is usually informal but clarity beats entertainment, and button copy should include verbs, use sentence case, and be concise ("Log in", "Sign up free"). It also notes the mascot Freddie smiles and winks but does not talk.

I also opened Mailchimp's brand-assets page (mailchimp.com/about/brand-assets), which says the name is one word with a big M and little c, the logo always pairs the name with the Freddie icon (winking), a reverse version exists for dark backgrounds, and Cavendish Yellow is the hero color with Peppercorn for accents.

No public component library or token documentation was found in the pages opened, so the de-facto system comes from the site's CSS custom properties: `--cta-*` variables for buttons (`--cta-background-color` #ffe01b, `--cta-text-color`, `--cta-stroke-color`, `--cta-stroke-width` 1px, `--cta-border-radius` 2em, `--cta-depth-color`, `--cta-background-color-disabled` #dbd9d2), copy size and line-height scales (`--copy-regular-size`, `--copy-large-size`, `--copy-jumbo-size`), heading size and line-height scales (`--h1-size` to `--h6-size`), spacing variables, `--link-background-hovered`, and module padding.

## Do's and Don'ts

- Do keep one yellow action per section and ring it in ink.
- Do set display text in the serif at large size with tight tracking and body in the grotesque.
- Do use warm near-black ink instead of pure black.
- Do write button labels as verbs in sentence case.
- Don't use cool blues or greys as accents; the palette is warm.
- Don't put yellow text on white; use yellow as a fill or highlighter behind ink text.
- Don't use sharp corners on buttons or cards.
- Don't make Freddie speak or alter the logo files.

## Responsive Behavior

Heading sizes are expressed in viewport units in the CSS (for example 9.6vw for h1 and 12vw for the display size) and the measured tokens drop from a 64px desktop display to a 36px mobile display on a 46.8px line. A separate reduced module padding of 24px (versus 48px) is defined. Only the desktop capture was reviewed visually, so the exact breakpoints are not stated.

## Iteration Guide

1. Start with `{colors.canvas}`, white cards and `{colors.ink}` text; use `{colors.primary}` only for actions and highlights.
2. Make buttons 48px high with 12px 24px padding, a 40px radius and a 1px ink ring.
3. Set headlines in a serif at 64px/-1.2px and 35.2px; body in a grotesque at 16px/28px.
4. Build cards at 24px radius with a faint 4px/16px shadow.
5. Write plainly, with dry humor, and let numbers be the hero in the dark band.
6. Check each color against the measured palette and the CSS variables.
