---
version: alpha
name: PTT Retail Management (Jiffy operator site)
category: "Thai Brands"
description: "The corporate site of PTT Retail Management Company Limited (pttrm.com), the operator that publishes the Jiffy convenience-store promotions — a fixed-width white content panel on a deep navy page (#0e1b46), navy (#003371) tab buttons and footer, Lucida Grande at 11px to 13px, sky-blue (#0099ff) and pure blue (#0000ff) text links, and 4px corners."
colors:
  canvas: "#ffffff"
  page-body: "#0e1b46"
  ink: "#000000"
  primary: "#003371"
  surface-dark: "#222222"
  link-blue: "#0000ff"
  link-sky: "#0099ff"
  ink-grey: "#999999"
  ink-mid-grey: "#808080"
  ink-soft-grey: "#949494"
  text-input-text: "#aaaaaa"
typography:
  display:
    fontFamily: "\"lucida grande\", \"lucida grande\", sans-serif"
    fontSize: 13px
    fontWeight: 700
    lineHeight: 18px
  body:
    fontFamily: "\"lucida grande\", \"lucida grande\", sans-serif"
    fontSize: 11px
    fontWeight: 400
    lineHeight: 14.3px
  link:
    fontFamily: "\"lucida grande\", \"lucida grande\", sans-serif"
    fontSize: 13px
    fontWeight: 400
    lineHeight: 18px
  button-secondary:
    fontFamily: "\"lucida grande\", \"lucida grande\", sans-serif"
    fontSize: 12px
    fontWeight: 400
    lineHeight: 24px
  input:
    fontFamily: Arial
    fontSize: 13.3333px
    fontWeight: 400
rounded:
  xs: 4px
spacing:
  s1: 1px
  s2: 2px
  s3: 4px
  s4: 5px
  s5: 6px
  s6: 10px
  s7: 13px
  s8: 14px
  s9: 15px
  s10: 19px
components:
  button-secondary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button-secondary}"
    padding: 5px 19px
    height: 36px
    borderColor: "{colors.primary}"
  text-input:
    textColor: "{colors.text-input-text}"
    typography: "{typography.input}"
    padding: 1px 2px
    height: 17px
---

## Overview

The page measured for the Jiffy slug is https://www.pttrm.com/front/Home/Index.aspx, whose title is "PTT Retail Management Company Limited". It is the corporate site of the company that runs retail for the PTT service-station network, and the home page carries Jiffy content — the heading measured as the first-level heading is "โปรโมชั่น Jiffy ประจำเดือนตุลาคม" (Jiffy promotions for the month of October), with further entries for Jiffy Choice, Jiffy Kitchen and Jiffy product submissions or rental space in PTT Jiffy stations. It is not a consumer-brand site with its own Jiffy identity, so this document describes the operator's site, and the colours and type below belong to that site.

At capture time a black memorial tribute lightbox covered the upper part of the page (a monochrome portrait with a Thai tribute message from the company and its group, and a close control). It is time-limited content and a modal, not brand UI; the underlying page is described here.

Underneath it the page is a classic early-web portal. A fixed-width white panel is centred on a deep navy background with a subtle photographic gradient from dark grey at the top to bright blue. Inside the panel are three columns of rounded white boxes with blue title bars and small icons: a left rail with an "Other Link" tile that shows the OR logo, a wide centre box titled "Procurement" with bulleted blue links in Thai, and a right box for "Jiffy TVC & Radio" with links to videos ("Video PTTRM", "Video JIFFY", "Video Pearly Tea"). A small "แจ้งเบาะแสทุจริต" button (report a corruption tip) sits below the left rail. A navy footer holds the sitemap, followed by a white box with the company address and "Copyright 2012 PTT Retail Management Company Limited. All Right Reserved v 1.3.1".

The voice is formal, bilingual and administrative: Thai for procurement announcements, English for navigation (About us, Product & Services, News, Promotion, Co-Brand, CSR, Career, Procurement, Contact Us), and a compact Blue Plus membership line, "blueplus+PLUS Together มีความสุขไปด้วยกัน".

## Colors

