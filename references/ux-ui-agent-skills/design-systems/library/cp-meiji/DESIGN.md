---
version: alpha
name: CP-Meiji
category: "Thai Brands"
description: "CP-Meiji (ซีพี-เมจิ), Thai dairy brand site: light gray #eeeeee canvas with white panels, Meiji red #ed1c24, PSL Omyim Pro at 46px display and 30px body, 4px inputs, full-bleed product and campaign banners with red read-more tags."
colors:
  canvas: "#eeeeee"
  surface-white: "#ffffff"
  ink: "#5c5c5c"
  primary: "#ed1c24"
  surface-light: "#f1f1f1"
  ink-secondary: "#777777"
  accent-red-light: "#ff434a"
  link-bootstrap-blue: "#337ab7"
  nav-white-94: "#fffffff0"
  text-input-text: "#333333"
  text-input-border: "#767676"
typography:
  display:
    fontFamily: PSLOmyimProReg
    fontSize: 46px
    fontWeight: 500
    lineHeight: 50.6px
  display-mobile:
    fontFamily: PSLOmyimProReg
    fontSize: 36px
    fontWeight: 500
    lineHeight: 39.6px
  subheading:
    fontFamily: PSLOmyimProReg
    fontSize: 28px
    fontWeight: 500
    lineHeight: 26.04px
  body:
    fontFamily: PSLOmyimProReg
    fontSize: 30px
    fontWeight: 400
    lineHeight: 42.8571px
  nav:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 18px
    fontWeight: 400
    lineHeight: 20px
  link:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  input:
    fontFamily: PSLOmyimProReg
    fontSize: 24px
    fontWeight: 400
rounded:
  xs: 3px
  sm: 4px
  md: 10px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 25.59px
  s9: 40px
  s10: 92px
components:
  link:
    textColor: "{colors.link-bootstrap-blue}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.nav-white-94}"
    textColor: "{colors.ink-secondary}"
  nav-link:
    textColor: "{colors.ink-secondary}"
    typography: "{typography.nav}"
    padding: 10px 0px 0px 15px
  text-input:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 4px
    height: 40px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.surface-white}"
    textColor: "{colors.ink-secondary}"
    padding: 25.5938px 0px 38.3906px
---

## Overview

cpmeiji.com is the corporate and product site of CP-Meiji Co., Ltd. (ซีพี-เมจิ), the Thai dairy company behind the Meiji milk and yoghurt range sold in Thailand. The page title lists pasteurised milk, drinking yoghurt and Meiji Bulgaria yoghurt. The main menu offers About CP-Meiji (history, vision and mission, corporate culture, awards, production quality, innovation, safety policy), Products (pasteurised milk, drinking yoghurt, yoghurt, Meiji Bulgaria yoghurt, Food Service products, Greek-style yoghurt, order products), News and Activities, Careers (head office, Saraburi factory) and Contact, plus a phone number 02-664-5291, Thai/English switch, register and sign-in links.

The capture shows a bright, product-led consumer site. The header is white with the red-and-pink meiji wordmark above "ซีพี-เมจิ", four icon-above-label menu items (about, products, news, contact), a phone block with a mobile icon, and a language dropdown, closed by a thin red rule. The hero is a full-width carousel of campaign art; at capture time a Meiji Bulgaria "Homemade Story" yoghurt poster with a milk splash, spoon and a 13th anniversary badge. Below, a milky-white swirl background carries the red headline "เมจิ ตัวจริงเรื่องคุณภาพ" (Meiji, truly about quality) with two lines of centred copy that claim the products have been number one in consumer preference for over 20 years, and a gold "No. 1" medal. A single row of product packshots (milk bottle, drinking yoghurt, cup yoghurt, Bulgaria tub, Food Service carton) with centred Thai captions sits on that background, and one more packshot (Greek-style yoghurt) wraps to a second row. Four large banner tiles in a two-by-two grid follow (a barista campaign, a student-focused campaign, Milk Museum factory visit, a latte art campaign), each with a small red "อ่านเพิ่มเติม" (read more) tag. The news section sits on the gray canvas with the title "อ่านข่าวทั้งหมดซีพี-เมจิ", where "ซีพี-เมจิ" is set in red, and white news cards below.

The tone is warm, quality-assurance oriented Thai marketing copy with generous product photography.

## Colors

The page canvas is light gray `canvas` #eeeeee, with white (`surface-white` #ffffff) panels and a slightly different gray `surface-light` #f1f1f1. Body ink is a medium gray `ink` #5c5c5c; secondary text is `ink-secondary` #777777 (the measured navigation and footer text color). Form text is #333333 with a #767676 border.

