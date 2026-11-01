---
version: alpha
name: Dove
category: "Beauty & Personal Care"
description: "Dove (dove.com, US English home page): a navy-and-white personal-care storefront. Navy #001f5f buttons with square 0px corners and white SHOP NOW labels, #3b3b3b body copy in Sofia Pro Regular, a Helvetica 40px light h1, a Century Old Style Italic 64px accent word, and #f6f6f6 grey bands between full-bleed navy promo blocks."
colors:
  canvas: "#ffffff"
  ink: "#3b3b3b"
  primary: "#001f5f"
  on-primary: "#ffffff"
  surface-light: "#f6f6f6"
  ink-muted: "#666666"
  ink-navy: "#002663"
  black: "#000000"
  hover-surface: "#f9fafb"
  hover-ink: "#062463"
  accent-teal: "#69c2c6"
  accent-lilac: "#f1ecf9"
  accent-pink: "#ff808b"
  accent-green: "#86d295"
  accent-orange: "#e48543"
  accent-yellow: "#efc041"
  gold: "#ab8457"
  tint-pink: "#ffe6e8"
  tint-green: "#e5f0e1"
  tint-blue: "#cef2f5"
  tint-orange: "#ffe9d4"
  gray-mid: "#d4d4d4"
typography:
  display:
    fontFamily: Helvetica, Arial, sans-serif
    fontSize: 40px
    fontWeight: 300
    lineHeight: 53px
    letterSpacing: 0.406px
  display-mobile:
    fontFamily: Helvetica, Arial, sans-serif
    fontSize: 28px
    fontWeight: 300
    lineHeight: 36px
    letterSpacing: 0.406px
  heading:
    fontFamily: CenturyOldStyleItalic, "Times New Roman", serif
    fontSize: 64px
    fontWeight: 400
    lineHeight: 70.4px
    letterSpacing: "-0.64px"
  heading-mobile:
    fontFamily: CenturyOldStyleItalic, "Times New Roman", serif
    fontSize: 36px
    fontWeight: 400
    lineHeight: 39.6px
    letterSpacing: "-0.36px"
  subheading:
    fontFamily: Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
  body:
    fontFamily: SofiaProRegular, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 25.6px
  body-mobile:
    fontFamily: SofiaProRegular, Helvetica, Arial, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 19.6px
  button:
    fontFamily: SofiaProRegular, Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 19.2px
    letterSpacing: 0.8px
rounded:
  none: 0px
  xs: 3px
  pill: 9999px
spacing:
  xs: 4px
  sm: 8px
  md: 10px
  lg: 14px
  xl: 20px
  xxl: 30px
  section: 80px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 14px 30px
    height: 49px
  button-primary-hover:
    backgroundColor: "{colors.hover-surface}"
    textColor: "{colors.hover-ink}"
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
  search-button:
    textColor: "{colors.ink-navy}"
    rounded: "{rounded.xs}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.none}"
    padding: 12px 45px 8px 0px
    height: 47px
  footer:
    textColor: "{colors.primary}"
    rounded: "{rounded.none}"
---

## Overview

Dove's US home page (https://www.dove.com/us/en/home.html, measured at 1280px wide with a 390px mobile pass) is a retail storefront for skin, hair and body care. The document title is "Skin, Hair, & Body Care for Authentic Beauty | Dove" and the meta description reads "Dove's personal care products are designed to celebrate your authentic beauty." The page reads as calm and promotional at once: a single deep navy (#001f5f) carries every button, link and heading accent, white (#ffffff) is the page canvas, and a pale grey (#f6f6f6) separates content bands.

The capture shows four recurring moves. A thin navy utility bar sits above a white header. A seasonal hero carousel advertises a "Limited edition" Holiday Treats collection with a navy SHOP NOW button and three carousel dots. An "EXPLORE DOVE" band on #f6f6f6 lists six category links (Bath & Body, Hair Care, Deodorant, Men, Baby, Kids & Teens), each with a trailing arrow. A full-bleed navy block with a curved lower edge carries white copy and a plain SHOP NOW text link. In the capture the product and category images did not render, so the screenshot shows alt text in their place; photography and illustration style are therefore not documented here.

The typographic signature is a pairing of an italic old-style serif word, "Limited edition", set in CenturyOldStyleItalic at 64px, with a plain sans headline underneath. Everything else is quiet: square corners, no measured box shadows on elements, uppercase button labels with 0.8px tracking.

## Colors

The palette is navy-first. `primary` #001f5f is the measured fill of every detected call-to-action (SHOP NOW, ACCESS VIRTUAL CLASS, SEE ALL SOLUTIONS, SHOP THE RANGE, SIGN ME UP, SEE ALL) and also the stylesheet value `--heading-color` and `--brand-color-blue`. `ink-navy` #002663 is a second, slightly different navy measured on the h1 and h3 text, the search button and the `--kr-button-text-color-primary` variable. Body copy is `ink` #3b3b3b (the most-read text colour, 2522 characters), with `ink-muted` #666666 for secondary text (226 characters) and #000000 for a small amount of black text.

