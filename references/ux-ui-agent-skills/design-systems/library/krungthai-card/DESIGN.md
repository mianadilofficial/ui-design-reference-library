---
version: alpha
name: KTC (Krungthai Card)
category: "Thai Brands"
description: "KTC English home (ktc.co.th/en): black header and footer, white pill buttons with 24px radius and 32px height, brand red #e43d31 filled-action color, Gotham with Sukhumvit Tadmai Thai fallback at 48px display and 18px body, rounded 12px cards on a #fafafa surface."
colors:
  canvas: "#ffffff"
  ink: "#555f68"
  primary: "#e43d31"
  on-primary: "#ffffff"
  button-light: "#ffffff"
  button-ink: "#000000"
  surface-black: "#171a1d"
  ink-strong: "#272b30"
  ink-strong-alt: "#272b31"
  hairline: "#bdc3c9"
  text-input-text: "#111827"
  card-border: "#e8eaeb"
typography:
  display:
    fontFamily: "\"Gotham bold\", \"Sukhumvit Tadmai bold\", sans-serif"
    fontSize: 48px
    fontWeight: 400
    lineHeight: 60px
  display-mobile:
    fontFamily: "\"Gotham bold\", \"Sukhumvit Tadmai bold\", sans-serif"
    fontSize: 32px
    fontWeight: 400
    lineHeight: 44px
  heading:
    fontFamily: Gotham, "Sukhumvit Tadmai", sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 30px
  subheading:
    fontFamily: "\"Gotham bold\", \"Sukhumvit Tadmai bold\", sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  body:
    fontFamily: Gotham, "Sukhumvit Tadmai", sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 26px
  button:
    fontFamily: "\"Gotham bold\", \"Sukhumvit Tadmai bold\", sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  nav:
    fontFamily: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Gotham, "Sukhumvit Tadmai", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 6px
  s5: 8px
  s6: 10px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 18px
components:
  button-primary:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.button-ink}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 6px 16px
    height: 32px
    borderColor: "{colors.button-ink}"
  button-secondary:
    backgroundColor: "{colors.button-light}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.button}"
    rounded: "{rounded.lg}"
    padding: 6px 16px
    height: 32px
    borderColor: "{colors.hairline}"
  nav:
    backgroundColor: "{colors.button-ink}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.lg}"
    padding: 8px 32px 8px 48px
    height: 40px
  card:
    textColor: "{colors.canvas}"
    rounded: "{rounded.sm}"
    borderColor: "{colors.card-border}"
  footer:
    backgroundColor: "{colors.button-ink}"
    textColor: "{colors.canvas}"
---

## Overview

ktc.co.th/en is the English home page of KTC (Krungthai Card), titled "KTC: Credit Cards, Cash Card, Personal loan & Car for Cash". The measured page is 1280px wide and 5327px tall. It is a dark, high-contrast financial-product site: a black top bar carries a small red logo, six links (About KTC, Products & Services, Promotions, Articles, Customer Service), a search icon, two white pill buttons ("Apply Card", "Login") and a language toggle (TH). Below it, a night-city hero photograph of a woman in a red jacket holds a card, under the headline "Enjoy your life to the fullest" with a subline "Make your every little moment of happiness count with KTC services that bring more excitement and joy to your life."

Under the hero is a black "Products" carousel of rounded product tiles (KTC Credit Card, KTC PROUD Cash Card, KTC P BERM Car for Cash, KTC MERCHANT, MAAI BY KTC), each tile a photographic or gradient illustration of the card or device with a bold white label. A white notice card follows, titled "KTC Mobile Maintenance Announcement", with a "Read more" link. The lower part of the capture is blank because that content had not rendered when the screenshot was taken; its structure is not documented here. A consent-modal backdrop was hidden by the extractor (`consentOverlaysHidden: cmp_modal_backdrop`) and is not brand UI.

The tone is upbeat and aspirational for lifestyle finance: short imperative CTAs, product names in capitals, and lifestyle photography. Imagery splits into two kinds. The hero is a single dark, saturated photograph of a person with a card against a lit city skyline, with blue and magenta light streaks across the lower edge. The product tiles are illustrations: a fan of credit cards on a dark red field, a cash card on a teal-to-green gradient, a pickup truck and motorcycle beside stacked banknotes on a red field, a card terminal on blue, and a colorful app mark on a light tile. Every tile is a rounded rectangle with its label in bold white at the top left.

The vocabulary is functional and product-led: Apply Card, Login, Promotions, Articles, Customer Service, Read more. The language switch sits at the far right of the header as a globe icon with the label TH.

## Colors

- **Black #000000** is the header, footer and Products band background (1032 area-weight). **#171a1d** (`--color-background-invert`) is a softer near-black used for inverted blocks.
- **White #ffffff** is the canvas and the fill of the header's pill buttons. `--color-surface-background` is #fafafa, the pale surface behind the notice card.
- **Red #e43d31** is the brand action color: `--color-action-filled-container` in the root variables, and the color of 107 text characters. A tinted red background (#fdeeed) appears on 18 area-weight. A red-tinted hover state was measured on the filter chips (Login, iPhone, Samsung, Shopee, Central): text rgb(180, 34, 23) on rgb(244, 177, 173) with the border removed.
- **Text:** #555f68 (`--color-secondary`) is the most-read secondary text (1477 characters), #272b30 (`--color-text`) is the heading and strong text color, #a6aeb6 is disabled text, #e9f1fc is a pale text tint on dark.
- **Borders:** #bdc3c9 on outlined buttons, #e8eaeb (`--color-border-secondary`) on cards.
- **Input text:** #111827.

