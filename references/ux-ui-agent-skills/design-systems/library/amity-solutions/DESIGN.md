---
version: alpha
name: Amity Solutions
category: "Thai Brands"
description: "Amity Solutions (Thai enterprise AI software) design system: Euclid Circular B 48px headings with Inter body, white canvas, green #1dc497 8px-radius buttons, mint #e6f9f4 tints, 32px glass cards and a #121419 footer."
colors:
  canvas: "#ffffff"
  ink: "#414347"
  primary: "#1dc497"
  on-primary: "#ffffff"
  surface-partner-strip: "#fafafa"
  surface-footer: "#121419"
  ink-heading: "#22292f"
  ink-on-dark-muted: "#d0d0d1"
  ink-muted: "#9e9e9e"
  green-tint: "#e6f9f4"
  primary-hover: "#04be8c"
  card-bg: "#ffffff4d"
typography:
  display:
    fontFamily: "\"Euclid Circular B\", sans-serif"
    fontSize: 48px
    fontWeight: 600
    lineHeight: 52.8px
  display-mobile:
    fontFamily: "\"Euclid Circular B\", sans-serif"
    fontSize: 32px
    fontWeight: 600
    lineHeight: 35.2px
  heading:
    fontFamily: "\"Euclid Circular B\", sans-serif"
    fontSize: 35.2px
    fontWeight: 600
    lineHeight: 42.24px
  subheading:
    fontFamily: "\"Euclid Circular B\", sans-serif"
    fontSize: 20px
    fontWeight: 600
    lineHeight: 24px
  body:
    fontFamily: Inter, sans-serif
    fontSize: 17.6px
    fontWeight: 400
    lineHeight: 28.16px
  button:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 600
    lineHeight: 14px
  link:
    fontFamily: Inter, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    letterSpacing: 0.704px
    textTransform: uppercase
rounded:
  xs: 4px
  sm: 5.6px
  md: 8px
  lg: 12px
  xl: 16px
  2xl: 32px
spacing:
  s1: 1.6px
  s2: 2.4px
  s3: 3.2px
  s4: 6px
  s5: 8px
  s6: 12px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 12px 8px 16px
    height: 36px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 12px 8px 16px
    height: 36px
    borderColor: "{colors.primary}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.lg}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-heading}"
    padding: 40px 0px
  nav-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 12px 8px 16px
    borderColor: "{colors.primary}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-heading}"
    rounded: "{rounded.2xl}"
    padding: 40px
    borderColor: "{colors.canvas}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    padding: 64px 32px 32px
---

# Amity Solutions

## Overview
Amity Solutions is a Thai enterprise AI software company; the page title is "Amity Solutions | Generative AI & Agentic AI for Enterprise" and the hero headline reads "Empowering Enterprises with Vertical AI & Agentic AI", with "Vertical AI & Agentic AI" set in green. The body copy states "Amity Solutions is Thailand's leading AI-powered software company. We provide enterprise AI agents as a service, powered by Vertical AI". The header has the "amity solutions" wordmark with a green double-chevron mark, menus for Solutions, Products, Newsroom and Company, an ENG / TH switch and a green "Talk to Sales" button with an arrow. The hero is a frosted glass panel over a pale teal-to-white gradient beside a rendered white and silver robot mascot in a green circle with a dark speech bubble ("I'll monitor the impact and update you in a second."). Below, a grey strip titled "AMITY SOLUTIONS PRODUCTS ARE TRUSTED BY LEADING COMPANIES" scrolls logos (Mazda, Kerry Express, Gulf, AIA, SCG, Samsung, ptt Group), followed by "Our Products": three large mint-tinted cards for LIVELY, SAVVY and HANDY, each with a different 3D cat-eared astronaut mascot, a bold product name, a one-line promise, a short description and a green "Explore ..." button. The voice is enterprise, benefit-oriented and product-named.

