---
version: alpha
name: Salary Hero
category: "Thai Brands"
description: "Salary Hero site at salary-hero.com: Poppins 48px bold headlines, violet #745bf7, lavender #f3f3ff, indigo #251a52 and magenta #982a96 colour blocks, white pill buttons with #542ad8 hover, 16px-radius stat tiles and a floating dark pill nav."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  primary: "#745bf7"
  on-primary: "#ffffff"
  surface-violet: "#745bf7"
  surface-lavender: "#f3f3ff"
  surface-indigo: "#251a52"
  ink-black: "#000000"
  ink-70: "#333333b3"
  ink-40: "#33333366"
  ink-error-red: "#df3a3a"
  hairline: "#33333333"
  primary-hover: "#542ad8"
  on-primary-hover: "#fafafa"
  nav-bg: "#0000004d"
  text-input-border: "#33333326"
  card-bg: "#982a96"
typography:
  display:
    fontFamily: Poppins, aktiv-grotesk-thai, sans-serif
    fontSize: 48px
    fontWeight: 700
    lineHeight: 72px
  display-mobile:
    fontFamily: Poppins, aktiv-grotesk-thai, sans-serif
    fontSize: 24px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: Poppins, aktiv-grotesk-thai, sans-serif
    fontSize: 24px
    fontWeight: 500
    lineHeight: 36px
  body:
    fontFamily: Poppins, aktiv-grotesk-thai, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Poppins, aktiv-grotesk-thai, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
rounded:
  xs: 8px
  sm: 12px
  md: 16px
  lg: 24px
  xl: 64px
  pill: 9999px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 8px
  s5: 12px
  s6: 13px
  s7: 16px
  s8: 20px
  s9: 24px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 12px 16px
    height: 48px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
    textColor: "{colors.on-primary-hover}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.body}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 0px 40px 0px 16px
    height: 56px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.ink-black}"
    rounded: "{rounded.md}"
  footer:
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    padding: 96px 0px
---

## Overview
The measured page is https://salary-hero.com/ (title "Salary Hero", lang en, scroll height 8502px), the home page of Salary Hero, an employee financial-wellness platform listed among the Thai brands (the hero text says it helps employers provide better financial outcomes for employees). A privacy popup (`dpdpa--popup` with its `dpdpa--popup-bg` scrim) was hidden by the extractor and is not documented as brand UI. The first screen is a deep indigo gradient that brightens to violet at the lower left, with a floating dark pill navigation (white wordmark "salary hero" with a dotted-heart logo, Employers, Employees, Community, About us with chevrons, an EN flag selector and a white "Partner with us" pill button). The headline "Empower Your Team with Salary Hero" is centred in white at 48px bold, with a two-line sub-paragraph and a white pill "Book demo today" button with a calendar icon, then a composition of tilted white app-screen cards (Salary on Demand with a B 10,000 amount, a My Budgeting donut chart, a Success B2,000 toast, Dime! Save and Financial Management panels). A white band follows with "200+ leading organizations that prioritize their employees" and a moving row of customer logos (Starbucks, Lazada, KFC, Pomelo, Quik, Indorama, Hertz and others). Next come an "Employee Benefits" section with a worker photograph beside three stat tiles in magenta, deep indigo and bright violet (85% of staff feel better financially, 15% retention uplift, 9.8/10 satisfaction), and a pale lavender "Features" section with four coloured tiles (Salary On Demand, Budgeting, Savings, Education). Copy is friendly and benefit-first in English, with emoji accents beside eyebrow labels.

## Colors
The palette is violet-led. Measured backgrounds by area: violet #745bf7 (3502), pale lavender #f3f3ff (2403), deep indigo #251a52 (1336) and the near-identical #251a54 (1175), white (1094) and magenta #982a96 (539). I reassigned `primary` from the generator's #ffffff (the detected white pill button's fill) to the brand violet #745bf7, the most extensive saturated surface; the white button remains a component with canvas fill and #333333 text, and its hover fill #542ad8 with #fafafa text is measured (the hover record shows rgb 85,43,216 and rgb 250,250,250 for the "Partner with us" button). Text: white (2763 characters), #333333 (929), black (553), #333333b3 (211, secondary), #33333366 (15, placeholder) and a red #df3a3a (2). The bright stat tile violet in the capture is a purple stronger than #745bf7 whose hex was not separately extracted, so it is not claimed. The page also declares WordPress block-editor variables (--wp--preset--color--vivid-purple #9b51e0, luminous-vivid-orange #ff6900) and a Swiper color #007aff; these are framework defaults and are not brand colors. Dark mode was not measured.

