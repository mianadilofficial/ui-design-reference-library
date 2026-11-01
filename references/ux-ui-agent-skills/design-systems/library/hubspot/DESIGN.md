---
version: alpha
name: HubSpot
category: "Product & SaaS"
description: "HubSpot home page (hubspot.com) measured live: HubSpot Serif light 65px display headlines, HubSpot Sans body, orange #ff4800 filled and outlined 8px-radius buttons (68px tall), #1f1f1f ink on white and #fcfcfa, peach #fcded2 and dark teal #061c1d sections, 16px-radius hub cards under the cl- Canvas-style token system."
colors:
  canvas: "#ffffff"
  page-body: "#fcfcfa"
  ink: "#1f1f1f"
  primary: "#ff4800"
  on-primary: "#ffffff"
  surface-3: "#fcded2"
  ink-2: "#ffffff9e"
  ink-3: "#f8f5ee"
  ink-6: "#000000"
  hairline: "#0000001c"
  primary-hover: "#c93700"
typography:
  display:
    fontFamily: "\"HubSpot Serif\", serif"
    fontSize: 65px
    fontWeight: 300
    lineHeight: 78px
  display-mobile:
    fontFamily: "\"HubSpot Serif\", serif"
    fontSize: 40px
    fontWeight: 300
    lineHeight: 41.8182px
  heading:
    fontFamily: "\"HubSpot Serif\", serif"
    fontSize: 28px
    fontWeight: 300
    lineHeight: 30.8px
  subheading:
    fontFamily: "\"HubSpot Sans\", sans-serif"
    fontSize: 18px
    fontWeight: 500
    lineHeight: 28px
  body:
    fontFamily: "\"HubSpot Sans\", sans-serif"
    fontSize: 16px
    fontWeight: 300
    lineHeight: 28px
  nav:
    fontFamily: "\"HubSpot Sans\", sans-serif"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 22px
rounded:
  xs: 4px
  sm: 6px
  md: 8px
  lg: 16px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3.2px
  s3: 4px
  s4: 6px
  s5: 7.2px
  s6: 8px
  s7: 12px
  s8: 14px
  s9: 16px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    padding: 16px 40px
    height: 68px
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  link:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.primary}"
    typography: "{typography.subheading}"
    rounded: "{rounded.md}"
    padding: 16px 40px
    borderColor: "{colors.primary}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.canvas}"
    boxShadow: rgba(33, 51, 67, 0.12) 0px 2px 4px 0px
  nav-link:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    rounded: "{rounded.md}"
    padding: 8px 16px
  text-input:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
    rounded: "{rounded.xs}"
    padding: 3.2px 8px
    height: 34px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    rounded: "{rounded.lg}"
    padding: 32px 32px 24px
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.ink}"
    textColor: "{colors.ink-3}"
    padding: 48px 32px
---

## Overview
The measured page is https://www.hubspot.com/ (title "HubSpot | Software & Tools for your Business - Homepage", lang `en`). It is the marketing home page of the HubSpot customer platform. The top of the capture has a utility row (English, High Contrast, Customer Support, Contact Sales, search, Log in, About) above the main navigation: the orange HubSpot sprocket wordmark, menu items (Products, Solutions, Pricing, Resources) and two buttons at the right, a filled orange "Get a demo" and an orange-outlined "Get started free". The hero is centred: a small uppercase eyebrow ("HUBSPOT AGENTIC CUSTOMER PLATFORM"), the headline "Build demand, win deals, and delight customers — all on one platform." in a light serif with the full stop in orange, a two-line sub-paragraph and the same pair of buttons.

