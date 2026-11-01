---
version: alpha
name: Bristol Myers Squibb
category: "Pharma"
description: "Bristol Myers Squibb corporate home page (bms.com) measured 2026-10-15: white canvas with warm near-black ink #363131, square magenta #be2bbb 72px buttons in 14px uppercase (hover #ab27a8), violet #3312af tags, glowing 400px-radius section pills, and Basel Grotesk at weights 300 to 700 with a 56px light headline."
colors:
  canvas: "#ffffff"
  ink: "#363131"
  primary: "#be2bbb"
  on-primary: "#ffffff"
  violet: "#3312af"
  ink-black: "#000000"
  hairline: "#3631314d"
  primary-hover: "#ab27a8"
  footer-border: "#0000001a"
typography:
  display:
    fontFamily: "\"Basel Grotesk\", sans-serif"
    fontSize: 56px
    fontWeight: 300
    lineHeight: 62px
    letterSpacing: "-1.12px"
  display-mobile:
    fontFamily: "\"Basel Grotesk\", sans-serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 44px
    letterSpacing: "-0.8px"
  heading:
    fontFamily: "\"Basel Grotesk\", sans-serif"
    fontSize: 40px
    fontWeight: 400
    lineHeight: 44px
    letterSpacing: "-0.8px"
  subheading:
    fontFamily: "\"Basel Grotesk\", sans-serif"
    fontSize: 28px
    fontWeight: 400
    lineHeight: 30px
    letterSpacing: "-0.56px"
  body:
    fontFamily: "\"Basel Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 400
    lineHeight: 22px
  button:
    fontFamily: "\"Basel Grotesk\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 14px
    textTransform: uppercase
  nav:
    fontFamily: "\"Basel Grotesk\", sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 22px
  tag-label:
    fontFamily: "\"Basel Grotesk\", sans-serif"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 12px
    textTransform: uppercase
rounded:
  xs: 24px
  sm: 400px
  none: 0px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 16px
  s6: 20px
  s7: 24px
  s8: 30px
  s9: 32px
  s10: 40px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 24px
    height: 72px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 24px
    height: 72px
  tag-label:
    textColor: "{colors.canvas}"
    typography: "{typography.tag-label}"
    rounded: "{rounded.none}"
  skip-link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
    padding: 8px 20px
  footer:
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
    borderColor: "{colors.footer-border}"
---

## Overview

The measured page is the home page of Bristol Myers Squibb, `https://www.bms.com/` (title "Bristol Myers Squibb - Global Biopharmaceutical Company", `lang` en). It is a corporate pharmaceutical site that leads with portrait photography and a clear editorial hierarchy. The capture shows a thin magenta stripe across the very top, a white header 115px high with the purple hand-mark and gray "Bristol Myers Squibb" wordmark at the left and six text links at the right (Science, Medicine, Impact, News, About us, Search). The hero is split: at the left the light 56px headline "World-class science. Life-changing impact.", a short paragraph ("Get an inside look at the work we do every day to define what's possible and transform patients' lives through science.") and a square magenta button "SEE WHAT DRIVES US →"; at the right a collage of three photographs: a smiling woman making a heart shape with her hands, two raised hands against a blue sky, and a petri dish with bubbles.

The page continues with a section title "Life + Science" inside a softly glowing pill, followed by three portrait cards, each carrying a violet "FEATURED" chip and a white "PATIENTS" chip over the photograph and a quoted patient line below ("'I'm not just watching life anymore, I'm participating'", "'I was told that I was never going to be as active as I wanted to be'", "'It was my final shot'"), then a magenta "VIEW MORE STORIES →" button. "Areas of focus" repeats the glowing pill, followed by ruled rows (Oncology, Hematology) with a short description and an uppercase link such as "LEARN MORE ABOUT ONCOLOGY →". The footer has a "Navigation" column list (Our science, Research & development, Medicines and more).

The voice is human and mission-led: patient quotes, "Life + Science", "What drives us". Light type and generous white space calm a clinical subject; magenta marks every action. The measurement saw 262 visible elements at 1,280px and a 5,782px scroll height.

## Colors

