---
version: alpha
name: Roojai
category: "Thai Brands"
description: "Roojai Thailand insurance site measured at roojai.com/en: Prompt typeface at 400 and 500, deep navy #003b71 hero and footer, orange #d84000 Get Quote button with a #ff5011 gradient and highlight, white cards with 20px radius and a navy-tinted 28px shadow."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#d84000"
  on-primary: "#ffffff"
  navy: "#003b71"
  orange-bright: "#ff5011"
  link-bg: "#ffffffa6"
typography:
  display:
    fontFamily: Prompt, fallback, sans-serif
    fontSize: 56px
    fontWeight: 500
    lineHeight: 75.6px
  display-mobile:
    fontFamily: Prompt, fallback, sans-serif
    fontSize: 32px
    fontWeight: 500
    lineHeight: 43.2px
  heading:
    fontFamily: Prompt, fallback, sans-serif
    fontSize: 24px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: Prompt, fallback, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Prompt, fallback, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 24.5px
  nav:
    fontFamily: Prompt, fallback, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 30px
  link:
    fontFamily: Prompt, fallback, sans-serif
    fontSize: 22.4px
    fontWeight: 400
    lineHeight: 33.6px
rounded:
  xs: 5.6px
  sm: 6px
  md: 8px
  lg: 16px
  xl: 20px
spacing:
  s1: 4px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 10.4px
  s7: 12px
  s8: 15px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 6px 16px
    height: 39px
    borderColor: "{colors.orange-bright}"
  button-secondary:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 8px 16px
    height: 60px
    borderColor: "{colors.canvas}"
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.navy}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.navy}"
    boxShadow: rgba(0, 0, 0, 0.07) 0px 2px 10px 0px
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.xl}"
    boxShadow: rgba(0, 59, 113, 0.15) 0px 2.4px 28px 0px
  footer:
    backgroundColor: "{colors.navy}"
    textColor: "{colors.canvas}"
---

# Roojai

## Overview

Roojai is a Thailand online insurance brand, and the measured page is its English home at https://www.roojai.com/en/ (page title "Roojai Insurance - Trusted, Affordable Coverage in Thailand"). The look is a navy-and-orange pairing: a large deep-blue field (#003b71) carries the hero, the product cards and the footer, while orange (#d84000 on the button, #ff5011 for highlighted words and the logo) carries every action. The capture shows a kangaroo mascot in navy dungarees, a 10th anniversary lockup, illustrated line icons inside white tiles, and review scorecards. The tone is friendly and plain: "Get Quote", "Read more", "Find a garage", "Refer a friend".

Density is moderate. The hero is a tall blue gradient panel with a two-tone headline, six product tiles in one row, and a one-sentence promise ("Receive your insurance quote in 60 seconds"). Below it, white cards on a white canvas are separated only by a soft navy-tinted shadow, so the page reads as light with a heavy blue hero rather than as a dark site.

## Colors

The page background is `canvas` #ffffff, but by painted area the dominant fill is the navy `surface` #003b71 (4066 weight in the background-area count against 591 for white). It fills the hero, the product cards' overlay, the review card's left panel and the footer. The CTA fill is `primary` #d84000; the measured button also carries a vertical gradient from #ff5011 (95%) to #d84000 (100%), and a 1px border of #ff5011. `ink-4` (renamed `orange-bright` below) is #ff5011, the highlight color used on the headline words "can save you up to 30% on premiums", on the anniversary banner words and on the angled panel of the claim-review card. It equals the site's `--bs-primary` and `--bs-orange` root variables.

Body copy is `ink` #212529 (1923 characters), white text sits on navy (2510 characters), and navy text (#003b71) is used for the nav and the promo link strip. A translucent white `link-bg` #ffffffa6 backs the anniversary banner strip. Two shadow-style blacks, #00000033 and #0000001a, are scrim-like overlays on photo cards and are not brand colors. The lighter blue #1974b9 appears as a fill in the extraction (122 weight) and is kept only as a measured value, not assigned a role. Bootstrap's stock semantic variables (success, warning, danger) exist in the root variables but are not used for brand UI.

## Typography

One family carries everything: Prompt, loaded at weight 400 and 500 (the extraction lists "Prompt 400 normal" and "Prompt 500 normal", plus a "fallback" face). Prompt is a Latin-and-Thai typeface, which suits a bilingual Thai insurer. The desktop h1 is `display` 56px / 75.6px at weight 500; the h2 under it is `heading` 24px / 36px at 400. Body is `body` 16px / 24px at 400 in #212529. Buttons use 14px / 24.5px at 400. The nav-link role is 20px / 30px and the promo strip link is 22.4px / 33.6px.

Character counts by size show 16px as the workhorse (3977), then 24px (469), 40px (190), 12px, 14px, 20px, 22.4px and 56px. Weight is restrained: 4469 characters at 400 against 670 at 500, so emphasis comes from size and orange color, not bold. No letter-spacing or text-transform is recorded: headings keep sentence case and the nav links read in uppercase because the text itself is uppercase in the markup (ROOJAI, PRODUCTS, CLAIMS). On the 390px mobile pass the h1 measured 32px / 43.2px (`display-mobile`) and body stayed 16px / 24px.

## Layout

