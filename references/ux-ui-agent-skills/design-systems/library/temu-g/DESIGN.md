---
version: alpha
name: Temu
category: "E-commerce & Retail"
description: "Temu's Thai storefront measured at temu.com — white #ffffff canvas, Temu orange #fb7701 primary with white text, blue #1d86e6 header band, green #0a8800 trust and \"local\" badges, grey #555555 product copy, near-black #1e1e1e footer, miui/system-ui sans stack at 13–14px, 4px and 3px small radii plus 9999px pills."
colors:
  canvas: "#ffffff"
  ink: "#555555"
  primary: "#fb7701"
  on-primary: "#ffffff"
  surface-footer: "#1e1e1e"
  header-blue: "#1d86e6"
  trust-green: "#0a8800"
  surface-soft: "#f7f7f7"
  ink-strong: "#000000"
  ink-body: "#222222"
  ink-faint: "#bbbbbb"
  hairline: "#cdcdcd"
  button-secondary-text: "#aaaaaa"
typography:
  display:
    fontFamily: >-
      miui, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", ".SFNSText-Regular", Helvetica, Arial, sans-serif, serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 20px
    fontWeight: 800
    lineHeight: 30px
  body:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", ".SFNSText-Regular", Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 400
  product-title:
    fontFamily: system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", ".SFNSText-Regular", Helvetica, Arial, sans-serif
    fontSize: 13px
    fontWeight: 500
    lineHeight: 18px
  button:
    fontFamily: >-
      miui, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", ".SFNSText-Regular", Helvetica, Arial, sans-serif, serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 16px
    fontWeight: 600
    lineHeight: 18px
  link:
    fontFamily: >-
      miui, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", ".SFNSText-Regular", Helvetica, Arial, sans-serif, serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 14px
    fontWeight: 500
    lineHeight: 20px
  app-badge:
    fontFamily: miui, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", ".SFNSText-Regular", Helvetica, Arial, sans-serif
    fontSize: 22px
    fontWeight: 400
    lineHeight: 33px
  input:
    fontFamily: >-
      miui, system-ui, -apple-system, "system-ui", "Segoe UI", Roboto, "Noto Sans", Ubuntu, Cantarell, "Helvetica Neue", ".SFNSText-Regular", Helvetica, Arial, sans-serif, serif, "Apple Color Emoji",
      "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"
    fontSize: 12px
    fontWeight: 500
    lineHeight: 18px
rounded:
  xs: 3px
  sm: 4px
  md: 8px
  lg: 16px
  xl: 17px
  2xl: 20px
  3xl: 22px
  4xl: 25px
  none: 0px
  pill: 9999px
spacing:
  s1: 2px
  s2: 3px
  s3: 3.5px
  s4: 4px
  s5: 5px
  s6: 6px
  s7: 7px
  s8: 7.35px
  s9: 9px
  s10: 10px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.on-primary}"
    typography: "{typography.button}"
    rounded: "{rounded.none}"
    padding: 0px 19px
    height: 52px
  app-badge:
    textColor: "{colors.button-secondary-text}"
    typography: "{typography.app-badge}"
    rounded: "{rounded.4xl}"
    padding: 0px 18px
    height: 50px
    borderColor: "{colors.ink-faint}"
  trust-bar-link:
    textColor: "{colors.canvas}"
    typography: "{typography.link}"
    rounded: "{rounded.none}"
    padding: 0px 12px 0px 16px
  search-input:
    textColor: "{colors.ink-body}"
    typography: "{typography.input}"
    rounded: "{rounded.none}"
    height: 38px
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.canvas}"
    rounded: "{rounded.none}"
    padding: 29px 0px 0px
---

# Temu

## Overview

This file describes the Temu storefront as it was measured at `https://www.temu.com` on a 1280px desktop viewport. The request was geolocated to Thailand, so the page rendered in Thai (`lang="th"`) with prices in baht, and every token below comes from that Thai home page. The page title read "Temu | Explore the Latest Clothing, Beauty, Home, Jewelry & More". The mobile pass at 390px did not reach the home page: it was redirected to Temu's sign-in screen (`/login.html`), so the mobile numbers describe that login screen, not the storefront.

The home page is a dense, discount-led marketplace grid. From top to bottom the capture shows a thin black promo strip (free shipping, free returns within 90 days, the Temu app offer), a blue header band with the orange Temu logo tile, category links and a long search field, a green "Why choose Temu?" trust bar with privacy, payment and delivery promises, a blue "Lightning deals" (ดีลฟ้าผ่า) banner with a horizontal product carousel, and then a 10.10 sale section headed "Explore what interests you" (สำรวจสิ่งที่คุณสนใจ) with pill-shaped category filters and a five-column grid of product cards. A single orange "See more" (ดูเพิ่มเติม) button closes the grid, and a near-black footer lists company info, customer help, app download badges, social icons and a wall of payment-method logos.

