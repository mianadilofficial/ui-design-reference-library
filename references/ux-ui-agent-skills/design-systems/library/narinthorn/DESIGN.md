---
version: alpha
name: Narinthorn Co.,Ltd.
category: "Thai Brands"
description: "Single-screen corporate entry page for Narinthorn Co.,Ltd., a Bangkok luxury residences, hotels and resorts developer: Arial 16px/32px text centred over a full-bleed bay photograph, link green #008000, crimson #8c191c tagline, white #ffffff title, every radius 0px."
colors:
  canvas: "#ffffff"
  ink: "#008000"
  primary: "#008000"
  accent-crimson: "#8c191c"
  ink-black: "#000000"
typography:
  display:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 32px
    fontWeight: 700
  subheading:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 18.72px
    fontWeight: 900
  body:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 16px
    fontWeight: 400
rounded:
  none: 0px
spacing:
  page-margin: 0px
  paragraph-block: 16px
  h1-block: 21.44px
  h3-block: 18.72px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

Narinthorn Co.,Ltd. presents itself at narinthorn.com with one screen and nothing else. The measured page is 1280px wide and 800px tall with a scroll height of 800px, so it never scrolls on the desktop viewport that was measured. Fourteen visible elements exist in total: a circular company seal, a title, an address, a tagline, an establishment year and a link to a sister site. There is no navigation, no footer, no form, no button, and no card. The page is closer to a digital letterhead than to a website.

The company describes itself in its own words as "Luxury residences, hotels & resorts, design management & construction", established in 1999 ("Est.1999"). Its address line reads "414 Siam Patumwan House, 31st Floor, Phayathai Road, Wang Mai, Pathumwan, Bangkok 10330", and that address is itself a link to siampatumwanhouse.co.th. The only other link is the text "www.iRETREAT.co", pointing at iretreat.co. Both come from the page's own HTML, which was opened and read.

