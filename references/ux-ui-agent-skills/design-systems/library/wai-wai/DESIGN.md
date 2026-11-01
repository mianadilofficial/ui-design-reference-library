---
version: alpha
name: Wai Wai (Thai Preserved Food Factory)
category: "Thai Brands"
description: "The Thai-language corporate site of Wai Wai (ไวไว), Thai Preserved Food Factory Company Limited — a warm greige canvas (#f0ebe9) holding white news cards, a deep green footer band (#3a5b4f) carrying product-pack tiles, Prompt at weights 300 and 400 for Thai text, Helvetica Neue for Latin links, and #337ab7 blue for every link."
colors:
  canvas: "#f0ebe9"
  page-largest: "#ffffff"
  ink: "#333333"
  primary: "#337ab7"
  surface-footer: "#3a5b4f"
  ink-black: "#000000"
typography:
  display:
    fontFamily: "Prompt, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
  display-mobile:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 600
    lineHeight: 20px
  body:
    fontFamily: "Prompt, sans-serif"
    fontSize: 14px
    fontWeight: 300
    lineHeight: 20px
  nav:
    fontFamily: "Prompt, sans-serif"
    fontSize: 12px
    fontWeight: 300
    lineHeight: 20px
  link:
    fontFamily: "\"Helvetica Neue\", Helvetica, Arial, sans-serif"
    fontSize: 14px
    fontWeight: 400
    lineHeight: 20px
rounded:
  xs: 4px
  sm: 6px
spacing:
  s1: 3px
  s2: 5px
  s3: 10px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-black}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
    padding: 0px 10px
  footer:
    backgroundColor: "{colors.surface-footer}"
  news-card:
    backgroundColor: "{colors.page-largest}"
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

This is the Thai-language home page of Wai Wai (ไวไว), served at waiwai.co.th/th. The page title is simply "ไวไว", and the header logo reads, in Thai and English, "Thai Preserved Food Factory Company Limited" next to the red-and-orange Wai Wai wordmark. The site is a corporate and news site rather than a shop: the navigation covers the company, certifications, management team, products, a food-menu (recipe) section, news and activities, careers ("ร่วมงานกับไวไว") and contact, with a dropdown for online shopping. The English site is reachable through a language dropdown that shows a Thai flag and "TH".

