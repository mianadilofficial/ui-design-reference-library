---
version: alpha
name: UFM Fuji Super
category: "Thai Brands"
description: "UFM Fuji Super, a Bangkok Japanese-style supermarket whose tagline is Thai Smiles Japanese Styles, pairs a warm cream canvas (#fef8eb) with a tomato-red main color (#e84e40), a leaf green accent (#88c640), Kalam handwriting headings at 46px and Poppins body text with Noto Sans Thai fallback."
colors:
  canvas: "#fef8eb"
  page-body: "#ffffff"
  ink: "#212529"
  primary: "#e84e40"
  on-primary: "#ffeff0"
  ufm-green: "#88c640"
  ink-secondary: "#475467"
  ink-muted: "#757575"
  ink-soft: "#212529bf"
  text-input-border: "#dee2e6"
typography:
  display:
    fontFamily: Kalam, cursive
    fontSize: 46px
    fontWeight: 700
    lineHeight: 55.2px
  display-mobile:
    fontFamily: Kalam, cursive
    fontSize: 30px
    fontWeight: 700
    lineHeight: 36px
  heading:
    fontFamily: Poppins, "Noto Sans Thai", sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 24px
  body:
    fontFamily: Poppins, "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 600
    lineHeight: 24px
  button:
    fontFamily: Poppins, "Noto Sans Thai", sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Poppins, "Noto Sans Thai", sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
    textTransform: capitalize
rounded:
  xs: 5px
  sm: 6px
  md: 8px
  lg: 30px
  pill: 9999px
spacing:
  s1: 2px
  s2: 6px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 24px
  s8: 48px
  s9: 50px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.primary}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.nav}"
    padding: 8px
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 6px 12px
    height: 38px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink}"
    padding: 48px 0px 24px
---

## Overview

UFM Fuji Super presents itself with the tagline "Thai Smiles Japanese Styles", which is set in the page's one handwritten line at the top of the header, and with the message "We Select good things for our valued customer" in English, Japanese and Thai. The company name in the footer-level text is "UFM Fuji Super Co.,Ltd." and the home page places the brand in the Sukhumvit area of Bangkok. The site is a cheerful, bilingual (and trilingual) promotional storefront for a Japanese-style supermarket, not a transactional shop; its nav offers About us, Products, Promotion, Services and Career, alongside Login and Sign up.

The capture opens with a white strip carrying two oval UFM Fuji Super logos, the tagline in red Kalam handwriting, a cartoon cat mascot dressed in a pink Japanese costume, and three small round flag buttons for language. A solid tomato-red navigation bar follows, with white labels, small icons and a search and cart cluster at the right. A wide carousel banner announces ordering through GrabMart in Thai, English and Japanese on a mint-green field. Then comes a "Topics" header with a small red tab at its left and a thin red rule, and a very large poster-style image explaining a points program: "Get Free 50 Points purchases on Grab Only. Register Now!", "25 BAHT = 1 POINT" and "800 Points = DISCOUNT 100 BAHT", in numbered steps with QR codes. Below, square tiles labelled NEWS, HELPFUL TIPS, CULTURE and SEASONAL carry the mascot in different poses. Official sections named on the page are Topics, New product, Promotion, Our Products and Official SNS.

The voice is friendly, playful and promotional, with exclamation marks, mascots, Japanese lettering and bold numbers.

## Colors

The stylesheet publishes the brand colors as custom properties: `--main-color` #e84e40 (`primary`), `--sub-color` #FFEFF0 (`on-primary`, written in lowercase here as #ffeff0) and `--ufm-green` #88C640 (`ufm-green`), plus `--container-width` 1140px. The measured page area is dominated by `canvas`, a warm cream (#fef8eb), with white (`page-body`, #ffffff) for cards, the header strip and the footer. `ink` is #212529, the most-read text color, with `ink-secondary` (#475467), `ink-muted` (#757575) and a 75 percent version `ink-soft` (#212529bf) for lesser text.

