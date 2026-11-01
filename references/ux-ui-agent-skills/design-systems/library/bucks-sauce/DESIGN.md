---
version: alpha
name: Bucks Sauce
category: "Food & Beverage"
description: "Bucks Sauce (buckssauce.com) is a small-batch BBQ sauce brand on a near-black brown canvas (#100b06) with cream (#f5e4c7) type and buttons, a condensed custom display face (PeperoncinoSansCustom, uppercase, negative tracking) paired with Inter Tight, four flavour colours as product cards, and 10px radii plus round buttons."
colors:
  canvas: "#100b06"
  ink: "#f5e4c7"
  primary: "#f5e4c7"
  on-primary: "#100b06"
  surface-menu: "#322c23"
  surface-raised: "#272119"
  panel-tint: "#ffffff1a"
  nav-bg: "#171109a6"
  text-input-border: "#ffffff4d"
  flavor-gold: "#be8d3f"
  flavor-orange: "#f15726"
  flavor-red: "#da1f27"
  flavor-peach: "#ef8f4a"
  brown: "#593e2c"
typography:
  display:
    fontFamily: PeperoncinoSansCustom, "PeperoncinoSansCustom Fallback"
    fontSize: 88.8883px
    fontWeight: 400
    lineHeight: 78.2217px
    letterSpacing: "-1.77777px"
    textTransform: uppercase
  display-mobile:
    fontFamily: PeperoncinoSansCustom, "PeperoncinoSansCustom Fallback"
    fontSize: 52px
    fontWeight: 400
    lineHeight: 45.76px
    letterSpacing: "-1.04px"
    textTransform: uppercase
  ui-text:
    fontFamily: "\"Inter Tight\", \"Inter Tight Fallback\""
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  subheading:
    fontFamily: PeperoncinoSansCustom, "PeperoncinoSansCustom Fallback"
    fontSize: 35.5558px
    fontWeight: 400
    lineHeight: 32.0003px
    letterSpacing: "-0.711117px"
    textTransform: uppercase
  body:
    fontFamily: "\"Inter Tight\", \"Inter Tight Fallback\""
    fontSize: 17.7779px
    fontWeight: 400
    lineHeight: 26.6669px
    letterSpacing: "-0.355558px"
  button:
    fontFamily: PeperoncinoSansCustom, "PeperoncinoSansCustom Fallback"
    fontSize: 23.1117px
    fontWeight: 400
    lineHeight: 23.1117px
    letterSpacing: "-0.462234px"
    textTransform: uppercase
rounded:
  xs: 8px
  sm: 10px
  md: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 28px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 12px 20px
    height: 72px
  nav:
    backgroundColor: "{colors.nav-bg}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.ui-text}"
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.sm}"
    padding: 24px 32px
    height: 77px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.sm}"
    padding: 48px 28px
    borderColor: "{colors.ink}"
  footer:
    textColor: "{colors.ink}"
    padding: 20px 10px 0px
---

## Overview

Bucks Sauce is a direct-to-consumer small-batch BBQ sauce brand; the measured page is https://buckssauce.com/ (title "Bucks Sauce - Best Small-Batch BBQ Sauce | Gourmet, No HFCS | Bucks Sauce"), a single very long home page, 1,280px wide and 10,405px tall. The extractor's first capture caught an email-offer popup over the hero; this document was written from a second capture taken after that popup was gone, and the popup and its form are not documented as brand UI.

The identity is a dark, warm, theatrical product stage. The canvas is a near-black brown, `#100b06`; type, buttons and borders are a single cream, `#f5e4c7`; colour arrives only through the product: four flavour cards (gold, orange-red, red, peach) and an orange disc behind the hero bottle. Headlines are set in a condensed custom display face in capitals with tight negative tracking, and several of them are drawn as hollow outline lettering that spans the full width of the screen ("THE BBQ SAUCE", "WEAPON", "REVIEWS"), a hand-drawn, slightly wobbly stroke rather than a clean vector outline.

