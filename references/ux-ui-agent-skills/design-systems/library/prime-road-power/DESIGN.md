---
version: alpha
name: Prime Road Power
category: "Thai Brands"
description: "Prime Road Power (PRIME, primeroadpower.com), a Thai solar-power developer, uses a white canvas #ffffff, near-black ink #1d1d1d and a signature red #bb241d for its View more buttons and FY 2025 heading, set in Prompt with Raleway and Sarabun accents, 3px button corners and grey #f8f8f8 country cards."
colors:
  canvas: "#ffffff"
  ink: "#1d1d1d"
  primary: "#bb241d"
  on-primary: "#ffffff"
  ink-secondary: "#48494b"
  ink-tertiary: "#4e4e4e"
  ink-muted: "#707070"
  surface-muted: "#dfdfdf"
  card-bg: "#f8f8f8"
  hairline: "#ededed"
typography:
  display:
    fontFamily: Prompt, sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 26px
  display-mobile:
    fontFamily: Prompt, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 24px
  subheading:
    fontFamily: Prompt, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 19.2px
  body:
    fontFamily: Prompt, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  button:
    fontFamily: Prompt, sans-serif
    fontSize: 15px
    fontWeight: 400
    lineHeight: 15px
  nav:
    fontFamily: Prompt, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  link:
    fontFamily: Sarabun, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button-secondary:
    fontFamily: Raleway, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 22px
rounded:
  xs: 3px
  sm: 5px
  md: 100px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7.2px
  s3: 10px
  s4: 12px
  s5: 13px
  s6: 14.4px
  s7: 15px
  s8: 20px
  s9: 24px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 39px
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 48px
    borderColor: "{colors.canvas}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 13px 15px
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-muted}"
    rounded: "{rounded.sm}"
    padding: 10px
    borderColor: "{colors.hairline}"
  footer:
    textColor: "{colors.ink}"
---

## Overview

Prime Road Power Public Company Limited ("PRIME") describes itself on the measured page (`https://primeroadpower.com/`, title "Home | PRIME", language en-US, 347 visible elements, 3991px tall) as a leading renewable-energy company; its core businesses are electricity sales to the Provincial Electricity Authority (PEA), Private Power Purchase Agreements, EPC contracting and trading of energy-related products. The navigation lists solar farms in Thailand, Taiwan and Cambodia, solar rooftop, PAV, ESCO, PRIMEX, PRR and trading. The capture shows a row of certification badges above the header, a white header with a red "PRIME" wordmark, an aerial photograph of a solar farm with the mission line "To be a leader in the energy and environment business with innovation and modern technology for a better society and sustainable environment." and an outlined "Learn More" button, a row of four round social icons, an "FY 2025" block with a red-toned map of Thailand (167.61 MW), Taiwan (2.00 MW) and Cambodia (77.0 MW), a photo slider, three country cards and an embedded video area that renders as a black block.

The voice is plain English corporate copy with news headlines such as "PRIME Repays 23.14% of Debentures and Strengthens Business w…". A cookie bar (`cookie-law-info-bar`) was hidden by the extractor and is not brand UI.

## Colors

Background area by weight: white #ffffff (988), black #000000 (706, the empty video block), translucent #22222261 (614, a scrim over the hero photograph), grey #dfdfdf (394), #f8f8f8 (114), red #bb241d (18), #555555 (3). Text by characters: #1d1d1d (584), #48494b (309), #4e4e4e (275), white (212), red #bb241d (64), #707070 (22).

- **canvas #ffffff** and **ink #1d1d1d**: page and body copy.
- **primary #bb241d**: the red of the "View more" buttons (white text, on-primary #ffffff), the "FY 2025" heading and link colour; red also tints the country map.
- **ink-secondary #48494b**, **ink-tertiary #4e4e4e** (news-headline h3 colour), **ink-muted #707070** (country-card labels).
- **surface-muted #dfdfdf**, **card-bg #f8f8f8** and **hairline #ededed**: neutral grey fills and borders, the last two on the country cards.

The black block and the translucent #22222261 are the video embed and a hero scrim, and the social icons use their own network colours (the Facebook circle measures rgb(59, 89, 152)); none of these are palette colours. The generated #000000 surface token was dropped for that reason.

## Typography

**Prompt** is the main family (1227 characters), then **Raleway** (151; the secondary button role), **Sarabun** (57; link role) and **Roboto** (31). Weights: 400 (1013 characters), 500 (388), 700 (34), 600 (31). Roles: "FY 2025" 700 26px/26px (mobile 24px); news h3 500 16px/19.2px; body 400 20px/32px (mobile 16px/28px); button 400 15px/15px; nav 500 14px/20px; link Sarabun 400 16px/24px; secondary button Raleway 400 22px/22px. Most-read sizes: 20px (460), 14px (339), 16px (277), 22px (151), 12px (130), 18px (53), 25px (27). Footer copyright is 12px/18px: "COPYRIGHT © 2021 Prime Road Power Public Company Limited."

## Layout

