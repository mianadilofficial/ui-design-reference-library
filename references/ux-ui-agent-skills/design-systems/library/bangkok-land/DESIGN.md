---
version: alpha
name: Bangkok Land
category: "Thai Brands"
description: "Bangkok Land Public Company Limited (bangkokland.co.th, measured at /th/): Sukhumvitreg Thai type at 38px headings with 0.8px tracking and 18px body, navy #192346 buttons and footer with white text, #0d1b42 headings, a #cabb9a sand hover accent, pale #f9f9f9 and #f3f3f3 bands, 10px-radius buttons and soft 4px 10px shadows on cards."
colors:
  canvas: "#ffffff"
  page-largest: "#f9f9f9"
  ink: "#00000099"
  primary: "#192346"
  accent-sand: "#cabb9a"
  on-primary: "#ffffff"
  surface-grey: "#f3f3f3"
  ink-black: "#000000"
  accent-gold-text: "#8d723d"
  ink-nav: "#717171"
  ink-heading-navy: "#0d1b42"
  border-faint: "#00000020"
typography:
  display:
    fontFamily: Sukhumvitreg
    fontSize: 38px
    fontWeight: 400
    lineHeight: 36px
    letterSpacing: 0.8px
  body:
    fontFamily: Sukhumvitreg
    fontSize: 18px
    fontWeight: 400
    lineHeight: 34px
  button:
    fontFamily: Sukhumvitreg
    fontSize: 15.5px
    fontWeight: 400
    lineHeight: 46px
    letterSpacing: "-0.5px"
  nav:
    fontFamily: Sukhumvitreg
    fontSize: 28px
    fontWeight: 500
    lineHeight: 47.6px
  link:
    fontFamily: Sukhumvitreg
    fontSize: 20px
    fontWeight: 400
    lineHeight: 34px
rounded:
  xs: 4.13px
  sm: 10px
  md: 20px
  pill: 9999px
spacing:
  s1: 5px
  s2: 7px
  s3: 8.25px
  s4: 10px
  s5: 12px
  s6: 18px
  s7: 20px
  s8: 21px
  s9: 27px
  s10: 30px
components:
  button-primary:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
    typography: "{typography.button}"
    rounded: "{rounded.sm}"
    padding: 0px 35px
    height: 50px
  link:
    textColor: "{colors.ink-nav}"
    typography: "{typography.link}"
  nav:
    backgroundColor: "{colors.canvas}"
    textColor: "{colors.ink-nav}"
  nav-link:
    textColor: "{colors.ink-black}"
    typography: "{typography.nav}"
  card:
    textColor: "{colors.canvas}"
    borderColor: "{colors.border-faint}"
    boxShadow: rgba(0, 0, 0, 0.1) 0px 4px 10px 0px
  footer:
    backgroundColor: "{colors.primary}"
    textColor: "{colors.canvas}"
---
## Overview

Bangkok Land Public Company Limited is a Thai property developer behind Muang Thong Thani in Nonthaburi, and the measured page is its Thai-language home page, https://www.bangkokland.co.th/th/ (title "หน้าหลัก", home page). The page calls the company one of Thailand's leading real estate developers, offering residential projects, building management, exhibition centers and retail spaces. The capture shows a white header with a grey-and-white elephant crest "BANGKOK LAND PUBLIC COMPANY LIMITED" logo at the left, five navigation items (เกี่ยวกับเรา, นักลงทุนสัมพันธ์, มีเดีย, โปรเจค, ติดต่อเรา, several with dropdown chevrons) and a TH language label at the right. A wide aerial photograph of Muang Thong Thani with condominium towers and exhibition halls fades into a pale grey section titled "เกี่ยวกับบางกอกแลนด์" (about Bangkok Land) with centered paragraphs of copy.

Following that are a "โปรเจค" (projects) carousel of photographs with navy captions (for example "โมริ บางนา คอนโดมิเนียม", "โมริ วอล์ค", "สุพีเรียร์ คอนโดมิเนียม", "โครงการวิลล่า อัลเบอโร่"), a "นักลงทุน" (investors) row of seven icon tiles, and an image-and-text block about the Muang Thong Thani development. The page is 4410px tall at 1280px width. The tone is formal and corporate, built for investors and customers alike; a cream and taupe gradient sits behind the carousel and investor sections.

## Colors

Background areas: #f9f9f9 (1215), #f3f3f3 (1016), #192346 (677), #ffffff (188), #0656a5 (142), #131a36 (104), #f7f6f4 (83). Text colors: #00000099 (1028 characters), #000000 (579), #ffffff (531), #8d723d (112), #717171 (71), #0d1b42 (34).

- canvas #ffffff; page-largest #f9f9f9 (the page's light wash); surface-grey #f3f3f3 for the About band.
- ink #00000099: body text at 60 percent black; ink-black #000000 for navigation links in the measured nav-link component.
- primary #192346: a very dark navy, used for the "อ่านเพิ่มเติม" (read more) buttons and the footer; on-primary #ffffff.
- ink-heading-navy #0d1b42: the H1 color (the "เกี่ยวกับบางกอกแลนด์" heading).
- accent-sand #cabb9a: the color of nav links on hover (measured) and the site's own --bs-primary and --bs-info variable.
- accent-gold-text #8d723d: gold-brown text (112 characters).
- ink-nav #717171: navigation link color before hover.
- border-faint #00000020: card borders.
- #0656a5 (142 area) is the bright blue of the project caption bars in the carousel and #131a36 (104) a darker navy; both are measured and not tokenized.