The visual personality is loud and transactional: orange prices and sale tags, crossed-out reference prices, "sold" counters, star ratings, green "local" (ท้องถิ่น) badges and red sale tags all compete inside each card. There is no editorial imagery and no hero photograph — the product photos themselves are the imagery, shot on white or lifestyle backgrounds by the sellers.

## Colors

- **Canvas `#ffffff`** — the page body and the product grid. In the capture pixels white covers about 57% of the screen.
- **Ink `#555555`** — the most-read text color on the page (5,381 measured characters). It is the grey used for "sold" counts, card meta and most small copy.
- **Ink strong `#000000`** — section titles such as "Explore what interests you" and the darkest product text (1,074 characters). The top promo strip is also filled `#000000`.
- **Ink body `#222222`** — the body element's own color and the search field text.
- **Primary `#fb7701`** — Temu orange. It fills the "See more" button and colors prices and sale emphasis (508 orange characters were measured). The logo tile in the header is the same orange family.
- **On-primary `#ffffff`** — the button label on orange, and all text on the blue header and green trust bar.
- **Header blue `#1d86e6`** — the header band and the lightning-deals banner fill. A translucent variant `#1d86e6cc` and a deeper `#0e5ed5` were also measured as backgrounds.
- **Trust green `#0a8800`** — the "Why choose Temu?" bar, the green outline on "local" badges (19 measured borders) and the "local" label text in product titles.
- **Surface soft `#f7f7f7`** — a light grey fill used behind small blocks.
- **Surface footer `#1e1e1e`** — the footer background (648 area units, the second largest background on the page).
- **Ink faint `#bbbbbb`** and **button-secondary-text `#aaaaaa`** — the light greys of the footer app-store badges and their outline.
- **Hairline `#cdcdcd`** — the most frequent border color (20 elements), used on the outlined category pills.

Two accent text colors were also measured on dark or colored ground: a pale yellow `#fff7a7` and a pale green `#adffa2`. They appear as highlight text inside the colored banners; they are not separate tokens here.

## Typography