Desktop viewport 1280px. Above the header sit certification badges aligned right; the header has a left wordmark and a 896px nav row with ABOUT US, BUSINESS, INVESTOR RELATIONS, SUSTAINABILITY, NEWS, CAREERS and a TH flag link, each with drop-down lists (Company Profile, Business Overview, Solar Farm Thailand / Taiwan / Cambodia, IR Home, Stock Price, SET Announcement and others). The body is a 1100px-wide container: a two-column split of map and text (550px columns), a three-photo slider, and a centred row of three round-photo country cards (193px wide, 197px tall). Paddings by frequency: 10px (40), 13px (7), 15px (7), 5px (6), 7.2px (4), 14.4px (4), 30px (4).

The sitemap text shows the information architecture in full: About Us (Company Profile, Message from Chairman, Vision & Mission, Board of Directors and Executives, Organization Chart, Corporate Governance with Internal Control & Risk Management, Anti-Corruption Policy, Whistleblowing System and Personal data protection policy), Business (Business Overview, Solar Farm in Thailand, Taiwan and Cambodia, Solar Rooftop, PAV, ESCO, PRIMEX, PRR, Trading), Investor Relations (IR Home, Corporate Structure, Major Shareholder, Documents for Shareholders, Stock Price, Financial Information, Debentures, Results and Reporting, SET Announcement, IR Contact), Sustainability (Environmental Management, Human Rights Management, Sustainable Development Activities, CSR), News and Careers. A skip-to-content link comes first in the document, and the footer repeats the copyright line at 12px.

## Elevation & Depth

One shadow was measured, `rgba(0, 0, 0, 0.15) 0px 0px 10px 0px` (4 elements). Surfaces otherwise rely on flat greys (#f8f8f8, #dfdfdf) with 1px #ededed borders and a dark scrim over the hero photograph.

## Shapes

Measured radii: 3px (6 elements), 50% (6), 5px (6), 999px (4), 100px (3). Buttons are 3px; the country cards are 5px with a 1px #ededed border; social icons and country photographs are circles (50%); 999px and 100px are pill shapes.

## Components

- **View more:** red #bb241d fill, white Prompt 400 15px, padding 12px 24px, 125px by 39px, radius 3px.
- **Learn More:** transparent, 1px solid #ffffff border, white Raleway 22px, padding 12px 24px, 166px by 48px, radius 3px (over the hero photograph).
- **Navigation:** Prompt 500 14px labels in #1d1d1d with padding 13px 15px, drop-down arrows.
- **Country card:** #f8f8f8, 1px #ededed border, 5px radius, 10px padding, round photograph with a flag badge and an 18px/25.2px label in #707070.
- **Social icons:** four round icons in network colours (the Facebook one 50px high).
- **Footer:** 12px copyright text in #1d1d1d.
- The cookie bar is not a component.

## Design System Architecture

No public design system or brand-guidelines page was found: the opened home page (https://primeroadpower.com/) links only to company, business, investor, sustainability, news and career pages. The measured root variables show a plugin stack rather than a brand token layer: `--wp--preset--font-size--large: 36px` and `--wp--preset--shadow--outlined`, Font Awesome 6 variables (`--fa-style-family-classic: "Font Awesome 6 Pro"`), `--swiper-theme-color`, `--direction-multiplier` and `--page-title-display`. Brand colours are set directly in component CSS.

## Do's and Don'ts

- Do keep pages white with #1d1d1d copy and red #bb241d reserved for actions and key figures.
- Do use 3px-radius buttons with 12px 24px padding.
- Do show country data with a red-toned map, capacity figures in MW and round-photo cards.
- Do set body copy in Prompt 20px/32px on desktop.
- Don't use social-network colours or the black embed area as palette.
- Don't document the cookie bar as brand UI.
- Don't add large shadows; the only measured one is 10px blur at 0.15 alpha.

## Responsive Behavior

Mobile was measured at 390px. The "FY 2025" heading drops to Prompt 700 24px/24px in a 370px block; body text drops to 16px/28px in a 370px by 308px block; the "View more" button keeps 15px, 125px by 39px, radius 3px; the nav block recorded on mobile reads "Contact Us, Terms for Service, Whistleblowing System, TH" in 14px/20px #48494b over a 370px by 120px area. Mobile size frequencies: 16px (873 characters), 14px (278), 12px (130), 18px (53), 25px (27), 15px (24). Menu behaviour, slider and card reflow at narrow widths were not measured.

## Iteration Guide

1. Start from canvas #ffffff, ink #1d1d1d, primary #bb241d.
2. Typeset in Prompt: 26px/700 headings, 20px/32px body, 14px/500 navigation; Raleway for the outlined hero button.
3. Buttons: 3px radius, 12px 24px padding, red fill with white text.
4. Cards: #f8f8f8, 5px radius, 1px #ededed border, round photograph.
5. Hero: aerial solar photograph with a dark scrim and one outlined button.
6. Measure new components before adding tokens; unmeasured states stay "not measured".
