---
version: alpha
name: "OREO"
category: "Food & Beverage"
description: "OREO's US shop (oreo.com) runs a saturated #0047d9 blue page body with white sections (#ffffff), near-black #0b0505 text, Pluto 900 uppercase display at 80.7887px with -5.65521px tracking, pill buttons (9999px) and a #1db9ff 3px button border."
colors:
  canvas: "#ffffff"
  page-body: "#0047d9"
  ink: "#0b0505"
  primary: "#0047d9"
  on-primary: "#ffffff"
  surface-blue-deep: "#0040c3"
  ink-brown: "#6c300b"
  accent-orange: "#ef641d"
  blue-mid: "#1f60b6"
  button-primary-border: "#1db9ff"
  card-bg: "#ffffff33"
typography:
  display:
    fontFamily: Pluto
    fontSize: 80.7887px
    fontWeight: 900
    lineHeight: 68.6704px
    letterSpacing: "-5.65521px"
    textTransform: uppercase
  display-mobile:
    fontFamily: Pluto
    fontSize: 40.6761px
    fontWeight: 900
    lineHeight: 34.5746px
    letterSpacing: "-2.84732px"
    textTransform: uppercase
  subheading:
    fontFamily: Pluto, sans-serif
    fontSize: 44.3944px
    fontWeight: 900
    lineHeight: 39.9549px
    letterSpacing: "-2.66366px"
    textTransform: uppercase
  body:
    fontFamily: Pluto, sans-serif
    fontSize: 12px
    fontWeight: 900
    lineHeight: 18px
  button:
    fontFamily: Pluto, sans-serif
    fontSize: 16px
    fontWeight: 900
    lineHeight: 16px
    letterSpacing: "-0.8px"
    textTransform: uppercase
  link:
    fontFamily: Pluto, sans-serif
    fontSize: 16.416px
    fontWeight: 900
    lineHeight: 16.416px
    letterSpacing: "-0.4104px"
    textTransform: uppercase
rounded:
  xs: 24px
  sm: 30px
  md: 32px
  lg: 100px
  pill: 9999px
spacing:
  s1: 4px
  s2: 8px
  s3: 12px
  s4: 14px
  s5: 16px
  s6: 24px
  s7: 28px
  s8: 30.56px
  s9: 40px
  s10: 45.29px
components:
  button-primary:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.pill}"
    padding: 0px 28px
    height: 48px
    borderColor: "{colors.button-primary-border}"
  button-secondary:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.link}"
    height: 48px
  link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
  nav:
    textColor: "{colors.canvas}"
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
  card:
    backgroundColor: "{colors.card-bg}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.pill}"
    boxShadow: rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(0, 0, 0, 0) 0px 0px 0px 0px, rgba(255, 255, 255, 0.14) 0px 0px 90px 90px
    transform: matrix(1, 0, 0, 1, -112.5, -112.5)
  footer:
    textColor: "{colors.ink}"
---

## Overview

OREO's site (https://www.oreo.com/, title "OREO | Personalized Gifts, Recipes, and More | OREO") is a shop and play space for the cookie brand, not a corporate page. Navigation lists Shop, Gifts, Oreoverse, Recipes, Account, Search and Menu, with a top bar "DESIGN YOUR OREOiD". The page opened for this brief is 1280px wide and 15500px tall, and it is a long stack of full-width blocks: a seasonal hero ("SAVE 20% ON MONSTER COOKIES... OR ELSE" with a "SHOP NOW" button), a sweepstakes vote block ("OREO Twist Lick Vote"), "Design Your Own OREO Cookie" with "Start Creating" and "Browse Popular Designs", "Take Your Pick", "You may also like", "Stock Up on your faves", "Get Inspired", "Real Or Fake?!", "Enter the OREOVERSE", "Join the OREO Dunk Club", "Meet The Makers" and "Dunk It Low... Watch It Go!".

