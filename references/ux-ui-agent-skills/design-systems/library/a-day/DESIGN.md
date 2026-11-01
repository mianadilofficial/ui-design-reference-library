---
version: alpha
name: a day magazine
category: "Thai Brands"
description: "Thai lifestyle magazine and media brand (Day Poets Company Limited) measured at adaymagazine.com - warm off-white page #efeee7, black ink #000000, orange accent #fe552c, a single geometric Thai-Latin family lineSeedSansTH from 400 to 800, pill-shaped 9999px outline buttons, and full-bleed photographic tiles."
colors:
  canvas: "#ffffff"
  page-largest: "#efeee7"
  ink: "#000000"
  primary: "#fe552c"
  on-primary: "#9ac2ff"
  ink-soft: "#1a1a1ae6"
  on-dark-strong: "#ffffffd9"
  on-dark-soft: "#ffffffcc"
  ink-muted: "#6a7282"
  button-primary-bg: "#9ac2ff26"
typography:
  display:
    fontFamily: lineSeedSansTH, "lineSeedSansTH Fallback"
    fontSize: 38px
    fontWeight: 700
    lineHeight: 43.7px
  display-mobile:
    fontFamily: lineSeedSansTH, "lineSeedSansTH Fallback"
    fontSize: 24px
    fontWeight: 700
    lineHeight: 27.6px
  heading:
    fontFamily: lineSeedSansTH, "lineSeedSansTH Fallback"
    fontSize: 20px
    fontWeight: 800
    lineHeight: 26.6667px
  subheading:
    fontFamily: lineSeedSansTH, "lineSeedSansTH Fallback"
    fontSize: 60.992px
    fontWeight: 700
    lineHeight: 83.864px
  body:
    fontFamily: lineSeedSansTH, "lineSeedSansTH Fallback"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: lineSeedSansTH, "lineSeedSansTH Fallback"
    fontSize: 11px
    fontWeight: 500
    lineHeight: 16.5px
    letterSpacing: 0.88px
    textTransform: uppercase
  nav:
    fontFamily: lineSeedSansTH, "lineSeedSansTH Fallback"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
rounded:
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 16px
  s5: 20px
  s6: 24px
  s7: 28px
  s8: 32px
  s9: 40px
  s10: 48px
components:
  button-primary:
    backgroundColor: "{colors.button-primary-bg}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 8px 20px
    height: 35px
    borderColor: "{colors.on-primary}"
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    height: 27px
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
---

## Overview
a day magazine is the Thai editorial and media brand run by Day Poets Company Limited in Bangkok. The homepage, which declares `lang="th"` and is titled "a day magazine", describes the brand as a companion for "Figuring-it-out Adults" and signs off with the line "MAY A DAY BE A FRIEND TO FIGURE OUT LIFE TOGETHER". The navigation lists Home, Video, Podcast, Series, Magazine and Activities, with About Us, Contact and Privacy Policy as utility pages.

The capture is photography first. A black top bar holds the lowercase bold wordmark "a day" at the left and three icons at the right (language, search and an orange mark). Below it a full-width hero photograph carries a white headline over a dark gradient with a small category label ("LIFE & CULTURE") above it. Under the hero, a row of three photo thumbnails sits on the warm page background, followed by two large square tiles labelled "main course" and "wake up" in big white lowercase type, and a final full-bleed portrait. Colour in the interface itself is minimal: black, off-white, white and one orange.

