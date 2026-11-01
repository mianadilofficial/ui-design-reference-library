---
version: alpha
name: "Muang Thai Life Assurance"
category: "Thai Brands"
description: "Muang Thai Life Assurance (MTL), measured live on its English home page: the proprietary Muangthai Life typeface at 400, 600 and 700, a magenta #ec008c brand accent with #ff0090 hover, a #4a4a4a ink, grey #d9d9d9 and #f1f1f1 buttons, bordered 12px product cards and a #212b36 footer."
colors:
  canvas: "#ffffff"
  ink: "#4a4a4a"
  primary: "#ec008c"
  on-primary: "#ffffff"
  surface-button: "#d9d9d9"
  accent-hover: "#ff0090"
  surface-2: "#212b36"
  surface-3: "#f7f7f7"
  ink-secondary: "#999999"
  ink-4: "#6d6e70"
  button-secondary-bg: "#f1f1f1"
typography:
  display:
    fontFamily: "\"Muangthai Life\""
    fontSize: 36px
    fontWeight: 700
    lineHeight: 60px
  subheading:
    fontFamily: "\"Muangthai Life\""
    fontSize: 24px
    fontWeight: 700
    lineHeight: 42px
  body:
    fontFamily: "\"Muangthai Life\""
    fontSize: 18px
    fontWeight: 400
    lineHeight: 27px
  button:
    fontFamily: "\"Muangthai Life\""
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  nav:
    fontFamily: "\"Muangthai Life\""
    fontSize: 18px
    fontWeight: 600
    lineHeight: 27px
rounded:
  xs: 7px
  sm: 8px
  md: 12px
  lg: 16px
  xl: 44px
  2xl: 54px
  3xl: 62px
  4xl: 91px
  none: 0px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 14px
  s6: 16px
  s7: 17px
  s8: 20px
  s9: 24px
  s10: 26px
components:
  button-primary:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.3xl}"
    padding: 8px 28px
    height: 46px
  button-primary-hover:
    backgroundColor: "{colors.accent-hover}"
  button-neutral:
    backgroundColor: "{colors.surface-button}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    height: 60px
  button-secondary:
    backgroundColor: "{colors.button-secondary-bg}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 16px
    height: 80px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.none}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    rounded: "{rounded.none}"
  card:
    textColor: "{colors.ink}"
    rounded: "{rounded.md}"
    borderColor: "{colors.ink}"
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
---

# Muang Thai Life Assurance

## Overview

This system was measured from the English home page of Muang Thai Life Assurance (MTL), a Thai life insurer, at https://www.muangthai.co.th/en; the document title is "Muang Thai Life Assurance- MTL | Life Assurance". The page is 4,118px tall at 1280px width after the cookie-consent backdrop (`cmp_modal_backdrop`) was hidden for measurement. It is a consumer insurance storefront: a white header with the pink "mtl" wordmark, the links Insurance, Services, Article and Contact Us, a search icon, the Muang Thai Smile Club and MTL Click app badges and a Thai flag language control, then a banner carousel promoting products ("D Health Lite", lump-sum cover of up to 5 million baht) over pink studio imagery.

Under the banner come quick links: two tiles with magenta icons labelled "Purchase Online" and "About MTL" on a pale grey fill, and two grey pills, "Find Branches" and "Find Network Hospitals". Two tab-style headings, "Recommended Products" (underlined in magenta) and "Muang Thai Smile Club", lead into a carousel of bordered product cards: "D Health Lite", "Care Plus" and "Muang Thai Smart Index 10/1 (Global) with Index-..." with a photograph, a two-line description, a "Compare" checkbox and a "Read more" outline pill. A dark "All Products" pill follows. The "Our Service" section shows four pale tiles (Payment Channels, Policy Loan, Policy Services, MTL Health Buddy) with pink-and-grey illustrations, a wide pink "Enjoy happiness via MTL Click" app-download banner, an "Article" row of three cards with dates and tag chips, and a dark footer with a "24 hours Call Center 1766" block.

The voice is reassuring and plain ("Put an end to hesitation", "Be prepared", "Total services of Muang Thai Life Assurance to make your life easier"). Imagery is bright studio photography of smiling people in pink and white clothing, with hand-lettered pink promotional headlines in the banners. Article cards carry Thai-language headlines, so the page mixes English chrome with Thai content.

## Colors

The canvas is white, #ffffff, the largest measured background. A very light grey, #f7f7f7 (`surface-3`), is the fill of the service tiles; #f1f1f1 (`button-secondary-bg`) fills the quick-link tiles; #d9d9d9 (`surface-button`) fills the grey pill buttons. The footer is a dark blue-grey, #212b36 (`surface-2`).

