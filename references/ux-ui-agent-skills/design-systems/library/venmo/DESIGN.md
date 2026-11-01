---
version: alpha
name: Venmo
category: "Fintech & Crypto"
description: "Venmo home page (venmo.com), measured — white #ffffff canvas with Venmo blue #4bb4ff and Stash purple #3f34ee feature bands, black #000000 pill buttons (1000px radius) with white text, #f5f5f7 grey pills hovering to #e1e1e3, Venmo Sans 60.29px/700 headlines with tight negative tracking, 14px/400 body, 32px-radius cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  body-bg: "#f1efea"
  venmo-blue: "#4bb4ff"
  stash-purple: "#3f34ee"
  card-bg: "#f5f5f7"
  card-hover: "#e1e1e3"
typography:
  display:
    fontFamily: "\"Venmo Sans\""
    fontSize: 60.2857px
    fontWeight: 700
    lineHeight: 57.2714px
    letterSpacing: "-1.80857px"
  display-mobile:
    fontFamily: "\"Venmo Sans\""
    fontSize: 44px
    fontWeight: 700
    lineHeight: 41.8px
    letterSpacing: "-1.32px"
  heading:
    fontFamily: "\"Venmo Sans\""
    fontSize: 50px
    fontWeight: 700
    lineHeight: 47.5px
    letterSpacing: "-1.5px"
  subheading:
    fontFamily: "\"Venmo Sans\""
    fontSize: 41.7143px
    fontWeight: 700
    lineHeight: 39.6286px
    letterSpacing: "-1.25143px"
  body:
    fontFamily: "\"Venmo Sans\""
    fontSize: 17.1429px
    fontWeight: 400
    lineHeight: 23.1429px
    letterSpacing: "-0.171429px"
  button:
    fontFamily: "\"Venmo Sans\""
    fontSize: 16.5714px
    fontWeight: 500
    lineHeight: 18.2857px
  link:
    fontFamily: "\"Venmo Sans\""
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.9px
    letterSpacing: "-0.14px"
rounded:
  xs: 8px
  sm: 12px
  md: 32px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 22.4px
  s7: 22.85px
  s8: 24px
  s9: 26.72px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 50px
  button-light:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 50px
  button-grey:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 16px 20px
    height: 50px
  button-grey-hover:
    backgroundColor: "{colors.card-hover}"
  link:
    textColor: "{colors.on-primary}"
    typography: "{typography.link}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
---

# Venmo

## Overview

This file describes the Venmo marketing home page at `https://venmo.com/` (title: "Pay Friends | Payments App | Venmo", `lang="en-US"`), measured at 1,280px and 390px.

The page is bright, friendly and product-led. A slim white header carries the blue venmo wordmark at the left, three dropdowns (Send & Receive, Pay with Venmo, Venmo for Business) and, on the right, Help Center, a light "Log in" pill and a black "Sign up" pill. The hero is a large rounded panel in Venmo blue with the centred black headline "Venmo everything", a one-line subline ("Send money to friends, pay businesses, and check out with Venmo when you shop.") and a wide rounded photograph of friends sharing food, with a QR code at its right edge. Below, the page walks through features one at a time on white: a phone mock-up beside "Send. Split. Gift." with a grey "See how it works" pill; "More ways to pay" centred; then Debit, Credit and Checkout blocks, each pairing a large card or phone image with a 41.7px title, a short paragraph and a black pill button (Get the Venmo Debit Card, Apply now, Explore ways to pay). A full-width purple band introduces Stash rewards ("Your rewards era starts with Stash") with a white "Learn about Stash" pill and a collage of app screens and cards. Then come "Purchase crypto" and "Grow a business" on white with grey pills, a blue "Get the app" band with a 105.8px headline, a QR code and a phone, and a white footer with dense legal copy.

The voice is casual and direct: "Venmo everything", "Send. Split. Gift.", "Pay friends. Schedule payments. Split group expenses." Imagery is people, phones and cards — playful, saturated and photographed on bright colour.

## Colors

- **Canvas `#ffffff`** — the page background (14,879 area units).
- **Ink `#000000`** — all text on light ground (5,030 characters).
- **Primary `#000000`** — the button fill: Sign up, Get the Venmo Debit Card, Apply now, Explore ways to pay. Venmo's call to action is black, not blue.
- **On-primary `#ffffff`** — button labels on black and all text on the purple band (491 white characters).
- **Venmo blue `#4bb4ff`** — the hero panel and the "Get the app" band (2,237 area units); the wordmark and card art use the same blue family.
- **Stash purple `#3f34ee`** — the Stash rewards band (1,235 area units).
- **Body background `#f1efea`** — the body element's own fill, a warm off-white measured on the body (5,120 area units).
- **Card background `#f5f5f7`** — grey pill buttons ("See how it works", "Learn more about crypto", "See ways to get paid") and light cards (942 area units).
- **Card hover `#e1e1e3`** — measured hover fill of the grey pill.

## Typography

One family carries the entire page: **Venmo Sans**, loaded at 400, 500 and 700 (5,521 characters). A PayPalOpen-Regular face is also loaded but not used in measured text.

