---
version: alpha
name: "MK Restaurants"
category: "Thai Brands"
description: "Thai restaurant-group site (mkrestaurant.com/en) in MK red #ed2e34 pill buttons with 45px radius and green #00a249 accents on white, set in PSL Kanda Pro Bold at 22px with 32px headings, food photography and bilingual Thai/English promo banners."
colors:
  canvas: "#ffffff"
  ink: "#000000"
  primary: "#ed2e34"
  on-primary: "#ffffff"
  surface: "#00a249"
  hairline: "#e5e5e5"
typography:
  display:
    fontFamily: "\"PSL Kanda Pro Bold\""
    fontSize: 22px
    fontWeight: 400
    lineHeight: 26px
  subheading:
    fontFamily: "\"PSL Kanda Pro Bold\""
    fontSize: 32px
    fontWeight: 500
    lineHeight: 30px
rounded:
  xs: 4px
  sm: 22.67px
  md: 32px
  lg: 35px
  xl: 36px
  2xl: 45px
  3xl: 54px
spacing:
  s1: 3.2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 11px
  s7: 12px
  s8: 14.4px
  s9: 15px
  s10: 16px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.2xl}"
    height: 35px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.display}"
    rounded: "{rounded.2xl}"
    height: 35px
  link:
    textColor: "{colors.ink}"
    typography: "{typography.display}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.display}"
    height: 1px
    clipPath: inset(50%)
---

# MK Restaurants

## Overview
The measured site is mkrestaurant.com, which redirects to its English page `/en` (page title "Mkrestaurant.com | Fresh and Good MK Food for Everyone | Happy Moments", document language `en`). It is the consumer site of MK Restaurant Group: promotions, the MK menu, delivery on the 1642 hotline, the MK ONE loyalty program, an Instagram wall ("#MK SOCIAL") and a branch finder that reports "Total 453 branches". Header navigation reads Promotions, MK Menu, MK Branch, About MK, Contact Us, Investor Relations, an EN language selector, "Delivery Service 1642" and a green "MKONE CARD" tab.

The first capture of this page was taken behind a black Thai royal-tribute overlay with a dark scrim. That overlay is not brand UI. The page was re-measured with the batch extractor (phase2 batch, `--force --no-motion`) and the final tokens and capture are the page without the overlay. The measured page is bright and promotional: a rotating hero banner, a Promotions section with category tabs (All Promotions, Suki, Single Dish, Roasted Duck, Dessert/Beverage), two large half-width panels for MK Menu and Delivery with studio food photography, a full-width red MK ONE banner mixing Thai and English, an Instagram grid, a branch map with area and restaurant-type selectors, and a footer with the logo, social icons, legal links and a green copyright bar.

