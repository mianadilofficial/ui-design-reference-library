---
version: alpha
name: Berkshire Hathaway Inc.
category: "Banking & Insurance"
description: "Bare HTML 4.0 corporate home page for Berkshire Hathaway Inc.: white #ffffff page, navy #000080 text, purple #800080 underlined links, Times at 16px with 13px and 10px notes and a 32px bold masthead initial, two-column bullet list in a 90%-wide table, grey #808080 horizontal rules, zero radius, no shadows and no stylesheet."
colors:
  canvas: "#ffffff"
  ink: "#000080"
  primary: "#800080"
  link-visited: "#ff0000"
  hairline: "#808080"
typography:
  display:
    fontFamily: Times
    fontSize: 16px
    fontWeight: 400
  display-mobile:
    fontFamily: "\"Times New Roman\""
    fontSize: 16px
    fontWeight: 400
  masthead-initial:
    fontFamily: Times
    fontSize: 32px
    fontWeight: 700
  masthead:
    fontFamily: Times
    fontSize: 18px
    fontWeight: 700
  body:
    fontFamily: Times
    fontSize: 13px
    fontWeight: 400
  caption:
    fontFamily: Times
    fontSize: 10px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  s1: 1px
  s2: 40px
components:
  link:
    textColor: "{colors.primary}"
    typography: "{typography.display}"
    rounded: "{rounded.none}"
  link-visited:
    textColor: "{colors.link-visited}"
    typography: "{typography.display}"
  rule:
    borderColor: "{colors.hairline}"
---

## Overview

`https://www.berkshirehathaway.com/` is the official home page of Berkshire Hathaway Inc., and its design is the absence of a design: a single hand-written HTML 4.0 Transitional document of about 5.5 KB with no stylesheet, no web font, no script beyond an analytics tag, and one small image (the GEICO banner). The head contains only a title ("BERKSHIRE HATHAWAY INC."), a content-type meta tag and a generator tag naming MSHTML 8.00.6001.18828. Every visual decision is a presentational HTML attribute on `<body>` (`bgcolor="#ffffff"`, `text="#000080"`, `link="#800080"`, `vlink="#ff0000"`), a `<font size>` tag, a `<table>` or an `<hr>`.

The result is a document, not an interface. A centred masthead sets "BERKSHIRE HATHAWAY INC." in bold with oversized initial capitals, then the address (3555 Farnam Street, Omaha, NE 68131) and the words "Official Home Page". A horizontal rule separates it from a two-column table of bulleted links: A Message from Warren E. Buffett, Annual & Interim Reports, Link to SEC Filings, Warren Buffett's Letters to Berkshire Shareholders, Special Letters, Links to Berkshire Operating Companies, Corporate Governance, Sustainability, and in the right column the fraud notice, News Releases, Annual Meeting Information, Greg Abel's Letters, Charlie Munger's Letters to Wesco Shareholders, Berkshire Hathaway Energy Investor Presentations and Common Stock Information. Dated items carry a small "Updated ..." note beneath the link.

Below a second rule sits a centred GEICO advertisement (logo, a line in small capitals, a web address and a phone line), then a third rule and a notice that the corporate office cannot reply to comments, then a fourth rule, the "Legal Disclaimer" link and a copyright line "Copyright © 1977-2026 Berkshire Hathaway Inc.". The voice is plain, institutional and unhurried: noun phrases for link names, full sentences only in the notices. The capture of the page matches this source exactly: nothing is hidden behind scripts, and no pop-up, cookie banner or overlay appears.

## Colors

Four colors are present and all four are declared on the `<body>` tag in the page source; none comes from a browser default.

- **Canvas `#ffffff`** (`bgcolor`) is the page background.
- **Ink `#000080`** (`text`, navy) is the body text color, measured on 559 weighted characters; it colors the masthead, the "Updated" notes, the advertisement text and the copyright line.
- **Primary `#800080`** (`link`, purple) is the link color, measured on 661 weighted characters. The 15 list links, the GEICO logo and web address, and the Legal Disclaimer link use it, drawn with the underline links get by default.
- **Visited-link red `#ff0000`** (`vlink`) is declared in the page's body tag but is not visible in the capture because no link had been visited. It is recorded here from the page source (cited in SOURCES.json) rather than from a measurement.
- **Hairline `#808080`** is the border color of the four horizontal rules (measured on 4 borders).

