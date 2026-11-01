---
version: alpha
name: "Mazda USA"
category: "Automotive"
description: "Mazda USA official site measured live: white canvas, near-black #101010 ink, Mazda Type uppercase headings at 35px with 3.5px tracking, white 3px-radius buttons 45px tall, slate #4a5b6e footer."
colors:
  canvas: "#ffffff"
  ink: "#101010"
  primary: "#ffffff"
  on-primary: "#000000"
  surface-3: "#f5f5f5"
  ink-3: "#ffffffcc"
  ink-4: "#d5d5d5"
  ink-6: "#2b2b2b"
  link: "#999999"
  footer-bg: "#4a5b6e"
typography:
  display:
    fontFamily: "\"Mazda Type\", helvetica, arial, sans-serif"
    fontSize: 35px
    fontWeight: 500
    letterSpacing: 3.5px
    textTransform: uppercase
  display-mobile:
    fontFamily: "\"Mazda Type\", helvetica, arial, sans-serif"
    fontSize: 25px
    fontWeight: 500
    letterSpacing: 2.5px
    textTransform: uppercase
  heading:
    fontFamily: "\"Mazda Type\", helvetica, arial, sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 19.8px
  subheading:
    fontFamily: "\"Mazda Type\", helvetica, arial, sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 18.2px
    letterSpacing: 2.8px
    textTransform: uppercase
  body:
    fontFamily: "\"Mazda Type\", helvetica, arial, sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 28px
  button:
    fontFamily: "\"Mazda Type\", helvetica, arial, sans-serif"
    fontSize: 13px
    fontWeight: 700
    letterSpacing: 2.6px
    textTransform: uppercase
rounded:
  xs: 3px
  sm: 50px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 7px
  s5: 8px
  s6: 9px
  s7: 10px
  s8: 12px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 18px
    height: 45px
  button-primary-hover:
    backgroundColor: "{colors.link}"
    textColor: "{colors.ink}"
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 15px 18px
    height: 45px
  link:
    textColor: "{colors.link}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    padding: 0px 5px
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.ink-3}"
---

# Mazda USA

## Overview
mazdausa.com ("Mazda USA Official Site | Cars, SUVs & Crossovers | Mazda USA") is the American consumer site of the car maker, and its design is restrained, spacious and photographic. The measured page is 1280px wide and 8813px tall. A white header carries wide-tracked uppercase navigation at the left (VEHICLES, SHOPPING TOOLS, WHAT DRIVES US, OWNERS), the circular Mazda emblem in the centre, and "FIND A DEALER | 96799" with a location pin at the right. Under it a full-width hero image shows a dark red CX-90 on a residential street with the headline "THE FEELING OF SAFETY" in white, widely letter-spaced capitals, and a white "EXPLORE VEHICLES" button. Four light-grey tiles (BUILD & PRICE, SPECIAL OFFERS, FIND A DEALER, SCHEDULE A DRIVE) with line icons follow, then a safety story with a large interior photograph carrying a Consumer Reports "Safest New-Car Brand" badge, and a two-column "COMMITTED TO SAFETY" block.