Walking down the capture: a thin announcement strip at the very top ("BUILD YOUR OWN 3-PACK & SAVE $4 BUCKS") with a close mark; a translucent header with an antlered-deer-in-chef's-hat logo at the left and uppercase links (SHOP, WHOLESALE, ABOUT, STORES, CONTACT, CART(0)); the hero headline "THE BBQ SAUCE THAT MAKES OTHER SAUCES INSECURE" (first half outlined, second half solid cream); a product carousel with the bottle in front of an orange circle, a peach mascot with a face, round cream arrow buttons left and right, dotted hairlines carrying "PRODUCT NO.01" and "SMOKED PEACH CHIPOTLE" labels and a cream "SHOP NOW" button; a large centred statement in Inter Tight with small red splat and chef-hat icons inline; claim cards ("NO CORN SYRUP", "NO SEED OILS", "NO ADDITIVES", "GLUTEN FREE") that are slightly rotated, each a cream tab over a dark card with a cream outline; "CHOOSE YOUR WEAPON" over four staggered flavour cards and a "BUILD YOUR 3 PACK & SAVE $4.00" panel; a "WHY BUCKS SAUCE" curved heading; the giant outlined "REVIEWS" over a strip of vertical customer-video cards with cream handle tabs; and a footer with the logo in a dashed tile, dashed-separated links, a newsletter field and two square social tiles.

The voice is irreverent and confident: "Our BBQ sauces use real, natural stuff like it's the 1800s. Slap it on anything you grill and act surprised when people think you can cook." Product copy is short and ingredient-led ("We skip the ultra-processed seed oils…"). Photography is cut-out product and ingredient imagery (cherries, habanero, tomato, peach, garlic) floating around the cards, plus user-video stills for reviews.

## Colors

- **Canvas `#100b06`.** Page and card background; also the on-colour for the cream button. It is the site's `--background` and `--color-background`.
- **Cream `#f5e4c7` (ink, primary).** All primary text, the button fill, borders (28 elements) and outlined lettering. It is the site's `--color-theme`, `--foreground` and `--color-foreground`; it carries 1,537 of the page's characters, the other 594 being `#100b06` text on cream.
- **Menu brown `#322c23`.** Declared as `--menu` and `--color-menu`; 594 units of background area.
- **Raised brown `#272119`.** Declared as `--background-lighter`; its on-screen use was not mapped. **`#593e2c`** is declared as `--brown`; its on-screen use was not measured.
- **White tint `#ffffff1a`.** A 10% white overlay measured on 848 units of background area; the capture shows a translucent lighter panel behind the pack builder. **Nav background `#171109a6`** is a translucent dark brown on the header. **`#ffffff4d`** is the dashed input border.
- **Flavour colours.** Gold `#be8d3f` (Crushed Pineapple Sriracha), orange-red `#f15726` (Crushed Habanero Garlic), red `#da1f27` (Crushed Cherry Garlic) and peach `#ef8f4a` (Smoked Peach Chipotle) are declared as `--gold`, `--orange`, `--red` and `--peach` and each measured on 195 units of background area (peach 372). They are product-identity colours and appear only on product cards and the disc behind a bottle.

No hover colours other than the cream inversion were recorded: on "SHOP NOW" and "GET SAUCE" the text changes from `#100b06` to `#f5e4c7` over a `#100b06` background.

## Typography

Two families. **PeperoncinoSansCustom** (weight 400 only, with a declared `"PeperoncinoSansCustom Fallback"`) is a condensed display face set in capitals for headlines, navigation, buttons and footer labels; the `body` element itself is set in it, uppercase, at 17.7779px/26.6669px. **Inter Tight** (a variable font loaded 100 to 900, with an `"Inter Tight Fallback"`) carries running text: paragraphs, the big centred statement, the input and small captions. Of the page's characters, Inter Tight sets 1,176 and PeperoncinoSansCustom 955.