Below is a three-panel full-bleed photograph strip (people at work with serif captions, for example "All your customer data, right at your fingertips."), a "What is HubSpot?" intro with a customer-count logo row ("TRUSTED BY 306,000+ CUSTOMERS WORLDWIDE": eBay, DoorDash, reddit, Tripadvisor), and a "Growing a business is hard. HubSpot makes it easier." section beside a two-column grid of white hub cards (Marketing Hub, Sales Hub, Service Hub, Content Hub, Data Hub, Revenue Hub), each with a line icon, check-marked benefits and a "Learn more" arrow link. A chat widget bubble appears at the right in the capture; it is a third-party-style overlay and is not documented as brand UI. The voice is plain, friendly and benefit-led.

## Colors
- **Canvas** `#ffffff` (5321 area) with page body `#fcfcfa` (4161; `--cl-color-background-01`), and warm cream `#f8f5ee` (`--cl-color-background-02`, also the text colour on dark sections).
- **Ink** `#1f1f1f` (4161 characters; footer fill `--cl-color-background-footer-01`, link colour `--cl-color-link-01`). Text on dark uses `#ffffff9e` (1805 characters), and `#0000009e` for secondary text on light.
- **Primary orange** `#ff4800` (`--cl-color-button-primary-fill-idle`, `--cl-color-text-brand-01`): the "Get a demo" fill, button outlines, text links and the full stop in the hero headline. Hover fill is `#c93700` (measured rgb(201, 55, 0); `--cl-color-button-secondary-border-hover`). The pressed secondary text is `#9f2800`.
- **Peach** `#fcded2` (1283): the highlight band; the pressed fill of the outlined button is `#fcc6b1`.
- **Dark teal** `#061c1d` (708) and `#042729` (428; `--dark-theme-background-accent-01`): dark feature sections where the cream `#f8f5ee` headline colour is used (h2 "All your customer data...").
- **Hairline** `#0000001c`; header shadow colour `rgba(33, 51, 67, 0.12)`.
The root variables also carry a "hubspot-2025" palette (lavender, green, orange ramps), warning `#eeb117` and more, mostly not visible on this page.

## Typography
Two proprietary families are loaded: "HubSpot Sans" (6301 characters; weights 300 to 600) and "HubSpot Serif" (423; weights 300, 400 and 600). The root `--font-family` falls back to "Lexend Deca", "Helvetica Neue", helvetica and arial. Weights in use: 500 (3376 characters), 300 (3233) and 400 (115).

- **display**: HubSpot Serif 65px / 300, line-height 78px (hero headline).
- **display-mobile**: 40px / 300, line-height 41.8182px.
- **heading**: HubSpot Serif 28px / 300, line-height 30.8px.
- **subheading**: HubSpot Sans 18px / 500, line-height 28px (buttons and "TRUSTED BY" label).
- **body**: HubSpot Sans 16px / 300, line-height 28px.
- **nav**: HubSpot Sans 14px / 500, line-height 22px.
Other sizes: 12px (1814 characters), 14px, 24px and 40px. The serif headings are set light and sentence case; eyebrows and the trust label are uppercase sans. The root scale contains `--cl-font-size-micro: 0.75rem`, `--cl-font-size-medium: 1rem` and `--cl-font-size-display-01: 7rem`.

## Layout
Desktop pass: 1280px wide, 6754px tall. The nav is a 128px two-row block with a bottom shadow. Hero content is centred in a narrow column, followed by a three-up full-bleed photo strip, then a two-column intro, a scrolling logo row and a split section with the headline and buttons at the left and a 2-column card grid at the right. Cards are separated by gutters of the same scale as the spacing tokens: 2, 3.2, 4, 6, 7.2, 8, 12, 14, 16 and 24px. The footer is 661px tall, `#1f1f1f`, with 48px 32px padding.

## Elevation & Depth
One shadow was measured, on the header: `rgba(33, 51, 67, 0.12) 0px 2px 4px 0px`. Cards rely on a 1px hairline (`#0000001c`) border rather than shadow, and dark sections invert the page. The chat bubble in the capture has its own shadow and is not part of the system.