Text is a charcoal #4a4a4a (`ink`) for headings, navigation and card titles, a lighter grey #999999 (`ink-secondary`) for descriptions (the most-read text color, 3,427 characters), and a mid grey #6d6e70 (`ink-4`). White text is used in the footer and on dark buttons.

The brand accent is magenta. #ec008c (`primary`) is measured as a text color on 15 characters, as a background at weight 8, and is the color of the "Back to top" label; the hover state of nav links, product titles, the "View All" and "All Products" pills is #ff0090 (`accent-hover`), which is also the 1px border color measured once. The extractor's first-choice primary button was the grey "Find Network Hospitals" pill (#d9d9d9 fill, #4a4a4a label), so `primary` was reassigned to the magenta, which the capture shows on the logo, tab underline, icons, illustrations and chat button, and the generated grey is kept as `surface-button`. Other accents in the area list, #ffa802 and #fd7dad, are measured at small weights (11 and 12 in the first extraction) and are not tokenized. Blue rgb(0, 118, 255) appears only as a hover color on a menu of tag links and is not tokenized.

Borders are #999999 (24 elements) and #4a4a4a (16 elements), with a faint #e1e1e3.

## Typography

The page is set in one proprietary face, "Muangthai Life", loaded at weights 400 and 700 and measured on 5,036 characters, nothing else. Weight 400 covers 4,233 characters, 700 covers 651 and 600 covers 152. A root variable `--default-font` is "Muangthai Life", and the Tailwind-style variable names (`--fonts-h1: 30px`, `--fonts-h2: 26px`, `--fonts-h3: 20px`, `--fonts-text5: 17px`) record a separate scale in the shipped CSS, though the rendered sizes below are the measured ones.

Measured roles at desktop width:
- `display`: the section heading "Recommended Products" at 36px, weight 700, line-height 60px, in #4a4a4a.
- `subheading`: card titles such as "D Health Lite" at 24px, weight 700, line-height 42px.
- `body`: descriptive paragraphs at 18px, weight 400, line-height 27px, in #999999.
- `button`: 20px, weight 400, line-height 28px (the quick-link pills).
- `nav`: 18px, weight 600, line-height 27px, in #4a4a4a.

Sizes by character count are 18px (2,143), 20px (1,298), 16px (932), 24px (267), 36px (59), 12.24px (54, the "Read more" label at weight 700) and 22px (20, the footer). The type scale is therefore narrow and large for body text: 18px is the base, and 16px is used for fine print. Letter-spacing is normal; no uppercase transform is measured. Muangthai Life is not a public family, so any substitute will change character widths and the Thai glyph shapes; the file does not declare a fallback stack beyond the family name.

## Layout

The layout is a centred column on a white page. The header is a single horizontal bar with logo at left, navigation next to it and utility icons at the right edge. The banner carousel runs full width with pagination dots below. Quick links sit in one row, tile pair at left and pill pair at right, followed by the tabbed product carousel (three cards visible, arrows at the edge), a centred "All Products" pill, a four-column service tile row, a wide rounded banner image, a three-card article row and the footer.

Paddings by weight in the first extraction include 16px (38), 12px and 10px (30 each), 4px (24), 14px (19) and 24px (15). Gaps are 8px, 20px, 16px, 32px and 73px, the last used between larger blocks. The `spacing` tokens list 4, 8, 10, 12, 14, 16, 17, 20, 24 and 26px. The footer is a dense four-column link list under a heading row, set at 22px for the call-center number block and smaller for links; copyright and policy links sit on a strip below.

## Elevation & Depth

Depth is limited to one soft shadow: rgba(0, 0, 0, 0.2) 0px 0px 8px 0px, measured on six elements. Cards are separated by a 1px border in #4a4a4a rather than by shadow, which gives the product cards a crisp outlined look. Layering is otherwise provided by the pink banner artwork and the translucent #eaeaea80 fill measured on two elements. A cookie dialog and its dark backdrop were present in the original capture; they were hidden for the final measurement and are not part of the brand system.

## Shapes

Corners are moderately rounded and pill shapes are frequent. Measured radii are 7px (25 elements), 8px (15), 9999px (10), 12px (8), 50% (5), 44px (3), 91px and 62px (2 each), 16px and 54px (1 each), and one element that rounds only its bottom corners at 5px. The tokens `xs` 7px, `sm` 8px, `md` 12px, `lg` 16px, `xl` 44px, `2xl` 54px, `3xl` 62px, `4xl` 91px and `pill` 9999px record them. The quick-link tiles use 12px (`md`); the "All Products" pill uses 62px; the "Back to top" pill uses 54px; the "Read more" outline pills use 9999px; the grey "Find" buttons measure 0px radius in the role data even though the capture shows them as rounded, because the measured box was the inner element. Circles (50%) are the carousel arrows and icon chips.

