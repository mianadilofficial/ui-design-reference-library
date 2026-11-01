---
version: alpha
name: "InternetThai"
category: "Thai Brands"
description: "InternetThai: Thai internet and hosting provider site with charcoal #333333 header and footer, grey #f3f3f3 service band, orange #e47b2a icons, Roboto and Kanit weight 400, 60px hero and 6px-radius service tiles with a soft grey shadow."
colors:
  canvas: "#ffffff"
  page-largest: "#f3f3f3"
  ink: "#666666"
  primary: "#e47b2a"
  surface-3: "#333333"
  ink-3: "#f1f1f1"
typography:
  display:
    fontFamily: Roboto, Kanit, sans-serif
    fontSize: 60px
    fontWeight: 400
    lineHeight: 72px
  heading:
    fontFamily: Roboto, Kanit, sans-serif
    fontSize: 32px
    fontWeight: 400
    lineHeight: 41.6px
  body:
    fontFamily: Roboto, Kanit, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Roboto, Kanit, sans-serif
    fontSize: 14px
    fontWeight: 400
    lineHeight: 21px
rounded:
  xs: 6px
spacing:
  s1: 15px
  s2: 20px
  s3: 40px
  s4: 70px
components:
  link:
    textColor: "{colors.surface-3}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.ink-3}"
  nav-link:
    textColor: "{colors.ink}"
    typography: "{typography.nav}"
    padding: 0px 15px
  card:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.surface-3}"
    rounded: "{rounded.xs}"
    padding: 20px
    boxShadow: rgb(236, 236, 236) 0px 3px 4px 0px
  footer:
    backgroundColor: "{colors.surface-3}"
    textColor: "{colors.ink}"
    padding: 20px 0px
---

# InternetThai

## Overview

