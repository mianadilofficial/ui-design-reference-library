---
version: alpha
name: Al Jazeera
category: "News & Publishing"
description: "Al Jazeera English home page: white canvas, black ink, Roboto 300-900, red #c31833 BREAKING card, orange #fa9000 accent rules, black pill Sign up button with 18px radius, 10px card radius and flat shadows."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#000000"
  on-primary: "#ffffff"
  surface-card: "#e0e0e0"
  surface-muted: "#e5e5e5"
  ink-body: "#333333"
  ink-muted: "#595959"
  breaking-red: "#c31833"
  brand-orange: "#fa9000"
typography:
  display:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 32px
    fontWeight: 700
    lineHeight: 41.6px
  display-mobile:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 26px
    fontWeight: 700
    lineHeight: 33.8px
  subheading:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20.8px
  body:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 300
    lineHeight: 24px
  nav:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 500
    lineHeight: 36px
  input:
    fontFamily: Roboto, "Helvetica Neue", Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 8px
  sm: 10px
  md: 18px
  lg: 20px
  xl: 22px
  2xl: 50px
  3xl: 100px
  pill: 9999px
spacing:
  s1: 1px
  s2: 3px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 7.5px
  s7: 8px
  s8: 10px
  s9: 11px
  s10: 14px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    padding: 6px 17px
    height: 36px
  button-secondary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.3xl}"
    padding: 1px 6px
    height: 44px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.ink}"
    padding: 0px 15px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    rounded: "{rounded.xl}"
    padding: 0px 15px
    height: 44px
    borderColor: "{colors.ink-muted}"
  card:
    backgroundColor: "{colors.surface-card}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    textColor: "{colors.ink}"
    padding: 10px 0px 0px
---

# Al Jazeera