## Colors
Painted area on the measured page is led by `{colors.surface}` green (#00a249, 307 weighted area: the branch Search button, the MKONE CARD tab, the copyright bar and active tab pills), then `{colors.canvas}` white (#ffffff), then `{colors.primary}` red (#ed2e34), which fills the pill buttons ("View All Promotions", "View All Menu", "View All Delivery Menu", "View All"). A secondary dark green (#237664) appears with a small area weight. Text is `{colors.ink}` black (#000000) for almost everything (6062 weighted characters), green #00a249 for headings and tab labels (1301), white (989) on red and green fills, and red #ed2e34 (322) for accent words such as the "PRO" in "PROMOTIONS" and "MK" in "#MK SOCIAL". `{colors.on-primary}` is white. `{colors.hairline}` (#e5e5e5) is the common border color.

The CSS custom properties on :root are Bootstrap defaults (for example --primary #007bff, --danger #dc3545, --indigo #6610f2); they are framework values, not brand colors, and are not used as tokens. The brand colors are the red and green above.

## Typography
Three faces are loaded: "PSL Kanda Pro Bold" (8391 weighted characters, nearly all text), "PSL KandaExtra Pro" (320, the large 38.4px display words) and Kanit 400 and 500 (82 characters, a Google-hosted Thai/Latin face used as fallback). The PSL Kanda files are served by the site itself; for substitution outside the site use Kanit, which the site also loads. The primary stack token is `"PSL Kanda Pro Bold"`.

`{typography.display}`: 22px, weight 400, line-height 26px, used for navigation, body copy, buttons and links alike (the bold look comes from the font file, not the weight). `{typography.subheading}`: 32px, weight 500, line-height 30px (menu item titles such as "VEGETARIAN WATERMELON SMOOTHIE"). Other sizes by characters read: 18px, 38.4px, 28px, 14.4px, 20px and 24px. Weights are only 400 and 500. Letter-spacing is normal everywhere except one 40px element with 2px spacing.

## Layout
Desktop width is 1280px, page height 3981px. Hero and MK ONE banners are image-led, the menu and delivery panels split the width 50/50, promotion tabs and the Instagram wall sit in centered containers, and the branch finder sets a narrow control column beside a map. Padding values by frequency: 5px (184 elements), 15px (107), 10px (99), 22.6666px (94, the tab pills), 12px, 11px, 4px, 8px and 60px. The spacing tokens `{spacing.s1}` to `{spacing.s10}` run 3.2px to 16px. No flex or grid gaps were recorded. Density is high in the header and promotion graphics and loose around the large photo panels.

## Elevation & Depth
Only one box-shadow was measured: `rgba(0, 0, 0, 0.1) 3px 3px 5px 0px`. Everything else is flat, with depth carried by photography, white cards over colored banners and 1px #e5e5e5 borders. Use shadow sparingly.

## Shapes
Shape is strongly rounded. Radii measured: 22.6666px on 95 elements (`{rounded.sm}`, the category tab pills), 36px (`{rounded.xl}`), 45px on the red View All buttons (`{rounded.2xl}`), 4px (`{rounded.xs}`), 35px (`{rounded.lg}`), 32px (`{rounded.md}`) and 54px (`{rounded.3xl}`), plus two elements with partially rounded corners (0px 0px 12px 12px and 0px 0px 8px). The signature is the fully pill-shaped red button with 35px height and 45px radius.

## Components
**Primary button** (`{components.button-primary}`): red (#ed2e34) fill, white text, 22px type, 45px radius, 35px high, 180px wide in the capture ("View All Promotions"). `{components.button-secondary}` is measured identical ("View All"), so the site uses one red pill for every call to action. The green Search button and MKONE CARD tab use `{colors.surface}` with white text.

**Links** (`{components.link}`): black 22px type. **Selects** (area, restaurant type) are white with a rounded outline and a dark chevron; a visually hidden form control of 1px by 1px is measured as `{components.text-input}` and is not a design element. **Tabs**: pill-shaped, with the active tab filled green and white text, inactive tabs black on white with a line icon. The header holds the red-and-green MK logo with the small "RESTAURANTS" bar. No popups, cookie banner, chat or back-to-top elements are documented here.

## Design System Architecture
No public design system or brand guideline page was opened for this brief. The CSS corpus shows a Bootstrap-based site (Bootstrap color variables and breakpoint variables, --breakpoint-sm 576px, --breakpoint-md 768px, --breakpoint-lg 992px, plus Glyphicons Halflings and the slick carousel font in the font-face list), with the brand's own typography and colors applied over it. Brand values live in rendered styles, not in named variables.

Art direction and voice: food is shot on dark stone or white wood in tight overhead and three-quarter views, with the red hot-pot as a recurring hero object, and a cartoon delivery duck mascot on a scooter marks the 1642 delivery service. Promotional graphics use big red numerals ("20%", "25 baht = 1 point") over soft pink fields, written in Thai with English labels. Section headings pair a small line icon above a two-tone word (red first letters, black remainder, such as PROMOTIONS and MK MENU), and the Instagram section shows eight square post tiles in two rows above a single red "View All" pill.

## Do's and Don'ts
- Do use #ed2e34 for pill call-to-action buttons and #00a249 for navigation tabs, search and the footer bar.
- Do use full pill radius (45px) on buttons and 22.67px on tabs.
- Do set text in PSL Kanda Pro Bold (Kanit as fallback), black on white.
- Do pair large studio food photography with short English and Thai headings.
- Don't take the Bootstrap blue #007bff or other :root variables as brand colors.
- Don't copy the tribute overlay or the cookie banner into brand UI.
- Don't add heavy shadows; one subtle 0.1 black shadow is the only one measured.

## Responsive Behavior
The mobile pass measured the h1 and body text at 22px with 26px line-height in PSL Kanda Pro Bold, the same as desktop, with the delivery link block 103px wide. Menu collapse behavior, column counts and breakpoints in use were not measured on this page (the Bootstrap breakpoint variables above are declared but their use was not observed).

## Iteration Guide
1. Start with white, black text and PSL Kanda Pro Bold at 22px.
2. Make every main action a red #ed2e34 pill, 35px high, 45px radius, white text.
3. Use green #00a249 for tabs, search and the footer strip.
4. Fill banners with food photography and bilingual promotional lettering.
5. Re-run `node web/scripts/verify-designs.mjs --slug=mk-restaurants` after edits.