InternetThai (https://www.internetthai.com/, page title "InternetThai") is the site of the Thai internet service and hosting provider queued as World Internetwork; the footer credits the operating company in Thai as World Internetwork Corporation and the copyright line reads "Copyright @ 2017 Internetthai.com All right reserved". The DESIGN.md is named after the measured site, InternetThai. The measured home page is a compact, template-style corporate page of 2412px scroll height at 1280px width. A dark charcoal header (#333333) carries an orange cloud-swoosh logo with the lowercase wordmark "Internetthai" and a right-aligned menu in Thai and English: the Thai word for services, "Check Domain", the Thai words for About us, Contact us, Log in and Register, and a "TH" language switch. Under it a full-width photograph of a blue-lit data-centre aisle carries the white h1 "Welcome to InternetThai" at 60px and the subtitle "High Speed Internet and Server". A white band titled "Why InternetThai ?" shows three orange line icons (Wi-Fi, cloud, globe) with Thai headings and one-line Thai descriptions for high-speed internet, cloud service and domain service. A pale grey band titled "Our Services" is a five-column grid of white tiles, each with an orange duotone icon and an English label: Web Hosting, Co-Location, Domain Name, Cloud Server, VPS, MPLS, Corporate Leased Line, Air Fiber, Cloud Streaming, Encoder Service, Phone on net, Indoor Installation, Outdoor Installation, Network Service, Server, Redirect Domain and Voice-Over-IP. A charcoal footer holds a large white logo, a "Contact Us" block (email, telephone, address, office hours) and a "Links" list (About, Contact, Policy) in orange.

## Colors

The palette is four values. `canvas` #ffffff. `page-largest` #f3f3f3 is the largest background area (weight 1104) and the "Our Services" band. `surface-3` #333333 (background weight 526) is the header and footer and also the colour of the dark headings (300 characters). `ink` #666666 is the most-read text (379 characters) and the body colour on white. `ink-3` #f1f1f1 is the light text on the dark header and hero (133 characters). `primary` #e47b2a is the orange of the logo, icons and footer links (18 text characters); no filled button exists on the page, so primary is an icon and link colour. No root variables were found, so there are no named colour variables to cite. No borders were measured (borderColors is empty).

## Typography

Roboto is the only measured family (830 characters), loaded at weight 400 only, with Kanit 400 loaded as the Thai-script companion in every stack ("Roboto, Kanit, sans-serif"). Tokens: `display` 60px / 72px (hero h1), `heading` 32px / 41.6px (section titles such as "Why InternetThai ?"), `body` 16px / 24px (621 characters), `nav` 14px / 21px. Other measured sizes: 15px (63 characters), 20px (61), 26px (32). All text is weight 400; hierarchy comes from size and colour alone. No letter-spacing was recorded and no text transform was measured.

## Layout

A centred single column of horizontal bands: header, full-width hero photograph, a white feature row of three columns, a grey tile grid of five columns, then the footer in three columns (logo, contact, links). Measured paddings: 20px (35 occurrences), 15px (25), 40px (13) and 70px (3), recorded as spacing tokens `s1` 15px, `s2` 20px, `s3` 40px and `s4` 70px. Navigation links carry 0px 15px padding. Tiles are separated by a small even gutter and rows are aligned on a strict grid, with the last row left-aligned and incomplete.

## Elevation & Depth

Tiles are lifted by a very soft shadow, rgb(236, 236, 236) 0px 3px 4px 0px (17 elements), a barely visible grey drop on a white tile over the #f3f3f3 band; one further element uses rgba(0, 0, 0, 0.1) 0px 3px 4px 0px. The hero relies on photographic depth and no overlay colour was measured.

## Shapes

One radius: 6px on 17 elements (the service tiles), `rounded.xs`. Everything else is square, including the header and footer bands. The icons are flat duotone orange illustrations with rounded line ends.

## Components

- Header navigation (`nav`, `nav-link`): charcoal #333333 background, #f1f1f1 labels at 14px with 21px line-height and 15px horizontal padding; on hover the measured link changes colour from rgb(241, 241, 241) to rgb(102, 102, 102).
- Service tile (`card`): white, 6px radius, 20px padding, soft grey shadow, an orange icon above a centred 14px label.
- Feature column: orange line icon, a 20px Thai heading, a smaller grey description line.
- Footer (`footer`): #333333 fill, 20px 0px padding, grey contact text, orange links.
- Primary button: none detected (ctaPrimary is null), so no `button` token is declared. "Check Domain" is a navigation link.

## Design System Architecture

No public design system or brand guideline was found: the measured page links to none. The de-facto system is a stock responsive template: Roboto plus Kanit, a single orange accent against neutral greys, a tile grid with one radius and one shadow, and icon artwork in one orange. No root CSS variables are declared. Source: https://www.internetthai.com/ and web/data/extracted/world-internetwork.json.

## Do's and Don'ts

- Do keep the page neutral (#ffffff, #f3f3f3, #333333) and reserve orange #e47b2a for icons and links.
- Do use Roboto with Kanit for Thai text, always weight 400.
- Do present services as equal tiles with 6px radius and a soft shadow.
- Do write section titles in 32px and the hero title in 60px.
- Don't add a second accent colour; none was measured.
- Don't add heavy shadows or gradients to tiles.
- Don't use bold weights; only 400 was loaded.

## Responsive Behavior

The 390px mobile pass recorded the h1 unchanged at 60px weight 400 with 72px line-height, the section-title size as 27.2px (measured on mobile in place of 32px), and sizes 16px (621 characters), 20px (61), 26px (32) and 60px (23). The mobile body paragraph is Thai text in #666666. Column counts, menu collapse and tile reflow on narrow screens were not measured.

## Iteration Guide

1. Build the header on #333333 with the orange logo and #f1f1f1 14px links.
2. Place a hero photograph with the 60px white h1 and a 20px subtitle.
3. Alternate white and #f3f3f3 bands with 32px centred section titles.
4. Fill the services band with five-per-row tiles, 6px radius, 20px padding and the 3px 4px soft shadow.
5. Close with the charcoal footer: logo, contact block, orange links.
6. Run `node web/scripts/verify-designs.mjs --slug=world-internetwork` after edits.
7. Copy voice is bilingual and informational: Thai descriptions under short Thai headings, English service names as tile labels, and a plain "Why InternetThai ?" question as the section opener. The hero subtitle states the offer in four words, "High Speed Internet and Server".
8. Page rhythm to follow: the three-column feature row sits between the hero and the tile band, each column centred with the icon above a 20px Thai heading and a single grey sentence. The tile band repeats the same orange icon language, so any new service needs an icon in the same flat orange style and a short English label of one to three words; long labels are truncated with an ellipsis in the measured grid ("Corporate Leased Line Fi...").
9. Footer content order is logo, then the contact block (email, telephone, address, office hours), then the links list, then a centred copyright line in grey on the charcoal ground.
10. Keep all copy short: every measured tile label, heading and description fits on one or two lines.
