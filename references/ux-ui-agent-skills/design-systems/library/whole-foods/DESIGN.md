---
version: alpha
name: "Whole Foods Market"
category: "Retail & E-commerce"
description: "Whole Foods Market online store: single brand green #004e36 on white and warm #f8f7f5, Corda Std serif headlines at 70px, Circular Pro 16px body, 2px-radius green buttons with #006f46 hover, pill search field and overlapping white promo cards on food photography."
colors:
  canvas: "#ffffff"
  page-largest: "#f8f7f5"
  ink: "#2e2d2b"
  primary: "#004e36"
  on-primary: "#ffffff"
  ink-4: "#565553"
  primary-hover: "#006f46"
  link-bg: "#faf5eb"
typography:
  display:
    fontFamily: "\"Corda Std\", Georgia, serif"
    fontSize: 70px
    fontWeight: 500
    lineHeight: 76px
  display-mobile:
    fontFamily: "\"Corda Std\", Georgia, serif"
    fontSize: 36px
    fontWeight: 500
    lineHeight: 43.92px
  subheading:
    fontFamily: "\"Corda Std\", Georgia, serif"
    fontSize: 22px
    fontWeight: 500
    lineHeight: 32px
    letterSpacing: "-0.96px"
  body:
    fontFamily: "\"Circular Pro\", Verdana, sans-serif"
    fontSize: 16px
    fontWeight: 350
    lineHeight: 24px
  button:
    fontFamily: "\"Circular Pro\", Verdana, sans-serif"
    fontSize: 16px
    fontWeight: 700
    lineHeight: 24px
  link:
    fontFamily: "\"Circular Pro\""
    fontSize: 20px
    fontWeight: 700
    lineHeight: 24px
    letterSpacing: "-0.48px"
  input:
    fontFamily: "\"Circular Pro\""
    fontSize: 16px
    fontWeight: 350
    lineHeight: 24px
    letterSpacing: "-0.16px"
rounded:
  xs: 2px
  sm: 8px
  md: 24px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 10px
  s4: 12px
  s5: 15px
  s6: 16px
  s7: 20px
  s8: 24px
  s9: 30px
  s10: 32px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 30px 10px
    height: 50px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 12px 56px 10px 30px
    height: 50px
  link:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.primary}"
    typography: "{typography.link}"
    rounded: "{rounded.sm}"
  nav:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.primary}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.button}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.input}"
    height: 24px
  card:
    backgroundColor: "{colors.link-bg}"
    textColor: "{colors.primary}"
    rounded: "{rounded.sm}"
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---

# Whole Foods Market

## Overview

wholefoodsmarket.com is the online storefront of Whole Foods Market, built around grocery pickup and delivery, weekly sales and catering. The measured page is 6603px tall at 1280px wide. A deep green header (`#004e36`) holds the logo, a "Delivering to" location control, a wide white search field ("Search Grocery Pickup & Delivery"), Sign in and Cart, with a lighter green secondary nav (Grocery Pickup & Delivery, Weekly Sales, Catering, Recipes). The body is a sequence of large editorial promotions: a full-bleed food photograph with a white text panel overlapping it, a headline in a warm serif ("20% off Boneless Ribeye Steaks with Prime"), a short paragraph, a green button ("Shop sales") and small legal print ("Valid 10/7 – 10/13/26. Restrictions apply.").

The look is food photography on soft off-white, with deep green as the single brand color, a bookish serif (Corda Std) for headlines and a rounded geometric sans (Circular Pro) for everything else. Yellow circular "SALE" stickers with red hand-lettered type appear in photography as illustrated badges.

## Colors

- `canvas` `#ffffff` is the base page color and the search field fill. `page-largest` `#f8f7f5` is the warm off-white that covers the largest area (1221 area units), and `link-bg` `#faf5eb` is the cream used for the three shortcut tiles (Grocery Pickup & Delivery, Weekly Sales, Order Catering).
- `ink` `#2e2d2b` is the near-black warm text color (1124 characters), and `ink-4` `#565553` is a grey for secondary text (252 characters).
- `primary` `#004e36` is the brand green: it is the header, footer and button fill (834 area units, and 1006 characters of green text). `on-primary` is white. `primary-hover` `#006f46` is the measured hover background of the "Shop sales" button (`rgb(0, 111, 70)`).
- A mid green `#1a604a` (72 units of painted area) is also measured, and is not given a token here.
- The saturated yellow and red of the sale badges belong to illustrated badge art and are not interface tokens.

## Typography

Headlines use Corda Std, a serif with weights 400 and 500. The display role is 70px at weight 500 with a 76px line height (the hero offer headline); on the measured mobile pass it is 36px with a 43.92px line height. The subheading role is Corda Std 22px at weight 500, line height 32px and letter spacing -0.96px (footer section titles such as "Shopping"). Other headline sizes in the corpus are 52px (104 characters) and 40px (121).

