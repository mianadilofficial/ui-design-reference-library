---
version: alpha
name: PropertyScout
category: "Thai Brands"
description: "PropertyScout (propertyscout.co.th), an English-language Thailand property rental and sales platform. Roboto at 400, 500 and 700, orange-red #e74119 buttons with 6px radius, navy #002a55 stats band and footer, green #0c8b46 verified badges, #fafafa and #ebebeb section greys and 16px listing cards."
colors:
  canvas: "#ffffff"
  ink: "#212529"
  primary: "#e74119"
  on-primary: "#ffffff"
  surface-light: "#fafafa"
  surface-grey: "#ebebeb"
  ink-soft: "#333333bf"
  ink-muted: "#4f5962"
  ink-body: "#333333"
  ink-black: "#000000"
  hairline: "#dfdfdf"
  text-input-text: "#111827"
  text-input-border: "#d1d5db"
  footer-bg: "#002a55"
  verified-green: "#0c8b46"
typography:
  display:
    fontFamily: Roboto, sans-serif
    fontSize: 45px
    fontWeight: 700
    lineHeight: 40px
  display-mobile:
    fontFamily: Roboto, sans-serif
    fontSize: 36px
    fontWeight: 700
    lineHeight: 40px
  subheading:
    fontFamily: Roboto, sans-serif
    fontSize: 18px
    fontWeight: 700
    lineHeight: 28px
  body:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  button:
    fontFamily: Roboto, sans-serif
    fontSize: 16px
    fontWeight: 500
    lineHeight: 24px
  nav:
    fontFamily: Roboto, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 3px
  sm: 4px
  md: 6px
  lg: 8px
  xl: 10px
  2xl: 12px
  3xl: 16px
  4xl: 24px
  pill: 9999px
spacing:
  s1: 2px
  s2: 4px
  s3: 5px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 14px
  s8: 15px
  s9: 16px
  s10: 20px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 15px 36px
    height: 46px
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.md}"
    padding: 0px 32px
    height: 40px
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    padding: 16px
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.text-input-text}"
    typography: "{typography.nav}"
    rounded: "{rounded.lg}"
    padding: 10px 10px 10px 44px
    height: 46px
    borderColor: "{colors.text-input-border}"
  card:
    backgroundColor: "{colors.canvas}"
    rounded: "{rounded.3xl}"
    borderColor: "{colors.hairline}"
  footer:
    backgroundColor: "{colors.footer-bg}"
    textColor: "{colors.canvas}"
    padding: 16px
---

## Overview

PropertyScout is measured on `https://propertyscout.co.th/en/`, titled "Thailand Property | Buy & Rent Condos,Town Houses & Apartments | PropertyScout", `lang="en"`. The home page is a conventional listings-platform layout. A full-width skyline photograph of Bangkok carries the white bold headline "Thailand's Best Property Platform", the line "Find the right place, at the best price, hassle-free" and a white search card with Buy / Rent tabs (the active tab underlined in orange-red), a location input with a magnifier icon, a "Search now!" button and three select boxes (Price Range, Property Type, Bedrooms). A navy band under the hero shows three headline numbers (250k+ properties for rent and sale, 1m+ online viewings, 35k+ tenants, buyers and owners served); the plus signs are orange-red.

Further down: a "Why PropertyScout?" block of four line-icon benefits (Largest selection, Professional, Free for you, Best deals), a grey "Featured Listings" band whose title is orange-red with city tabs (Bangkok, Phuket, Pattaya, Hua Hin, Koh Samui) and a Rent / Sell toggle, listing cards with verified and "confirmed available today" badges, price in baht per month, bedroom, area and transit facts and a full-width "Inquire Now" button, and a "High Demand for Property in Thailand" section with For Rent / For Sale toggles. The tone is friendly and transactional ("Search now!", "Free for you"). A live-chat bubble and a sticky header appear in the capture; they are widgets and navigation chrome, not brand UI, and are not described as tokens.

## Colors

`canvas` #ffffff is by far the largest area (10,831 units), followed by `surface-light` #fafafa (1,494) and `surface-grey` #ebebeb (1,088) for alternating bands. `primary` #e74119 (373 units) fills the buttons, the active tab underline, the stat plus-signs and the "Featured Listings" title (192 characters of text are #e74119). `footer-bg` #002a55 (navy) is the stats-band and footer fill (154 units). `verified-green` #0c8b46 (133 units) fills the "Confirmed available today" badges.

Text: `ink` #212529 is the most-read color (6,087 characters), `ink-soft` #333333bf (2,451) and `ink-body` #333333 (716) are the secondary darks, `ink-muted` #4f5962 (1,429) colors descriptive paragraphs, `ink-black` #000000 appears on 259 characters and white on 1,487. The input uses `text-input-text` #111827 with a `text-input-border` #d1d5db 1px border; cards use `hairline` #dfdfdf borders.

## Typography