Red is the main action and heading color. It fills the navigation bar and buttons, colors the "Topics" heading and the handwritten tagline, and turns nav labels red on hover (hover measured from white to #e84e40). Green appears as a measured background (#88c640) and in the brand's logo accents. Bootstrap defaults also appear in the measurement (#0d6efd for links, #dc3545 for a danger color, #dee2e6 for the input border); the blue and danger values are framework defaults, not brand colors, and are left out of the tokens. The input border #dee2e6 is kept since it is a measured form-control style.

The large poster imagery uses its own red, black and pastel pink, which comes from illustration and is not part of the interface tokens.

## Typography

Two families split the voice. Kalam, a handwriting face loaded at weight 700, sets the hero tagline and the poster-like display lines at 46px with line height 55.2px (`display`), shrinking to 30px with 36px line height at 390px width (`display-mobile`). Poppins in weights 400, 500, 600 and 700 sets everything else, with Noto Sans Thai (a variable font loaded for weights 100 to 900) behind it for Thai text. Font Awesome 6 provides the icons.

The text styles are: section heading at 20px, 500, line height 24px (`heading`), body at 16px, weight 600, line height 24px (`body`), buttons at 16px weight 400 (`button`) and navigation at 14px with line height 21px and capitalize transform (`nav`). Other sizes measured are 24px, 12px and 40px. By character count, 16px dominates (865 characters), then 14px, 20px, and 46px for the tagline.

Both Kalam and Poppins are open-source Google Fonts families, so no substitute is required.

## Layout

The page is 7097px tall at 1280px. A container width of 1140px is published as `--container-width`, and the capture shows content centred in a column narrower than the viewport, with the cream canvas visible at both sides. Sections stack: header strip, red nav, banner carousel, Topics, poster block, four-up tile grid, and further product and promotion sections.

Paddings measured: 12px (most frequent, 67 times), 16px, 8px, 10px, 6px, 48px, 2px, 50px and 24px, represented as `s1` to `s9`. The footer uses 48px top and 24px bottom padding. Tiles in the four-up grid are equal squares with white backgrounds and small gaps.

## Elevation & Depth

Depth is light. One drop shadow was measured, rgba(0, 0, 0, 0.15) 0px 8px 16px 0px, on a single element. Borders carry most separation: translucent black #0000002d, grey #757575 and soft red #fecdca. A floating round chat button sits at the right edge on a white circle. Keep the interface flat and let the colorful illustrations and posters supply interest.

## Shapes

Radii in the measurement are 6px (most used, `sm`), 5px (`xs`), 8px (`md`), 30px (`lg`), 50% circles and an 800px full-pill value. Buttons and inputs use 6px. Cards and tiles use 6px or 5px, sometimes only on the top or bottom pair of corners (5px 5px 0px 0px and 0px 0px 5px 5px, used for tabs and attached panels). Language flags, the chat bubble and mascot badges are circles.

## Components

**Primary button (`button-primary`).** #e84e40 fill, #ffeff0 text, 16px weight 400, 6px 12px padding, 38px tall, 6px radius, 1px border in the same red. Seen as "Contact us".

**Secondary button (`button-secondary`).** Measured with the same fill, text, radius and size as the primary; the "View All" link uses it.

**Navigation (`nav`, `nav-link`).** Red bar, white 14px capitalized labels with 8px padding, small icons before each label; hover turns the label red-on-white (#e84e40).

**Text input (`text-input`).** White fill, #212529 text, 16px, 6px radius, 38px tall, 1px #dee2e6 border.

**Card (`card`).** White, 6px radius, no shadow; holds illustrated mascot art with large uppercase red or black labels.

**Footer (`footer`).** White background, #212529 text, 48px top and 24px bottom padding.

## Design System Architecture

No public design system or brand guideline was found; the home page content and the about-us path (HTTP 404) gave only copy. The shipped system is Bootstrap 5 (its `--bs-*` variables are present) customized by four site variables: `--main-color`, `--sub-color`, `--ufm-green` and `--container-width`. SweetAlert2 variables (`--swal2-*`) and Font Awesome 6 are also loaded. Because the brand colors are named variables, they are authoritative; Bootstrap's blue and success colors are defaults.

## Do's and Don'ts

- Do use #e84e40 for navigation, buttons, section headings and the handwritten tagline.
- Do set the tagline and big headings in Kalam 700 and all else in Poppins.
- Do keep the cream #fef8eb canvas behind white cards.
- Do keep the mascot, bilingual Thai, English and Japanese lettering, and exclamation-style copy.
- Don't use Bootstrap blue #0d6efd for links or buttons.
- Don't put heavy shadows on tiles; the single measured shadow is soft.
- Don't use #88c640 for text; it is a background accent.
- Don't set body text in Kalam.

## Responsive Behavior

The mobile measurement at 390px keeps Poppins body size the same family, with the 12px smallest text on that view, and the Kalam display drops from 46px to 30px. The container is capped at 1140px, so wide screens add cream margins while narrow screens fill the width. Tap targets stay at 38px minimum for buttons and inputs.

## Iteration Guide

1. Start with #fef8eb canvas, white cards and #212529 text in Poppins.
2. Put #e84e40 in the nav bar and every button, with #ffeff0 text, 6px radius.
3. Use Kalam 700 at 46px only for the tagline and display headings.
4. Add green #88c640 sparingly as an accent, and mascot illustrations for personality.
5. Keep depth to borders; allow the single soft 8px 16px shadow only where needed.
6. Re-measure before adding any new value.