- **Canvas `#ffffff`** is the dominant background (area weight 5,148). A translucent white `#ffffffb2` (weight 145) is the fill of the glowing pills.
- **Ink `#363131`** (a warm near-black) is the text color for headings and body (2,873 characters); the hairline `#3631314d` and the lighter `#3631311a` are the same ink at 30 and 10 percent alpha, measured as border colors.
- **Magenta `#be2bbb`** (the root variable `--bs-primary`, `#BE2BBB`) is the fill of the primary buttons and the skip link (area weight 188); its hover value is `#ab27a8`. White text (`#ffffff`, 170 characters) sits on it.
- **Violet `#3312af`** (the root variable `--bs-secondary`) fills the "FEATURED" chips (area weight 8) and colors 24 characters of text ("PATIENTS" labels); `#000000` appears in 6 characters.
- The page declares `--bs-gray: #4F4A4A`; the other Bootstrap variables in `:root` (`--bs-blue: #0d6efd`, `--bs-green`, `--bs-orange` and the like) are framework defaults, and `--swiper-theme-color: #007aff` is Swiper's default, none of them BMS colors.
- Other measured borders are `#00000033` (3 elements) and the footer's 1px `#0000001a`.

Gradients and glows are limited to the section pills: an inset magenta glow (`rgba(190, 43, 187, 0.3) 0px 0px 40px 0px inset`) layered with an inset white glow (`rgba(255, 255, 255, 0.8) 0px 0px 20px 0px inset`).

## Typography

One family is measured: **Basel Grotesk** (3,073 of 3,073 characters), loaded at 300, 400, 500 and 700. The stylesheet also declares BMSHumanity, FontAwesome, icomoon, Lato (2 declarations), swiper-icons and VideoJS. No license page was opened, so treat Basel Grotesk as a licensed commercial face.

| Role | Size / line height | Weight / tracking |
| --- | --- | --- |
| Display (h1) | 56px / 62px | 300, -1.12px (40px / 44px, -0.8px at 390px) |
| Heading (h2, "Life + Science") | 40px / 44px | 400, -0.8px |
| Subheading (h3, "Oncology") | 28px / 30px | 400, -0.56px |
| Body | 16px / 22px | 400 |
| Button | 14px / 14px | 500, uppercase |
| Skip link (nav) | 16px / 22px | 700 |
| Tag / link label | 12px / 12px | 500, uppercase |

The most-read sizes are 18px (1,211 characters), 16px (1,108), 14px (474), 12px (87), 40px (57), 28px (54), 56px (43), 22px (34) and 104px (5). Weights: 400 (2,479 characters), 500 (526), 300 (48) and 700 (20). Headlines carry -2% tracking (40px/-0.8px, 28px/-0.56px, 56px/-1.12px) and the 104px size -1%; no other letter spacing was measured. Weight 300 appears on 48 characters, including the hero h1. **Font substitutes:** use a neutral grotesque with 300, 400, 500 and 700 weights; keep the display light and the headline tracking at -2%.

## Layout

The page uses a two-column hero (text left, three-photo collage right), then full-width sections with a left-aligned pill title and content below. Photo cards run three across with a quote below each; the "Areas of focus" rows are three-part (name, description, link) separated by hairlines. The header block measured 115px high.

Measured paddings are 56px (17 times), 32px (10), 24px (10), 8px and 12px (7 each), 40px (6), 48px (5), 20px and 16px (2 each) and 30px (1); gaps are 8px (52), 4px (28), 12px (18), 10px (14), 40px (12), 24px (10), 16px (8), 120px (8), 48px and 56px (4 each) and 20px (2). The h1 block carries 24px bottom padding, and the large 120px and 56px values separate major sections. Container widths and breakpoints were not measured.

## Elevation & Depth

The page is flat except for the glowing pills. No resting card shadow was measured; the only measured box shadow is the double inset glow described above (4 elements). The stylesheet corpus also holds Bootstrap focus rings (`0 0 0 0.25rem rgba(13, 110, 253, 0.25)` in 28 declarations) and BMS-tinted focus shadows (`0px 0px 0px 2px rgba(190, 43, 187, 0.2)`, 24 declarations; `0 0 0 0.25rem rgba(200, 75, 197, 0.5)`), which belong to form-control states. Depth is otherwise created by photography and white space.

## Shapes

Measured radii are only 24px (6 elements) and 400px (4 elements, the same count as the elements with the inset glow; the capture shows two such pills, "Life + Science" and "Areas of focus"). The primary and secondary buttons and the skip link measured 0px radius, so they are square. The tokens are `xs` 24px, `sm` 400px and `none` 0px. The stylesheet declares many other radii (4px 114 times, 30px 44, 8px 38, 2px 22, 3px 18, 32px 18, 9999px 12, 60px 12), but they were not tied to measured elements.