The brand color is Meiji red `primary` #ed1c24: the logo, header rule, read-more tags and the red words in headlines. A lighter red `accent-red-light` #ff434a appears as a measured text/border color. The stylesheet's link blue `link-bootstrap-blue` #337ab7 is Bootstrap's default link color, not part of the brand palette, and is kept only because it is the site's measured link style; the navigation bar surface is a near-opaque white (`nav-white-94` #fffffff0). Packaging and campaign banners bring their own colors (pink, blue, black) and are imagery, not tokens.

## Typography

The site uses `PSLOmyimProReg` (a PSL Omyim Pro Thai font, loaded with a matching Bold file) for headings, body and inputs. Navigation and links fall back to the system stack `"Helvetica Neue", Helvetica, Arial, sans-serif`. Measured styles: display 46px at weight 500 with 50.6px line height; display-mobile 36px with 39.6px line height; subheading 28px with 26.04px line height; body 30px at 400 with 42.8571px line height; navigation 18px at 400 with 20px line height; links 14px with 20px line height; input text 24px.

The body size is unusually large for a web page, which suits a Thai typeface with a small x-height that needs extra size to read comfortably. PSL Omyim Pro is a commercial face; Prompt or Sarabun (both on Google Fonts) are available substitutes, though they are not measured here.

## Layout

The layout is a classic corporate and product layout: a centred header, a full-bleed hero carousel, centred copy over a soft white swirl, a five-item product row, a two-by-two full-bleed banner grid, then a news row. The measured spacing scale is 4, 5, 6, 10, 12, 15, 16, 25.59, 40 and 92px, so large gaps come from the 40 and 92px steps and fine controls from 4 to 16px. The footer uses 25.5938px top and 38.3906px bottom padding with a white background; the navigation links have 10px 0px 0px 15px padding.

## Elevation & Depth

The page is almost flat. The white header is separated from the hero by a thin red line, and news cards are white panels on the gray canvas. Depth is added by photography: the milk splash and soft shadows under product packshots are part of the images, not CSS. No box shadows were recorded on the measured components.

## Shapes

Measured radii are 3px (xs), 4px (sm, used by the text input) and 10px (md). The product packshots, the banner tiles and the header are rectangular; the red read-more tags have small rounded corners; news cards are softly rounded. The language select is a standard form control with a 4px-style corner.

## Components

**Text input**: white background, #333333 text in 24px PSLOmyimProReg, 1px #767676 border, 4px radius, 4px padding, 40px tall.

**Navigation**: near-white translucent bar (#fffffff0) with #777777 labels at 18px and the padding noted above; menu items pair a line icon with a label.

**Links**: 14px Helvetica-stack links in the Bootstrap blue where unstyled.

**Footer**: white background, #777777 text, 25.5938px 0px 38.3906px padding.

**Read-more tag**: a small red filled rectangle with white Thai text on each banner tile and the product highlights (qualitative, observed in the capture; the extractor's own button measurement was dropped because it did not match what is visible).

## Design System Architecture

No public design system, brand guideline or press kit is linked from the pages opened (the About menu covers corporate history, vision, culture, awards, quality, innovation and safety policy). The de-facto system is a Bootstrap 3 style theme: link color #337ab7 and the Helvetica Neue stack are Bootstrap 3 defaults, the page uses Font Awesome icons, and the brand typography is PSL Omyim Pro. The stylesheet does not publish any root variables. Source: https://www.cpmeiji.com/ (homepage and stylesheet as measured by the extractor).

## Do's and Don'ts

Do keep the gray-and-white canvas and let the packshots, campaign banners and Meiji red carry the brand. Do set headlines in PSL Omyim Pro with brand words picked out in red, and keep body copy centred and short. Do use full-bleed banner tiles with a small red read-more tag.

Don't use Bootstrap blue as a brand accent. Don't add heavy shadows or borders around panels. Don't treat the cookie consent banner as part of the design; it overlaid the first capture and was excluded. Don't use pure white for the page canvas: the page itself is light gray with white panels.

## Responsive Behavior

The extraction includes a mobile pass, which produced a 36px display-mobile style versus 46px on desktop. Breakpoints and other mobile layout values are not measured.

## Iteration Guide

Use only frontmatter tokens. Begin with the gray canvas, a white header with icon menu items and a red hairline, a full-bleed hero, then white content panels. Headlines at 46px with red emphasis, body at 30px/42.86px, secondary text #777777. Add small red read-more tags on image tiles. Measure any new component on the live site before adding a token, then re-run the gate.
