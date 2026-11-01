---
version: alpha
name: Singha Estate
category: "Thai Brands"
description: "Singha Estate (สิงห์ เอสเตท) corporate real-estate site: deep navy canvas #0f1f2e with a #153050 footer, white text, antique gold #be9a62 accent, the proprietary SinghaEstate typeface at 16px body and 30px uppercase headings with 0.5px tracking, and tiny 3px and 5px radii."
colors:
  canvas: "#0f1f2e"
  page-body: "#ffffff"
  ink: "#ffffff"
  primary: "#be9a62"
  surface-footer: "#153050"
  ink-dark: "#222222"
typography:
  display:
    fontFamily: SinghaEstate, sans-serif
    fontSize: 40px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: 0.5px
  display-mobile:
    fontFamily: CSPraJad, SinghaEstate
    fontSize: 34px
    fontWeight: 500
    lineHeight: 48px
    letterSpacing: 0.5px
  heading:
    fontFamily: SinghaEstate, sans-serif
    fontSize: 30px
    fontWeight: 500
    lineHeight: 42px
    letterSpacing: 0.5px
    textTransform: uppercase
  body:
    fontFamily: SinghaEstate, sans-serif
    fontSize: 16px
    fontWeight: 400
    lineHeight: 24px
    letterSpacing: 0.5px
rounded:
  xs: 3px
  sm: 5px
  pill: 9999px
spacing:
  s1: 1px
  s2: 5px
  s3: 6px
  s4: 8px
  s5: 10px
  s6: 12px
  s7: 15px
  s8: 16px
  s9: 20px
  s10: 30px
components:
  link:
    textColor: "{colors.page-body}"
    typography: "{typography.display}"
  nav:
    textColor: "{colors.page-body}"
  nav-link:
    textColor: "{colors.page-body}"
    typography: "{typography.body}"
  footer:
    backgroundColor: "{colors.surface-footer}"
    textColor: "{colors.page-body}"
    padding: 80px 0px 60px
---

## Overview

Singha Estate is the Thai real-estate developer and investment company measured at singhaestate.co.th/en. The page title is "SINGHA ESTATE สิงห์ เอสเตท | Entrusted & Value Enricher". The measured h1 is "ENTRUSTED & VALUE ENRICHER" with a Thai tagline beneath it ("มุ่งมั่นสร้างคุณค่าและการเติบโตอย่างยั่งยืน"). The site is a dark, cinematic corporate presentation: a full-bleed hero slideshow of towers, marina and industrial-estate aerials, then a dark navy section introducing the company, then four business lines.

In the capture, the top bar holds a hamburger icon at the left, the gold twin-bolt logo with the wordmark SINGHA ESTATE in the centre, and an EN language selector at the right. A second row of uppercase links reads ABOUT US, OUR BUSINESS, SUSTAINABILITY, INVESTOR RELATION, NEWSROOM, S EXPERIENCE, CONTACT US. The hero cycles slides (the first is "ENTRUSTED & VALUE ENRICHER"; another in an earlier capture was "COMMERCIAL: TO ENRICHED THE FUSION OF WORK AND LIFE EXPERIENCES"), with a gold pill indicator and a down arrow. Below it, the company statement says the company "aims to create a variety of businesses and develop projects with services to create a memorable experience as well as enhance the quality of life", under the concept of "SUSTAINABLE DIVERSITY", followed by four image tiles: RESIDENTIAL, HOSPITALITY, COMMERCIAL, INDUSTRIAL ESTATE & INFRASTRUCTURE, each with a thin line icon and a short gold underline.

The tone is formal, bilingual (English and Thai), and aspirational. There are no sales buttons in the measured page: navigation is by large photographs and text links. A promotional modal for a private-banking partnership appeared in an earlier measurement and was excluded from this one; it is not brand UI.

## Colors

Measured backgrounds by area: #0f1f2e (weight 3072) and #153050 (904). Text by characters: #ffffff (3022), #222222 (439, for text on light fields), #be9a62 (9). The CSS corpus lists #ffffff (272), #153050 (131), #be9a62 (94), #000000 (75), #222222 (71), #b2935f (34) and #777777 (32), which confirms gold and navy as the intentional brand pair.

- **canvas #0f1f2e**: deep navy page background.
- **surface-footer #153050**: lighter navy, measured as the footer background.
- **ink / page-body #ffffff**: all primary text, set on navy.
- **primary #be9a62**: antique gold, matching the logo mark; used for the slide indicator and small underlines.
- **ink-dark #222222**: text on light-colored fields.