The measured document is 1280px wide and 6301px tall. The nav bar is 100px high and white. The hero text block is 992px wide inside the 1280px page. Cards sit on a centered container with equal outer margins; the product-icon tiles are in a single row of six, the services panel holds five icon links in one white rounded card, and the review block pairs an award badge with two scorecards. Photo product cards are laid out two-up, followed by an orange tile and an image tile.

Spacing values in the extraction are 4, 5, 6, 8, 10, 10.4, 12, 15, 16 and 24px; the most frequent paddings are 16px (55 uses), 8px (44) and 24px (24), with 100px, 48px and 32px for larger sections. Gaps are 8px. The tokens keep these as `spacing` s1 to s10.

## Elevation & Depth

Depth is soft and blue. Cards use `rgba(0, 59, 113, 0.15) 0px 2.4px 28px 0px` (17 uses), a diffuse shadow tinted with the navy rather than gray. The nav bar uses a lighter `rgba(0, 0, 0, 0.07) 0px 2px 10px 0px`. No hard borders are used on cards; the only measured border colors are #ffffff (2) and #ff5011 (1), both on buttons. Layered depth otherwise comes from photography with a navy gradient overlay and from the angled two-color panel in the review cards, which is a 105deg gradient from #0659a5 through #003b71 to white.

## Shapes

Radius is a mix of four steps. Cards use `xl` 20px (19 uses, the most common). Secondary buttons and smaller panels use `md` 8px. `lg` 16px is also measured, and some corners are asymmetric, for example `16px 8px` (6 uses) and `6px 6px 0px 0px` / `0px 0px 6px 6px` for top and bottom edges. The Get Quote button measured `8px 4px`, a diagonal pair of different corner radii, which gives it a slightly leaf-like silhouette. Small elements use 6px and 5.6px.

## Components

**Primary button (`button-primary`)**: Get Quote, white text on #d84000 with the #ff5011-to-#d84000 gradient, 14px text, 6px 16px padding, 39px tall, 1px #ff5011 border, radius 8px 4px. On hover the measured background stays #d84000 and the border brightens from #ff5011 to rgb(255, 98, 41).

**Secondary button**: the app-store buttons are outlined, white text with a 1px #ffffff border, 8px 16px padding, 60px high, 250px wide and 8px radius, shown on the navy footer.

**Nav**: white bar with `rgba(0, 0, 0, 0.07)` shadow, uppercase links with small chevrons, a MyAccount text link, the orange Get Quote button and a language flag control at the right. The logo is an orange kangaroo SVG served from the theme folder.

**Cards**: white fill, 20px radius, navy shadow. Product tiles contain a navy line illustration with orange accents and a centered label at 14px or 16px. The scorecards print the score at 56px weight 500 ("4.9/5", "4.7/5").

**Footer**: navy #003b71 with white text, 1224px tall, with 24px / 500 column headings such as "Our products".

The cookie icon, "Accept" pill and consent bar visible in the capture are third-party or consent overlays and are not documented as brand UI.

## Design System Architecture

No public Roojai design system, brand guideline page or token package was found or opened for this brief, so this section describes the de-facto system from the measured page. The stylesheet is Bootstrap 5 with brand overrides: the root variables include the full `--bs-*` set (118 variables), with `--bs-primary` set to #ff5011 and a custom `--bs-orange` of the same value, `--bs-box-shadow` set to `0 .5rem 1rem rgba(0,59,113,.15)` (navy-tinted instead of black), and `--bs-light-bg-subtle` #f8f9fb. The logo URL shows a WordPress theme path (`/wp-content/themes/roojai/assets/img/`). Colors in practice come from only three families: navy, orange and white, plus #212529 for text.

## Do's and Don'ts

- Do use Prompt at 400 and 500 only; create hierarchy with size and the orange highlight.
- Do put the one orange action (Get Quote) on white or navy and keep it at 8px 4px radius.
- Do use the navy-tinted shadow `rgba(0, 59, 113, 0.15) 0px 2.4px 28px 0px` for white cards.
- Do use 20px card radius.
- Do not use Bootstrap's stock blue (#0d6efd) or semantic colors for brand UI; the brand action is orange.
- Do not use black shadows on cards; the black #00000033 and #0000001a values are photo overlays.
- Do not treat the cookie widget as part of the design language.
- Do not add weights above 500; none are measured.

## Responsive Behavior

Only the mobile measurement at 390px wide was recorded. In it the h1 is 32px with a 43.2px line height at weight 500, the h2 is 12.8px / 19.2px, and body text remains 16px / 24px. The Get Quote button keeps its 14px type and orange gradient fill on mobile. The breakpoints, menu behavior and column changes of the layout were not measured, so they are not described here.

## Iteration Guide

1. Start from `canvas` #ffffff, `surface` navy #003b71 and `primary` #d84000; use #ff5011 only for highlighted words and logo-level accents.
2. Set Prompt 56px/75.6px weight 500 for the hero and 16px/24px for body; on mobile use the measured 32px/43.2px h1.
3. Build cards at 20px radius with the navy shadow.
4. Build the CTA as 14px text, 6px 16px padding, 39px height, `8px 4px` radius, gradient #ff5011 to #d84000.
5. Check the result against the gate: `node web/scripts/verify-designs.mjs --slug=roojai`. Re-measure with the extractor when the 10th anniversary promotion is replaced, since the hero banner is campaign content.