## Components

**Primary button** (`button-primary`): the dark "All Products" and "View All" pill: #4a4a4a fill, white label at 20px, weight 700, padding 8px 28px, height 46px, 62px radius. On hover the fill changes to #ff0090 (`button-primary-hover`).

**Neutral button** (`button-neutral`): "Find Network Hospitals" and "Find Branches", a #d9d9d9 fill with a #4a4a4a 20px label and a height of 60px; this is the element the generator detected as the primary button.

**Secondary button** (`button-secondary`): "Purchase Online" and "About MTL", #f1f1f1 fill, #4a4a4a label, 16px padding, 80px height, 12px radius, with a magenta square icon at the left.

**Outline pill**: "Read more" with an arrow, 12.24px weight 700 in #4a4a4a, padding 10px 16px, 9999px radius, 1px border.

**Navigation** (`nav`, `nav-link`, `link`): white bar, #4a4a4a labels at 18px weight 600; each label turns #ff0090 on hover.

**Card** (`card`): white, 12px radius, 1px #4a4a4a border; the capture shows a photo, a bold title in #4a4a4a with a lighter subtitle, three lines of #999999 description, a "Compare" checkbox and the "Read more" pill. Article cards add date text and outlined tag chips.

**Footer** (`footer`): #212b36 fill, white text, headings "Products and Services", "Muang Thai Smile Club", "Log In", "Contact Us", "About MTL" and "Related websites".

The pink "แชทกับเรา" chat launcher (bottom right) and "Back to top" pill are utility controls and are not documented as brand components.

## Design System Architecture

No public design system or brand-guideline page was found linked from the home page, and none was opened for this document. The shipped CSS shows a utility-class (Tailwind-style) build: root variables such as `--tw-ring-shadow` and `--tw-ring-color`, a `--fonts-*` scale (for example `--fonts-h0`, `--fonts-h1` 30px, `--fonts-h2` 26px, `--fonts-h3` 20px, `--fonts-weight1` 800, `--fonts-weight2` 600, `--fonts-h-weight` 700) and a Swiper carousel color (`--swiper-theme-color: #007aff`, a library default that is not a brand color). The brand layer is the custom typeface, the magenta accent and the outlined pill and card shapes. Source reviewed: https://www.muangthai.co.th/en only.

## Do's and Don'ts

Do set all text in Muangthai Life, 18px weight 400 for body in #999999 and 700 for headings in #4a4a4a.

Do use magenta (#ec008c, hover #ff0090) for accents, icons, active tab underlines and hover states of titles and nav links.

Do use pill shapes for secondary actions ("Read more", "All Products") and 12px radii for tiles and cards.

Do outline product cards with a 1px #4a4a4a border and keep shadows to the single 8px soft value.

Don't use the library blue #007aff or the hover blue rgb(0, 118, 255) as brand colors.

Don't document the cookie dialog, chat launcher or back-to-top control as brand UI.

Don't fill buttons with magenta by default; the measured buttons are dark charcoal, grey or outlined, with magenta appearing on hover and in icons.

## Responsive Behavior

Not measured. The 390px mobile pass for this page returned a security-verification screen ("Performing security verification", set in system fonts, h1 40px) instead of the MTL home page, so no mobile values from the real site are recorded and none appear in the frontmatter. Breakpoints, column counts and navigation form on small screens are not measured.

## Iteration Guide

1. Start from `canvas` #ffffff, `ink` #4a4a4a, `ink-secondary` #999999, `primary` #ec008c and `surface-2` #212b36.
2. Use Muangthai Life; 36px/700 for section headings, 24px/700 for card titles, 18px/400 for body, 20px/400 for button labels.
3. Build the page order: header, banner carousel, quick-link tiles and pills, tabbed product cards, "All Products" pill, four service tiles, app banner, article cards, dark footer.
4. Use 12px tiles, 62px dark pills and 9999px outline pills, and #ff0090 for hover.
5. Run `node web/scripts/verify-designs.mjs --slug=muang-thai-life` after edits; re-measure with the extractor (popup-safe batch command in QUEUE_F_TASK.md) if the live page changes.
6. Leave out anything not in the frontmatter or `web/data/extracted/muang-thai-life.json`.
