---
version: alpha
name: "Thanachart Capital"
category: "Thai Brands"
description: "Thai holding-company investor site in PSL KandaModern and PSL Text Pro: warm near-black #231f20 on white, saturated orange #f27021 rounded panels, peach #fef1e9 sections, #e3e3e3 footer with 48px rounded top, outlined 4px-radius buttons."
colors:
  canvas: "#ffffff"
  surface-peach: "#fef1e9"
  ink: "#231f20"
  primary: "#f27021"
  surface-footer-grey: "#e3e3e3"
typography:
  display:
    fontFamily: "\"PSL KandaModern Pro\", sans-serif"
    fontSize: 110px
    fontWeight: 700
    lineHeight: 88px
  heading:
    fontFamily: "\"PSL KandaModern Extra Pro\", sans-serif"
    fontSize: 66px
    fontWeight: 400
  subheading:
    fontFamily: "\"PSL KandaModern Extra Pro\", sans-serif"
    fontSize: 38px
    fontWeight: 400
  body:
    fontFamily: "\"PSL KandaModern Extra Pro\", sans-serif"
    fontSize: 26px
    fontWeight: 400
  nav:
    fontFamily: "\"PSL Text Pro\", sans-serif"
    fontSize: 24px
    fontWeight: 400
  button-secondary:
    fontFamily: "\"PSL Text Pro\", sans-serif"
    fontSize: 24px
    fontWeight: 700
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 12px
  xl: 24px
  2xl: 32px
  3xl: 48px
  4xl: 66px
  pill: 9999px
spacing:
  s1: 1px
  s2: 4px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 24px
  s10: 25px
components:
  button-secondary:
    textColor: "{colors.primary}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 12px 24px
    height: 53px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-footer-grey}"
    textColor: "{colors.ink}"
    rounded: "{rounded.3xl}"
    padding: 48px 0px 32px
---

# Thanachart Capital

## Overview

The measured site is the English home page of Thanachart Capital Public Company Limited (TCAP) at thanachart.co.th, which redirects to `/en/home` (the document title is "Thanachart Capital Public Company Limited (TCAP)"). It is a holding-company corporate and investor-relations site. The capture is a 1280px-wide render with a modal announcement open over the hero: the page behind it is dimmed by a black scrim and a white dialog announces the Annual General Meeting of Shareholders for the year 2027 with a "More Details" link. That dialog, its scrim, the cookie icon at lower left and the "Scroll Down" tab are page chrome and are not treated as brand UI below; the scrim black `#000000` that the extractor measured is therefore dropped from the tokens.

Under the dialog the visual language is a saturated orange hero panel with rounded corners, a photographed executive figure, and a floating white navigation pill. Further down the page a large centered mission statement reads "Be a leading investment company which invests in a diverse range of businesses and is widely recognized for its stability, sustainability, and good returns", with the second half in orange. A horizontally scrolling band lists business lines in capitals (insurance, investment holding, asset-based financing) with orange rounded icon tiles, and a large orange rounded panel presents "Thanachart Group" with a logo carousel of group companies. The tone is corporate, confident and warm rather than austere-banking blue.

## Colors

Measured background areas: peach `#fef1e9` (1820, the soft section ground), orange `#f27021` (1799, hero and group panels), the dropped scrim black (1024), footer grey `#e3e3e3` (1019), white `#ffffff` (548), light grey `#f4f4f4` (427) and near-black `#231f20` (247). Text colors: white `#ffffff` (3987 characters, on orange and over the hero), warm near-black `#231f20` (2530) and orange `#f27021` (294, highlighted words and outlined button labels). Borders: white (17 uses) and orange (16).

The orange `#f27021` is the single brand accent. It fills large panels, colors highlighted phrases in headlines and drives the outlined "IR Home" button (1px solid `#f27021`). The extractor found no filled primary button, so `primary` here is an accent role, not a measured button fill. Page defaults exposed in root variables (for example Bootstrap `--bs-primary: #0d6efd`) are framework defaults and are not brand colors.

## Typography

Three PSL families are loaded: PSL KandaModern Extra Pro (400), PSL KandaModern Pro (700) and PSL Text Pro (400 and 700), all with a sans-serif fallback. By characters, PSL Text Pro carries 4558, KandaModern Extra Pro 1850 and KandaModern Pro 403. These are commercial PSL faces; if unavailable, a Thai-capable sans such as Sarabun or Noto Sans Thai is a suggestion only and was not measured.