The voice is loud, punny and imperative: all-caps headlines, short commands ("SIGN UP. SNACK MORE. SAVE 15%"), and playful poll buttons ("Too wild to be true" / "Yep this one's Real!"). Art direction is product-as-character: cookies photographed or rendered large against flat OREO blue, orbiting, arcing and spiralling across the page, with seasonal scenery (the capture's hero is a Halloween scene with monster cookies). Sticker-like decorations, emoji and hand-lettered flavour labels appear inside content blocks. A top maintenance notice and a "GET 15% OFF" tab are overlays; they are not documented as brand UI here.

## Colors

The measured background areas are #ffffff (weight 8335), #0047d9 (7066), #0040c3 (2548), #0b0505 (1757), #1f60b6 (155) and a translucent #ffffff33 (152), followed by a run of flavour-card colours (#f39f55, #b9b8bc, #ffdc0e, #ffb5e0, #0086c3, #f5bdc3, #ac92f6, #4fb1e4, #8fc874). Text colours by characters lead with #ffffff and #0b0505, then #0047d9 and #ef641d.

- **Page-body #0047d9**: the OREO blue; the CSS variable `--color-theme-primary` is #0047D9 and `--color-theme-pdp-border` is #0047D9. It is the body background and the primary-button fill.
- **Canvas #ffffff**: the largest measured area (the white product and content sections); it is also the text colour on blue.
- **Ink #0b0505**: near-black used for text on white and for the footer text; shadow colour rgba(11, 5, 5, 0.3) uses the same base.
- **Surface-blue-deep #0040c3** and **blue-mid #1f60b6**: darker blue panels and tints.
- **Accent-orange #ef641d** and **ink-brown #6c300b**: accent text and a brown text tone.
- **Button-primary-border #1db9ff**: the bright cyan 3px border of the primary button.
- **Card-bg #ffffff33**: the 20% white fill of circular decorative cards.

The root variables also carry a four-stop gradient (`--gradientColor1` rgb(204, 66, 51), `--gradientColor2` rgb(180, 56, 125), `--gradientColor3` rgb(0, 71, 217), `--gradientColor4` rgb(99, 159, 215)), which matches the gradient fill on the "Start Creating" button in the capture. The assorted flavour colours belong to product art and are not UI tokens.

## Typography

Three families were loaded: Pluto (weights 900 and 500), PlutoSans (400 and 500) and ChonkyKitty (400, 59 characters, a decorative face). By characters Pluto carries 3546, PlutoSans 1133. Weight 900 accounts for 3526 characters, so the site is predominantly ultra-heavy.

- **Display** 80.7887px / 68.6704px, weight 900, uppercase, letter-spacing -5.65521px; the line-height is smaller than the font size, giving stacked headlines a tight block. The measured mobile value is 40.6761px / 34.5746px with -2.84732px tracking.
- **Subheading** 44.3944px / 39.9549px, weight 900, uppercase, letter-spacing -2.66366px.
- **Button** 16px / 16px, weight 900, uppercase, letter-spacing -0.8px; **link** 16.416px / 16.416px, letter-spacing -0.4104px.
- **Body** token 12px / 18px, weight 900 in Pluto. In the mobile pass, running copy measured PlutoSans 15.008px / 18.76px, weight 300.

Other frequent sizes include 22px (1064 characters, letter-spacing -1.1px), 30px (-1.5px), 48px (-3.36px) and an outsized 108.518px. Tracking is consistently negative at large sizes, about 7% of the font size.

## Layout

The layout is vertical sections of full-bleed colour, each holding a centred headline, one or two actions and an art cluster. Content blocks inside the blue field are inset rounded panels (the capture's sweepstakes block is a rounded rectangle on blue). Measured paddings: 24px (94 uses), 16px (49), 12px (40), 8px (24), 72px (21), 45.2853px (17), 48px (14). Measured gaps: 8px (298 uses), then 16px, 14px, 24px, 48px. The header region uses `--height-nav` 6.5rem and `--header-banner-offset` 15px. Product rows are horizontally laid out card strips ("You may also like", "Stock up") and the footer repeats the "SIGN UP. SNACK MORE. SAVE 15%" call.

## Elevation & Depth

Shadows exist but are used selectively. The most common non-empty shadow stack is `rgba(11, 5, 5, 0.3) 0px 20px 25px -5px, rgba(11, 5, 5, 0.3) 0px 8px 10px -6px` (12 uses); another is `rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.1) 0px 4px 6px -4px` (9 uses). The decorative circular cards use a huge soft white glow, `rgba(255, 255, 255, 0.14) 0px 0px 90px 90px`. Most elements carry no shadow. Beyond shadows, depth comes from overlapping cookie imagery and from the lighter and darker blues (#0047d9 against #0040c3).

## Shapes

Radius is generous. Measured: 9999px (115 uses, buttons and pills), 24px (27), 32px (22), 30px (18), 50% (5), 100px (2), 48px (1) and one "0px 0px 16px 16px" bottom-rounded element. Tokens: xs 24px, sm 30px, md 32px, lg 100px, pill 9999px. The primary button is 48px tall, 297px wide in the capture ("JOIN DUNK CLUB"), fully pill-shaped.

## Components

- **button-primary**: background #0047d9, text #ffffff, Pluto 900 uppercase 16px, padding 0px 28px, height 48px, radius 9999px, border 3px solid #1db9ff.
- **button-secondary**: white fill with #0b0505 text, 16.416px, height 48px (the white "SHOP NOW" and "VOTE & ENTER SWEEPS" style pills in the capture).
- **Gradient action**: "Start Creating" has a red-to-blue gradient fill, from the gradient variables; it was not extracted as a token.
- **Outline action**: "Browse Popular Designs" is a white-outlined pill on blue.
- **nav / nav-link**: white text on blue, button type style; measured hover on "SHOP" changes text from rgb(255, 255, 255) to rgb(11, 5, 5).
- **card**: translucent white circular blobs (225px by 225px, radius 9999px) as backdrops for cookie art.
- **footer**: text #0b0505 on the footer band, with large 48px / 40.8px uppercase sign-up copy.

## Design System Architecture

No public brand-guidelines or design-system page is linked; the home page links FAQs, Contact, Order Status, Shipping, Promotional Terms, Terms, Privacy, Cookie Policy and Accessibility pages, plus an external foodservice brand page at https://www.mondelezinternationalfoodservice.com/brands/oreo/Brand=OREO/ (a brand page for the foodservice trade, not a guideline). The shipped CSS contains Tailwind utility variables and a store theme: `--tw-*` ring and shadow variables, `--color-theme-*` variables for product-page galleries and tabs, type variables `--font-size-display` 3.75rem, `--font-size-heading` 2.25rem, `--font-size-lead` 1.125rem, `--font-size-copy` 1rem and `--font-size-fine` .75rem, and a Shop Pay button variable (`--shop-pay-button--width` 100%). Form colours are space-separated RGB (`--color-form-text-primary` 48 59 67, `--color-danger` 217 77 105).

## Do's and Don'ts

- Do keep the OREO blue #0047d9 as the main field and white #ffffff for content blocks.
- Do set headlines in Pluto 900 uppercase with strongly negative tracking.
- Do use full pills (9999px) for buttons, with a 3px #1db9ff border on the primary.
- Do let cookies cross section edges and arc around headlines.
- Don't use thin or light headline weights.
- Don't add shadows to every element; only the product-card and glow cases measured them.
- Don't treat the maintenance notice, discount tab or cookie scrim as brand components.
- Don't promote the flavour-card colours to UI colours.

## Responsive Behavior

The 390px pass measured: the hero heading at 40.6761px / 34.5746px with -2.84732px tracking (349px wide), and running copy at PlutoSans 15.008px / 18.76px, weight 300. The CSS defines `--font-size-display` 3.75rem. Layout changes of the product rows, navigation and cookie art at mobile width were not measured.

## Iteration Guide

1. Start with blue #0047d9, white #ffffff and ink #0b0505.
2. Write headlines in uppercase Pluto 900 at -5.65521px tracking at 80.7887px and scale down with the same ratio.
3. Use 48px pills; add the 3px #1db9ff border to the primary.
4. Place product art large and off-axis; keep copy short and imperative.
5. Measure further pages with the extractor (`--slug=oreo--page --url=<url> --force --no-motion`) before adding tokens; the product-page theme variables were not measured in use.
