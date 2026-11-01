---
version: alpha
name: ICBC (Thai)
category: "Thai Brands"
description: "ICBC (Thai) public company site: a dense, legacy portal on a white canvas with Arial 12px text, #333333 body ink, ICBC red #bc0021 as the dominant stylesheet colour (red navigation bar, red login buttons), 3px and 30px radii, and bilingual Thai, English and Chinese navigation."
colors:
  canvas: "#ffffff"
  ink: "#333333"
  ink-muted: "#666666"
  primary: "#bc0021"
  on-primary: "#ffffff"
  surface: "#cccccc"
  ink-black: "#000000"
  accent-red-soft: "#e53333"
  accent-red-dark: "#cc0000"
typography:
  display:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 400
    lineHeight: 20px
  display-mobile:
    fontFamily: Arial
    fontSize: 12px
    fontWeight: 700
    lineHeight: 30px
  body:
    fontFamily: Arial, Helvetica, sans-serif
    fontSize: 12px
    fontWeight: 700
rounded:
  xs: 3px
  sm: 30px
spacing:
  s1: 4px
  s2: 7px
  s3: 12px
components:
  link:
    textColor: "{colors.ink}"
    typography: "{typography.body}"
---

## Overview

The ICBC (Thai) site at https://www.icbcthai.com/ is the Thai-licensed subsidiary of the Chinese bank (the header logo reads "ICBC" with the Chinese name and "(泰国)股份有限公司", and the page title is "ยินดีต้อนรับสู่ธนาคารไอซีบีซี (ไทย)"). It is a classic enterprise portal: small type, narrow centred column, grey page margins, a red horizontal navigation strip, a left sidebar of service panels and a right-hand content area with a promotional slider and boxed link lists. The measured page is 1280px wide and about 1,247px tall in the extraction, and the capture shows content packed densely with almost no air between modules.