## Typography
Poppins (400, 500, 700) is the working family, with aktiv-grotesk-thai (700) as the Thai-script fallback in the stack `Poppins, aktiv-grotesk-thai, sans-serif`. Sizes by character weight: 16px (1697), 32px (1694), 12px (861), 24px (144), 48px (34), 10px (33). Weights: 500 (3228), 700 (810), 400 (437). Tokens: display 48px / 72px weight 700 (the hero headline); mobile display 24px / 36px weight 700; heading 24px / 36px weight 500 ("Employee Benefits"); body 16px / 24px weight 400 in #333333; button 16px / 24px weight 700. The stat numerals in the capture are much larger (the stat card role measured 80px / 80px weight 700 in white). The mobile body role measured 12px / 18px. Poppins is open source.

## Layout
Page width 1280px. The hero content is centred in a column about 923px wide; the benefits section is a two-column layout (a tall rounded photograph left, copy and stat tiles right), and the features tiles run four across. Measured paddings: 24px (16), 112px (13), 16px (13), 8px (11), 32px (11), 48px (10); 112px is the large vertical section padding and the footer padding is 96px. Alternating bands: indigo hero, white logo strip, white benefits, lavender features.

## Elevation & Depth
Shadows measured: `rgba(255,255,255,0.2) 2px 4px 12px 0px, rgba(0,0,0,0.1) 0px 0px 20px 0px` (the floating pill navigation) and a violet glow `rgba(116,91,247,0.35) 0px 0px 30px 0px`. The WordPress presets also declare `--wp--preset--shadow--deep` (12px 12px 50px rgba(0,0,0,0.4)) and an outlined hard shadow, which are variables only. Hero app cards are shown tilted with soft white shadows and slight 3D perspective. Surfaces elsewhere are flat colour blocks.

## Shapes
Radii by weight: 9999px (36, pills and circles), 16px (17, stat and feature tiles), 12px (15, inputs), 8px (4), 64px top-only (2, large footer corner), 24px (1). Tokens: xs 8px, sm 12px, md 16px, lg 24px, xl 64px, pill 9999px. The photograph in the capture has rounded corners; its radius was not separately extracted.

## Components
Button-primary: white fill, #333333 label, Poppins 16px weight 700, pill radius, padding 12px 16px, 48px high, 208px wide ("Book demo today"); hover fills violet-indigo #542ad8 with #fafafa text. Nav: a floating pill bar with translucent black fill (#0000004d) and white labels. Nav-link: Poppins 16px, 48px tall. Link: white, 16px weight 700 ("More details"). Text input: white, 12px radius, 56px high, 0 40px 0 16px padding, 1px #33333326 border. Stat card: magenta #982a96 with white 80px numeral and white caption, 16px radius, 236px by 208px. Feature tile: coloured block (violet, indigo, magenta, bright violet) with a white bold title. Footer: 64px-radius top corners, 96px vertical padding, white text.

## Design System Architecture
No public design system or brand guideline was found (no WebSearch was made; the page was measured through the extractor only). The site is a WordPress build: :root carries the standard `--wp--preset--*` variables (font-size large 36px, spacing 40 = 1rem, color presets, shadow presets), `--wp-admin-theme-color` variables and a Swiper theme color. The brand layer is therefore expressed in theme CSS rather than named tokens: violet #745bf7, indigo #251a52, magenta #982a96, lavender #f3f3ff, Poppins and pill-shaped white buttons. Class names were not inspected.

## Do's and Don'ts
Do build pages from large flat colour blocks in violet, indigo, magenta and lavender with white text on the dark ones. Do use white pill buttons with dark #333333 labels and a violet-indigo hover. Do show the product in tilted white card collages. Do keep headlines in Poppins bold and use 16px radius for tiles. Don't use WordPress preset colors (#9b51e0, #ff6900) or Swiper #007aff as brand colors. Don't document the privacy popup or its scrim as brand UI. Don't use shadows heavier than the measured 20px and 30px glows.

## Responsive Behavior
The 390px mobile pass measured: h1 24px / 36px weight 700, 342px wide; body 12px / 18px in #333333, 310px wide; the "Book demo today" button unchanged at 16px weight 700 with 12px 16px padding and pill radius on white. Column collapse and menu behaviour were not measured.

## Iteration Guide
1. Canvas #ffffff, ink #333333, violet #745bf7, lavender #f3f3ff, indigo #251a52, magenta #982a96. 2. Poppins 48px / 700 headline, 16px / 24px body. 3. White pill buttons 48px high with #542ad8 hover. 4. Stat tiles 16px radius with 80px numerals. 5. Floating dark pill navigation with a white "Partner with us" pill. 6. The bright stat violet, photo radii and dark mode were not measured.

## Notes on Measurement Scope
Values come from one desktop pass at 1280px and one mobile pass at 390px of the home page after hiding the privacy popup. Employee-facing pages, the app UI shown in the hero artwork and the Thai-language version were not measured. The extractor's card role found one circular decorative element (642px, pill radius, #982a96) and one real stat tile; the tokens use the stat tile.