## Shapes
Radii measured: 16px (31 elements, hub cards and image tiles), 8px (30 elements, buttons), 4px (4, inputs), 50% (4, round icons) and 6px (1). Buttons are 8px, cards 16px, the text input 4px. Pill (9999px) is in the token set for tags. Icons are line drawings with an orange stroke.

## Components
- **button-primary**: `#ff4800` fill, white HubSpot Sans 18px / 500 text, 8px radius, padding 16px 40px, 68px tall in the hero (two-line label "Get a demo of HubSpot's premium software" measured), hover `#c93700`.
- **button-secondary / link**: white fill, 1px `#ff4800` border and orange text, same size and radius ("Get started free").
- **card**: white, 16px radius, padding 32px 32px 24px, 1px hairline border, icon + title + checked benefit list, bottom dotted rule above the "Learn more" arrow link.
- **text-input**: 4px radius, 34px tall, padding 3.2px 8px, `#1f1f1f` text.
- **nav**: white bar with the header shadow; compact orange buttons at the right.
- **footer**: `#1f1f1f` with `#f8f5ee` text.

## Design System Architecture
No public design-system page was linked from the home page. The shipped CSS exposes a large internal token layer (400 root variables) with the prefix `--cl-` (component-level) for colour roles (`--cl-color-button-primary-fill-idle: #ff4800`, `--cl-color-button-primary-text-color: #ffffff`, `--cl-color-text-on-color-01: #ffffff`, `--cl-color-container-01: #ffffff`, `--cl-color-link-02: #124548`), type tokens (`--cl-font-size-*`, `--cl-font-weight-h5: 500`), a `--dark-theme-*` set for the dark sections, and a `--hubspot-2025-*` raw palette (`--hubspot-2025-lavender-10: #84408e`, `--hubspot-2025-green-14: #002110`, `--hubspot-2025-orange-12: #591802`). Buttons therefore have idle, hover, pressed and disabled tokens for each of primary, secondary and tertiary variants.

## Do's and Don'ts
- Do use `#ff4800` for the one filled action and for outlined secondary actions, with 8px radius and 40px side padding.
- Do set headlines in light HubSpot Serif and everything else in HubSpot Sans.
- Do put content on `#ffffff` / `#fcfcfa` and use peach `#fcded2` or dark teal for emphasis bands.
- Do round cards at 16px and give them a 1px hairline.
- Don't add shadows to cards; only the header shadow was measured.
- Don't treat the chat bubble as part of the system.
- Don't use bold weights for serif headings.

## Responsive Behavior
At 390px the mobile pass measured: h1 40px / 300 (65px desktop), h2 28px, body 16px / 300, the primary button 294px wide by 68px tall in `#ff4800`, and a 56px-tall nav block. The hero headline wraps to a 251px-tall block at 294px width. Frequent mobile sizes: 16px (2213 characters), 14px, 18px, 24px, 32px, 28px, 40px. Other mobile layout changes are not measured.

## Iteration Guide
1. Start with a two-row white nav, with a filled orange and an outlined orange button at the right.
2. Centre a 65px light-serif headline with an orange full stop, then repeat the button pair.
3. Add a full-bleed three-photo strip with serif captions.
4. Use 16px-radius white cards with line icons and orange chevron links.
5. Close with a `#1f1f1f` footer; dark teal bands for feature moments.

## Notes for Rebuilding
Hierarchy on this page comes from the pairing of a light serif with a medium-weight sans rather than from size alone: the 65px serif headline and 28px serif section headings are weight 300, while labels, buttons and navigation are weight 500 and running text is weight 300. The single saturated colour, `#ff4800`, appears in the logo, buttons, the headline's final period and link underlines, so it works as a punctuation mark across the page. The two button variants always appear together at the same height, and the outlined one inverts on hover and press through the peach tokens listed above. Hub cards repeat one anatomy: an orange line icon with the product name, two check-marked benefits, a dotted separator and a "Learn more" link with an arrow.