- **Page body (#0e1b46)** is the deep navy background of the whole page, with a background photograph (a dark-to-blue gradient image) laid over it.
- **Canvas (#ffffff)** is the white content panel and the largest measured background area.
- **Ink (#000000)** is the dark text inside the white panel (headings such as the Jiffy promotion title and the bold list headings).
- **Primary navy (#003371)** is the fill of the navigation tabs (the measured "Home" button is white text on this navy with a 1px navy border) and the footer band, and it is the one brand-like colour in the interface.
- **Surface dark (#222222)** is the second-largest measured background area as a measured background area (1,024 area units).
- **Link blue (#0000ff)** is the second most-read text colour (311 measured characters) and is used on linked text inside the content boxes; **sky blue (#0099ff)** is a lighter measured text colour (46 characters).
- **Greys (#999999, #808080, #949494)** are measured text greys; **#aaaaaa** is the input text colour.

White text on navy dominates the footer (517 characters measured in white, the most-read colour). The default browser link colour (#0000ee) was also measured on bare anchors; it is a browser default and not a brand colour, so it is excluded from the tokens.

## Typography

One family is used throughout: **Lucida Grande** with a generic sans-serif fallback (the stack is written `"lucida grande", "lucida grande", sans-serif`), which was the only family measured (1,446 characters). Form inputs fall back to **Arial** at 13.3333px.

The scale is very small and flat, in keeping with the portal style: 13px for headings and links (headings at weight 700 with an 18px line height, links at weight 400), 11px for sitemap and body text (14.3px line height), 12px for the navigation tab labels (24px line height), 16px and 10px for occasional text. Hierarchy is made by weight and colour rather than size: bold black for the Jiffy promotion heading, blue for links and white on navy for navigation. Thai text sits in the same stack, so Thai script falls through to the system's Thai-capable font.

The extraction found no web-font files loaded, so the type is whatever the viewer's system provides.

Font substitutes: none needed beyond the generic sans-serif already named in the stack.

## Layout

The measured page is 1280px wide with a total scroll height of 2201px. Content sits in a fixed-width centred column (white panel) with page-colour margins either side, which is the typical layout of a table-and-box portal. Inside the panel, the left rail holds link tiles and the "report" button, the centre column holds announcements and procurement lists, and the right column holds media links. Each box has a title bar (blue gradient with a small icon and white label), rounded white content area and a thin grey outline.

The footer is a full-width navy band inside the panel with multi-column sitemap links in 11px white text; the columns are headed About Us, Product & Services, News, Promotion / CSR, Career Procurement / Contact Us and a final cluster that includes the PDPA privacy policy link. Beneath it a white box holds the address, phone number and e-mail. Spacing tokens are small (1px to 19px) and come from table-cell and box padding.

## Elevation & Depth

Depth comes from rounded outlines on the white boxes and the gradient background image. The lightbox at capture time is the only heavy layer: a dark rounded frame with a white inner border and a close icon at the lower right. The title bars of the content boxes use a gradient blue and a darker bottom edge to suggest a raised header. Otherwise the page is flat.

## Shapes

Shapes are modest. The only measured corner radius on the page is 4px (two elements), which is used for rounded boxes and small controls. Navigation tabs are square (radius 0px). The tip-off button and title bars have gently rounded ends. Icons are small colourful glyphs (a share symbol on "Other Link", a play icon on the media box) rather than a unified icon set.

## Components

**Navigation tab.** White 12px text on #003371 navy with a 1px navy border, 5px 19px padding and 36px height, square corners. The measured example is "Home".

**Content box.** White panel with a blue gradient title bar, a small icon and white title text, rounded outline, and body text at 11px to 13px.

**Link list.** Bulleted list of blue links, 13px, with a small "View all" link at the bottom right of the box.

**Search or text input.** 13.3333px Arial, #aaaaaa text, 17px tall, 1px 2px padding, no radius.

**Tip-off button.** Light blue rounded button with an icon and Thai label "แจ้งเบาะแสทุจริต".

**Sitemap footer.** Navy band with 11px white links in columns, followed by a white address box with grey centred text.

**Tribute lightbox.** A modal with a close control — excluded from the design tokens.

## Design System Architecture

No public design system, brand guideline or token package for PTT Retail Management or Jiffy was found among the pages I opened (https://www.pttrm.com/front/Home/Index.aspx; the fetch describes only the navigation, footer and Jiffy references). The page address ends in .aspx and the body background image is served from an App_Themes/Default/images folder; no root CSS variables were measured, so there are no named tokens.

The de-facto system is therefore the measured computed styles: one font stack, a navy (#003371) and white palette on a dark navy page (#0e1b46), blue link colours, a 4px radius, and box-and-title-bar panels. The footer states "v 1.3.1", which is the site's own version note. Class naming was not examined, so no convention is claimed.

## Do's and Don'ts

Do keep the portal structure: white fixed-width panel on a dark navy page, rounded boxes with blue title bars, and a navy sitemap footer. Do use Lucida Grande at 11px to 13px with bold only for headings. Do use #003371 for navigation tabs and the footer and #0000ff for in-content links. Do keep corners square on tabs and use 4px only where rounding is needed. Do present Thai and English text side by side as the site does.

Don't use the browser default link colour (#0000ee) as a brand colour. Don't show the memorial tribute lightbox as a brand pattern; it is a modal for a specific occasion. Don't add large radii, strong shadows or modern gradients to the boxes. Don't introduce a display typeface; the site has none. Don't assume a Jiffy-specific palette from this page: Jiffy appears only as content and promotion material.

## Responsive Behavior

The extractor measured the page at 1280px and at 390px. The measured first-level heading is 13px at both widths and body text is 11px at both, so type does not scale with viewport on this site. The layout is a fixed-width centred panel; the narrow-viewport arrangement of the three columns and the navigation was not captured, so no reflow behaviour is claimed.

Because inputs are 17px tall and tabs are 36px tall, touch targets on small screens are small on this site; a reproduction should keep the visual style but size controls for touch.

## Iteration Guide

1. Set the page background to #0e1b46 and centre a white (#ffffff) panel.
2. Use Lucida Grande (generic sans-serif fallback) at 13px/700 for headings, 13px/400 for links and 11px/400 for body.
3. Build navigation as square tabs: #003371 fill, white 12px label, 5px 19px padding, 36px high.
4. Build content as rounded boxes with a blue title bar and bulleted blue (#0000ff) links.
5. Finish with a #003371 sitemap footer in 11px white text and a white address box.
6. Use 4px as the only radius.
7. Keep modals (tribute or cookie) out of the token set.
8. Re-check values against web/data/extracted/jiffy.json before changes.