The root declares the Bootstrap variable set (for example --bs-primary #0d6efd, --bs-danger #dc3545). Those are framework defaults, not brand colors, and are excluded. A hover probe on the hero link recorded a Bootstrap-blue border (rgb(13, 110, 253) to rgb(10, 88, 202)) that is likewise the framework default and is not documented as brand.

## Typography

Fonts loaded: SinghaEstate at weights 300, 400, 500 and 600, and WorkSans 300. SinghaEstate carries 3421 characters and WorkSans 54. A Thai-capable display face named CSPraJad is first in the h1 font stack on mobile. SinghaEstate is the company's own face (no public download was found), so use a clean geometric sans with Thai support when it is unavailable.

Measured sizes by character count: 16px (1386), 14px (971), 30px (304), 18px (301), 24px (175), 20px (158), 40px (106), 12px (54). Weights are spread across 300 (1041), 500 (937), 400 (861), 200 (613) and 700 (23); light weights are common. Every size carries 0.5px letter spacing, which gives the dark pages their airy, spaced look.

- **display** 40px / 48px, weight 500: hero headline.
- **heading** 30px / 42px, weight 500, uppercase.
- **body** 16px / 24px, weight 400.
- **display-mobile** 34px / 48px, CSPraJad then SinghaEstate.

## Layout

The desktop viewport is 1280px with a 2400px document, and an inner scroller of 10966px for the slide-driven main area. The hero is 720px high and full width. Below it, copy is centred in a narrow column and the four business tiles sit in an even row with about equal widths.

Gaps measured: 5px (24), 20px (18), 10px (16), 30px (6), 8px (4), 40px (2), 15px (2). Paddings: 10px (36), 30px (10), 5px (10), 12px (6), 16px (3), 60px (2). The footer uses 80px 0px 60px of padding.

## Elevation & Depth

No box shadows or borders were measured. Depth is created by photography, by dark navy gradients over image slides and by the contrast between #0f1f2e and the lighter #153050 footer. A semi-transparent black scrim (#000000cc) appeared only behind the excluded modal and is not a design token.

## Shapes

Measured radii: 50% (4 uses, circular indicators and icons), 3px (3), 5px (1). Edges are essentially square; the property photographs are sharp-cornered rectangles. The pill token (9999px) is a generated convenience and was not measured on a visible control.

## Components

**Header.** Transparent over the hero: hamburger icon, centred logo, language selector with a chevron, and a nav row of 16px white uppercase-style links 150px wide and 45px high.

**Hero slider.** 720px full-width slides with a 40px centred headline, a Thai tagline, gold pill and dot indicators and a down arrow.

**Business tile.** A photograph above a line icon and an uppercase label with a short gold rule.

**Footer.** #153050 background, white text, padding 80px 0px 60px.

**Links.** White text on navy; the measured hero link wraps the entire slide.

No button style was measured, so none is declared. The mega-menu opened over the page was hidden during measurement and is not documented.

## Design System Architecture

No public design-system or brand-guideline page was found; the site's pages show none. The shipped CSS uses Bootstrap 5 root variables (--bs-*) as a base, with brand overrides in the typeface (SinghaEstate), the gold and navy colors, and 0.5px tracking. The de-facto system is therefore Bootstrap with a branded skin. Tokens here come from computed styles in the measured extraction.

## Do's and Don'ts

- Do set text in white on #0f1f2e and keep gold #be9a62 for small accents.
- Do use 0.5px letter spacing on all text, including Thai.
- Do use light weights (200 to 300) for long copy and 500 for headings.
- Do let photography fill the hero edge to edge.
- Don't use Bootstrap blue (#0d6efd) anywhere; it is a framework default.
- Don't add rounded cards or shadows; the site is flat and square.
- Don't treat partner pop-ups or the black scrim as brand UI.

## Responsive Behavior

The mobile pass measured: h1 34px (CSPraJad, SinghaEstate) in a 330px-wide element, h2 28px, body 14px, nav 16px in a 390px-wide element. Mobile character-weighted sizes are 14px (1420), 28px (558), 16px (530), 20px (268), 12px (96), 34px (94). Breakpoints and menu collapse behavior were not measured.

## Iteration Guide

1. Start from #0f1f2e, white text, SinghaEstate (or a Thai-capable sans) at 16px / 24px with 0.5px tracking.
2. Use a full-bleed 720px hero with a 40px weight-500 headline.
3. Introduce business lines as four equal photo tiles with an icon, an uppercase label and a gold rule.
4. End with a #153050 footer, 80px top and 60px bottom padding.
5. Keep radii at 3px or 5px, or none.
6. Gate: node web/scripts/verify-designs.mjs --slug=singha-estate.

## Additional Measurement Notes

The re-measured page reports 431 visible elements, an English document language and a hero link that spans the full 1280px by 720px slide. The loaded font list contains four SinghaEstate weights (300, 400, 500, 600) and one WorkSans weight (300), so copy can move between very light and medium emphasis without synthesising weights. The spacing scale in the frontmatter runs from 1px to 30px and mirrors the gaps and paddings seen on the page: small 5px and 10px gaps between icon and label, 20px gaps between tiles, and 30px blocks around section copy. When extending the system, reuse these values instead of introducing new ones, and keep the navy canvas and gold accent pair as the only brand hues.