The visual idea is a full-bleed photograph behind a centred stack. The photograph (the page's own `bg_nrt.jpg`) shows a pale cloudy sky over a bay with dark limestone karst islands and a sailing ship; it carries all of the colour and atmosphere. Over it sits the seal (`Logo-NRT.png`), a circular white roundel with a gold lotus-bud emblem and the company name in Thai and English around the ring. Everything else is plain system-font text. The brand therefore leans on place (the Andaman-style seascape) and on heritage (the founding year, the seal) rather than on an interface vocabulary.

Because the page is so small, this document describes only what exists. Where a topic would normally need a nav bar, a product grid or a form, there is nothing to measure and the sections below say so plainly.

## Colors

Four text colors were measured, ranked by characters set in them: `#008000` (102 characters), `#8c191c` (69), `#ffffff` (19) and `#000000` (8). No background color was measured by area, because the background is a photograph rather than a fill; the extraction's `backgroundColorsByArea` list is empty and the canvas value `#ffffff` is the page's resolved canvas.

- **Link green `#008000`** is the most-read color. The page's own stylesheet sets `a:link` to `green`, which computes to `rgb(0, 128, 0)`. It colours the address line and the iRETREAT link. It is the generated `ink` and `primary`; since the page has no button, the link color is the only action color.
- **Crimson `#8c191c`** is set inline on the tagline through a `font color` attribute. It is the single accent and appears only on the sentence describing the business.
- **White `#ffffff`** is the title color, inherited from `.hero-text { color: white }`. It is the only color that sits against the sky and sea at high contrast without a plate behind it.
- **Black `#000000`** colours only the "Est.1999" line.

Hover state was measured on both links: color changes from `rgb(0, 128, 0)` to `rgb(255, 0, 0)`, the border color follows, and an underline appears (`text-decoration: underline`). The stylesheet also declares visited as white and active as yellow; those two states were not measured by the extractor and are noted here only because they are written in the page's CSS.

There are no shadows, gradients or semi-transparent plates. Every text color is applied directly over the photograph, so legibility depends on where the type lands in the image. The measured contrast of green and crimson against the photograph was not computed and is not claimed.

## Typography

The page uses a single family, Arial, with the stack `Arial, Helvetica, sans-serif`, declared on `body, html`. No web font is loaded (`loadedFonts` is empty, and the CSS corpus lists no font faces), so the type is whatever Arial resolves to on the viewer's machine. If a different face is wanted for a reproduction, no proprietary typeface has been identified and none is claimed.

Three sizes were measured by character count:

| Role | Size | Weight | Color | Source element |
| --- | --- | --- | --- | --- |
| display | 32px | 700 | `#ffffff` | `h1` "NARINTHORN CO.,LTD." |
| subheading | 18.72px | 900 | `#8c191c` | `h3` tagline |
| body | 16px | 400 | `#008000` | `p` address and link text |

The 18.72px value is the browser default for an `h3`, not a size the designer chose; the page has no font-size rule at all. The same is true of the 32px `h1` and the 16px body. In other words the entire scale is the user agent's default heading scale, and the only authored typographic decisions are the family and the color. Letter spacing is `normal` and line height is `normal` throughout; text transform is `none`, with the title uppercase because it is typed that way in the HTML.

Weight 900 on the tagline is measured and is the computed value of the `strong` element inside the `h3`; Arial normally has no distinct 900 face, so the rendered result is the bold face. That is an observation of what the computed value is, not a claim about the rendering.

## Layout

The layout is one absolutely positioned block. The `.hero-text` container is placed at `top: 50%; left: 50%` and moved back by `transform: translate(-50%, -50%)`, with `text-align: center`. The photograph is a `div.bg` at 100% height, positioned `center` and sized `cover`, so it fills the viewport at any size. `body` and `html` have `height: 100%` and `margin: 0`.

Measured block widths on desktop are 640px for the title, tagline and address paragraph, and 578px for the address link inside it. The stack order, top to bottom, is: seal, title, address link, tagline, "Est.1999", iRETREAT link. The measured heights are 37px for the title, 44px for the tagline and 54px for the address paragraph; the link's own box is 35px high and the iRETREAT link 17px.

No grid, no columns, no container max-width rule and no spacing scale exist in the CSS, and the extraction recorded no gap or padding values (`gaps` and `paddings` are both empty). Vertical rhythm comes only from block margins and two `br` elements after the address, so the frontmatter `spacing` records the computed margins a recorded probe read on the live page (SOURCES.json `_probes`): `page-margin` 0px (the site's own `margin: 0` on `body, html`), `paragraph-block` 16px (every `p` computes `margin: 16px 0px`), `h1-block` 21.44px (the title computes `margin: 21.44px 0px`) and `h3-block` 18.72px (the tagline computes `margin: 18.72px 0px`). The site's stylesheet sets none of these three margins (only the `margin: 0` on `body, html`); they are the browser's built-in heading and paragraph margins, and they are what ships, so a rebuild must keep them rather than zero them with a reset. Every element has 0px padding.

## Elevation & Depth

There is no elevation system. No `box-shadow` was measured (the list is empty), no border colors were measured, and no element has a background plate. Depth in the composition is entirely photographic: pale haze at the top, a darker band of mountains at mid-height, and dark island silhouettes in the lower third. The text stack is flat on top of that image. The seal's white ring is part of the supplied logo image rather than a CSS surface.

## Shapes

Every measured border radius is empty, so every rendered element computes to `0px` radius. The frontmatter records this as `rounded: none: 0px`. The only round shape on the page is the circular seal, and that roundness is drawn inside the logo image, not produced by CSS. There are no pills, no chips, no outlined or filled containers.

## Components

The page has exactly one component type: the text link.

- **Link.** 16px Arial, weight 400, color `#008000`, no underline and no background in its resting state; on hover it turns `#ff0000` and underlines. Both links use the same style. The address link is a long multi-line block that wraps inside the 640px column, while the iRETREAT link is a single short line. Both open the target in the page's own markup: the address link has `target="_blank"`, the iRETREAT link does not.
- **Seal image.** A circular logo at the top of the stack, set as an `img` inside a paragraph, with a gold lotus-bud mark on white. Its pixel size was not measured and is not stated.
- **Headings.** An `h1` and an `h3` used as plain text styles as described under Typography.

There is no primary button, no form input, no navigation and no card (`ctaPrimary`, `nav`, `input` and `cards` are all null or empty in the extraction), so no `button` token is declared.

## Design System Architecture

No public design system, token package, brand guideline or style repository was found for Narinthorn on the page; the homepage links only to two company sites (siampatumwanhouse.co.th and iretreat.co) and neither link was followed for design guidance. The de-facto system is the page's inline stylesheet: seven rules covering `body, html`, `.bg`, `.hero-text` and the four link pseudo-classes. There are no CSS custom properties (`rootVars` is empty), no class naming scheme beyond `bg` and `hero-text`, and no build output. All color beyond the links is written as HTML attributes (`font color="#8c191c"` and `font color="#000000"`). Anyone extending the page should treat these as the entire token set rather than expecting a hidden one.

The generated tokens in this file were measured from the live page by the repository's extractor; the HTML itself was read directly to confirm the stylesheet and the link targets.

## Do's and Don'ts

Do:
- Keep the single centred stack over a full-bleed photograph, using the company seal first and the title second.
- Use Arial at 32px bold for the company name and 16px regular for supporting lines.
- Reserve crimson `#8c191c` for the one sentence that says what the company does.
- Keep links green `#008000` with a red `#ff0000` underlined hover.
- Keep every corner square, radius 0px.

Don't:
- Do not add shadows, plates or rounded containers; none are measured.
- Do not introduce a button style; the page has no button to copy.
- Do not treat the browser-default 18.72px heading size as a designed value when building a larger system; it is only what this page renders.
- Do not claim any typeface other than Arial for this page.

## Responsive Behavior

The extraction ran a mobile pass. On mobile the title is still 32px, 700 weight, white, but its box is 215px wide and 74px high (two lines instead of one, against 640px wide and 37px high on desktop). The body paragraph stays 16px at weight 400 in `#008000`, now 215px wide and 90px high. The mobile font sizes by character are 16px, 18.72px and 32px, the same three as desktop. The probe at 390px measured the same block margins as desktop (16px, 21.44px and 18.72px), so spacing does not change with width. Hover, breakpoints, touch targets and the behavior of the seal and background image at narrow widths were not measured. The page declares `<meta name="viewport" content="width=device-width, initial-scale=1">` in its own head.

## Iteration Guide

1. Start from the HTML: a `.bg` div with the photograph, then a `.hero-text` block centred with the translate technique.
2. Apply the frontmatter tokens as they are: title `display`, tagline `subheading`, everything else `body`.
3. Set links with `a:link` green, `a:hover` red underlined, mirroring the measured hover.
4. When adding any new page, measure it first with the extractor (for example `--slug=narinthorn--page --url=<url>`) instead of reusing these values, since this document covers one screen only.
5. If a real navigation, button or form is introduced later, add its tokens only from a new measurement so the radius, color and type values remain verifiable.