Measured roles: the largest hero text ("All") is 110px at 700 with an 88px line height in PSL KandaModern Pro; the section heading ("Thanachart Group") is 66px at 400 in KandaModern Extra Pro; a 38px level is used for group-company titles; body paragraphs are 26px at 400; navigation and links are 24px in PSL Text Pro; the outlined button label is 24px at 700. The most frequent size overall is 24px (4730 characters), followed by 32px (611), 20px (447), 26px (352), 55px (183) and 46px (159).

## Layout

The desktop page is 6767px tall. The header is a floating rounded white pill inset from the hero panel rather than a full-bleed bar. The mission statement is centered and wide-set with inline circular photo chips between words (the 50% radius is the most common, 36 uses). Sections alternate peach ground and white; the group panel sits on peach as one large rounded orange card. The footer is a light grey block (`#e3e3e3`) whose top corners are rounded 48px, with padding `48px 0px 32px` and a height of 796px. Spacing steps recorded: 1, 4, 6, 8, 10, 12, 14, 16, 24 and 25px.

## Elevation & Depth

Shadows are soft and few: `rgba(0, 0, 0, 0.15) 0px 4px 15px 0px` (3 uses), `rgba(0, 0, 0, 0.1) 0px 4px 15px 0px` (1) and `rgba(204, 204, 204, 0.5) 0px 2px 10px 0px` (1). Depth is mainly tonal: orange on peach, white pill over the orange hero.

## Shapes

Radii are generous and varied: 4px (button), 6px, 8px, 12px, 24px (17 uses), 32px, 48px (footer top), 66px, 98px, a 120px/24px asymmetric corner on the hero panel and 50% for circles. The product of this is a soft, organic container shape language against otherwise plain typography.

## Components

- Outlined button ("IR Home"): transparent, label `#f27021` PSL Text Pro 24px 700, `1px solid #f27021`, 4px radius, padding `12px 24px`, 53px tall.
- Navigation: 24px labels in `#231f20` with chevron dropdown indicators for About Us, Thanachart Group, Investor Relations, People Power and Sustainability; EN and TH language switch and two round orange icon buttons (search and menu).
- Cards: white fill, `#231f20` text.
- Group panel: orange rounded card with a logo tab carousel.
- Footer: `#e3e3e3` with `#231f20` text.

## Design System Architecture

No public design system or brand guideline was found; the home page HTML was opened and no such link is present (the only matched link is the press-release listing). The de-facto system is Bootstrap 5 based: root variables include `--bs-primary`, `--bs-border-radius-xl: 1rem` and `--bs-border-radius-2xl: 2rem`, plus a swiper icon font and an "icomoon" icon font in the loaded-font list. Brand orange and the PSL type stack are applied in the theme layer on top of Bootstrap.

## Do's and Don'ts

Do use orange `#f27021` as large flat panels and as the highlight color within dark text. Do keep headings in PSL KandaModern at 66px and body at 26px. Do round containers heavily (24px and above). Do pair orange with the peach `#fef1e9` ground.
Don't use Bootstrap's blue `#0d6efd`. Don't use the black scrim `#000000` as a surface. Don't treat the AGM popup, the cookie icon or "Scroll Down" as brand components. Don't put dark text on orange; the measured pattern is white on orange.

## Responsive Behavior

The mobile pass (390px) recorded: h1 110px at 700 (height 132px), h2 66px (height 158px), body text 26px (height 155px) and a navigation block with the "EN" and "TH" switch at 24px (64px tall). Mobile sizes recorded include 24px, 32px, 20px, 26px, 55px, 46px, 38px and 66px. Whether the navigation collapses into a drawer, how the group panel reflows, and the hero scaling were not measured.

## Iteration Guide

1. Begin with white and peach `#fef1e9` grounds, text `#231f20`.
2. Add one orange `#f27021` panel with 24px or larger radius and white text.
3. Use PSL KandaModern for display and PSL Text Pro for navigation and buttons.
4. Round the footer top at 48px in `#e3e3e3`.
5. Re-run the extractor on any new page and record the output before adding values; discard modal scrims.

### Imagery and voice

Imagery is staged corporate photography (an executive in a suit in the hero, three colleagues around a laptop inside the announcement graphic, a hand holding an orange umbrella over a toy car in the insurance panel) cropped into rounded shapes with one sharp corner. Group-company logos sit on white and translucent-orange tiles. Microcopy is plain English corporate: "Read More" with a circled arrow, "More Details", "Scroll Down", and descriptive statements such as "TCAP is committed to achieving sustainable growth through investments in high-potential and diversified businesses". The group panel names Thanachart Insurance and describes its non-life services in a short paragraph at small white text on orange. Thai text appears only through the TH language switch, which was not measured.
