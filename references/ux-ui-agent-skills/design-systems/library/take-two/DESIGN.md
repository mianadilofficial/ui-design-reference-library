---
version: alpha
name: Take-Two Interactive
category: "Gaming"
description: "Take-Two Interactive corporate home page: Gotham 600 titles at 24px, 700 uppercase 16px buttons, yellow #fcea17 and red #e60012 slide CTAs, #d7d7d7 and white surfaces, 4px button radius, 8px card radius, translucent #ebebebcc nav."
colors:
  canvas: "#d7d7d7"
  ink: "#000000"
  primary: "#fcea17"
  on-primary: "#000000"
  surface-2: "#ffffff"
  surface-3: "#007ac1"
  ink-2: "#ffffffcc"
  ink-3: "#000000cc"
  ink-4: "#075f49"
  ink-6: "#00000099"
  accent-red: "#e60012"
  nav-bg: "#ebebebcc"
  footer-bg: "#ffffffe6"
typography:
  display:
    fontFamily: Gotham, sans-serif
    fontSize: 24px
    fontWeight: 600
    lineHeight: 30px
  display-mobile:
    fontFamily: Gotham, sans-serif
    fontSize: 22.5px
    fontWeight: 600
    lineHeight: 28.125px
  body:
    fontFamily: Gotham, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
  button:
    fontFamily: Gotham, sans-serif
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
    textTransform: uppercase
rounded:
  xs: 2px
  sm: 4px
  md: 6px
  lg: 8px
spacing:
  s1: 8px
  s2: 12px
  s3: 16px
  s4: 24px
  s5: 28px
  s6: 32px
  s7: 48px
  s8: 96px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 24px
    height: 50px
    borderColor: "{colors.primary}"
  link:
    textColor: "{colors.surface-2}"
    typography: "{typography.display}"
    padding: 32px 96px 64px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0.15) 0px 3px 4px 0px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    padding: 16px 16px 16px 0px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-4}"
---

# Take-Two Interactive