These are the named HTML colors purple and navy written as hex, so the palette reads as a deliberate period choice and not an accident. The browser's own default link colors (`#0000ee` and `#551a8b`) are not used and must not be substituted. The page has no accent, no gradient and no tint: dark blue words on white, purple link text, grey rules.

## Typography

Text is set in `Times`, the generic serif the browser resolves because no `font-family` is specified; the desktop measurement reports `Times` and the 390px mobile pass reports `"Times New Roman"`. There is no `@font-face` and no loaded web font. Sizes come from the legacy `<font size>` scale, and the measured sizes map onto it exactly:

| Token | Size | Weight | Where |
|---|---|---|---|
| masthead-initial | 32px | 700 | the large B and H of the wordmark (`<font size="6">`) |
| masthead | 18px | 700 | the rest of the wordmark in capitals (`<font size="4">`) |
| display | 16px | 400 | link text and the default size |
| body | 13px | 400 | address, notices, copyright (`<font size="2">`) |
| caption | 10px | 400 | "Updated ..." dates (`<font size="1">`) |

By weighted characters the page is 16px (650), 13px (307), 10px (246), 18px (15) and 32px (2), with weight 400 on 1125 characters and 700 on 95; the HTML wraps the masthead block in `<b>`. The masthead imitates small capitals by pairing 32px initials with 18px capitals, which is why the "BERKSHIRE HATHAWAY" line has a book-title cadence. Line height and letter spacing are the browser's `normal`; text transform is `none`.

Font substitutes: none is needed or declared. Any system serif that resolves from the generic `Times` request reproduces the page; there is no proprietary face to replace.

## Layout

The body keeps the browser's 8px margins (the measured body box is 1264px wide on the 1280px viewport) and the page is 803px tall. The masthead is a centred paragraph. The link list is a `<table border="0" cellspacing="0" width="90%">` inside `<center>` with two equal cells (`width="50%"` each) per row; each cell holds a `<ul>` with one `<li>`, so the bullet and the 40px list indent are the browser's list defaults (40px padding measured on 15 elements). Cell heights are set with the HTML attribute `height`: 45 on 13 cells and 55 on 3 cells, which sets the vertical rhythm.

The measured gaps are 1px (padding on 32 elements) and 40px (padding on 15 elements), which are the `s1` and `s2` tokens. There is no container max-width, no grid and no media query: the table is 90% of the viewport and the text reflows only because it is ordinary inline content. Order on the page, top to bottom: masthead, rule, link table, rule, GEICO band, rule, comments notice, rule, legal link and copyright. Alignment is centred for masthead and advertisement, left for lists and notices.

## Elevation & Depth

