---
version: alpha
name: Farm Minerals
category: "Retail & E-commerce"
description: "Farm Minerals CropTab promo page (farmminerals.com/promo): deep moss #404f1d ink, olive #636f3d buttons and headings, warm beige #f4ede6 sections, Aeonik at 122.88px with -2.4576px tracking, tiny 11.06px uppercase pill buttons, a blurred foliage hero around a 3D carbon tablet."
colors:
  canvas: "#ffffff"
  ink: "#404f1d"
  primary: "#636f3d"
  on-primary: "#f4ede6"
  ink-moss-deep: "#4c5b20"
  hairline-light: "#ffffff1a"
  beige: "#f4ede6"
  green-light: "#7c914c"
typography:
  display:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 122.88px
    fontWeight: 400
    lineHeight: 135.168px
    letterSpacing: "-2.4576px"
  display-mobile:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 46.8px
    fontWeight: 400
    lineHeight: 51.48px
    letterSpacing: "-0.936px"
  heading:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 44.2368px
    fontWeight: 400
    lineHeight: 41.1402px
    letterSpacing: "-0.663552px"
  subheading:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 20.7667px
    fontWeight: 400
    lineHeight: 22.8434px
    letterSpacing: "-0.207667px"
  button:
    fontFamily: Aeonik, Arial, sans-serif
    fontSize: 11.0592px
    fontWeight: 400
    lineHeight: 13.271px
    textTransform: uppercase
rounded:
  xs: 1.6px
  sm: 2.33px
  md: 24.58px
  pill: 9999px
spacing:
  s1: 4.67px
  s2: 7.74px
  s3: 9.22px
  s4: 10.81px
  s5: 12.29px
  s6: 15.36px
  s7: 15.97px
  s8: 16px
  s9: 16.96px
  s10: 18.43px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10.8134px 15.9744px
    height: 35px
  button-primary-hover:
    backgroundColor: "{colors.hairline-light}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10.8134px 15.9744px
    height: 35px
  link:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 10.8134px 15.9744px
---

## Overview

