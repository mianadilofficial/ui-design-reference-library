---
version: alpha
name: Eventpop
category: "Thai Brands"
description: "Eventpop (Thai event ticketing platform) design system: proprietary Eventpop typeface with 28px bold headings, white canvas, deep violet #260176 login button with 3px radius, red #ee3124 date lines and poster-led rows."
colors:
  canvas: "#ffffff"
  ink: "#000106"
  primary: "#260176"
  on-primary: "#ffffff"
  ink-muted: "#b4b4b4"
  accent-date-red: "#ee3124"
  primary-hover: "#2e018f"
  text-input-border: "#eaeaea"
typography:
  display:
    fontFamily: Eventpop, system-ui, -apple-system, san-serif
    fontSize: 28px
    fontWeight: 700
    lineHeight: 42px
  body:
    fontFamily: Eventpop, system-ui, -apple-system, san-serif
    fontSize: 13.92px
    fontWeight: 400
    lineHeight: 20.88px
  button:
    fontFamily: Eventpop, system-ui, -apple-system, san-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Eventpop, system-ui, -apple-system, san-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 24px
rounded:
  xs: 3px
  sm: 4px
  pill: 9999px
spacing:
  s1: 3px
  s2: 4px
  s3: 5px
  s4: 5.6px
  s5: 6px
  s6: 12px
  s7: 14px
  s8: 16px
  s9: 18px
  s10: 22.5px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px 24px
    height: 38px
    borderColor: "{colors.primary}"
  button-primary-hover:
    backgroundColor: "{colors.primary-hover}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 22.5px 12px
  text-input:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
    typography: "{typography.button}"
    rounded: "{rounded.xs}"
    padding: 6px 12px 6px 44px
    height: 38px
    borderColor: "{colors.text-input-border}"
  footer:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink}"
---

# Eventpop

## Overview
Eventpop is a Thai event-ticketing and event-management platform; the page title is "Eventpop แพลตฟอร์มครบวงจรสำหรับจัดการอีเวนต์และจำหน่ายบัตร". The home page is a marketplace, not a brochure: a white header with the lowercase blue-violet "eventpop" wordmark, a search field, an "Organizer" dropdown, a ไทย / English switch and a deep violet "Log In / Sign Up" button; below it a full-width hero carousel of event key art (the capture shows a "TICKET BUNDLE" concert banner with fireworks), wide promotional banners, then rows titled "Popular Events" and "Upcoming Events", each a strip of six vertical posters with a red date line, a bold title and a grey venue line. The visual identity of the page is mostly the organizers' own poster artwork; the interface around it is plain white, dark ink and one violet accent, so the posters supply all the color and saturation. Voice is practical: dates, venues, "Buy ticket at eventpop.me", "View All".