A cookie banner (tm-cookie-banner) was hidden by the extractor and is not documented as brand UI. The Bootstrap variables that surround the brand overrides (--bs-success #00b572, --bs-danger #e54848, --bs-yellow #fa985a) are stylesheet values, not part of the page's visible palette.

## Typography

One font family, Sukhumvitreg, in normal and 500 weights. Sizes by characters: 18px (1719), 20px (261), 16.5px (221), 14px (73), 38px (34), 22px (32), 15.5px (13).

- display: 38px, weight 400, line-height 36px, letter-spacing 0.8px (the H1 and the section titles).
- body: 18px, weight 400, line-height 34px (long, airy line spacing for Thai paragraphs).
- button: 15.5px, weight 400, line-height 46px, letter-spacing -0.5px.
- nav: 28px, weight 500, line-height 47.6px (the measured nav-link run).
- link: 20px, weight 400, line-height 34px.

At the 390px mobile pass the H1 stays 38px with a 36px line-height and body text is 18px. Sukhumvitreg is a custom or licensed Thai face loaded by the site; a Thai-capable humanist sans is the substitute elsewhere.

## Layout

The layout is stacked and centered: header, hero photograph with a bottom fade, About section with centered paragraphs, a carousel of photographic project tiles with prev and next chevrons, an investor icon grid, and a two-column image and text block with a rounded-corner photograph. The root variables show a UIkit grid layer (--uk-breakpoint-m 960px, -l 1200px, -xl 1600px) over Bootstrap variables. Frequent paddings: 10px (30), 40px (29), 20px (14), 12px (11).

## Elevation & Depth

One shadow appears on ten elements: rgba(0, 0, 0, 0.1) 0px 4px 10px 0px, the soft shadow on the project tiles and investor icon cards, combined with a faint #00000020 border. Overall depth is gentle and light.

## Shapes

Radii measured: 4.125px (10 elements), 20px (4), 50% (3), 500px (3) and 10px (1). The tokens are xs 4.13px, sm 10px, md 20px and pill 9999px. The primary button uses 10px; the investor icon cards and the large photograph use the larger 20px; round and pill shapes cover icon controls.

## Components

- button-primary: "อ่านเพิ่มเติม", #192346 fill, white 15.5px text, 10px radius, padding 0px 35px, height 50px, with a 2px solid border.
- nav and nav-link: white header; nav links in #717171 that turn #cabb9a and underline on hover.
- card: bordered with #00000020 and shadowed with rgba(0, 0, 0, 0.1) 0px 4px 10px 0px (the investor tiles).
- Project tile: photograph with a blue caption bar (#0656a5) carrying white Thai text.
- footer: #192346 background with white text.

## Design System Architecture

No public design system or brand guideline link was found. The shipped CSS is a Bootstrap 5 variable layer (--bs-*) overridden by the brand (--bs-primary #cabb9a, --bs-font-sans-serif Sukhumvitreg) and a UIkit layer for grid and breakpoints (--uk-breakpoint-*). The 56 custom properties are the de-facto system; the visible brand colors are the navy #192346 and #0d1b42, the sand #cabb9a and the gold text #8d723d.

## Do's and Don'ts

- Do use dark navy #192346 for buttons and the footer, with white text.
- Do set Thai paragraphs at 18px with a 34px line-height.
- Do give cards a soft 4px 10px shadow with a faint border.
- Do use sand #cabb9a for hover.
- Don't use Bootstrap's default success, danger or yellow colors on the site.
- Don't present the cookie banner as a brand component.
- Don't use hard shadows; the measured shadow is a 10px blur at 10 percent black.

## Responsive Behavior

At the 390px mobile pass the H1 measured 38px with line-height 36px (the same as desktop) and body text 18px. The stylesheet declares UIkit breakpoints (960px, 1200px, 1600px); how the layout reflows at them was not measured.

## Iteration Guide

1. White and #f9f9f9 or #f3f3f3 bands, #00000099 body text, #192346 for buttons.
2. Headings 38px with 0.8px tracking in #0d1b42.
3. Buttons 50px tall with a 10px radius and 35px side padding.
4. Cards with 20px radius, #00000020 border and 4px 10px shadow.
5. Hover links in #cabb9a.
6. Run `node web/scripts/verify-designs.mjs --slug=bangkok-land` after edits.

## Content and Imagery

Imagery is drone and street-level photography of the company's own developments: towers, exhibition halls, malls, a skytrain-connected Muang Thong Thani. The investor section uses seven line-icon tiles with Thai labels: investor news, financial reports, 56-1 One Report, shareholders' meetings, shareholder structure, sustainability and corporate governance. The copy describes a self-contained "city center of lifestyle and economy", and the page mentions a 50-year company anniversary and an Indra elephant sculpture installed at the Impact Muang Thong Thani exhibition center in September 2023. Contact is +66(0) 2504-4949 with an address in Nonthaburi Province and links to Facebook and YouTube per the page.

The page keeps one headline per section, always centered and set in navy: "เกี่ยวกับบางกอกแลนด์", "โปรเจค" and "นักลงทุน". Under each headline the content type changes (paragraphs, photographic tiles, icon cards) while the vertical rhythm stays constant. The About copy is five centered lines of body text, and the closing block pairs a large rounded-corner aerial photograph of the Muang Thong Thani road and rail corridor with a column of left-aligned body text. Together with the cream-to-taupe gradient behind the tiles, the page reads as an annual-report style presentation more than a sales storefront.