## Overview
The measured site is the corporate home page of Take-Two Interactive Software, Inc. (https://www.take2games.com/, page title "Leading Game Publisher"). It is a publisher-level site, not a game storefront: a full-bleed hero carousel presents the current flagship titles (the capture shows WWE 2K26 with a red "LEARN MORE" button; the measured h1 is NBA 2K27), followed by a "NEWS" carousel of release and earnings headlines, three label logos (Rockstar Games, 2K, Zynga), a "Great Place to Work Certified" band, a parents' band ("Parents: You Can Control How Your Kids Play Games") and a light footer with ESRB rating mark. Typography is a single family, Gotham, in one weight ladder (400, 600, 700). The page is dark and image-led where it sells games and plain white or light grey where it talks about the company, so the visual identity is carried by key art rather than by a fixed brand color; buttons change color per slide (yellow #fcea17, red #e60012, black on white bands). Navigation labels are corporate and terse: Games, Investors, Careers, Policies & Conduct, Board & Management.

## Colors
Measured values: `canvas` #d7d7d7 (page ground), `surface-2` #ffffff (white bands and the "Learn more" button on the blue band), `surface-3` #007ac1 (the parents' band blue), `ink` #000000 for text on light surfaces, `ink-2` #ffffffcc and `ink-3` #000000cc and `ink-6` #00000099 for translucent text, and `ink-4` #075f49 (footer link green). `nav-bg` is #ebebebcc, a translucent light grey for the sticky bar, and `footer-bg` is #ffffffe6. Actions: `primary` #fcea17 (yellow) with `on-primary` #000000 is the fill of the detected primary button on the NBA 2K27 hero slide; `accent-red` #e60012 is the red fill measured on the secondary button (the WWE slide). Because the hero buttons take the color of each game's key art, no single action color is documented as the corporate default beyond these measured values. The root CSS exposes semantic variables (`--color-game-primary`, `--color-game-secondary`, `--color-promo-attribute`, `--color-info`, `--color-success`, `--color-warning`) and a neutral ramp (`--color-neutral-100` to `--color-neutral-999`); one of them, `--color-info-rgb`, resolves to 34, 85, 153.

## Typography
Gotham (loaded at 400 and 700, used at 400, 600 and 700) is the only measured family, falling back to generic sans-serif. `display` is 24px / 30px at weight 600 (hero titles such as "NBA 2K27" and "WWE 2K26"); `display-mobile` is 22.5px / 28.125px at weight 600 at a 390px viewport. `body` is 14px / 21px at weight 400. `button` and navigation text are 16px / 24px at weight 700 in uppercase. Gotham is a commercial typeface; Montserrat or any geometric sans at the same weights is a reasonable substitute when the licence is unavailable. Headings are set in sentence-style game titles; section labels such as "NEWS" are uppercase and heavy.

## Layout
The desktop page is measured at 1280px wide and 2434px tall. A sticky 80px navigation bar overlays the hero; content blocks align to a left gutter that the logo, hero copy, news cards and footer all share. Hero text blocks are padded 32px 96px 64px. The news row is a four-card carousel with a segmented progress indicator beneath it; the labels row centers three square logo tiles; later bands alternate a text column with a media tile, and the footer lays out two rows of inline links beside the ESRB mark. Measured spacing steps: 8px, 12px, 16px, 24px, 28px, 32px, 48px and 96px; the most frequent gap is 16px (10 elements) with 48px used twice.

## Elevation & Depth
Depth is minimal. The navigation bar carries a single soft shadow, `rgba(0, 0, 0, 0.15) 0px 3px 4px 0px`; one other measured shadow is `rgba(0, 0, 0, 0.24) 0px 4px 8px 0px`, and the keyboard focus ring on "Skip to Content" is a 3px ring in a gold (rgb 255, 194, 0). Everything else relies on full-bleed imagery, translucent bars (`nav-bg`, `footer-bg`) and contrast between dark hero art and white bands.

## Shapes
Radii measured: 8px (28 elements, the most common: cards and media tiles), 2px (16 elements), 4px (6 elements, the buttons) and 6px (2 elements). The primary button is a 50px-tall rounded rectangle with a 4px radius, 12px 24px padding and a border matching its fill. News thumbnails and label tiles are rounded rectangles; the navigation and footer are square-edged.

## Components
- **button-primary**: #fcea17 fill and border, #000000 text, 16px weight 700 uppercase, 4px radius, 50px tall, 12px 24px padding.
- **Secondary button**: #e60012 fill with #ffffff text, same type, radius, padding and height as the primary.
- **Hero link block**: white 24px weight 600 title over key art with 32px 96px 64px padding.
- **nav**: #ebebebcc background, #000000 text, 80px tall, the 3px 4px soft shadow; **nav-link** 16px weight 700, padding 16px 16px 16px 0px, with dropdown chevrons on Games and Policies & Conduct.
- **footer**: #ffffffe6 background, #075f49 link text at 14px, 4px between wraps of inline links.
- **News card**: image tile, date in small grey type, bold three-line headline truncated with an ellipsis.
Cookie banners (OneTrust) were hidden during measurement and are not documented as brand UI.

## Design System Architecture
No public design system or brand guideline was found. The home page was opened with WebFetch and lists no link to brand guidelines, a press kit, a design system or typography, and does not mention Gotham. The de-facto system is utility-class CSS: root variables include `--tw-ring-offset-shadow` and `--tw-ring-shadow`, which are Tailwind CSS ring variables, plus semantic color variables built from `-rgb` triplets (`--color-black-rgb: 0, 0, 0`, `--color-info-rgb`, `--color-neutral-*`). The `game-primary`/`game-secondary` variable names indicate that per-title theming exists in the stylesheet; the hero buttons measured here are consistent with that but the variable values were not recorded.

## Do's and Don'ts
- Do let hero key art set the mood and keep the button color tied to the slide (yellow #fcea17 or red #e60012 with the measured label colors).
- Do use uppercase 16px weight 700 Gotham for buttons and navigation.
- Do keep company information bands plain white with black text and a black or white button.
- Don't add drop shadows to cards; only the navigation bar and a single overlay carry shadows.
- Don't round buttons beyond 4px or cards beyond 8px.
- Don't present cookie consent or accessibility skip links as brand components.

## Responsive Behavior
Measured at a 390px viewport: the display size falls from 24px to 22.5px (line height 28.125px) at weight 600, and the primary button renders 360px wide, 47px tall at 15px type. The mobile pass recorded no layout, header or band data, so menu behavior and column counts are not measured.

## Iteration Guide
1. Use Gotham (or a licensed substitute) at 600 for titles and 700 uppercase for buttons.
2. Build on #d7d7d7 / #ffffff surfaces with #000000 text; reserve #fcea17 and #e60012 for CTAs on the slide they belong to.
3. Keep radii to 2, 4, 6 and 8px and spacing on the 8/12/16/24/32/48/96px steps.
4. Place logos and key art first; keep nav translucent (#ebebebcc) with the soft shadow.
5. Re-run `node web/scripts/verify-designs.mjs --slug=take-two` after every edit.
6. Imagery: the capture shows dark, high-contrast sports and wrestling key art behind white 24px titles, square label logo tiles (Rockstar Games, 2K, Zynga) on a grey band, and a blue photographic band for the parents' message; keep photography full-bleed and let text sit directly on it.
7. Copy voice: titles are the game name alone; supporting copy is one or two plain sentences ("The show never stops in WWE 2K26!"); the call to action is always the two words "LEARN MORE".
8. News headlines are truncated to three lines with an ellipsis and carry a plain-language date above them (for example "August 7, 2026"); keep dates in the smaller 14px body size.