The look is utilitarian and trust-signalling rather than expressive. Red carries the identity (navigation bar, the stylesheet colour #bc0021 appears 114 times in the CSS corpus, the most of any hue after black), white panels hold content, and light grey gradients give the panel headers a slightly embossed, early-2010s feel. Photography is small stock imagery on product boxes (coins, a banker figure, cards). Compliance badges (an anti-corruption "CAC" set and a "No Gift Policy" banner) and a mobile-banking QR code sit in the left column below the service panels.

A cookie consent bar covers the lower part of the capture; it is a consent control and is not documented here as brand UI.

## Colors

Values come from the live extraction (text colours by character count, and the stylesheet corpus).

- **canvas #ffffff** is the panel and body background measured on the page.
- **ink #333333** is the body text colour in the measured roles. **ink-muted #666666** is the most-read text colour (about 1,100 characters), used for list items and secondary copy.
- **primary #bc0021** is the ICBC red. It is not a measured text colour or CTA fill from the role detector; it is the most frequent non-neutral colour in the shipped CSS (114 uses) and matches the red navigation strip in the capture. It was chosen as primary instead of the generated value, which was the browser's default link colour #0000ee and is not a brand colour.
- **on-primary #ffffff** is the white text colour used on red (131 characters of white text measured, including the navigation labels).
- **accent-red-soft #e53333** and **accent-red-dark #cc0000** are measured text reds (22 and 7 characters respectively) used for emphasis in headings and notices.
- **surface #cccccc** is the one measured background-by-area value besides white, used on grey chrome.
- **ink-black #000000** is used for 89 characters of heavy text.

Other CSS-corpus hues include a warm brown #a86c2c and pale blues such as #c3daf9 and #5690d2 from legacy widgets; none of them appears in the measured text colours, so they are not promoted to tokens.

## Typography

The visible type system is a single sans: **Arial, Helvetica, sans-serif** at 12px, with 14px used for 54 characters, and weights 400 (about 1,200 characters) and 700 (about 330). The body role measures 12px / 400 / 20px line-height; link text measures 12px / 700. Thai text renders in the system fallback, because no web fonts are loaded (the font-face list is empty). The CSS also references Chinese system families (宋体/SimSun and 隶书) for Chinese-language fragments.

This is deliberately small, dense type. Section headers on panels (for example "Quick Links", "Rate & Fee") are bold at the same size as body text, with the hierarchy created by the grey gradient bar and the circular arrow icon rather than by scale. If you reproduce the look, keep Arial for Latin and a clean system Thai (such as Tahoma or Noto Sans Thai) for Thai strings.

## Layout

The page is a fixed centred column: grey page margins on both sides, a white content container, the logo and language links (简体中文, English, ภาษาไทย) top left and right, then the red navigation strip with seven items (Home, เกี่ยวกับเรา, ลูกค้านิติบุคคล, ลูกค้าบุคคล, e-Banking, RMB Clearing Bank, ร่วมงานกับเรา). Below it a narrow left sidebar (login buttons, Quick Links, Rate & Fee, customer service) sits next to a wide main area. The main area stacks a slider, a four-up row of product boxes (RMB currency services, deposits, bank cards, financial services), a two-column news and promotions list with dates, and a downloadable-forms list. A taupe footer band carries contact and sitemap links. Measured spacing is tiny: 4px, 7px and 12px.

## Elevation & Depth

Depth is created with gradients and borders, not shadows: no box-shadow values were found in the stylesheet corpus or the page. Panel headers use a light grey gradient and a thin outline, the login buttons are glossy red, black and gold with an inset look, and the slider arrows are thin outlined chevrons. The overall effect is a flat page with skeuomorphic buttons.

## Shapes

Measured radii are 3px (small controls) and 30px (pill-like buttons, 6 uses); the CSS corpus also lists 5px (8 uses) and 4px. Panels have gently rounded corners and the login buttons are visibly rounded rectangles. Product images are plain rectangles.

## Components

- **Red navigation strip**: full-width red bar with white bold labels and thin separators; the active state is not measured.
- **Login buttons**: three stacked glossy buttons for personal, corporate and urgent financial management; their fill colours were not isolated by the extractor, so only their roles are described.
- **Panel with grey header**: white body, grey header with a round arrow bullet and bold label, then lists of links preceded by small orange or red arrow bullets.
- **Slider**: banner image with red dot pagination and outlined arrow controls; the capture shows a branch closure notice.
- **Dated list**: title left, date right in muted grey, hairline row dividers.
- **Link**: #333333 text at 12px bold in the token set. The browser default link blue is visible for the financial consumer-protection link and is not a brand style.

## Design System Architecture

No public design system, brand guideline or token package was found on the pages opened. The page is assembled from legacy portal stylesheets (`/icbc/Style/Inject.css`, `/Portal_Resources/css/page/main.css`, `/ICBC/Style/icbc.css` and `/ICBC/Module/res/common2.css`, plus an older photo style sheet from a sister-site template). There are no CSS custom properties (zero root variables were measured), so values are hard-coded literals and the system is de-facto: one red, neutral greys, Arial 12px and a small set of radii.

## Do's and Don'ts

- Do anchor the identity on ICBC red #bc0021 with white text on red.
- Do keep Arial at 12px with bold for headings and links.
- Do keep modules boxed and dated lists aligned left and right.
- Do present Thai, English and Chinese language switches at top right.
- Don't use the browser default link blue #0000ee as a brand colour.
- Don't add heavy drop shadows; depth comes from gradients and borders.
- Don't treat the cookie bar as part of the visual system.
- Don't enlarge type until the density is lost; density is the signature.

## Responsive Behavior

Only the desktop layout is a designed state. The mobile extraction reports Arial 12px as well, and the fixed column and dense lists carry over. No separate mobile breakpoint, menu pattern or touch-target size was measured, so none is documented.

## Iteration Guide

1. Start with white panels on a grey page, Arial 12px, #333333 text and #666666 secondary text.
2. Use #bc0021 for the navigation strip and key action buttons, with white labels.
3. Keep radii to 3px for controls and 30px for pills.
4. Keep spacing to 4, 7 and 12px.
5. Preserve the bilingual navigation and the dated-list pattern.
6. Re-run the extractor if the homepage banner changes; the slider messages rotate but the system does not.