Roboto is the only text family (12,909 measured characters), loaded at weights 400, 500 and 700; weight 600 and 900 appear on a few characters. Scale: `display` 45px / 40px, 700, white, for the hero h1; the section h2 is 36px / 40px, 700 (the `display-mobile` value, used for "Why PropertyScout?"); `subheading` 18px / 28px, 700 for card and area titles; `body` 16px / 24px, 400; `button` 16px / 500; `nav` 14px / 20px, 400. By character count the page leans small: 12px (4,062), 14px (3,792), 16px (1,739), 18px (1,735) and 10px (948). Weights: 8,537 characters at 400, 2,412 at 700, 1,253 at 500.

## Layout

The desktop capture is 1280px wide and 9,873px tall — a long, scrolling marketing-plus-listings page. Content columns are about 1,128px wide (the h2 box). The hero search card is centered. The benefits row is four equal columns; the featured-listing row shows three cards at once with circular previous / next arrows at the edges. The header measures 65px tall. Spacing values recorded: 2, 4, 5, 8, 10, 12, 14, 15, 16 and 20px; the shipped CSS declares Tailwind `--tw-*` variables.

## Elevation & Depth

Cards use a soft Tailwind-style shadow: `rgba(0, 0, 0, 0.1) 0px 4px 6px -1px, rgba(0, 0, 0, 0.1) 0px 2px 4px -2px` (24 elements) and a lighter `rgba(0, 0, 0, 0.1) 0px 1px 3px 0px, rgba(0, 0, 0, 0.1) 0px 1px 2px -1px` (10). The hero overlay and the white search card give the hero its depth; the navy band is flat.

## Shapes

Radii measured on screen: 4px (185 elements, tags and small controls), 6px (96, buttons), 16px (41, listing cards; 23 more have `16px 16px 0px 0px` for card images and 10 have `16px 0px 0px 16px`), 8px (20, inputs), 9999px (12, pills and round arrows), 24px (5), 3px, 10px and 12px. Buttons are 6px; the input is 8px; cards 16px.

## Components

**Primary button** — `primary` fill, white 16px Roboto 500 label, padding 15px 36px, 46px tall, 160px wide ("Search now!"), 6px radius. Hover probe: the same fill at 0.8 opacity. **Contact button** — same fill, padding 0 32px, 40px tall, 6px radius. **Outlined button** — "Sign Up": transparent, #212529 text 14px, 1px solid #d1d5db border, 6px radius, 44px tall. **Search input** — white, 46px tall, 8px radius, 44px left padding for the icon, 1px #d1d5db border. **Listing card** — white, 16px radius, 1px #dfdfdf border, image on top, bold title, grey location, bold baht price, a facts grid, and a full-width orange-red "Inquire Now" button. **Badge** — `verified-green` fill with white uppercase text. **Stats band / footer** — `footer-bg` navy with white bold numbers.

## Design System Architecture

No public design system, brand guideline or press kit was found: the homepage HTML links none and no search was run. The site's shipped CSS is Tailwind-based: the only root variables are Tailwind's `--tw-ring-*` and `--tw-shadow*` defaults, so the system is utility classes with the measured values above rather than named brand tokens. The line-icon set, the Roboto family and the `primary` orange-red are the recurring brand choices.

## Do's and Don'ts

Do use `primary` for actions and key figures (buttons, active tabs, section highlights) and `footer-bg` navy for trust bands. Do set headings in Roboto 700 and body in 400. Do use 16px corners on listing cards and 6px on buttons. Do show verified status with the green badge and prices in bold baht.

Don't use Tailwind's default ring blue (`rgb(59 130 246/0.5)`) as a brand color. Don't document the live-chat bubble, or the sticky header duplicated in the capture, as brand components. Don't use heavier shadows than the two measured ones. Don't put white body text on `surface-light` or `surface-grey`.

## Responsive Behavior

Measured at a 390px viewport: the h1 stays 36px / 40px, wrapping to 80px height in a 358px column; the h2 stays 36px / 40px (326px wide); body drops from 16px to 14px / 20px; the primary call-to-action becomes a full-width "Contact us" link 342px wide and 48px tall with weight 400 and a 0px radius; the header measures 80px tall with 12px padding and 12px text. Frequent mobile sizes are 12px (3,698), 14px (2,984) and 16px (1,207). Menu collapse and card-carousel behavior at mobile width were not measured beyond those values.

## Iteration Guide

Start from the frontmatter tokens: white and light-grey bands, a navy trust band, orange-red actions. New sections should begin with a 36px bold heading and a 16px muted description; new cards follow the 16px radius with a hairline border and the 4px/6px shadow. Add data tags in `verified-green`. Measure any other component (tabs, toggles, map views) before documenting it; dark mode and hover states other than the 0.8 opacity on the primary button were not measured.

A note on voice and imagery: the hero uses a real night-time Bangkok skyline photograph, listing thumbnails are interior photographs of condominium units with a watermark, and line-art icons in navy and orange-red illustrate the four benefits. Headlines are short title-case phrases, supporting copy is one plain sentence, and every listing card ends with the same imperative button label, "Inquire Now". Prices are written with the baht sign followed by the amount and "/month" for rentals, and areas in square metres, so the card reads as a compact fact sheet rather than marketing copy.