The measured page is the CropTab™ promotion page of Farm Minerals (https://www.farmminerals.com/promo, title "CropTab™ – High-Efficiency NPK Fertilizer | Farm Minerals"). It sells one idea: "100 kg of fertilizer — reimagined as a 13 g tablet." The hero shows an enormous wordmark "CropTab™" at the top left in cream, a thin horizontal rule, the strapline "FERTILIZER, REINVENTED." at the left and the product description at the right, a blurred olive foliage background, and a floating dark 3D render of a rounded tablet at the centre. At the bottom left the hero says "For Your Crops. For the Planet." followed by "CARBON-CAPSULE TECHNOLOGY THAT DELIVERS NUTRIENTS WITH ZERO WASTE AND ZERO EMISSIONS." The top bar has a "MENU" control at the left, the Farm Minerals leaf logo in the centre and "CONTACT US" at the right, with a translucent pill "REQUEST ACCESS" below it.

The rest of the page, read from the page markup, follows a persuasion sequence: "Most fertilizers never make it to your plants", "Up to 70% of nitrogen is lost before crops can use it", "How much could you grow — if nothing was wasted?", "We found a better way: Meet CropTab™", feature statements ("Smaller than a plant cell", "Effortlessly integrative", "Zero manufacturing emissions", "Just drop it", "Reinventing delivery") and a request form titled "Request Products for Your Farm". Product names in the menu are CropTab™ NPK, NutriPeak™ Base and ElevateFeed™. The voice is scientific yet plain: short claims followed by a concrete number.

In the capture the area below the hero is blank white because the page reveals sections on scroll; the measured areas show the real section colours: beige `#f4ede6` and moss `#404f1d`.

## Colors

- Ink `#404f1d` (declared `--main-green`) is the deep moss green: the dominant text colour on beige (1078 characters) and the largest dark section area (6492).
- Beige `#f4ede6` (declared `--beige`) is the largest area colour (7686) and the colour of text on green (541 characters). It is also the label colour on buttons (on-primary).
- Primary `#636f3d` (declared `--heading-color`) is the olive green: the fill of the measured "REQUEST ACCESS" and "LEARN MORE" buttons and the colour of headings and accents (152 characters).
- Ink moss deep `#4c5b20` (77 characters) is a darker green for emphasised text.
- Green light `#7c914c` (declared `--green-light`) is a declared lighter green.
- Canvas `#ffffff` is the measured page body background; white also fills the secondary button (area 5) and is declared `--white`.
- Hairline light `#ffffff1a` (white at 10%) is the hover fill of the translucent button; the resting translucent fill measures `rgba(255, 255, 255, 0.07)`. Other measured translucent areas: `#ffffff12`, `#ffffff0d`, `#7a835f1a`, `#4e553833`.

The mood comes from the photography of green foliage behind the hero, not from additional palette colours. The tablet render is neutral charcoal.

## Typography

One family: Aeonik (weights 400 and 500), with Arial and sans-serif as the declared fallback. All 1904 measured characters are Aeonik. Aeonik is a commercial grotesque; Arial is the only substitute declared in the stylesheet.

Measured scale (desktop):

- Display: 122.88px, weight 400, line height 135.168px, letter spacing -2.4576px (-0.02em), for "CropTab™". A larger 92.8973px size is also among the most used sizes.
- Heading: 44.2368px on 41.1402px line height, -0.663552px tracking.
- Subheading: 20.7667px on 22.8434px, -0.207667px tracking ("For Your Crops. For the Planet." scale).
- Button: 11.0592px on 13.271px, uppercase, weight 400.

Frequent sizes by character count: 12.288px, 11.0592px, 92.8973px, 20.7667px, 30.72px, 10.8134px, 26.9107px and 18.432px. The fractional sizes show that type is scaled with the viewport. Small text is uppercase (strapline, descriptors, buttons); large text is sentence case with tight negative tracking.

## Layout

A full-viewport hero: wordmark, strapline, copy and CTA hug the left and right edges with a hairline rule across the width, and the product render sits dead centre. Header items sit at the extreme left, centre and right. The page then runs in alternating beige and moss bands (scroll height 15815px at 1280px, 701 visible elements). Spacing values measured: 4.67, 7.74, 9.22, 10.81, 12.29, 15.36, 15.97, 16, 16.96 and 18.43px (the values are scaled from a viewport unit, which is why they are fractional).

## Elevation & Depth

No box shadows are measured. Depth is atmospheric: a blurred foliage background with a dark, glossy 3D tablet in front, translucent glass-like pills (white at 7% to 10%) over imagery, and a hairline rule at 10% white. Section changes are made by flat colour.

## Shapes

The controls are pills: the measured buttons use a very large radius (768px on desktop, 975px on mobile, expressed in the token set as 9999px). Small decorative radii are 1.6px and 2.33px, and a 24.58px radius is also in the measured set (its element is not identified). The tablet is a softly rounded rectangle. The leaf mark in the logo is a three-leaf sprout.

## Components

- Primary button ("REQUEST ACCESS", "LEARN MORE"): fill `#636f3d`, text `#f4ede6`, Aeonik 11.0592px uppercase, padding 10.8134px 15.9744px, height 35px, pill radius.
- Translucent button: the hero's "REQUEST ACCESS" shows white at 7% opacity as fill, 10% on hover, with a dot on each side of the label.
- Secondary button ("REQUEST A SAMPLE"): white fill, text `#404f1d`, same size, padding and pill radius.
- Header: "MENU" with a small X-like glyph at the left; the centre logo; "CONTACT US" at the right.
- Hairline: a 10% white rule below the hero wordmark.
- Request form: a section titled "Request Products for Your Farm" with fields for primary crops and the type of fertilizer program currently used; field styling is not measured.

## Design System Architecture

No public design system or brand guideline was found: the page https://www.farmminerals.com/promo was opened and has no link to a design system, brand guideline or press kit, so none is cited. The root CSS declares five colour variables (`--green-light: #7c914c`, `--beige: #f4ede6`, `--white: #fff`, `--main-green: #404f1d`, `--heading-color: #636f3d`) and nothing else, so the palette is that short list. The page is built with Lenis smooth scrolling and Splide sliders (referenced in the page head), uses text-split reveal animations and class names such as `link-item` and `menu-link-heading`, and sizes type and spacing by viewport units, giving the fractional pixel values measured.

## Do's and Don'ts

Do:
- Pair moss `#404f1d` and beige `#f4ede6` as the base two-colour system and use olive `#636f3d` for actions and headings.
- Set the wordmark very large at weight 400 with -0.02em tracking.
- Keep small text uppercase in Aeonik and buttons as pills about 35px high.
- Put a clear numeric claim next to each statement ("13 g", "70%").

Don't:
- Use shadows or heavy borders; none are measured.
- Fill buttons with bright colours; the only fills are olive, white and translucent white.
- Use heavy weights; only weights 400 and 500 are loaded.
- Treat the blank white of the first capture as the page background of the scroll-revealed sections.

## Responsive Behavior

Measured with the 390px mobile pass: h1 "CropTab™" is Aeonik 46.8px at 51.48px line height and -0.936px tracking in `#f4ede6`; the h2 measures 29.64px; the primary button grows to 13.26px type, 43px height and padding 13.728px 20.28px with a 975px radius. Frequent mobile font sizes by character count are 13.416px, 13.26px, 12.48px, 10.764px, 46.8px and 31.2px. Layout reflow, menu behaviour and image arrangement at mobile width are not measured.

## Iteration Guide

1. Set `#f4ede6` and `#404f1d` as the section pair, `#636f3d` for actions.
2. Use Aeonik: 122.88px display at -0.02em, 20.77px subheads, 11.06px uppercase buttons.
3. Build pill buttons at 35px high with 10.8134px 15.9744px padding; add a translucent variant over imagery.
4. Place a centred 3D product render over blurred foliage in the hero.
5. Re-measure with `node web/scripts/extract-tokens.mjs --slug=farm-minerals --url=https://www.farmminerals.com/promo --force --no-motion` and run `node web/scripts/verify-designs.mjs --slug=farm-minerals`.