The design is plain, light and content-first. A warm greige canvas (#f0ebe9) holds a centred logo, a single-row navigation, a full-width hero slider, a three-column row of news cards, and a deep green footer band that shows the company's product packs as small tiles. There is no marketing copy on the home page; the information is the news feed itself ("ข่าวสาร & กิจกรรม", news and activities) and the products shown in the footer band.

At capture time the hero slot held a black memorial tribute slide, and the page also showed a small privacy-notice banner near the middle of the viewport. Both are time-limited overlays on the page, not brand identity: the brand look lives in the logo, the greige canvas, the green footer, the Prompt typography and the blue links. The extractor hides popups for measurement, so the measured values below come from the underlying page.

Voice is Thai, formal-friendly and factual: news headlines are written as plain sentences with quoted campaign names such as "WOW BUS", and the link text is short ("อ่านต่อ", read more; "ดูข่าวสารทั้งหมด", see all news).

## Colors

The palette is neutral with one functional colour.

- **Canvas (#f0ebe9)** is the page background, a warm off-white with a pink-beige cast. It is also the navigation background, so the header and the body merge into one surface.
- **Page-largest white (#ffffff)** is the largest measured surface and fills the news cards so that they lift off the greige canvas without needing shadows.
- **Ink (#333333)** is the standard text colour for dates, counters and card excerpts. **Black (#000000)** is the navigation text colour, so the menu reads stronger than the body copy.
- **Primary blue (#337ab7)** is the colour of every link on the page: card headlines, the "อ่านต่อ" read-more links, the "ดูข่าวสารทั้งหมด" link and the privacy-policy link. It is the most-read text colour by character count (401 measured characters, versus 347 for #333333 and 132 for black). Because the only interactive accent on the page is a link colour, there is no separate button colour on the home page.
- **Footer green (#3a5b4f)** is the background of the lower band. It frames six small product-pack tiles (yellow, red, blue, light blue, orange and white packs) so that the saturated pack colours are the only bright colour in the footer.

The logo itself is red and orange on white and is not part of the measured token set. The brand therefore reads as: neutral warm page, cool blue links, deep green base, and the product packaging providing the vivid colour.

## Typography

Two families are measured. **Prompt** (with a generic sans-serif fallback) is the Thai typeface used for navigation, body text and the first level of heading; it is set at weight 300 for body and navigation and 400 for the home link and slightly stronger labels. **Helvetica Neue** (with Helvetica, Arial and sans-serif) carries Latin link text and mixed Thai/Latin card content; by character count it is the dominant family on the page (729 characters against 153 for Prompt), because the card headlines and excerpts use it.

Sizes are small and uniform: 14px is the working size for body, links and the home link, 13px appears for card metadata, and the navigation is 12px at weight 300 with a 20px line height. The type scale is almost flat — there are no large display headings on the home page, and hierarchy comes from weight, colour (blue headlines against #333333 excerpts) and card structure. The section label "ข่าวสาร & กิจกรรม" is set in a bold weight (600) in the Helvetica stack.

Icons come from Material Icons (account and search glyphs in the header), FontAwesome (clock, eye and comment icons beside each news date and counter) and the slick carousel font (arrows). Line height is a consistent 20px for text at 14px and 12px.

Font substitutes: Prompt and Helvetica Neue are named in the site's own stacks with generic sans-serif fallbacks; use those fallbacks (Helvetica, Arial, sans-serif) if the faces are not available.

## Layout

The desktop capture is 1280px wide and the whole page is a short 1282px tall: header, hero, one row of news cards, footer. The header is two-tier: a thin utility strip at the right (account icon with "เข้าสู่ระบบ" login text, a flag-and-"TH" language dropdown, and a search icon), then a centred logo, then a centred single-line navigation with ten entries separated by 10px of horizontal padding. The navigation includes a chevron on the final item, "สั่งซื้อสินค้าออนไลน์" (order products online), indicating a dropdown.

The hero is a full-width slider that is edge to edge, with circular previous and next arrows at its edges. Beneath it sits a section header row with the section title at the left and the "see all" link at the right, aligned to a content column that is narrower than the hero. Three news cards follow in an equal three-column grid with small gutters; each card has a photograph filling the top, a blue headline, a row of meta (clock icon plus date, eye icon plus view count, comment icon plus comment count), an excerpt and a read-more link. Cards are not equal height: the card heights follow their text.

The footer band is full width with the product-pack tiles centred in a row under a small blue label. Spacing tokens measured here are 3px, 5px and 10px, which are the small paddings around navigation items and metadata; larger gaps come from section margins.

## Elevation & Depth

Depth is minimal. News cards are white rectangles on a greige page and are separated by contrast rather than strong shadows. The hero image has a dark, full-bleed treatment and the carousel arrows are translucent dark circles over it. There are no gradients and no layered glass effects in the measured page.

The only layered element in the viewport was the temporary privacy banner (a dark translucent bar over the middle row of news cards), which is a consent control and is not part of the system. The footer is distinguished from the body by colour (the green band) rather than by elevation.

## Shapes

The site is mostly square-cornered. Image crops and cards have sharp or lightly rounded corners; the corner radii found in the site's CSS are 4px (the most frequent) and 6px, which are recorded as the `xs` and `sm` radius tokens. No primary button exists on the home page, so no button radius is declared here. The language dropdown and icon controls are small, simple glyphs with no heavy outlines.

Photographs in the news cards are full-bleed to the card width at the top and cropped rather than framed. The logo is a wide horizontal lock-up in a red/orange rounded shape, followed by company text in two languages, and is centred above the navigation.

## Components

**Header utility strip.** Account icon plus "เข้าสู่ระบบ" (log in), a flag with "TH" and a small chevron, and a magnifier icon. Text is 12px, weight 300, black.

**Navigation.** Ten centred items in Prompt 12px weight 300, black on the canvas colour, each with 10px horizontal padding. Items: หน้าแรก (home), บริษัท (company), ใบรับรองมาตรฐาน (standards certificates), คณะผู้บริหาร (management), ผลิตภัณฑ์ (products), เมนูอาหาร (food menu), ข่าวสาร & กิจกรรม (news and activities), ร่วมงานกับไวไว (work with Wai Wai), ติดต่อเรา (contact us) and สั่งซื้อสินค้าออนไลน์ (order online, with chevron).

**Hero slider.** Full-width slide with arrows; the content in the slot is editorial rather than fixed.

**News card.** White background, #333333 text, a photograph, a blue headline link (14px), a metadata row with FontAwesome icons, an excerpt in body text and a blue "อ่านต่อ" link. These are content cards, not product cards.

**Section header.** Bold label at left, blue "ดูข่าวสารทั้งหมด" link at right.

**Footer.** Green (#3a5b4f) band with a small blue label and six product pack images in a centred row.

**Controls not documented as brand UI.** The privacy-notice bar with its green accept button and close icon is a consent popup; it is excluded from the tokens.

## Design System Architecture

No public design system, brand guideline or token package for Wai Wai was found among the pages I opened (the home page at https://www.waiwai.co.th/th; other paths I tried returned errors, listed in SOURCES.json). The home page footer credits the site vendor as "Powered by iGetWeb.com". The root element exposes no custom properties in the extraction, so there are no named tokens to cite; the values in the frontmatter are measured computed styles.

The de-facto system can be described from the shipped page: a small set of text styles (Prompt 14px/300 body, Prompt 12px/300 navigation, Helvetica Neue 14px/400 links), three surface colours (greige canvas, white card, green footer), one link colour (#337ab7), and a three-column card grid. Icon sets are Material Icons, FontAwesome and a slick carousel font. Class naming is not documented in the sources I opened, so no naming convention is claimed.

## Do's and Don'ts

Do use the greige canvas (#f0ebe9) with white cards for content, and let the footer green (#3a5b4f) carry the product packaging. Do use #337ab7 for every link and read-more affordance and black for navigation text. Do write headlines as plain Thai sentences, quote campaign names, and keep dates, views and comments in one metadata row with icons. Do keep type small and light: 14px at weight 300 for body.

Don't add a second accent colour for links or invent a button style that the page does not have. Don't put heavy shadows or large radii on news cards. Don't treat the memorial tribute slide, the privacy banner or its green accept button as brand elements; they are time-limited consent and tribute content. Don't use large display headlines: the home page has none. Don't mix more than the two measured type families.

## Responsive Behavior

The extractor measured the page at 1280px and at 390px. At 390px the first-level text stays at 14px and body stays at 14px, but the first-level style switches to Helvetica Neue at weight 600, so mobile headings gain weight rather than size. The desktop navigation is a single centred row of ten items; the narrow-layout navigation was not captured, so no pattern is claimed here.

The news grid is three columns on desktop; its narrow-layout arrangement was not captured. Type sizes are not scaled with viewport width on this site. The hero slider keeps edge-to-edge width.

## Iteration Guide

1. Set the page canvas to #f0ebe9 and the navigation background to the same colour; use #333333 as the default text colour and #000000 for navigation.
2. Use Prompt at 14px/300 (20px line height) for body and 12px/300 for navigation; use Helvetica Neue 14px/400 for links.
3. Colour every link #337ab7 and keep no other interactive accent.
4. Build content as white cards with a top photograph, a blue headline, a date/views/comments row and a read-more link.
5. Use a full-width green band (#3a5b4f) as the footer, with product-pack tiles centred in a row.
6. Use only the 4px or 6px radius where rounding is needed.
7. Exclude the privacy banner, tribute slide and cookie accept button when copying the look.
8. Re-check any new value against web/data/extracted/wai-wai.json before adding it.
