---
version: alpha
name: Telenor Group
category: "Telecom"
description: "Telenor Group corporate home page: Telenor proprietary family with Telenor Bold 24px headings and 16px body, indigo #2d28cd links, deep navy #000f3c header and footer, white canvas, square corners, no shadows and photo-led three-column cards."
colors:
  canvas: "#ffffff"
  page-largest: "#e8fdff"
  ink: "#333333"
  primary: "#2d28cd"
  surface-2: "#000f3c"
  surface-3: "#fef3e7"
  ink-2: "#e6e6e6"
  ink-3: "#1a1a1a"
  ink-5: "#676767"
  hairline: "#0000003d"
typography:
  display:
    fontFamily: "\"Telenor Bold\", Helvetica, Arial, sans-serif"
    fontSize: 24px
    fontWeight: 400
    lineHeight: 32px
  display-mobile:
    fontFamily: "\"Telenor Bold\", Helvetica, Arial, sans-serif"
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  subheading:
    fontFamily: Telenor, Helvetica, Arial, sans-serif
    fontSize: 20px
    fontWeight: 400
    lineHeight: 28px
  body:
    fontFamily: Telenor, HelveticaNeue, "Segoe UI", Helvetica, Arial, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
  nav:
    fontFamily: Telenor, Helvetica, Arial, sans-serif
    fontSize: 18px
    fontWeight: 400
    lineHeight: 0px
rounded:
  xs: 100px
spacing:
  s1: 1px
  s2: 2px
  s3: 8px
  s4: 10px
  s5: 13px
  s6: 15px
  s7: 20px
  s8: 24px
  s9: 40px
  s10: 48px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.body}"
  nav:
    textColor: "{colors.canvas}"
    transform: matrix(1, 0, 0, 1, 0, 0)
  nav-link:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
  text-input:
    textColor: "{colors.canvas}"
    typography: "{typography.nav}"
    padding: 1px 2px
    height: 26px
  footer:
    backgroundColor: "{colors.surface-2}"
    textColor: "{colors.canvas}"
    padding: 96px 0px
---

# Telenor Group