## Overview
The measured page is the English home page at aljazeera.com. It reads as a dense news front page: a white canvas (#ffffff, the largest background area by weight), black headlines, and a red breaking-news card that is the single loud block above the fold. A thin black header carries the orange logo tile, the section links (News, Middle East, Explainer, Sport, Opinion, Video, More), a LIVE control, a search icon and a black pill "Sign up" button. Under the header a trending strip lists topic links. The capture also shows a banner advertisement above the header; it is third-party content and is not documented as brand UI here.

The page title is "Breaking News, World News and Video from Al Jazeera". Layout is editorial: a large lead story with a photo, a vertical list of live updates, a column of smaller headlines with thumbnails, a horizontal strip of portrait video cards, a "Featured" block and a numbered "Most popular" list. Orange appears as a short vertical rule beside section labels ("Watch latest videos", "Featured", "Opinion", "Must reads"), which is the only place the orange accent is visible in the capture. Photography carries most of the visual weight; interface chrome stays black, white and grey.

## Colors
The palette is deliberately narrow and comes entirely from measurement.
- **canvas** `#ffffff`: page background, 13033 of the measured background area weight.
- **ink** `#000000`: the most-read text color (7061 characters), used for headlines and nav links.
- **ink-body** `#333333`: running body and standfirst text (5352 characters).
- **ink-muted** `#595959`: timestamps, bylines and secondary text; also the 1px input border and the page's `--main-grey-color` variable.
- **surface-card** `#e0e0e0` and **surface-muted** `#e5e5e5`: neutral card and divider fills; a `#f0f0f0` surface is also measured but not tokenised.
- **breaking-red** `#c31833`: the background of the BREAKING card on the lead story, with white text; it is also used for the red "LIVE UPDATES" label text. The page defines a separate `--ticker-color` of `#d71c45`.
- **brand-orange** `#fa9000`: the page's `--primary-color`, `--hyperlink-color` and the one measured border color; it is the logo and section-rule accent. Related root variables are `--primary-light-color` `#e1b77d` and `--secondary-color` `#32a2ef`.
- **primary** `#000000` with **on-primary** `#ffffff`: the Sign up and Subscribe buttons are black with white text.

The extractor also saw `#0000ee` as a text color; that is the browser default link color and is not a brand color.

## Typography
One family runs everything: Roboto with the fallback stack "Helvetica Neue", Helvetica, Arial, sans-serif, loaded in weights 300, 400, 500, 700 and 900. The page declares it as `--font-family`. Article bodies use a separate variable, `--font-family-article-body`, set to Georgia, Times, "Times New Roman", serif; that is declared in the CSS but article pages were not measured.

Measured roles:
- **display** 32px, weight 700, line height 41.6px: the lead headline (white on the red card). On the 390px mobile pass it is 26px / 700 / 33.8px (**display-mobile**).
- **subheading** 16px, weight 400, line height 20.8px: the h3 live-update headlines.
- **body** 16px, weight 300, line height 24px: standfirst paragraphs.
- **nav** 18px, weight 500, line height 36px: navigation links.
- **input** 18px, weight 400, line height 20px.

The most-used sizes by character count are 16px (8412), 20px (3249), 14px (932), 15px (845) and 18px (272). Weight 300 carries 5591 characters, so a light body weight is part of the voice. No letter-spacing is measured. Section labels in the capture appear in uppercase, and the BREAKING card measures `text-transform: uppercase` at 24px.

## Layout
The page is measured at 1280px wide with a 13981px scroll height. The header is 60px tall with 15px horizontal padding and a `--sticky-nav-header-offset` of 60px. The grid in the capture is a wide lead column of text and photo beside narrower stacks, then full-width rails. The spacing scale tokens are drawn from measured paddings and gaps: 10px is the dominant padding (50 uses) and the dominant gap (92 uses), followed by 15px (19 uses) and 20px (14 uses). Other measured values are 1px, 3px, 4px, 5px, 6px, 7.5px, 8px, 11px and 14px.

## Elevation & Depth
The page is almost flat. 21 of the measured box-shadow declarations are `none`, and the shadows that exist are light: `0 2px 4px -4px rgba(0,0,0,.5)`, `0 2px 2px 0 rgba(0,0,0,.16)` and `0 0 4px 1px rgba(0,0,0,.08)`. A heavier Material-style stack (`0 6px 10px rgba(0,0,0,.14), 0 1px 18px rgba(0,0,0,.12), 0 3px 5px -1px rgba(0,0,0,.4)`) appears twice in the CSS. Depth in the capture comes from photographs and the red card overlapping the lead photo, not from shadows.

## Shapes
Radii are mixed. The card radius is 10px (98 uses), which is the most common value; 20px, 18px, 22px, 50px, 8px and 100px also appear, plus 999px and 50% for pills and avatars. The Sign up button measures 18px (rounded md); the Subscribe button measures 100px (rounded 3xl) and 44px high; the search input measures 22px (rounded xl), 44px high with a 1px `#595959` border. The red lead card measures 10px.

## Components
- **button-primary**: black fill, white text, 16px / 400, radius 18px, padding 6px 17px, height 36px (the header "Sign up").
- **button-secondary**: black fill, white text, 16px, pill-like radius 100px, padding 1px 6px, height 44px (the "Subscribe" button).
- **text-input**: white fill, black 18px text, radius 22px, padding 0px 15px, height 44px, 1px `#595959` border.
- **card**: `#e0e0e0` fill with black text and 10px radius.
- **nav / nav-link**: black 18px / 500 links, header padding 0px 15px. Hover on nav links was measured: color stays black and an underline appears.
- **link**: the lead headline link is white 32px / 700 on the red card.
- **footer**: padding 10px 0px 0px.

Content patterns in the capture: a red BREAKING card on the lead image, "LIVE UPDATES" with relative timestamps ("9m ago"), "Most popular" with large numerals, and portrait video thumbnails with two-line captions.

## Design System Architecture
No public design system or brand-guideline page was found. The brand, press, about and design paths on aljazeera.com return 404 and the home page links none. The de-facto system is expressed in CSS custom properties on the root: `--primary-color`, `--primary-light-color`, `--secondary-color`, `--hyperlink-color`, `--main-grey-color`, `--ticker-color`, `--font-family`, `--font-family-article-body`, `--leading-base` 1, `--leading-headline` 1.3 and `--leading-multilines` 1.5, and article font size variables of 1.25rem (desktop) and 1.125rem (mobile). The page also uses the Swiper carousel library (`--swiper-theme-color` `#007aff`) and a swiper-icons font; those are third-party and not brand tokens.

## Do's and Don'ts
- Do keep chrome black, white and grey and let photography carry color.
- Do reserve `#c31833` for breaking news and live labels.
- Do use `#fa9000` for the logo tile and the short section rules only, as seen in the capture.
- Do set headlines in Roboto 700 and body in Roboto 300 or 400.
- Don't add shadows to cards; the measured system is flat.
- Don't use the browser default blue (`#0000ee`) for links.
- Don't treat advertisement slots as brand components.

## Responsive Behavior
Only a 390px mobile pass was measured. Results: the lead h1 drops from 32px to 26px (line height 33.8px); the body text role is 18px / 400 / 23.4px; a "Subscribe" button with white text on black is the detected call to action. Breakpoints, navigation collapse and column changes were not measured.

## Iteration Guide
1. Start from the frontmatter tokens; do not introduce new greys.
2. Build the lead story as photo plus a `breaking-red` card with white 32px Roboto 700 text.
3. Use the 10px card radius and 10px padding/gap rhythm for lists.
4. For action buttons use black fill and white text; header buttons 18px radius, 36px high.
5. Mark section starts with a short vertical `brand-orange` rule and an uppercase label.
6. Verify any new value against `web/data/extracted/al-jazeera.json` before adding it.
