---
version: alpha
name: Bank of America
category: "Banking & Insurance"
description: "Bank of America's consumer home page (bankofamerica.com): white and #f5f5f5 grey bands, a deep navy #012169 with pill-shaped 22px-radius buttons, red #e31837 and #a50e28 accents, a bright blue offers hero, the cnx display family for headings and Roboto for body and buttons."
colors:
  canvas: "#f6f6f6"
  page-body: "#ffffff"
  page-largest: "#f5f5f5"
  ink: "#646464"
  ink-strong: "#000000"
  ink-heading: "#333333"
  primary: "#012169"
  on-primary: "#ffffff"
  link: "#0053c2"
  link-offer: "#0d1ba7"
  accent-red: "#e31837"
  accent-red-dark: "#c41230"
  secondary: "#a50e28"
  blue-bright: "#0073cf"
  grey-line: "#d5d5d5"
typography:
  display:
    fontFamily: cnx-light, Arial, Helvetica, sans-serif
    fontSize: 67px
    fontWeight: 400
    lineHeight: 70px
  display-mobile:
    fontFamily: cnx-regular, Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 300
    lineHeight: 37.344px
  heading:
    fontFamily: cnx-regular, Arial, Helvetica, sans-serif
    fontSize: 38px
    fontWeight: 300
    lineHeight: 41.8px
  subheading:
    fontFamily: cnx-regular, Arial, Helvetica, sans-serif
    fontSize: 28px
    fontWeight: 400
    lineHeight: 36px
  body:
    fontFamily: roboto-regular, Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 32px
  body-mobile:
    fontFamily: roboto-regular, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: roboto-regular, Arial, Helvetica, sans-serif
    fontSize: 20px
    fontWeight: 500
    lineHeight: 20px
  button-mobile:
    fontFamily: roboto-regular, Arial, Helvetica, sans-serif
    fontSize: 14px
    fontWeight: 500
    lineHeight: 16px
  nav:
    fontFamily: cnx-regular, Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: roboto-regular
    fontSize: 16px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 2px
  sm: 4px
  md: 8px
  lg: 10px
  xl: 12px
  2xl: 22px
  3xl: 16px
spacing:
  s1: 4px
  s2: 5px
  s3: 8px
  s4: 10px
  s5: 12px
  s6: 15px
  s7: 16px
  s8: 18px
  s9: 20px
  s10: 24px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 8px 24px
    height: 44px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.link}"
    textColor: "{colors.page-body}"
    borderColor: "{colors.link}"
  button-primary-mobile:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button-mobile}"
    rounded: "{rounded.3xl}"
    padding: 8px 16px
    height: 44px
  button-secondary:
    backgroundColor: "{colors.secondary}"
    textColor: "{colors.page-body}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 8px 24px
    height: 44px
    borderColor: "{colors.page-body}"
  button-inverse:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.primary}"
    typography: "{typography.button}"
    rounded: "{rounded.2xl}"
    padding: 8px 24px
    height: 44px
    borderColor: "{colors.primary}"
  nav:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
  nav-link:
    textColor: "{colors.primary}"
    typography: "{typography.nav}"
    rounded: "{rounded.xs}"
    padding: 12px 8px 8px
  nav-link-hover:
    textColor: "{colors.link}"
  text-input:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-strong}"
    typography: "{typography.input}"
    rounded: "{rounded.sm}"
    padding: 12px 100px 12px 12px
    height: 36px
    borderColor: "{colors.ink}"
  card:
    backgroundColor: "{colors.page-body}"
    textColor: "{colors.ink-strong}"
    rounded: "{rounded.xl}"
    padding: 16px 24px
    boxShadow: rgba(0, 0, 0, 0.12) 0px 2px 20px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.page-body}"
---

## Overview

`https://www.bankofamerica.com/` is the personal-banking home page; its title is "Bank of America - Banking, Credit Cards, Loans and Merrill Investing". The page is 4,138px tall at 1280px wide and reads as a stack of full-width bands, measured top to bottom: a 32px grey strip carrying the FDIC statement ("Bank of America deposit products: FDIC-Insured - Backed by the full faith and credit of the U.S. Government"), a 164px white header (audience links Personal, Wealth Management, Business, Corporations & Institutions; utility links Security, About Us, En español, Contact Us, Help; the wordmark with its flag mark; a search field; and the product row Checking, Savings & CDs, Credit Cards, Home Loans, Auto Loans, Merrill Investing, Better Money Habits), an 846px blue hero with a log-in card and four credit-card offers, a grey feature band with four icon tiles, a white "Your financial goals matter" band with four photo tiles, a navy "Convenient banking with our Mobile app" band, a "Connect with us" band, a grey legal-disclosure band, and a navy footer.

