---
version: alpha
name: "Maybelline New York"
category: "Beauty & Personal Care"
description: "Maybelline New York home page measured live: black header and footer on a white canvas, brand yellow #ffd000, Neue Helvetica Pro uppercase headlines at 70px, light Helvetica Neue body, 2px-radius outlined buttons, 8px cards."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ffd000"
  surface-2: "#757575"
  surface-3: "#979797"
  ink-3: "#cccccc"
  ink-4: "#231f20"
  ink-5: "#191919"
  hairline: "#e8e8e8"
typography:
  display:
    fontFamily: "\"Neue Helvetica Pro\", \"Arial Narrow\", sans-serif"
    fontSize: 70px
    fontWeight: 400
    lineHeight: 70px
    letterSpacing: "-1.87px"
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Neue Helvetica Pro\", \"Arial Narrow\", sans-serif"
    fontSize: 56px
    fontWeight: 400
    lineHeight: 48px
    letterSpacing: "-1.07px"
    textTransform: uppercase
  subheading:
    fontFamily: "\"Neue Helvetica Pro\", \"Arial Narrow\", sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 22px
    textTransform: uppercase
  body:
    fontFamily: "\"Helvetica Neue LT Std\", system-ui, sans-serif"
    fontSize: 16px
    fontWeight: 100
    lineHeight: 19px
  button-secondary:
    fontFamily: "\"Neue Helvetica Pro\", \"Arial Narrow\", sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 20px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 14px
  pill: 9999px
spacing:
  s1: 3px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 20px
  s10: 24px
components:
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button-secondary}"
    rounded: "{rounded.xs}"
    padding: 12px 35px
    height: 46px
    borderColor: "{colors.hairline}"
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.body}"
  card:
    textColor: "{colors.ink-5}"
    rounded: "{rounded.md}"
    padding: 3px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-3}"
    padding: 45px 60px 40px 45px
---

# Maybelline New York

## Overview
Maybelline New York's global web home (maybelline.com, measured at the US-English page "Maybelline New York | Makeup Products, Cosmetics, Beauty") is a beauty-commerce page that lets product photography and condensed all-caps headlines carry the brand. The measured page is 1280px wide and 5453px tall. A black navigation header with white labels (VIRTUAL BEAUTY STUDIO, NEW, COLLECTIONS and so on) sits above a full-width seasonal hero, here a Halloween scene titled "THE GHOULS UPSTAIRS" with the subline "Your new roomies are ready to get you Halloween ready". Below are a white "VIRTUAL BEAUTY STUDIO" section with three tool cards (Virtual Try On, Foundation Finder, a new lip quiz) and a "WHAT'S NEW" band over a city-street photograph with product cards.