The extractor's primary CTA is the white "Apply Card" pill with black text and a 1px black border, so that role is kept as `button-primary` using the `button-light` and `button-ink` tokens, while `primary` is set to the root-variable red.

## Typography

Gotham (Regular, Bold, Light) is the Latin face and Sukhumvit Tadmai (400 and 700) is paired in every stack, so Thai text falls through to Sukhumvit Tadmai. Weights in the CSS are all 400; boldness comes from the separate "Gotham bold" and "Sukhumvit Tadmai bold" families, not font-weight.

- Display (h1): Gotham bold, 48px on 60px line-height, white over the hero. Mobile measures 32px/44px.
- Heading (h2 "Products"): Gotham 22px/30px. Mobile h2 is also 22px/30px.
- Subheading and card titles: Gotham bold 18px/26px.
- Body: Gotham 18px/26px in #272b30.
- Button and nav labels: Gotham bold 14px/20px. The unstyled nav-link fallback is the system sans stack at 16px/24px.
- Input text: Gotham 16px/24px.

Also used: 22px, 28px, 34px, 48px, 13px and 27px sizes by character count. No letter-spacing was recorded.

## Layout

The page is built on a Tailwind CSS runtime (root variables such as `--container-md`, `--container-5xl`, `--text-lg`, `--radius-3xl` and `--tw-*` are present). The Products carousel runs past the right edge of the capture, with previous and next arrow buttons at the top right of its band. Common gaps are 8px, 4px, 16px, 12px and 20px; common paddings are 16px, 8px, 25px, 12px and 4px.

## Elevation & Depth

No box shadows were measured. Depth comes from the black/white band structure, translucent dark chips (#00000066 and #464e5599 backgrounds on carousel arrow buttons), 1px borders (#e8eaeb on cards, #ffffff66 on dark) and photography.

## Shapes

Measured radii: 12px (29 elements, cards and product tiles), 24px (15, buttons and the search input), fully round (15, circular carousel arrows), 16px (9), 8px (6), top-only 12px (4) and a single bottom-left 8px (3). Buttons are 24px-radius pills at 32px height; the text input is 40px tall with a 24px radius.

## Components

- **Header button (primary role)**: white fill, black 14px Gotham bold label, 1px black border, 24px radius, 6px 16px padding, 32px tall ("Apply Card").
- **Secondary / chip button**: white fill, #272b30 label, 1px #bdc3c9 border, same 32px pill; on hover it turns #f4b1ad with #b42217 text and no border.
- **Search input**: 40px tall, 24px radius, padding 8px 32px 8px 48px (room for a leading icon).
- **Product tile**: 12px radius, full-bleed illustration, bold white title at top-left.
- **Notice card**: white, #e8eaeb border, 12px radius, an outline chat icon, bold title, 18px paragraph, "Read more" link.
- **Footer**: black, white text, contact block ("Contact KTC PHONE 02 123 5000"), download links (KTC Mobile) and site links.

## Design System Architecture

No public KTC design system or brand-guideline page was found. https://www.ktc.co.th/en was opened and has no links containing brand, identity, guideline or design; `/en/about-ktc`, `/en/about-ktc/brand` and `/en/about-ktc/corporate-identity` returned 404. The shipped CSS is a Tailwind v4 theme with 75 root variables including semantic names: `--color-text`, `--color-secondary`, `--color-secondary-inverse`, `--color-border-secondary`, `--color-background-invert`, `--color-surface-background`, `--color-disabled`, `--color-icon-inverse`, `--color-action-filled-container`, `--color-red-200`, `--color-skeleton-color`. This is a semantic-token layer on top of Tailwind utilities.

## Do's and Don'ts

- Do use black for the header, footer and Products band, and white pills for header actions.
- Do reserve red #e43d31 for filled actions and emphasis, using the red-tint hover for chips.
- Do keep buttons 32px tall with a 24px radius and cards at 12px.
- Do pair Gotham with Sukhumvit Tadmai so Thai renders in the same family.
- Don't use font-weight to create bold; use the Bold family.
- Don't add shadows: none were measured.
- Don't treat the consent modal backdrop as a brand surface.
- Don't document the unrendered lower page as designed content.

## Responsive Behavior

The 390px pass measured: h1 32px/44px, h2 22px/30px (#272b31), body 18px/26px, primary button label 14px/20px on a white pill, and the header on black with white 14px Gotham bold text. Main sizes by characters on mobile: 16px, 18px, 14px, 20px, 22px. Column counts, menu collapse behavior and carousel behavior on mobile were not measured.

## Iteration Guide

1. Use frontmatter tokens only; red is `primary`, white and black pills are `button-primary`.
2. Keep Thai text in Sukhumvit Tadmai through the existing font stacks.
3. For new product tiles, copy the 12px radius and bold white top-left label.
4. Confirm any new value in `web/data/extracted/krungthai-card.json`.
5. Re-run `node web/scripts/verify-designs.mjs --slug=krungthai-card`.