## Colors
The brand color is deep violet `#260176` (also the site's `--brand-primary`, `--s-evp-bg-brand` and `--p-brand-600`), used on the login button (hover `#2e018f`), the "View All" links and the logo. The official brand-resource page (opened at https://www.eventpop.me/brand-resource) calls the primary colors "Eventpop's Blue" and asks organizers to place the badge and logo on white or light backgrounds, with black or white variants for other backgrounds; it publishes no hex values. Canvas is white `#ffffff`; text is near-black `#000106` (1,595 characters), muted grey `#b4b4b4` for venues and placeholders (984 characters), and red `#ee3124` for the date line above each event (498 characters; also `--brand-danger`). Input borders are `#eaeaea`. The root variables carry a full scale: `--p-brand-50` `#e6e6ff` to `--p-brand-950` `#100032`, `--brand-primary-medium` `#7435fd`, `--brand-info` `#5673b8`, `--brand-success` `#2e953e`, `--brand-warning` `#f9c606`, `--brand-line` `#06c755` (LINE green) and a violet ramp (`--p-violet-700` `#452c7c`).

## Typography
One proprietary family, "Eventpop" (regular 400 and bold 700), with system-ui and -apple-system fallbacks; it covers all 3,463 measured characters. Section headings ("Popular Events", "Upcoming Events") are 28px weight 700 with 42px line-height. Body text is 13.92px weight 400 with 20.88px line-height; buttons are 16px weight 400 with 24px line-height; navigation is 18px weight 400. Most characters are set at 16px (1,307) or 14px (1,247), with 13px for the date lines and 12px for small captions. Weights split nearly evenly between 400 (1,914 characters) and 700 (1,549), so cards read as bold titles over regular meta text. Thai and Latin both render in the same family. Because Eventpop is proprietary, Noto Sans Thai or Kanit would be needed elsewhere. Font Awesome 5 Pro supplies the icons (pin, search, chevrons).

## Layout
The desktop capture is 1,280px wide and 5,245px tall. A single content column sits inside equal side gutters; the hero carousel, banners and poster rows share the same left and right edges. Poster rows show six cards across, each card a portrait poster image followed by three text lines; the "View All" link sits at the right end of the heading row. Wide leaderboard banners are stacked with consistent vertical spacing between rows. Measured paddings are 12px (most common), 5px, 22.5px, 24px and 4px.

The brand-resource page itself is organized as a short document with anchor sections (Eventpop Badge, Logo Usage, Event Cover & Poster, Partnership) under the question "What is Brand Resource?", which it answers as a design kit of logo, templates and general rules for using Eventpop brand assets, meant to make organizers' work easier. It explains that badges are tags organizers can place on a poster so that audiences know they must register or buy a ticket through Eventpop, and it splits them into Ticket Badge (concerts, festivals, fairs), Register Badge (seminars, marathons) and Merchandise Badge (artist goods, souvenirs). It asks users to keep the proportion and scale of the supplied templates. This shows the brand governs how its mark appears on third-party posters more than how its own pages are styled.

## Elevation & Depth
Elevation is almost absent in the interface: the measured shadows are `rgba(0, 0, 0, 0.2) 0px 4px 20px 0px` on one element and a two-layer `rgba(0, 0, 0, 0.2) 0px 4px 6px 0px, rgba(0, 0, 0, 0.19) 5px 5px 10px 0px` on the cookie consent box, which is a consent popup and therefore not documented as a component. Posters rely on their own artwork for depth. The carousel arrows and dots overlay the hero image.

Each event card in the capture follows the same three-line pattern: a red date and time line (for example a weekday, day, month and time range), a bold two-line title, and a grey venue line with a small pin icon.

## Shapes
The radius scale is tiny: 3px on the login button and search input, 4px on most image and text containers (38 uses), and 50% for circular avatars and icons. There are no pill buttons in the measured interface even though the root variables define `--p-radius-full` 999px, `--p-radius-sm` 4px, `--p-radius-md` 8px and `--p-radius-lg` 12px.

## Components
**button-primary**: violet `#260176` fill and border, white text, Eventpop 16px weight 400, radius 3px, padding 6px 24px, height 38px ("Log In / Sign Up", 176px wide); hover fill `#2e018f`.
**nav-link**: 18px weight 400 in `#000106`, padding 22.5px 12px ("Organizer", "English").
**text-input**: white, `#000106` text, 3px radius, padding 6px 12px 6px 44px (space for a leading search icon), height 38px, border `#eaeaea`.
**footer**: white with `#000106` text.
Event posters, hero banners and organizer logos are third-party artwork supplied by organizers and are not brand tokens.

## Design System Architecture
Eventpop publishes a brand resource page (https://www.eventpop.me/brand-resource) with four parts: Eventpop Badge (ticket, register and merchandise variations, .eps/.png), Logo Usage (.ai/.png), Event Cover & Poster (poster template grid) and Partnership. It contains rules and downloadable assets rather than tokens. In the product CSS the system is tokenized: `--p-*` primitives (`--p-brand-*`, `--p-violet-*`, `--p-radius-*`, `--p-spacing-*`, `--p-opacity-black-50` `#00010680`), `--brand-*` semantics (primary, danger, success, warning, info, line), `--s-evp-*` surface/text/border roles and `--evp-btn--*` button variables (`--evp-btn--default-bg` `#000106`, `--evp-btn--outline-border-color` `#000106`, `--evp-btn--disabled-bg` `#eaeaea`). Around 349 root variables were measured.

## Do's and Don'ts
- Do keep the interface white and neutral so organizer posters carry the color.
- Do use violet `#260176` for the one main action and `#ee3124` for date lines.
- Do place the logo and badge on white or light backgrounds, per the brand-resource page.
- Do keep corners at 3 to 4px.
- Don't use heavy shadows or gradients in the interface chrome.
- Don't restyle posters or crop organizer artwork beyond the template grid.
- Don't present the cookie consent box as a card style.

## Responsive Behavior
At the 390px mobile pass the "Popular Events" heading stays 28px weight 700 with 42px line-height, in a 366px block. Mobile font sizes by character count: 14px (1,465), 16px (1,131), 13px (498), 13.92px (208), 12px, 28px. The mobile navigation element holds a "Toggle navigation" control and the EN switch; its breakpoint width and collapse behavior were not measured.

## Iteration Guide
1. Use canvas `#ffffff`, ink `#000106`, primary `#260176`, muted `#b4b4b4`, date red `#ee3124`.
2. Build rows of portrait posters with a red date line, a 16px bold title and a grey venue line.
3. Keep the header minimal: wordmark, search, organizer menu, language switch, violet login button.
4. Use 3px buttons and 4px containers.
5. Set Thai and Latin in the Eventpop family at 13.92px/20.88px for body.
6. Re-run the gate after changes.