The contrast of sharp rectangles (buttons, the photographs in the capture) with fully rounded glowing pills (section titles) and tag chips is the main shape signature. Arrows inside buttons are thin outline glyphs.

## Components

**Primary button.** Magenta `#be2bbb` fill, white text, Basel Grotesk 14px/14px weight 500 uppercase, 0px radius, padding 24px, 72px high ("SEE WHAT DRIVES US" 344px wide) with a trailing arrow. Hover changes the fill to `rgb(171, 39, 168)` (`#ab27a8`) with the text staying white. The second button, "VIEW MORE STORIES", has the same style and measured 339px wide; at 390px the primary spans 358px.

**Skip link.** "Skip to Main Content", magenta fill, white 16px/700 text, padding `8px 20px`, 38px high and 196px wide.

**Tags.** 12px/500 uppercase labels in small rounded chips: "FEATURED" white on violet `#3312af`, "PATIENTS" in violet on a white chip, set over the top-left of each portrait.

**Section pill.** A 400px-radius pill with translucent white fill and the magenta and white inset glow, holding a 40px/400 title.

**Photo card.** A rectangular portrait with a quote below it in `#363131` at the body size.

**Focus-area row.** A hairline-separated row with a 28px/400 name, a description paragraph and an uppercase link with an arrow.

**Footer.** `#363131` text at 22px/24px (heading size), 1px `#0000001a` border, 456px high.

No text input was detected.

## Design System Architecture

No public Bristol Myers Squibb design system or brand-guideline page was found: the home page HTML opened at https://www.bms.com/ links to news and media pages (`/news-and-media.html`, press releases, media contacts) and to science content, but to no design-system or brand-guideline page. The site is built on Adobe Experience Manager client libraries named `bmscorpredesign` (`clientlib-fonts` and `clientlib-site` stylesheets), with Bootstrap 5 variables (`--bs-*`) in `:root`.

Within that Bootstrap layer, BMS overrides the palette: `--bs-primary` is `#BE2BBB`, `--bs-secondary` is `#3312AF` and `--bs-gray` is `#4F4A4A`, while other `--bs-*` colors keep Bootstrap's defaults. The extraction recorded 22 root variables in total, including Swiper's `--swiper-navigation-size: 44px`. Components are drawn from Bootstrap-style classes with brand colors applied.

## Do's and Don'ts

**Do**
- Set headlines in Basel Grotesk 300 or 400 with -2% tracking and large size steps (56, 40, 28px).
- Use magenta `#be2bbb` for calls to action as square 72px buttons with 14px uppercase labels and arrows.
- Use violet `#3312af` for category chips only.
- Frame section titles in glowing, fully rounded pills.
- Lead with real patient and scientist photography and short quotes.

**Don't**
- Don't round buttons or photographs; the measured radius is 0px.
- Don't use Bootstrap's default blue `#0d6efd` or Swiper's `#007aff`.
- Don't use pure black for body text; the measured ink is `#363131`.
- Don't add shadows to cards; the only measured shadow is the pill glow.

## Responsive Behavior

One mobile pass was recorded at 390px. Measured values: the h1 becomes 40px/44px weight 300 with -0.8px tracking, 358px wide and 104px high (56px at desktop); the h2 becomes 20px/22px weight 400 and is 125px wide; body text stays 16px/22px and spans 358px; the primary button stays 14px/500 uppercase with 24px padding and 72px height and spans 358px; the header block is 390px by 69px. Mobile font sizes by character are 16px (2,280), 14px (474), 22px (88), 20px (57), 12px (48), 40px (43) and 64px (5). The layout of the photo collage, cards and footer at mobile width was not measured.

## Iteration Guide

1. Set canvas `#ffffff`, ink `#363131`, magenta `#be2bbb` (hover `#ab27a8`), violet `#3312af`.
2. Load Basel Grotesk (300, 400, 500, 700) and apply 56/40/28/16/14/12px with the measured tracking.
3. Build the 115px header with a magenta top stripe, then the split hero with a three-photo collage.
4. Add glowing pill section titles, portrait cards with violet chips, and square magenta buttons.
5. Check mobile only against the measured 40px headline and full-width 358px button.
6. Measure any new component first with `node web/scripts/extract-tokens.mjs --slug=bristol-myers-squibb--<page> --url=<url> --force --no-motion`.