The voice is plain and benefit-led: "Choose the card that works for you", "No annual fee.", "Open an account", "Apply now". Figures are large and light (6%, 1.5%, 1.5 points, 0%), set in the cnx light face at 67px. A sticky promotional strip ("Choose a checking account that's right for you. Open an account", with a close icon) sits across the page in the capture; it is a promotional overlay and is not documented as brand UI.

Navy `#012169` is the single brand action colour and the colour of the audience nav links, buttons, wordmark text and footer. Red appears as accent type (`#e31837` headings on the feature tiles) and as the secondary button fill `#a50e28`. Everything else is white, light grey or dark grey text.

## Colors

- **Surfaces:** `page-body` `#ffffff` (6,712 area units) and `page-largest` `#f5f5f5` (9,932, the largest background) alternate band by band; `canvas` `#f6f6f6` is a third near-identical grey (712). Dark bands use `primary` `#012169` (465) and, in the mobile-app band, a measured `#012269`. `blue-bright` `#0073cf` (448 area units) is a measured bright-blue background, and the mobile menu text uses the same hex. `grey-line` `#d5d5d5` is a minor measured background.
- **Text:** `ink` `#646464` is the most-read colour (2,077 characters, body copy); `ink-strong` `#000000` (879) for headings and card text; `link` `#0053c2` (771) for links and the hover state; white (719) on blue and navy; `link-offer` `#0d1ba7` (268) for the offer links under the cards; `accent-red` `#e31837` (160) for tile headings; `ink-heading` `#333333` (145) for news headings; navy `#012169` (54) for the audience nav.
- **Action:** `primary` `#012169` with `on-primary` `#ffffff` text. On hover the button fill and border become `link` `#0053c2` (measured on "Log in"). `secondary` `#a50e28` is the red button ("Check your account security level"); `accent-red-dark` `#c41230` is a further measured red background.
- **Focus:** a keyboard-focus record on "Log in" shows `rgb(255, 255, 255) 0px 0px 0px 2px inset` plus a `#0053c2` border; offer links gain a 3px auto outline in `link-offer` offset 6px.

## Typography

Two families, named as the stylesheet declares them (no font-file URLs were captured): the cnx family (cnx-light, cnx-regular, cnx-medium, cnx-bold, with italic and condensed variants declared) for headings and navigation, and roboto-regular, roboto-medium and roboto-bold for body, buttons and form fields. By characters, roboto-regular carries 3,569, cnx-regular 909, roboto-bold 190, roboto-medium 167, cnx-light 155 and cnx-medium 83. The declared fallbacks are `Arial, Helvetica, sans-serif`.

- `display` cnx-light 67px / 400 / 70px for the statistic figures (this is the measured h1 role: the text "1.5%").
- `heading` cnx-regular 38px / 300 / 41.8px for "Choose the card that works for you"; `subheading` cnx-regular 28px / 400 / 36px for news headings. "Connect with us" is 44px and the two section titles are 36px.
- `body` roboto-regular 20px / 400 / 32px for the lead paragraphs; the document body itself is 14px / 400 / 18px.
- `button` roboto-regular 20px / 500 / 20px; `nav` cnx-regular 16px / 400 / 24px; `input` roboto-regular 16px / 400 / 20px.
- Sizes by characters: 14px (2,769), 16px (936), 20px (672), 17px (268), 18px (129), 22px (82), 28px (68), 36px (52), 12px (34), 38px (34), 44px (15), 67px (8). Weights: 400 (4,548), 600 (268), 500 (223), 300 (34). No letter-spacing was measured.

Font substitutes: cnx and roboto are the site's own declared names; no outside substitute was measured, so the declared `Arial, Helvetica, sans-serif` fallback is the only documented one.

## Layout

The desktop page was measured as nine bands. Content edges sit roughly 16px to 28px inside the 1280px viewport (content left/right of 28 to 1268 in the hero and 16 to 1264 in the news band), so the layout is nearly full-bleed rather than a narrow centred column. Column counts measured per band: 4 in the offers hero, 4 in the goals and news band, 4 in "Connect with us" and 3 in the disclosure band; the maximum card-row count on desktop is 7. The header shows 9 links on desktop and no menu toggle.

The hero is a log-in card on the left (337px wide by 382px tall, 12px radius, white) beside four offer columns, each with a large stat, "No annual fee.", a card image (202px by 128px, 8px radius) and a white offer-link pill. Photo tiles in the goals band carry a white caption card with an icon and a blue link-style title.