None. No `box-shadow`, `filter`, `opacity` or `z-index` was measured and the page has no stylesheet that could declare one. Separation is made only by four full-width horizontal rules in `#808080` (the browser's default `<hr>` rendering, a thin grey inset line) and by white space. The only picture, the GEICO logo, is a 75 by 15 pixel GIF set by `width` and `height` attributes with `border="0"`.

## Shapes

Every element has a `border-radius` of `0px` (measured on the body, links and paragraphs), and the front matter records `rounded.none` as that value. No buttons, cards, chips or pills exist. The only shapes are the disc bullets at the start of list items, the table cells (invisible, `border="0"`) and the rules. Links are not boxed; they are underlined text, and the underline is the whole affordance.

## Components

**Link (`link`).** Purple `#800080` Times 16px, 400 weight, underlined, 0px radius; the same style applies to every list entry, to the GEICO web address and to "Legal Disclaimer". A visited link is declared red (`#ff0000`, token `link-visited`).

**List entry with note.** A bullet, one link, and for dated items a `<br>` and a 10px navy "Updated Month Day, Year" caption (for example "Updated August 8, 2026"). Items without dates have no caption.

**Masthead.** A centred bold wordmark with 32px initials and 18px capitals, then the address in bold at 13px and "Official Home Page" in bold at 16px.

**Rule (`rule`).** A full-width `<hr>`, 1px grey `#808080`, used four times to divide masthead, list, advertisement, notice and legal footer.

**Advertisement band.** A centred block: the GEICO logo image as a link, a one-sentence offer in 10px capitals and the address `WWW.GEICO.COM` as a purple link with a phone number. It is a third-party ad placed on the corporate page, so treat it as content, not as a Berkshire component.

**Footer.** A left-aligned "Legal Disclaimer" link and the copyright line, where the company name is bold. There is no navigation bar, search box, language switch or login on the page.

## Design System Architecture

Berkshire Hathaway publishes no public design system, brand guidelines or press kit, and the page links to none; the home page source opened at `https://www.berkshirehathaway.com/` contains no `<link rel="stylesheet">`, no `<style>` block and no CSS custom properties. The de-facto system is the set of presentational HTML attributes listed in Overview: body colors, `<font size="1|2|4|6">`, `<table width="90%">`, `<center>`, `<hr>` and `align="center"`.

Consequences for anyone reproducing it:
- Color and size are inherited from the document, not defined in a theme, so the exact values are `#ffffff`, `#000080`, `#800080` and `#ff0000`, and the sizes are 10, 13, 16, 18 and 32px.
- Structure is table-based; the two-column list is a real table, and the page does not use floats, flexbox or grid.
- Fonts are the browser's serif; there is nothing to load or license.
- The page is edited by hand, as shown by the generator tag and by markup quirks such as overlapping `<font>` and `<p>` elements; a faithful rebuild keeps the markup shape as well as the values.

## Do's and Don'ts

Do
- Keep the page to one weight family of serif text and let links be underlined purple on white.
- Use the 16px, 13px and 10px sizes for link, note and caption roles and reserve 32px and 18px bold for the wordmark only.
- Use four thin grey rules to separate sections and the 90%-wide two-column table for the link list.
- Write link text as plain nouns and show update dates in small type under the link.
- Keep the page free of scripts that change its layout, overlays and consent banners.

Don't
- Do not introduce a sans-serif, a web font, a brand accent color, shadows, rounded corners or buttons.
- Do not replace `#800080` with the browser default blue `#0000ee`, or `#000080` with black.
- Do not add navigation chrome, hero imagery, cards or icons; none exists on the measured page.
- Do not treat the GEICO advertisement as a Berkshire brand element.
- Do not make up responsive rules; the source declares none.

## Responsive Behavior

The source declares no media queries, no viewport meta tag and no stylesheet, so there are no declared breakpoints. The mobile pass at 390px measured: the first link (`A Message from Warren E. Buffett`) is 113px wide and 35px high, which shows it wraps to two lines; the comments notice is 374px wide and 64px high; and the font sizes are the same as on desktop, 16px, 13px, 10px, 18px and 32px by the same character counts. The measured family on mobile is `"Times New Roman"`.

How the two-column table, the masthead and the advertisement lay out at other widths is not measured; only the two viewports above were recorded and no mobile capture image exists for this slug.

## Iteration Guide

1. Start from `bgcolor="#ffffff"`, `text="#000080"`, `link="#800080"`, `vlink="#ff0000"` on the body and no stylesheet.
2. Set the masthead with `<b>`, a 32px initial and 18px capitals, the address at 13px and "Official Home Page" at 16px, all centred.
3. Add a `<hr>`, then a `width="90%"` table with `border="0"` and `cellspacing="0"` holding two 50% cells per row, each with a bulleted link at 16px; put a 10px "Updated ..." note under dated links.
4. Close with a rule, the third-party banner if any, a rule, the 13px comments notice, a rule, "Legal Disclaimer" and the copyright line.
5. Verify every value against `web/data/extracted/berkshire-hathaway.json` and the live source before adding a token; this page has so few that each new value is conspicuous.