The voice is calm and premium: all headings are uppercase with generous tracking, body copy is small and light, and the interface is monochrome so that cars and people in natural settings supply the colour. A blue floating accessibility button in the capture (#146ff8 measured) is a third-party overlay, not brand UI.

The page content is organised as a sequence of editorial moments rather than a product grid: a campaign hero, a row of four tools, a safety essay, a full-width interior photograph and a closing story with an underlined "LEARN MORE" text link. Small disclaimer lines sit under the hero button ("Vehicle information", underlined) and above the closing story (a note that Consumer Reports does not endorse products or services), set in a small grey face. Photography shows ordinary family moments, a driver at the wheel and children in a cargo area, rather than cars alone, which is the art direction the page expresses for the safety theme.

## Colors
Measured colours:
- `canvas` #ffffff is by far the largest background (18217 area weight); `surface-3` #f5f5f5 is the light grey of the shortcut tiles (1189).
- `ink` #101010 is the main text colour (2608 characters weight) and the near-black of the secondary button and dark sections (1609 area weight).
- `primary` #ffffff with `on-primary` #000000 describes the measured primary button: a white button with a black label and a black border.
- `ink-3` #ffffffcc is white at 80 percent opacity, used for footer text; `ink-4` #d5d5d5 is light grey text (450 weight); `ink-6` #2b2b2b is a dark grey; `link` #999999 is the grey link colour and the hover fill of the primary button.
- `footer-bg` #4a5b6e is the slate blue-grey of the footer (1184 area weight).
- Other text colours measured: #676565, #a9a9a9, #7a7a7a, #e7e7e7, #0a2540 and #263854.
Root variables are only the Swiper defaults (`--swiper-theme-color` #007aff and `--swiper-navigation-size` 44px), which are library values, not brand colours. A single shadow was measured: rgba(8, 19, 79, 0.16) 0px 4px 13.333px 0px.

## Typography
One family dominates: **Mazda Type** (weights 400, 400 italic, 500 and 700; 5290 characters weight) with a "helvetica, arial, sans-serif" fallback stack. Tokens:
- `display` 35px, weight 500, letter spacing 3.5px, uppercase: hero headline "THE FEELING OF SAFETY". `display-mobile` is 25px with 2.5px letter spacing.
- `heading` 18px, weight 500, line height 19.8px.
- `subheading` 14px, weight 500, line height 18.2px, letter spacing 2.8px, uppercase: tile labels and navigation labels.
- `body` 16px, weight 400, line height 28px.
- `button` 13px, weight 700, letter spacing 2.6px, uppercase.
Other measured sizes include 11px (footer), 12px, 9px, 22px and 21px. The consistent rule is letter spacing at 10 percent of the font size for headings and buttons (3.5px at 35px, 2.8px at 14px, 2.6px at 13px).

Font substitutes: Mazda Type is a proprietary corporate typeface; the site's own fallbacks are Helvetica and Arial.

## Layout
The header is a single white row with three zones: left navigation, central emblem, right dealer locator. The hero is full width with the headline at the top centre and the button at the bottom centre. Below, content sits in a centred column with generous side margins: four equal tiles in a row, a left-aligned headline-and-paragraph block, a wide image, then image and text in two columns. Gaps measured: 9px (most frequent, 48 occurrences), 24px, 28px, 10px, 5px, 242px, 20px, 8px, 40px and 16px. Spacing tokens: s1 2px, s2 4px, s3 5px, s4 7px, s5 8px, s6 9px, s7 10px, s8 12px, s9 15px, s10 16px.

The first text block after the tiles is a small uppercase eyebrow ("SAFETY") above a large tracked heading ("DRIVING FORWARD WITH CONFIDENCE") and a short two-line paragraph, left aligned and narrower than the image below it. The closing story reverses the usual order: image at the left, a small grey disclaimer, a tracked heading, a paragraph and an underlined link at the right. These capture observations describe arrangement only; no extra sizes are claimed beyond the measured tokens.

## Elevation & Depth
Almost no shadow: the only measured one is rgba(8, 19, 79, 0.16) 0px 4px 13.333px 0px on a single element. Tiles are flat grey rectangles on white, and depth comes from the photography. The hero headline is set directly on the image.

## Shapes
Radii measured: 3px (15 elements, buttons and tiles), 999px (3, pills), 50% (2, round controls such as the hero slide control circle) and 50px (1). Tokens: `xs` 3px, `sm` 50px and `pill` 9999px. Buttons use the small 3px radius, which keeps the geometry crisp.

## Components
- **button-primary** ("EXPLORE VEHICLES"): `{colors.canvas}` fill, `{colors.on-primary}` label, `{typography.button}`, radius `{rounded.xs}` (3px), padding 15px 18px, height 45px, black border. Hover (measured): fill `{colors.link}` (#999999), text and border #101010.
- **button-secondary** ("SEE CX-90 OFFERS"): `{colors.ink}` fill, white label, same type, radius and padding, height 45px.
- **Outlined button** ("SEE OFFERS"): transparent with black label, padding 13px 16px.
- **link**: `{colors.link}` in the body style.
- **nav / nav-link**: white labels over the hero state in `{typography.subheading}`, padding 0px 5px.
- **footer**: `{colors.footer-bg}` fill with `{colors.ink-3}` text.
- **Shortcut tiles**: `{colors.surface-3}` fill, a line icon and an uppercase label (visible in the capture; further numbers not measured).

## Design System Architecture
No public design system or brand guideline was found, and no search was run; the page opened was https://www.mazdausa.com/. The page's root custom properties are only the Swiper carousel defaults, so brand tokens are applied through component CSS. Loaded fonts are Mazda Type (400, 400 italic, 500, 700) plus icon fonts (swiper-icons and a standard icon font). The consistent grammar of uppercase, tracked headings, 3px buttons and white-on-black or black-on-white pairs is the de-facto system.

## Do's and Don'ts
Do:
- Set headings and buttons in uppercase Mazda Type with tracking equal to a tenth of the size.
- Use a white or near-black (`{colors.ink}`) button with a 3px radius and 45px height.
- Let photography carry colour; keep the interface monochrome with grey tiles.
- Use the slate `{colors.footer-bg}` for the footer.

Don't:
- Do not use the Swiper blue (#007aff) or the blue accessibility overlay (#146ff8) as brand colours.
- Do not round buttons beyond 3px.
- Do not add coloured accent fills; none were measured as brand colours.

## Responsive Behavior
At 390px the extraction measured: h1 25px, weight 500; h2 14px, weight 500, line height 16.8px; body 16px weight 400 with a 28px line height; primary CTA 13px weight 700; navigation 8px weight 700. How the tile row and hero reflow was not measured.

## Iteration Guide
1. Start with a white header, a full-bleed hero and `{typography.display}` in white over the image.
2. Add a `{colors.canvas}` primary button with a black label and 3px radius.
3. Add grey tiles (`{colors.surface-3}`) with line icons and `{typography.subheading}` labels.
4. End with a `{colors.footer-bg}` footer.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=mazda --url=https://www.mazdausa.com/ --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=mazda`.