Measured scale (desktop): h1 88.8883px/78.2217px at -1.77777px tracking, uppercase; h3 (product names) 35.5558px/32.0003px at -0.711117px, uppercase; buttons 23.1117px at -0.462234px, uppercase; body 17.7779px/26.6669px at -0.355558px. By characters: 17.7779px 745, 35.5558px 445, 28.4442px 264, 16px 126, 53.3338px 114, 88.8883px 106, 32px 105, 26.6662px 93, 12.4442px 71. The small 12.4442px labels carry +0.995533px tracking (declared as `--text-small--letter-spacing: .08em`); everything else is negative. Weights: 400 on 2,051 characters, 700 on 76, 500 on 4. Mobile (390px) measured h1 52px/45.76px, body 18px/27px.

The h2 element "CHOOSE YOUR WEAPON" measures only 16px/24px on its wrapper; the visible lettering inside it is set by inner spans (the page's 53.3338px and 88.8883px character counts), so use the sizes above, not the wrapper. No licence or foundry information for PeperoncinoSansCustom was opened, and the declared fallbacks are the only substitutes recorded.

## Layout

Layout is a centred single column of full-width bands over a 1,280px canvas with generous vertical gaps (measured gaps include 40px, 53px, 56px and 60px, each on 6 to 8 elements, and a 10px gap on 30 elements). The theme declares `--grid-gap: 1.25rem`, `--spacing: .25rem` (a 4px unit) and `--container-xl: 36rem`. Measured padding values are 28px (26 elements), 16px, 20px, 10px and 12px, with 48px, 34px and 56px on four elements each. The tokens' scale is 4, 5, 8, 10, 12, 16, 20, 24, 28 and 32px.

Cards are deliberately off-axis: claim cards are slightly rotated and overlap, flavour cards are staggered in height, and the pack builder sits in a wide translucent panel with a dashed outline. Hero content is centred on the page; the footer is a grid of dashed-outline tiles (logo, links, newsletter, two social squares) above a copyright row ("© 2026 Bucks Sauce Co. All rights reserved." at the left, "Website by Buzzworthy" at the right).

## Elevation & Depth

There are no measured box shadows on the page (the shadow frequency list is empty); the only shadow-like value in the shipped CSS is `inset 0 0 0 1000px #100b06 !important` (16 declarations) and Tailwind's empty ring and shadow variables. Depth comes from layering and tone: cream tabs over dark outlined cards, the `#ffffff1a` translucent panel over the canvas, a translucent nav (`#171109a6`), product bottles overlapping their cards and discs, rotated cards, and floating ingredient photos cut out against the dark background. Dotted and dashed 1px hairlines (`#f5e4c7` borders on 28 elements, `#ffffff4d` on 11) divide sections instead of shadows.

## Shapes

Radius is almost uniform: `10px` on 106 elements (the site's `--radius-xl`), full circles or pills on 62 (the computed radius is 3.35544e+07px: carousel arrows, the orange disc, the round newsletter submit), 24px on 4 (`--radius-3xl: 1.5rem`), 8px on 1, and `0px 0px 10px 10px` on one element. The cream button is a 10px rounded rectangle, not a pill. Claim and review cards have a rounded cream tab on top and a rounded outline body; dashed borders mark the footer tiles and the input.

## Components

- **Primary button.** Cream `#f5e4c7` fill, `#100b06` text, PeperoncinoSansCustom 23.1117px uppercase at -0.462234px, 10px radius, `12px 20px` padding, 72px tall (the pack-builder "ADD 3 MORE" button is 282px wide). "SHOP NOW" is 308px wide and 72px tall; its label turns cream on hover.
- **Round arrow buttons.** Cream circles with a dark arrow at the left and right of the hero carousel.
- **Header and nav.** Translucent `#171109a6` bar, uppercase links in cream; "CART(0)" is the last item. On a 390px viewport the header measured 60px tall with a cream background and a "GET SAUCE" link, 134px by 48px at 18px.
- **Claim card.** Dark `#100b06` fill, `1px solid #f5e4c7`, 10px radius, `48px 28px` padding, about 407px by 366px, with a line icon, a short Inter Tight paragraph and a cream tab on top carrying a dotted label.
- **Flavour card.** A tall card filled with the flavour colour, the product name in cream display capitals at the top, a bottle photo with its ingredient, and a small cream "+" circle in the pack builder.
- **Text input.** Cream text on transparent, `1px dashed #ffffff4d`, 10px radius, `24px 32px` padding, 77px tall, 402px wide, with a round arrow submit inside the right edge (the newsletter in the footer).
- **Review card.** A vertical video still with a cream rounded tab on top holding an "@handle".
- **Footer.** Cream text, `20px 10px 0px` padding, 343px tall, dashed tiles.

## Design System Architecture

No public or official design system for Bucks Sauce was found: buckssauce.com refused both `curl` and WebFetch (HTTP 429, a Vercel security checkpoint), so only the extractor's browser measurements of https://buckssauce.com/ were available, and no brand-guideline or press page could be opened. The de-facto system is visible in the page's custom properties (83 on `:root`), which follow Tailwind CSS v4's theme naming: `--color-*` colours (`--color-background` `#100b06`, `--color-foreground` `#f5e4c7`, `--color-theme` `#f5e4c7`, `--color-menu` `#322c23`, `--color-background-lighter` `#272119`, `--color-gold`, `--color-orange`, `--color-red`, `--color-peach`), un-prefixed aliases (`--background`, `--foreground`, `--menu`, `--gold`, `--orange`, `--red`, `--peach`, `--brown`), `--radius-sm/lg/xl/3xl`, `--spacing: .25rem`, `--container-xl`, font stacks (`--font-sans` and `--font-inter-tight` for Inter Tight; `--font-peperoncino-sans` and `--font-serif` for PeperoncinoSansCustom) and a numbered type scale of letter-spacing variables (`--text-26`, `-30`, `-32`, `-36`, `-40`, `-44`, `-50`, `-60`, `-80`, `-100`, `-140`, `-180`, `-240`, `-300`, plus `--text-small`, `--text-tiny`) that set `-.02em` on most steps and `0em` on `--text-140`, `--text-300` and `--text-tiny`. The footer credits the build to Buzzworthy. Because no source was readable, nothing beyond the measured values and these names is claimed.

## Do's and Don'ts

Do:
- Keep the page dark: canvas `#100b06`, all type and borders in cream `#f5e4c7`.
- Set headlines, navigation and buttons in the condensed display face, uppercase, with negative tracking; set paragraphs in Inter Tight.
- Use outlined lettering for the one giant word per section, and solid cream for the supporting line.
- Reserve gold, orange-red, red and peach for the four products.
- Use 10px radii for cards, inputs and the primary button; circles for carousel and submit controls.
- Divide sections with dashed or dotted 1px hairlines.

Don't:
- Don't add drop shadows; none were measured.
- Don't use the flavour colours for generic UI or text.
- Don't round the primary button into a pill.
- Don't document or reproduce the email-offer popup, its scrim or the announcement close mark as brand components.
- Don't set body paragraphs in the display face.

## Responsive Behavior

Measured at 390px: the h1 is 52px/45.76px (down from 88.8883px/78.2217px), body copy is 18px/27px, and the type sizes by characters are 18px 763, 28px 445, 16px 126, 32px 114, 26px 113, 30px 105, 60px 62, 52px 43, 20px 37 and 12px 37, all whole pixels, where the desktop sizes are fractional. The header measured 60px tall on a cream background and the "GET SAUCE" link 134px by 48px. The page's custom properties declare no breakpoint variables. Column counts, card reflow, carousel behaviour and rotation of cards on mobile were not measured.

## Iteration Guide

1. Set canvas `#100b06`, ink and primary `#f5e4c7`; load PeperoncinoSansCustom (or a condensed uppercase face) and Inter Tight.
2. Build the hero: a two-part h1 at 88.8883px/78.2217px (first part outlined), a bottle on an orange circle (`#ef8f4a`), round cream arrow buttons and a 72px-tall cream "SHOP NOW".
3. Add claim cards as `1px solid #f5e4c7` panels with 10px radius and a cream tab.
4. Add four flavour cards in `#be8d3f`, `#f15726`, `#da1f27` and `#ef8f4a`, staggered in height.
5. Finish with the dashed-tile footer and the dashed newsletter input (77px tall).
6. Run `node web/scripts/verify-designs.mjs --slug=bucks-sauce` and compare against `web/data/captures/bucks-sauce.jpg`.