## Colors
The brand color is green `#1dc497` (the site's own `--amity-green`), used for buttons, link text, the headline emphasis and the logo chevron; hover measured `#04be8c`. Its light tint `#e6f9f4` (`--amity-light-green`) is the hairline and card-border color and fills the mint cards. Canvas is white `#ffffff`; `#fafafa` fills the partner strip and alternate sections (`--white-smoke`); `#121419` (`--black-tint`) is the footer; `#ffffff4d` (white at 30 percent) is the glass panel and card fill. Text is `#414347` (`--grey`, 1,820 characters) for body, `#22292f` (`--text-color-dark`) for headings, `#9e9e9e` for muted text (`--grey-medium`) and `#d0d0d1` for text on the dark footer. The root variables also declare secondary accents `--yellow` `#ffcd1a`, `--light-red` `#ed6a5e`, `--alt-green` `#29cb72`, `--red` `#ff456b` and `--cyan` `#05bed2`, plus `--border-light` `#e7e7e7` and `--border-dark` `#232324`; these are declared but are not part of the measured hero and product look, so they are not promoted to tokens.

## Typography
Headlines and product names use Euclid Circular B (weights 500 and 600), body and buttons use Inter (400 to 600), and Noto Sans Thai appears for Thai text (54 characters). The h1 is Euclid Circular B 48px, weight 600, line-height 52.8px; the section heading "Our Products" is 35.2px weight 600 with 42.24px line-height; sub-headings are 20px weight 600 with 24px line-height. Body is Inter 17.6px weight 400 with 28.16px line-height (1,677 characters, the dominant size). Buttons are 14px weight 600 and uppercase-tracked links use 14px weight 500 with 0.704px letter-spacing. Euclid Circular B is a licensed typeface; Inter or Plus Jakarta Sans could stand in. Noto Sans Thai handles Thai and is open.

## Layout
The desktop capture is 1,280px wide and 5,831px tall. The header is 4.25rem high (`--_navigation---nav-size`) inside a 75rem navigation width. Content containers are published as `--_containers---container-small` 40rem, `-medium` 50rem, `-large` 65rem and `-xlarge` 75rem. The hero is two columns: a glass copy panel on the left and the mascot illustration on the right. Product cards are full-width containers that alternate image-left and image-right. Vertical spacing uses published margins (`--_margins---margin-bottom_xs` .25rem, `_s` .5rem, `_m` 1.5rem, `_l` 3rem, `_xl` 5rem). Measured paddings are 16px, 40px, 32px, 20px and 64px; gaps are 6px, 80px, 8px and 32px.

The three product blocks carry the page's whole message. LIVELY is described as "From Conversation to Resolution", a Vertical AI Contact Center Suite trained on the customer's own products, policies and workflows to resolve issues in a single conversation; SAVVY, "Turn Sales Data into Daily Revenue", is a Vertical AI Sale Suite that automates daily sales analysis and recommends Next-Best-Actions; HANDY, "Turn Retail Data into Smarter Store Decisions", is a Vertical AI Retail Companion for sales, promotions, pricing and stock. Each name is typed in capitals in the heading font, each mascot has its own finish and the layout alternates sides so the long scroll keeps a steady rhythm without adding new colors.

## Elevation & Depth
Shadows are rare: `rgba(18, 20, 25, 0.16) 0px 16px 32px 0px` (one use) and `rgba(4, 4, 32, 0.16) 4px 0px 4px 0px`. Depth is produced by translucency and gradient: the white 30 percent glass panel over the teal gradient, mint cards with a 1px `#e6f9f4` border, and the 3D rendered mascots with their own lighting. The dark speech bubble provides the strongest contrast element in the hero.

## Shapes
Containers use large rounding: 32px on the glass panel and product cards (token `rounded.2xl`), 16px on 16 elements, 12px on 10; buttons use 8px; small elements use 5.6px and 4px; images have `12px 12px 0px 0px` top rounding. The mascots sit in circles. The overall effect is soft, with buttons squarer (8px) than their containers (32px).

## Components
**button-primary**: green `#1dc497` fill and border, white text, Inter 14px weight 600, radius 8px, padding 8px 12px 8px 16px, height 36px, trailing arrow icon ("Get Started Today", 179px wide); hover fill `#04be8c`.
**button-secondary / nav-link**: same green styling for "Talk to Sales" and "Explore LIVELY".
**link**: green 14px weight 500 uppercase with 0.704px tracking, 12px radius.
**nav**: white, `#22292f` text, padding 40px 0px.
**card**: white at 30 percent, 32px radius, padding 40px, white border, `#22292f` text.
**footer**: `#121419` with white text, padding 64px 32px 32px.
The cookie preferences dialog and the Thai-language prompt shown over the capture are popups and are not brand components.

## Design System Architecture
No public design-system or brand-guideline page was found; the home page links none. The site is a Webflow build with Client-First naming (variables such as `--_typography---size--h3-font-size: clamp(1.5rem,1vw + 1rem,2.25rem)`, `--_margins---margin-bottom_xl`, `--_containers---container-large`, `--_navigation---nav-size`), alongside brand variables (`--amity-green`, `--amity-light-green`, `--text-color-dark`, `--grey`, `--grey-medium`, `--black-tint`) and greys named `--ekoai-grey`, `--ekoai-grey-text-1` and `--ekoai-grey-text-2`. Fluid type sizes use `clamp()`.

## Do's and Don'ts
- Do use `#1dc497` for every action and for the emphasized words in the headline.
- Do pair large mint-tinted cards with 3D mascot renders, one mascot per product.
- Do put the product name in uppercase Euclid Circular B and a one-line promise beneath.
- Do keep buttons at 8px radius and cards at 32px.
- Don't use the unmeasured yellow, red and cyan variables as UI colors.
- Don't show the cookie dialog as a component.
- Don't use hard shadows; the system relies on tint and translucency.

## Responsive Behavior
At the 390px mobile pass the h1 measured 32px weight 600 with 35.2px line-height in a 300px block (48px on desktop). The "Get Started Today" button measured 14px type, 36px height and 167px width (179px on desktop). Mobile font sizes by character count: 16px (1,821), 14px (364), 20px (282), 15px (193), 32px (162), 12px and 18px. Breakpoint widths and menu collapse were not measured.

## Iteration Guide
1. Start with white canvas, ink `#414347`, headings `#22292f`, green `#1dc497`, mint `#e6f9f4`, footer `#121419`.
2. Build a glass hero panel (white at 30 percent, 32px radius) beside a 3D mascot.
3. Follow with a partner-logo strip on `#fafafa` and alternating mint product cards.
4. Use Euclid Circular B for headings and Inter for body.
5. Re-run the gate after edits.