Backgrounds measured by area: #ffffff (largest), #001f5f (second largest, the full-bleed promo blocks and utility bar), and #f6f6f6 (the Explore Dove band, named `--color-light-gray` in the stylesheet). The hover state of the primary button was recorded: the fill changes from #001f5f to #f9fafb, the label from #ffffff to #062463, and the border becomes a navy outline.

The root stylesheet also publishes a secondary palette used for editorial and product tinting: `--brand-accent-color-blue` #69c2c6, `--brand-accent-color-purple` #f1ecf9, `--brand-accent-color-pink` #ff808b, `--brand-accent-color-green` #86d295, `--brand-accent-color-brite-orange` #e48543, `--brand-accent-color-yellow` #efc041, `--brand-color-flat-gold` #ab8457, plus pale backgrounds `--bg-color-pink` #ffe6e8, `--bg-color-light-green` #e5f0e1, `--bg-color-blue` #cef2f5 and `--bg-color-orange` #ffe9d4, and `--color-mid-gray` #d4d4d4. None of these appeared as large areas in the home-page capture; they are listed because the site declares them. The rating-widget variables (`--kr-*`) and the AI-assistant stylesheet loaded from aiba.unileversolutions.com are third-party widget styling and are not brand tokens.

## Typography

Three families carry the page, all measured. `SofiaProRegular` (fallbacks Helvetica, Arial, sans-serif) is the working face: 5069 characters, used for body copy at 16px with a 25.6px line-height, for buttons at 16px with 0.8px letter-spacing, for links, inputs and the footer. Helvetica sets the document h1 ("Skin, Hair & Body Care for Authentic Beauty") at 40px, weight 300, line-height 53px, letter-spacing 0.406px, and also the h3 product names at 16px/19.2px. `CenturyOldStyleItalic` (fallbacks "Times New Roman", serif) is the display accent: the h2 "Limited edition" is 64px, line-height 70.4px, letter-spacing -0.64px.

Other measured sizes by character count are 20.16px (1223 characters), 14px (823), 20px (255), 52px (209, with -0.52px tracking), 12px (205) and 18px (133). Label sizes carry positive tracking: 14px at 0.7px, 12px at 0.6px, 16px at 0.8px. Weights in use are 400, 600, 300, 700 and 500. The site declares further faces in @font-face (SofiaProMedium, SofiaProBold, SofiaProBlack, SofiaProRegularitalic, CenturyOldStyleRoman, CenturyOldStyleBold, GothamBook, GothamMedium, ProximaNovaRegular, BlackerProTextMedium, MarkPro, EASTMDE and two "Dove Self Esteem" faces) and the home page links two font kits hosted on cdn.fonts.net.

Sofia Pro, Century Old Style and Blacker Pro are commercial typefaces. If they cannot be licensed, keep the measured metrics (16px/25.6px body, 0.8px button tracking, -0.64px on the 64px serif accent) and substitute a geometric sans for Sofia Pro and an italic old-style serif for Century; the exact substitute is not measured.

## Layout

The desktop page was measured at 1280px width with a scroll height of 6747px. The header block is 122px tall and 1280px wide on desktop. It contains a navy utility strip (Dove, Men+Care, Baby Dove on the left; "Find Dove Near You" and "Sign Up & Save" on the right, white text that underlines on hover) and a white row with the logo, a main navigation of PRODUCTS, OUR MISSION, ADVICE and QUIZZES in uppercase navy, and a search field with an underline rule and a magnifier button.

Content runs in full-width bands that alternate canvas white, #f6f6f6 grey and #001f5f navy. The category band lays six links in one row; the product band beneath the Holiday Treats headline shows four products in a row. Section copy is centred under a centred headline, with a centred SHOP NOW button. The footer is 824px tall and opens with a "Sign Up & Save" newsletter block.

Spacing observed in paddings and gaps: 20px is the most frequent padding (65 uses) and gap (21), followed by 16.8px, 15px, 14px and 10px; the button uses 14px 30px; large section padding of 80px appears six times; the search input is 47px tall with padding 12px 45px 8px 0px.

## Elevation & Depth