Everything else is Circular Pro (3194 characters). Body is 16px at weight 350 and a 24px line height; buttons are 16px at weight 700 with the same 24px line height; shortcut tile titles are 20px bold with -0.48px letter spacing and a 24px line height; the search input is 16px at weight 350 with -0.16px letter spacing. 16px dominates (2197 characters), then 14px (475, legal print and captions) and 22px (237). Weights in use are 350, 400, 500 and 700; 700 is used for 1819 characters, which is why labels and buttons feel firm against the light 350 body. Both families are commercial typefaces; Georgia and Verdana are the fallbacks declared in the site's own stacks.

## Layout

The layout alternates large photographs and overlapping white content cards, shifting the card left or right on successive promotions: the first card sits at the left edge of the hero, the second is inset on the left of the soup photograph and the third at the lower right. The three shortcut tiles sit in a centred row under the first hero. The header is 92px tall at the measured width. Spacing values measured include 4px, 8px, 10px, 12px, 15px, 16px, 20px, 24px, 30px and 32px.

## Elevation & Depth

Two shadows were measured. A faint two-layer shadow ending in `rgba(11, 12, 12, 0.16) 0px 2px 4px 0px` (the first two layers are fully transparent) marks small raised controls, and a wide soft shadow `rgba(0, 0, 0, 0.1) 30px 0px 30px 0px` offsets the large white content card from the photography behind it. There are no other shadows; depth is created by cards overlapping photographs.

## Shapes

Radii are small and soft: `xs` 2px on buttons (5 uses), `sm` 8px on shortcut tiles and cards (3 uses), `md` 24px (1 use) and `pill` 9999px on the search field (1 use). The primary button is a nearly square 2px-radius rectangle; the search field is a full pill, a deliberate contrast.

## Components

- **button-primary** ("Shop sales"): `#004e36` fill, white 16px bold Circular Pro, 2px radius, padding 12px 30px 10px, 50px high. Hover fills `#006f46`.
- **button-secondary** ("Start your free trial", opens in a new tab): same green and height, padding 12px 56px 10px 30px to leave room for an external-link icon.
- **nav**: `#004e36` header bar with white items; the secondary nav links are 16px bold.
- **text-input**: the search field is white with `#2e2d2b` 16px text, with a magnifier icon inside the pill.
- **shortcut tile (link/card)**: `#faf5eb` background, `#004e36` 20px bold title, 8px radius, with a small illustration at the right.
- **footer**: `#004e36` background, white Corda Std 22px section titles with link lists beneath.

Below the three promotions the opened homepage continues with a grid of sale tiles (for example baby back ribs, jumbo blueberries and organic Honeycrisp apples with prices), a recurring weekday deals block with Prime-member pricing, a Quality Standards message ("No antibiotics in any of our fresh meat or seafood"), a carousel headed "Discover our latest and greatest" and a closing mission line, "Our purpose is to nourish people and the planet." The footer groups links under Shopping, Mission in Action, About, Need Help? and Connect With Us. The copy voice is warm and direct, using second person and short imperative sentences such as "Make your table sizzle with this flavorful, no-antibiotics-ever cut."

## Design System Architecture

No public design system or brand guideline is linked from https://www.wholefoodsmarket.com/: the opened homepage links to a Newsroom (media.wholefoodsmarket.com) and a Trademarks legal page, but no style guide. The de-facto system is visible in the shipped page: a small set of colors (green `#004e36`, hover green `#006f46`, cream `#faf5eb`, warm ink `#2e2d2b`), two font families used by role (serif for promotional headlines and footer titles, sans for functional text), and repeated component shapes (2px button, 8px tile, pill search). Tokens in this file were measured from the rendered page.

## Do's and Don'ts

- Do set promotional headlines in the serif at large sizes over a white panel that overlaps the photograph.
- Do keep one green for header, footer and every primary button.
- Do use light 350 body text with 700 labels.
- Do end each promotion with a plain verb button ("Shop sales", "Shop now", "Start your free trial") and 14px legal print.
- Don't add colors beyond the green, cream and warm greys as interface fills.
- Don't round the button into a pill; only the search field is a pill.
- Don't put text directly on busy photography without a white panel.

## Responsive Behavior

The extraction's mobile pass recorded the hero headline at 36px with a 43.92px line height and a 300px width (against 70px and 443px on desktop). Navigation, tile arrangement and touch targets on small screens were not measured. Breakpoints are not measured.

## Iteration Guide

1. Start with `#ffffff`, `#f8f7f5`, `#2e2d2b` and the single brand green `#004e36`.
2. Set headlines in Corda Std 500 (70px/76px) and everything else in Circular Pro (16px/24px, 350 for body, 700 for buttons).
3. Build buttons 50px high with a 2px radius and a `#006f46` hover.
4. Layer white content cards over full-bleed food photography with the soft 30px side shadow.
5. Re-run the extractor and the gate after every change.