- **Display — 60.2857px / 700 / 57.2714px, −1.80857px tracking.** "Venmo everything".
- **Heading — 50px / 700 / 47.5px, −1.5px.** "Send. Split. Gift.", "More ways to pay", "Your rewards era starts with Stash".
- **Subheading — 41.7143px / 700 / 39.6286px, −1.25143px.** "Debit", "Credit", "Checkout", "Purchase crypto", "Grow a business".
- **Body — 17.1429px / 400 / 23.1429px, −0.171429px.** Feature paragraphs.
- **Button — 16.5714px / 500 / 18.2857px.**
- **Link — 14px / 500 / 18.9px, −0.14px.** Small links and disclosures. 14px is the most common size overall (4,132 characters, mostly the legal footer).

The "Get the app" headline is 105.786px at weight 400 with −6.34717px tracking. Every size has negative tracking equal to about −1% at body sizes and −3% at headline sizes; the measured pairs are listed above. The odd fractional sizes are computed values from fluid type.

**Substitute:** Venmo Sans is proprietary. No fallback stack is declared in the computed font-family; a geometric grotesk at the same weights and negative tracking is the closest stand-in.

## Layout

The desktop page measured 8,659px tall. Bands: a long white section (0–4,334px) with the blue hero panel and the feature blocks, the purple Stash band (964px), a white crypto/business section (1,443px), the blue "Get the app" band (909px) and the white footer (1,099px). Feature blocks pair an image and a text column side by side, at most two columns. Gaps: 24px (18), 16px (16), 4px (10), 22.85px (9), 20px; paddings: 8px (22), 20px (10), 16px (9), 67.2px and 72px (6 each). The extractor counted no visible header links, because the header items are dropdown buttons.

## Elevation & Depth

Mostly flat. One real shadow was measured: `rgba(0, 0, 0, 0.14) 4px 4px 28px 6px`, on a single floating element; the others are transparent placeholders. Depth comes from coloured panels, tilted card renders and layered phone screenshots that overlap within the image collages.

## Shapes

Round and soft. Buttons are pills (computed 1000px, 7 elements). Cards and panels use 32px (13 elements) — the hero panel, the Stash collage tiles and the feature cards. Smaller elements use 12px and 8px; 50% circles appear on avatars and icons, and a 3.35544e+07px pill on four elements.

## Components

- **Primary button** — black fill, white Venmo Sans 16.57px/500 label, 50px tall, `16px 20px` padding, pill.
- **Light button** — white fill, black label ("Learn about Stash" on purple), same size.
- **Grey button** — `#f5f5f7` fill, black label, same size; measured hover fill `#e1e1e3`.
- **Header** — white with the blue wordmark, dropdown triggers, a light "Log in" pill and a black "Sign up" pill.
- **Hero panel** — Venmo blue, 32px corners, centred headline and a wide rounded photograph.
- **Feature block** — 41.7px/700 title, 17.14px body with footnote superscripts, black pill.
- **Footer** — white, wordmark, link row and long 14px legal text.

## Design System Architecture

No public Venmo design system or brand-guideline page was found. `https://venmo.com/about/` redirected to `https://account.venmo.com/about/` and then to `https://venmo.com/about/us/`, which describes the company and links only to PayPal investor relations, jobs, a contact form and an app download. The shipped page exposes 17 `:root` variables and none are colour tokens, so the visible system is hard-coded per component: one typeface (Venmo Sans) with fluid sizes and proportional negative tracking, black pills for actions, grey pills for secondary actions, 32px-radius panels, and two signature band colours, blue `#4bb4ff` and purple `#3f34ee`.

## Do's and Don'ts

**Do**
- Use black pill buttons with white labels for the main action.
- Set headlines in Venmo Sans 700 with tight negative tracking.
- Put the hero on a rounded Venmo-blue panel with people photography.
- Present one feature at a time: image, 41.7px title, short paragraph, pill.
- Use `#f5f5f7` pills for secondary actions and darken to `#e1e1e3` on hover.

**Don't**
- Don't make the primary button blue.
- Don't use square corners on buttons or panels.
- Don't use positive letter-spacing.
- Don't add heavy shadows to cards.

## Responsive Behavior

Measured at 390px: the header band is 71px; the hero headline is 44px/700/41.8px with −1.32px tracking; section headings drop to 38px/700/36.1px and feature titles to 33px; the body paragraph is 16px/400/21.6px; the "Get the app" headline is 67.5px. A full-width black "Download the Venmo app" bar was measured as the mobile primary button: 48px tall, 390px wide, 16px/700 white text, 0px radius (it appears as a 48px `#000000` band at y=6,257px). Mobile bands, all single column: header, hero media (608px), white feature section (2,950px), purple Stash band (805px), white crypto/business section, blue app band (547px), the black app bar and the white footer. Mobile font sizes by frequency: 14px, 16px, 18.5px, 38px, 33px, 12px, 44px, 67.5px. Breakpoint widths and menu behaviour: not measured.

## Iteration Guide

1. Start with a white canvas, black Venmo Sans text and negative tracking on every size.
2. Add a white header with a blue wordmark and a black "Sign up" pill.
3. Build the hero as a 32px-radius `#4bb4ff` panel with a 60px/700 headline and a rounded photo.
4. Stack feature blocks: image beside a 41.7px title, paragraph and black 50px pill.
5. Insert one full-width `#3f34ee` band for rewards with a white pill.
6. Close with a `#4bb4ff` "Get the app" band and a white legal footer.
7. Keep every new button a pill and every new panel at 32px.