The voice is direct and confident: short, uppercase, tightly tracked headlines in Neue Helvetica Pro, light-weight Helvetica body text, and tagline captions on cards in a brush-script face (third-rail) reading things like "24HR TATTOO-LIKE WEAR". Colour is mostly black, white and grey, with the saturated tones coming from products and campaign imagery. The yellow `{colors.primary}` (#ffd000) is the measured brand yellow, used sparingly on text.

Consent overlays (a OneTrust banner) were hidden for the capture, and a vertical "Give your feedback" tab appears on the right edge of the screenshot; neither is documented as brand UI.

## Colors
Measured colours:
- `canvas` #ffffff is the page background and the largest area besides imagery; `ink` #000000 is the main text colour (2152 characters weight) and the navigation and footer background.
- `primary` #ffd000 is the Maybelline yellow measured in text (18 characters weight) and nowhere as a large fill.
- `surface-2` #757575 and `surface-3` #979797 are mid greys measured as large background areas (1920 and 1088 area weight); they come from hero and promotional blocks rather than a UI scale.
- `ink-3` #cccccc is light grey footer text (456 characters weight), `ink-4` #231f20 is a warm black, `ink-5` #191919 a near-black used on card text, and `hairline` #e8e8e8 is the 1px border colour of cards and the outlined button.
- Other measured backgrounds are #f8f8f8, #989898, #ededed and a black at 10 percent alpha (#0000001a).
Root custom properties include a header height of 133px, white content backgrounds for a regional redirect modal, a black redirect button background (#000), and the Swiper blue #007aff (a library default, not a brand colour). Usage: black frames the header and footer, white holds content, yellow marks the brand highlight, and photography supplies the rest.

## Typography
- **Neue Helvetica Pro** (weights 100 and 400, with "Arial Narrow" and sans-serif fallbacks) is the display face: `display` is 70px, weight 400, line height 70px, letter spacing -1.87px, uppercase; `subheading` is 24px, weight 400, line height 22px, uppercase; `button-secondary` is 20px, weight 400, line height 20px, uppercase. On mobile `display-mobile` is 56px with 48px line height and -1.07px letter spacing.
- **Helvetica Neue LT Std** (weights 100 and 400, system-ui and sans-serif fallbacks) is the text face and covers most characters (2419 weight): `body` is 16px at weight 100 with a 19px line height. Body copy is therefore a very light weight.
- **third-rail** (400) is a script face for the card taglines (171 characters weight).
Other measured sizes include 12px, 10px, 18px, 32px, 34px, 36px, 40px and 64px; 16px is by far the most used (1656 weight).

Font substitutes: Neue Helvetica Pro and Helvetica Neue LT Std are licensed typefaces; the site's own fallbacks are "Arial Narrow" for the display face and system-ui for the text face.

## Layout
The header is 133px tall (`--header-height`) and the hero starts below it, running edge to edge. Content sections are centred: a large uppercase title, a short centred paragraph and a "VIEW ALL" outlined button, then a row of cards. The Virtual Beauty Studio row shows three cards at desktop width with a fourth peeking at the edge, indicating a carousel with a dash pagination indicator below. The What's New band repeats the pattern with five-plus product cards over a full-bleed city photograph.

Spacing values measured: 3px, 5px, 6px, 8px, 10px, 12px, 14px, 16px, 20px and 24px (`spacing` s1 to s10). The footer uses padding of 45px 60px 40px 45px.

## Elevation & Depth
No box shadows were measured at rest (the box-shadow list is empty), though the hover probe on "VIEW ALL" records a box shadow appearing in the hovered state. Cards are separated by a 1px #e8e8e8 border and white fills on photographic backgrounds rather than by elevation. Depth otherwise comes from photography.

## Shapes
Radii measured: 50% (round controls such as the play, arrow and pagination buttons, 20 elements), 2px (the outlined buttons, 14), 8px (cards, 12), 4px (tags, 8), 14px, and an asymmetric 0px 2px 2px 0px. Tokens: `xs` 2px, `sm` 4px, `md` 8px, `lg` 14px and `pill` 9999px. Buttons are nearly square with a 2px radius; cards use 8px.

## Components
- **button-secondary** ("VIEW ALL", "SHOP ALL"): white fill, black Neue Helvetica Pro 20px uppercase label, 2px radius, padding 12px 35px, height 46px, 1px `{colors.hairline}` border. Hover: the measured after-state adds a box shadow while colours stay the same.
- **nav**: black `{colors.ink}` background with white labels; **nav-link** is Helvetica Neue LT Std 16px weight 100.
- **link**: white on dark in the display style (hero headline links, 70px).
- **card**: 8px radius, 3px padding, `{colors.hairline}` border, text `{colors.ink-5}`; tool cards carry a small tag label such as "Virtual Tool" or "Quiz" over the image.
- **footer**: black background, `{colors.ink-3}` text, padding 45px 60px 40px 45px.
No filled primary button was detected by the extractor, so no `button-primary` is declared.

## Design System Architecture
No public design system or brand guideline was found, and no search was run; the page opened was https://www.maybelline.com/. The measurable system is a small set of root custom properties: `--header-height` (133px), regional-redirect modal variables (`--refapp-user-redirect-*` such as title size 26px, description size 16px and button size 13px), `--franchise-item-background-color` #fff and the Swiper variables. Brand colours and type are applied through component CSS rather than tokens, with the fonts loaded as Neue Helvetica Pro, Helvetica Neue LT Std and third-rail.

## Do's and Don'ts
Do:
- Set headlines in Neue Helvetica Pro, uppercase and tightly tracked, with black on white or white on photography.
- Use light-weight Helvetica Neue for body text and the script face for short product taglines.
- Keep buttons near-square (2px) with a hairline border and black uppercase labels.
- Let product and campaign photography provide colour.

Don't:
- Do not use the Swiper blue (#007aff) or regional-redirect modal styles as brand UI.
- Do not document the consent banner or the feedback tab.
- Do not use the yellow as a large fill; it was measured only in text.
- Do not round buttons into pills; the measured button radius is 2px.

## Responsive Behavior
At 390px the extraction measured: h1 and h2 at 56px with a 48px line height in Neue Helvetica Pro, body text at 16px weight 100 with a 19px line height, and navigation in Arial at 16px weight 400. How the card carousels and the navigation reflow at mobile width was not measured.

## Iteration Guide
1. Start with a black header, a full-bleed hero and a white content canvas.
2. Set section titles with `{typography.display}` and body with `{typography.body}`.
3. Build cards with 8px radius and a `{colors.hairline}` border, with tag labels over the image.
4. Use `{colors.primary}` only for small highlights.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=maybelline --url=https://www.maybelline.com/ --force --no-motion` after changes, then run `node web/scripts/verify-designs.mjs --slug=maybelline`.