## Overview
The measured site is the Telenor Group corporate home page (https://www.telenor.com/, title "Telenor Group - Telenor Group", document language attribute "no"). It is an investor, media and corporate-information site rather than a consumer shop, so there is no primary sales button. The capture opens on a full-width architectural photograph of the Telenor campus, followed by a "Latest News" row (two press-release items with small thumbnails and a "More news" link), a sticky navy bar (search at left, the cyan Telenor swoosh symbol centered, "Menu" at right, and a second row of text links: Who We Are, Investors, Media, Career, Insights, ESG), a three-column grid of feature cards (Quarterly report Q2 2026, Capital Markets Day 2025, Extracurriculars, Telenor Group Position on the European Commission's White Paper, Digital Security 2025, Our Brand), and a large "Financial Calendar" section with Upcoming / Previous tabs. Page height is 4761px at 1280px. The look is calm and editorial: white canvas, dark-grey text, a single indigo-blue link color, a deep navy for chrome, and photography of people, landscapes and abstract technology. Copy is institutional and factual, with dates in the form "PRESS RELEASE • 15 SEP, 2026".

## Colors
`canvas` is #ffffff and `ink` is #333333 (headings and body); `ink-3` #1a1a1a is the darkest text, `ink-5` #676767 is muted text (the inactive "Previous" tab and metadata) and `ink-2` #e6e6e6 is light grey. `primary` is #2d28cd, an indigo blue used for links such as "More news" and the active tab underline. `surface-2` #000f3c is the deep navy of the header bar and footer, with white (#ffffff) text on it. `page-largest` #e8fdff is a pale cyan tint and `surface-3` #fef3e7 a pale warm tint used for large background areas; `hairline` #0000003d (black at 24% alpha) is the divider color. The brand's own Our Brand page (https://www.telenor.com/who-we-are/our-brand/) says only that "The blue brand color has been expanded into a range of tones" and gives no hex values, so no hex is attributed to it.

## Typography
The proprietary family Telenor is loaded in three files (Telenor, Telenor Light, Telenor Bold) with Source Sans Pro also loaded. `display` is "Telenor Bold" at 24px / 32px (the "Latest News" heading; the file carries the bold weight, the CSS weight is 400); `display-mobile` is 20px / 28px; `subheading` is Telenor 20px / 28px at 400 (news item headlines such as "Telenor Group's results for the 3rd quarter 2026"); `body` is Telenor, HelveticaNeue, "Segoe UI", Helvetica, Arial, sans-serif at 16px / 24px; `nav` is 18px at 400 on the measured header controls. The large "Financial Calendar" title in the capture is set at a light weight in a larger size, which was not recorded as a role. Fallbacks are Helvetica and Arial. Telenor is proprietary; Source Sans Pro, which the page also loads, is the closest open face the site already ships.

## Layout
The page is a stack of full-bleed and contained bands. The hero image runs edge to edge below a 144px header block; text sections sit in a contained column with about 34px of left margin in the 960px-wide capture. Cards are in a three-column grid with a roughly 20px gutter, each with a wide 16:9-style image, a bold title and a short paragraph. The Financial Calendar is a table-like list with a date at left, a title, and a circular arrow button at right. Measured spacing steps: 1px, 2px, 8px, 10px, 13px, 15px, 20px, 24px, 40px and 48px; the footer has 96px vertical padding and is 829px tall.

## Elevation & Depth
No box shadows were measured at all (the shadow list is empty). Depth comes from photographic imagery and from the navy header and footer bands against the white canvas. The sticky header stays in place as a solid navy block rather than a shadowed bar.

## Shapes
The only measured radius is 100px, on one circular control (the arrow button beside a calendar row); every other element computes square corners. Images, cards and the navigation are rectangular. The "scroll to top" chevron at the right edge is a round white button with a blue chevron.

## Components
- **link**: #2d28cd, 16px / 24px Telenor, with a trailing chevron ("More news").
- **nav**: navy #000f3c bar with white 16px labels; the first row has Search, the Telenor symbol and Menu, the second row six text items (Who We Are, Investors, Media, Career, Insights, ESG).
- **nav-link**: white, 18px.
- **text-input**: the search field, white text on navy, 26px tall, 1px 2px padding.
- **Feature card**: image, bold 20px title, small paragraph; no border or shadow.
- **Tabs**: "Upcoming" in dark text with a 2px-style blue underline, "Previous" in grey.
- **footer**: #000f3c, white text, 96px 0px padding, columns such as Who We Are, Our Companies, Corporate Governance, Investors.
Because the page has no measured primary button, no `button-primary` component is declared.

## Design System Architecture
No public design system exists on the pages opened. The home page, opened with WebFetch, links no brand guidelines, design system or press kit; its Our Brand page (/who-we-are/our-brand/) discusses the logo's history (a 2006 logo "symbolized movement and change" and in 2016 the symbol was released from the logotypes) and a blue palette "expanded into a range of tones", but provides no downloads or values. The page publishes no root CSS variables (0 measured). The de-facto system is therefore the three Telenor font files, Source Sans Pro as a secondary face, one indigo link color and one navy chrome color.

## Do's and Don'ts
- Do use #2d28cd only for links and active states, and #000f3c for the header and footer chrome.
- Do keep corporate pages white with #333333 text and generous vertical space (96px in the footer).
- Do pair every card with a high-quality photograph and a bold title.
- Don't add shadows; none were measured.
- Don't round cards or images; only the arrow buttons are circular.
- Don't invent a primary button color for the corporate site; the measured action color is the link blue.

## Responsive Behavior
Measured at a 390px viewport: the h1 falls from 24px / 32px to 20px / 28px, and no primary button was found (the mobile call-to-action is null). The mobile pass recorded no layout, header-link or band data, so menu behavior is not measured, although the desktop header already shows a "Menu" button beside the Search control.

## Iteration Guide
1. Start with #ffffff, #333333, #2d28cd and a navy #000f3c header and footer.
2. Use Telenor (or Source Sans Pro) at 24px for section titles, 20px for card titles and 16px / 24px for body.
3. Build three-column image cards without borders or shadows.
4. Use tabs with a blue underline for lists such as the Financial Calendar.
5. Re-run `node web/scripts/verify-designs.mjs --slug=telenor` after each change.
6. Imagery: wide architectural and landscape photography, candid team photos and abstract light-streak technology images, each used as a card header.
7. Voice: factual, institutional headlines ("Telenor Group's results for the 3rd quarter 2026") with small uppercase labels for type and date.
8. News items: a small square thumbnail at left, a small uppercase eyebrow ("PRESS RELEASE • 15 SEP, 2026") and a 20px headline that wraps to two or three lines; a blue "More news" link with a chevron sits at the far right of the section title row.
9. Financial Calendar rows: the date range at left ("Oct. 28 - Oct. 28, 2026"), the event title next to it and a small circular arrow button at the far right, divided by thin hairline rules.