Temu does not load a web font. The measured `loadedFonts` list is empty, and the computed stacks begin with `miui` (Xiaomi's system font) and then fall back through `system-ui`, `-apple-system`, Segoe UI, Roboto, Noto Sans and Helvetica/Arial. On a desktop without MIUI the text renders in the operating system's UI face. By characters, `system-ui`-first stacks carry 6,578 characters and `miui`-first stacks 3,386.

- **Display — 20px / 800 / 30px.** The section headings "Lightning deals" (white on blue) and "Explore what interests you" (black, centered) both measure 20px at weight 800. This is the largest real heading on the page; see the role override in SOURCES.json.
- **Body — 13px / 400.** The most common size (4,777 characters) and weight (7,483 characters) on the page, set in the `system-ui` stack.
- **Product title — 13px / 500 / 18px.** The `h3` inside each product card, which also carries the green "local" label.
- **Button — 16px / 600 / 18px.** The "See more" label.
- **Link — 14px / 500 / 20px.** The trust-bar links; 14px is the second most common size (4,365 characters).
- **App badge — 22px / 400 / 33px.** The App Store / Google Play badges in the footer.
- **Input — 12px / 500 / 18px.** The header search field.

No letter-spacing was measured anywhere (`normal` throughout) and no text is uppercased. Weights 400, 500, 600, 700, 620 and 800 all appear; 620 is a measured value on 77 characters.

**Substitute:** Temu ships no brand typeface on the web, so the substitute is simply the same stack — `system-ui, -apple-system, "Segoe UI", Roboto, "Noto Sans", Helvetica, Arial, sans-serif` — with Noto Sans Thai available for Thai text.

## Layout

The desktop page is 1,280px wide and 4,437px tall. The extractor recorded four horizontal bands: the black promo strip (0–52px, a carousel), the blue header (52–117px, content from x=127 to x=1,192), the white main body (117–3,931px, content from x=44 to x=1,262) and the near-black footer (3,931px down, 544px tall). The widest card grid measured four card columns in the DOM; the capture shows rows of five product tiles in the deals carousel and the 10.10 grid.

Spacing is tight. The most frequent paddings are 6px, 9px, 22px, 7.35px and 3px, and the spacing scale in the frontmatter (2px to 10px) lists the small values the extractor kept. Product cards have no visible frame — image, price line, sold counter and rating sit directly on white with only a few pixels between them, which gives the grid its packed, catalogue feel. No visible header navigation links were counted by the extractor (`headerLinksVisible: 0`); the header items are icon-and-label entries next to the search field.

## Elevation & Depth

The page is flat. Only two box-shadows were measured: `rgba(0, 0, 0, 0.1) 0px 4px 7px 0px` (two elements) and `rgba(0, 0, 0, 0.1) 0px 0px 12px 0px` (one element). The small floating side widget on the right edge of the capture is one of these. Depth otherwise comes from color blocks — the black strip, the blue header, the green trust bar and the dark footer — and from translucent overlays (`#00000008`, `#00000099`) laid over images.

## Shapes

Radii are small and many. Measured values: 3px (20 elements), 4px (21), 8px, 16px, 17px, 20px, 22px (5), 25px (the footer app badges) and a computed pill `1e+07px` on 22 elements, written here as `pill: 9999px`. Half-rounded corners also occur (`4px 4px 0 0`, `8px 8px 0 0`, `0 0 8px 8px`) and 50% circles on round controls such as the carousel arrows. The measured "See more" element itself computes `0px`; in the capture the orange shape around the label reads fully rounded, and the pill radius is present elsewhere on the page — the exact element carrying it was not isolated, so the component token keeps the measured 0px.

## Components

- **Primary button** — orange `#fb7701` fill, white 16px/600 label, 52px tall, `0 19px` padding, 220px wide on desktop. Only one was found on the page: "See more" under the product grid.
- **App badge** — outlined App Store and Google Play links in the footer: `1px solid #bbbbbb` outline, `#aaaaaa` text at 22px/400, 25px radius, 50px tall.
- **Trust bar link** — a full-width white 14px/500 link on the green bar, padding `0 12px 0 16px`, 38px tall, reading "Why choose Temu? Secure privacy, safe payments, delivery guarantee".
- **Search input** — 12px/500 text in `#222222`, 38px tall, 422px wide, inside the blue header with a dark circular search button at its right end.
- **Product card** — square product photo, then a line of tags (red 10.10 sale tag, green outlined "local" tag), a 13px/500 title, an orange price with a struck-through reference price and "sold N" count, then star rating and review count. Some cards carry a small "Ad" (โฆษณา) label on the image.
- **Category pills** — outlined pills under the 10.10 heading with `#cdcdcd` hairlines; the first ("Recommended") is selected.
- **Footer** — `#1e1e1e` background, white 14px/700 column titles, `29px 0 0` top padding, followed by security-certification and payment-method logo rows.

## Design System Architecture

There is no public Temu design system, component library or brand-guideline site that this research could open: `https://www.temu.com/about-temu.html` returned an empty page to the fetcher. The shipped page exposes no CSS custom properties (`rootVars` is empty), and class names are build-hashed, so tokens are hard-coded per component in the compiled CSS. The de-facto system is the measured one above: one orange action color, a blue and green pair for the header and trust messaging, a grey text ramp (`#000000`, `#222222`, `#555555`, `#aaaaaa`, `#bbbbbb`), a system font stack led by `miui`, and a cloud of small radii. Rebuild it as plain CSS variables named after the roles in this file.

## Do's and Don'ts

**Do**
- Use `#fb7701` for prices, sale emphasis and the single primary action.
- Keep the canvas white and let product photos carry all imagery.
- Use the system font stack; set body copy at 13px and headings at 20px/800.
- Reserve `#0a8800` for trust and "local" messaging and `#1d86e6` for the header and deals banner.
- Keep cards frameless and spacing tight (3–9px inside cards).

**Don't**
- Don't load a decorative or serif brand font — Temu ships none.
- Don't use the orange for large backgrounds; it covers little area (11 area units) and works as an accent.
- Don't add heavy shadows; only two faint 10%-black shadows exist.
- Don't treat the footer's App Store badge styling as the secondary button for the storefront.

## Responsive Behavior

Only the desktop home page was measured. The 390px mobile pass was redirected to the sign-in page (`/login.html`), so mobile storefront layout is not measured. What the mobile pass did record belongs to that login screen: an `h1` "Sign in / Register" (ลงชื่อเข้าใช้ / ลงทะเบียน) at 20px/600/24px in the `miui` stack, and a full-width orange `#fb7701` "Continue" (ดำเนินการต่อ) button at 16px/600, 48px tall, 414px wide, with a measured 26px radius. Mobile font sizes recorded on that screen were 13px, 14px, 12px, 22px, 16px, 20px and 15px. Breakpoints, navigation behavior and grid column counts of the mobile storefront: not measured.

## Iteration Guide

1. Start from white `#ffffff`, `#555555` body text and `#000000` section titles.
2. Add the black promo strip, then the `#1d86e6` header with the search field and orange logo tile.
3. Place the green `#0a8800` trust bar directly under the header.
4. Build product cards with 13px titles, orange prices, struck reference prices, sold counts and star ratings.
5. Lay out the grid in five tiles per row on 1,280px desktop as in the capture, separated by small gaps.
6. End with one orange 16px/600 "See more" button and the `#1e1e1e` footer.
7. Check every new value against `web/data/extracted/temu-g.json` before adding it.