## Colors
The measured page background is `{colors.page-largest}` (#efeee7), a warm paper tone that covers the largest area of the page (5383 area-weight units against 1306 for black). The generator-assigned `{colors.canvas}` is #ffffff; the body role itself reports #efeee7. Text is `{colors.ink}` (#000000) with the most characters (738), then white (300) on photographs, `{colors.ink-soft}` (#1a1a1ae6), and two translucent whites (`{colors.on-dark-strong}` #ffffffd9 and `{colors.on-dark-soft}` #ffffffcc) used on the photo overlays. `{colors.ink-muted}` (#6a7282) is a grey secondary text.

`{colors.primary}` (#fe552c) is the orange measured on the accent text (37 characters) and in the h2 child spans, and it is the colour of the top-bar mark in the capture. The single measured button is a translucent-blue outline pill: fill `{colors.button-primary-bg}` (#9ac2ff26) with text and border `{colors.on-primary}` (#9ac2ff), found on the hero's "ตามไปดู" (Follow) button. The hover probe of a pill labelled "Q AND A DAY" shows a yellow variant (rgb 234, 213, 13) whose fill goes from 15 percent alpha to solid on hover and whose text turns white; it is a per-section accent and not a global token, so it is not declared. The hairline colour is a 15 percent black border.

## Typography
One family carries everything: `lineSeedSansTH` with a generated fallback, loaded at weights 100, 400, 700 and 800 (loadedFonts). The stylesheet also references `thongterm` and `eqTh` families and the Geist variables from the framework default, but the measured roles use only lineSeedSansTH.

- `{typography.display}`: 38px weight 700, line-height 43.7px, the hero headline in white (24px with 27.6px line-height at the 390px mobile pass).
- `{typography.heading}`: 20px weight 800, line-height 26.6667px, used for the tagline h2 "MAY A DAY BE A FRIEND TO FIGURE OUT LIFE TOGETHER".
- `{typography.subheading}`: 60.992px weight 700, line-height 83.864px, for the large white tile titles ("main course").
- `{typography.body}`: 18px weight 400, line-height 28px, black on the page background.
- `{typography.button}`: 11px weight 500, uppercase, letter-spacing 0.88px.
- `{typography.nav}`: 16px weight 400, line-height 24px.

The body role reports `text-transform: lowercase` at 32px, matching the lowercase editorial voice of tile titles.

Font substitutes: lineSeedSansTH is a LINE Seed Sans Thai-capable face; when it is not available use any geometric sans with Thai coverage and keep the 400/700/800 weights. This substitution advice is a design suggestion, not a measurement.

## Layout
The measured desktop width is 1280px and the page scroll height is 5491px. The layout is full-bleed: the hero photograph spans the full viewport width, the three-up thumbnail row runs nearly edge to edge with thin gutters, and the two tiles split the width into two columns of different widths. Spacing tokens measured from gaps and paddings step 4, 8, 12, 16, 20, 24, 28, 32, 40 and 48px (`{spacing.s1}` to `{spacing.s10}`). Body copy sits in a narrow measure (the bodyText block is 460px wide). Density is low: few text blocks, large images, generous empty page background between sections.

## Elevation & Depth
There are no measured drop shadows on the roles: the h1, body and button all report no box-shadow, and the stylesheet's shadow values are Tailwind variable chains that resolve to none. Depth comes from photography and dark overlays (the frequency table lists black at 10 percent, 45 percent and 55 percent alpha as background fills over images), not from cards with shadows. Do not add shadows.

## Shapes
Radii measured in the CSS corpus are 9999px (5 uses), 4px, 8px, 24px, 28px and 30px. The pill `{rounded.pill}` (9999px) is the button shape; the border-radius frequency table reports only the pill. Photo tiles in the capture are square-cornered.

## Components
**Primary button** (`button-primary`): pill, 35px high, padding 8px 20px, 11px uppercase medium text at 0.88px tracking, blue text and 1px-style border `{colors.on-primary}` over a translucent blue fill. It sits on photography. On hover the probed sibling button fills solid and its text turns white.

**Navigation**: a black bar (`{colors.ink}` background) with the lowercase white wordmark at the left and icons at the right. Nav link text is `{typography.nav}`.

**Text input**: 27px high, nav typography, black text.

**Footer**: black background with white text (`{colors.canvas}`).

**Category label**: small uppercase tracked label above a headline, in blue on the hero and in orange on a tile (seen in the capture). Its size is not separately measured.

A cookie consent dialog appears at the bottom of the capture ("เราใช้คุกกี้" with three buttons). It is a consent control and is not documented as brand UI or tokens.

## Design System Architecture
No public design system or brand guideline is linked from the homepage; the fetched homepage lists no such link. The de-facto system is Tailwind-based: the root variables include Tailwind v4 names (`--text-2xl: 1.5rem`, `--text-lg: 1.125rem`, `--spacing: .25rem`, `--container-5xl: 64rem`, `--leading-relaxed`, `--font-weight-black`), orange and neutral scale colours, and `--background: #fff`. That gives a 4px base spacing unit consistent with the measured spacing steps. Fonts are loaded as self-hosted faces named lineSeedSansTH. The site source is https://adaymagazine.com/, opened for this document.

## Do's and Don'ts
- Do let photography fill the width; put white lowercase titles directly on dimmed photos.
- Do keep the page background `{colors.page-largest}` and ink `{colors.ink}`.
- Do use one typeface family and vary weight 400, 700, 800.
- Do use the 9999px pill for outline buttons.
- Don't add shadows or heavy borders.
- Don't use the orange `{colors.primary}` for large fills; it is measured only on small accents.
- Don't style the cookie dialog as part of the brand.
- Don't use more than one accent colour per section.

## Responsive Behavior
The extractor ran one mobile pass at 390px. Measured there: the h1 drops from 38px to 24px (line-height 27.6px), the h2 stays 20px (line-height 28px) and the body text stays 18px with 28px line-height. The h1 box is 342px wide on mobile; the h2 box is 230px wide and the body box 230px wide. Breakpoints, navigation collapse behaviour, and touch target sizes were not measured.

## Iteration Guide
1. Start from `{colors.page-largest}` as the page fill and `{colors.ink}` as text.
2. Set all text in lineSeedSansTH; headline 38px/700, tile title 60.992px/700, body 18px/400.
3. Build the button as a 35px pill with a translucent fill and matching colour border.
4. Fill sections with edge-to-edge photographs; overlay white titles.
5. Use `{colors.primary}` only for small accents such as category labels and icons.
6. Anything not listed in the frontmatter (dark mode, tablet breakpoints, focus states) is not measured: check the live site before adding it.