Measured paddings: 12px (42 uses), 8px (31), 16px (27), 24px (12), 15px, 10px, 28px, 5px, 20px, 40px, 32px and 100px (the search field's right padding). Gaps: 12px (8), 8px (6), 16px (2).

## Elevation & Depth

Depth is flat. Bands change by fill, not shadow. Three shadows were measured: the card `rgba(0, 0, 0, 0.12) 0px 2px 20px 0px` (the log-in card), `rgb(145, 145, 145) 0px 0px 1px 0px` (a hairline edge), and a transparent 1px inset ring. The photo tiles' caption cards sit on the imagery with no measured shadow. Focus adds the inset white ring described under Colors.

## Shapes

Buttons are pills: 22px radius (`rounded.2xl`) on desktop, 16px (`rounded.3xl`) on mobile. Cards use 12px (`rounded.xl`), images 8px (`rounded.md`), inputs 4px (`rounded.sm`) and nav links 2px (`rounded.xs`). Measured radii by frequency: 2px (17), 12px (6), 22px (4), 8px (4), 10px (4), 4px (3), plus a `12px 12px 0px 0px` top-rounded value and a `0px 0px 0px 5px` value, each once.

## Components

- **Primary button ("Log in", "Visit Better Money Habits®"):** `{colors.primary}` fill and border, white roboto 20px / 500 text, 22px radius, `8px 24px` padding, 44px tall (289px wide for "Log in"). Hover: `{colors.link}`.
- **Secondary button ("Check your account security level"):** `{colors.secondary}` fill, white text with a 1px white border, same 22px radius and 44px height, 194px wide.
- **Inverse button ("Explore our mobile app"):** white fill, navy text and 1px navy border, 188px wide, used on the navy band.
- **Audience and product nav:** cnx 16px / 400 links in navy with `12px 8px 8px` padding and 2px radius (76px by 46px for "Personal"); hover moves the colour from `#012169` to `{colors.link}`.
- **Search field:** white, 1px `{colors.ink}` border, 4px radius, 36px tall, 265px wide.
- **Log-in card:** white, 12px radius, `16px 24px` padding, soft shadow.
- **Offer link:** white box under each card with `{colors.link-offer}` underlined text.
- **Footer:** navy `{colors.primary}`, white text, 344px tall, link rows and social icons.

## Design System Architecture

No public design-system or brand-guideline page was found: the home page and `https://about.bankofamerica.com/` link none (the nearest is a "Journalist resources" page under the newsroom, whose contents were not opened). The de-facto system is read from the shipped page: it exposes no CSS custom properties (0 `:root` variables were measured), and brand values are applied directly. Font families are declared as `cnx-*` and `roboto-*` face names, and the favicon URL sits under `/homepage/spa-assets/images/`. Colours repeat from a small fixed set (navy, red, blue, three greys), and buttons share one pill shape and padding across the primary, secondary and inverse variants.

## Do's and Don'ts

- Do use navy `{colors.primary}` for the one main action per area, with white text and a 22px radius.
- Do alternate white and `#f5f5f5` bands and keep cards flat with at most the 0.12-alpha shadow.
- Do set large figures in a light cnx weight and body copy in roboto at 20px / 32px.
- Do keep red for accent headings (`{colors.accent-red}`) and the single secondary button.
- Don't document the sticky promo strip, the app-download modal or any consent control as brand components.
- Don't add gradients or extra shadows to buttons: the measured buttons are solid fills.
- Don't introduce a fourth accent beside navy, red and bright blue.

## Responsive Behavior

Measured at 390px: the header shows 0 links and a menu toggle labelled "Menu" (desktop: 9 links, no toggle). The h2 is cnx-regular 32px / 300 / 37.344px (`display-mobile`) against 38px; body copy is 16px / 400 / 24px (`body-mobile`) against 20px / 32px; the "Log in" button is 14px / 500 / 16px with 16px radius and `8px 16px` padding, 64px wide by 44px tall, against 20px type and 289px wide; the maximum card-row count is 4 (desktop 7). Mobile band content spans roughly 16px to 374px, mostly in 1 or 2 columns, and the last mobile band ends at 7,722px against a 4,138px desktop page height. Mobile font sizes by characters were 14px (2,851), 16px (1,235), 20px (308), 17.55px (162), 13px (121), 28px (52) and 32px (49). Breakpoint widths were not measured.

## Iteration Guide

1. Set `primary` `#012169`, `on-primary` `#ffffff`, `page-body` `#ffffff`, `page-largest` `#f5f5f5`, `ink` `#646464`.
2. Load a light cnx-style display face for figures and headings and Roboto for body and buttons.
3. Build pill buttons at 44px tall with 22px radius and `8px 24px` padding; hover to `#0053c2`.
4. Compose the page as full-width bands (white, grey, blue offers hero, navy app band, navy footer) with 4-column tile rows.
5. Keep cards at 12px radius with the single `0 2px 20px` 12%-black shadow.
6. Check mobile against the 390px values above; everything else is not measured.