Depth is flat. The extractor recorded no box shadows on any measured element and the hover state of the primary button also reports `boxShadow: none`. Separation comes from colour blocks (white, #f6f6f6, navy) and from the curved lower edge of the navy promo block in the capture, not from shadows or borders.

The shipped stylesheet does declare a few shadows, listed here as declared values only, because their elements were not captured: `0 2px 6px 0 rgba(0,0,0,.15)` and hard offset "stacked" shadows such as `0 6px 0 #e0c586` and `0 25px 0 #ff808b`. The page also declares `--brand-overlay-color: rgba(0,0,0,.55)` for overlays. Popups, cookie consent (the extractor hid a `content-panel-container` overlay), the back-to-top circle and the AI assistant are not brand UI and are excluded from the tokens.

## Shapes

Corners are square. The primary button, text input, links and footer all measure 0px radius. The only small radius recorded on a control is 3px on the Search button, and elements that are circles (the carousel dots, the round back-to-top control, arrow chips) report 50% in the border-radius frequency table (11 elements), which the token file stores as `pill`. Other radii appear only in the stylesheet corpus (for example 10px, 5px, 4.8px, 48px and 25px) and were not matched to a captured element.

Borders are rare: the only border colour measured is #001f5f (6 uses), used for the outline state of buttons. The hero and navy promo blocks use a curved lower edge rather than a radius on a card; the curve is visible in the capture but its geometry was not measured.

## Components

**Primary button.** `button-primary` is an anchor with `backgroundColor` #001f5f, white text, SofiaProRegular 16px, letter-spacing 0.8px, padding 14px 30px, height 49px and radius 0px; widths follow the label (153px for SHOP NOW, 252px for ACCESS VIRTUAL CLASS). Labels are written in capitals. On hover the button reverses to a near-white #f9fafb fill with #062463 text and a navy outline.

**Text link.** `link` uses #001f5f in SofiaProRegular 16px/25.6px; hover adds an underline (recorded on QUIZZES, Bath & Body, Hair Care, Deodorant, Men, Baby and Kids & Teens). Category links end in an arrow glyph.

**Utility and header links.** White 16px labels on the navy strip underline on hover. The measured "Skip to content" link reports Source Sans Pro 600; that is an accessibility link, not the navigation face.

**Search.** The input is white, #3b3b3b text, 47px high, with a 3px-radius icon button in #002663 whose hover fill is a translucent grey.

**Carousel controls.** Three small dots and previous/next chevrons sit under the hero button; they are round (50%).

**Footer.** The footer text colour is #001f5f at 20px/24px SofiaProRegular and its child text uses #666666, #ffffff and #3b3b3b.

## Design System Architecture

No public Dove design system or brand-guidelines site was found on the pages opened (home page and its header and footer links), so this section describes the de-facto system from the shipped code. The home page at https://www.dove.com/us/en/home.html loads a base stylesheet from `/etc.clientlibs/unilever/clientlibs/clientlib-base...min.css`, two font kits from cdn.fonts.net, Google's Material Icons font, and a separate AI-assistant stylesheet from aiba.unileversolutions.com. The Unilever parent links (unileverusa.com) are the only corporate pages linked in the footer area that were found.

Tokens are CSS custom properties on the root: font roles `--primary-brand-font` (SofiaProRegular), `--secondary-brand-font` (CenturyOldStyleBold), `--tertiary-brand-font` (CenturyOldStyleItalic) and `--quaternary-brand-font` (BlackerProTextMedium); colours named `--brand-color-blue`, `--brand-accent-color-*`, `--bg-color-*`, `--color-light-gray`, `--color-mid-gray`, `--color-dark-gray` (#3b3b3b); and `--heading-primary-letter-spacing-desktop` (-0.64px) against `--heading-primary-letter-spacing` (-0.36px). Button variables are `--btn-text-color` (#fff) and `--btn-font-weight` (400).

## Do's and Don'ts

Do use #001f5f for every button fill and #3b3b3b for running text on white. Do pair one italic serif phrase (CenturyOldStyleItalic) with a plain sans headline, as the Limited edition blocks do. Do write button labels in capitals with 0.8px tracking and keep them at 14px 30px padding with a 49px height. Do keep corners square on buttons and inputs, and let navy, white and #f6f6f6 bands do the separating work.

Don't add shadows to cards or buttons; none were measured on elements. Don't round primary buttons. Don't treat the cookie panel, back-to-top circle, AI assistant or review-widget variables as brand tokens. Don't use #0000ee-style browser link blue; links on this page are navy. Don't claim image styling from the capture: the product images did not load there.

## Responsive Behavior

Only the 390px mobile pass was recorded; layout reflow, menu behaviour and breakpoints are not measured. What the pass did record: the h1 falls from 40px to 28px (line-height 36px), the h2 serif accent from 64px to 36px (line-height 39.6px, letter-spacing -0.36px), and body text from 16px/25.6px to 14px/19.6px. The primary button is unchanged at 16px, padding 14px 30px, 153px by 49px. The header block is 90px tall at 390px against 122px at 1280px. Mobile character counts by size include 14px, 16px, 20.16px, 12px, 18px, 30px, 36px, 24px and 28px.

## Iteration Guide

Start from the tokens: canvas #ffffff, ink #3b3b3b, primary #001f5f. Build the hero as a white or navy full-width band with a serif-italic accent word over a sans headline, then one SHOP NOW button. Add a #f6f6f6 band for category links. Check every button against 14px 30px, 49px tall, 0px radius, 0.8px tracking. Check hover against #f9fafb / #062463. Re-measure before adding any new colour from the accent list, because the accent hues are declared but were not seen in large areas on the captured page.
